<?php

interface VerificarBanco {
    public function banco();
    public function acesso();
    public function testar_banco();
}

class Banco implements VerificarBanco {

    private string $nomebanco;
    private string $user;
    private string $password;
    private string $porta;

    public function __construct(string $nomebanco, string $user, string $password, string $porta)
    {
        $this->nomebanco = $nomebanco;
        $this->user = $user;
        $this->password = $password;
        $this->porta = $porta;
    }

    public function banco()
    {
        if ($this->nomebanco === "") {
            echo "Banco não encontrado!" . PHP_EOL;
        } else {
            echo "Banco encontrado: {$this->nomebanco}" . PHP_EOL;
        }
    }

    public function acesso()
    {
        if ($this->user === "" || $this->password === "") {
            echo "Erro: informe usuário e senha!" . PHP_EOL;
        } else {
            echo "Acesso OK — usuário informado." . PHP_EOL;
        }
    }

    public function testar_banco()
    {
        # Configurações
$host   = "localhost";
$banco  = "nome_banco";
$porta  = "3306";  # Porta padrão do MySQL
$user   = "nome_usuario";
$senha  = "senha_banco";

# Verificação simples das variáveis
if ($banco && $user && $senha) {
    echo "Verificação de credenciais: OK" . PHP_EOL;
} else {
    die("Erro: informações incompletas.");
}

# Conexão com mysqli
$con = new mysqli($host, $user, $senha, $banco, $porta);

# Verifica erro de conexão
if ($con->connect_error) {
    error_log("Erro de conexão: " . $con->connect_error);
    http_response_code(500);
    die("Erro interno. Tente novamente mais tarde.");
}

# Define charset
$con->set_charset("utf8mb4");

echo "Conectado ao banco com sucesso!";
    }
function limparEntrada($valor) {
    return htmlspecialchars(trim($valor), ENT_QUOTES, 'UTF-8');
}

}

?>
