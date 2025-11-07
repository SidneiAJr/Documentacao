# 🧠 Explicação — Validação de Campos em Java Swing

A validação de campos em Java Swing serve para garantir que o usuário preencheu corretamente as informações antes de continuar uma ação, como salvar ou enviar um formulário.

Quando usamos isEmpty() e isBlank(), estamos verificando se o campo está vazio, mas há uma diferença importante entre os dois:

isEmpty() verifica apenas se a string tem zero caracteres. Se o usuário digitar apenas espaços, ela não será considerada vazia.

isBlank() verifica se a string está vazia ou contém apenas espaços em branco, sendo uma opção mais completa na maioria dos casos.

É comum também usar o método trim(), que remove os espaços no início e no fim do texto, ajudando a evitar erros em validações simples.

## 🔍 Uso dos operadores lógicos

&& (E lógico)
Serve para exigir que todas as condições sejam verdadeiras.
Exemplo: quando queremos validar que todos os campos estão preenchidos.
Se um deles estiver vazio, a condição inteira será falsa.

|| (OU lógico)
Serve para verificar se pelo menos uma das condições é verdadeira.
Exemplo: quando queremos mostrar uma mensagem se qualquer campo estiver vazio.
Se um deles não for preenchido, a condição já será verdadeira e o aviso será exibido.

##💡 Resumo prático

Pegamos o texto dos campos usando getText() ou getPassword().

Verificamos se estão vazios usando isBlank() ou isEmpty().

Combinamos as verificações usando && (todos os campos) ou || (qualquer campo).

Exibimos mensagens apropriadas com JOptionPane para orientar o usuário.
