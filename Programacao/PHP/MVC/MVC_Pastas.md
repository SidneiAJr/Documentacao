# PHP | MVC Pastas:

## `Estrtura de pasta do mvc para Projetos`:

````bash
md app
md app\Controllers
md app\Models
md app\Views
md app\Views\product
md app\Views\user
md public
md public\css
md public\js
md public\img
md config
````

- ### `app/`

Descrição: A pasta app é onde a maior parte da lógica da aplicação acontece. É o núcleo da sua aplicação e geralmente contém as pastas Controllers, Models e Views.

Por que usar: Manter todos os componentes principais da aplicação organizados em um único lugar, facilitando a navegação e a manutenção do código.

-  ### `app/Controllers/`

Descrição: Aqui ficam os controladores da sua aplicação. O controlador é responsável por receber as requisições do usuário, processá-las e determinar qual resposta (geralmente uma view) será enviada.

Exemplo de conteúdo: Arquivos como ProductController.php, UserController.php podem ser encontrados nesta pasta.


-  ### `app/Models/`

Descrição: A pasta Models contém as classes que representam as entidades e manipulam os dados da sua aplicação. Ela gerencia a interação com o banco de dados ou outras fontes de dados.

Exemplo de conteúdo: Arquivos como Product.php, User.php, onde você define as propriedades e os métodos que interagem com os dados.

Exemplo de Model (Product.php):

-  ### `app/Views/`

Descrição: A pasta Views armazena os arquivos de interface (UI) da sua aplicação. Cada view é uma página ou um componente da interface com o usuário. No padrão MVC, a view exibe os dados processados pelos controladores.

Exemplo de conteúdo: Aqui você pode encontrar pastas para cada entidade ou controlador, como product/, user/, e dentro delas, arquivos de templates como index.php, show.php, etc.

-  ### `public/`

Descrição: A pasta public é onde ficam os arquivos públicos, acessíveis diretamente pelos usuários. Isso inclui o arquivo principal de entrada da aplicação (geralmente index.php), bem como arquivos estáticos como CSS, JavaScript e imagens.

Por que usar: A ideia é que apenas o que for acessível ao usuário final fique dentro desta pasta, garantindo segurança e organização.

-  ###  `Exemplo de conteúdo:`

index.php: Arquivo que recebe todas as requisições do usuário e dispara a lógica da aplicação (geralmente inclui o roteamento, ou chama o controlador correspondente).

public/css/: Contém arquivos CSS para estilizar o site.

public/js/: Contém scripts JavaScript, como funcionalidades de interação na interface.

public/img/: Contém imagens usadas na aplicação.

-  ### `config/`

Descrição: A pasta config armazena os arquivos de configuração da aplicação, como acesso ao banco de dados, configurações de roteamento, e outras configurações globais da aplicação.

Exemplo de conteúdo:

database.php: Arquivo com as configurações de conexão com o banco de dados.

routes.php: Arquivo que mapeia as URLs para os controladores, definindo como a aplicação deve tratar as requisições HTTP.

-   ### `Resumo geral:`

app/Controllers/: Lógica de controle da aplicação, onde a requisição é processada.

app/Models/: Lógica de manipulação de dados, interage com o banco de dados.

app/Views/: Exibe os dados ao usuário (interface).

public/: Arquivos acessíveis diretamente, como o ponto de entrada da aplicação e arquivos estáticos.

config/: Configurações globais da aplicação, como banco de dados e rotas.


