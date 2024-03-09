<?php

namespace Database\Factories;
use App\Models\convivios;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ConviviosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->sentence,
            'participacion' => $this->faker->randomElement(['si', 'no}']),
            'maestro' => $this->faker->name,
            'horas_solicitadas' => $this->faker->numberBetween(1, 24),
            'comida' => $this->faker->randomElement(['Tortas', 'Pizza', 'Chicharra}']),
            'dia' => $this->faker->date(),
            'hora' => $this->faker->time(),
        ];
    }
}
