<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>EARSA S.A.</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="css/magnific-popup.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
		
	<script type="text/javascript">
	$(function() {
		// Get the form.
		var form = $('#ajax-contact');

		// Get the messages div.
		var formMessages = $('#form-messages');

		// Set up an event listener for the contact form.
		$(form).submit(function(event) {
			// Stop the browser from submitting the form.
			event.preventDefault();

			// Serialize the form data.
			var formData = $(form).serialize();
			
			// Submit the form using AJAX.
			$.ajax({
				type: 'POST',
				url: $(form).attr('action'),
				data: formData
			})
			.done(function(response) {
				// Make sure that the formMessages div has the 'success' class.
				$(formMessages).removeClass('error');
				$(formMessages).addClass('success');

				// Set the message text.
				$(formMessages).text(response);

				// Clear the form.
				$('#nombreApellido').val('');
				$('#email').val('');
				$('#tema').val('');
				$('#mensaje').val('');
			})
			.fail(function(data) {
				// Make sure that the formMessages div has the 'error' class.
				$(formMessages).removeClass('success');
				$(formMessages).addClass('error');

				// Set the message text.
				if (data.responseText !== '') {
					$(formMessages).text(data.responseText);
				} else {
					$(formMessages).text('Oops! An error occured and your message could not be sent.');
				}
			});
		});
		
		
	});
	
	</script>
	<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
	</script>


</head>

<body>
	<!-- Header -->
	<header id="home">
		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('./img/linear-gradient2.jpg');">
			<!-- <div class="overlay"></div> -->
		</div>
		<!-- /Background Image -->

		<!-- Nav -->
		<nav id="nav" class="navbar nav-transparent">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a href="index.php">
							<img class="logo" src="img/logo-earsa-alt.png" alt="EARSA S.A.">
							<img class="logo-alt" src="img/logo-earsa-alt.png" alt="EARSA S.A.">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Collapse nav button -->
					<div class="nav-collapse">
						<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>

				<!--  Main navigation  -->
				<ul class="main-nav nav navbar-nav navbar-right">
					<li><a href="#home">Home</a></li>
					<li><a href="#service">Services</a></li>
					<li><a href="#about">Nosotros</a></li>
					<li><a href="#contact">Contacto</a></li>
				</ul>
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->

		<!-- home wrapper -->
		<div class="home-wrapper">
			<div class="container">
				<div class="row">

					<!-- home content -->
					<div class="col-md-12">
						<div class="home-content">
						
							<h1 class="white-text earsa">ESTUDIO ADUANERO RAMOS S.A.</h1>
							<h3 class="white-text earsa">COMERCIO EXTERIOR</h3>
							
							<br/>
							<p class="white-text">Somos un estudio aduanero dedicado a brindar un servicio integral en Comercio Internacional. <br/>
							Con trayectoria, experiencia, responsabilidad, líder en soluciones ágiles, <br/>optimización de recurso y desarrollos adaptables a la evolución comercial.
							</p>
							<button class="white-btn"><a href="#contact">Contáctenos</a></button>
							<button class="white-btn"><a href="#about">Nosotros</a></button>
						</div>
					</div>
					<!-- /home content -->

				</div>
			</div>
		</div>
		<!-- /home wrapper -->

	</header>
	<!-- /Header -->
	
	<!-- Service -->
	<div id="service" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Servicios</h2>
				</div>
				<!-- /Section header -->

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-cogs"></i>
						<h3>Asesores especializados </h3>
						<p>Asesores especializados en la gestión de documentación aduanera y de terceros organismos públicos y privados.</p>
					</div>
				</div>
				<!-- /service -->
				
				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-cogs"></i>
						<h3>Corresponsalías</h3>
						<p>Corresponsalías en las principales aduanas del país y el Mercosur.</p>
					</div>
				</div>
				<!-- /service -->

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-cogs"></i>
						<h3>Operaciones de importación y exportación</h3>
						<p>Realizacion íntegra en operaciones de importación y exportación.</p>
					</div>
				</div>
				<!-- /service -->
				
			</div>
			<div class="row">
				
				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-pencil"></i>
						<h3>Depósitos</h3>
						<p>Asesoramiento y contratación de depósitos en zonas francas. Zonas primarias y depósitos fiscales.</p>
					</div>
				</div>
				<!-- /service -->

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-pencil"></i>
						<h3>Fletes internacionales</h3>
						<p>Contratación de fletes internacionales aéreos, terrestres, marítimos.</p>
					</div>
				</div>
				<!-- /service -->

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-pencil"></i>
						<h3>Fletes nacionales</h3>
						<p>Fletes nacionales, desde y hacia todo el país respetando las condiciones necesaria para la correcta conservación del producto.</p>
					</div>
				</div>
				<!-- /service -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Service -->

	<!-- Why Choose Us -->
	<div id="about" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- why choose us content -->
				<div class="col-md-6">
					<div class="section-header">
						<h2 class="title">Nosotros</h2>
					</div>
					<p><b>Estudio Aduanero Ramos S.A.</b> es un estudio aduanero dedicado a brindar un servicio integral en Comercio Internacional. <p/>
					<p>Con trayectoria, experiencia, responsabilidad, líder en soluciones ágiles, optimización de recurso y desarrollos adaptables a la evolución comercial.</p>
					<p>Rubén Alberto Ramos con más de 20 años ejerciendo la profesión preside el Estudio Aduanero Ramos SA. <p/>
					<p>Su compromiso en la formación de la empresa, bajo estándares de excelencia, ha sido el pilar fundamental en su funcionamiento.</p>
				</div>
				<!-- /why choose us content -->

				<!-- About slider -->
				<div class="col-md-6">
					<div id="about-slider" class="owl-carousel owl-theme">
						<img class="img-responsive" src="./img/earsa1.jpg" alt="">
						<img class="img-responsive" src="./img/earsa2.jpg" alt="">
						<img class="img-responsive" src="./img/earsa3.jpg" alt="">
						<img class="img-responsive" src="./img/earsa4.jpg" alt="">
						<img class="img-responsive" src="./img/earsa5.jpg" alt="">
					</div>
				</div>
				<!-- /About slider -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Why Choose Us -->



	<!-- Contact -->
	<div id="contact" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section-header -->
				<div class="section-header text-center">
					<h2 class="title">Contacto</h2>
				</div>
				<!-- /Section-header -->
				
					<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-map-marker"></i>
						<h3>Despacho en RAFAELA - Santa Fe (CASA CENTRAL)</h3>
						<p>Falucho 226 - S2300EAF</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-phone"></i>
						<h3>Teléfonos / Fax</h3>
						<p>(03492) 45-2698/50-2222</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-envelope"></i>
						<h3>Email</h3>
						<p>info@earsa.com.ar</p>
					</div>
				</div>
				<!-- /contact -->
				
			</div>
			<!-- /Row -->
			
			<!-- Row -->
			<div class="row">

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-map-marker"></i>
						<h3>Despacho en CABA - Buenos Aires</h3>
						<p>Av. Belgrano 615 Of. 1L - CP1092</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-phone"></i>
						<h3>Teléfonos</h3>
						<p>(011) 5258-0950/51</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-envelope"></i>
						<h3>Email</h3>
						<p>info@earsa.com.ar</p>
					</div>
				</div>
				<!-- /contact -->

			</div>
			<!-- /Row -->
			
			<!-- Row -->
			<div class="row">

				<!-- contact form -->
				<div class="col-md-8 col-md-offset-2">
				
				
				<form class="contact-form" id="ajax-contact" method="post" action="mailer.php">
					<input id="nombreApellido" type="text" name="nombreApellido" class="input" placeholder="Nombre y Apellido">
					<input id="email" type="email" name="email" class="input" placeholder="Email">
					<input id="tema" type="text" name="tema" class="input" placeholder="Tema">
					<textarea id="mensaje" name="mensaje" class="input" placeholder="Escriba aquí..."></textarea>
					<button name="buttonEmail" class="main-btn">Enviar</button>
				</form>
				<div id="form-messages"></div>
				</div>
				<!-- /contact form -->

			</div>
			<!-- /Row -->
			
		</div>
		<!-- /Container -->

	</div>
	<!-- /Contact -->


	<!-- Footer -->
	<footer id="footer" class="sm-padding bg-dark">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<div class="col-md-12">

					<!-- footer logo -->
					<div class="footer-logo">
						<a href="index.php"><img src="img/logo-earsa-alt.png" alt="logo"></a>
					</div>
					<!-- /footer logo -->

					<!-- footer follow -->
					<!-- <ul class="footer-follow">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube"></i></a></li>
					</ul>-->
					<!-- /footer follow -->

					<!-- footer copyright -->
					<div class="footer-copyright">
						<p>Copyright © 2018. All Rights Reserved. Designed by <a href="http://simplessoluciones.com" target="_blank">Simples Soluciones Informáticas</a></p>
					</div>
					<!-- /footer copyright -->

				</div>

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</footer>
	<!-- /Footer -->

	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- Preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- /Preloader -->

	<!-- jQuery Plugins -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

</body>

</html>
