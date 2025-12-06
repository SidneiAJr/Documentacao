# MVC script | Java

Estrutura feita para Java.

Backup de script...

```bash
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
type nul > core\App.java
type nul > core\Controller.java
type nul > core\Model.java
type nul > core\View.java
type nul > core\Router.java
type nul > core\App.java
type nul > core\Controller.java
type nul > core\Model.java
type nul > core\View.java
type nul > core\Router.java


:: Controllers
type nul > app\Controllers\ProductController.java
type nul > app\Controllers\UserController.java
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

```


