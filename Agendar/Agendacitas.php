<?php

session_start();

if(!isset($_SESSION['email'])){
    header('Location: ../Login/login.php');
}

?>


<!DOCTYPE HTML>
<html>
<head>
<title>VonnacherTkdReynosa</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Medical Appointment Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs Sign up Web Templates, 
 Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/jquery-ui.css" rel="stylesheet" />
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/wickedpicker.js"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!--fonts--> 
<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
<!--//fonts--> 
<link rel="stylesheet" href="css/boton_regreso.css" text='text/css' >
</head>
<body>
    <style>
        body{
	font-family: 'Roboto', sans-serif;
	font-size: 100%;
	background: url(images/Formulario.png)no-repeat center top;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
	    min-height: 747px;
	background-attachment:fixed;
}
    </style>
<!--background-->
<button class="boton-regreso" onclick="window.location.href='../index.php'">Regresar</button>
    <div class="bg-agile">
        <div class="book-appointment">
            <h2>Reserva tu clase de Tae Kwon Do y da el primer paso hacia tu desarrollo marcial.</h2>
            <form action="../Backend/citas.php" method="post" name="appointment" id="appointment">
                <div class="gaps">
                    <p>Nombre Completo</p>
                    <input type="text" name="full_name" required>
                </div>
                <div class="gaps">
                    <p>Número de teléfono</p>
                    <input type="text" name="phone" required minlength="10" maxlength="10" >
                </div>
                <div class="gaps">
                    <p>Correo Electrónico</p>
                    <input type="email" name="email" required>
                </div>
                <div class="gaps">
                    <p>Clase</p>
                    <select class="form-control" name="class" id="clase" required>
                        <option></option>
                        <option value="Principiantes">Clase de Principiantes</option>
                        <option value="Intermedios">Clase de Intermedios</option>
                        <option value="Avanzados">Clase de Avanzados</option>
                    </select>
                </div>
                <div class="gaps">
                    <p>Hora</p>
                    <input type="text" id="horario_seleccionado" name="time" class="form-control" value="" readonly>
                </div>
                <div class="gaps">
                    <p>Fecha</p>
                    <input id="fecha" name="datepicker1" type="text" value="" readonly>
                </div>
                <input type="submit" value="Realizar cita">
            </form>
        </div>
    </div>

    <!-- Tus scripts -->
    <script>
        $(function() {
            $("#fecha").datepicker({
                beforeShowDay: function(date) {
                    var day = date.getDay();
                    var today = new Date().getDay();
                    var isTodayValid = (today === 1 || today === 3 || today === 4); // Lunes, miércoles o jueves

                    // Permite lunes, miércoles y jueves a partir de la fecha actual, incluyendo hoy si es un día válido
                    return [(day === 1 || day === 3 || day === 4) && (date >= new Date() || isTodayValid)];
                },
                minDate: 0,  // Restringe las fechas anteriores a la fecha actual
                onSelect: function(dateText) {
                    // Lógica adicional al seleccionar una fecha si es necesaria
                }
            });

            $("#clase").change(function() {
                var claseSeleccionada = $(this).val();
                var horarioSeleccionado = "";

                if (claseSeleccionada === "Principiantes") {
                    horarioSeleccionado = "6:00 pm";
                } else if (claseSeleccionada === "Intermedios") {
                    horarioSeleccionado = "7:00 pm";
                } else if (claseSeleccionada === "Avanzados") {
                    horarioSeleccionado = "8:00 pm";
                }

                $("#horario_seleccionado").val(horarioSeleccionado);
            });
        });
    </script>
</body>
</html>





