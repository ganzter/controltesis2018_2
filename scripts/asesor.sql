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

Date: 2018-11-16 05:44:40
*/


-- ----------------------------
-- Table structure for "public"."asesor"
-- ----------------------------
CREATE SEQUENCE asesor_seq MINVALUE 1 MAXVALUE 999999 INCREMENT BY 1;

DROP TABLE "public"."asesor";
CREATE TABLE "public"."asesor" (
"id" int4 DEFAULT nextval('asesor_seq'::regclass) NOT NULL,
"docente" int4,
"obs" varchar(200)
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Alter Sequences Owned By 
-- ----------------------------

-- ----------------------------
-- Primary Key structure for table "public"."asesor"
-- ----------------------------
ALTER TABLE "public"."asesor" ADD PRIMARY KEY ("id");
