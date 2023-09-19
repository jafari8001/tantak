<?php

namespace App\Models\Product;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Category extends BaseModel
{
    use HasFactory;
    public function products(): BelongsToMany{
        return $this->belongsToMany(Product::class);
    }
    public function children(): HasMany{
        return $this->hasMany(Category::class, 'parent_id');
    }
    public function parent(): BelongsTo{
        return $this->belongsTo(Category::class, 'parent_id');
    }
    protected $fillable = [
        'name',
        'parent_id',
        'barcode',
    ];
    public static $columns = [
        "id" => "categories.id",
        'name' => 'categories.name',
		'slug' => 'categories.slug',
		'level' => 'categories.level',
		'barcode' => 'categories.barcode',
		'parent_id' => 'categories.parent_id',

        "created_at" => "categories.created_at",
        "created_by" => "categories.created_by",
        "updated_at" => "categories.updated_at"
    ];

    public static function insert($request){
        $model = new Category();

        $model->sort = $request->sort;
        if(isset($request->name))$model->name = $request->name;
		if(isset($request->slug))$model->slug = $request->slug;
		if(isset($request->level))$model->level = $request->level;
		if(isset($request->barcode))$model->barcode = $request->barcode;
		if(isset($request->parent_id))$model->parent_id = $request->parent_id;


        $model->save();
        return $model;
    }

    public static function updateItem($request){
        $model = Category::find($request->id);

        $model->sort = $request->sort;
        if(isset($request->name))$model->name = $request->name;
		if(isset($request->slug))$model->slug = $request->slug;
		if(isset($request->level))$model->level = $request->level;
        if(isset($request->barcode))$model->barcode = $request->barcode;
		if(isset($request->parent_id))$model->parent_id = $request->parent_id;


        $model->save();
        return $model;
    }

}
