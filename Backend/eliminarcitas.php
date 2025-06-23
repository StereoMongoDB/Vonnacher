<?php
require '../Backend/Conexiondata.php';

// Function to get classes based on the level and count the number of students
function getClassesByLevel($level)
{
    global $db;
    $sql = "SELECT Nombre, Telefono, correo, clase, Hora, fecha
            FROM citas
            WHERE clase = :level
            ORDER BY id_citas DESC";

    $stmt = $db->prepare($sql);
    $stmt->bindParam(':level', $level, PDO::PARAM_STR);
    $stmt->execute();

    return $stmt;
}

// Function to count the number of students for a given level
function countStudentsByLevel($level)
{
    global $db;
    $sql = "SELECT COUNT(*) as count
            FROM citas
            WHERE clase = :level";

    $stmt = $db->prepare($sql);
    $stmt->bindParam(':level', $level, PDO::PARAM_STR);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return $result['count'];
}

// Si se presiona el botón de eliminación para principiantes
if (isset($_POST['eliminar_citas_principiantes'])) {
    // Obtener la fecha actual y la fecha 5 días atrás
    $fecha_actual = date("Y-m-d");
    $fecha_hace_5_dias = date("Y-m-d", strtotime("-5 days"));

    // Eliminar las citas para principiantes que estén dentro del rango de fechas
    $sql = "DELETE FROM citas WHERE clase = 'Principiantes' AND fecha BETWEEN '$fecha_hace_5_dias' AND '$fecha_actual'";
    if ($db->query($sql)) {
        echo "Citas para principiantes eliminadas correctamente.";
    } else {
        echo "Error al eliminar citas para principiantes: " . $db->errorInfo()[2];
    }
}
?>
