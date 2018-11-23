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

Date: 2018-11-01 09:51:12
*/


-- ----------------------------
-- Table structure for "public"."alumno"
-- ----------------------------
CREATE SEQUENCE id_alum_seq MINVALUE 1 MAXVALUE 999999 INCREMENT BY 1;

CREATE TABLE "public"."alumno" (
"id_alum" numeric DEFAULT nextval('id_alum_seq'::regclass) NOT NULL,
"id_facultad" int2 NOT NULL,
"ape_nom" varchar(300) NOT NULL,
"codigo" varchar(15),
"dni" char(8)
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of alumno
-- ----------------------------
INSERT INTO "public"."alumno" VALUES ('1', '1', 'SUAREZ SEGOVIA ADOLFO HAROLD', '992719', null);
INSERT INTO "public"."alumno" VALUES ('2', '1', 'CANCHERO MATOS CESAR RAUL', '5200083', null);
INSERT INTO "public"."alumno" VALUES ('3', '1', 'MORENO TORRES JHONATAN FROILAN', '5200122', null);
INSERT INTO "public"."alumno" VALUES ('4', '1', 'CHUNGA MORALES JUAN CARLOS', '954327', null);
INSERT INTO "public"."alumno" VALUES ('5', '1', 'LOPEZ VALENZUELA FRANCISCO JES', '1114104', null);
INSERT INTO "public"."alumno" VALUES ('6', '1', 'ORBEZO PORTALATINO JUAN CARLOS', '1114093', null);
INSERT INTO "public"."alumno" VALUES ('7', '1', 'CASTRO QUISPE HANS ALBERTO', '0', null);
INSERT INTO "public"."alumno" VALUES ('8', '1', 'VALLADOLID GONZALES MAX', '0', null);
INSERT INTO "public"."alumno" VALUES ('9', '1', 'SALINAS DONAYRES SARA AMANDA', '977625', null);
INSERT INTO "public"."alumno" VALUES ('10', '1', 'PEREZ HERMOZA RICARDO', '0', null);
INSERT INTO "public"."alumno" VALUES ('11', '1', 'LAMAS RODRIGUEZ MILAGROS', '110860', null);
INSERT INTO "public"."alumno" VALUES ('12', '1', 'CASTA¥EDA VARGAS PEDRO', '0', null);
INSERT INTO "public"."alumno" VALUES ('13', '1', 'CARDENAS LEANDRO YRMA LUCIA', '810146', null);
INSERT INTO "public"."alumno" VALUES ('14', '1', 'CARDENAS VERASTEGUI OSCAR', '0', null);
INSERT INTO "public"."alumno" VALUES ('15', '1', 'MANUEL DEXTRE ALBA', '0', null);
INSERT INTO "public"."alumno" VALUES ('16', '1', 'LOVERA ROMANZE PEDRO ANGEL', '0', null);
INSERT INTO "public"."alumno" VALUES ('17', '1', 'ANGULO PORTA CYNTHIA', '0', null);
INSERT INTO "public"."alumno" VALUES ('18', '1', 'ZUÑIGA RIVERO JULISSA', '5200184', null);
INSERT INTO "public"."alumno" VALUES ('19', '1', 'ANDRADE SANCHEZ FABIOLA EVELYN', '1113966', null);
INSERT INTO "public"."alumno" VALUES ('20', '1', 'OMELIYANENKO  YURY ANDREYEVICH', '5200200', null);
INSERT INTO "public"."alumno" VALUES ('21', '1', 'CHILET ROJAS JOSE LUIS', '1113871', null);
INSERT INTO "public"."alumno" VALUES ('22', '1', 'CONCHA MUJICA CARLOS OSKAR', '994051', null);
INSERT INTO "public"."alumno" VALUES ('23', '1', 'VERGARA MEDRANO JOSE CARLOS', '0', null);
INSERT INTO "public"."alumno" VALUES ('24', '1', 'BARRETO STEIN KARLA VANESSA', '0', null);
INSERT INTO "public"."alumno" VALUES ('25', '1', 'ATENCIO BUSTILLOS YENI ANTONIA', '987918', null);
INSERT INTO "public"."alumno" VALUES ('26', '1', 'PACHECO RAMIREZ PAOLA AURELIA', '00997A03', null);
INSERT INTO "public"."alumno" VALUES ('1700', '1', 'MONCADA SANTOME KENNY MARIO', '6200050', null);
INSERT INTO "public"."alumno" VALUES ('1701', '1', 'VALLADARES CARRASCO MANUEL AUG', '6200032', null);
INSERT INTO "public"."alumno" VALUES ('1702', '1', 'ANGO CELIS MIRIAM AMELIA', '6200183', null);
INSERT INTO "public"."alumno" VALUES ('1703', '1', 'ZAVALA YBA#EZ EDDY', '4200037', null);
INSERT INTO "public"."alumno" VALUES ('1704', '1', 'ACERO NAVARRETE KARIN ZAIDA', '6200157', null);
INSERT INTO "public"."alumno" VALUES ('1705', '1', 'ORME#O ROJAS ROBERT EDUARDO', '4200085', null);
INSERT INTO "public"."alumno" VALUES ('1706', '1', 'VILCA UCEDO KATHERINE GLADYS', '6200161', null);
INSERT INTO "public"."alumno" VALUES ('1707', '1', 'PAPA BURGOS VICENTE JUNIOR', '6200185', null);
INSERT INTO "public"."alumno" VALUES ('1708', '1', 'CHIPOCO VIDAL JUAN ANTONIO', '0', null);
INSERT INTO "public"."alumno" VALUES ('1709', '1', 'ALCALA GARCIA, FRANK', '0', null);
INSERT INTO "public"."alumno" VALUES ('1710', '1', 'CORDOVA QUISPE MARILU', '6200018', null);
INSERT INTO "public"."alumno" VALUES ('1711', '1', 'SARMIENTO ROJAS JUAN MANUEL', '6200097', null);
INSERT INTO "public"."alumno" VALUES ('1712', '1', 'TRILLO PAIVA OSWALDO KENNY', '6200191', null);
INSERT INTO "public"."alumno" VALUES ('1713', '1', 'BAEZ MONTA#EZ LOURDES ROCIO', '4200125', null);
INSERT INTO "public"."alumno" VALUES ('1714', '1', 'YARINGA#O REYES NICOMEDES', '6200188', null);
INSERT INTO "public"."alumno" VALUES ('1715', '1', 'YANAC CASTILLO LUIS EDUARDO', '6200081', null);
INSERT INTO "public"."alumno" VALUES ('1716', '1', 'COAQUIRA TORIBIO JOSE LUIS', '6200130', null);
INSERT INTO "public"."alumno" VALUES ('1717', '1', 'SALAZAR CA#ARI CINDY SUSAN', '6200087', null);
INSERT INTO "public"."alumno" VALUES ('1718', '1', 'QUEZADA SILVA TALIA MONICA', '6200200', null);
INSERT INTO "public"."alumno" VALUES ('1719', '1', 'MEDINA VASQUEZ JANET ELIANA', '962845', null);
INSERT INTO "public"."alumno" VALUES ('1720', '1', 'OYARCE AREVALO CARLOS DAVID', '963017', null);
INSERT INTO "public"."alumno" VALUES ('1721', '1', 'SOTO GARCÌA GONZALO ANDRÈS', '6200001', null);
INSERT INTO "public"."alumno" VALUES ('1722', '1', 'RODRIGUEZ GAMARRA GLEN WILFRED', '6200092', null);
INSERT INTO "public"."alumno" VALUES ('1723', '1', 'JOSE LUIS VERGARA RISCO', '0', null);
INSERT INTO "public"."alumno" VALUES ('1724', '1', 'TAMBRAICO QUISPE OSCAR BASILIO', '0', null);
INSERT INTO "public"."alumno" VALUES ('1725', '1', 'MONTIVEROS SANTOS, CECILIA', '0', null);
INSERT INTO "public"."alumno" VALUES ('1726', '1', 'BERROCAL ROJAS, SHEILA', '0', null);
INSERT INTO "public"."alumno" VALUES ('1727', '1', 'CRUZATTE QUISPE JIMMY ALBERTO', '973005', null);
INSERT INTO "public"."alumno" VALUES ('1728', '1', 'OLIVOS MILLONES PEDRO PABLO', '994116', null);
INSERT INTO "public"."alumno" VALUES ('1729', '1', 'PEREZ SILVA ELVIS NOE', '110696', null);
INSERT INTO "public"."alumno" VALUES ('1730', '1', 'CONDORI CHIPANA JAVIER', '0', null);
INSERT INTO "public"."alumno" VALUES ('1731', '1', 'MEZA TORRES GUIDO ALEXANDER', '110746', null);
INSERT INTO "public"."alumno" VALUES ('1732', '1', 'MAGDA ACOSTA URIBE', '0', null);
INSERT INTO "public"."alumno" VALUES ('1733', '1', 'TORRES MAZA ANA ANGELICA', '874123', null);
INSERT INTO "public"."alumno" VALUES ('1734', '1', 'VARGAS MARTINEZ ALEX', '983060', null);
INSERT INTO "public"."alumno" VALUES ('1735', '1', 'MALCA CAPCHA MILTON DAVID', '1114161', null);
INSERT INTO "public"."alumno" VALUES ('1736', '1', 'RAUL PALOMINO ZE#A', '0', null);
INSERT INTO "public"."alumno" VALUES ('1737', '1', 'ALFONSO ROMERO BAYLON', '0', null);
INSERT INTO "public"."alumno" VALUES ('1738', '1', 'PEREZ CAMPOS EUGENIO MARTIN', '0', null);
INSERT INTO "public"."alumno" VALUES ('1739', '1', 'BAHAMONDE MELENDEZ ROODWIN', '0', null);
INSERT INTO "public"."alumno" VALUES ('1740', '1', 'GALVEZ QUISPE JUAN CARLOS', '110466', null);
INSERT INTO "public"."alumno" VALUES ('1741', '1', 'BELTRAN NAVARRO ROBERTO ALEX', '0', null);
INSERT INTO "public"."alumno" VALUES ('1742', '1', 'MAGALY YUCRA PUMA', '0', null);
INSERT INTO "public"."alumno" VALUES ('1743', '1', 'DEL CARPIO CALLE JUAN CARLOS', '0', null);
INSERT INTO "public"."alumno" VALUES ('1744', '1', 'LIZ LIVIA A', '0', null);
INSERT INTO "public"."alumno" VALUES ('1745', '1', 'BONILLA BELLO VILMA', '0', null);
INSERT INTO "public"."alumno" VALUES ('1746', '1', 'CORDERO SANTIVA#EZ LADY EMILIN', '4200190', null);
INSERT INTO "public"."alumno" VALUES ('1747', '1', 'PEREZ AYALA DAVID EDINSON', '3200096', null);
INSERT INTO "public"."alumno" VALUES ('1748', '1', 'VEGA HUIZA BRENDA MERCEDES', '0', null);
INSERT INTO "public"."alumno" VALUES ('1749', '1', 'NEXAR SALAZAR LLONTOP', '0', null);
INSERT INTO "public"."alumno" VALUES ('1750', '1', 'CURO PALIAN JIMMY ANDERSON', '2200032', null);
INSERT INTO "public"."alumno" VALUES ('1751', '1', 'RAMOS CORONEL ELIO', '942023', null);
INSERT INTO "public"."alumno" VALUES ('1752', '1', 'MARTINEZ BERROCAL YANET', '110794', null);
INSERT INTO "public"."alumno" VALUES ('1753', '1', 'INFANTE CARRASCO ANDERSON', '0', null);
INSERT INTO "public"."alumno" VALUES ('1754', '1', 'UCEDA RENTERIA SEBASTIERRA', '0', null);
INSERT INTO "public"."alumno" VALUES ('1755', '1', 'MESONES RIVAS GEORGE JESUS', '0', null);
INSERT INTO "public"."alumno" VALUES ('1756', '1', 'MINAYA CUBILLAS ANIBAL ABRAHAM', '0', null);
INSERT INTO "public"."alumno" VALUES ('1757', '1', 'ROODWIN BAHAMONDE MELENDREZ', '0', null);
INSERT INTO "public"."alumno" VALUES ('1758', '1', 'HUALLANCA VITERI CARLOS JATUNR', '952436', null);
INSERT INTO "public"."alumno" VALUES ('1759', '1', 'CARLOS AYMA CCONOCHUILLCA', '0', null);
INSERT INTO "public"."alumno" VALUES ('1760', '1', 'JUSTINIANO SAMANIEGO JUAN', '0', null);
INSERT INTO "public"."alumno" VALUES ('1761', '1', 'MORALES RETAMOZO DENIS RICARDO', '0', null);
INSERT INTO "public"."alumno" VALUES ('1762', '1', 'ZAMUDIO DIAZ JUAN JOSE', '2207063', null);
INSERT INTO "public"."alumno" VALUES ('1763', '1', 'SARMIENTO QUISPE JORGE', '0', null);
INSERT INTO "public"."alumno" VALUES ('1764', '1', 'ENITH CRUZ HUAYHUA', '0', null);
INSERT INTO "public"."alumno" VALUES ('1765', '1', 'AMANQUI FERNANDEZ WILDER ROLAN', '5200022', null);
INSERT INTO "public"."alumno" VALUES ('1766', '1', 'PABLO VASQUEZ LADY ELENA', '0', null);
INSERT INTO "public"."alumno" VALUES ('1767', '1', 'JIMENEZ MEJIA LILIAN RUTH', '952462', null);
INSERT INTO "public"."alumno" VALUES ('1768', '1', 'ERICK CHIPANA RAMOS', '0', null);
INSERT INTO "public"."alumno" VALUES ('1769', '1', 'MALAVER ORTEGA PAUL C', '0', null);
INSERT INTO "public"."alumno" VALUES ('1770', '1', 'MAURICIO SANCHEZ DAVID', '0', null);
INSERT INTO "public"."alumno" VALUES ('1771', '1', 'LUIS ALARCON LOAYZA', '0', null);
INSERT INTO "public"."alumno" VALUES ('1772', '1', 'RIVERA TEJADA CARMEN DEL PILAR', '3027142', null);
INSERT INTO "public"."alumno" VALUES ('1773', '1', 'GUERRERO TORRES GRISELDA AGUED', '1310044', null);
INSERT INTO "public"."alumno" VALUES ('1774', '1', 'ZAMBRANO YSIQUE VICTOR', '0', null);
INSERT INTO "public"."alumno" VALUES ('1775', '1', 'QUISPE ALVARADO CYNTHIA', '0', null);
INSERT INTO "public"."alumno" VALUES ('1776', '1', 'MELCHOR PAEZ ISABEL', '110836', null);
INSERT INTO "public"."alumno" VALUES ('1777', '1', 'CARDENAS VERASTEGUI OSCAR ERNE', '6207016', null);
INSERT INTO "public"."alumno" VALUES ('1778', '1', 'GUERRERO NAIRA MARIELA', '0', null);
INSERT INTO "public"."alumno" VALUES ('1779', '1', 'JOEL AVALOS CARHUAVILCA', '0', null);
INSERT INTO "public"."alumno" VALUES ('1780', '1', 'ANGELA DE LA CRUZ ROMANI', '0', null);
INSERT INTO "public"."alumno" VALUES ('1781', '1', 'QUI#ONES NIETO YAMIL ALEXANDER', '3200098', null);
INSERT INTO "public"."alumno" VALUES ('1782', '1', 'CHUQUI CUSIMAYTA WALTER', '982991', null);
INSERT INTO "public"."alumno" VALUES ('1783', '1', 'MAMANI SALCE LIZBETH', '0', null);
INSERT INTO "public"."alumno" VALUES ('1784', '1', 'TICONA MAMANI ANA', '0', null);
INSERT INTO "public"."alumno" VALUES ('1785', '1', 'CASTA#EDA CANCHUCAJA JOHANNA', '0', null);
INSERT INTO "public"."alumno" VALUES ('1786', '1', 'MIGUEL CHUMPITAZ RIVERA', '0', null);
INSERT INTO "public"."alumno" VALUES ('1787', '1', 'WALTER HUGO HUAMAN CORONEL', '0', null);
INSERT INTO "public"."alumno" VALUES ('1788', '1', 'CALLE VILLACORTA JAVIER FERNAN', '114988', null);
INSERT INTO "public"."alumno" VALUES ('1789', '1', 'ROSALES MONTALVO PEDRO', '0', null);
INSERT INTO "public"."alumno" VALUES ('1790', '1', 'ROSALES MONTALVO  PEDRO', '0', null);
INSERT INTO "public"."alumno" VALUES ('1791', '1', 'GARY SOTO TRILLO', '0', null);
INSERT INTO "public"."alumno" VALUES ('1792', '1', 'VENTOSILLA BARRIENTOS EDITH B', '0', null);
INSERT INTO "public"."alumno" VALUES ('1793', '1', 'CHAMBILLA HUARAHUARA RUBEN', '4207008', null);
INSERT INTO "public"."alumno" VALUES ('1794', '1', 'MIRANDA SAUCEDO TOMAS FRANCISC', '6157141', null);
INSERT INTO "public"."alumno" VALUES ('1795', '1', 'NILO ELOY CARRASCO ORE', '0', null);
INSERT INTO "public"."alumno" VALUES ('1796', '1', 'GUERRERO SIANCAS LUIS', '0', null);
INSERT INTO "public"."alumno" VALUES ('1797', '1', 'CRUZ HUAYHUA ENITH', '0', null);
INSERT INTO "public"."alumno" VALUES ('1798', '1', 'CASELLA LLERENA EDGAR ALBERTO', '0', null);
INSERT INTO "public"."alumno" VALUES ('1799', '1', 'HERNANDEZ MEZA CESAR', '0', null);
INSERT INTO "public"."alumno" VALUES ('18800', '2', 'COLLAZOS CALDAS NATALIA LUCIA', '0', null);
INSERT INTO "public"."alumno" VALUES ('18801', '53', 'TORRES GOMEZ JACQUELINE ROSA', '18097167', null);
INSERT INTO "public"."alumno" VALUES ('18802', '53', 'CARLOS OMAR NEYRA DAMIAN', '0', null);
INSERT INTO "public"."alumno" VALUES ('18803', '2', 'SARA AMANDA SALINAS DONAYRES', '0', null);
INSERT INTO "public"."alumno" VALUES ('18804', '2', 'CORNEJO SIMBRON ABRAHAM', '0', null);
INSERT INTO "public"."alumno" VALUES ('18805', '53', 'PALOMARES MORENO MIRIAM GIOVAN', '0', null);
INSERT INTO "public"."alumno" VALUES ('18806', '2', 'NICOLE GERALDINE VILCHERREZ SA', '0', null);
INSERT INTO "public"."alumno" VALUES ('18807', '53', 'GUILLERMO MEDINA ZEGARRA', '0', null);
INSERT INTO "public"."alumno" VALUES ('18808', '2', 'BRENDA E. QUICANO URIBE DE SUA', '0', null);
INSERT INTO "public"."alumno" VALUES ('18809', '53', 'CASTILLEJO TARAZONA, JOSE ANTO', '0', null);
INSERT INTO "public"."alumno" VALUES ('18810', '2', 'EUSEBIO LLIHUA LUZ ESTHEFANY', '17207101', null);
INSERT INTO "public"."alumno" VALUES ('18811', '2', 'CESAR AUGUSTO OSHIRO GUSUKUMA', '18207057', null);
INSERT INTO "public"."alumno" VALUES ('18812', '1', 'WALTER RUA CASTRO ', null, null);

-- ----------------------------
-- Alter Sequences Owned By 
-- ----------------------------

-- ----------------------------
-- Uniques structure for table "public"."alumno"
-- ----------------------------
ALTER TABLE "public"."alumno" ADD UNIQUE ("ape_nom");
ALTER TABLE "public"."alumno" ADD UNIQUE ("id_alum");

-- ----------------------------
-- Primary Key structure for table "public"."alumno"
-- ----------------------------
ALTER TABLE "public"."alumno" ADD PRIMARY KEY ("id_alum");

-- ----------------------------
-- Foreign Key structure for table "public"."alumno"
-- ----------------------------
ALTER TABLE "public"."alumno" ADD FOREIGN KEY ("id_facultad") REFERENCES "public"."facultad" ("id_facultad") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."alumno" ADD FOREIGN KEY ("id_facultad") REFERENCES "public"."facultad" ("id_facultad") ON DELETE NO ACTION ON UPDATE NO ACTION;
