CREATE DATABASE IF NOT EXISTS crud;

USE crud;

CREATE TABLE usuarios(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome varchar(200),
    email varchar(200),
    senha varchar(200)
)
CREATE TABLE IF NOT EXISTS produto(Add commentMore actions
    id INT AUTO_INCREMENT PRIMARY KEY, 
     nome varchar(200),
     valor decimal(7,2)
)