<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CORA</title>
    <script src="https://kit.fontawesome.com/25d245ab67.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" > 
  </head>
<body>
<?php 
include "conexiones/conexion.php";
include "conexiones/config.php"; 
?>
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
                <a class="nav-link " aria-current="page" href="vistacarrito.php"><i class="fa-solid fa-cart-plus">(<?php 
                echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);
                
                
                ?>)</i></a>
            </ul>
            <form class="d-flex" style="padding-right: 70px ;" role="search" action="buscar.php" method="get">
      
              <input class="form-control" type="search" placeholder="Buscar" name="termino" id="buscar" aria-label="Search">
              <button  type="button" onclick="buscar_ahora($('#buscar').val());" class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
            <a href="iniciarsesion.php"><button class="btn btn-outline-success"><i class="fa-solid fa-arrow-right-to-bracket"></i> Iniciar sesion</button></a>
          </div>
        </div>
        <a href="registro.php"></a><button type="button" class="btn btn-outline-success"></a>
          Registro
        </button>
      </nav>
<div class="container">
<div class="col-10">
    <h3>Carrito</h3>
    <?php if(!empty($_SESSION['CARRITO'])){?>
<table class="table">
<tbody>
    <tr>
      <th width="40%">Descripción</th>
      <th width="15%" class="text-center">Cantidad</th>
      <th width="20%" class="text-center">Precio</th>
      <th width="20%" class="text-center">Total</th>
      <th width="5%"></th>
    </tr>
    <?php $total=0; ?>
    <?php foreach($_SESSION['CARRITO'] as $indice=>$producto ){?>
    <tr>
      <td width="40%"><?php echo $producto['NOMBRE']?></td>
      <td width="15%" class="text-center"><?php echo $producto['CANTIDAD']?></td>
      <td width="20%" class="text-center"><?php echo $producto['PRECIO']?></td>
      <td width="20%" class="text-center"><?php echo number_format($producto['PRECIO']*$producto['CANTIDAD']);?></td>
      <td width="5%">
    
      <form action="" method="post">  
      <input type="hidden" name="ID" id="ID" value="<?php echo openssl_encrypt($producto['ID'],COD,KEY);?>">
    <button class="btn btn-outline-danger" name="btnAccion" type="submit" value="Eliminar">Eliminar</button> 
    </form>
    </td>
    </tr>
    <?php $total=$total+($producto['PRECIO']*$producto['CANTIDAD']); ?>
<?php }?>
    <tr>
    <td colspan="3" align="right"><h3>Total</h3></td>
    <td align="right"><h3>$<?php echo number_format($total);?></h3></td>
    <td></td>
</tr>
  </tbody>
</table>
<?php }else{ ?>
<div class="alert  alert-success">
No hay productos en el carrito...

</div>
<?php } ?>
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