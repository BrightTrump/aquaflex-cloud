<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
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
            'category' => $this->faker->randomElement(['water', 'drink']),
            'name'=> fake()->words(3, true),
            'price' => fake()->randomDigit(),
            'size' => fake()->randomDigit(),
            'contain' => $this->faker->numberBetween(6,10),
            'unit' => $this->faker->randomElement(['CL', 'L']),
            'thumbnail' => fake()->imageUrl(),
            'available' => 20,
        ];
    }
}
