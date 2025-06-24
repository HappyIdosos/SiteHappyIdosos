-- Cria o banco de dados
CREATE DATABASE IF NOT EXISTS happy_idosos DEFAULT CHARACTER
SET
    utf8mb4 COLLATE utf8mb4_general_ci;

-- Seleciona o banco de dados
USE happy_idosos;

-- Cria a tabela de voluntários
CREATE TABLE
    IF NOT EXISTS voluntarios (
        id INT AUTO_INCREMENT PRIMARY KEY,
        cpf VARCHAR(14) NOT NULL UNIQUE,
        telefone VARCHAR(20) NOT NULL,
        cep VARCHAR(10) NOT NULL,
        nascimento DATE NOT NULL,
        email VARCHAR(100) NOT NULL UNIQUE,
        senha VARCHAR(255) NOT NULL,
        criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );