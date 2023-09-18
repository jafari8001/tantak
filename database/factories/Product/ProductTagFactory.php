<?php
namespace Database\Factories\Product;
 
use App\Models\Product\Product;
use App\Models\Product\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;
 
class ProductTagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $tag = Tag::inRandomOrder()->first();
        $product = Product::inRandomOrder()->first();

        return [
            'product_id' => $product->id,
            'tag_id' => $tag->id,
            'sort' => fake()->numberBetween(1, 1000),
            'created_by' => null,
        ];
    }
}
