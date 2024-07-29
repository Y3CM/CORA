-- este trigger es para registrar los cambios del usuario en la tabla modificaciones

DELIMITER //

CREATE TRIGGER after_usuario_update
AFTER UPDATE ON `Cora`.`usuarios`
FOR EACH ROW
BEGIN
    
    INSERT INTO `Cora`.`modificaciones_usuarios` (
        `num_doc`, `old_name`, `new_name`, `old_email`, `new_email`, `operation_type`
    )
    VALUES (
        OLD.num_doc, OLD.name, NEW.name, OLD.email, NEW.email, 'UPDATE'
    );
END //

DELIMITER ;

-- este trigger se ejecuta al momento de actualizar la fecha de ingreso de un producto

DELIMITER //

CREATE TRIGGER actualizar_fecha_producto
BEFORE UPDATE ON productos
FOR EACH ROW
BEGIN
  SET NEW.updated_at = CURRENT_TIMESTAMP;
END //

DELIMITER ;

-- este se ejecuta despues de que se inserte los valores de cobro de algun pedido

DELIMITER //

CREATE TRIGGER actualizar_total_pedido_after_insert
AFTER INSERT ON detalles
FOR EACH ROW
BEGIN
    DECLARE subtotal DECIMAL(10, 2);
    DECLARE descuento DECIMAL(10, 2);
    DECLARE impuesto DECIMAL(10, 2);
    DECLARE total DECIMAL(10, 2);

    SELECT SUM(p.precio * d.cantidad) INTO subtotal
    FROM detalles d
    JOIN productos p ON d.productos_id = p.id
    WHERE d.pedidos_id = NEW.pedidos_id;

    SELECT descuento INTO descuento
    FROM pedidos
    WHERE id = NEW.pedidos_id;

    SET subtotal = subtotal - IFNULL(descuento, 0);
    SET impuesto = calcular_impuesto(subtotal);
    SET total = subtotal + impuesto;

    UPDATE pedidos
    SET total = total, impuesto = impuesto
    WHERE id = NEW.pedidos_id;
END //

DELIMITER ;

-- este se ejecuta despues de que se modifique algunos los valores de cobro de algun pedido

DELIMITER //

CREATE TRIGGER actualizar_total_pedido_after_update
AFTER UPDATE ON detalles
FOR EACH ROW
BEGIN
    DECLARE subtotal DECIMAL(10, 2);
    DECLARE descuento DECIMAL(10, 2);
    DECLARE impuesto DECIMAL(10, 2);
    DECLARE total DECIMAL(10, 2);

    SELECT SUM(p.precio * d.cantidad) INTO subtotal
    FROM detalles d
    JOIN productos p ON d.productos_id = p.id
    WHERE d.pedidos_id = NEW.pedidos_id;

    SELECT descuento INTO descuento
    FROM pedidos
    WHERE id = NEW.pedidos_id;

    SET subtotal = subtotal - IFNULL(descuento, 0);
    SET impuesto = calcular_impuesto(subtotal);
    SET total = subtotal + impuesto;

    UPDATE pedidos
    SET total = total, impuesto = impuesto
    WHERE id = NEW.pedidos_id;
END //

DELIMITER ;
