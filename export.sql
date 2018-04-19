--------------------------------------------------------
--  File created - Wednesday-April-18-2018   
--------------------------------------------------------
--------------------------------------------------------
--  DDL for View EMP_DETAILS_VIEW
--------------------------------------------------------

  CREATE OR REPLACE FORCE EDITIONABLE VIEW "HR"."EMP_DETAILS_VIEW" ("EMPLOYEE_ID", "JOB_ID", "MANAGER_ID", "DEPARTMENT_ID", "LOCATION_ID", "COUNTRY_ID", "FIRST_NAME", "LAST_NAME", "SALARY", "COMMISSION_PCT", "DEPARTMENT_NAME", "JOB_TITLE", "CITY", "STATE_PROVINCE", "COUNTRY_NAME", "REGION_NAME") AS 
  SELECT
  e.employee_id,
  e.job_id,
  e.manager_id,
  e.department_id,
  d.location_id,
  l.country_id,
  e.first_name,
  e.last_name,
  e.salary,
  e.commission_pct,
  d.department_name,
  j.job_title,
  l.city,
  l.state_province,
  c.country_name,
  r.region_name
FROM
  employees e,
  departments d,
  jobs j,
  locations l,
  countries c,
  regions r
WHERE e.department_id = d.department_id
  AND d.location_id = l.location_id
  AND l.country_id = c.country_id
  AND c.region_id = r.region_id
  AND j.job_id = e.job_id
WITH READ ONLY;
--------------------------------------------------------
--  DDL for Table ADMIN
--------------------------------------------------------

  CREATE TABLE "HR"."ADMIN" 
   (	"ID" NUMBER(*,0) GENERATED ALWAYS AS IDENTITY MINVALUE 1 MAXVALUE 99999 INCREMENT BY 1 START WITH 1 CACHE 20 NOORDER  NOCYCLE  NOKEEP  NOSCALE , 
	"USERNAME" VARCHAR2(255 BYTE), 
	"PASSWORD" VARCHAR2(255 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "SYSAUX" ;
--------------------------------------------------------
--  DDL for Table DONGSANPHAM
--------------------------------------------------------

  CREATE TABLE "HR"."DONGSANPHAM" 
   (	"ID" NUMBER(*,0) GENERATED ALWAYS AS IDENTITY MINVALUE 1 MAXVALUE 99999 INCREMENT BY 1 START WITH 1 CACHE 20 NOORDER  NOCYCLE  NOKEEP  NOSCALE , 
	"TENDONGSP" VARCHAR2(255 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "SYSAUX" ;
--------------------------------------------------------
--  DDL for Table DONHANG
--------------------------------------------------------

  CREATE TABLE "HR"."DONHANG" 
   (	"ID" NUMBER(*,0) GENERATED ALWAYS AS IDENTITY MINVALUE 1 MAXVALUE 99999 INCREMENT BY 1 START WITH 1 CACHE 20 NOORDER  NOCYCLE  NOKEEP  NOSCALE , 
	"TENKHACHHANG" VARCHAR2(255 BYTE), 
	"SDT" VARCHAR2(255 BYTE), 
	"TINHTRANG" VARCHAR2(255 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "SYSAUX" ;
--------------------------------------------------------
--  DDL for Table HOADON
--------------------------------------------------------

  CREATE TABLE "HR"."HOADON" 
   (	"ID_HOADON" NUMBER(*,0) GENERATED ALWAYS AS IDENTITY MINVALUE 1 MAXVALUE 99999 INCREMENT BY 1 START WITH 1 CACHE 20 NOORDER  NOCYCLE  NOKEEP  NOSCALE , 
	"ID_DONHANG" NUMBER(*,0), 
	"TENKHACHHANG" VARCHAR2(255 BYTE), 
	"ID_SP" NUMBER(*,0), 
	"SOLUONG" NUMBER(*,0), 
	"THANHTIEN" NUMBER(*,0), 
	"SANPHAM" VARCHAR2(255 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "SYSAUX" ;
--------------------------------------------------------
--  DDL for Table KHACHHANG
--------------------------------------------------------

  CREATE TABLE "HR"."KHACHHANG" 
   (	"ID" NUMBER(*,0) GENERATED ALWAYS AS IDENTITY MINVALUE 1 MAXVALUE 99999 INCREMENT BY 1 START WITH 1 CACHE 20 NOORDER  NOCYCLE  NOKEEP  NOSCALE , 
	"TENKH" VARCHAR2(255 BYTE), 
	"EMAIL" VARCHAR2(100 BYTE), 
	"MATKHAU" VARCHAR2(255 BYTE), 
	"DIACHI" VARCHAR2(255 BYTE), 
	"SDT" VARCHAR2(20 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "SYSAUX" ;
--------------------------------------------------------
--  DDL for Table SANPHAM
--------------------------------------------------------

  CREATE TABLE "HR"."SANPHAM" 
   (	"ID" NUMBER(*,0) GENERATED ALWAYS AS IDENTITY MINVALUE 1 MAXVALUE 99999 INCREMENT BY 1 START WITH 1 CACHE 20 NOORDER  NOCYCLE  NOKEEP  NOSCALE , 
	"TENSP" VARCHAR2(255 BYTE), 
	"XUATXU" VARCHAR2(100 BYTE), 
	"HINHANH" VARCHAR2(255 BYTE), 
	"MOTA" VARCHAR2(255 BYTE), 
	"GIA" NUMBER(*,0), 
	"SOLUONGTON" VARCHAR2(20 BYTE), 
	"IDDONG" NUMBER(*,0), 
	"IDTHUONGHIEU" NUMBER(*,0)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "SYSAUX" ;
--------------------------------------------------------
--  DDL for Table THUONGHIEU
--------------------------------------------------------

  CREATE TABLE "HR"."THUONGHIEU" 
   (	"ID" NUMBER(*,0) GENERATED ALWAYS AS IDENTITY MINVALUE 1 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 1 CACHE 20 NOORDER  NOCYCLE  NOKEEP  NOSCALE , 
	"TENTHUONGHIEU" VARCHAR2(255 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "SYSAUX" ;
--------------------------------------------------------
--  DDL for Sequence DEPARTMENTS_SEQ
--------------------------------------------------------

   CREATE SEQUENCE  "HR"."DEPARTMENTS_SEQ"  MINVALUE 1 MAXVALUE 9990 INCREMENT BY 10 START WITH 280 NOCACHE  NOORDER  NOCYCLE  NOKEEP  NOSCALE  GLOBAL ;
--------------------------------------------------------
--  DDL for Sequence EMPLOYEES_SEQ
--------------------------------------------------------

   CREATE SEQUENCE  "HR"."EMPLOYEES_SEQ"  MINVALUE 1 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 207 NOCACHE  NOORDER  NOCYCLE  NOKEEP  NOSCALE  GLOBAL ;
--------------------------------------------------------
--  DDL for Sequence LOCATIONS_SEQ
--------------------------------------------------------

   CREATE SEQUENCE  "HR"."LOCATIONS_SEQ"  MINVALUE 1 MAXVALUE 9900 INCREMENT BY 100 START WITH 3300 NOCACHE  NOORDER  NOCYCLE  NOKEEP  NOSCALE  GLOBAL ;
REM INSERTING into HR.ADMIN
SET DEFINE OFF;
Insert into HR.ADMIN (ID,USERNAME,PASSWORD) values (1,'admin','admin');
REM INSERTING into HR.DONGSANPHAM
SET DEFINE OFF;
Insert into HR.DONGSANPHAM (ID,TENDONGSP) values (43,'MakeUp');
Insert into HR.DONGSANPHAM (ID,TENDONGSP) values (41,'Lipstick & Lip Care');
Insert into HR.DONGSANPHAM (ID,TENDONGSP) values (42,'Skincare');
Insert into HR.DONGSANPHAM (ID,TENDONGSP) values (44,'Body Skincare');
Insert into HR.DONGSANPHAM (ID,TENDONGSP) values (45,'Perfume');
REM INSERTING into HR.DONHANG
SET DEFINE OFF;
REM INSERTING into HR.HOADON
SET DEFINE OFF;
Insert into HR.HOADON (ID_HOADON,ID_DONHANG,TENKHACHHANG,ID_SP,SOLUONG,THANHTIEN,SANPHAM) values (1,23,'kimthoa@gmail.com',162,1,300000,'Fresh Calming Morning Mask');
Insert into HR.HOADON (ID_HOADON,ID_DONHANG,TENKHACHHANG,ID_SP,SOLUONG,THANHTIEN,SANPHAM) values (2,23,'kimthoa@gmail.com',42,1,440000,'2017 Holiday my palette 2 7g');
Insert into HR.HOADON (ID_HOADON,ID_DONHANG,TENKHACHHANG,ID_SP,SOLUONG,THANHTIEN,SANPHAM) values (3,23,'kimthoa@gmail.com',21,1,340000,'Nosebum correcting cushion (refill) 14g');
Insert into HR.HOADON (ID_HOADON,ID_DONHANG,TENKHACHHANG,ID_SP,SOLUONG,THANHTIEN,SANPHAM) values (4,23,'kimthoa@gmail.com',1,5,1500000,'Skinny coverfit cushion 14 g');
Insert into HR.HOADON (ID_HOADON,ID_DONHANG,TENKHACHHANG,ID_SP,SOLUONG,THANHTIEN,SANPHAM) values (5,23,'kimthoa@gmail.com',43,1,290000,'Eye contouring stick (edge) 2.3g');
Insert into HR.HOADON (ID_HOADON,ID_DONHANG,TENKHACHHANG,ID_SP,SOLUONG,THANHTIEN,SANPHAM) values (81,23,'kimthoa@gmail.com',257,1,550000,'Water Drop Tinted Lipbalm #03');
Insert into HR.HOADON (ID_HOADON,ID_DONHANG,TENKHACHHANG,ID_SP,SOLUONG,THANHTIEN,SANPHAM) values (82,23,'kimthoa@gmail.com',254,4,3000000,'Ohui Perfect Sun Pro Black 50ml');
Insert into HR.HOADON (ID_HOADON,ID_DONHANG,TENKHACHHANG,ID_SP,SOLUONG,THANHTIEN,SANPHAM) values (83,23,'kimthoa@gmail.com',247,5,800000,'THEFACESHOP LIP SCRUB');
Insert into HR.HOADON (ID_HOADON,ID_DONHANG,TENKHACHHANG,ID_SP,SOLUONG,THANHTIEN,SANPHAM) values (84,23,'kimthoa@gmail.com',255,2,2798000,'White Musk- Eau De Parfum 50ml');
Insert into HR.HOADON (ID_HOADON,ID_DONHANG,TENKHACHHANG,ID_SP,SOLUONG,THANHTIEN,SANPHAM) values (121,141,'lien@gmail.com',46,1,350000,'Always new auto liner 0.3g');
Insert into HR.HOADON (ID_HOADON,ID_DONHANG,TENKHACHHANG,ID_SP,SOLUONG,THANHTIEN,SANPHAM) values (122,141,'lien@gmail.com',63,1,430000,'Ultrafine browcara 4g');
Insert into HR.HOADON (ID_HOADON,ID_DONHANG,TENKHACHHANG,ID_SP,SOLUONG,THANHTIEN,SANPHAM) values (162,182,'quynhlien',46,1,350000,'Always new auto liner 0.3g');
Insert into HR.HOADON (ID_HOADON,ID_DONHANG,TENKHACHHANG,ID_SP,SOLUONG,THANHTIEN,SANPHAM) values (141,161,'vy@gmail',1,2,600000,'Skinny coverfit cushion 14 g');
Insert into HR.HOADON (ID_HOADON,ID_DONHANG,TENKHACHHANG,ID_SP,SOLUONG,THANHTIEN,SANPHAM) values (142,161,'vy@gmail',255,1,1399000,'White Musk- Eau De Parfum 50ml');
Insert into HR.HOADON (ID_HOADON,ID_DONHANG,TENKHACHHANG,ID_SP,SOLUONG,THANHTIEN,SANPHAM) values (21,23,'kimthoa@gmail.com',1,1,300000,'Skinny coverfit cushion 14 g');
Insert into HR.HOADON (ID_HOADON,ID_DONHANG,TENKHACHHANG,ID_SP,SOLUONG,THANHTIEN,SANPHAM) values (61,23,'kimthoa@gmail.com',256,3,2997000,'ATLAS MOUNTAIN ROSE EAU DE TOILETTE');
Insert into HR.HOADON (ID_HOADON,ID_DONHANG,TENKHACHHANG,ID_SP,SOLUONG,THANHTIEN,SANPHAM) values (62,23,'kimthoa@gmail.com',141,2,720000,'[Miniature] Water Sleeping Mask (Lavender)(70ml)');
Insert into HR.HOADON (ID_HOADON,ID_DONHANG,TENKHACHHANG,ID_SP,SOLUONG,THANHTIEN,SANPHAM) values (63,23,'kimthoa@gmail.com',256,2,1998000,'ATLAS MOUNTAIN ROSE EAU DE TOILETTE');
Insert into HR.HOADON (ID_HOADON,ID_DONHANG,TENKHACHHANG,ID_SP,SOLUONG,THANHTIEN,SANPHAM) values (161,181,'quynhlien',42,1,440000,'2017 Holiday my palette 2 7g');
Insert into HR.HOADON (ID_HOADON,ID_DONHANG,TENKHACHHANG,ID_SP,SOLUONG,THANHTIEN,SANPHAM) values (85,103,'lien@gmail.com',1,1,300000,'Skinny coverfit cushion 14 g');
Insert into HR.HOADON (ID_HOADON,ID_DONHANG,TENKHACHHANG,ID_SP,SOLUONG,THANHTIEN,SANPHAM) values (86,103,'lien@gmail.com',242,1,436000,'INK GEL STICK');
Insert into HR.HOADON (ID_HOADON,ID_DONHANG,TENKHACHHANG,ID_SP,SOLUONG,THANHTIEN,SANPHAM) values (87,103,'lien@gmail.com',253,1,2070000,'Ohui Extreme White Serum 45ml');
Insert into HR.HOADON (ID_HOADON,ID_DONHANG,TENKHACHHANG,ID_SP,SOLUONG,THANHTIEN,SANPHAM) values (101,103,'lien@gmail.com',1,1,300000,'Skinny coverfit cushion 14 g');
Insert into HR.HOADON (ID_HOADON,ID_DONHANG,TENKHACHHANG,ID_SP,SOLUONG,THANHTIEN,SANPHAM) values (102,103,'lien@gmail.com',256,1,999000,'ATLAS MOUNTAIN ROSE EAU DE TOILETTE');
Insert into HR.HOADON (ID_HOADON,ID_DONHANG,TENKHACHHANG,ID_SP,SOLUONG,THANHTIEN,SANPHAM) values (41,23,'kimthoa@gmail.com',141,1,360000,'[Miniature] Water Sleeping Mask (Lavender)(70ml)');
REM INSERTING into HR.KHACHHANG
SET DEFINE OFF;
Insert into HR.KHACHHANG (ID,TENKH,EMAIL,MATKHAU,DIACHI,SDT) values (41,'vy','vy@gmail','123','123','123');
Insert into HR.KHACHHANG (ID,TENKH,EMAIL,MATKHAU,DIACHI,SDT) values (1,'Nguyen Thi Kim Thoa','kimthoa@gmail.com','123456','119 An Duong Vuong P2 Q5','3122213324');
Insert into HR.KHACHHANG (ID,TENKH,EMAIL,MATKHAU,DIACHI,SDT) values (61,'asdf','quynhlien','123','123','123');
Insert into HR.KHACHHANG (ID,TENKH,EMAIL,MATKHAU,DIACHI,SDT) values (21,'lien','lien@gmail.com','123','123','123');
REM INSERTING into HR.SANPHAM
SET DEFINE OFF;
Insert into HR.SANPHAM (ID,TENSP,XUATXU,HINHANH,MOTA,GIA,SOLUONGTON,IDDONG,IDTHUONGHIEU) values (1,'Skinny coverfit cushion 14 g','Korea','012.png',null,300000,'30',43,1);
Insert into HR.SANPHAM (ID,TENSP,XUATXU,HINHANH,MOTA,GIA,SOLUONGTON,IDDONG,IDTHUONGHIEU) values (21,'Nosebum correcting cushion (refill) 14g','Korea','012.png',null,340000,'11',43,1);
Insert into HR.SANPHAM (ID,TENSP,XUATXU,HINHANH,MOTA,GIA,SOLUONGTON,IDDONG,IDTHUONGHIEU) values (42,'2017 Holiday my palette 2 7g','Korea','013png.png',null,440000,'11',43,1);
Insert into HR.SANPHAM (ID,TENSP,XUATXU,HINHANH,MOTA,GIA,SOLUONGTON,IDDONG,IDTHUONGHIEU) values (43,'Eye contouring stick (edge) 2.3g','Korea','23014_l.jpg',null,290000,'90',43,1);
Insert into HR.SANPHAM (ID,TENSP,XUATXU,HINHANH,MOTA,GIA,SOLUONGTON,IDDONG,IDTHUONGHIEU) values (44,'Skinny volume cara','Korea','21209_l.png',null,320000,'34',43,1);
Insert into HR.SANPHAM (ID,TENSP,XUATXU,HINHANH,MOTA,GIA,SOLUONGTON,IDDONG,IDTHUONGHIEU) values (45,'Eye primer 4g','Korea','21259_l.png',null,199000,'32',43,1);
Insert into HR.SANPHAM (ID,TENSP,XUATXU,HINHANH,MOTA,GIA,SOLUONGTON,IDDONG,IDTHUONGHIEU) values (46,'Always new auto liner 0.3g','Korea','21040_l.png',null,350000,'32',43,1);
Insert into HR.SANPHAM (ID,TENSP,XUATXU,HINHANH,MOTA,GIA,SOLUONGTON,IDDONG,IDTHUONGHIEU) values (61,'brow master pencil 0.12g/0.4g','Korea','17511_l.png',null,430000,'12',43,1);
Insert into HR.SANPHAM (ID,TENSP,XUATXU,HINHANH,MOTA,GIA,SOLUONGTON,IDDONG,IDTHUONGHIEU) values (62,'Skinny fixercara 0','Korea','21207_l.png',null,320000,'54',43,1);
Insert into HR.SANPHAM (ID,TENSP,XUATXU,HINHANH,MOTA,GIA,SOLUONGTON,IDDONG,IDTHUONGHIEU) values (63,'Ultrafine browcara 4g','Korea','17498_l.png',null,430000,'65',43,1);
Insert into HR.SANPHAM (ID,TENSP,XUATXU,HINHANH,MOTA,GIA,SOLUONGTON,IDDONG,IDTHUONGHIEU) values (64,'Gel liner 1.8g','Korea','17396_l.png',null,310000,'11',43,1);
Insert into HR.SANPHAM (ID,TENSP,XUATXU,HINHANH,MOTA,GIA,SOLUONGTON,IDDONG,IDTHUONGHIEU) values (102,'Eco lasting eye liner 4g','Korea','17392_l.png',null,260000,'21',43,1);
Insert into HR.SANPHAM (ID,TENSP,XUATXU,HINHANH,MOTA,GIA,SOLUONGTON,IDDONG,IDTHUONGHIEU) values (103,'Eco waterproof liner 0.4g','Korea','17391_l.png',null,280000,'21',43,1);
Insert into HR.SANPHAM (ID,TENSP,XUATXU,HINHANH,MOTA,GIA,SOLUONGTON,IDDONG,IDTHUONGHIEU) values (104,'Mineral single shadow 2.3g','Korea','17308_l.png',null,350000,'12',43,1);
Insert into HR.SANPHAM (ID,TENSP,XUATXU,HINHANH,MOTA,GIA,SOLUONGTON,IDDONG,IDTHUONGHIEU) values (121,'[Miniature] Water Sleeping Mask (Lavender)','Korea','014.png',null,160000,'10',42,5);
Insert into HR.SANPHAM (ID,TENSP,XUATXU,HINHANH,MOTA,GIA,SOLUONGTON,IDDONG,IDTHUONGHIEU) values (161,'Eye Sleeping Mask','Korea','eye-sleeping-mask-01_01.png',null,270000,'10',42,5);
Insert into HR.SANPHAM (ID,TENSP,XUATXU,HINHANH,MOTA,GIA,SOLUONGTON,IDDONG,IDTHUONGHIEU) values (162,'Fresh Calming Morning Mask1','Korea','fresh_calming_morning_mask_01.png','<p>ddsdsa</p>',300000,'20',42,5);
Insert into HR.SANPHAM (ID,TENSP,XUATXU,HINHANH,MOTA,GIA,SOLUONGTON,IDDONG,IDTHUONGHIEU) values (241,'FLAT GLOSSY LIPSTICK 02','Korea','son02.jpg',null,303000,'36',41,2);
Insert into HR.SANPHAM (ID,TENSP,XUATXU,HINHANH,MOTA,GIA,SOLUONGTON,IDDONG,IDTHUONGHIEU) values (242,'INK GEL STICK','Korea','son03.jpg',null,436000,'24',41,2);
Insert into HR.SANPHAM (ID,TENSP,XUATXU,HINHANH,MOTA,GIA,SOLUONGTON,IDDONG,IDTHUONGHIEU) values (261,'Deer Pink - Laneige Two tone Lip Bar ','Korea','son01.jpg',null,300000,'11',41,1);
Insert into HR.SANPHAM (ID,TENSP,XUATXU,HINHANH,MOTA,GIA,SOLUONGTON,IDDONG,IDTHUONGHIEU) values (262,'asd','asd','007.png',null,10000,'11',43,21);
Insert into HR.SANPHAM (ID,TENSP,XUATXU,HINHANH,MOTA,GIA,SOLUONGTON,IDDONG,IDTHUONGHIEU) values (281,'asrhthetthht','SDASSAD','003.png',null,null,null,43,21);
Insert into HR.SANPHAM (ID,TENSP,XUATXU,HINHANH,MOTA,GIA,SOLUONGTON,IDDONG,IDTHUONGHIEU) values (246,'THEFACESHOP LIP CARE CREAM','Korea','sonduong01.jpg',null,141000,'15',41,2);
Insert into HR.SANPHAM (ID,TENSP,XUATXU,HINHANH,MOTA,GIA,SOLUONGTON,IDDONG,IDTHUONGHIEU) values (243,'COLLAGEN AMPOULE LIPSTICK','Korea','son04.png',null,616000,'32',41,2);
Insert into HR.SANPHAM (ID,TENSP,XUATXU,HINHANH,MOTA,GIA,SOLUONGTON,IDDONG,IDTHUONGHIEU) values (245,'MATTE UP TINT','Korea','son06.jpg',null,280000,'39',41,2);
Insert into HR.SANPHAM (ID,TENSP,XUATXU,HINHANH,MOTA,GIA,SOLUONGTON,IDDONG,IDTHUONGHIEU) values (255,'White Musk- Eau De Parfum 50ml','Korea','nh01.png',null,1399000,'15',45,21);
Insert into HR.SANPHAM (ID,TENSP,XUATXU,HINHANH,MOTA,GIA,SOLUONGTON,IDDONG,IDTHUONGHIEU) values (256,'ATLAS MOUNTAIN ROSE EAU DE TOILETTE','Korea','nh02.jpg',null,999000,'5',45,21);
Insert into HR.SANPHAM (ID,TENSP,XUATXU,HINHANH,MOTA,GIA,SOLUONGTON,IDDONG,IDTHUONGHIEU) values (257,'Water Drop Tinted Lipbalm #03','Korea','sondg01.jpg',null,550000,'37',41,5);
Insert into HR.SANPHAM (ID,TENSP,XUATXU,HINHANH,MOTA,GIA,SOLUONGTON,IDDONG,IDTHUONGHIEU) values (258,'Orange Blurring - Laneige Two tone Lip Bar No.13 2g','Korea','son1.jpg',null,650000,'17',41,5);
Insert into HR.SANPHAM (ID,TENSP,XUATXU,HINHANH,MOTA,GIA,SOLUONGTON,IDDONG,IDTHUONGHIEU) values (259,'Burgundy Love - Laneige Two tone Lip Bar No.10 2g','Korea','son2.jpg',null,650000,'11',41,5);
Insert into HR.SANPHAM (ID,TENSP,XUATXU,HINHANH,MOTA,GIA,SOLUONGTON,IDDONG,IDTHUONGHIEU) values (260,'Deer Pink - Laneige Two tone Lip Bar No.14 2g','Korea','son3.jpg',null,650000,'7',41,5);
Insert into HR.SANPHAM (ID,TENSP,XUATXU,HINHANH,MOTA,GIA,SOLUONGTON,IDDONG,IDTHUONGHIEU) values (101,'Powerproof brush liner 0.6g','Korea','17393_l.png',null,370000,'90',43,1);
Insert into HR.SANPHAM (ID,TENSP,XUATXU,HINHANH,MOTA,GIA,SOLUONGTON,IDDONG,IDTHUONGHIEU) values (221,'FLAT GLOSSY LIPSTICK 01','Korea','son01.jpg',null,303000,'54',43,2);
Insert into HR.SANPHAM (ID,TENSP,XUATXU,HINHANH,MOTA,GIA,SOLUONGTON,IDDONG,IDTHUONGHIEU) values (247,'THEFACESHOP LIP SCRUB','Korea','sonduong02.jpg',null,160000,'29',41,2);
Insert into HR.SANPHAM (ID,TENSP,XUATXU,HINHANH,MOTA,GIA,SOLUONGTON,IDDONG,IDTHUONGHIEU) values (248,'Ohui Extreme White Cream 50ml','Korea','kemduong01.png',null,1550000,'46',42,4);
Insert into HR.SANPHAM (ID,TENSP,XUATXU,HINHANH,MOTA,GIA,SOLUONGTON,IDDONG,IDTHUONGHIEU) values (249,'Ohui Extreme White 3D Black Mask 6c','Korea','matna01.png',null,140000,'29',42,4);
Insert into HR.SANPHAM (ID,TENSP,XUATXU,HINHANH,MOTA,GIA,SOLUONGTON,IDDONG,IDTHUONGHIEU) values (250,'Ohui Extreme White Sleeping Mask 100ml','Korea','kemduong02.png',null,1260000,'34',42,4);
Insert into HR.SANPHAM (ID,TENSP,XUATXU,HINHANH,MOTA,GIA,SOLUONGTON,IDDONG,IDTHUONGHIEU) values (251,' Ohui Extreme White Peeling 60ml','Korea','taytb01.png',null,675000,'28',42,4);
Insert into HR.SANPHAM (ID,TENSP,XUATXU,HINHANH,MOTA,GIA,SOLUONGTON,IDDONG,IDTHUONGHIEU) values (252,'Ohui Extreme White Emulsion 130ml','Korea','duongda01.png',null,1125000,'42',44,4);
Insert into HR.SANPHAM (ID,TENSP,XUATXU,HINHANH,MOTA,GIA,SOLUONGTON,IDDONG,IDTHUONGHIEU) values (253,'Ohui Extreme White Serum 45ml','Korea','duongda02.png',null,2070000,'31',44,4);
Insert into HR.SANPHAM (ID,TENSP,XUATXU,HINHANH,MOTA,GIA,SOLUONGTON,IDDONG,IDTHUONGHIEU) values (254,'Ohui Perfect Sun Pro Black 50ml','Korea','chongnang01.png',null,750000,'29',44,4);
Insert into HR.SANPHAM (ID,TENSP,XUATXU,HINHANH,MOTA,GIA,SOLUONGTON,IDDONG,IDTHUONGHIEU) values (244,'THEFACESHOP MATT TOUCH LIPSTICK','Korea','son05.jpg',null,398000,'28',41,2);
Insert into HR.SANPHAM (ID,TENSP,XUATXU,HINHANH,MOTA,GIA,SOLUONGTON,IDDONG,IDTHUONGHIEU) values (81,'Powerproof pen liner 0.6g','Korea','17395_l.png',null,260000,'32',43,1);
Insert into HR.SANPHAM (ID,TENSP,XUATXU,HINHANH,MOTA,GIA,SOLUONGTON,IDDONG,IDTHUONGHIEU) values (141,'[Miniature] Water Sleeping Mask (Lavender)(70ml)','Korea','water-sleeping-mask-lavender-01.png',null,360000,'1',42,5);
REM INSERTING into HR.THUONGHIEU
SET DEFINE OFF;
Insert into HR.THUONGHIEU (ID,TENTHUONGHIEU) values (21,'The Body Shop');
Insert into HR.THUONGHIEU (ID,TENTHUONGHIEU) values (1,'Innisfree');
Insert into HR.THUONGHIEU (ID,TENTHUONGHIEU) values (2,'The Face Shop');
Insert into HR.THUONGHIEU (ID,TENTHUONGHIEU) values (3,'ELF');
Insert into HR.THUONGHIEU (ID,TENTHUONGHIEU) values (4,'O HUI');
Insert into HR.THUONGHIEU (ID,TENTHUONGHIEU) values (5,'LANEIGE');
--------------------------------------------------------
--  DDL for Procedure ADD_JOB_HISTORY
--------------------------------------------------------
set define off;

  CREATE OR REPLACE EDITIONABLE PROCEDURE "HR"."ADD_JOB_HISTORY" 
  (  p_emp_id          job_history.employee_id%type
   , p_start_date      job_history.start_date%type
   , p_end_date        job_history.end_date%type
   , p_job_id          job_history.job_id%type
   , p_department_id   job_history.department_id%type
   )
IS
BEGIN
  INSERT INTO job_history (employee_id, start_date, end_date,
                           job_id, department_id)
    VALUES(p_emp_id, p_start_date, p_end_date, p_job_id, p_department_id);
END add_job_history;

/
--------------------------------------------------------
--  DDL for Procedure SECURE_DML
--------------------------------------------------------
set define off;

  CREATE OR REPLACE EDITIONABLE PROCEDURE "HR"."SECURE_DML" 
IS
BEGIN
  IF TO_CHAR (SYSDATE, 'HH24:MI') NOT BETWEEN '08:00' AND '18:00'
        OR TO_CHAR (SYSDATE, 'DY') IN ('SAT', 'SUN') THEN
	RAISE_APPLICATION_ERROR (-20205,
		'You may only make changes during normal office hours');
  END IF;
END secure_dml;

/
--------------------------------------------------------
--  Constraints for Table HOADON
--------------------------------------------------------

  ALTER TABLE "HR"."HOADON" MODIFY ("ID_HOADON" NOT NULL ENABLE);
--------------------------------------------------------
--  Constraints for Table ADMIN
--------------------------------------------------------

  ALTER TABLE "HR"."ADMIN" MODIFY ("ID" NOT NULL ENABLE);
  ALTER TABLE "HR"."ADMIN" MODIFY ("USERNAME" NOT NULL ENABLE);
  ALTER TABLE "HR"."ADMIN" MODIFY ("PASSWORD" NOT NULL ENABLE);
--------------------------------------------------------
--  Constraints for Table THUONGHIEU
--------------------------------------------------------

  ALTER TABLE "HR"."THUONGHIEU" MODIFY ("ID" NOT NULL ENABLE);
--------------------------------------------------------
--  Constraints for Table DONHANG
--------------------------------------------------------

  ALTER TABLE "HR"."DONHANG" MODIFY ("ID" NOT NULL ENABLE);
--------------------------------------------------------
--  Constraints for Table DONGSANPHAM
--------------------------------------------------------

  ALTER TABLE "HR"."DONGSANPHAM" MODIFY ("ID" NOT NULL ENABLE);
--------------------------------------------------------
--  Constraints for Table KHACHHANG
--------------------------------------------------------

  ALTER TABLE "HR"."KHACHHANG" MODIFY ("ID" NOT NULL ENABLE);
--------------------------------------------------------
--  Constraints for Table SANPHAM
--------------------------------------------------------

  ALTER TABLE "HR"."SANPHAM" MODIFY ("ID" NOT NULL ENABLE);
