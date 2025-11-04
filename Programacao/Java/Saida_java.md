# Dicas e Truques de `printf` e `println` no Java

Aqui estão algumas dicas sobre como usar **`System.out.println()`** e **`System.out.printf()`** para formatar e exibir saídas no Java de maneira eficiente.

---

## 1️⃣ Saída formatada com mais controle (usando `printf`)

### Formatos adicionais para `printf`:
- **`%d`** → para **inteiros**.
- **`%f`** → para **números de ponto flutuante (float/double)**.
- **`%s`** → para **strings**.
- **`%c`** → para **caracteres**.
- **`%x`** → para **números em hexadecimal**.

**Exemplo de formatação mais complexa**:

```java
int numero = 100;
double valor = 45.6789;
String nome = "ChatGPT";

System.out.printf("Número: %d\n", numero);      // Saída: Número: 100
System.out.printf("Valor: %.2f\n", valor);      // Saída: Valor: 45.68
System.out.printf("Nome: %s\n", nome);          // Saída: Nome: ChatGPT
System.out.printf("Hexadecimal: %x\n", numero); // Saída: Hexadecimal: 64

```

