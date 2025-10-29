# 🧩 Captura de Texto com QLineEdit no Qt Creator
🎯 Objetivo

Criar um campo de entrada de texto utilizando QLineEdit no Qt Creator, para capturar informações do usuário e exibir em outro widget, como um QLabel ou em uma caixa de mensagem.

## 1️⃣ Criando um Projeto no Qt Creator

Abra o Qt Creator.

Crie um novo projeto: File → New Project → Application → Qt Widgets Application.

Defina o nome e o diretório do seu projeto e clique em Next até terminar.

## 2️⃣ Adicionando o QLineEdit e o QLabel

Após a criação do projeto, vamos modificar a interface para adicionar um campo de texto (QLineEdit) e um rótulo (QLabel) que irá exibir o texto digitado.

Abra o arquivo mainwindow.ui no Qt Designer.

Na paleta de widgets à esquerda, procure por QLineEdit e arraste-o para a janela principal.

Adicione também um QLabel para mostrar o texto digitado.

Ajuste o layout, se necessário, para uma boa visualização.

## 3️⃣ Escrevendo o Código

Agora, vamos editar o arquivo mainwindow.cpp para capturar o texto inserido no QLineEdit e exibi-lo no QLabel.

```c++
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
