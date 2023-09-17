<?php

namespace App\Models\Product;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Comment extends BaseModel
{
    public function product(): BelongsTo{
        return $this->belongsTo(Product::class);
    }
    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }
    public function children(): HasMany{
        return $this->hasMany(Comments::class, 'parent_id');
    }
    public function parent(): BelongsTo{
        return $this->belongsTo(Comments::class, 'parent_id');
    }

    public static $columns = [
        "id" => "comments.id",
        'user_id' => 'comments.user_id',
		'product_id' => 'comments.product_id',
		'text' => 'comments.text',
		'star' => 'comments.star',
		'parent_id' => 'comments.parent_id',
		'is_owner' => 'comments.is_owner',
		'status' => 'comments.status',

        "created_at" => "comments.created_at",
        "created_by" => "comments.created_by",
        "updated_at" => "comments.updated_at"
    ];
    protected $fillable = [
        'user_id',
        'product_id',
        'text',
        'status',
        'star',
        'parent_id',
        'is_owner',
    ];

    public static function insert($request){
        $model = new Comment();

        $model->sort = $request->sort;
        if(isset($request->user_id))$model->user_id = $request->user_id;
		if(isset($request->product_id))$model->product_id = $request->product_id;
		if(isset($request->text))$model->text = $request->text;
		if(isset($request->star))$model->star = $request->star;
		if(isset($request->parent_id))$model->parent_id = $request->parent_id;
		if(isset($request->is_owner))$model->is_owner = $request->is_owner;
		if(isset($request->status))$model->status = $request->status;


        $model->save();
        return $model;
    }

    public static function updateItem($request){
        $model = Comment::find($request->id);

        $model->sort = $request->sort;
        if(isset($request->user_id))$model->user_id = $request->user_id;
		if(isset($request->product_id))$model->product_id = $request->product_id;
		if(isset($request->text))$model->text = $request->text;
		if(isset($request->star))$model->star = $request->star;
		if(isset($request->parent_id))$model->parent_id = $request->parent_id;
		if(isset($request->is_owner))$model->is_owner = $request->is_owner;
		if(isset($request->status))$model->status = $request->status;


        $model->save();
        return $model;
    }

}
