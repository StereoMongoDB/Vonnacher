<?php
require '../Backend/Conexiondata.php'; // Include your database connection file

if (isset($_GET['id'])) {
    $productId = $_GET['id'];

    // Delete product from the database
    $sql = "DELETE FROM equipo_entrenamineto WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $productId, PDO::PARAM_INT);
    
    if ($stmt->execute()) {
        echo 'Producto eliminado correctamente.';
        header('Location: ../Admin/productos.php');
    } else {
        echo 'Error al eliminar el producto.';
    }
}
?>
