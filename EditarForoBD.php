<?php
include_once 'ConexionBD.php';

$hilo = filter_input_array(INPUT_POST)['id_hilo'];
$titulo = filter_input_array(INPUT_POST)['titulo'];
$texto = filter_input_array(INPUT_POST)['texto'];

$sql = "UPDATE hilo SET titulo='$titulo',texto='$texto' WHERE id_hilo='$hilo';";
mysqli_query($conectar, $sql);

header("Location: MisHilos.php");
