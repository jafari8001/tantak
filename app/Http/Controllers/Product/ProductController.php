<?php

namespace App\Http\Controllers\Product;

use App\Models\Product\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Illuminate\Database\Eloquent\Factories;

/**
 * @group Product
 * @subgroup Product
 */
class ProductController extends Controller
{
    public $default_show = true;
    public $default_search = true;
    public $model = Product::class;
    public $permissionItem = "product";
    public $validtionItem = [];

    public static function inheritedDocsOverrides()
    {
        return [
            "store" => [
                "metadata" => [
                    "title" => "insert"
                ],
                "bodyParameters" => [
					"name" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"slug" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"barcode" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"base_price" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"base_wholesale_price" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"wholesale_unit" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"main_image" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"star" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"like" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"view" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"publish_status" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					]
                ]
            ],
            "update" => [
                "metadata" => [
                    "title" => "update"
                ],
                "bodyParameters" => [
					"name" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"slug" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"barcode" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"base_price" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"base_wholesale_price" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"wholesale_unit" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"main_image" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"star" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"like" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"view" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"publish_status" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					]
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
