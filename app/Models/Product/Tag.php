<?php

namespace App\Models\Product;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Tag extends BaseModel
{
    use HasFactory;
    public function products(): BelongsToMany{
        return $this->belongsToMany(Product::class);
    }
    public static $columns = [
        "id" => "tags.id",
        'name' => 'tags.name',

        "created_at" => "tags.created_at",
        "created_by" => "tags.created_by",
        "updated_at" => "tags.updated_at"
    ];

    protected $fillable = [
        'name',
    ];

    public static function insert($request)
    {
        $model = new Tag();

        $model->sort = $request->sort;
        if(isset($request->name))$model->name = $request->name;


        $model->save();
        return $model;
    }

    public static function updateItem($request)
    {
        $model = Tag::find($request->id);

        $model->sort = $request->sort;
        if(isset($request->name))$model->name = $request->name;


        $model->save();
        return $model;
    }

}
