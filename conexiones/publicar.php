<?php
include "conexion.php";
if(!empty($_POST["btn_publicar"])){
if (!empty($_POST["titulo"]) and !empty($_POST["contenido"])and !empty($_POST["resumen"]) and !empty($_POST["autor"])
and !empty($_POST["img"]) and !empty($_POST["estado"])) {
  
    $titulo=$_POST["titulo"];
    $contenido=$_POST["contenido"];
    $resumen=$_POST["resumen"];
    $autor=$_POST["autor"];
    $imagen=$_POST["img"];
    $estado=$_POST["estado"];

    $sql=$conexion->query("insert into entradas(titulo,contenido,fecha_publicacion,imagen,resumen,autor,estado) 
    values('$titulo','$contenido',NOW(),'$imagen','$resumen','$autor','$estado')");
    
  if($sql==1){
echo'
<script>
  alert("Publicación registrada correctamente");
  window.location.href = "../blogg/blogg.php";
</script>
';
  }
else  {
    echo "
    <div class='alert alert-danger' role='alert' style='paddding-top:'25px''>
      Error al Registrar Publicación
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