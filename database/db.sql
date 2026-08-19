CREATE DATABASE atividade_7;
USE atividade_7;

CREATE TABLE usuario (
    idUser INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(87) NOT NULL,
    email VARCHAR(254) NOT NULL UNIQUE
);

CREATE TABLE pratos (
    idPrato INT AUTO_INCREMENT PRIMARY KEY,
    nomePrato VARCHAR(87) NOT NULL,
    preco FLOAT NOT NULL,
    categoria VARCHAR(50) NOT NULL,
    idUser INT,
    CONSTRAINT fk_usuario_pratos 
        FOREIGN KEY (idUser) REFERENCES usuario(idUser)
);