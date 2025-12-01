# 📚 Formatação de Saídas em PHP

## Impressão Simples com echo

No PHP, o comando echo é utilizado para exibir informações na tela. É o método mais básico e usado frequentemente.

```php
$nome = "João";
$idade = 25;
echo "Nome: $nome, Idade: $idade";  // Saída: Nome: João, Idade: 25
```

## Concatenando Strings com echo

Você também pode concatenar variáveis e strings usando o operador de ponto (.).

```php
$nome = "João";
$idade = 25;
echo "Nome: " . $nome . ", Idade: " . $idade;  // Saída: Nome: João, Idade: 25
```

## Impressão com Formatação Usando sprintf()
```php
$preco = 99.99;
echo sprintf("Preço formatado: R$ %.2f", $preco);  // Saída: Preço formatado: R$ 99.99
```

## Impressão com Formatação de Inteiros usando sprintf()
```php
$numero = 5;
echo sprintf("Número com 3 dígitos: %03d", $numero);  // Saída: Número com 3 dígitos: 005
```

## Multiplicação e Outras Operações com Saídas Formatadas
```php
$valor1 = 5.75;
$valor2 = 2.50;
$resultado = $valor1 * $valor2;
echo sprintf("Multiplicação: %.2f", $resultado);  // Saída: Multiplicação: 14.38
```

## Subtração e Formatação de Resultados
```php
$valor1 = 10.50;
$valor2 = 3.25;
$resultado = $valor1 - $valor2;
echo sprintf("Subtração: %.2f", $resultado);  // Saída: Subtração: 7.25
```

## Formatando com print
```php
$nome = "João";
$idade = 25;
print "Nome: $nome, Idade: $idade";  // Saída: Nome: João, Idade: 25
```

## Uso de print_r() para Arrays
```php
$usuarios = [
    'nome' => 'João',
    'idade' => 25,
    'email' => 'joao@exemplo.com'
];

print_r($usuarios);
/* Saída:
Array
(
    [nome] => João
    [idade] => 25
    [email] => joao@exemplo.com
)
*/
```

