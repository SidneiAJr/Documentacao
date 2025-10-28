# 🖼️ Tutorial — Inserir Imagens e Ícones em Botões (Swing e JavaFX)

## 🎯 Objetivo
Aprender a adicionar **ícones e imagens** em botões (`JButton` no **Swing** e `Button` no **JavaFX**) para deixar sua interface mais visual e profissional.

---

## ☕ 1️⃣ Botões com Ícone no **Java Swing**

O Swing permite adicionar imagens aos botões usando a classe `ImageIcon`.

### 🧩 Exemplo Completo
```java
import javax.swing.*;
import java.awt.*;

public class BotaoComIconeSwing {
    public static void main(String[] args) {
        // Cria a janela principal
        JFrame frame = new JFrame("Botão com Ícone");
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        frame.setSize(300, 200);
        frame.setLayout(new FlowLayout());

        // Cria o botão com texto
        JButton botao = new JButton("Salvar");

        // Adiciona o ícone ao botão
        botao.setIcon(new ImageIcon("src/imagens/save.png"));

        // Define a posição do texto em relação ao ícone
        botao.setHorizontalTextPosition(SwingConstants.RIGHT);
        botao.setVerticalTextPosition(SwingConstants.CENTER);

        // Adiciona o botão à janela
        frame.add(botao);
        frame.setVisible(true);
    }
}
