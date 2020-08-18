use registration;
drop table sc_products;
CREATE table sc_products (id int, name varchar(50), price float, description varchar(500), imgurl varchar(100),ptype varchar(20));
delete from sc_products;
INSERT INTO `sc_products`(`id`, `name`, `price`,`description`, `imgurl`,`ptype`) VALUES 
(1,'Single Cylinder Engine',5000.40,'This engine is powered by diesel and contain a single cylinder',
 'Resources\\Engines\\engine1.jpg','engine'),
 (2,'Spark Ignition Engine',3700.50,'The spark Ignition engine has a high efficiency and runs on petrol','Resources\\Engines\\engine2.jpg','engine'),
 (3,'Reciprocating Engine',4234.80,'The Reciprocating engine has a high efficiency and runs on petrol','Resources\\Engines\\engine3.jpg','engine'), 
 (4,'Four stroke engine',4000.99,'This Four stroke engine is powered by diesel and contain a single cylinder','Resources\\Engines\\engine4.jpg','engine'),
 (5,'Dependent Suspension',500.99,'This Dependent Suspension provides extensive shock absorbtion and is versatile',
 'Resources\\Sus2\\one.jpg','suspension'),
 (6,'Dual shock Suspension',238.56,'This Dual shock suspension provides extensive shock absorbtion and is versatile','Resources\\Sus2\\two.jpg','suspension'),
 (7,'Axial Suspension',231,'The Axial Suspension provides extensive shock absorbtion and is versatile','Resources\\Sus2\\three.jpg','suspension'), 
 (8,'Swing Axle Suspension',368.5,'The Swing Axle Suspension provides extensive shock absorbtion and is versatile','Resources\\Sus2\\four.jpg','suspension'),
  (9,'Aluminium UniBody',44500.99,'This Aluminium UniBody has high durability and is resistive to damage',
 'Resources\\body\\body1.jpg','body'),
 (10,'Titanium Alloy',55238.8,'This Titanium Alloy UniBody has high durability and is resistive to damage','Resources\\body\\body2.jpg','body'),
 (11,'Trimetal UniBody',22231,'This Trimetal UniBody has high durability and is resistive to damage','Resources\\body\\body3.jpg','body'), 
 (12,'Premium Steel Body',67368.9,'This Premium Steel UniBody has high durability and is resistive to damage','Resources\\body\\body4.jpg','body'),
  (13,'MRF Premium Tyre',4450.99,'MRF Premium Tyre has high durability and is resistive to damage',
 'Resources\\Tyres\\Tyre1.jpg','tyre'),
 (14,'Bridgestone RoyalBlack',558.8,'Bridgestone RoyalBlack has high durability and is resistive to damage','Resources\\Tyres\\Tyre5.jpg','tyre'),
 (15,'GMR Coated Tyre',2231,'GMR Coated Tyre has high durability and is resistive to damage','Resources\\Tyres\\Tyre6.jpg','tyre'),
 (16,'Premium Silicon Tyre',7368.9,'Premium Silicon Tyre has high durability and is resistive to damage','Resources\\Tyres\\Tyre7.jpg','tyre');
 
 
 
 //pay
 drop table users;
 CREATE TABLE users(cdnumber1 int NOT NULL,cdnumber2 int NOT NULL,Expiry date,cdname varchar(70),ccv int NOT NULL);
 INSERT INTO users VALUES('1','2',date'2018-12-01','IMTHIAZ','994');
 
 //login
 drop table logindet;
 create table logindet(id int, username varchar(50), email varchar(50), password varchar(20));
ALTER TABLE `logindet` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT;