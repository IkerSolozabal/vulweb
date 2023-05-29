<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>
    <h2>Iniciar sesión</h2>
    <form action="./pages/autenticar.php" method="POST">
        <label>Correo electrónico:</label>
        <input type="email" name="correo" required><br><br>
        <label>Contraseña:</label>
        <input type="password" name="contrasena" required><br><br>
        <input type="submit" value="Iniciar sesión">
    </form>
</body>
</html>
