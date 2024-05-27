
<script src="https://cdn.tailwindcss.com"></script> 

<x-app-layout>
    <x-slot name="header">
    </x-slot>
    
    <div>
    

    <div class="overflow-hidden border border-gray-200 rounded-lg bg-gray-50 mx-8">

        <div style="display: flex; justify-content: center;">
            <img src="{{ asset('imagenes/book.svg') }}" alt="Imagen" class="w-64 h-64 mb-8">
        </div>
        <h1 class="text-6xl font-semibold mb-4 ml-4">Lista de Clases </h1>
    <h1 class="text-2xl font-semibold mb-4 ml-4">Clase: {{ $claseNombre }}</h1>
    <h1 class="text-2xl font-semibold mb-4 ml-4">profesor: {{ $nombre_usuario }} </h1>
    

    @php
    $id = 1; // Asigna un valor a $id, por ejemplo, un ID específico
@endphp
  
<div class="flex justify-center mb-4">
<livewire:btn-eliminar :id="$id" />



    <a href="{{ route('PaseLista') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Pasar Lista
    </a>


</div>





        <table class="min-w-full divide-y divide-gray-200 ml-4">
            <thead class="bg-gray-50">

                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Matrícula del Estudiante</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">asistencias</th>
                    @foreach ($fechasClase as $fechaClase)
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{ $fechaClase }}  <input type="hidden" name="student_id" value="{{ $fechaClase }}"></th>
                     @endforeach
        </tr>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($data as $student)
              
                <tr>
                    <tr>
                   
                        <td class="px-6 py-4 whitespace-nowrap">{{ $student['student_matricula'] }} </td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $student['user_name'] }}  <input type="hidden" name="student_id" value="{{ $student['student_id'] }}"> </td>
               

                @endforeach
        
            </tbody>
        </table>
    </div>


</div>


</x-app-layout>

