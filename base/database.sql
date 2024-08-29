CREATE DATABASE alphacode

USE alphacode

CREATE TABLE contatos (
	id INT auto_increment PRIMARY KEY NOT NULL,
    nome VARCHAR(60) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefone VARCHAR(15) NOT NULL,
    dataNascimento DATE NOT NULL,
    profissao VARCHAR(50) NOT NULL,
    celular VARCHAR(15) NOT NULL,
    receberWhatsapp BOOLEAN NOT NULL,
    receberSms BOOLEAN NOT NULL,
    receberEmail BOOLEAN NOT NULL
)
