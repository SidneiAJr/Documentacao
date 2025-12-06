# 📜🤪 Automação | Gerador de API

“Um gerador automático de APIs rápidas, completas e configuráveis — feito pra dev que gosta de praticidade e não tem tempo a perder.”

## 🏷Nome do projeto: APIDAMASSA Generator

## 🤖 O que ele faz?

O APIDAMASSA Generator cria automaticamente uma estrutura funcional de API para estudos, experimentação e testes locais.
A ideia é simples:

-👉 Você executa o gerador

-👉 Ele constrói toda a API por você

-👉 Você só precisa fazer requisições locais e receber os dados

Perfeito para aprender como uma API nasce, quais pastas são usadas, como rotas se organizam e como o backend responde.

## Versão I

## 📂 Pastas geradas automaticamente

/api
Estrutura principal da sua API

/api/routes
Onde ficam as rotas (GET, POST, PUT, DELETE…)

/api/controllers 
Contém a lógica por trás das rotas

/api/services 
Onde ficam funções reutilizáveis e regras de negócio simples

/api/models 
Caso no futuro queira simular dados ou expandir pra banco local

/docs
Documentação automática / anotações da API

/tests 
Para brincadeiras com testes simples no futuro

/logs
Histórico básico de requisições e execuções

## Gerador de API

```bash
#!/bin/bash

echo "Bem vindo ao APIDAMASSA Generator"
echo "Criando Estrutura das Pastas"

# Criar pastas
mkdir -p api/routes
mkdir -p api/controllers
mkdir -p api/services
mkdir -p api/models
mkdir -p docs
mkdir -p tests
mkdir -p logs

# Criar arquivos sem sobrescrever
touch api/api.js
touch docs/readme.md
touch logs/install.log
touch .env
touch package.json
touch api/routes/userRoutes.js
touch server.js
touch app.js
touch api/controllers/userController.js
touch api/services/userService.js
touch api/models/userModel.js
touch .gitignore

echo "Arquivos e pastas criados com sucesso!"
````





