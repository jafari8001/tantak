<?php

namespace App\Http\Controllers\Core;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User\User;
use Illuminate\Support\Facades\Hash;


class DocsController extends Controller
{
    public function uiBasedAuthentication(Request $request)
    {
        return view('auth.login');
    }

    public function uiBasedLogin(Request $request)
    {
        $user = User::where([
            ['username', '=', checkUsername($request->username)],
            ["status", "=", 'active']
        ])->first();

        if (isset($user->id)) {
            if (Hash::check($request->password, $user->password)) {
                if(User::isAdmin($user->id)){
                    $request->session()->put('user_id',$user->id);
                    return redirect('/docs');
                }else{
                    $message = __('user.only_admins_are_allowed');
                }
            }else{
                $message = __('user.error_password');
            }
        }else{
            $message = __('user.not_exist_username');
        }
        
        return redirect()
            ->back()
            ->withErrors(['message'=>$message]);
    }
}
