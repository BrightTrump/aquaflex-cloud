<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'address_line1' => $this->faker->streetAddress,
            'address_line2' => $this->faker->secondaryAddress,
            'city' => $this->faker->city,
            'state' => $this->faker->state,
            //'postal_code' => $this->faker->postcode,
            'lga' => $this->faker->randomElement(['Ughelli North', 'Ughelli South', 'Uvwie', 'Warri West' ]),
            'country' => $this->faker->country,
        ];
    }
}
