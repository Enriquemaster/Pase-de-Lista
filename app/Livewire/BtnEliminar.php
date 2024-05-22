<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Clase;


class BtnEliminar extends Component
{

    public function render()
    {
        
        return <<<'HTML'
        
        <div>
            
            
            {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
            <button
            wire:click="$toggle('modal')" 
                class='inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-neutro uppercase tracking-widest focus:bg-payneGray active:bg-payneGray focus:outline-none focus:ring-2 focus:ring-oxford focus:ring-offset-2 transition ease-in-out duration-150 bg-payneGray hover:bg-syracuse' 
                >
                    Eliminar clase
            </button>

            <x-confirmation-modal wire:model="modal">
                <x-slot:title>
                    <h1 class="text-2xl font-bold text-oxford ">Eliminación de una clase</h1>
                </x-slot:title>
                <x-slot:content>
                    <p class="text-xl">Esto borrará la clase y las asistencias y no es recuperable.</p>
                    <p class="text-xl">¿Está seguro de hacerlo?</p>
                </x-slot:content>
                <x-slot:footer>
                    <x-button wire:click="confirmarEliminacion()">Eliminar la clase</x-button>
                </x-slot:footer>
            </x-confirmation-modal>
        </div>

        HTML; 
    }

    public $modal = false;
    public $clase;

    public function mount($id)
    {
        $this->clase = Clase::find($id);
    }

    public function confirmarEliminacion()
    {
        $this->clase->delete();
        $this->modal = false;
        return redirect('/attendances');
    }

 
}
