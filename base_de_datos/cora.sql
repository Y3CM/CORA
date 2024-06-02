  -- phpMyAdmin SQL Dump
  -- version 5.2.1
  -- https://www.phpmyadmin.net/
  --
  -- Servidor: 127.0.0.1
  -- Tiempo de generación: 06-04-2024 a las 07:21:24
  -- Versión del servidor: 10.4.28-MariaDB
  -- Versión de PHP: 8.2.4

  SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
  START TRANSACTION;
  SET time_zone = "+00:00";


  /*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
  /*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
  /*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
  /*!40101 SET NAMES utf8mb4 */;

  --
  -- Base de datos: `cora`
  --
  CREATE DATABASE IF NOT EXISTS `cora` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
  USE `cora`;

  DELIMITER $$
  --
  -- Procedimientos
  --
  DROP PROCEDURE IF EXISTS `proc_plantulas`$$
  CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_plantulas` ()   begin select * from sub_categorias where  categorias_idcategorias = 001;
  end$$

  DROP PROCEDURE IF EXISTS `proc_productos`$$
  CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_productos` ()   begin select * from sub_categorias where categorias_idcategorias = 003;
  end$$

  DROP PROCEDURE IF EXISTS `proc_tierras`$$
  CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_tierras` ()   begin select * from sub_categorias where categorias_idcategorias = 004;
  end$$

  --
  -- Funciones
  --
  DROP FUNCTION IF EXISTS `func_desc`$$
  CREATE DEFINER=`root`@`localhost` FUNCTION `func_desc` (`cantidad_productos` INT) RETURNS VARCHAR(30) CHARSET utf8 COLLATE utf8_bin DETERMINISTIC begin case
  when cantidad_productos = 4 then return '20% descuento';
  when cantidad_productos = 9 then return '35% descuento';
  when cantidad_productos = 7 then return '35% descuento';
  when cantidad_productos = 8 then return '35% descuento';
  when cantidad_productos = 6 then return '35% descuento';
  when cantidad_productos = 5 then return '20% descuento';
  when cantidad_productos >= 10 then return '50% descuento';
  else return 'No aplica descuento';
  end case;
  end$$

  DROP FUNCTION IF EXISTS `func_envio`$$
  CREATE DEFINER=`root`@`localhost` FUNCTION `func_envio` (`ciudad_residencia` VARCHAR(45)) RETURNS VARCHAR(45) CHARSET utf8 COLLATE utf8_bin DETERMINISTIC begin
  case 
  when ciudad_residencia = 'Bogota' then return 'envio gratis';
  when ciudad_residencia = 'Medellin' then return 'envio gratis';
  else return 'paga envio';
  end case;
  end$$

  DROP FUNCTION IF EXISTS `func_stock`$$
  CREATE DEFINER=`root`@`localhost` FUNCTION `func_stock` (`cantidad` INT) RETURNS VARCHAR(45) CHARSET utf8 COLLATE utf8_bin DETERMINISTIC begin 
  case
  when cantidad > 3 then return 'si hay stock';
  when cantidad = 2 then return 'se requiere stock';
  when cantidad = 0 then return 'no hay stock';
  else return 'se requiere stock' ;
  end case;
  end$$

  DELIMITER ;

  -- --------------------------------------------------------

  --
  -- Estructura de tabla para la tabla `carrito_de_compras`
  --

  DROP TABLE IF EXISTS `carrito_de_compras`;
  CREATE TABLE `carrito_de_compras` (
    `idcarrito_de_compras` int(11) NOT NULL,
    `cantidad_productos` int(11) DEFAULT NULL,
    `ID_resumen_pedido` int(11) DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

  -- --------------------------------------------------------

  --
  -- Estructura de tabla para la tabla `categorias`
  --

  DROP TABLE IF EXISTS `categorias`;
  CREATE TABLE `categorias` (
    `idcategorias` int(11) NOT NULL,
    `nombre` varchar(45) DEFAULT NULL,
    `descripcion_cat` tinytext DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

  -- --------------------------------------------------------

  --
  -- Estructura de tabla para la tabla `entradas`
  --

  DROP TABLE IF EXISTS `entradas`;
  CREATE TABLE `entradas` (
    `id` int(11) NOT NULL auto increment,
    `titulo` varchar(50) NOT NULL,
    `contenido` text NOT NULL,
    `fecha_publicacion` datetime NOT NULL,
    `imagen` varchar(200) DEFAULT NULL,
    `resumen` varchar(200) DEFAULT NULL,
    `autor` varchar(45) DEFAULT NULL,
    `estado` varchar(15) DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

  --
  -- Volcado de datos para la tabla `entradas`
  --

  INSERT INTO `entradas` (`id`, `titulo`, `contenido`, `fecha_publicacion`, `imagen`, `resumen`, `autor`, `estado`) VALUES
  (2, 'Cosechando Raíces CORA', 'Cora es una pagina dedicada para los del sector agricola, donde podra encontrar productos que puedas comprar o subirlos para venderlos. Tambien incluye un Blogg en la cual encontrar novedades, consejos, ayudas y demas.', '2024-03-25 20:49:21', 'https://tse3.mm.bing.net/th?id=OIP.4AP5BxdiQjhRwisSzY0JMgHaEK&pid=Api&P=0&h=180', 'Cora es una pagina dedicada para los del sector agricola, donde podra comprar productos. ', 'Chinche', 'verificado'),
  (4, 'Hambrientos en Gaza comen plantas silvestres sin q', 'LIVERPOOL SEGURIDAD LTDA NESECITA PERSONAL FEMENINO Y MASCULINO CON UN AÑO DE EXPERIENCIA PARA VIGILANTE EN HOGARES SOACHA. PROGRAMACION 2X2X2 PAGO QUINCENAL  INTERESADOS FAVOR PRESENTARCEN EL MARTES Y MIERCOLES SANTO A LAS 8 Y 30 DE LA MAÑANA CON HOJA DE VIDA Y DOCUMENTACION EN LA AVENIDA CALLE 68 # 65B80 SEGUNDO PISO. INFORMACION 3208359296.', '2024-03-25 20:34:46', 'https://s.yimg.com/ny/api/res/1.2/iTubzOWFqtG_OcRJOhnX_Q--/YXBwaWQ9aGlnaGxhbmRlcjt3PTk2MDtoPTY0MDtjZj13ZWJw/https://media.zenfs.com/es/reuters.com/cd88f754170749d5691282c90eb4db4e', 'Palestinos esperan para recibir una comida gratuita compuesta de Khobiza, una verdura de hoja silvestre, durante el mes sagrado del Ramadán, en medio del actual conflicto entre Israel y Hamás, en Jaba', 'YECM', 'verificado');

  -- --------------------------------------------------------

  --
  -- Estructura de tabla para la tabla `modificaciones`
  --

  DROP TABLE IF EXISTS `modificaciones`;
  CREATE TABLE `modificaciones` (
    `Nombre` varchar(30) DEFAULT NULL,
    `Apellido` varchar(30) DEFAULT NULL,
    `Clave` varchar(45) DEFAULT NULL,
    `rol` varchar(45) DEFAULT NULL,
    `pais_residencia` varchar(45) DEFAULT NULL,
    `ciudad_residencia` varchar(45) DEFAULT NULL,
    `dir_residencia` varchar(45) DEFAULT NULL,
    `celular` int(11) DEFAULT NULL,
    `email` varchar(45) DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

  --
  -- Volcado de datos para la tabla `modificaciones`
  --

  INSERT INTO `modificaciones` (`Nombre`, `Apellido`, `Clave`, `rol`, `pais_residencia`, `ciudad_residencia`, `dir_residencia`, `celular`, `email`) VALUES
  ('shannon', 'Curod', '241657', 'User', 'Colombia', 'Bogotá', NULL, 2147483647, 'shan@gmail.com'),
  ('shannon', 'Curod', '241657', 'User', 'Colombia', 'Bogotá', NULL, 2147483647, 'shan@gmail.com'),
  ('shannon', 'Curod', '241657', 'User', 'Colombia', 'Bogotá', NULL, 2147483647, 'shan@gmail.com'),
  ('shannon', 'Curod', '241657', 'User', 'Colombia', 'Bogotá', NULL, 2147483647, 'shan@gmail.com'),
  ('shannon', 'Curod', '241657', 'User', 'Colombia', 'Bogotá', NULL, 2147483647, 'shan@gmail.com'),
  ('shannon', 'Curod', '241657', 'User', 'Colombia', 'Bogotá', NULL, 2147483647, 'shan@gmail.com'),
  ('shannon', 'Curod', '241657', 'User', 'Colombia', 'Bogotá', NULL, 2147483647, 'shan@gmail.com'),
  ('shannon', 'Curod', '241657', 'User', 'Colombia', 'Bogotá', NULL, 2147483647, 'shan@gmail.com'),
  ('shannon', 'Curod', '241657', 'User', 'Colombia', 'Bogotá', NULL, 2147483647, 'shan@gmail.com'),
  ('shannon', 'Curod', '241657', 'User', 'Colombia', 'Bogotá', NULL, 2147483647, 'shan@gmail.com'),
  ('shannon', 'Curod', '241657', 'User', 'Colombia', 'Bogotá', NULL, 2147483647, 'shan@gmail.com'),
  ('shannon', 'Curod', '241657', 'User', 'Colombia', 'Bogotá', NULL, 2147483647, 'shan@gmail.com'),
  ('shannon', 'Curod', '241657', 'User', 'Colombia', 'Bogotá', NULL, 2147483647, 'shan@gmail.com'),
  ('shannon', 'Curod', '241657', 'User', 'Colombia', 'Bogotá', NULL, 2147483647, 'shan@gmail.com'),
  ('shannon', 'Curod', '241657', 'User', 'Colombia', 'Bogotá', NULL, 2147483647, 'shan@gmail.com'),
  ('Jones', 'Moscu', '268415973', 'Admin', 'Colombia', 'Bogotá', 'calle 88 #45 61 sur', 312345678, 'jones@gmail.com'),
  ('Jones', 'Moscu', '268415973', 'Admin', 'Colombia', 'Bogotá', 'calle 88 #45 61 sur', 312345678, 'jones@gmail.com'),
  ('Jones', 'Moscu', '268415973', 'Admin', 'Colombia', 'Bogotá', 'calle 88 #45 61 sur', 312345678, 'jones@gmail.com'),
  ('Romanu', 'Ruiz', '264157', 'User', 'Colombia', 'Bogotá', 'calle falsa #87 - 54 sur', 305124678, 'romanu@gmail.com'),
  ('Romanu', 'Ruiz', '264157', 'User', 'Colombia', 'Bogotá', 'calle falsa #87 - 54 sur', 305124678, 'romanu@gmail.com'),
  ('Romanu', 'Ruiz', '264157', 'User', 'Colombia', 'Bogotá', 'calle falsa #87 - 54 sur', 305124678, 'romanu@gmail.com'),
  ('shannon', 'Curod', '241657', 'User', 'Colombia', 'Bogotá', 'calle falsa #87', 2147483647, 'shan@gmail.com'),
  ('shannon', 'Curod', '241657', 'User', 'Colombia', 'Bogotá', 'calle falsa #87', 2147483647, 'shan@gmail.com'),
  ('shannon', 'Curod', '241657', 'User', 'Colombia', 'Bogotá', 'calle falsa #87', 2147483647, 'shan@gmail.com'),
  ('shannon', 'Curod', '241657', 'User', 'Colombia', 'Bogotá', 'calle falsa #87', 2147483647, 'shan@gmail.com'),
  ('shannon', 'Curod', '241657', 'User', 'Colombia', 'Bogotá', 'calle falsa #87', 2147483647, 'shan@gmail.com'),
  ('shannon', 'Curod', '241657', 'User', 'Colombia', 'Bogotá', 'calle falsa #87', 2147483647, 'shan@gmail.com'),
  ('Romanu', 'Curod', '123456', 'User', 'Colombia', 'Bogotá', 'calle falsa #87 - 54 sur', 2147483647, 'jkahakhajka@gmail.com'),
  ('Romanu', 'Curod', '123456', 'User', 'Colombia', 'Bogotá', 'calle falsa #87 - 54 sur', 2147483647, 'jkahakhajka@gmail.com'),
  ('Romanu', 'Curod', '123456', 'User', 'Colombia', 'Bogotá', 'calle falsa #87 - 54 sur', 2147483647, 'jkahakhajka@gmail.com'),
  ('shannon', 'Curod', '241657', 'User', 'Colombia', 'Bogotá', 'calle falsa #87', 2147483647, 'shan@gmail.com'),
  ('shannon', 'Curod', '241657', 'User', 'Colombia', 'Bogotá', 'calle falsa #87', 2147483647, 'shan@gmail.com'),
  ('shannon', 'Curod', '241657', 'User', 'Colombia', 'Bogotá', 'calle falsa #87', 2147483647, 'shan@gmail.com'),
  ('shannon', 'Curod', '241657', 'Admin', 'Colombia', 'Bogotá', 'calle falsa #87', 2147483647, 'shan@gmail.com'),
  ('shannon', 'Curod', '241657', 'Admin', 'Colombia', 'Bogotá', 'calle falsa #87', 2147483647, 'shan@gmail.com'),
  ('shannon', 'Curod', '241657', 'Admin', 'Colombia', 'Bogotá', 'calle falsa #87', 2147483647, 'shan@gmail.com'),
  ('shannon', 'Curod', '241657', 'User', 'Colombia', 'Bogotá', 'calle falsa #87', 2147483647, 'shan@gmail.com'),
  ('shannon', 'Curod', '241657', 'User', 'Colombia', 'Bogotá', 'calle falsa #87', 2147483647, 'shan@gmail.com'),
  ('shannon', 'Curod', '241657', 'User', 'Colombia', 'Bogotá', 'calle falsa #87', 2147483647, 'shan@gmail.com');

  -- --------------------------------------------------------

  --
  -- Estructura de tabla para la tabla `productos`
  --

  DROP TABLE IF EXISTS `productos`;
  CREATE TABLE `productos` (
    `idproductos` int(11) NOT NULL,
    `nombre` varchar(45) DEFAULT NULL,
    `tipo` varchar(45) DEFAULT NULL,
    `descripcion` varchar(45) DEFAULT NULL,
    `precio` int(11) DEFAULT NULL,
    `cantidad` int(11) DEFAULT NULL,
    `sub_categorias_idsub_categorias` int(11) NOT NULL,
    `carrito_de_compras_idcarrito_de_compras` int(11) NOT NULL,
    `imagen` varchar(200) DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

  --
  -- Volcado de datos para la tabla `productos`
  --

  INSERT INTO `productos` (`idproductos`, `nombre`, `tipo`, `descripcion`, `precio`, `cantidad`, `sub_categorias_idsub_categorias`, `carrito_de_compras_idcarrito_de_compras`, `imagen`) VALUES
  (32, 'Prueba', 'Foto', 'Probando el input de file', 1000, 1, 532, 0, 'kyokai.jpg'),
  (123, 'Tomate', 'Chonto', 'Tomate chonto fresco', 1000, 5, 526, 0, 'https://frutasyverduras.info/wp-content/uploads/2019/07/tomate.jpg'),
  (321, 'Naranja', 'Toronja', 'Toronja fresca organica sin consevantes', 2500, 8, 523, 0, 'https://frutasyverduras.info/wp-content/uploads/2018/05/toronja.jpg'),
  (412, 'Papa', 'pastusa', 'Papa pastusa sin lavar organica', 900, 4, 528, 0, 'https://plazamercado.shop/wp-content/uploads/2020/08/papa-pastusa-paloquemao-fb.jpg'),
  (3152, 'Piña', 'Golden', 'Piña tipo Golden Madura Fresca', 5332, 4, 523, 0, 'https://agrokionperu.com/wp-content/uploads/2022/11/Pina-golden-03.jpg'),
  (5854, 'Platano', 'Maduro', 'racimo de platano maduro', 30000, 1, 526, 0, 'https://http2.mlstatic.com/planta-de-platano-macho-enano-D_NQ_NP_691437-MLM27314061088_052018-F.jpg'),
  (6547, 'Piña', 'Chonto', 'Piña tipo Golden Madura Fresca', 54647, 5, 523, 0, 'https://agrokionperu.com/wp-content/uploads/2022/11/pina-golden.jpg'),
  (6754, 'Naranja', 'Toronja', 'Toronja fresca organica sin consevantes', 8750, 2, 523, 0, 'https://www.cadenadefrio.com.pa/content/post/principal/pri_2cfad4f93312093b80c8c2c23a0b2661-2020-09-14-12-28-57.jpg'),
  (9875, 'Mango', 'Tommy', 'Mango tommy sin conservantes organico', 12313, 12, 523, 0, 'https://www.egzotikusdisznovenyek.hu/wp-content/uploads/2020/05/t-a-mang%C3%B3-sok.jpg');

  -- --------------------------------------------------------

  --
  -- Estructura de tabla para la tabla `resumen_pedido`
  --

  DROP TABLE IF EXISTS `resumen_pedido`;
  CREATE TABLE `resumen_pedido` (
    `idResumen_pedido` int(11) NOT NULL,
    `Valor_total` int(11) DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

  -- --------------------------------------------------------

  --
  -- Estructura de tabla para la tabla `sub_categorias`
  --

  DROP TABLE IF EXISTS `sub_categorias`;
  CREATE TABLE `sub_categorias` (
    `idsub_categorias` int(11) NOT NULL,
    `nombre` varchar(45) DEFAULT NULL,
    `descripcion` varchar(45) DEFAULT NULL,
    `categorias_idcategorias` int(11) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

  -- --------------------------------------------------------

  --
  -- Estructura de tabla para la tabla `usuarios`
  --

  DROP TABLE IF EXISTS `usuarios`;
  CREATE TABLE `usuarios` (
    `num_doc` int(11) NOT NULL,
    `rol` varchar(45) DEFAULT NULL,
    `nombre` varchar(45) DEFAULT NULL,
    `apellido` varchar(45) DEFAULT NULL,
    `tipo_doc` varchar(45) DEFAULT NULL,
    `pais_residencia` varchar(45) DEFAULT NULL,
    `ciudad_residencia` varchar(45) DEFAULT NULL,
    `dir_residencia` varchar(45) DEFAULT NULL,
    `celular` int(11) DEFAULT NULL,
    `email` varchar(45) DEFAULT NULL,
    `contraseña` varchar(45) DEFAULT NULL,
    `ID_carrito_de_compras` int(11) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

  --
  -- Volcado de datos para la tabla `usuarios`
  --

  INSERT INTO `usuarios` (`num_doc`, `rol`, `nombre`, `apellido`, `tipo_doc`, `pais_residencia`, `ciudad_residencia`, `dir_residencia`, `celular`, `email`, `contraseña`, `ID_carrito_de_compras`) VALUES
  (258741369, 'User', 'Chinche', '23', 'PA', 'Colombia', 'Bogotá', 'calle falsa 23 45 sur ', 2147483647, 'junesterra410@gmail.com', '123456', 0),
  (321456789, 'User', 'Romanu', 'Ruiz', 'CC', 'Colombia', 'Bogotá', 'calle falsa #87 - 54 sur', 305124678, 'romanu@gmail.com', '264157', 652),
  (654123789, 'User', 'Lider', 'Jhony', 'CE', 'Alemania', 'Munich', 'calle falsa 23 45 sur ', 987456123, 'lider@gamin.com', '1234', 0),
  (987654321, 'User', 'Qwert', 'Cuenu ', 'CE', 'Colombia', 'Bogotá', 'calle falsa 23 45 sur ', 2147483647, 'jo__021nes@hotmail.com', '134567', 0),
  (1193111340, 'Admin', 'Jones', 'Moscu', 'CC', 'Colombia', 'Bogotá', 'calle 88 #45 61 sur', 312345678, 'jones@gmail.com', '268415973', 541),
  (1234567890, 'Admin', 'Yecm', 'Cuenu', 'CC', 'Colombia', 'Bogotá', 'calle falsa #87 - 54 sur', 2147483647, 'yecm@gmail.com', 'Yecm1234', 20);

  --
  -- Disparadores `usuarios`
  --
  DROP TRIGGER IF EXISTS `after_rol_update`;
  DELIMITER $$
  CREATE TRIGGER `after_rol_update` AFTER UPDATE ON `usuarios` FOR EACH ROW begin
  insert into modificaciones(Nombre,Apellido,Clave,rol,pais_residencia,ciudad_residencia,dir_residencia,celular,email) values (old.Nombre,old.Apellido,old.Contraseña,old.rol,old.pais_residencia,old.ciudad_residencia,old.dir_residencia,old.celular,old.email);
  end
  $$
  DELIMITER ;
  DROP TRIGGER IF EXISTS `before_contraseña_update`;
  DELIMITER $$
  CREATE TRIGGER `before_contraseña_update` BEFORE UPDATE ON `usuarios` FOR EACH ROW begin
  insert into modificaciones(Nombre,Apellido,Clave,rol,pais_residencia,ciudad_residencia,dir_residencia,celular,email) values (old.Nombre,old.Apellido,old.Contraseña,old.rol,old.pais_residencia,old.ciudad_residencia,old.dir_residencia,old.celular,old.email);
  end
  $$
  DELIMITER ;
  DROP TRIGGER IF EXISTS `before_direccion_update`;
  DELIMITER $$
  CREATE TRIGGER `before_direccion_update` BEFORE UPDATE ON `usuarios` FOR EACH ROW begin
  insert into modificaciones(Nombre,Apellido,Clave,rol,pais_residencia,ciudad_residencia,dir_residencia,celular,email) values (old.Nombre,old.Apellido,old.Contraseña,old.rol,old.pais_residencia,old.ciudad_residencia,old.dir_residencia,old.celular,old.email);
  end
  $$
  DELIMITER ;

  -- --------------------------------------------------------

  --
  -- Estructura de tabla para la tabla `usuarios_has_productos`
  --

  DROP TABLE IF EXISTS `usuarios_has_productos`;
  CREATE TABLE `usuarios_has_productos` (
    `usuarios_num_doc` int(11) NOT NULL,
    `productos_idproductos` int(11) NOT NULL,
    `idsub_categorias3` int(11) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

  -- --------------------------------------------------------

  --
  -- Estructura de tabla para la tabla `ventas`
  --

  DROP TABLE IF EXISTS `ventas`;
  CREATE TABLE `ventas` (
    `idventas` int(11) NOT NULL,
    `direccion_envio` varchar(45) DEFAULT NULL,
    `metodo_pago` varchar(45) DEFAULT NULL,
    `metodo_envio` varchar(45) DEFAULT NULL,
    `ID_carrito_comp2` int(11) NOT NULL,
    `ID_Resumen_pedido2` int(11) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

  -- --------------------------------------------------------

  --
  -- Estructura Stand-in para la vista `vista_contactos_envio`
  -- (Véase abajo para la vista actual)
  --
  DROP VIEW IF EXISTS `vista_contactos_envio`;
  CREATE TABLE `vista_contactos_envio` (
  `nombre` varchar(90)
  ,`dir_residencia` varchar(45)
  ,`celular` int(11)
  ,`email` varchar(45)
  );

  -- --------------------------------------------------------

  --
  -- Estructura Stand-in para la vista `vista_productos`
  -- (Véase abajo para la vista actual)
  --
  DROP VIEW IF EXISTS `vista_productos`;
  CREATE TABLE `vista_productos` (
  `idcategorias` int(11)
  ,`idsub_categorias` int(11)
  ,`nombre` varchar(45)
  );

  -- --------------------------------------------------------

  --
  -- Estructura Stand-in para la vista `vista_usuario_carrito`
  -- (Véase abajo para la vista actual)
  --
  DROP VIEW IF EXISTS `vista_usuario_carrito`;
  CREATE TABLE `vista_usuario_carrito` (
  `nombre` varchar(90)
  ,`num_doc` int(11)
  ,`idcarrito_de_compras` int(11)
  );

  -- --------------------------------------------------------

  --
  -- Estructura para la vista `vista_contactos_envio`
  --
  DROP TABLE IF EXISTS `vista_contactos_envio`;

  DROP VIEW IF EXISTS `vista_contactos_envio`;
  CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_contactos_envio`  AS SELECT concat(`usuarios`.`nombre`,`usuarios`.`apellido`) AS `nombre`, `usuarios`.`dir_residencia` AS `dir_residencia`, `usuarios`.`celular` AS `celular`, `usuarios`.`email` AS `email` FROM `usuarios` ;

  -- --------------------------------------------------------

  --
  -- Estructura para la vista `vista_productos`
  --
  DROP TABLE IF EXISTS `vista_productos`;

  DROP VIEW IF EXISTS `vista_productos`;
  CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_productos`  AS SELECT `c`.`idcategorias` AS `idcategorias`, `s`.`idsub_categorias` AS `idsub_categorias`, `p`.`nombre` AS `nombre` FROM ((`categorias` `c` join `sub_categorias` `s` on(`c`.`idcategorias` = `s`.`categorias_idcategorias`)) join `productos` `p` on(`s`.`idsub_categorias` = `p`.`sub_categorias_idsub_categorias`)) ;

  -- --------------------------------------------------------

  --
  -- Estructura para la vista `vista_usuario_carrito`
  --
  DROP TABLE IF EXISTS `vista_usuario_carrito`;

  DROP VIEW IF EXISTS `vista_usuario_carrito`;
  CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_usuario_carrito`  AS SELECT concat(`u`.`nombre`,`u`.`apellido`) AS `nombre`, `u`.`num_doc` AS `num_doc`, `carrito_de_compras`.`idcarrito_de_compras` AS `idcarrito_de_compras` FROM (`usuarios` `u` join `carrito_de_compras` on(`u`.`ID_carrito_de_compras` = `carrito_de_compras`.`idcarrito_de_compras`)) ;

  --
  -- Índices para tablas volcadas
  --

  --
  -- Indices de la tabla `carrito_de_compras`
  --
  ALTER TABLE `carrito_de_compras`
    ADD PRIMARY KEY (`idcarrito_de_compras`);

  --
  -- Indices de la tabla `categorias`
  --
  ALTER TABLE `categorias`
    ADD PRIMARY KEY (`idcategorias`);

  --
  -- Indices de la tabla `entradas`
  --
  ALTER TABLE `entradas`
    ADD PRIMARY KEY (`id`);

  --
  -- Indices de la tabla `productos`
  --
  ALTER TABLE `productos`
    ADD PRIMARY KEY (`idproductos`);

  --
  -- Indices de la tabla `resumen_pedido`
  --
  ALTER TABLE `resumen_pedido`
    ADD PRIMARY KEY (`idResumen_pedido`);

  --
  -- Indices de la tabla `sub_categorias`
  --
  ALTER TABLE `sub_categorias`
    ADD PRIMARY KEY (`idsub_categorias`,`categorias_idcategorias`);

  --
  -- Indices de la tabla `usuarios`
  --
  ALTER TABLE `usuarios`
    ADD PRIMARY KEY (`num_doc`);

  --
  -- Indices de la tabla `usuarios_has_productos`
  --
  ALTER TABLE `usuarios_has_productos`
    ADD PRIMARY KEY (`usuarios_num_doc`);

  --
  -- Indices de la tabla `ventas`
  --
  ALTER TABLE `ventas`
    ADD PRIMARY KEY (`idventas`);

  --
  -- AUTO_INCREMENT de las tablas volcadas
  --

  --
  -- AUTO_INCREMENT de la tabla `entradas`
  --
  ALTER TABLE `entradas`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
  COMMIT;

  /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
  /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
  /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
