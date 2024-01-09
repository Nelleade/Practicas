<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Formulario con Redirección</title>
  <style>
    body {
        font-family: 'Brush Script MT';
        background-image: url(fondo.jpg);
        background-size: cover;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }
    h1 {
        color: #333;
        margin-left: 0%;
        margin-top: 21%;

    }

    form {
        max-width: 400px;
        margin-top: 20%;
        margin-left: 15%;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    button {
        background-color: #3498db;
        color: #fff;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    button:hover {
        background-color: #217dbb;
    }
  </style>
</head>
<body>

<h1>Bienvenido</h1>

<form method="post">
  <button type="submit" name="boton1">Crear</button>

  <button type="submit" name="boton4">Listar</button>
</form>

<?php
include_once 'conexion.php';

if (isset($_POST['boton1'])) {
    header("Location: registro_usuarios.php");
    exit();
} elseif (isset($_POST['boton4'])) {
    header("Location: listar_usuarios.php");
    exit();
}
?>

</body>
</html>
