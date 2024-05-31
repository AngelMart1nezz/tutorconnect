<?php

function obtenerMaterias($conexion) {
    $consulta = "SELECT DISTINCT materia FROM usuarios WHERE tipo = 'asesor' ORDER BY materia ASC";
    $resultado = mysqli_query($conexion, $consulta);
    return $resultado;
}

function obtenerPerfilesDeAsesores($conexion, $filtro) {
    if ($filtro === 'busqueda') {
        $busqueda = mysqli_real_escape_string($conexion, $_GET['busqueda']);
        $busqueda = strtolower($busqueda);

        $consulta = "
            SELECT * FROM usuarios 
            WHERE tipo = 'asesor' 
            AND (
                LOWER(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(nombre, 'á', 'a'), 'é', 'e'), 'í', 'i'), 'ó', 'o'), 'ú', 'u'), 'ñ', 'n')) LIKE '%$busqueda%'
                OR LOWER(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(materia, 'á', 'a'), 'é', 'e'), 'í', 'i'), 'ó', 'o'), 'ú', 'u'), 'ñ', 'n')) LIKE '%$busqueda%'
            )";
    } elseif ($filtro === 'materia') {
        $materiaSeleccionada = mysqli_real_escape_string($conexion, $_GET['materia']);
        $consulta = "
            SELECT * FROM usuarios 
            WHERE tipo = 'asesor' AND 'materia' = '$materiaSeleccionada'";
    } else {
        $consulta = "SELECT * FROM usuarios WHERE tipo = 'asesor'";
    }
    
    $resultado = mysqli_query($conexion, $consulta);
    return $resultado;
}

$filtro = isset($_GET['busqueda']) ? 'busqueda' : (isset($_GET['materia']) ? 'materia' : '');

$resultadoMaterias = obtenerMaterias($conexion);

?>