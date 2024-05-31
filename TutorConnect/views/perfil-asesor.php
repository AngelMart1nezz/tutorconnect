<?php
session_start();
include '../assets/php/conexionBD.php';
include '../assets/php/perfilAsesor.php';

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
    <link rel="stylesheet" href="../assets/css/style.css">
    <?php include 'header.php' ?>
</head>

<body>
    <div class="profile">
        <header class="profile__header">
            <div class="profile__highlight__wrapper">
            </div>
            <div class="profile__avatar">
                <img src="../assets/images/usuario.png" loading="lazy" alt="Perfil de asesor">
            </div>
            <div class="profile__highlight__wrapper">
                <div class="profile__highlight">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-coin" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                        <path d="M14.8 9a2 2 0 0 0 -1.8 -1h-2a2 2 0 1 0 0 4h2a2 2 0 1 1 0 4h-2a2 2 0 0 1 -1.8 -1" />
                        <path d="M12 7v10" />
                    </svg>
                    $150
                </div>
                por hora
            </div>
        </header>
        <div class="profile__name">
            <h2> <?php echo $nombre ?> <img src="../assets/svg/verified.svg" alt="Asesor verificado"></h2>
            <p> Asesor de <?php echo $materia ?> </p>
        </div>
        <main>
            <div class="tabs-wrapper">
                <ul class="tabs">
                    <li class="active">
                        <a id="tab1" href="#about">Sobre mí</a>
                    </li>
                    <li>
                        <a id="tab2" href="#reviews">Reseñas</a>
                    </li>
                    <li id="active-bg"></li>
                </ul>
            </div>
            <div id="tab1-content" class="tab-content tab-content--active">
                <h3> Te puedo ayudar con: </h3>
                <p> <?php echo $info ?> </p>
            </div>
            <div id="tab2-content" class="tab-content">
                <h3>
                    Estas son algunas de las reseñas de mis asesorados:
                </h3>
            </div>
        </main>
        <div>
            <button class="btn btn--primary">
                Agendar asesoría
            </button>
            <button class="btn btn--primary">
                Contactar asesor
            </button>  
        </div>
        
    </div>

    <footer>
        <?php include 'footer.html'?>
    </footer>

    <script src="../assets/js/script.js"></script>
</body>

</html>