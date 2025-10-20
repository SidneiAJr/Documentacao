# ☕ Tutorial de JavaFX no NetBeans

Este guia explica, passo a passo, como criar e executar um projeto JavaFX utilizando o **NetBeans**.

---

## 🔧 Pré-requisitos

- Tenha o **NetBeans** instalado.  
- Certifique-se de ter o **Java JDK** compatível com JavaFX (versão 8 ou superior).

---

## 🚀 Passo a Passo

### 1. Abrir o NetBeans
Abra o software **NetBeans** no seu computador.

---

### 2. Criar um novo projeto
- Vá em **File → New Project**  
- Selecione **JavaFX Application** (ou **Java Application**, se for usar manualmente os módulos JavaFX)  
- Clique em **Next**, dê um nome ao projeto e finalize em **Finish**.

---

### 3. Criar o Formulário JavaFX
- No painel de projetos, clique com o botão direito sobre o pacote principal.  
- Selecione **New → Other → JavaFX → FXML Document** (ou Java Form, dependendo da versão).  
- Dê um nome ao arquivo, por exemplo: `TelaPrincipal.fxml`.

---

### 4. Montar a Interface Gráfica
- Abra o arquivo `.fxml` no **Scene Builder** (ou diretamente no editor visual do NetBeans).  
- **Arraste** e **solte** os componentes que desejar, como:
  - `TextField` (campo de texto)
  - `Label` (rótulo)
  - `Button` (botão)

---

### 5. Fazer a Programação
- No arquivo **Controller** (gerado junto com o FXML), escreva o código Java que controla os eventos.  
  Exemplo simples:

  ```java
  @FXML
  private TextField inputNome;
  
  @FXML
  private Label lblSaida;
  
  @FXML
  private void exibirMensagem() {
      String nome = inputNome.getText();
      lblSaida.setText("Olá, " + nome + "!");
  }
  ```

## 6. Compilar e Testar

Pressione Shift + F6 para executar o projeto.

O JavaFX abrirá a janela da sua aplicação.


## 7. Gerar o Build

Clique no ícone de vassoura (Build Project) ou pressione F11.

Isso cria os arquivos necessários para distribuir o programa.

## 8. Ajustar o MANIFEST.MF

Vá até a pasta:
