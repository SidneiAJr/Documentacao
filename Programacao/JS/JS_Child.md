#J avaScript | Manipulação de Elementos DOM - Child Nodes

No JavaScript, podemos acessar e manipular os nós filhos de um elemento HTML através da interface DOM (Document Object Model). Aqui, vamos falar sobre os métodos lastChild, firstChild, e outros métodos úteis.

## 🏷️ lastChild

O lastChild é uma propriedade que retorna o último nó filho de um elemento. Isso pode ser um nó de texto, um elemento, ou um comentário.

```js
let element = document.getElementById("meuElemento");
let ultimoFilho = element.lastChild;
console.log(ultimoFilho);
```

## 🏷️ firstChild

O firstChild retorna o primeiro nó filho de um elemento, de forma similar ao lastChild.

```js
let element = document.getElementById("meuElemento");
let primeiroFilho = element.firstChild;
console.log(primeiroFilho);
```

## 🏷️ childNodes

A propriedade childNodes retorna uma coleção de todos os nós filhos de um elemento, incluindo nós de texto, comentários e elementos.
```js
let element = document.getElementById("meuElemento");
let filhos = element.childNodes;
console.log(filhos);
```
