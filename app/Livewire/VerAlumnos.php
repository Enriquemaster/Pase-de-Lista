<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Student;



class VerAlumnos extends Component
{

    public $students;

    public function mount()
    {
        // Obtener los datos de las clases desde el modelo Clase
        $this->students = Student::all();
    }



    public function render()
    {
        return view('livewire.ver-alumnos');

            // Pasar las clases a la vista para mostrarlas
            return view('livewire.ver-alumnos', [
                'students' => $this->students,
            ]);

    }
}
