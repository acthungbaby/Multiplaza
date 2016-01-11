<?php
require('class.phpmailer.php');
?>
<!doctype html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/modernizr.js"></script>
<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-40183931-1', 'multiplaza.com.py');
	  ga('send', 'pageview');

	</script>
<link rel="stylesheet" type="text/css" href="css/nivo-slider.css">
<title>Multiplaza | Bienvenido</title>
</head>
<body>
	<?
if (isset($_POST['enviar'])) {
    $mail = new PHPMailer();
    $mail->CharSet = "UTF-8";
	$mail->IsHTML(true);
	$mail->From = "no-reply@multiplaza.com.py";
	$mail->FromName = "Multiplaza - Sitio Web";
	$mail->Subject = "Multiplaza - Formulario Programa de Becas";
	//$mail->AddAddress("cruizdiaz@multiplaza.com.py", "Multiplaza");
	$mail->AddAddress("info@multiplaza.com.py", "Multiplaza");
/*
	$cuerpo = '<p>Nombre: '.$_POST['nombre'].'</p>';
	$cuerpo .= '<p>E-mail: '.$_POST['email'].'</p>';
	$cuerpo .= '<p>Mensaje: '.$_POST['mensaje'].'</p>';
*/	
	
//	echo "<script>alert('El mensaje ha sido enviado.!');</script>";
	$cuerpo="";
	foreach($_POST as $key=>$val) {
		$cuerpo.="<p><b>".str_replace("_"," ",$key). ":</b> ".$val."</p><br />";
	}
	$mail->Body = $cuerpo;
	$mail->Send();
}
?>
<section id="header">
	<div class="wrap">
		<div id="logo">
		<a href="index.php"></a>
		</div>
		<nav id="menu">
			<li><a href="index.php">Inicio <img src="images/fondos/casita.png" /></a></li>			
			<li><a href="shopping.php">El Shopping <img src="images/fondos/loguito.png" /></a></li>			
			<li><a href="novedades.php">Novedades <img src="images/fondos/etiqueta.png" /></a></li>			
			<li><a href="locales.php">Locales <img src="images/fondos/estrellita.png" /></a></li>
<li><a href="beca.php">BECAS <img src="images/fondos/rse.png" /></a></li>			
                        <!--<li><a href="galeria.php">Galer&iacute;a <img src="images/fondos/galeria.png" /></a></li>-->			
		</nav>
	</div>
</section>
<section id="contenido-contacto" style="min-height:490px !important; height:auto !important">
	<div class="wrap">
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div id="formulario-contacto">
                <h2>Programa Beca Multiplaza</h2>
				<a href="docs/requisitos.doc" style="font-weight: bold; color: rgb(102, 102, 102); text-decoration: underline;">REQUISITOS PROGRAMA BECA MULTIPLAZAS 2014</a>
				<br /><br />
                		<h2 style="font-size:14px">Datos Personales</h2>

                        <label>Nombre y Apellido</label><br/>
                        <input type="text" id="nombre" name="Nombre y Apellido"/><br/>
                        <label>E-mail</label><br/>
                        <input type="text" id="email" name="Email"/><br/>
                        <div class="beca-form">
                        	<label>Fecha de Nacimiento</label><br/>
                        	<input type="text" id="email" name="Fecha de Nacimiento"/><br/>
                    	</div>
                    	<div class="beca-form">
	                    	<label>Sexo</label><br/>
	                    	<input type="text" id="email" name="Sexo"/><br/>
	                	</div>
	                	<div style="clear:both"></div>
	                	<div class="beca-form">
	                    	<label>C.I. Nro</label><br/>
                        	<input type="text" id="email" name="CI Nro"/><br/>
                    	</div>
                    	<div class="beca-form">
	                        <label>Edad</label><br/>
                        	<input type="text" id="email" name="Edad"/><br/>
                    	</div>
	                	<div style="clear:both"></div>
	                	<div class="beca-form">
	                        <label>Telefono Particular</label><br/>
	                        <input type="text" id="email" name="Telefono Particular"/><br/>
	                	</div>
	                	<div class="beca-form">
	                        <label>Celular</label><br/>
	                        <input type="text" id="email" name="Celular"/><br/>
	                	</div>
	                	<div style="clear:both"></div>
	                	<div class="beca-form">
		                    <label>Barrio</label><br/>
		                    <input type="text" id="email" name="Barrio"/><br/>
	                	</div>
	                	<div class="beca-form">
	                        <label>Ciudad</label><br/>
	                        <input type="text" id="email" name="Ciudad"/><br/>
	                	</div>
	                	<div style="clear:both"></div>
                    	<label>Direccion</label><br/>
                    	<input type="text" id="email" name="Direccion"/><br/>
            </div>
            <div id='formulario-contacto'>
                		<h2 style="font-size:14px">Datos Academicos</h2>

                        <label>Egresado del Colegio</label><br/>
                        <input type="text" id="nombre" name="Egresado del Colegio"/><br/>
                        <label>Direccion</label><br/>
                        <input type="text" id="nombre" name="Direccion"/><br/>
                        <div class="beca-form">
                        	<label>Tipo de Bachillerato</label><br/>
                        	<input type="text" id="email" name="Tipo de Bachillerato"/><br/>
                    	</div>
                    	<div class="beca-form">
	                    	<label>Promedio General</label><br/>
	                    	<input type="text" id="email" name="Promedio General"/><br/>
	                	</div>
	                	<div style="clear:both"></div>
	                	<div class="beca-form">
	                    	<label>Año de Egreso</label><br/>
                        	<input type="text" id="email" name="Año de Egreso"/><br/>
                    	</div>
                    	<div class="beca-form">
	                        <label>Telefono</label><br/>
                        	<input type="text" id="email" name="Telefono Colegio"/><br/>
                    	</div>
	                	<div style="clear:both"></div>
	                	<div class="beca-form">
	                        <label>Colegio Privado</label><br/>
	                        <input type="text" id="email" name="Colegio Privado"/><br/>
	                	</div>
	                	<div class="beca-form">
	                        <label>Colegio Publico</label><br/>
	                        <input type="text" id="email" name="Colegio Publico"/><br/>
	                	</div>
	                	<div style="clear:both"></div>
	                	<div class="beca-form">
	                        <label>Postulante a la Carrera de</label><br/>
	                        <input type="text" id="email" name="Postulante a la Carrera de"/><br/>
	                	</div>
	                	<div style="clear:both"></div>
            </div>
            <div style="clear:both"></div>
            <div id="formulario-contacto">
            	<h2>Datos Socioeconómicos</h2>
		        <label>¿ Con quien vives ?</label><br/>
                <input type="text" id="email" name="Con quien vives"/><br/>
		        <label>¿ Actualmente tienes algun desempeño laboral ?</label><br/>
                <input type="text" id="email" name="Tienes algun desempeno laboral"/><br/>
		        <label>¿ Formaste Familia,tienes hijos, si es asi cuantos tienes ?</label><br/>
                <input type="text" id="email" name="Cuantos hijos tienes"/><br/>
		        <label>¿ Dónde trabajan tus padres o encagado?¿ Que hacen en el trabajo ?</label><br/>
                <input type="text" id="email" name="Donde trabajan tus padres o encargado, que hacen en el trabajo"/><br/>
		        <label>¿Tus padres o encargado, que grado academico tienen ?</label><br/>
                <input type="text" id="email" name="Tus padres o encargado, que grado academico tienen"/><br/>
		        <label>¿Cuántas personas viven en tu casa ?</label><br/>
                <input type="text" id="email" name="Cuantas personas viven en tu casa"/><br/>
		        <label>¿ Cuantas personas sostienen tus padres ?</label><br/>
                <input type="text" id="email" name="Cuantas personas sostienen tus padres"/><br/>
		        <label>N° de hermanos/as</label><br/>
                <input type="text" id="email" name="Cantidad de hermanos"/><br/>
		        <label>Edad de hermanos/as</label><br/>
                <input type="text" id="email" name="Edad de hermanos"/><br/>
		        <label>¿ Cuantos estudian en la Universidad o Egresaron ?</label><br/>
                <input type="text" id="email" name="Cuantos estudian en la universidad o egresaron"/><br/>

            	<input type="submit" name="enviar" value="Enviar" class="submit" />
            </div>
            </form>
	</div>
</section>
<section id="footer">
	<div class="wrap">
		<div id="left">
			<div class="box">
				<a href="cine.php"><div class="titulo">
					<h1 class="entre">Cartelera de Cines</h1>
					<img src="images/fondos/proyector2.png" />
				</div>
				<div class="imagen">
					<img src="images/fondos/box2.jpg" />
				</div></a>
			</div>
			<div class="box">
				<!--<div class="titulo">
					<h1 class="buscar">Buscador</h1>
					
				</div>
				<div class="imagen">
					<input type="text" name="q" id="buscar" class="buscar"/>
				</div>-->
			</div>
		</div>
		<div id="right">
			<div class="box">
				<div class="titulo">
					<h1 class="nuevos">Nuevos Espacios</h1>
					<img src="images/fondos/plaza-outlet.png">
				</div>
				<div class="titulo">
					<h1 class="nuevos">Campañas</h1>
					<img src="images/fondos/campana.png">
				</div>
			</div>
		</div>
	</div>
</section>
<section id="foo">
	<div id="datos">
                <a href="vision.php"><img src="images/fondos/solicitar.png" class="solicitar" /></a>
                
                <div id="contacto-link">
                    <a href="contacto.php"><img src="images/fondos/globo.png" />
                    <span>Contacto</span></a>
                    <a href="https://www.facebook.com/multiplaza.py?fref=ts"><img src="images/fondos/facebook.png" /></a>
                    <a href="#"><img src="images/fondos/twitter.png" /></a>
                </div>
	</div>
</section>

               
               
               <script type="text/javascript" src="js/jquery-1.7.1.min.js" ></script>	
               
</body>
</html>