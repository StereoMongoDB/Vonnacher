<?php require ('../Backend/Validacion.php');   ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/alumnos.css">
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
                <div class="box box-6">
                    <div class="box-header">
                    <?php
                    // Incluir el archivo de conexión
                    require '../Backend/Conexiondata.php';

                    // Verificar si existe el procedimiento almacenado
                    $sqlCheckProcedure = "SHOW PROCEDURE STATUS LIKE 'alumnos'";
                    $resultCheckProcedure = $db->query($sqlCheckProcedure);

                    // Si el procedimiento almacenado no existe, créalo
                    if ($resultCheckProcedure->rowCount() == 0) {
                        $sqlProcedure = "
                        CREATE PROCEDURE alumnos()
                        BEGIN
                            SELECT Nombre, tel, email FROM registro ORDER BY id_REGISTRO DESC;
                        END;
                        ";

                        // Ejecutar la creación del procedimiento almacenado
                        try {
                            $db->exec($sqlProcedure);
                        } catch (PDOException $e) {
                            echo "Error al ejecutar el procedimiento almacenado: " . $e->getMessage();
                        }
                    }

                    // Llamar al procedimiento almacenado
                    $sql = "CALL alumnos()";
                    $result = $db->query($sql);

                    // Verificar si hay resultados
                    if ($result->rowCount() > 0) {
                        // Mostrar la caja de nuevos alumnos
                        echo '<div class="box box-7">
                                <div class="box-header">
                                    <h4>Nuevos Alumnos</h4>
                                </div>
                                <div class="box-container">';

                        echo '<div class="customer">
        <div class="info">
            <table>
                <tr>
                    <td><strong>Nombre</strong></td>
                </tr>
            </table>
        </div>
        <div class="contacts">
            <table>
                <tr>
                    <td><strong>Contacto</strong></td>
                </tr>
            </table>
        </div>
    </div>';

// Mostrar los datos de los alumnos
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo '<div class="customer">
    <div class="info">
        <table>
            <tr>
                <td>' . $row["Nombre"] . '</td>
            </tr>
        </table>
    </div>
    <div class="contacts">
        <table>
            <tr>
                <td>
                    <a href="tel:' . $row["tel"] . '" target="_blank">
                        <i class="fas fa-phone-alt" style="color: white;"></i>
                    </a>
                    <a href="mailto:' . $row["email"] . '" target="_blank">
                        <i class="far fa-envelope" style="color: white;"></i>
                    </a>
                </td>
            </tr>
        </table>
    </div>
</div>';
}

                        echo '</div></div>';
                    } else {
                        // Si no hay alumnos registrados
                        echo '<div class="box box-7">
                                <div class="box-header">
                                    <h4>Nuevos Alumnos</h4>
                                </div>
                                <div class="box-container">
                                    <p>No hay alumnos registrados.</p>
                                </div>
                            </div>';
                    }

                    // Cerrar conexión (si es necesario)
                    $db = null;
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
    <script src="js/main.js"></script>
    <script src="https://kit.fontawesome.com/9e5ba2e3f5.js" crossorigin="anonymous"></script>
</body>


</html>