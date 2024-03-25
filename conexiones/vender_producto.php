<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" > 
<title>vender</title>
</head>
<body style="background-color:#ffffff;">

<?php
$conexion = mysqli_connect("localhost:3306","root","","cora") or
die("Problemas con la conexión");

$idProducto = mysqli_real_escape_string($conexion, $_REQUEST['Idproducto']);
$productoNuevo = mysqli_real_escape_string($conexion, $_REQUEST['ProductoNuevo']);
$tipoNuevo = mysqli_real_escape_string($conexion, $_REQUEST['TipoNuevo']);
$descripcion = mysqli_real_escape_string($conexion, $_REQUEST['descripcion']);
$precio = mysqli_real_escape_string($conexion, $_REQUEST['Precio']);
$cantidad = mysqli_real_escape_string($conexion, $_REQUEST['Cantidad']);
$categoriaV = mysqli_real_escape_string($conexion, $_REQUEST['CategoriaV']);
$imagen = mysqli_real_escape_string($conexion, $_REQUEST['img']);


$query = "INSERT INTO productos (idproductos, nombre, tipo, descripcion, precio, cantidad, sub_categorias_idsub_categorias, carrito_de_compras_idcarrito_de_compras, imagen)  
VALUES ('$idProducto', '$productoNuevo', '$tipoNuevo', '$descripcion', '$precio', '$cantidad', '$categoriaV', 0, '$imagen')";

$resultado = mysqli_query($conexion, $query) or die("Problemas en el select: " . mysqli_error($conexion));


mysqli_close($conexion);
$text="Producto ingresado con exito";
echo "<div class='contain text-center'>";
echo " <h1 style='padding: 25px'>"."<span class='badge text-bg-outline-success'>".$text."</span>"."</h1>";
echo "<a href='../vender.php'>"."<button type='button' class='btn btn-outline-danger'>"."Atras"."</button>"."</a>";
echo "</div>";
?>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>         