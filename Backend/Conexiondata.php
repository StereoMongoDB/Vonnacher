<?php
$host = 'localhost';  // Puedes cambiar 'localhost' por la dirección IP del servidor
$dbname = 'vonnache_database';
$username = 'vonnache_TKDREYNOSA';
$password = 'vonnacher2023';
$port = '3306';  // Aquí defines el puerto a utilizar

try {
    $db = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
    // Resto del código para trabajar con la base de datos
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}


?>

