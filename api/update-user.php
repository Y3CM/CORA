<?php
include("../crud/crud.php");
header("Access-Control-Allow-Origin: *");
header("Content-type:application/json");

$crud = new Crud();


if($_SERVER["REQUEST_METHOD"] === "PUT")
{

$data = array();
//parsejson_decode_str(file_get_contents('php://input'),$data);
$data = json_decode(file_get_contents('php://input'),true);


$nombre=$data["nombre"];
$apellido=$data["apellido"];
$contraseña=$data["contraseña"];
$email=$data["email"];
$pais_re=$data["pais"];
$ciudad_re=$data["ciudad"];
$movil=$data["movil"];
$direc_res=$data["direccion"];
$tipo_doc=$data["documento"];

$sql = "UPDATE `usuarios` SET ,`tipo_doc`='$tipo_doc',`name`='$nombre',`last_name`='$apellido',`email`='$email',`password`='$contraseña',`movil`='$movil',`direccion`='direc_res',`update_at`='NOW()' where num_doc=".$_GET['num_doc'];
$res = $crud->update($sql);



if ($res)
{
	$result = array("status" => true , "message" => "User Updated Succefully...");
}
else
{
	$result = array("status" => false , "message" => "Something went wrong...");
}

echo json_encode($result);
}
else
{
	 $error = array("status" => 405 , "message" => 'Method not allowed...');

echo json_encode($error);
}
