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
<body class="bodyMapa">
	<div class="contenedorslider"></div>
	<?php include('includes/inc.secondarynav.php');?>
	<header>
		<?php include('includes/inc.header.php');?>
	</header>
	<section id="contenedor">

		<img class="" src="<?php echo IMAGE_PATH?>header/mapa.jpg" alt="">

		<form action="" id="mapamall">
			<label for="selector">Nivel</label><br>
			<select name="selector" id="selector">
				<<option value="<?php echo IMAGE_PATH?>mapa/mapa-nivel-pb.png">Planta Baja</option>
				<option value="<?php echo IMAGE_PATH?>mapa/mapa-nivel-1.png">Nivel 1</option>
				<option value="<?php echo IMAGE_PATH?>mapa/mapa-nivel-2.png">Nivel 2</option>
			</select>
		</form>

		<div class="mapaprovisional">
			<img src="<?php echo IMAGE_PATH?>mapa/mapa-nivel-pb.png" alt="" class="mapa">
		</div>

		
	
		<div class="push"></div>
	</section>
	<footer>
		<?php include('includes/inc.footer.php');?>
	</footer>

	<script>
		$(document).ready(function(){
		    $('#selector').change(function(event) {
		    	var src='';
		    	src=$('#selector option:selected').attr('value');

		    	$('.mapaprovisional img').attr("src", '');

		    	$('.mapaprovisional img').attr("src", 'loading.gif');
		    	

		    	$('.mapaprovisional img').attr("src", src);
		    });

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