# 🧠 Tutorial de Memória em C
🎯 Objetivo

Aprender como a memória funciona em C, incluindo variáveis, ponteiros e alocação dinâmica, conceitos essenciais para programação avançada e sistemas operacionais.

## Tipos de Variáveis e Memória

C organiza a memória em 3 partes principais:

***Stack (pilha) – para variáveis locais.***

***Heap (monte) – para memória alocada dinamicamente.***

***Data segment – para variáveis globais e estáticas.***

```C
#include <stdio.h>

int global = 100; // Data segment

int main() {
    int local = 50; // Stack
    printf("Global: %d, Local: %d\n", global, local);
    return 0;
}

```

Ponteiros (o coração da memória em C)

Um ponteiro é uma variável que guarda o endereço de memória de outra variável.
```C
#include <stdio.h>

int main() {
    int x = 10;
    int *ptr = &x;  // &x é o endereço de x
    printf("Valor de x: %d\n", *ptr); // *ptr acessa o valor
    printf("Endereço de x: %p\n", ptr);
    return 0;
}
```

*ptr → valor no endereço.

&x → endereço de x.

