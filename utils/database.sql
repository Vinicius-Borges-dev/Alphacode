CREATE DATABASE alphacode

USE alphacode

CREATE TABLE contatos (
	id INT auto_increment PRIMARY KEY NOT NULL,
    nome VARCHAR(60) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefone VARCHAR(11) NOT NULL,
    dataNascimento DATE NOT NULL,
    profissao VARCHAR(50) NOT NULL,
    celular VARCHAR(11) NOT NULL
)
