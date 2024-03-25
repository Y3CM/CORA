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
              <a class="nav-link " aria-current="page" href="blogg_4.php">Home</a>
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
              <a class="nav-link " aria-current="page" href="#"><i class="fa-solid fa-cart-plus"></i></a>
            </li>
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
          <a href="blogg/blog.html" class="list-group-item list-group-item-action list-group-item-success"><i class="fa-solid fa-blog"></i> Blogg</a>
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
      <h1>5 técnicas de cultivo para pasarte a la agricultura ecológica</h1><img src="imagenes/PORTADA_TECNICAS.jpg" alt="banner1" style="height: 400px;" width="100%">
      
      <div><br><i class="fa-regular fa-user fa-2xl">Felipe</i></div>
      <br>
    <h3>Vamos a aprender</h3>
    <p style="font-size: 20px;">En un mundo donde el consumo de alimentos básicos provenientes de la tierra es fundamental, nos enfrentamos al desafío del cambio climático, que amenaza la producción agrícola. Para contrarrestar estos efectos negativos, la agricultura ecológica emerge como una solución crucial, buscando técnicas de cultivo sostenibles y respetuosas con el medio ambiente.</p>
      
    <p style="font-size: 20px;">La agricultura ecológica se centra en obtener alimentos de alta calidad mientras se preserva la salud del ecosistema y se conserva la fertilidad del suelo. Esto se logra mediante el uso óptimo de los recursos naturales y evitando el uso de productos químicos dañinos.</p>

    <p style="font-size: 20px;">Para aquellos interesados en incursionar en la agricultura ecológica, existen diversas técnicas de cultivo que pueden ayudar a maximizar la rentabilidad y minimizar el impacto ambiental negativo:</p>

    <br>

    <h3 style="font-size: 20px; "><b>1. Mulching:</b></h3>
    <p style="font-size: 20px;">Consiste en cubrir el suelo con materiales naturales para conservar la humedad y mejorar la calidad del suelo.</p>
    <img src="imagenes/Mulch.jpg" alt="banner1" style="height: 200px; float: left; margin-right: 20px;" width="40%">
    <img src="imagenes/Mulch2.jpg" alt="banner2" style="height: 200px; float: left;" width="40%">
    <br>  
    <div style="clear: both;"></div>

    <h3 style="font-size: 20px; "><b>2. Rotación de cultivos:</b></h3>
    <p style="font-size: 20px;">Alterna los cultivos para evitar el agotamiento del suelo y reducir el riesgo de enfermedades y plagas.</p>
    <img src="imagenes/rotacion1.jpg" alt="banner3" style="height: 200px; float: left; margin-right: 20px;" width="40%">
    <img src="imagenes/rotacion2.jpg" alt="banner4" style="height: 200px; float: left;" width="40%">
    <br>
    <div style="clear: both;"></div>

    <h3 style="font-size: 20px; "><b>3. Asociaciones de cultivos:</b></h3>
    <p style="font-size: 20px;">Cultivar simultáneamente plantas que se complementen entre sí para aumentar la productividad y reducir problemas de plagas y enfermedades.</p>
    <img src="imagenes/rotaciondecultivos1.jpg" alt="banner5" style="height: 200px; float: left; margin-right: 20px;" width="40%">
    <img src="imagenes/rotaciondecultivos2.jpg" alt="banner6" style="height: 200px; float: left;" width="40%">
    <br>
    <div style="clear: both;"></div>

    <h3 style="font-size: 20px; "><b>4. Abonos orgánicos:</b></h3>
    <p style="font-size: 20px;">Utiliza abonos de origen animal o vegetal en lugar de fertilizantes químicos para mejorar la fertilidad del suelo de manera natural.</p>
    <img src="imagenes/tiposdeabonoorganico.jpg" alt="banner7" style="height: 200px; float: left; margin-right: 20px;" width="40%">
    <img src="imagenes/tiposdeabonoorganico2.jpg" alt="banner8" style="height: 200px; float: left;" width="40%">
    <br>
    <div style="clear: both;"></div>

    <h3 style="font-size: 20px; "><b>5. Control de plagas ecológico:</b></h3>
    <p style="font-size: 20px;">Emplea métodos naturales para controlar las plagas, como la introducción de insectos beneficiosos o la creación de pesticidas naturales.</p>
    <img src="imagenes/controlbiologico.jpg" alt="banner9" style="height: 200px; float: left; margin-right: 20px;" width="40%">
    <img src="imagenes/controlbiologico2.jpg" alt="banner10" style="height: 200px; float: left;" width="40%">
    <br>
    <div style="clear: both;"></div>
    <br>
    <p style="font-size: 20px;">Al adoptar estas técnicas, los agricultores pueden orientar sus actividades hacia la agricultura ecológica, reduciendo costos y aumentando la producción de manera sostenible.</p>
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