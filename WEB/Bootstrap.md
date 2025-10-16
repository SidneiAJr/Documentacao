# 🎨 Introdução ao Bootstrap

> **Bootstrap** é um framework front-end que facilita a criação de sites **responsivos** e com **design moderno**, usando HTML, CSS e JavaScript prontos.

---

## 🚀 Como Começar

### ✅ 1. Adicionando o Bootstrap via CDN

```html
<!-- CSS -->
<link
  href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
  rel="stylesheet"
/>

<!-- JS (opcional, para componentes interativos) -->
<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
></script>

```
## 🧱 Estrutura Básica de um Projeto

```html 
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Meu Site Bootstrap</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <div class="container mt-5">
    <h1 class="text-center text-primary">Olá, Bootstrap!</h1>
    <p class="lead text-center">Este é um exemplo simples de estrutura.</p>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
```


🔘 Botões

```html
<button class="btn btn-primary">Primário</button>
<button class="btn btn-success">Sucesso</button>
<button class="btn btn-danger">Perigo</button>
<button class="btn btn-outline-dark">Contorno</button>
```

🧭 Navbar (Menu de Navegação)
```html
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">MeuSite</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div id="menu" class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="#">Início</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Sobre</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Contato</a></li>
      </ul>
    </div>
  </div>
</nav>
```

📑 Cards
```html
<div class="card" style="width: 18rem;">
  <img src="https://via.placeholder.com/150" class="card-img-top" alt="Exemplo">
  <div class="card-body">
    <h5 class="card-title">Título do Card</h5>
    <p class="card-text">Texto de exemplo dentro do card.</p>
    <a href="#" class="btn btn-primary">Ver mais</a>
  </div>
</div>
```

🧾 Formulários
```html
<form class="p-3">
  <div class="mb-3">
    <label class="form-label">Nome</label>
    <input type="text" class="form-control" placeholder="Digite seu nome">
  </div>

  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" placeholder="exemplo@email.com">
  </div>

  <button type="submit" class="btn btn-success">Enviar</button>
</form>
```

💬 Alertas
```html
<div class="alert alert-success">Sucesso!</div>
<div class="alert alert-danger">Erro!</div>
<div class="alert alert-warning">Aviso!</div>
<div class="alert alert-info">Informação!</div>
```


🎯 Exemplo de Layout Completo
```html
<div class="container mt-5">
  <div class="row">
    <div class="col-md-8">
      <div class="card p-3">
        <h4>Post Principal</h4>
        <p>Conteúdo do post ou artigo aqui.</p>
        <button class="btn btn-primary">Leia mais</button>
      </div>
    </div>

    <div class="col-md-4">
      <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action active">Menu 1</a>
        <a href="#" class="list-group-item list-group-item-action">Menu 2</a>
        <a href="#" class="list-group-item list-group-item-action">Menu 3</a>
      </div>
    </div>
  </div>
</div>
```
