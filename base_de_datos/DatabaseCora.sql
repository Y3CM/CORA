-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema Cora
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `Cora` ;

-- -----------------------------------------------------
-- Schema Cora
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Cora` DEFAULT CHARACTER SET utf8 ;
USE `Cora` ;

-- -----------------------------------------------------
-- Table `Cora`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Cora`.`usuarios` (
  `num_doc` INT NOT NULL,
  `tipo_doc` VARCHAR(10) NULL,
  `name` VARCHAR(45) NULL,
  `last_name` VARCHAR(45) NULL,
  `email` VARCHAR(50) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `movil` VARCHAR(45) NULL,
  `ciudad` VARCHAR(45) NULL,
  `direccion` VARCHAR(45) NULL,
  `rol` VARCHAR(15) NOT NULL DEFAULT 'user',
  `create_at` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` DATETIME NULL,
  PRIMARY KEY (`num_doc`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Cora`.`categorias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Cora`.`categorias` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `categoria` VARCHAR(45) NOT NULL,
  `descripcion` TEXT NULL,
  `create_at` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` DATETIME NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Cora`.`posts`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Cora`.`posts` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(45) NOT NULL,
  `resumen` TINYTEXT NOT NULL,
  `contenido` TEXT NOT NULL,
  `image` VARCHAR(150) NOT NULL,
  `categoria` VARCHAR(45) NOT NULL,
  `estado` TINYINT NOT NULL DEFAULT 0,
  `create_at` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` DATETIME NULL,
  `autor` INT NOT NULL,
  PRIMARY KEY (`id`, `autor`),
  INDEX `fk_posts_usuarios1_idx` (`autor` ASC),
  CONSTRAINT `fk_posts_usuarios1`
    FOREIGN KEY (`autor`)
    REFERENCES `Cora`.`usuarios` (`num_doc`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Cora`.`productos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Cora`.`productos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `descripcion` VARCHAR(45) NULL,
  `precio` INT NOT NULL,
  `stock` INT NOT NULL,
  `imagen` VARCHAR(255) NULL,
  `updated_at` DATETIME NULL,
  `created_at` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` INT NOT NULL,
  `categoria_id` INT NOT NULL,
  PRIMARY KEY (`id`, `user_id`, `categoria_id`),
  INDEX `fk_productos_usuarios_idx` (`user_id` ASC),
  INDEX `fk_productos_categorias1_idx` (`categoria_id` ASC),
  CONSTRAINT `fk_productos_usuarios`
    FOREIGN KEY (`user_id`)
    REFERENCES `Cora`.`usuarios` (`num_doc`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_productos_categorias1`
    FOREIGN KEY (`categoria_id`)
    REFERENCES `Cora`.`categorias` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Cora`.`pedidos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Cora`.`pedidos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `status` VARCHAR(45) NOT NULL DEFAULT 'pendiente',
  `descuento` INT NULL,
  `subtotal` INT NOT NULL,
  `impuesto` INT NOT NULL,
  `total` INT NOT NULL,
  `estado_pago` VARCHAR(45) NOT NULL DEFAULT 'pendiente',
  `metodo_pago` VARCHAR(45) NULL,
  `fecha_pedido` DATETIME NULL,
  `user_id` INT NOT NULL,
  PRIMARY KEY (`id`, `user_id`),
  INDEX `fk_pedidos_usuarios1_idx` (`user_id` ASC),
  CONSTRAINT `fk_pedidos_usuarios1`
    FOREIGN KEY (`user_id`)
    REFERENCES `Cora`.`usuarios` (`num_doc`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Cora`.`comentarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Cora`.`comentarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `contenido` TEXT NOT NULL,
  `created_at` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` DATETIME NULL,
  `autor` INT NOT NULL,
  `posts_id` INT NOT NULL,
  `posts_autor` INT NOT NULL,
  PRIMARY KEY (`id`, `autor`, `posts_id`, `posts_autor`),
  INDEX `fk_comentarios_usuarios1_idx` (`autor` ASC),
  INDEX `fk_comentarios_posts1_idx` (`posts_id` ASC, `posts_autor` ASC),
  CONSTRAINT `fk_comentarios_usuarios1`
    FOREIGN KEY (`autor`)
    REFERENCES `Cora`.`usuarios` (`num_doc`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_comentarios_posts1`
    FOREIGN KEY (`posts_id` , `posts_autor`)
    REFERENCES `Cora`.`posts` (`id` , `autor`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Cora`.`reseñas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Cora`.`reseñas` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `reseña` TEXT NOT NULL,
  `calificacion` INT NULL,
  `created_at` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` DATETIME NULL,
  `autor` INT NOT NULL,
  `producto_id` INT NOT NULL,
  `producto_user_id` INT NOT NULL,
  `producto_categoria_id` INT NOT NULL,
  PRIMARY KEY (`id`, `autor`, `producto_id`, `producto_user_id`, `producto_categoria_id`),
  INDEX `fk_reseñas_usuarios1_idx` (`autor` ASC),
  INDEX `fk_reseñas_productos1_idx` (`producto_id` ASC, `producto_user_id` ASC, `producto_categoria_id` ASC),
  CONSTRAINT `fk_reseñas_usuarios1`
    FOREIGN KEY (`autor`)
    REFERENCES `Cora`.`usuarios` (`num_doc`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_reseñas_productos1`
    FOREIGN KEY (`producto_id` , `producto_user_id` , `producto_categoria_id`)
    REFERENCES `Cora`.`productos` (`id` , `user_id` , `categoria_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Cora`.`carritos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Cora`.`carritos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` INT NOT NULL,
  PRIMARY KEY (`id`, `user_id`),
  INDEX `fk_carritos_usuarios1_idx` (`user_id` ASC),
  CONSTRAINT `fk_carritos_usuarios1`
    FOREIGN KEY (`user_id`)
    REFERENCES `Cora`.`usuarios` (`num_doc`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Cora`.`carrito_productos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Cora`.`carrito_productos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `created_at` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` DATETIME NULL,
  `producto_id` INT NOT NULL,
  `producto_user_id` INT NOT NULL,
  `producto_categoria_id` INT NOT NULL,
  `carrito_id` INT NOT NULL,
  `carrito_user_id` INT NOT NULL,
  PRIMARY KEY (`id`, `producto_id`, `producto_user_id`, `producto_categoria_id`, `carrito_id`, `carrito_user_id`),
  INDEX `fk_carrito_productos_productos1_idx` (`producto_id` ASC, `producto_user_id` ASC, `producto_categoria_id` ASC),
  INDEX `fk_carrito_productos_carritos1_idx` (`carrito_id` ASC, `carrito_user_id` ASC),
  CONSTRAINT `fk_carrito_productos_productos1`
    FOREIGN KEY (`producto_id` , `producto_user_id` , `producto_categoria_id`)
    REFERENCES `Cora`.`productos` (`id` , `user_id` , `categoria_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_carrito_productos_carritos1`
    FOREIGN KEY (`carrito_id` , `carrito_user_id`)
    REFERENCES `Cora`.`carritos` (`id` , `user_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Cora`.`detalles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Cora`.`detalles` (
  `id` INT NOT NULL,
  `cantidad` INT NOT NULL DEFAULT 1,
  `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pedidos_id` INT NOT NULL,
  `pedidos_user_id` INT NOT NULL,
  `productos_id` INT NOT NULL,
  `productos_user_id` INT NOT NULL,
  `productos_categoria_id` INT NOT NULL,
  PRIMARY KEY (`id`, `pedidos_id`, `pedidos_user_id`, `productos_id`, `productos_user_id`, `productos_categoria_id`),
  INDEX `fk_detalles_pedidos1_idx` (`pedidos_id` ASC, `pedidos_user_id` ASC),
  INDEX `fk_detalles_productos1_idx` (`productos_id` ASC, `productos_user_id` ASC, `productos_categoria_id` ASC),
  CONSTRAINT `fk_detalles_pedidos1`
    FOREIGN KEY (`pedidos_id` , `pedidos_user_id`)
    REFERENCES `Cora`.`pedidos` (`id` , `user_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_detalles_productos1`
    FOREIGN KEY (`productos_id` , `productos_user_id` , `productos_categoria_id`)
    REFERENCES `Cora`.`productos` (`id` , `user_id` , `categoria_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
