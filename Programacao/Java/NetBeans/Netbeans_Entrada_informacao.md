# 🎓 Tutorial de Entrada no NetBeans (Java Swing)

## 📘 Introdução
Em uma aplicação gráfica Java, os **componentes de entrada** são usados para **receber informações do usuário**.  
No **NetBeans**, esses componentes fazem parte da biblioteca **Swing** e podem ser adicionados facilmente por meio do **Editor Visual (Design)**.

---

## 🎯 Objetivo
Aprender a usar os principais componentes de **entrada de dados** no NetBeans:
- `JTextField`
- `JPasswordField`
- `JTextArea`
- `JComboBox`
- `JRadioButton`
- `JCheckBox`
- `JSpinner`
- `JFileChooser`

---

## 🪟 Criando o Projeto

1. Abra o **NetBeans IDE**.
2. Vá em **File → New Project → Java → Java Application**.
3. Dê um nome (ex: `ExemploEntradaSwing`).
4. Clique em **Finish**.

---

## 🧩 Componentes de Entrada

### 1️⃣ JTextField — Campo de Texto
Usado para **entrada de texto simples (uma linha)**.

**Exemplo:**
```java
JTextField campoNome = new JTextField();
String nome = campoNome.getText(); // lê o texto digitado
