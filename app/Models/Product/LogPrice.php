<?php

namespace App\Models\Product;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class LogPrice extends BaseModel
{
    use HasFactory;
    public function products(): BelongsTo{
        return $this->belongsTo(Product::class);
    }

    public static $columns = [
        "id" => "log_prices.id",
        'varcomb_id' => 'log_prices.varcomb_id',
		'product_id' => 'log_prices.product_id',
		'price' => 'log_prices.price',

        "created_at" => "log_prices.created_at",
        "created_by" => "log_prices.created_by",
        "updated_at" => "log_prices.updated_at"
    ];

    protected $fillable = [
        'varcomb_id',
        'product_id',
        'price'
    ];

    public static function insert($request){
        $model = new LogPrice();

        $model->sort = $request->sort;
        if(isset($request->varcomb_id))$model->varcomb_id = $request->varcomb_id;
		if(isset($request->product_id))$model->product_id = $request->product_id;
		if(isset($request->price))$model->price = $request->price;


        $model->save();
        return $model;
    }

    public static function updateItem($request){
        $model = LogPrice::find($request->id);

        $model->sort = $request->sort;
        if(isset($request->varcomb_id))$model->varcomb_id = $request->varcomb_id;
		if(isset($request->product_id))$model->product_id = $request->product_id;
		if(isset($request->price))$model->price = $request->price;


        $model->save();
        return $model;
    }

}
