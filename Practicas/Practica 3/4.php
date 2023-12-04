<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 4</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<div class="textito">
    <?php
    $matriz = array(3, 1, 2, 0);

    echo "El contenido de la matriz es el siguiente:<br>";

    foreach ($matriz as $valores) {
        echo $valores . " ";
    }
    ?>
    <li><a href="Index.php">Volver</a></li><br>
</div>
</body>
</html>
