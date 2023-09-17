<?php

namespace App\Models\Product;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class WarehouseStock extends BaseModel
{
    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    } 
    public function productVariationCombinations(): BelongsTo{
        return $this->belongsTo(ProductVariationCombination::class);
    }

    public static $columns = [
        "id" => "warehouse_stocks.id",
        'user_id' => 'warehouse_stocks.user_id',
		'varcomb_id' => 'warehouse_stocks.varcomb_id',
		'stock' => 'warehouse_stocks.stock',
		'saved_stock' => 'warehouse_stocks.saved_stock',
        "created_at" => "warehouse_stocks.created_at",
        "created_by" => "warehouse_stocks.created_by",
        "updated_at" => "warehouse_stocks.updated_at"
    ];

    protected $fillabel =[
        'user_id',
        'varcomb_id',
        'stock',
        'saved_stock',
    ];

    public static function insert($request)
    {
        $model = new WarehouseStock();

        $model->sort = $request->sort;
        if(isset($request->user_id))$model->user_id = $request->user_id;
		if(isset($request->varcomb_id))$model->varcomb_id = $request->varcomb_id;
		if(isset($request->stock))$model->stock = $request->stock;
		if(isset($request->saved_stock))$model->saved_stock = $request->saved_stock;

        $model->save();
        return $model;
    }

    public static function updateItem($request)
    {
        $model = WarehouseStock::find($request->id);

        $model->sort = $request->sort;
        if(isset($request->user_id))$model->user_id = $request->user_id;
		if(isset($request->varcomb_id))$model->varcomb_id = $request->varcomb_id;
		if(isset($request->stock))$model->stock = $request->stock;
		if(isset($request->saved_stock))$model->saved_stock = $request->saved_stock;

        $model->save();
        return $model;
    }

}
