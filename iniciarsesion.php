<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imagenes/CORA.png" type="image/jpeg">
    <title>iniciar sesion</title>
    <link rel="stylesheet" href="CSS/styles.css">
</head>
<body>
    <div class="wrapper">
        <form action="conexiones/login.php" method="post"  class="form">
            <h1 class="title">inicio</h1>
            <div class="inp">
                <input type="text" name="correo" class="input" placeholder="usuarios">
                <i class="fa-solid fa-user"></i>
            </div>

            <div class="inp">
                <input type="password" name="password"  class="input" placeholder="contraseña">
                <i class="fa-solid fa-user"></i>

            </div>
            <button class="sumbit" name="btn_inicio">iniciar sesion</button>
            <p class="footer">¿No tienes cuenta? <a href="registro.php" class="link">por favor,registrate</a></p><br>
            <a href="index.php"> <button  type="button">Atras</button></a>
        </form>
        <div></div>
        <div class="banner">
            <h1 class="wel_text">Bienvenido <br/></h1>
            <p class="para"><br/>login</p>
        </div>
</body>
</html> 