<?php
include_once 'conexionBD.php';
session_start();

$nombreInicio = $_POST['nombreInicio'];
$passwordInicio = $_POST['contraInicio'];

$consultaBD = ("SELECT id_usuario, nombre_usuario FROM usuario WHERE nombre_usuario = '$nombreInicio' and password = '$passwordInicio'");

$usuarioI = mysqli_query($conectar, $consultaBD);

if($usuarioI->num_rows ==1):
    $datos= $usuarioI->fetch_assoc();
    echo json_encode(array('error' => false, 'id_usuario' => $datos['id_usuario']));
    
    $_SESSION['id_usuario'] = $datos['id_usuario'];
    $_SESSION['nombre_usuario'] = $datos['nombre_usuario'];
    
else:
    echo json_encode(array('error' => true));
endif;