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
