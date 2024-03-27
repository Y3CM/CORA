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

$sql = "SELECT nombre, cantidad FROM productos"; 
$resultado = mysqli_query($conexion, $sql);


$labels = [];
$data = [];


while ($fila = mysqli_fetch_assoc($resultado)) {
    $labels[] = $fila['nombre'];
    $data[] = $fila['cantidad'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/25d245ab67.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
<div class="list-group col-2" style=" background-color: #343a40; height: 100vh; overflow-y: auto;">
  <a href="home.php" class="list-group-item list-group-item-action list-group-item-secondary"><i class="fa-solid fa-house"></i> Home</a></li></a>
  <a href="estadisticas.php" class="list-group-item list-group-item-action list-group-item-secondary"><i class="fa-solid fa-chart-simple"></i></i> Estadisticas</a></li></a>
  <a href="users.php" class="list-group-item list-group-item-action list-group-item-secondary"><i class="fa-regular fa-user"></i> Usuarios</a></li></a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-secondary"><i class="fa-solid fa-gear"></i> Ajustes</li></a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-secondary"><i class="fa-solid fa-list"></i> Categorias</li></a>
  <a href="blogg.php" class="list-group-item list-group-item-action list-group-item-secondary"><i class="fa-solid fa-blog"></i></i> Blogg</li></li></a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-secondary"><i class="fa-regular fa-lemon"></i> Productos</li></li></a>
</div>
      <div class="col-10">
        <h1>Bienvenido <span class="badge text-bg-dark">Admin</span></h1></h1>
      
<br>
      <div class="row" style="width: auto; ">
        <div class="col-4" >
            <div class="bg-light p-3">
            <h1 class="text-center">Estadísticas</h1>
            <br>
            <canvas id="myChart" ></canvas>    
        </div>
        </div>
        <br>
        <div class="col-8">
            <h2>Descripción</h2>
        <br><br>
        <p></p>
        </div>
        </div>
        <div style="width: auto; ">
        <div class="col-4" >
            <br> <br>
            <div class="bg-light p-3">
            <canvas id="myChart2" ></canvas>
            </div>
        </div>
        </div>
        </div>
</div>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: <?php echo json_encode($labels); ?>,
            datasets: [{
                label: 'Cantidad',
                data: <?php echo json_encode($data); ?>,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
  </script>
  <script>
    var ctx = document.getElementById('myChart2').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: <?php echo json_encode($labels); ?>,
            datasets: [{
                label: 'Cantidad',
                data: <?php echo json_encode($data); ?>,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
  </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
</body>
</html>