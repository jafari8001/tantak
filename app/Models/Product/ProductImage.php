<?php

namespace App\Models\Product;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class ProductImage extends BaseModel
{

    public static $columns = [
        "id" => "product_images.id",
        'product_variation_id' => 'product_images.product_variation_id',
		'product_id' => 'product_images.product_id',
		'alt' => 'product_images.alt',
		'height' => 'product_images.height',
		'width' => 'product_images.width',
		'size' => 'product_images.size',
		'path' => 'product_images.path',

        "created_at" => "product_images.created_at",
        "created_by" => "product_images.created_by",
        "updated_at" => "product_images.updated_at"
    ];

    protected $fillable = [
        'name',
        'path',
        'product_variation_id',
    ];
    public function productVariation(): BelongsTo{
        return $this->belongsTo(ProductVariation::class);
    }
    public static function insert($request){
        $model = new ProductImage();

        $model->sort = $request->sort;
        if(isset($request->product_variation_id))$model->product_variation_id = $request->product_variation_id;
		if(isset($request->product_id))$model->product_id = $request->product_id;
		if(isset($request->alt))$model->alt = $request->alt;
		if(isset($request->height))$model->height = $request->height;
		if(isset($request->width))$model->width = $request->width;
		if(isset($request->size))$model->size = $request->size;
		if(isset($request->path))$model->path = $request->path;


        $model->save();
        return $model;
    }

    public static function updateItem($request){
        $model = ProductImage::find($request->id);

        $model->sort = $request->sort;
        if(isset($request->product_variation_id))$model->product_variation_id = $request->product_variation_id;
		if(isset($request->product_id))$model->product_id = $request->product_id;
		if(isset($request->alt))$model->alt = $request->alt;
		if(isset($request->height))$model->height = $request->height;
		if(isset($request->width))$model->width = $request->width;
		if(isset($request->size))$model->size = $request->size;
		if(isset($request->path))$model->path = $request->path;


        $model->save();
        return $model;
    }

}
