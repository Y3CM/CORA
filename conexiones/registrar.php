<?php
if(!empty($_POST["btn_registro"])){
if (!empty($_POST["user"]) and !empty($_POST["apellido"])and !empty($_POST["contraseña"]) and !empty($_POST["tipo_doc"])
and !empty($_POST["num_doc"]) and !empty($_POST["email"])and !empty($_POST["pais_res"])and !empty($_POST["ciudad"]) and !empty($_POST["movil"]) and !empty($_POST["direccion"])) {
  
  $nombre=$_POST["user"];
  $apellido=$_POST["apellido"];
  $contraseña=$_POST["contraseña"];
  $tipo_doc=$_POST["tipo_doc"];
  $numero_doc=$_POST["num_doc"];
  $email=$_POST["email"];
  $pais_re=$_POST["pais_res"];
  $ciudad_re=$_POST["ciudad"];
  $movil=$_POST["movil"];
  $direc_res=$_POST["direccion"];

  $sql=$conexion->query("insert into usuarios(num_doc,rol,nombre,apellido,tipo_doc,pais_residencia,ciudad_residencia,dir_residencia,celular,email,contraseña,ID_carrito_de_compras) 
  values($numero_doc,'User','$nombre','$apellido','$tipo_doc','$pais_re','$ciudad_re','$direc_res',$movil,'$email','$contraseña',0)");
  if($sql==1){
echo'
<script>
  alert("usuario registrado correctamente");
  window.location.href = "../iniciarsesion.php";
</script>
';
  }
else  {
    echo "
    <div class='alert alert-danger' role='alert' style='paddding-top:'25px''>
      Error al Agregar Usuario
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