# PHP | Tutorial de Função:

# 🧩 Tipos de Funções em PHP

Em PHP, as funções podem ser definidas de várias maneiras, dependendo do contexto e do comportamento desejado. Abaixo, veremos os principais tipos de funções em PHP.

---

## 📥 `Função Simples`

Uma **função simples** é aquela que é definida para executar uma tarefa específica e não recebe parâmetros ou retorna valores, ou então pode retornar um valor simples.

### Exemplo:

```php
function saudacao() {
    echo "Olá, mundo!";
}
saudacao(); // Chama a função e exibe "Olá, mundo!"
```

### Função com Parâmetros:
- Funções com parâmetros são aquelas que recebem valores externos para serem processados dentro delas.

```php
function somar($a, $b) {
    return $a + $b;
}

$resultado = somar(5, 3); // Chama a função com os parâmetros 5 e 3
echo $resultado; // Exibe "8"
```
---

### Função com Valor Padrão:

- Você pode definir um valor padrão para os parâmetros de uma função. Isso significa que, se o parâmetro não for passado ao chamar a função, o valor padrão será utilizado.

Exemplo:

```php
function saudacao($nome = "Visitante") {
    echo "Olá, $nome!";
}

saudacao("João");  // Exibe "Olá, João!"
saudacao();        // Exibe "Olá, Visitante!" (valor padrão)
```



