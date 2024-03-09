<script src="https://cdn.tailwindcss.com"></script> 
<div class="fixed inset-0 flex items-center justify-center bg-white dark:bg-gray-800 ">
    <div class="max-w-md w-full bg-white p-8 rounded-lg shadow-md">
        <div class="flex items-center justify-center mb-4">
            <img src="{{ asset('imagenes/copatriste.jpg') }}" alt="Carita triste" class="w-16 h-16">
        </div>
        <h2 class="text-2xl font-semibold text-yellow-400  mb-4">Error</h2>
        <p class="text-gray-700 mb-4">Usted todavia no es candidato para activar convivios</p>
        <a href="{{ route('dashboard') }}"  class="bg-yellow-400 hover:bg-yellow-600 text-white py-2 px-4 rounded hover:bg-red-600 focus:outline-none focus:ring focus:ring-red-200 focus:ring-opacity-50">Volver</a>
    </div>
</div>