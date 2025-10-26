# 🧠 SQL Avançado — Consultas, Procedures e Otimização

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




## 🧩 10️⃣ Exemplo Avançado — Relatório Completo
```SQL
SELECT 
    p.nome_personagem AS "Personagem",
    e.nome_especie AS "Espécie",
    h.nome_habilidade AS "Habilidade",
    a.nome_arma AS "Arma",
    CASE 
        WHEN p.idade > 300 THEN 'Antigo'
        WHEN p.idade BETWEEN 100 AND 300 THEN 'Veterano'
        ELSE 'Jovem'
    END AS "Classificação de Idade"
FROM caracteristica_personagem cp
JOIN personagem p ON cp.id_personagem = p.id_personagem
JOIN especie e ON cp.id_especie = e.id_especie
JOIN habilidade h ON cp.id_habilidade = h.id_habilidade
JOIN armas a ON cp.id_arma = a.id_arma
ORDER BY p.idade DESC;
```
