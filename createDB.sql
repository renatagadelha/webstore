SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;

SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;

SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';



CREATE SCHEMA IF NOT EXISTS `webstore` DEFAULT CHARACTER SET utf8 ;

USE `webstore` ;



-- -----------------------------------------------------

-- Table `webstore`.`client`

-- -----------------------------------------------------

CREATE  TABLE IF NOT EXISTS `webstore`.`client` (

  `id_client` INT NOT NULL AUTO_INCREMENT ,

  `client_name` VARCHAR(45) NOT NULL ,

  `client_lastname` VARCHAR(45) NOT NULL ,

  `client_email` VARCHAR(45) NOT NULL ,

  `client_phone` VARCHAR(20) NOT NULL ,

  `client_street` VARCHAR(45) NOT NULL ,

  `client_complement` VARCHAR(20) NULL ,

  `client_state` VARCHAR(45) NOT NULL ,

  `client_country` VARCHAR(45) NOT NULL ,

  `client_zip` VARCHAR(20) NOT NULL ,

  `client_password` VARCHAR(45) NOT NULL ,

  `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ,

  `dt_updated` DATETIME NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP ,

  PRIMARY KEY (`id_client`) ,

  UNIQUE INDEX `id_client_UNIQUE` (`id_client` ASC) ,

  UNIQUE INDEX `client_email_UNIQUE` (`client_email` ASC) )

ENGINE = InnoDB

DEFAULT CHARACTER SET = utf8;





-- -----------------------------------------------------

-- Table `webstore`.`product`

-- -----------------------------------------------------

CREATE  TABLE IF NOT EXISTS `webstore`.`product` (

  `id_product` INT NOT NULL AUTO_INCREMENT ,

  `product_code` VARCHAR(10) NOT NULL ,

  `product_title` VARCHAR(45) NOT NULL ,

  `product_about` VARCHAR(255) NULL ,

  `product_image` VARCHAR(100) NULL ,

  `product_price` DOUBLE NOT NULL ,

  `product_quantity` SMALLINT NOT NULL ,

  `dt_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ,

  `dt_updated` DATETIME NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP ,

  PRIMARY KEY (`id_product`) ,

  UNIQUE INDEX `id_product_UNIQUE` (`id_product` ASC) ,

  UNIQUE INDEX `product_code_UNIQUE` (`product_code` ASC) )

ENGINE = InnoDB

DEFAULT CHARACTER SET = utf8;




SET SQL_MODE=@OLD_SQL_MODE;

SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;

SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;