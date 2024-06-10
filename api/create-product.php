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

$idProducto =  $data["idProducto"];
$productoNuevo = $data["productoNuevo"];
$tipoNuevo = $data["tipoNuevo"];
$descripcion =  $data["descripcion"];
$precio =  $data["precio"];
$cantidad = $data["cantidad"];
$categoriaV =  $data["categoriaV"];
$imagen = $data["imagen"];


$sql = "insert into productos (idproductos, nombre, tipo, descripcion, precio, cantidad, sub_categorias_idsub_categorias, carrito_de_compras_idcarrito_de_compras, imagen)  
VALUES ('$idProducto', '$productoNuevo', '$tipoNuevo', '$descripcion', '$precio', '$cantidad', '$categoriaV', 0, '$imagen')";
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
