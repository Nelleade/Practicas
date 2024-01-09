<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registrar usuarios</title>
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

<h1>Crear Nuevo Usuario</h1>

<form method="post">
  <label for="id">ID:</label>
  <input type="number" id="id" name="id"><br><br>

  <label for="nombre">Nombre:</label>
  <input type="text" id="nombre" name="nombre"><br><br>

  <label for="email">Email:</label>
  <input type="email" id="email" name="email"><br><br>

  <label for="edad">Edad:</label>
  <input type="number" id="edad" name="edad"><br><br>

  <input type="submit" value="Crear Usuario">
</form>

</body>
</html>

<?php
include_once 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $edad = $_POST['edad'];

    $sql = "INSERT INTO usuarios (id, nombre, email, edad) VALUES (:id, :nombre, :email, :edad)";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':edad', $edad);

    $stmt->execute();
    header("Location: listar_usuarios.php");
    exit();
}
?>
