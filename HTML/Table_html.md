# Guia de Criação de Tabela no HTML

No HTML, usamos várias tags específicas para construir tabelas de forma semântica e bem organizada. Vamos entender cada uma delas:

## 🔹 <table>: Cria a tabela

A tag <table> é o contêiner principal que engloba todos os outros elementos de tabela.


<table>
  <!-- Conteúdo da tabela vai aqui -->
</table>


## 🔹 <tr>: Table Row → Linha da tabela

Cada linha de dados na tabela é criada com a tag <tr>. Dentro dela, podemos colocar as células (<td> ou <th>).


<tr>
  <td>Exemplo de célula</td>
</tr>


## 🔹 <td>: Table Data → Célula de dado

A tag <td> cria uma célula dentro de uma linha da tabela. Ela é usada para adicionar dados regulares na tabela.


<tr>
  <td>Nome</td>
  <td>João</td>



## 🔹 <thead>: Cabeçalho da tabela

A tag <thead> agrupa as linhas de cabeçalho da tabela. Geralmente, é usada para agrupar os <th> e facilitar a leitura do código.


<table>
  <thead>
    <tr>
      <th>Nome</th>
      <th>Idade</th>
    </tr>
  </thead>
</table>


## 🔹 <tbody>: Corpo da tabela

A tag <tbody> agrupa as linhas de dados da tabela. Isso ajuda na organização e permite que você separe visualmente o cabeçalho do corpo.

<table>
  <tbody>
    <tr>
      <td>João</td>
      <td>25</td>
    </tr>
  </tbody>
</table>


## 🔹 <tfoot>: Rodapé da tabela (opcional)

A tag <tfoot> é opcional, mas pode ser usada para agrupar as linhas de rodapé da tabela. Ela pode ser útil para somar ou mostrar totalizações, por exemplo.


<table>
  <tfoot>
    <tr>
      <td>Total</td>
      <td>150</td>
    </tr>
  </tfoot>
</table>

