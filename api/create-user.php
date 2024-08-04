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


$nombre=$data["nombre_A"];
$apellido=$data["apellido_A"];
$rol=$data["rol_A"];
$contraseña=$data["contraseña_A"];
$tipo_doc=$data["tip_doc_A"];
$numero_doc=$data["Numero_doc_A"];
$email=$data["email_A"];
$pais_re=$data["pais_re_A"];
$ciudad_re=$data["ciudad_re_A"];
$movil=$data["movil_A"];
$direc_res=$data["direcc_re_A"];

$sql = "insert into `usuarios`(`num_doc`, `tipo_doc`, `name`, `last_name`, `email`, `password`, `movil`, `direccion`, `rol`, `create_at`, `update_at`)
values($numero_doc,'$rol','$nombre','$apellido','$tipo_doc','$pais_re','$ciudad_re','$direc_res',$movil,'$email','$contraseña',0)";
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
