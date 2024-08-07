<?php
include("../crud/crud.php");
header("Access-Control-Allow-Origin: *");
header("Content-type:application/json");

$crud = new Crud();

if($_SERVER["REQUEST_METHOD"] == "GET")
{
$sql = "select * from posts where id=".$_GET['id'];
$res = $crud->read($sql);

$count = mysqli_num_rows($res);

if($count > 0)
{
 $entrada = array();

 while($row = mysqli_fetch_array($res, MYSQLI_ASSOC))
 {
	 $entrada[] = $row;
 }

 $result = array("status" => true , "Post Info" => $entrada);
}
else
{
 $result = array("status" => false , "message" => 'Post not found...');
}

echo json_encode($result);
}
else
{
	 $error = array("status" => 405 , "message" => 'Method not allowed...');

echo json_encode($error);
}
