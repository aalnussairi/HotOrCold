<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
            'organisation_id' => '1',
            'full_name' => $this->faker->name,
            'preferred_name' => $this->faker->word,
            'email' => $this->faker->unique()->safeEmail,
            'password' => '12345678', // password
            'admin' => '0'
        ];
    }
}
