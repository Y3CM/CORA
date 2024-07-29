-- esta vista en lista los productos que estan en un carrito de compras

CREATE VIEW vista_productos_carrito AS
SELECT
    cp.carrito_id,
    p.id AS producto_id,
    p.name AS producto_nombre,
    cp.created_at AS fecha_agregado
FROM `Cora`.`carrito_productos` cp
JOIN `Cora`.`productos` p ON cp.producto_id = p.id
WHERE cp.carrito_id IS NOT NULL;


-- esta vista se encarga de mostrar los pedidos  estan activos osea sin completar

CREATE VIEW vista_pedidos_activos AS
SELECT
    p.id AS pedido_id,
    p.status AS estado_pedido,
    p.subtotal,
    p.total,
    u.name AS usuario
FROM `Cora`.`pedidos` p
JOIN `Cora`.`usuarios` u ON p.user_id = u.num_doc
WHERE p.status <> 'completado';


CREATE VIEW vista_productos_mas_vendidos AS
SELECT 
  p.id,
  p.name,
  p.descripcion,
  SUM(d.cantidad) AS total_vendido
FROM productos p
JOIN detalles d ON p.id = d.productos_id
GROUP BY p.id
ORDER BY total_vendido DESC;



CREATE VIEW vista_productos_con_stock AS
SELECT 
  p.id,
  p.name,
  p.descripcion,
  p.precio,
  p.stock,
  p.imagen,
  c.categoria
FROM productos p
JOIN categorias c ON p.categoria_id = c.id
WHERE p.stock > 0;

