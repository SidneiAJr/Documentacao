# 💻 Introdução a TypeScript(Delirio Coletivo)
Tipos de Variáveis

var: Pode ser mutável, com escopo de função (evite usar).

let: Variável mutável, escopo de bloco.

const: Constante, imutável após inicialização

```TS
function soma(a: number, b: number): number {
  return a + b;
}
```

```TS
Função anônima / arrow function
const multiplicar = (a: number, b: number): number => a * b;
```

```
Condicional
if (idade > 18) {
  console.log("Maior de idade");
} else {
  console.log("Menor de idade");
}
```

```
let numeros: number[] = [1, 2, 3];
let nomes: Array<string> = ["Ana", "Carlos"];

// Tupla - array com tipos fixos em posições fixas
let pessoa: [string, number] = ["Maria", 30];
```

```
let numeros: number[] = [1, 2, 3];
let nomes: Array<string> = ["Ana", "Carlos"];

// Tupla - array com tipos fixos em posições fixas
let pessoa: [string, number] = ["Maria", 30];

```

```
for (let i = 0; i < numeros.length; i++) {
  console.log(numeros[i]);
}

// Usando forEach
numeros.forEach((num) => console.log(num));
```

```
interface Pessoa {
  nome: string;
  idade: number;
  ativo?: boolean; // opcional
}

const pessoa1: Pessoa = {
  nome: "João",
  idade: 28,
};
```

```
Classes
class Animal {
  nome: string;

  constructor(nome: string) {
    this.nome = nome;
  }

  mover(distancia: number): void {
    console.log(`${this.nome} moveu ${distancia} metros.`);
  }
}

const cachorro = new Animal("Rex");
cachorro.mover(10);
```

```
Manipulação do DOM
const botao = document.getElementById("btn") as HTMLButtonElement;

botao.addEventListener("click", () => {
  alert("Botão clicado!");
});
```
