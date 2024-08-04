INSERT INTO `Cora`.`usuarios` (`num_doc`, `tipo_doc`, `name`, `last_name`, `email`, `password`, `movil`, `ciudad`, `direccion`, `rol`, `create_at`, `update_at`) VALUES
(100000001, 'DNI', 'Juan', 'Pérez', 'juan.perez@example.com', 'password123', '123456789', 'Madrid', 'Calle Mayor 1', 'user', NOW(), NULL),
(100000002, 'DNI', 'Ana', 'García', 'ana.garcia@example.com', 'password123', '123456788', 'Barcelona', 'Avenida Diagonal 2', 'user', NOW(), NULL),
(100000003, 'DNI', 'Luis', 'Martínez', 'luis.martinez@example.com', 'password123', '123456787', 'Valencia', 'Gran Vía 3', 'user', NOW(), NULL),
(100000004, 'DNI', 'María', 'López', 'maria.lopez@example.com', 'password123', '123456786', 'Sevilla', 'Calle de Sierpes 4', 'user', NOW(), NULL),
(100000005, 'DNI', 'Carlos', 'Hernández', 'carlos.hernandez@example.com', 'password123', '123456785', 'Bilbao', 'Plaza Nueva 5', 'user', NOW(), NULL),
(100000006, 'DNI', 'Laura', 'González', 'laura.gonzalez@example.com', 'password123', '123456784', 'Zaragoza', 'Calle Alfonso I 6', 'user', NOW(), NULL),
(100000007, 'DNI', 'Javier', 'Sánchez', 'javier.sanchez@example.com', 'password123', '123456783', 'Murcia', 'Gran Vía Escultor Salzillo 7', 'user', NOW(), NULL),
(100000008, 'DNI', 'Elena', 'Fernández', 'elena.fernandez@example.com', 'password123', '123456782', 'Palma', 'Carrer de Sant Miquel 8', 'user', NOW(), NULL),
(100000009, 'DNI', 'Pedro', 'Jiménez', 'pedro.jimenez@example.com', 'password123', '123456781', 'Las Palmas', 'Calle Triana 9', 'user', NOW(), NULL),
(100000010, 'DNI', 'Isabel', 'Moreno', 'isabel.moreno@example.com', 'password123', '123456780', 'Bilbao', 'Calle de García Rivero 10', 'user', NOW(), NULL);



INSERT INTO `Cora`.`categorias` (`categoria`, `descripcion`, `create_at`, `updated_at`) VALUES
('Frutas', 'Categoría de frutas frescas y secas.', NOW(), NULL),
('Verduras', 'Categoría de verduras y hortalizas.', NOW(), NULL),
('Cereales', 'Categoría de cereales y granos.', NOW(), NULL),
('Legumbres', 'Categoría de legumbres y semillas.', NOW(), NULL),
('Tubérculos', 'Categoría de tubérculos y raíces.', NOW(), NULL),
('Especias', 'Categoría de especias y condimentos.', NOW(), NULL),
('Hierbas', 'Categoría de hierbas aromáticas.', NOW(), NULL),
('Aceites', 'Categoría de aceites vegetales.', NOW(), NULL),
('Flores', 'Categoría de flores comestibles y ornamentales.', NOW(), NULL),
('Nueces', 'Categoría de nueces y frutos secos.', NOW(), NULL);


INSERT INTO `Cora`.`posts` (`titulo`, `resumen`, `contenido`, `image`, `categoria`, `estado`, `create_at`, `updated_at`, `autor`) VALUES
('Cultivo de Tomates en Casa', 'Aprende a cultivar tomates en tu hogar.', 'Contenido sobre el cultivo de tomates.', 'tomates.jpg', 'Frutas', 1, NOW(), NULL, 100000001),
('Guía para Plantar Zanahorias', 'Instrucciones para plantar zanahorias con éxito.', 'Contenido sobre el cultivo de zanahorias.', 'zanahorias.jpg', 'Verduras', 1, NOW(), NULL, 100000002),
('Todo sobre el Cultivo de Maíz', 'Beneficios y cuidados del maíz.', 'Contenido sobre el cultivo de maíz.', 'maiz.jpg', 'Cereales', 1, NOW(), NULL, 100000003),
('Cómo Cultivar Judías Verdes', 'Consejos para el cultivo de judías verdes.', 'Contenido sobre el cultivo de judías verdes.', 'judias_verdes.jpg', 'Legumbres', 1, NOW(), NULL, 100000004),
('Beneficios de las Papas Orgánicas', 'Ventajas de cultivar papas orgánicas.', 'Contenido sobre el cultivo de papas.', 'papas.jpg', 'Tubérculos', 1, NOW(), NULL, 100000005),
('Uso de Especias en la Cocina', 'Cómo utilizar especias en tus recetas.', 'Contenido sobre especias culinarias.', 'especias.jpg', 'Especias', 1, NOW(), NULL, 100000006),
('Hierbas Aromáticas para tu Jardín', 'Cómo plantar y cuidar hierbas aromáticas.', 'Contenido sobre hierbas aromáticas.', 'hierbas.jpg', 'Hierbas', 1, NOW(), NULL, 100000007),
('Beneficios del Aceite de Oliva', 'Propiedades y beneficios del aceite de oliva.', 'Contenido sobre el aceite de oliva.', 'aceite_oliva.jpg', 'Aceites', 1, NOW(), NULL, 100000008),
('Flores Comestibles para Decorar', 'Cómo usar flores comestibles en tus platos.', 'Contenido sobre flores comestibles.', 'flores_comestibles.jpg', 'Flores', 1, NOW(), NULL, 100000009),
('Nueces: Salud y Nutrición', 'Beneficios de incluir nueces en tu dieta.', 'Contenido sobre nueces.', 'nueces.jpg', 'Nueces', 1, NOW(), NULL, 100000010);



INSERT INTO `Cora`.`productos` (`name`, `descripcion`, `precio`, `stock`, `imagen`, `updated_at`, `created_at`, `user_id`, `categoria_id`) VALUES
('Tomate Orgánico', 'Tomates frescos y orgánicos.', 2500, 100, 'tomate_organico.jpg', NULL, NOW(), 100000001, 1),
('Zanahoria Naranja', 'Zanahorias frescas y crujientes.', 2000, 150, 'zanahoria_naranja.jpg', NULL, NOW(), 100000002, 2),
('Maíz Dulce', 'Maíz dulce y jugoso.', 3000, 200, 'maiz_dulce.jpg', NULL, NOW(), 100000003, 3),
('Judías Verdes', 'Judías verdes frescas.', 1800, 120, 'judias_verdes.jpg', NULL, NOW(), 100000004, 4),
('Papa Amarilla', 'Papas amarillas y nutritivas.', 2200, 180, 'papa_amarilla.jpg', NULL, NOW(), 100000005, 5),
('Pimienta Negra', 'Pimienta negra recién molida.', 1500, 200, 'pimienta_negra.jpg', NULL, NOW(), 100000006, 6),
('Albahaca', 'Albahaca fresca para tus recetas.', 1200, 250, 'albahaca.jpg', NULL, NOW(), 100000007, 7),
('Aceite de Oliva Extra Virgen', 'Aceite de oliva virgen extra.', 5000, 50, 'aceite_oliva.jpg', NULL, NOW(), 100000008, 8),
('Caléndula', 'Flores de caléndula para ensaladas.', 2500, 100, 'calendula.jpg', NULL, NOW(), 100000009, 9),
('Nuez de Brasil', 'Nueces de Brasil nutritivas.', 3500, 80, 'nuez_brasil.jpg', NULL, NOW(), 100000010, 10);


INSERT INTO `Cora`.`pedidos` (`status`, `descuento`, `subtotal`, `impuesto`, `total`, `estado_pago`, `metodo_pago`, `fecha_pedido`, `user_id`) VALUES
('pendiente', 0, 2500, 250, 2750, 'pendiente', 'tarjeta', NOW(), 100000001),
('completado', 100, 1800, 180, 1980, 'pagado', 'efectivo', NOW(), 100000002),
('pendiente', 0, 3000, 300, 3300, 'pendiente', 'tarjeta', NOW(), 100000003),
('enviado', 0, 1800, 180, 1980, 'pagado', 'efectivo', NOW(), 100000004),
('completado', 50, 2200, 220, 2370, 'pagado', 'tarjeta', NOW(), 100000005),
('pendiente', 0, 1500, 150, 1650, 'pendiente', 'efectivo', NOW(), 100000006),
('completado', 20, 1200, 120, 1300, 'pagado', 'tarjeta', NOW(), 100000007),
('enviado', 0, 5000, 500, 5500, 'pagado', 'efectivo', NOW(), 100000008),
('pendiente', 0, 2500, 250, 2750, 'pendiente', 'tarjeta', NOW(), 100000009),
('completado', 30, 3500, 350, 3850, 'pagado', 'efectivo', NOW(), 100000010);



INSERT INTO `Cora`.`comentarios` (`contenido`, `created_at`, `update_at`, `autor`, `posts_id`, `posts_autor`) VALUES
('Excelente guía para el cultivo de tomates.', NOW(), NULL, 100000001, 1, 100000001),
('Muy útil para comenzar con las zanahorias.', NOW(), NULL, 100000002, 2, 100000002),
('El artículo sobre el maíz está muy completo.', NOW(), NULL, 100000003, 3, 100000003),
('Las judías verdes crecen muy bien con estos consejos.', NOW(), NULL, 100000004, 4, 100000004),
('Las papas amarillas son de excelente calidad.', NOW(), NULL, 100000005, 5, 100000005),
('La sección de especias es muy informativa.', NOW(), NULL, 100000006, 6, 100000006),
('La albahaca es fundamental en mi jardín.', NOW(), NULL, 100000007, 7, 100000007),
('El aceite de oliva es de buena calidad.', NOW(), NULL, 100000008, 8, 100000008),
('Las flores comestibles son perfectas para ensaladas.', NOW(), NULL, 100000009, 9, 100000009),
('Las nueces de Brasil son muy nutritivas.', NOW(), NULL, 100000010, 10, 100000010);

INSERT INTO `Cora`.`reseñas` (`reseña`, `calificacion`, `created_at`, `update_at`, `autor`, `producto_id`, `producto_user_id`, `producto_categoria_id`) VALUES
('Excelente calidad, muy recomendado.', 5, NOW(), NULL, 100000001, 1, 100000001, 1),
('Muy sabrosas, pero el precio es un poco alto.', 4, NOW(), NULL, 100000002, 2, 100000002, 2),
('El maíz es delicioso, pero el stock es bajo.', 4, NOW(), NULL, 100000003, 3, 100000003, 3),
('Las judías verdes son frescas y crocantes.', 5, NOW(), NULL, 100000004, 4, 100000004, 4),
('Las papas son de gran calidad y muy versátiles.', 5, NOW(), NULL, 100000005, 5, 100000005, 5),
('La pimienta es aromática y de buen sabor.', 4, NOW(), NULL, 100000006, 6, 100000006, 6),
('La albahaca llegó fresca y en perfectas condiciones.', 5, NOW(), NULL, 100000007, 7, 100000007, 7),
('El aceite de oliva es excelente para cocinar.', 5, NOW(), NULL, 100000008, 8, 100000008, 8),
('Las caléndulas son un excelente complemento para ensaladas.', 4, NOW(), NULL, 100000009, 9, 100000009, 9),
('Las nueces son de buena calidad y sabor.', 5, NOW(), NULL, 100000010, 10, 100000010, 10);


INSERT INTO `Cora`.`carritos` (`created_at`, `updated_at`, `user_id`) VALUES
(NOW(), NULL, 100000001),
(NOW(), NULL, 100000002),
(NOW(), NULL, 100000003),
(NOW(), NULL, 100000004),
(NOW(), NULL, 100000005),
(NOW(), NULL, 100000006),
(NOW(), NULL, 100000007),
(NOW(), NULL, 100000008),
(NOW(), NULL, 100000009),
(NOW(), NULL, 100000010);

INSERT INTO `Cora`.`carrito_productos` (`created_at`, `updated_at`, `producto_id`, `producto_user_id`, `producto_categoria_id`, `carrito_id`, `carrito_user_id`) VALUES
(NOW(), NULL, 1, 100000001, 1, 1, 100000001),
(NOW(), NULL, 2, 100000002, 2, 2, 100000002),
(NOW(), NULL, 3, 100000003, 3, 3, 100000003),
(NOW(), NULL, 4, 100000004, 4, 4, 100000004),
(NOW(), NULL, 5, 100000005, 5, 5, 100000005),
(NOW(), NULL, 6, 100000006, 6, 6, 100000006),
(NOW(), NULL, 7, 100000007, 7, 7, 100000007),
(NOW(), NULL, 8, 100000008, 8, 8, 100000008),
(NOW(), NULL, 9, 100000009, 9, 9, 100000009),
(NOW(), NULL, 10, 100000010, 10, 10, 100000010);


INSERT INTO `Cora`.`detalles` (`cantidad`, `created_at`, `update_at`, `pedidos_id`, `pedidos_user_id`, `productos_id`, `productos_user_id`, `productos_categoria_id`) VALUES
(2, NOW(), NULL, 1, 100000001, 1, 100000001, 1),
(3, NOW(), NULL, 2, 100000002, 2, 100000002, 2),
(1, NOW(), NULL, 3, 100000003, 3, 100000003, 3),
(5, NOW(), NULL, 4, 100000004, 4, 100000004, 4),
(4, NOW(), NULL, 5, 100000005, 5, 100000005, 5),
(1, NOW(), NULL, 6, 100000006, 6, 100000006, 6),
(2, NOW(), NULL, 7, 100000007, 7, 100000007, 7),
(1, NOW(), NULL, 8, 100000008, 8, 100000008, 8),
(3, NOW(), NULL, 9, 100000009, 9, 100000009, 9),
(2, NOW(), NULL, 10, 100000010, 10, 100000010, 10);





