<?php
session_start();
if (!isset($_SESSION['login_time'])) {
    header('Location: html.html');
    exit();
}

$login_time = $_SESSION['login_time'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Opciones de Directorio de Archivos</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
        <h1>Opciones de Directorio de Archivos</h1>
        <p>Bienvenido, su última sesión fue: <?php echo $login_time; ?></p>
        <ul>
            <li><a href="ruta.php">Obtener la ruta actual</a></li>
            <li><a href="buscar.php">Buscar un fichero</a></li>
            <li><a href="crear.php">Crear un nuevo fichero</a></li>
        </ul>
    </div>
</body>
</html>
