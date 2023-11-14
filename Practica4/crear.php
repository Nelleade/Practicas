<?php
session_start();

if (!isset($_SESSION['login_time'])) {
    header("Location: html.html");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $file_name = $_POST['file_name'];
    $content = $_POST['content'];
    $permissions = intval($_POST['permissions'], 8);

    $current_directory = getcwd();
    $filepath = $current_directory . '/' . $file_name;

    if (file_put_contents($filepath, $content) !== false) {
        chmod($filepath, $permissions);
        echo "El archivo '$file_name' se ha creado correctamente." . "<br> <a href='php2.php'>Volver al menú</a>";
    } else {
        echo "No se pudo crear el archivo." . "<br> <a href='php2.php'>Volver al menú</a>";
    }
} else {
    echo "<form action='crear.php' method='POST'>";
    echo "Nombre del archivo: <input type='text' name='file_name'><br>";
    echo "Contenido: <textarea name='content'></textarea><br>";
    echo "Permisos (en octal): <input type='text' name='permissions' value='0644'><br>";
    echo "<input type='submit' value='Crear archivo'>";
    echo "</form>" . "<br> <a href='php2.php'>Volver al menú</a>";
}
?>
