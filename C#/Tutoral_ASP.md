# Tutorial Básico de ASP.NET Core

Este tutorial vai te guiar pelos passos para criar uma aplicação web simples usando ASP.NET Core.

---

## Pré-requisitos

- .NET SDK instalado (versão 6.0 ou superior)  
  [Download .NET SDK](https://dotnet.microsoft.com/download)

- Um editor de código, preferencialmente [Visual Studio Code](https://code.visualstudio.com/) ou Visual Studio.

---

## 1. Criar um novo projeto ASP.NET Core

Abra seu terminal e execute:

```bash
dotnet new webapp -o MinhaAppAspNetCore
cd MinhaAppAspNetCore
```

## 2. Estrutura do projeto

Program.cs: ponto de entrada da aplicação, onde o host é configurado.

Pages/: pasta onde ficam as Razor Pages (.cshtml).

wwwroot/: arquivos estáticos (CSS, JS, imagens).

appsettings.json: arquivo de configuração.

## 3. Rodar a aplicação

No terminal, dentro da pasta do projeto, rode:


Exemplo ASP.NET Core (Razor Pages)

## 4. Criar uma rota simples

Vamos criar uma página nova.

Crie o arquivo Pages/Saudacao.cshtml:

Opcional: criar um arquivo Pages/Saudacao.cshtml.cs para código C# por trás (code-behind):


## 5. Testar a nova página

Rode a aplicação (dotnet run) e acesse:

Exemplo ASP.NET Core (Razor Pages)

// Pages/Index.cshtml.cs

using Microsoft.AspNetCore.Mvc.RazorPages;

```C#
public class IndexModel : PageModel
{
    public string Mensagem { get; private set; }

    public void OnGet()
    {
        Mensagem = "Olá do ASP.NET Core Razor Pages!";
    }
}
```

## 6. Testar a nova página

```C#
<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="Default.aspx.cs" Inherits="WebFormsApp.Default" %>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Exemplo ASP.NET Web Forms</title>
</head>
<body>
    <form id="form1" runat="server">
        <div>
            <asp:Label ID="LabelMensagem" runat="server" Text="Mensagem padrão"></asp:Label>
        </div>
    </form>
</body>
</html>
```

```C#
// Default.aspx.cs
using System;

namespace WebFormsApp
{
    public partial class Default : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {
            LabelMensagem.Text = "Olá do ASP.NET Web Forms (.aspx)!";
        }
    }
}
```
