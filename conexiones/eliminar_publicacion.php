<?php
if(!empty($_GET["id"])){
$id=$_GET["id"];
        $sql=$conexion->query("delete from entradas WHERE id='$id'");
        if($sql==1){
            echo "
            <div class='alert alert-success' role='alert' style='paddding-top:'25px''>
              Publicación Eliminada
            </div>";
              }
            else  {
                echo "
                <div class='alert alert-danger' role='alert' style='paddding-top:'25px''>
                  Error al eliminar publicación
                </div>";
            
            
              }
            }
     
?>