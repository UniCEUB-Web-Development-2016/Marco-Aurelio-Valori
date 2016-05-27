SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `GeopolosUAB` ;
CREATE SCHEMA IF NOT EXISTS `GeopolosUAB` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `GeopolosUAB` ;

-- -----------------------------------------------------
-- Table `GeopolosUAB`.`PolosUAB`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `GeopolosUAB`.`PolosUAB` ;

CREATE  TABLE IF NOT EXISTS `GeopolosUAB`.`PolosUAB` (
  `id` INT NOT NULL ,
  `name` VARCHAR(50) NOT NULL ,
  `status` VARCHAR(45) NOT NULL ,
  `situation` VARCHAR(45) NOT NULL ,
  `long` VARCHAR(45) NOT NULL ,
  `lat` VARCHAR(45) NOT NULL ,
  `uf` VARCHAR(45) NOT NULL ,
  `year` YEAR NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `GeopolosUAB`.`Courses`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `GeopolosUAB`.`Courses` ;

CREATE  TABLE IF NOT EXISTS `GeopolosUAB`.`Courses` (
  `id` INT NOT NULL ,
  `name` VARCHAR(100) NOT NULL ,
  `type` VARCHAR(45) NOT NULL ,
  `year` YEAR NOT NULL ,
  `studentes` INT NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `GeopolosUAB`.`User`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `GeopolosUAB`.`User` ;

CREATE  TABLE IF NOT EXISTS `GeopolosUAB`.`User` (
  `id` INT NOT NULL ,
  `name` VARCHAR(45) NOT NULL ,
  `Last_name` VARCHAR(45) NOT NULL ,
  `email` VARCHAR(45) NOT NULL ,
  `nickname` VARCHAR(45) NOT NULL ,
  `type` VARCHAR(45) NOT NULL ,
  `pass` VARCHAR(150) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;

USE `GeopolosUAB` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `GeopolosUAB`.`PolosUAB`
-- -----------------------------------------------------
START TRANSACTION;
USE `GeopolosUAB`;
INSERT INTO `GeopolosUAB`.`PolosUAB` (`id`, `name`, `status`, `situation`, `long`, `lat`, `uf`, `year`) VALUES (1, 'Buzios', 'AA', 'Ativo', '-12323432', '2332332', 'RJ', 2013);
INSERT INTO `GeopolosUAB`.`PolosUAB` (`id`, `name`, `status`, `situation`, `long`, `lat`, `uf`, `year`) VALUES (2, 'Buzios', 'AA', 'Ativo', '-12345433', '2345554', 'RJ', 2014);

COMMIT;

-- -----------------------------------------------------
-- Data for table `GeopolosUAB`.`Courses`
-- -----------------------------------------------------
START TRANSACTION;
USE `GeopolosUAB`;
INSERT INTO `GeopolosUAB`.`Courses` (`id`, `name`, `type`, `year`, `studentes`) VALUES (1, 'Filosofia', 'Humanas', 2013, 35);
INSERT INTO `GeopolosUAB`.`Courses` (`id`, `name`, `type`, `year`, `studentes`) VALUES (2, 'Ciência da Computação', 'Exatas', 2013, 31);

COMMIT;

-- -----------------------------------------------------
-- Data for table `GeopolosUAB`.`User`
-- -----------------------------------------------------
START TRANSACTION;
USE `GeopolosUAB`;
INSERT INTO `GeopolosUAB`.`User` (`id`, `name`, `Last_name`, `email`, `nickname`, `type`, `pass`) VALUES (1, 'Marco Aurélio', 'Valori', 'bonovalori@hotmail.com', 'mvalori', 'adm', NULL);

COMMIT;
