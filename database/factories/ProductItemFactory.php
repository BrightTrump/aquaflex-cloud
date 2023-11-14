<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductItem>
 */
class ProductItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id' => $this->faker->numberBetween(1, 2),
            'SKU' => $this->faker->unique()->numberBetween(1000000, 9999999),
            'qty_in_stock' => $this->faker->numberBetween(1, 50),
            'product_image' => $this->faker->imageUrl(640, 480),
            'price' => $this->faker->randomFloat(2, 0, 999.99),
            'size' => $this->faker->numberBetween(1, 100),
            'contain' => $this->faker->numberBetween(8,12),
            'unit' => $this->faker->randomElement(['CL', 'L']),
        ];
    }
}
