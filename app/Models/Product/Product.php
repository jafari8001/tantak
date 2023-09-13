<?php

namespace App\Models\Product;

use App\Models\BaseModel;


class Product extends BaseModel
{

    public static $columns = [
        "id" => "products.id",
        'name' => 'products.name',
		'slug' => 'products.slug',
		'star' => 'products.star',
		'like' => 'products.like',
		'view' => 'products.view',
		'barcode' => 'products.barcode',
		'base_price' => 'products.base_price',
		'main_image' => 'products.main_image',
		'publish_status' => 'products.publish_status',
		'wholesale_unit' => 'products.wholesale_unit',
		'base_wholesale_price' => 'products.base_wholesale_price',
        
		"created_at" => "products.created_at",
        "created_by" => "products.created_by",
        "updated_at" => "products.updated_at"
    ];

    public static function insert($request)
    {
        $model = new Product();

        $model->sort = $request->sort;
        if(isset($request->name))$model->name = $request->name;
		if(isset($request->slug))$model->slug = $request->slug;
		if(isset($request->barcode))$model->barcode = $request->barcode;
		if(isset($request->base_price))$model->base_price = $request->base_price;
		if(isset($request->base_wholesale_price))$model->base_wholesale_price = $request->base_wholesale_price;
		if(isset($request->wholesale_unit))$model->wholesale_unit = $request->wholesale_unit;
		if(isset($request->main_image))$model->main_image = $request->main_image;
		if(isset($request->star))$model->star = $request->star;
		if(isset($request->like))$model->like = $request->like;
		if(isset($request->view))$model->view = $request->view;
		if(isset($request->publish_status))$model->publish_status = $request->publish_status;

        $model->save();
        return $model;
    }

    public static function updateItem($request)
    {
        $model = Product::find($request->id);

        $model->sort = $request->sort;
        if(isset($request->name))$model->name = $request->name;
		if(isset($request->slug))$model->slug = $request->slug;
		if(isset($request->barcode))$model->barcode = $request->barcode;
		if(isset($request->base_price))$model->base_price = $request->base_price;
		if(isset($request->base_wholesale_price))$model->base_wholesale_price = $request->base_wholesale_price;
		if(isset($request->wholesale_unit))$model->wholesale_unit = $request->wholesale_unit;
		if(isset($request->main_image))$model->main_image = $request->main_image;
		if(isset($request->star))$model->star = $request->star;
		if(isset($request->like))$model->like = $request->like;
		if(isset($request->view))$model->view = $request->view;
		if(isset($request->publish_status))$model->publish_status = $request->publish_status;

        $model->save();
        return $model;
    }

}
