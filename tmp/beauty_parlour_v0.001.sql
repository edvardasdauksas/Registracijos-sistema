SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `beauty_parlour` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ;
USE `beauty_parlour` ;

-- -----------------------------------------------------
-- Table `beauty_parlour`.`employee`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `beauty_parlour`.`employee` (
  `employee_id` TINYINT UNSIGNED NOT NULL ,
  `name` VARCHAR(45) NOT NULL ,
  `last_name` VARCHAR(45) NULL ,
  `tel_number` INT UNSIGNED NULL ,
  `password` VARCHAR(32) NULL ,
  PRIMARY KEY (`employee_id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `beauty_parlour`.`procedure`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `beauty_parlour`.`procedure` (
  `procedure_id` TINYINT UNSIGNED NOT NULL ,
  `name` VARCHAR(45) NULL ,
  `length` SMALLINT UNSIGNED NULL ,
  `employee_id` TINYINT UNSIGNED NOT NULL ,
  PRIMARY KEY (`procedure_id`, `employee_id`) ,
  INDEX `fk_procedure_employee` (`employee_id` ASC) ,
  CONSTRAINT `fk_procedure_employee`
    FOREIGN KEY (`employee_id` )
    REFERENCES `beauty_parlour`.`employee` (`employee_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `beauty_parlour`.`user`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `beauty_parlour`.`user` (
  `user_id` SMALLINT UNSIGNED NOT NULL ,
  `name` VARCHAR(45) NOT NULL ,
  `last_name` VARCHAR(45) NULL ,
  `password` VARCHAR(32) NOT NULL ,
  `email` VARCHAR(64) NOT NULL ,
  `tel_number` INT UNSIGNED NULL ,
  PRIMARY KEY (`user_id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `beauty_parlour`.`time_slot`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `beauty_parlour`.`time_slot` (
  `time_slot_id` INT UNSIGNED NOT NULL ,
  `length` SMALLINT UNSIGNED NULL ,
  `employee_id` TINYINT UNSIGNED NOT NULL ,
  PRIMARY KEY (`time_slot_id`, `employee_id`) ,
  INDEX `fk_time_slot_employee1` (`employee_id` ASC) ,
  CONSTRAINT `fk_time_slot_employee1`
    FOREIGN KEY (`employee_id` )
    REFERENCES `beauty_parlour`.`employee` (`employee_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `beauty_parlour`.`appointment`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `beauty_parlour`.`appointment` (
  `appointment_id` MEDIUMINT UNSIGNED NOT NULL ,
  `employee_id` TINYINT UNSIGNED NOT NULL ,
  `user_id` SMALLINT UNSIGNED NOT NULL ,
  `time_slot_id` INT UNSIGNED NOT NULL ,
  `procedure_id` TINYINT UNSIGNED NOT NULL ,
  PRIMARY KEY (`appointment_id`, `employee_id`, `user_id`, `time_slot_id`, `procedure_id`) ,
  INDEX `fk_appointment_employee1` (`employee_id` ASC) ,
  INDEX `fk_appointment_user1` (`user_id` ASC) ,
  INDEX `fk_appointment_time_slot1` (`time_slot_id` ASC) ,
  INDEX `fk_appointment_procedure1` (`procedure_id` ASC) ,
  CONSTRAINT `fk_appointment_employee1`
    FOREIGN KEY (`employee_id` )
    REFERENCES `beauty_parlour`.`employee` (`employee_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_appointment_user1`
    FOREIGN KEY (`user_id` )
    REFERENCES `beauty_parlour`.`user` (`user_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_appointment_time_slot1`
    FOREIGN KEY (`time_slot_id` )
    REFERENCES `beauty_parlour`.`time_slot` (`time_slot_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_appointment_procedure1`
    FOREIGN KEY (`procedure_id` )
    REFERENCES `beauty_parlour`.`procedure` (`procedure_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


CREATE USER `admin`;

CREATE USER `specialistas`;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;