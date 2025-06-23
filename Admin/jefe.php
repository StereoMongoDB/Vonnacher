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
     
                </div>
            </header>

            <section class="main">
<div>
                <?php
require '../Backend/Conexiondata.php';

// Obtener el número de citas
$stmtCitas = $db->query("SELECT COUNT(*) FROM citas");
$numCitas = $stmtCitas->fetch(PDO::FETCH_NUM)[0];

// Obtener el número de productos mostrados
$stmtProductos = $db->query("SELECT COUNT(*) FROM equipo_entrenamineto");
$numProductos = $stmtProductos->fetch(PDO::FETCH_NUM)[0];

// Obtener el número de dudas
$stmtDudas = $db->query("SELECT COUNT(*) FROM dudas");
$numDudas = $stmtDudas->fetch(PDO::FETCH_NUM)[0];

// Obtener el número de alumnos registrados
$stmtAlumnos = $db->query("SELECT COUNT(*) FROM registro");
$numAlumnos = $stmtAlumnos->fetch(PDO::FETCH_NUM)[0];
?>

<div class="box box-2">
    <div class="box-details">
        <h4><?php echo $numCitas; ?></h4>
        <span>citas</span>
    </div>
    <div class="box-icon">
        <i class="fas fa-calendar-alt"></i> <!-- Icono de calendario -->
    </div>
</div>

<div class="box box-3">
    <div class="box-details">
        <h4><?php echo $numProductos; ?></h4>
        <span>productos</span>
    </div>
    <div class="box-icon">
        <i class="fas fa-box"></i> <!-- Icono de caja -->
    </div>
</div>

<div class="box box-4">
    <div class="box-details">
        <h4><?php echo $numDudas; ?></h4>
        <span>dudas</span>
    </div>
    <div class="box-icon">
        <i class="fas fa-question-circle"></i> <!-- Icono de pregunta -->
    </div>
</div>

<div class="box box-5">
    <div class="box-details">
        <h4><?php echo $numAlumnos; ?></h4>
        <span>alumnos</span>
    </div>
    <div class="box-icon">
        <i class="fas fa-users"></i> <!-- Icono de graduación -->
    </div>
</div>
</div>


 <div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <?php
            require '../Backend/Conexiondata.php';

            // Verificar si existe el procedimiento almacenado
            $sqlCheckProcedure = "SHOW PROCEDURE STATUS LIKE 'obtenerClasesReservadas'";
            $resultCheckProcedure = $db->query($sqlCheckProcedure);

            // Si el procedimiento almacenado no existe, créalo
            if ($resultCheckProcedure->rowCount() == 0) {
                $sqlProcedure = "
                CREATE PROCEDURE obtenerClasesReservadas()
                BEGIN
                    SELECT Nombre, Telefono, correo, clase, Hora, fecha
                    FROM citas
                    ORDER BY id_citas DESC LIMIT 5;
                END";
                
                // Ejecutar la creación del procedimiento almacenado
                try {
                    $db->exec($sqlProcedure);
                } catch (PDOException $e) {
                    echo "Error al ejecutar el procedimiento almacenado: " . $e->getMessage();
                }
            }

            // Llamar al procedimiento almacenado
            $sql = "CALL obtenerClasesReservadas()";
            $result = $db->query($sql);
            ?>

            <!-- Estructura de la tabla -->
            <div class="box box-6">
                <div class="box-header">
                    <h4>Clases reservadas</h4>
                    <a href="clases.php">Ver todos</a>
                </div>
                <div class="box-container">
                    <table class="table table-bordered table-striped" style="width: 100%;" >
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
                            // Mostrar cada clase reservada
                            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
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

                            // Si no hay clases reservadas
                            if ($result->rowCount() == 0) {
                                echo '<div class="box box-6">
                                        <div class="box-container">
                                            <p>No hay clases reservadas.</p>
                                        </div>
                                    </div>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
                <?php
                    // Incluir el archivo de conexión
                    require '../Backend/Conexiondata.php';

                    // Verificar si existe el procedimiento almacenado
                    $sqlCheckProcedure = "SHOW PROCEDURE STATUS LIKE 'obtenerNuevosAlumno'";
                    $resultCheckProcedure = $db->query($sqlCheckProcedure);

                    // Si el procedimiento almacenado no existe, créalo
                    if ($resultCheckProcedure->rowCount() == 0) {
                        $sqlProcedure = "
                        CREATE PROCEDURE obtenerNuevosAlumno()
                        BEGIN
                            SELECT Nombre, tel, email FROM registro WHERE id_Registro > 1 ORDER BY id_REGISTRO DESC LIMIT 6;
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
                    $sql = "CALL obtenerNuevosAlumno()";
                    $result = $db->query($sql);

                    // Verificar si hay resultados
                    if ($result->rowCount() > 0) {
                        // Mostrar la caja de nuevos alumnos
                        echo '<div class="box box-7">
                                <div class="box-header">
                                    <h4>Nuevos Alumnos</h4>
                                    <a href="Alumnos.php">Ver todos</a>
                                </div>
                                <div class="box-container">';

                        // Mostrar cada alumno
                        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                            echo '<div class="customer">
                                    <div class="info">
                                        <h5>' . $row["Nombre"] . '</h5>
                                    </div>
                                    <div class="contacts">
                                    <a href="tel:' . $row["tel"] . '" target="_blank">
                                        <i class="fas fa-phone-alt"></i>
                                    </a>
                                    <a href="mailto:' . $row["email"] . '" target="_blank">
                                        <i class="far fa-envelope"></i>
                                    </a>
                                </div>
                                </div>';
                        }

                        echo '</div></div>';
                    } else {
                        // Si no hay alumnos registrados
                        echo '<div class="box box-7">
                                <div class="box-header">
                                    <h4>Nuevos Alumnos</h4>
                                    <a href="Alumnos.php">Ver todos</a>
                                </div>
                                <div class="box-container">
                                    <p>No hay alumnos registrados.</p>
                                </div>
                            </div>';
                    }

                    // Cerrar conexión (si es necesario)
                    $db = null;
                ?>
                </div>

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