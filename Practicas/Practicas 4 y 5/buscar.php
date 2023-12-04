<?php
session_start();

if (!isset($_SESSION['login_time'])) {
    header("Location: html.html");
    exit();
}

if (isset($_POST['file_name'])) {
    $file_name = $_POST['file_name'];
    $current_directory = getcwd();
    $files = scandir($current_directory);

    if (in_array($file_name, $files)) {
        echo "El archivo '$file_name' se encontró en el directorio actual." . "<br> <a href='php2.php'>Volver al menú</a>";
    } else {
        echo "El archivo '$file_name' no se encontró en el directorio actual." . "<br> <a href='php2.php'>Volver al menú</a>";
    }
} else {
    echo "<form action='buscar.php' method='POST'>";
    echo "Nombre del archivo a buscar: <input type='text' name='file_name'><br>";
    echo "<input type='submit' value='Buscar archivo'>";
    echo "</form>" . "<br> <a href='php2.php'>Volver al menú</a>";
}
?>