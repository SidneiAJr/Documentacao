# 🔐 Documento voltado para camadas de segurança em PHP

## 1. Blindagem contra SQL Injection
- Uso de **Prepared Statements** (parâmetros bindados) com **PDO** ou **mysqli**:
  ```php
  $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
  $stmt->execute([$email]);

## 2. Método POST (vs GET)
- ***Utilizar POST para envio de dados sensíveis como:***
- Senhas
- Dados pessoais
- Formulários de login, cadastro, alteração
- Evitar expor dados na URL (GET), principalmente em links compartilháveis.

## 3. Uso de password_hash() e password_verify()
- Funções nativas, seguras e atualizadas com algoritmos modernos como bcrypt e Argon2.
 ```php
$hash = password_hash($senha, PASSWORD_DEFAULT);
if (password_verify($senhaDigitada, $hash)) {
    // Senha válida
}
