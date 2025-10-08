# 🌐Introdução a web PHP:

## 🐘Exemplo de codigo para web em php(Comentado):

    // Conexão com o banco de dados

    //include('conex.php'); // inclui o arquivo que deve criar a variável $conn (provavelmente um mysqli)


    // Verifica se o formulário foi enviado via POST


    if ($_SERVER["REQUEST_METHOD"] == "POST") 

    // Recebe os dados do formulário (sem validação ainda)
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];  // Senha em texto puro — grande risco de segurança
    $telefone = $_POST['telefone'];
    $usuario = $_POST['usuario'];

    // Observação: aqui você já usa prepared statement (bom), mas a senha não está sendo
    // hasheada antes de salvar. Também é preciso validação/escape dos dados.
    // Prepara a consulta SQL para inserir os dados no banco
    $stmt = $conn->prepare("INSERT INTO usuarios (nome, sobrenome, email, senha, telefone, usuario) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $nome, $sobrenome, $email, $senha, $telefone, $usuario);

    // Executa a consulta
    if ($stmt->execute()) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro ao cadastrar usuário: " . $stmt->error;
    }

 ## Dicas de Segurança

 - Nunca usa senha em Texto.

 - Nunca Usar Metodo Get ***(Não Passar As Informações via URL)***.

 - 
