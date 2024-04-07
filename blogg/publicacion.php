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


include "../conexiones/config.php"; 

if (isset($_GET['id'])) {
  $id_publicacion = $_GET['id'];
  
  $sql = "SELECT * FROM entradas WHERE id = $id_publicacion";
  
  $resultado = $conexion->query($sql);
  
  if ($resultado->num_rows > 0) {
   
    $publicacion = $resultado->fetch_assoc();
  } else {
    
    echo '
    <script>
      alert("Publicacion no Encontrada");
      window.location.href = "blogg.php";
    </script>
  ';
    exit();
  }
} else {
  echo "No se proporcionó ID de publicación.";
  exit();
}
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../imagenes/CORA.png" type="image/jpeg">
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
                <li><a class="dropdown-item" href="../Categorias/plantulas.php">Plantulas</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="../Categorias/productos.php">Productos</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="../Categorias/tierras.php">Tierras</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="../Categorias/terrenos.php">Terrenos</a></li>
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
           <li class="nav-item">
               <a class="nav-link "  href="#">Publicar <i class="fa-solid fa-plus" ></i></a>
           </li>
          </ul>
          <form class="d-flex" style="padding-right: 70px ;" role="search" action="buscar.php" method="get">
    
            <input class="form-control" type="search" placeholder="Buscar" name="termino" id="buscar" aria-label="Search">
            <button  type="button" onclick="buscar_ahora($('#buscar').val());" class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
          </form>
          <a href="../conexiones/cerrar.php"><button class="btn btn-outline-danger"><i class="fa-solid fa-arrow-right-to-bracket"></i> Cerrar Sesion</button></a>
        </div>
      </div>
      
    </nav>
  <div class="contain text-center" style="padding: 25px 0px 0px 0px;">
  <ul class="nav justify-content-center" >
      <li class="nav-item">
        <a class="nav-link active" style=" color:#7EB031;" aria-current="page" href="../landing.php">Tienda CORA</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style=" color:#7EB031;" href="#">Ayuda</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" style=" color:#7EB031;" href="blogg.php">Tendencia</a>
        </li>
      <li class="nav-item">
        <a class="nav-link" style=" color:#7EB031;" href="blogg.php#recientes">Nuevas publicaciones</a>
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
 <br>
<div class="container">
  <div class="row">
    <div class="col-8">
    <h1><?= $publicacion['titulo'] ?></h1> <br>
    <img src="<?= $publicacion['imagen'] ?>" style="height: 400px; width:100%" alt=""> <br>
     <br>
    <div class="container-fluid"><i class="fa-regular fa-user fa-2xl"><?= $publicacion['autor'] ?></i></div>
      <br>
    <p><?= $publicacion['contenido'] ?></p>
    <h6><?= $publicacion['fecha_publicacion'] ?></h6>
    </div>
    <div class="col-4" data-bs-spy="scroll"> 
    <ul class="list-group list-group-flush">
        <br>
        <br>
        <h4 style="text-align:center;">Ultimas publicaciones</h4>
        <br>
<li class="list-group-item" >
   <?php 
   $query = "SELECT * FROM entradas WHERE estado='verificado' ORDER BY fecha_publicacion DESC LIMIT 5";
   $result = $conexion->query($query);
   while ($row = $result->fetch_assoc()) {
    echo '<a href="publicacion.php?id='.$row['id'].'" style="text-decoration:none">';
    echo '<div class="card border-success mb-3" style="max-width: 540px;">';
    echo  '<div class="row g-0">';
    echo  '<div class="col-md-4">';
    echo '<img src="'.$row['imagen'].'" class="img-fluid rounded-start" style="height:100%" alt="Imagen de la entrada">';
    echo  '</div>';
    echo '<div class="col-md-8">';
    echo '<div class="card-body">';
    echo '<h5 class="card-title"> '.$row['titulo'].'</h5>';
    echo '<p class="card-text"><small class="text-body-secondary">'.$row['fecha_publicacion'].'</small></p>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</a>';
}
   
   ?>
   </li>
   </ul>
         </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
<footer class="container-fluid" style="background-color: rgb(31, 30, 30); height: 250px; color: aliceblue;">
    <div class="row align-items-center">
       <div class="col-4 align-items-center" style="padding: 50px ;">
          <a href="landing.php"><img src="../imagenes/CORA.png" class="img-fluid" style="height: 100px;" alt="..."></a> 
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
          <a href="landing.php"><img src="../imagenes/CORA.png" class="img-fluid" style="height: 100px;" alt="..."></a> 
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
</html>