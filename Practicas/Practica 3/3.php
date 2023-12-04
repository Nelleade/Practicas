<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 3</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<div class="textito">
    <form method="post">
        <label for="numero1">Número 1:</label>
        <input type="text" name="numero1" required><br><br>

        <label for="numero2">Número 2:</label>
        <input type="text" name="numero2" required><br><br>

        <label for="numero3">Número 3:</label>
        <input type="text" name="numero3" required><br><br>

        <label for="numero4">Número 4:</label>
        <input type="text" name="numero4" required><br><br>

        <label for="numero5">Número 5:</label>
        <input type="text" name="numero5" required><br><br>

        <input type="submit" name="calcular" value="Calcular">
    </form>

    <?php
    if (isset($_POST['calcular'])) {
        $numeros = array(
            floatval($_POST['numero1']),
            floatval($_POST['numero2']),
            floatval($_POST['numero3']),
            floatval($_POST['numero4']),
            floatval($_POST['numero5'])
        );

        $mayor = $numeros[0];

        for ($i = 1; $i < count($numeros); $i++) {
            if ($numeros[$i] > $mayor) {
                $mayor = $numeros[$i];
            }
        }

        echo "Los números ingresados son: " . implode(", ", $numeros) . "<br>";
        echo "El mayor número es: <b>$mayor";
    }
    ?>
        <li><a href="Index.php">Volver</a></li><br>
</div>
</body>
</html>