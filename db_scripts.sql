CREATE TABLE admin(
admin_id VARCHAR(10) NOT NULL,
first_name VARCHAR(100) NOT NULL,
last_name VARCHAR(100) NOT NULL,
nic VARCHAR(12) NOT NULL,
email VARCHAR(150) NOT NULL,
user_role VARCHAR(25),
dob DATE NOT NULL,
age INT,
address VARCHAR(250),
password VARCHAR(25),
CONSTRAINT pk_admin PRIMARY KEY(admin_id)
);

# Vehicle table
CREATE TABLE vehicle (
vehicle_id VARCHAR(50) NOT NULL,
vehicle_number VARCHAR(10) NOT NULL,
driver VARCHAR(50) NOT NULL,
no_of_seats INT,
charge_km INT,
vehicle_type CHAR(50),
starting_point VARCHAR(150),
ending_point VARCHAR(150),
CONSTRAINT pk_vehicle PRIMARY KEY(vehicle_id)
);

CREATE TABLE parent(
  parentId VARCHAR(10) NOT NULL,
  parentName VARCHAR(100) NOT NULL,
  address VARCHAR(300) NOT NULL,
  telephone INT(10) NOT NULL,
  email VARCHAR(50) NOT NULL,
  CONSTRAINT pk_parent PRIMARY KEY(parentId)
);

CREATE TABLE student(
  studentId VARCHAR(10) NOT NULL,
  studentName VARCHAR(100) NOT NULL,
  school VARCHAR(50),
  address VARCHAR(300),
  telephone INT(10),
  CONSTRAINT pk_student PRIMARY KEY(studentId)
);

CREATE TABLE company(
  companyId VARCHAR(10) NOT NULL,
  companyName VARCHAR(50),
  address VARCHAR(300),
  telephone INT(10),
  paymentMethod VARCHAR(10),
  CONSTRAINT pk_company PRIMARY KEY (companyId)
);

CREATE TABLE driver(
  driverId VARCHAR(10) NOT NULL,
  driverName VARCHAR(100),
  address VARCHAR(300),
  telephone INT(10),
  chargePerKm DECIMAL(10,2),
  vehicleNo VARCHAR(20),
  CONSTRAINT pk_driver PRIMARY KEY (driverId)
);

CREATE TABLE reservation(
  reservationId VARCHAR(10) NOT NULL,
  vehicleId VARCHAR(10),
  driverId VARCHAR(10),
  userId VARCHAR(10),
  date DATETIME,
  price DECIMAL(10,2),
  CONSTRAINT pk_reservation PRIMARY KEY (reservationId),
  CONSTRAINT fk_vehicle FOREIGN KEY (vehicleId) REFERENCES vehicle (vehicle_id)
);

CREATE TABLE payment(
  paymentId VARCHAR(10),
  method VARCHAR(10),
  date DATETIME,
  reservationId VARCHAR(10),
  CONSTRAINT pk_payment PRIMARY KEY (paymentId),
  CONSTRAINT fk_reservation FOREIGN KEY (reservationId) REFERENCES reservation (reservationId)
);

INSERT INTO admin
VALUES
('ad001','Chamod','Perera','970163360V','hcsperera@gmail.com','Admin','1997/01/16',21,'Horana','12345');

INSERT INTO
admin (admin_id, first_name, last_name, nic, email, user_role, dob, age, address)
VALUES
('ad002', 'Shafkhan', 'Mohamed', '957988776V', 'shafkhan.m@gmail.com', 'Admin', '1995/05/31', '25', '24, William Junction, Dehiwela'),

('ad003', 'Martin', 'Meeks', '956988776V', 'martin.m@gmail.com', 'Admin', '1985/12/31', '35', 'William Junction, Dehiwela'),

('ad004', 'Elizabeth', 'Allen', '996988776V', 'bet.a@gmail.com', 'Admin', '1985/05/31', '35', '4, Ayurvedha Mw, Colombo 004'),

('ad005', 'Phyllis', 'Torrrence', '916988776V', 'phyllis.t@gmail.com', 'Admin', '199505/31', '25', '4, Ayurvedha Mw, Colombo 004');


INSERT INTO vehicle
(vehicle_id, vehicle_number, driver, no_of_seats, charge_km, vehicle_type, starting_point, ending_point)

VALUES
('vh001', 'ABC-0012', 'Shafkhan', 56, 540, 'Bus', 'Nawala', 'Koswatt'),
('vh002', 'BCD-2232', 'John', 15, 500, 'Van', 'Kollupitiya', 'Kaduwela'),
('vh003', 'NY-9987', 'Elizabeth', 65, 200, 'Bus', 'Kaduwela', 'Kolannawa'),
('vh004', 'PG-0097', 'Alan', 76, 250, 'Bus', 'Pettah', 'Moratuwa'),
('vh005', 'BCD-9987', 'Watson', 87, 567, 'Bus', 'Pettah', 'Panadura');

INSERT INTO parent
VALUES ('p001','Priyankara','Horara',776597788,'hcpperera@gmail.com'),
       ('p002','Rasika','Batagoda',0767537788,'hrjperera@gmail.com'),
       ('p003','Kate','Negombo',789456123,'kate@gmail.com');

INSERT INTO company
VALUES ('c001','Shehanka Passenger Service','Horana',343449540,'Visa'),
       ('C002','Ratiyala Travels','Mahena',456789123,'Cash'),
       ('C003','Wasana Traders','Batagda',114567895,'Visa');

INSERT INTO driver
VALUES ('D001','Ranga','Horana',0778945123,100.00,'ND-7624'),
       ('D002','Tin Tin','Panadura',0457894561,800.00,'62-5621'),
       ('D003','Janaka','Meepe',0117894561,1100.00,'NB-7894');

INSERT INTO reservation
VALUES ('R001','vh001','D001','U099','2018/10/10',5000),
       ('R002','vh002','D001','U098','2018/10/11',6000),
       ('R003','vh002','D002','U094','2018/10/9',4000);

INSERT INTO payment
VALUES ('P001','Visa','2018/10/10','R001'),
       ('P002','Cash','2018/10/11','R002'),
       ('P003','Visa','2018/10/09','R003');

SELECT * FROM admin;
SELECT * FROM vehicle;
