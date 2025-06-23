<?php require ('../Backend/Validacion.php');   ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/avisos.css">
    <link rel="stylesheet" href="css/mandaravisos.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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

            <div class="promocion-container">
    <h2>Promocion del mes</h2>

    <?php
    require '../Backend/Conexiondata.php';

    // Obtener la descripción actual para el mes actual
    $mesActual = date('Y-m');
    $sql = "SELECT Descripcion FROM promocion WHERE Mes = :mes";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':mes', $mesActual, PDO::PARAM_STR);
    $stmt->execute();
    $descripcionActual = $stmt->fetchColumn();
    ?>

    <form method="post" action="../Backend/promocion.php" class="promocion-form">
        <div class="form-group">
            <label for="mes">Mes:</label>
            <input type="month" name="mes" id="fecha" value="<?php echo $mesActual; ?>" readonly>
        </div>

        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" id="descripcion" rows="4" required><?php echo $descripcionActual; ?></textarea>
        </div>

        <button type="submit" name="submit">Enviar</button>
    </form>
</div>

<div class="avisos-container">
    <h1>Avisos para los Alumnos</h1>
<form method="post" action="Mailer/sendMail.php" class="avisos-form">
            <div class="form-group">
                <label for="mensaje">Mensaje:</label>
                <textarea name="mensaje" id="mensaje" rows="4" required></textarea>
            </div>

            <div class="form-group">
        <label for="correos">Correos:</label>
        <select name="correos[]" id="correos" multiple required>
            <?php
            // Recupera los correos electrónicos desde la base de datos y muestra las opciones
            require '../Backend/Conexiondata.php';

            $sql = "SELECT email FROM registro"; // Ajusta la consulta según tu base de datos
            $result = $db->query($sql);

            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo '<option value="' . $row['email'] . '">' . $row['email'] . '</option>';
            }
            ?>
        </select>
    </div>

            <button type="submit" name="enviar">Enviar Avisos</button>
        </form>
    </div>    


</section>

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
    <script>
    $(function() {
        // Configurar el datepicker para mostrar solo meses
        $("#mes").datepicker({
            changeMonth: true,
            changeYear: false,
            showButtonPanel: true,
            dateFormat: 'MM',  // Muestra el nombre del mes
            onClose: function(dateText, inst) {
                $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
            }
        });
    });
</script>
</body>

</html>