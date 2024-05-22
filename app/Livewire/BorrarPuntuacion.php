<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Puntuacion;

class BorrarPuntuacion extends Component
{
    public $modal = false;
    public $puntuacion;


    public function mount($id)
    {
        $this->puntuacion = Puntuacion::find($id);
    }


    public function confirmarEliminacion()
    {
        $this->puntuacion->delete();
        $this->modal = false;
        return redirect('/Mostrar-puntuacion');
    }
    public function render()
    {
        return <<<'HTML'
        <div>
          <button wire:click="$toggle('modal')" class="...">
                    Eliminar puntuación
                </button>

                <x-confirmation-modal wire:model="modal">
                    <x-slot:title>
                        <h1 class="text-2xl font-bold text-oxford">Eliminación de una puntuación</h1>
                    </x-slot:title>
                    <x-slot:content>
                        <p class="text-xl">Esto borrará la puntuación y no se puede recuperar.</p>
                        <p class="text-xl">¿Está seguro de hacerlo?</p>
                    </x-slot:content>
                    <x-slot:footer>
                        <x-button wire:click="confirmarEliminacion">Eliminar puntuación</x-button>
                    </x-slot:footer>
                </x-confirmation-modal>

        </div>
        HTML;
    }
}
