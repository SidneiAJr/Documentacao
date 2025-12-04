# PHP | Funcionamento de Banco de Dados e Variáveis

No PHP, existem duas formas principais de fazer conexão com banco de dados:

- Programação Estruturada (Procedural)

- POO (Programação Orientada a Objetos)

Ambas funcionam, mas a forma POO é mais moderna e recomendada.

## `Variáveis Básicas de Conexão`

```php
$host     = "localhost";   // Servidor do banco
$banco    = "Nome_Banco";  // Nome do banco de dados
$user     = "Usuario";     // Usuário do banco
$password = "Senha_banco"; // Senha do banco
```

## `Conexão Procedural (mysqli_connect)`

`Forma clássica, muito usada em PHP antigo.`

- ✔ Fácil

- ✔ Amplamente compatível

```php
$host     = "localhost";
$banco    = "Nome_Banco";
$user     = "Usuario";
$password = "Senha_banco";

$conexao = mysqli_connect($host, $user, $password, $banco);

if(!$conexao){
    die("Erro ao conectar: " . mysqli_connect_error());
}
```
