<?php session_start();
require 'Conexiondata.php';

try {

    $nombre = $_POST['nom'];
    $telefono = $_POST['tel'];
    $correo = $_POST['correo'];  
    $contra = $_POST['contra'];

    $hash_contrasena = hash('sha512',$contra); 

    $SQL = "INSERT INTO registro (Nombre,tel, email, contra, tp_usuario) VALUES ('$nombre','$telefono','$correo','$hash_contrasena', '1')";
    $db->query($SQL);
    $_SESSION['email'] = $correo;
    header('Location: ../index.php');
}catch(Exception $e){die('Error:'. $e->getMessage());}


?>