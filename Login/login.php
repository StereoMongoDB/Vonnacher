<?php

session_start();

if(isset($_SESSION['email'])){
    if(isset($_SESSION['tipo'])){
        if($_SESSION['tipo'] == 0){
            header('Location: ../Admin/jefe.php');
        }
    }else{
        header('Location: ../index.php');
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="boton_regreso.css">
    <title>VonnacherTkdReynosa</title>
</head>
<body>
    

<button class="boton-regreso" onclick="window.location.href='../index.php'">Regresar</button>

    <div class="container-form login hide" id="login">
        <div class="information">
            <div class="info-childs">
                <h2>Bienvenido</h2>
                <p>Por favor Inicia Sesión con tus datos</p>
                <input type="button" value="Registrarse" id="sign-up">
            </div>
        </div>
        <div class="form-information">
            <div class="form-information-childs">
                <h2>Iniciar Sesión</h2>
                <p>Iniciar Sesión con una cuenta</p>
                <form class="form"  action="../Backend/iniciodesesion.php" method="post">
    <label>
        <i class='bx bx-envelope'></i>
        <input type="email" name="email" placeholder="Correo Electronico">
    </label>
    <label>
        <i class='bx bx-lock-alt'></i>
        <input type="password" name="password" placeholder="Contraseña" minlength="8" maxlength="20">
    </label>
    <div id="seccion_error">
    <?php
    if (isset($_SESSION['error_message'])) {
        echo '<div style="color: red;">' . $_SESSION['error_message'] . '</div>';
        unset($_SESSION['error_message']); 
    }
    ?>
</div>

    <input name="inicio" type="submit"  value="Iniciar Sesión">
</form>

            </div>
        </div>
    </div>

    <div class="container-form register">
        <div class="information">
            <div class="info-childs">
                <h2>Bienvenido</h2>
                <p>Para unirte por favor Inicia Sesión con tus datos</p>
                <input type="button" value="Iniciar Sesión" id="sign-in">
            </div>
        </div>
        <div class="form-information">
            <div class="form-information-childs">
                <h2>Crear una Cuenta</h2>

                <p>usa tu correo para registrarte</p>
                <form class="form"   action="../Backend/inicio.php" method="post" >
                    <label>
                        <i class='bx bx-user' ></i>
                        <input type="text" placeholder="Nombre Completo" name="nom" maxlength="100" >
                    </label>
                    <label >
                        <i class='bx bx-phone'></i>
                        <input type="text" placeholder="Telefono" name="tel" minlength="10" maxlength="10" >
                    </label>
                    <label >
                        <i class='bx bx-envelope' ></i>
                        <input type="email" placeholder="Correo Electronico" name="correo" >
                    </label>
                    <label>
                        <i class='bx bx-lock-alt' ></i>
                        <input type="password" placeholder="Contraseña" name="contra" minlength="8" maxlength="20"  >
                    </label>
                    <input name="registro" type="submit" value="Registrarse">
                </form>
            </div>
        </div>
    </div>







    <script src="script.js"></script>

</body>
</html>