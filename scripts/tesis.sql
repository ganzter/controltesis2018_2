/*
Navicat PGSQL Data Transfer

Source Server         : localhostPostgre
Source Server Version : 100500
Source Host           : localhost:5432
Source Database       : tcs2
Source Schema         : public

Target Server Type    : PGSQL
Target Server Version : 100500
File Encoding         : 65001

Date: 2018-11-16 05:44:32
*/


-- ----------------------------
-- Table structure for "public"."tesis"
-- ----------------------------
DROP TABLE "public"."tesis";
CREATE TABLE "public"."tesis" (
"id" int4 DEFAULT nextval('tesis_seq'::regclass) NOT NULL,
"alumno" numeric,
"titulo" varchar(200),
"nro_inscripcion" varchar(100),
"fecha_inscripcion" date,
"asesor" int4,
"nro_rais" varchar(100),
"nro_expedito" varchar(100),
"doc_expedito" varchar(100),
"fecha_expedito" date,
"jurado1" int4,
"jurado2" int4,
"jurado3" int4,
"jurado4" int4,
"fecha_hora_sustentacion" varchar(100),
"lugar_sustentacion" varchar(100),
"nota" numeric,
"acta_sustentacion" varchar(100),
"fecha" date,
"estado" numeric DEFAULT 1
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Alter Sequences Owned By 
-- ----------------------------

-- ----------------------------
-- Primary Key structure for table "public"."tesis"
-- ----------------------------
ALTER TABLE "public"."tesis" ADD PRIMARY KEY ("id");
