<?php
include_once 'conexionBD.php';
session_id();
session_start();

$inicioU= session_id();
$Usuario = "Select nombre_usuario From usuario Where id_usuario='$inicioU'";
$devolverUsuario = mysqli_query($conectar, $Usuario);    
$mostrarUsuario = mysqli_fetch_assoc($devolverUsuario);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/estilo-inicio.css" rel="stylesheet" type="text/css"/>
        <title>Registrarse</title>
    </head>
    <body>
        <form  id="formCrear" action="usuarioBD.php" method="POST">
            <div class="form" >
                <h1 id="titulo-registro">Registro</h1>
                <div class="grupo">
                    <input type="text" name="nombre_usuario" pattern="[A-Za-z0-9_-]{1,15}" required id="name"><span class="barra"></span>
                    <label for="nombre">Nombre de usuario</label>
                </div>
                <div class="grupo">
                    <input type="email" name="correo" id="email"><span class="barra"></span>
                    <label for="correo">Email</label>
                </div>
                <div class="grupo">
                     <input type="password" name="password" pattern="[A-Za-z0-9_-]{1,15}" required id="password"><span class="barra"></span>
                     <label for="contra">Password</label>
                </div>

                <button type="submit">Registrarse</button>
                
                <br>
          
            </div>
        </form>
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/main.js" type="text/javascript"></script>
        <script src="js/ValidarInput.js" type="text/javascript"></script>
    </body>
</html>
