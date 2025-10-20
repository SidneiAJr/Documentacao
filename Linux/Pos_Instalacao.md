# 🧩 Tutorial de Pós-Instalação — Debian Linux

Guia rápido e direto para deixar seu **Debian** pronto para uso após a instalação.  
Inclui atualização, instalação de programas essenciais, drivers, Flatpak, Snap, personalização e muito mais. 💻🐧

---

## ⚠️ Aviso
Antes de continuar, **crie um ponto de restauração** (se estiver em máquina virtual) ou tenha backup de seus arquivos importantes.  
Alguns comandos exigem **permissões de superusuário (root)**.

---

## 🧱 1. Atualizar o sistema

Logo após instalar o Debian, é importante atualizar os pacotes do sistema:

```bash
sudo apt update && sudo apt full-upgrade -y
sudo apt autoremove -y
```

## 🧰 2. Instalar pacotes básicos e utilitários

sudo apt install -y wget curl git vim nano unzip htop neofetch build-essential software-properties-common

## 🧩 3. Instalar codecs e suporte multimídia

Para reprodução de vídeos e áudios (MP3, MP4, etc):

```bash
sudo apt install -y ffmpeg vlc gstreamer1.0-plugins-base \
gstreamer1.0-plugins-good gstreamer1.0-plugins-bad gstreamer1.0-plugins-ugly \
gstreamer1.0-libav
```

```bash
sudo apt install -y firefox-esr gimp libreoffice vlc thunderbird \
filezilla gparted gdebi synaptic
```


