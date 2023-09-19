<?php

namespace App\Http\Controllers\Product;

use App\Models\Product\LogStock;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * @group Product
 * @subgroup LogStock
 */
class LogStockController extends Controller
{
    public $default_show = true;
    public $default_search = true;
    public $model = LogStock::class;
    public $permissionItem = "log_stock";
    public $validtionItem = [];

    public static function inheritedDocsOverrides()
    {
        return [
            "store" => [
                "metadata" => [
                    "title" => "insert"
                ],
                "bodyParameters" => [
					"warehouse_stock_id" => [
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
					"previous_stock" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"current_stock" => [
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

                ]
            ],
            "update" => [
                "metadata" => [
                    "title" => "update"
                ],
                "bodyParameters" => [
					"warehouse_stock_id" => [
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
					"previous_stock" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"current_stock" => [
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
