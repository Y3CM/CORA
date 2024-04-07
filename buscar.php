<?php
session_start();
require "conexiones/conexion.php";
include "conexiones/config.php";
$campo = isset($_POST['campo']) ? $conexion->real_escape_string($_POST['campo']) : null;

$sql = "SELECT * FROM productos Where nombre LIKE '%$campo%'";
$resultado = $conexion->query($sql);
$num_rows = $resultado->num_rows;

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
          <a class="navbar-brand" href="index.php"><img src="imagenes/CORA.png"  width="45px" alt="logo"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarSupportedContent" >
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="index.php">Home</a>
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
                <a class="nav-link " aria-current="page" href="vistacarrito.php"><i class="fa-solid fa-cart-plus">(<?php 
                echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);
                
                
                ?>)</i></a>
              </li>
            </ul>
            <form class="d-flex" style="padding-right: 70px;" role="search" action="buscar.php" method="post">
               <input class="form-control" type="text" placeholder="Buscar" id="campo" name="campo" aria-label="Search">
                <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>

            <a href="iniciarsesion.php"><button class="btn btn-outline-success"><i class="fa-solid fa-arrow-right-to-bracket"></i> Iniciar sesion</button></a>
          </div>
        </div> 
       <a href="registro.php"> <button type="button" class="btn btn-outline-success">
          Registro
        </button></a>
      </nav>
<?php
if ($num_rows > 0) {
while($row=$resultado->fetch_object()){ ?>
    <div class="col-3" style="padding: 25px">
        <div class="card">
          <img height="150px" src="<?=$row->imagen?>" class="card-img-top" alt="...">
          <div class="card-body">
            <span><?=$row->nombre?></spa n>
            <h5 class="card-title">$<?=$row->precio ?></h5>
            <button type="button" class="btn btn-sm btn-info" data-bs-toggle="popover" data-bs-title="Descripción" data-bs-content="<?=$row->descripcion ?>">Descripción</button>
           <form action="" method="post">
            <input type="hidden" name="ID" id="ID" value="<?php echo openssl_encrypt($row->idproductos,COD,KEY);?>">
            <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt( $row->nombre,COD,KEY);?>">
            <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt( $row->precio,COD,KEY);?>">
            <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt( $row->cantidad,COD,KEY);?>">
          <button type="submit" class="btn btn-primary" name="btnAccion" value="Agregar">Agregar al carrito</button>
          </form>
          </div>
        </div>
      </div> 

    <?php 

}
}
?>