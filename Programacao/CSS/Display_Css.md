# Diferença de Display no css:

- display: flex → Flexível, permite alinhar e distribuir elementos facilmente.

- display: block → Ocupa toda a largura disponível, elementos começam em uma nova linha.

- display: inline-block → Combina características de block e inline: mantém altura e largura, mas fica na mesma linha de outros elementos.

- display: inline → Elemento fica na linha, mas ignora altura e largura.

## Exemplo de codigo | CSS Display Flex:

```css
.b {
    display: flex;
    flex-direction: column;
    align-items: center;
    /* From https://css.glass */
    background: rgba(255, 255, 255, 0.2);
    border-radius: 16px;
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(5px);
    -webkit-backdrop-filter: blur(5px);
    border: 1px solid rgba(255, 255, 255, 0.3);
    font-weight: bolder;
    font-size: 20px;
    color: black;
}
```

## Exemplo de codigo | CSS Display Block:

```css
.caixa1 {
    display: block;
    height: 250px;
    background-color: #00c6ff;
    border-radius: 5px;
    font-size: 15px;
    font-weight: bolder;
}
```

## Exemplo de Codigo | CSS Inline:

```css
.caixa2 {
    display: inline;
    height: 250px;
    background-color: #00c6ff;
    border-radius: 5px;
    font-size: 15px;
    font-weight: bolder;
}
```
> ⚠️ height e width não funcionam em inline.

## Exemplo de Codigo | CSS 

```CSS
.caixa3 {
    display: inline-block;
    height: 250px;
    background-color: #00c6ff;
    border-radius: 5px;
    font-size: 15px;
    font-weight: bolder;
    flex-direction: column;
}
```
