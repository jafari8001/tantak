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
            'username' => fake()->userName,
            'password' => bcrypt('password'), 
            'phone_number' => fake()->phoneNumber,
            'birth_date' => fake()->date,
            'description' => fake()->text,
            'first_name' => fake()->firstName,
            'last_name' => fake()->lastName,
            'national_code' => fake()->numerify('##########'), 
            'avatar' => 'upload/baseUpload/default.jpg', 
            'person_type' => fake()->randomElement(['real', 'legal']), 
            'status' => fake()->randomElement(['active', 'hidden', 'inactive', 'registering', 'suspended']),
            'sort' => fake()->numberBetween(1, 100), 
            'created_by' => null, 
        ];
    }
}
