SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `mydb` ;
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`teachers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`teachers` (
  `id` INT NOT NULL,
  `name` VARCHAR(45) NULL,
  `address` VARCHAR(45) NULL,
  `description` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`students`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`students` (
  `id` INT NOT NULL,
  `name` VARCHAR(45) NULL,
  `address` VARCHAR(45) NULL,
  `details` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`acievements`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`acievements` (
  `id` INT NOT NULL,
  `name` VARCHAR(45) NULL,
  `details` VARCHAR(45) NULL,
  `student_id` INT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`event_types`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`event_types` (
  `id` INT NOT NULL,
  `name` VARCHAR(45) NULL,
  `descriptions` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`student_events`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`student_events` (
  `id` INT NOT NULL,
  `student_id` INT NOT NULL,
  `event_type_id` INT NOT NULL,
  `event_date` VARCHAR(45) NULL,
  `details` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`addresses`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`addresses` (
  `id` INT NOT NULL,
  `details` VARCHAR(200) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`student_addresses`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`student_addresses` (
  `id` INT NOT NULL,
  `student_id` INT NOT NULL,
  `address_id` INT NOT NULL,
  `date_from` VARCHAR(45) NULL,
  `date_to` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`student_classes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`student_classes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `teachers_id` INT NOT NULL,
  `students_id` INT NOT NULL,
  `details` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`transcripts`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`transcripts` (
  `id` INT NOT NULL,
  `date` DATE NULL,
  `details` VARCHAR(45) NULL,
  `student_id` INT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`student_loans`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`student_loans` (
  `id` INT NOT NULL,
  `date` VARCHAR(45) NULL,
  `amount` VARCHAR(45) NULL,
  `details` VARCHAR(45) NULL,
  `student_id` INT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`behaviors`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`behaviors` (
  `id` INT NOT NULL,
  `details` VARCHAR(45) NULL,
  `date` DATE NULL,
  `student_id` INT NOT NULL,
  PRIMARY KEY (`id`, `student_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`detentions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`detentions` (
  `id` INT NOT NULL,
  `date` DATETIME NULL,
  `date_end` DATETIME NULL,
  `summary` VARCHAR(45) NULL,
  `details` VARCHAR(45) NULL,
  `student_id` INT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
