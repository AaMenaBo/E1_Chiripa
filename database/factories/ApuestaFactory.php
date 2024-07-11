<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\apuesta>
 */
class ApuestaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'juego_id' => Fake()->numberBetween(1, 10),
            'fecha' => Fake()->date(),
            'monto' => Fake()->numberBetween(1, 1000),
        ];
    }
}
