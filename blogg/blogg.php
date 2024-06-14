<?php
require_once "../functions/functions.php";
verificar_session('"../index.php"');
require_once "../conexiones/conexion.php";
require_once "../conexiones/config.php"; 
?>

<!doctype html>
<html lang="es">

 <?php render_template( '../templates','head');?>

  <style>
    p {
      text-align: justify;
    }
    
    h1{
      text-align: center;
      padding-top: 20px;
    }
  </style>

  <?=render_template('../templates','headerBlog')?>

<body>
  <main>
    <div class="contain text-center" style="padding-top: 25px; ">
    <ul class="nav justify-content-center" >
      <li class="nav-item">
        <a class="nav-link active" style=" color:#7EB031;" aria-current="page" href="../landing.php">Tienda CORA</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style=" color:#7EB031;" href="#">Ayuda</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" style=" color:#7EB031;" href="#">Tendencia</a>
        </li>
      <li class="nav-item">
        <a class="nav-link" style=" color:#7EB031;" href="#recientes">Nuevas publicaciones</a>
      </li>
    </ul>
  
<?=render_template('../templates','modal')?>

 <section>
<div class="container">

<h1 style=" color:#7EB031;">Blogg CORA</h1>
<br>
<h2 style="color:#7EB031;">¿Que es CORA?</h2>
<br>
<video controls width="100%"><source src="../Video/video2.0.mp4" type="video/mp4"></video>
<br>
</section> 
<section>
<div class="container">
    <h2 style=" color:#7EB031; padding: 20px;" id="recientes">Últimas publicaciones del blog</h2>
    <div class="row">
        <?php
        $query = "SELECT * FROM entradas WHERE estado='verificado' ORDER BY fecha_publicacion DESC LIMIT 5"; 
        $result = $conexion->query($query);
        while ($row = $result->fetch_assoc()) {
            echo '<div class="col-md-4" style="padding-bottom:50px">';
            echo '<div class="card">';
            echo '<img src="'.$row['imagen'].'" class="card-img-top" style="height: 200px;" alt="Imagen de la entrada">';
            echo '<div class="card-body" style="height: 220px;">';
            echo '<h5 class="card-title">'.$row['titulo'].'</h5>';
            echo '<p class="card-text">'.$row['resumen'].'</p>';
            echo '</div>';
            echo '<a href="publicacion.php?id='.$row['id'].'" class="btn btn-outline-primary btn-sm" style="border:none">Leer más</a>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
</div>
</section>
</main>
<?= render_template('../templates','footer')?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>