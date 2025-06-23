<?php

require '../Backend/Conexiondata.php'; // Include your database connection file

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];

    // Perform validation as needed

    $sql = "UPDATE equipo_entrenamineto SET producto = :product_name , precio = :price WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id',$id, PDO::PARAM_INT);
    $stmt->bindParam(':product_name', $product_name, PDO::PARAM_STR);
    $stmt->bindParam(':price', $price, PDO::PARAM_STR);

    if ($stmt->execute()) {
        echo 'Producto actualizado correctamente.';
        header('Location: ../Admin/productos.php');
    } else {
        echo 'Error al actualizar producto.';
    }
}

?>