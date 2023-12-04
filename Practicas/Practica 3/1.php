<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<div class="textito">
<form method="post">
        Precio total de la cesta: <br><input type="text" name="precio" required>
        <input type="submit" name="calcular" value="Calcular">
    </form>
</form>

<?php
    if (isset($_POST['precio'])) {
        $precio = floatval($_POST['precio']);

        if ($precio < 50) {
            $gastos = 3.95;
        } elseif ($precio >= 50 && $precio < 75) {
            $gastos = 2.95;
        } elseif ($precio >= 75 && $precio < 100) {
            $gastos = 1.95;
        } else {
            $gastos = 0;
        }

        echo "El precio de la cesta es: " . $precio . "€<br>";
        echo "Los gastos de envío son: " . $gastos . "€<br>";
        echo "Total: " . ($precio + $gastos) . "€";
    }
?>
        <li><a href="Index.php">Volver</a></li><br>
</div>
</body>
</html>