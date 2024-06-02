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
    <link rel="icon" href="../imagenes/CORA.png" type="image/jpeg">
    <script src="https://kit.fontawesome.com/25d245ab67.js" crossorigin="anonymous"></script>
    <title>Configuración de Pago - ADMIN CORA</title>
</head>
<body>
<nav class="navbar bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">ADMIN CORA</span>
    <a href="../landing.php"><button class="btn btn-outline-success"><img src="../imagenes/CORA.png" height="30px" alt="">Tienda CORA</button></a>
    <a href="../conexiones/cerrarAdmin.php"><button class="btn btn-outline-danger"><i class="fa-solid fa-arrow-right-to-bracket"></i> Cerrar Sesion</button></a>
  </div>
</nav>

<div class="container-fluid row">
<div class="list-group col-2" style=" background-color: #343a40;height: 100vh;">
  <a href="home.php" class="list-group-item list-group-item-action list-group-item-secondary"><i class="fa-solid fa-house"></i> Home</a></li></a>
  <a href="estadisticas.php" class="list-group-item list-group-item-action list-group-item-secondary"><i class="fa-solid fa-chart-simple"></i></i> Estadisticas</a></li></a>
  <a href="users.php" class="list-group-item list-group-item-action list-group-item-secondary"><i class="fa-regular fa-user"></i> Usuarios</a></li></a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-secondary"><i class="fa-solid fa-gear"></i> Ajustes</li></a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-secondary"><i class="fa-solid fa-list"></i> Categorias</li></a>
  <a href="blogg.php" class="list-group-item list-group-item-action list-group-item-secondary"><i class="fa-solid fa-blog"></i></i> Blogg</li></li></a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-secondary"><i class="fa-regular fa-lemon"></i> Productos</li></li></a>
</div>

 <form class="row g-3 needs-validation; col-10" method="POST">
  <div class="col-md-12">
    <h2>Configuración de Pago</h2>
    
    <div class="container-fluid row" id="paymentOptions">
 
    </div>

    <div class="row">
      <div class="col">
        <button type="button" class="btn btn-primary" onclick="agregarTarjeta()">Agregar Tarjeta</button>
      </div>
      
    </div>
  </div>
</form>

<script>

  window.onload = function() {
    var storedCards = JSON.parse(localStorage.getItem('paymentOptions'));
    if (storedCards) {
      document.getElementById("paymentOptions").innerHTML = storedCards;
    }
  };

  function agregarTarjeta() {
    var nombreTarjeta = prompt("Ingrese el nombre de la tarjeta:");
    if (nombreTarjeta) {
      var newCard = `
        <div class="col-sm-4 mb-3">
          <div class="card text-bg-success" style="max-width: 18rem;">
            <div class="card-body">
              <h5 class="card-title" style="color: white; text-align:center;">${nombreTarjeta}</h5>
              <p class="card-text" style="color: white; text-align:center;"><i class="fa-solid fa-user-plus fa-xl"></i></p>
            </div>
          </div>
          <button type="button" class="btn btn-danger" onclick="eliminarTarjeta(this)">Eliminar</button>
        </div>
      `;
      document.getElementById("paymentOptions").innerHTML += newCard;
      
      localStorage.setItem('paymentOptions', JSON.stringify(document.getElementById("paymentOptions").innerHTML));
    }
  }

  function eliminarTarjeta() {
    var cards = document.getElementById("paymentOptions").getElementsByClassName("col-sm-4");
    if (cards.length > 0) {
      cards[cards.length - 1].remove();

      localStorage.setItem('paymentOptions', JSON.stringify(document.getElementById("paymentOptions").innerHTML));
    }
  }
</script>




    </div>
  
   

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
</body>
</html>
