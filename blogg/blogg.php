<?php
include "../conexiones/conexion.php";
session_start();
if(!isset($_SESSION['nombre'])){
  echo '
    <script>
      alert("Por favor debes iniciar sesión");
      window.location.href = "../index.php";
    </script>
  ';
  session_destroy();
  exit(); 
}
include "../conexiones/conexion.php";
include "../conexiones/config.php"; 
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <style>
    p {
      text-align: justify;
    }

  </style>
    <title>CORA</title>
    <script src="https://kit.fontawesome.com/25d245ab67.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" >  
    <script src="https://kit.fontawesome.com/25d245ab67.js" crossorigin="anonymous"></script>
  </head>
<body>
  <div class="prueba">
    <nav  class="navbar navbar sticky-top navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="blogg.php"><img src="../imagenes/CORA.png" width="70px" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent" >
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="blogg.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Mis pedidos</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categorias
              </a>
              <ul class="dropdown-menu" >
                <li><a class="dropdown-item" href="#">Plantulas</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Productos</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Tierras</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Terrenos</a></li>
              </ul>
            </li>
            <li class="nav-item">
            <a class="nav-link" data-bs-toggle="offcanvas" href="#offcanvasDark" role="button" aria-controls="offcanvasDark">
              Todo
            </a>
          </li>
          <li class="nav-item">
                <a class="nav-link " aria-current="page" href="../vistacarrito.php"><i class="fa-solid fa-cart-plus">(<?php 
                echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);
                ?>)</i></a>
          </ul>
          <form class="d-flex" style="padding-right: 70px ;" role="search" action="buscar.php" method="get">
    
            <input class="form-control" type="search" placeholder="Buscar" name="termino" id="buscar" aria-label="Search">
            <button  type="button" onclick="buscar_ahora($('#buscar').val());" class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
          </form>
          <a href="index.php"><button class="btn btn-outline-danger"><i class="fa-solid fa-arrow-right-to-bracket"></i> Cerrar Sesion</button></a>
        </div>
      </div>
      
    </nav>
  <div class="contain text-center" style="padding: 25px 0px 0px 0px;">
    <ul class="nav justify-content-center" >
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="../landing.php">Tienda CORA</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Ayuda</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#">Tendencia</a>
        </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Nuevas publicaciones</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">recientes</a>
      </li>
    </ul>
  
  <div class="offcanvas offcanvas-start show text-bg-dark" tabindex="-1" id="offcanvasDark" aria-labelledby="offcanvasDarkLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasDarkLabel" ><img src="../imagenes/cora.png" width="100px" alt="logo">CORA</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body"> 
      <div>
        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action list-group-item-success"><i class="fa-solid fa-plant-wilt"></i> Plantulas</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-success"><i class="fa-solid fa-bag-shopping"></i> Productos</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-success"><i class="fa-solid fa-seedling"></i> Tierras</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-success"><i class="fa-solid fa-mound"></i> Terrenos</a>
          <a href="blogg.php" class="list-group-item list-group-item-action list-group-item-success"><i class="fa-solid fa-blog"></i> Blogg</a>
          <a href="#list-item-2" class="list-group-item list-group-item-action list-group-item-success"><i class="fa-solid fa-certificate"></i> Promos</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-success"><i class="fa-solid fa-apple-whole"></i> Frutas</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-success"><i class="fa-solid fa-mosquito"></i> Fertilizantes</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-success"><i class="fa-solid fa-question"></i> Ayuda</a>
        </div>    
       </div>
    </div>
  </div>
</div>
 
<div class="container">
  <div class="row">
    <div class="col-9"><h1>Blogg</h1><video controls width="100%"><source src="../Video/video2.0.mp4" type="video/mp4"></video><br>
      <div><i class="fa-regular fa-user fa-2xl">Felipe</i></div>
      <br>
    <h3>Descripción del video</h3>
    <p>Cora es una pagina dedicada para los del sector agricola, donde podra encontrar productos que puedas comprar o subirlos para venderlos. Tambien incluye un Blogg en la cual encontrar novedades, consejos, ayudas y demas.</p>
    </div>
      <div class="col-3"> <ul class="list-group list-group-flush">
        <br>
        <br>
        <br>

        <a href="blogg_2.php">
        <li class="list-group-item"><img src="imagenes/referencia1.jpg" alt="prueba1" style="height: 100px;" width="100%">
          <p>Otros cultivos mas comunes de Colombia aparte del café</p></li>
        </a>

        <a href="blogg_3.php">
        <li class="list-group-item"><img src="imagenes/referencia2.jpeg" alt="prueba2" style="height: 100px; width: 100%;">
        <p>El Motor Invisible de Colombia: El Impacto Social y Económico de la Agricultura</p></li>
      </a>

      <a href="blogg_4.php">
        <li class="list-group-item"><img src="imagenes/referencia3.jpg" alt="prueba3" style="height: 100px; width: 100%;">
        <p>5 técnicas de cultivo para pasarte a la agricultura ecológica</p></li>
      </a>

      <a href="blogg_5.php">
        <li class="list-group-item"><img src="imagenes/referencia4.jpg" alt="prueba4" style="height: 100px; width: 100%;">
          <p>Cultivando el Futuro: Desafíos en la Agricultura Colombiana</p></li>
      </a>
       
      </ul> </div>
        
      
         </div>
</div>

<div class="container-fluid" style="background-color: rgb(31, 30, 30); height: 250px; color: aliceblue;">
<div class="col-md-12 float-md-end mb-3 ms-md-3" style="padding: 20px ;">
  <div class="row align-items-center">
    <div class="col" style="text-align: justify;">
      <a href=""><img src="imagenes/CORA.png" class="img-fluid" style="height: 100px;" alt="..."></a></div>
    
      <div class="col-md-3 float-md-end mb-3 ms-md-3" style="padding-top: 20px;">
        <div class="row align-items-center">
          <div class="col-md-12 position-relative" style="text-align: right;">
            <a href=""><img src="imagenes/CORA.png" class="img-fluid" style="height: 100px;" alt="..."></a></div>
  </div>
</div>
</div>
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>