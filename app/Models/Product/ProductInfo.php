<?php

namespace App\Models\Product;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class ProductInfo extends BaseModel
{

    public static $columns = [
        "id" => "product_info.id",
        'product_id' => 'product_info.product_id',
		'type' => 'product_info.type',
		'ability' => 'product_info.ability',
		'description' => 'product_info.description',

        "created_at" => "product_info.created_at",
        "created_by" => "product_info.created_by",
        "updated_at" => "product_info.updated_at"
    ];

    protected $fillable = [
        'product_id',
        'type',
        'ability',
        'description',
    ];
    public function categories(): BelongsTo{
        return $this->belongsTo(Product::class);
    }

    public static function insert($request){
        $model = new ProductInfo();

        $model->sort = $request->sort;
        if(isset($request->product_id))$model->product_id = $request->product_id;
		if(isset($request->type))$model->type = $request->type;
		if(isset($request->ability))$model->ability = $request->ability;
		if(isset($request->description))$model->description = $request->description;


        $model->save();
        return $model;
    }

    public static function updateItem($request){
        $model = ProductInfo::find($request->id);

        $model->sort = $request->sort;
        if(isset($request->product_id))$model->product_id = $request->product_id;
		if(isset($request->type))$model->type = $request->type;
		if(isset($request->ability))$model->ability = $request->ability;
		if(isset($request->description))$model->description = $request->description;


        $model->save();
        return $model;
    }

}
