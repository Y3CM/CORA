INSERT INTO `Cora`.`usuarios` (`num_doc`, `tipo_doc`, `name`, `last_name`, `email`, `password`, `movil`, `direccion`, `rol`, `create_at`, `update_at`)
VALUES
(132455678, 'DNI', 'Juan', 'Pérez', 'juan.perez@example.com', 'password123', '555-1234', 'Calle Falsa 123', 'user', NOW(), NOW()),
(265412234, 'DNI', 'Ana', 'Gómez', 'ana.gomez@example.com', 'password456', '555-5678', 'Avenida Siempre Viva 742', 'admin', NOW(), NOW()),
(387745126, 'DNI', 'Luis', 'Martínez', 'luis.martinez@example.com', 'password789', '555-8765', 'Boulevard de los Sueños Rotos 45', 'user', NOW(), NOW()),
(412135479, 'DNI', 'Marta', 'Sánchez', 'marta.sanchez@example.com', 'password000', '555-4321', 'Plaza del Sol 9', 'user', NOW(), NOW()),
(514752972, 'DNI', 'Carlos', 'Torres', 'carlos.torres@example.com', 'password111', '555-1357', 'Calle del Río 23', 'admin', NOW(), NOW()),
(614576214, 'DNI', 'Elena', 'García', 'elena.garcia@example.com', 'password222', '555-2468', 'Avenida del Mar 18', 'user', NOW(), NOW()),
(732651428, 'DNI', 'Pedro', 'Morales', 'pedro.morales@example.com', 'password333', '555-3579', 'Calle de la Luna 12', 'user', NOW(), NOW()),
(815975324, 'DNI', 'Laura', 'Ramírez', 'laura.ramirez@example.com', 'password444', '555-4680', 'Calle de las Estrellas 34', 'user', NOW(), NOW()),
(976134289, 'DNI', 'Jorge', 'Castro', 'jorge.castro@example.com', 'password555', '555-5791', 'Calle del Viento 56', 'admin', NOW(), NOW()),
(105412682, 'DNI', 'Isabel', 'Méndez', 'isabel.mendez@example.com', 'password666', '555-6802', 'Calle de la Esperanza 78', 'user', NOW(), NOW());

INSERT INTO `Cora`.`categorias` (`categoria`, `descripcion`, `create_at`, `updated_at`)
VALUES
('Electrodomésticos', 'Productos eléctricos para el hogar', NOW(), NOW()),
('Muebles', 'Muebles para la casa y oficina', NOW(), NOW()),
('Agricultura', 'Productos agrícolas y herramientas para cultivo', NOW(), NOW()),
('Jardinería', 'Herramientas y productos para jardinería', NOW(), NOW()),
('Ropa', 'Vestimenta y accesorios', NOW(), NOW()),
('Electrónica', 'Dispositivos electrónicos', NOW(), NOW()),
('Juguetes', 'Juguetes para niños', NOW(), NOW()),
('Salud', 'Productos para cuidado personal y salud', NOW(), NOW()),
('Deportes', 'Artículos deportivos', NOW(), NOW()),
('Hogar', 'Productos para el hogar', NOW(), NOW());

INSERT INTO `Cora`.`productos` (`name`, `descripcion`, `precio`, `stock`, `imagen`, `updated_at`, `created_at`, `user_id`, `categoria_id`)
VALUES
('Semillas de Tomate', 'Semillas de tomate para cultivo.', 20, 100, 'semillas_tomate.jpg', NOW(), NOW(), 1, 3),
('Fertilizante Orgánico', 'Fertilizante orgánico para todas las plantas.', 35, 50, 'fertilizante_organico.jpg', NOW(), NOW(), 2, 3),
('Rastrillo de Jardín', 'Rastrillo de jardín de acero inoxidable.', 15, 75, 'rastrillo.jpg', NOW(), NOW(), 1, 4),
('Guantes de Jardinería', 'Guantes protectores para jardinería.', 10, 120, 'guantes_jardineria.jpg', NOW(), NOW(), 2, 4),
('Regadera de Plástico', 'Regadera de plástico de 5 litros.', 12, 60, 'regadera.jpg', NOW(), NOW(), 1, 4),
('Tierra para Cultivo', 'Tierra preparada para cultivo de plantas.', 25, 80, 'tierra_cultivo.jpg', NOW(), NOW(), 2, 3),
('Pala de Jardín', 'Pala de jardín resistente.', 18, 40, 'pala_jardin.jpg', NOW(), NOW(), 1, 4),
('Sustrato para Cactus', 'Sustrato especializado para cactus.', 22, 90, 'sustrato_cactus.jpg', NOW(), NOW(), 2, 3),
('Pesticida Natural', 'Pesticida natural para plantas.', 30, 30, 'pesticida_natural.jpg', NOW(), NOW(), 1, 3),
('Cultivador de Suelo', 'Cultivador manual para preparar el suelo.', 45, 25, 'cultivador_suelo.jpg', NOW(), NOW(), 2, 4);


INSERT INTO `Cora`.`pedidos` (`status`, `descuento`, `subtotal`, `impuesto`, `total`, `estado_pago`, `metodo_pago`, `fecha_pedido`, `user_id`)
VALUES
('pendiente', 5, 150, 15, 165, 'pendiente', 'tarjeta', NOW(), 1),
('completado', 10, 300, 30, 320, 'pagado', 'efectivo', NOW(), 2),
('enviado', 0, 200, 20, 220, 'pagado', 'tarjeta', NOW(), 3),
('pendiente', 0, 175, 17.5, 192.5, 'pendiente', 'efectivo', NOW(), 4),
('completado', 20, 400, 40, 360, 'pagado', 'tarjeta', NOW(), 5),
('enviado', 5, 250, 25, 270, 'pagado', 'efectivo', NOW(), 6),
('pendiente', 10, 100, 10, 110, 'pendiente', 'tarjeta', NOW(), 7),
('completado', 15, 275, 27.5, 247.5, 'pagado', 'efectivo', NOW(), 8),
('enviado', 0, 180, 18, 198, 'pagado', 'tarjeta', NOW(), 9),
('pendiente', 10, 220, 22, 198, 'pendiente', 'efectivo', NOW(), 10);

INSERT INTO `Cora`.`comentarios` (`contenido`, `created_at`, `update_at`, `autor`, `posts_id`, `posts_autor`)
VALUES
('Muy útil para el jardín, lo recomiendo.', NOW(), NOW(), 1, 1, 1),
('El fertilizante es excelente, pero llegó tarde.', NOW(), NOW(), 2, 2, 2),
('La regadera tiene una gran capacidad, muy útil.', NOW(), NOW(), 3, 3, 3),
('Los guantes son muy duraderos y cómodos.', NOW(), NOW(), 4, 4, 4),
('El rastrillo funciona perfectamente en mi jardín.', NOW(), NOW(), 5, 5, 5),
('El sustrato para cactus es de excelente calidad.', NOW(), NOW(), 6, 6, 6),
('Pesticida efectivo, pero el precio es alto.', NOW(), NOW(), 7, 7, 7),
('La pala es resistente, ideal para trabajos pesados.', NOW(), NOW(), 8, 8, 8),
('La tierra para cultivo llegó en perfectas condiciones.', NOW(), NOW(), 9, 9, 9),
('El cultivador de suelo es muy eficiente.', NOW(), NOW(), 10, 10, 10);


INSERT INTO `Cora`.`reseñas` (`reseña`, `calificacion`, `created_at`, `update_at`, `autor`, `producto_id`, `producto_user_id`, `producto_categoria_id`)
VALUES
('Semillas de alta calidad, muy recomendadas.', 5, NOW(), NOW(), 1, 1, 1, 3),
('El fertilizante ha mejorado mucho mi jardín.', 4, NOW(), NOW(), 2, 2, 2, 3),
('La regadera es robusta y eficiente.', 5, NOW(), NOW(), 3, 3, 3, 4),
('Los guantes son de buena calidad y cómodos.', 4, NOW(), NOW(), 4, 4, 4, 4),
('El rastrillo es duradero y eficaz.', 5, NOW(), NOW(), 5, 5, 5, 4),
('El sustrato para cactus es excelente.', 5, NOW(), NOW(), 6, 6, 6, 3),
('El pesticida ha dado buenos resultados.', 4, NOW(), NOW(), 7, 7, 7, 3),
('La pala es muy útil para el jardín.', 5, NOW(), NOW(), 8, 8, 8, 4),
('La tierra para cultivo es de alta calidad.', 5, NOW(), NOW(), 9, 9, 9, 3),
('El cultivador de suelo es eficiente y fácil de usar.', 5, NOW(), NOW(), 10, 10, 10, 4);





