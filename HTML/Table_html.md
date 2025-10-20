# Guia de Criação de Tabela no HTML

No HTML, usamos várias tags específicas para construir tabelas de forma semântica e bem organizada. Vamos entender cada uma delas:

## 🔹 `<table>`: Cria a tabela

A tag `<table>` é o contêiner principal que engloba todos os outros elementos de tabela.

```html
<table>
  <!-- Conteúdo da tabela vai aqui -->
</table>

<tr>
  <td>Exemplo de célula</td>
</tr>

<tr>
  <td>Nome</td>
  <td>João</td>
</tr>

<tr>
  <th>Nome</th>
  <th>Idade</th>
</tr>

<table>
  <thead>
    <tr>
      <th>Nome</th>
      <th>Idade</th>
    </tr>
  </thead>
</table>

<table>
  <tfoot>
    <tr>
      <td>Total</td>
      <td>150</td>
    </tr>
  </tfoot>
</table>

```
