CREATE DATABASE IF NOT EXISTS concesionario;
CREATE USER IF NOT EXISTS 'user'@'%' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON concesionario.* TO 'user'@'%';
FLUSH PRIVILEGES;
use database concesionario;

create table coches (
	matricula varchar(20) primary key,
	modelo varchar(20)
);