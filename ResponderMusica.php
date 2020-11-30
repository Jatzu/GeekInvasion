<?php
include_once 'conexionBD.php';

session_start();
$id_hilo = filter_input_array(INPUT_GET)['id'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <title>VideoJuegos</title>
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

        </header>

        <br>

        <br>
        <div class="container">
            <h2 class="text-primary">Publicación</h2>
            <!-- Consultas de php para mostrar los datos del hilo Musica-->
            <?php
            $sqlHilo = "SELECT h.id_hilo, u.nombre_usuario,h.titulo,h.texto,h.fecha FROM hilo h INNER JOIN usuario u ON h.creador=u.id_usuario WHERE h.id_hilo = '$id_hilo'";
            $resultado = mysqli_query($conectar, $sqlHilo);
            while ($mostrar = mysqli_fetch_array($resultado)) {
                ?>


                <div class="container" >

                    <div class=" list-group-item list-group-item-dark">
                        <label class="text-success"> <h3><strong><?php echo $mostrar['titulo'] ?></strong></h3></label> <br /> 
                        <div class="row">
                            <div class="col-8">
                                <label class="text-muted">Usuario: <?php echo $mostrar['nombre_usuario'] ?></label> <br /> 
                            </div>
                            <div class="col-4">
                                <label class="text-muted">Fecha publicación: <?php echo $mostrar['fecha'] ?></label> <br />  
                            </div>
                            <label><?php echo $mostrar['texto'] ?></label> <br/> 
                        </div>
                        
                        <br>
                    </div>
                </div>
                <br>
                <?php
            }
            ?>
            <div class="container" >
                <form action="HiloRespuestasBD.php" id="formHiloVJ" method="POST">
                    <input type="hidden" name="id_usuario" value="<?php echo $_SESSION['id_usuario']; ?>">
                    <input type="hidden" name="id_hilo" value="<?php echo $id_hilo; ?>">
                    <input type="hidden" name="id_foro" value="3">

                    <div class="row">
                        <div class="col-10">
                            <input type="text" class="form-control" id="txt-respuesta" name="respuesta" placeholder="Escribe su respuesta" required>
                        </div>
                        <div class="col-2">
                            <button type="submit" id="btn-publicarFJ" class="btn btn-outline-primary float-right">Responder</button>
                        </div>
                    </div>
                </form>
            </div>
            <br>
            <h2 class="text-primary">Respuestas</h2>
            <!--Consultas de php para mostrar los datos de  respuesta Musica-->
            <?php
            $sqlRespuesta = "SELECT r.hilo, u.nombre_usuario,r.texto,r.fecha FROM respuesta r INNER JOIN usuario u ON r.usuario=u.id_usuario WHERE r.hilo='$id_hilo'";
            $resultadoRespuesta = mysqli_query($conectar, $sqlRespuesta);
            while ($mostrar = mysqli_fetch_array($resultadoRespuesta)) {
                ?>


                <div class="container" >

                    <div class=" list-group-item list-group-item-dark">

                        <div class="row">
                            <div class="col-8">
                                <label class="text-muted">Usuario: <?php echo $mostrar['nombre_usuario'] ?></label> <br /> 
                            </div>
                            <div class="col-4">
                                <label class="text-muted">Fecha publicación: <?php echo $mostrar['fecha'] ?></label> <br />  
                            </div>
                            <br>
                            <label><?php echo $mostrar['texto'] ?></label> <br/> 
                        </div>
                        <br>
                    </div>
                </div>
                <br>
                <?php
            }
            ?>
        </div>
        <br>

        <footer>
            <div class="container-fluid btn-dark ">
                <p class="text-info text-center " >Recuerda mantener el respeto por los demás</p>
                <h3 class="text-center">Todos los derechos reservados Geek Invasion 2020</h3>
                <h5 class="text-right">Desarrollado por JT COMPANY</h5>
            </div>
        </footer>
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>

        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>
