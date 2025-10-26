# 🪟 Alterar Ícone e Título da Janela (Swing & JavaFX)

## 🎯 Objetivo
Aprender a mudar o **título** da janela e adicionar um **ícone personalizado** na aplicação.

---

## 🧩 Swing

### 📝 Exemplo
```java
import javax.swing.*;

public class JanelaIcone {
    public static void main(String[] args) {
        JFrame frame = new JFrame("Minha Primeira Janela");
        frame.setSize(400, 300);
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);

        // Define o título
        frame.setTitle("Sistema Financeiro 💰");

        // Define o ícone
        ImageIcon icone = new ImageIcon("src/imagens/logo.png");
        frame.setIconImage(icone.getImage());

        frame.setVisible(true);
    }
}
```

```java
import javafx.application.Application;
import javafx.scene.Scene;
import javafx.scene.image.Image;
import javafx.stage.Stage;

public class JanelaFX extends Application {
    @Override
    public void start(Stage stage) {
        stage.setTitle("Tela Principal 🪙");
        stage.getIcons().add(new Image("file:src/imagens/icon.png"));
        stage.setScene(new Scene(new javafx.scene.layout.StackPane(), 400, 300));
        stage.show();
    }

    public static void main(String[] args) {
        launch();
    }
}
```


---

## 🖼️ **2️⃣ Inserir Imagens e Ícones em Botões**


# 🖼️ Inserir Imagens e Ícones em Botões

## 🎯 Objetivo
Aprender a adicionar **ícones e imagens** em botões (`JButton` no Swing e `Button` no JavaFX).

---

## 🧩 Swing

```java
import javax.swing.*;
import java.awt.*;

public class BotoesComIcone {
    public static void main(String[] args) {
        JFrame frame = new JFrame("Botão com Ícone");
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        frame.setSize(300, 200);

        JButton botao = new JButton("Salvar");
        botao.setIcon(new ImageIcon("src/imagens/save.png"));
        botao.setHorizontalTextPosition(SwingConstants.RIGHT);

        frame.setLayout(new FlowLayout());
        frame.add(botao);
        frame.setVisible(true);
    }
}
```
