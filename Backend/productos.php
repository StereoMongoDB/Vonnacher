<?php
require 'Conexiondata.php'; // Include your database connection file

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];

    // Perform validation as needed

    $sql = "INSERT INTO equipo_entrenamineto (producto, precio) VALUES (:product_name, :price)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':product_name', $product_name, PDO::PARAM_STR);
    $stmt->bindParam(':price', $price, PDO::PARAM_STR);

    if ($stmt->execute()) {
        echo 'Producto agregado correctamente.';
        header('Location: ../Admin/productos.php');
    } else {
        echo 'Error al agregar producto.';
    }
}
?>