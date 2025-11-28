# 🐚 Shell | Linux Automatização

Automatizar tarefas no Linux torna seu ambiente mais prático, rápido e padronizado.
Um dos usos mais comuns é criar scripts de atualização automática do sistema.

Aqui está um modelo correto e funcional.

````shell
#!/bin/bash

echo "🔄 Bem-vindo ao Sistema de Atualização Direta!"
echo "---------------------------------------------"

# Atualiza lista de repositórios
sudo apt update -y

# Atualiza pacotes existentes
sudo apt upgrade -y

# Realiza atualizações de distribuição (kernel, pacotes importantes)
sudo apt dist-upgrade -y

# Remove pacotes obsoletos
sudo apt autoremove -y

# Limpa cache do apt
sudo apt autoclean

echo "✅ Atualização concluída!"
````

## Como Usar:

- 1. Primeiro ter o Vim Instalado:
- 2. Segundo ter noção de shell kk

## Depois de feito isso:
```shell
vim atualizar.sh
chmod +x atualizar.sh
```



