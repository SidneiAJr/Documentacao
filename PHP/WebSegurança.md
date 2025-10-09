# 🔐Documento voltado para camadas de segurança em php:

```
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


### 4. **Organização Visual (opcional, mas ajuda muito)**
- Você pode agrupar os tópicos por **camadas** ou temas:


### 🔐 Segurança em Autenticação
- password_hash / password_verify
- 2FA
- Limite de tentativas
- Sessão segura

### 🧼 Validação e Sanitização
- filter_var, htmlspecialchars, escapeshellarg, etc.

### 🛡️ Proteção contra ataques
- SQL Injection
- XSS
- CSRF
- IDOR

### 🔒 Segurança de Arquivos e Sistema
- Uploads
- .htaccess
- HTTPS
- Headers
