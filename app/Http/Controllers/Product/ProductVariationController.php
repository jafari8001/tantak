<?php

namespace App\Http\Controllers\Product;

use App\Models\Product\ProductVariation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * @group Product
 * @subgroup ProductVariation
 */
class ProductVariationController extends Controller
{
    public $default_show = true;
    public $default_search = true;
    public $model = ProductVariation::class;
    public $permissionItem = "product_variations";
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
					"variation_type_id" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"value" => [
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
					"variation_type_id" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"value" => [
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
