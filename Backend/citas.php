<?php
require 'Conexiondata.php';

try {
    $nombre = $_POST['full_name'];
    $telefono = $_POST['phone'];
    $correo = $_POST['email'];  
    $clase = $_POST['class'];  
    $hora = $_POST['time'];  
    $fecha = $_POST['datepicker1'];
    // Verificar si el procedimiento almacenado ya existe
    $stmt = $db->query("SHOW PROCEDURE STATUS LIKE 'AGENDA'");
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();

    if (!$result) {
        // Si el procedimiento no existe, lo creamos
        $sql = "
            CREATE PROCEDURE AGENDA(
                IN p_nombre VARCHAR(255),
                IN p_telefono VARCHAR(15),
                IN p_correo VARCHAR(255),
                IN p_clase VARCHAR(255),
                IN p_hora VARCHAR(10),
                IN p_fecha VARCHAR(100)
            )
            BEGIN
                INSERT INTO citas (Nombre, Telefono, correo, clase, Hora, fecha)
                VALUES (p_nombre, p_telefono, p_correo, p_clase, p_hora, p_fecha);
            END;
        ";

        // Ejecutar el script SQL
        $db->exec($sql);
    }

    // Llamada al procedimiento almacenado
    $stmt = $db->prepare("CALL AGENDA(?, ?, ?, ?, ?, ?)");
    $stmt->bindParam(1, $nombre, PDO::PARAM_STR);
    $stmt->bindParam(2, $telefono, PDO::PARAM_STR);
    $stmt->bindParam(3, $correo, PDO::PARAM_STR);
    $stmt->bindParam(4, $clase, PDO::PARAM_STR);
    $stmt->bindParam(5, $hora, PDO::PARAM_STR);
    $stmt->bindParam(6, $fecha, PDO::PARAM_STR);

    $stmt->execute();
    $stmt->closeCursor();

    // Después de insertar, redirigir a la página de agendar citas
    header("Location: ../Agendar/Agendacitas.php");
    exit(); // Asegura que el script se detenga después de la redirección
} catch(Exception $e) {
    die('Error:'. $e->getMessage());
}
?>
