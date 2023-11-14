<?php
session_start();

// Usuarios y sus contraseñas (puedes agregar más usuarios según sea necesario)
$usuarios = [
    'admin' => 'admin123',
    'cliente1' => 'cliente123'
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verificar credenciales
    if (array_key_exists($username, $usuarios) && $usuarios[$username] === $password) {
        // Establecer variables de sesión
        $_SESSION['username'] = $username;
        $_SESSION['login_time'] = date('Y-m-d H:i:s');

        // Establecer cookie para recordar el usuario durante 1 día (86400 segundos)
        setcookie('username', $username, time() + 86400, '/');
        
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
