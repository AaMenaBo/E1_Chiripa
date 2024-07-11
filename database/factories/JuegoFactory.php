<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Juego>
 */
class JuegoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => Fake()->firstNameMale(),
            'cantidad_jugadores' => Fake()->numberBetween(1, 10),
            'juego_de_cartas' => Fake()->boolean(50),
        ];
    }
}
