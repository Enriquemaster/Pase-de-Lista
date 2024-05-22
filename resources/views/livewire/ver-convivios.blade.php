
<div class="py-12">

<script src="https://cdn.tailwindcss.com"></script> 


<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
<div class="flex flex-col justify-center items-center  bg-gray-200 sm:py-8">
<img src="{{ asset('imagenes/trofeo.svg') }}" alt="Imagen" class="w-64 h-64 mb-8">
<h1 class="text-5xl lg:text-6xl font-extrabold text-transparent bg-gradient-to-r from-yellow-400 to-yellow-600 bg-clip-text h-24 text-center">Propuestas</h1>
    <h2 class="text-sm mb-8 font-bold">Las propuestas de tus alumnos son:</h2>
   
    <table class="min-w-1/2 bg-white divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Nombre
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Participacion 
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Maestro
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Horas Solicitadas
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                   Comida
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                   Dia
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                   Hora
                </th>

            </tr>
        </thead>


        <tbody class="bg-white divide-y divide-gray-200">
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">   {{ $datos->first()->nombre }}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">   {{ $datos->first()->participacion }}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">   {{ $datos->first()->maestro }}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">   {{ $datos->first()->horas_solicitadas}}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">   {{ $datos->first()->comida}}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">   {{ $datos->first()->dia}}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">   {{ $datos->first()->hora}}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                <a href="{{ route('Activar_convivio1') }}" class="bg-yellow-400 hover:bg-yellow-600 text-white font-bold py-1 px-2 rounded-sm">
                         Aceptar Propuesta
                    </a>
                </td>

                
                
            </tr>


            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">   {{ $datos->skip(1)-> first()->nombre }}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">   {{ $datos->skip(1)->first()->participacion }}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">   {{ $datos->skip(1)->first()->maestro }}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">   {{ $datos->skip(1)->first()->horas_solicitadas}}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">   {{ $datos->skip(1)->first()->comida}}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">   {{ $datos->skip(1)->first()->dia}}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">   {{ $datos->skip(1)->first()->hora}}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                <a href="{{ route('Activar_convivio1') }}" class="bg-yellow-400 hover:bg-yellow-600 text-white font-bold py-1 px-2 rounded-sm">
                         Aceptar Propuesta
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
<script src="{{ asset('js/mi_script.js') }}"></script>
