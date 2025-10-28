# Tutorial de Saídas em C

| Format Specifier | Tipo de dado                       | Exemplo de uso                           | Observação                          |
| ---------------- | ---------------------------------- | ---------------------------------------- | ----------------------------------- |
| `%d`             | Inteiro (`int`)                    | `int x = 10; printf("%d", x);`           | Para valores inteiros               |
| `%f`             | Ponto flutuante (`float`/`double`) | `double pi = 3.14159; printf("%f", pi);` | Por padrão imprime 6 casas decimais |
| `%.2f`           | Ponto flutuante com 2 casas        | `printf("%.2f", pi);`                    | Arredonda e mostra 2 casas decimais |
| `%.3f`           | Ponto flutuante com 3 casas        | `printf("%.3f", pi);`                    | Arredonda e mostra 3 casas decimais |
| `%c`             | Caractere (`char`)                 | `char letra = 'A'; printf("%c", letra);` | Um único caractere                  |
| `%s`             | String (`char[]`)                  | `char str[] = "Olá"; printf("%s", str);` | Para arrays de caracteres           |
| `%p`             | Ponteiro / endereço                | `int *ptr = &x; printf("%p", ptr);`      | Mostra o endereço de memória        |
