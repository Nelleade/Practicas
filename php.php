<html>
<?php

echo "<b><h3>Ejercicio 1</b></h3>";
$hola = "Hola";
$mundo = "Mundo";
$boolean = true;
$float = 3.14;
$array = array("valor1" => 1, "valor2" => 2, "valor3" => 3);
echo $que = $hola . " " . $mundo . "<br>";
echo "boolean: " . ($boolean ? "true" : "false") . "<br>";
echo "float: " . $float . "<br>";
echo "array: <pre>" . print_r($array, true) . "</pre>";



echo "<b><h3>Ejercicio 2</b></h3>";
$boolean = false;
echo $que = $hola . " " . $mundo . "<br>";
echo "boolean: " . ($boolean ? "true" : "false") . "<br>";
echo "float: " . $float . "<br>";
echo "array: <pre>" . print_r($array, true) . "</pre>";



echo "<b><h3>Ejercicio 3</b></h3>";
$hola = "Hola";
$mundo = "Mundo";
$que = $hola . " " . $mundo . "<br>";
echo $que = str_replace(" ", "", $que). "<br>";



echo "<b><h3>Ejercicio 4</b></h3>";
$texto = 'El operador “+” sirve para sumar el valor de variables. Con la “/”podemos dividir valores entre variables. El símbolo del dólar “$ indica que estamos utilizando variables pero no lo usaremos en las constantes o globales.';
echo $texto;



echo "<b><h3>Ejercicio 5</b></h3>";
$longitud = strlen($texto);
echo $longitud. " caracteres";



echo "<b><h3>Ejercicio 6</b></h3>";
$vocales = str_replace(array('a', 'e', 'i', 'o', 'u'), '', $hola. $mundo);
echo $vocales;



echo "<b><h3>Ejercicio 7</b></h3>";

$var = '';

if (empty($var)) {
    echo 'Vacía';
} else {
    echo 'No vacía';
}



echo "<b><h3>Ejercicio 8</b></h3>";
$mundito = "Hello World";
$mundito = (int)$mundito;
echo $mundito;



echo "<b><h3>Ejercicio 9</b></h3>";
$numero = 144;
$raiz = sqrt($numero);
echo "a: $raiz". "<br>";

$base = 2;
$exponente = 8;
$potencia = pow($base, $exponente);
echo "b: $potencia". "<br>";

$numero1 = 100;
$numero2 = 6;
$resto = $numero1 % $numero2;
echo "c: $resto". "<br>";

$numero3 = 3;
$numero4 = 6;
function MCD($numero3, $numero4){
    $max = $numero3 % $numero4;
    return $max;
}
echo "d: ". MCD($numero3, $numero4);

?>
</html>