# 📱 O que é o Android Studio?

O Android Studio é a IDE oficial para o desenvolvimento de aplicativos Android, suportando Java, Kotlin, Dart (Flutter) e outras linguagens. Ele oferece ferramentas de desenvolvimento, como o emulador Android, gerenciador de dispositivos virtuais, e a integração com o Gradle, que automatiza a construção do seu projeto.

## 🛠️ Etapas de Instalação

Aqui vai um tutorial detalhado sobre como instalar o Android Studio.

Passo 1: Baixar o Android Studio

Acesse o site oficial
 e baixe a versão mais recente do Android Studio compatível com o seu sistema operacional (Windows, macOS, Linux).

Passo 2: Instalar a IDE

Execute o instalador e siga as instruções na tela. Durante a instalação, o Android Studio irá configurar o JDK (Java Development Kit) e o Android SDK, essenciais para o desenvolvimento de aplicativos Android.

Passo 3: Configurar a VM do Android

## 🚀 Criando um Projeto Android com Java
Passo 1: Criar Novo Projeto

Após abrir o Android Studio, clique em Start a new Android Studio project.

Selecione um template de projeto (ex: Empty Activity).

Escolha o nome do aplicativo e o diretório do projeto.

Escolha Java como a linguagem de programação.

Selecione a versão mínima do SDK Android (geralmente, a mais baixa possível para garantir maior compatibilidade).

Passo 2: Estrutura do Projeto

O projeto será criado com uma estrutura básica de arquivos:

MainActivity.java – O ponto de entrada do aplicativo.

activity_main.xml – O layout XML da tela principal.

AndroidManifest.xml – Contém as permissões e configurações do aplicativo.

Passo 3: Escrever o Código em Java

Aqui está um exemplo simples de MainActivity.java:

## Exemplo de codigo em Java

```Java
package com.exemplo.meuapp;

import android.os.Bundle;
import android.widget.Toast;
import androidx.appcompat.app.AppCompatActivity;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        // Exemplo simples de exibição de mensagem
        Toast.makeText(this, "Bem-vindo ao Meu App!", Toast.LENGTH_SHORT).show();
    }
}
```
