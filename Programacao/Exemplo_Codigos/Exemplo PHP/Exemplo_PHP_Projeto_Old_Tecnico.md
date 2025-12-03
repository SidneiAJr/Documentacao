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



