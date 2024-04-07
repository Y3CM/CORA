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
    <title>CORA</title>
</head>
<body>
  <script>
function eliminar(){
   let respuesta=confirm("Estas seguro que deseas eliminar esta Publicación");
   return respuesta;
}
  </script>
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
<h1 class="title">Nueva publicación</h1>
            <input type="hidden" value="pendiente" name="estado">
              <div class="col-md-8 position-relative">
                <label for="validationTooltip01" class="form-label"></label>
                <input type="text" name="titulo" class="form-control"  placeholder="Titulo" required>
                <div class="valid-tooltip">
                  Looks good!
                </div>
              </div>
              
              <div class="col-md-4 position-relative">
                <label for="validationTooltipUsername" class="form-label"></label>
                <div class="input-group has-validation">
                  <label class="input-group-text" id="validationTooltipUsernamePrepend">@</label>
                  <input type="text" name="autor" class="form-control"  aria-describedby="validationTooltipUsernamePrepend" placeholder="Autor" required>
                  <div class="invalid-tooltip">
                    Please choose a unique and valid username.
                  </div>
                </div>
              </div>
              <div class="col-md-12 position-relative">
                <label for="validationTooltip03" class="form-label"></label>
                <input type="text" name="img" class="form-control"  placeholder="link de la imagen" required>
                <div class="invalid-tooltip">
                  Please provide a valid city.
                </div>
              </div>
              <div class="col-md-12 position-relative">
                <label for="validationTooltip02" class="form-label"></label>
                <textarea type="text" name="contenido" class="form-control"  placeholder="Contenido" required></textarea>
                <div class="valid-tooltip">
                  Looks good!
                </div>
              </div>
              <div class="col-md-12 position-relative">
                <label for="validationTooltip03" class="form-label"></label>
                <textarea type="text" name="resumen" class="form-control"  placeholder="Describe el contenido" required></textarea>
                <div class="invalid-tooltip">
                  Please provide a valid city.
                </div>
              </div>
              
          </div>
                <div class="contain text-center">
       <button type="submit" name="btn_publicar" value="ok" class="btn btn-success ">Publicar</button>   
    </div>
        </div>
    
    <div class="text-center">
    <?php 
      include "../conexiones/conexion.php";
      include "../conexiones/publicar.php";
     ?>
  </div>
 
    <h2 class="text-center text-success" style="padding: 30px;">Publicaciones</h2>
    <div class="container-fluid">
    <?php 
       include "../conexiones/conexion.php";
        $sql=$conexion->query("select * from entradas");
        while ($datos=$sql->fetch_object()){?>
          <div class="container">
          <div class="card mb-3">
          <h5 class="card-title">Publicado por @<?=$datos->autor ?></h5>
          <h5 class="card-title">Estado <span class="badge text-bg-info"><?=$datos->estado ?></span></h5>
            <img src="<?=$datos->imagen?>" class="card-img-top" height="400px" alt="...">
             <div class="card-body">
            <h5 class="card-title"><?=$datos->titulo ?></h5>
            <p class="card-text"><?= $datos->contenido?></p>
            <p class="card-text"><small class="text-body-secondary"><?=$datos->fecha_publicacion?></small></p>
            <a href="modificar_publicacion.php?id=<?=$datos->id?>" class="btn btn-small btn-warning"><i class="fa-regular fa-pen-to-square"></i></a>  
            <a onclick="return eliminar()" href="blogg.php?id=<?=$datos->id?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
         </div>
        </div>
        
        </div>
          <?php
        }
      ?>
<?php
include "../conexiones/eliminar_publicacion.php";
?>
</div>
  </div>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
</body>
</html>