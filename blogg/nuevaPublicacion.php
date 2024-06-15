<?php
require_once "../conexiones/conexion.php";
require_once "../functions/functions.php";
require_once "../conexiones/config.php";
verificar_session('"../index.php"')
?>
<!doctype html>
<html lang="es">
<?=
render_template('../templates','head');
render_template('../templates','headerBlog');
?>
  <style>
    p {
      text-align: justify;
    }
    
    h1{
      text-align: center;
      padding-top: 20px;
    }
  </style>

<body>
 
 <?=
 render_componentes('../componentes','modal');
require_once "../conexiones/publicar.php";
?>
<main class="container">

        <form style="padding: 50px;" method="POST"  class="row g-3 needs-validation">

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
         
                <div class="contain text-center">
                  <button type="submit" name="btn_publicar" value="ok" class="btn btn-success ">Publicar</button>   
                </div>
              
        </form>
</main> 
</body>
<?=render_template('../templates','footer')?>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html> 