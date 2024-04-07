<?php
if(!empty($_GET["num_doc"])){
$id=$_GET["num_doc"];
        $sql=$conexion->query("delete from usuarios WHERE num_doc='$id'");
        if($sql==1){
            echo "
            <div class='alert alert-success' role='alert' style='paddding-top:'25px''>
              Usuario Eliminado
            </div>";
              }
            else  {
                echo "
                <div class='alert alert-danger' role='alert' style='paddding-top:'25px''>
                  Error al eliminar el Usuario
                </div>";
            
            
              }
            }
     
?>