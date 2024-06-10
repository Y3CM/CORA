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


$nombre=$data["nombre_A"];
$apellido=$data["apellido_A"];
$contraseña=$data["contraseña_A"];
$email=$data["email_A"];
$pais_re=$data["pais_re_A"];
$ciudad_re=$data["ciudad_re_A"];
$movil=$data["movil_A"];
$direc_res=$data["direcc_re_A"];

$sql = "update usuarios set nombre = '$nombre' , email = '$email', contraseña = '$contraseña' , pais_residencia = '$pais_re', ciudad_residencia='$ciudad_re', celular='$movil',dir_resisdencia='$direc'  where num_doc=".$_GET['num_doc'];
$res = $crud->update($sql);


if ($res)
{
	$result = array("status" => true , "message" => "Product Updated Succefully...");
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