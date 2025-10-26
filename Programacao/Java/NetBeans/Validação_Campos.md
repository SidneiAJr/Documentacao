# 🧠 Tutorial — Validação de Campos no Java Swing

## 🎯 Objetivo
Aprender a verificar se os campos de entrada (como `JTextField` ou `JPasswordField`) estão **preenchidos corretamente** antes de executar uma ação (ex: salvar, enviar, calcular).

---

## 🧩 Exemplo Prático
```java
private void btnSalvarActionPerformed(java.awt.event.ActionEvent evt) {
    String nome = txtNome.getText();
    String email = txtEmail.getText();
    String senha = new String(txtSenha.getPassword());

    if (nome.isEmpty() || email.isEmpty() || senha.isEmpty()) {
        JOptionPane.showMessageDialog(null, "⚠️ Preencha todos os campos obrigatórios!");
    } else {
        JOptionPane.showMessageDialog(null, "✅ Dados salvos com sucesso!");
    }
}
```
## Exemplo com Validação Numérica
```java
try {
    int idade = Integer.parseInt(txtIdade.getText());
    if (idade < 0) {
        JOptionPane.showMessageDialog(null, "Idade inválida!");
    } else {
        JOptionPane.showMessageDialog(null, "Idade registrada: " + idade);
    }
} catch (NumberFormatException e) {
    JOptionPane.showMessageDialog(null, "Digite apenas números na idade!");
}
```

---

## 🖱️ **2️⃣ Eventos de Botões e Atalhos no Java Swing**

```markdown
# 🖱️ Tutorial — Eventos de Botões e Atalhos no Java Swing

## 🎯 Objetivo
Aprender como **criar eventos para botões** e **definir atalhos de teclado** em uma aplicação Swing.

---

## 🧩 Evento de Clique em Botão
```java
btnCalcular.addActionListener(new ActionListener() {
    @Override
    public void actionPerformed(ActionEvent e) {
        JOptionPane.showMessageDialog(null, "Botão clicado!");
    }
});
