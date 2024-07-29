-- Esta funcion es para calcular si el pedido adquiere alfyn descuento

DELIMITER //

CREATE FUNCTION calcular_descuento(carrito_id INT)
RETURNS DECIMAL(10, 2)
DETERMINISTIC
BEGIN
    DECLARE cantidad_productos INT;
    DECLARE descuento DECIMAL(10, 2);

    
    SELECT COUNT(*)
    INTO cantidad_productos
    FROM `Cora`.`carrito_productos`
    WHERE `carrito_id` = carrito_id;

    
    SET descuento = 0;

    
    IF cantidad_productos > 10 THEN
        SET descuento = 0.10; 
    END IF;

    RETURN descuento;
END //

DELIMITER ;

-- esta funcion es para calcular el total de la compra

DELIMITER //

CREATE FUNCTION calcular_total(subtotal INT, descuento INT, impuesto INT)
RETURNS INT
DETERMINISTIC
BEGIN
  DECLARE total INT;
  SET total = subtotal - descuento + impuesto;
  RETURN total;
END //

DELIMITER ;

-- esta funcion es para saber si el producto se esta quedando sin stock

DELIMITER //

CREATE FUNCTION verificar_stock(producto_id INT, cantidad INT)
RETURNS BOOLEAN
DETERMINISTIC
BEGIN
  DECLARE stock_disponible INT;
  SELECT stock INTO stock_disponible
  FROM productos
  WHERE id = producto_id;

  RETURN stock_disponible >= cantidad;
END //

DELIMITER ;

-- esta funcion es para calcular el total del carrito a qui solo muestra informacion de los productos sin descuento o impuestos 

DELIMITER //

CREATE FUNCTION calcular_total_carrito(carrito_id INT)
RETURNS INT
DETERMINISTIC
BEGIN
  DECLARE total INT;
  SET total = (
    SELECT SUM(p.precio * cp.cantidad)
    FROM carrito_productos cp
    JOIN productos p ON cp.producto_id = p.id
    WHERE cp.carrito_id = carrito_id
  );

  RETURN total;
END //

DELIMITER ;

-- esta funcion es para calcular el iva de cada compra

DELIMITER //

CREATE FUNCTION calcular_impuesto(subtotal DECIMAL(10, 2))
RETURNS DECIMAL(10, 2)
DETERMINISTIC
BEGIN
    RETURN subtotal * 0.19;
END //

DELIMITER ;











