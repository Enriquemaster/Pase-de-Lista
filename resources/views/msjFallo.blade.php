<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="flex items-center justify-center h-screen">
        <div class="bg-white shadow-md rounded-lg p-8 max-w-md w-full">
            <h1 class="text-2xl font-bold mb-4">Confirmación</h1>
            <div class="text-red-600 font-semibold mb-4">{{ $mensajefallo }}</div>
            <a href="{{ route('PaseLista') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Volver
            </a>
        </div>
    </div>
</body>
</html>