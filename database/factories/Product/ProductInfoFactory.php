<?php
namespace Database\Factories\Product;
 
use App\Models\Product\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
 
class ProductInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $product = Product::inRandomOrder()->first();

        return [
            'created_by' => null,
            'ability' => fake()->word,
            'product_id' => $product->id,
            'description' => fake()->text,
            'type' => fake()->randomElement(['table_item', 'description', 'seo_description', 'summerized_description']),
            'sort' => fake()->numberBetween(1, 1000),
        ];
    }
}
