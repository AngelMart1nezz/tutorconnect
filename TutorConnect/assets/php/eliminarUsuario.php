<?php
session_start();
include 'conexionBD.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Eliminar el usuario de la base de datos
    $query = "DELETE FROM usuarios WHERE correo = ?";
    $stmt = mysqli_prepare($conexion, $query);
    mysqli_stmt_bind_param($stmt, "s", $_SESSION['usuario']);

    if (mysqli_stmt_execute($stmt)) {
        // Eliminar la sesión
        session_destroy();
        echo    "<script>
                    alert('Usuario eliminado correctamente');
                    window.location = '../../views/index.php';
                </script>";
    } else {
        echo "Error al eliminar el usuario: " . mysqli_error($conexion);
    }

    // Cerrar la declaración y la conexión
    mysqli_stmt_close($stmt);
    mysqli_close($conexion);
}
?>