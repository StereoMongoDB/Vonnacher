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
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header trans_400">
		<div class="header_content d-flex flex-row align-items-center jusity-content-start trans_400">

			<!-- Logo -->
			<div class="logo">
				<a href="contact.php">
					<div>VONNACHER</div>
					<div>TAE KWON DO</div>
				</a>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li><a href="index.php">Inicio</a></li>
					<li><a href="about.php">Sobre Nosotros</a></li>
					<li><a href="services.php">Servicios</a></li>
					<li class="active"><a href="contact.php">Contacto</a></li>
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
					<li><a href="services.php">Servicios</a></li>
					<li class="active"><a href="contact.php">Contacto</a></li>
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
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/contacto.jpg" data-speed="0.8"></div>
		<div class="home_overlay"><img src="images/home_overlay.png" alt=""></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title">Contacto</div>
							<div class="home_text">Para agendar tu cita o resolver cualquier duda, ¡escríbenos o llámanos! Estamos aquí para ayudarte en tu camino en el Tae Kwon Do</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact" id="citas">
		<div class="container">
			<div class="row">

				<!-- Contact Form -->
				<div class="col-lg-6" id="agendaCita">
    <div class="contact_form_container">
        <div class="contact_form_title">Dudas o Comentarios</div>
        <form action="Backend/dudas.php" method="post" class="contact_form" id="contact_form">
            <div class="d-flex flex-row align-items-start justify-content-between flex-wrap">
                <input type="text" class="contact_input" placeholder="Nombre" required="required" name="nom" >
                <input type="email" class="contact_input" placeholder="Correo Electrónico" required="required" name="Correo" >
                <input type="tel" class="contact_input" placeholder="Teléfono" required="required" minlength="10" maxlength="10" name="Teléfono" >
                <textarea class="contact_input contact_textarea" placeholder="Comentario" required="required" maxlength="300" name="Comentario" ></textarea>
                <button class="button button_1 contact_button trans_200" href="#agendaCita" >ENVIAR</button>
            </div>
        </form>
    </div>
</div>


				<!-- Contact Content -->
				<div class="col-lg-5 offset-lg-1 contact_col">
					<div class="contact_content">
						<div class="contact_content_title">Contacto</div>
						<div class="contact_content_text">
							<p align="justify" >¡Contáctanos y comienza tu viaje en el Tae Kwon Do hoy mismo!
							¡Reserva tu lugar y da el primer paso hacia una versión más fuerte de ti mismo!</p>
						</div>
						<div class="direct_line d-flex flex-row align-items-center justify-content-start">
							<div class="direct_line_title text-center">Linea directa</div>
							<a class="direct_line_num text-center" href="tel:+528992648196">+52 899 2648 196</a> 
						</div>
						<div class="contact_info">
							<ul>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div>Ubicación </div>
									<div><a>  Av Vista Hermosa, Plaza Santorini #824</a></div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div>Telefono</div>
									<div>
										<a href="tel:+52 899 1198 176">+52 899 1198 176</a></div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div>E-mail</div>
									<div><a href="mailto: enriquemanrique@hotmail.com">enriquemanrique@hotmail.com</a></div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row google_map_row">
				<div class="col">
					
					<!-- Contact Map -->

					<div class="contact_map">

						<!-- Google Map -->
						
						<div class="map">
							<div id="google_map" class="google_map">
								<div class="map_container">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3583.780623581647!2d-98.36244882389103!3d26.073424995652893!
									2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x866505b7ccdc5175%3A0x7369e2db631475fc!2s
									Vonnacher%20Vista%20Hermosa!5e0!3m2!1ses!2smx!4v1699496078295!5m2!1ses!2smx" 
									width="1200" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
								</div>
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
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/contact.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    flatpickr('#datepicker', {
        minDate: 'today', // Limita la fecha mínima a la fecha actual
        disable: [
            function(date) {
                // Deshabilita los días que no son lunes, miércoles o jueves
                return (date.getDay() !== 1 && date.getDay() !== 3 && date.getDay() !== 4);
            }
        ]
    });
</script>
<script>const clasesSelect = document.getElementById('clases');
const horaInput = document.getElementById('hora');

clasesSelect.addEventListener('change', function() {
    const seleccion = this.value;

    if (seleccion === '1') {
        horaInput.value = '6:00 pm';
    } else if (seleccion === '2') {
        horaInput.value = '7:00 pm';
    } else if (seleccion === '3') {
        horaInput.value = '8:00 pm';
    } else {
        horaInput.value = ''; // Reiniciar el valor si no se selecciona nada o se elige la opción predeterminada
    }
});</script>

</body>
</html>