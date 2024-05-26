

<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="overflow-hidden border border-gray-200 rounded-lg bg-gray-50 mx-8">
        <h1 class="text-6xl font-semibold mb-4 ml-4">Lista de Alumnos de la Clase de Calculo</h1>

        

        <table class="min-w-full divide-y divide-gray-200 ml-4">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Matrícula del Estudiante</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre del Estudiante</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
                   
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($data as $student)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $student['student_matricula'] }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $student['user_name'] }}</td>
                        
                        <td class="px-2 whitespace-nowrap">
                            <form action="{{ route('registrar.asistencia') }}" method="POST">
                                 @csrf
                                <!-- Agrega aquí cualquier campo adicional necesario -->
                                <input type="hidden" name="student_id" value="{{ $student['student_id'] }}">
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">
                                 Pasar Lista
                                </button>
                            </form>
                        </td>

                        <td class="px-2 whitespace-nowrap">
                             <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">
                                  Remover Asistencia
                             </button>
                          </td>
                    </tr>
                    
                @endforeach
            </tbody>
        </table>
    </div>
    </x-app-layout><script src="https://cdn.tailwindcss.com"></script> 