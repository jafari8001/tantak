<?php

namespace App\Http\Controllers\Product;

use App\Models\Product\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * @group Product
 * @subgroup Category
 */
class CategoryController extends Controller
{
    public $default_show = true;
    public $default_search = true;
    public $model = Category::class;
    public $permissionItem = "categories";
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
					"parent_id" => [
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
					"parent_id" => [
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
