<?php

namespace App\Http\Middleware;

use App\Exceptions\OtherException;
use Closure;
use App\Models\User\User;
use Illuminate\Support\Facades\Auth;

class DocsLogin
{
    public function handle($request, Closure $next)
    {
        if(auth()->check() && User::isAdmin(auth()->user()->id)){
            return $next($request);
        }else{
            return redirect('auth\login');
        }
    }
}
