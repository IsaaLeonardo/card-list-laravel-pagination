<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Card>
 */
class CardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'mount' => $this->faker->randomFloat(2, 0, 1000),
            'recharge' => $this->faker->boolean(),
            'station' => $this->faker->word(),
            'date' => $this->faker->date(),
        ];
    }
}
