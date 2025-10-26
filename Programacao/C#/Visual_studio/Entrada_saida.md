# 🎓 Tutorial de Entrada e Saída de Dados no Visual Studio (C# WinForms)

## 📘 Introdução
Em aplicações **Windows Forms** no **Visual Studio**, usamos **componentes visuais** para **receber** (entrada) e **exibir** (saída) informações do usuário.  
Esses componentes são equivalentes aos usados no Java Swing, mas pertencem ao namespace `System.Windows.Forms`.

---

## 🎯 Objetivo
Aprender a criar e manipular **componentes de entrada e saída** em um projeto **C# WinForms**:
- `TextBox`
- `Label`
- `Button`
- `MessageBox`
- `ListBox`
- `ComboBox`

---

## 🧱 Criando o Projeto

1. Abra o **Visual Studio**.  
2. Vá em **File → New → Project**.  
3. Selecione **Windows Forms App (.NET Framework)**.  
4. Dê um nome (ex: `PrimeiroForm`).  
5. Clique em **Create**.

---

## 🧩 Componentes de Entrada e Saída

### 🟢 1️⃣ TextBox — Entrada de Texto
Usado para **receber informações digitadas** pelo usuário.

```csharp
string nome = txtNome.Text;
```

| 🧩 **Componente** | 🎯 **Função**         | 💬 **Método Principal** | 📋 **Exemplo de Uso**     |
|--------------------|----------------------|--------------------------|---------------------------|
| `TextBox`          | Entrada de texto     | `.Text`                  | Nome, e-mail              |
| `Label`            | Exibir mensagens     | `.Text`                  | Resultado, status         |
| `Button`           | Executar ação        | `Click`                  | Botão Enviar              |
| `MessageBox`       | Mostrar pop-up       | `Show()`                 | Alertas, avisos           |
| `ComboBox`         | Seleção única        | `SelectedItem`           | Cores, categorias          |
| `ListBox`          | Lista de itens       | `SelectedItem`           | Itens de uma lista        |
