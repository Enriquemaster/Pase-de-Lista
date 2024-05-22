<?php

namespace Database\Seeders;
use App\Models\AttendanceStudent;
use App\Models\Student;
use App\Models\Attendance;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttendanceStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $studentIds = Student::pluck('id');
        $attendances = Attendance::all();
        
        $attendances->each(function ($attendance) use ($studentIds) {
            $studentIds->each(function ($studentId) use ($attendance) {
                AttendanceStudent::factory()->create([
                    'student_id' => $studentId,
                    'attendances_id' => $attendance->id, // Corregir el nombre de la columna aquí
                ]);
            });
        });

    }
}
