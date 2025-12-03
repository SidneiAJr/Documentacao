# Exemplo de Código PHP - Exclusão de Aluno com Parâmetro via URL

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

```php

# Formulário de Especialidade - HTML

## Descrição
Este código HTML contém um formulário simples para a entrada de dados de especialidade. O usuário pode inserir uma especialidade e enviar o valor para o script `incESP.php` via método `POST`.

## Fluxo do Código

1. O código apresenta um formulário com um campo de texto para o usuário digitar a especialidade.
2. O campo tem o nome `f_especialidade`, e o valor inserido será enviado para o script PHP `incESP.php` quando o formulário for submetido.
3. O formulário não possui botão de envio visível, o que significa que o envio do formulário pode ser feito por outro mecanismo (ex: JavaScript ou ação de outro elemento).

## Código HTML

```html
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="incESP.php">
  Especialidade 
  <label for="f_especialidade"></label>
  <input name="f_especialidade" type="text" id="f_especialidade" size="50" maxlength="50" />
</form>
</body>
</html>
````

# Formulário de Cadastro de Médico

## Descrição
Este código HTML cria um formulário simples para cadastrar informações sobre um médico. O formulário coleta dados como nome, CRM, data de nascimento, especialidade e foto. O formulário usa o método `POST` para enviar os dados, incluindo a capacidade de fazer upload de um arquivo de imagem (foto).

## Fluxo do Código

1. O formulário coleta as informações do usuário.
2. Ele possui campos de texto para o nome, CRM e data de nascimento.
3. Há um menu suspenso (`<select>`) para escolher a especialidade do médico.
4. O formulário permite o upload de uma foto do médico.
5. Ao final, o usuário pode enviar o formulário ou resetá-lo.

## Código HTML

```html
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>

<body>
<form action="" enctype="multipart/form-data" method="post">
  <p>Nome:</p>
  <p>
    <label for="f_nome"></label>
    <input name="f_nome" type="text" id="f_nome" size="50" />
    <br />
  </p>
  <p>Crm<br />
    <label for="f_crm"></label>
    <input name="f_crm" type="text" id="f_crm" size="10" />
  </p>
  <p>Dt nascimento</p>
  <p>
    <label for="f_dtnasc"></label>
    <input name="f_dtnasc" type="text" id="f_dtnasc" size="10" />
  </p>
  <p>Especialidade</p>
  <p>
    <select name="f_especialidade" id="f_especialidade">
      <option value="1">Pediatria</option>
      <option value="2">Clínico Geral</option>
      <option value="3">Cardiologista</option>
      <option value="4">Neurologista</option>
    </select>
  </p>
  <p>Foto</p>
  <p>
    <label for="f_foto"></label>
    <input type="file" name="f_foto" id="f_foto" />
    <br />
    <input type="submit" value="Incluir" />
    <input type="reset" value="Limpar" />
  </p>
</form>
</body>
</html>
```


