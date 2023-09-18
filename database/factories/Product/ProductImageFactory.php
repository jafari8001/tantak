<?php
namespace Database\Factories\Product;
 
use App\Models\Product\Product;
use App\Models\Product\ProductVariation;
use Illuminate\Database\Eloquent\Factories\Factory;
 
class ProductImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $product = Product::inRandomOrder()->first();
        $variation = ProductVariation::inRandomOrder()->first();

        return [
            'created_by' => null, 
            'alt' => fake()->text(50), 
            'path' => fake()->imageUrl(), 
            'product_id' => $product->id,
            'sort' => fake()->numberBetween(1, 1000),
            'product_variation_id' => $variation->id,
            'size' => fake()->numberBetween(100, 1000),
            'width' => fake()->numberBetween(100, 1000),
            'height' => fake()->numberBetween(100, 1000),
        ];
    }
}
