<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Puntuacion;
use Illuminate\Database\Seeder;

class PuntuacionSeeder extends Seeder
{
    /**
     * Run the databaseeeeeeeeeeeee seeds.
     */
    public function run(): void
    {
        Puntuacion::factory()->count(5)->create();
    }
}
