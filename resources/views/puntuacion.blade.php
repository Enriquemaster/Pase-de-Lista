<x-app-layout>
    <x-slot name="header">
    </x-slot>

    @role('alumno')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
            @livewire('mostrar-puntuacion')
            </div>
        </div>
    </div>
    @endrole


    @role('maestro')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
            @livewire('ver-convivios')
            </div>
        </div>
    </div>
    @endrole



</x-app-layout>
