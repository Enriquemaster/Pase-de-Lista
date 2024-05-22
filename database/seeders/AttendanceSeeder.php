<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Clase;
use App\Models\Attendance;

class AttendanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clases = Clase::all();

        // Para cada clase, crear instancias de Attendance relacionadas con esa clase
        $clases->each(function ($clase) {
            Attendance::factory()->count(1)->create(['clase_id' => $clase->id]);
        });
    }
}
