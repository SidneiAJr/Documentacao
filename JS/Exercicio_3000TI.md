# Resumo e Explicações de Código JavaScript

---

## 1. Verificando se um número é par ou ímpar

```js
const respostaDoUsuario = prompt("Digite o número que você quer testar");
const numero = Number(respostaDoUsuario);

if (numero % 2 === 0) {
  console.log("Passou no teste.");
} else {
  console.log("Não passou no teste.");
}

let fruta = prompt("Escolha uma fruta");
let preco;

switch (fruta) {
  case "Laranja":
    preco = 3.5;
    break;
  case "Maçã":
    preco = 2.25;
    break;
  case "Uva":
    preco = 0.30;
    break;
  case "Pêra":
    preco = 5.5;
    break; // BREAK PARA O ITEM c.
  default:
    preco = 5;
    break;
}

console.log("O preço da fruta", fruta, "é R$", preco);

const numero = Number(prompt("Digite o primeiro número."));

if (numero > 0) {
  console.log("Esse número passou no teste");
  let mensagem = "Essa mensagem é secreta!!!";
}

console.log(mensagem);

const numero = Number(prompt("Digite o primeiro número"));
const mensagem = "Essa mensagem é secreta!!!";

if (numero > 0) {
  console.log("Esse número passou no teste");
}

console.log(mensagem);
```
