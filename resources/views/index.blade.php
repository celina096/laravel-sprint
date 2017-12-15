<!DOCTYPE HTML>

<html>
	<head>
		<title>Mis Finanzas</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="{{asset('css/main.css')}}" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<link rel="stylesheet" href="{{asset('css/carrousel.css')}}" />
	</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper" class="wrapper">
				<video src="{{asset ('images/intro.mp4')}}" poster="{{asset ('images/backgroundss.jpg')}}" loop autoplay width="100%"></video>

				<div id="header">
						<!-- Logo -->
							<div id="logo">
								<h1><a href="index.html">Mis Finanzas</a></h1>

							</div>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li class="current"><a href="/">Home</a></li>
									<li>
										<a href="#"> Servicios </a>
										<ul>
											<li><a href="#">Admistración</a></li>
											<li><a href="#">Asesoramiento</a></li>
											<li><a href="#">Presupuestos</a></li>
											<li>
												<a href="#">Bancos</a>
												<ul>
													<li><a href="#"> BBVA Francés </a></li>
													<li><a href="#"> Santander Rio </a></li>
													<li><a href="#"> ICBC </a></li>
													<li><a href="#"> Citi Bank </a></li>
													<li><a href="#"> Banco Nación </a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li><a href="/preguntas"> FAQs </a></li>
									@guest
									<li><a href="/login">Login</a></li>
									<li><a href="/register">Register</a></li>
									@else
									<li><a href="/login">Entrar</a></li>
									@endguest
								</ul>
							</nav>

					</div>
				</div>

			<!-- Intro -->
				<div id="intro-wrapper" class="wrapper style1">
					<div class="title"> Introducción </div>
					<section id="intro" class="container">
						<p class="style1"> ¿Quiénes somos?</p>
						<p class="style1">
							Somos un grupo de contadores especializados con las herramientas para brindarte la solucion a tus problemas financieros. <br class="mobile-hide" />
							Nuestra especialidad es otorgar de forma eficaz y rápida la ayuda que necesites para que lleves tus finanzas a su máximo potencial                                  <a href="http://html5up.net" class="nobr"></a>
						</p>
						<p class="style3"><strong>Mis Finanzas Accounting Group , Always by your side.</strong></p>

					</section>
				</div>

			<!-- Main -->
				<div class="wrapper style2">
					<div class="title"> Nuestros beneficios </div>
					<div id="main" class="container">

						<!-- Image -->
							<a href="#" class="image featured">
								<img src="{{asset ('images/background_5.jpg')}}" alt="" />
							</a>

						<!-- Features -->
							<section id="features">
								<header class="style1">
									<h2> ¿Qué beneficios adquiero al ser parte de Mis Finanzas ? </h2>

								</header>
								<div class="feature-list">
									<div class="row">
										<div class="6u 12u(mobile)">
											<section>
												<h3 class="icon fa-comment">ACCESIBILIDAD </h3>
												<p>Disponibilidad del servicio las 24 horas </p>
											</section>
										</div>
										<div class="6u 12u(mobile)">
											<section>
												<h3 class="icon fa-refresh">ASISTENCIA</h3>
												<p>Contacto con personas dedicadas al rubro</p>
											</section>
										</div>
									</div>
									<div class="row">
										<div class="6u 12u(mobile)">
											<section>
												<h3 class="icon fa-wrench" >ATENCIÓN </h3>
												<p>Soporte técnico por expertos</p>
											</section>
										</div>
										<div class="6u 12u(mobile)">
											<section>
												<h3 class="icon fa-cog"> NOTICIAS FINANCIERAS </h3>
												<p> Disponibilidad de distintos artículos financieros de las mejores fuentes del mundo</p>
											</section>
										</div>
									</div>


								<ul class="actions actions-centered">
									<li><a href="/register" class="button style1 big"> Empieza ahora </a></li>
									<li><a href="/login" class="button style2 big"> Ya tengo mi cuenta </a></li>
								</ul>
							</section>

					</div>
				</div>

			<!-- Highlights -->
				<div class="wrapper style3">
					<div class="title"> Sección de noticias </div>
					<div id="highlights" class="container">
						<div class="row 150%">
					        <div class="carrousel">
							  <div class="carrousel-images">

							  <div class="4u 12u(mobile) vista-container">
							   <div class="vista">
								<section class="highlight">
									<a href="#" class="image-link"><img src="{{asset ('images/financial-times-logo.jpg')}}"   alt="" ></a>
									
									
								</section>
								</div>
							</div>
							<div class="4u 12u(mobile) vista-container ">
							   <div class="vista">
								<section class="highlight">
									<a href="#" class="image-link"><img src="{{asset ('images/bbc-world-news.png')}}"   alt="" /></a>
								
									
								</section>
								</div>
							</div>
							<div class="4u 12u(mobile) vista-container ">
							  <div class="vista">
								<section class="highlight">
									<a href="#" class="image-link"><img src="{{asset ('images/cnn-logo.png')}}" alt= ></a>
									
								
								
								</section>
						     </div>
							</div>
						  </div>
							<button type="button" class="prev " >&laquo;</button>
                            <button type="button" class="next "> &raquo;</button>
						  </div>
					   </div>
					</div>
					
					<ul class="actions actions-centered">
							<li><a href="/news" class="button style1 big">Leer más</a></li>
							</ul>
			
				</div>
			<!-- Footer -->
				<div id="footer-wrapper" class="wrapper">
					<div class="title"> ¿Quieres contactarte con nosotros? </div>
					<div id="footer" class="container">
						<header class="style1">
							<h2>¿Sugerencias?</h2>
							<p>
								Puedes enviarnos sugerencias o tu opinión sobre Mis Finanzas a cualquiera de estos puntos de contacto:
							</p>
						</header>
						<hr />
						<div class="row 150%">
							<div class="6u 12u(mobile)">

								<!-- Contact Form -->
									<section>
										<form method="post">
										<input type="hidden" value="" >
										{{ csrf_field() }}
											<div class="row 50%">
												<div class="6u 12u(mobile)">
													<input type="text" name="name" id="contact-name" placeholder="Name" />
												</div>
												<div class="6u 12u(mobile)">
													<input type="text" name="email" id="contact-email" placeholder="Email" />
												</div>
											</div>
											<div class="row 50%">
												<div class="12u">
													<textarea name="mensaje" id="contact-message" placeholder="Message" rows="4"></textarea>
												</div>
											</div>
											<div class="row">
												<div class="12u">
													<ul class="actions">
														<li><input type="submit" class="style1" value="Send" /></li>
														<li><input type="reset" class="style2" value="Reset" /></li>
													</ul>
												</div>
											</div>
										</form>
									</section>

							</div>
							<div class="6u 12u(mobile)">

								<!-- Contact -->
									<section class="feature-list small">
										<div class="row">
											<div class="6u 12u(mobile)">
												<section>
													<h3 class="icon fa-home">Mailing Address</h3>
													<p>
														Mis Finanzas Accounting Group <br />
														 Lima 111 <br />
														 Buenos Aires, Argentina
													</p>
												</section>
											</div>
											<div class="6u 12u(mobile)">
												<section>
													<h3 class="icon fa-comment">Social</h3>
													<p>
														<a href="#">@MisFinanzas</a><br />
														<a href="#">linkedin.com</a><br />
														<a href="#">facebook.com</a>
													</p>
												</section>
											</div>
										</div>
										<div class="row">
											<div class="6u 12u(mobile)">
												<section>
													<h3 class="icon fa-envelope">Email</h3>
													<p>
														<a href="#">misfinanzasdh@gmail.com</a>
													</p>
												</section>
											</div>
											<div class="6u 12u(mobile)">
												<section>
													<h3 class="icon fa-phone">Phone</h3>
													<p>
														(000) 555-0000
													</p>
												</section>
											</div>
										</div>
									</section>

							</div>
						</div>
						<hr />
					</div>
					<div id="copyright">
						<ul>
							<li>&copy Made by: Celina, Hernán & Mariana  - Digital House</li>
						</ul>
					</div>
				</div>

		</div>



		<!-- Scripts -->

			<script src="{{asset ('js/jquery.min.js')}}"></script>
			<script src="{{asset ('js/jquery.dropotron.min.js')}}"></script>
			<script src="{{asset ('js/skel.min.js')}}"></script>
			<script src="{{asset ('js/skel-viewport.min.js')}}"></script>
			<script src="{{asset ('js/util.js')}}"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="{{asset ('js/main.js')}}"></script>

			<script type="text/javascript">
    var carrousel = document.querySelector('.carrousel')
var carrito = document.querySelector('.carrousel-images')

var imagenActual = 0

var cantidadImagenes = document.querySelectorAll('.carrousel .vista').length

document.querySelector('.prev').addEventListener('click', function () {
  if (imagenActual > 0) {
        imagenActual--
    } else {
        imagenActual = cantidadImagenes - 1
    }
    carrito.style.transform = 'translateX(' + (-carrousel.offsetWidth * imagenActual) + 'px)';
})

document.querySelector('.next').addEventListener('click', function () {
  if (imagenActual < (cantidadImagenes - 1)) {
        imagenActual++
    } else {
        imagenActual = 0
    }
    carrito.style.transform = 'translateX(' + (-carrousel.offsetWidth * imagenActual) + 'px)';
})

carrito.addEventListener('transitionend', function () {
        console.log('fin de la transition')
    })

</script>

	</body>
</html>
