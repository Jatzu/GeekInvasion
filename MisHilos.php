<?php
include_once 'conexionBD.php';

session_start();
$usuario = $_SESSION['id_usuario'];
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
            <div class="textos">
                <h1>Mis hilos</h1>
                <h2>Revisa tu historia en la página </h2>
            </div>
        </header>
        <br>

        <br>
        <div class="container">
            <h2 class="text-primary">Foro Videojuegos</h2>
            <!-- Consultas de php para mostrar los datos del hilo Videojuegos-->
            <?php
            $sql = "SELECT h.id_hilo, u.nombre_usuario,h.titulo,h.texto,h.fecha FROM hilo h INNER JOIN usuario u ON h.creador=u.id_usuario WHERE h.categoria=1 AND h.creador ='$usuario'"  ;
            $resultado = mysqli_query($conectar, $sql);
            while ($mostrar = mysqli_fetch_array($resultado)) {
                ?>


                <div class="container" >

                    <div class=" list-group-item list-group-item-dark">
                        <label> <h3><strong><?php echo $mostrar['titulo'] ?></strong></h3></label> <br /> 
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
                        <a href='EditarForo.php?id=<?php echo $mostrar['id_hilo'] ?>' class="btn btn-outline-primary">Editar </a>
                        <a href='EliminarForoBD.php?id=<?php echo $mostrar['id_hilo'] ?>' onclick="return Eliminar()" class="btn btn-outline-danger">Eliminar </a>
                        <br>
                    </div>
                </div>
                <br>
                <?php
            }
            ?>
        </div>
                <div class="container">
            <h2 class="text-primary">Foro Series</h2>
            <!-- Consultas de php para mostrar los datos del hilo Series-->
            <?php
            $sql1 = "SELECT h.id_hilo, u.nombre_usuario,h.titulo,h.texto,h.fecha FROM hilo h INNER JOIN usuario u ON h.creador=u.id_usuario WHERE h.categoria=2 AND h.creador ='$usuario'"  ;
            $resultado1 = mysqli_query($conectar, $sql1);
            while ($mostrar1 = mysqli_fetch_array($resultado1)) {
                ?>


                <div class="container" >

                    <div class=" list-group-item list-group-item-dark">
                        <label> <h3><strong><?php echo $mostrar1['titulo'] ?></strong></h3></label> <br /> 
                        <div class="row">
                            <div class="col-8">
                                <label class="text-muted">Usuario: <?php echo $mostrar1['nombre_usuario'] ?></label> <br /> 
                            </div>
                            <div class="col-4">
                                <label class="text-muted">Fecha publicación: <?php echo $mostrar1['fecha'] ?></label> <br />  
                            </div>
                            <label><?php echo $mostrar1['texto'] ?></label> <br/> 
                        </div>
                        <br>
                        <a href='EditarForo.php?id=<?php echo $mostrar1['id_hilo'] ?>' class="btn btn-outline-primary">Editar </a>
                        <a href='EliminarForoBD.php?id=<?php echo $mostrar1['id_hilo'] ?>' onclick="return Eliminar()" class="btn btn-outline-danger">Eliminar </a>
                        <br>
                    </div>
                </div>
                <br>
                <?php
            }
            ?>
        </div>
        <br>
                <div class="container">
            <h2 class="text-primary">Foro Música</h2>
            <!-- Consultas de php para mostrar los datos del hilo música-->
            <?php
            $sql2 = "SELECT h.id_hilo, u.nombre_usuario,h.titulo,h.texto,h.fecha FROM hilo h INNER JOIN usuario u ON h.creador=u.id_usuario WHERE h.categoria=3 AND h.creador ='$usuario'"  ;
            $resultado2 = mysqli_query($conectar, $sql2);
            while ($mostrar2 = mysqli_fetch_array($resultado2)) {
                ?>

                <div class="container" >

                    <div class=" list-group-item list-group-item-dark">
                        <label> <h3><strong><?php echo $mostrar2['titulo'] ?></strong></h3></label> <br /> 
                        <div class="row">
                            <div class="col-8">
                                <label class="text-muted">Usuario: <?php echo $mostrar2['nombre_usuario'] ?></label> <br /> 
                            </div>
                            <div class="col-4">
                                <label class="text-muted">Fecha publicación: <?php echo $mostrar2['fecha'] ?></label> <br />  
                            </div>
                            <label><?php echo $mostrar2['texto'] ?></label> <br/> 
                        </div>
                        <br>
                        <a href='EditarForo.php?id=<?php echo $mostrar2['id_hilo'] ?>' class="btn btn-outline-primary">Editar </a>
                        <a href='EliminarForoBD.php?id=<?php echo $mostrar2['id_hilo'] ?>' onclick="return Eliminar()" class="btn btn-outline-danger">Eliminar </a>
                        <br>
                    </div>
                </div>
                <br>
                <?php
            }
            ?>
        </div>
        <footer>
            <div class="container-fluid btn-dark ">
                <p class="text-info text-center " >Recuerda mantener el respeto por los demás</p>
                <h3 class="text-center">Todos los derechos reservados Geek Invasion 2020</h3>
                <h5 class="text-right">Desarrollado por JT COMPANY</h5>
            </div>
        </footer>
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>

        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/EliminarForo.js" type="text/javascript"></script>
    </body>
</html>