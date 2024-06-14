
<main class="container">
    
    <section id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" style="padding: 25px 0px 25px 0px;">
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
    </section>

    <section>
    <h3 id="list-item-2" style="padding: 25px;">OFERTAS POR TIEMPO LIMITADO <span class="badge bg-secondary">New</span></h3>
    <?php require_once "conexiones/carrito.php"; ?>
    <a href="#"> <img src="imagenes/Promos.webp" alt="promos" style="padding-bottom: 25px ;" width="100%"></a>
    </section>

    <section>
    <h3 id="list-item-3" style="padding: 25px;">¡SOLO POR HOY! <span class="badge bg-secondary">New</span></h3>
    <div class="container-fluid text-center">
        <div class="row row-cols-1 row-cols-md-3 g-4">
         <?php
         include "conexiones/conexion.php";
         $sql = $conexion->query("SELECT * FROM productos");
        while ($datos = $sql->fetch_object()) { 
            ?>
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
</section>
  </div>

</main>