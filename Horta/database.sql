CREATE DATABASE irrigacao;

--Cria a tabela de login e senha de todos
CREATE TABLE usuario(
    id int PRIMARY KEY,
    nome varchar(80),
    email varchar(100),
    senha varchar(30)
    );

-- Cria a tabela produto
CREATE TABLE produto(
    id int PRIMARY KEY,
    nome varchar(80),
    preco float(10,2),
    descricao varchar(1000)
    );


-- Incrementa o um login ao BD
INSERT INTO `usuario`(`id`, `nome`, `senha`, `email`) VALUES ('1','Gustavo','123','g@gmail.com');