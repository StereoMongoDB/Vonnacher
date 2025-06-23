<?php require ('../Backend/Validacion.php');   ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/dudas.css">
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
            <?php
require '../Backend/Conexiondata.php';

$sqlProcedure = "
CREATE PROCEDURE Dudas()
BEGIN
    SELECT Nombre, Tel, email, Mensaje
    FROM dudas;
END;
";

// Ejecutar la creación del procedimiento almacenado
try {
    $db->exec($sqlProcedure);
} catch (PDOException $e) {
    // Ignorar si ya existe el procedimiento almacenado
    if ($e->getCode() != "42000") {
        echo "Error al ejecutar el procedimiento almacenado: " . $e->getMessage();
        die();
    }
}

// Llamar al procedimiento almacenado
$sql = "CALL Dudas()";
$result = $db->query($sql);
?>

<div class="box box-6">
    <div class="box-header">
        <h4>Comentario o Dudas</h4>
    </div>
    <div class="box-container">
        <div class="table-row">
            <div class="table-cell"><strong>Nombre</strong></div>
            <div class="table-cell"><strong>Mensaje</strong></div>
            <div class="table-actions"><strong>Acciones</strong></div>
        </div>
        <?php
        // Mostrar cada duda
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo '<div class="table-row">
                    <div class="table-cell">' . $row["Nombre"] . '</div>
                    <div class="table-cell">' . $row["Mensaje"] . '</div>
                    <div class="table-actions">
                        <a href="tel:' . $row["Tel"] . '" target="_blank">
                            <i class="far fa-phone-alt"></i> Llamar
                        </a>
                        <a href="mailto:' . $row["email"] . '" target="_blank">
                            <i class="far fa-envelope"></i> Responder
                        </a>
                    </div>
                </div>';
        }
    

        // Si no hay dudas
        if ($result->rowCount() == 0) {
            echo '<p>No hay dudas.</p>';
        }
        ?>
    </div>
</div>
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
    <script src="js/main.js"></script>
    <script src="https://kit.fontawesome.com/9e5ba2e3f5.js" crossorigin="anonymous"></script>
</body>

</html>