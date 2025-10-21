# 🧾 Guia Completo de Tabelas no HTML

Além das tags principais, existem outras formas de **melhorar, organizar e personalizar** suas tabelas no HTML.

---

## 🔹 Estrutura Principal
Essas são as tags fundamentais de uma tabela:

| Tag | Função |
|-----|--------|
| `<table>` | Contêiner principal da tabela |
| `<tr>` | Define uma linha |
| `<td>` | Define uma célula de dados |
| `<th>` | Define uma célula de cabeçalho |
| `<thead>` | Agrupa o cabeçalho da tabela |
| `<tbody>` | Agrupa o corpo da tabela |
| `<tfoot>` | Agrupa o rodapé da tabela |

---

## 🔹 `<caption>` — Título da Tabela
Define um **título descritivo** para a tabela.  
Ele aparece por padrão **acima da tabela**.

```html
<table>
  <caption>Relatório de Vendas - 2025</caption>
  <thead>
    <tr>
      <th>Produto</th>
      <th>Quantidade</th>
      <th>Valor</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Camiseta</td>
      <td>50</td>
      <td>R$ 1.250,00</td>
    </tr>
  </tbody>
</table>
