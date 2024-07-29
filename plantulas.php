<?php
require_once "conexiones/conexion.php";
require_once "conexiones/config.php";
require_once "functions/functions.php";
verificar_session('"index.php"');
?>
<!doctype htsml>
<html lang="es">
  <?=
render_template('templates',"head");
?>

  <style>
    p {
      text-align: justify;
    }

  </style>
<body>
 
    <?=render_template('templates','header')?>

     <div class="container">

     <h1 style="text-align: center; padding: 20px"><b>Plantulas</b></h1>

    <div class="container-fluid text-center">
        <div class="row align-items-start">
          <?php 
          $sql=$conexion->query("select * from productos where sub_categorias_idsub_categorias = 531 or sub_categorias_idsub_categorias = 530");
          while ($datos=$sql->fetch_object()){?>
        
        <div class="col-3" style="padding: 25px">
            <div class="card">
              <img height="150px" src="<?=$datos->imagen?>" class="card-img-top" alt="...">
              <div class="card-body">
                <span><?=$datos->nombre?></spa n>
                <h5 class="card-title">$<?=$datos->precio ?></h5>
                <button type="button" class="btn btn-sm btn-info" data-bs-toggle="popover" data-bs-title="Descripción" data-bs-content="<?=$datos->descripcion ?>">Descripción</button>
               <form action="" method="post">
                <input type="hidden" name="ID" id="ID" value="<?php echo openssl_encrypt($datos->idproductos,COD,KEY);?>">
                <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt( $datos->nombre,COD,KEY);?>">
                <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt( $datos->precio,COD,KEY);?>">
                <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt( $datos->cantidad,COD,KEY);?>">
              <button type="submit" class="btn btn-primary" name="btnAccion" value="Agregar">Agregar al carrito</button>
              </form>
              </div>
            </div>
          </div> 
        
        <?php }?>
          
          </div>
      </div>
      </div>
  
 <?=render_componentes('componentes','modal')?>


<?=render_template('templates','footer')?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>