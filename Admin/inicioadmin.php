<!DOCTYPE html>
<html lang="es">
<head>
    <style>

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-color: #0af76d;
    color: #fff;
    padding: 10px 0;
    text-align: center;
}

.logo img {
    max-width: 150px;
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
}

.buscar {
    margin-top: 10px;
}

.buscar input[type="text"] {
    padding: 5px;
}

.buscar button {
    padding: 5px 10px;
    background-color: #fff;
    color: #333;
    border: none;
    cursor: pointer;
}

main {
    padding: 20px;
}

.productos {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
}

.producto {
    width: 200px;
    margin-bottom: 20px;
}

.producto img {
    max-width: 100%;
}

footer {
    background-color: #0af76d;
    color: #fff;
    padding: 20px 0;
    text-align: center;
}

footer .redes-sociales img {
    max-width: 30px;
    margin: 0 5px;
}

body{
    width: 100vw;
    height: 100vh;
    display: grid;
    justify-content: center;
    align-content: center;
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background: #9B9B9B;
}
*{
    margin:0;
    padding: 0;
    font-family: arial;
    color: #fff;
}

.webkit-input-placeholder{
    color: #eee;
}

.wrapper{
    position: relative;
    width: 800px;
    height: 65vh;
    display: grid;
    grid-template-columns: 1fr 1fr;
    border: 3px solid #535753;
    box-shadow: 0 0 50px 0 #4e4d4d;
}

.form{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.title{
    font-size: 35px;
    color: #ffffff;
}
    
.inp{
    padding-bottom: 10px;
    border-bottom: 2px solid #eeee;

}

.input{
    border: none;
    outline: none;
    background: none;
    width: 260px;
    margin-top: 40px;
    padding-right: 10px;
    font-size: 17px;
    color: rgb(0, 0, 0);

}

.banner{
    position: absolute;
    top: 0;
    right: 0;
    width: 450px;
    height: 100%;
    background: linear-gradient(to right,#02FF84,#000000);
    clip-path: polygon(0 0 ,100% 0, 100% 100%,60% 100%);
    padding-right:70px ;
    text-align: right;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-end;
}

.wel_text{
    font-size: 40px;
    margin-top: -50px;
    line-height: 50px;
}

.para{
    margin-top: 10px;
    font-size: 18px;
    line-height: 24px;
    letter-spacing: 1px;
}

.sumbit{
    border: none;
    outline: none;
    width: 288px;
    margin-top: 25px;
    padding: 10px 0;
    font-size: 20px;
    border-radius: 40px;
    letter-spacing: 1px;
    cursor: pointer;
    background: linear-gradient(45deg,#02FF84,#000000);
    
}

.footer{
    margin-top: 30px;
    letter-spacing: 0.5px;
    font-size: 14px;
    color: #000000;
}

.link{
    color: #0e8d94;
}
button{
background: linear-gradient(45deg,#F28D01,#00ab00);
padding: 5px;
border-radius: 10px;
cursor: pointer;
width: 100px;
}

    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iniciar sesion</title>   
</head>
<body>
    <div class="wrapper">
        <form action="../conexiones/loginAdmin.php" method="post"  class="form">
            <h1 class="title">ADMIN</h1>
            <div class="inp">
                <input type="text" name="correo" class="input" placeholder="usuario">
                <i class="fa-solid fa-user"></i>
            </div>

            <div class="inp">
                <input type="password" name="password"  class="input" placeholder="contraseña">
                <i class="fa-solid fa-user"></i>

            </div>
            <button class="sumbit" name="btn_inicio">iniciar sesion</button>
        </form>
        <div></div>
        <div class="banner">
            <h1 class="wel_text">Bienvenido <br/></h1>
            <p class="para"><br/>Admin</p>
        </div>
</body>
</html>     