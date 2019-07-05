CREATE SCHEMA `php-buscador-sugerencias` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci ;

CREATE TABLE `php-buscador-sugerencias`.`autos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `precio` VARCHAR(45) NOT NULL,
  `color` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`));

USE `php-buscador-sugerencias`;

INSERT INTO `autos` (`id`, `nombre`, `precio`, `color`) VALUES
(1, 'Porsche', 1000000, 'rojo'),
(2, 'Mustang', 1000599, 'azul'),
(3, 'Mercenes Benz', 1008000, 'plateado'),
(4, 'BMW', 1005000, 'negro'),
(5, 'Jaguar', 6000000, 'purpura');
