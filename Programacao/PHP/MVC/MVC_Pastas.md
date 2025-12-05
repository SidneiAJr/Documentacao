# 🐘PHP | MVC Pastas:

## `Estrutura de pasta do mvc para Projetos`:

````Shell
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

### `app/`

Descrição: A pasta app é onde a maior parte da lógica da aplicação acontece. É o núcleo da sua aplicação e geralmente contém as pastas Controllers, Models e Views.

Por que usar: Manter todos os componentes principais da aplicação organizados em um único lugar, facilitando a navegação e a manutenção do código.

### `app/Controllers/`

Descrição: Aqui ficam os controladores da sua aplicação. O controlador é responsável por receber as requisições do usuário, processá-las e determinar qual resposta (geralmente uma view) será enviada.

Exemplo de conteúdo: Arquivos como ProductController.php, UserController.php podem ser encontrados nesta pasta.


### `app/Models/`

Descrição: A pasta Models contém as classes que representam as entidades e manipulam os dados da sua aplicação. Ela gerencia a interação com o banco de dados ou outras fontes de dados.

Exemplo de conteúdo: Arquivos como Product.php, User.php, onde você define as propriedades e os métodos que interagem com os dados.

Exemplo de Model (Product.php):

### `app/Views/`

Descrição: A pasta Views armazena os arquivos de interface (UI) da sua aplicação. Cada view é uma página ou um componente da interface com o usuário. No padrão MVC, a view exibe os dados processados pelos controladores.

Exemplo de conteúdo: Aqui você pode encontrar pastas para cada entidade ou controlador, como product/, user/, e dentro delas, arquivos de templates como index.php, show.php, etc.

### `public/`

Descrição: A pasta public é onde ficam os arquivos públicos, acessíveis diretamente pelos usuários. Isso inclui o arquivo principal de entrada da aplicação (geralmente index.php), bem como arquivos estáticos como CSS, JavaScript e imagens.

Por que usar: A ideia é que apenas o que for acessível ao usuário final fique dentro desta pasta, garantindo segurança e organização.

###  `Exemplo de conteúdo:`

index.php: Arquivo que recebe todas as requisições do usuário e dispara a lógica da aplicação (geralmente inclui o roteamento, ou chama o controlador correspondente).

public/css/: Contém arquivos CSS para estilizar o site.

public/js/: Contém scripts JavaScript, como funcionalidades de interação na interface.

public/img/: Contém imagens usadas na aplicação.

### `config/`

Descrição: A pasta config armazena os arquivos de configuração da aplicação, como acesso ao banco de dados, configurações de roteamento, e outras configurações globais da aplicação.

Exemplo de conteúdo:

database.php: Arquivo com as configurações de conexão com o banco de dados.

routes.php: Arquivo que mapeia as URLs para os controladores, definindo como a aplicação deve tratar as requisições HTTP.

### `Resumo geral:`

app/Controllers/: Lógica de controle da aplicação, onde a requisição é processada.

app/Models/: Lógica de manipulação de dados, interage com o banco de dados.

app/Views/: Exibe os dados ao usuário (interface).

public/: Arquivos acessíveis diretamente, como o ponto de entrada da aplicação e arquivos estáticos.

config/: Configurações globais da aplicação, como banco de dados e rotas.


