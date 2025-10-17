# Exemplo Banco 3:

```SQl
CREATE database aula07;
use aula07;
-- Criar tabela clientes
CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    cidade VARCHAR(50) NOT NULL,
    idade INT NOT NULL CHECK (idade >= 0 AND idade <= 120)
);

-- Criar tabela produtos
CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    categoria VARCHAR(50) NOT NULL,
    preco DECIMAL(10,2) NOT NULL CHECK (preco >= 0)
);

-- Inserir dados na tabela clientes
INSERT INTO clientes (id, nome, cidade, idade) VALUES
(1, 'Lucas Fernandes', 'Salvador', 32),
(2, 'Pedro Cavalcanti', 'Canoas', 50),
(3, 'Bruno da Cunha', 'Curitiba', 41),
(4, 'Rafaela da Rocha', 'São Paulo', 36),
(5, 'Júlia Barros', 'Salvador', 52),
(6, 'Marcela Ribeiro', 'Canoas', 47),
(7, 'Renan Costa', 'Porto Alegre', 42),
(8, 'Ricardo Cavalcanti', 'Curitiba', 56),
(9, 'Vanessa das Neves', 'Canoas', 54),
(10, 'Juliana da Cunha', 'Curitiba', 28),
(11, 'Lucas da Rocha', 'São Paulo', 38),
(12, 'Carolina Moreira', 'Porto Alegre', 65),
(13, 'Ana Fernandes', 'São Paulo', 44),
(14, 'Felipe Martins', 'Canoas', 60),
(15, 'Gabriela Pereira', 'Curitiba', 41),
(16, 'André Almeida', 'Salvador', 26),
(17, 'Eduardo Correia', 'Porto Alegre', 18),
(18, 'Larissa Correia', 'Curitiba', 39),
(19, 'Diego Barbosa', 'São Paulo', 58),
(20, 'Camila Rodrigues', 'Canoas', 23);

-- Inserir dados na tabela produtos
INSERT INTO produtos (id, nome, categoria, preco) VALUES
(1, 'Celular 49', 'Informática', 544.88),
(2, 'Camiseta 78', 'Vestuário', 1212.62),
(3, 'Copo 69', 'Informática', 1459.94),
(4, 'Gamepad 11', 'Brinquedos', 446.84),
(5, 'HD 47', 'Brinquedos', 296.51),
(6, 'Camiseta 7', 'Eletrônicos', 990.37),
(7, 'Notebook 89', 'Alimentos', 121.96),
(8, 'Boneco 41', 'Informática', 1283.01),
(9, 'Celular 15', 'Informática', 881.59),
(10, 'Mouse 95', 'Informática', 1251.32),
(11, 'Notebook 64', 'Games', 1226.12),
(12, 'Fone 83', 'Games', 83.34),
(13, 'Fone 37', 'Brinquedos', 428.27),
(14, 'Teclado 77', 'Brinquedos', 1142.89),
(15, 'Mouse 2', 'Vestuário', 90.01),
(16, 'HD 79', 'Brinquedos', 1255.95),
(17, 'Boneco 29', 'Brinquedos', 387.66),
(18, 'Notebook 5', 'Informática', 765.00),
(19, 'Teclado 10', 'Eletrônicos', 781.18),
(20, 'Gamepad 54', 'Games', 274.66);

-- Exercicio 1:
-- a) Liste os nomes e preço dos produtos que custa mais que 200
SELECT * FROM produtos
WHERE preco > 200 ORDER BY
preco desc;
-- Exercicio 2:
-- a) Mostre apenas as cidades únicas dos clientes cadastrados
SELECT DISTINCT cidade FROM clientes;
 -- Exercicio 3:
 -- a) Liste os nomes dos produtos que contêm "game" no nome.
SELECT nome FROM produtos
WHERE nome LIKE '%game%';
 -- Exercicio 4:
 -- a) Mostre os 3 produtos mais baratos.
 SELECT * FROM produtos
 ORDER BY PRECO ASC LIMIT 3;
 -- Exercicio 5:
 -- a) Liste os nomes dos clientes que moram em "Porto Alegre" ou "Canoas".
SELECT nome FROM clientes
WHERE cidade = 'Porto Alegre' OR cidade = 'Canoas';
 -- Exercicio 6:
 -- a)Liste o nome e a cidade dos clientes que moram em Canoas
SELECT nome FROM clientes
WHERE cidade = 'Canoas';
 -- Exercicio 7:
-- a)Mostre todos os clientes com idade entre 30 e 40 anos
SELECT nome 
FROM clientes
WHERE idade BETWEEN 30 AND 40;
 -- Exercicio 8:
 -- a) Liste o nome e preço dos produtos que contenham "Note" no nome.
SELECT nome FROM produtos
WHERE nome LIKE '%Note%';
-- Exercicio 9:
-- a) Mostre todos os clientes que moram em São Paulo, Porto Alegre ou Curitiba.
SELECT nome FROM clientes
WHERE cidade = 'São Paulo' OR cidade = 'Porto Alegre' OR cidade='Curitiba';
-- Exercicio 10:
-- a) Liste todos os produtos da categoria Games, ordenados do mais caro para o mais barato
SELECT * 
FROM produtos
WHERE categoria = 'Games'
ORDER BY preco DESC;
-- Exercicio 11:
-- a) Mostre apenas os 5 primeiros produtos mais caros da tabela
SELECT * 
FROM produtos
ORDER BY preco DESC
LIMIT 5;
-- Exercicio 12:
-- a) Liste os 3 clientes mais jovens (nome, idade e cidade).
SELECT nome, idade, cidade
FROM clientes
ORDER BY idade ASC
LIMIT 3;
-- Exercicio 13:
-- a) Mostre os produtos com preço menor que 100 reais
SELECT * from produtos where preco < 100;
-- Exercicio 14:
-- a) Liste nome e categoria dos produtos que custam mais de 1000 reais e sejam da categoria Informática ou Eletrônicos.
SELECT nome, categoria 
FROM produtos
WHERE (categoria = 'Informática' OR categoria = 'Eletrônicos')
  AND preco > 1000
ORDER BY preco DESC;
-- Exercicio 15: 
-- a) Mostre apenas as cidades distintas onde há clientes cadastrados.
SELECT DISTINCT cidade
FROM clientes;
-- Exercicio 16:
-- a) Liste todos os clientes que não moram em São Paulo.
SELECT * FROM clientes where not cidade = 'São Paulo';
 -- Exercicio 17:
 -- a) Mostre todos os produtos cujo preço não esteja entre 200 e 800 reais.
 SELECT * FROM produtos where not (preco BETWEEN 200 AND 800);
```
