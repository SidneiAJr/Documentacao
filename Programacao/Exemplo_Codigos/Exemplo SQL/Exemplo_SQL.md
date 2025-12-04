# Exemplo de SQl | Desafio Campeonato | TDS Senac 2025

## `Criação do banco`

```sql
-- =========================================
-- CRIAÇÃO DO BANCO
-- =========================================
DROP DATABASE IF EXISTS campeonato;
CREATE DATABASE campeonato;
USE campeonato;
````

## `Tabela Equipe `

```sql
-- Equipes
CREATE TABLE equipe (
    id_equipe INT PRIMARY KEY AUTO_INCREMENT,
    nome_equipe VARCHAR(55) NOT NULL,
    informacao VARCHAR(100) NOT NULL
);
````

## `Demais Tabelas`

```sql
-- Jogos
CREATE TABLE jogo (
    id_jogo INT PRIMARY KEY AUTO_INCREMENT,
    nome_jogo VARCHAR(55) NOT NULL,
    tipo_jogo VARCHAR(50),
    data_lancamento DATE
);

-- Jogadores (cada um pertence a uma equipe)
CREATE TABLE jogador (
    id_jogador INT PRIMARY KEY AUTO_INCREMENT,
    nome_jogador VARCHAR(55) NOT NULL,
    id_equipe INT NOT NULL,
    FOREIGN KEY (id_equipe) REFERENCES equipe(id_equipe)
);

-- Classificação (posição de cada equipe em cada jogo)
CREATE TABLE classificacao (
    id_classificacao INT PRIMARY KEY AUTO_INCREMENT,
    id_jogo INT NOT NULL,
    id_jogador INT NOT NULL,
    posicao INT NOT NULL CHECK (posicao BETWEEN 1 AND 4),
    FOREIGN KEY (id_jogo) REFERENCES jogo(id_jogo),
    FOREIGN KEY (id_jogador) REFERENCES jogador(id_jogador)
);

-- Pontuação por posição
CREATE TABLE pontuacao_por_posicao (
    posicao INT PRIMARY KEY,
    pontos INT NOT NULL
);
````

## `Inserindo Informações`

```sql
-- Tabela de pontuação fixa
INSERT INTO pontuacao_por_posicao (posicao, pontos) VALUES
(1, 100),
(2, 50),
(3, 30),
(4, 5);

-- Equipes
INSERT INTO equipe (nome_equipe, informacao) VALUES
("Equipe JASK", "Grupo 1"),
("Os Platinados", "Grupo 2"),
("Os Pixelados", "Grupo 3"),
("Os Labubus", "Grupo 4");

-- Jogos
INSERT INTO jogo (nome_jogo, tipo_jogo, data_lancamento) VALUES
("Street Fighter II", "Luta", '1991-02-01'),
("Ultimate Mortal Kombat 3", "Luta", '1995-09-01'),
("Killer Instinct", "Luta", '1994-11-01'),
("Super Mario Kart", "Corrida", '1992-08-27'),
("Bomberman 5", "Tiro", '1997-12-01');

-- Jogadores
INSERT INTO jogador (nome_jogador, id_equipe) VALUES
("Jian",1),
("Kalleo", 1),
("Arthur", 1),
("Sidnei", 1),
("Juan", 1),
("Gabriela", 2),
("Luis", 2),
("Jesus", 2),
("Miguel1", 2),
("Miguel2", 2),
("Davi", 3),
("Jorge", 3),
("Gabriel", 3),
("Mariana", 3),
("Eduarda", 3),
("Timotio", 4),
("Henry", 4),
("Henrique", 4),
("Nicolas", 4),
("Wagner", 4);

-- Classificação dos jogos
-- Jogo 1 - Street Fighter II
INSERT INTO classificacao (id_jogo, id_jogador, posicao) VALUES
(1, 12, 1),  -- Pixelados
(1, 7, 2),  -- Platinados
(1, 20, 4),  -- Labubus
(1, 3, 3);  -- JASK

-- Jogo 2 - Ultimate Mortal Kombat 3
INSERT INTO classificacao (id_jogo, id_jogador, posicao) VALUES
(2, 13, 1),  -- Pixelados
(2, 19, 2),  -- Labubus
(2, 8, 3),  -- Platinados
(2, 3, 4);  -- JASK

-- Jogo 3 - Killer Instinct
INSERT INTO classificacao (id_jogo, id_jogador, posicao) VALUES
(3, 10, 1),  -- Platinados
(3, 16, 2),  -- Labubus
(3, 13, 3),  -- Pixelados
(3, 4, 4);  -- JASK

-- Jogo 4 - Super Mario Kart
INSERT INTO classificacao (id_jogo, id_jogador, posicao) VALUES
(4, 17, 1),  -- Labubus
(4, 6, 2),  -- Platinados
(4, 5, 3),  -- JASK
(4, 14, 4), -- Pixelados
(4,19,4);  

-- Jogo 5 - Bomberman 5
INSERT INTO classificacao (id_jogo, id_jogador, posicao) VALUES
(5, 2, 1),  -- JASK
(5, 11, 2),  -- Pixelados
(5, 18, 3),  -- Labubus
(5, 9, 4);  -- Platinados
````

