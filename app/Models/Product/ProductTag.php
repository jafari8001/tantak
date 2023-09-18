<?php

namespace App\Models\Product;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class ProductTag extends BaseModel
{
    use HasFactory;
    public static $columns = [
        "id" => "product_tag.id",
        'product_id' => 'product_tag.product_id',
		'tag_id' => 'product_tag.tag_id',

        "created_at" => "product_tag.created_at",
        "created_by" => "product_tag.created_by",
        "updated_at" => "product_tag.updated_at"
    ];

    public static function insert($request){
        $model = new ProductTag();

        $model->sort = $request->sort;
        if(isset($request->product_id))$model->product_id = $request->product_id;
		if(isset($request->tag_id))$model->tag_id = $request->tag_id;


        $model->save();
        return $model;
    }

    public static function updateItem($request){
        $model = ProductTag::find($request->id);

        $model->sort = $request->sort;
        if(isset($request->product_id))$model->product_id = $request->product_id;
		if(isset($request->tag_id))$model->tag_id = $request->tag_id;


        $model->save();
        return $model;
    }

}
