<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM producto";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> RESUMEN PEDIDO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link rel='stylesheet' type='text/css' href='estilos2.css'>
        <link rel="stylesheet" href="styleinicio.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>



    
<body>
<div class="logo">
		<img src="fotos/icoMarflex.png">
	</div>

	<div class="barraNav">
	<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="login_registro/inicio.html">Inicio</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Categorias</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="login_registro/Interfaz Salas/interfazSala.html">Salas</a></li>
      <li><a class="dropdown-item" href="login_registro/Interfaz Comedores/interfazComedores.html">Comedores</a></li>
      <li><hr class="dropdown-divider"></li>
    </ul>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="login_registro/sedes/index.html">Nuestras sedes</a>
  </li>
</ul>
</div>

<div class="barralogRe">
<a class="btn btn-warning" href="login_registro/customers.html" role="button" >Registrarse</a>

<a class="btn btn-warning" href="login_registro/login.html" role="button">Ingresar</a>
</div>


<div class="barraitems">
<STYLE>a {text-decoration: none;} </STYLE>
  <a class="item1" ><img src="fotos/IconCasa.png"  width=3% height="auto" ><b> Productos para el hogar</b></a>

<a class="item2"><img src="fotos/camion.png" width=4% height="auto"><b> Envios Gratis</b></a>

<a class="item3"><img src="fotos/dinero.png" width=3% height="auto"><b> Pagos Online</b></a>

</div>
            <div class="pagina">
                <div class="resumen">
                    <h1 style="border: 1px solid; letter-spacing: 0.03em; background-color: #F2C01E;">Resumen de pedido</h1>
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
                                        
                                     
                                   
                                       
        
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
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
                             <!--seguir comprando boton-->
                                             <div class="contenedor-botones">
                                            
                                            
                                            <a href="login_registro/interfaz Salas/interfazSala.html"style="text-decoration:none">
                                                <button class="seguir"><span>Seguir Comprando</span></button>
                                            </a>
                                            
                                            
                                            
                                            
                                                <a href="comprar.html" style="text-decoration:none">
                                                <button class="comprar"><span>COMPRAR</span></button>
                                                
                                            </a>
                                            </div>
                                            
                        </div>
                    </div>  
                </div>
    
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<br><br><br><br><br><br>

<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Conectate en nuestras redes sociales:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="https://www.tiktok.com/es/" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>TikTok
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="https://www.instagram.com/?hl=es-la" class="me-4 text-reset">
        <i class="fab fa-google"></i>Instagram
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="https://es-la.facebook.com/" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      Facebook</a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Marflex 
          </h6>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Angular</a>
          </p>
          <p>
            <a href="#!" class="text-reset">React</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Vue</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Laravel</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: #f3b03c;">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
    </body>
</html>