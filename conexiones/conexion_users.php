<?php
if(!empty($_POST["btn_agregar"])){
if (!empty($_POST["nombre_A"]) and !empty($_POST["apellido_A"])and !empty($_POST["rol_A"]) and !empty($_POST["contraseña_A"]) and !empty($_POST["tip_doc_A"])
and !empty($_POST["Numero_doc_A"]) and !empty($_POST["email_A"])and !empty($_POST["pais_re_A"])and !empty($_POST["ciudad_re_A"]) and !empty($_POST["movil_A"]) and !empty($_POST["direcc_re_A"])) {
  
$nombre=$_POST["nombre_A"];
  $apellido=$_POST["apellido_A"];
  $rol=$_POST["rol_A"];
  $contraseña=$_POST["contraseña_A"];
  $tipo_doc=$_POST["tip_doc_A"];
  $numero_doc=$_POST["Numero_doc_A"];
  $email=$_POST["email_A"];
  $pais_re=$_POST["pais_re_A"];
  $ciudad_re=$_POST["ciudad_re_A"];
  $movil=$_POST["movil_A"];
  $direc_res=$_POST["direcc_re_A"];

  $sql=$conexion->query("insert into usuarios(num_doc,rol,nombre,apellido,tipo_doc,pais_residencia,ciudad_residencia,dir_residencia,celular,email,contraseña,ID_carrito_de_compras)
  values($numero_doc,'$rol','$nombre','$apellido','$tipo_doc','$pais_re','$ciudad_re','$direc_res',$movil,'$email','$contraseña',0)");
  if($sql==1){
echo "<div class='alert alert-success' role='alert' style='padding-top:'25px''>
      Usuario ingresado correctamente
      </div>";
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