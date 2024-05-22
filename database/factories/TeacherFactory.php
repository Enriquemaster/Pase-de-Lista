<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TeacherFactory extends Factory
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
            'academia' =>fake()->randomElement(['TecMotul', 'Tecnológico de software']),
            'estadoTeacher' =>fake()->randomElement(['No Activo', 'Activo']),
        ];
    }
}
