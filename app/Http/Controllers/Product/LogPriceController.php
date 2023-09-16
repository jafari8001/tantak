<?php

namespace App\Http\Controllers\Product;

use App\Models\Product\LogPrice;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * @group Product
 * @subgroup LogPrice
 */
class LogPriceController extends Controller
{
    public $default_show = true;
    public $default_search = true;
    public $model = LogPrice::class;
    public $permissionItem = "log_prices";
    public $validtionItem = [];

    public static function inheritedDocsOverrides()
    {
        return [
            "store" => [
                "metadata" => [
                    "title" => "insert"
                ],
                "bodyParameters" => [
					"varcomb_id" => [
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
					"varcomb_id" => [
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
