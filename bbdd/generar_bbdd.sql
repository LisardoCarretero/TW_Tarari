-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema Tarari
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `Tarari` ;

-- -----------------------------------------------------
-- Schema Tarari
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Tarari` DEFAULT CHARACTER SET utf8 ;
USE `Tarari` ;

-- -----------------------------------------------------
-- Table `Tarari`.`Categoria`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Tarari`.`Categoria` ;

CREATE TABLE IF NOT EXISTS `Tarari`.`Categoria` (
  `idCategoria` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NOT NULL,
  `Imagen` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idCategoria`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Tarari`.`Oferta`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Tarari`.`Oferta` ;

CREATE TABLE IF NOT EXISTS `Tarari`.`Oferta` (
  `idOferta` INT NOT NULL AUTO_INCREMENT,
  `Descuento` INT NULL,
  PRIMARY KEY (`idOferta`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Tarari`.`Producto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Tarari`.`Producto` ;

CREATE TABLE IF NOT EXISTS `Tarari`.`Producto` (
  `idProducto` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NOT NULL,
  `Descripcion` VARCHAR(45) NOT NULL,
  `Precio` DOUBLE NOT NULL,
  `Stock` INT NOT NULL,
  `Imagen` VARCHAR(45) NOT NULL,
  `Flash` TINYINT NULL,
  `idCategoria` INT NOT NULL,
  `idOferta` INT NOT NULL,
  PRIMARY KEY (`idProducto`),
  CONSTRAINT `fk_Producto_Categoria`
    FOREIGN KEY (`idCategoria`)
    REFERENCES `Tarari`.`Categoria` (`idCategoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Producto_Oferta1`
    FOREIGN KEY (`idOferta`)
    REFERENCES `Tarari`.`Oferta` (`idOferta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Tarari`.`Usuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Tarari`.`Usuario` ;

CREATE TABLE IF NOT EXISTS `Tarari`.`Usuario` (
  `idUsuario` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NULL,
  `Apellidos` VARCHAR(45) NULL,
  `Correo` VARCHAR(45) NULL,
  `Contrasena` VARCHAR(45) NULL,
  `Usuario` VARCHAR(45) NULL,
  `Telefono` VARCHAR(9) NULL,
  `Tipo` TINYINT NULL,
  PRIMARY KEY (`idUsuario`),
  UNIQUE INDEX `Usuario_UNIQUE` (`Usuario` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Tarari`.`Carrito`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Tarari`.`Carrito` ;

CREATE TABLE IF NOT EXISTS `Tarari`.`Carrito` (
  `idCarrito` INT NOT NULL,
  `Envio` TINYINT NULL,
  `Confirmacion` TINYINT NULL,
  `idProducto` INT NOT NULL,
  `idUsuario` INT NOT NULL,
  PRIMARY KEY (`idCarrito`),
  CONSTRAINT `fk_Carrito_Producto1`
    FOREIGN KEY (`idProducto`)
    REFERENCES `Tarari`.`Producto` (`idProducto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Carrito_Usuario1`
    FOREIGN KEY (`idUsuario`)
    REFERENCES `Tarari`.`Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Tarari`.`Productos_carrito`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Tarari`.`Productos_carrito` ;

CREATE TABLE IF NOT EXISTS `Tarari`.`Productos_carrito` (
  `n_producto` INT NULL,
  `idCarrito` INT NOT NULL,
  `idProducto` INT NOT NULL,
  PRIMARY KEY (`idProducto`, `idCarrito`),
  CONSTRAINT `fk_Productos_carrito_Carrito1`
    FOREIGN KEY (`idCarrito`)
    REFERENCES `Tarari`.`Carrito` (`idCarrito`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Productos_carrito_Producto1`
    FOREIGN KEY (`idProducto`)
    REFERENCES `Tarari`.`Producto` (`idProducto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
