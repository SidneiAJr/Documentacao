# 🧠 Tutorial de Componentes de Saída no NetBeans (Java Swing)

## 📘 Introdução
Neste tutorial, você vai aprender sobre os principais **componentes de saída** usados em **Java Swing**, dentro do **NetBeans IDE**.  
Esses componentes servem para **mostrar informações, mensagens ou resultados** ao usuário.

---

## 🏷️ 1. JLabel

### 💡 O que é
O `JLabel` é um rótulo de texto usado para **mostrar informações simples** na tela.

### 🧩 Exemplo
```java
JLabel label = new JLabel("Resultado:");
label.setText("Soma = 10");
```

### JTextArea
💡 O que é

O JTextArea é uma área de texto com múltiplas linhas, usada para exibir textos longos (mensagens, relatórios, logs, etc.).

### JTextField
💡 O que é

O JTextField é geralmente usado para entrada de texto, mas também pode ser usado para mostrar resultados curtos (uma única linha).

### JOptionPane
💡 O que é

O JOptionPane é usado para mostrar mensagens em janelas pop-up.
Perfeito para avisos, erros ou confirmações.

### JTable
💡 O que é

O JTable serve para mostrar dados organizados em linhas e colunas, como uma planilha ou tabela de resultados.

### 7. JTextPane e JEditorPane
💡 O que são

Esses componentes são versões mais avançadas do JTextArea.
Eles permitem formatação de texto (cores, negrito, HTML, etc.).
