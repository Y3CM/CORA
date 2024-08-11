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


$cantidad=$data["cantidad"];
$pedidos_user_id=$data["pedidos_user_id"];
$productos_id=$data["productos_id"];
$productos_user_id=$data["productos_user_id"];
$productos_categoria_id=$data["productos_categoria_id"];
$pedidos_id=$data["pedidos_id"];



$sql = "INSERT INTO `detalles`(`id`, `cantidad`, `created_at`, `update_at`, `pedidos_id`, `pedidos_user_id`, `productos_id`, `productos_user_id`, `productos_categoria_id`) 
    values('','$cantidad',NOW(),NULL,'$pedidos_id','$pedidos_user_id','$productos_id','$productos_user_id','$productos_categoria_id')";
$res = $crud->create($sql);     


if ($res)
{
	$result = array("status" => true , "message" => "Detalle Added Succefully...");
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
