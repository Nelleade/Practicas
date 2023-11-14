<?php
session_start();

// Eliminar todas las variables de sesión
session_unset();

// Destruir la sesión
session_destroy();

// Eliminar la cookie de recordar usuario
setcookie('username', '', time() - 3600, '/');

// Redirigir a la página de inicio
header('Location: html.html');
exit();
?>
