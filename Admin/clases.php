<?php require ('../Backend/Validacion.php');   ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/tabla.css">
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
?>

<section class="main">
    <!-- Beginner Classes -->
    <div class="box box-6">
        <div class="box-header">
            <h4>
                    Clases para Principiantes
            </h4>
            <p>Total de alumnos: <?php echo countStudentsByLevel('Principiantes'); ?></p>

        </div>
        <div id="beginnerClasses" class="collapse" data-parent="#accordion">
            <div class="box-container">
                <table class="table table-bordered table-striped text-center" style="width: 100%;">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nombre</th>
                            <th>Teléfono</th>
                            <th>Correo</th>
                            <th>Clase</th>
                            <th>Hora</th>
                            <th>Fecha</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Mostrar cada clase reservada para principiantes
                        $beginnerResult = getClassesByLevel('Principiantes');
                        while ($row = $beginnerResult->fetch(PDO::FETCH_ASSOC)) {
                            echo '<tr>
                                <td>' . $row["Nombre"] . '</td>
                                <td>' . $row["Telefono"] . '</td>
                                <td>' . $row["correo"] . '</td>
                                <td>' . $row["clase"] . '</td>
                                <td>' . $row["Hora"] . '</td>
                                <td>' . $row["fecha"] . '</td>
                                <td>
                                    <a href="tel:' . $row["Telefono"] . '" target="_blank">
                                        <i class="fas fa-phone-alt"></i>
                                    </a>
                                    <a href="mailto:' . $row["correo"] . '" target="_blank">
                                        <i class="far fa-envelope"></i>
                                    </a>
                                </td>
                            </tr>';
                        }
                        ?>
                    </tbody>
                </table>
                <?php
                // Si no hay clases reservadas para principiantes
                if ($beginnerResult->rowCount() == 0) {
                    echo '<p>No hay clases reservadas para principiantes.</p>';
                }
                ?>
            </div>
        </div>
    </div>
</section>
<section class="main">
    <!-- Intermediate Classes -->
    <div class="box box-6">
        <div class="box-header">
            <h4>
                    Clases para Intermedios
            </h4>
            <p>Total de alumnos: <?php echo countStudentsByLevel('Intermedios'); ?></p>
        </div>
        <div id="intermediateClasses" class="collapse" data-parent="#accordion">
            <div class="box-container">
                <table class="table table-bordered table-striped text-center" style="width: 100%;">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nombre</th>
                            <th>Teléfono</th>
                            <th>Correo</th>
                            <th>Clase</th>
                            <th>Hora</th>
                            <th>Fecha</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Mostrar cada clase reservada para intermedios
                        $intermediateResult = getClassesByLevel('Intermedios');
                        while ($row = $intermediateResult->fetch(PDO::FETCH_ASSOC)) {
                            echo '<tr>
                                <td>' . $row["Nombre"] . '</td>
                                <td>' . $row["Telefono"] . '</td>
                                <td>' . $row["correo"] . '</td>
                                <td>' . $row["clase"] . '</td>
                                <td>' . $row["Hora"] . '</td>
                                <td>' . $row["fecha"] . '</td>
                                <td>
                                    <a href="tel:' . $row["Telefono"] . '" target="_blank">
                                        <i class="fas fa-phone-alt"></i>
                                    </a>
                                    <a href="mailto:' . $row["correo"] . '" target="_blank">
                                        <i class="far fa-envelope"></i>
                                    </a>
                                </td>
                            </tr>';
                        }
                        ?>
                    </tbody>
                </table>
                <?php
                // Si no hay clases reservadas para intermedios
                if ($intermediateResult->rowCount() == 0) {
                    echo '<p>No hay clases reservadas para intermedios.</p>';
                }
                ?>
            </div>
        </div>
    </div>

</section>
<section class="main">
    <!-- Advanced Classes -->
    <div class="box box-6">
        <div class="box-header">
            <h4>
                    Clases para Avanzados
            </h4>
            <p>Total de alumnos: <?php echo countStudentsByLevel('Avanzados'); ?></p>
        </div>
        <div id="advancedClasses" class="collapse" data-parent="#accordion">
            <div class="box-container">
                <table class="table table-bordered table-striped text-center" style="width: 100%;">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nombre</th>
                            <th>Teléfono</th>
                            <th>Correo</th>
                            <th>Clase</th>
                            <th>Hora</th>
                            <th>Fecha</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Mostrar cada clase reservada para avanzados
                        $advancedResult = getClassesByLevel('Avanzados');
                        while ($row = $advancedResult->fetch(PDO::FETCH_ASSOC)) {
                            echo '<tr>
                                <td>' . $row["Nombre"] . '</td>
                                <td>' . $row["Telefono"] . '</td>
                                <td>' . $row["correo"] . '</td>
                                <td>' . $row["clase"] . '</td>
                                <td>' . $row["Hora"] . '</td>
                                <td>' . $row["fecha"] . '</td>
                                <td>
                                    <a href="tel:' . $row["Telefono"] . '" target="_blank">
                                        <i class="fas fa-phone-alt"></i>
                                    </a>
                                    <a href="mailto:' . $row["correo"] . '" target="_blank">
                                        <i class="far fa-envelope"></i>
                                    </a>
                                </td>
                            </tr>';
                        }
                        ?>
                    </tbody>
                </table>
                <?php
                // Si no hay clases reservadas para avanzados
                if ($advancedResult->rowCount() == 0) {
                    echo '<p>No hay clases reservadas para avanzados.</p>';
                }
                ?>
            </div>
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