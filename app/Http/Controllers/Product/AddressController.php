<?php

namespace App\Http\Controllers\Product;

use App\Models\Product\Address;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * @group Product
 * @subgroup Address
 */
class AddressController extends Controller
{
    public $default_show = true;
    public $default_search = true;
    public $model = Address::class;
    public $permissionItem = "addresses";
    public $validtionItem = [];

    public static function inheritedDocsOverrides()
    {
        return [
            "store" => [
                "metadata" => [
                    "title" => "insert"
                ],
                "bodyParameters" => [
					"user_id" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"postal_code" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"address" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"country_division_id" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],

                ]
            ],
            "update" => [
                "metadata" => [
                    "title" => "update"
                ],
                "bodyParameters" => [
					"user_id" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"postal_code" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"address" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"country_division_id" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],

                ]
            ]
        ];
    }

    public function store(Request $request)
    {
        return parent::store($request);
    }

    public function update(Request $request)
    {
        return parent::update($request);
    }
}
