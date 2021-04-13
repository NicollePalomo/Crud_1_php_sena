CREATE SCHEMA IF NOT EXISTS sena_bd DEFAULT CHARACTER SET utf8 ;
USE sena_bd;


CREATE TABLE usuarios(
  usua_id INT(10) NOT NULL,
  usua_nomuser CHAR(50) NOT NULL,
  usua_contra CHAR(20) NOT NULL,
  usua_tipo CHAR(30) NOT NULL,
  PRIMARY KEY (usua_id));


CREATE TABLE tiposprograma(
  tiposp_id INT(10) NOT NULL,
  tiposp_tipo CHAR(30) NOT NULL,
  PRIMARY KEY (tiposp_id));


CREATE TABLE programa(
  progra_id INT(10) NOT NULL,
  progra_Nombre CHAR(20) NOT NULL,
  progra_tipo INT(5) NOT NULL,
  PRIMARY KEY (progra_id),
  CONSTRAINT fk_programa_tiposprograma
    FOREIGN KEY (progra_tipo)
    REFERENCES tiposprograma(tiposp_id));


CREATE TABLE fichas(
  ficha_numero INT(10) NOT NULL,
  ficha_progra INT(10) NOT NULL,
  PRIMARY KEY (ficha_numero),
  CONSTRAINT fk_fichas_programa1
    FOREIGN KEY (ficha_progra)
    REFERENCES programa (progra_id));


CREATE TABLE aprendices(
  Apre_id INT(10) NOT NULL,
  Apre_Tipoid CHAR(3) NOT NULL,
  Apre_Numid CHAR(20) NOT NULL,
  Apre_Nombres CHAR(60) NOT NULL,
  Apre_Apellidos CHAR(60) NOT NULL,
  Apre_Direccion CHAR(80) NOT NULL,
  Apre_Telefono CHAR(20) NOT NULL,
  Apre_Ficha INT(10) NOT NULL,
  PRIMARY KEY (Apre_id),
  CONSTRAINT fk_aprendices_fichas1
    FOREIGN KEY (Apre_Ficha)
    REFERENCES fichas(ficha_numero));
SHOW TABLES;