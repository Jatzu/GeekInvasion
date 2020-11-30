<?php

include_once 'conexionBD.php';

$nombre = filter_input_array(INPUT_POST)['nombre_usuario'];
$correo = filter_input_array(INPUT_POST)['correo'];
$contra = filter_input_array(INPUT_POST)['password'];



/*class Password{
    public function hash($contra) {
        return password_hash($contra, PASSWORD_DEFAULT, ['cost' => 15]);
    }
    public static function verify($contra, $hash) {
        return password_verify($contra, $hash);
    }
}*/

$sql = "INSERT INTO usuario ( nombre_usuario, password, correo, fecha_creacion) VALUES ('$nombre', '$contra', '$correo', now());";

echo mysqli_query($conectar, $sql);
