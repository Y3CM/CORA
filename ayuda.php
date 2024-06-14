<?php
require_once  "conexiones/conexion.php";
require_once "functions/functions.php";
require_once "conexiones/config.php"; 
verificar_session('"index.php"')
?>
<!doctype html>
<html lang="es">
<?=
render_template('templates','head');
render_template('templates','header');
?>
<body >
<?= 
render_template('templates','links_navegacion');
render_template('templates','modal');
?>
   
   <main class="container">

   <h1 class= "text-center" style="padding:25px">¿En que podemos ayudarte?</h1>

    <div class="row">
        <div class="col-md-4">
            <div class="card text-bg-success mb-3">
                <a class="card-body" style="text-decoration: none;" href="users.php">
                    <div class="card-body">
                        <h5 class="card-title" style="color: white; text-align:center;">¿Como hago mi pedido?</h5>
                        <p class="card-text" style="color: white; text-align:center;"><i class="fa-solid fa-user-plus fa-xl"></i></p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-bg-warning mb-3">
                <a class="card-body" style="text-decoration: none;" href="users.php">
                    <div class="card-body">
                        <h5 class="card-title" style="color: white; text-align:center;">¿Devolucion de un producto?</h5>
                        <p class="card-text" style="color: white; text-align:center;"><i class="fa-solid fa-pen-to-square fa-xl"></i></p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-bg-secondary mb-3">
                <a class="card-body" style="text-decoration: none;" href="estadisticas.php">
                    <div class="card-body">
                        <h5 class="card-title" style="color: white; text-align:center;">Mas consultas</h5>
                        <p class="card-text" style="color: white; text-align:center;"><i class="fa-solid fa-chart-simple fa-xl"></i></p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</main>
</body>
<?=render_template('templates','footer')?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
</html>














