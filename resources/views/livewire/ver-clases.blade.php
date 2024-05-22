<div>
<script src="https://cdn.tailwindcss.com"></script> 
<div class="flex flex-col justify-center items-center bg-gray-200 sm:py-8 mx-40">
<h1 class="text-5xl lg:text-6xl font-extrabold text-transparent bg-gradient-to-r from-yellow-400 to-yellow-600 bg-clip-text h-24 text-center">Clases</h1>

<table class="min-w-1/2 bg-white divide-y divide-gray-200 " >
        <thead class="bg-gray-50">
            <tr>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ingeniería</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Semestre</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Descripción</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Estado</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clases as $clase)
            <tr>

            <td class="px-6 py-4 whitespace-nowrap"> 
            <div class="text-sm text-gray-900">{{ $clase->id }}
            </div>
            </td>
           


            <td class="px-6 py-4 whitespace-nowrap"> 
                <div class="text-sm text-gray-900">{{ $clase->ingenieria }}
                </div>
                </td>

                 <td class="px-6 py-4 whitespace-nowrap"> 
            <div class="text-sm text-gray-900">{{ $clase->semestre }}
            </div>
            </td>

                 <td class="px-6 py-4 whitespace-nowrap"> 
            <div class="text-sm text-gray-900">{{ $clase->nombre }}
            </div>
            </td>

                <td class="px-6 py-4 whitespace-nowrap"> 
            <div class="text-sm text-gray-900">{{ $clase->descripcion }}
            </div>
            </td>

            <td class="px-6 py-4 whitespace-nowrap"> 
            <div class="text-sm text-gray-900">{{ $clase->estadoClase }}
            </div>
            </td>

              <td class="px-6 py-4 whitespace-nowrap"> 
            <div class="text-sm text-gray-900">
                    <a href="{{ route('clases.show', $clase->id) }}" class="text-blue-500 hover:text-blue-700">Ver detalles</a>
                    <!-- Agrega más acciones según sea necesario, como editar o eliminar -->
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
