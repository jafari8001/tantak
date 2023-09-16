<?php

namespace App\Http\Controllers\Product;

use App\Models\Product\ProductImage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * @group Product
 * @subgroup ProductImage
 */
class ProductImageController extends Controller
{
    public $default_show = true;
    public $default_search = true;
    public $model = ProductImage::class;
    public $permissionItem = "product_images";
    public $validtionItem = [];

    public static function inheritedDocsOverrides()
    {
        return [
            "store" => [
                "metadata" => [
                    "title" => "insert"
                ],
                "bodyParameters" => [
					"product_variation_id" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"product_id" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"alt" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"height" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"width" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"size" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"path" => [
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
					"product_variation_id" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"product_id" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"alt" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"height" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"width" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"size" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"path" => [
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
