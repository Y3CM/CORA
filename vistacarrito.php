<?php
require_once "conexiones/conexion.php";
require_once "conexiones/config.php"; 
require_once "functions/functions.php";
verificar_session('"index.php"');
?>
<!DOCTYPE html>
<html lang="en">
<?php 
render_template("templates",'head');
render_template('templates','header');
?>

<body>

<main class="container">
<section class="col-10">
    <h3>Carrito</h3>
    <?php if(!empty($_SESSION['CARRITO'])){?>
<table class="table">
<tbody>
    <tr>
      <th width="40%">Descripción</th>
      <th width="15%" class="text-center">Cantidad</th>
      <th width="20%" class="text-center">Precio</th>
      <th width="20%" class="text-center">Total</th>
      <th width="5%"></th>
    </tr>
    <?php $total=0; ?>
    <?php foreach($_SESSION['CARRITO'] as $indice=>$producto ){?>
    <tr>
      <td width="40%"><?php echo $producto['NOMBRE']?></td>
      <td width="15%" class="text-center"><?php echo $producto['CANTIDAD']?></td>
      <td width="20%" class="text-center"><?php echo $producto['PRECIO']?></td>
      <td width="20%" class="text-center"><?php echo number_format($producto['PRECIO']*$producto['CANTIDAD']);?></td>
      <td width="5%">
    
      <form action="" method="post">  
      <input type="hidden" name="ID" id="ID" value="<?php echo openssl_encrypt($producto['ID'],COD,KEY);?>">
    <button class="btn btn-outline-danger" name="btnAccion" type="submit" value="Eliminar">Eliminar</button> 

    </form>
    </td>
    </tr>
    <?php $total=$total+($producto['PRECIO']*$producto['CANTIDAD']); ?>
<?php }?>
    <tr>
    <td colspan="3" text-align="right"><h3>Total</h3></td>
    <td text-align="right"><h3>$<?php echo number_format($total);?></h3></td>
    <td></td>
</tr>
  </tbody>
</table>
<?php }else{ ?>
<div class="alert  alert-success">
No hay productos en el carrito...
</div>
</section>
<section class="col-2"></section>
</main>
<?php } ?>

<?=render_template('templates','footer')?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>