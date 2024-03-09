<?php

namespace Database\Factories;

use App\Models\Puntuacion;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Puntuacion>
 */
class PuntuacionFactory extends Factory
{
    protected $model = Puntuacion::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->name,
            'asignatura' => $this->faker->word,
            'maestro' => $this->faker->name,
            'horas' => $this->faker->numberBetween(1, 50),
        ];
    }
}
