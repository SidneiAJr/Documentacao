# Automacao | Linux

## Script

- Instalção do basico

## Script Linux – Installer + Menu (APT baseado – Ubuntu/Debian)

````bash
chmod +x install.sh
./install.sh
````

```bash
#!/bin/bash

# ==========================================
# Linux Quick Installer
# Ubuntu / Debian Based
# ==========================================

# Funções
update_system() {
    echo "🔄 Atualizando sistema..."
    sudo apt update -y
    sudo apt upgrade -y
    sudo apt dist-upgrade -y
    sudo apt autoremove -y
    echo "✔ Atualização concluída!"
}

install_basic() {
    echo "📦 Instalando pacotes básicos..."
    sudo apt install -y htop curl wget git build-essential
    echo "✔ Básicos instalados!"
}

install_vscode() {
    echo "💻 Instalando VSCode..."
    sudo apt install -y software-properties-common apt-transport-https gpg

    wget -qO- https://packages.microsoft.com/keys/microsoft.asc | sudo gpg --dearmor -o /usr/share/keyrings/packages.microsoft.gpg
    echo "deb [arch=$(dpkg --print-architecture) signed-by=/usr/share/keyrings/packages.microsoft.gpg] https://packages.microsoft.com/repos/code stable main" | sudo tee /etc/apt/sources.list.d/vscode.list

    sudo apt update
    sudo apt install -y code
    echo "✔ VSCode instalado!"
}

install_netbeans() {
    echo "📘 Instalando Netbeans..."
    sudo snap install netbeans --classic
    echo "✔ Netbeans instalado!"
}

install_java() {
    echo "☕ Instalando Java (OpenJDK 17)..."
    sudo apt install -y openjdk-17-jdk
    echo "✔ Java instalado!"
}

install_ruby() {
    echo "💎 Instalando Ruby..."
    sudo apt install -y ruby-full
    echo "✔ Ruby instalado!"
}

install_media_apps() {
    echo "🎥 Instalando VLC e Firefox..."
    sudo apt install -y vlc firefox
    echo "✔ VLC e Firefox instalados!"
}

show_menu() {
    clear
    echo "========================================="
    echo "       HYDRO RS - LINUX INSTALLER"
    echo "========================================="
    echo "1) Atualizar sistema"
    echo "2) Instalar pacotes básicos"
    echo "3) Instalar VSCode"
    echo "4) Instalar Netbeans"
    echo "5) Instalar Java"
    echo "6) Instalar Ruby"
    echo "7) Instalar VLC + Firefox"
    echo "8) Instalar TUDO"
    echo "9) Sair"
    echo "========================================="
}

install_all() {
    update_system
    install_basic
    install_vscode
    install_netbeans
    install_java
    install_ruby
    install_media_apps
    echo "🎯 Instalação completa finalizada!"
}

# Loop do menu
while true; do
    show_menu
    read -p "Escolha uma opção: " choice

    case $choice in
        1) update_system;;
        2) install_basic;;
        3) install_vscode;;
        4) install_netbeans;;
        5) install_java;;
        6) install_ruby;;
        7) install_media_apps;;
        8) install_all;;
        9) echo "Saindo..."; exit;;
        *) echo "❌ Opção inválida!";;
    esac

    read -p "Pressione ENTER para voltar ao menu..."
done
````
