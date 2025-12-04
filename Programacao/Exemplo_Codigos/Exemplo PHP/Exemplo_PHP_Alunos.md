# Exemplo de Código PHP - Exclusão de Aluno com Parâmetro via URL

## Banco de dados | `Escola`:

```sql
CREATE TABLE alunos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    matricula VARCHAR(50),
    email VARCHAR(100),
    telefone VARCHAR(20)
);
```

```sql
CREATE TABLE livros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(150) NOT NULL,
    autor VARCHAR(100),
    ano INT,
    editora VARCHAR(100)
);
```

```sql
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(50) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
);
INSERT INTO usuarios (usuario, senha)
VALUES ('admin', MD5('123'));
```

## Descrição
Este código PHP recebe um **ID de aluno** passado via URL e realiza a **verificação** e **exclusão** do aluno na base de dados. Ele usa a função `$_GET` para receber o parâmetro `cod` e então executa as verificações de segurança antes de executar a consulta no banco de dados.

## Fluxo do Código
1. O código recebe o ID do aluno (`cod`) via parâmetro da URL.
2. Se o parâmetro não for fornecido, é exibida uma mensagem de erro.
3. O código verifica se o ID fornecido é numérico.
4. Se o parâmetro não for numérico, o código exibe um erro de "parâmetro inválido".
5. Se o parâmetro for válido, o código tenta encontrar o aluno no banco de dados.
6. Se o aluno não for encontrado, é exibida uma mensagem de erro.
7. Caso contrário, o código executa a exclusão do aluno no banco de dados.
8. Após a exclusão, é exibida uma mensagem confirmando a operação.

## Código PHP

```php
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>

<body>
    <?php 
    $idaluno = $_GET["cod"];  // Recebe o parâmetro 'cod' da URL
    
    // Verifica se o parâmetro não foi passado
    if(!isset($idcod))
    {
        echo"livros nao informado!";
    }
    
    // Verifica se o parâmetro 'cod' é numérico
    if(!is_numeric($cod))
    {
        echo "parametro invalido";
    }
    else
    {
        // Conexão com o banco de dados
        include "conexao.php";
        
        // Consulta para verificar se o aluno existe no banco
        $sql = "select * from livros where id=$idaluno";
        $res = mysqli_query($conexao,$sql) or die("erro ao selecionar aluno!");
        
        // Verifica se algum aluno foi encontrado
        $total = mysqli_num_rows($res);
        
        // Se não encontrar nenhum aluno
        if($total == 0)
        {
            echo "livros nao localizado";
        }
        else
        {
            // Deleta o aluno do banco de dados
            $sql = "DELETE FROM alunos where id=$idaluno";
            $res = mysqli_query($conexao,$sql) or die ("erro ao excluir aluno");
            echo "aluno excluído com sucesso!";
        }
    }
    
    // Fecha a conexão com o banco de dados
    mysqli_close($close);
    ?>    
</body>
</html>
````
