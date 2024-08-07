<?php
include("../crud/crud.php");
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$crud = new Crud();

if($_SERVER["REQUEST_METHOD"] === "POST")
{
$data = array();
//parsejson_decode_str(file_get_contents('php://input'),$data);
$data = json_decode(file_get_contents('php://input'),true);

//var_dump(json_decode(file_get_contents('php://input'), true));


$nombre=$data["nombre"];
$apellido=$data["apellido"];
$rol=$data["rol"];
$contraseña=$data["contraseña"];
$tipo_doc=$data["tip_doc"];
$numero_doc=$data["Numero_doc"];
$email=$data["email"];
$ciudad=$data["ciudad"];
$movil=$data["movil"];
$direccion=$data["direccion"];	

$sql = "insert into `usuarios`(`num_doc`, `tipo_doc`, `name`, `last_name`, `email`, `password`, `movil`, `ciudad`,`direccion`, `rol`, `create_at`, `update_at`)
values('$numero_doc','$tipo_doc','$nombre','$apellido','$email','$contraseña','$movil','$ciudad','$direccion','$rol',NOW(),NUll)";
$res = $crud->create($sql);


if ($res)
{
	$result = array("status" => true , "message" => "User Added Succefully...");
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
