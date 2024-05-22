<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AttendanceStudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'attendances_id' => Attendance::class, // Relación con la clase
            'student_id' => Student::class, // Relación con la clase
            'asistencia' =>fake()->randomElement(['Presente', 'No Presente' ]),
            'observaciones' => fake()->sentence(),
        ];
    }
}
