<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ClaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        return [
            'user_id'=>User::class,
            'teacher_id'=>Teacher::class,
            'ingenieria' =>fake()->randomElement(['ISC', 'IER', 'IE' ]),
            'semestre' =>fake()->randomElement(['1', '2', '3' ]),
            'nombre' =>fake()->randomElement(['Calculo', 'Investigación de Operaciones', 'Fundamentos de BD' , 'Algebra Lineal', 'Fundamentos de telecomunicaciones' , 'Graficación']),
            'descripcion' => fake()->sentence(),
            'estadoClase' =>fake()->randomElement(['No Activo', 'Activo' ]),
        ];
    }
}
