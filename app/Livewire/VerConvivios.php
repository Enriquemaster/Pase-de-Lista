<?php

namespace App\Livewire;

use App\Models\convivios;
use Livewire\Component;

class VerConvivios extends Component
{
    public $datos;
    public $datos1;
    public $convivios;
    public $convivios1; 
    
    public function mount()
    {

        $this->datos= convivios::all(); 
        $this->convivios = convivios::offset(0)->first();

        $this->datos1= convivios::all(); 
        $this->convivios1 = convivios::offset(1)->first();

    }

    public function render()
    {
        $datos = convivios::all();
        $datos1 = convivios::all();
    // Pasar los datos y la función a la vista
    return view('livewire.ver-convivios', compact('datos'));
    return view('livewire.ver-convivios', compact('datos1'));


    }
}
