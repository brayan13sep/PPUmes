-- MySQL Script generated by MySQL Workbench
-- 11/05/16 14:51:34
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema hospital
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `hospital` ;

-- -----------------------------------------------------
-- Schema hospital
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `hospital` DEFAULT CHARACTER SET utf8 ;
USE `hospital` ;

-- -----------------------------------------------------
-- Table `hospital`.`Tipo_Documento`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `hospital`.`Tipo_Documento` ;

CREATE TABLE IF NOT EXISTS `hospital`.`Tipo_Documento` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `descripcion` VARCHAR(45) NOT NULL,
  `activo` INT NOT NULL,
  `timestamp` TIMESTAMP NOT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hospital`.`Estado_Civil`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `hospital`.`Estado_Civil` ;

CREATE TABLE IF NOT EXISTS `hospital`.`Estado_Civil` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `descripcion` VARCHAR(45) NOT NULL,
  `activo` INT NOT NULL,
  `timestamp` TIMESTAMP NOT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hospital`.`Nivel_Educativo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `hospital`.`Nivel_Educativo` ;

CREATE TABLE IF NOT EXISTS `hospital`.`Nivel_Educativo` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `descripcion` VARCHAR(45) NOT NULL,
  `activo` INT NOT NULL,
  `timestamp` TIMESTAMP NOT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hospital`.`Madre`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `hospital`.`Madre` ;

CREATE TABLE IF NOT EXISTS `hospital`.`Madre` (
  `ID` INT(45) NOT NULL,
  `dpi` BIGINT(100) NOT NULL,
  `rfid` INT NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `primer_apellido` VARCHAR(45) NOT NULL,
  `segundo_apellido` VARCHAR(45) NULL,
  `fecha_de_nacimiento` DATE NOT NULL,
  `edad` INT NULL,
  `direccion` VARCHAR(45) NOT NULL,
  `tipo_de_ocupacion` VARCHAR(45) NULL,
  `total_de_embarazos` INT NULL,
  `hijos_actualmente_vivos` INT NULL,
  `hijos_nacidos_vivos_que_fallecieron` INT NULL,
  `abortos_o_nacidos_muertos` INT NULL,
  `fecha_nacimiento_ultimo_hijo` DATE NULL,
  `tipo_documento` INT NOT NULL,
  `estado_civil` INT NOT NULL,
  `nivel_educativo` INT NOT NULL,
  `activo` INT NOT NULL,
  `timestamp` TIMESTAMP NOT NULL,
  PRIMARY KEY (`ID`, `rfid`),
  INDEX `fk_Madre_TipoDocumento1_idx` (`tipo_documento` ASC),
  INDEX `fk_Madre_EstadoCivil1_idx` (`estado_civil` ASC),
  INDEX `fk_Madre_NivelEducativo1_idx` (`nivel_educativo` ASC),
  CONSTRAINT `fk_Madre_TipoDocumento1`
    FOREIGN KEY (`tipo_documento`)
    REFERENCES `hospital`.`Tipo_Documento` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Madre_EstadoCivil1`
    FOREIGN KEY (`estado_civil`)
    REFERENCES `hospital`.`Estado_Civil` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Madre_NivelEducativo1`
    FOREIGN KEY (`nivel_educativo`)
    REFERENCES `hospital`.`Nivel_Educativo` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hospital`.`Sede`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `hospital`.`Sede` ;

CREATE TABLE IF NOT EXISTS `hospital`.`Sede` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `direccion` VARCHAR(45) NOT NULL,
  `departamento` VARCHAR(45) NOT NULL,
  `municipio` VARCHAR(45) NOT NULL,
  `zona` VARCHAR(45) NULL,
  `activo` INT NOT NULL,
  `timestamp` TIMESTAMP NOT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hospital`.`Atendio_Parto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `hospital`.`Atendio_Parto` ;

CREATE TABLE IF NOT EXISTS `hospital`.`Atendio_Parto` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `descripcion` VARCHAR(45) NOT NULL,
  `activo` INT NOT NULL,
  `timestamp` TIMESTAMP NOT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hospital`.`Condicion_Parto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `hospital`.`Condicion_Parto` ;

CREATE TABLE IF NOT EXISTS `hospital`.`Condicion_Parto` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `descripcion` VARCHAR(45) NOT NULL,
  `activo` INT NOT NULL,
  `timestamp` TIMESTAMP NOT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hospital`.`Tipo_Parto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `hospital`.`Tipo_Parto` ;

CREATE TABLE IF NOT EXISTS `hospital`.`Tipo_Parto` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `descripcion` VARCHAR(45) NOT NULL,
  `activo` INT NOT NULL,
  `timestamp` TIMESTAMP NOT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hospital`.`Neonato`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `hospital`.`Neonato` ;

CREATE TABLE IF NOT EXISTS `hospital`.`Neonato` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `rfid` INT NOT NULL,
  `genero` VARCHAR(45) NOT NULL,
  `peso` FLOAT NOT NULL,
  `talla` FLOAT NOT NULL,
  `perimetro_cefalico` FLOAT NOT NULL,
  `perimetro_toracico` FLOAT NOT NULL,
  `hora_de_nacimiento` VARCHAR(45) NOT NULL,
  `fecha_nacimiento` DATE NOT NULL,
  `duracion_del_embarazo` VARCHAR(45) NOT NULL,
  `malformacion_congenita` VARCHAR(45) NULL,
  `lactancia_precoz` VARCHAR(45) NOT NULL,
  `tipo_de_ligadura_y_corte_del_cordon` VARCHAR(45) NOT NULL,
  `sede` INT NOT NULL,
  `atendio_parto` INT NOT NULL,
  `condicion_parto` INT NOT NULL,
  `tipo_parto` INT NOT NULL,
  `activo` INT NOT NULL,
  `timestamp` TIMESTAMP NOT NULL,
  PRIMARY KEY (`ID`, `rfid`),
  INDEX `fk_Neonato_Sede1_idx` (`sede` ASC),
  INDEX `fk_Neonato_AtendioParto1_idx` (`atendio_parto` ASC),
  INDEX `fk_Neonato_CondicionParto1_idx` (`condicion_parto` ASC),
  INDEX `fk_Neonato_TipoParto1_idx` (`tipo_parto` ASC),
  CONSTRAINT `fk_Neonato_Sede1`
    FOREIGN KEY (`sede`)
    REFERENCES `hospital`.`Sede` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Neonato_AtendioParto1`
    FOREIGN KEY (`atendio_parto`)
    REFERENCES `hospital`.`Atendio_Parto` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Neonato_CondicionParto1`
    FOREIGN KEY (`condicion_parto`)
    REFERENCES `hospital`.`Condicion_Parto` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Neonato_TipoParto1`
    FOREIGN KEY (`tipo_parto`)
    REFERENCES `hospital`.`Tipo_Parto` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hospital`.`Profesion`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `hospital`.`Profesion` ;

CREATE TABLE IF NOT EXISTS `hospital`.`Profesion` (
  `ID` INT NOT NULL,
  `descripcion` VARCHAR(45) NOT NULL,
  `activo` INT NOT NULL,
  `timestamp` TIMESTAMP NOT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hospital`.`Profesional`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `hospital`.`Profesional` ;

CREATE TABLE IF NOT EXISTS `hospital`.`Profesional` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `no_colegiatura` INT NOT NULL,
  `dpi` BIGINT(100) NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `primer_apellido` VARCHAR(45) NOT NULL,
  `segundo_apellido` VARCHAR(45) NULL,
  `genero` VARCHAR(45) NOT NULL,
  `certifica_declara` VARCHAR(45) NOT NULL,
  `tipo_documento` INT NOT NULL,
  `sede` INT NOT NULL,
  `profesion` INT NOT NULL,
  `activo` INT NOT NULL,
  `timestamp` TIMESTAMP NOT NULL,
  PRIMARY KEY (`ID`, `no_colegiatura`, `dpi`),
  INDEX `fk_Profecional_TipoDocumento1_idx` (`tipo_documento` ASC),
  INDEX `fk_Profecional_Sede1_idx` (`sede` ASC),
  INDEX `fk_Profecional_Profesion1_idx` (`profesion` ASC),
  CONSTRAINT `fk_Profecional_TipoDocumento1`
    FOREIGN KEY (`tipo_documento`)
    REFERENCES `hospital`.`Tipo_Documento` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Profecional_Sede1`
    FOREIGN KEY (`sede`)
    REFERENCES `hospital`.`Sede` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Profecional_Profesion1`
    FOREIGN KEY (`profesion`)
    REFERENCES `hospital`.`Profesion` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hospital`.`Usuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `hospital`.`Usuario` ;

CREATE TABLE IF NOT EXISTS `hospital`.`Usuario` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(45) NULL,
  `password` VARCHAR(45) NULL,
  `activo` INT NULL,
  `timestamp` TIMESTAMP NULL,
  `token` VARCHAR(100) NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hospital`.`Role`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `hospital`.`Role` ;

CREATE TABLE IF NOT EXISTS `hospital`.`Role` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `role` VARCHAR(45) NULL,
  `descripcion` VARCHAR(45) NULL,
  `activo` INT NULL,
  `timestamp` TIMESTAMP NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hospital`.`UserRole`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `hospital`.`UserRole` ;

CREATE TABLE IF NOT EXISTS `hospital`.`UserRole` (
  `Usuario_ID` INT NOT NULL,
  `Role_ID` INT NOT NULL,
  PRIMARY KEY (`Usuario_ID`, `Role_ID`),
  INDEX `fk_Usuario_has_Role_Role1_idx` (`Role_ID` ASC),
  INDEX `fk_Usuario_has_Role_Usuario_idx` (`Usuario_ID` ASC),
  CONSTRAINT `fk_Usuario_has_Role_Usuario`
    FOREIGN KEY (`Usuario_ID`)
    REFERENCES `hospital`.`Usuario` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Usuario_has_Role_Role1`
    FOREIGN KEY (`Role_ID`)
    REFERENCES `hospital`.`Role` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hospital`.`RFID_madre_neonato`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `hospital`.`RFID_madre_neonato` ;

CREATE TABLE IF NOT EXISTS `hospital`.`RFID_madre_neonato` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `valor` VARCHAR(45) NOT NULL,
  `activo` VARCHAR(45) NOT NULL,
  `tipo_persona` VARCHAR(45) NULL,
  `timestamp` TIMESTAMP NULL,
  PRIMARY KEY (`id`, `valor`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hospital`.`incubadora`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `hospital`.`incubadora` ;

CREATE TABLE IF NOT EXISTS `hospital`.`incubadora` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `estado_incubadora` VARCHAR(45) NULL,
  `RFID_id` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_incubadora_RFID1_idx` (`RFID_id` ASC),
  CONSTRAINT `fk_incubadora_RFID1`
    FOREIGN KEY (`RFID_id`)
    REFERENCES `hospital`.`RFID_madre_neonato` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hospital`.`encamamiento`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `hospital`.`encamamiento` ;

CREATE TABLE IF NOT EXISTS `hospital`.`encamamiento` (
  `id` INT NOT NULL,
  `estado_cama` VARCHAR(45) NULL,
  `RFID_id` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_encamamiento_RFID1_idx` (`RFID_id` ASC),
  CONSTRAINT `fk_encamamiento_RFID1`
    FOREIGN KEY (`RFID_id`)
    REFERENCES `hospital`.`RFID_madre_neonato` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hospital`.`area_parto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `hospital`.`area_parto` ;

CREATE TABLE IF NOT EXISTS `hospital`.`area_parto` (
  `id` INT NOT NULL,
  `estado_cama` VARCHAR(45) NULL,
  `RFID_id` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_area_parto_RFID1_idx` (`RFID_id` ASC),
  CONSTRAINT `fk_area_parto_RFID1`
    FOREIGN KEY (`RFID_id`)
    REFERENCES `hospital`.`RFID_madre_neonato` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hospital`.`Paginas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `hospital`.`Paginas` ;

CREATE TABLE IF NOT EXISTS `hospital`.`Paginas` (
  `ID` INT NOT NULL,
  `pagina` VARCHAR(255) NULL,
  `url` VARCHAR(255) NULL,
  `activo` VARCHAR(45) NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hospital`.`Role_has_Paginas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `hospital`.`Role_has_Paginas` ;

CREATE TABLE IF NOT EXISTS `hospital`.`Role_has_Paginas` (
  `Role_ID` INT NOT NULL,
  `Paginas_ID` INT NOT NULL,
  `descripcion` VARCHAR(45) NULL,
  PRIMARY KEY (`Role_ID`, `Paginas_ID`),
  INDEX `fk_Role_has_Paginas_Paginas1_idx` (`Paginas_ID` ASC),
  INDEX `fk_Role_has_Paginas_Role1_idx` (`Role_ID` ASC),
  CONSTRAINT `fk_Role_has_Paginas_Role1`
    FOREIGN KEY (`Role_ID`)
    REFERENCES `hospital`.`Role` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Role_has_Paginas_Paginas1`
    FOREIGN KEY (`Paginas_ID`)
    REFERENCES `hospital`.`Paginas` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hospital`.`RFID_log_usuarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `hospital`.`RFID_log_usuarios` ;

CREATE TABLE IF NOT EXISTS `hospital`.`RFID_log_usuarios` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `area` VARCHAR(255) NOT NULL,
  `hora_salida` TIMESTAMP NULL,
  `hora_entrada` TIMESTAMP NULL,
  `timestamp` TIMESTAMP NULL,
  `Usuario_ID` INT NOT NULL,
  PRIMARY KEY (`ID`, `Usuario_ID`),
  INDEX `fk_RFID_log_usuarios_Usuario1_idx` (`Usuario_ID` ASC),
  CONSTRAINT `fk_RFID_log_usuarios_Usuario1`
    FOREIGN KEY (`Usuario_ID`)
    REFERENCES `hospital`.`Usuario` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hospital`.`RFID_log_madre_neonato`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `hospital`.`RFID_log_madre_neonato` ;

CREATE TABLE IF NOT EXISTS `hospital`.`RFID_log_madre_neonato` (
  `ID` INT NOT NULL,
  `hora_entrada` TIMESTAMP NULL,
  `hora_salida` TIMESTAMP NULL,
  `timestamp` TIMESTAMP NULL,
  `area` VARCHAR(255) NOT NULL,
  `RFID_madre_neonato_id` INT NOT NULL,
  `RFID_madre_neonato_valor` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`ID`, `RFID_madre_neonato_id`, `RFID_madre_neonato_valor`),
  INDEX `fk_RFID_log_madre_neonato_RFID_madre_neonato1_idx` (`RFID_madre_neonato_id` ASC, `RFID_madre_neonato_valor` ASC),
  CONSTRAINT `fk_RFID_log_madre_neonato_RFID_madre_neonato1`
    FOREIGN KEY (`RFID_madre_neonato_id` , `RFID_madre_neonato_valor`)
    REFERENCES `hospital`.`RFID_madre_neonato` (`id` , `valor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hospital`.`Madre_has_Neonato`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `hospital`.`Madre_has_Neonato` ;

CREATE TABLE IF NOT EXISTS `hospital`.`Madre_has_Neonato` (
  `Madre_ID` INT(45) NOT NULL,
  `Madre_rfid` INT NOT NULL,
  `Neonato_ID` INT NOT NULL,
  `Neonato_rfid` INT NOT NULL,
  PRIMARY KEY (`Madre_ID`, `Madre_rfid`, `Neonato_ID`, `Neonato_rfid`),
  INDEX `fk_Madre_has_Neonato_Neonato1_idx` (`Neonato_ID` ASC, `Neonato_rfid` ASC),
  INDEX `fk_Madre_has_Neonato_Madre1_idx` (`Madre_ID` ASC, `Madre_rfid` ASC),
  CONSTRAINT `fk_Madre_has_Neonato_Madre1`
    FOREIGN KEY (`Madre_ID` , `Madre_rfid`)
    REFERENCES `hospital`.`Madre` (`ID` , `rfid`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Madre_has_Neonato_Neonato1`
    FOREIGN KEY (`Neonato_ID` , `Neonato_rfid`)
    REFERENCES `hospital`.`Neonato` (`ID` , `rfid`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `hospital`.`Tipo_Documento`
-- -----------------------------------------------------
START TRANSACTION;
USE `hospital`;
INSERT INTO `hospital`.`Tipo_Documento` (`ID`, `descripcion`, `activo`, `timestamp`) VALUES (1, 'DPI', 1, '29-09-2016 19:51:00');
INSERT INTO `hospital`.`Tipo_Documento` (`ID`, `descripcion`, `activo`, `timestamp`) VALUES (2, 'CEDULA', 1, '29-09-2016 19:51:00');
INSERT INTO `hospital`.`Tipo_Documento` (`ID`, `descripcion`, `activo`, `timestamp`) VALUES (3, 'PASAPORTE', 1, '29-09-2016 19:51:00');

COMMIT;


-- -----------------------------------------------------
-- Data for table `hospital`.`Estado_Civil`
-- -----------------------------------------------------
START TRANSACTION;
USE `hospital`;
INSERT INTO `hospital`.`Estado_Civil` (`ID`, `descripcion`, `activo`, `timestamp`) VALUES (1, 'SOLTERO(A)', 1, '29-09-2016 19:51:00');
INSERT INTO `hospital`.`Estado_Civil` (`ID`, `descripcion`, `activo`, `timestamp`) VALUES (2, 'CASADO(A)', 1, '29-09-2016 19:51:00');

COMMIT;


-- -----------------------------------------------------
-- Data for table `hospital`.`Nivel_Educativo`
-- -----------------------------------------------------
START TRANSACTION;
USE `hospital`;
INSERT INTO `hospital`.`Nivel_Educativo` (`ID`, `descripcion`, `activo`, `timestamp`) VALUES (1, 'PRIMARIA', 1, '29-09-2016 19:51:00');
INSERT INTO `hospital`.`Nivel_Educativo` (`ID`, `descripcion`, `activo`, `timestamp`) VALUES (2, 'EDUCACION BASICA', 1, '29-09-2016 19:51:00');
INSERT INTO `hospital`.`Nivel_Educativo` (`ID`, `descripcion`, `activo`, `timestamp`) VALUES (3, 'DIVERSIFICADO', 1, '29-09-2016 19:51:00');
INSERT INTO `hospital`.`Nivel_Educativo` (`ID`, `descripcion`, `activo`, `timestamp`) VALUES (4, 'CARRERA UNIVERSITARIA', 1, '29-09-2016 19:51:00');

COMMIT;


-- -----------------------------------------------------
-- Data for table `hospital`.`Madre`
-- -----------------------------------------------------
START TRANSACTION;
USE `hospital`;
INSERT INTO `hospital`.`Madre` (`ID`, `dpi`, `rfid`, `nombre`, `primer_apellido`, `segundo_apellido`, `fecha_de_nacimiento`, `edad`, `direccion`, `tipo_de_ocupacion`, `total_de_embarazos`, `hijos_actualmente_vivos`, `hijos_nacidos_vivos_que_fallecieron`, `abortos_o_nacidos_muertos`, `fecha_nacimiento_ultimo_hijo`, `tipo_documento`, `estado_civil`, `nivel_educativo`, `activo`, `timestamp`) VALUES (1, 2521134110114, 20160929, 'Jasmin', 'Cardona', 'Aguilar', '08-07-1996', 20, 'villa nueva', 'secretaria', 0, 0, 0, 0, NULL, 1, 1, 4, 1, '11-10-2016 12:08:52 ');

COMMIT;


-- -----------------------------------------------------
-- Data for table `hospital`.`Sede`
-- -----------------------------------------------------
START TRANSACTION;
USE `hospital`;
INSERT INTO `hospital`.`Sede` (`ID`, `nombre`, `direccion`, `departamento`, `municipio`, `zona`, `activo`, `timestamp`) VALUES (1, 'HOSPITAL DE AMATITLAN', '4TA CALLE 10 AVE BARRIO HOSPITAL AMATITLAN', 'GUATEMALA', 'AMATITLAN', '0', 1, '29-09-2016 19:51:00');

COMMIT;


-- -----------------------------------------------------
-- Data for table `hospital`.`Atendio_Parto`
-- -----------------------------------------------------
START TRANSACTION;
USE `hospital`;
INSERT INTO `hospital`.`Atendio_Parto` (`ID`, `descripcion`, `activo`, `timestamp`) VALUES (1, 'ENFERMERO(A)', 1, '29-09-2016 19:51:00');
INSERT INTO `hospital`.`Atendio_Parto` (`ID`, `descripcion`, `activo`, `timestamp`) VALUES (2, 'MEDICO GENERAL', 1, '29-09-2016 19:51:00');
INSERT INTO `hospital`.`Atendio_Parto` (`ID`, `descripcion`, `activo`, `timestamp`) VALUES (3, 'MEDICO GINECO-OBSTETRA', 1, '29-09-2016 19:51:00');
INSERT INTO `hospital`.`Atendio_Parto` (`ID`, `descripcion`, `activo`, `timestamp`) VALUES (4, 'OBSTETRA', 1, '29-09-2016 19:51:00');

COMMIT;


-- -----------------------------------------------------
-- Data for table `hospital`.`Condicion_Parto`
-- -----------------------------------------------------
START TRANSACTION;
USE `hospital`;
INSERT INTO `hospital`.`Condicion_Parto` (`ID`, `descripcion`, `activo`, `timestamp`) VALUES (1, 'ESPONTANEO', 1, '29-09-2016 19:51:00');
INSERT INTO `hospital`.`Condicion_Parto` (`ID`, `descripcion`, `activo`, `timestamp`) VALUES (2, 'INSTRUMENTADO', 1, '29-09-2016 19:51:00');
INSERT INTO `hospital`.`Condicion_Parto` (`ID`, `descripcion`, `activo`, `timestamp`) VALUES (3, 'CESAREA', 1, '29-09-2016 19:51:00');

COMMIT;


-- -----------------------------------------------------
-- Data for table `hospital`.`Tipo_Parto`
-- -----------------------------------------------------
START TRANSACTION;
USE `hospital`;
INSERT INTO `hospital`.`Tipo_Parto` (`ID`, `descripcion`, `activo`, `timestamp`) VALUES (1, 'UNICO', 1, '29-09-2016 19:51:00');
INSERT INTO `hospital`.`Tipo_Parto` (`ID`, `descripcion`, `activo`, `timestamp`) VALUES (2, 'DOBLE', 1, '29-09-2016 19:51:00');
INSERT INTO `hospital`.`Tipo_Parto` (`ID`, `descripcion`, `activo`, `timestamp`) VALUES (3, 'TRIPLE', 1, '29-09-2016 19:51:00');
INSERT INTO `hospital`.`Tipo_Parto` (`ID`, `descripcion`, `activo`, `timestamp`) VALUES (4, 'MAS DE TRES', 1, '29-09-2016 19:51:00');

COMMIT;


-- -----------------------------------------------------
-- Data for table `hospital`.`Neonato`
-- -----------------------------------------------------
START TRANSACTION;
USE `hospital`;
INSERT INTO `hospital`.`Neonato` (`ID`, `rfid`, `genero`, `peso`, `talla`, `perimetro_cefalico`, `perimetro_toracico`, `hora_de_nacimiento`, `fecha_nacimiento`, `duracion_del_embarazo`, `malformacion_congenita`, `lactancia_precoz`, `tipo_de_ligadura_y_corte_del_cordon`, `sede`, `atendio_parto`, `condicion_parto`, `tipo_parto`, `activo`, `timestamp`) VALUES (1, 20160929, '1', 500, 10, 10, 10, '10:26:00', '29-09-2016', '38', 'no', 'si', DEFAULT, 1, 1, 1, 1, 1, DEFAULT);

COMMIT;


-- -----------------------------------------------------
-- Data for table `hospital`.`Profesion`
-- -----------------------------------------------------
START TRANSACTION;
USE `hospital`;
INSERT INTO `hospital`.`Profesion` (`ID`, `descripcion`, `activo`, `timestamp`) VALUES (1, 'OBSTETRA', 1, '29-09-2016 19:21:00');
INSERT INTO `hospital`.`Profesion` (`ID`, `descripcion`, `activo`, `timestamp`) VALUES (2, 'MEDICO GENERAL', 1, '29-09-2016 19:21:00');

COMMIT;


-- -----------------------------------------------------
-- Data for table `hospital`.`Usuario`
-- -----------------------------------------------------
START TRANSACTION;
USE `hospital`;
INSERT INTO `hospital`.`Usuario` (`ID`, `usuario`, `password`, `activo`, `timestamp`, `token`) VALUES (1, 'admin', 'admin', 1, '29-09-2016 19:51:00', NULL);
INSERT INTO `hospital`.`Usuario` (`ID`, `usuario`, `password`, `activo`, `timestamp`, `token`) VALUES (2, 'enfermero', 'enfermero', 1, '29-09-2016 19:51:00', NULL);
INSERT INTO `hospital`.`Usuario` (`ID`, `usuario`, `password`, `activo`, `timestamp`, `token`) VALUES (3, 'director', 'director', 1, '29-09-2016 19:51:00', NULL);
INSERT INTO `hospital`.`Usuario` (`ID`, `usuario`, `password`, `activo`, `timestamp`, `token`) VALUES (4, 'dba', 'dba', 1, '29-09-2016 19:51:00', NULL);
INSERT INTO `hospital`.`Usuario` (`ID`, `usuario`, `password`, `activo`, `timestamp`, `token`) VALUES (5, 'monitoreo', 'monitoreo', 1, '29-09-2016 19:51:00', NULL);
INSERT INTO `hospital`.`Usuario` (`ID`, `usuario`, `password`, `activo`, `timestamp`, `token`) VALUES (6, 'brayan.aguilar', 'brayan', 1, '29-09-2016 19:51:00', NULL);
INSERT INTO `hospital`.`Usuario` (`ID`, `usuario`, `password`, `activo`, `timestamp`, `token`) VALUES (7, 'cesar.estrada', 'cesar', 1, '29-09-2016 19:51:00', NULL);
INSERT INTO `hospital`.`Usuario` (`ID`, `usuario`, `password`, `activo`, `timestamp`, `token`) VALUES (8, 'allan.marroquin', 'allan', 1, '29-09-2016 19:51:00', NULL);
INSERT INTO `hospital`.`Usuario` (`ID`, `usuario`, `password`, `activo`, `timestamp`, `token`) VALUES (DEFAULT, 'medico', 'medico', 1, '05-11-2016 14:21:00', NULL);

COMMIT;


-- -----------------------------------------------------
-- Data for table `hospital`.`Role`
-- -----------------------------------------------------
START TRANSACTION;
USE `hospital`;
INSERT INTO `hospital`.`Role` (`ID`, `role`, `descripcion`, `activo`, `timestamp`) VALUES (1, 'DOCTOR', 'ACCESO A REPORTES Y FORMULARIOS', 1, '29-09-2016 19:51:00');
INSERT INTO `hospital`.`Role` (`ID`, `role`, `descripcion`, `activo`, `timestamp`) VALUES (2, 'ENFERMERO', 'DEBE LLENAR SOLO FORMULARIOS', 1, '29-09-2016 19:51:00');
INSERT INTO `hospital`.`Role` (`ID`, `role`, `descripcion`, `activo`, `timestamp`) VALUES (3, 'DIRECTOR', 'ACCESO SOLO A REPORTES', 1, '29-09-2016 19:51:00');
INSERT INTO `hospital`.`Role` (`ID`, `role`, `descripcion`, `activo`, `timestamp`) VALUES (4, 'ADMIN', 'AGREGAR ELIMINAR O BORRAR USUARIOS', 1, '29-09-2016 19:51:00');
INSERT INTO `hospital`.`Role` (`ID`, `role`, `descripcion`, `activo`, `timestamp`) VALUES (5, 'DBA', 'FULL ACCESO', 1, '29-09-2016 19:51:00');
INSERT INTO `hospital`.`Role` (`ID`, `role`, `descripcion`, `activo`, `timestamp`) VALUES (6, 'MONITOREO', 'SOLO ACCESO A MONITOREO DE AREA', 1, '29-09-2016 19:51:00');

COMMIT;


-- -----------------------------------------------------
-- Data for table `hospital`.`UserRole`
-- -----------------------------------------------------
START TRANSACTION;
USE `hospital`;
INSERT INTO `hospital`.`UserRole` (`Usuario_ID`, `Role_ID`) VALUES (1, 4);
INSERT INTO `hospital`.`UserRole` (`Usuario_ID`, `Role_ID`) VALUES (2, 2);
INSERT INTO `hospital`.`UserRole` (`Usuario_ID`, `Role_ID`) VALUES (3, 3);
INSERT INTO `hospital`.`UserRole` (`Usuario_ID`, `Role_ID`) VALUES (4, 5);
INSERT INTO `hospital`.`UserRole` (`Usuario_ID`, `Role_ID`) VALUES (5, 6);
INSERT INTO `hospital`.`UserRole` (`Usuario_ID`, `Role_ID`) VALUES (6, 1);
INSERT INTO `hospital`.`UserRole` (`Usuario_ID`, `Role_ID`) VALUES (7, 5);
INSERT INTO `hospital`.`UserRole` (`Usuario_ID`, `Role_ID`) VALUES (8, 2);

COMMIT;


-- -----------------------------------------------------
-- Data for table `hospital`.`RFID_madre_neonato`
-- -----------------------------------------------------
START TRANSACTION;
USE `hospital`;
INSERT INTO `hospital`.`RFID_madre_neonato` (`id`, `valor`, `activo`, `tipo_persona`, `timestamp`) VALUES (1, 'abc', '1', 'neonato', '29-10-2016 19:51:00');
INSERT INTO `hospital`.`RFID_madre_neonato` (`id`, `valor`, `activo`, `tipo_persona`, `timestamp`) VALUES (2, 'def', '1', 'madre', '29-10-2016 00:51:00');
INSERT INTO `hospital`.`RFID_madre_neonato` (`id`, `valor`, `activo`, `tipo_persona`, `timestamp`) VALUES (3, 'ghi', '1', 'neonato', '29-10-2016 00:51:00');
INSERT INTO `hospital`.`RFID_madre_neonato` (`id`, `valor`, `activo`, `tipo_persona`, `timestamp`) VALUES (4, 'jkl', '1', 'madre', '29-10-2016 00:51:00');

COMMIT;


-- -----------------------------------------------------
-- Data for table `hospital`.`incubadora`
-- -----------------------------------------------------
START TRANSACTION;
USE `hospital`;
INSERT INTO `hospital`.`incubadora` (`id`, `estado_incubadora`, `RFID_id`) VALUES (1, 'success', 1);
INSERT INTO `hospital`.`incubadora` (`id`, `estado_incubadora`, `RFID_id`) VALUES (2, 'danger', NULL);
INSERT INTO `hospital`.`incubadora` (`id`, `estado_incubadora`, `RFID_id`) VALUES (3, 'danger', NULL);
INSERT INTO `hospital`.`incubadora` (`id`, `estado_incubadora`, `RFID_id`) VALUES (4, 'danger', NULL);
INSERT INTO `hospital`.`incubadora` (`id`, `estado_incubadora`, `RFID_id`) VALUES (5, 'danger', NULL);
INSERT INTO `hospital`.`incubadora` (`id`, `estado_incubadora`, `RFID_id`) VALUES (6, 'danger', NULL);
INSERT INTO `hospital`.`incubadora` (`id`, `estado_incubadora`, `RFID_id`) VALUES (7, 'danger', NULL);
INSERT INTO `hospital`.`incubadora` (`id`, `estado_incubadora`, `RFID_id`) VALUES (8, 'danger', NULL);
INSERT INTO `hospital`.`incubadora` (`id`, `estado_incubadora`, `RFID_id`) VALUES (9, 'danger', NULL);
INSERT INTO `hospital`.`incubadora` (`id`, `estado_incubadora`, `RFID_id`) VALUES (10, 'danger', NULL);
INSERT INTO `hospital`.`incubadora` (`id`, `estado_incubadora`, `RFID_id`) VALUES (11, 'danger', NULL);
INSERT INTO `hospital`.`incubadora` (`id`, `estado_incubadora`, `RFID_id`) VALUES (12, 'danger', NULL);
INSERT INTO `hospital`.`incubadora` (`id`, `estado_incubadora`, `RFID_id`) VALUES (13, 'danger', NULL);
INSERT INTO `hospital`.`incubadora` (`id`, `estado_incubadora`, `RFID_id`) VALUES (14, 'danger', NULL);
INSERT INTO `hospital`.`incubadora` (`id`, `estado_incubadora`, `RFID_id`) VALUES (15, 'danger', NULL);
INSERT INTO `hospital`.`incubadora` (`id`, `estado_incubadora`, `RFID_id`) VALUES (16, 'danger', NULL);
INSERT INTO `hospital`.`incubadora` (`id`, `estado_incubadora`, `RFID_id`) VALUES (17, 'danger', NULL);
INSERT INTO `hospital`.`incubadora` (`id`, `estado_incubadora`, `RFID_id`) VALUES (18, 'danger', NULL);
INSERT INTO `hospital`.`incubadora` (`id`, `estado_incubadora`, `RFID_id`) VALUES (20, 'danger', NULL);
INSERT INTO `hospital`.`incubadora` (`id`, `estado_incubadora`, `RFID_id`) VALUES (DEFAULT, '', NULL);

COMMIT;


-- -----------------------------------------------------
-- Data for table `hospital`.`Paginas`
-- -----------------------------------------------------
START TRANSACTION;
USE `hospital`;
INSERT INTO `hospital`.`Paginas` (`ID`, `pagina`, `url`, `activo`) VALUES (1, 'home', 'home.php', '1');
INSERT INTO `hospital`.`Paginas` (`ID`, `pagina`, `url`, `activo`) VALUES (2, 'index', 'inicio.php', '1');
INSERT INTO `hospital`.`Paginas` (`ID`, `pagina`, `url`, `activo`) VALUES (3, 'login', 'login.php', '1');
INSERT INTO `hospital`.`Paginas` (`ID`, `pagina`, `url`, `activo`) VALUES (4, 'madre', 'madre.php', '1');
INSERT INTO `hospital`.`Paginas` (`ID`, `pagina`, `url`, `activo`) VALUES (5, 'monitoreo', 'monitoreo.php', '1');
INSERT INTO `hospital`.`Paginas` (`ID`, `pagina`, `url`, `activo`) VALUES (6, 'neonato', 'neonato.php', '1');
INSERT INTO `hospital`.`Paginas` (`ID`, `pagina`, `url`, `activo`) VALUES (7, 'profesional', 'profesional.php', '1');
INSERT INTO `hospital`.`Paginas` (`ID`, `pagina`, `url`, `activo`) VALUES (8, 'reportes', 'reportes.php', '1');
INSERT INTO `hospital`.`Paginas` (`ID`, `pagina`, `url`, `activo`) VALUES (9, 'consulta-certificado', 'consulta-certificado.php', '1');
INSERT INTO `hospital`.`Paginas` (`ID`, `pagina`, `url`, `activo`) VALUES (10, 'contacto', 'contacto.php', '1');
INSERT INTO `hospital`.`Paginas` (`ID`, `pagina`, `url`, `activo`) VALUES (11, 'editar-certificado', 'editar-certificado.php', '1');
INSERT INTO `hospital`.`Paginas` (`ID`, `pagina`, `url`, `activo`) VALUES (12, 'agrega-usuario', 'agrega-usuario.php', '1');
INSERT INTO `hospital`.`Paginas` (`ID`, `pagina`, `url`, `activo`) VALUES (13, 'editar-usuario', 'editar-usuario.php', '1');

COMMIT;


-- -----------------------------------------------------
-- Data for table `hospital`.`Role_has_Paginas`
-- -----------------------------------------------------
START TRANSACTION;
USE `hospital`;
INSERT INTO `hospital`.`Role_has_Paginas` (`Role_ID`, `Paginas_ID`, `descripcion`) VALUES (1, 8, 'doctor - reportes');
INSERT INTO `hospital`.`Role_has_Paginas` (`Role_ID`, `Paginas_ID`, `descripcion`) VALUES (1, 4, 'doctor - madre');
INSERT INTO `hospital`.`Role_has_Paginas` (`Role_ID`, `Paginas_ID`, `descripcion`) VALUES (1, 6, 'doctor - neonato');
INSERT INTO `hospital`.`Role_has_Paginas` (`Role_ID`, `Paginas_ID`, `descripcion`) VALUES (1, 7, 'doctor - profesional');
INSERT INTO `hospital`.`Role_has_Paginas` (`Role_ID`, `Paginas_ID`, `descripcion`) VALUES (2, 4, 'enfermero - madre');
INSERT INTO `hospital`.`Role_has_Paginas` (`Role_ID`, `Paginas_ID`, `descripcion`) VALUES (2, 6, 'enfemero - neonato');
INSERT INTO `hospital`.`Role_has_Paginas` (`Role_ID`, `Paginas_ID`, `descripcion`) VALUES (3, 8, 'director - reportes');
INSERT INTO `hospital`.`Role_has_Paginas` (`Role_ID`, `Paginas_ID`, `descripcion`) VALUES (4, 12, 'admin - agrega usuario');
INSERT INTO `hospital`.`Role_has_Paginas` (`Role_ID`, `Paginas_ID`, `descripcion`) VALUES (4, 13, 'admin - edita y elimina usuario');
INSERT INTO `hospital`.`Role_has_Paginas` (`Role_ID`, `Paginas_ID`, `descripcion`) VALUES (5, 1, 'dba - home');
INSERT INTO `hospital`.`Role_has_Paginas` (`Role_ID`, `Paginas_ID`, `descripcion`) VALUES (5, 4, 'dba - madre');
INSERT INTO `hospital`.`Role_has_Paginas` (`Role_ID`, `Paginas_ID`, `descripcion`) VALUES (5, 5, 'dba - monitoreo');
INSERT INTO `hospital`.`Role_has_Paginas` (`Role_ID`, `Paginas_ID`, `descripcion`) VALUES (5, 6, 'dba - neonato');
INSERT INTO `hospital`.`Role_has_Paginas` (`Role_ID`, `Paginas_ID`, `descripcion`) VALUES (5, 7, 'dba - profesional');
INSERT INTO `hospital`.`Role_has_Paginas` (`Role_ID`, `Paginas_ID`, `descripcion`) VALUES (5, 8, 'dba - reportes');
INSERT INTO `hospital`.`Role_has_Paginas` (`Role_ID`, `Paginas_ID`, `descripcion`) VALUES (5, 9, 'dba - consulta certificado');
INSERT INTO `hospital`.`Role_has_Paginas` (`Role_ID`, `Paginas_ID`, `descripcion`) VALUES (5, 11, 'dba - editar certificado');
INSERT INTO `hospital`.`Role_has_Paginas` (`Role_ID`, `Paginas_ID`, `descripcion`) VALUES (5, 12, 'dba - agrega usuario');
INSERT INTO `hospital`.`Role_has_Paginas` (`Role_ID`, `Paginas_ID`, `descripcion`) VALUES (5, 13, 'dba - edita y elimina usuarios');
INSERT INTO `hospital`.`Role_has_Paginas` (`Role_ID`, `Paginas_ID`, `descripcion`) VALUES (6, 5, 'monitoreo - monitoreo');

COMMIT;


-- -----------------------------------------------------
-- Data for table `hospital`.`RFID_log_usuarios`
-- -----------------------------------------------------
START TRANSACTION;
USE `hospital`;
INSERT INTO `hospital`.`RFID_log_usuarios` (`ID`, `area`, `hora_salida`, `hora_entrada`, `timestamp`, `Usuario_ID`) VALUES (1, 'INCUBADORA', '29-10-2016 01:14:00', '29-10-2016 19:51:00', '29-10-2016 00:51:00', 1);

COMMIT;


-- -----------------------------------------------------
-- Data for table `hospital`.`RFID_log_madre_neonato`
-- -----------------------------------------------------
START TRANSACTION;
USE `hospital`;
INSERT INTO `hospital`.`RFID_log_madre_neonato` (`ID`, `hora_entrada`, `hora_salida`, `timestamp`, `area`, `RFID_madre_neonato_id`, `RFID_madre_neonato_valor`) VALUES (1, '29-10-2016 1:51:00', '29-10-2016 19:51:00', '29-10-2016 19:51:00', 'INCUBADORA', 1, 'abc');

COMMIT;

