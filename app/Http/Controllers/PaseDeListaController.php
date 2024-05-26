<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AttendanceStudent;
use App\Models\Student;
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
            'student_id' => $student->id,
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
    public function registrar(Request $request)
{
 // Obtener la fecha de hoy
 $fechaHoy = Carbon::now()->toDateString();

  // Obtener el ID del estudiante del formulario
  $studentId = $request->input('student_id');

 // Verificar si ya existe un registro en Attendance con la fecha de hoy
 //$attendanceExistente = Attendance::where('fecha_clase', $fechaHoy)->first();

 // Si ya existe un registro con la fecha de hoy, mostrar un mensaje de error
// if ($attendanceExistente) {
    // $mensajefallo = 'Error, ya existe un registro de asistencia para la fecha de hoy.';
    // return view('msjFallo', ['mensajefallo' => $mensajefallo]);
 //}



 // Crear un registro en el modelo Attendance
 $attendance = Attendance::create([
     'fecha_clase' => $fechaHoy,
     'tema' => 'Asistencia para la clase de calculo', // Tema relacionado con la clase 1
     'clase_id' => 2, // ID de la clase asociada
 ]);
 
    // Obtener el ID del estudiante del formulario
    $studentId = $request->input('student_id');

    // Buscar al estudiante por su ID
    $student = Student::findOrFail($studentId);

    // Cargar el estudiante con el usuario relacionado
    $student = Student::with('user')->findOrFail($studentId);
    
     // Cargar el estudiante con el usuario relacionado
     $student = $student->load('user');
    

 // Crear un nuevo registro en el modelo AttendanceStudent
 $attendanceStudent = AttendanceStudent::create([
    'attendances_id' => $attendance->id,
    'student_id' => $student->id, 
    'asistencia' => 'presente', // Opcional: Cambiar según la lógica de tu aplicación
    'observaciones' => 'Observaciones adicionales aquí', // Opcional: Obtener las observaciones del formulario
]);

$mensaje = 'Asistencia registrada correctamente para el estudiante con la matricula ';
if ($student->user) {
    $mensaje .= $student->matricula;
} else {
    $mensaje .= 'sin nombre de usuario';
}

        // Pasar el mensaje a la vista
        return view('msjExito', ['mensaje' => $mensaje,]);

}
}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

