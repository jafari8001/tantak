<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User\User;
use App\Models\User\AuthToken;
use Illuminate\Support\Facades\Auth;

class CheckIsLogin
{
    public function handle($request, Closure $next)
    {
        $token=$request->bearerToken();
        if ($token==null) {
            return $next($request);
        }
        $request->attributes->add(['auth_token' => $token]);
        
        $model= AuthToken::checkToken($request, $token);
        
        if (!isset($model->auth_token)) {
            return $next($request);
        }
        Auth::login(User::find($model->created_by));
        return $next($request);
    }
}
