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

$nombre = $data["name"]; 
$descripcion =  $data["descripcion"];
$precio = $data["precio"]; 
$stock =  $data["stock"]; 
$imagen = $data["imagen"]; 
$user_id = $data["user_id"];	
$categoria_id = $data["categoria_id"];

$sql = "update productos set  name = '$nombre', precio= '$precio' , imagen = '$imagen' , descripcion='$descripcion', stock='$stock', updated_at = NOW() where id=".$_GET['id'];
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
