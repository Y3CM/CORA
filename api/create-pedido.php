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


$status=$data["status"];
$descuento=$data["descuento"];
$subtotal=$data["subtotal"];
$impuesto=$data["impuesto"];
$total=$data["total"];
$estado_pago=$data["estado_pago"];
$metodo_pago=$data["metodo_pago"];
$user_id=$data["user_id"];



$sql = "INSERT INTO `pedidos`(`id`, `status`, `descuento`, `subtotal`, `impuesto`, `total`, `estado_pago`, `metodo_pago`, `fecha_pedido`, `user_id`) 
    values('','$status','$descuento','$subtotal','$impuesto','$total','$estado_pago','$metodo_pago','NOW()','$user_id')";
$res = $crud->create($sql);     


if ($res)
{
	$result = array("status" => true , "message" => "Pedido Added Succefully...");
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
