# Guia de Formulário em HTML

Os formulários em HTML são usados para coletar dados do usuário. Eles podem ser compostos de vários tipos de campos de entrada, como texto, botões, menus suspensos, caixas de seleção, etc.

### Estrutura Básica de um Formulário

A estrutura básica de um formulário em HTML usa a tag `<form>`, que envolve os campos de entrada e os botões necessários para submeter os dados.

```html
<form>
  <!-- Campos do formulário vão aqui -->
</form>
```
## Form em POST:

```html
<form action="/submit" method="POST">
  <!-- Campos do formulário -->
</form>
```

## Form em Get:
```html
<form action="/submit" method="GET">
  <!-- Campos do formulário -->
</form>
```

## Exemplo de Formulario:

```html
<form action="/submit" method="POST">
  <fieldset>
    <legend>Cadastro</legend>
    
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" placeholder="Seu nome" required minlength="3">
    
    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" placeholder="Seu e-mail" required>
    
    <label for="senha">Senha:</label>
    <input type="password" id="senha" name="senha" placeholder="Sua senha" required>
    
    <label for="comentarios">Comentários:</label>
    <textarea id="comentarios" name="comentarios" rows="4" cols="50" placeholder="Deixe seu comentário"></textarea>
    
    <label for="pais">País:</label>
    <select id="pais" name="pais">
      <option value="brasil">Brasil</option>
      <option value="portugal">Portugal</option>
      <option value="espanha">Espanha</option>
    </select>
    
    <button type="submit">Enviar</button>
  </fieldset>
</form>
```
