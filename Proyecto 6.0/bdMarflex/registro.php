<?php

include("con_db.php");



if(isset($_POST['Registrarse'])) {

if (strlen($_POST['email']) >=1 && strlen($_POST['nombre1']) >=1 && strlen($_POST['contraseña1']) >=1 && strlen($_POST['contraseña2']) >=1 && strlen($_POST['apellido1']) >=1 && strlen($_POST['apellido2']) >=1 && strlen($_POST['nombre2']) >=1) {

	$nombre1= trim($_POST['nombre1']);
	$nombre2= trim($_POST['nombre2']);
    $email= trim($_POST['email']);
    $doc= trim($_POST['doc']);
    $contraseña1 = trim($_POST['contraseña1']);
    $contraseña2 = trim($_POST['contraseña2']);
    $apellido1= trim($_POST['apellido1']);
    $apellido2= trim($_POST['apellido2']);

   
   if (strlen($_POST['contraseña1']) == strlen($_POST['contraseña2'])){

	$consulta = " INSERT INTO `cliente`(docCliente, nombre1, nombre2, apellido1, apellido2, tipoDoc_idtipoDoc) VALUES ('$doc','$nombre1','$nombre2','$apellido1','$apellido2','1')";


	$resultado = mysqli_query($conex,$consulta); 
      

 	$consulta1 = " INSERT INTO `ingreso`( correoElec, Contraseña, ingreso_docCliente) VALUES ('$email',MD5('$contraseña1'),'$doc')";
 	$resultado2 = mysqli_query($conex,$consulta1);
}   }   }


 if(isset($_POST['Ingresar'])) {


 	//if (strlen($_POST['email']) >=1 && strlen($_POST['contraseña']) >=1 ) {

 	if (strlen($_POST['email']) >=1 && strlen($_POST['contraseña']) >=1)
 	 {	

 		$email = trim($_POST['email']);
 		$contraseña = trim($_POST['contraseña']);

 		//$consulta = "SELECT correoElec, Contraseña FROM `ingreso` WHERE correoElec = '$email' AND Contraseña = '$contraseña' ";
 		$consulta = "SELECT correoElec, Contraseña FROM `ingreso` WHERE correoElec = '$email' AND Contraseña = md5('$contraseña')";
 		$resultado = mysqli_query($conex,$consulta);
 		$datos_nm=mysqli_fetch_assoc($resultado);
        $cantidad_filas=mysqli_num_rows($resultado);

 		
 		//$consulta_nm=mysqli_query($conexion,$accion_nm);
        //$datos_nm=mysqli_fetch_assoc($consulta_nm);

        //Cantidad de registros
        //$cantidad_nm=mysqli_num_rows($consulta_nm);

 	}

 	if ($cantidad_filas > 0){
 			header("Location: inicioMarflex.php");
 		} else {
            echo "Nada ";
 		}
 }


?>