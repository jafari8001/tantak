<?php

namespace App\Http\Controllers\Product;

use App\Models\Product\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * @group Product
 * @subgroup Comment
 */
class CommentController extends Controller
{
    public $default_show = true;
    public $default_search = true;
    public $model = Comment::class;
    public $permissionItem = "comment";
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
					"product_id" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"text" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"star" => [
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
					"is_owner" => [
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
					"product_id" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"text" => [
						"type" => "string",
						"description" => "",
						"example" => "",
						"required" => true,
					],
					"star" => [
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
					"is_owner" => [
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
