<?php

namespace App\Http\Controllers\User;

use App\Models\User\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public $model = User::class;
    public $default_show = false;
    public $default_destroy = true;
    public $permissionItem = "user";

    public function searchByRole(Request $request)
    {
        $this->permission('user/index');
        $this->validator($request, [], [], [
            "role_id" => "required|array|min:1",
            "role_id.*" => "required|string|distinct"
        ]);

        $data = User::searchByRole($request, $request->role_id);
        return $this->response(200, $data);
    }

    public function store(Request $request)
    {

        $this->permission('user/insert');
        $this->validator($request, ["username", "password", "first_name", "last_name", "role_id", "status", "person_type"]);

        $model = User::insert($request);

        return $this->response(200, $model);
    }

    public function update(Request $request)
    {
        $this->permission('user/update');
        $this->validator($request, ["username", "first_name", "last_name", "role_id", "status", "person_type", "id"]);

        $data = User::updateItem($request, $request->id);
        return $this->response(200, $data);
    }

    public function profile(Request $request)
    {
        $message = User::updateProfile($request);
        return $this->response(200, [
            "user" => $message
        ]);
    }

    public function checkUsername(Request $request)
    {
        $this->validator($request, ["username"]);

        $model = User::findUsername($request);
        return $this->response(200, $model);
    }
}
