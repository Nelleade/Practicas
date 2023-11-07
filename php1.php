<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar credenciales de usuario
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'admin' && $password === '1234') {
        session_start();
        $_SESSION['login_time'] = date('Y-m-d H:i:s');
        header('Location: php2.php');
        exit();
    } else {
        echo "Credenciales incorrectas. Inténtelo de nuevo.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Acceso a Directorio de Archivos</title>
</head>
<body>
    <div class="container">
        <h1>Acceso al Directorio de Archivos</h1>
        <form action="php1.php" method="post">
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username" required><br><br>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required><br><br>

            <input type="submit" value="Ingresar">
        </form>
    </div>
</body>
</html>
