/*
Navicat PGSQL Data Transfer

Source Server         : TC2
Source Server Version : 90610
Source Host           : 159.65.230.188:5432
Source Database       : tcs2
Source Schema         : public

Target Server Type    : PGSQL
Target Server Version : 90610
File Encoding         : 65001

Date: 2018-11-01 10:13:50
*/


-- ----------------------------
-- Table structure for "public"."docente"
-- ----------------------------
CREATE SEQUENCE id_docente_seq MINVALUE 1 MAXVALUE 999999 INCREMENT BY 1;

CREATE TABLE "public"."docente" (
"id" int4 DEFAULT nextval('id_docente_seq'::regclass) NOT NULL,
"id_usuario" numeric,
"nombres" varchar(100),
"apell_pat" varchar(100),
"apell_mat" varchar(100),
"pais" varchar(30),
"tipo_document" varchar(100),
"nro_document" varchar(100),
"codigo" varchar(100),
"telefono" varchar(100),
"celular" varchar(100),
"email" varchar(100),
"linkedInId" varchar(100),
"genero" varchar(1),
"pag_web" varchar(100),
"foto" varchar(100),
"fecha_nac" date,
"direccion" varchar(200),
"mayor_grado" varchar(100),
"menc_grado" varchar(100),
"universidad" varchar(100),
"pais_grado" varchar(100),
"cv" varchar(100),
"fech_ingreso" varchar(100),
"sunedu_ley" varchar(2),
"nivel_programa" varchar(100),
"categoria" varchar(100),
"regimen_dedicacion" varchar(100),
"horas_semanales" varchar(100),
"investigador" varchar(2),
"dina" varchar(2),
"per_academico" varchar(100),
"observacion" varchar(100),
"resetPasswordExpires" timestamptz(6),
"resetPasswordToken" varchar(100),
"createdAt" timestamptz(6),
"updatedAt" timestamptz(6),
"logins" int4,
"profile" json,
"tokens" json
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of docente
-- ----------------------------
INSERT INTO "public"."docente" VALUES ('1', '10886', 'JHON PRUEBA', 'ALVAREZ', 'TERRON', 'Peru', 'DNI', '12314567', '15200238', '5210650', '936015877', 'jp@unmsm.edu.pe', 'no se', 'M', 'no se', 'no se', '2018-05-02', 'la punta', 'Doctorado', 'doctofeik', 'UNMSM', 'Peru', 'no se ', 'a numa', 'si', 'no se', 'no se', 'no se', 'no se', 'si', 'si', 'no se', 'no se', '2018-05-03 21:43:55.286+00', 'no se', '2018-05-03 21:44:12.665+00', '2018-05-03 21:44:16.561+00', '2', null, null);
INSERT INTO "public"."docente" VALUES ('2', '10887', 'LUIS ALBERTO', 'ALARCON ', 'LOAYZA ', 'Peru', 'DNI', '456684', '0', '-', '-', '2', '2', 'M', '-', '-', '1900-01-01', '-', 'Bachiller', 'COMPUTACIÃ“N', 'UNMSM', 'Peru', '-', '01/03/2003', '-', '-', 'Ordinario Asociado', 'Tiempo Parcial', '11', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('3', '10888', 'CESAR AUGUSTO', 'ALCANTARA ', 'LOAYZA ', 'Peru', 'DNI', '9132297', '0', '-', '-', '3', '3', 'M', '-', '-', '1900-01-01', '-', 'Maestro', 'AdministraciÃ³n de Tecnologia de InformaciÃ³n', 'TecnolÃ³gico 
 de Monterrey', 'Mexico - Maestria
  Virtual(Acreditada 
por SACS)
 ', '-', '01/03/2003', '-', '-', 'Ordinario Asociado', 'Tiempo Parcial', '12', 'No', 'No', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('4', '10889', 'ALFREDO CELSO', 'ALVA ', 'BRAVO ', 'Peru', 'DNI', '8739539', '0', '-', '-', '4', '4', 'M', '-', '-', '1900-01-01', '-', 'Maestro', 'CIENCIA DE LA COMPUTACIÃ“N', 'TEXAS A&M', 'E.U.', '-', '01/04/1976', '-', '-', 'Ordinario Asociado', 'Tiempo Parcial', '10', 'No', 'No', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('5', '10890', 'CESAR AUGUSTO', 'ANGULO ', 'CALDERON ', 'Peru', 'DNI', '32907109', '0', '-', '-', '5', '5', 'M', '-', '-', '1900-01-01', '-', 'Bachiller', 'COMPUTACIÃ“N', 'UNMSM', 'Peru', '-', '11/03/2010', '-', '-', 'Ordinario Auxiliar', 'Tiempo Parcial', '10', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('6', '10891', 'RAUL MARCELO', 'ARMAS ', 'CALDERON ', 'Peru', 'DNI', '7156168', '0', '-', '-', '6', '6', 'M', '-', '-', '1900-01-01', '-', 'Bachiller', 'Ing. Electronica
 -Economia', 'UNMSM', 'Peru', '-', '01/03/2003', '-', '-', 'Ordinario Asociado', 'Tiempo Parcial', '12', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('7', '10892', 'GUSTAVO', 'ARREDONDO ', 'CASTILLO ', 'Peru', 'DNI', '6058679', '0', '-', '-', '7', '7', 'M', '-', '-', '1900-01-01', '-', 'Bachiller', 'COMPUTACIÃ“N', 'UNMSM', 'Peru', '-', '17/12/2012', '-', '-', 'Ordinario Auxiliar', 'Tiempo Completo', '15', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('8', '10893', 'JOHNNY ROBERT', 'AVENDAÃ‘O ', 'QUIROZ ', 'Peru', 'DNI', '9739286', '0', '-', '-', '8', '8', 'M', '-', '-', '1900-01-01', '-', 'Maestro', 'MatemÃ¡tica', 'UNMSM', 'Peru', '-', '11/03/2010', '-', '-', 'Ordinario Asociado', 'Tiempo Parcial', '13', 'No', 'No', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('9', '10894', 'ARTURO ALEJANDRO', 'BARTRA ', 'MORE ', 'Peru', 'DNI', '40233946', '0', '-', '-', '9', '9', 'M', '-', '-', '1900-01-01', '-', 'Bachiller', 'Ingenieria de Sistemas', 'UNMSM', 'Peru', '-', '17/12/2012', '-', '-', 'Ordinario Auxiliar', 'Tiempo Completo', '16', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('10', '10895', 'VICTOR HUGO', 'BUSTAMANTE ', 'OLIVERA ', 'Peru', 'DNI', '25655590', '0', '-', '-', '10', '10', 'M', '-', '-', '1900-01-01', '-', 'Bachiller', 'COMPUTACIÃ“N', 'UNMSM', 'Peru', '-', '01/03/2003', '-', '-', 'Ordinario Asociado', 'Tiempo Parcial', '11', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('11', '10896', 'JAVIER ELMER', 'CABRERA ', 'DIAZ ', 'Peru', 'DNI', '8692591', '0', '-', '-', '11', '11', 'M', '-', '-', '1900-01-01', '-', 'Maestro', 'ComputaciÃ³n e Informatica', 'UNMSM', 'Peru', '-', '02/12/1994', '-', '-', 'Ordinario Asociado', 'Tiempo Completo', '14', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('12', '10897', 'ROBERTO FRANCISCO', 'CALMET ', 'AGNELLI ', 'Peru', 'DNI', '25496930', '0', '-', '-', '12', '12', 'M', '-', '-', '1900-01-01', '-', 'Maestro', 'ComputaciÃ³n e Informatica', 'UNMSM', 'Peru', '-', '01/03/2000', '-', '-', 'Ordinario Auxiliar', 'Tiempo Parcial', '12', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('13', '10898', 'ADEGUNDO MARIO', 'CAMARA ', 'FIGUEROA ', 'Peru', 'DNI', '9095759', '0', '-', '-', '13', '13', 'M', '-', '-', '1900-01-01', '-', 'Bachiller', 'ComputaciÃ³n
 - Ing. Sistemas', 'UNMSM', 'Peru', '-', '22/01/2014', '-', '-', 'Ordinario Auxiliar', 'Tiempo Parcial', '8', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('14', '10899', 'CARLOS ALBERTO', 'CANEPA ', 'PEREZ ', 'Peru', 'DNI', '25522598', '0', '-', '-', '14', '14', 'M', '-', '-', '1900-01-01', '-', 'Maestro', 'Ing. Sistemas', 'UNMSM', 'Peru', '-', '05/12/1991', '-', '-', 'Ordinario Auxiliar', 'Tiempo Completo', '11', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('15', '10900', 'NILO ELOY', 'CARRASCO ', 'ORE ', 'Peru', 'DNI', '9342780', '0', '-', '-', '15', '15', 'M', '-', '-', '1900-01-01', '-', 'Bachiller', 'Ingeniera de Sistemas', 'UNMSM', 'Peru', '-', '01/03/2008', '-', '-', 'Ordinario Asociado', 'Tiempo Parcial', '12', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('16', '10901', 'GLORIA HELENA', 'CASTRO ', 'LEON ', 'Peru', 'DNI', '7300096', '0', '-', '-', '16', '16', 'F', '-', '-', '1900-01-01', '-', 'Maestro', 'AdministraciÃ³n', 'U.N.F.V.', 'Peru', '-', '01/03/2003', '-', '-', 'Ordinario Asociado', 'Tiempo Completo', '14', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('17', '10902', 'CARLOS ERNESTO', 'CHAVEZ ', 'HERRERA ', 'Peru', 'DNI', '40788722', '0', '-', '-', '17', '17', 'M', '-', '-', '1900-01-01', '-', 'Bachiller', 'Ingenieria de Sistemas', 'U.A.P', 'Peru', '-', '17/12/2012', '-', '-', 'Ordinario Auxiliar', 'Tiempo Completo', '15', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('18', '10903', 'JORGE LUIS', 'CHAVEZ ', 'SOTO ', 'Peru', 'DNI', '8675814', '0', '-', '-', '18', '18', 'M', '-', '-', '1900-01-01', '-', 'Bachiller', 'ComputaciÃ³n
 - Ingenieria de Sistemas', 'UNMSM', 'Peru', '-', '01/03/2003', '-', '-', 'Ordinario Asociado', 'Tiempo Parcial', '12', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('19', '10904', 'WALTER PEDRO', 'CONTRERAS ', 'FLORES ', 'Peru', 'DNI', '7743259', '0', '-', '-', '19', '19', 'M', '-', '-', '1900-01-01', '-', 'Bachiller', 'COMPUTACIÃ“N', 'UNMSM', 'Peru', '-', '01/03/2003', '-', '-', 'Ordinario Asociado', 'Tiempo Parcial', '11', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('20', '10905', 'MARCO ANTONIO', 'CORAL ', 'YGNACIO ', 'Peru', 'DNI', '9983907', '0', '-', '-', '20', '20', 'M', '-', '-', '1900-01-01', '-', 'Maestro', 'Ing. Sistemas', 'Inca Garcialazo
  de la Vega', 'Peru', '-', '29/03/2009', '-', '-', 'Ordinario Asociado', 'Tiempo Parcial', '11', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('21', '10906', 'HUGO RAFAEL', 'CORDERO ', 'SANCHEZ ', 'Peru', 'DNI', '25866184', '0', '-', '-', '21', '21', 'M', '-', '-', '1900-01-01', '-', 'Bachiller', 'Ingenieria de Sistemas', 'UNMSM', 'Peru', '-', '17/12/2012', '-', '-', 'Ordinario Auxiliar', 'Tiempo Completo', '13', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('22', '10907', 'AUGUSTO PARCEMON', 'CORTEZ ', 'VASQUEZ ', 'Peru', 'DNI', '8634618', '0', '-', '-', '22', '22', 'M', '-', '-', '1900-01-01', '-', 'Maestro', 'ComputaciÃ³n e Informatica', 'UNMSM', 'Peru', '-', '02/12/1994', '-', '-', 'Ordinario Principal', 'Tiempo Completo', '19', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('23', '10908', 'MARIA ROSA', 'DAMASO ', 'RIOS ', 'Peru', 'DNI', '7240690', '0', '-', '-', '23', '23', 'F', '-', '-', '1900-01-01', '-', 'Bachiller', 'ComputaciÃ³n
 - Ingeniera de Sistemas', 'UNMSM', 'Peru', '-', '27/03/1997', '-', '-', 'Ordinario Auxiliar', 'Tiempo Completo', '14', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('24', '10909', 'PERCY EDWIN', 'DE LA CRUZ ', 'VELEZ DE VILLA ', 'Peru', 'DNI', '8583141', '0', '-', '-', '24', '24', 'M', '-', '-', '1900-01-01', '-', 'Maestro', 'ComputaciÃ³n e Informatica', 'UNMSM', 'Peru', '-', '02/12/1994', '-', '-', 'Ordinario Principal', 'Tiempo Completo', '11', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('25', '10910', 'LUZ CORINA', 'DEL PINO ', 'RODRIGUEZ ', 'Peru', 'DNI', '7406351', '0', '-', '-', '25', '25', 'F', '-', '-', '1900-01-01', '-', 'Maestro', 'Ing. Sistemas', 'Universidad Federal de
  Rio de Janeiro.', 'Brasil', '-', '02/12/1994', '-', '-', 'Ordinario Asociado', 'Tiempo Parcial', '10', 'No', 'No', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('26', '10911', 'ROSA SUMACTIKA', 'DELGADILLO ', 'AVILA DE MAURICIO ', 'Peru', 'DNI', '6445553', '0', '-', '-', '26', '26', 'F', '-', '-', '1900-01-01', '-', 'Doctor', 'Enghenaria da Producao', 'Univeridad:  Pontificia
 Universidad de Rio de 
 Janeiro- Brasil', 'Brasil', '-', '01/03/2008', '-', '-', 'Ordinario Asociado', 'Tiempo Parcial', '8', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('27', '10912', 'JORGE RAUL', 'DIAZ ', 'MUÃ‘ANTE ', 'Peru', 'DNI', '7216161', '0', '-', '-', '27', '27', 'M', '-', '-', '1900-01-01', '-', 'Maestro', 'GestiÃ³n de tecnologia e InformaciÃ³n', 'UNMSM', 'Peru', '-', '27/03/2009', '-', '-', 'Ordinario Asociado', 'Tiempo Parcial', '11', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('28', '10913', 'WILLIAM MARTIN', 'ENRIQUEZ ', 'MAGUIÃ‘A ', 'Peru', 'DNI', '6179457', '0', '-', '-', '28', '28', 'M', '-', '-', '1900-01-01', '-', 'Bachiller', 'COMPUTACIÃ“N', 'UNMSM', 'Peru', '-', '01/03/2008', '-', '-', 'Ordinario Asociado', 'Tiempo Parcial', '13', 'No', 'No', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('29', '10914', 'FRANK EDMUNDO', 'ESCOBEDO ', 'BAILON ', 'Peru', 'DNI', '41671087', '0', '-', '-', '29', '29', 'M', '-', '-', '1900-01-01', '-', 'Doctor', 'Ingenieria de Sistemas', 'UNFV', 'Peru', '-', '11/03/2010', '-', '-', 'Ordinario Auxiliar', 'Tiempo Parcial', '11', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('30', '10915', 'ROBERT ELIAS', 'ESPINOZA ', 'DOMINGUEZ ', 'Peru', 'DNI', '8136325', '0', '-', '-', '30', '30', 'M', '-', '-', '1900-01-01', '-', 'Bachiller', 'COMPUTACIÃ“N', 'UNMSM', 'Peru', '-', '11/03/2010', '-', '-', 'Ordinario Asociado', 'Tiempo Completo', '16', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('31', '10916', 'ARMANDO DAVID', 'ESPINOZA ', 'ROBLES ', 'Peru', 'DNI', '8633326', '0', '-', '-', '31', '31', 'M', '-', '-', '1900-01-01', '-', 'Bachiller', 'COMPUTACIÃ“N', 'UNMSM', 'Peru', '-', '29/03/2009', '-', '-', 'Ordinario Auxiliar', 'Tiempo Parcial', '12', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('32', '10917', 'FELIX ARMANDO', 'FERMIN ', 'PEREZ ', 'Peru', 'DNI', '8736347', '0', '-', '-', '32', '32', 'M', '-', '-', '1900-01-01', '-', 'Bachiller', 'Ingenieria
  ElectrÃ³nica', 'UNMSM', 'Peru', '-', '01/03/2013', '-', '-', 'Ordinario Asociado', 'Tiempo Parcial', '17', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('33', '10918', 'JOSE LUIS', 'GALINDO ', 'HUAYLLANI ', 'Peru', 'DNI', '40420186', '0', '-', '-', '33', '33', 'M', '-', '-', '1900-01-01', '-', 'Bachiller', 'Ingenieria de Sistemas', 'UNMSM', 'Peru', '-', '27/03/2009', '-', '-', 'Ordinario Asociado', 'Tiempo Parcial', '10', 'No', 'No', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('34', '10919', 'JUAN', 'GAMARRA ', 'MORENO ', 'Peru', 'DNI', '20039857', '0', '-', '-', '34', '34', 'M', '-', '-', '1900-01-01', '-', 'Maestro', 'Ingenieria de Sistemas', 'U.N.I', 'Peru', '-', '11/03/2013', '-', '-', 'Ordinario Auxiliar', 'Tiempo Completo', '17', 'No', 'No', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('35', '10920', 'JAVIER ARTURO', 'GAMBOA ', 'CRUZADO ', 'Peru', 'DNI', '17906323', '0', '-', '-', '35', '35', 'M', '-', '-', '1900-01-01', '-', 'Doctor', 'Ing. Sistemas', 'UNFV', 'Peru', '-', '11/03/2010', '-', '-', 'Ordinario Asociado', 'Tiempo Completo', '13', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('36', '10921', 'RUBEN ALEXANDER', 'GIL ', 'CALVO ', 'Peru', 'DNI', '7247380', '0', '-', '-', '36', '36', 'M', '-', '-', '1900-01-01', '-', 'Bachiller', 'COMPUTACIÃ“N', 'UNMSM', 'Peru', '-', '02/12/1994', '-', '-', 'Ordinario Asociado', 'Tiempo Parcial', '10', 'No', 'No', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('37', '10922', 'JUAN CARLOS', 'GONZALES ', 'SUAREZ ', 'Peru', 'DNI', '7566359', '0', '-', '-', '37', '37', 'M', '-', '-', '1900-01-01', '-', 'Maestro', 'ComputaciÃ³n en Informatica', 'UNMSM', 'Peru', '-', '05/12/1990', '-', '-', 'Ordinario Principal', 'Tiempo Completo', '16', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('38', '10923', 'LUIS ANGEL', 'GUERRA ', 'GRADOS ', 'Peru', 'DNI', '15644548', '0', '-', '-', '38', '38', 'M', '-', '-', '1900-01-01', '-', 'Bachiller', 'ComputaciÃ³n
 - Ingenieria de Sistemas', 'UNMSM', 'Peru', '-', '01/04/2002', '-', '-', 'Ordinario Auxiliar', 'Tiempo Completo', '16', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('39', '10924', 'JORGE LEONCIO', 'GUERRA ', 'GUERRA ', 'Peru', 'DNI', '8473333', '0', '-', '-', '39', '39', 'M', '-', '-', '1900-01-01', '-', 'Bachiller', 'ComputaciÃ³n
 - Ingenieria ElectrÃ³nica', 'UNMSM', 'Peru', '-', '01/03/2000', '-', '-', 'Ordinario Asociado', 'Tiempo Parcial', '19', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('40', '10925', 'ANA MARIA', 'HUAYNA ', 'DUEÃ‘AS VDA DE DIAZ ', 'Peru', 'DNI', '6017183', '0', '-', '-', '40', '40', 'F', '-', '-', '1900-01-01', '-', 'Bachiller', 'ComputaciÃ³n
  - Ing. Sistemas', 'UNMSM', 'Peru', '-', '01/03/2003', '-', '-', 'Ordinario Asociado', 'Tiempo Completo', '14', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('41', '10926', 'NORA BERTHA', 'LA SERNA ', 'PALOMINO ', 'Peru', 'DNI', '7665297', '0', '-', '-', '41', '41', 'F', '-', '-', '1900-01-01', '-', 'Doctor', 'InformÃ¡tica', 'Universidad del Pais Vasco', 'EspaÃ±a', '-', '02/12/1994', '-', '-', 'Ordinario Asociado', 'Tiempo Completo', '11', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('42', '10927', 'ZHING FONG O JING FENG', 'LAM O LIN  ', '.', 'Peru', 'DNI', '294538', '0', '-', '-', '42', '42', 'M', '-', '-', '1900-01-01', '-', 'Bachiller', 'COMPUTACIÃ“N', 'UNMSM', 'Peru', '-', '01/03/2007', '-', '-', 'Ordinario Principal', 'Tiempo Parcial', '12', 'No', 'No', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('43', '10928', 'CAYO VICTOR', 'LEON ', 'FERNANDEZ ', 'Peru', 'DNI', '7001405', '0', '-', '-', '43', '43', 'M', '-', '-', '1900-01-01', '-', 'Maestro', 'ComputaciÃ³n e Infomatica', 'UNMSM', 'Peru', '-', '02/12/1994', '-', '-', 'Ordinario Auxiliar', 'Tiempo Completo', '14', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('44', '10929', 'PABLO EDWIN', 'LOPEZ ', 'VILLANUEVA ', 'Peru', 'DNI', '32920084', '0', '-', '-', '44', '44', 'M', '-', '-', '1900-01-01', '-', 'Bachiller', 'COMPUTACIÃ“N', 'UNMSM', 'Peru', '-', '27/03/2009', '-', '-', 'Ordinario Asociado', 'Tiempo Completo', '19', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('45', '10930', 'CESAR', 'LUZA ', 'MONTERO ', 'Peru', 'DNI', '6111988', '0', '-', '-', '45', '45', 'M', '-', '-', '1900-01-01', '-', 'Maestro', 'Ingenieria de Sistemas', 'Inca Garcialazo
  de la Vega', 'Peru', '-', '01/03/2003', '-', '-', 'Ordinario Auxiliar', 'Tiempo Parcial', '11', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('46', '10931', 'ERWIN', 'MAC DOWALL ', 'REYNOSO ', 'Peru', 'DNI', '6132166', '0', '-', '-', '46', '46', 'M', '-', '-', '1900-01-01', '-', 'Maestro', 'COMPUTACIÃ“N', 'Universidad
  Federal de Rio
  de Janeiro.', 'Brasil', '-', '27/03/2009', '-', '-', 'Ordinario Auxiliar', 'Tiempo Parcial', '14', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('47', '10932', 'JOEL FERNANDO', 'MACHADO ', 'VICENTE ', 'Peru', 'DNI', '40476778', '0', '-', '-', '47', '47', 'M', '-', '-', '1900-01-01', '-', 'Maestro', 'Tecnologia de InformaciÃ³n', 'ESAN', 'Peru', '-', '17/12/2012', '-', '-', 'Ordinario Auxiliar', 'Tiempo Completo', '17', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('48', '10933', 'ROLANDO ALBERTO', 'MAGUIÃ‘A ', 'PEREZ ', 'Peru', 'DNI', '6092844', '0', '-', '-', '48', '48', 'M', '-', '-', '1900-01-01', '-', 'Maestro', 'Ciencia en
 Ing. Mecanica', 'Universidad Federal de 
 RÃ­o de janeiro', 'Brasil', '-', '01/03/2010', '-', '-', 'Ordinario Auxiliar', 'Tiempo Parcial', '7', 'No', 'No', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('49', '10934', 'ZORAIDA EMPERATRIZ', 'MAMANI ', 'RODRIGUEZ ', 'Peru', 'DNI', '9680972', '0', '-', '-', '49', '49', 'F', '-', '-', '1900-01-01', '-', 'Maestro', 'ComputaciÃ³n en Informatica', 'UNMSM', 'Peru', '-', '01/03/2003', '-', '-', 'Ordinario Asociado', 'Tiempo Completo', '12', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('50', '10935', 'DAVID SANTOS', 'MAURICIO ', 'SANCHEZ ', 'Peru', 'DNI', '6445495', '0', '-', '-', '50', '50', 'M', '-', '-', '1900-01-01', '-', 'Doctor', 'Ciencia en Ingenieria de Sistemas y ComputaciÃ³n', 'Universidad Federal de Rio Janeiro', 'Brasil', '-', '01/03/2000', '-', '-', 'Ordinario Principal', 'Tiempo Completo', '6', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('51', '10936', 'CESAR ALBERTO', 'MOLINA ', 'NEYRA ', 'Peru', 'DNI', '40553679', '0', '-', '-', '51', '51', 'M', '-', '-', '1900-01-01', '-', 'Bachiller', 'Ingenieria de Sistemas', 'UNMSM', 'Peru', '-', '27/03/2003', '-', '-', 'Ordinario Asociado', 'Tiempo Parcial', '11', 'No', 'No', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('52', '10937', 'ROMEL', 'MOLINA ', 'SALAS ', 'Peru', 'DNI', '10375787', '0', '-', '-', '52', '52', 'M', '-', '-', '1900-01-01', '-', 'Bachiller', 'Derecho', 'UNMSM', 'Peru', '-', '01/03/2008', '-', '-', 'Ordinario Auxiliar', 'Tiempo Parcial', '10', 'No', 'No', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('53', '10938', 'SANTIAGO DOMINGO', 'MOQUILLAZA ', 'HENRIQUEZ ', 'Peru', 'DNI', '8280889', '0', '-', '-', '53', '53', 'M', '-', '-', '1900-01-01', '-', 'Bachiller', 'ComputaciÃ³n
 - Ingenieria de Sistemas', 'UNMSM', 'Peru', '-', '11/03/2010', '-', '-', 'Ordinario Auxiliar', 'Tiempo Parcial', '11', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('54', '10939', 'LAZARO FLORIAN', 'MOTA ', 'ALVA ', 'Peru', 'DNI', '8529540', '0', '-', '-', '54', '54', 'M', '-', '-', '1900-01-01', '-', 'Bachiller', 'COMPUTACIÃ“N', 'UNMSM', 'Peru', '-', '05/12/2016', '-', '-', 'Ordinario Asociado', 'Tiempo Completo', '15', 'No', 'No', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('55', '10940', 'NEHIL INDALICIO', 'MUÃ‘OZ ', 'CASILDO ', 'Peru', 'DNI', '9727623', '0', '-', '-', '55', '55', 'M', '-', '-', '1900-01-01', '-', 'Maestro', 'Ingenieria de Software', 'UNMSM', 'Peru', '-', '29/03/2009', '-', '-', 'Ordinario Auxiliar', 'Tiempo Completo', '14', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('56', '10941', 'SUMIKO ELIZABETH', 'MURAKAMI', 'DE LA CRUZ DE MOLINA ', 'Peru', 'DNI', '10606923', '0', '-', '-', '56', '56', 'F', '-', '-', '1900-01-01', '-', 'Bachiller', 'Ing. Sistemas', 'UNMSM', 'Peru', '-', '17/12/2012', '-', '-', 'Ordinario Auxiliar', 'Tiempo Completo', '9', 'No', 'No', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('57', '10942', 'CARLOS EDMUNDO', 'NAVARRO ', 'DEPAZ ', 'Peru', 'DNI', '8482690', '0', '-', '-', '57', '57', 'M', '-', '-', '1900-01-01', '-', 'Doctor', 'Ingenieria de Sistemas', 'U.N. F. V', 'Peru', '-', '02/12/1994', '-', '-', 'Ordinario Principal', 'Tiempo Completo', '13', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('58', '10943', 'DANIEL', 'ORTEGA ', 'LOAYZA ', 'Peru', 'DNI', '41075698', '0', '-', '-', '58', '58', 'M', '-', '-', '1900-01-01', '-', 'Doctor', 'AdministraciÃ³n', 'Pacifico', 'Peru', '-', null, '-', '-', 'Ordinario Asociado', 'Tiempo Parcial', '12', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('59', '10944', 'NORBERTO ANTONIO', 'OSORIO ', 'BELTRAN ', 'Peru', 'DNI', '8799230', '0', '-', '-', '59', '59', 'M', '-', '-', '1900-01-01', '-', 'Bachiller', 'COMPUTACIÃ“N', 'UNMSM', 'Peru', '-', '11/03/2010', '-', '-', 'Ordinario Asociado', 'Tiempo Parcial', '10', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('60', '10945', 'JORGE SANTIAGO', 'PANTOJA ', 'COLLANTES ', 'Peru', 'DNI', '6254022', '0', '-', '-', '60', '60', 'M', '-', '-', '1900-01-01', '-', 'Bachiller', 'COMPUTACIÃ“N', 'UNMSM', 'Peru', '-', '27/03/2009', '-', '-', 'Ordinario Auxiliar', 'Tiempo Parcial', '7', 'No', 'No', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('61', '10946', 'JAIME RUBEN', 'PARIONA ', 'QUISPE ', 'Peru', 'DNI', '6220658', '0', '-', '-', '61', '61', 'M', '-', '-', '1900-01-01', '-', 'Bachiller', 'COMPUTACIÃ“N', 'UNMSM', 'Peru', '-', '02/12/1994', '-', '-', 'Ordinario Asociado', 'Tiempo Completo', '16', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('62', '10947', 'JOSE ANTONIO', 'PEREZ ', 'QUINTANILLA ', 'Peru', 'DNI', '8646977', '0', '-', '-', '62', '62', 'M', '-', '-', '1900-01-01', '-', 'Bachiller', 'ComputaciÃ³n
 - Ing. de Sistemas', 'UNMSM', 'Peru', '-', '01/03/2008', '-', '-', 'Ordinario Asociado', 'Tiempo Parcial', '10', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('63', '10948', 'JOSE CESAR', 'PIEDRA ', 'ISUSQUI ', 'Peru', 'DNI', '25628915', '0', '-', '-', '63', '63', 'M', '-', '-', '1900-01-01', '-', 'Bachiller', 'COMPUTACIÃ“N', 'UNMSM', 'Peru', '-', '02/12/1994', '-', '-', 'Ordinario Asociado', 'Tiempo Completo', '16', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('64', '10949', 'JOHNY', 'PRETELL ', 'CRUZADO ', 'Peru', 'DNI', '18104839', '0', '-', '-', '64', '64', 'M', '-', '-', '1900-01-01', '-', 'Bachiller', 'Ingenieria', 'U.N.T', 'Peru', '-', null, '-', '-', 'Ordinario Asociado', 'Tiempo Parcial', '13', 'No', 'No', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('65', '10950', 'LUZMILA ELISA', 'PRÃ“ ', 'CONCEPCIÃ“N ', 'Peru', 'DNI', '8862360', '0', '-', '-', '65', '65', 'F', '-', '-', '1900-01-01', '-', 'Doctor', 'Ing. Sistemas', 'U. N. F. V.', 'Peru', '-', null, '-', '-', 'Ordinario Principal', 'DedicaciÃ³n Exclusiva', '15', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('66', '10951', 'DANIEL ALFONSO', 'QUINTO ', 'PAZCE ', 'Peru', 'DNI', '10372726', '0', '-', '-', '66', '66', 'M', '-', '-', '1900-01-01', '-', 'Maestro', 'Ing. Sistemas', 'U. N. F. V.', 'Peru', '-', '01/01/1985', '-', '-', 'Ordinario Asociado', 'DedicaciÃ³n Exclusiva', '14', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('67', '10952', 'MARCOS HERNAN', 'RIVAS ', 'PEÃ‘A ', 'Peru', 'DNI', '9241816', '0', '-', '-', '67', '67', 'M', '-', '-', '1900-01-01', '-', 'Maestro', 'InvestigaciÃ³n de Operaciones y sistemas', 'UNMSM', 'Peru', '-', '27/03/2009', '-', '-', 'Ordinario Principal', 'Tiempo Parcial', '10', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('68', '10953', 'NORBERTO ULISES', 'ROMAN ', 'CONCHA ', 'Peru', 'DNI', '8510560', '0', '-', '-', '68', '68', 'M', '-', '-', '1900-01-01', '-', 'Bachiller', 'COMPUTACIÃ“N', 'UNMSM', 'Peru', '-', '01/03/2000', '-', '-', 'Ordinario Asociado', 'Tiempo Completo', '13', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('69', '10954', 'PABLO JESUS', 'ROMERO ', 'NAUPARI ', 'Peru', 'DNI', '6182185', '0', '-', '-', '69', '69', 'M', '-', '-', '1900-01-01', '-', 'Bachiller', 'COMPUTACIÃ“N', 'UNMSM', 'Peru', '-', '02/12/1994', '-', '-', 'Ordinario Asociado', 'Tiempo Completo', '13', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('70', '10955', 'MELO CARLOS AUGUSTO', 'RUIZ ', 'DE LA CRUZ ', 'Peru', 'DNI', '8960021', '0', '-', '-', '70', '70', 'M', '-', '-', '1900-01-01', '-', 'Bachiller', 'COMPUTACIÃ“N', 'UNMSM', 'Peru', '-', '01/03/2003', '-', '-', 'Ordinario Asociado', 'Tiempo Parcial', '10', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('71', '10956', 'MARIA ELENA', 'RUIZ ', 'RIVERA ', 'Peru', 'DNI', '8249640', '0', '-', '-', '71', '71', 'F', '-', '-', '1900-01-01', '-', 'Bachiller', 'COMPUTACIÃ“N', 'UNMSM', 'Peru', '-', '01/03/2003', '-', '-', 'Ordinario Auxiliar', 'Tiempo Completo', '10', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('72', '10957', 'GILBERTO ANIBAL', 'SALINAS ', 'AZAÃ‘A ', 'Peru', 'DNI', '8105290', '0', '-', '-', '72', '72', 'M', '-', '-', '1900-01-01', '-', 'Bachiller', 'Ingenieria Industrial
 - EducaciÃ³n', '#¿NOMBRE?', 'Peru', '-', '01/03/2007', '-', '-', 'Ordinario Auxiliar', 'Tiempo Completo', '11', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('73', '10958', 'FANY YEXENIA', 'SOBERO ', 'RODRIGUEZ ', 'Peru', 'DNI', '20120467', '0', '-', '-', '73', '73', 'F', '-', '-', '1900-01-01', '-', 'Bachiller', 'Ing. de Sistemas', 'UNMSM', 'Peru', '-', '27/03/2009', '-', '-', 'Ordinario Asociado', 'Tiempo Parcial', '13', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('74', '10959', 'ADOLFO MARCOS', 'SOTELO ', 'BEDON ', 'Peru', 'DNI', '10372605', '0', '-', '-', '74', '74', 'M', '-', '-', '1900-01-01', '-', 'Maestro', 'Ciencia de la ComputaciÃ³n', 'Universidad Federal de Rio Grande del Sur', 'Brasil', '-', '27/03/2009', '-', '-', 'Ordinario Asociado', 'Tiempo Parcial', '13', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('75', '10960', 'LUIS', 'SOTO ', 'SOTO ', 'Peru', 'DNI', '22409532', '0', '-', '-', '75', '75', 'M', '-', '-', '1900-01-01', '-', 'Doctor', 'Ingenieria de Sistemas', 'U. N. F.V.', 'Peru', '-', '11/03/2010', '-', '-', 'Ordinario Asociado', 'Tiempo Parcial', '11', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('76', '10961', 'JOHN LEDGARD', 'TRUJILLO ', 'TREJO ', 'Peru', 'DNI', '6187585', '0', '-', '-', '76', '76', 'M', '-', '-', '1900-01-01', '-', 'Bachiller', 'ComputaciÃ³n
 - Ingenieria Electronica', 'UNMSM', 'Peru', '-', '01/03/2003', '-', '-', 'Ordinario Auxiliar', 'Tiempo Parcial', '15', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('77', '10962', 'WINSTON IGNACIO', 'UGAZ ', 'CACHAY ', 'Peru', 'DNI', '40555355', '0', '-', '-', '77', '77', 'M', '-', '-', '1900-01-01', '-', 'Bachiller', 'Ing. Sistemas', 'UNMSM', 'Peru', '-', '17/12/2012', '-', '-', 'Ordinario Asociado', 'Tiempo Completo', '14', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('78', '10963', 'GIOVANNA MELVA', 'VALVERDE ', 'AYALA ', 'Peru', 'DNI', '8536719', '0', '-', '-', '78', '78', 'F', '-', '-', '1900-01-01', '-', 'Maestro', 'InvestigaciÃ³n de Operaciones y sistemas', 'UNMSM', 'Peru', '-', '05/12/1990', '-', '-', 'Ordinario Asociado', 'DedicaciÃ³n Exclusiva', '10', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('79', '10964', 'HUGO FROILAN', 'VEGA ', 'HUERTA ', 'Peru', 'DNI', '6147737', '0', '-', '-', '79', '79', 'M', '-', '-', '1900-01-01', '-', 'Doctor', 'Ingenieria de Sistemas', 'U. N. F. V.', 'Peru', '-', '01/03/2003', '-', '-', 'Ordinario Principal', 'Tiempo Completo', '12', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('80', '10965', 'VIRGINIA', 'VERA ', 'POMALAZA ', 'Peru', 'DNI', '9813434', '0', '-', '-', '80', '80', 'F', '-', '-', '1900-01-01', '-', 'Maestro', 'ComputaciÃ³n e Infomatica', 'UNMSM', 'Peru', '-', '02/12/1985', '-', '-', 'Ordinario Auxiliar', 'Tiempo Completo', '15', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('81', '10966', 'PERCY ELIAS', 'VIVANCO ', 'MUÃ‘OZ ', 'Peru', 'DNI', '6797993', '0', '-', '-', '81', '81', 'M', '-', '-', '1900-01-01', '-', 'Bachiller', 'Ingenieria de Sistemas', 'UNMSM', 'Peru', '-', '11/03/2010', '-', '-', 'Ordinario Auxiliar', 'Tiempo Parcial', '9', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('82', '10967', 'LENIS ROSSI', 'WONG ', 'PORTILLO ', 'Peru', 'DNI', '10438282', '0', '-', '-', '82', '82', 'F', '-', '-', '1900-01-01', '-', 'Maestro', 'Ingenieria de Software', 'UNMSM', 'Peru', '-', '17/12/2012', '-', '-', 'Ordinario Auxiliar', 'Tiempo Completo', '13', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('83', '10968', 'CARLOS ENRIQUE', 'YAÃ‘EZ ', 'DURAN ', 'Peru', 'DNI', '8467451', '0', '-', '-', '83', '83', 'M', '-', '-', '1900-01-01', '-', 'Bachiller', 'ComputaciÃ³n
 - Ingenieria de Sistemas', 'UNMSM', 'Peru', '-', '01/01/1985', '-', '-', 'Ordinario Asociado', 'Tiempo Completo', '10', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('84', '10969', 'CARLOS MIGUEL', 'ZAMBRANO ', 'GREEN ', 'Peru', 'DNI', '40026175', '0', '-', '-', '84', '84', 'M', '-', '-', '1900-01-01', '-', 'Bachiller', 'Ingenieria de Sistemas', 'UNMSM', 'Peru', '-', '22/01/2014', '-', '-', 'Ordinario Auxiliar', 'Tiempo Parcial', '0', 'No', 'No', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('85', '10970', 'JORGE LUIS', 'ZAVALETA ', 'CAMPOS ', 'Peru', 'DNI', '9696217', '0', '-', '-', '85', '85', 'M', '-', '-', '1900-01-01', '-', 'Bachiller', 'Ingenieria de Sistemas', 'UNMSM', 'Peru', '-', '11/03/2010', '-', '-', 'Ordinario Auxiliar', 'Tiempo Parcial', '11', 'No', 'Si', '2016-I', 'Falta carga 
 no lectiva', null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('86', null, 'GEORGE HUMBERTO', 'AEDO', 'NUÑEZ', null, null, '07397303', null, null, null, 'gaedo27@gmail.com ', null, null, null, null, null, 'SUCRE NRO. 556 (CUADRA 3 Y 4 DE AV. LIMA) - SAN MIGUEL', 'Magister', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('87', null, 'IGOR JOVINO', 'AGUILAR ', 'ALONSO', null, null, '09877278', null, null, null, 'igor_aguilar@hotmail.com ', null, null, null, null, null, 'KM 24 URBANIZACION LAS BRISAS /ANCASH – SANTA - NUEVO CHIMBOTE', 'Doctor', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('88', null, 'CIRO', 'AGUILAR', 'LINARES', null, null, '09877278', null, null, null, 'ciro.aguilar@gmail.com ', null, null, null, null, null, 'CALLE HUINCO 120 - DPTO 301 – LIMA – LIMA - SAN MIGUEL', 'Magister', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('89', null, 'JOSE CARLOS', 'ALVAREZ ', 'MERINO', null, null, '24974429 ', null, null, null, 'jose.alvarezm@ciplima.org.pe ', null, null, null, null, null, 'CALLE CUATRO 875 URBANIZACION LA FLORIDA / LIMA – LIMA - RIMAC', 'Doctor', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('90', null, 'EFRAIN RICARDO', 'BAUTISTA ', 'UBILLUS', null, null, '41907546', null, null, null, 'efrainbautista@gmail.com', null, null, null, null, null, 'AV. ALEJANDRO IGLESIAS 190 (ALT CAEM) / LIMA – LIMA - CHORRILLOS', 'Magister', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('91', null, 'LUZ SUSSY', 'BAYONA', 'ORE', null, null, '08602165', null, null, null, 'sbayonao@hotmail.com', null, null, null, null, null, 'JR. AURELIO MIROQUESADA 557 2P - URB. INGENIERIA (ALT INTERBANK)

LIMA – LIMA - SAN MARTIN DE PORRES', 'Doctor', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('92', null, 'AUGUSTO', 'BERNUY', 'ALVA', null, null, '10321499 ', null, null, null, 'augusto.bernuy@gmail.com', null, null, null, null, null, 'CALLE VALPARAISO 124 - URB. SANTA PATRICIA

LIMA – LIMA - LA MOLINA', 'Doctor', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('93', null, 'JESUS MANUEL', 'CALDAS', 'NUÑEZ', null, null, '09393187', null, null, null, 'v_mancal@hotmail.com', null, null, null, null, null, 'PJ. HUARANGALITO MZ. A LOTE. 11 HUARANGALITO(MZ 2414 LT 15-COMBATE IQUIQUE CDRA 8) LIMA - LIMA - SANTIAGO DE SURCO', 'Magister', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('94', null, 'MIGUEL JACINTO', 'CASMA ', 'SALCEDO', null, null, '08913627', null, null, null, 'mcasma@hotmail.com', null, null, null, null, null, 'GRUP. 12 SECTOR 3 / LIMA – LIMA - VILLA EL SALVADOR', 'Magister', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('95', null, 'SILVIA', 'CHUQUIMAJO ', 'HUMANTUMBA', null, null, '09820504', null, null, null, 'silviachuquimajo@outlook.com', null, null, null, null, null, 'CALLE LAGUNA MZ18 LT.5 ASENTAMIENTO HUMANO STA TERESA DE CHORRILLOS

(ALT. COMPLEJO DEPORTIVO LA LAGUNA) / LIMA – LIMA - CHORRILLOS', 'Magister', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('96', null, 'OSCAR RODOLFO', 'DIEZ ', 'PEREZ', null, null, '09160346', null, null, null, 'oscardiezperez@hotmail.com', null, null, null, null, null, 'AV. REPUBLICA DE PANAMA NRO. 4750 INT. 302 LIMA - LIMA - SURQUILLO', 'Magister', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('97', null, 'WILDER ALEX', 'INGA ', 'LOPEZ', null, null, '20037777', null, null, null, 'wilder.inga@pucp.pe', null, null, null, null, null, 'CALLE PAVIA 1553 URB. FIORI 1RA ET / LIMA – LIMA - SAN MARTIN DE PORRES', 'Magister', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('98', null, 'AMADOR ALEJANDRO', 'IZARRA', 'FORONDA', null, null, '09723659', null, null, null, 'amador.izarra@gmail.com', null, null, null, null, null, 'JR. HIPOLITO UNANUE NRO. 455 P.J. EL HOGAR POLICIAL - ZN 2

LIMA - LIMA - VILLA MARIA DEL TRIUNFO', 'Magister', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('99', null, 'JOEL ENRIQUE', 'MERCADO ', 'ROJAS', null, null, '40691900', null, null, null, 'joel.mercadorojas@gmail.com ', null, null, null, null, null, 'AV. MIGUEL GRAU 700 URB. CAMPODONICO

LAMBAYEQUE – CHICLAYO - CHICLAYO', 'Magister', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('100', null, 'VICTOR DARIO', 'MIRANDA ', 'VARGAS', null, null, '08622022', null, null, null, 'vmirandav@gmail.com', null, null, null, null, null, 'JR. SAO PAULO 2755 - URB. PERU 2DA ZONA

(ALT CDRA 27 DE AV PERU) / LIMA – LIMA - SAN MARTIN DE PORRES', 'Magister', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('101', null, 'JULIO ARTURO', 'MOLINA', 'GARATE', null, null, '08459708', null, null, null, 'jmolina@mef.gob.pe ', null, null, null, null, null, 'JR. CELESTINO AVILA GODOY 661 URB SAN GERMAN

LIMA SAN MARTIN DE PORRES', 'Magister', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('102', null, 'JESSICA', 'OLIVEIRA ', 'BARDALES', null, null, '07871125', null, null, null, 'jessica.oliveira1904@gmail.com', null, null, null, null, null, 'CALLE LOS TAMARINDOS URB. LA CAPULLANA

(CRUCE DE LAS AVENIDAS CASTILLAY AYACUCHO) / LIMA – LIMA - SANTIAGO DE SURCO', 'Magister', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('103', null, 'MARGARITA ISABEL', 'PAJARES ', 'FLORES', null, null, '051004', null, null, null, 'ysabelpf55@hotmail.com', null, null, null, null, null, null, 'Doctor', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('104', null, 'WILMER OSWALDO', 'PINEDA', 'ANGELES', null, null, '08447637', null, null, null, 'wilmer.pineda@holascharff.com', null, null, null, null, null, 'AVENIDA SAN BORJA SUR 480 /LIMA-LIMA-SAN BORJA ', 'Magister', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('105', null, 'ANITA MARLENE', 'REYES ', 'HUAMAN', null, null, '10399394', null, null, null, 'marcieloreyes@gmail.com ', null, null, null, null, null, 'JR. H. DE LA VALLE 161 URB. AÑO NUEVO / LIMA – LIMA - COMAS', 'Magister', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('106', null, 'GLEN DARIO', 'RODRIGUEZ', 'RAFAEL', null, null, '10062042', null, null, null, 'glen.rodriguez@gmail.com', null, null, null, null, null, 'CALLE UNO MZ A LT 28 URB. SANTA RAQUEL 3RA ETAPA

LIMA – LIMA - ATE', 'Doctor', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('107', null, 'CARLOS DANIEL', 'RODRIGUEZ', 'VILCAROMERO', null, null, '06283642', null, null, null, 'carlosrodriguez18@gmail.com', null, null, null, null, null, 'CLUB SOLIMAR EJE D ESTE PANAMERICANA SUR KM 27

(PASANDO KM25 PLAZA VEA PANA SUR) / LIMA – LIMA - LURIN', 'Magister', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('108', null, 'JULIO CESAR', 'ROJAS', 'MEDINA', null, null, '21532370', null, null, null, 'a1jrojas@gmail.com ', null, null, null, null, null, 'PJ. APELIOTAS 383 URB. TUPAC AMARU (CUADRA 6 DE AV. DEL AIRE)

LIMA-LIMA-LA VICTORIA', 'Magister', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('109', null, 'LUIS', 'SAAVEDRA', 'ZEGARRA', null, null, '25534483', null, null, null, 'lsaavedraz@yahoo.com', null, null, null, null, null, 'EDIFICIO 19 S/N CIUDAD SATELITE STA ROSA

(ALT.MERCADO SANTA ROSA) /PROV. CONST. DEL CALLAO-PROV. CONST. DEL CALLAO-CALLAO', 'Magister', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('110', null, 'FELIX MELCHOR', 'SANTOS', 'LOPEZ', null, null, '42848906', null, null, null, 'fsantos2374@gmail.com', null, null, null, null, null, 'AV. MALACHOSWKY 236 DPTO. 501 C.H. TORRES DE LIMATAMBO

(A DOS CUADRAS DE LA AV.ANGAMOS.) LIMA - LIMA - SAN BORJA ', 'Magister', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('111', null, 'JAVIER ALFONSO', 'SECLEN', 'ARANA', null, null, '06290213', null, null, null, 'jaseclen@gmail.com', null, null, null, null, null, 'CAL.RICARDO NAVARRETE NRO. 386

(POR LA SAN MARCOS) LIMA - LIMA - LIMA', 'Magister', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('112', null, 'JUAN ANSELMO', 'SIPIRAN ', 'MENDOZA', null, null, '41861203', null, null, null, 'isipiran@pucp.edu.pe', null, null, null, null, null, 'MZ. I LOTE. 6 URB. LAS CAPULLANAS - LA LIBERTAD - TRUJILLO - TRUJILLO', 'Doctor', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('113', null, 'EDUARDO RAUL', 'ULLOA ', 'TORRES', null, null, '09536401', null, null, null, 'eulloa@outlook.com ', null, null, null, null, null, 'CAL.ELECTRONICOS 186 DPTO. 202 - URB. INGENIEROS

(ALTURA IBM DEL PERU) LIMA - LIMA - LA MOLINA', 'Magister', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('114', null, 'SERGIO PAULO', 'VALCARCEL', 'ASCENCIOS ', null, null, '09372597', null, null, null, 'sergio.p.valcarcel@gmail.com', null, null, null, null, null, 'AV. EUTERPE 154 URB. OLIMPO ET. UNO / LIMA – LIMA - ATE', 'Magister', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('115', null, 'HUGO FLORIAN', 'VEGA', 'HUERTA', null, null, '0A0039', null, null, null, 'hugovegahuerta@outlook.com ', null, null, null, null, null, null, 'Doctor', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('116', null, 'ILSE JANINE', 'VILLAVICENCIO', 'RAMIREZ', null, null, '0A1852', null, null, null, 'ilsejanine@gmail.com', null, null, null, null, null, null, 'Doctor', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('117', null, 'JUSTO', 'PEREZ ', 'SONCCO', null, null, '06778333', null, null, null, 'justo.perez@entel.pe', null, null, null, null, null, 'AVENIDA JUAN DE ALIAGA 550

(ALTURA CDRA 8 Y 9 JAVIER PRADO OESTE) /LIMA-LIMA-MAGDALENA DEL MAR', 'Magister', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('118', null, 'JORGE LUIS', 'YRIVARREN ', 'LAZO', null, null, '07936507', null, null, null, 'jyrivarren@reniec.gob.pe', null, null, null, null, null, null, 'Doctor', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('119', null, 'ROMULO FERNANDO', 'LOMPARTE ', 'ALVARADO', null, null, '32100189', null, null, null, 'romulo.lomparte@yahoo.com', null, null, null, null, null, 'AVENIDA ALJ .TIRADO 674

(ENTRE CUADRAS 9 Y 10 DE LA AV. AREQUIPA) /LIMA-LIMA-LIMA', 'Magister', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO "public"."docente" VALUES ('120', null, 'ERNESTO DAVID', 'CANCHO', 'RODRIGUEZ ', null, null, '43452411', null, null, null, '', null, null, null, null, null, null, 'Magister', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

-- ----------------------------
-- Alter Sequences Owned By 
-- ----------------------------

-- ----------------------------
-- Indexes structure for table docente
-- ----------------------------
CREATE INDEX "linkedInIdIndex" ON "public"."docente" USING btree ("linkedInId");

-- ----------------------------
-- Uniques structure for table "public"."docente"
-- ----------------------------
ALTER TABLE "public"."docente" ADD UNIQUE ("email");
ALTER TABLE "public"."docente" ADD UNIQUE ("linkedInId");

-- ----------------------------
-- Primary Key structure for table "public"."docente"
-- ----------------------------
ALTER TABLE "public"."docente" ADD PRIMARY KEY ("id");

