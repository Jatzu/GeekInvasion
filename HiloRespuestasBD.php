<?php

include_once 'conexionBD.php';

//variables del formulaio Hilo
$id_hilo = filter_input_array(INPUT_POST)['id_hilo'];
$usuario = filter_input_array(INPUT_POST)['id_usuario'];
$texto = filter_input_array(INPUT_POST)['respuesta'];
$fecha = date("Y-m-d" );

// Variable para saber de que foro es la respuesta
$foro = filter_input_array(INPUT_POST)['id_foro'];



$sql= "INSERT INTO respuesta(hilo,usuario,texto,fecha ) VALUES('$id_hilo','$usuario','$texto','$fecha');";
mysqli_query($conectar, $sql );

// Redireccionamos al foro correspondiente
if($foro == 1){
    header("Location: ResponderVideojuegos.php?id=$id_hilo");
}elseif($foro == 2){
    header("Location: ResponderSeries.php?id=$id_hilo");
}else{
    header("Location: ResponderMusica.php?id=$id_hilo");
}

