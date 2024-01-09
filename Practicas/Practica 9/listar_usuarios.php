<?php
include_once 'conexion.php';

$sql = "SELECT * FROM usuarios";
$stmt = $conn->query($sql);
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lista de Usuarios</title>
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
    h2 {
        color: #333;
        margin-left: 0%;
        margin-top: 2%;

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

    a {
        background-color: #3498db;
        color: #fff;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        margin-left: 24%;
    }

    a:hover {
        background-color: #217dbb;
    }

table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 1%;
}


table th,
table td {
  border: 1px solid #ddd;
  padding: 12px;
  text-align: left;
}


table th {
  background-color: #f2f2f2;
}


table th {
  font-family: 'Arial', sans-serif;
  font-weight: bold;
}

table td {
  font-family: 'Arial', sans-serif;
}


table {
  background-color: #fff;
}


table th,
table td {
  border: 1px solid #e0e0e0;
  box-shadow: 0 2px 2px -1px rgba(0, 0, 0, 0.1);
}
</style>
</head>
<body>
    <h2>Lista de Usuarios</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Edad</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($usuarios as $usuario) : ?>
            <tr>
                <td><?php echo $usuario['id']; ?></td>
                <td><?php echo $usuario['nombre']; ?></td>
                <td><?php echo $usuario['email']; ?></td>
                <td><?php echo $usuario['edad']; ?></td>
                <td>
                    <a href="modificar_usuario.php?id=<?php echo $usuario['id']; ?>">Modificar</a>
                    <a href="eliminar_usuario.php?id=<?php echo $usuario['id']; ?>">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
