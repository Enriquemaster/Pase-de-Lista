<script src="https://cdn.tailwindcss.com"></script> 

<x-app-layout>
    <x-slot name="header">
    </x-slot>
    

    <body class="bg-gray-100">
    <div class="flex items-center justify-center min-h-screen">
        <div class="max-w-lg bg-white p-8 rounded-lg shadow-md flex flex-col items-center">
            <img src="{{ asset('imagenes/cara.png') }}" alt="Error" class="mx-auto mb-8">
    
            <h2 class="text-2xl font-semibold text-red-600 mb-4">Error de permisos</h2>
            <p class="text-gray-700 mb-4">Usted no puede acceder a esta página porque necesita permisos.</p>
        </div>
    </div>
</body>

</x-app-layout>