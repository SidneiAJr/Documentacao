# Diferença entre `Console.Write` e `Console.WriteLine` no C#

### **`Console.Write`**:

- **Função**: Imprime a saída no console sem adicionar uma quebra de linha no final.
- **Comportamento**: O cursor permanece na mesma linha após a impressão. Ou seja, se você usar vários `Console.Write` em sequência, os valores vão ser impressos na mesma linha, um ao lado do outro.

**Exemplo**:

```csharp
Console.Write("Olá");
Console.Write(" Mundo");
