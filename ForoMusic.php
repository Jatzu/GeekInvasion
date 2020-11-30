<?php
include_once 'conexionBD.php';
session_id();
session_start();

$inicioU = session_id();
$Usuario = "Select nombre_usuario From usuario Where id_usuario='$inicioU'";
$devolverUsuario = mysqli_query($conectar, $Usuario);
$mostrarUsuario = mysqli_fetch_assoc($devolverUsuario);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <title>Música</title>
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
                        <a href="CerrarSesionBD.php"  id="enlace-Cerrar" class="btn-header" >Cerrar Sesión</a> </div>
                </div>
            </nav>
            <div class="textos">
                <h1>Música</h1>
                <h2>Bienvenido a la sección de Música</h2>
            </div>
        </header>
        <br>
             <div class="container" id="iniciarHilo">
            <div class="mb-3">
                <h2 class="text-primary">Comienza un nuevo hilo</h2>
                <form action="HiloForosBD.php" id="formHiloVJ" method="POST">
                    <input type="hidden" name="id_usuario" value="<?php echo $_SESSION['id_usuario']; ?>">
                     <input type="hidden" name="categoria" value="3">
                    <label for="formGroupExampleInput" class="form-label">
                    </label>
                    <input type="text" class="form-control" id="txt-titulo" name="titulo" placeholder="Escribe el titulo de tu hilo aquí" required>
                    <label for="formGroupExampleInput" class="form-label">
                    </label>
                    <input type="text" class="form-control" id="txt-hilo" name="hilo" placeholder="Escribe el contenido de tu hilo aquí" required>
                    <br>
                    <button type="submit" id="btn-publicarFJ" class="btn btn-outline-primary">Publicar</button>
                </form>
            </div>



        </div>
        <br>
        <div class="container">
            <h2 class="text-primary">Publicaciones</h2>
            <!-- Consultas de php para mostrar los datos del hilo Musica-->
            <?php
            $sql = "SELECT h.id_hilo, u.nombre_usuario,h.titulo,h.texto,h.fecha FROM hilo h INNER JOIN usuario u ON h.creador=u.id_usuario WHERE h.categoria=3" ;
            $resultado = mysqli_query($conectar, $sql);
            while ($mostrar = mysqli_fetch_array($resultado)) {
                ?>


                <div class="container" >

                    <div class=" list-group-item list-group-item-dark">
                        <label class="text-success"> <h3><strong><?php echo $mostrar['titulo'] ?></strong></h3></label> <br /> 
                        <div class="row">
                            <div class="col-8">
                                <label class="text-muted">Usuario: <?php echo $mostrar['nombre_usuario'] ?></label> <br /> 
                            </div>
                            <br>
                            <br>
                            <div class="col-4">
                                <label class="text-muted">Fecha publicación: <?php echo $mostrar['fecha'] ?></label> <br />  
                            </div>
                            <br>
                            <label><?php echo $mostrar['texto'] ?></label> <br/> 
                        </div>
                        
                        <a href='ResponderMusica.php?id=<?php echo $mostrar['id_hilo'] ?>' class="btn btn-success float-right">Responder </a>
                        <br>
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