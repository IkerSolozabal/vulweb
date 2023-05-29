<?php
session_start();

require_once '../services/conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $comentario = trim($_POST['comentario']);

    if (!empty($comentario)) {
        $sql = "INSERT INTO comentarios (comentario) VALUES ('$comentario')";
        if ($conexion->query($sql) === TRUE) {
            $mensaje = "Comentario agregado exitosamente.";
        } else {
            $mensaje = "Error al agregar el comentario: " . $conexion->error;
        }
    } else {
        $mensaje = "Por favor, ingresa un comentario válido.";
    }
}

$conexion->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Comentarios</title>
    <link rel="stylesheet" type="text/css" href="../css/navbar.css"> 
<link rel="stylesheet" type="text/css" href="../css/agregar_comentario.css"> 
</head>
<body>
    <nav class="navbar">
        <a href="../pages/inicio.php" class="navbar-link">Inicio</a>
        <a href="../services/cerrar_sesion.php" id="cerrar-sesion">Cerrar sesión</a>
    </nav>

    <div class="container">
        <p><?php echo $mensaje; ?></p>
    </div>
    <form action="comentarios.php" method="GET">
            <button type="submit">Volver a comentarios</button>
        </form>
</body>
</html>
