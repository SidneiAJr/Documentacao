## 🔌 Portas e Protocolos Mais Utilizados em Redes

| Porta | Protocolo | Camada | Descrição | Uso Comum |
|-------|-----------|--------|-----------|------------|
| 20/21 | FTP       | Aplicação | Transferência de arquivos | Servidores antigos / legado |
| 22    | SSH       | Aplicação | Acesso remoto seguro | Linux, roteadores, switches |
| 23    | Telnet    | Aplicação | Acesso remoto sem criptografia | Legado (não recomendado) |
| 25    | SMTP      | Aplicação | Envio de e-mails | Servidores de e-mail |
| 53    | DNS       | Aplicação | Resolução de nomes | Navegação na internet |
| 67/68 | DHCP      | Aplicação | Distribuição de IP automático | Roteadores e redes LAN |
| 80    | HTTP      | Aplicação | Sites sem criptografia | Web |
| 110   | POP3      | Aplicação | Recebimento de e-mails | Clientes de e-mail antigos |
| 143   | IMAP      | Aplicação | Sincronização de e-mails | E-mail moderno |
| 139   | NetBIOS   | Aplicação | Compartilhamento Windows | Legado, SMBv1 |
| 1433  | SQL Server| Aplicação | Conexão banco de dados MS SQL | Servidores |
| 3306  | MySQL     | Aplicação | Banco de dados MySQL/MariaDB | Web/PHP |
| 3389  | RDP       | Aplicação | Acesso remoto Windows | Administradores |
| 443   | HTTPS     | Aplicação | Sites seguros (SSL/TLS) | Web moderna |
| 445   | SMB       | Aplicação | Compart. de arquivos moderno | Windows |
| 5060  | SIP       | Aplicação | Voz sobre IP (VoIP) | Telefonia IP |
| 8080  | HTTP-alt  | Aplicação | HTTP alternativo | Servidores web/dev |

---

## 🔁 TCP vs UDP

| Tipo | Característica | Exemplos |
|------|----------------|----------|
| TCP  | Conexão confiável, garante entrega | HTTPS, SSH, FTP |
| UDP  | Mais rápido, sem confirmação | DNS, VoIP, jogos |

---

## 📌 Portas bem conhecidas x registradas

| Faixa | Descrição |
|--------|-----------|
| 0 - 1023 | Portas bem conhecidas (sistemas/serviços) |
| 1024 - 49151 | Portas registradas |
| 49152 - 65535 | Portas dinâmicas/efêmeras |

