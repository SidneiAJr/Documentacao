# 🐘Tutorial sobre PHP🐘

## 🤔PHP e uma linguagem fortemente tipada ***(Necessario usar ; Sempre)*** 🤔

- Exemplo de Hello Word:

```php
echo "Hello Word";
```

## Escrita PHP VS JS

- JS usasse let const e var.

- Php a variavel e dinamica e fracamente tipada.

## Exemplos em PHP:

```php
$nome = "Maria";    // String
$idade = 25;        // Inteiro
$altura = 1.75;     // Float
$ativo = true;      // Boolean
```

## Tipos de Variaveis:

- String: texto (exemplo: "Maria")

- Integer: números inteiros (exemplo: 25)

- Float (double): números decimais (exemplo: 1.75)

- Boolean: verdadeiro ou falso (true ou false)

- Array: conjunto de valores (exemplo: $arr = [1, 2, 3];)

- Object: objetos, que veremos na parte de POO

- NULL: variável sem valor

## Concatenação: 
```php
echo $nome . " " . $sobrenome; // Ana Silva
```
## Funções em PHP:
```php
function saudacao() {
    
    echo "Olá!";

}
```
## Condições:
```php
$idade = 18;
if ($idade >= 18) {
    echo "Você é maior de idade.";
} else {
    echo "Você é menor de idade.";
}
```
## Switch
```php
$cor = "vermelho";

switch ($cor) {
    case "azul":
        echo "Você escolheu azul!";
        break;
    case "vermelho":
        echo "Você escolheu vermelho!";
        break;
    default:
        echo "Cor não reconhecida.";
}
```

## Array 
```php
$frutas = ["maçã", "banana", "laranja"];
echo $frutas[1]; // Imprime "banana"
```

## Array Associativo( Objeto JS)
```php
$pessoa = [
    "nome" => "Maria",
    "idade" => 25,
    "cidade" => "São Paulo"
];
echo $pessoa["nome"]; // Imprime "Maria"
```

## Comandos Array
```php
// Contar o número de elementos
echo count($frutas);

// Adicionar elemento no final
array_push($frutas, "manga");

// Remover elemento do final
array_pop($frutas);

// Verificar se um valor existe no array
if (in_array("banana", $frutas)) {
    echo "Banana está na lista!";
}
```


