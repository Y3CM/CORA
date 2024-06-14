<?php session_start(); ?>

<!doctype html>
<html lang="es">

<?php 
require_once 'conexiones/conexion.php';
require_once "conexiones/config.php";
require_once "functions/functions.php";
render_template('templates','head');
render_template('templates','header_index');
?>

<body>

<?php 
render_template('templates','links_navegacion');
render_template('templates','modal');
render_template('templates','main');
?>

  <br>

<?= render_template('templates','footer');?>

  <script src="./JS/app.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>