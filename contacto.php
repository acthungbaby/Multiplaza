<?php 
	include 'includes/conf.inc.php';

	require('class.phpmailer.php');

	if (isset($_POST['enviar'])) {
	    $mail = new PHPMailer();
	    $mail->CharSet = "UTF-8";
		$mail->IsHTML(true);
		$mail->From = "no-reply@multiplaza.com.py";
		$mail->FromName = "Multiplaza - Sitio Web";
		$mail->Subject = "Multiplaza - Formulario Contacto";
		//$mail->AddAddress("cruizdiaz@multiplaza.com.py", "Multiplaza");
		//$mail->AddAddress("info@multiplaza.com.py", "Multiplaza");
		$mail->AddAddress("hugo@linco.com.py", "Multiplaza");

		$cuerpo="";
		foreach($_POST as $key=>$val) {
			$cuerpo.="<p><b>".str_replace("_"," ",$key). ":</b> ".$val."</p><br />";
		}
		$mail->Body = $cuerpo;
		if(!$mail->Send()) {
		  echo "<script type='text/javascript'>alert('Ocurrio un error, intentelo de nuevo mas tarde');</script>";
		  
		} else {
		  echo "<script type='text/javascript'>alert('Mensaje enviado');</script>";
		}
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
<body class="bodyContacto">
	<div class="contenedorslider"></div>
	<?php include('includes/inc.secondarynav.php');?>
	<header>
		<?php include('includes/inc.header.php');?>
	</header>
	<section id="contenedor">

		<img class="" src="<?php echo IMAGE_PATH?>header/contacto.jpg" alt="">

		<span>Si tienes alguna consulta, envíanos tus datos y te responderemos en la brevedad.</span>

		<form action="" id="contacto" autocomplete="on">
			<label for="nombre">Nombre y Apellido</label>
			<input type="text" name="nombre">
			<label for="email">Email</label>
			<input type="email" name="email">
			<label for="mensaje">Mensaje</label>
			<textarea name="" id="" rows="6"></textarea>
			<input type="submit">
		</form>

		
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