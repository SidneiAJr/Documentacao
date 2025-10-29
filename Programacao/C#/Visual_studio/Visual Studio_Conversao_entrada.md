# 🔢 Tutorial — Métodos de Conversão no Visual Studio (C#)

## 🎯 Objetivo
Aprender a converter valores entre diferentes tipos de dados em **C#**, algo essencial para lidar com campos de texto (`TextBox`) e cálculos numéricos.

---

## 🔄 Principais Métodos de Conversão

| Método | Função | Exemplo |
|--------|--------|----------|
| `Convert.ToInt32()` | Converte para inteiro | `int idade = Convert.ToInt32(txtIdade.Text);` |
| `Convert.ToDouble()` | Converte para decimal | `double valor = Convert.ToDouble(txtValor.Text);` |
| `Convert.ToString()` | Converte para texto | `lblResultado.Text = Convert.ToString(resultado);` |
| `int.Parse()` | Converte texto em inteiro | `int numero = int.Parse(txtNumero.Text);` |
| `double.Parse()` | Converte texto em double | `double preco = double.Parse(txtPreco.Text);` |
| `ToString("F2")` | Formata número com 2 casas decimais | `lblValor.Text = total.ToString("F2");` |

---

## 💡 Exemplo Completo
```csharp
double valor1 = Convert.ToDouble(txtValor1.Text);
double valor2 = Convert.ToDouble(txtValor2.Text);
double soma = valor1 + valor2;
lblResultado.Text = soma.ToString("F2");
```
