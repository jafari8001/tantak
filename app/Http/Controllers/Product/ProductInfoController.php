<?php

namespace App\Http\Controllers\Product;

use App\Models\Product\Product;
use App\Models\Product\ProductInfo;
use App\Http\Controllers\Controller;
use Database\Factories\ProductFactory;
use Illuminate\Http\Request;

/**
 * @group Product
 * @subgroup ProductInfo
 */
class ProductInfoController extends Controller
{
    public $default_show = true;
    public $default_search = true;
    public $model = ProductInfo::class;
    public $permissionItem = "product_info";
    public $validtionItem = [];

    public static function inheritedDocsOverrides()
    {
        return [
            "store" => [
                "metadata" => [
                    "title" => "insert"
                ],
                "bodyParameters" => [
					"product_id" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"type" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"ability" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"description" => [
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
					"product_id" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"type" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"ability" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"description" => [
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
		Product::factory()->create(10);
        return parent::store($request);
    }

    public function update(Request $request)
    {
        return parent::update($request);
    }
}
