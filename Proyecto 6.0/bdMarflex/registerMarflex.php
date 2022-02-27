<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<title>Marflex Registro</title>
	<link rel="stylesheet" href="styleregister.css">
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
		<h4>Login</h4>
		<input class="panel"  type="text" name="nombre1" value="" placeholder="Nombre">
		<input class="panel"  type="text" name="nombre2" value="" placeholder="Nombre 2">
		<input class="panel"  type="text" name="doc" value="" placeholder="Numero Documento">
		<input class="panel"  type="text" name="apellido1" value="" placeholder="Apellido">
		<input class="panel"  type="text" name="apellido2" value="" placeholder="Apellido 2">
		<input class="panel"  type="text" name="email" value="" placeholder="Correo Electronico">
		<input class="panel" type="password" name="contraseña1" value="" placeholder="Contraseña">
		<input class="panel" type="password" name="contraseña2" value="" placeholder="Repetir Contraseña">
		<input class="boton" button type="submit" name= "Registrarse" >
		</form>
	</div>

  		<?php
  		
  			include("registro.php");
  			
  			
  			

  		?>

  		
</body>
</html>