# PHP | Tutorial de Conexão de Banco de Dados

Para começar a trabalhar com PHP e banco de dados, você deve ter um servidor local como **XAMPP**, **WAMP** ou qualquer outra ferramenta que possibilite rodar PHP. Depois, siga os seguintes passos:

---

## 🛠️ Configuração do Ambiente

1. **Instale o XAMPP ou WAMP**: Faça o download e instale o XAMPP ou WAMP, que já vêm com o PHP e o MySQL prontos para uso.

2. **Crie o arquivo de conexão**: Crie um arquivo PHP chamado `conexao.php`, onde vamos definir a conexão com o banco de dados.

3. **Defina as variáveis de conexão**: No arquivo `conexao.php`, defina os parâmetros necessários para se conectar ao banco.

---

## 📄 Exemplo de Código para Conexão com Banco de Dados

### Definição das Variáveis de Conexão

```php
$host = 'localhost'; // Host do banco
$db   = 'meu_banco'; // Nome do banco
$user = 'root'; // Usuário do banco
$pass = 'minha_senha'; // Senha do banco
$charset = 'utf8mb4'; // Charset para garantir a codificação correta
