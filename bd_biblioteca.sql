CREATE DATABASE biblioteca;
USE biblioteca;
CREATE TABLE categoria (
	Id int PRIMARY KEY AUTO_INCREMENT,
    Categoria varchar(50)
);
CREATE TABLE libro (
	Id int PRIMARY KEY AUTO_INCREMENT,
	ISBN int,
	Nombre varchar(50),
	Autor varchar(50),
	Año date,
	NroPaginas int,
	Editorial varchar(50),
    IdCategoria int,
    FOREIGN KEY (IdCategoria) REFERENCES categoria (ID)
)