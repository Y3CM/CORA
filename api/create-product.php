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

$nombre = $data["name"];
$descripcion =  $data["descripcion"];
$precio = $data["precio"];
$stock =  $data["stock"];
$imagen = $data["imagen"];
$user_id = $data["user_id"];	
$categoria_id = $data["categoria_id"];

$sql = ("insert into productos (id,name, descripcion, precio, stock, imagen, updated_at, created_at, user_id, categoria_id")  
VALUES ('$nombre', '$descripcion', '$precio', '$stock', '$imagen', NULL, NOW(), $user_id, $categoria_id)";
$res = $crud->create($sql);     


if ($res)
{
	$result = array("status" => true , "message" => "Product Added Succefully...");
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
