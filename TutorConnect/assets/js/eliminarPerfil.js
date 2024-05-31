// Obtener el modal
var modal = document.getElementById('modalEliminarPerfil');

// Obtener el botón que abre el modal
var btnEliminarPerfil = document.getElementById('eliminarPerfil');

// Obtener el botón de cancelar
var btnCancel = document.getElementById('cancelarEliminar');

// Cuando se hace clic en el enlace "Eliminar perfil", mostrar el modal
btnEliminarPerfil.onclick = function() {
    modal.style.display = 'block';
}

// Cuando se hace clic en el botón "Cancelar", cerrar el modal
btnCancel.onclick = function() {
    modal.style.display = 'none';
}

// Cuando el usuario hace clic en cualquier parte fuera del modal, cerrar el modal
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = 'none';
    }
}