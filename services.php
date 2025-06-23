<!DOCTYPE html>
<html lang="en">
<head>
<title>VonnacherTkdReynosa</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Dr PRO template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="plugins/image-comparison-slider-master/style.css">
<link rel="stylesheet" type="text/css" href="styles/services.css">
<link rel="stylesheet" type="text/css" href="styles/services_responsive.css">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header trans_400">
		<div class="header_content d-flex flex-row align-items-center jusity-content-start trans_400">

			<!-- Logo -->
			<div class="logo">
				<a href="services.php">
					<div>VONNACHER</div>
					<div>TAE KWON DO</div>
				</a>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li ><a href="index.php">Inicio</a></li>
					<li><a href="about.php">Sobre Nosotros</a></li>
					<li class="active"><a href="services.php">Servicios</a></li>
					<li><a href="contact.php">Contacto</a></li>
				</ul>
			</nav>
			<div class="header_extra d-flex flex-row align-items-center justify-content-end ml-auto">
				<!-- Work Hourse -->
				<div class="button button_1 header_button"><a href="#footer">Horarios</a></div>
				<!-- Appointment Button -->
				<div class="button button_1 header_button"><a href="Agendar/Agendacitas.php">Agendar Clase</a></div>

				<!-- Header Social -->
				<div class="social header_social">
					<ul class="d-flex flex-row align-items-center justify-content-start">
						<li><a href="https://www.instagram.com/vonnacher_reynosa_tkd/?hl=es"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li><a href="https://www.facebook.com/VonnacherTkdReynosa"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="Login/login.php"><i class="fa fa-user" aria-hidden="true"></i></a></li>
<?php if(isset($_SESSION['email'])): ?>
							<li>
								<a class="CIERRE" href="Backend/cierredesesion.php">
                				<i class="fa fa-close"></i>
           					 </a>
        					</li>
               			<?php endif; ?>
					</ul>
				</div>
				<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu_overlay trans_400"></div>
	<div class="menu trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<nav class="menu_nav">
			<ul>
					<li><a href="index.php">Inicio</a></li>
					<li><a href="about.php">Sobre Nosotros</a></li>
					<li class="active"><a href="services.php">Servicios</a></li>
					<li><a href="contact.php">Contacto</a></li>
			</ul>
		</nav>
		<div class="menu_extra">
			<div class="menu_link"><a href="#footer">Horarios</a></div>
			<div class="menu_link"><a href="Agendar/Agendacitas.php">Agendar Clase</a></div>
		</div>
		<div class="social menu_social">
			<ul class="d-flex flex-row align-items-center justify-content-start">
				<li><a href="https://www.instagram.com/vonnacher_reynosa_tkd/?hl=es"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				<li><a href="https://www.facebook.com/VonnacherTkdReynosa"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="Login/login.php"><i class="fa fa-user" aria-hidden="true"></i></a></li>
<?php if(isset($_SESSION['email'])): ?>
							<li>
								<a class="CIERRE" href="Backend/cierredesesion.php">
                				<i class="fa fa-close"></i>
           					 </a>
        					</li>
               			<?php endif; ?>
			</ul>
		</div>
	</div>

	<!-- Home -->

	<div class="home d-flex flex-column align-items-start justify-content-end">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/servicios.jpg" data-speed="0.8"></div>
		<div class="home_overlay"><img src="images/home_overlay.png" alt=""></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title">Servicios</div>
							<div class="home_text" align="justify" >Explora nuestras clases de Tae Kwon Do y encuentra los mejores equipos para tu práctica. Un espacio donde tu desarrollo personal y el equipamiento ideal se encuentran. ¡Descubre más hoy mismo!</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Services -->

	<div class="services">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title_container">
						<div class="section_title"><h2>Nuestras Clases</h2></div>
					</div>
				</div>
			</div>
			<div class="row services_row">
				
				<!-- Service -->
				<div class="col-xl-4 col-md-6 service_col">
					<div class="service text-center">
						<div class="service">
						<div><img src="images/Clase pricipiantes.png" height="300px" alt=""></div>
								<div class="service_title">Clase de Principiantes</div>
								<div class="service_text">
								<p><ul>
									<li>Edades: 3 años a 6 años</li>
									<li>Horario: 6 pm a 7 pm</li>
									<li>Tecnicas de defensa, ejercicios de pateo, y juegos</li>
								</ul></p>							
							</div>						
						</div>
					</div>
				</div>

				<!-- Service -->
				<div class="col-xl-4 col-md-6 service_col">
					<div class="service text-center">
						<div class="service">
								<div><img src="images/Clase avanzados.png" height="300px" alt=""></div>
							<div class="service_title">Clase de Avanzados</div>
							<div class="service_text">
							<p><ul>
									<li>Edades: 14 años en adelante</li>
									<li>Horario: 8 pm a 9 pm</li>
									<li>Equipo de competencia a nivel estatal</li>
									<li>Formas, ejercicios de pateo y golpes, combates y entrenamiento intensivo</li>
								</ul></p>
							</div>
						</div>
					</div>
				</div>

				<!-- Service -->
				<div class="col-xl-4 col-md-6 service_col">
					<div class="service text-center">
						<div class="service">
								<div><img src="images/Clase intermedios.png" height="300px" alt=""></div>
							<div class="service_title">Clase de Intermedios</div>
							<div class="service_text">
							<p><ul>
									<li>Edades: 7 años a 13 años</li>
									<li>Horario: 7 pm a 8 pm</li>
									<li>Tecnicas de defensa, formas, ejercicios de pateo y golpes, combates y juegos</li>
								</ul></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Prices -->

	<div class="before_and_after">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div id="productos" class="section_title"><h2>Equipo de Entrenamiento</h2></div>
					</div>
				</div>
			</div>
			<div class="prices">
		<div class="container">
			<div class="row">
			<?php
require 'Backend/Conexiondata.php'; // Include your database connection file

// Retrieve all products
$sql = "SELECT * FROM equipo_entrenamineto";
$stmt = $db->query($sql); 

// Check if there are products
if ($stmt->rowCount() > 0) {


    while ($product = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<div class="col-lg-6 price_col">';
		echo '<div class="price">';

        echo '<div class="price_title">' . $product['producto'] . '</div>';
        echo '<div class="price_panel">Desde $' . $product['precio'] . '</div>';
        echo '</div>
				</div>';

    }
} else {
    echo 'No hay productos disponibles.';
}
?>

			</div>
		</div>
	</div>
		</div>
	</div>


	<!-- Footer -->

	<footer class="footer">
		<div class="footer_content">
			<div class="container">
				<div class="row">

					<!-- Footer About -->
					<div class="col-lg-3 footer_col">
						<div class="footer_about">
							<div class="footer_logo">
								<a href="#">
									<div>VONNACHER</div>
									<div>TAE KWON DO</div>
								</a>
							</div>
							<div class="footer_about_text">
								<p>Bienvenido a la agrupación más grande a nivel noreste escuelas en Nuevo León, Tamaulipas, Cohauila, Merida, Guadalajara y USA.</p>
							</div>
						</div>
					</div>

					<!-- Footer Contact Info -->
					<div class="col-lg-3 footer_col">
						<div class="footer_contact">
							<div class="footer_title">Informacion de Contacto </div>
							<ul class="contact_list">
								<li>+52 899 1198 176</li>
								<li>+52 899 2648 196</li>
								<li>enriquemanrique@hotmail.com</li>
							</ul>
						</div>
					</div>

					<!-- Footer Locations -->
					<div class="col-lg-3 footer_col">
						<div class="footer_location">
							<div class="footer_title">Sucursal</div>
							<ul class="locations_list">
								<li>
									<div class="location_title">Vista Hermosa</div>
									<div class="location_text"> Plaza Santorini #824</div>
								</li>

							</ul>
						</div>
					</div>

					<!-- Footer Opening Hours -->
					<div class="col-lg-3 footer_col" id="footer">
    <div class="opening_hours">
        <div class="footer_title">Horarios</div>
        <ul class="opening_hours_list">
            <li class="d-flex flex-row align-items-start justify-content-start">
                <div>Lunes:</div>
                <div class="ml-auto">6:00pm - 9:00pm</div>
            </li>
            <li class="d-flex flex-row align-items-start justify-content-start">
                <div>Miercoles:</div>
                <div class="ml-auto">6:00pm - 9:00pm</div>
            </li>
            <li class="d-flex flex-row align-items-start justify-content-start">
                <div>Jueves:</div>
                <div class="ml-auto">6:00pm - 9:00pm</div>
            </li>
        </ul>
    </div>
</div>

				</div>
			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/image-comparison-slider-master/main.js"></script>
<script src="js/services.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>