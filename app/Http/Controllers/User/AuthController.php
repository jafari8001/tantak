<?php

namespace App\Http\Controllers\User;

use App\Models\User\User;
use App\Models\User\OtpCode;
use Illuminate\Http\Request;
use \App\Models\User\AuthToken;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function sendOtp(Request $request)
    {
        $this->validator($request, ["username"]);

        $code = OtpCode::sendCode($request->username, getRealIP($request));

        return $this->response(200);
    }

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
