<?php
include_once 'ConexionBD.php';

$id = $_GET['id'];
$sql= "DELETE FROM hilo WHERE id_hilo='$id'";
$eliminar = mysqli_query($conectar, $sql);
header("Location: MisHilos.php");

