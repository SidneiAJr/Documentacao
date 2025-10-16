# ⚙️ Introdução a Batch File (Windows CMD) e Shell Script (Linux / macOS)

> Scripts de terminal automatizam tarefas, executam comandos e simplificam rotinas do sistema operacional.  
> O **Batch File** é usado no **Windows (cmd)** e o **Shell Script** no **Linux/macOS (bash/zsh)**.

---

## 🪟 Batch File (`.bat` ou `.cmd`)

### 📘 O que é?

Um **Batch File** é um arquivo de texto simples que contém comandos do **Prompt de Comando (cmd)**, executados em sequência.

### 🚀 Como Criar

1. Abra o **Bloco de Notas**  
2. Escreva seus comandos  
3. Salve como `meuscript.bat`  
4. Dê dois cliques para executar  

---

### 💡 Exemplo Simples

```bat
@echo off
echo Olá, mundo!
pause
```

📂 Variáveis
@echo off
set nome=Sidnei
echo Olá %nome%!
pause

🔁 Estruturas de Controle
IF
@echo off
set idade=18
if %idade% GEQ 18 (
    echo Maior de idade
) else (
    echo Menor de idade
)
pause

FOR
@echo off
for %%i in (1 2 3 4 5) do (
    echo Número: %%i
)
pause

⚙️ Executar Programas
@echo off
start notepad.exe
timeout /t 3
start calc.exe


🔹 start → Abre um programa ou arquivo.
🔹 timeout → Espera por alguns segundos.

📑 Entrada do Usuário
@echo off
set /p nome=Digite seu nome:
echo Bem-vindo, %nome%!
pause


🔹 set /p → Solicita entrada do usuário.

🧹 Exemplo Prático: Limpar Cache
@echo off
echo Limpando arquivos temporários...
del /q /s "C:\Windows\Temp\*.*"
echo Concluído!
pause

🐧 Shell Script (Bash / Zsh)
📘 O que é?

Um Shell Script é um arquivo de texto com comandos que o terminal Bash executa sequencialmente.
Usado em Linux e macOS para automatizar tarefas de sistema.

🚀 Como Criar

Abra um editor (nano, vim ou VS Code)

Escreva o script e salve como meuscript.sh

Dê permissão de execução:

chmod +x meuscript.sh


Execute:

./meuscript.sh

💡 Exemplo Simples
#!/bin/bash
echo "Olá, mundo!"


🔹 #!/bin/bash → Indica que o script será interpretado pelo Bash.
🔹 echo → Imprime texto no terminal.

📂 Variáveis
#!/bin/bash
nome="Sidnei"
echo "Olá, $nome!"


🔹 $variavel → Usa o valor da variável.

🔁 Estruturas de Controle
IF
#!/bin/bash
idade=18

if [ $idade -ge 18 ]; then
  echo "Maior de idade"
else
  echo "Menor de idade"
fi

FOR
#!/bin/bash
for i in {1..5}
do
  echo "Número $i"
done

🔄 WHILE
#!/bin/bash
contador=1
while [ $contador -le 5 ]
do
  echo "Contador: $contador"
  ((contador++))
done

📑 Entrada do Usuário
#!/bin/bash
read -p "Digite seu nome: " nome
echo "Bem-vindo, $nome!"


🔹 read → Captura a entrada do usuário.
🔹 -p → Mostra uma mensagem antes da entrada.

⚙️ Executar Programas e Comandos
#!/bin/bash
echo "Atualizando sistema..."
sudo apt update && sudo apt upgrade -y
echo "Sistema atualizado!"

📦 Funções
#!/bin/bash
saudacao() {
  echo "Olá, $1!"
}

saudacao "Sidnei"


🔹 $1 → Primeiro argumento passado para a função.

🧰 Exemplo Prático: Backup Automático
#!/bin/bash
origem="/home/user/documentos"
destino="/home/user/backup"

mkdir -p "$destino"
cp -r "$origem"/* "$destino"

echo "Backup concluído com sucesso!"
