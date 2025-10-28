## 📐 CSS Flexbox – Justify Content & Align Items

No Flexbox, essas duas propriedades controlam o alinhamento dos itens dentro do container:

justify-content → alinhamento na direção principal (horizontal se flex-direction: row).

align-items → alinhamento na direção cruzada (vertical se flex-direction: row).

## justify-content
| Valor           | Descrição                                                                             |
| --------------- | ------------------------------------------------------------------------------------- |
| `flex-start`    | Itens alinhados **no início** do container. (padrão)                                  |
| `flex-end`      | Itens alinhados **no final** do container.                                            |
| `center`        | Itens **centralizados** na linha.                                                     |
| `space-between` | Itens distribuídos com **espaço igual entre eles**, sem espaço nas extremidades.      |
| `space-around`  | Itens distribuídos com **espaço igual ao redor** (metade do espaço nas extremidades). |
| `space-evenly`  | Itens distribuídos com **espaço igual entre todos, inclusive nas extremidades**.      |

## align-items

| Valor        | Descrição                                              |
| ------------ | ------------------------------------------------------ |
| `flex-start` | Alinha os itens no **início** do eixo cruzado.         |
| `flex-end`   | Alinha os itens no **final** do eixo cruzado.          |
| `center`     | Centraliza os itens verticalmente.                     |
| `baseline`   | Alinha os itens pela **linha de base** do texto.       |
| `stretch`    | Itens **preenchem** todo o espaço disponível (padrão). |
