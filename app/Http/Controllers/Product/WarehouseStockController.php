<?php

namespace App\Http\Controllers\Product;

use App\Models\Product\WarehouseStock;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * @group Product
 * @subgroup WarehouseStock
 */
class WarehouseStockController extends Controller
{
    public $default_show = true;
    public $default_search = true;
    public $model = WarehouseStock::class;
    public $permissionItem = "warehouse_stock";
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
					"varcomb_id" => [
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
					"saved_stock" => [
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
					"varcomb_id" => [
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
					"saved_stock" => [
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
