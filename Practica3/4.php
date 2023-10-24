<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 4</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<div class="textito">
    <?php

    $matriz = array(
    array(3, 1),
    array(2, 0));


    echo "<table border='1'>";
    foreach ($matriz as $fila) {
        echo "<tr>";
    foreach ($fila as $elemento) {
        echo "<td>" . $elemento . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
    ?>

    <li><a href="Index.php">Volver</a></li><br>
</div>
</body>
</html>
