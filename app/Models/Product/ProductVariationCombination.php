<?php

namespace App\Models\Product;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class ProductVariationCombination extends BaseModel
{
    public function WarehouseStocks(): HasMany{
        return $this->hasMany(WarehouseStock::class);
    }
    public function productVariation(): BelongsTo{
        return $this->belongsTo(ProductVariation::class);
    }

    public static $columns = [
        "id" => "product_variation_combinations.id",
        'variation_1_id' => 'product_variation_combinations.variation_1_id',
		'variation_2_id' => 'product_variation_combinations.variation_2_id',
		'variation_3_id' => 'product_variation_combinations.variation_3_id',
		'sell_type' => 'product_variation_combinations.sell_type',
		'stock' => 'product_variation_combinations.stock',
		'discount' => 'product_variation_combinations.discount',
		'minimum' => 'product_variation_combinations.minimum',
		'maximum' => 'product_variation_combinations.maximum',
		'price' => 'product_variation_combinations.price',

        "created_at" => "product_variation_combinations.created_at",
        "created_by" => "product_variation_combinations.created_by",
        "updated_at" => "product_variation_combinations.updated_at"
    ];

	protected $fillable = [
        'variation_1_id',
        'variation_2_id',
        'variation_3_id',
        'sell_type',
        'stock',
        'discount',
        'minimum',
        'maximum',
        'price',
    ];

    public static function insert($request){
        $model = new ProductVariationCombination();

        $model->sort = $request->sort;
        if(isset($request->variation_1_id))$model->variation_1_id = $request->variation_1_id;
		if(isset($request->variation_2_id))$model->variation_2_id = $request->variation_2_id;
		if(isset($request->variation_3_id))$model->variation_3_id = $request->variation_3_id;
		if(isset($request->sell_type))$model->sell_type = $request->sell_type;
		if(isset($request->stock))$model->stock = $request->stock;
		if(isset($request->discount))$model->discount = $request->discount;
		if(isset($request->minimum))$model->minimum = $request->minimum;
		if(isset($request->maximum))$model->maximum = $request->maximum;
		if(isset($request->price))$model->price = $request->price;


        $model->save();
        return $model;
    }
    public static function updateItem($request){
        $model = ProductVariationCombination::find($request->id);

        $model->sort = $request->sort;
        if(isset($request->variation_1_id))$model->variation_1_id = $request->variation_1_id;
		if(isset($request->variation_2_id))$model->variation_2_id = $request->variation_2_id;
		if(isset($request->variation_3_id))$model->variation_3_id = $request->variation_3_id;
		if(isset($request->sell_type))$model->sell_type = $request->sell_type;
		if(isset($request->stock))$model->stock = $request->stock;
		if(isset($request->discount))$model->discount = $request->discount;
		if(isset($request->minimum))$model->minimum = $request->minimum;
		if(isset($request->maximum))$model->maximum = $request->maximum;
		if(isset($request->price))$model->price = $request->price;


        $model->save();
        return $model;
    }

}
