<?php 
	include 'includes/conf.inc.php';
	require('class.phpmailer.php');

	if (isset($_POST['enviar'])) {
	    $mail = new PHPMailer();
	    $mail->CharSet = "UTF-8";
		$mail->IsHTML(true);
		$mail->From = "no-reply@multiplaza.com.py";
		$mail->FromName = "Multiplaza - Sitio Web";
		$mail->Subject = "Multiplaza - Formulario Programa de Becas";
		//$mail->AddAddress("cruizdiaz@multiplaza.com.py", "Multiplaza");
		//$mail->AddAddress("info@multiplaza.com.py", "Multiplaza");
		$mail->AddAddress("hugo@linco.com.py", "Multiplaza");
		/*$cuerpo = '<p>Nombre: '.$_POST['nombre'].'</p>';
		$cuerpo .= '<p>E-mail: '.$_POST['email'].'</p>';
		$cuerpo .= '<p>Nacimiento: '.$_POST['nacimiento'].'</p>';
		$cuerpo .= '<p>Sexo: '.$_POST['sexo'].'</p>';
		$cuerpo .= '<p>Cedula: '.$_POST['cedula'].'</p>';*/
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
	<script src="<?php echo JS_PATH?>jquery.validate.min.js"></script>
    <script src="<?php echo JS_PATH?>messages_es.js"></script>
</head>
<body class="bodyRSE bodyBeca">
	<div class="contenedorslider"></div>
	<?php include('includes/inc.secondarynav.php');?>
	<header>
		<?php include('includes/inc.header.php');?>
	</header>
	<section id="contenedor">

		<img class="" src="<?php echo IMAGE_PATH?>header/rse.jpg" alt="">

		<h1>R.S.E. » <span>Programa de Becas Multiplaza</span></h1>

		<p>A continuación, se encuentra el formulario de solicitud para las Becas Multiplaza. Completá con tus datos y no olvides leer los <a href="requisitos.php">Requisitos para el Programa de Becas Multiplaza 2014</a>.</p>

		<h1>Datos Personales</h1>

		<form action="" method="post" id="beca">
			<label for="nombre">Nombre y apellido</label> <input type="text" name="nombre" id="nombre"><br>
			<label for="email">Email</label><input type="email" name="email" id="email"><br>
			<label for="nacimiento">Nacimiento</label><input type="date" name="nacimiento" id="nacimiento">
			<label for="sexo">Sexo</label><select name="sexo" id="sexo"><option value="">Seleccionar</option><option value="masculino">Masculino</option><option value="femenino">Femenino</option></select><br>
			<label for="cedula">C.I. Nro.</label><input type="text" name="cedula" id="cedula"><br>
			<label for="telefono">Teléfono particular</label><input type="tel" name="telefono" id="telefono">
			<label for="celular">Celular</label><input type="tel" name="celular" id="celular"><br>
			<label for="barrio">Barrio</label><input type="text" name="barrio" id="barrio">
			<label for="ciudad">Ciudad</label><input type="text" name="ciudad" id="ciudad"><br>
			<label for="direccion">Dirección</label><input type="text" name="direccion" id="direccion">
			<h1>Datos Académicos</h1>
			<label for="colegio">Egresado del colegio</label><input type="text" name="colegio" id="colegio"><br>
			<label for="direccioncolegio">Dirección</label><input type="text" name="direccioncolegio" id="direccioncolegio">
			<label for="telefonocolegio">Teléfono</label><input type="tel" name="telefonocolegio" id="telefonocolegio"><br>
			<label for="bachillerato">Tipo de bachillerato</label><select name="bachillerato" id="bachillerato"><option value="">Seleccionar</option><option value="humanistico">Humanistico</option><option value="ciencias">Ciencias</option></select>
			<label for="promedio">Promedio general</label><input type="text" id="promedio" name="promedio"><br>
			<label for="tipocolegio">Tipo de colegio</label><input type="radio" name="tipocolegio" id="publico" value="publico" checked = "checked"><spanbox class="checkbox">Publico</spanbox><input type="radio" name="tipocolegio" id="privado" value="privado"><span class="checkbox last">Privado</span>
			<label for="egreso">Año de egreso</label><input type="text" name="egreso" id="egreso"><br>
			<label for="carrera">Postulante a la carrera</label><input type="text" name="carrera" id="carrera">

			<h1>Datos Socioeconómicos</h1>
			<label for="vives">1. ¿Con quién vives?</label><br>
			<input type="text" name="vives" id="vives"><br>
			<label for="desempeno">2. Actualmente, ¿tienes algún desempeño laboral?</label><br>
			<input type="text" name="desempeno" id="desempeno"><br>
			<label for="familia">3. Formaste familia, ¿tienes hijos? Si es así, ¿cuántos?</label><br>
			<input type="text" name="familia" id="familia"><br>
			<label for="padrestrabajo">4. ¿Dónde trabajan tus padres o encargado? ¿Qué cargo desempeñan?</label><br>
			<input type="text" name="padrestrabajo" id="padrestrabajo"><br>
			<label for="padresacademico">5. Tus padres o encargado, ¿qué grado académico tienen?</label><br>
			<input type="text" name="padresacademico" id="padresacademico"><br>
			<label for="viven">6. ¿Cuántas personas viven en tu casa?</label><br>
			<input type="text" name="viven" id="viven"><br>
			<label for="sostienes">7. ¿Cuántas personas sostienen tus padres?</label><br>
			<input type="text" name="sostienes" id="sostienes"><br>
			<label for="hermanos">8. Nro. de hermanos</label><br>
			<input type="text" name="hermanos" id="hermanos"><br>
			<label for="edadhermanos">9. Edad de hermanos</label><br>
			<input type="text" name="edadhermanos" id="edadhermanos"><br>
			<label for="cantidadegresados">10. ¿Cuántos estudian en la Universidad o se Egresaron?</label><br>
			<input type="text" name="cantidadegresados" id="cantidadegresados"><br>

			<input type="submit" value="ENVIAR" name="enviar">



		</form>


		
		<div class="push"></div>
	</section>
	<footer>
		<?php include('includes/inc.footer.php');?>
	</footer>
	<script>
		$(document).ready(function(){

			$("#beca").validate();

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