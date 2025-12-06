# 📜Script Automacao | MVVM 

## Mesmo esquema da Anterior

````bash
@echo off
echo ==============================
echo Criando estrutura MVVM Completa...
echo ==============================

:: Pastas principais
md app
md app\models
md app\views
md app\viewmodels

:: Core
md core

:: Helpers
md helpers

:: Services
md services

:: Config
md config

:: Storage
md storage
md storage\logs
md storage\cache

:: Public (arquivos acessíveis no navegador)
md public
md public\css
md public\js
md public\ts
md public\img

echo ==============================
echo Criando arquivos iniciais...
echo ==============================

:: Arquivos root
type nul > .env
type nul > .gitignore
type nul > tsconfig.json
type nul > README.md

:: Core
type nul > core\App.ts
type nul > core\Router.ts
type nul > core\EventBus.ts

:: Models
type nul > app\models\UserModel.ts
type nul > app\models\ProductModel.ts

:: ViewModels
type nul > app\viewmodels\UserViewModel.ts
type nul > app\viewmodels\ProductViewModel.ts

:: Views
md app\views\user
md app\views\product

type nul > app\views\user\index.html
type nul > app\views\user\userView.ts

type nul > app\views\product\index.html
type nul > app\views\product\productView.ts

type nul > app\views\layout.html

:: Helpers
type nul > helpers\utils.ts
type nul > helpers\validator.ts

:: Services
type nul > services\ApiService.ts
type nul > services\UserService.ts
type nul > services\ProductService.ts

:: Config
type nul > config\app.ts
type nul > config\routes.ts

:: Public
type nul > public\css\style.css
type nul > public\js\app.js
type nul > public\ts\main.ts

:: Storage
type nul > storage\logs\app.log

echo ==============================
echo Estrutura MVVM criada com sucesso!
echo ==============================
pause
````
