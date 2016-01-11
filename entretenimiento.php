<?php 
	include 'includes/conf.inc.php';

	if (isset($_GET['s'])) {
		include(MODELS_PATH.'model.Secciones.php');
		$secciones_model = new Secciones();
		$seccion = $secciones_model->fetchById($_GET['s']);

		include(MODELS_PATH.'model.Tiendas.php');
		$tiendas_model = new Tiendas();
		$tiendas = $tiendas_model->fetchAllBySeccion($_GET['s']);
	}
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
<body class="bodyEntretenimiento">
	<div class="contenedorslider"></div>
	<?php include('includes/inc.secondarynav.php');?>
	<header>
		<?php include('includes/inc.header.php');?>
	</header>
	<section id="contenedor">

		<img class="" src="<?php echo IMAGE_PATH?>header/entretenimiento.jpg" alt="">

		<?php if (!isset($_GET['s'])) { ?>
		
		<section id="tiendas">
			<a href="cartelera.php"><article class="cine">
				<section class="text">
					<h3>Cine</h3>
				</section>
			</article></a>
			<a href="entretenimiento.php?s=34"><article class="juegos">
				<section class="text">
					<h3>Juegos</h3>
				</section>
			</article></a>
			<a href="entretenimiento.php?s=35"><article class="eventos last">
				<section class="text">
					<h3>Eventos</h3>
				</section>
			</article></a>
			
		</section>

		<?php }else{?>

		<section id="listadotiendas">
			<h1><a href="entretenimiento.php">Entretenimiento</a> » <span><?php echo htmlentities($seccion['seccion_nombre'], ENT_IGNORE & ENT_HTML5, "ISO-8859-15"); ?></span></h1>

			<?php $i=0; foreach ($tiendas as $tienda) { ?>
			<?php if($i==0) { echo "<div class='tienda_fila_container' style='float:left;'>"; }?>
			<article class="tienda <?php if($i==3) {echo "last"; echo $i;}?>">
				<h1><?php echo htmlentities($tienda['tienda_nombre'], ENT_IGNORE & ENT_HTML5, "ISO-8859-15"); ?></h1>
				<?php if (!empty($tienda['tienda_informacion'])) { ?>
				<h3>Información:</h3>
				<p><?php echo htmlentities($tienda['tienda_informacion'], ENT_IGNORE & ENT_HTML5, "ISO-8859-15"); ?></p>
				<?php } ?>
				<h3>Ubicación:</h3>
				<p>Nivel <?php echo htmlentities($tienda['tienda_planta'], ENT_IGNORE & ENT_HTML5, "ISO-8859-15"); ?></p>
				<p>Bloque <?php echo htmlentities($tienda['tienda_bloque'], ENT_IGNORE & ENT_HTML5, "ISO-8859-15"); ?></p>
				<?php if (!empty($tienda['tienda_telefono'])) { ?>
				<h3 class="telefono">Teléfono: </h3>
				<p class="telefono"><?php echo htmlentities($tienda['tienda_telefono'], ENT_IGNORE & ENT_HTML5, "ISO-8859-15"); ?></p>
				<?php } ?>
			</article>
			<?php if($i==3) { echo "</div>"; $i=0; }else{ $i++; }?>
			<?php  } ?>
		</section>


		<?php } ?>

		<section id="publicidad">
			<a href="solicitud.php"></a>
		</section>
		
		<div class="push"></div>
	</section>
	<footer>
		<?php include('includes/inc.footer.php');?>
	</footer>
	<script>
		$(document).ready(function(){

		    $('#tiendas article').hover(function() {
		    	//alert($(this).children());
		    	$(this).children('.text').animate({height: 30, opacity:0.9}, 500);
		    }, function() {
		    	$(this).children('.text').animate({height: 0, opacity: 0}, 500);
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