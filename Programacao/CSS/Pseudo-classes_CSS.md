# 🎯 Pseudo-classes e Pseudo-elementos em CSS

As **pseudo-classes** e **pseudo-elementos** permitem aplicar estilos com base em **estados**, **posições** ou **partes específicas** de um elemento, sem precisar alterar o HTML.

---

## 🔹 Pseudo-classes (`:`)

As pseudo-classes selecionam **um estado especial** de um elemento (ex: quando o usuário passa o mouse, foca, ou quando é o primeiro filho).

### 🧠 Exemplo:
```css
button:hover {
  background-color: #333;
  color: #fff;
}

input:focus {
  border-color: dodgerblue;
  outline: none;
}

li:first-child {
  font-weight: bold;
}
```

| 💡 **Pseudo-classe** | 📝 **Descrição**                                         | 💻 **Exemplo**                              |
| -------------------- | -------------------------------------------------------- | ------------------------------------------- |
| `:hover`             | Quando o cursor está sobre o elemento.                   | `a:hover { color: red; }`                   |
| `:focus`             | Quando o elemento está selecionado (ex: campo de texto). | `input:focus { border-color: blue; }`       |
| `:active`            | Quando o elemento está sendo clicado.                    | `button:active { transform: scale(0.95); }` |
| `:visited`           | Link já visitado.                                        | `a:visited { color: purple; }`              |
| `:first-child`       | Primeiro filho dentro de um elemento pai.                | `li:first-child { color: red; }`            |
| `:last-child`        | Último filho dentro de um elemento pai.                  | `li:last-child { color: blue; }`            |
| `:nth-child(n)`      | Seleciona filhos com base em sua posição.                | `li:nth-child(2n) { background: #eee; }`    |
| `:not(selector)`     | Seleciona todos que **não** correspondem ao seletor.     | `p:not(.destaque) { color: gray; }`         |
