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
 ```

## 4. Validação e Sanitização de Dados

- Nunca confiar em dados do usuário.
- Funções úteis:
- filter_var() (ex: FILTER_VALIDATE_EMAIL, FILTER_SANITIZE_STRING)
- htmlspecialchars() (XSS)
- intval(), floatval() para forçar tipo
 ```php
$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$nome  = htmlspecialchars($_POST['nome'], ENT_QUOTES, 'UTF-8');
 ```

## 5.Proteção contra XSS (Cross-site Scripting)
- Escapar todas as saídas de dados dinâmicos no HTML:
 ```php
 <p><?= htmlspecialchars($usuario['nome']) ?></p>
 ```

## 6. Proteção contra CSRF (Cross-Site Request Forgery)
- Gerar token CSRF único por formulário e armazenar na sessão:
 ```php
$_SESSION['csrf_token'] = bin2hex(random_bytes(32));
 ```

## 6. Gerenciamento de Sessões Seguro
- Regenerar o ID de sessão após login:
 ```php
session_regenerate_id(true);
session_set_cookie_params([
    'lifetime' => 0,
    'path' => '/',
    'domain' => 'seudominio.com',
    'secure' => true,
    'httponly' => true,
    'samesite' => 'Strict'
]);
 ```
