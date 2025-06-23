<?php
// ARCHIVO DE CONFIGURACIONES GLOBALES PARA EL SITIO

// Inicia la sesión
session_start();

// Recupera la url de la pagina actual
$cURL = $_SERVER["REQUEST_URI"];
// Crea un arreglo de la url separada por la /
$seccion = explode('/', $cURL);

// Define un arreglo con las palabras a buscar
$permitida = array('Admin', 'reportes');

// Verifica si la url contiene alguna de las palabras en el arreglo anterior
$len = count($seccion);
for ($i = 0; $i < $len; $i++) {
    if (in_array($seccion[$i], $permitida)) {
        // Verifica si la sesión está iniciada y si el tipo es 0
        if (!isset($_SESSION['tipo']) || $_SESSION['tipo'] != 0) {
            // Si no cumple la condición, redirige al login
            header("Location: ../Login/login.php");
            exit(); // Añadido para detener la ejecución después de redirigir
        }
    }
}

// Si llega a este punto, el usuario tiene sesión iniciada y el tipo es 0, puedes continuar con el resto del código o redirigir según tus necesidades.
?>
