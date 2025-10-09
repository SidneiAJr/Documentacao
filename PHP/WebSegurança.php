# 🔐Documento voltado para camadas de segurança em php:

## 1. Blindagem contra SQL Injection
- Uso de Prepared Statements (parâmetros bindados) com PDO ou mysqli
$stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
$stmt->execute([$email]);

## 2.Método POST (vs GET)
- Utilizar POST para envio de dados sensíveis como:
- Senhas
- Dados pessoais
- Formulários de login, cadastro, alteração
- Evitar expor dados na URL (GET), principalmente em links compartilháveis.

## 3.Uso de password_hash() e password_verify() (nativo, seguro e atualizado com algoritmos modernos como bcrypt e Argon2).

## 4. Validação e Sanitização de Dados
- Nunca confiar em dados do usuário.
- Funções úteis:
- filter_var() (ex: FILTER_VALIDATE_EMAIL, FILTER_SANITIZE_STRING)
- htmlspecialchars() (XSS)
- intval(), floatval() para forçar tipo

## 5. Proteção contra XSS (Cross-site Scripting)
- Escapar todas as saídas de dados dinâmicos no HTML:

## 6. Proteção contra CSRF (Cross-Site Request Forgery)

## 7. Gerenciamento de Sessões Seguro
