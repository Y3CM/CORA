<?php
include "conexiones/connection.php";
require_once "functions/functions.php";
verificar_session('"index.php"');
?>

<!doctype html>
<html lang="es">
  <?=
  render_template('templates','head');
  render_template('templates','header');
  ?>
<body>
   <?= 
   render_template('templates','links_navegacion');
   render_componentes('componentes','modal');
   ?>
    
    <div class="contain text-center" style="padding-bottom: 25px;">
    <h1><span class="badge text-bg-secondary">Agrega Tus Productos</span></h1>
  </div>
<div class="container" style="background: #949794; padding-bottom: 50px;">
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
<?=render_template('templates','footer')?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
</body>
</html>
