create database corona;
use corona; 
create table product(
	id int primary key AUTO_INCREMENT,
	name varchar(255),
    image varchar(255),
	price float,
	sale float
);

INSERT INTO product( name, image, price, sale) 
VALUES 
("Máy lọc nước Kangaroo Hydrogen KG100HC vỏ tủ VTU","image/p1.jpg","11500000","28"),
("Máy lọc nước Kangaroo Hydrogen KG100HG không vỏ","image/p2.jfif","9100000","34"),
("Máy lọc nước Kangaroo Hydrogen KG100HB vỏ tủ VTU","image/p3.jpg","9700000","33");