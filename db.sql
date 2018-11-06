CREATE DATABASE reg;

USE reg;

CREATE TABLE users(
    id int(8) PRIMARY KEY AUTO_INCREMENT,
    name varchar(32),
  
    mail varchar(32) UNIQUE,
   
    gender varchar(32),
    password varchar(32)
);