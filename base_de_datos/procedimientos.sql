
-- este procedimiento es para agregar productos

DELIMITER //

CREATE PROCEDURE agregar_producto(
    IN p_name VARCHAR(45),
    IN p_descripcion VARCHAR(45),
    IN p_precio INT,
    IN p_stock INT,
    IN p_imagen VARCHAR(255),
    IN p_user_id INT,
    IN p_categoria_id INT
)
BEGIN
    INSERT INTO `Cora`.`productos` (
        `name`, `descripcion`, `precio`, `stock`, `imagen`, `created_at`, `user_id`, `categoria_id`
    ) VALUES (
        p_name, p_descripcion, p_precio, p_stock, p_imagen, NOW(), p_user_id, p_categoria_id
    );
END //

DELIMITER ;

-- este procedimiemtp es para modificar el stock de un producto

DELIMITER //

CREATE PROCEDURE actualizar_stock_producto(
    IN p_producto_id INT,
    IN p_user_id INT,
    IN p_categoria_id INT,
    IN p_nuevo_stock INT
)
BEGIN
    UPDATE `Cora`.`productos`
    SET `stock` = p_nuevo_stock, `updated_at` = NOW()
    WHERE `id` = p_producto_id AND `user_id` = p_user_id AND `categoria_id` = p_categoria_id;
END //

DELIMITER ;

-- este es para crear un pedido

DELIMITER //

CREATE PROCEDURE crear_pedido(
    IN p_user_id INT,
    IN p_status VARCHAR(45),
    IN p_descuento INT,
    IN p_subtotal INT,
    IN p_impuesto INT,
    IN p_total INT,
    IN p_metodo_pago VARCHAR(45),
    IN p_fecha_pedido DATETIME
)
BEGIN
    DECLARE v_pedido_id INT;

    
    INSERT INTO `Cora`.`pedidos` (
        `status`, `descuento`, `subtotal`, `impuesto`, `total`, `estado_pago`, `metodo_pago`, `fecha_pedido`, `user_id`
    ) VALUES (
        p_status, p_descuento, p_subtotal, p_impuesto, p_total, 'pendiente', p_metodo_pago, p_fecha_pedido, p_user_id
    );


    SET v_pedido_id = LAST_INSERT_ID();

END //
DELIMITER ;