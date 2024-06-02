<?php
include "../conexiones/conexion.php";
session_start();
if(!isset($_SESSION['nombre'])){
  echo '
    <script>
      alert("Por favor debes iniciar sesión");
      window.location.href = "../Admin/inicioadmin.php";
    </script>
  ';
  session_destroy();
  exit(); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/25d245ab67.js" crossorigin="anonymous"></script>
    <link rel="icon" href="../imagenes/CORA.png" type="image/jpeg">
    <title>CORA</title>
    <nav class="navbar bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">ADMIN CORA</span>
    <a href="../landing.php"><button class="btn btn-outline-success"><img src="../imagenes/CORA.png" height="30px" alt="">Tienda CORA</button></a>
    <a href="../conexiones/cerrarAdmin.php"><button class="btn btn-outline-danger"><i class="fa-solid fa-arrow-right-to-bracket"></i> Cerrar Sesion</button></a>
  </div>
</nav>
<body>
<div class="container-fluid row">
<div class="list-group col-2" style=" background-color: #343a40;height: 100vh;">
  <a href="home.php" class="list-group-item list-group-item-action list-group-item-secondary"><i class="fa-solid fa-house"></i> Home</a></li></a>
  <a href="estadisticas.php" class="list-group-item list-group-item-action list-group-item-secondary"><i class="fa-solid fa-chart-simple"></i></i> Estadisticas</a></li></a>
  <a href="users.php" class="list-group-item list-group-item-action list-group-item-secondary"><i class="fa-regular fa-user"></i> Usuarios</a></li></a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-secondary"><i class="fa-solid fa-gear"></i> Ajustes</li></a>
  <a href="blogg.php" class="list-group-item list-group-item-action list-group-item-secondary"><i class="fa-solid fa-blog"></i></i> Blogg</li></li></a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-secondary"><i class="fa-solid fa-list"></i> Categorias</li></a>
  
  <a href="./productos.php" class="list-group-item list-group-item-action list-group-item-secondary"><i class="fa-regular fa-lemon"></i> Productos</li></li></a>
</div>
      <div class="col-10">
        <h1>Bienvenido <span class="badge text-bg-dark">Admin</span></h1></h1>
        <p>Este es el lugar donde puedes administrar tu sitio web.</p>
        <br>
        <div class="container-fluid row ">
          <div class="col align-self-start">
        <div class="card text-bg-success mb-3" style="max-width: 18rem;">
        <a class="card-body;" style="text-decoration: none;" href="users.php">
        <div class="card-body">
    <h5 class="card-title" style="color: white; text-align:center;">Agregar users</h5>
    <p class="card-text" style="color: white; text-align:center;"><i class="fa-solid fa-user-plus fa-xl"></i></p>
  </div>
  </div>
        </a>
        </div>
        <div class="col align-self-center">
        <div class="card text-bg-warning mb-3" style="max-width: 18rem;">
        <a class="card-body;" style="text-decoration: none;" href="users.php">
        <div class="card-body">
    <h5 class="card-title" style="color: black; text-align:center;">Modificar users</h5>
    <p class="card-text" style="color: black; text-align:center;"><i class="fa-solid fa-pen-to-square fa-xl"></i></p>
  </div>
  </div>
        </a>
        </div>
        <div class="col align-self-end">
        <div class="card text-bg-secondary mb-3" style="max-width: 18rem;">
        <a class="card-body;" style="text-decoration: none;" href="estadisticas.php">
        <div class="card-body">
    <h5 class="card-title" style="color: white; text-align:center;">Estadisticas</h5>
    <p class="card-text" style="color: white; text-align:center;"><i class="fa-solid fa-chart-simple fa-xl"></i></p>
  </div>
  </div>
        </a>
        </div>
</div>
<br>
<div class="container-fluid row ">
          <div class="col align-self-start">
        <div class="card text-bg-dark mb-3" style="max-width: 18rem;">
        <a class="card-body;" style="text-decoration: none;" href="#">
        <div class="card-body">
    <h5 class="card-title" style="color: white; text-align:center;">categorias</h5>
    <p class="card-text" style="color: white; text-align:center;"><i class="fa-solid fa-list fa-xl"></i></p>
  </div>
  </div>
        </a>
        </div>
        <div class="col align-self-center">
        <div class="card  mb-3" style="max-width: 18rem; background-color:#6f42c1">
        <a class="card-body;" style="text-decoration: none;" href="#">
        <div class="card-body">
    <h5 class="card-title" style="color: white; text-align:center;">Productos</h5>
    <p class="card-text" style="color: white; text-align:center;"><i class="fa-regular fa-lemon fa-xl"></i></p>
  </div>
  </div>
        </a>
        </div>
        <div class="col align-self-end">
        <div class="card text-bg-info mb-3" style="max-width: 18rem;">
        <a class="card-body;" style="text-decoration: none;" href="blogg.php">
        <div class="card-body">
    <h5 class="card-title" style="color: white; text-align:center;">blogg</h5>
    <p class="card-text" style="color: white; text-align:center;"><i class="fa-solid fa-blog fa-xl"></i></p>
  </div>
  </div>
        </a>
        </div>
</div>
      </div>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
</body>
</html>