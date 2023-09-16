<?php

namespace App\Http\Controllers\User;

use App\Models\User\User;
use App\Models\User\OtpCode;
use Illuminate\Http\Request;
use \App\Models\User\AuthToken;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;


/**
 * @group Auth
 * 
 * Authentication and Registration
 * 
 * You can Login ny otp or by simple username and password
 * You can create user or regsiter by otp
 * You can get user info
 * Tou can logout
 */
class AuthController extends Controller
{
    /**
     * Post Send-OTP
     * 
     * @unauthenticated
     * 
     * @bodyParam username string required usally user phone is his/her username. Example: 09111111111
     */
    public function sendOtp(Request $request)
    {
        $this->validator($request, ["username"]);

        $code = OtpCode::sendCode($request->username, getRealIP($request));

        return $this->response(200);
    }

    /**
     * Post Login-OTP
     * 
     * @unauthenticated
     * 
     * @bodyParam username string required usally user phone is his/her username. Example: 09111111111
     * @bodyParam code string required code send by sms/email to user. Example: 1214
     */
    public function otpLogin(Request $request)
    {
        $this->validator($request, ["username", "code"]);

        $username = OtpCode::checkCode($request->username, $request->code, getRealIP($request));
        $user = User::otpLogin($username);

        Auth::login($user);
        $user = $this->getUserInfo(auth()->user());
        $token = AuthToken::setToken($request, auth()->user()->id);

        return $this->response(200, [
            "Authorization" => $token,
            "user" => $user
        ]);
    }

    /**
     * POST login
     * 
     * @unauthenticated
     * 
     * @bodyParam username string required usally user phone is his/her username. Example: 09111111111
     * @bodyParam password string required user password. Example: 123456
     */
    public function login(Request $request)
    {
        $this->validator($request, ["username", "password"]);

        $user = User::login($request->username, $request->password);
        Auth::login($user);
        $user = $this->getUserInfo(auth()->user());
        $token = AuthToken::setToken($request, auth()->user()->id);
        return $this->response(200, [
            "Authorization" => $token,
            "user" => $user
        ]);
    }

    /**
     * POST user
     * 
     * Shows current logged-in user info
     */
    public function user(Request $request)
    {
        $user = $this->getUserInfo(auth()->user());
        $data = [
            "user" => $user
        ];
        if (isset($request->getToken) && $request->getToken == true) {
            $checkToken = AuthToken::checkTokenTwoDay($request, $request->get("auth_token"));
            if (!isset($checkToken->id)) {
                $data["Authorization"] = AuthToken::setToken($request, auth()->user()->id);
            }
        }
        return $this->response(200, $data);
    }

    /**
     * POST refresh-token
     * 
     * Get new token
     */
    public function refresh(Request $request)
    {
        $user = $this->getUserInfo(auth()->user());
        AuthToken::expirToken($request->get("auth_token"), auth()->user()->id);
        $token = AuthToken::setToken($request, auth()->user()->id);
        return $this->response(200, [
            "Authorization" => $token,
            "user" => $user
        ]);
    }

    /**
     * POST logout
     */
    public function logout(Request $request)
    {
        AuthToken::expirToken($request->get("auth_token"), auth()->user()->id);
        return $this->response(200, []);
    }

    private function getUserInfo($user)
    {
        $action = $user
            ->roles()
            ->select('roles.name', 'roles.id')
            ->with('actions', function ($query) {
                $query->select('actions.alias');
            })
            ->get();

        $user->roles = $action;
        $user->terminals;
        $user->transports;
        $user->country_division;
        return $user;
    }

}
