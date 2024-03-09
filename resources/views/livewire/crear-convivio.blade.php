<script src="https://cdn.tailwindcss.com"></script> 

<div class="flex justify-center items-center  bg-gray-200 sm:py-2 bg-white dark:bg-gray-800">
<form class="bg-white shadow-md rounded px-8 sm:pt-6 sm:pb-8 sm:mb-4 sm:w-3/4 xl:w-1/4 sm:h-auto xl:h-full">
        
        <div class="mb-6">
        <h1 class="text-5xl lg:text-4xl font-extrabold text-transparent bg-gradient-to-r from-yellow-400 to-yellow-600 bg-clip-text h-12">Crear Convivio</h1>
        </div>

        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="nombre">Nombre:</label>
            <input class="shadow appearance-none border rounded w-3/4 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nombre" type="text" wire:model="nombre" placeholder="Ingresa tu nombre">
        </div>

         <!-- Seleccionar participación-->
         <div class="mb-6">
                    <fieldset class="shadow appearance-none border rounded w-3/4 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="participa" name="participa">
                        <legend>
                            <span class="field-legend italic font-serif mr-2">Participa:</span>
                        </legend>
                        <div class="field-radioButton italic font-serif mb-2">
                            <input type="radio" name="si" id="option1" value="1" checked>
                            <label for="option1">si</label>
                        </div>
                        <div class="field-radioButton italic font-serif">
                            <input type="radio" name="no" id="option2" value="2">
                            <label for="option2">no</label>
                        </div>
                    </fieldset>
        </div>

        <div class="mb-6">
                <label for="maestro" class="block text-gray-700 text-sm font-bold mb-2">Maestro:</label>
                    <select class="shadow appearance-none border rounded w-3/4 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="maestro" name="maestro" required>
                        <option value="Bote">Bote</option>
                        <option value="Walter">Walter</option>
                        <option value="Danice">Danice</option>
                    </select>
        </div>

        <div class="mb-6">
                <label for="ocupa" class="block text-gray-700 text-sm font-bold mb-2">Ocupa horas en la asignatura de:</label>
                    <select class="shadow appearance-none border rounded w-3/4 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="ocupa" name="ocupa" required>
                        <option value="Bote">UXD</option>
                        <option value="Walter">Programación</option>
                        <option value="Danice">Taller de investigación</option>
                    </select>
        </div>

        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="comida">Comida:</label>
            <input class="shadow appearance-none border rounded w-3/4 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="comida" type="comida" wire:model="comida" placeholder="Ingresa una propuesta para la comida">
        </div>

    <div class="grid grid-cols-2 gap-1 w-3/4 pl-5">
        <div class="mb-4">
             <label class="block text-gray-700 text-sm font-bold mb-2" for="dia">Día:</label>
            <input class="shadow appearance-none border rounded w-3/4 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="dia" type="date" name="dia">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="hora">Hora:</label>
            <input class="shadow appearance-none border rounded w-3/4 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="hora" type="time" name="hora">
        </div>
    </div>

    <div class="flex items-center justify-center py-4">
    <a href="{{ route('Error_convivio') }}"  class="bg-yellow-400 hover:bg-yellow-600 text-white py-2 px-4 rounded hover:bg-red-600 focus:outline-none focus:ring focus:ring-red-200 focus:ring-opacity-50">Volver</a>
    </div>
        
</form>
</div>