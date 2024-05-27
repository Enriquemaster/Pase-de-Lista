<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AttendanceStudent;
use App\Models\Attendance;
use App\Models\Clase;

class VerAsistencia extends Controller
{
    public function index()
    {

        $attendanceRecords = AttendanceStudent::join('attendances', 'attendance_student.attendances_id', '=', 'attendances.id')
        ->where('attendances.clase_id', 1) // Filtrar por clase_id 1
        ->get();


        $clase = Clase::find(2); // Suponiendo que la clase que te interesa tiene el ID 1
        $claseNombre = $clase ? $clase->nombre : null;
        $user_id = $clase->user_id;
        $nombre_usuario = $clase->user->name;
   

       // Obtener todos los registros de la tabla pivot attendance_student
       $attendanceStudents = AttendanceStudent::with(['Attendance', 'Student.user'])->get();
     
       $uniqueStudents = $attendanceStudents->unique('student_id');

       // Crear una colección de datos con la información deseada
        // Crear una colección de datos con la información deseada
        $dataCollection = $attendanceRecords->map(function ($record) use ($claseNombre) { 
            $student = $record->student;
            $userName = $student->user ? $student->user->name : null;
           
        
        return [
            'student_id' => $student->id,
            'student_matricula' => $student->matricula,
            'user_name' => $userName,
            'asistencia' => $record->asistencia,
            'clase_nombre' => $claseNombre,
           
        ];
    });

   $fechasClase = Attendance::where('clase_id', 2)->orderBy('fecha_clase', 'asc')->pluck('fecha_clase');

   
    //dd($attendanceStudents);

    // Retorna una vista pasando los datos
    return view('attendances', ['data' => $dataCollection, 'fechasClase' => $fechasClase, 'claseNombre' => $claseNombre, 'nombre_usuario' => $nombre_usuario]);
   
    }




    public function Asistencia()
    {
       // Definir la clase_id que queremos buscar
    $claseId = 2;

    // Obtener las asistencias de los estudiantes para la clase con id 2 desde el modelo Attendance
  // Obtener las fechas de clase para la clase con ID 2
  $fechasClase = Attendance::where('clase_id', $claseId)->pluck('fecha_clase')->unique();

  $studentsPorFecha = [];

  foreach ($fechasClase as $fecha) {
      $attendance = Attendance::where('clase_id', $claseId)->where('fecha_clase', $fecha)->first();
      
       // Verificar si se encontró una asistencia para la fecha actual
       if ($attendance) {
        // Obtener el ID de la asistencia
        $attendanceId = $attendance->id;

        // Buscar los IDs de los estudiantes asociados a esta asistencia en AttendanceStudent
        $studentIds = AttendanceStudent::where('attendances_id', $attendanceId)->pluck('student_id');

        // Almacenar los IDs de estudiantes en el array $studentsPorFecha
        $studentsPorFecha[$fecha] = $studentIds->toArray();

    } else {
        // En caso de no encontrar asistencia, aseguramos una entrada vacía
        $studentsPorFecha[$fecha] = [];

    }
}

// Retornar la vista con los datos
return view('attendances')->with('fechasClase', $fechasClase)
                           ->with('studentsPorFecha', $studentsPorFecha);

    }
}
