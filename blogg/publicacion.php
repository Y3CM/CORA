<?php
require_once "../conexiones/conexion.php";
require_once "../conexiones/config.php"; 
require_once "../functions/functions.php";
verificar_session('"../index.php"');

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

 <?=
 render_template('../templates/','head');
 render_template('../templates','headerBlog');
 ?>

  <style>
    p {
      text-align: justify;
    }

  </style>
<body>
     
 
  <?=render_componentes('../componentes','modal')?>
 <br>
<main class="container">
  <div class="row">
    <div class="col-8">
      <section>
    <h1><?= $publicacion['titulo'] ?></h1> <br>
    <img src="<?= $publicacion['imagen'] ?>" style="height: 400px; width:100%" alt=""> <br>
     <br>
    <div class="container-fluid"><i class="fa-regular fa-user fa-2xl"><?= $publicacion['autor'] ?></i></div>
      <br>
    <p><?= $publicacion['contenido'] ?></p>
    <h6><?= $publicacion['fecha_publicacion'] ?></h6>
    </div>
    </section>
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
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
<?=render_template('../templates','footer')?>
</html>