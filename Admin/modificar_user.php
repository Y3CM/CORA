<?php
include "../conexiones/conexion.php";
$id=$_GET["num_doc"];
$sql=$conexion ->query("select * from usuarios where num_doc=$id");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/25d245ab67.js" crossorigin="anonymous"></script>
    <title>CORA</title>
</head>
<body>
<script>
function eliminar(){
   let respuesta=confirm("Estas seguro que deseas eliminar este Usuario");
   return respuesta;
}
  </script>
<nav class="navbar bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">ADMIN CORA</span>
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
  <a href="#" class="list-group-item list-group-item-action list-group-item-secondary"><i class="fa-solid fa-blog"></i></i> Blogg</li></li></a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-secondary"><i class="fa-regular fa-lemon"></i> Productos</li></li></a>
</div>
<form class="row g-3 needs-validation; col-10" method="POST">
<h2 class="text-center text-warning" style="padding-bottom: 30px;"> Modificando User -> ID= <?=$id?></h2>
<?php
while ($datos=$sql->fetch_object()) {?>
 <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre_A" value="<?=$datos->nombre?>">
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Apellido</label>
    <input type="text" class="form-control" name="apellido_A" value="<?=$datos->apellido?>">
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Rol</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" name="rol_A" value="<?=$datos->rol?>">
    </div>
  </div>
  <div class="col-md-5">
    <label for="validationCustom03" class="form-label">Contraseña</label>
    <input type="text" class="form-control" name="contraseña_A" value="<?=$datos->contraseña?>">
  </div>
  <div class="col-md-2">
    <label for="validationCustom04" class="form-label">Tipo Documento</label>
    <input type="text" class="form-control" name="tip_doc_A" value="<?=$datos->tipo_doc?>">
  </div>
  <div class="col-md-5">
    <label for="validationCustom05" class="form-label">Numero Documento</label>
    <input type="number" class="form-control" name="Numero_doc_A" value="<?=$datos->num_doc?>">
  </div>
  <div class="col-md-4">
    <label for="validationCustom05" class="form-label">E-mail</label>
    <input type="email" class="form-control" name="email_A" value="<?=$datos->email?>">
  </div>
  <div class="col-md-4">
    <label for="validationCustom05" class="form-label">Pais Residencia</label>
    <input type="text" class="form-control" name="pais_re_A" value="<?=$datos->pais_residencia?>">
  </div>
  <div class="col-md-4">
    <label for="validationCustom05" class="form-label">Ciudad Residencia</label>
    <input type="text" class="form-control" name="ciudad_re_A" value="<?=$datos->ciudad_residencia?>">
  </div>
  <div class="col-md-4">
    <label for="validationCustom05" class="form-label">Movil</label>
    <input type="number" class="form-control" name="movil_A" value="<?=$datos->celular?>">
  </div>
  <div class="col-md-4">
    <label for="validationCustom05" class="form-label">Direccion Residencia</label>
    <input type="text" class="form-control" name="direcc_re_A" value="<?=$datos->dir_residencia?>">
  </div>
  <div class="col-md-1 ">
    <label for="validationCustom05" class="form-label">Id Carrito</label>
    <input type="text" class="form-control" name="idcarrito" value="<?=$datos->ID_carrito_de_compras?>">
  </div>
  <div class="col-md-2 offset-md-1 " style="padding-top:32px;">
    <button class="btn btn-outline-warning" name="btn_modificar" value="ok" type="submit">Modificar</button>
  </div>
    </div>
    <div class="text-center">
  </div>
<?php
include "../conexiones/conexion.php";
include "../conexiones/conexion_modificar.php";
?>
    <h2 class="text-center text-success" style="padding: 30px;">Usuarios</h2>
    <div class="container-fluid">
  <table class="table">
  <thead class="table-dark">
    <tr>
      <th scope="col">Numero_Doc</th>
      <th scope="col">Rol</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Tipo_Do</th>
      <th scope="col">Pais_Res</th>
      <th scope="col">Ciudad_Res</th>
      <th scope="col">Direccion_Res</th>
      <th scope="col">Movil</th>
      <th scope="col">Email</th>
      <th scope="col">Contraseña</th>
      <th scope="col">ID_Car</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php 
       include "../conexiones/conexion.php";
        $sql=$conexion->query("select * from usuarios");
        while ($datos=$sql->fetch_object()){?>
          <tr>
        <td><?=$datos->num_doc ?></td>
          <td><?=$datos->rol ?></td>
          <td><?=$datos->nombre ?></td>
          <td><?= $datos->apellido?></td>
          <td><?=$datos->tipo_doc ?></td>
          <td><?=$datos->pais_residencia?></td>
          <td><?=$datos->ciudad_residencia?></td>
          <td><?=$datos->dir_residencia?></td>
          <td><?=$datos->celular?></td>
          <td><?=$datos->email?></td>
          <td><?=$datos->contraseña?></td>
          <td><?=$datos->ID_carrito_de_compras?></td>
          <td>
          <a href="modificar_user.php?num_doc=<?=$datos->num_doc?>" class="btn btn-small btn-warning"><i class="fa-regular fa-pen-to-square"></i></a>  
          <a onclick="return eliminar()" href="users.php?num_doc=<?=$datos->num_doc?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
        </td>
        </tr>
          <?php
        }
    }?>
  </tbody>
</table>
</div>
  </div>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
</body>
</html>