# 💻Introducao a JavaScript:

**Tipo de Variaveis**
- Var: Pode ser Mutavel e para escopo Global
- Let: Mutavel
- Const: Não Mutavel

| Tipo       | Descrição                         | Exemplo                  |
|------------|---------------------------------|--------------------------|
| `string`   | Texto                           | `"Olá, mundo"`           |
| `number`   | Números (inteiros e decimais)   | `42`, `3.14`             |
| `boolean`  | Verdadeiro ou falso             | `true`, `false`          |
| `undefined`| Variável declarada sem valor    | `let x;`                 |
| `null`     | Valor nulo                      | `let y = null;`          |
| `object`   | Objetos, arrays, funções        | `{ nome: "Ana" }`, `[1,2,3]` |
| `symbol`   | Identificador único             | `Symbol("id")`           |
| `bigint`   | Números inteiros muito grandes | `9007199254740991n`      |


## Declaração de Variaveis: 

JavaScript não tem tipo direto, pode usar Number ou int, parsefloat.

## Loop: 
```JS
for(let i=0; i<=10; i++){
    console.log(`Incrementado ${i}`)
}
```
## Operações Matematicas:

- let n1 = 5;
- let n2 = 5;
- n1 === n2 -> Comparação.
- n1 + n2 -> Soma
- n1 - n2 -> Diminuir
- n1 * n2 -> Multiplicar
- n1 / n2-> Divisão
- n1 > n2 -> Menor que
- n1 < n2 -> Maior que
- n1 <= n2 -> Maior ou igual
- n2 >= n1 -> Menor ou igual 

## Condicao:
```JS
if(n1===n2){
    console.log("Não e Igual")
}else{
    console.log("E igual")
}
```
## Array:
```JS
let array = [1,2,3,5,6,7]
```
- map(): Para criar um novo array com base em um array existente.
- filter(): Para filtrar elementos de um array.
- reduce(): Para reduzir um array a um único valor.
- length: Retorna o comprimento da string.
- toUpperCase(): Converte todos os caracteres para maiúsculas.
- toLowerCase(): Converte todos os caracteres para minúsculas.
- substring(): Extrai uma parte da string.
- indexOf(): Encontra a posição de um caractere ou substring dentro de uma string.
- replace(): Substitui uma parte da string por outra.
- push(): Adiciona um item no final do array.
- pop(): Remove o último item do array.
- shift(): Remove o primeiro item do array.
- unshift(): Adiciona um item no início do array.
- splice(): Remove ou substitui elementos do array.
- slice(): Retorna uma nova fatia de um array.
- forEach(): Executa uma função para cada item do array.
- map(): Cria um novo array com base na aplicação de uma função a cada item.
- filter(): Cria um novo array com itens que passem em uma condição.
- reduce(): Reduz todos os itens de um array a um único valor.


## Interação com DOM (JS/HTML)
- document.getElementById(): Seleciona um elemento pelo seu id.
- document.getElementsByClassName(): Seleciona elementos pela classe.
- document.querySelector(): Seleciona o primeiro elemento que corresponde ao seletor CSS.
- document.querySelectorAll(): Seleciona todos os elementos que correspondem ao seletor.

## Função:
```JS
Funções
// Declaração de função tradicional
function soma(a, b) {
  return a + b;
}

// Função anônima / arrow function
const multiplica = (a, b) => a * b;
```

## Objetos(Dicionario)
```
let pessoa = {
  nome: "Ana",
  idade: 25,
  falar() {
    console.log(`Olá, meu nome é ${this.nome}`);
  }
};

pessoa.falar();
```

## Manipulação de Eventos (DOM)
```
// Adiciona um evento de clique a um botão
const btn = document.getElementById('meuBotao');
btn.addEventListener('click', () => {
  alert('Botão clicado!');
});
```

## Promises e Assíncrono
```
// Promise simples
const promessa = new Promise((resolve, reject) => {
  setTimeout(() => resolve('Sucesso!'), 1000);
});
promessa.then((resultado) => console.log(resultado));
```

## Async/Await
```
async function fetchData() {
  try {
    const response = await fetch('https://api.example.com/dados');
    const data = await response.json();
    console.log(data);
  } catch (error) {
    console.error('Erro:', error);
  }
}
fetchData();
```

## Módulos (import/export)
```
// arquivo.js
export const pi = 3.14;
export function soma(a, b) {
  return a + b;
}

// main.js
import { pi, soma } from './arquivo.js';
```
