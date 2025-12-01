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


