<script src="https://cdn.tailwindcss.com"></script> 

<x-app-layout>
    <x-slot name="header">
    </x-slot>
    
    <div class="flex justify-center ">
        <!-- Primera columna -->
        <div class="w-4/12 bg-white mx-8 h-96 mt-16">
            <!-- Contenido de la primera columna -->
            <h1 class="text-6xl font-semibold mb-4">Lista de Clases</h1>
            <!-- Otro contenido de la primera columna -->
        </div>
        
        <!-- Segunda columna -->
        <div class="w-4/12 mx-8 h-96 mt-16">
            <!-- Contenido de la segunda columna -->
            <div class="flex justify-center items-center h-full">
                <a href="{{ route('attendances') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Ir a la otra vista
                </a>
            </div>
        </div>
    </div>
</x-app-layout>

