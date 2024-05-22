<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ClaseStudent;
use App\Models\Student;
use App\Models\Clase;


class ClaseStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $studentIds = Student::pluck('id');
        $clases = Clase::all();
        
        $clases->each(function ($clase) use ($studentIds) {
            $studentIds->each(function ($studentId) use ($clase) {
                ClaseStudent::factory()->create([
                    'student_id' => $studentId,
                    'clase_id' => $clase->id, // Corregir el nombre de la columna aquí
                ]);
            });
        });

    }
}
