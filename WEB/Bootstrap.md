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
