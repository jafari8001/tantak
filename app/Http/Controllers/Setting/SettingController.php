<?php

namespace App\Http\Controllers\Setting;

use App\Models\Setting\Setting;
use App\Http\Controllers\Controller;

/**
 * @group Setting
 * @subgroup Setting
 */
class SettingController extends Controller
{
    public $model = Setting::class;
    public $permissionItem = "setting";
    public $validtionItem = [["key", "value"]];

    public static function inheritedDocsOverrides()
    {
        return [
            "store" => [
                "metadata" => [
                    "title" => "insert"
                ],
                "bodyParameters" => [
                    "key" => [
                        'type' => 'string',
                        'description' => '',
                        'example' => 'logo',
                        'required' => true, 
                    ],
                    "value" => [
                        'type' => 'string',
                        'description' => '',
                        'example' => '/public/upload/logo.png',
                        'required' => true, 
                    ]
                ]
            ],
            "update" => [
                "metadata" => [
                    "title" => "update"
                ],
                "bodyParameters" => [
                    "key" => [
                        'type' => 'string',
                        'description' => '',
                        'example' => 'logo',
                        'required' => true, 
                    ],
                    "value" => [
                        'type' => 'string',
                        'description' => '',
                        'example' => '/public/upload/logo.png',
                        'required' => true, 
                    ]
                ]
            ]
        ];
    }
}
