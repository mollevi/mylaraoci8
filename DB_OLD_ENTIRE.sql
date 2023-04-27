--------------------------------------------------------
--  File created - Sunday-April-23-2023
--------------------------------------------------------
--------------------------------------------------------
--  DDL for Table MEGALLO
--------------------------------------------------------

  CREATE TABLE "MEGALLO"
   (	"ID" NUMBER,
	"NEV" VARCHAR2(30 BYTE),
	"KILOMETER" NUMBER,
	"VONAT_ID" NUMBER,
	"HELYIBUSZ_ID" NUMBER,
	"TAVOLSAGIBUSZ_ID" NUMBER,
	"TELEPULES" VARCHAR2(30 BYTE),
	"IDO" VARCHAR2(20 BYTE),
	"SORSZAM" NUMBER
   ) SEGMENT CREATION IMMEDIATE
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;

   COMMENT ON COLUMN "MEGALLO"."ID" IS 'Meg�ll� id-ja';
   COMMENT ON COLUMN "MEGALLO"."NEV" IS 'Meg�ll� neve';
   COMMENT ON COLUMN "MEGALLO"."KILOMETER" IS 'El�z� meg�ll� �ta megtett kil�m�tert';
   COMMENT ON COLUMN "MEGALLO"."VONAT_ID" IS 'Vonat id-ja';
   COMMENT ON COLUMN "MEGALLO"."HELYIBUSZ_ID" IS 'Helyi busz id-ja';
   COMMENT ON COLUMN "MEGALLO"."TAVOLSAGIBUSZ_ID" IS 'T�vols�gi busz id';
   COMMENT ON COLUMN "MEGALLO"."TELEPULES" IS 'Meg�ll�nak a helye';
   COMMENT ON COLUMN "MEGALLO"."IDO" IS 'Meg�ll�ba �rkez�s �s k�zvetlen indul�s id�pontja';
--------------------------------------------------------
--  DDL for Table ADMIN
--------------------------------------------------------

  CREATE TABLE "ADMIN"
   (	"ID" NUMBER,
	"NEV" VARCHAR2(30 BYTE),
	"EMAIL" VARCHAR2(30 BYTE),
	"SZULDATUM" DATE,
	"JELSZOHASH" VARCHAR2(64 BYTE)
   ) SEGMENT CREATION IMMEDIATE
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;

   COMMENT ON COLUMN "ADMIN"."ID" IS 'Admin id-ja';
   COMMENT ON COLUMN "ADMIN"."NEV" IS 'Admin neve';
   COMMENT ON COLUMN "ADMIN"."EMAIL" IS 'Admin email c�me';
   COMMENT ON COLUMN "ADMIN"."SZULDATUM" IS 'Admin sz�let�si d�tuma';
   COMMENT ON COLUMN "ADMIN"."JELSZOHASH" IS 'Admin bejelentkez�si jelszava';
--------------------------------------------------------
--  DDL for Table JEGY
--------------------------------------------------------

  CREATE TABLE "JEGY"
   (	"ID" NUMBER,
	"AR" NUMBER(6,0),
	"TIPUS" VARCHAR2(20 BYTE),
	"TAVOLSAG" NUMBER,
	"FELHASZNALO_ID" NUMBER
   ) SEGMENT CREATION IMMEDIATE
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Table FELHASZNALO
--------------------------------------------------------

  CREATE TABLE "FELHASZNALO"
   (	"ID" NUMBER(16,0),
	"NEV" VARCHAR2(40 BYTE),
	"EMAIL" VARCHAR2(55 BYTE),
	"SZULDATUM" DATE,
	"JELSZOHASH" VARCHAR2(64 BYTE),
	"LAKCIM" VARCHAR2(100 BYTE)
   ) SEGMENT CREATION IMMEDIATE
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;

   COMMENT ON COLUMN "FELHASZNALO"."ID" IS 'User id-ja';
   COMMENT ON COLUMN "FELHASZNALO"."NEV" IS 'User neve';
   COMMENT ON COLUMN "FELHASZNALO"."EMAIL" IS 'User emailje';
   COMMENT ON COLUMN "FELHASZNALO"."SZULDATUM" IS 'User sz�let�si d�tuma';
   COMMENT ON COLUMN "FELHASZNALO"."JELSZOHASH" IS 'User jelszav�nak bcrypt-es lek�dol�sa';
   COMMENT ON COLUMN "FELHASZNALO"."LAKCIM" IS 'User c�me';
--------------------------------------------------------
--  DDL for Table HELYIBUSZ
--------------------------------------------------------

  CREATE TABLE "HELYIBUSZ"
   (	"ID" NUMBER,
	"LEIRAS" VARCHAR2(25 BYTE),
	"MEGNEVEZES" VARCHAR2(30 BYTE),
	"INDULASI_IDO" VARCHAR2(20 BYTE),
	"TELEPULES" VARCHAR2(20 BYTE)
   ) SEGMENT CREATION IMMEDIATE
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;

   COMMENT ON COLUMN "HELYIBUSZ"."ID" IS 'Helyi buszok id-ja';
   COMMENT ON COLUMN "HELYIBUSZ"."LEIRAS" IS 'Adott busz egyik meg�ll�ja';
   COMMENT ON COLUMN "HELYIBUSZ"."MEGNEVEZES" IS 'Helyi buszok egyedi megnevez�se';
   COMMENT ON COLUMN "HELYIBUSZ"."INDULASI_IDO" IS 'Helyi busz indul�s�nak id�pontja';
   COMMENT ON COLUMN "HELYIBUSZ"."TELEPULES" IS 'V�ros neve';
--------------------------------------------------------
--  DDL for Table MODOSITAS
--------------------------------------------------------

  CREATE TABLE "MODOSITAS"
   (	"ID" NUMBER, "ADMIN_ID" NUMBER,
	"SZOVEG" VARCHAR2(200 BYTE),
	"DATUM" DATE
   ) SEGMENT CREATION IMMEDIATE
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;

   COMMENT ON COLUMN "MODOSITAS"."ADMIN_ID" IS 'Admin id-ja';
   COMMENT ON COLUMN "MODOSITAS"."SZOVEG" IS 'Admin tev�kenys�g be�rt sz�vege';
   COMMENT ON COLUMN "MODOSITAS"."DATUM" IS 'Admin tev�kenys�g d�tuma';
--------------------------------------------------------
--  DDL for Table TAVOLSAGIBUSZ
--------------------------------------------------------

  CREATE TABLE "TAVOLSAGIBUSZ"
   (	"ID" NUMBER,
	"LEIRAS" VARCHAR2(25 BYTE),
	"MEGNEVEZES" VARCHAR2(30 BYTE),
	"INDULASI_IDO" VARCHAR2(20 BYTE),
	"INDULASI_TELEPULES" VARCHAR2(25 BYTE)
   ) SEGMENT CREATION IMMEDIATE
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;

   COMMENT ON COLUMN "TAVOLSAGIBUSZ"."ID" IS 'T�vols�gi buszok id-ja';
   COMMENT ON COLUMN "TAVOLSAGIBUSZ"."LEIRAS" IS 'Adott busz egyik meg�ll�ja';
   COMMENT ON COLUMN "TAVOLSAGIBUSZ"."MEGNEVEZES" IS 'T�vols�gi buszok egyedi
megnevez�se';
   COMMENT ON COLUMN "TAVOLSAGIBUSZ"."INDULASI_IDO" IS 'T�vols�gi busz indul�s�nak id�pontja';
   COMMENT ON COLUMN "TAVOLSAGIBUSZ"."INDULASI_TELEPULES" IS 'T�vols�gi busz �rkez�s�nek helye';
--------------------------------------------------------
--  DDL for Table VONAT
--------------------------------------------------------

  CREATE TABLE "VONAT"
   (	"ID" NUMBER,
	"LEIRAS" VARCHAR2(25 BYTE),
	"MEGNEVEZES" VARCHAR2(20 BYTE),
	"INDULASI_IDO" VARCHAR2(20 BYTE),
	"INDULASI_TELEPULES" VARCHAR2(25 BYTE)
   ) SEGMENT CREATION IMMEDIATE
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;

   COMMENT ON COLUMN "VONAT"."ID" IS 'VONAT id-ja';
   COMMENT ON COLUMN "VONAT"."LEIRAS" IS 'Adott vonat adott meg�ll�ja';
   COMMENT ON COLUMN "VONAT"."MEGNEVEZES" IS 'VONAT egyedi megnevez�se';
   COMMENT ON COLUMN "VONAT"."INDULASI_IDO" IS 'Vonat indul�si ideje';
   COMMENT ON COLUMN "VONAT"."INDULASI_TELEPULES" IS 'Vonat indul�si helye';
REM INSERTING into MEGALLO
SET DEFINE OFF;
Insert into MEGALLO (ID,NEV,KILOMETER,VONAT_ID,HELYIBUSZ_ID,TAVOLSAGIBUSZ_ID,TELEPULES,IDO,SORSZAM) values (1,'Kisvas�t',38,1,null,null,'Szeged','17:28',1);
Insert into MEGALLO (ID,NEV,KILOMETER,VONAT_ID,HELYIBUSZ_ID,TAVOLSAGIBUSZ_ID,TELEPULES,IDO,SORSZAM) values (2,'�zsia centrum',5,1,null,null,'Debrecen','22:11',2);
Insert into MEGALLO (ID,NEV,KILOMETER,VONAT_ID,HELYIBUSZ_ID,TAVOLSAGIBUSZ_ID,TELEPULES,IDO,SORSZAM) values (3,'Mars t�r',10,null,null,10,'Sz�kesfeh�rv�r','01:20',1);
Insert into MEGALLO (ID,NEV,KILOMETER,VONAT_ID,HELYIBUSZ_ID,TAVOLSAGIBUSZ_ID,TELEPULES,IDO,SORSZAM) values (4,'Nagybani piac',68,null,32,null,'Buda�rs','03:42',1);
Insert into MEGALLO (ID,NEV,KILOMETER,VONAT_ID,HELYIBUSZ_ID,TAVOLSAGIBUSZ_ID,TELEPULES,IDO,SORSZAM) values (5,'Tropik�rium',14,null,null,24,'Kaposv�r','08:59',1);
Insert into MEGALLO (ID,NEV,KILOMETER,VONAT_ID,HELYIBUSZ_ID,TAVOLSAGIBUSZ_ID,TELEPULES,IDO,SORSZAM) values (6,'Hold utca',60,null,14,null,'Tatab�nya','14:15',1);
Insert into MEGALLO (ID,NEV,KILOMETER,VONAT_ID,HELYIBUSZ_ID,TAVOLSAGIBUSZ_ID,TELEPULES,IDO,SORSZAM) values (7,'V�nusz utca',19,30,null,null,'Nagykanizsa','09:55',1);
Insert into MEGALLO (ID,NEV,KILOMETER,VONAT_ID,HELYIBUSZ_ID,TAVOLSAGIBUSZ_ID,TELEPULES,IDO,SORSZAM) values (8,'Pl�t� utca',83,null,null,20,'Sopron','12:31',1);
Insert into MEGALLO (ID,NEV,KILOMETER,VONAT_ID,HELYIBUSZ_ID,TAVOLSAGIBUSZ_ID,TELEPULES,IDO,SORSZAM) values (9,'Nap utca',31,20,null,null,'Ny�regyh�za','20:46',1);
Insert into MEGALLO (ID,NEV,KILOMETER,VONAT_ID,HELYIBUSZ_ID,TAVOLSAGIBUSZ_ID,TELEPULES,IDO,SORSZAM) values (10,'Sirius t�r',37,10,null,null,'Salg�tarj�n','15:19',1);
Insert into MEGALLO (ID,NEV,KILOMETER,VONAT_ID,HELYIBUSZ_ID,TAVOLSAGIBUSZ_ID,TELEPULES,IDO,SORSZAM) values (11,'Denebola t�r',94,null,34,null,'Dunakeszi','11:06',1);
Insert into MEGALLO (ID,NEV,KILOMETER,VONAT_ID,HELYIBUSZ_ID,TAVOLSAGIBUSZ_ID,TELEPULES,IDO,SORSZAM) values (12,'Antares t�r',36,null,28,null,'J�szber�ny','04:39',1);
Insert into MEGALLO (ID,NEV,KILOMETER,VONAT_ID,HELYIBUSZ_ID,TAVOLSAGIBUSZ_ID,TELEPULES,IDO,SORSZAM) values (13,'Csendes t� �tja',49,null,32,null,'Buda�rs','10:44',3);
Insert into MEGALLO (ID,NEV,KILOMETER,VONAT_ID,HELYIBUSZ_ID,TAVOLSAGIBUSZ_ID,TELEPULES,IDO,SORSZAM) values (14,'Kiss tanya',50,null,2,null,'P�cs','17:27',1);
Insert into MEGALLO (ID,NEV,KILOMETER,VONAT_ID,HELYIBUSZ_ID,TAVOLSAGIBUSZ_ID,TELEPULES,IDO,SORSZAM) values (15,'Csendes t� �tja',71,null,null,13,'�zd','13:11',3);
Insert into MEGALLO (ID,NEV,KILOMETER,VONAT_ID,HELYIBUSZ_ID,TAVOLSAGIBUSZ_ID,TELEPULES,IDO,SORSZAM) values (16,'F� utca',81,null,null,13,'Szentes','02:24',1);
Insert into MEGALLO (ID,NEV,KILOMETER,VONAT_ID,HELYIBUSZ_ID,TAVOLSAGIBUSZ_ID,TELEPULES,IDO,SORSZAM) values (17,'Kossuth Lajos utca',40,13,null,null,'H�dmez�v�s�rhely','09:29',1);
Insert into MEGALLO (ID,NEV,KILOMETER,VONAT_ID,HELYIBUSZ_ID,TAVOLSAGIBUSZ_ID,TELEPULES,IDO,SORSZAM) values (18,'Nagytemplom  t�r',30,null,null,13,'Nagyk�r�s','11:13',2);
Insert into MEGALLO (ID,NEV,KILOMETER,VONAT_ID,HELYIBUSZ_ID,TAVOLSAGIBUSZ_ID,TELEPULES,IDO,SORSZAM) values (19,'V�rosliget s�t�ny',49,null,37,null,'P�pa','18:08',1);
Insert into MEGALLO (ID,NEV,KILOMETER,VONAT_ID,HELYIBUSZ_ID,TAVOLSAGIBUSZ_ID,TELEPULES,IDO,SORSZAM) values (20,'Erzs�bet t�r',73,null,27,null,'Kiskunhalas','14:47',1);
Insert into MEGALLO (ID,NEV,KILOMETER,VONAT_ID,HELYIBUSZ_ID,TAVOLSAGIBUSZ_ID,TELEPULES,IDO,SORSZAM) values (21,'D�zsa Gy�rgy �t',84,16,null,null,'Keszthely','19:59',1);
Insert into MEGALLO (ID,NEV,KILOMETER,VONAT_ID,HELYIBUSZ_ID,TAVOLSAGIBUSZ_ID,TELEPULES,IDO,SORSZAM) values (22,'R�k�czi �t',14,null,null,38,'Mak�','22:56',1);
Insert into MEGALLO (ID,NEV,KILOMETER,VONAT_ID,HELYIBUSZ_ID,TAVOLSAGIBUSZ_ID,TELEPULES,IDO,SORSZAM) values (23,'Csillagf�rt t�r',3,null,32,null,'Buda�rs','10:16',2);
Insert into MEGALLO (ID,NEV,KILOMETER,VONAT_ID,HELYIBUSZ_ID,TAVOLSAGIBUSZ_ID,TELEPULES,IDO,SORSZAM) values (24,'Bor�ka park',81,null,null,3,'�jpest','01:34',1);
Insert into MEGALLO (ID,NEV,KILOMETER,VONAT_ID,HELYIBUSZ_ID,TAVOLSAGIBUSZ_ID,TELEPULES,IDO,SORSZAM) values (25,'K�k tere',73,2,null,null,'Sz�zhalombatta','23:47',1);
Insert into MEGALLO (ID,NEV,KILOMETER,VONAT_ID,HELYIBUSZ_ID,TAVOLSAGIBUSZ_ID,TELEPULES,IDO,SORSZAM) values (26,'Vir�gos kert',24,null,11,null,'Gy�ngy�s','13:52',1);
Insert into MEGALLO (ID,NEV,KILOMETER,VONAT_ID,HELYIBUSZ_ID,TAVOLSAGIBUSZ_ID,TELEPULES,IDO,SORSZAM) values (27,'Aranyhomok utca',11,11,null,null,'V�c','17:36',1);
Insert into MEGALLO (ID,NEV,KILOMETER,VONAT_ID,HELYIBUSZ_ID,TAVOLSAGIBUSZ_ID,TELEPULES,IDO,SORSZAM) values (28,'Plat�nfa t�r',26,null,9,null,'Szeksz�rd','20:22',1);
Insert into MEGALLO (ID,NEV,KILOMETER,VONAT_ID,HELYIBUSZ_ID,TAVOLSAGIBUSZ_ID,TELEPULES,IDO,SORSZAM) values (29,'Napf�ny park',20,9,null,null,'Csorna','05:12',1);
Insert into MEGALLO (ID,NEV,KILOMETER,VONAT_ID,HELYIBUSZ_ID,TAVOLSAGIBUSZ_ID,TELEPULES,IDO,SORSZAM) values (30,'Kandall� t�r',17,null,null,9,'Paks','18:41',1);
REM INSERTING into ADMIN
SET DEFINE OFF;
ALTER SESSION SET NLS_DATE_LANGUAGE = 'ENGLISH';
Insert into ADMIN (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH) values (1,'Moln�r Levente','molnarlevi@valami.com',to_date('12/MAR/00','DD/MON/RR'),'$2y$10$giIGNea84QxUoA1t1mtXIuF5K4oJmdEVhx5ZlxV5.tJ1/13SKPBLa');
Insert into ADMIN (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH) values (2,'Kiszel D�niel','mkiszeldani@valami.com',to_date('10/JUN/01','DD/MON/RR'),'$2y$10$giIGNea84QxUoA1t1mtXIuF5K4oJmdEVhx5ZlxV5.tJ1/13SKPBLa');
Insert into ADMIN (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH) values (3,'Csonka �kos','csonkaaki@valami.com',to_date('23/OCT/00','DD/MON/RR'),'$2y$10$giIGNea84QxUoA1t1mtXIuF5K4oJmdEVhx5ZlxV5.tJ1/13SKPBLa');
Insert into ADMIN (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH) values (4,'Zana Attila','h054004@stud.u-szeged.hu',to_date('01/MAY/01','DD/MON/RR'),'$2y$10$giIGNea84QxUoA1t1mtXIuF5K4oJmdEVhx5ZlxV5.tJ1/13SKPBLa');
REM INSERTING into JEGY
SET DEFINE OFF;
Insert into JEGY (ID,AR,TIPUS,TAVOLSAG,FELHASZNALO_ID) values (1,400,'Vonat',5,1);
Insert into JEGY (ID,AR,TIPUS,TAVOLSAG,FELHASZNALO_ID) values (2,600,'Vonat',10,4);
Insert into JEGY (ID,AR,TIPUS,TAVOLSAG,FELHASZNALO_ID) values (3,800,'Vonat',15,8);
Insert into JEGY (ID,AR,TIPUS,TAVOLSAG,FELHASZNALO_ID) values (4,1000,'Vonat',20,3);
Insert into JEGY (ID,AR,TIPUS,TAVOLSAG,FELHASZNALO_ID) values (5,1200,'Vonat',25,5);
Insert into JEGY (ID,AR,TIPUS,TAVOLSAG,FELHASZNALO_ID) values (6,1400,'Vonat',30,9);
Insert into JEGY (ID,AR,TIPUS,TAVOLSAG,FELHASZNALO_ID) values (7,1600,'Vonat',35,12);
Insert into JEGY (ID,AR,TIPUS,TAVOLSAG,FELHASZNALO_ID) values (8,1800,'Vonat',40,43);
Insert into JEGY (ID,AR,TIPUS,TAVOLSAG,FELHASZNALO_ID) values (9,2000,'Vonat',45,44);
Insert into JEGY (ID,AR,TIPUS,TAVOLSAG,FELHASZNALO_ID) values (10,2200,'Vonat',50,45);
Insert into JEGY (ID,AR,TIPUS,TAVOLSAG,FELHASZNALO_ID) values (11,2400,'Vonat',55,46);
Insert into JEGY (ID,AR,TIPUS,TAVOLSAG,FELHASZNALO_ID) values (12,2600,'Vonat',60,40);
Insert into JEGY (ID,AR,TIPUS,TAVOLSAG,FELHASZNALO_ID) values (13,2800,'Vonat',65,11);
Insert into JEGY (ID,AR,TIPUS,TAVOLSAG,FELHASZNALO_ID) values (14,3000,'Vonat',70,13);
Insert into JEGY (ID,AR,TIPUS,TAVOLSAG,FELHASZNALO_ID) values (15,3200,'Vonat',75,14);
Insert into JEGY (ID,AR,TIPUS,TAVOLSAG,FELHASZNALO_ID) values (16,3400,'Vonat',80,20);
Insert into JEGY (ID,AR,TIPUS,TAVOLSAG,FELHASZNALO_ID) values (17,3600,'Vonat',85,22);
Insert into JEGY (ID,AR,TIPUS,TAVOLSAG,FELHASZNALO_ID) values (18,3800,'Vonat',90,21);
Insert into JEGY (ID,AR,TIPUS,TAVOLSAG,FELHASZNALO_ID) values (19,4000,'Vonat',95,26);
Insert into JEGY (ID,AR,TIPUS,TAVOLSAG,FELHASZNALO_ID) values (20,4200,'Vonat',100,47);
Insert into JEGY (ID,AR,TIPUS,TAVOLSAG,FELHASZNALO_ID) values (21,320,'T�vols�gi busz',5,31);
Insert into JEGY (ID,AR,TIPUS,TAVOLSAG,FELHASZNALO_ID) values (22,570,'T�vols�gi busz',10,49);
Insert into JEGY (ID,AR,TIPUS,TAVOLSAG,FELHASZNALO_ID) values (23,820,'T�vols�gi busz',15,50);
Insert into JEGY (ID,AR,TIPUS,TAVOLSAG,FELHASZNALO_ID) values (24,1070,'T�vols�gi busz',20,16);
Insert into JEGY (ID,AR,TIPUS,TAVOLSAG,FELHASZNALO_ID) values (25,1320,'T�vols�gi busz',25,18);
Insert into JEGY (ID,AR,TIPUS,TAVOLSAG,FELHASZNALO_ID) values (26,1570,'T�vols�gi busz',30,28);
Insert into JEGY (ID,AR,TIPUS,TAVOLSAG,FELHASZNALO_ID) values (27,1820,'T�vols�gi busz',35,29);
Insert into JEGY (ID,AR,TIPUS,TAVOLSAG,FELHASZNALO_ID) values (28,2070,'T�vols�gi busz',40,10);
Insert into JEGY (ID,AR,TIPUS,TAVOLSAG,FELHASZNALO_ID) values (29,2320,'T�vols�gi busz',45,2);
Insert into JEGY (ID,AR,TIPUS,TAVOLSAG,FELHASZNALO_ID) values (30,2570,'T�vols�gi busz',50,6);
Insert into JEGY (ID,AR,TIPUS,TAVOLSAG,FELHASZNALO_ID) values (31,2820,'T�vols�gi busz',55,8);
Insert into JEGY (ID,AR,TIPUS,TAVOLSAG,FELHASZNALO_ID) values (32,3070,'T�vols�gi busz',60,32);
Insert into JEGY (ID,AR,TIPUS,TAVOLSAG,FELHASZNALO_ID) values (33,3320,'T�vols�gi busz',65,33);
Insert into JEGY (ID,AR,TIPUS,TAVOLSAG,FELHASZNALO_ID) values (34,3570,'T�vols�gi busz',70,34);
Insert into JEGY (ID,AR,TIPUS,TAVOLSAG,FELHASZNALO_ID) values (35,3820,'T�vols�gi busz',75,35);
Insert into JEGY (ID,AR,TIPUS,TAVOLSAG,FELHASZNALO_ID) values (36,4070,'T�vols�gi busz',80,36);
Insert into JEGY (ID,AR,TIPUS,TAVOLSAG,FELHASZNALO_ID) values (37,4320,'T�vols�gi busz',85,37);
Insert into JEGY (ID,AR,TIPUS,TAVOLSAG,FELHASZNALO_ID) values (38,4570,'T�vols�gi busz',90,38);
Insert into JEGY (ID,AR,TIPUS,TAVOLSAG,FELHASZNALO_ID) values (39,4820,'T�vols�gi busz',95,39);
Insert into JEGY (ID,AR,TIPUS,TAVOLSAG,FELHASZNALO_ID) values (40,550,'Helyi busz',null,30);
REM INSERTING into FELHASZNALO
SET DEFINE OFF;
Insert into FELHASZNALO (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH,LAKCIM) values (2,'Szab� Petra','szabopetra@zmail.com',to_date('30/OCT/71','DD/MON/RR'),'$2y$10$O78v1ALcJGNAyhaGgT4cquDiGs.TLnStrwHrHEh2U5oJFiiuivXs6','4200 J�nosi �t 3.');
Insert into FELHASZNALO (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH,LAKCIM) values (3,'Kocsis Andrea','kocsisandrea@zmail.com',to_date('18/MAY/95','DD/MON/RR'),'$2y$10$5D9doEVLOK1VHAnrWWdoauydki1YN.VrkL8iJyIdSAK6ES.L0urMu','6237 Mars t�r 12.');
Insert into FELHASZNALO (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH,LAKCIM) values (4,'T�th G�bor','tothgabor@zmail.com',to_date('15/MAR/86','DD/MON/RR'),'$2y$10$i64dpZRhWvGL3/.qNp8imezxgBHnT/7zsU0P4N.9rlqUndC0KqWra','1153 Bajnok utca 7.');
Insert into FELHASZNALO (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH,LAKCIM) values (5,'Nagy R�ka','nagyreka@zmail.com',to_date('22/AUG/98','DD/MON/RR'),'$2y$10$HopLPb30ZZL5jHuaFpubP.P5BoHK.1.AqQe619ZeYBYtIlcoV0pf2','8000 Bart�k B�la 10.');
Insert into FELHASZNALO (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH,LAKCIM) values (6,'Bal�zs Tam�s','balazstamas@zmail.com',to_date('17/DEC/89','DD/MON/RR'),'$2y$10$kADcYlIGlDCs5nhnMXv2POKgTtX6/R/SZ1T0BD6KFLtiE4YNQTUQy','7400 Ady Endre 5.');
Insert into FELHASZNALO (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH,LAKCIM) values (7,'Kov�cs Vikt�ria','kovacsviktoria@zmail.com',to_date('12/JUN/93','DD/MON/RR'),'$2y$10$bOfnlAJl0/LFtA1y9mu5nOgqn7EnC2YaVuMdQKv2K1Y0QzERIeoRm','6500 D�zsa Gy�rgy 4.');
Insert into FELHASZNALO (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH,LAKCIM) values (8,'Balogh M�t�','baloghmate@zmail.com',to_date('28/JAN/80','DD/MON/RR'),'$2y$10$6j55/fXbBQTNmRg4oBIk.u2S4koaZtKu7BljB0eGbFl7v9oWRxWjW','1024 Pet�fi S�ndor 8.');
Insert into FELHASZNALO (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH,LAKCIM) values (9,'Szil�gyi Levente','szilagyiLevente@zmail.com',to_date('07/SEP/91','DD/MON/RR'),'$2y$10$/RcXymTvwyc6FFbHJHBUsuoF9q5sfsoZtwPelXnpYwiSGr0Ws.LUG','4400 De�k Ferenc 11.');
Insert into FELHASZNALO (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH,LAKCIM) values (10,'T�th �d�m','tothadam@zmail.com',to_date('03/MAY/00','DD/MON/RR'),'$2y$10$.GraPfX064Vhe1.jY0UAJeQS37YlHS2UHSyWusMsePQJb4QhC3Gzi','5900 Pet�fi utca 13.');
Insert into FELHASZNALO (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH,LAKCIM) values (11,'Kiss Zs�fia','kisszsofia@zmail.com',to_date('24/DEC/92','DD/MON/RR'),'$2y$10$hLwccuCdFJBhMB1bPSDpPePCyHKGcUPukhR0ZZ16xx27r4gykAAEq','8800 R�k�czi �t 2.');
Insert into FELHASZNALO (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH,LAKCIM) values (12,'T�th Eszter','totheszter@zmail.com',to_date('23/JUL/85','DD/MON/RR'),'$2y$10$aMNXugjgdHiU0Me5mBERZOT8/esd24cTk/4DFCjZKjudr1/7drw4.','7630 Pet�fi S�ndor utca 7.');
Insert into FELHASZNALO (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH,LAKCIM) values (13,'Kiss Tam�s','kisstamas@zmail.com',to_date('10/MAR/99','DD/MON/RR'),'$2y$10$a5cFM91upTDxleHMHQBzTueQ39kc.yNNlXiRNDSqK9QLJ.Zdw0ZHu','2500 Bart�k B�la utca 5.');
Insert into FELHASZNALO (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH,LAKCIM) values (14,'Varga Enik�','vargaeniko@zmail.com',to_date('27/DEC/92','DD/MON/RR'),'$2y$10$rCC1CzYmdStBFvkMZY9ol.uFIJzvx7CdJ0dTsnzh.sAT7qpSFq0O2','8600 De�k Ferenc t�r 8.');
Insert into FELHASZNALO (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH,LAKCIM) values (15,'Balogh Zsolt','baloghzsolt@zmail.com',to_date('05/JUN/77','DD/MON/RR'),'$2y$10$XpA.GrUXZasaTYwuyahdWu6.LvnDYJpIVVup8sjIkKGkxbFHiru66','6800 Sz�chenyi utca 11.');
Insert into FELHASZNALO (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH,LAKCIM) values (16,'Moln�r L�szl�','moln�rlaszlo@zmail.com',to_date('17/JAN/89','DD/MON/RR'),'$2y$10$tGIZk7j7vRyCEutBYyeHAuJD7j08fxGpzBLOg4E18wmnM6fZk5Ezq','3527 Kossuth Lajos utca 3.');
Insert into FELHASZNALO (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH,LAKCIM) values (17,'Farkas Ibolya','farkasibolya@zmail.com',to_date('22/AUG/96','DD/MON/RR'),'$2y$10$0x1zS6IUnPB5H249LGz6FuxmQLy1bAGXMMshvUAjhXk6kv0p3daC2','8000 B�la kir�ly t�r 6.');
Insert into FELHASZNALO (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH,LAKCIM) values (18,'Horv�th P�ter','horvathpeter@zmail.com',to_date('12/MAY/80','DD/MON/RR'),'$2y$10$Q7xSfaFuKrt3Sr3QXfLuWuLGVUJUuikUvWMW.bPe82p6BSge5KEP.','3300 Arany J�nos utca 4.');
Insert into FELHASZNALO (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH,LAKCIM) values (19,'Simon Vikt�ria','simonviktoria@zmail.com',to_date('03/NOV/00','DD/MON/RR'),'$2y$10$o1LfdKRCtQg0wulhXdft8.jZ72VGpP0Y1zmIiqbFTPWWqA/6dhJSq','6700 Kert�sz utca 10.');
Insert into FELHASZNALO (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH,LAKCIM) values (20,'Tak�cs �d�m','takacsadam@zmail.com',to_date('19/MAR/87','DD/MON/RR'),'$2y$10$IgoFGD48H9hta4eYJIwmreOJfUo75zYwrH1Pl92bzRlLq3j6S0Meq','6722 V�s�rhelyi P�l utca 5.');
Insert into FELHASZNALO (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH,LAKCIM) values (21,'Nagy G�bor','nagygabor@zmail.com',to_date('15/SEP/90','DD/MON/RR'),'$2y$10$zjkxrzvIdzfY6ZV1Sog7ZuoACIOjuB0aGOhnkhm5htSlui3J4ryuW','4400 Ady Endre utca 9.');
Insert into FELHASZNALO (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH,LAKCIM) values (22,'Nagy Zs�fia','nagyzsofia@zmail.com',to_date('22/JUL/00','DD/MON/RR'),'$2y$10$RfTnVg4jdVuGlEK81d04M.TtdttxYQzQmNGZeQra3fgf8rzHAwoPW','8220 Ady Endre 17.');
Insert into FELHASZNALO (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH,LAKCIM) values (23,'T�th Gergely','tothgergely@zmail.com',to_date('13/FEB/82','DD/MON/RR'),'$2y$10$qmRlfT8rEFiQUWnMq0/YwuCKnQ/JBbymutNfqrC4YQuvW7if87kwW','5430 K�zt�rsas�g �t 42.');
Insert into FELHASZNALO (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH,LAKCIM) values (24,'Moln�r Katalin','molnarkatalin@zmail.com',to_date('04/JUN/91','DD/MON/RR'),'$2y$10$SIBDPWpJK38ONfz.vX2F6ullH9/2rnUUmB9T6kL8SwtIn1D7.NWRq','6720 D�zsa Gy�rgy 9.');
Insert into FELHASZNALO (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH,LAKCIM) values (25,'Varga Istv�n','vargaistvan@zmail.com',to_date('15/SEP/75','DD/MON/RR'),'$2y$10$Z1s60kjf85WZSBWhMfCcuO7LiXy1t7bULkmqSlXVr5oJLAz30DouO','1188 Bajcsy-Zsilinszky 21.');
Insert into FELHASZNALO (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH,LAKCIM) values (26,'Papp Enik�','pappeniko@zmail.com',to_date('08/DEC/99','DD/MON/RR'),'$2y$10$Z1s60kjf85WZSBWhMfCcuO7LiXy1t7bULkmqSlXVr5oJLAz30DouO','4400 Kossuth Lajos 13.');
Insert into FELHASZNALO (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH,LAKCIM) values (27,'Szil�gyi Tam�s','szilagytamas@zmail.com',to_date('21/APR/88','DD/MON/RR'),'$2y$10$62upvJ9/hcY2YvNg3qVvmuO94P3ye8uFQc2qsLH23DJyjU97Sysla','6722 De�k Ferenc 6.');
Insert into FELHASZNALO (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH,LAKCIM) values (28,'Guly�s D�ra','gulyasdora@zmail.com',to_date('26/NOV/94','DD/MON/RR'),'$2y$10$x060HwAMfUEkHNCx9fg.BuznD.n//g.zKH8WKndUSrxYApgtE64r2','6724 Kiss J�nos 8.');
Insert into FELHASZNALO (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH,LAKCIM) values (29,'B�lint Bence','balintbence@zmail.com',to_date('14/FEB/03','DD/MON/RR'),'$2y$10$4MfshrPuIwuSQbRd9B3jE..nQtYVMCuO5GNf2K9w51ZnDtyyzFeaS','6726 Pet�fi S�ndor 11.');
Insert into FELHASZNALO (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH,LAKCIM) values (30,'Farkas J�nos','farkasjanos@zmail.com',to_date('05/AUG/79','DD/MON/RR'),'$2y$10$as0.uZJw95qLxCy8mzio5e5rOpGAL7MFk5q1JwyoBLLg/CKrgyxSK','1055 Kert�sz utca 7.');
Insert into FELHASZNALO (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH,LAKCIM) values (31,'Bogn�r P�ter','bognarpeter@zmail.com',to_date('29/MAY/92','DD/MON/RR'),'$2y$10$cAFjvHeslBSxQjpY5ptVMucCYhy1/lWqHdHSS.YB6aumrJ8vt8tLe','1106 Bart�k B�la 14.');
Insert into FELHASZNALO (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH,LAKCIM) values (32,'Kiss Eszter','kisseszter@zmail.com',to_date('01/SEP/02','DD/MON/RR'),'$2y$10$b3BaHf80S095g6epilRKfubnJ5fOGNCTpAfo90RiVritPlxcMKVJ2','1118 Gell�rt t�r 3.');
Insert into FELHASZNALO (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH,LAKCIM) values (33,'Balogh G�bor','baloghgabor@zmail.com',to_date('10/MAR/89','DD/MON/RR'),'$2y$10$5tWzsd05Y7AvAKIJYpAoIOJydjQkOh.gHj//gLtmHHLGHEy3IL6.y','3200 Arany J�nos 5.');
Insert into FELHASZNALO (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH,LAKCIM) values (34,'Nagy G�bor','nagy.gabor@zmail.com',to_date('23/SEP/88','DD/MON/RR'),'$2y$10$VZml5IH/7WjfAp7A8C2rsO0kjTVoyatT5p1p9d6B82vTeXy9ADTKW','8200 Pet�fi S�ndor 5.');
Insert into FELHASZNALO (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH,LAKCIM) values (35,'Varga D�niel','varga.daniel@zmail.com',to_date('14/MAR/92','DD/MON/RR'),'$2y$10$sO7NqEKpdEbNcKM1N0nhDO3i2hXqT0e8jC7Vk.luM7N3Hjnys3b1m','4400 Kossuth Lajos 9.');
Insert into FELHASZNALO (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH,LAKCIM) values (36,'T�th Anna','tothanna@zmail.com',to_date('07/JUN/85','DD/MON/RR'),'$2y$10$yKzs2gP0UaR9xl6pxZNaTe8N/QVY9UbHbtuC8n8ly2V0b8Icb2Y9y','3300 Arany J�nos 15.');
Insert into FELHASZNALO (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH,LAKCIM) values (37,'Balogh Istv�n','balogh.istvan@zmail.com',to_date('16/FEB/99','DD/MON/RR'),'$2y$10$ebWUbTQ32nhbvP6ZOEIfSuXN/Y2qFhx4B3ex7eCo5o9245U1a50Oe','7000 Ady Endre 8.');
Insert into FELHASZNALO (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH,LAKCIM) values (38,'M�sz�ros K�roly','meszaroskaroly@zmail.com',to_date('27/NOV/91','DD/MON/RR'),'$2y$10$GLlKAxN021QHle6a9cc5XubMH0VPv8zd7XNVmSAl3nZwTiW1Cskie','3100 Szabads�g t�r 2.');
Insert into FELHASZNALO (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH,LAKCIM) values (39,'Tak�cs �va','takacseva@zmail.com',to_date('12/JUL/80','DD/MON/RR'),'$2y$10$zQxs0obKclCcDoDK2rzCNOd6yPm8ssDOZWIGDWDp45LtARbwhNb7O','9500 Kossuth utca 6.');
Insert into FELHASZNALO (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH,LAKCIM) values (40,'Kov�csn� Zsuzsanna','kovacs.zsuzsanna@zmail.com',to_date('19/APR/76','DD/MON/RR'),'$2y$10$r37pdlh20o/kGFUvYP4FleUIdzWU.O.SXtnORCIZF7Gd6GczDPcvW','4300 Kossuth t�r 1.');
Insert into FELHASZNALO (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH,LAKCIM) values (41,'Szil�gyi L�szl�','szilagyi.laszlo@zmail.com',to_date('08/JAN/97','DD/MON/RR'),'$2y$10$8dw.TJJJy7mqVZ3Rb6yy3.riCS2nKzQGk3ICCF.TIH3QnGPUNcYJy','5500 Pet�fi t�r 10.');
Insert into FELHASZNALO (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH,LAKCIM) values (42,'Farkas P�ter','farkas.peter@zmail.com',to_date('31/AUG/83','DD/MON/RR'),'$2y$10$bISVIYVYk5Av3w4k1UH9R.sxjuaNvu/pz8XstK5wbebZav96dFgZe','1132 Bart�k B�la 45.');
Insert into FELHASZNALO (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH,LAKCIM) values (43,'Szab� Tam�s','szabotamas@zmail.com',to_date('10/FEB/90','DD/MON/RR'),'$2y$10$smF/QN/7e18UKEFBAjRqWuK.gmfgbuLvHjtenlh5OFSZkWjBIHaqK','6720 J�kai M�r 7.');
Insert into FELHASZNALO (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH,LAKCIM) values (44,'Kov�cs J�nos','kovacsjanos@zmail.com',to_date('03/NOV/82','DD/MON/RR'),'$2y$10$ffX0nwK/DuM11vR5DjIzUOQ9/qEUkAQ1BqspRXhqaWcRrFgBRspe2','3300 Bajnai �t 20.');
Insert into FELHASZNALO (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH,LAKCIM) values (45,'Fekete Zolt�n','feketezoltan@zmail.com',to_date('14/AUG/92','DD/MON/RR'),'$2y$10$tOEo..TeHVzGRCjcQ8x63uOwRTQ634CVIU5VrRB388gROkPIUuHYm','2100 Bajnok utca 5.');
Insert into FELHASZNALO (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH,LAKCIM) values (46,'T�th Laura','tothlaura@zmail.com',to_date('22/DEC/88','DD/MON/RR'),'$2y$10$soq9Z0zEK3Iur0gTMNrW0./BO.k0Zr8aqqhCgsbTDgJVij7iv2F5i','5300 R�k�czi �t 8.');
Insert into FELHASZNALO (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH,LAKCIM) values (47,'Papp B�la','pappbela@zmail.com',to_date('06/MAR/79','DD/MON/RR'),'$2y$10$D8pfT2kYiBOm/w2igkaftORl.zCZJYlH016M7gHQWgSoauEIt3t9S','4400 Pet�fi S�ndor utca 14.');
Insert into FELHASZNALO (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH,LAKCIM) values (48,'Tak�cs �d�m','takacsadam@zmail.com',to_date('27/JUL/98','DD/MON/RR'),'$2y$10$V./oIQsbEuHMXzVFuHsW3u33q9c5g0N0kyWgyajD9U5bHzL20O/ze','8200 F� utca 7.');
Insert into FELHASZNALO (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH,LAKCIM) values (49,'Horv�th Zsuzsa','horvathzsuzsa@zmail.com',to_date('02/MAY/90','DD/MON/RR'),'$2y$10$wCf4DNOfrvh6x8kf80alGulaSh57Zitl3RMNAAEgFvYvJtmfXrueS','8000 Kossuth Lajos utca 2.');
Insert into FELHASZNALO (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH,LAKCIM) values (50,'Kiss Istv�n','kissistvan@zmail.com',to_date('18/SEP/83','DD/MON/RR'),'$2y$10$p61ThUFmzHECyvSaEeja1een9XyGwRF8DxQ5DHgCA3ni.5y0jrVK.','5600 Arany J�nos utca 11.');
Insert into FELHASZNALO (ID,NEV,EMAIL,SZULDATUM,JELSZOHASH,LAKCIM) values (1,'Kov�cs M�rk','kovacsmark@zmail.com',to_date('02/NOV/01','DD/MON/RR'),'$2y$10$mvDcwg3QUvsUWqUJqu0He.Q5yzEWMFbg11Nt1n5tcY4IipPYZ1oRC','6110 J�zsef Attila 22.');
REM INSERTING into HELYIBUSZ
SET DEFINE OFF;
Insert into HELYIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,TELEPULES) values (1,'busz','10-es','11:35','Sz�kesfeh�rv�r');
Insert into HELYIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,TELEPULES) values (2,'trollibusz','72-es','19:47','P�cs');
Insert into HELYIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,TELEPULES) values (3,'busz','2-es','14:53','Gy�r');
Insert into HELYIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,TELEPULES) values (4,'trollibusz','5-�s','16:17','Debrecen');
Insert into HELYIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,TELEPULES) values (5,'busz','83-as','21:29','Kaposv�r');
Insert into HELYIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,TELEPULES) values (6,'trollibusz','4-es','13:25','Nagykanizsa');
Insert into HELYIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,TELEPULES) values (7,'busz','92-es','01:08','Esztergom');
Insert into HELYIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,TELEPULES) values (8,'trollibusz','76-os','11:02','Tatab�nya');
Insert into HELYIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,TELEPULES) values (9,'busz','1-es','05:36','Szeksz�rd');
Insert into HELYIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,TELEPULES) values (10,'trollibusz','14-es','07:10','Szeksz�rd');
Insert into HELYIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,TELEPULES) values (11,'trollibusz','6-os','15:58','Gy�ngy�s');
Insert into HELYIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,TELEPULES) values (12,'busz','7-es','06:26','Veszpr�m');
Insert into HELYIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,TELEPULES) values (13,'trollibusz','30-as','10:06','Eger');
Insert into HELYIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,TELEPULES) values (14,'busz','15-�s','09:28','Tatab�nya');
Insert into HELYIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,TELEPULES) values (15,'busz','17-es','12:01','Szeksz�rd');
Insert into HELYIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,TELEPULES) values (16,'trollibusz','10-es','08:03','Gy�ngy�s');
Insert into HELYIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,TELEPULES) values (17,'busz','88-as','21:55','Tapolca');
Insert into HELYIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,TELEPULES) values (18,'trollibusz','23-as','15:42','Szentes');
Insert into HELYIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,TELEPULES) values (19,'busz','9-es','03:39','Kecskem�t');
Insert into HELYIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,TELEPULES) values (20,'busz','3-as','19:36','Miskolc');
Insert into HELYIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,TELEPULES) values (21,'trollibusz','12-es','17:18','Ny�regyh�za');
Insert into HELYIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,TELEPULES) values (22,'busz','13-as','11:17','Sopron');
Insert into HELYIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,TELEPULES) values (23,'trollibusz','18-as','14:08','V�c');
Insert into HELYIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,TELEPULES) values (24,'busz','20-as','08:56','Szentendre');
Insert into HELYIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,TELEPULES) values (25,'busz','22-es','12:23','G�d�ll�');
Insert into HELYIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,TELEPULES) values (26,'trollibusz','27-es','02:41','Hatvan');
Insert into HELYIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,TELEPULES) values (27,'busz','33-as','05:30','Kiskunhalas');
Insert into HELYIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,TELEPULES) values (28,'trollibusz','36-os','09:47','J�szber�ny');
Insert into HELYIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,TELEPULES) values (29,'busz','41-es','03:14','Putnok');
Insert into HELYIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,TELEPULES) values (30,'trollibusz','45-�s','21:01','Kisk�r�s');
Insert into HELYIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,TELEPULES) values (31,'busz','50-es','16:38','Kiskunf�legyh�za');
Insert into HELYIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,TELEPULES) values (32,'trollibusz','51-es','00:22','Buda�rs');
Insert into HELYIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,TELEPULES) values (33,'busz','56-os','17:50','Moh�cs');
Insert into HELYIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,TELEPULES) values (34,'trollibusz','60-as','02:20','Dunakeszi');
Insert into HELYIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,TELEPULES) values (35,'busz','63-as','05:14','Domb�v�r');
Insert into HELYIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,TELEPULES) values (36,'trollibusz','67-es','23:02','Sikl�s');
Insert into HELYIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,TELEPULES) values (37,'busz','70-es','14:26','P�pa');
Insert into HELYIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,TELEPULES) values (38,'trollibusz','73-as','09:38','Keszthely');
Insert into HELYIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,TELEPULES) values (39,'busz','77-es','15:33','H�dmez�v�s�rhely');
Insert into HELYIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,TELEPULES) values (40,'trollibusz','79-es','22:31','J�szber�ny');
REM INSERTING into MODOSITAS
SET DEFINE OFF;
Insert into MODOSITAS (ID,ADMIN_ID,SZOVEG,DATUM) values (1,3,'�rt�k m�dos�t�sa',to_date('30/MAR/23','DD/MON/RR'));
REM INSERTING into TAVOLSAGIBUSZ
SET DEFINE OFF;
Insert into TAVOLSAGIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (2,'s�rga','5120-as','05:36','Szeged');
Insert into TAVOLSAGIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (3,'barna','5271-es','09:45','Debrecen');
Insert into TAVOLSAGIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (4,'barna','5278-es','14:53','Sz�kesfeh�rv�r');
Insert into TAVOLSAGIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (5,'k�k','5061-es','12:07','Szombathely');
Insert into TAVOLSAGIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (6,'s�rga','5005-�s','19:16','Kaposv�r');
Insert into TAVOLSAGIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (7,'z�ld','5150-es','07:49','Tatab�nya');
Insert into TAVOLSAGIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (8,'lila','5301-es','21:08','Nagykanizsa');
Insert into TAVOLSAGIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (9,'k�k','5020-as','18:23','Sopron');
Insert into TAVOLSAGIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (10,'piros','5105-�s','09:02','Ny�regyh�za');
Insert into TAVOLSAGIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (11,'s�rga','5143-as','22:37','Salg�tarj�n');
Insert into TAVOLSAGIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (12,'k�k','5038-as','06:58','Dunakeszi');
Insert into TAVOLSAGIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (13,'z�ld','5220-as','19:13','J�szber�ny');
Insert into TAVOLSAGIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (14,'barna','5262-es','20:57','Orosh�za');
Insert into TAVOLSAGIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (15,'piros','5085-�s','23:15','Mosonmagyar�v�r');
Insert into TAVOLSAGIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (16,'s�rga','5110-es','05:33','�zd');
Insert into TAVOLSAGIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (17,'z�ld','5232-es','08:51','Szentes');
Insert into TAVOLSAGIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (18,'lila','5321-es','16:49','H�dmez�v�s�rhely');
Insert into TAVOLSAGIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (19,'k�k','5045-�s','21:52','Nagyk�r�s');
Insert into TAVOLSAGIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (20,'piros','5091-es','07:03','P�pa');
Insert into TAVOLSAGIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (21,'barna','5250-es','00:59','Kiskunhalas');
Insert into TAVOLSAGIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (22,'s�rga','5170-es','03:21','Keszthely');
Insert into TAVOLSAGIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (23,'z�ld','5210-es','12:27','Mak�');
Insert into TAVOLSAGIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (24,'piros','5065-�s','16:01','Buda�rs');
Insert into TAVOLSAGIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (25,'lila','5330-as','06:05','�jpest');
Insert into TAVOLSAGIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (26,'barna','5240-es','15:41','Sz�zhalombatta');
Insert into TAVOLSAGIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (27,'k�k','5001-es','08:19','Gy�ngy�s');
Insert into TAVOLSAGIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (28,'z�ld','5125-�s','02:07','V�c');
Insert into TAVOLSAGIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (29,'piros','5180-as','05:08','Szeksz�rd');
Insert into TAVOLSAGIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (30,'s�rga','5136-os','09:37','Csorna');
Insert into TAVOLSAGIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (31,'z�ld','5500-as','11:58','Paks');
Insert into TAVOLSAGIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (32,'piros','5552-es','12:36','Moh�cs');
Insert into TAVOLSAGIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (33,'k�k','5601-es','02:17','Hatvan');
Insert into TAVOLSAGIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (34,'s�rga','5320-as','15:21','Keszthely');
Insert into TAVOLSAGIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (35,'lila','5012-es','21:53','V�rpalota');
Insert into TAVOLSAGIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (36,'narancss�rga','5023-as','16:42','Szolnok');
Insert into TAVOLSAGIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (37,'r�zsasz�n','5334-es','23:05','Szentes');
Insert into TAVOLSAGIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (38,'barna','5445-�s','14:37','Esztergom');
Insert into TAVOLSAGIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (39,'k�k','5678-as','01:48','S�rv�r');
Insert into TAVOLSAGIBUSZ (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (40,'lila','5789-es','09:56','�rd');
REM INSERTING into VONAT
SET DEFINE OFF;
Insert into VONAT (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (1,'Intercity','Aranykal�sz','03:07','Kazincbarcika');
Insert into VONAT (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (2,'M�sodoszt�ly','Oszlopi g�lya','17:03','S�rospatak');
Insert into VONAT (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (3,'Gyorsvonat','Levendula','06:59','B�k�scsaba');
Insert into VONAT (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (4,'Szem�lyvonat','R�zsaliget','08:28','Karcag');
Insert into VONAT (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (5,'Gyorsvonat','Csillagf�ny','02:42','P�ty');
Insert into VONAT (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (6,'Intercity','Z�ldfa','15:33','Tiszavasv�ri');
Insert into VONAT (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (7,'M�sodoszt�ly','K�k tenger','11:01','T�r�kb�lint');
Insert into VONAT (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (8,'Szem�lyvonat','Napsug�r','18:28','Gyomaendr�d');
Insert into VONAT (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (9,'Intercity','Aranyhomok','03:54','Sopron');
Insert into VONAT (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (10,'Gyorsvonat','M�lyvavir�g','11:39','Szombathely');
Insert into VONAT (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (11,'M�sodoszt�ly','Korall','01:32','Baja');
Insert into VONAT (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (12,'Intercity','K�k lag�na','06:23','J�szber�ny');
Insert into VONAT (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (13,'Szem�lyvonat','Bambusz liget','08:07','Szolnok');
Insert into VONAT (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (14,'Intercity','Vulk�n','03:16','Nagyk�r�s');
Insert into VONAT (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (15,'M�sodoszt�ly','Pisztr�ng','09:45','P�cs');
Insert into VONAT (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (16,'Gyorsvonat','Tengeri s�','12:03','Miskolc');
Insert into VONAT (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (17,'Intercity','T�nd�rkert','16:27','Eger');
Insert into VONAT (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (18,'Szem�lyvonat','S�rga r�zsa','07:19','Dunakeszi');
Insert into VONAT (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (19,'Gyorsvonat','Karmazsin','09:10','Miskolc');
Insert into VONAT (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (20,'Intercity','Ez�st','18:22','Salg�tarj�n');
Insert into VONAT (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (21,'M�sodoszt�ly','Sz�l�','03:04','Hajd�szoboszl�');
Insert into VONAT (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (22,'Intercity','B�zamez�','06:47','Keszthely');
Insert into VONAT (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (23,'Gyorsvonat','Eperfagyal','17:39','Si�fok');
Insert into VONAT (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (24,'M�sodoszt�ly','Aranyhal','23:41','Szeksz�rd');
Insert into VONAT (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (25,'Intercity','T�lgyerd�','15:04','B�k�s');
Insert into VONAT (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (26,'Szem�lyvonat','Fekete r�zsa','02:26','Szentendre');
Insert into VONAT (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (27,'Intercity','T�zvir�g','05:09','K�szeg');
Insert into VONAT (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (28,'M�sodoszt�ly','Mandula','21:58','Karcag');
Insert into VONAT (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (29,'Gyorsvonat','Ciprus','15:01','Moh�cs');
Insert into VONAT (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (30,'Intercity','V�zpart','07:03','Balassagyarmat');
Insert into VONAT (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (31,'Szem�lyvonat','S�rgadinnye','12:05','Gyula');
Insert into VONAT (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (32,'Intercity','K�risfa','18:18','Csorna');
Insert into VONAT (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (33,'Gyorsvonat','Feny�erd�','14:40','Nagyhal�sz');
Insert into VONAT (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (34,'M�sodoszt�ly','K�szikla','23:42','Ny�rb�tor');
Insert into VONAT (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (35,'Intercity','Gyerty�nfa','08:54','K�rmend');
Insert into VONAT (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (36,'Szem�lyvonat','K�k ibolya','20:06','Zalakaros');
Insert into VONAT (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (38,'M�sodoszt�ly','Tavaszi sz�l','10:38','Celld�m�lk');
Insert into VONAT (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (39,'Intercity','Eperfajzat','17:01','Bicske');
Insert into VONAT (ID,LEIRAS,MEGNEVEZES,INDULASI_IDO,INDULASI_TELEPULES) values (40,'Gyorsvonat','K�rtefa','15:13','Szolnok');
--------------------------------------------------------
--  DDL for Index MEGALLO_PK
--------------------------------------------------------

  CREATE UNIQUE INDEX "MEGALLO_PK" ON "MEGALLO" ("ID")
  PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Index ADMIN_PK
--------------------------------------------------------

  CREATE UNIQUE INDEX "ADMIN_PK" ON "ADMIN" ("ID")
  PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Index JEGY_PK
--------------------------------------------------------

  CREATE UNIQUE INDEX "JEGY_PK" ON "JEGY" ("ID")
  PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Index FELHASZNALO_PK
--------------------------------------------------------

  CREATE UNIQUE INDEX "FELHASZNALO_PK" ON "FELHASZNALO" ("ID")
  PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Index HELYIBUSZ_PK
--------------------------------------------------------

  CREATE UNIQUE INDEX "HELYIBUSZ_PK" ON "HELYIBUSZ" ("ID")
  PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Index TAVOLSAGIBUSZ_PK
--------------------------------------------------------

  CREATE UNIQUE INDEX "TAVOLSAGIBUSZ_PK" ON "TAVOLSAGIBUSZ" ("ID")
  PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Index VONAT_PK
--------------------------------------------------------

  CREATE UNIQUE INDEX "VONAT_PK" ON "VONAT" ("ID")
  PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  Constraints for Table MEGALLO
--------------------------------------------------------

  ALTER TABLE "MEGALLO" ADD CONSTRAINT "MEGALLO_PK" PRIMARY KEY ("ID")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS"  ENABLE;
  ALTER TABLE "MEGALLO" MODIFY ("ID" NOT NULL ENABLE);
  ALTER TABLE "MEGALLO" MODIFY ("NEV" NOT NULL ENABLE);
  ALTER TABLE "MEGALLO" MODIFY ("KILOMETER" NOT NULL ENABLE);
  ALTER TABLE "MEGALLO" MODIFY ("TELEPULES" NOT NULL ENABLE);
  ALTER TABLE "MEGALLO" MODIFY ("IDO" NOT NULL ENABLE);
  ALTER TABLE "MEGALLO" MODIFY ("SORSZAM" NOT NULL ENABLE);
--------------------------------------------------------
--  Constraints for Table ADMIN
--------------------------------------------------------

  ALTER TABLE "ADMIN" ADD CONSTRAINT "ADMIN_PK" PRIMARY KEY ("ID")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS"  ENABLE;
  ALTER TABLE "ADMIN" MODIFY ("ID" NOT NULL ENABLE);
  ALTER TABLE "ADMIN" MODIFY ("NEV" NOT NULL ENABLE);
  ALTER TABLE "ADMIN" MODIFY ("EMAIL" NOT NULL ENABLE);
  ALTER TABLE "ADMIN" MODIFY ("SZULDATUM" NOT NULL ENABLE);
  ALTER TABLE "ADMIN" MODIFY ("JELSZOHASH" NOT NULL ENABLE);
--------------------------------------------------------
--  Constraints for Table JEGY
--------------------------------------------------------

  ALTER TABLE "JEGY" ADD CONSTRAINT "JEGY_PK" PRIMARY KEY ("ID")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS"  ENABLE;
  ALTER TABLE "JEGY" MODIFY ("ID" NOT NULL ENABLE);
  ALTER TABLE "JEGY" MODIFY ("AR" NOT NULL ENABLE);
  ALTER TABLE "JEGY" MODIFY ("TIPUS" NOT NULL ENABLE);
--------------------------------------------------------
--  Constraints for Table FELHASZNALO
--------------------------------------------------------

  ALTER TABLE "FELHASZNALO" ADD CONSTRAINT "FELHASZNALO_PK" PRIMARY KEY ("ID")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS"  ENABLE;
  ALTER TABLE "FELHASZNALO" MODIFY ("ID" NOT NULL ENABLE);
  ALTER TABLE "FELHASZNALO" MODIFY ("JELSZOHASH" NOT NULL ENABLE);
  ALTER TABLE "FELHASZNALO" MODIFY ("LAKCIM" NOT NULL ENABLE);
  ALTER TABLE "FELHASZNALO" MODIFY ("NEV" NOT NULL ENABLE);
  ALTER TABLE "FELHASZNALO" MODIFY ("EMAIL" NOT NULL ENABLE);
  ALTER TABLE "FELHASZNALO" MODIFY ("SZULDATUM" NOT NULL ENABLE);
--------------------------------------------------------
--  Constraints for Table HELYIBUSZ
--------------------------------------------------------

  ALTER TABLE "HELYIBUSZ" ADD CONSTRAINT "HELYIBUSZ_PK" PRIMARY KEY ("ID")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS"  ENABLE;
  ALTER TABLE "HELYIBUSZ" MODIFY ("ID" NOT NULL ENABLE);
  ALTER TABLE "HELYIBUSZ" MODIFY ("LEIRAS" NOT NULL ENABLE);
  ALTER TABLE "HELYIBUSZ" MODIFY ("MEGNEVEZES" NOT NULL ENABLE);
  ALTER TABLE "HELYIBUSZ" MODIFY ("INDULASI_IDO" NOT NULL ENABLE);
  ALTER TABLE "HELYIBUSZ" MODIFY ("TELEPULES" NOT NULL ENABLE);
--------------------------------------------------------
--  Constraints for Table TAVOLSAGIBUSZ
--------------------------------------------------------

  ALTER TABLE "TAVOLSAGIBUSZ" MODIFY ("ID" NOT NULL ENABLE);
  ALTER TABLE "TAVOLSAGIBUSZ" MODIFY ("LEIRAS" NOT NULL ENABLE);
  ALTER TABLE "TAVOLSAGIBUSZ" MODIFY ("MEGNEVEZES" NOT NULL ENABLE);
  ALTER TABLE "TAVOLSAGIBUSZ" MODIFY ("INDULASI_IDO" NOT NULL ENABLE);
  ALTER TABLE "TAVOLSAGIBUSZ" MODIFY ("INDULASI_TELEPULES" NOT NULL ENABLE);
  ALTER TABLE "TAVOLSAGIBUSZ" ADD CONSTRAINT "TAVOLSAGIBUSZ_PK" PRIMARY KEY ("ID")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS"  ENABLE;
--------------------------------------------------------
--  Constraints for Table VONAT
--------------------------------------------------------

  ALTER TABLE "VONAT" MODIFY ("ID" NOT NULL ENABLE);
  ALTER TABLE "VONAT" MODIFY ("LEIRAS" NOT NULL ENABLE);
  ALTER TABLE "VONAT" MODIFY ("MEGNEVEZES" NOT NULL ENABLE);
  ALTER TABLE "VONAT" MODIFY ("INDULASI_IDO" NOT NULL ENABLE);
  ALTER TABLE "VONAT" MODIFY ("INDULASI_TELEPULES" NOT NULL ENABLE);
  ALTER TABLE "VONAT" ADD CONSTRAINT "VONAT_PK" PRIMARY KEY ("ID")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS"  ENABLE;
--------------------------------------------------------
--  Ref Constraints for Table MEGALLO
--------------------------------------------------------

  ALTER TABLE "MEGALLO" ADD CONSTRAINT "MEGALLO_PK" PRIMARY KEY ("ID")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS"  ENABLE;
  ALTER TABLE "MEGALLO" ADD CONSTRAINT "FK_HELYIBUSZ" FOREIGN KEY ("ID")
	  REFERENCES "HELYIBUSZ" ("ID") ENABLE;
  ALTER TABLE "MEGALLO" ADD CONSTRAINT "FK_TAVOLSAGIBUSZ" FOREIGN KEY ("TAVOLSAGIBUSZ_ID")
	  REFERENCES "TAVOLSAGIBUSZ" ("ID") ENABLE;
  ALTER TABLE "MEGALLO" ADD CONSTRAINT "FK_VONAT" FOREIGN KEY ("VONAT_ID")
	  REFERENCES "VONAT" ("ID") ENABLE;
--------------------------------------------------------
--  Ref Constraints for Table JEGY
--------------------------------------------------------

  ALTER TABLE "JEGY" ADD CONSTRAINT "FELHASZNALO_ID_PK" FOREIGN KEY ("FELHASZNALO_ID")
	  REFERENCES "FELHASZNALO" ("ID") ENABLE;
--------------------------------------------------------
--  Ref Constraints for Table MODOSITAS
--------------------------------------------------------

  ALTER TABLE "MODOSITAS" ADD CONSTRAINT "FK_ADMIN" FOREIGN KEY ("ADMIN_ID")
	  REFERENCES "ADMIN" ("ID") ENABLE;
--------------------------------------------------------
--  Sequences and triggers for primary keys
--------------------------------------------------------

CREATE SEQUENCE admin_seq
START WITH 1
INCREMENT BY 1;
CREATE SEQUENCE felhasznalo_seq
START WITH 1
INCREMENT BY 1;
CREATE SEQUENCE helyibusz_seq
START WITH 1
INCREMENT BY 1;
CREATE SEQUENCE jegy_seq
START WITH 1
INCREMENT BY 1;
CREATE SEQUENCE megallo_seq
START WITH 1
INCREMENT BY 1;
CREATE SEQUENCE modositas_seq
START WITH 1
INCREMENT BY 1;
CREATE SEQUENCE tavolsagibusz_seq
START WITH 1
INCREMENT BY 1;
CREATE SEQUENCE vonat_seq
START WITH 1
INCREMENT BY 1;

CREATE OR REPLACE TRIGGER admin_id_trigger
    BEFORE INSERT ON admin
    FOR EACH ROW
BEGIN
    SELECT admin_seq.NEXTVAL INTO :new.ID FROM dual;
END;
/
CREATE OR REPLACE TRIGGER felhasznalo_id_trigger
    BEFORE INSERT ON felhasznalo
    FOR EACH ROW
BEGIN
    SELECT felhasznalo_seq.NEXTVAL INTO :new.ID FROM dual;
END;
/
CREATE OR REPLACE TRIGGER helyibusz_id_trigger
    BEFORE INSERT ON helyibusz
    FOR EACH ROW
BEGIN
    SELECT helyibusz_seq.NEXTVAL INTO :new.ID FROM dual;
END;
/
CREATE OR REPLACE TRIGGER jegy_id_trigger
    BEFORE INSERT ON jegy
    FOR EACH ROW
BEGIN
    SELECT jegy_seq.NEXTVAL INTO :new.ID FROM dual;
END;
/
CREATE OR REPLACE TRIGGER megallo_id_trigger
    BEFORE INSERT ON megallo
    FOR EACH ROW
BEGIN
    SELECT megallo_seq.NEXTVAL INTO :new.ID FROM dual;
END;
/
CREATE OR REPLACE TRIGGER modositas_id_trigger
    BEFORE INSERT ON modositas
    FOR EACH ROW
BEGIN
    SELECT modositas_seq.NEXTVAL INTO :new.ID FROM dual;
END;
/
CREATE OR REPLACE TRIGGER tavolsagibusz_id_trigger
    BEFORE INSERT ON tavolsagibusz
    FOR EACH ROW
BEGIN
    SELECT tavolsagibusz_seq.NEXTVAL INTO :new.ID FROM dual;
END;
/
CREATE OR REPLACE TRIGGER vonat_id_trigger
    BEFORE INSERT ON vonat
    FOR EACH ROW
BEGIN
    SELECT vonat_seq.NEXTVAL INTO :new.ID FROM dual;
END;
/

ALTER SEQUENCE admin_seq INCREMENT BY 1000;
ALTER SEQUENCE felhasznalo_seq INCREMENT BY 1000;
ALTER SEQUENCE helyibusz_seq INCREMENT BY 1000;
ALTER SEQUENCE jegy_seq INCREMENT BY 1000;
ALTER SEQUENCE megallo_seq INCREMENT BY 1000;
ALTER SEQUENCE modositas_seq INCREMENT BY 1000;
ALTER SEQUENCE tavolsagibusz_seq INCREMENT BY 1000;
ALTER SEQUENCE vonat_seq INCREMENT BY 1000;
