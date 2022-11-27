<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Setting\CountryDivision;

/**
 * @group Setting
 * @subgroup CountryDivision
 */
class CountryDivisionController extends Controller
{
    public $default_search = false;
    public $model = CountryDivision::class;
    public $validtionItem = [["name", "level"]];
    public $permissionItem = "country_division";

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
                        'example' => 'قاین',
                        'required' => true, 
                    ],
                    "level" => [
                        'type' => 'string',
                        'description' => 'values: [`province`, `township`, `district`, `city`, `rural_district`, `village`]',
                        'example' => 'city',
                        'required' => true, 
                    ],
                    "parent_id" => [
                        'type' => 'string',
                        'description' => '',
                        'required' => false, 
                    ]
                ]
            ],
            "update" => [
                "metadata" => [
                    "title" => "update"
                ],
                "bodyParameters" => [
                    "id" => [
                        'type' => 'string',
                        'description' => '',
                        'required' => true, 
                    ],
                    "name" => [
                        'type' => 'string',
                        'description' => '',
                        'example' => 'قاین',
                        'required' => true, 
                    ],
                    "level" => [
                        'type' => 'string',
                        'description' => 'values: [`province`, `township`, `district`, `city`, `rural_district`, `village`]',
                        'example' => 'city',
                        'required' => true, 
                    ],
                    "parent_id" => [
                        'type' => 'string',
                        'description' => '',
                        'required' => false, 
                    ]
                ]
            ]
        ];
    }

    /**
     * POST list
     * 
     * List of coutries and cities filtered by various options
     *       
     * @bodyParam filters object optional Example: { "name" : "تهران" } 
     */
    public function index(Request $request)
    {
        $model = CountryDivision::search($request, CountryDivision::class);
        return $this->response(200, $model);
    }

}

