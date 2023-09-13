<?php

namespace App\Product\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends BaseModel
{
    use HasFactory;
    protected $fillable = [
        'name',
        'parent_id',
        'barcode',
    ];

    public function products(): BelongsToMany{
        return $this->belongsToMany(Product::class);
    }
    public function children(): HasMany{
        return $this->hasMany(Category::class, 'parent_id');
    }
    public function parent(): BelongsTo{
        return $this->belongsTo(Category::class, 'parent_id');
    }
}
