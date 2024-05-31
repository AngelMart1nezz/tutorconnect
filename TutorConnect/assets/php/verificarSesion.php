<?php
session_start();

// Verifica que se haya iniciado la sesión
function verificarSesion() {
    if (!isset($_SESSION['usuario'])) {
        echo "<script>alert('Debes iniciar sesión para ver tu perfil'); window.location = '../views/index.php';</script>";
        exit(); // Terminar el script para evitar que el resto del código se ejecute
    }
}
?>