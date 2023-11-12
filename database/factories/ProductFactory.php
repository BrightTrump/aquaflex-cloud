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
            'category_id' => $this->faker->randomElement([1,2]),
            'name'=> fake()->words(3, true),
            // 'price' => fake()->randomDigit(),
            // 'size' => fake()->randomDigit(),
            // 'contain' => $this->faker->numberBetween(6,10),
            // 'unit' => $this->faker->randomElement(['CL', 'L']),
            'product_image' => fake()->imageUrl(),
        ];
    }
}
