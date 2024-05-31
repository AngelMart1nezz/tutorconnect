document.addEventListener('DOMContentLoaded', function() {
    var materiaSelect = document.getElementById('materiaSelect');
    var otraMateria = document.getElementById('otraMateria');

    // Función para mostrar u ocultar el campo "otraMateria"
    function toggleOtraMateria() {
        if (materiaSelect.value === 'Otra') {
            otraMateria.style.display = 'block';
        } else {
            otraMateria.style.display = 'none';
        }
    }

    // Llamar a la función al cargar la página
    toggleOtraMateria();

    // Agregar evento al cambiar el valor del select
    materiaSelect.addEventListener('change', toggleOtraMateria);
});