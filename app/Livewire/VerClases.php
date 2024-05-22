<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Clase;

class VerClases extends Component
{

    public $clases;

    public function mount()
    {
        // Obtener los datos de las clases desde el modelo Clase
        $this->clases = Clase::all();
    }

    
    public function render()
    {
        return view('livewire.ver-clases');

          // Pasar las clases a la vista para mostrarlas
          return view('livewire.ver-clases', [
            'clases' => $this->clases,
        ]);

    }
}
