<?php

namespace App\Http\Controllers\Product;

use App\Models\Product\CategoryProduct;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * @group Product
 * @subgroup CategoryProduct
 */
class CategoryProductController extends Controller
{
    public $default_show = true;
    public $default_search = true;
    public $model = CategoryProduct::class;
    public $permissionItem = "category_product";
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
					"category_id" => [
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
					"category_id" => [
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
