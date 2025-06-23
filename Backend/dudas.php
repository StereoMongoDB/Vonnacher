<?php
require 'Conexiondata.php';

try {

    $nombre = $_POST['nom'];
    $correo = $_POST['Correo'];  
    $telefono = $_POST['Teléfono'];
    $mensaje = $_POST['Comentario'];


    $SQL = "INSERT INTO dudas (Nombre, Tel, email, Mensaje) VALUES ('$nombre','$telefono','$correo','$mensaje')";
    $db->query($SQL);
    header('Location: ../contact.php');
}catch(Exception $e){die('Error:'. $e->getMessage());}

?>