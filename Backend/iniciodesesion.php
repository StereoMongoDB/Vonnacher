<?php
session_start();

if(isset($_SESSION['email'])){
    if(isset($_SESSION['tipo'])){
        if($_SESSION['tipo'] == 0){
            header('Location: ../Admin/jefe.php');
        }
    }else{
        header('Location: ../Agendar/Agendacita.php');
    }
}

require 'Conexiondata.php';

try {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $contra = $_POST['password'];
        $hash = hash('sha512', $contra);

        $SQL = "SELECT * FROM registro WHERE email = :email AND contra = :contra";
        $consulta = $db->prepare($SQL);
        $consulta->bindParam(':email', $email);
        $consulta->bindParam(':contra', $hash);
        $consulta->execute();

        $usuario = $consulta->fetch(PDO::FETCH_ASSOC);

            if ($usuario) {
                $_SESSION['email'] = $email;
                if($usuario['tp_usuario'] != 1){
                    $_SESSION['tipo'] = $usuario['tp_usuario'];
                    header('Location: ../Admin/jefe.php');
                }
                else{
                    header('Location: ../index.php'); 
                }
                
            } else {
                $_SESSION['error_message'] = "Los datos son incorrectos, verifica el correo o la contraseña";
                header('Location: ../Login/login.php#login');
                exit();
            }       
    } 
} catch (PDOException $e) {
    error_log('Error: ' . $e->getMessage());
    $error_message = "Ocurrió un error. Por favor, inténtalo de nuevo más tarde.";
}
?>





