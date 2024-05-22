<div>
<script src="https://cdn.tailwindcss.com"></script> <!-- Inclusión del script de Tailwind CSS desde CDN -->
<body class="m-12 bg-white dark:bg-gray-800">
    <div class="flex flex-col justify-center items-center bg-white rounded-lg p-8 mx-52 sm:mx-20">
     
            <h1 class="text-5xl lg:text-6xl font-extrabold text-transparent bg-gradient-to-r from-yellow-400 to-yellow-600 bg-clip-text h-24 text-center">Registrar una clase</h1>
        <div class="w-full max-w-4xl rounded-lg py-4 shadow-md ">
            <div class="mb-6">
                <label for="ingenieria" class="block text-lg lg:text-xl font-semibold text-gray-700 mb-2">Ingenierías</label>
                <select class="w-full h-12 lg:h-14 border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-300" id="ingenieria" name="ingenieria" required>
                    <option value="ISC">ISC</option>
                    <option value="IE">IE</option>
                    <option value="IER">IER</option>
                </select>
            </div>

                <!-- Sección de Semestre -->
                <div class="mb-4">
                    <fieldset class="text-sm font-medium text-gray-600 grid grid-cols-9 gap-1 w-9/12 pl-5" id="semestre" name="semestre">
                        <legend>
                            <span class="field-legend italic font-serif mr-2">Semestre</span>
                        </legend>
                        <div class="field-radioButton italic font-serif mb-2">
                            <input type="radio" name="semestre" id="option1" value="1" checked>
                            <label for="option1">1</label>
                        </div>
                        <div class="field-radioButton italic font-serif">
                            <input type="radio" name="semestre" id="option2" value="2">
                            <label for="option2">2</label>
                        </div>
                        <div class="field-radioButton italic font-serif">
                            <input type="radio" name="semestre" id="option3" value="2">
                            <label for="option3">3</label>
                        </div>
                        <div class="field-radioButton italic font-serif">
                            <input type="radio" name="semestre" id="option4" value="4">
                            <label for="option4">4</label>
                        </div>
                        <div class="field-radioButton italic font-serif">
                            <input type="radio" name="semestre" id="option5" value="2">
                            <label for="option5">5</label>
                        </div>
                        <div class="field-radioButton italic font-serif">
                            <input type="radio" name="semestre" id="option6" value="6">
                            <label for="option6">6</label>
                        </div>
                        <div class="field-radioButton italic font-serif">
                            <input type="radio" name="semestre" id="option7" value="7">
                            <label for="option7">7</label>
                        </div>
                        <div class="field-radioButton italic font-serif">
                            <input type="radio" name="semestre" id="option8" value="8">
                            <label for="option8">8</label>
                        </div>
                        <div class="field-radioButton italic font-serif">
                            <input type="radio" name="semestre" id="option9" value="9">
                            <label for="option9">9</label>
                        </div>

                    </fieldset>

                    <div class=" mr-2 mt-4">
        <label for="nombre" class="block text-sm italic font-sans-serif text-gray-600 pl-5">Nombre del curso</label>
        <input type="text" id="nombre" name="nombre" class="w-42  pl-5 sm:w-42 px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" placeholder="" required>
        <span id="errorNombre" class="text-red-500 text-sm"></span>
    </div>
    
</div>
<div class="flex justify-center items-center ">
    <a href="{{ route('Activar_convivio1') }}" class="bg-yellow-400 hover:bg-yellow-600 text-white font-bold py-1 px-2 rounded-sm">
        Crear Clase
    </a>
</div>
                </div>
                
             </div>
</body>
</div>
