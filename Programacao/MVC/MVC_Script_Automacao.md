# 📜 MVC | Script Automação| PHP e TS:

## 🤪Porque eu fiz isso? `Automação Simples direta...`

## 🤖 Por que existe esse script? `preguiça inteligente. Automação > repetição.`

### Opção 1 | Esse Script cria os arquivos pre configurados na pasta.

- Ja cria as pasta conforme padrão MVC

- Ja cria os arquivos em `.php` e em `.ts` conforme padrão mvc

- Precisa Escrever o codigo nos arquivos

### Como rodar?

- Simples cria uma pasta na tua maquina onde tu quiser.

- Depois cria um arquivo de texto com o botão direto do mouse

- Depois disso tu so copia esse script

- Na opção de salvar como coloca em todos os arquivos

- Depois disso so `executar` cabo...

````bash
@echo off
echo ==============================
echo Criando estrutura MVC Completa...
echo ==============================

:: Pastas principais
md app
md app\Controllers
md app\Models
md app\Views
md app\Views\product
md app\Views\user

:: Camadas adicionais
md core
md helpers
md services
md middleware

:: Storage
md storage
md storage\logs
md storage\uploads
md storage\cache

:: Public
md public
md public\css
md public\js
md public\img
md public\ts

:: Config
md config

:: Vendor (composer irá povoar depois)
md vendor

echo ==============================
echo Criando arquivos iniciais...
echo ==============================

:: Arquivos root
type nul > .env
type nul > .gitignore
type nul > composer.json
type nul > README.md

:: Core
type nul > core\App.php
type nul > core\Controller.php
type nul > core\Model.php
type nul > core\View.php
type nul > core\Router.php
type nul > core\App.ts
type nul > core\Controller.ts
type nul > core\Model.ts
type nul > core\View.ts
type nul > core\Router.ts


:: Controllers
type nul > app\Controllers\ProductController.php
type nul > app\Controllers\UserController.php
type nul > app\Controllers\ProductController.ts
type nul > app\Controllers\UserController.ts

:: Models
type nul > app\Models\Product.php
type nul > app\Models\User.php
type nul > app\Models\Product.ts
type nul > app\Models\User.ts

:: Views
type nul > app\Views\product\index.php
type nul > app\Views\product\show.php
type nul > app\Views\user\index.php
type nul > app\Views\user\profile.php
type nul > app\Views\layout.php
type nul > app\Views\product\index.ts
type nul > app\Views\product\show.ts
type nul > app\Views\user\index.ts
type nul > app\Views\user\profile.ts
type nul > app\Views\layout.ts


:: Helpers
type nul > helpers\functions.php
type nul > helpers\session.php
type nul > helpers\functions.ts
type nul > helpers\session.ts

:: Services
type nul > services\UserService.php
type nul > services\ProductService.php
type nul > services\UserService.ts
type nul > services\ProductService.ts

:: Middleware
type nul > middleware\AuthMiddleware.php
type nul > middleware\CsrfMiddleware.php
type nul > middleware\AuthMiddleware.ts
type nul > middleware\CsrfMiddleware.ts


:: Config
type nul > config\database.php
type nul > config\routes.php
type nul > config\app.php
type nul > config\database.ts
type nul > config\routes.ts
type nul > config\app.ts

:: Public
type nul > public\index.php
type nul > public\404.php
type nul > public\css\style.css
type nul > public\js\app.js
type nul > public\ts\main.ts

:: Storage
type nul > storage\logs\app.log

echo ==============================
echo Estrutura COMPLETA criada!
echo ==============================
pause
````

## Opção 2 | Somente Typescript

Essa versão e somente Typescript

- Ja vem com .`ts` | Removido `.php`

````bash
@echo off
echo ==============================
echo Criando estrutura MVC Completa...
echo ==============================

:: Pastas principais
md app
md app\Controllers
md app\Models
md app\Views
md app\Views\product
md app\Views\user

:: Camadas adicionais
md core
md helpers
md services
md middleware

:: Storage
md storage
md storage\logs
md storage\uploads
md storage\cache

:: Public
md public
md public\css
md public\js
md public\img
md public\ts

:: Config
md config

:: Vendor (composer irá povoar depois)
md vendor

echo ==============================
echo Criando arquivos iniciais...
echo ==============================

:: Arquivos root
type nul > .env
type nul > .gitignore
type nul > composer.json
type nul > README.md

:: Core
type nul > core\App.ts
type nul > core\Controller.ts
type nul > core\Model.ts
type nul > core\View.ts
type nul > core\Router.ts

:: Controllers
type nul > app\Controllers\ProductController.ts
type nul > app\Controllers\UserController.ts

:: Models
type nul > app\Models\Product.ts
type nul > app\Models\User.ts

:: Views
type nul > app\Views\product\index.ts
type nul > app\Views\product\show.ts
type nul > app\Views\user\index.ts
type nul > app\Views\user\profile.ts
type nul > app\Views\layout.ts

:: Helpers
type nul > helpers\functions.ts
type nul > helpers\session.ts

:: Services
type nul > services\UserService.ts
type nul > services\ProductService.ts

:: Middleware
type nul > middleware\AuthMiddleware.ts
type nul > middleware\CsrfMiddleware.ts

:: Config
type nul > config\database.ts
type nul > config\routes.ts
type nul > config\app.ts

:: Public
type nul > public\css\style.css
type nul > public\js\app.js
type nul > public\ts\main.ts

:: Storage
type nul > storage\logs\app.log

echo ==============================
echo Estrutura COMPLETA criada!
echo ==============================
pause
````



