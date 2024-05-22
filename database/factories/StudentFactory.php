<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class StudentFactory extends Factory
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
            'matricula' => $this->faker->numberBetween(2007005, 200745),
            'estadoStudent' =>fake()->randomElement(['No Activo', 'Activo' ]),
        ];
    }
}
