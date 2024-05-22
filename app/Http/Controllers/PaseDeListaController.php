<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AttendanceStudent;
use App\Models\Attendance;
use App\Models\Clase;
use Carbon\Carbon;


class PaseDeListaController extends Controller
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
            'student_matricula' => $student->matricula,
            'user_name' => $userName,
            'asistencia' => $record->asistencia,
            'clase_nombre' => $claseNombre,
           
        ];
    });

    $fechasClase = Attendance::orderBy('fecha_clase', 'asc')->pluck('fecha_clase');
   
   
    //dd($attendanceStudents);

    // Retorna una vista pasando los datos
    return view('PaseLista', ['data' => $dataCollection, 'fechasClase' => $fechasClase, 'claseNombre' => $claseNombre, 'nombre_usuario' => $nombre_usuario]);
   
    }


//////////////////////////////////////////////////////////////////////////////////////
    public function registrar()
{
 // Obtener la fecha de hoy
 $fechaHoy = Carbon::now()->toDateString();
    
 // Crear un registro en el modelo Attendance
 $attendance = Attendance::create([
     'fecha_clase' => $fechaHoy,
     'tema' => 'Asistencia para la clase con ID 2', // Tema relacionado con la clase 1
     'clase_id' => 2, // ID de la clase asociada
 ]);

// Crear un registro en el modelo AttendanceStudent para asociar la asistencia al estudiante
AttendanceStudent::create([
    'attendances_id' => $attendance->id,
    'student_id' => $student_id,
    'asistencia' => "Presente",
    'observaciones' => "Se presento en clases",


]);

 // Puedes devolver algún mensaje de éxito si lo deseas
 return 'Asistencia registrada correctamente.';
}
}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

