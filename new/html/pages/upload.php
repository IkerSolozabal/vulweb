<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location: ../login.php');
    exit();
}

$nombreUsuario = $_SESSION['usuario'];
$mensaje = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Comprobación de archivo válido
    if ($_FILES['archivo']['error'] === UPLOAD_ERR_OK) {
        $nombreArchivo = $_FILES['archivo']['name'];
        $tipoArchivo = $_FILES['archivo']['type'];

        // Verificar la extensión del archivo permitida
        $extensionesPermitidas = array('txt', 'php');
        $extensionArchivo = pathinfo($nombreArchivo, PATHINFO_EXTENSION);

        if (in_array($extensionArchivo, $extensionesPermitidas)) {
            // Mover el archivo a la carpeta de destino
            $carpetaDestino = '../uploads/';
            $rutaArchivo = $carpetaDestino . $nombreArchivo;
            move_uploaded_file($_FILES['archivo']['tmp_name'], $rutaArchivo);

            $mensaje = 'El archivo se ha subido correctamente.';
        } else {
            $mensaje = 'Tipo de archivo no permitido. Solo se permiten archivos de texto (txt) y archivos PHP (php).';
        }
    } else {
        $mensaje = 'Ha ocurrido un error al subir el archivo.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Subir ficheros</title>
    <link rel="stylesheet" type="text/css" href="../css/upload.css">
</head>
<body>
    <h2>Bienvenido, <?php echo $nombreUsuario; ?>!</h2>
    <p>Esta es la página para subir ficheros.</p>
    <div class="container">
        <?php if (!empty($mensaje)): ?>
            <p><?php echo $mensaje; ?></p>
        <?php endif; ?>
        <form method="post" enctype="multipart/form-data">
            <label for="archivo">Selecciona un archivo (txt o php):</label>
            <input type="file" id="archivo" name="archivo" accept=".txt,.php">
            <input type="submit" value="Subir archivo">
        </form>
    </div>
    <a href="inicio.php">Volver a la página de inicio</a>
</body>
</html>

