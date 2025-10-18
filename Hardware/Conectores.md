# Conectores de Energia e Dados no PC (Guia Completo)

## 1️⃣ Organização por Função

### 🔌 Conectores de Energia (Power)
- ATX 24 pinos (placa-mãe)
- EPS 4+4 / 8+8 (CPU / VRM)
- PCIe 6 pinos (GPU básica)
- PCIe 8 pinos (GPU intermediária/forte)
- 12VHPWR 16 pinos (GPUs modernas RTX)
- SATA Power (HDD/SSD)
- Molex 4 pinos (legado / periféricos antigos)
- Floppy (Berg – legado)
- FAN 3 pinos / FAN 4 pinos (resfriamento)
- AIO_PUMP / PUMP / CPU_OPT (water coolers)
- RGB 12V (não endereçável)
- ARGB 5V (endereçável)

### 💾 Conectores de Dados / Armazenamento
- IDE / PATA (40 pinos - legado)
- FDD (34 pinos - legado)
- SATA DATA (7 pinos)
- SAS (servidor / workstation)
- M.2 SATA (usa protocolo SATA)
- M.2 NVMe (usa PCIe)
- U.2 (NVMe via cabo)
- PCIe (NVMe em formato de placa)

---

## 2️⃣ Explicação de Cada Conector

### Energia
- **ATX 24 pinos** → alimenta toda a placa-mãe
- **EPS 4+4 / 8+8** → alimenta CPU e VRM
- **PCIe 6 pinos** → GPUs básicas (até 75W)
- **PCIe 8 pinos** → GPUs médias/altas (até 150W)
- **12VHPWR** → até 600W para GPUs high-end
- **SATA Power** → SSDs/HDDs/alguns periféricos
- **Molex** → legado, controladores e fans antigos
- **Floppy (Berg)** → legado (disquetes)
- **FAN 3 pinos** → regulado por tensão (DC)
- **FAN 4 pinos (PWM)** → controle preciso
- **AIO_PUMP / PUMP** → bombas de water cooler
- **RGB 12V** → iluminação não endereçável
- **ARGB 5V** → iluminação endereçável (por LED)

### Dados / Armazenamento
- **IDE/PATA** → paralelo, antigo, 40 pinos
- **FDD** → 34 pinos, usado para disquete
- **SATA DATA** → padrão atual, até ~550MB/s
- **SAS** → versão profissional do SATA
- **M.2 SATA** → usa protocolo SATA no formato M.2
- **M.2 NVMe** → usa PCIe direto (alta velocidade)
- **U.2** → NVMe via cabo (enterprise)
- **PCIe (slot)** → NVMe em placa (AIC)

---

## 3️⃣ Evolução Histórica

| Era | Conector | Tipo |
|-----|----------|------|
| Anos 90 | IDE (PATA) | dados paralelos |
| 2003+ | SATA | dados seriais |
| 2008+ | SAS | servidor |
| 2015+ | M.2 NVMe | PCIe |
| Atual | U.2 / PCIe NVMe | enterprise |

---

## 4️⃣ Tensões e Limites (Energia)

| Conector | Tensão | Potência | Uso |
|----------|--------|----------|-----|
| ATX 24 pinos | 3.3 / 5 / 12V | 200W+ | Placa-mãe |
| EPS 4+4 | 12V | 150W+ | CPU |
| PCIe 6p | 12V | 75W | GPU básica |
| PCIe 8p | 12V | 150W | GPU média/alta |
| 12VHPWR | 12V | 450-600W | GPU high-end |
| SATA Power | 3.3 / 5 / 12V | 25-54W | SSD/HDD |
| Molex | 5 / 12V | ~75W | Periféricos |
| FAN 3/4p | 12V | baixo | Resfriamento |

---

## 5️⃣ Comparação (SATA x NVMe x U.2 x SAS)

| Conector | Protocolo | Velocidade | Uso |
|----------|-----------|------------|-----|
| SATA | SATA | até ~550MB/s | doméstico |
| M.2 SATA | SATA | até ~550MB/s | compacto |
| M.2 NVMe | PCIe | 3 a 7 GB/s | gamer/pro |
| U.2 | NVMe | enterprise | servidor |
| SAS | SAS | alto IOPS | datacenter |

---

## 6️⃣ Erros Comuns

| Erro | Problema |
|------|----------|
| Conectar ARGB (5V) em RGB (12V) | Queima o dispositivo |
| Adaptador Molex → GPU | Perigoso, risco de derreter |
| 12VHPWR mal encaixado | Pode derreter/queimar GPU |
| Confundir M.2 SATA com NVMe | Perda de desempenho |
| Instalar NVMe sem dissipador | Throttling térmico |
| Achar que SAS = SATA | Nem sempre compatível |

---

## ✅ Resumo Final

| Energia | Dados |
|--------|--------|
| ATX / EPS / PCIe / SATA Power / Molex | SATA / SAS / M.2 / U.2 / PCIe |
| RGB / ARGB / FAN / PUMP | SATA / NVMe / Enterprise |

