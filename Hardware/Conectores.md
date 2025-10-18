# Conectores de Energia e Fans no PC (Explicação Completa)

## 1. Organização por Função

### 🔌 Conectores de Energia da Placa-Mãe (Main Power)
- ATX 24 pinos
- EPS 4+4 (CPU)

### 🎮 Conectores de Energia da GPU
- PCIe 6 pinos
- PCIe 8 pinos
- 12VHPWR (16 pinos – GPUs modernas RTX)

### 💾 Conectores de Energia de Armazenamento e Periféricos
- SATA Power
- Molex 4 pinos
- Floppy (legado)

### 🌀 Conectores para Fans e Bombas de Water Cooler
- FAN 3 pinos
- FAN 4 pinos (PWM)
- AIO_PUMP
- PUMP / CPU_OPT

### 💡 Conectores de Iluminação
- RGB 12V (4 pinos)
- ARGB 5V (3 pinos)

---

## 2. Explicação de Cada Conector

### ATX 24 pinos
- Alimenta toda a placa-mãe
- Entrega 3.3V, 5V e 12V
- Necessário em todos os PCs

### EPS 4+4 (CPU)
- Alimenta o VRM da CPU
- Necessário para processadores modernos
- Em placas high-end pode haver 8+8 pinos

### PCIe 6 pinos
- Fornece energia para GPUs básicas/antigas
- Até 75W de energia adicional

### PCIe 8 pinos (6+2)
- GPUs intermediárias e fortes
- Até 150W (por conector)
- Muitas GPUs usam dois ou mais

### 12VHPWR (16 pinos – padrão novo)
- GPUs NVIDIA RTX 4000/5000
- Até 600W
- Compacto, telemetria incluída
- Requer encaixe perfeito (evita derreter)

### SATA Power
- SSDs 2.5", HDDs, alguns periféricos
- Tensões: 3.3V / 5V / 12V

### Molex 4 pinos
- Legado
- Ainda usado em controladores antigos
- Risco maior de faísca / mau contato

### Floppy (Berg)
- Muito antigo
- Usado em drives de disquete

### FAN 3 pinos
- Controle por tensão (DC)
- Velocidade ajustada pelo PWM da placa-mãe? Não, por voltagem

### FAN 4 pinos (PWM)
- Controle mais preciso
- Padrão atual

### AIO_PUMP
- Alimenta bomba de water coolers AIO
- Geralmente 12V fixo

### PUMP / CPU_OPT
- Para sistemas de refrigeração mais fortes

### RGB 12V (4 pinos – não endereçável)
- Um único canal de cor
- Não individual por LED
- 12V

### ARGB 5V (3 pinos – endereçável)
- Cada LED pode ter cor independente
- Mais moderno
- Não compatível com RGB 12V

---

## 3. Tensões, Limites e Uso Recomendado

| Conector | Tensões | Potência típica | Uso recomendado |
|----------|----------|------------------|------------------|
| ATX 24 pinos | 3.3V / 5V / 12V | 200W+ | Placa-mãe |
| EPS 4+4 CPU | 12V | 150W+ | CPU / VRM |
| PCIe 6 pinos | 12V | 75W | GPUs básicas |
| PCIe 8 pinos | 12V | 150W | GPUs médias/fortes |
| 12VHPWR | 12V | até 600W | GPUs topo de linha |
| SATA Power | 3.3V / 5V / 12V | 25-54W | SSD/HDD/Periféricos |
| Molex | 5V / 12V | ~75W | Periféricos antigos |
| FAN 3p | 12V | baixo | Resfriamento |
| FAN 4p (PWM) | 12V | baixo | Resfriamento moderno |
| RGB 12V | 12V | baixo | LED simples |
| ARGB 5V | 5V | baixo | LED endereçável |

---

## 4. Resumo Final

| Categoria | Conectores |
|-----------|-------------|
| Placa-mãe | ATX 24p / EPS 4+4 |
| GPU | PCIe 6p / PCIe 8p / 12VHPWR |
| Armazenamento | SATA Power / Molex / Floppy |
| Refrigeração | FAN 3p / FAN 4p / AIO_PUMP / PUMP |
| Iluminação | RGB 12V / ARGB 5V |

