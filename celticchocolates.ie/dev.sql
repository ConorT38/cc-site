#######Database##########

CREATE DATABASE celtic_chocolates;
USE celtic_chocolates;

CREATE TABLE `users`
(
u_id int NOT NULL AUTO_INCREMENT,
fname varchar(255),
lname varchar(255) NOT NULL,
email varchar(255) NOT NULL,
address varchar(255) NOT NULL,
city varchar(255) NOT NULL,
country varchar(255) NOT NULL,
PRIMARY KEY (u_id)
);

CREATE TABLE `products`
(
p_id int NOT NULL AUTO_INCREMENT,
title varchar(255),
description text(25555) NOT NULL,
tag varchar(255) DEFAULT "Blog",
rating int DEFAULT 0,
uploaded TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
price float NOT NULL,
stock varchar(255) NOT NULL,
PRIMARY KEY (p_id)
);

CREATE TABLE `orders`
(
o_id int NOT NULL AUTO_INCREMENT,
u_id int NOT NULL,
p_id TEXT(25555),
price float NOT NULL,
`uploaded` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
address varchar(255) NOT NULL,
city varchar(255) NOT NULL,
country varchar(255) NOT NULL,
PRIMARY KEY (o_id)
);

CREATE TABLE `e`
(
e_id int NOT NULL,
e TEXT(555),
PRIMARY KEY (e_id)
);

CREATE TABLE `blog`
(
b_id int NOT NULL AUTO_INCREMENT,
title varchar(255),
content TEXT(25555) NOT NULL,
tag varchar(255),
`uploaded` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
PRIMARY KEY (b_id)
);

CREATE TABLE `comments`
(
c_id int NOT NULL AUTO_INCREMENT,
name varchar(255),
email varchar(255) NOT NULL,
comment varchar(255) NOT NULL,
b_id varchar(255) NOT NULL,
`uploaded` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
PRIMARY KEY (c_id)
);

CREATE TABLE `review`
(
r_id int NOT NULL AUTO_INCREMENT,
u_id int NOT NULL,
p_id int NOT NULL,
review varchar(255) NOT NULL,
rating int DEFAULT 0 ,
`uploaded` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
PRIMARY KEY (r_id)
);