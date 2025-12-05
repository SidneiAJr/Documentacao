# 📘 Manual Completo Mikrotik
Guia definitivo para iniciantes e profissionais configurarem e entenderem um roteador Mikrotik.  
Aqui você aprende desde o básico até configurações de nível empresarial.

---

# 📌 Índice
1. [O que é Mikrotik](#-o-que-é-mikrotik)
2. [Para que serve](#-para-que-serve)
3. [Modelos e Categorias](#-modelos-e-categorias)
4. [Formas de Acesso](#-formas-de-acesso)
5. [Primeira Configuração](#-primeira-configuração)
6. [Configuração de Internet (WAN)](#-configuração-de-internet-wan)
7. [Configuração da Rede Interna (LAN)](#-configuração-da-rede-interna-lan)
8. [DHCP Server](#-dhcp-server)
9. [NAT / Máscara de Rede](#-nat--masquerade)
10. [DNS](#-dns)
11. [Firewall Básico](#-firewall-básico)
12. [VLANs no Mikrotik](#-vlans-no-mikrotik)
13. [QoS / Controle de Banda](#-qos--controle-de-banda)
14. [VPN (PPTP, L2TP, IPsec, SSTP)](#-vpn)
15. [Balanceamento de Links](#-balanceamento-de-links)
16. [Failover Automático](#-failover)
17. [Hotspot](#-hotspot)
18. [Backup e Restore](#-backup-e-restore)
19. [Comandos Úteis no Terminal](#-comandos-úteis)
20. [Boas Práticas de Segurança](#-boas-práticas-de-segurança)

---

# 🧠 O que é Mikrotik?
A **Mikrotik** é uma empresa que fabrica roteadores profissionais e desenvolve o sistema **RouterOS**, usado em ambiente corporativo e provedores.  
É conhecido por ser **barato, poderoso e extremamente configurável**.

---

# 🎯 Para que serve?
Um Mikrotik pode funcionar como:

- Roteador corporativo
- Firewall
- Balanceador de carga
- Controlador de banda (QoS)
- Servidor DHCP
- Servidor DNS
- Switch gerenciável
- Controlador de WiFi
- Gateway de internet
- Servidor VPN
- Hotspot
- PPPoE Server

---

# 📦 Modelos e Categorias
Tipos de Mikrotik:

| Categoria | Exemplos | Descrição |
|----------|----------|-----------|
| Home | hAP Lite / hAP ac2 | Uso doméstico |
| SMB | RB2011 / RB3011 | Empresas pequenas/médias |
| Enterprise | CCR1009 / CCR2004 | Alta performance |
| Wireless | cAP / wAP | WiFi corporativo |
| Switches | CRS séries | Switch gerenciável |

---

# 🔐 Formas de Acesso
Você pode acessar o Mikrotik via:

### ✔ WinBox (mais usado)
- Detecta automático via MAC
- Gerenciamento gráfico

### ✔ WebFig (navegador)
- Interface web

### ✔ SSH
- Acesso avançado por terminal

### ✔ Telnet
- Não recomendado (inseguro)

### ✔ Console via cabo serial
- Para recuperação

---

# 🛠 Primeira Configuração

## 🔄 Reset para configuração limpa


---

# 🌍 Configuração de Internet (WAN)

## 1. IP da WAN (fixo)


## 2. Gateway

---

# 🏠 Configuração da Rede Interna (LAN)

## 1. Definir IP da LAN

---

# 📡 DHCP Server


O Mikrotik perguntará:
- Interface
- Gateway
- Range de IPs
- DNS
- Lease Time

---

# 🔥 NAT / Masquerade

**Sem NAT ninguém navega.**



---

# 🌐 DNS

---

# 🛡 Firewall Básico

## Bloquear tráfego inválido


---

# 🏷 VLANs no Mikrotik

## Criar VLAN


## Atribuir IP à VLAN


---

# 📊 QoS / Controle de Banda

## Limitar banda por IP


## Priorizar tráfego VoIP

---

# 🔐 VPN

## L2TP com IPsec


---

# 🔀 Balanceamento de Links (Load Balance)
Método mais comum: PCC (Per Connection Classifier)




