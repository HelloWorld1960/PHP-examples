CREATE SCHEMA `proyecto_php-smarty` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci ;

CREATE TABLE `proyecto_php-smarty`.`usuarios` (
  `id_usuario` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `clase` INT NOT NULL,
  PRIMARY KEY (`id_usuario`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish_ci;

INSERT INTO `proyecto_php-smarty`.`usuarios` (`nombre`, `email`, `password`, `clase`) VALUES ('Rebeca', 'rebeca@gmail.com', '1234', '1');
INSERT INTO `proyecto_php-smarty`.`usuarios` (`nombre`, `email`, `password`, `clase`) VALUES ('Rufino', 'rufino@gmail.com', '1234', '0');
INSERT INTO `proyecto_php-smarty`.`usuarios` (`nombre`, `email`, `password`, `clase`) VALUES ('Fernando', 'fernando@gmail.com', '1234', '0');
INSERT INTO `proyecto_php-smarty`.`usuarios` (`nombre`, `email`, `password`, `clase`) VALUES ('user00', 'user00@gmail.com', '1234', '0');
