
<div class="py-12">
<script src="https://cdn.tailwindcss.com"></script> 
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
<div class="flex flex-col justify-center items-center bg-gray-200 sm:py-8">
<h1 class="text-5xl lg:text-6xl font-extrabold text-transparent bg-gradient-to-r from-yellow-400 to-yellow-600 bg-clip-text h-24 text-center">Alumnos en el sistema</h1>

   
    <table class="min-w-1/2 bg-white divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    ID
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Matricula
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Estado del Estudiante
                </th>
            </tr>
        </thead>

        <tbody>
        @foreach($students as $student)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">   {{ $student->id }}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">   {{ $student->matricula }}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">   {{ $student->estadoStudent }}</div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
