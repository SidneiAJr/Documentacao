# 🧠 SQL Avançado — Consultas, Procedures e Otimização

## ⚙️ 1️⃣ JOINS AVANÇADOS
```SQL
🔸 INNER JOIN — junção de registros correspondentes
SELECT 
    p.nome_personagem,
    e.nome_especie,
    h.nome_habilidade,
    a.nome_arma
FROM caracteristica_personagem cp
INNER JOIN personagem p ON cp.id_personagem = p.id_personagem
INNER JOIN especie e ON cp.id_especie = e.id_especie
INNER JOIN habilidade h ON cp.id_habilidade = h.id_habilidade
INNER JOIN armas a ON cp.id_arma = a.id_arma;
```

## LEFT JOIN — mantém todos os registros da esquerda
```SQL
SELECT 
    p.nome_personagem,
    h.nome_habilidade
FROM personagem p
LEFT JOIN caracteristica_personagem cp ON p.id_personagem = cp.id_personagem
LEFT JOIN habilidade h ON cp.id_habilidade = h.id_habilidade;
```

## RIGHT JOIN — mantém todos os registros da direita
```SQL
SELECT 
    e.nome_especie,
    p.nome_personagem
FROM especie e
RIGHT JOIN caracteristica_personagem cp ON e.id_especie = cp.id_especie
RIGHT JOIN personagem p ON cp.id_personagem = p.id_personagem;
```

## 🧩 2️⃣ SUBCONSULTAS (Subqueries)
```SQL
🔹 Exemplo: encontrar personagens com mais de 100 anos que têm habilidades mágicas
SELECT nome_personagem
FROM personagem
WHERE idade > 100
AND id_personagem IN (
    SELECT id_personagem
    FROM caracteristica_personagem
    WHERE id_habilidade IN (
        SELECT id_habilidade FROM habilidade WHERE nome_habilidade LIKE '%Fogo%' OR nome_habilidade LIKE '%Morte%'
    )
);
```

##⚡ 3️⃣ FUNÇÕES DE AGREGAÇÃO
```SQL
SELECT 
    e.nome_especie,
    COUNT(p.id_personagem) AS total_personagens,
    AVG(p.idade) AS idade_media
FROM personagem p
JOIN caracteristica_personagem cp ON cp.id_personagem = p.id_personagem
JOIN especie e ON e.id_especie = cp.id_especie
GROUP BY e.nome_especie
ORDER BY total_personagens DESC;

```

## 🔁 4️⃣ STORED PROCEDURES (Procedimentos armazenados)
```SQL
Automatizam tarefas no banco, como inserções e atualizações.

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

## 🧱 5️⃣ VIEWS (Visões)
```SQL
Criam consultas salvas que funcionam como tabelas virtuais.

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


## ⚠️ 6️⃣ TRIGGERS (Gatilhos)
```SQL
Executam comandos automaticamente após eventos como INSERT, UPDATE, DELETE.

Exemplo: registrar log de inserções em personagem
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


## 🚀 7️⃣ ÍNDICES (Otimização)
```SQL
Índices aceleram buscas, especialmente em colunas usadas com WHERE ou JOIN.

CREATE INDEX idx_nome_personagem ON personagem(nome_personagem);
CREATE INDEX idx_habilidade_nome ON habilidade(nome_habilidade);
```

🔒 8️⃣ TRANSAÇÕES
```SQL
Permitem executar várias operações juntas com segurança.

START TRANSACTION;

INSERT INTO personagem (nome_personagem, idade) VALUES ('Rhaegor', 420);
UPDATE personagem SET idade = 421 WHERE nome_personagem = 'Rhaegor';

COMMIT;   -- Confirma as operações
-- ROLLBACK; -- Cancela se algo der errado
```
