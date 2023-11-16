<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderStatus>
 */
class OrderStatusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $statusOptions = [
            'pending',
            2,
            3,
            4,
            5,
            6,
            7,
            8
        ];
        return [
            'status' => $this->faker->randomElement($statusOptions),
        ];
    }
}
