<?php session_start(); ?>
<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="imagenes/CORA.png" type="image/jpeg">
  <title>CORA</title>
  <script src="https://kit.fontawesome.com/25d245ab67.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <?php
  include "conexiones/conexion.php";
  include "conexiones/config.php";
  ?>
  <nav class="navbar navbar sticky-top navbar-expand-lg bg-body-secondary">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><img src="imagenes/CORA.png" width="45px" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categorias
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="Categorias/plantulas.php">Plantulas</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="Categorias/productos.php">Productos</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="Categorias/tierras.php">Tierras</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="Categorias/terrenos.php">Terrenos</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="offcanvas" href="#offcanvasDark" role="button" aria-controls="offcanvasDark">
              Todo
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="vistacarrito.php"><i class="fa-solid fa-cart-plus">
              (<?php
                echo (empty($_SESSION['CARRITO'])) ? 0 : count($_SESSION['CARRITO']);
               ?>)</i></a>
          </li>
        </ul>
        <form class="d-flex" style="padding-right: 70px;" role="search" id="content" action="buscar.php" method="post">
          <input class="form-control" type="text" placeholder="Buscar" id="campo" name="campo" aria-label="Search">
          <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>

        <a href="iniciarsesion.php"><button class="btn btn-outline-success"><i class="fa-solid fa-arrow-right-to-bracket"></i> Iniciar sesion</button></a>
      </div>
    </div>
    <a href="registro.php"> <button type="button" class="btn btn-outline-success">
        Registro
      </button></a>
  </nav>
  <div class="contain text-center" style="padding: 25px 0px 0px 0px;">
    <ul class="nav justify-content-center">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#list-item-2">Promos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#list-item-4">Lo mas Top</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="vender.php">Vender</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#list-item-3">Solo Hoy!</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="blogg/blogg.php">Blogg</a>
      </li>
    </ul>

    <div class="offcanvas offcanvas-start show text-bg-secondary" tabindex="-1" id="offcanvasDark" aria-labelledby="offcanvasDarkLabel">
      <div class="text-center">
        <h5 class="offcanvas-title" id="offcanvasDarkLabel"><img src="imagenes/CORA.png" class="rounded mx-auto d-block" width="50px" alt="logo">CORA</h5>
      </div>
      <div class="offcanvas-header">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <div>
          <div class="list-group">
            <a href="Categotrias/plantulas.php" class="list-group-item list-group-item-action list-group-item-success"><i class="fa-solid fa-plant-wilt"></i> Plantulas</a>
            <a href="Categorias/productos.php" class="list-group-item list-group-item-action list-group-item-success"><i class="fa-solid fa-bag-shopping"></i> Productos</a>
            <a href="Categorias/tierras.php" class="list-group-item list-group-item-action list-group-item-success"><i class="fa-solid fa-seedling"></i> Tierras</a>
            <a href="Categorias/terrenos.php" class="list-group-item list-group-item-action list-group-item-success"><i class="fa-solid fa-mound"></i> Terrenos</a>
            <a href="blogg/blogg.php" class="list-group-item list-group-item-action list-group-item-success"><i class="fa-solid fa-blog"></i> Blogg</a>
            <a href="#list-item-2" class="list-group-item list-group-item-action list-group-item-success"><i class="fa-solid fa-certificate"></i> Promos</a>
            <a href="Categorias/productos.php" class="list-group-item list-group-item-action list-group-item-success"><i class="fa-solid fa-apple-whole"></i> Frutas</a>
            <a href="Categorias/tierras.php" class="list-group-item list-group-item-action list-group-item-success"><i class="fa-solid fa-mosquito"></i> Fertilizantes</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-success"><i class="fa-solid fa-question"></i> Ayuda</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" style="padding: 25px 0px 25px 0px;">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="imagenes/blueberries-2278921_640.jpg" class="d-block w-100" height="400px" width="100%" alt="Imagen de un producto">
        </div>
        <div class="carousel-item">
          <img src="imagenes/fruits-1114060_640.jpg" class="d-block w-100" height="400px" alt="Imagen de promos">
        </div>
        <div class="carousel-item">
          <img src="imagenes/chalkboard-620316_640.jpg" class="d-block w-100" height="400px" alt="Imagen sobre el blog">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <h3 id="list-item-2" style="padding: 25px;">OFERTAS POR TIEMPO LIMITADO <span class="badge bg-secondary">New</span></h3>
    <?php include "conexiones/carrito.php"; ?>
    <a href="#"> <img src="imagenes/Promos.webp" alt="promos" style="padding-bottom: 25px ;" width="100%"></a>
    <h3 id="list-item-3" style="padding: 25px;">¡SOLO POR HOY! <span class="badge bg-secondary">New</span></h3>

    <div class="container-fluid text-center">
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <?php
    $sql = $conexion->query("SELECT * FROM productos");
    while ($datos = $sql->fetch_object()) { ?>
      <div class="col">
        <div class="card h-100">
          <img src="<?= $datos->imagen ?>" class="card-img-top" alt="<?= $datos->nombre ?>" height="150">
          <div class="card-body">
            <h5 class="card-title"><?= $datos->nombre ?></h5>
            <p class="card-text">$<?= $datos->precio ?></p>
            <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalDescripcion<?= $datos->idproductos ?>">
              Descripción
            </button>
            <form action="" method="post" class="mt-2">
              <input type="hidden" name="ID" value="<?= openssl_encrypt($datos->idproductos, COD, KEY); ?>">
              <input type="hidden" name="nombre" value="<?= openssl_encrypt($datos->nombre, COD, KEY); ?>">
              <input type="hidden" name="precio" value="<?= openssl_encrypt($datos->precio, COD, KEY); ?>">
              <input type="hidden" name="cantidad" value="<?= openssl_encrypt(1, COD, KEY); ?>">
              <button type="submit" class="btn btn-primary btn-sm" name="btnAccion" value="Agregar">Agregar al carrito</button>
            </form>
          </div>
        </div>
      </div>

      <div class="modal fade" id="modalDescripcion<?= $datos->idproductos ?>" tabindex="-1" aria-labelledby="modalDescripcionLabel<?= $datos->idproductos ?>" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalDescripcionLabel<?= $datos->idproductos ?>">Descripción de <?= $datos->nombre ?></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <?= $datos->descripcion ?>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>

    </div>

  </div>
  <br>
  <footer class="container-fluid" style="background-color: rgb(31, 30, 30); height: 250px; color: aliceblue;">
    <div class="row align-items-center">
      <div class="col-4 align-items-center" style="padding: 50px ;">
        <a href="index.php"><img src="imagenes/CORA.png" class="img-fluid" style="height: 100px;" alt="..."></a>
      </div>
      <div class="col-4 row align-items-center" style="padding: 20px ; text-align: center;">
        <div class="footer-links">
          <ul style="display:block">
            <li style="list-style-type:none; padding-top: 10px"><a style="text-decoration: none; color:aliceblue" href="index.php"><i class="fa-solid fa-house" style="color: #63E6BE;"></i> Inicio</a></li>
            <li style="list-style-type:none; padding-top: 10px"><a style="text-decoration: none; color:aliceblue" href="#"><i class="fa-solid fa-location-dot" style="color: #63E6BE;"></i> Ubicación</a></li>
            <li style="list-style-type:none; padding-top: 10px"><a style="text-decoration: none; color:aliceblue" href="#"><i class="fa-solid fa-question" style="color: #63E6BE;"></i> CoraLine</a></li>
            <li style="list-style-type:none; padding-top: 10px"><a style="text-decoration: none; color:aliceblue" href="#"><i class="fa-solid fa-phone" style="color: #63E6BE;"></i> Contacto</a></li>
          </ul>
        </div>
      </div>
      <div class="col-4 align-items-center" style="padding: 20px ; text-align: right;">
        <a href="index.php"><img src="imagenes/CORA.png" class="img-fluid" style="height: 100px;" alt="..."></a>
      </div>
    </div>
    <div class="container text-center">
      <div class="row align-items-end">
        <div class="col">
          &copy;2024 Cosechando Raíces CORA. Todos los derechos reservados.
        </div>
      </div>
    </div>
  </footer>
 <script>
    function getData() {
        let input = document.getElementById("campo").value;
        let content = document.getElementById("content");
        let url = "buscar.php";
        let formData = new FormData();
        formData.append('campo', input);

        fetch(url, {
            method: "POST",
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            
            console.log(data);
        })
        .catch(err => console.log(err));
    }
</script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>