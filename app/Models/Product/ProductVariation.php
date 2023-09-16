<?php

namespace App\Models\Product;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class ProductVariation extends BaseModel
{

    public static $columns = [
        "id" => "product_variations.id",
        'product_id' => 'product_variations.product_id',
		'variation_type_id' => 'product_variations.variation_type_id',
		'value' => 'product_variations.value',

        "created_at" => "product_variations.created_at",
        "created_by" => "product_variations.created_by",
        "updated_at" => "product_variations.updated_at"
    ];
    protected $fillable = [
        'product_id',
        'variation_type',
        'value',
    ];

    public function product(): BelongsTo{
        return $this->belongsTo(Product::class);
    }
    public function productVariationCombination(): HasMany{
        return $this->hasMany(ProductVariationCombination::class);
    }
    public function productImages():HasMany{
        return  $this->hasMany(ProductImage::class);
    }

    public static function insert($request){
        $model = new ProductVariation();

        $model->sort = $request->sort;
        if(isset($request->product_id))$model->product_id = $request->product_id;
		if(isset($request->variation_type_id))$model->variation_type_id = $request->variation_type_id;
		if(isset($request->value))$model->value = $request->value;


        $model->save();
        return $model;
    }

    public static function updateItem($request){
        $model = ProductVariation::find($request->id);

        $model->sort = $request->sort;
        if(isset($request->product_id))$model->product_id = $request->product_id;
		if(isset($request->variation_type_id))$model->variation_type_id = $request->variation_type_id;
		if(isset($request->value))$model->value = $request->value;


        $model->save();
        return $model;
    }

}
