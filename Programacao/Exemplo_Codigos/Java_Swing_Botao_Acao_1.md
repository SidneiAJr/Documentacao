# Exemplo de Codigo de Botão
```Java
private void jButton1ActionPerformed(java.awt.event.ActionEvent evt) {                                         
    // Pegando o texto digitado no campo de usuário e removendo espaços extras
    String entrada = jt_usuario.getText().trim();

    // Convertendo a senha de char[] para String
    String senha = new String(jp_senha.getPassword());
    
    // Verifica se os campos não estão vazios
    if(!entrada.isEmpty() || !senha.isEmpty()){
        
        // Avalia o usuário informado
        switch(entrada){

            case "Dazai":
                // Verifica se a senha está correta
                if(senha.equals("Dazai")){
                    // Mensagem de boas-vindas
                    javax.swing.JOptionPane.showMessageDialog(
                        this,
                        "Bem vindo ao Sistema Dazai",
                        "Aviso!!",
                        javax.swing.JOptionPane.WARNING_MESSAGE
                    );   
                    // Mostra mensagem na interface
                    lb_saida.setText("Bem vindo Dazai"); 
                }

                // Abre a tela do usuário Dazai
                Dazai per1 = new  Dazai();
                per1.setVisible(true);
                break;

            case "Shimatsu":
                if(senha.equals("Shimatsu")){
                    javax.swing.JOptionPane.showMessageDialog(
                        this,
                        "Bem vindo ao Sistema Shimatsu",
                        "Aviso!!",
                        javax.swing.JOptionPane.WARNING_MESSAGE
                    );   
                    lb_saida.setText("Bem vindo Shimatsu");  
                }

                Shimatsu per2 = new  Shimatsu();
                per2.setVisible(true);
                break;

            case "Koko":
                if(senha.equals("Koko")){
                    javax.swing.JOptionPane.showMessageDialog(
                        this,
                        "Bem vindo ao Sistema Koko",
                        "Aviso!!",
                        javax.swing.JOptionPane.WARNING_MESSAGE
                    );   
                    lb_saida.setText("Bem vindo Koko");  
                }

                Koko per3 = new  Koko();
                per3.setVisible(true);
                break;

            default:
                // Se usuário ou senha inválidos
                javax.swing.JOptionPane.showMessageDialog(
                    this,
                    "FAVOR INFORMAR A SENHA E O USUARIO!!",
                    "Aviso!!",
                    javax.swing.JOptionPane.WARNING_MESSAGE
                );   
                break;
        }
    }
```
## Botão "Limpar" (Resetar campos)
```java
private void jButton3ActionPerformed(java.awt.event.ActionEvent evt) {                                         
    // Limpa os campos de usuário e senha
    jp_senha.setText("");
    jt_usuario.setText("");
}
```

## Botão "Cancelar" (voltar pra tela de login)

```java
private void jButton2ActionPerformed(java.awt.event.ActionEvent evt) {                                         
    // Fecha a tela atual
    this.dispose();

    // Abre a tela de login novamente
    new Login_classe().setVisible(true);
}
}
```

## 📘 Explicação do Código 
🎯 Objetivo

Esse código implementa a lógica de um formulário de login com Java Swing, validando usuário e senha e abrindo telas diferentes conforme o usuário autenticado.

✅ Funcionalidades

Captura usuário e senha da interface

Valida credenciais via switch

Exibe mensagens com JOptionPane

Abre janelas específicas para cada usuário

Botão para limpar os campos

Botão para cancelar e voltar ao login

🧠 Conceitos Aplicados

Programação orientada a eventos (ActionListener)

Manipulação de componentes Swing (JTextField, JPasswordField)

Estrutura de decisão switch

Instanciação de janelas em Java GUI

🚨 Observações Técnicas

Está usando autenticação fixa (hardcoded) — bom para estudo


