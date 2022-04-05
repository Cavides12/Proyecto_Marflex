<?php
    include("conexion.php");
    $con=conectar();

    $nombre=$_GET['id'];

    $sql="DELETE FROM producto WHERE nombre='$nombre'";
    $query=mysqli_query($con,$sql);


    if($query)
    {
        header("Location: index.php");
    }

?>