<?php

namespace App\Http\Controllers\Product;

use App\Models\Product\Branch;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * @group Product
 * @subgroup Branch
 */
class BranchController extends Controller
{
    public $default_show = true;
    public $default_search = true;
    public $model = Branch::class;
    public $permissionItem = "branch";
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
					"country_division_id" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"name" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"branch_code" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"lat" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"long" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"address" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"is_main_branch" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"status" => [
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
					"country_division_id" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"name" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"branch_code" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"lat" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"long" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"address" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"is_main_branch" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"status" => [
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
