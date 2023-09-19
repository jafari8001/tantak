<?php

namespace Database\Seeders;

use App\Models\Product\Category;
use App\Models\Product\CategoryProduct;
use App\Models\Product\Comment;
use App\Models\Product\Product;
use App\Models\Product\ProductImage;
use App\Models\Product\ProductInfo;
use App\Models\Product\ProductTag;
use App\Models\Product\ProductVariation;
use App\Models\Product\ProductVariationCombination;
use App\Models\Product\Tag;
use App\Models\Product\WarehouseStock;
use App\Models\User\Address;
use App\Models\User\User;
use Illuminate\Database\Seeder;


class FakeDataSeeder extends Seeder
{
    public function run()
    {
        User::factory()->count(1000)->create();
        Product::factory()->count(1000)->create();
        Tag::factory()->count(50)->create();
        Category::factory()->count(30)->create();
        CategoryProduct::factory()->count(1000)->create();
        ProductTag::factory()->count(1000)->create();
        ProductVariation::factory()->count(1000)->create();
        ProductVariationCombination::factory()->count(2000)->create();
        ProductImage::factory()->count(1000)->create();
        Comment::factory()->count(10000)->create();
        ProductInfo::factory()->count(1000)->create();
        WarehouseStock::factory()->count(1000)->create();
        Address::factory()->count(1000)->create();
    }
}
