<?php
declare(strict_types=1);

function render_template(string $location,string $template)
{

require "$location/$template.php";

};


function verificar_session(string $location)
{
    $alert = '
        <script>
          alert("Por favor debes iniciar sesión");
          window.location.href ='. $location . ';
        </script>
      ';

    session_start();
    if(!isset($_SESSION['nombre'])){
      echo $alert;
      session_destroy();
      exit(); 
                  
    }

};

function get_publicacion($sql,$conexion)
{
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
};