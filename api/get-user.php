<?php
include("../crud/crud.php");
header("Access-Control-Allow-Origin: *");
header("Content-type:application/json");

$crud = new Crud();

if($_SERVER["REQUEST_METHOD"] == "GET")
{
$sql = "select * from usuarios where num_doc=".$_GET['num_doc'];
$res = $crud->read($sql);

$count = mysqli_num_rows($res);

if($count > 0)
{
 $product = array();

 while($row = mysqli_fetch_array($res, MYSQLI_ASSOC))
 {
	 $product[] = $row;
 }

 $result = array("status" => true , "userInfo" => $product);
}
else
{
 $result = array("status" => false , "message" => 'user not found...');
}

echo json_encode($result);
}
else
{
	 $error = array("status" => 405 , "message" => 'Method not allowed...');

echo json_encode($error);
}
