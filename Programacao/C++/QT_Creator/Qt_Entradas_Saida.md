# 🧩 Captura de Texto com QLineEdit no Qt Creator (C++)

## 🎯 Objetivo
Criar um **campo de entrada de texto** utilizando `QLineEdit` no **Qt Creator**, para capturar informações do usuário e exibi-las em outro widget — como um `QLabel` ou em uma **caixa de mensagem**.

---

## 🏗️ 1️⃣ Criando o Projeto no Qt Creator

1. Abra o **Qt Creator**.  
2. Vá em **File → New Project → Application → Qt Widgets Application**.  
3. Defina o **nome** e o **diretório** do projeto.  
4. Clique em **Next** até finalizar a criação.  

💡 *Dica:* Mantenha o nome padrão dos arquivos (`mainwindow.h`, `mainwindow.cpp`, `mainwindow.ui`) — isso facilita o vínculo com o `Ui::MainWindow`.

---

## 🧱 2️⃣ Adicionando o QLineEdit e o QLabel

Agora, vamos montar a interface.

1. Abra o arquivo **`mainwindow.ui`** no **Qt Designer**.  
2. Na paleta de widgets, localize **QLineEdit** e arraste para a janela principal.  
3. Adicione também um **QLabel** — ele exibirá o texto digitado.  
4. (Opcional) Adicione um **QPushButton** para capturar o evento de clique.  
5. Ajuste o **layout** (use `QVBoxLayout` ou `QGridLayout`) para organizar os elementos.  

🧩 Estrutura recomendada:


---

## 💻 3️⃣ Escrevendo o Código (mainwindow.cpp)

Agora, vamos editar o código para capturar o texto do `QLineEdit` e exibir no `QLabel`.

```cpp
#include "mainwindow.h"
#include "ui_mainwindow.h"
#include <QMessageBox>

MainWindow::MainWindow(QWidget *parent)
    : QMainWindow(parent)
    , ui(new Ui::MainWindow)
{
    ui->setupUi(this);

    // Conectar o botão ao evento de capturar o texto
    connect(ui->pushButton, &QPushButton::clicked, this, &MainWindow::on_pushButton_clicked);
}

MainWindow::~MainWindow()
{
    delete ui;
}

void MainWindow::on_pushButton_clicked()
{
    // Capturar o texto do QLineEdit
    QString inputText = ui->lineEdit->text();

    // Exibir o texto no QLabel
    ui->label->setText("Texto digitado: " + inputText);

    // Exemplo de caixa de mensagem (opcional)
    QMessageBox::information(this, "Texto Capturado", "Você digitou: " + inputText);
}
```

| Widget      | Object Name  |
| :---------- | :----------- |
| QLineEdit   | `lineEdit`   |
| QLabel      | `label`      |
| QPushButton | `pushButton` |

