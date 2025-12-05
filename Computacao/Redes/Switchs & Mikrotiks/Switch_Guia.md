Switch> enable
Switch# configure terminal
Switch(config)# interface vlan1
Switch(config-if)# ip address 192.168.1.2 255.255.255.0
Switch(config-if)# no shutdown


---

# 🖧 VLAN em Switches

As **VLANs (Virtual Local Area Networks)** permitem segmentar fisicamente a rede, oferecendo maior segurança e desempenho.

## Criando uma VLAN no Switch

Exemplo de configuração de VLAN 10:


Switch(config)# vlan 10
Switch(config-vlan)# name SALES


## Atribuindo Portas à VLAN



Switch(config)# interface range fa0/1 - 24
Switch(config-if-range)# switchport mode access
Switch(config-if-range)# switchport access vlan 10


---

# 🔗 Trunking e Uplink

Trunking permite que múltiplas VLANs compartilhem o mesmo link entre switches.  
O **Uplink** é a porta usada para conectar o switch à rede maior (como o roteador ou outro switch).

## Configuração de Trunk


Switch(config)# interface fa0/1
Switch(config-if)# switchport mode trunk
Switch(config-if)# switchport trunk allowed vlan 10,20,30


---

# 🌐 STP - Spanning Tree Protocol

O **STP** previne loops de rede, que podem causar quedas e congestionamentos.  
O STP permite que apenas um caminho seja usado para cada rede, desativando automaticamente os caminhos redundantes.

## Habilitando STP


Switch(config)# spanning-tree vlan 1 root primary


---

# 🔄 Switching Avançado: LACP e EtherChannel

### LACP (Link Aggregation Control Protocol)
LACP permite combinar múltiplos links em um **único canal de dados** para **aumentar a largura de banda** e garantir **redundância**.

Exemplo de configuração de LACP:


Switch(config)# interface range fa0/1 - 2
Switch(config-if-range)# channel-group 1 mode active


---

# 📊 QoS e Controle de Banda

### QoS (Quality of Service)
O **QoS** permite priorizar tráfego de alta importância, como VoIP ou aplicações críticas.

Exemplo:


Switch(config)# class-map match-any VOICE
Switch(config-cmap)# match ip dscp ef


### Limitar banda por porta:


Switch(config)# interface fa0/1
Switch(config-if)# bandwidth 10000


---

# 🔐 Segurança em Switches

## Bloqueio de Endereços MAC


Switch(config)# interface fa0/1
Switch(config-if)# switchport port-security mac-address sticky


## Autenticação 802.1X
Autenticação de usuários em cada porta.

---

# 🧰 Monitoramento e Diagnóstico

Utilize ferramentas de monitoramento para verificar o tráfego da rede e o estado das interfaces.

Exemplos:


Switch# show interfaces status
Switch# show spanning-tree
Switch# show vlan brief


---

# 📚 Boas Práticas em Switches

1. **Use VLANs para segmentar a rede.**
2. **Configure STP para evitar loops.**
3. **Habilite o port security** para limitar o acesso físico.
4. **Desative portas não utilizadas** para evitar acessos indesejados.
5. **Monitore constantemente** a saúde do switch e da rede.
6. **Realize backups frequentes** das configurações do switch.

---

# 📌 Conclusão

Os switches desempenham um papel fundamental na estrutura da rede, **conectando e gerenciando dispositivos**.  
Este manual cobre desde **configurações básicas** até tópicos avançados como **VLANs**, **STP**, **
