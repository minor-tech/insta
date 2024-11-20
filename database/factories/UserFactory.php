<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'username' => $this->faker->unique()->userName, // New field
            'email' => $this->faker->unique()->safeEmail,
            'profile_picture_url' => $this->faker->imageUrl(100, 100, 'people', true, 'profile'), // New field
            'bio' => $this->faker->sentence, // New field
            'password' => bcrypt('password'), // Default password
        ];
    }
}
