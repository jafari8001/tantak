<?php
namespace Database\Factories\Product;
 
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
 
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name,
            'slug' => Str::slug(fake()->unique()->words(3, true)),
            'barcode' => fake()->numerify('##########'), 
            'base_price' => fake()->numberBetween(100, 1000),
            'base_wholesale_price' => fake()->numberBetween(50, 500),
            'wholesale_unit' => fake()->randomElement(['گرم', 'لیتر', 'کارتون', 'جفت']),
            'main_image' => fake()->imageUrl(),
            'star' => fake()->numberBetween(0, 5),
            'like' => fake()->numberBetween(0, 100),
            'view' => fake()->numberBetween(0, 1000),
            'publish_status' => fake()->randomElement(['published_online', 'published_inplace', 'published_everywhere', 'draft']),
            'created_by' => null, 
            'sort' => fake()->numberBetween(1, 100),
        ];
    }
}
