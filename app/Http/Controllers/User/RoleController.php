<?php

namespace App\Http\Controllers\User;

use App\Models\User\Role;
use App\Http\Controllers\Controller;

/**
 * @group User
 * @subgroup Role
 */
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

    public static function inheritedDocsOverrides()
    {
        return [
            "store" => [
                "metadata" => [
                    "title" => "insert"
                ],
                "bodyParameters" => [
                    "name" => [
                        'type' => 'string',
                        'description' => '',
                        'example' => 'نویسندگان',
                        'required' => true, 
                    ],
                    "action_id" => [
                        'type' => 'string[]',
                        'description' => '',
                        'required' => true, 
                    ]
                ]
            ],
            "update" => [
                "metadata" => [
                    "title" => "update"
                ],
                "bodyParameters" => [
                    "name" => [
                        'type' => 'string',
                        'description' => '',
                        'example' => 'نویسندگان',
                        'required' => true, 
                    ],
                    "action_id" => [
                        'type' => 'string[]',
                        'description' => '',
                        'required' => true, 
                    ]
                ]
            ]
        ];
    }
}
