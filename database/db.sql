CREATE DATABASE atividade_7;
USE atividade_7;

CREATE TABLE usuario (
    idUser INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR (87) NOT NULL,
    e-mail VARCHAR(254) NOT NULL UNIQUE
)

CREATE TABLE pratos (
    idPrato INT AUTO_INCREMENT PRIMARY KEY,
    nomePrato VARCHAR (87),
    preco FLOAT,
    categoria ENUM('principal','sobremesa','bebida')
)