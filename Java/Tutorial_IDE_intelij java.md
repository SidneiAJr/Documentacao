# ☕ O que é o Java JDK?

O Java Development Kit (JDK) é o kit oficial para desenvolvimento Java, que inclui o compilador, bibliotecas e ferramentas necessárias para criar, compilar e executar programas Java.

Para programar em Java, você precisa ter o JDK instalado no seu computador.

Você pode baixar o JDK oficial da Oracle em:
https://www.oracle.com/java/technologies/javase-jdk17-downloads.html

## 📘 Tutorial de Instalação do IntelliJ IDEA para Java

IntelliJ IDEA é uma IDE poderosa e popular para desenvolvimento em Java, Kotlin e outras linguagens.

Download do IntelliJ IDEA: https://www.jetbrains.com/idea/download/

## 🛠️ Etapas de Instalação

Baixe o instalador no link acima (recomendo a versão Community, gratuita).

Execute o instalador e siga as instruções padrão.

Abra o IntelliJ IDEA após a instalação.

## 🚀 Criando um Projeto Java

Na tela inicial, clique em "New Project".

Escolha Java no menu lateral.

Certifique-se de que o JDK está configurado (se não estiver, pode adicionar um JDK instalado no seu PC).

Clique em Next e depois Finish.

## 🧩 Explorando o Editor

O painel à esquerda é o Project Explorer, onde ficam os arquivos do projeto.

A área central é o editor de código.

Na parte inferior, você encontra o console, erros, e ferramentas de execução.

## ⌨️ Atalhos de Teclado Úteis no IntelliJ IDEA

| Ação                  | Atalho (Windows/Linux) | Atalho (macOS)      |
|-----------------------|------------------------|---------------------|
| Executar o Projeto    | `Shift + F10`          | `Ctrl + R`          |
| Construir Projeto     | `Ctrl + F9`            | `Cmd + F9`          |
| Comentar/Descomentar  | `Ctrl + /`             | `Cmd + /`           |
| Format Code           | `Ctrl + Alt + L`       | `Cmd + Option + L`  |
| Navegar para Classe   | `Ctrl + N`             | `Cmd + O`           |

## Exemplo de codigo:

```Java
package Saudacao;
import javax.swing.JOptionPane;


public class Swing {
     public static  void main (String[] args){
         String Nome = JOptionPane.showInputDialog("Qual é seu Nome do Aluno? ");
         String Turma = JOptionPane.showInputDialog("Turma: ");
         String idade = JOptionPane.showInputDialog("Idade: ");
         int id = Integer.parseInt(idade);
         JOptionPane.showMessageDialog(
           null,
           " Ola " + Nome+ " Turma "+ Turma + " Idade " + id ,
                 "Boas vindas ",
                 JOptionPane.INFORMATION_MESSAGE
         );

     }
}
```
