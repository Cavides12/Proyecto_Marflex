<?php 
include("conexion.php");
$con=conectar();

$sql="SELECT *  FROM producto";
$query=mysqli_query($con,$sql);

?>

<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
        <link rel='stylesheet' type='text/css' href='estilos2.css'>
        <link rel="stylesheet" href="styleinicio.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
                        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <title>FINALIZAR COMPRA</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="fotos/icoMarflex.png">
        </div>
    
        <div class="barraNav">
        <ul class="nav nav-pills">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="inicioMarflex.php">Inicio</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Categorias</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="salasMarflex.html">Salas</a></li>
          <li><a class="dropdown-item" href="comedorMarflex.html">Comedores</a></li>
          <li><hr class="dropdown-divider"></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contactenos</a>
      </li>
    </ul>
    </div>
    
    <div class="barralogRe">
    <a class="btn btn-warning" href="registerMarflex.php" role="button" >Registrarse</a>
    
    <a class="btn btn-warning" href="loginMarflex.php" role="button">Ingresar</a>
    </div>
    
    
    <div class="barraitems">
    <STYLE>a {text-decoration: none;} </STYLE>
      <a class="item1" ><img src="fotos/IconCasa.png"  width=3% height="auto" ><b> Productos para el hogar</b></a>
    
    <a class="item2"><img src="fotos/camion.png" width=4% height="auto"><b> Envios Gratis</b></a>
    
    <a class="item3"><img src="fotos/dinero.png" width=3% height="auto"><b> Pagos Online</b></a>
    
    </div> 
    </header>


    <main>
        <div class="container">
            <div class="row mt-3">
                <div class="col">
                    <h2 class="d-flex justify-content-center mb-3">REALIZAR COMPRA</h2>
                    <form id="procesar-pago" action="#" method="post">
                        <div class="form-group row">
                            <label for="cliente" class="col-12-col-md-2 col-form-label h2">Cliente</label>
                            <div class="col-12 col-md-10">
                                <input type="text" class="form-control" id="cliente" placeholder="Ingresa nombre cliente" name="destinatario">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cliente" class="col-12-col-md-2 col-form-label h2">Correo</label>
                            <div class="col-12 col-md-10">
                                <input type="text" class="form-control" id="cliente" placeholder="Ingresa tu correo" name="correo">
                            </div>
                            <div class="form-group row">
                                <label for="cliente" class="col-12-col-md-2 col-form-label h2">Documento</label>
                                <div class="col-12 col-md-10">
                                    <input type="text" class="form-control" id="cliente" placeholder="Ingrese numero de documento" name="documento">
                                    <select name="documento">
                                        <option value="Cedula Ciudadania">CC</option>
                                        <option value="Cedula Extranjeria">CE</option>
                                        <option value="Pasaporte">Pasaporte</option>
                                    </select>
                                </div>
                                <label for="cliente" class="col-12-col-md-2 col-form-label h2">Numero telefonico</label>
                            <div class="col-12 col-md-10">
                                <input type="text" class="form-control" id="cliente" placeholder="Ingresa tu numero" name="celular">
                            </div>
                            
                        </div>
                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    
                                    <tr>
                                        <th>idProducto</th>
                                        <th>Nombre</th>
                                        <th>codigoPro</th>
                                        <th>Precio</th>
                                        <th colspan="3">Foto</th>
                                        <th>Cantidad</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th> <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        
                                     
                                   
                                       
        
                                    </tr>
                                </thead>

                                <tbody>
                                    
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                        <br><br>
                                            <tr>
                                                
                                                <th><?php  echo $row['idProducto']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['codigoPro']?></th>
                                                <th><?php  echo $row['precio']?></th>
                                                <th><?php  echo "<td><img width='350' height='auto' src='" . $row['foto'] . "'></td>"?></th>
                                                <th> <td><input type="number" class="cantidad" name="cantidad" style="height: 40px; width: 80px;"></td> </th> 
                        
                                               
                                                <th><a href="borrar.php?id=<?php echo $row['nombre'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            
                                        
                                            </tr>
                                            

                                        <?php 
                                            }
                                        ?>
                                
                                </tbody>
                            </table>
                            <table class="table">
                            <tr>
                                        <th colspan="4" scope="col" class="text-right">SUB TOTAL :</th>
                                        <th scope="col">
                                            <p id="subtotal"></p>
                                        </th>
                                    </tr>
                                    <br><br>
                                    <tr>
                                        <th colspan="4" scope="col" class="text-right">IVA :</th>
                                        <th scope="col">
                                            <p id="iva"></p>
                                        </th>
                                    </tr>
                                    <br><br><br>
                                    <tr>
                                        <th colspan="4" scope="col" class="text-right">TOTAL :</th>
                                        <th scope="col">
                                            <input id="total" name="monto" class="font-weight-bold border-0" readonly style="background-color:#F2C01E">
                                        </th>
                                    </tr>
                            </table>



                        

                        <div class="row justify-content-between">
                            <div class="col-md-4 mb-2">
                                <a href="catalogo.html" class="btn btn-info btn-block">Continuar Comprando</a>
                            </div>
                            <div class="col xs-12 col-md-4">
                                <a href="comprar.html" class="btn btn-info btn-block">Comprar</a>
            
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    
</body>
</html>