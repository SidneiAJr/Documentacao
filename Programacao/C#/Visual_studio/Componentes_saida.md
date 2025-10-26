## 🖥️ **3️⃣ Tutorial — Componentes de Saída no Visual Studio**

# 🖥️ Tutorial — Componentes de Saída no Visual Studio (C#)

## 🎯 Objetivo
Entender e usar os **componentes que exibem informações** ao usuário em um formulário Windows Forms.

---

## 🔹 Principais Componentes

| Componente | Função | Exemplo de Uso |
|-------------|--------|----------------|
| `Label` | Exibir texto fixo ou dinâmico | `lblMensagem.Text = "Sucesso!";` |
| `TextBox` | Pode mostrar resultados simples | `txtResultado.Text = "Total = 25";` |
| `ListBox` | Exibir lista de resultados | `lstNomes.Items.Add("Maria");` |
| `MessageBox` | Mostrar mensagens pop-up | `MessageBox.Show("Operação concluída!");` |
| `RichTextBox` | Exibir textos longos ou formatados | `rtbSaida.Text = "Relatório de vendas...";` |

---

## 💡 Exemplo
```csharp
double media = (nota1 + nota2) / 2;
lblResultado.Text = "Média: " + media.ToString("F1");
MessageBox.Show("Cálculo concluído!");
```
