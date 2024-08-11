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


$reseña=$data["reseña"];
$autor=$data["autor"];
$calificacion=$data["calificacion"];
$producto_id=$data["producto_id"];
$producto_user_id=$data["producto_user_id"];
$producto_categoria_id=$data["producto_categoria_id"];



$sql = "INSERT INTO `reseñas`(`id`, `reseña`, `calificacion`, `created_at`, `update_at`, `autor`, `producto_id`, `producto_user_id`, `producto_categoria_id`) 
    values('','$reseña','$calificacion',NOW(),NULL,'$autor','$producto_id','$producto_user_id','$producto_categoria_id')";
$res = $crud->create($sql);     


if ($res)
{
	$result = array("status" => true , "message" => "reseña Added Succefully...");
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
