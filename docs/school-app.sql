-- MySQL Workbench Synchronization
-- Generated: 2022-07-12 14:09
-- Model: New Model
-- Version: 1.0
-- Project: Name of the project
-- Author: Daouda Camara

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

CREATE SCHEMA IF NOT EXISTS `school_app` DEFAULT CHARACTER SET utf8 ;

CREATE TABLE IF NOT EXISTS `school_app`.`etudiant` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `code` VARCHAR(12) NOT NULL DEFAULT '',
  `prenom` VARCHAR(45) NOT NULL,
  `nom` VARCHAR(45) NOT NULL,
  `sexe` VARCHAR(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `school_app`.`cours` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `sigle` INT(11) NOT NULL,
  `titre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `school_app`.`professeur` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(45) NOT NULL,
  `prenom` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `school_app`.`etudiant_cours` (
  `cours_id` INT(11) NOT NULL,
  `etudiant_id` INT(11) NOT NULL,
  PRIMARY KEY (`cours_id`, `etudiant_id`),
  INDEX `fk_cours_has_etudiant_etudiant1_idx` (`etudiant_id` ASC),
  INDEX `fk_cours_has_etudiant_cours_idx` (`cours_id` ASC),
  CONSTRAINT `fk_cours_has_etudiant_cours`
    FOREIGN KEY (`cours_id`)
    REFERENCES `school_app`.`cours` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cours_has_etudiant_etudiant1`
    FOREIGN KEY (`etudiant_id`)
    REFERENCES `school_app`.`etudiant` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `school_app`.`professeur_cours` (
  `professeur_id` INT(11) NOT NULL,
  `cours_id` INT(11) NOT NULL,
  PRIMARY KEY (`professeur_id`, `cours_id`),
  INDEX `fk_professeur_has_cours_cours1_idx` (`cours_id` ASC),
  INDEX `fk_professeur_has_cours_professeur1_idx` (`professeur_id` ASC),
  CONSTRAINT `fk_professeur_has_cours_professeur1`
    FOREIGN KEY (`professeur_id`)
    REFERENCES `school_app`.`professeur` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_professeur_has_cours_cours1`
    FOREIGN KEY (`cours_id`)
    REFERENCES `school_app`.`cours` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
