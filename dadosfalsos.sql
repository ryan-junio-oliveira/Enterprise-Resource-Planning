CREATE DATABASE dados_falsos;

use dados_falsos;

CREATE TABLE dados_falsos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50),
    sobrenome VARCHAR(50),
    email VARCHAR(100),
    telefone VARCHAR(20),
    endereco VARCHAR(100),
    cidade VARCHAR(50),
    bairro VARCHAR(50),
    estado VARCHAR(50),
    pais VARCHAR(50),
    genero ENUM('Masculino', 'Feminino', 'Outro'),
    estado_civil ENUM('Solteiro(a)', 'Casado(a)', 'Divorciado(a)', 'Viúvo(a)', 'Outro'),
    idade INT
);