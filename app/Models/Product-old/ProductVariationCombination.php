<?php

namespace App\product\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductVariationCombination extends BaseModel
{
    use HasFactory;
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

    public function productVariation(): BelongsTo{
        return $this->belongsTo(ProductVariation::class);
    }
}
