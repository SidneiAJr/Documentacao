# 📐 Tutorial de Espaçamento e Posicionamento | CSS

As propriedades a seguir controlam layout, posicionamento e espaçamento de elementos em CSS, permitindo criar páginas organizadas e responsivas.

## 🏗️ Layout e Posicionamento

| 💡 **Propriedade**                | 📝 **Descrição**                                                                               | 💻 **Exemplo de Uso**    |
| --------------------------------- | ---------------------------------------------------------------------------------------------- | ------------------------ |
| **`display`**                     | Define o tipo de caixa do elemento (`block`, `inline`, `flex`, `grid`).                        | `display: flex;`         |
| **`position`**                    | Define o posicionamento do elemento (`static`, `relative`, `absolute`, `fixed`, `sticky`).     | `position: absolute;`    |
| **`top / right / bottom / left`** | Define deslocamento do elemento quando `position` não é `static`.                              | `top: 10px; left: 20px;` |
| **`float`**                       | Posiciona o elemento à **esquerda** ou **direita**, permitindo que outros elementos contornem. | `float: right;`          |
| **`clear`**                       | Controla a quebra de elementos flutuantes.                                                     | `clear: both;`           |
| **`z-index`**                     | Define a ordem em camadas (sobreposição) de elementos posicionados.                            | `z-index: 10;`           |


## 📏 Espaçamento 

| 💡 **Propriedade** | 📝 **Descrição**                                           | 💻 **Exemplo de Uso** |
| ------------------ | ---------------------------------------------------------- | --------------------- |
| **`margin`**       | Espaço **externo** entre elementos.                        | `margin: 20px;`       |
| **`padding`**      | Espaço **interno** entre conteúdo e borda do elemento.     | `padding: 15px;`      |
| **`gap`**          | Espaço entre elementos em **flex** ou **grid** containers. | `gap: 10px;`          |
