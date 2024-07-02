-- Deleta banco de daodos caso exista
Drop database if exists IFSP;

-- Cria banco de dados caso não exista
Create  database if not exists IFSP;

-- Seleciona banco de dados para uso
use IFSP;
-- Cria a tabela da cidades
CREATE TABLE Cidade
(
    id      INT AUTO_INCREMENT,
    nome    VARCHAR(100),
    estado  VARCHAR(002),
    PRIMARY KEY(id)
);

-- Cria tabela cliente
CREATE TABLE cliente
(
    id  INT AUTO_INCREMENT,
    nome    VARCHAR(100),
    email   VARCHAR(100),
    senha   VARCHAR(100),
    ativo   BOOL,
    id_cidade   INT,
    PRIMARY KEY(id),
    CONSTRAINT Fk_ClienteCidade FOREIGN KEY (id_cidade) REFERENCES Cidade(id)
);