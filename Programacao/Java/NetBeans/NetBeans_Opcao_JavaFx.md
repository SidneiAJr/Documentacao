# 🎨 Criar um JFrame Form

No painel Projects, clique com o botão direito sobre o pacote (ex: exemplo).

Vá em New > JFrame Form.

Dê um nome (ex: TelaPrincipal) e clique em Finish.

Isso abrirá o editor visual do NetBeans.

## 🏷️ 3. Adicionar um JLabel

No painel Palette (à direita), localize Swing Controls > Label.

Arraste e solte um JLabel na tela.

Clique nele e, na janela Properties, altere:

text → “Digite algo:”

font (opcional) → escolha uma fonte maior se quiser.

## 🏷️ JLabel

Um Label é um rótulo — um texto fixo que serve para identificar ou descrever algo na interface.
👉 Exemplo: “Digite seu nome:”, “Mensagem:”, “Resultado:”.

## 4️⃣ Adicionar um JTextArea

Na Palette, procure Swing Controls → Text Area.

Arraste e solte o componente abaixo do Label.

Para permitir rolagem (caso o texto seja grande):

Clique com o botão direito sobre o JTextArea

Escolha Surround With → JScrollPane

Nas Properties:

lineWrap = true (quebra de linha automática)

wrapStyleWord = true (quebra por palavra)

rows = 5

columns = 20
