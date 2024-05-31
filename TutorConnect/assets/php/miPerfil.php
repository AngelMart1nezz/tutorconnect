<?php

// Consulta SQL para obtener los datos del usuario
$datos = mysqli_query($conexion, "SELECT nombre, grado, institucion, tipo, materia, info FROM usuarios WHERE correo = '$_SESSION[usuario]'");

// Verificar si la consulta se ejecutó correctamente
if (!$datos) {
    // Manejar el error
    echo "Error en la consulta SQL: " . mysqli_error($conexion);
    exit();
}

// Verificar si se encontraron datos del usuario
if (mysqli_num_rows($datos) > 0) {
    // Recuperar los datos del usuario
    $dato = mysqli_fetch_array($datos);
    // Obtener los valores de nombre, grado e institucion
    $nombre = $dato['nombre'];
    $grado = $dato['grado'];
    $institucion = $dato['institucion'];
    $tipo = $dato['tipo'];
    $materia = $dato['materia'];
    $info = $dato['info'];
} else {
    // Manejar el caso en que no se encuentren datos del usuario
    echo "No se encontraron datos del usuario en la base de datos.";
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);

?>