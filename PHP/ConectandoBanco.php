# Tutorial de conexção em banco em php:

''
<?php

// Conexão segura
$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'hidrografia_rs';

$con = new mysqli($host, $usuario, $senha, $banco);

// Tratamento de erro genérico
if ($con->connect_error) {
    error_log("Erro de conexão: " . $con->connect_error);
    http_response_code(500);
    die("Erro interno. Tente novamente mais tarde.");
}

// Força charset seguro para evitar problemas com dados especiais
$con->set_charset("utf8mb4");

// Protege contra SQL Injection em toda a aplicação
function limparEntrada($valor) {
    return htmlspecialchars(trim($valor), ENT_QUOTES, 'UTF-8');
}
?>
''
