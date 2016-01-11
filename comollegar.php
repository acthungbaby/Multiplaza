<?php 
	include 'includes/conf.inc.php';

	include(MODELS_PATH.'model.Cine.php');


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
<body class="bodyComo">
	<div class="contenedorslider"></div>
	<?php include('includes/inc.secondarynav.php');?>
	<header>
		<?php include('includes/inc.header.php');?>
	</header>
	<section id="contenedor">

		<img class="" src="<?php echo IMAGE_PATH?>header/como-llegar.jpg" alt="">
		<section id="mapa">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3606.634567640522!2d-57.570972000000005!3d-25.316478999999962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x945da8dcbd063931%3A0x4ff67073ad8ea591!2sShopping+Multiplaza!5e0!3m2!1sen!2s!4v1399867105664" width="920" height="380" frameborder="0" style="border:0"></iframe>
		</section>

		<section id="direcciones">
			<h3>Dirección:</h3>
			<p>Av. Eusebio Ayala 4501</p>
			<h3>Colectivos que circulan sobre la Av. Eusebio Ayala:</h3>
			<p>Línea 00 - Línea 00 - Línea 00 - Línea 00 - Línea 00 - Línea 00 - Línea 00 - Línea 00
			Línea 00 - Línea 00 - Línea 00 - Línea 00 - Línea 00 - Línea 00 - Línea 00 - Línea 00</p>
		</section>
		
		
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