<?php 
	include 'includes/conf.inc.php';
?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title><?php echo TITLE ?></title>
	<link rel="stylesheet" href="<?php echo CSS_PATH?>styles.css">
	<link rel="stylesheet" href="<?php echo CSS_PATH?>supersized.css">
	<script type="text/javascript" src="<?php echo JS_PATH?>modernizr.js"></script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-40183931-1', 'multiplaza.com.py');
	  ga('send', 'pageview');

	</script>
	<script src="<?php echo JS_PATH?>jquery-1.9.1.min.js"></script>
	<script src="<?php echo JS_PATH?>supersized.3.2.7.min.js"></script>
	<script src="<?php echo JS_PATH?>bgscript.js"></script>
</head>
<body class="bodyBeca">
	<div class="contenedorslider"></div>
	<?php include('includes/inc.secondarynav.php');?>
	<header>
		<?php include('includes/inc.header.php');?>
	</header>
	<section id="contenedor">

		<img class="" src="<?php echo IMAGE_PATH?>header/rse.jpg" alt="">

		<h1>R.S.E. » <span>Programa de Becas Multiplaza</span></h1>

		<h1>Requisitos</h1>
		<ul>
			<li>&#9632; Ser paraguayo de nacimiento.</li>
			<li>&#9632; Ser menor de 20 años al momento de la postulación.</li>
			<li>&#9632; Bachiller concluido.</li>
			<li>&#9632; Tener necesidad económica.</li>
			<li>&#9632; Estar interesado en estudiar una de las carreras mencionadas y en una de las universidades seleccionadas.</li>
			<li>&#9632; No ser beneficiado de otra beca para estudios de pregrado.</li>
			<li>&#9632; No contar con algún tipo de financiamiento para estudios de pregrado.</li>
		</ul>
		<h1>Documentos requeridos para la postulación</h1>
		<ul>
			<li>1. Formulario oficial de solicitud (llenado a computadora).</li>
			<li>2. Certificado de estudios original, visado y legalizado por el Ministerio de Educación y Cultura.</li>
			<li>3. Título de Bachiller visado y legalizado por el Ministerio de Educación y Cultura.</li>
			<li>4. Plan de estudios.</li>
			<li>5. Dos cartas de recomendación.</li>
			<li>6. Fotocopia de Cédula de Identidad o Pasaporte.</li>
			<li>7. Certificado de Antecedentes Policiales original.</li>
		</ul>
		<h1>Programa de Becas Multiplaza</h1>
		<p>El Programa de Becas Multiplaza tiene como objetivo fomentar la movilidad social de jóvenes talentosos, a través de una educación de pregrado de calidad.</p>
		<p>Está dirigido a todos aquellos recién egresados de la educación media y desean iniciar una carrera profesional de éxito.</p>
		<p>Las becas son gestionadas mediante Convenios de Colaboración con la Universidad Autónoma del Paraguay y la Universidad Privada del Guairá.</p>
		<p>Para postular a la beca, deben enviarnos su solicitud vía mail a <a href="mailto:info@multiplaza.com.py" target="_top">info@multiplaza.com.py</a> o completarla en el Modulo de Informes.</p>
		
		<div class="push"></div>
	</section>
	<footer>
		<?php include('includes/inc.footer.php');?>
	</footer>
	<script>
		$(document).ready(function(){

		    $('#navBuscar a').click(function(event) {
		    	event.preventDefault();
		    	//alert("hola");
		    	if ($("#searchbox").hasClass('open')) {
					$('#searchbox').animate({width:'0px'}, 500);
					$('#searchbox').removeClass('open');
				}else{
					$('#searchbox').animate({width:'150px'}, 500);
					$( "#searchbox" ).focus();
					$( "#searchbox" ).addClass('open');
				};
		    });
		   
		});
	</script>
</body>
</html>