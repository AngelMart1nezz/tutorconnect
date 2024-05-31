<?php

include '../assets/php/verificarSesion.php';
verificarSesion();

include '../assets/php/conexionBD.php';
include '../assets/php/miPerfil.php'

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Perfil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">    <?php include 'header.php' ?>
</head>

<body>
    <div class="profile">
        <header class="profile__header">
            <div class="profile__highlight__wrapper">
            </div>
            <div class="profile__avatar">
                <img src="../assets/images/usuario.png" loading="lazy" alt="Foto de perfil">
            </div>
            <div class="profile__highlight__wrapper">
            </div>
        </header>
        <div class="profile__name">
            <h2> <?php echo $nombre ?> <img src="../assets/svg/verified.svg" alt="Usuario verificado"></h2>
        </div>
        <main>
            <div class="center">
                <ul class="tabs">
                    <li class="active">
                        <a id="tab1" href="">Sobre mí</a>
                    </li>
                    <li id="active-bg"></li>
                </ul>
            </div>
            <div id="tab1-content" class="tab-content tab-content--active">
                <p> <b> Nivel académico: </b> <?php echo $grado ?> </p>
                <p> <b> Institución: </b> <?php echo $institucion ?> </p>
            <?php if($tipo == "asesor") {
                echo "<p> <b> Asesor de $materia <b> </p>
                    <p> <b> Temas de especialidad: </b> </p>
                    <p> $info </p>";
            }
            ?>
        </main>
        <a href="editar-perfil.php" class="btn">
            Editar perfil
        </a>
        <a href="#" class="btn" id="eliminarPerfil">Eliminar perfil</a>
    </div>

    <?php include 'modalEliminarPerfil.html' ?>

    <footer>
        <?php include 'footer.html'?>
    </footer>

    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/eliminarPerfil.js"></script>
    
</body>
</html>