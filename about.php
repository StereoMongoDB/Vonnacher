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
<link rel="stylesheet" type="text/css" href="styles/about.css">
<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
<link rel="stylesheet" type="text/css" href="styles/carrusen.css">
<style>#carrusel-caja {
    -moz-animation: automatizacion 15s infinite linear;
    -o-animation: automatizacion 15s infinite linear;
    -webkit-animation: automatizacion 15s infinite linear;
    animation: automatizacion 15s infinite linear;
    -webkit-transition: all 0.75s ease;
    -moz-transition: all 0.75s ease;
    -ms-transition: all 0.75s ease;
    -o-transition: all 0.75s ease;
    transition: all 0.75s ease;
    height: 700px;
    width: 300%;
}
#carrusel-contenido {
    margin: 0 auto;
    overflow: hidden;
    text-align: left;
}
.imagenes{
    height: 600px;
    width: 100%;
}
.carrusel-elemento {
    float: left;
    width: 33.333%;
}</style>
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header trans_400">
		<div class="header_content d-flex flex-row align-items-center jusity-content-start trans_400">

			<!-- Logo -->
			<div class="logo">
				<a href="about.php">
					<div>VONNACHER</div>
					<div>TAE KWON DO</div>
				</a>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li><a href="index.php">Inicio</a></li>
					<li class="active"><a href="about.php">Sobre Nosotros</a></li>
					<li><a href="services.php">Servicios</a></li>
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
					<li class="active"><a href="about.php">Sobre Nosotros</a></li>
					<li><a href="services.php">Servicios</a></li>
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
		<!-- <div class="background_image" style="background-image:url(images/about.jpg)"></div> -->
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/sobrenosotros.png" data-speed="0.8"></div>
		<div class="home_overlay"><img src="images/home_overlay.png" alt=""></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title">Sobre Nosotros</div>
							<div class="home_text">Bienvenido a la agrupación más grande a nivel nacional e internacional ahora contamos con escuelas en los estados de Nuevo León, Tamaulipas, Cohauila, Merida, Guanajuato, Guadalajara y USA.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Intro -->

	<div class="intro">
		<div class="container">
			<div class="row">

				<!-- Intro Content -->
				<div class="col-lg-8">
					<div class="intro_content">
						<div class="section_title_container">
							<div class="section_title"><h2>Bienvenidos a nuestro Gimnasio</h2></div>
						</div>
						<div class="intro_text">
							<p align="justify" >Sumérgete en una experiencia única en nuestro gimnasio de Tae Kwon Do, donde desde 2004 hemos sido un faro de aprendizaje y superación. A partir de 2009, hemos encaminado a atletas hacia el éxito, integrándolos en la selección estatal y regional.    <br>Aquí, el poder del Tae Kwon Do se fusiona con valores de respeto, disciplina y crecimiento personal. Únete a una comunidad dedicada al logro marcial y al desarrollo integral. ¡Te damos la bienvenida a un viaje donde cada golpe es un paso hacia la grandeza!</br></p>
						</div>

						<!-- Milestones -->
						<div class="milestones">
							<div class="row milestones_row">
							
								<!-- Milestone -->
								<div class="col-md-3 milestone_col">
									<div class="milestone">
										<div class="milestone_counter" data-end-value="50" data-sign-before="+">0</div>
										<div class="milestone_text">Número de alumnos</div>
									</div>
								</div>

								<!-- Milestone -->
								<div class="col-md-3 milestone_col">
									<div class="milestone">
										<div class="milestone_counter" data-end-value="3">0</div>
										<div class="milestone_text">Número de maestros</div>
									</div>
								</div>

								<!-- Milestone -->
								<div class="col-md-3 milestone_col">
									<div class="milestone">
										<div class="milestone_counter" data-end-value="2">0</div>
										<div class="milestone_text">Sucursales</div>
									</div>
								</div>

								<?php
require 'Backend/Conexiondata.php';

// Reemplaza estos valores con la información correcta de tu base de datos
$host = 'localhost';
$usuario = 'vonnache_TKDREYNOSA';
$contrasena = 'vonnacher2023';
$base_de_datos = 'vonnache_database';

// Crear conexión
$db = new mysqli($host, $usuario, $contrasena, $base_de_datos);

// Verificar la conexión
if ($db->connect_error) {
    die("La conexión falló: " . $db->connect_error);
}

// Consulta SQL para obtener el número de registros
$stmt = $db->query("SELECT COUNT(*) FROM registro");
$mostrar = $stmt->fetch_row()[0];
?>

<div class="col-md-3 milestone_col">
    <div class="milestone">
        <div class="milestone_counter" data-end-value="<?php echo $mostrar; ?>">0</div>
        <div class="milestone_text">Nuevos Alumnos</div>
    </div>
</div>

<?php
// Cerrar la conexión después de su uso
$db->close();
?>

							</div>
						</div>

					</div>
				</div>

				<!-- Intro Image -->
<!-- Intro Image -->
<div class="col-lg-3 offset-lg-1">
				<div id="carrusel-contenido">
            <div id="carrusel-caja">
                <div class="carrusel-elemento">   
                    <img class="imagenes" src="images/thuder (1).png" >                        
                </div>
            </div>
        </div>
				</div>
			</div>
		</div>
	</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Team -->

	<div class="team">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_title"><h2>Nuestros Maestros</h2></div>
					</div>
				</div>
			</div>
			<div class="row team_row">
				
				<!-- Team Item -->
				<div class="col-lg-4 team_col">
					<div class="team_item text-center d-flex flex-column aling-items-center justify-content-end">
						<div class="team_image"><img src="images/Apolo.png"  height="270px" alt=""></div>
						<div class="team_content text-center">
							<div class="team_name"><a>Apolo Diaz Garcia</a></div>
							<div class="team_title">Entrenador</div>
							<div class="team_text">
								<p>Maestro certificado, cinta negra Tercer DAN avalada por la Asociación FMTKD. </p>
							</div>
						</div>
					</div>
				</div>

				<!-- Team Item -->
				<div class="col-lg-4 team_col">
					<div class="team_item text-center d-flex flex-column aling-items-center justify-content-end">
						<div class="team_image"><img src="images/Enrique.png" height="270px" alt=""></div>
						<div class="team_content text-center">
							<div class="team_name"><a>Enrique Manrique Herrera</a></div>
							<div class="team_title">Profesor</div>
							<div class="team_text">
								<p>Maestro certificado, cinta negra Sexto DAN avalada por la Asociación FMTKD. </p>
							</div>
						</div>
					</div>
				</div>

				<!-- Team Item -->
				<div class="col-lg-4 team_col">
					<div class="team_item text-center d-flex flex-column aling-items-center justify-content-end">
						<div class="team_image"><img src="images/Michelle.png" height="270px" alt=""></div>
						<div class="team_content text-center">
							<div class="team_name"><a>Alexia Michelle Covarrubias</a></div>
							<div class="team_title">Entrenadora</div>
							<div class="team_text">
								<p>Maestro certificado, cinta negra Segundo DAN avalada por la Asociación FMTKD. </p>
							</div>
						</div>
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
<script src="js/about.js"></script>

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