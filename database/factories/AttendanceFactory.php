<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attendance>
 */
class AttendanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'clase_id' => Clase::class, // Relación con la clase
            'tema' => $this->faker->sentence(),
            'fecha_clase' => $this->faker->dateTimeBetween('-1 month', 'now'),
        ];
    }
}
