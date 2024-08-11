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


$status=$data["status"];
$descuento=$data["descuento"];
$subtotal=$data["subtotal"];
$impuesto=$data["impuesto"];
$total=$data["total"];
$estado_pago=$data["estado_pago"];
$metodo_pago=$data["metodo_pago"];


$sql = "update `pedidos` SET `status`='$status',`descuento`='$descuento',`subtotal`='$subtotal',`impuesto`='$impuesto',`total`='$total',`estado_pago`='$estado_pago',`metodo_pago`='$metodo_pago',`fecha_pedido`='NOW()' where id=".$_GET['id'];
$res = $crud->update($sql);



if ($res)
{
	$result = array("status" => true , "message" => "Pedido Updated Succefully...");
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