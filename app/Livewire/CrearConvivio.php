<?php

namespace App\Livewire;

use Livewire\Component;

class CrearConvivio extends Component
{
    public $nombre;
    public $email;

    public function enviarFormulario()
    {
        // Aquí puedes manejar la lógica de envío del formulario, por ejemplo, guardar en la base de datos
    }
    
    public function render()
    {
        return view('livewire.crear-convivio');
    }
}
