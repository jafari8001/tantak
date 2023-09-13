<?php

namespace App\product\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Comments extends BaseModel
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'product_id',
        'text',
        'status',
        'star',
        'parent_id',
        'is_owner',
    ];
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
    public function getNestedCategories(){
        $comments = Comments::with('children')->where('parent_id', null)->get();
        return $comments;
    }
}
