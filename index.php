<?php 
	include 'includes/conf.inc.php';

	include(MODELS_PATH.'model.Noticias.php');
	$noticias_model = new Noticias();
	$noticias = $noticias_model->fetchAllByPortada();
?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title><?php echo TITLE ?></title>
	<link rel="stylesheet" href="<?php echo CSS_PATH?>styles.css">
	<link rel="stylesheet" href="<?php echo CSS_PATH?>flexslider.css">
	<?php if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') == false){ ?><link rel="stylesheet" href="<?php echo CSS_PATH?>supersized.css"><?php } ?>

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
	<script src="<?php echo JS_PATH?>jquery.flexslider-min.js"></script>
	<?php if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') == false){ ?><script src="<?php echo JS_PATH?>supersized.3.2.7.min.js"></script><?php } ?>
	<?php if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') == false){ ?><script src="<?php echo JS_PATH?>bgscript.js"></script><?php } ?>
	<script src="<?php echo JS_PATH?>css_browser_selector.js"></script>

</head>
<body class="bodyIndex">
	<?php if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') == false){ ?>
    <div class="contenedorslider"></div>
<?php } ?>
	
	<?php include('includes/inc.secondarynav.php');?>
	<header>
		<?php include('includes/inc.header.php');?>
	</header>
	<section id="contenedor" class="nobg">
		<div class="flexslider">
		  	<ul class="slides">
		    	<li>
		      		<img src="<?php echo IMAGE_PATH?>/slider/pasillo.png" alt="">
		    	</li>
		    	<li>
		      		<img src="<?php echo IMAGE_PATH?>/slider/calzados.png" alt="">
		    	</li>
		  </ul>
		</div>

		<section id="publicidad" class="extramargin">
			<a href="solicitud.php"></a>
		</section>

		<section id="news">
			<?php $i=0; foreach ($noticias as $noticia) { ?>
		
				<article class="noticia <?php if($i==2) echo "last";?>"style="background-image: url('<?php echo IMAGE_PATH?>noticias/<?php echo $noticia['noticia_imagen']?>');">
					<section class="text">
						<h3><?php echo htmlentities($noticia['noticia_tema'], ENT_IGNORE & ENT_HTML5, "ISO-8859-15")?></h3>
						<span><?php echo htmlentities($noticia['noticia_texto'], ENT_IGNORE & ENT_HTML5, "ISO-8859-15")?></span>
						<a href="<?php echo $noticia['noticia_link']?>">» <?php echo htmlentities($noticia['noticia_texto_link'], ENT_IGNORE & ENT_HTML5, "ISO-8859-15") ?></a>
					</section>
					
				</article>
			<?php $i++; } ?>
			<!--<article class="first"></article>
			<article></article>
			<article class="last"></article>-->
		</section>
		
		<div class="push"></div>
	</section>
	<footer>
		<?php include('includes/inc.footer.php');?>
	</footer>

	<script>
		$(document).ready(function(){
		    $('.flexslider').flexslider({animation: "slide"});

		    //$('.text').toggle()

		    $('.noticia').hover(function() {
		    	//alert($(this).children());
		    	$(this).children('.text').animate({'padding-top': 10}, 500);
		    }, function() {
		    	$(this).children('.text').animate({'padding-top': 0}, 500);
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