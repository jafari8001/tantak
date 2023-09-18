<?php

namespace App\Models\Product;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class CategoryProduct extends BaseModel{

    use HasFactory;
    public static $columns = [
        "id" => "category_product.id",
        'product_id' => 'category_product.product_id',
		'category_id' => 'category_product.category_id',

        "created_at" => "category_product.created_at",
        "created_by" => "category_product.created_by",
        "updated_at" => "category_product.updated_at"
    ];

    public static function insert($request){
        $model = new CategoryProduct();

        $model->sort = $request->sort;
        if(isset($request->product_id))$model->product_id = $request->product_id;
		if(isset($request->category_id))$model->category_id = $request->category_id;


        $model->save();
        return $model;
    }

    public static function updateItem($request){
        $model = CategoryProduct::find($request->id);

        $model->sort = $request->sort;
        if(isset($request->product_id))$model->product_id = $request->product_id;
		if(isset($request->category_id))$model->category_id = $request->category_id;


        $model->save();
        return $model;
    }

}
