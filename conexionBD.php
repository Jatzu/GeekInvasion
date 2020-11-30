<?php

// conexion con el servidor
$host = "localhost";
$usuario = "id15092218_javieradmin";
$contrase= "7>B8C!}M%@D*9ZdT";
$bd = "id15092218_geekinvasion";



// funcion conectar

$conectar = mysqli_connect($host, $usuario, $contrase, $bd) or die ("fallo al conectar");
mysqli_select_db($conectar, $bd) or die("Ocurrio un problema al intentar conectar a la base de datos");
