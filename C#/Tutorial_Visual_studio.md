# 📚Tutorial de Visual Studio 

## ⚠️1. Instalando o Visual Studio

Baixar o Visual Studio:

Acesse o site oficial: https://visualstudio.microsoft.com/

Escolha a versão que deseja baixar. Para iniciantes, recomendo a versão Community, que é gratuita.

Iniciar o Instalador:

Após o download, execute o instalador.

Escolha os componentes que você precisa. Por exemplo:

Desenvolvimento de aplicativos para desktop (.NET) para trabalhar com C# e Windows Forms.

Desenvolvimento web (ASP.NET) para criar aplicativos web.

Concluir a instalação:

Clique em "Instalar" e aguarde o processo ser concluído. Isso pode demorar alguns minutos, dependendo dos componentes que você escolheu.

## 2. Primeiros Passos no Visual Studio

Abrir o Visual Studio

Depois de instalar, abra o Visual Studio. Ao iniciar, você verá uma tela de boas-vindas.

Criar um Novo Projeto

Tela inicial:

Na tela inicial, clique em "Criar um novo projeto".

Escolher o tipo de projeto:

O Visual Studio oferece uma lista extensa de tipos de projetos, dependendo dos componentes instalados. Para um primeiro projeto simples, você pode escolher "Aplicativo de Console (.NET)".

Se estiver criando um projeto web, escolha "Aplicativo Web ASP.NET".

Configurar o Projeto:

Dê um nome ao seu projeto (por exemplo, "MeuPrimeiroApp").

Escolha o local onde deseja salvar.

Clique em "Criar".


Escrever o Código

Se você escolheu um Aplicativo de Console, o Visual Studio criará automaticamente um arquivo chamado Program.cs com um código básico para você.

O código básico para um aplicativo de console simples em C# será algo como:

```C#
using System;

class Program
{
    static void Main()
    {
        Console.WriteLine("Olá, Mundo!");
    }
}
```
## 3. Executando o Projeto

Iniciar o Projeto:

No canto superior, clique em Iniciar (ou pressione Ctrl + F5).

O terminal do Visual Studio será aberto e você verá a saída do seu código, que no caso será Olá, Mundo!.


## 5. Criando um Projeto Web Simples (ASP.NET)

Se quiser explorar o desenvolvimento web, siga os passos abaixo:

Criar um Novo Projeto Web:

Na tela inicial do Visual Studio, clique em Criar um novo projeto e selecione Aplicativo Web ASP.NET Core.

Escolher um Template:

Escolha um template simples como Aplicativo Web (Modelo vazio) ou Aplicativo Web (Model-View-Controller).

Clique em Criar.

Escrever o Código:

Depois que o projeto for criado, você verá pastas como Controllers, Views, e wwwroot.

O arquivo Startup.cs é onde você configura o comportamento da sua aplicação (rotas, middlewares, etc.).

Em Views você pode criar arquivos .cshtml, que são páginas HTML com sintaxe C# embutida.

Executar o Projeto:

Clique em Iniciar ou pressione Ctrl + F5 para rodar a aplicação web.

## 6. Dicas Extras

Atalhos Úteis:

Ctrl + K, Ctrl + C: Comenta o código selecionado.

Ctrl + K, Ctrl + U: Descomenta o código selecionado.

F12: Ir para a definição de um método ou variável.

Organização de Código:

O Visual Studio organiza automaticamente seu código em soluções e projetos. Uma solução pode conter múltiplos projetos. Isso é útil para organizar aplicativos grandes.

## Exemplo de ASP.net

```c#
using Microsoft.AspNetCore.Mvc.RazorPages; // Importar Biblioteca
using Microsoft.AspNetCore.Mvc; // Importar Blindador de Parametros

public class calccotasModel : PageModel
{
    [BindProperty]
    public double valor_invest { get; set; }

    [BindProperty]
    public double preco_cota { get; set; }

    [BindProperty]
    public double provento { get; set; }

    public double? Total { get; set; }

    public double? Total_provento { get; set; }

    public void OnPost()
    {
        Total = valor_invest / preco_cota;
        Total_provento = Total * provento;
    }
    
}
```

# Exemplo de Janela com Windows Form

```c#
﻿namespace CalculadoraRF
{
    partial class Form1
    {
        /// <summary>
        ///  Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        ///  Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        ///  Required method for Designer support - do not modify
        ///  the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            SuspendLayout();
            // 
            // Form1
            // 
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            ClientSize = new Size(800, 450);
            Name = "Form1";
            Text = "Calculadora 1";
            ResumeLayout(false);
        }

        #endregion
    }
}
```

```C#
﻿namespace CalculadoraRendaFixa
{
    partial class Form1
    {
        /// <summary>
        /// Variável de designer necessária.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Limpar os recursos que estão sendo usados.
        /// </summary>
        /// <param name="disposing">true se for necessário descartar os recursos gerenciados; caso contrário, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Código gerado pelo Windows Form Designer

        /// <summary>
        /// Método necessário para suporte ao Designer - não modifique 
        /// o conteúdo deste método com o editor de código.
        /// </summary>
        private void InitializeComponent()
        {
            this.Calcular = new System.Windows.Forms.Button();
            this.button4 = new System.Windows.Forms.Button();
            this.txtValorInvestido = new System.Windows.Forms.Label();
            this.txtTaxaJuros = new System.Windows.Forms.Label();
            this.txtTempo = new System.Windows.Forms.Label();
            this.lblResultado = new System.Windows.Forms.Label();
            this.SuspendLayout();
            // 
            // Calcular
            // 
            this.Calcular.Location = new System.Drawing.Point(48, 111);
            this.Calcular.Name = "Calcular";
            this.Calcular.Size = new System.Drawing.Size(75, 23);
            this.Calcular.TabIndex = 3;
            this.Calcular.Text = "btnCalcular";
            this.Calcular.UseVisualStyleBackColor = true;
            // 
            // button4
            // 
            this.button4.Location = new System.Drawing.Point(129, 111);
            this.button4.Name = "button4";
            this.button4.Size = new System.Drawing.Size(75, 23);
            this.button4.TabIndex = 4;
            this.button4.Text = "Limpar";
            this.button4.UseVisualStyleBackColor = true;
            // 
            // txtValorInvestido
            // 
            this.txtValorInvestido.AutoSize = true;
            this.txtValorInvestido.Location = new System.Drawing.Point(7, 15);
            this.txtValorInvestido.Name = "txtValorInvestido";
            this.txtValorInvestido.Size = new System.Drawing.Size(80, 13);
            this.txtValorInvestido.TabIndex = 5;
            this.txtValorInvestido.Text = "Valor Investido:";
            this.txtValorInvestido.Click += new System.EventHandler(this.txtValorInvestido_Click);
            // 
            // txtTaxaJuros
            // 
            this.txtTaxaJuros.AutoSize = true;
            this.txtTaxaJuros.Location = new System.Drawing.Point(7, 38);
            this.txtTaxaJuros.Name = "txtTaxaJuros";
            this.txtTaxaJuros.Size = new System.Drawing.Size(32, 13);
            this.txtTaxaJuros.TabIndex = 6;
            this.txtTaxaJuros.Text = "Juros";
            // 
            // txtTempo
            // 
            this.txtTempo.AutoSize = true;
            this.txtTempo.Location = new System.Drawing.Point(7, 64);
            this.txtTempo.Name = "txtTempo";
            this.txtTempo.Size = new System.Drawing.Size(40, 13);
            this.txtTempo.TabIndex = 7;
            this.txtTempo.Text = "Tempo";
            // 
            // lblResultado
            // 
            this.lblResultado.AutoSize = true;
            this.lblResultado.Location = new System.Drawing.Point(199, 15);
            this.lblResultado.Name = "lblResultado";
            this.lblResultado.Size = new System.Drawing.Size(58, 13);
            this.lblResultado.TabIndex = 8;
            this.lblResultado.Text = "Resultado:";
            // 
            // Form1
            // 
            this.ClientSize = new System.Drawing.Size(606, 300);
            this.Controls.Add(this.lblResultado);
            this.Controls.Add(this.txtTempo);
            this.Controls.Add(this.txtTaxaJuros);
            this.Controls.Add(this.txtValorInvestido);
            this.Controls.Add(this.button4);
            this.Controls.Add(this.Calcular);
            this.Name = "Form1";
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

  
        private System.Windows.Forms.Button Calcular;
        private System.Windows.Forms.Button button4;
        private System.Windows.Forms.Label txtValorInvestido;
        private System.Windows.Forms.Label txtTaxaJuros;
        private System.Windows.Forms.Label txtTempo;
        private System.Windows.Forms.Label lblResultado;
    }
}

```

## Exemplo de Uso Windows Form

```C#
﻿using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace CalculadoraRendaFixa
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        // Função para calcular o valor futuro
        private void btnCalcular_Click(object sender, EventArgs e)
        {
            try
            {
                // Obter os valores inseridos pelos usuários
                double valorInvestido = double.Parse(txtValorInvestido.Text);
                double taxaJuros = double.Parse(txtTaxaJuros.Text) / 100; // Converter para decimal
                int tempo = int.Parse(txtTempo.Text);

                // Fórmula para o cálculo do valor futuro
                double valorFuturo = valorInvestido * Math.Pow(1 + taxaJuros, tempo);

                // Exibir o resultado
                lblResultado.Text = $"Valor Futuro: R$ {valorFuturo:0.00}";
            }
            catch (Exception)
            {
                MessageBox.Show("Erro ao calcular. Verifique os valores inseridos.", "Erro", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }

        private void txtValorInvestido_Click(object sender, EventArgs e)
        {

        }
    }
}
```
