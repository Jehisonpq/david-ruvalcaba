<?php
$wasPost = ((isset($_POST['nombre']) && $_POST['nombre'] !== '') && (isset($_POST['ciudad']) && $_POST['ciudad'] !== '') && (isset($_POST['telefono']) && $_POST['telefono'] !== '') && (isset($_POST['email']) && $_POST['email'] !== '') && (isset($_POST['mensaje']) && $_POST['mensaje'] !== ''));

if($wasPost){
	$nombre = $_POST['nombre'];
	$ciudad = $_POST['ciudad'];
	$telefono = $_POST['telefono'];
	$email = $_POST['email'];
	$mensaje = $_POST['mensaje'];
	$para = 'doctordavidruvalcaba@gmail.com';
	$titulo = 'MENSAJE DE DAVIDRUVALCABA.COM';
	$header = 'From: ' . $email;
	$msjCorreo = "Nombre: $nombre\n Ciudad: $ciudad\n Telefono: $telefono\n Email: $email\n Mensaje:\n $mensaje";
	$sending = mail($para, $titulo, $msjCorreo, $header);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Doctor David Ruvalcaba - Medicina Estética y Nutrición</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="keywords" content="Doctor David Ruvalcaba, Mesoterapia, Botox, Peeling, Nutricion, Medicina Estética">
	<meta name="description" content="Nutrición Clínica, Geriátrica y Deportiva. Medicina Estética y Antienvejecimiento.">
	<meta name="author" content="Jehison Pérez">
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.css">
	<link href="css/estilos.css" rel="stylesheet" media="screen">
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
	<!-- librerías opcionales que activan el soporte de HTML5 para IE8 -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-102044976-4', 'auto');
	  ga('send', 'pageview');

	</script>
</head>
<body>
	<header>
		<div class="container">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Desplegar navegación</span>
							<img src="images/menu.svg" alt="menu" titile='menu' class='menuMobile'>
						</button>
						<a class="navbar-brand" href="#"><img class="img-responsive" src="images/Logo.png" alt="Logo David Ruvalcaba" title="Logo David Ruvalcaba"></a>
					</div>

					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li><a id='page-nosotros' href="#">Servicios</a></li>
							<li><a id='page-seleccion' href="#">Sobre Mí</a></li>
							<li><a id='page-nomina' href="#">Estudios</a></li>
							<li><a id='page-contactenos' href="#">Contáctame</a></li>
							<li><a target='_blank' href="https://www.facebook.com/doctordavidruvalcaba"><img src="images/logoFacebook.png" alt="facebook" title="Facebook"></a></li>
							<li><a target='_blank' href="https://instagram.com/doctordavidruvalcaba/"><img src="images/logoInstagram.png" alt="instagram" title="Instagram"></a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>

	<div class="row slider">
		<h1><span id='typed'></span><span id='typed-cursor'></span></h1>
		<div class="lineaCopy"></div>
		<p class='copySlider'>Nutrición Clínica, Geriátrica y Deportiva. <br> Medicina Estética y Antienvejecimiento.</p>
		<img src="images/flechaAbajo.png" alt="flecha" title='Bajar' class='flechaAbajo'>
	</div>

	<div class="row sectionNosotros fondoBlanco">
		<div class="container">
			<h2>SERVICIOS</h2>
	

			<div class="carousel-servicios owl-carousel">
				<div>
					<!-- <img src="images/icon1.svg" alt=""> -->
					<h3>Rinomodelación</span></h3>
					<p>Procedimiento no invasivo con ácido hialurónico con el cual es posible tener una nariz estética y recta en tan solo minutos. Es práctico, rápido, económico y perfecto para hombres y mujeres que quieren mejorar su apariencia y lograr una nariz deseada en pocos minutos.</p>
				</div>
				<div>
					<!-- <img src="images/icon1.svg" alt=""> -->
					<h3>Nutrición <span>Deportiva</span></h3>
					<p>Mejora tus hábitos alimenticios y obtén mayor rendimiento en cualquier deporte.</p>
				</div>
				<div>
					<!-- <img src="images/icon1.svg" alt=""> -->
					<h3>Rellenos <span>Faciales</span></h3>
					<p>Moldea tu rostro con ácido hialurónico para aumentos de labios, mentón, pómulos, borrar líneas de expresión, nasogenianos y línea de marioneta.</p>
				</div>
				<div>
					<!-- <img src="images/icon1.svg" alt=""> -->
					<h3>Botox <span></span></h3>
					<p>Luce más joven con eliminación de arrugas en frente, entrecejo y patas de gallo.</p>
				</div>
				<div>
					<!-- <img src="images/icon1.svg" alt=""> -->
					<h3>PRP <span></span></h3>
					<p>Plasma rico en plaquetas para rejuvenecimiento facial con una piel más hidratada y radiante.</p>
				</div>
				<div>
					<!-- <img src="images/icon1.svg" alt=""> -->
					<h3>Acné <span></span></h3>
					<p>Limpia tu rostro y elimina los molestos e incómodos granos.</p>
				</div>
				<div>
					<!-- <img src="images/icon1.svg" alt=""> -->
					<h3>Eliminación de<span> Verrugas</span></h3>
					<p>Procedimiento ambulatorio, rápido y sencillo para eliminar las verrugas de cara y cuerpo.</p>
				</div>
				<div>
					<!-- <img src="images/icon1.svg" alt=""> -->
					<h3>Microdermoabrasión <span></span></h3>
					<p>Elimina las manchas, impurezas y células muertas de tu rostro y cuerpo, previniendo el acné y otras enfermedades de la piel.</p>
				</div>
				<div>
					<!-- <img src="images/icon1.svg" alt=""> -->
					<h3>Calvicie <span></span></h3>
					<p>Diferentes alternativas para fortalecer, dar mejor aspecto y evitar la caída del cabello.</p>
				</div>
				<div>
					<!-- <img src="images/icon1.svg" alt=""> -->
					<h3>Flacidez <span></span></h3>
					<p>Tratamiento con microinyecciones en cara, cuello y cuerpo para pegar o quitar el exceso de piel.</p>
				</div>
				<div>
					<!-- <img src="images/icon1.svg" alt=""> -->
					<h3>Mesoterapia <span></span></h3>
					<p>Ideal para obesidad localizada, se realiza con inyecciones liporeductoras, reafirmantes y moldeadoras.</p>
				</div>
				<div>
					<!-- <img src="images/icon1.svg" alt=""> -->
					<h3>Radiofrecuencia <span></span></h3>
					<p>Elimina la flacidez en cara, cuello y cuerpo.</p>
				</div>
				<div>
					<!-- <img src="images/icon1.svg" alt=""> -->
					<h3>Celulitis <span></span></h3>
					<p>Deshazte de esa piel de naranja con diferentes alternativas y mejora la apariencia de tu abdomen y piernas.</p>
				</div>
				<div>
					<!-- <img src="images/icon1.svg" alt=""> -->
					<h3>Hidrolipoclasia <span></span></h3>
					<p>Procedimiento para hombres y mujeres que elimina la grasa localizada, en brazos, espalda, abdomen, cintura o piernas, con el cual podrás reducir hasta 3 tallas en una sola sesión.</p>
				</div>
				<div>
					<!-- <img src="images/icon1.svg" alt=""> -->
					<h3>Minilipo <span>Ambulatoria</span></h3>
					<p>Procedimiento poco invasivo para extraer grasa localizada, ya sea en papada, brazos, abdomen, cintura o piernas.</p>
				</div>
				<div>
					<!-- <img src="images/icon1.svg" alt=""> -->
					<h3>Hiperhidrosis <span>Palmar y Axilar</span></h3>
					<p>Tratamiento con toxina botulínica A, para la sudoración excesiva de axilas y palmas.</p>
				</div>
				<div>
					<!-- <img src="images/icon1.svg" alt=""> -->
					<h3>Peeling <span>Facial</span></h3>
					<p>Para eliminación de manchas y secuelas de acné.</p>
				</div>
				<div>
					<!-- <img src="images/icon1.svg" alt=""> -->
					<h3>Terapia <span>Quelante</span></h3>
					<p>Desintoxica tu cuerpo y sangre con la administración de agentes quelantes intravenosos para eliminación de metales pesados en el cuerpo.</p>
				</div>
				<div>
					<!-- <img src="images/icon1.svg" alt=""> -->
					<h3>Terapia <span>Molecular</span></h3>
					<p>Aumenta tu productividad y tus niveles de energía, mejorando tu organismo con terapias a nivel celular.</p>
				</div>
				<div>
					<!-- <img src="images/icon1.svg" alt=""> -->
					<h3>Autohematoterapia <span>con ozono</span></h3>
					<p>Terapia antienvejecimiento que consiste en extracción autóloga de la sangre para aumentar la oxigenación en sangre con un mayor rendimiento en las actividades cotidianas, mejor sueño mayor líbido.</p>
				</div>
				<div>
					<!-- <img src="images/icon1.svg" alt=""> -->
					<h3>Tratamientos <span>con péptidos</span></h3>
					<p>Tratamiento ideal para rejuvenecimiento facial, flacidez en cara, cuello y cuerpo, aumento muscular y celulitis.</p>
				</div>
			</div>
		</div>			
	</div>

	<div class="row sectionSeleccion">
		<div class="col-md-6 fotoSeleccion"></div>
		<div class="col-md-6 textoSection">
			<h2>SOBRE MÍ</h2>
			<p> Apasionado de mi profesión, de la salud, el deporte y la perfección física. En constante preparación, actualización y aprendizaje de lo más innovador en medicina estética y nutrición. <br><br>

				Mi objetivo principal es empatizar y generar un vínculo especial con cada paciente, buscando siempre la satisfacción, apariencia física y autoestima de cada uno, llegando siempre a un equilibrio emocional, social y espiritual.</p>
			<div class="row">
				<div class="col-md-12">
					
				</div>
			</div>
		</div>
	</div>

	<div class="row sectionNomina">
		<div class="col-md-6 textoSection">
			<h2>ESTUDIOS</h2>
			<ul>
				<li>Médico egresado de la Universidad de Guadalajara.</li>
				<li>Especialidad en nutrición clínica y geriátrica.</li>
				<li>Maestría en medicina estética y antienvejecimiento.</li>
				<li>Diplomado en nutrición deportiva.</li>
				<li>Maestría en dirección y administración de hospitales.</li>
			</ul>
		</div>
		<div class="col-md-6 fotoNomina"></div>
	</div>

	<div class="row sectionContacto fondoBlanco">
		<div class="trama"></div>
		<div class="col-md-12">
			<h2>CONTACTO</h2>
		</div>
		<div class="container">
			<?php 
			if($wasPost){
				if($sending){
					?>
					<div class="mensajeEnviado">Mensaje Enviado. Gracias por comunicarte conmigo.</div>
					<?php
				}else{
					?>
					<div class="mensajeFallo">Falló envío del mensaje.</div>
					<?php
				}
			}
			?>
			<form role="form" action="index.php" method="post">
				<div class="col-md-6">
					<input type="input" class="form-control campoTexto" name="nombre" placeholder="Nombre">
					<input type="input" class="form-control campoTexto" name="ciudad" placeholder="Ciudad">
					<input type="tel" class="form-control campoTexto" name="telefono" placeholder="Teléfono">
					<input type="email" class="form-control campoTexto" name="email" placeholder="eMail">
				</div>
				<div class="col-md-6">
					<textarea class="form-control" name="mensaje" placeholder="Mensaje"></textarea>
				</div>
				<div class="col-md-12">
					<button type="submit" class="btn btn-primary center-block enviarMensaje">Enviar</button>
					<p>Justo Sierra 2222<br>	
					Tel. <span>33 2548 8131</span> <br>
					doctordavidruvalcaba@<span>gmail.com</span></p>
				</div>
			</form>
		</div>
	</div>

	<div class="row sectionMapa">
		<div class="map" id="map"></div>
	</div>

	<footer>
		<div class="row footer">
			<img src="images/Logo.png" alt="Logo David Ruvalcaba" title="Logo David Ruvalcaba">
		</div>
	</footer>

	<script src="js/jquery-1.12.3.min.js"></script>
	<script src='js/owl.carousel.min.js'></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBV5tT51ffQJmDxeOVLHsP8em7Vj6ayif4"></script>
	<script src="js/typed.js"></script>
	<script src="js/funciones.js"></script>
	<script src='js/animatescroll.js'></script>
	
</body>
</html>
