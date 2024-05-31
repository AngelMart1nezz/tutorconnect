<?php

// Recuperar el ID de usuario desde la URL
$idUsuario = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($idUsuario > 0) {
    // Consulta para obtener los datos del perfil del usuario
    $query = "SELECT nombre, institucion, grado, materia, info FROM usuarios WHERE id = $idUsuario";
    $resultado = mysqli_query($conexion, $query);

    if(mysqli_num_rows($resultado) > 0) {
        // Extraer los datos del perfil del usuario
        $fila = mysqli_fetch_assoc($resultado);
        $nombre = $fila['nombre'];
        $institucion = $fila['institucion'];
        $grado = $fila['grado'];
        $materia = $fila['materia'];
        $info = $fila['info'];
    } else {
        echo "No se encontró ningún perfil de usuario.";
        exit();
    }

    mysqli_close($conexion);
} else {
    echo "ID de usuario no válido.";
    exit();
}

?>