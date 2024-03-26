<?php
include "conexiones/conexion.php";
session_start();
if(!isset($_SESSION['nombre'])){
  echo '
    <script>
      alert("Por favor debes iniciar sesión");
      window.location.href = "index.php";
    </script>
  ';
  session_destroy();
  exit();
}

?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="imagenes/CORA.png" type="image/jpeg">
    <title>CORA</title>
    <script src="https://kit.fontawesome.com/25d245ab67.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" > 
  </head>
<body >
    <nav  class="navbar navbar sticky-top navbar-expand-lg bg-body-secondary">
        <div class="container-fluid">
          <a class="navbar-brand" href="landing.php"><img src="imagenes/CORA.png" width="45px" alt="logo"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarSupportedContent" >
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="landing.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Mis pedidos</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Categorias
                </a>
                <ul class="dropdown-menu" >
                  <li><a class="dropdown-item" href="Categorias/plantulas.php">Plantulas</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="Categorias/productos.php">Productos</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="Categorias/tierras.php">Tierras</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="Categorias/terrenos.php">Terrenos</a></li>
                </ul>
              </li>
              <li class="nav-item">
              <a class="nav-link" data-bs-toggle="offcanvas" href="#offcanvasDark" role="button" aria-controls="offcanvasDark">
                Todo
              </a>
            </li>
              
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="#"><i class="fa-solid fa-cart-plus"></i></a>
              </li>
            </ul>
            <form class="d-flex" style="padding-right: 70px ;" role="search" action="buscar.php" method="get">
      
              <input class="form-control" type="search" placeholder="Buscar" name="termino" id="buscar" aria-label="Search">
              <button  type="button" onclick="buscar_ahora($('#buscar').val());" class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
            <a href="cerrar.php"><button class="btn btn-outline-danger"><i class="fa-solid fa-arrow-right-to-bracket"></i> Cerrar Sesion</button></a>
          </div>
        </div>
        
      </nav>
      <div class="contain text-center" style="padding: 25px 0px 0px 0px;">
        <ul class="nav justify-content-center" >
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="landing.php">Promos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="landing.php">Lo mas Top</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="vender.php">Vender</a>
            </li>
          <li class="nav-item">
            <a class="nav-link" href="landing.php">Solo Hoy!</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="blogg/blogg.php">Blogg</a>
          </li>
        </ul>
      
        <div class="offcanvas offcanvas-start show text-bg-secondary" tabindex="-1" id="offcanvasDark" aria-labelledby="offcanvasDarkLabel">
      <div class="text-center">
      <h5 class="offcanvas-title" id="offcanvasDarkLabel" ><img src="imagenes/CORA.png"  class="rounded mx-auto d-block" width="50px" alt="logo">CORA</h5>
        </div>  
      <div class="offcanvas-header">
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body"> 
          <div>
            <div class="list-group">
              <a href="Categorias/plantulas.php" class="list-group-item list-group-item-action list-group-item-success"><i class="fa-solid fa-plant-wilt"></i> Plantulas</a>
              <a href="Categorias/productos.php" class="list-group-item list-group-item-action list-group-item-success"><i class="fa-solid fa-bag-shopping"></i> Productos</a>
              <a href="Categorias/tierras.php" class="list-group-item list-group-item-action list-group-item-success"><i class="fa-solid fa-seedling"></i> Tierras</a>
              <a href="Categorias/terrenos.php" class="list-group-item list-group-item-action list-group-item-success"><i class="fa-solid fa-mound"></i> Terrenos</a>
              <a href="blogg/blog.html" class="list-group-item list-group-item-action list-group-item-success"><i class="fa-solid fa-blog"></i> Blogg</a>
              <a href="landing.php" class="list-group-item list-group-item-action list-group-item-success"><i class="fa-solid fa-certificate"></i> Promos</a>
              <a href="Categorias/productos.php" class="list-group-item list-group-item-action list-group-item-success"><i class="fa-solid fa-apple-whole"></i> Frutas</a>
              <a href="Categorias/tierras.php" class="list-group-item list-group-item-action list-group-item-success"><i class="fa-solid fa-mosquito"></i> Fertilizantes</a>
              <a href="#" class="list-group-item list-group-item-action list-group-item-success"><i class="fa-solid fa-question"></i> Ayuda</a>
            </div>    
           </div>
        </div>
      </div>
    </div>

    <div class="contain text-center" style="padding-bottom: 25px;">
    <h1><span class="badge text-bg-secondary">Agrega Tus Productos</span></h1>
  
</div>
<footer class="container-fluid" style="background-color: rgb(31, 30, 30); height: 250px; color: aliceblue;">
    <div class="row align-items-center">
       <div class="col-4 align-items-center" style="padding: 50px ;">
          <a href="landing.php"><img src="imagenes/CORA.png" class="img-fluid" style="height: 100px;" alt="..."></a> 
      </div>   
      <div class="col-4 row align-items-center" style="padding: 20px ; text-align: center;">
      <div class="footer-links">
            <ul style="display:block">
                <li style="list-style-type:none; padding-top: 10px"><a style="text-decoration: none; color:aliceblue" href="landing.php"><i class="fa-solid fa-house" style="color: #63E6BE;"></i> Inicio</a></li>
                <li style="list-style-type:none; padding-top: 10px"><a style="text-decoration: none; color:aliceblue" href="#"><i class="fa-solid fa-location-dot" style="color: #63E6BE;"></i> Ubicación</a></li>
               <li style="list-style-type:none; padding-top: 10px"><a style="text-decoration: none; color:aliceblue" href="#"><i class="fa-solid fa-question" style="color: #63E6BE;"></i> CoraLine</a></li>
                <li style="list-style-type:none; padding-top: 10px"><a style="text-decoration: none; color:aliceblue" href="#"><i class="fa-solid fa-phone" style="color: #63E6BE;"></i> Contacto</a></li>
            </ul>
          </div>
      </div>  
      <div class="col-4 align-items-center" style="padding: 20px ; text-align: right;">
          <a href="landing.php"><img src="imagenes/CORA.png" class="img-fluid" style="height: 100px;" alt="..."></a> 
      </div>        
     </div>
     <div class="container text-center">
  <div class="row align-items-end">
    <div class="col">
    &copy;2024 Cosechando Raíces CORA. Todos los derechos reservados.
    </div>
  </div>
</div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
</body>
</html>