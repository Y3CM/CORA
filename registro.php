<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iniciar sesion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" > 
</head>
<body style="background-color:antiquewhite;">
<div class="container">
        <form style="padding: 50px;" method="POST"  class="row g-3 needs-validation">
            <h1 class="title">Registro</h1>
              <div class="col-md-4 position-relative">
                <label for="validationTooltip01" class="form-label"></label>
                <input type="text" name="user" class="form-control"  placeholder="nombre" required>
                <div class="valid-tooltip">
                  Looks good!
                </div>
              </div>
              <div class="col-md-4 position-relative">
                <label for="validationTooltip02" class="form-label"></label>
                <input type="text" name="apellido" class="form-control"  placeholder="apellido" required>
                <div class="valid-tooltip">
                  Looks good!
                </div>
              </div>
              <div class="col-md-4 position-relative">
                <label for="validationTooltipUsername" class="form-label"></label>
                <div class="input-group has-validation">
                  <label class="input-group-text" id="validationTooltipUsernamePrepend">@</label>
                  <input type="text" name="email" class="form-control"  aria-describedby="validationTooltipUsernamePrepend" placeholder="email" required>
                  <div class="invalid-tooltip">
                    Please choose a unique and valid username.
                  </div>
                </div>
              </div>
              <div class="col-md-5 position-relative">
                <label for="validationTooltip03" class="form-label"></label>
                <input type="text" name="num_doc" class="form-control"  placeholder="Documento" required>
                <div class="invalid-tooltip">
                  Please provide a valid city.
                </div>
              </div>
              <div class="col-md-3 position-relative">
                <label for="validationTooltip04" class="form-label"></label>
                <select class="form-select" name="tipo_doc"  required>
                  <option selected disabled>tipo doc</option>
                  <option value="CC">C.C</option>
                  <option value="PA">PA</option>
                  <option value="CE">C.E</option>
                </select>
                <div class="invalid-tooltip">
                  Please select a valid state.
                </div>
              </div>
              <div class="col-md-4 position-relative">
                <label for="validationTooltip05" class="form-label"></label>
                <input type="text" class="form-control"  name="movil" placeholder="celular" required>
                <div class="invalid-tooltip">
                  Please provide a valid zip.
              </div>
              

               </div>

          <div class="col-md-4 position-relative">
              <label for="validationTooltip02" class="form-label"></label>
              <input type="text" class="form-control"  name="pais_res" placeholder="pais residencia" required>
              <div class="valid-tooltip">
                Looks good!
              </div>
            </div>
            <div class="col-md-4 position-relative">
              <label for="validationTooltip05" class="form-label"></label>
              <input type="text" class="form-control" name="ciudad" placeholder="ciudad residencia" required>
              <div class="invalid-tooltip">
                Please provide a valid zip.
              </div>
             </div>
             <div class="col-md-4 position-relative">
              <label for="validationTooltip02" class="form-label"></label>
              <input type="text" class="form-control"  name="direccion" placeholder="direccion" required>
              <div class="valid-tooltip">
                Looks good!
              </div>
            </div>
            <div class="col-md-6 position-relative">
              <label for="validationTooltip02" class="form-label"></label>
              <input type="password" name="contraseña" class="form-control"  placeholder="contraseña" required>
              <div class="valid-tooltip">
                Looks good!
              </div>
            </div>
          </div>
                <div class="contain text-center">
       <button type="submit" name="btn_registro" value="ok" class="btn btn-success ">Registrar</button>   
    </div>
        </div>
        </form>
        <?php  
        include "conexiones/conexion.php";
        include "conexiones/registrar.php";
        ?>
        <footer class="container-fluid" style="background-color: rgb(31, 30, 30); height: 250px; color: aliceblue;">
    <div class="row align-items-center">
       <div class="col-4 align-items-center" style="padding: 50px ;">
          <a href="landing.php"><img src="imagenes/CORA.png" class="img-fluid" style="height: 100px;" alt="..."></a> 
      </div>   
      <div class="col-4 row align-items-center" style="padding: 20px ; text-align: center;">
      <div class="footer-links">
            <ul style="display:block">
                <li style="list-style-type:none; padding-top: 10px"><a style="text-decoration: none; color:aliceblue" href="landing.php"><i class="fa-solid fa-house" style="color: #63E6BE;"></i> Inicio</a></li>
                <li style="list-style-type:none; padding-top: 10px"><a style="text-decoration: none; color:aliceblue" href="#"><i class="fa-solid fa-location-dot" style="color: #63E6BE;"></i> Ubicación</a></li>
               <li style="list-style-type:none; padding-top: 10px"><a style="text-decoration: none; color:aliceblue" href="#"><i class="fa-solid fa-question" style="color: #63E6BE;"></i> CoraLine</a></li>
                <li style="list-style-type:none; padding-top: 10px"><a style="text-decoration: none; color:aliceblue" href="#"><i class="fa-solid fa-phone" style="color: #63E6BE;"></i> Contacto</a></li>
            </ul>
          </div>
      </div>  
      <div class="col-4 align-items-center" style="padding: 20px ; text-align: right;">
          <a href="landing.php"><img src="imagenes/CORA.png" class="img-fluid" style="height: 100px;" alt="..."></a> 
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html> 