<?php
require 'Conexiondata.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    try {
        $mes = $_POST['mes'];
        $desc = $_POST['descripcion'];

        // Verificar si ya existe un registro para el mes actual
        $checkSQL = "SELECT * FROM promocion WHERE Mes = :mes";
        $stmtCheck = $db->prepare($checkSQL);
        $stmtCheck->bindParam(':mes', $mes, PDO::PARAM_STR);
        $stmtCheck->execute();

        if ($stmtCheck->rowCount() > 0) {
            // Si existe, actualizar la descripción
            $updateSQL = "UPDATE promocion SET Descripcion = :desc WHERE Mes = :mes";
            $stmtUpdate = $db->prepare($updateSQL);
            $stmtUpdate->bindParam(':mes', $mes, PDO::PARAM_STR);
            $stmtUpdate->bindParam(':desc', $desc, PDO::PARAM_STR);
            $stmtUpdate->execute();
        } else {
            // Si no existe, insertar un nuevo registro
            $insertSQL = "INSERT INTO promocion (Mes, Descripcion) VALUES (:mes, :desc)";
            $stmtInsert = $db->prepare($insertSQL);
            $stmtInsert->bindParam(':mes', $mes, PDO::PARAM_STR);
            $stmtInsert->bindParam(':desc', $desc, PDO::PARAM_STR);
            $stmtInsert->execute();
        }
    } catch (Exception $e) {
        die('Error: ' . $e->getMessage());
    }
}


header('Location: ../Admin/avisos.php');  // Redirige a la página que desees después de procesar el formulario
exit();
?>