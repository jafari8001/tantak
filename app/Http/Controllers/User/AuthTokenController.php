<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\User\AuthToken;
use App\Http\Controllers\Controller;

class AuthTokenController extends Controller
{
    public $model = AuthToken::class;
    public $permissionItem = "auth_token";

    public function index(Request $request)
    {
        $model = AuthToken::search($request);
        return $this->response(200, $model);
    }
}
