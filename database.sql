DROP DATABASE IF EXISTS qlbh;
CREATE DATABASE qlbh character set utf8 collate utf8_unicode_ci;
USE qlbh;
CREATE TABLE category
(
	id int PRIMARY KEY auto_increment,
	name varchar(100) unique,
	status tinyint Default '1'
);

CREATE TABLE product
(
	id int PRIMARY KEY auto_increment,
	name varchar(200),
	category_id int NOT NULL,
	FOREIGN KEY (category_id) REFERENCES category(id),
	price float NOT NULL,
	sale_price float NULL Default '0'
);

CREATE TABLE customer
(
	id int PRIMARY KEY auto_increment,
	name varchar(100) unique,
	email varchar(100) unique,
	gender tinyint Default '0',
	birthaday date 
);
USE qlbh;
CREATE TABLE orders
(
	id int PRIMARY KEY auto_increment,
	customer_id int  NOT NULL,
	FOREIGN KEY (customer_id) REFERENCES customer(id),
	created date 
);

CREATE TABLE order_detail
(
	order_id int  NOT NULL,
	product_id int NOT NULL,
	quantity int NOT NULL,
	price int NOT NULL
);

-- Thêm mới dữ liệu cho các bảng
INSERT INTO category(name,status) VALUES
('Áo Mưa',1),
('Áo Sơ mi',0),
('Giày dép',2),
('Đồng hồ',2),
('Túi xách',2);

INSERT INTO product(name,price,Sale_price,category_id) VALUES
('Áo mua đôi mẫu mới 2019',200000,185000,1),
('Áo mua đơn mẫu mới 2019',120000,100000,1),
('Áo sơ mi công sở nam',250000,200000,2),
('Áo sơ mi dài tay thời trang',350000,320000,2),
('Giày da sài gòn danh cho nam',650000,450000,3),
('Giày lười nhỏ gọn cho chị em đi bộ',180000,120000,3),
('Đồng hồ quai đen kim cường đôi',5000000,3500000,4),
('Đồng hồ quai vàng kim loại đôi',4000000,2500000,4),
('Túi xách nhỏ gọn bằng da cá sấu',300000,250000,5),
('Túi xách thời trang từ thượng hải giá rẻ',200000,180000,5);

INSERT INTO customer(name, email, Birthaday, Gender) VALUES
('Nguyễn Hoài Nam','namnh@gmail.com','1990-03-15',1),
('Hoàng Quốc Trọng','tronghq@gmail.com','1993-08-25',1),
('Đặng Hoài Thương','thuongdh@gmail.com','1992-09-30',null),
('Trần Đình Sang','sangtd@gmail.com','2000-06-18',1),
('Nguyễn Quốc Đạt','datnq@gmail.com','2002-08-12',1);

INSERT INTO orders(customer_id, created) VALUES
(1,NOW()),
(2,NOW()),
(3,NOW()),
(4,NOW()),
(5,NOW());

INSERT INTO order_detail(order_id, product_id, quantity, price) VALUES
(1,1,3,185000),
(1,2,2,100000),
(1,3,2,200000),
(2,3,2,200000),
(2,4,2,380000),
(3,4,3,380000),
(3,1,2,185000),
(4,6,2,120000),
(4,7,2,3500000),
(5,8,2,2500000),
(5,9,2,2500000);