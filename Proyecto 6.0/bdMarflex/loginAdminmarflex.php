<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Marflex Login</title>
	<link rel="stylesheet" href="style.css">
	<link rel="icon" href="imagenes/icoMarflex.ico">
</head>
<body>
	<center> <br><br>
	<div class="logo">
		<a href="inicioMarflex.php"><img src="imagenes/icoMarflex.png"></a>
	</div>
	</center>
	<div class="formula-log">
		<form method="post">
		<h4>Bienvenido</h4>
		<input class="panel"  type="text" name="email" value="" placeholder="Correo Electronico">
		<input class="panel" type="password" name="contraseña" value="" placeholder="Contraseña">
		<input class="boton" button type="submit" name= "Ingresar" >
		<p><a href=#>¿Olvidaste tu contraseña?</a></p>
		</form>
	</div>
  		<?php
  		
  		include("registro.php");

  		?>
</body>
</html>