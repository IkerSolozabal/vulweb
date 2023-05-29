<!DOCTYPE html>
<html>
<head>
    <title>Comentarios</title>
    <link rel="stylesheet" type="text/css" href="../css/comentarios.css">
    <link rel="stylesheet" type="text/css" href="../css/navbar.css">
</head>
<body>
    <nav class="navbar">
        <a href="../pages/inicio.php" class="navbar-link">Inicio</a>
        <a href="../services/cerrar_sesion.php" id="cerrar-sesion">Cerrar sesión</a>
    </nav>

    <div class="container">
        <h2>Agregar comentario</h2>
        <form action="agregar_comentario.php" method="POST">
            <textarea name="comentario" placeholder="Escribe tu comentario" required></textarea>
            <button type="submit">Enviar</button>
        </form>

        <h2>Últimos comentarios</h2>
        <ul>
            <?php
            require_once '../services/conexion.php';
            
            $consulta = "SELECT * FROM comentarios ORDER BY id DESC";
            $resultado = $conexion->query($consulta);

            while ($fila = $resultado->fetch_assoc()) {
    		echo '<li>' . htmlspecialchars($fila['comentario'], ENT_QUOTES, 'UTF-8') . '</li>';
	    }		
            ?>
        </ul>
    </div>
</body>
</html>

