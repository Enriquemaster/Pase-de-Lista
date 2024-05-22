<script src="https://cdn.tailwindcss.com"></script> 


<div class="py-12">
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
<div class="flex flex-col justify-center items-center bg-gray-200 sm:py-8">
<img src="{{ asset('imagenes/trofeo.svg') }}" alt="Imagen" class="w-64 h-64 mb-8">
<h1 class="text-5xl lg:text-6xl font-extrabold text-transparent bg-gradient-to-r from-yellow-400 to-yellow-600 bg-clip-text h-24 text-center">Tu Ranking Actual</h1>
    <h2 class="text-sm font-bold mb-8">(Esto es una prueba ya que el nombre que aparece debe ser el tuyo siempre)</h2>
   
   
    <div class="flex justify-center mb-4">
    <livewire:borrar-puntuacion :id="$puntuacion->id" />
</div>

   
    <table class="min-w-1/2 bg-white divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Nombre
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Asignatura
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Maestro
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Horas Acumuladas
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Activar convivio
                </th>

            </tr>
        </thead>


        <tbody class="bg-white divide-y divide-gray-200">
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">   {{ $datos->first()->nombre }}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">   {{ $datos->first()->asignatura }}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">   {{ $datos->first()->maestro }}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">   {{ $datos->first()->horas}}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                 <a href="{{ route('Activar_convivio') }}" class="bg-yellow-400 hover:bg-yellow-600 text-white font-bold py-1 px-2 rounded-sm">
                     Activar
                 </a>
                </td>
                
            </tr>


            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">    {{ $datos->skip(1)->first()->nombre }}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">    {{ $datos->skip(1)->first()->asignatura }}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">    {{ $datos->skip(1)->first()->maestro }}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">    {{ $datos->skip(1)->first()->horas }}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <a href="{{ route('Activar_convivio1') }}" class="bg-yellow-400 hover:bg-yellow-600 text-white font-bold py-1 px-2 rounded-sm">
                         Activar
                    </a>
                </td>
            </tr>

            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">    {{ $datos->skip(2)->first()->nombre }}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">    {{ $datos->skip(2)->first()->asignatura }}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">    {{ $datos->skip(2)->first()->maestro }}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">    {{ $datos->skip(2)->first()->horas }}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <a href="{{ route('Activar_convivio2') }}" class="bg-yellow-400 hover:bg-yellow-600 text-white font-bold py-1 px-2 rounded-sm">
                        Activar
                    </a>
                </td>
            </tr>


            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">    {{ $datos->skip(3)->first()->nombre }}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">    {{ $datos->skip(3)->first()->asignatura }}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">    {{ $datos->skip(3)->first()->maestro }}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">    {{ $datos->skip(3)->first()->horas }}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                 <a href="{{ route('Activar_convivio3') }}" class="bg-yellow-400 hover:bg-yellow-600 text-white font-bold py-1 px-2 rounded-sm">
                         Activar
                    </a>
                </td>
            </tr>


            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">    {{ $datos->skip(4)->first()->nombre }}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">    {{ $datos->skip(4)->first()->asignatura }}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">    {{ $datos->skip(4)->first()->maestro }}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">    {{ $datos->skip(4)->first()->horas }}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                <a href="{{ route('Activar_convivio4') }}" class="bg-yellow-400 hover:bg-yellow-600 text-white font-bold py-1 px-2 rounded-sm">
                    Activar
                </a>
                </td>
            </tr>


        
        </tbody>
    </table>

    <div>
   
</div>
</div>
</div>
</div>
</div>
</div>
