<?php
if(!empty($_POST["btn_modPubli"])){
if (!empty($_POST["id"]) and !empty($_POST["titulo"]) and !empty($_POST["contenido"])and !empty($_POST["resumen"]) and !empty($_POST["autor"])
and !empty($_POST["img"]) and !empty($_POST["estado"])) {
  
    $id=$_POST["id"];
    $titulo=$_POST["titulo"];
    $contenido=$_POST["contenido"];
    $resumen=$_POST["resumen"];
    $autor=$_POST["autor"];
    $imagen=$_POST["img"];
    $estado=$_POST["estado"];

    $sql = $conexion->query("update entradas set titulo='$titulo',contenido='$contenido',resumen='$resumen',imagen='$imagen',estado='$estado' WHERE id='$id'");
  if($sql==1){
echo'
<script>
  alert("Publicación Modificada correctamente");
  window.location.href = "../Admin/blogg.php";
</script>
';
  }
else  {
    echo "
    <div class='alert alert-danger' role='alert' style='paddding-top:'25px''>
      Error al Modificar Publicación
    </div>";


  }
}
 else {
    echo "
    <div class='alert alert-warning' role='alert' style='paddding-top:'25px''>
      Algunos Campos estan Vacios
    </div>";
    
}


}

?>
  