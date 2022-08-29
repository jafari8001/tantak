<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User\User;
use App\Models\User\AuthToken;
use \App\Exceptions\AuthException;
use Illuminate\Support\Facades\Auth;

class TokenLogin
{
    public function handle($request, Closure $next)
    {
        $token = $request->bearerToken();
        if ($token == null) {
            throw new AuthException();
        }
        $request->attributes->add(['auth_token' => $token]);

        $model = AuthToken::checkToken($request, $token);
        if ($model == null || !isset($model->auth_token)) {
            throw new AuthException();
        }

        Auth::login(User::find($model->created_by));
        return $next($request);
    }
}
