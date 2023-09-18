<?php
namespace Database\Factories\Product;
 
use App\Models\Product\Category;
use App\Models\Product\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
 
class CategoryProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $product = Product::inRandomOrder()->first();
        $category = Category::inRandomOrder()->first();

        return [
            'created_by' => null,
            'product_id' => $product->id,
            'category_id' => $category->id,
            'sort' => fake()->numberBetween(1, 1000),
        ];
    }
}
