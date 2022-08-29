<?php

namespace App\Http\Controllers\User;

use App\Models\User\Role;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    public $model = Role::class;
    public $default_show = false;
    public $permissionItem = "role";
    public $validtionItem = [
        ["name"],
        [],
        [
            "action_id" => "required|array|min:1",
            "action_id.*" => "required|string|distinct"
        ]
    ];
}
