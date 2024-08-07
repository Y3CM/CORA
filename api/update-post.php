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


$titulo=$data["titulo"];
$contenido=$data["contenido"];
$resumen=$data["resumen"];
$autor=$data["autor"];
$imagen=$data["imagen"];
$estado=$data["estado"];


$sql = "update posts set titulo = '$titulo' , contenido = '$contenido', resumen = '$resumen' , autor = '$autor', image='$imagen', estado='$estado' , updated_at=NOW() where id=".$_GET['id'];
$res = $crud->update($sql);



if ($res)
{
	$result = array("status" => true , "message" => "Entrada Updated Succefully...");
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