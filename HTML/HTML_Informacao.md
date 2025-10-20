# 🚀 O Que Mais Existe em HTML 

O HTML é dividido em **grupos de elementos** com finalidades diferentes.  
Aqui vai o mapa completo do que você pode estudar e dominar:

---

## 🧱 1. Estrutura Básica da Página
Esses elementos formam o **esqueleto** de todo documento HTML.

| Tag | Função |
|-----|--------|
| `<!DOCTYPE html>` | Define o tipo de documento |
| `<html>` | Elemento raiz do HTML |
| `<head>` | Contém metadados e configurações |
| `<body>` | Contém o conteúdo visível da página |
| `<title>` | Título exibido na aba do navegador |
| `<meta>` | Define metadados (charset, viewport, etc.) |
| `<link>` | Conecta arquivos externos (CSS, ícone, etc.) |
| `<script>` | Inclui código JavaScript |

---

## 🧭 2. Estrutura de Conteúdo (Seções e Layout)
Organizam o conteúdo em partes lógicas — **ótimo pra SEO e acessibilidade**.

| Tag | Função |
|-----|--------|
| `<header>` | Cabeçalho da página ou seção |
| `<nav>` | Navegação (menus, links principais) |
| `<main>` | Conteúdo principal |
| `<section>` | Seções temáticas |
| `<article>` | Artigos ou blocos independentes |
| `<aside>` | Conteúdo lateral ou complementar |
| `<footer>` | Rodapé da página |
| `<div>` | Contêiner genérico (usado com CSS) |

---

## 📝 3. Textos e Formatação
Tudo que envolve **conteúdo textual e tipografia**.

| Tag | Função |
|-----|--------|
| `<h1>` a `<h6>` | Títulos e subtítulos |
| `<p>` | Parágrafo |
| `<br>` | Quebra de linha |
| `<hr>` | Linha horizontal |
| `<strong>` | Texto em negrito (semântico) |
| `<em>` | Texto em itálico (ênfase) |
| `<mark>` | Marca texto |
| `<small>` | Texto menor |
| `<blockquote>` | Citação longa |
| `<code>` | Trecho de código |
| `<pre>` | Texto pré-formatado |
| `<abbr>` | Abreviações com tooltip |
| `<sup>` / `<sub>` | Texto sobrescrito / subscrito |

---

## 🔗 4. Links e Navegação
Para **conectar páginas** e criar **âncoras internas**.

| Tag | Função |
|-----|--------|
| `<a>` | Cria um link (atributo `href`) |
| `<nav>` | Agrupa links de navegação |
| `target="_blank"` | Abre link em nova aba |
| `id` + `href="#id"` | Cria âncoras na mesma página |

---

## 🖼️ 5. Imagens, Mídia e Gráficos
Mostra **imagens, vídeos, áudios e SVGs**.

| Tag | Função |
|-----|--------|
| `<img>` | Exibe imagens |
| `<picture>` | Imagens responsivas |
| `<video>` | Reproduz vídeos |
| `<audio>` | Reproduz sons |
| `<source>` | Define múltiplos formatos de mídia |
| `<canvas>` | Área para gráficos e desenhos via JS |
| `<svg>` | Gráficos vetoriais escaláveis |

---

## 📋 6. Listas e Tabelas
Estruturas de **dados organizados**.

| Tag | Função |
|-----|--------|
| `<ul>` | Lista não ordenada (com bolinhas) |
| `<ol>` | Lista ordenada (com números) |
| `<li>` | Item da lista |
| `<dl>` | Lista de definição |
| `<dt>` / `<dd>` | Termo e descrição |
| `<table>` | Cria tabela |
| `<tr>`, `<td>`, `<th>` | Linhas e células |
| `<thead>`, `<tbody>`, `<tfoot>` | Estrutura da tabela |
| `<caption>` | Título da tabela |

---

## 🧍 7. Formulários (Inputs e Controles)
Você já domina essa parte 💪  
Mas além dos `<input>`, existem:

| Tag | Função |
|-----|--------|
| `<form>` | Agrupa o formulário |
| `<label>` | Rótulo do campo |
| `<select>` | Menu suspenso |
| `<option>` | Opção dentro do select |
| `<textarea>` | Campo de texto longo |
| `<button>` | Botão |
| `<fieldset>` | Agrupa campos relacionados |
| `<legend>` | Título do grupo de campos |
| `<datalist>` | Sugestões automáticas para inputs |
| `<output>` | Exibe resultados de cálculos |
| `<progress>` | Barra de progresso |
| `<meter>` | Indicador de valor (ex: nota, nível, etc.) |

---

## 🎨 8. Tags de Mídia e Interatividade
Para **conteúdos visuais e multimídia**.

| Tag | Função |
|-----|--------|
| `<iframe>` | Embute outra página (ex: vídeos do YouTube) |
| `<embed>` | Insere conteúdo externo |
| `<object>` | Insere objetos multimídia |
| `<map>` e `<area>` | Mapas de imagem clicáveis |
| `<canvas>` | Área de desenho via JavaScript |

---

## ⚙️ 9. Atributos Globais Importantes
Podem ser usados **em qualquer tag**.

| Atributo | Descrição |
|-----------|------------|
| `id` | Identifica o elemento |
| `class` | Define classes CSS |
| `style` | Adiciona estilos inline |
| `title` | Mostra tooltip ao passar o mouse |
| `hidden` | Esconde o elemento |
| `contenteditable` | Torna o texto editável |
| `tabindex` | Define a ordem de navegação |
| `data-*` | Cria atributos personalizados |
| `draggable` | Permite arrastar o elemento |

---

## 🔒 10. Acessibilidade e SEO
Para **melhorar leitura por máquinas e inclusão**.

| Tag / Atributo | Função |
|----------------|--------|
| `<alt>` | Descrição alternativa de imagens |
| `<aria-*>` | Atributos de acessibilidade |
| `<label for="">` | Associa campos a labels |
| `<main>`, `<nav>`, `<header>`, `<footer>` | Estrutura semântica para leitores de tela |
| `<meta name="description">` | Descrição para motores de busca |
| `<meta name="keywords">` | Palavras-chave (antigo, mas ainda útil) |

---

💡 **Resumindo:**  
Depois que você domina **inputs, forms e títulos**, o próximo passo é:
1. Estrutura de layout (`header`, `main`, `footer`, `section`, etc.)  
2. Conteúdo rico (listas, imagens, tabelas, vídeos, etc.)  
3. Semântica e acessibilidade  
4. Interatividade com JS + estilização com CSS  

---

