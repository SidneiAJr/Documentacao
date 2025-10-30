# Tipos de Entrada no Android

Aqui estão os principais **tipos de entrada** que você pode configurar para um `EditText` no Android:

# Tipos de Entrada no Android

Aqui está uma tabela com os tipos de entrada e seus valores correspondentes para a propriedade `android:inputType`.

| **Tipo de Entrada**       | **Valor de `android:inputType`**    | **Descrição**                                 |
|---------------------------|-------------------------------------|-----------------------------------------------|
| **Texto Simples**          | `text`                              | Entrada de texto simples.                    |
| **Texto com E-mail**       | `textEmailAddress`                  | Entrada de e-mail.                           |
| **Senha**                  | `textPassword`                      | Entrada de senha (texto oculto).             |
| **Números**                | `number`                            | Entrada de números inteiros.                 |
| **Telefone**               | `phone`                             | Entrada de número de telefone.               |
| **Texto Multilinha**       | `textMultiLine`                     | Entrada de texto com várias linhas.          |
| **URL**                    | `textUri`                           | Entrada de URL.                              |
| **Nome de Pessoa**         | `textPersonName`                    | Entrada para nome da pessoa.                 |
| **Data e Hora**            | `datetime`                          | Entrada para data e hora.                    |
| **Endereço Postal**        | `textPostalAddress`                 | Entrada para endereço postal.                |
| **Número Decimal**         | `numberDecimal`                     | Entrada de números decimais.                 |
| **Número com Sinal**       | `numberSigned`                      | Entrada de números inteiros com sinal.       |
| **Texto com Maiúsculas**   | `textCapCharacters`                 | Entrada que força caracteres em maiúsculas.  |
| **Texto com Primeira Letra Maiúscula** | `textCapWords`             | Entrada que força a primeira letra de cada palavra em maiúscula. |
| **Texto com Primeira Letra de Sentença Maiúscula** | `textCapSentences` | Entrada que força a primeira letra de uma sentença em maiúscula. |
| **Texto para Pesquisa**    | `textSearch`                        | Entrada de texto para pesquisa.              |
| **Texto com Número e Senha** | `textVisiblePassword`             | Entrada de senha visível.                    |

> Detalhes sobre alguns tipos:

- text: Entrada genérica para qualquer texto.

- textEmailAddress: Ajustado para facilitar a entrada de endereços de e-mail.

- textPassword: Oculta o texto digitado, ideal para senhas.

- number: Permite apenas números inteiros.

- numberDecimal: Permite números com ponto decimal.

- datetime: Formato de data e hora, com input de data ou hora.

- Esses valores podem ser usados dentro do atributo android:inputType no XML, dependendo do tipo de dado que você quer que o usuário insira.
