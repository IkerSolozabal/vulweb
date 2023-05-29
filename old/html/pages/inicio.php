<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location: ../index.php');
    exit();
}

$nombreUsuario = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Página de inicio</title>
    <link rel="stylesheet" type="text/css" href="../css/inicio.css">
    <link rel="stylesheet" type="text/css" href="../css/navbar.css">
</head>
<body>
    <nav class="navbar">
        <a href="../pages/comentarios.php" class="navbar-link">Comentarios</a>
        <a href="../services/cerrar_sesion.php" id="cerrar-sesion">Cerrar sesión</a>
    </nav>

    <div class="container">
        <h2>Bienvenido, <?php echo $nombreUsuario; ?>!</h2>
        <p>Esta es tu página de inicio.</p>
    </div>
</body>
</html>

