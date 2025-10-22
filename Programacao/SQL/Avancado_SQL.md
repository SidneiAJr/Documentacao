# 🧠 SQL Avançado — Subconsultas, Views, Procedures, Triggers, Transações e Índices

## 🔍 1️⃣ Subconsultas (Subqueries)

Subconsultas são consultas dentro de outras consultas.
Elas permitem filtrar dados com base em resultados intermediários.

```SQl
-- Exemplo: personagens com habilidades de fogo
SELECT nome_personagem
FROM personagem
WHERE id_personagem IN (
    SELECT id_personagem
    FROM caracteristica_personagem
    WHERE id_habilidade IN (
        SELECT id_habilidade
        FROM habilidade
        WHERE nome_habilidade LIKE '%Fogo%' OR nome_habilidade LIKE '%Chama%'
    )
);
```

## 🪞 2️⃣ Views (Visões)

Views são consultas salvas que se comportam como tabelas virtuais.

```SQl
CREATE VIEW vw_personagens_completos AS
SELECT 
    p.nome_personagem,
    p.idade,
    e.nome_especie,
    h.nome_habilidade,
    a.nome_arma
FROM caracteristica_personagem cp
JOIN personagem p ON cp.id_personagem = p.id_personagem
JOIN especie e ON cp.id_especie = e.id_especie
JOIN habilidade h ON cp.id_habilidade = h.id_habilidade
JOIN armas a ON cp.id_arma = a.id_arma;
```

## ⚙️ 3️⃣ Stored Procedures (Procedimentos Armazenados)

Procedures automatizam tarefas no banco.

```SQl
DELIMITER $$
CREATE PROCEDURE AdicionarPersonagem(
    IN nome VARCHAR(100),
    IN idade INT,
    IN especie INT,
    IN habilidade INT,
    IN arma INT
)
BEGIN
    INSERT INTO personagem (nome_personagem, idade)
    VALUES (nome, idade);

    INSERT INTO caracteristica_personagem (id_especie, id_personagem, id_habilidade, id_arma)
    VALUES (especie, LAST_INSERT_ID(), habilidade, arma);
END $$
DELIMITER ;
```

## ⚡ 4️⃣ Triggers (Gatilhos)

Triggers executam comandos automaticamente após eventos.

```SQl
CREATE TABLE log_insercoes (
    id_log INT AUTO_INCREMENT PRIMARY KEY,
    nome_personagem VARCHAR(100),
    data_insercao DATETIME DEFAULT CURRENT_TIMESTAMP
);

DELIMITER $$
CREATE TRIGGER trg_log_personagem
AFTER INSERT ON personagem
FOR EACH ROW
BEGIN
    INSERT INTO log_insercoes (nome_personagem)
    VALUES (NEW.nome_personagem);
END $$
DELIMITER ;
```

## 🔒 5️⃣ Transações

Agrupam várias operações com segurança.
```SQl
START TRANSACTION;
INSERT INTO personagem (nome_personagem, idade) VALUES ('Rhaegor', 420);
UPDATE personagem SET idade = 421 WHERE nome_personagem = 'Rhaegor';
COMMIT;
-- ROLLBACK;
```

## 🚀 6️⃣ Índices (Otimização)

Aceleram buscas em colunas importantes.
```SQl
CREATE INDEX idx_nome_personagem ON personagem(nome_personagem);
CREATE INDEX idx_nome_habilidade ON habilidade(nome_habilidade);
```
