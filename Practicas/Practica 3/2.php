<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 2</title>
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
    if (isset($_POST['calcular'])) {
        $precio = floatval($_POST['precio']);

        switch (true) {
            case $precio < 50:
                $gastos = 3.95;
                break;
            case $precio >= 50 && $precio < 75:
                $gastos = 2.95;
                break;
            case $precio >= 75 && $precio < 100:
                $gastos = 1.95;
                break;
            default:
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