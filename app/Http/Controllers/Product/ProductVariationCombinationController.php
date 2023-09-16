<?php

namespace App\Http\Controllers\Product;

use App\Models\Product\ProductVariationCombination;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * @group Product
 * @subgroup ProductVariationCombination
 */
class ProductVariationCombinationController extends Controller
{
    public $default_show = true;
    public $default_search = true;
    public $model = ProductVariationCombination::class;
    public $permissionItem = "product_variation_combinations";
    public $validtionItem = [];

    public static function inheritedDocsOverrides()
    {
        return [
            "store" => [
                "metadata" => [
                    "title" => "insert"
                ],
                "bodyParameters" => [
					"variation_1_id" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"variation_2_id" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"variation_3_id" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"sell_type" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"stock" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"discount" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"minimum" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"maximum" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"price" => [
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
					"variation_1_id" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"variation_2_id" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"variation_3_id" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"sell_type" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"stock" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"discount" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"minimum" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"maximum" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"price" => [
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
