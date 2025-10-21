# Codigo Comentado 

```php
<?php
// ---------------------------------------------------
// 🌊 HYDRO RS - Painel de Controle dos Níveis dos Rios
// ---------------------------------------------------

require_once "conex.php"; 
// Faz a conexão com o banco de dados (arquivo separado)

// ------------------------------------------
// 🔍 FILTRO POR CIDADE (opcional na URL)
// ------------------------------------------
$cidade_filtro = $_GET["cidade"] ?? "";

// ------------------------------------------
// ➕ INSERIR NOVO REGISTRO
// ------------------------------------------
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["inserir"])) {
    $sql = "INSERT INTO niveis_rios 
            (nome_rio, regiao, nivel_atual, subida_cm, atualizacao_em, cidade) 
            VALUES (?, ?, ?, ?, NOW(), ?)";
    
    $stmt = $con->prepare($sql);
    $stmt->bind_param(
        "ssdds",
        $_POST["nome_rio"],
        $_POST["regiao"],
        $_POST["nivel_atual"],
        $_POST["subida_cm"],
        $_POST["cidade"]
    );
    $stmt->execute();
    $stmt->close();

    header("Location: painel.php");
    exit;
}

// ------------------------------------------
// ❌ EXCLUIR REGISTRO EXISTENTE
// ------------------------------------------
if (isset($_GET["delete"])) {
    $id = intval($_GET["delete"]); // segurança básica
    $stmt = $con->prepare("DELETE FROM niveis_rios WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();

    header("Location: painel.php");
    exit;
}

// ------------------------------------------
// ✏️ MODO DE EDIÇÃO
// ------------------------------------------
$editar = false;
$dados_edicao = null;

if (isset($_GET["edit"])) {
    $editar = true;
    $id = intval($_GET["edit"]);

    $stmt = $con->prepare("SELECT * FROM niveis_rios WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $dados_edicao = $result->fetch_assoc();
    $stmt->close();
}

// ------------------------------------------
// 🔄 ATUALIZAR REGISTRO EXISTENTE
// ------------------------------------------
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["atualizar"])) {
    $sql = "UPDATE niveis_rios 
            SET nome_rio=?, regiao=?, nivel_atual=?, subida_cm=?, cidade=? 
            WHERE id=?";
    
    $stmt = $con->prepare($sql);
    $stmt->bind_param(
        "ssddsi",
        $_POST["nome_rio"],
        $_POST["regiao"],
        $_POST["nivel_atual"],
        $_POST["subida_cm"],
        $_POST["cidade"],
        $_POST["id"]
    );
    $stmt->execute();
    $stmt->close();

    header("Location: painel.php");
    exit;
}
?>
```
