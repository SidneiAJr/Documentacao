# 📜 Automação de Projeto Node.js + TypeScript

Script .bat completo que cria automaticamente projetos nos padrões:

- MVC → Controllers, Models, Views, Services, Middleware, Core, Helpers

- MVVC → Models, Views, ViewModels, Controllers, Services, Routes

E permite instalar todas as dependências essenciais para um backend modern
## O que tem nesse Script?

- TypeORM
- Prisma
- 2FA
- NPM
- NPM ts-dev

## 📦 Instalação automática de dependências
Principais

express

cors

helmet

express-rate-limit

compression

dotenv

Banco de Dados

mysql2

typeorm

prisma

@prisma/client

Segurança

bcryptjs

jsonwebtoken

speakeasy (2FA)

Autenticação

passport

passport-local

passport-jwt

passport-google-oauth20

Cache

redis

ioredis

Dev

typescript

ts-node-dev

tsconfig-paths

nodemon

Types

@types/node

@types/express

@types/bcryptjs

@types/jsonwebtoken

@types/passport-local

````bash
@echo off
title Criador de Projeto Node.js (MVC / MVVC + Dependencias)
color 0a

:menu
cls
echo ===========================================
echo       SISTEMA DE CRIACAO DE PROJETOS
echo ===========================================
echo.
echo [1] Criar Estrutura MVC
echo [2] Criar Estrutura MVVC
echo [3] Instalar TODAS as Dependencias
echo [0] Sair
echo.
set /p opcao="Escolha uma opcao: "

if "%opcao%"=="1" goto mvc
if "%opcao%"=="2" goto mvvc
if "%opcao%"=="3" goto deps
if "%opcao%"=="0" exit

goto menu

:: ============================================
:: ========== CRIAR ESTRUTURA MVC =============
:: ============================================
:mvc
cls
echo Criando estrutura MVC...

:: Pastas principais
mkdir src
mkdir src\app
mkdir src\app\Controllers
mkdir src\app\Models
mkdir src\app\Views
mkdir src\app\Views\product
mkdir src\app\Views\user
mkdir src\config
mkdir prisma

:: Camadas adicionais
mkdir src\core
mkdir src\helpers
mkdir src\services
mkdir src\middleware

:: Storage
mkdir src\storage
mkdir src\storage\logs
mkdir src\storage\uploads
mkdir src\storage\cache

:: Public
mkdir src\public
mkdir src\public\css
mkdir src\public\js
mkdir src\public\img
mkdir src\public\ts

:: Vendor (futuro)
mkdir src\vendor

echo Criando arquivos...

:: ROOT FILES
echo > .env
echo node_modules/ > .gitignore
echo {} > composer.json
echo # Projeto MVC Node.js TypeScript > README.md

:: Core
echo // Core App > src\core\App.ts
echo // Controller Base > src\core\Controller.ts
echo // Model Base > src\core\Model.ts
echo // View Engine > src\core\View.ts
echo // Router > src\core\Router.ts

:: Controllers
echo export class ProductController {} > src\app\Controllers\ProductController.ts
echo export class UserController {} > src\app\Controllers\UserController.ts

:: Models
echo export class Product {} > src\app\Models\Product.ts
echo export class User {} > src\app\Models\User.ts

:: Views
echo // View Product Index > src\app\Views\product\index.ts
echo // View Product Show > src\app\Views\product\show.ts
echo // View User Index > src\app\Views\user\index.ts
echo // View User Profile > src\app\Views\user\profile.ts
echo // Base layout > src\app\Views\layout.ts

:: Helpers
echo export function helper(){} > src\helpers\functions.ts
echo export function session(){} > src\helpers\session.ts

:: Services
echo export class UserService {} > src\services\UserService.ts
echo export class ProductService {} > src\services\ProductService.ts

:: Middleware
echo export function AuthMiddleware(){} > src\middleware\AuthMiddleware.ts
echo export function CsrfMiddleware(){} > src\middleware\CsrfMiddleware.ts

:: Config
echo export const configDB = {}; > src\config\database.ts
echo export const routes = []; > src\config\routes.ts
echo export const appConfig = {}; > src\config\app.ts

:: Public
echo body {} > src\public\css\style.css
echo console.log('app'); > src\public\js\app.js
echo console.log('ts'); > src\public\ts\main.ts

:: Storage
echo Log file initialized > src\storage\logs\app.log

:: tsconfig
(
echo {
echo   "compilerOptions": {
echo     "target": "ES2020",
echo     "module": "CommonJS",
echo     "outDir": "./dist",
echo     "rootDir": "./src",
echo     "esModuleInterop": true,
echo     "strict": false
echo   }
echo }
) > tsconfig.json

:: server.ts
(
echo import express from 'express';
echo import cors from 'cors';
echo import helmet from 'helmet';
echo import rateLimit from 'express-rate-limit';
echo import dotenv from 'dotenv';
echo dotenv.config();
echo.
echo const app = express();
echo app.use(express.json());
echo app.use(cors());
echo app.use(helmet());
echo.
echo const PORT = process.env.PORT ^|^| 3000;
echo app.listen(PORT, () => console.log(`Servidor rodando na porta ${PORT}`));
) > src\server.ts

:: Prisma schema
(
echo datasource db {
echo   provider = "mysql"
echo   url      = env("DATABASE_URL")
echo }
echo generator client {
echo   provider = "prisma-client-js"
echo }
) > prisma\schema.prisma

echo ============================================
echo Estrutura MVC criada com sucesso!
echo ============================================
pause
goto menu

:: ============================================
:: ========== CRIAR ESTRUTURA MVVC ============
:: ============================================
:mvvc
cls
echo Criando estrutura MVVC...

mkdir src
mkdir src\models
mkdir src\views
mkdir src\viewmodels
mkdir src\controllers
mkdir src\routes
mkdir src\services
mkdir src\config
mkdir prisma

:: server.ts
(
echo import express from 'express';
echo import cors from 'cors';
echo import helmet from 'helmet';
echo import dotenv from 'dotenv';
echo dotenv.config();
echo.
echo const app = express();
echo app.use(express.json());
echo app.use(cors());
echo app.use(helmet());
echo.
echo const PORT = process.env.PORT ^|^| 3000;
echo app.listen(PORT, () => console.log(`MVVC rodando na porta ${PORT}`));
) > src\server.ts

(
echo datasource db {
echo   provider = "mysql"
echo   url      = env("DATABASE_URL")
echo }
echo generator client {
echo   provider = "prisma-client-js"
echo }
) > prisma\schema.prisma

echo ============================================
echo Estrutura MVVC criada com sucesso!
echo ============================================
pause
goto menu

:: ============================================
:: ===== INSTALAR TODAS AS DEPENDENCIAS =======
:: ============================================
:deps
cls
echo Instalando dependencias...
echo.
echo Certifique-se que o package.json ja foi criado com:
echo npm init -y
echo.
pause

echo Instalando dependencias principais...
npm install express cors helmet express-rate-limit compression dotenv

echo Instalando MySQL, TypeORM e Prisma...
npm install mysql2 typeorm prisma @prisma/client

echo Instalando bcrypt, JWT e 2FA...
npm install bcryptjs jsonwebtoken speakeasy

echo Instalando Passport e OAuth2...
npm install passport passport-local passport-jwt passport-google-oauth20

echo Instalando Redis / Cache...
npm install redis ioredis

echo Instalando dependencias de desenvolvimento...
npm install -D typescript ts-node-dev tsconfig-paths nodemon

echo Instalando types do TypeScript...
npm install -D @types/express @types/node @types/bcryptjs @types/jsonwebtoken @types/passport-local

echo ============================================
echo TODAS AS DEPENDENCIAS FORAM INSTALADAS!
echo ============================================
pause
goto menu
````
