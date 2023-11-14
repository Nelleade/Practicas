<?php
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION['username']) || !isset($_COOKIE['username'])) {
    header('Location: html.html');
    exit();
}

$username = $_SESSION['username'];

// Definir permisos según el usuario
$permisos = ($username === 'admin') ? 'todos' : 'lectura';

?>

<!DOCTYPE html>
<html>
<head>
    <title>Opciones de Directorio de Archivos</title>
</head>
<body>
    <div class="container">
        <h1>Opciones de Directorio de Archivos</h1>
        <p>Bienvenido, <?php echo $username; ?>. Última sesión: <?php echo $_SESSION['login_time']; ?></p>

        <?php if ($permisos === 'todos'): ?>
            <ul>
                <li><a href="ruta.php">Obtener la ruta actual</a></li>
                <li><a href="buscar.php">Buscar un fichero</a></li>
                <li><a href="crear.php">Crear un nuevo fichero</a></li>
            </ul>
        <?php elseif ($permisos === 'lectura'): ?>
            <ul>
                <li><a href="ruta.php">Obtener la ruta actual</a></li>
                <li><a href="buscar.php">Buscar un fichero</a></li>
            </ul>
        <?php endif; ?>

        <a href="cierresesion.php">Cerrar sesión</a>
    </div>
</body>
</html>
