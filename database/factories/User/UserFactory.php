<?php
namespace Database\Factories\User;
 
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
 
class UserFactory extends Factory
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
            'birth_date' => fake()->date,
            'description' => fake()->text,
            'username' => fake()->userName,
            'last_name' => fake()->lastName,
            'password' => bcrypt('password'), 
            'first_name' => fake()->firstName,
            'phone_number' => fake()->phoneNumber,
            'sort' => fake()->numberBetween(1, 1000), 
            'avatar' => 'upload/baseUpload/default.jpg', 
            'national_code' => fake()->numerify('##########'), 
            'person_type' => fake()->randomElement(['real', 'legal']), 
            'status' => fake()->randomElement(['active', 'hidden', 'inactive', 'registering', 'suspended']),
        ];
    }
}
