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
<div class="list-group col-2" style=" background-color: #343a40;height: 100vh; flex-wrap:wrap">
  <a href="home.php" class="list-group-item list-group-item-action list-group-item-secondary"><i class="fa-solid fa-house"></i> Home</a></li></a>
  <a href="estadisticas.php" class="list-group-item list-group-item-action list-group-item-secondary"><i class="fa-solid fa-chart-simple"></i></i> Estadisticas</a></li></a>
  <a href="users.php" class="list-group-item list-group-item-action list-group-item-secondary"><i class="fa-regular fa-user"></i> Usuarios</a></li></a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-secondary"><i class="fa-solid fa-gear"></i> Ajustes</li></a>
  <a href="blogg.php" class="list-group-item list-group-item-action list-group-item-secondary"><i class="fa-solid fa-blog"></i></i> Blogg</li></li></a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-secondary"><i class="fa-solid fa-list"></i> Categorias</li></a>
  
  <a href="#" class="list-group-item list-group-item-action list-group-item-secondary"><i class="fa-regular fa-lemon"></i> Productos</li></li></a>
</div>
<div class="col-10">
<form class="row g-3 needs-validation" action="conexiones/vender_producto.php" method="post" novalidate >
        <div class="col-md-4 position-relative">
          <label for="validationTooltip01" class="form-label">Nombre Producto</label>
          <input type="text" class="form-control" id="validationTooltip01" name="ProductoNuevo" placeholder="Producto" required>
          <div class="valid-tooltip">
            Ok!
          </div>
        </div>
        <div class="col-md-4 position-relative">
          <label for="validationTooltip02" class="form-label">Tipo</label>
          <input type="text" class="form-control" id="validationTooltip02" name="TipoNuevo" placeholder="Tipo" required>
          <div class="valid-tooltip">
            Ok!
          </div>
        </div>
        <div class="col-md-4 position-relative">
          <label for="validationTooltipUsername" class="form-label">Precio</label>
          <div class="input-group has-validation">
            <span class="input-group-text" id="validationTooltipUsernamePrepend">$</span>
            <input type="number" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" name="Precio" placeholder="Precio" required>
            <div class="invalid-tooltip">
             Por favor Ingresa un valor.
            </div>
          </div>
        </div>
        <div class="col-md-12 position-relative">
          <label for="validationTooltip03" class="form-label">Descripción</label>
          <input type="text" class="form-control" id="validationTooltip03" name="descripcion" placeholder="describe el producto">
          <div class="invalid-tooltip">
            Por favor ingresa una descripción. 
          </div>
        </div>
        
        <div class="col-md-3 position-relative">
            <label for="validationTooltipUsername" class="form-label">ID</label>
            <div class="input-group has-validation">
              <span class="input-group-text" id="validationTooltipUsernamePrepend">ID</span>
              <input type="number" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" name="Idproducto" placeholder="Asignale una Id al producto" required>
              <div class="invalid-tooltip">
               Por favor Ingresa un valor.
              </div>
            </div>
          </div>
        <div class="col-md-3 position-relative">
          <label for="validationTooltip04" class="form-label">Tipo de categoria</label>
          <select class="form-select" id="validationTooltip04" required name="CategoriaV">
            <option selected disabled value="">Categoria</option>
            <option value="523">Frutas</option>
            <option value="524">Fertilizantes</option>
            <option value="525">Cereales</option>
            <option value="526">Verduras</option>
            <option value="527">Legumbres</option>
            <option value="528">Tuberculos</option>
            <option value="529">Fibras</option>
            <option value="530">Flores</option>
            <option value="531">Plantas</option>
            <option value="532">Otro</option>
          </select>
          <div class="invalid-tooltip">
            Por favor seleccione una categoria.
          </div>
        </div>
        <div class="col-md-3 position-relative">
          <label for="validationTooltip05" class="form-label">Cantidad</label>
          <input type="number" class="form-control" id="validationTooltip05" name="Cantidad" placeholder="cantidad" required>
          <div class="invalid-tooltip">
            por favor elija una Cantidad.
          </div>
        </div>
        <div class="col-md-3 position-relative">
          <label for="validationTooltip05" class="form-label">Imagen</label>
          <input type="text" class="form-control" id="validationTooltip05" name="img" placeholder="link imagen" required>
          <div class="invalid-tooltip">
            por favor link de la imagen.
          </div>
        </div>
        <div class="contain text-center">
          <button  class="btn btn-success" name="AgregarP" values="Ok" type="submit">Agregar</button>
        </div>
      </form>
      </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
</body>
</html>