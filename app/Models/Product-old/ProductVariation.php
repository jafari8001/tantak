<?php

namespace App\product\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductVariation extends BaseModel
{
    use HasFactory;
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
}
