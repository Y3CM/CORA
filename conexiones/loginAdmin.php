<?php
include "conexion.php";
session_start();
$correo = $_POST['correo'];
$contraseña = $_POST['password'];


$validar = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email ='$correo' and contraseña='$contraseña' and rol='Admin' ");

if(mysqli_num_rows($validar) ==1){
$_SESSION['nombre'] = $correo;
header("location:../Admin/home.php");
exit;
} else{
echo '
<script>
alert("Usuario no existe, por favor verifique los datos introducidos");
window.location = "../Admin/inicioadmin.php";
</script>
';
}
exit;
?>