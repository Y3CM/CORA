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

$updateProducto = $data["updateProducto"];
$updateTipo = $data["updateTipo"];
$updateDescripcion =  $data["updateDescripcion"];
$updatePrecio =  $data["updatePrecio"];
$updateCantidad = $data["updateCantidad"];
$updateCategoria =  $data["updateCategoria"];
$updateImagen = $data["updateImagen"];

$sql = "update productos set  nombre = '$updateProducto', precio= '$updatePrecio' , imagen = '$updateImagen' , sub_categorias_idsub_categorias = '$updateCategoria', descripcion='$updateDescripcion', cantidad='$updateCantidad', tipo='$updateTipo' where idproductos=".$_GET['idproductos'];
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