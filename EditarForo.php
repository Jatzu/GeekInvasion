<?php
include_once 'conexionBD.php';

session_start();

// Obtengo la id del hilo atraves de la URL
$id_hilo = filter_input_array(INPUT_GET)['id'];


// Consulta para mostar los datos en los input
$sql = "SELECT titulo, texto FROM hilo WHERE id_hilo='$id_hilo'";
$resultado = mysqli_query($conectar, $sql);
$datos = mysqli_fetch_assoc($resultado);        
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
            <h2 class="text-primary"> Editar Publicación</h2>
            <!--Formulario con los datos de la base de datos-->
              <form action="EditarForoBD.php" id="formHiloVJ" method="POST">
                    <input type="hidden" name="id_hilo" value="<?php echo $id_hilo  ?>">
                    <label for="formGroupExampleInput" class="form-label">
                    </label>
                    <input type="text" class="form-control" id="txt-titulo" name="titulo" placeholder="Escribe el titulo de tu hilo aquí" required="" value="<?php echo $datos['titulo'] ?>">
                    <label for="formGroupExampleInput" class="form-label">
                    </label>
                    <input type="text" class="form-control" id="txt-hilo" name="texto" placeholder="Escribe el contenido de tu hilo aquí" required="" value="<?php echo $datos['texto'] ?>">
                    <br>
                    <button type="submit" id="btn-publicarFJ" class="btn btn-outline-primary">Editar</button>
                </form>
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
