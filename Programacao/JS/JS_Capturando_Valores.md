# JavaScript | Capturando Valores

## `getElementById`

O método `getElementById` retorna o primeiro elemento do documento que corresponde ao ID especificado. Esse método é usado para capturar um único elemento com base no atributo `id` do HTML.

### Exemplos:

```javascript
const element = document.getElementById('meuElemento');
console.log(element); // Exibe o elemento com o ID 'meuElemento'
```

### getElementsByClassName
````js
const elements = document.getElementsByClassName('minhaClasse');
console.log(elements); // Exibe todos os elementos com a classe 'minhaClasse'
````

### getElementsByClassName
````js
const parent = document.getElementById('meuElementoPai');
const elements = parent.getElementsByClassName('minhaClasse');
console.log(elements); // Exibe os elementos com a classe 'minhaClasse' dentro de 'meuElementoPai'
````

### querySelector
````js
const element = document.querySelector('#meuElemento');
console.log(element); // Exibe o primeiro elemento com o ID 'meuElemento'
````

### querySelectorAll
````js
const elements = document.querySelectorAll('.minhaClasse');
console.log(elements); // Exibe todos os elementos com a classe 'minhaClasse'
````
