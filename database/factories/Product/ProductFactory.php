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
            'created_by' => null, 
            'name' => fake()->name,
            'main_image' => fake()->imageUrl(),
            'star' => fake()->numberBetween(0, 5),
            'sort' => fake()->numberBetween(1, 100),
            'like' => fake()->numberBetween(0, 100),
            'view' => fake()->numberBetween(0, 1000),
            'barcode' => fake()->numerify('##########'), 
            'base_price' => fake()->numberBetween(100, 1000),
            'slug' => Str::slug(fake()->unique()->words(3, true)),
            'base_wholesale_price' => fake()->numberBetween(50, 500),
            'wholesale_unit' => fake()->randomElement(['گرم', 'لیتر', 'کارتون', 'جفت']),
            'publish_status' => fake()->randomElement(['published_online', 'published_inplace', 'published_everywhere', 'draft']),
        ];
    }
}
