<?php

include_once 'conexionBD.php';

//variables del formulaio Hilo

$usuario = filter_input_array(INPUT_POST)['id_usuario'];
$titulo = filter_input_array(INPUT_POST)['titulo'];
$texto = filter_input_array(INPUT_POST)['hilo'];
$fecha = date("Y-m-d");
$categoria = filter_input_array(INPUT_POST)['categoria'];


$sql= "INSERT INTO hilo(creador,titulo,texto,fecha,categoria ) VALUES('$usuario','$titulo','$texto','$fecha','$categoria');";
mysqli_query($conectar, $sql );

// Retornarme al foro según su categoria
if ($categoria == 1){
header('Location: ForoVideoJ.php');

}elseif ($categoria == 2){
  header('Location: ForoSeries.php');  
}else{
   header('Location: ForoMusic.php');  
}