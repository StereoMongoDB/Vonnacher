<?php session_start(); ?>


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
<link href="plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<style>
.background_image
{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center center;
}

.CIERRE:hover {
    color: red;
	background: rgb(190, 12, 12);
}

</style>
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header trans_400">
		<div class="header_content d-flex flex-row align-items-center jusity-content-start trans_400">

			<!-- Logo -->
			<div class="logo">
				<a href="index.php">
					<div>VONNACHER</div>
					<div>TAE KWON DO</div>
				</a>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li class="active"><a href="index.php">Inicio</a></li>
					<li><a href="about.php">Sobre Nosotros</a></li>
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
					<li class="active"><a href="index.php">Inicio</a></li>
					<li><a href="about.php">Sobre Nosotros</a></li>
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

	<div class="home">

		<!-- Home Slider -->
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/fondo3.png)"></div>
					<div class="home_container">
						<div class="container">
							<div class="row">
								<div class="col">
								<div class="home_content">
										<div class="home_subtitle">¡Prepárate para tu próxima clase de Tae Kwon Do!</div>
										<div class="home_text">
											<p>¡Prepara tu viaje hacia la maestría en Tae Kwon Do! Reserva tu sesión y déjanos ser tu guía en esta emocionante travesía. ¡Asegura tu lugar ahora y comienza a desatar tu potencial con nosotros!</p>
										</div>
										<div class="home_buttons d-flex flex-row align-items-center justify-content-start">
											<div class="button button_1 trans_200"><a href="services.php">Servicios</a></div>
											<div class="button button_2 trans_200"><a href="Agendar/Agendacitas.php">Agendar Clase</a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item">
					<style> .background_image_fondo2{
							position: absolute;
							top: 0;
							left: 0;
							width: 100%;
							background-repeat: no-repeat;
							background-size: cover;
							background-position: center center;
							height: 60%;
					}
					</style>
					<div class="background_image_fondo2" style="background-image:url(images/fondo2.png)"></div>
					<div class="home_container">
						<div class="container">
							<div class="row">
								<div class="col">
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/fondo.jpg)" height="400px"></div>
					<div class="home_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content">
										<div class="home_subtitle">¡Prepárate para dominar el Tae Kwon Do como nunca antes en Reynosa!</div>
										<div class="home_title"></div>
										<div class="home_text">
											<p>Bienvenido a la agrupación más grande a nivel nacional e internacional ahora contamos con escuelas en los estados de Nuevo León, Tamaulipas, Cohauila, Merida, Guanajuato, Guadalajara y USA.</p>
										</div>
										<div class="home_buttons d-flex flex-row align-items-center justify-content-start">
											<div class="button button_1 trans_200"><a href="#footer">Horarios</a></div>
											<div class="button button_2 trans_200"><a href="contact.php">Contactenos</a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<!-- Home Slider Dots -->

			<div class="home_slider_dots">
				<ul id="home_slider_custom_dots" class="home_slider_custom_dots d-flex flex-row align-items-center justify-content-start">
					<li class="home_slider_custom_dot trans_200 active"></li>
					<li class="home_slider_custom_dot trans_200"></li>
					<li class="home_slider_custom_dot trans_200"></li>
				</ul>
			</div>

		</div>
	</div>

	<!-- Intro -->

	<div class="intro">
		<div class="container">
			<div class="row">

				<!-- Intro Content -->
				<div class="col-lg-6 intro_col">
					<div class="intro_content">
						<div class="section_title_container">
							<div class="section_title"><h2>Bienvenido a VONNACHER TAE KWON DO</h2></div>
						</div>
						<div class="intro_text">
							<p align="justify" >¡Bienvenido a VONNACHER TAE KWON DO, donde cada paso es un avance hacia tu mejor versión! Aquí, la excelencia marcial se une al crecimiento personal. Únete a nuestra comunidad comprometida con el respeto, la disciplina y el éxito. Prepárate para explorar un camino donde cada movimiento es un logro y cada desafío, una oportunidad de crecimiento. ¡Estamos emocionados de tenerte aquí en tu viaje hacia la maestría en Tae Kwon Do!</p>
						</div>
					</div>
				</div>

				<!-- Intro Form -->
				<div class="col-lg-6 intro_col">
					<div class="intro_form_container">
						<img src="images/bienvenido.jpg" width="100%" alt="">

					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Why Choose Us -->

	<div class="why">
		<!-- <div class="background_image" style="background-image:url(images/why.jpg)"></div> -->
		<div class="container">
			<div class="row row-eq-height">

				<!-- Why Choose Us Image -->
				<div class="col-lg-6 order-lg-1 order-2">
					<div class="why_image_container">
						<div class="why_image"><img src="images/whi_1.png" height="700px" alt=""></div>
					</div>
				</div>

				<!-- Why Choose Us Content -->
				<div class="col-lg-6 order-lg-2 order-1">
					<div class="why_content">
						<div class="section_title_container">
							<div class="section_title"><h2>¿Por qué deberíarías escogernos?</h2></div>
						</div>
						<div class="why_text">
							<p align="justify" >En nuestro gimnasio, el enfoque no solo está en las técnicas, sino en el desarrollo personal integral. Contamos con instructores altamente calificados que aseguran una enseñanza de calidad, mientras nuestra comunidad ofrece un ambiente de apoyo y compañerismo. Los resultados no solo se reflejan en las habilidades de Tae Kwon Do, sino en la confianza y disciplina que se aplican en la vida cotidiana.</p>
						</div>
						<div class="why_list">
							<ul>

								<!-- Why List Item -->
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="icon_container d-flex flex-column align-items-center justify-content-center">
										<div class="icon"><img src="images/rating.png" alt="https://www.flaticon.com/authors/prosymbols"></div>
									</div>
									<div class="why_list_content">
										<div class="why_list_title">Mision</div>
										<div class="why_list_text">Buscamos ofrecer una enseñanza destacada de taekwondo, manteniendo un enfoque constante y estandarizado.</div>
									</div>
								</li>

								<!-- Why List Item -->
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="icon_container d-flex flex-column align-items-center justify-content-center">
										<div class="icon"><img src="images/binoculars (2).png" alt="https://www.flaticon.com/authors/prosymbols"></div>
									</div>
									<div class="why_list_content">
										<div class="why_list_title">Vision</div>
										<div class="why_list_text">Buscamos ser líderes en enseñanza de taekwondo, formando atletas destacados y personas ejemplares.</div>
									</div>
								</li>

								<!-- Why List Item -->
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="icon_container d-flex flex-column align-items-center justify-content-center">
										<div class="icon"><img src="images/skills.png" alt="https://www.flaticon.com/authors/prosymbols"></div>
									</div>
									<div class="why_list_content">
										<div class="why_list_title">Valores</div>
										<div class="why_list_text">Inculcar a los alumnos actitud, lealtad, disciplina y respeto para mejorar sus vidas personalmente.</div>
									</div>
								</li>

							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Call to action -->

	<div class="cta">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="cta_container d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
						<div class="cta_content">
							<div class="cta_title">Agenda tu siguiente cita</div>
							<div class="cta_text">¡Acelera tu camino en el Tae Kwon Do! Descubre un espacio de apoyo y crecimiento personal. <br>Agenda tu cita y únete a nuestra comunidad.</br></div>
						</div>
						<a class="boton-telefono cta_phone ml-lg-auto" href="tel:+528992648196">+52 899 2648 196</a></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Extra -->

	<div class="extra" id="extraSection">
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/que-es-el-tkd.jpg"  data-speed="0.8"></div>
    <div class="container">
	<?php
require 'Backend/Conexiondata.php';

// Obtener el mes actual y su nombre
$mesActual = date('Y-m');
$nombreMesActual = date('F', strtotime($mesActual));

// Obtener la descripción actual para el mes actual
$sql = "SELECT Descripcion FROM promocion WHERE Mes = :mes";
$stmt = $db->prepare($sql);
$stmt->bindParam(':mes', $mesActual, PDO::PARAM_STR);
$stmt->execute();
$descripcionActual = $stmt->fetchColumn();
?>

<div class="row">
    <div class="col">
        <div class="extra_container d-flex flex-row align-items-start justify-content-end">
            <div class="extra_content">
                <div id="extraTitle" class="extra_title"><h2>Solo en <?php echo $nombreMesActual; ?></h2></div>
                <div class="extra_text">
                    <p><?php echo $descripcionActual; ?></p>
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
								<a href="curso/nuevo.php">
									<div>VONNACHER</div>
									<div>TAE KWON DO</div>
								</a>
							</div>
							<div class="footer_about_text">
							<p>Bienvenido a la agrupación más grande a nivel nacional e internacional ahora contamos con escuelas en los estados de Nuevo León, Tamaulipas, Cohauila, Merida, Guanajuato, Guadalajara y USA.</p>
							</div>
						</div>
					</div>

					<!-- Footer Contact Info -->
					<div class="col-lg-3 footer_col">
						<div class="footer_contact">
							<div class="footer_title">Informacion de Contacto </div>
							<ul class="contact_list">
								<li><a href="tel:+52 899 1198 176">+52 899 1198 176</a></li>
								<li><a href="tel:+52 899 2648 196 ">+52 899 2648 196</a></li>
								<li><a href="mailto: enriquemanrique@hotmail.com">enriquemanrique@hotmail.com</a></li>
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
<script src="plugins/jquery-datepicker/jquery-ui.js"></script>
<script src="js/custom.js"></script>

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