<?php
session_start();
if (!isset($_SESSION['login_time'])) {
    header('Location: html.html');
    exit();
}

$login_time = $_SESSION['login_time'];
$current_directory = getcwd();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ruta Actual</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
        <h1>Ruta Actual</h1>
        <p>Bienvenido, su última sesión fue: <?php echo $login_time; ?></p>
        <p>Ruta actual: <?php echo $current_directory; ?></p>
        <a href="php2.php">Volver a las opciones</a>
    </div>
</body>
</html>
