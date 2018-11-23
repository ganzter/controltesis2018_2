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

Date: 2018-11-01 09:52:29
*/


-- ----------------------------
-- Table structure for "public"."facultad"
-- ----------------------------
CREATE SEQUENCE id_facultad_seq MINVALUE 1 MAXVALUE 999999 INCREMENT BY 1;

CREATE TABLE "public"."facultad" (
"id_facultad" int2 DEFAULT nextval('id_facultad_seq'::regclass) NOT NULL,
"nombre" varchar(50) NOT NULL
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of facultad
-- ----------------------------
INSERT INTO "public"."facultad" VALUES ('1', 'SISTEMAS');
INSERT INTO "public"."facultad" VALUES ('2', 'ING.SISTEMAS');
INSERT INTO "public"."facultad" VALUES ('3', 'ING.SISTEM');
INSERT INTO "public"."facultad" VALUES ('4', 'ING. SISTEMAS');
INSERT INTO "public"."facultad" VALUES ('5', 'INS.SISTEMAS');
INSERT INTO "public"."facultad" VALUES ('6', 'MED. HUMANA');
INSERT INTO "public"."facultad" VALUES ('7', 'UPG MEDICINA');
INSERT INTO "public"."facultad" VALUES ('8', 'DERECHO');
INSERT INTO "public"."facultad" VALUES ('9', 'UPG DERECHO');
INSERT INTO "public"."facultad" VALUES ('10', 'LETRAS');
INSERT INTO "public"."facultad" VALUES ('11', 'FARMACIA');
INSERT INTO "public"."facultad" VALUES ('12', 'UPG ODONTOLOGIA');
INSERT INTO "public"."facultad" VALUES ('13', 'EDUCACION');
INSERT INTO "public"."facultad" VALUES ('14', 'QUIMICA');
INSERT INTO "public"."facultad" VALUES ('15', 'CC. ADMINISTRAT');
INSERT INTO "public"."facultad" VALUES ('16', 'CC.BIOLOGICAS');
INSERT INTO "public"."facultad" VALUES ('17', 'CC.CONTABLES');
INSERT INTO "public"."facultad" VALUES ('18', 'UPG CONTABLES');
INSERT INTO "public"."facultad" VALUES ('19', 'CEUPS CONTABLES');
INSERT INTO "public"."facultad" VALUES ('20', 'CC.ECONOMICAS');
INSERT INTO "public"."facultad" VALUES ('21', 'UPG ECONOMICAS');
INSERT INTO "public"."facultad" VALUES ('22', 'CC.FISICAS');
INSERT INTO "public"."facultad" VALUES ('23', 'CC.MATEMATICAS');
INSERT INTO "public"."facultad" VALUES ('24', 'CC.SOCIALES');
INSERT INTO "public"."facultad" VALUES ('25', 'GEOLOGIA');
INSERT INTO "public"."facultad" VALUES ('26', 'ING.INDUSTRIAL');
INSERT INTO "public"."facultad" VALUES ('27', 'UPG INDUSTRIAL');
INSERT INTO "public"."facultad" VALUES ('28', 'PSICOLOGIA');
INSERT INTO "public"."facultad" VALUES ('29', 'UPG PSICOLOGIA');
INSERT INTO "public"."facultad" VALUES ('30', 'ING.ELECTRONICA');
INSERT INTO "public"."facultad" VALUES ('31', 'Certificado Estudios');
INSERT INTO "public"."facultad" VALUES ('32', 'No adeudar dinero');
INSERT INTO "public"."facultad" VALUES ('33', 'Const. OGRRHH');
INSERT INTO "public"."facultad" VALUES ('34', 'Grados y Tit.');
INSERT INTO "public"."facultad" VALUES ('35', 'Boletin');
INSERT INTO "public"."facultad" VALUES ('36', 'Legalizacion');
INSERT INTO "public"."facultad" VALUES ('37', 'Carnet Graduados');
INSERT INTO "public"."facultad" VALUES ('38', 'Alquiler');
INSERT INTO "public"."facultad" VALUES ('39', 'Tarjeta Iden.');
INSERT INTO "public"."facultad" VALUES ('40', 'Fincas');
INSERT INTO "public"."facultad" VALUES ('41', 'C. Info');
INSERT INTO "public"."facultad" VALUES ('42', 'No adeudar libros');
INSERT INTO "public"."facultad" VALUES ('43', 'ADMISION ');
INSERT INTO "public"."facultad" VALUES ('44', 'E. POST GRADO');
INSERT INTO "public"."facultad" VALUES ('45', 'MATRICULA EPG');
INSERT INTO "public"."facultad" VALUES ('46', 'B. UNIVERSITARIO');
INSERT INTO "public"."facultad" VALUES ('47', 'COMEDOR DOCENTES');
INSERT INTO "public"."facultad" VALUES ('48', 'CENTRO CULTURAL');
INSERT INTO "public"."facultad" VALUES ('49', 'OFIC. COOPERACION');
INSERT INTO "public"."facultad" VALUES ('50', 'RED  TELEMATICA');
INSERT INTO "public"."facultad" VALUES ('51', 'COL.DE APLICACIÓN');
INSERT INTO "public"."facultad" VALUES ('52', 'Ing.Sistemas');
INSERT INTO "public"."facultad" VALUES ('53', 'UPG SISTEMAS');
INSERT INTO "public"."facultad" VALUES ('54', 'UPG ING.SISTEMAS');
INSERT INTO "public"."facultad" VALUES ('55', 'EPG SISTEMAS');
INSERT INTO "public"."facultad" VALUES ('56', 'UPG.SISTEMAS');
INSERT INTO "public"."facultad" VALUES ('57', 'UPG. SISTEMAS');

-- ----------------------------
-- Alter Sequences Owned By 
-- ----------------------------

-- ----------------------------
-- Uniques structure for table "public"."facultad"
-- ----------------------------
ALTER TABLE "public"."facultad" ADD UNIQUE ("nombre");

-- ----------------------------
-- Primary Key structure for table "public"."facultad"
-- ----------------------------
ALTER TABLE "public"."facultad" ADD PRIMARY KEY ("id_facultad");
