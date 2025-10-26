# 🧠 Introdução ao C++

C++ é uma linguagem poderosa, de alto desempenho e controle total sobre memória — essencial no desenvolvimento de **jogos, sistemas embarcados e engines**.

---

## 📦 Estrutura básica de um programa C++

```cpp
#include <iostream>
using namespace std;

int main() {
    cout << "Olá, C++!" << endl;
    return 0;
}
```

## 🧩 Explicação:

#include <iostream> → adiciona a biblioteca de entrada/saída

- using namespace std; → permite usar cout, cin, endl sem prefixo

- int main() → ponto de entrada do programa

- cout → saída (exibe informações no console)

- endl → quebra de linha

return 0 → encerra o programa com sucesso

```cpp
int a = 10, b = 5;
cout << a + b << endl; // soma
cout << a - b << endl; // subtração
cout << a * b << endl; // multiplicação
cout << a / b << endl; // divisão
cout << a % b << endl; // resto
```

##IF/Else
```cpp
if (a > b) {
    cout << "A é maior que B" << endl;
} else {
    cout << "B é maior ou igual a A" << endl;
}
