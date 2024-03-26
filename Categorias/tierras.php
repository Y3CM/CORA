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
<!doctype htsml>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <style>
    p {
      text-align: justify;
    }

  </style>
    <link rel="icon" href="../imagenes/CORA.png" type="image/jpeg">
    <title>CORA</title>
    <script src="https://kit.fontawesome.com/25d245ab67.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" >  
    <script src="https://kit.fontawesome.com/25d245ab67.js" crossorigin="anonymous"></script>
  </head>
<body>
  <div class="prueba">
    <nav  class="navbar navbar sticky-top navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="../landing.php"><img src="../imagenes/CORA.png" width="70px" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent" >
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="../landing.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Mis pedidos</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categorias
              </a>
              <ul class="dropdown-menu" >
              <li><a class="dropdown-item" href="plantulas.php">Plantulas</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="productos.php">Productos</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="tierras.php">Tierras</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="terrenos.php">Terrenos</a></li>
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
          <a href="../index.php"><button class="btn btn-outline-danger"><i class="fa-solid fa-arrow-right-to-bracket"></i> Cerrar Sesion</button></a>
        </div>
      </div>
     </nav>
     <div class="container">
<br>
     <h1 style="text-align: center;"><b>Tierras</b></h1>

    <div class="container-fluid text-center">
        <div class="row align-items-start">
          <?php 
          $sql=$conexion->query("select * from productos where sub_categorias_idsub_categorias = 524 or sub_categorias_idsub_categorias = 532");
          while ($datos=$sql->fetch_object()){?>
        
        <div class="col-3" style="padding: 25px">
            <div class="card">
              <img height="150px" src="<?=$datos->imagen?>" class="card-img-top" alt="...">
              <div class="card-body">
                <span><?=$datos->nombre?></spa n>
                <h5 class="card-title">$<?=$datos->precio ?></h5>
                <button type="button" class="btn btn-sm btn-info" data-bs-toggle="popover" data-bs-title="Descripción" data-bs-content="<?=$datos->descripcion ?>">Descripción</button>
               <form action="" method="post">
                <input type="hidden" name="ID" id="ID" value="<?php echo openssl_encrypt($datos->idproductos,COD,KEY);?>">
                <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt( $datos->nombre,COD,KEY);?>">
                <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt( $datos->precio,COD,KEY);?>">
                <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt( $datos->cantidad,COD,KEY);?>">
              <button type="submit" class="btn btn-primary" name="btnAccion" value="Agregar">Agregar al carrito</button>
              </form>
              </div>
            </div>
          </div> 
        
        <?php }?>
          
          </div>
      </div>
      </div>
  
  <div class="offcanvas offcanvas-start show text-bg-dark" tabindex="-1" id="offcanvasDark" aria-labelledby="offcanvasDarkLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasDarkLabel" ><img src="../imagenes/cora.png" width="100px" alt="logo">CORA</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body"> 
      <div>
        <div class="list-group">
        <a href="plantulas.php" class="list-group-item list-group-item-action list-group-item-success"><i class="fa-solid fa-plant-wilt"></i> Plantulas</a>
              <a href="productos.php" class="list-group-item list-group-item-action list-group-item-success"><i class="fa-solid fa-bag-shopping"></i> Productos</a>
              <a href="tierras.php" class="list-group-item list-group-item-action list-group-item-success"><i class="fa-solid fa-seedling"></i> Tierras y Fertilizantes</a>
              <a href="terrenos.php" class="list-group-item list-group-item-action list-group-item-success"><i class="fa-solid fa-mound"></i> Terrenos</a>
          <a href="../blogg/blogg.php" class="list-group-item list-group-item-action list-group-item-success"><i class="fa-solid fa-blog"></i> Blogg</a>
          <a href="#list-item-2" class="list-group-item list-group-item-action list-group-item-success"><i class="fa-solid fa-certificate"></i> Promos</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-success"><i class="fa-solid fa-apple-whole"></i> Frutas</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-success"><i class="fa-solid fa-question"></i> Ayuda</a>
        </div>    
       </div>
    </div>
  </div>
</div>

<footer class="container-fluid" style="background-color: rgb(31, 30, 30); height: 250px; color: aliceblue;">
    <div class="row align-items-center">
       <div class="col-4 align-items-center" style="padding: 50px ;">
          <a href="../landing.php"><img src="../imagenes/CORA.png" class="img-fluid" style="height: 100px;" alt="..."></a> 
      </div>   
      <div class="col-4 row align-items-center" style="padding: 20px ; text-align: center;">
      <div class="footer-links">
            <ul style="display:block">
                <li style="list-style-type:none; padding-top: 10px"><a style="text-decoration: none; color:aliceblue" href="../landing.php"><i class="fa-solid fa-house" style="color: #63E6BE;"></i> Inicio</a></li>
                <li style="list-style-type:none; padding-top: 10px"><a style="text-decoration: none; color:aliceblue" href="#"><i class="fa-solid fa-location-dot" style="color: #63E6BE;"></i> Ubicación</a></li>
               <li style="list-style-type:none; padding-top: 10px"><a style="text-decoration: none; color:aliceblue" href="#"><i class="fa-solid fa-question" style="color: #63E6BE;"></i> CoraLine</a></li>
                <li style="list-style-type:none; padding-top: 10px"><a style="text-decoration: none; color:aliceblue" href="#"><i class="fa-solid fa-phone" style="color: #63E6BE;"></i> Contacto</a></li>
            </ul>
          </div>
      </div>  
      <div class="col-4 align-items-center" style="padding: 20px ; text-align: right;">
          <a href="../landing.php"><img src="../imagenes/CORA.png" class="img-fluid" style="height: 100px;" alt="..."></a> 
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