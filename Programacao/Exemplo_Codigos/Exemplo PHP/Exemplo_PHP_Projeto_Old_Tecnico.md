# PHP | Projeto Completo Tecnico | OLD HTML 4

### Formulario em HTML

- Entradas de usuario com F usuario
- Entrdas de senha com F senha

````html
<table width="712" height="93" border="2">
    <tr>
        <td width="182" rowspan="2">
            <img src="images/9.jpg" alt="" width="176" height="140" />
        </td>
        <td width="512">Livraria Paluminio</td>
    </tr>
    <tr>
        <td>
            <form id="form2" name="form2" method="post" action="">
                <p><strong>Usuário:
                    <input type="text" name="f_usuario" id="f_usuario" />
                </strong></p>
                <p><strong>Senha:
                    <input name="f_senha" type="password" id="f_senha" />
                </strong>
                <input type="submit" name="button2" id="button2" value="OK" />
                </p>
            </form>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <form id="form1" name="form1" method="post" action="">
                <strong>Busca:
                    <input type="text" name="f_prod" id="f_prod" />
                </strong>
                <input type="submit" name="button" id="button" value="OK" />
            </form>
        </td>
    </tr>
</table>
````

## `Conexção com Banco & Login `

````php
<?php
// Inclui a conexão com o banco de dados
include "conexao.php"; 

// Recebe os dados do formulário
$usuario = $_POST["f_usuario"]; 
$senha = $_POST["f_senha"]; 

// Prepara a consulta para buscar o usuário no banco
$sql = "SELECT * FROM tab_usuario WHERE usu_login = ?";

// Prepara a consulta e vincula o parâmetro
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "s", $usuario);

// Executa a consulta
mysqli_stmt_execute($stmt);
$res = mysqli_stmt_get_result($stmt);

// Verifica se o usuário existe
if(mysqli_num_rows($res) == 0) {
    header('location:erro.html'); // Redireciona para a página de erro
} else {
    $linha = mysqli_fetch_row($res);

    // Verifica se a senha está correta
    if($linha[1] == $senha) {  // $linha[1] deveria ser a senha hashada no banco
        session_start();
        $_SESSION['loginok'] = 'ok'; // Inicia a sessão de login
        header('location:menuadm.php'); // Redireciona para a área administrativa
    } else {
        header('location:erro.html'); // Senha incorreta
    }
}
?>
````

## Listando Livros:

- Listagem de Livros em html

````php
<?php
// Conectar ao banco de dados
$conexao = mysqli_connect("localhost", "root", "") or die("Falha ao conectar com o MySQL");

// Selecionar o banco de dados
$bd = mysqli_select_db($conexao, "livros") or die("Falha ao selecionar o banco de dados 'livros'");
?>
````
````html
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Livros</title>
</head>
<body>
````

## Formulario de Listagem de Livros(Logica em PHP):

````php
<?php
// Verificar se o valor de 'n' foi passado via GET (para filtrar por nível, se necessário)
$nivel = isset($_GET["n"]) ? $_GET["n"] : null;

// Buscar dados do formulário de pesquisa
$busca = isset($_POST["f_busca"]) ? $_POST["f_busca"] : '';

// Construir a consulta SQL com base na busca
if (!empty($busca)) {
    // Consulta para buscar livros com o título que contenha a string digitada
    $sql = "SELECT codigo, titulo, preco, categoria, descricao FROM livros WHERE titulo LIKE ? ORDER BY titulo";
    $stmt = mysqli_prepare($conexao, $sql);
    $searchTerm = "%" . $busca . "%";  // Prepara o termo de busca
    mysqli_stmt_bind_param($stmt, 's', $searchTerm);
} else {
    // Se não houver busca, seleciona todos os livros
    $sql = "SELECT codigo, titulo, preco, categoria, descricao FROM livros ORDER BY titulo";
    $stmt = mysqli_prepare($conexao, $sql);
}

// Executar a consulta
mysqli_stmt_execute($stmt);
$res = mysqli_stmt_get_result($stmt);

// Verificar se algum livro foi encontrado
$total = mysqli_num_rows($res);
if ($total == 0) {
    echo "<b>Nenhum livro encontrado</b>";
}
?>
````

## Verificação de sessão | Formulario de cadastro:

````html
<?php
// Inicia a sessão
session_start();

// Verifica se o usuário está logado
if ($_SESSION['loginok'] != 'ok') {
    // Se não estiver logado, redireciona para a página de erro
    header('location:erro.html');
    exit(); // Interrompe o código após o redirecionamento
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
<form id="form1" name="form1" method="post" action="" enctype="multipart/form-data">
    <p><strong>Nome do aluno:</strong><br>
        <input name="f_nome" type="text" required="required" placeholder="Favor informar o nome" size="50">
    </p>
    <p><strong>Nível de Ensino:</strong><br />
        <select name="f_nivel" id="f_nivel">
            <option value="1">Educação Infantil</option>
            <option value="2">Ensino Fundamental</option>
            <option value="3">Ensino Médio</option>
            <option value="4">Técnico</option>
        </select>
    </p>
    <p><strong>Foto:</strong><br />
        <input type="file" name="f_foto" id="f_foto" />
    </p>
    <p>
        <input type="submit" value="Incluir" />
        <input type="reset" value="Limpar" />
    </p>
</form>
````

## PHp | Formulario de cadastramento de usuario:

```php
<?php
// Recebe os dados do formulário
$mnome = $_POST["f_nome"];
$mnivel = $_POST["f_nivel"];
$erro = false;

// Valida o nome
if (empty($mnome)) {
    echo "<b>Nome</b> não informado!";
    $erro = true;
}

// Se houver erro, exibe mensagem
if ($erro) {
    echo "<br> O formulário apresenta erros, favor corrigir...";
} else {
    // Conecta ao banco de dados
    include "../atv2/conexao.php";

    // Prepara a consulta SQL com Prepared Statement
    $sql = "INSERT INTO Alunos (nome, nivel) VALUES (?, ?)";
    $stmt = mysqli_prepare($conexao, $sql);
    mysqli_stmt_bind_param($stmt, 'si', $mnome, $mnivel);

    // Executa a consulta
    if (mysqli_stmt_execute($stmt)) {
        echo "<b>Aluno</b> inserido com sucesso!";
    } else {
        echo "Erro ao inserir aluno.";
    }

    // Verifica se foi enviada uma foto
    if (!empty($_FILES["f_foto"]["name"])) {
        $foto = $_FILES["f_foto"];

        // Verifica o tipo de arquivo
        if ($foto["type"] != 'image/jpeg') {
            echo "<b>Formato de arquivo inválido! Necessário .JPEG!</b><br>";
        } else {
            // Recupera o ID do último aluno inserido
            $ultimocod = mysqli_insert_id($conexao);

            // Define o caminho para salvar a imagem
            $arquivo = "../imagens/" . $ultimocod . ".jpg";

            // Verifica se o arquivo já existe e o remove
            if (file_exists($arquivo)) {
                unlink($arquivo);
            }

            // Move o arquivo para o diretório
            if (move_uploaded_file($foto["tmp_name"], $arquivo)) {
                echo "<b>Foto inserida com sucesso!</b><br>";
            } else {
                echo "<b>Erro ao fazer upload da foto!</b><br>";
            }
        }
    } else {
        echo "<b>Nenhuma foto enviada!</b><br>";
    }
}
?>
````


