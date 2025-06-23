<?php require ('../Backend/Validacion.php');   ?>

<?php

require '../Backend/Conexiondata.php';

if (isset($_GET['id'])) {
    $action = '../Backend/modificar.php';
    $boton = 'Actualizar producto';
    $id = $_GET['id'];
    $SQL = 'SELECT * FROM equipo_entrenamineto WHERE id = '.$id;
        $stmt = $db->query($SQL);
    $NUEVO = $stmt->fetch(PDO::FETCH_ASSOC);
    if(isset($NUEVO['producto'])){
        $producto =$NUEVO['producto'];
        $precio = $NUEVO['precio'];
    }else {
        header('Location: productos.php');
    }


} else {
     $id = 0;
    $action = '../Backend/productos.php';
    $boton = 'Agregar producto';
    $producto = "";
    $precio = "";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/formproduc.css">
    <link rel="stylesheet" href="css/productos.css">
    <title>Admin Dashboard</title>
</head>

<body>
<div class="container" id="top">
        <aside class="sidebar-wrapper">
            <div class="sidebar-header">
            <a href="../index.php">
                <img src="img/Vonna.png" alt="#">
                </a>
                <h4>VONNACHER</h4>
                <div class="close-menu">
                    <i class="fas fa-chevron-left"></i>
                </div>
            </div>
            <nav>
                <ul>
                    <li><a href="jefe.php">
                            <i class="fas fa-home"></i>
                            <div class="title">Inicio</div>
                        </a></li>
                        <li><a href="Alumnos.php">
                            <i class="fas fa-users"></i>
                            <div class="title">Alumnos</div>
                        </a></li>
                    <li><a href="clases.php">
                            <i class="fas fa-clock"></i>
                            <div class="title">Clases</div>
                        </a></li>
                    <li><a href="productos.php">
                            <i class="fas fa-box"></i>
                            <div class="title">Productos</div>
                        </a></li>
                    <li><a href="dudas.php">
                            <i class="fas fa-question-circle"></i>
                            <div class="title">Dudas</div>
                        </a></li>
                    <li><a href="avisos.php">
                            <i class="fas fa-bell"></i>
                            <div class="title">Avisos</div>
                        </a></li>
                </ul>
            </nav>
        </aside>
        <main class="content">
            <header>
                <div class="header-wrapper">
                    <div class="header-left">
                        <div class="toggle-icon">
                            <i class="fas fa-bars"></i>
                        </div>
                    </div>
                    <div class="header-right">
                        <img src="img/avatar-2.png" alt="avatar">
                    </div>
                </div>
            </header>
            <section class="main">
            <h2>Productos</h2>
    <form action="<?php echo $action?>" method="post">
        <input type="hidden" name="id" value="<?php echo $id?>">
        <label for="product_name">Nombre del producto:</label>
        <input type="text" id="product_name" name="product_name" required value="<?php echo $producto?>">
        <br>
        <label for="price">Precio:</label>
        <input type="text" id="price" name="price" required value="<?php echo $precio?>">
        <br>
        <button type="submit"><?php echo $boton ?></button>
    </form>
            </section>
            <section>
           <?php
require '../Backend/Conexiondata.php'; // Include your database connection file

// Retrieve all products
$sql = "SELECT * FROM equipo_entrenamineto";
$stmt = $db->query($sql); 

// Check if there are products
if ($stmt->rowCount() > 0) {
    // Display product details in a table
    echo '<h2>Detalles de productos</h2>';
    echo '<table border="1">';
    echo '<tr><th>ID</th><th>Producto</th><th>Precio</th><th>Acciones</th></tr>';

    while ($product = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<tr>';
        echo '<td>' . $product['id'] . '</td>';
        echo '<td>' . $product['producto'] . '</td>';
        echo '<td>' . $product['precio'] . '</td>';
        echo '<td>';
        echo '<a href="../services.php#productos' . $product['id'] . '">Ver Producto</a> | ';
        echo '<a href="productos.php?id=' . $product['id'] . '">Modificar</a> | ';
        echo '<a href="../Backend/eliminar.php?id=' . $product['id'] . '">Eliminar</a>';
        echo '</td>';
        echo '</tr>';
    }

    echo '</table>';
} else {
    echo 'No hay productos disponibles.';
}
?>

            </section>
            <footer>
            </footer>
        </main>
    </div>
    <div class="switcher-container">
        <div class="switcher-icon">
            <i class="fas fa-cog"></i>
        </div>
        <div class="switcher-close">
            <i class="fas fa-times"></i>
        </div>
        <div class="switcher-header">
        <h3>Personalizador de temas</h3>
            <h4>Escoger estilo</h4>
        </div>
        <div class="switcher-body">
            <ul>
                <li data-color="#f7f7f7" class="active"></li>
                <li data-color="#212529"></li>
            </ul>
        </div>
    </div>
    <a href="#top" class="scroll-top">
        <i class="fas fa-arrow-up"></i>
    </a>
    <script src="js/main.js"></script>
    <script src="https://kit.fontawesome.com/9e5ba2e3f5.js" crossorigin="anonymous"></script>
</body>

</html>