# Tipos de Input no HTML:

## 1. text - Campo de Texto

Usado para entrada de texto simples.

```html
<input type="text" name="nome" placeholder="Digite seu nome">
Atributos Comuns:

placeholder: Texto exibido quando o campo está vazio.
maxlength: Limita o número de caracteres digitados.
required: Torna o campo obrigatório

```

## 2. password - Campo de Senha

Usado para entrada de senhas. O texto digitado é ocultado.
```html
<input type="password" name="senha" placeholder="Digite sua senha">
```

## 3. email - Campo de E-mail

Valida que o valor inserido seja um e-mail válido (com formato usuario@dominio.com).

```html
<input type="email" name="email" placeholder="Digite seu e-mail" required>
```


## 4. tel - Campo de Telefone

Usado para coletar números de telefone. Não valida o formato (apenas permite números), mas é útil para campos específicos de telefone.
```html
<input type="tel" name="telefone" placeholder="Digite seu telefone" pattern="[0-9]{2}[0-9]{9}" required>
```

## 5. url - Campo de URL

Valida que o valor inserido seja uma URL válida (começando com http:// ou https://).

Atributos Comuns:

required: Torna o campo obrigatório.
```html
<input type="url" name="website" placeholder="Digite seu site" required>
```

## 6. umber - Campo de Número
```html
<input type="number" name="idade" min="0" max="100" step="1" required>
```

## 7. range - Intervalo Numérico
```html
<input type="range" name="volume" min="0" max="10" step="1" value="5">
```

## 8. date - Campo de Data
```html
<input type="date" name="nascimento" required>
```

## 9. time - Campo de Hora
```html
<input type="time" name="hora_evento">
```

## 10. datetime-local - Data e Hora Local
```html
<input type="datetime-local" name="datahora_evento">
```

## 11. month - Mês e Ano
```html
<input type="file" name="arquivo" accept="image/*, .pdf" multiple>
```




