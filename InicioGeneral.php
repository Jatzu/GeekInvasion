<?php
include_once 'conexionBD.php';
session_start();
$_SESSION['id_usuario'];

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/style.css" rel="stylesheet" type="text/css"/>

        <title>Geek Invasion</title>
    </head>
    <body>
        <header>
            <nav id="nav" class="nav1">
                <div class="contenedor-nav">
                    <div class="logo">
                        <img src="img/logo_preview_rev_1.png" alt=""/>
                    </div>
                    <div class="enlaces" id="enlaces">
                        <a href="InicioGeneral.php"  id="enlace-Musica" class="btn-header">Inicio</a>
                           <a href="ForoVideoJ.php"  id="enlace-Musica" class="btn-header">Videojuegos</a>
                        <a href="ForoMusic.php"  id="enlace-Musica" class="btn-header">Música</a>
                        <a href="ForoSeries.php"  id="enlace-Series" class="btn-header">Series</a>
                        <a href="MisHilos.php"  id="enlace-Series" class="btn-header">Mis hilos</a>
                        <a href="CerrarSesionBD.php"  id="enlace-Cerrar" class="btn-header" >Cerrar Sesión</a>
                    </div>
                </div>
            </nav>
            <div class="textos">
                <h1>Geek Invasion</h1>
                <h2>Foro destinado para la conversación sobre series, animes, música y videojuegos</h2>
            </div>
        </header>
        <main>
            <section class="contenedor" id="categoria" >
                <h3>Categorias</h3>
                <p class="after">Comparte tu opinion libremente, pero con respeto</p>
                <div class="card">
                    <div class="content-card">
                        <div class="games">
                            <img src="img/juego.jpeg" alt=""/>
                        </div>
                        <div class="texto-cat">
                            <h4>VideoJuegos</h4>
                            <p>Yo no cumplo propositos Yo desbloqueo logros.<br><br>
                                Comparte las experiencias sobre tus juegos favoritos</p>
                        </div>
                    </div>
                    <div class="content-card">
                        <div class="music">
                            <img src="img/musica.jpg" alt=""/>
                        </div>
                        <div class="texto-cat">
                            <h4>Música</h4>
                            <p>La vida es perfecta cuando llevas la música en el alma y corazón.<br><br>
                                Expande tus gustos musicales.</p>
                        </div>
                    </div>
                    <div class="content-card">
                        <div class="series">
                            <img src="img/series.jpg" alt=""/>
                        </div>
                        <div class="texto-cat">
                            <h4>Series</h4>
                            <p>Recomienda las series con las que te desvelaste.<br><br>
                                Solo un capítulo más....</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer>
           
        </footer>
        <script src="js/main.js" type="text/javascript"></script>
    </body>
</html>
