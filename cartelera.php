<?php 
	include 'includes/conf.inc.php';

	include(MODELS_PATH.'model.Cine.php');
	$cine_model = new Cine();
	$estrenos = $cine_model->fetchAllPremieres();
	$peliculas = $cine_model->fetchAllNonPremieres();

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
<body class="bodyCartelera">
	<div class="contenedorslider"></div>
	<?php include('includes/inc.secondarynav.php');?>
	<header>
		<?php include('includes/inc.header.php');?>
	</header>
	<section id="contenedor">

		<img class="" src="<?php echo IMAGE_PATH?>header/cartelera.jpg" alt="">
		

		<section id="cartelera">
			<section id="estrenos">
				<h1>Estrenos</h1>
				<?php foreach ($estrenos as $estreno) { ?>
				<article class="pelicula" style="background-image: url('<?php echo IMAGE_PATH?>peliculas/<?php echo $estreno['cine_portada']?>');">
					<section class="text">
						<h3><?php echo htmlentities($estreno['cine_descripcion'], ENT_IGNORE & ENT_HTML5, "ISO-8859-15")?></h3>
						<h3><?php echo htmlentities($estreno['cine_calificacion'], ENT_IGNORE & ENT_HTML5, "ISO-8859-15")?></h3>
						<?php if (!empty($estreno['cine_actores'])) { ?>
						<p>Actores: <?php echo htmlentities($estreno['cine_actores'], ENT_IGNORE & ENT_HTML5, "ISO-8859-15")?>.</p>
						<?php } ?>
						<span>Horarios: <?php echo htmlentities($estreno['cine_horarios'], ENT_IGNORE & ENT_HTML5, "ISO-8859-15")?>.</span>
					</section>
					<h2><?php echo htmlentities($estreno['cine_titulo'], ENT_IGNORE & ENT_HTML5, "ISO-8859-15")?></h2>
				</article>

				<?php } ?>	
			</section>
			<section id="peliculas">
				<h1>En Cartelera</h1>
				<?php foreach ($peliculas as $pelicula) { ?>
				<article class="pelicula" style="background-image: url('<?php echo IMAGE_PATH?>peliculas/<?php echo $pelicula['cine_portada']?>');">
					<section class="text">
						<h3><?php echo htmlentities($pelicula['cine_descripcion'], ENT_IGNORE & ENT_HTML5, "ISO-8859-15")?></h3>
						<h3><?php echo htmlentities($pelicula['cine_calificacion'], ENT_IGNORE & ENT_HTML5, "ISO-8859-15")?></h3>
						<p>Actores: <?php echo htmlentities($pelicula['cine_actores'], ENT_IGNORE & ENT_HTML5, "ISO-8859-15")?>.</p>
						<span>Horarios: <?php echo htmlentities($pelicula['cine_horarios'], ENT_IGNORE & ENT_HTML5, "ISO-8859-15")?>.</span>
					</section>
					<h2><?php echo htmlentities($pelicula['cine_titulo'], ENT_IGNORE & ENT_HTML5, "ISO-8859-15")?></h2>
				</article>

				<?php } ?>	
			</section>
		</section>
		
		<div class="push"></div>
	</section>
	<footer>
		<?php include('includes/inc.footer.php');?>
	</footer>
	<script>
		$(document).ready(function(){
		    $('.pelicula').hover(function() {
		    	//alert($(this).children());
		    	$(this).children('.text').animate({opacity: 0.8}, 500);
		    }, function() {
		    	$(this).children('.text').animate({opacity: 0.0}, 500);
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