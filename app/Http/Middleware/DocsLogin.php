<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User\User;

class DocsLogin
{
    public function handle($request, Closure $next)
    {
        if(
            $request->session()->has('user_id') && 
            User::isAdmin($request->session()->get('user_id'))
        ){
            return $next($request);
        }else{
            return redirect('doc/login');
        }
    }
}
