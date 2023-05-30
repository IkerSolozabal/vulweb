<?php
$servidor = getenv('BBDD');
$usuario = "remote_manager";
$contrasena = "1TrAgr(eaS2";
$basedatos = "web_app";

$conexion = new mysqli($servidor, $usuario, $contrasena, $basedatos);

if ($conexion->connect_error) {
    die("Error al conectar con la base de datos: " . $conexion->connect_error);
}
?>
