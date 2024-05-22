<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivarController;
use App\Http\Controllers\MaestroController;
use App\Http\Controllers\VerAsistencia;
use App\Http\Controllers\PaseDeListaController;
use App\Http\Livewire\BtnEliminar;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('can:view,clase')->group(function () {
    Route::get('/clases/{clase}', [MaestroController::class, 'show'])
        ->name('clases.show');
    
    Route::post('/clases', [MaestroController::class, 'store'])
        ->name('clases.store');
    
    // Otras rutas que requieren el mismo permiso...
});




Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {



    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    Route::get('/puntuacion', function () {
        return view('puntuacion');
    })->name('puntuacion'); 

    Route::get('/PaseLista', function () {
        return view('PaseLista');
    })->name('PaseLista'); 
   

Route::get('/attendances', [VerAsistencia::class, 'index'])->name('attendances');
Route::get('/Activar_convivio', [ActivarController::class, 'activar'])->name('Activar_convivio');
Route::get('/Activar_convivio1', [ActivarController::class, 'activar1'])->name('Activar_convivio1');
Route::get('/Activar_convivio2', [ActivarController::class, 'activar2'])->name('Activar_convivio2');
Route::get('/Activar_convivio3', [ActivarController::class, 'activar3'])->name('Activar_convivio3');
Route::get('/Activar_convivio4', [ActivarController::class, 'activar4'])->name('Activar_convivio4');


Route::get('/PaseLista', [PaseDeListaController::class, 'index'])->name('PaseLista');
Route::post('/registrar-asistencia', [PaseDeListaController::class, 'registrar'])->name('registrar.asistencia');



Route::get('/Crear_convivio', function () {
    return view('Crear_convivio');
})->name('Crear_convivio'); 

Route::get('/VerClase', function () {
    return view('VerClase');
})->name('VerClase'); 


Route::get('/VerAlumnos', function () {
    return view('VerAlumnos');
})->name('VerAlumnos'); 


Route::get('/Mostrar_puntuacion', function () {
    return view('Mostrar_puntuacion');
})->name('Mostrar_puntuacion'); 

Route::get('/Error_convivio', function () {
    return view('Error_convivio');
})->name('Error_convivio'); 

Route::get('/clase', function () {
    return view('clase');
})->name('clase'); 


Route::get('/Error', function () {
    return view('Error');
})->name('Error'); 


});






