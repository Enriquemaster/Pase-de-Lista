console.log('El archivo mi_script.js se ha cargado correctamente.');

document.addEventListener('livewire:load', function () {
    console.log('Livewire ha terminado de cargar y la página está lista.'); // Mensaje en la consola cuando Livewire carga la página
});