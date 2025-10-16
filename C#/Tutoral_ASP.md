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


## 4. Criar uma rota simples

Vamos criar uma página nova.

Crie o arquivo Pages/Saudacao.cshtml:

Opcional: criar um arquivo Pages/Saudacao.cshtml.cs para código C# por trás (code-behind):


## 5. Testar a nova página

Rode a aplicação (dotnet run) e acesse:

