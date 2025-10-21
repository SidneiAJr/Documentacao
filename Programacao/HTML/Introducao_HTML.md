# 😎 Introdução ao HTML

HTML (HyperText Markup Language) é a linguagem de marcação padrão utilizada para criar páginas na web. Aqui estão alguns dos elementos mais comuns e úteis que você usará ao escrever HTML.

## Tags em HTML:

***Titulos***
- h1
- h2
- h3
- h4
- h5
- h6

***Lista***
- li
- ul

***div tipos***
- class ou id -> Referenciar no css como # ou .

***Parágrafos***
- p

***strong***
- Texto em negrito (semântico)

***imagem***
- img: Para adicionar imagens à página.
  ```html
  Exemplo: <img src="imagem.jpg" alt="Descrição da imagem">.
   ```

***Tabelas***

- table: Define uma tabela.

- tr: Linha da tabela.

- td: Célula da tabela.

- th: Cabeçalho da tabela.

***Formulários***

- form: Para agrupar os campos do formulário.

- input: Campo de entrada (texto, senha, botão, etc).

- label: Rótulo para o input.

- textarea: Área de texto (para respostas maiores).

- select: Lista suspensa.

- option: Opções dentro de um select.

***Elementos de Agrupamento***

- section: Para agrupar conteúdo relacionado (seções de um artigo, por exemplo).

- article: Para indicar um conteúdo independente.

- nav: Para links de navegação.

- footer: Rodapé da página.

- header: Cabeçalho da página.

- aside: Contéudo relacionado, mas que não faz parte do conteúdo principal.

- figure: Para agrupar conteúdo visual, como imagens com legendas.

- figcaption: Para fornecer uma legenda a uma figura.

- main: Define o conteúdo principal de uma página (boa para SEO).  

| Elemento      | Descrição                                   | Exemplo                                     |
|---------------|---------------------------------------------|---------------------------------------------|
| **h1 a h6**   | Títulos de diferentes níveis                 | `<h1> Título Principal </h1>`                |
| **li**        | Item de lista                                | `<li> Item da lista </li>`                   |
| **ul**        | Lista não ordenada                           | `<ul><li>Item 1</li></ul>`                    |
| **div**       | Container genérico, usado com class ou id   | `<div class="container"></div>`              |
| **p**         | Parágrafo                                   | `<p>Texto do parágrafo</p>`                   |
| **strong**    | Texto em negrito (semântico)                 | `<strong>Texto em negrito</strong>`           |
| **img**       | Imagem                                      | `<img src="imagem.jpg" alt="Descrição">`     |

---

| Elemento      | Descrição                                   | Exemplo                                     |
|---------------|---------------------------------------------|---------------------------------------------|
| **table**     | Define uma tabela                            | `<table></table>`                            |
| **tr**        | Linha da tabela                             | `<tr></tr>`                                 |
| **td**        | Célula da tabela                            | `<td>Conteúdo</td>`                          |
| **th**        | Cabeçalho da tabela                         | `<th>Cabeçalho</th>`                         |

---

| Elemento      | Descrição                                   | Exemplo                                     |
|---------------|---------------------------------------------|---------------------------------------------|
| **form**      | Agrupa campos de formulário                 | `<form></form>`                             |
| **input**     | Campo de entrada (texto, senha, botão etc) | `<input type="text" />`                      |
| **label**     | Rótulo para o input                         | `<label for="nome">Nome:</label>`           |
| **textarea**  | Área de texto maior                         | `<textarea></textarea>`                       |
| **select**    | Lista suspensa                             | `<select><option>Opção</option></select>`  |
| **option**    | Opção dentro do select                      | `<option value="1">Opção 1</option>`         |

---

| Elemento      | Descrição                                   | Exemplo                                     |
|---------------|---------------------------------------------|---------------------------------------------|
| **section**   | Agrupa conteúdo relacionado (seções)        | `<section></section>`                        |
| **article**   | Conteúdo independente                        | `<article></article>`                        |
| **nav**       | Links de navegação                           | `<nav></nav>`                               |
| **footer**    | Rodapé da página                            | `<footer></footer>`                          |
| **header**    | Cabeçalho da página                         | `<header></header>`                          |
| **aside**     | Conteúdo relacionado, não principal         | `<aside></aside>`                            |
| **figure**    | Agrupa conteúdo visual com legenda          | `<figure><img src="x.jpg"/><figcaption>Legenda</figcaption></figure>` |
| **figcaption**| Legenda da figura                            | `<figcaption>Legenda da imagem</figcaption>` |
| **main**      | Conteúdo principal da página (SEO)           | `<main></main>`                             |

