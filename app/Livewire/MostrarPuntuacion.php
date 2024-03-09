<?php

namespace App\Livewire;

use App\Models\Puntuacion;
use Livewire\Component;

class MostrarPuntuacion extends Component
{
/////////////////////////////////////////////
    public $datos;
    public $datos1;
    public $datos2;
    public $datos3;
    public $datos4;
    public $puntuacion;
    public $puntuacion1; 
    public $puntuacion2;
    public $puntuacion3; 
    public $puntuacion4;

    public function mount()
    {

        $this->datos= Puntuacion::all(); 
        $this->puntuacion = Puntuacion::offset(0)->first();

        $this->datos1 = Puntuacion::all(); 
        $this->puntuacion1 = Puntuacion::offset(1)->first();

        $this->datos2 = Puntuacion::all(); 
        $this->puntuacion2 = Puntuacion::offset(2)->first();

        $this->datos3 = Puntuacion::all(); 
        $this->puntuacion3 = Puntuacion::offset(3)->first();

        $this->datos4 = Puntuacion::all(); 
        $this->puntuacion4 = Puntuacion::offset(4)->first();
}
/////////////////////////////////////////////////

    public function render()
    {
        $datos = Puntuacion::all();
        $datos1 = Puntuacion::all();
        $datos2 = Puntuacion::all();
        $datos3 = Puntuacion::all();
        $datos4 = Puntuacion::all();
    // Pasar los datos y la función a la vista
    return view('livewire.mostrar-puntuacion', compact('datos'));
    return view('livewire.mostrar-puntuacion', compact('datos1'));
    return view('livewire.mostrar-puntuacion', compact('datos2'));
    return view('livewire.mostrar-puntuacion', compact('datos3'));
    return view('livewire.mostrar-puntuacion', compact('datos4'));
    
    }
}
