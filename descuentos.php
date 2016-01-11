<?php 
	include 'includes/conf.inc.php';

	include(MODELS_PATH.'model.Descuentos.php');
	include(MODELS_PATH.'model.Tiendas.php');
	$descuentos_model = new Descuentos();
	$descuentos = $descuentos_model->fetchAll('descuentos');

	$tiendas_model = new Tiendas();


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
<body class="bodyDescuentos">
	<div class="contenedorslider"></div>
	<?php include('includes/inc.secondarynav.php');?>
	<header>
		<?php include('includes/inc.header.php');?>
	</header>
	<section id="contenedor">

		<img class="" src="<?php echo IMAGE_PATH?>header/descuentos.jpg" alt="">

		<section id="listado-descuentos">
			<?php $i=0; foreach ($descuentos as $descuento) { ?>
			<?php $tienda = $tiendas_model->fetchOneById($descuento['tienda_id']); ?>
			<article class="descuento">
				<img src="<?php echo IMAGE_PATH?>descuentos/<?php echo $descuento['descuento_porcentaje']?>.jpg" alt="descuento" class="porcentaje">
				<h1><?php echo htmlentities($tienda['tienda_nombre'], ENT_IGNORE & ENT_HTML5, "ISO-8859-15"); ?></h1>
				<p><span>Bloque:</span> <?php echo htmlentities($tienda['tienda_bloque'], ENT_IGNORE & ENT_HTML5, "ISO-8859-15"); ?></p>
				<p><span>Nivel:</span> <?php echo htmlentities($tienda['tienda_planta'], ENT_IGNORE & ENT_HTML5, "ISO-8859-15"); ?></p>
			</article>

			<?php $i++; } ?>
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