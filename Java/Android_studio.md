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

## 🛠️ Configuração de Emuladores Android

Uma das grandes vantagens do Android Studio é o Emulador Android, que permite testar seus aplicativos sem precisar de um dispositivo físico.

Passo 1: Criar um AVD (Android Virtual Device)

Clique em Tools > AVD Manager.

Clique em Create Virtual Device.

Selecione o dispositivo que você deseja emular (por exemplo, Pixel 3).

Selecione a versão do Android (recomendo usar a versão mais recente).

Clique em Finish para criar o emulador.

Passo 2: Executar o Projeto no Emulador

Quando o emulador estiver configurado, basta clicar em Run ou pressionar Shift + F10 para executar o aplicativo no emulador Android.


## Exemplo de Aplicação 2:

```Java
package com.example.brabodemesa;

import android.os.Bundle;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

import androidx.activity.EdgeToEdge;
import androidx.appcompat.app.AppCompatActivity;
import androidx.core.graphics.Insets;
import androidx.core.view.ViewCompat;
import androidx.core.view.WindowInsetsCompat;

import org.w3c.dom.Text;

public class valac extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        EdgeToEdge.enable(this);
        setContentView(R.layout.activity_valac);
        ViewCompat.setOnApplyWindowInsetsListener(findViewById(R.id.main), (v, insets) -> {
            Insets systemBars = insets.getInsets(WindowInsetsCompat.Type.systemBars());
            v.setPadding(systemBars.left, systemBars.top, systemBars.right, systemBars.bottom);
            return insets;
        });
        EditText editTextvaloremp = findViewById(R.id.ed_valtotal);
        EditText editTextquantac = findViewById(R.id.ed_quant);
        Button buttoncalc = findViewById(R.id.btn_calculadora);
        TextView textViewsaida = findViewById(R.id.txt_saida);
        TextView textViewreal = findViewById(R.id.txt_real);

        buttoncalc.setOnClickListener(V->{
            String entradavalor = editTextvaloremp.getText().toString();
            String entradaquant = editTextquantac.getText().toString();
            if(!entradaquant.isEmpty()&&!entradavalor.isEmpty()){
                double entrada1 = Double.parseDouble(entradaquant);
                double entrada2 = Double.parseDouble(entradavalor);
                double res = entrada2/entrada1;
                double real = (entrada2/entrada1)*5.86;
                textViewsaida.setText(String.format("O Valor em Dolar será %.2f",res));
                textViewreal.setText(String.format("O Valor em Real será %.2f",real));
            }else {
                textViewsaida.setText("Favor Inserir corretamente");
            }
        });


    }
}
```

## Exemplo de codigo 3:

```Java
package com.example.calcauladoras;

import android.os.Bundle;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

import androidx.activity.EdgeToEdge;
import androidx.appcompat.app.AppCompatActivity;
import androidx.core.graphics.Insets;
import androidx.core.view.ViewCompat;
import androidx.core.view.WindowInsetsCompat;

public class custvida extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        EdgeToEdge.enable(this);
        setContentView(R.layout.activity_custvida);
        ViewCompat.setOnApplyWindowInsetsListener(findViewById(R.id.main), (v, insets) -> {
            Insets systemBars = insets.getInsets(WindowInsetsCompat.Type.systemBars());
            v.setPadding(systemBars.left, systemBars.top, systemBars.right, systemBars.bottom);
            return insets;
        });
        EditText valor1 = findViewById(R.id.ed_1);
        EditText valor2 = findViewById(R.id.ed_2);
        EditText valor3 = findViewById(R.id.ed_3);
        EditText valor4 = findViewById(R.id.ed_4);
        EditText valor5 = findViewById(R.id.ed_5);
        EditText valor6 = findViewById(R.id.ed_6);
        TextView saida1 = findViewById(R.id.saida_1);
        TextView saida2 = findViewById(R.id.saida_2);
        TextView saida3 = findViewById(R.id.saida_3);
        TextView saida4 = findViewById(R.id.saida_4);
        Button calculadora = findViewById(R.id.vf_c);

        calculadora.setOnClickListener(v->{
            String val1 = valor1.getText().toString();
            String val2 = valor2.getText().toString();
            String val3 = valor3.getText().toString();
            String val4 = valor4.getText().toString();
            String val5 = valor5.getText().toString();
            String val6 = valor6.getText().toString();
            if(!val1.isEmpty()&&!val2.isEmpty()&&!val3.isEmpty()&&!val4.isEmpty()&&!val5.isEmpty()&&!val6.isEmpty()){
                double vl1 = Double.parseDouble(val1);
                double vl2 = Double.parseDouble(val2);
                double vl3 = Double.parseDouble(val3);
                double vl4 = Double.parseDouble(val4);
                double vl5 = Double.parseDouble(val5);
                double vl6 = Double.parseDouble(val6);
                double resultado = vl1+vl2+vl3+vl4+vl5;
                double ano = resultado*12;
                double sobra = vl6-resultado;
                double perc = (resultado/vl6)*100;
                saida1.setText(String.format("Necessario para um 1 ano R$ %.2f",ano));
                saida2.setText(String.format("Valor Necessario R$ %.2f",resultado));
                saida3.setText(String.format("Sobra Salario R$ %.2f",sobra));
                saida4.setText(String.format("Percentual do salario %.2f%%",perc ));
            }else{
                saida1.setText("Favor Inserir Um Numero!");
            }
        });
    }
}
```
## 📚 Dicas Extras

Dart e Flutter: Embora você tenha mencionado que o foco é Java, vale notar que o Android Studio também oferece suporte completo para Flutter (utilizando Dart) para o desenvolvimento de aplicativos multiplataforma (iOS e Android).

Kotlin: O Kotlin é agora a linguagem oficial recomendada pelo Google para o desenvolvimento Android, e o Android Studio tem suporte completo para Kotlin, incluindo conversão de código Java para Kotlin.
