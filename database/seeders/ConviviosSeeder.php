<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\convivios;

class ConviviosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $convivios = [
            [
                'nombre' => 'Enrique',
                'participacion' => 'si',
                'maestro' => 'Bote',
                'horas_solicitadas' => 3,
                'comida' => 'Chicharra',
                'dia' => '2024-02-25',
                'hora' => '09:00:00',
            ],
            [
                'nombre' => 'Alberto',
                'participacion' => 'no',
                'maestro' => 'Danice',
                'horas_solicitadas' => 2,
                'comida' => 'Tortas',
                'dia' => '2024-02-26',
                'hora' => '18:00:00',
            ],
            // Agrega más datos de actividades aquí según sea necesario
        ];

        // Insertar los datos de actividades en la base de datos
        foreach ($convivios as $convivios) {
            convivios::create($convivios);
        }
    }
    }

