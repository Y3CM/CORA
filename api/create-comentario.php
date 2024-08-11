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


$contenido=$data["contenido"];
$autor=$data["autor"];
$post_id=$data["posts_id"];
$post_autor=$data["posts_autor"];


$sql = "INSERT INTO `comentarios`(`id`, `contenido`, `created_at`, `update_at`, `autor`, `posts_id`, `posts_autor`) 
    values('','$contenido',NOW(),NULL,'$autor','$post_id','$post_autor')";
$res = $crud->create($sql);     


if ($res)
{
	$result = array("status" => true , "message" => "comentario Added Succefully...");
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
