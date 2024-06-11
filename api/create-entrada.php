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


$titulo=$data["titulo"];
$contenido=$data["contenido"];
$resumen=$data["resumen"];
$autor=$data["autor"];
$imagen=$data["img"];
$estado=$data["estado"];


$sql = "insert into entradas(titulo,contenido,fecha_publicacion,imagen,resumen,autor,estado) 
    values('$titulo','$contenido',NOW(),'$imagen','$resumen','$autor','$estado')";
$res = $crud->create($sql);     


if ($res)
{
	$result = array("status" => true , "message" => "entrada Added Succefully...");
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
