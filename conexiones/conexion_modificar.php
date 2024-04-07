<?php
if(!empty($_POST["btn_modificar"])){
    if (!empty($_POST["nombre_A"]) and !empty($_POST["apellido_A"])and !empty($_POST["rol_A"]) and !empty($_POST["contraseña_A"]) and !empty($_POST["tip_doc_A"])
    and !empty($_POST["Numero_doc_A"]) and !empty($_POST["email_A"])and !empty($_POST["pais_re_A"])and !empty($_POST["ciudad_re_A"]) and !empty($_POST["movil_A"]) and !empty($_POST["direcc_re_A"]) and !empty($_POST["idcarrito"] ) ){
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
        $idcarrito=$_POST["idcarrito"];
        $sql = $conexion->query("update usuarios set num_doc='$numero_doc',rol='$rol',nombre='$nombre',apellido='$apellido',tipo_doc='$tipo_doc',pais_residencia='$pais_re',ciudad_residencia='$ciudad_re',dir_residencia='$direc_res',celular='$movil',email='$email',contraseña='$contraseña', ID_carrito_de_compras='$idcarrito' WHERE num_doc='$numero_doc'");
        if($sql==1){
            echo "
            <div class='alert alert-success' role='alert' style='paddding-top:'25px''>
              Usuario Modificado
            </div>";
              }
            else  {
                echo "
                <div class='alert alert-danger' role='alert' style='paddding-top:'25px''>
                  Error al Modificar Usuario
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