<?php
$servidor = "5.22.216.32";
$usuario = "remote_manager";
$contrasena = "$uFBUp7&*79W7*17";
$basedatos = "web_app";

$conexion = new mysqli($servidor, $usuario, $contrasena, $basedatos);

if ($conexion->connect_error) {
    die("Error al conectar con la base de datos: " . $conexion->connect_error);
}
?>
