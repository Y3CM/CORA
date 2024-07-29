
  <header>
  <nav class="navbar sticky-top navbar-expand-lg bg-body-secondary">
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
              <li><a class="dropdown-item" href="plantulas.php">Plantulas</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="productos.php">Productos</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="tierras.php">Tierras</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="terrenos.php">Terrenos</a></li>
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
       <!--  <a href="iniciarsesion.php"><button class="btn btn-outline-success"><i class="fa-solid fa-arrow-right-to-bracket"></i> Iniciar sesion</button></a>
        <a href="registro.php"> <button  class="btn btn-outline-success">Registro</button></a> -->
        <a href="conexiones/cerrar.php"><button class="btn btn-outline-danger"><i class="fa-solid fa-arrow-right-to-bracket"></i> Cerrar Sesion</button></a>
    </div>
    </div>
    
  </nav>
  </header>

  