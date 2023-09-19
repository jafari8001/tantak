<?php

namespace App\Models\Product;

use App\Models\BaseModel;


class LogStock extends BaseModel
{

    public static $columns = [
        "id" => "log_stocks.id",
        'warehouse_stock_id' => 'log_stocks.warehouse_stock_id',
		'product_id' => 'log_stocks.product_id',
		'previous_stock' => 'log_stocks.previous_stock',
		'current_stock' => 'log_stocks.current_stock',
		'type' => 'log_stocks.type',
        "created_at" => "log_stocks.created_at",
        "created_by" => "log_stocks.created_by",
        "updated_at" => "log_stocks.updated_at"
    ];

    public static function insert($request)
    {
        $model = new LogStock();

        $model->sort = $request->sort;
        if(isset($request->warehouse_stock_id))$model->warehouse_stock_id = $request->warehouse_stock_id;
		if(isset($request->product_id))$model->product_id = $request->product_id;
		if(isset($request->previous_stock))$model->previous_stock = $request->previous_stock;
		if(isset($request->current_stock))$model->current_stock = $request->current_stock;
		if(isset($request->type))$model->type = $request->type;

        $model->save();
        return $model;
    }

    public static function updateItem($request)
    {
        $model = LogStock::find($request->id);

        $model->sort = $request->sort;
        if(isset($request->warehouse_stock_id))$model->warehouse_stock_id = $request->warehouse_stock_id;
		if(isset($request->product_id))$model->product_id = $request->product_id;
		if(isset($request->previous_stock))$model->previous_stock = $request->previous_stock;
		if(isset($request->current_stock))$model->current_stock = $request->current_stock;
		if(isset($request->type))$model->type = $request->type;

        $model->save();
        return $model;
    }

}
