<?php
session_start();

require_once '../services/conexion.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$consulta = "SELECT * FROM usuarios WHERE correo_electronico = '$correo'";
$resultado = $conexion->query($consulta);

if ($resultado->num_rows == 1) {
    $fila = $resultado->fetch_assoc();
    if ($contrasena === $fila['contrasena']) {
        $_SESSION['usuario'] = $fila['nombre'];
        header('Location: inicio.php');
        exit(); // Asegurarse de detener la ejecución después de la redirección
    } else {
        $error = "Contraseña incorrecta.";
    }
} else {
    $error = "El correo electrónico ingresado no está registrado.";
}

$conexion->close();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Autenticar</title>
    <link rel="stylesheet" type="text/css" href="../css/autenticar.css">
</head>
<body>
    <div class="container">
        <h1>Error al iniciar sesión</h1>
        <?php if (isset($error)) : ?>
            <p class="error-message"><?php echo $error; ?></p>
        <?php endif; ?>
        <a href="../index.php">Volver al formulario de inicio de sesión</a>
    </div>
</body>
</html>
