<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <style>
    p {
      text-align: justify;
    }

  </style>
    <title>CORA</title>
    <script src="https://kit.fontawesome.com/25d245ab67.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" >  
    <script src="https://kit.fontawesome.com/25d245ab67.js" crossorigin="anonymous"></script>
  </head>
<body>
  <div class="prueba">
    <nav  class="navbar navbar sticky-top navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="imagenes/CORA.png" width="70px" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent" >
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="blogg_2.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Mis pedidos</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categorias
              </a>
              <ul class="dropdown-menu" >
                <li><a class="dropdown-item" href="#">Plantulas</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Productos</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Tierras</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Terrenos</a></li>
              </ul>
            </li>
            <li class="nav-item">
            <a class="nav-link" data-bs-toggle="offcanvas" href="#offcanvasDark" role="button" aria-controls="offcanvasDark">
              Todo
            </a>
          </li>
                <li class="nav-item">
                <a class="nav-link " aria-current="page" href="vistacarrito.php"><i class="fa-solid fa-cart-plus">(<?php 
                echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);
                ?>)</i></a>
          </ul>
          <form class="d-flex" style="padding-right: 70px ;" role="search" action="buscar.php" method="get">
    
            <input class="form-control" type="search" placeholder="Buscar" name="termino" id="buscar" aria-label="Search">
            <button  type="button" onclick="buscar_ahora($('#buscar').val());" class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
          </form>
          <a href="index.html"><button class="btn btn-outline-danger"><i class="fa-solid fa-arrow-right-to-bracket"></i> Cerrar Sesion</button></a>
        </div>
      </div>
      
    </nav>
  <div class="contain text-center" style="padding: 25px 0px 0px 0px;">
    <ul class="nav justify-content-center" >
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="landing.php">Tienda CORA</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Ayuda</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#">Tendencia</a>
        </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Nuevas publicaciones</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">recientes</a>
      </li>
    </ul>
  
  <div class="offcanvas offcanvas-start show text-bg-dark" tabindex="-1" id="offcanvasDark" aria-labelledby="offcanvasDarkLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasDarkLabel" ><img src="imagenes/cora.png" width="100px" alt="logo">CORA</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body"> 
      <div>
        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action list-group-item-success"><i class="fa-solid fa-plant-wilt"></i> Plantulas</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-success"><i class="fa-solid fa-bag-shopping"></i> Productos</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-success"><i class="fa-solid fa-seedling"></i> Tierras</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-success"><i class="fa-solid fa-mound"></i> Terrenos</a>
          <a href="blogg.php" class="list-group-item list-group-item-action list-group-item-success"><i class="fa-solid fa-blog"></i> Blogg</a>
          <a href="#list-item-2" class="list-group-item list-group-item-action list-group-item-success"><i class="fa-solid fa-certificate"></i> Promos</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-success"><i class="fa-solid fa-apple-whole"></i> Frutas</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-success"><i class="fa-solid fa-mosquito"></i> Fertilizantes</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-success"><i class="fa-solid fa-question"></i> Ayuda</a>
        </div>    
       </div>
    </div>
  </div>
</div>
 
<div class="container">
  <div class="row">
    <div class="col-9">
      <br>
      <h1>Otros cultivos mas comunes de Colombia aparte del café</h1><img src="imagenes/cafe.jpeg" alt="banner1" style="height: 400px;" width="100%">
      
      <div><br><i class="fa-regular fa-user fa-2xl">Felipe</i></div>
      <br>
    <h3>Conozca más cultivos</h3>
    <p style="font-size: 20px;">Es bien sabido que el cultivo más famoso de Colombia es el café, sin embargo, Los colombianos tiene mucho mas que eso, Y vamos a enseñar más sobre estos cultivos.</p>

    <br>
    <h3>1. Palma de aceite</h3>
    <img src="imagenes/palmadeaceite.jpg" alt="banner2" style="height: 300px;" width="100%">
    <p style="font-size: 20px;">La palma de aceite se utiliza en una amplia variedad de aplicaciones industriales, incluyendo la fabricación de jabones, detergentes, cosméticos, velas, tinta para impresión, plastificantes, esterilizadores y grasas lubricantes para maquinaria.</p>

    <br>
    <h3>2. Arroz</h3>
    <img src="imagenes/arroz.jpg" alt="banner3" style="height: 300px;" width="100%">
    <p style="font-size: 20px;">Como la mayoria de paises tambien se cultiva el arroz que se puede hacer paellas, ensaladas, arroces caldosos y guarniciones. En Resumen, es comestible.</p>

    <br>
    <h3>3. Yuca</h3>
    <img src="imagenes/yuca.jpg" alt="banner4" style="height: 300px;" width="100%">
    <p style="font-size: 20px;">La Yuca es uno de los mas famosos, que con sus raíces almacena reservas alimenticias y son fuentes de carbohidratos ideales para la elaboración de harina con alto porcentaje de proteínas, que se utiliza en mezclas para coladas, sopas y galletería, o como ingrediente principal de los afamados tamales, panes de yuca o casabe (especie de tortilla).</p>

    <br>
    <h3>4. Cacao</h3>
    <img src="imagenes/cacao.jpg" alt="banner5" style="height: 300px;" width="100%">
    <p style="font-size: 20px;">El Cacao, es como un segundo cafe, Aparte para hacer chocolate se usa en la producción de dulces, medicamentos y productos de belleza como labiales, cremas y champús. La pasta o licor de cacao se emplea para hacer chocolate.</p>

    <br>
    <h3>5. Platano</h3>
    <img src="imagenes/platano.jpg" alt="banner6" style="height: 300px;" width="100%">
    <p style="font-size: 20px;">El plátano, gracias a su contenido de azúcar, puede ayudar a prevenir la sensación de náuseas matutinas. Además, es beneficioso para aquellos que sufren de úlceras estomacales, ya que puede proteger las paredes del estómago. También se ha asociado su consumo con la prevención del cáncer de colon.</p>

    <br>
    <p style="font-size: 20px;">Como podemos ver hay muchos mas cultivos de Colombia que solo café, y hay muchos mas. Aparte son cultivos que valen la pena probarlos y reconocerlo.</p>
    </div>

      <div class="col-3"> <ul class="list-group list-group-flush">
        <br>
        <br>
        <br>

        <a href="blogg_2.php">
          <li class="list-group-item"><img src="imagenes/referencia1.jpg" alt="prueba1" style="height: 100px;" width="100%">
            <p>Otros cultivos mas comunes de Colombia aparte del café</p></li>
          </a>
  
          <a href="blogg_3.php">
          <li class="list-group-item"><img src="imagenes/referencia2.jpeg" alt="prueba2" style="height: 100px; width: 100%;">
          <p>El Motor Invisible de Colombia: El Impacto Social y Económico de la Agricultura</p></li>
        </a>
  
        <a href="blogg_4.php">
          <li class="list-group-item"><img src="imagenes/referencia3.jpg" alt="prueba3" style="height: 100px; width: 100%;">
          <p>5 técnicas de cultivo para pasarte a la agricultura ecológica</p></li>
        </a>
  
        <a href="blogg_5.php">
          <li class="list-group-item"><img src="imagenes/referencia4.jpg" alt="prueba4" style="height: 100px; width: 100%;">
            <p>Cultivando el Futuro: Desafíos en la Agricultura Colombiana</p></li>
        </a>
       
      </ul> </div>
        
      
         </div>
</div>

<div class="container-fluid" style="background-color: rgb(31, 30, 30); height: 250px; color: aliceblue;">
<div class="col-md-12 float-md-end mb-3 ms-md-3" style="padding: 20px ;">
  <div class="row align-items-center">
    <div class="col" style="text-align: justify;">
      <a href=""><img src="imagenes/CORA.png" class="img-fluid" style="height: 100px;" alt="..."></a></div>
    
      <div class="col-md-3 float-md-end mb-3 ms-md-3" style="padding-top: 20px;">
        <div class="row align-items-center">
          <div class="col-md-12 position-relative" style="text-align: right;">
            <a href=""><img src="imagenes/CORA.png" class="img-fluid" style="height: 100px;" alt="..."></a></div>
  </div>
</div>
</div>
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>