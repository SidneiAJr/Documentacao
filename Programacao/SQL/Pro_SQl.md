# Complementos Avançados de SQL

## 📘 Exemplo:

- 1FN → Cada célula contém um único valor.

- 2FN → Todo atributo não chave depende da chave inteira.

- 3FN → Nenhum atributo depende de outro atributo não chave.

## ⚡ 2️⃣ Joins Avançados e Auto-Joins

```SQL
-- LEFT JOIN → traz todos os personagens mesmo sem relação completa
SELECT p.nome_personagem, a.nome_arma
FROM personagem p
LEFT JOIN caracteristica_personagem cp ON p.id_personagem = cp.id_personagem
LEFT JOIN armas a ON cp.id_arma = a.id_arma;

-- SELF JOIN → comparar linhas da mesma tabela
SELECT a.nome_personagem AS mestre, b.nome_personagem AS aprendiz
FROM personagem a
JOIN personagem b ON a.idade > b.idade AND a.idade - b.idade < 50;
```

## 🧮 3️⃣ Funções Agregadas e Janela (Window Functions)

```SQL
-- Média de idade por espécie
SELECT e.nome_especie, AVG(p.idade) AS media_idade
FROM caracteristica_personagem cp
JOIN personagem p ON cp.id_personagem = p.id_personagem
JOIN especie e ON cp.id_especie = e.id_especie
GROUP BY e.nome_especie;

-- Funções de janela
SELECT nome_personagem, idade,
       RANK() OVER (ORDER BY idade DESC) AS ranking
FROM personagem;
```

## 4️⃣ EXPLAIN e Planejamento de Consultas

```SQL
EXPLAIN SELECT * FROM personagem WHERE nome_personagem LIKE '%Kael%';
```

## 🧠 5️⃣ CTEs (Common Table Expressions)

```SQL
WITH maiores AS (
  SELECT nome_personagem, idade FROM personagem WHERE idade > 100
)
SELECT * FROM maiores ORDER BY idade DESC;

WITH RECURSIVE contagem AS (
  SELECT 1 AS n
  UNION ALL
  SELECT n + 1 FROM contagem WHERE n < 10
)
SELECT * FROM contagem;

```

## 🧰 6️⃣ Administração e Segurança

Permissões, usuários e backups.

📘 Exemplo:

```SQL
CREATE USER 'professor'@'localhost' IDENTIFIED BY '1234';
GRANT SELECT, INSERT ON sraneis.* TO 'professor'@'localhost';
REVOKE DELETE ON sraneis.* FROM 'professor'@'localhost';
mysqldump -u root -p sraneis > sraneis_backup.sql
mysql -u root -p sraneis < sraneis_backup.sql
```

## 📊 7️⃣ Views Materializadas (dependendo do SGBD)

```SQL
CREATE MATERIALIZED VIEW vw_personagens_estat AS
SELECT e.nome_especie, COUNT(*) AS total
FROM caracteristica_personagem cp
JOIN especie e ON cp.id_especie = e.id_especie
GROUP BY e.nome_especie;
```

## 🔄 8️⃣ Particionamento e Sharding (grandes bancos)

```SQL
CREATE TABLE logs (
  id INT NOT NULL,
  data_evento DATE NOT NULL
)
PARTITION BY RANGE (YEAR(data_evento)) (
  PARTITION p2023 VALUES LESS THAN (2024),
  PARTITION p2024 VALUES LESS THAN (2025)
);
```

## 9️⃣ Procedures e Triggers com Lógica Complexa

```SQL
DELIMITER $$
CREATE PROCEDURE CurarPersonagens()
BEGIN
  DECLARE done INT DEFAULT FALSE;
  DECLARE pid INT;
  DECLARE cur CURSOR FOR SELECT id_personagem FROM personagem WHERE idade < 100;
  DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = TRUE;

  OPEN cur;
  read_loop: LOOP
    FETCH cur INTO pid;
    IF done THEN LEAVE read_loop; END IF;
    UPDATE personagem SET idade = idade + 5 WHERE id_personagem = pid;
  END LOOP;
  CLOSE cur;
END $$
DELIMITER ;
```



