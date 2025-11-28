# PHP | Filtros de Sanitização e Validação

PHP fornece uma série de filtros para sanitizar e validar dados, garantindo que as informações recebidas do usuário estejam no formato esperado e sejam seguras. A função **`filter_var()`** é uma das formas mais comuns de aplicar esses filtros.

---

## 📥 **Filtros de Sanitização**

A sanitização de dados é o processo de remover caracteres indesejados, garantindo que os dados estejam no formato esperado. A função `FILTER_SANITIZE_*` é usada para esse propósito.

### **`FILTER_SANITIZE_EMAIL`**

- Sanitiza um endereço de e-mail removendo caracteres inválidos.

**Exemplo**:
```php
$email = filter_var("teste@exemplo!.com", FILTER_SANITIZE_EMAIL);
echo $email; // Exibe "teste@exemplo.com"
````

### FILTER_SANITIZE_URL

- Sanitiza uma URL, removendo caracteres inválidos.
```php
$url = filter_var("http://www.exemplo<.com", FILTER_SANITIZE_URL);
echo $url; // Exibe "http://www.exemplo.com"
```

### FILTER_SANITIZE_STRING (obsoleto em PHP 8.1.0)

- Sanitiza uma string, removendo tags HTML e PHP, além de caracteres especiais.
```php
$string = filter_var("<h1>Olá, Mundo!</h1>", FILTER_SANITIZE_STRING);
echo $string; // Exibe "Olá, Mundo!"
```

### FILTER_SANITIZE_NUMBER_INT

- Sanitiza uma string para permitir apenas números inteiros, removendo qualquer outro caractere.
```php
$number = filter_var("123abc456", FILTER_SANITIZE_NUMBER_INT);
echo $number; // Exibe "123456"
```

### FILTER_SANITIZE_NUMBER_FLOAT
- Sanitiza uma string para permitir apenas números de ponto flutuante (float), removendo caracteres indesejados.
```php
$float = filter_var("123.45abc", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
echo $float; // Exibe "123.45"
```

### FILTER_SANITIZE_SPECIAL_CHARS
- Sanitiza uma string convertendo caracteres especiais em entidades HTML.
```php
$string = filter_var("<h1>Test & Test</h1>", FILTER_SANITIZE_SPECIAL_CHARS);
echo $string; // Exibe "&lt;h1&gt;Test &amp; Test&lt;/h1&gt;"
```

### FILTER_SANITIZE_FULL_SPECIAL_CHARS
- Similar ao FILTER_SANITIZE_SPECIAL_CHARS, mas converte também o caractere de aspas simples (') e dupla (").
```php
$string = filter_var("<script>alert('XSS')</script>", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
echo $string; // Exibe "&lt;script&gt;alert(&#039;XSS&#039;)&lt;/script&gt;"
```

### FILTER_VALIDATE_EMAIL
- A validação é o processo de garantir que os dados atendem a um formato específico, como se o e-mail tem o formato correto ou se o número é válido.
```php
$email = filter_var("teste@exemplo.com", FILTER_VALIDATE_EMAIL);
if ($email) {
    echo "E-mail válido!";
} else {
    echo "E-mail inválido!";
}
```

### FILTER_VALIDATE_URL
- Valida uma URL.
```php
$url = filter_var("http://www.exemplo.com", FILTER_VALIDATE_URL);
if ($url) {
    echo "URL válida!";
} else {
    echo "URL inválida!";
}
```




  
