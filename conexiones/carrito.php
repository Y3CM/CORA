<?php 
if(isset($_POST['btnAccion'])) {
    switch($_POST['btnAccion']) {
        case 'Agregar':
            if(is_numeric(openssl_decrypt($_POST['ID'],COD,KEY))) {
                $ID=openssl_decrypt($_POST['ID'],COD,KEY);
                /* echo "<div class='alert alert-success' role='alert' style='padding-top:25px;'>
                    ID Agregado correctamente
                </div>"; */
            } else {
                echo "<div class='alert alert-danger' role='alert' style='padding-top:25px;'>
                    Ups eso no tenía que pasar ID
                </div>";
                break;
            }

            if(is_string(openssl_decrypt($_POST['nombre'],COD,KEY))) {
                $NOMBRE=openssl_decrypt($_POST['nombre'],COD,KEY);
                echo "<div class='alert alert-success' role='alert' style='padding-top:25px;'>
                    Producto Agregado correctamente
                </div>";
            } else {
                echo "<div class='alert alert-danger' role='alert' style='padding-top:25px;'>
                    Ups eso no tenía que pasar PRODUCTO
                </div>";
                break;
            }

            if(is_numeric(openssl_decrypt($_POST['precio'],COD,KEY))) {
                $PRECIO=openssl_decrypt($_POST['precio'],COD,KEY);
               /*  echo "<div class='alert alert-success' role='alert' style='padding-top:25px;'>
                    PRECIO Agregado correctamente
                </div>"; */
            } else {
                echo "<div class='alert alert-danger' role='alert' style='padding-top:25px;'>
                    Ups eso no tenía que pasar PRECIO
                </div>";
                break;
            }

            if(is_numeric(openssl_decrypt($_POST['cantidad'],COD,KEY))) {
                $CANTIDAD=openssl_decrypt($_POST['cantidad'],COD,KEY);
               /*  echo "<div class='alert alert-success' role='alert' style='padding-top:25px;'>
                    CANTIDAD Agregado correctamente
                </div>"; */
            } else {
                echo "<div class='alert alert-danger' role='alert' style='padding-top:25px;'>
                    Ups eso no tenía que pasar CANTIDAD
                </div>";
                break;
            }

            if(!isset($_SESSION['CARRITO'])) {
                $producto=array(
                    'ID'=>$ID,
                    'NOMBRE'=>$NOMBRE,
                    'PRECIO'=>$PRECIO,
                    'CANTIDAD'=>$CANTIDAD
                );
                $_SESSION['CARRITO'][0]=$producto;
            } else {
                $NumProductos=count($_SESSION['CARRITO']);
                $producto=array(
                    'ID'=>$ID,
                    'NOMBRE'=>$NOMBRE,
                    'PRECIO'=>$PRECIO,
                    'CANTIDAD'=>$CANTIDAD
                );
                $_SESSION['CARRITO'][$NumProductos]=$producto;
            }

            $mensaje=print_r($_SESSION,true);
            break;
            
            case "Eliminar":
                if(is_numeric(openssl_decrypt($_POST['ID'],COD,KEY))) {
                    $ID=openssl_decrypt($_POST['ID'],COD,KEY);
                    foreach($_SESSION['CARRITO'] as $indice => $producto){
                        echo "ID del producto en el carrito: " . $producto['ID'] . "<br>"; 
                        echo "ID que estamos buscando eliminar: " . $ID . "<br>";
                        if($producto['ID'] === $ID){
                            unset($_SESSION['CARRITO'][$indice]);
                            $_SESSION['CARRITO'] = array_values($_SESSION['CARRITO']);
                            echo "<div class='alert alert-success' role='alert' style='padding-top:25px;'>Producto eliminado correctamente</div>";
                            break; 
                        }
                    }
                } else {
                    echo "<div class='alert alert-danger' role='alert' style='padding-top:25px;'>
                        Ups eso no tenía que pasar ID
                    </div>";
                }
                break;
            
    }
} 
?>