# 💹 Introdução a CDI, IPCA e IGP-M

![Status](https://img.shields.io/badge/Status-Em%20Desenvolvimento-blue)
![Categoria](https://img.shields.io/badge/Tema-Economia%20e%20Investimentos-green)
![Docs](https://img.shields.io/badge/Formato-Markdown-lightgrey)

> Conceitos essenciais para entender os principais **indicadores financeiros brasileiros**, que influenciam investimentos, financiamentos e correções monetárias.

---

## 📘 O que são Índices Econômicos?

Os índices econômicos servem para **medir o comportamento da economia ao longo do tempo**, como inflação, rendimento médio de investimentos ou custo de vida.

No Brasil, os mais utilizados são:

- **CDI (Certificado de Depósito Interbancário)**  
- **IPCA (Índice Nacional de Preços ao Consumidor Amplo)**  
- **IGP-M (Índice Geral de Preços do Mercado)**  

---

## 💰 CDI — Certificado de Depósito Interbancário

### 📖 Conceito

O **CDI** é a **taxa média dos empréstimos entre bancos**, com prazo de um dia.  
Ele serve como **referência para rentabilidade de investimentos de renda fixa**, como CDBs, LCIs, LCAs e fundos DI.

📌 É o **índice mais próximo da Selic**, mas com uma leve diferença técnica.

### 📊 Exemplo

- Se um **CDB rende 110% do CDI**, e o CDI atual é de **10% ao ano**, então:  
  \[
  Rentabilidade = 10\% \times 1.10 = 11\% ao ano
  \]

💡 **Usado em:** CDBs, LCIs, LCAs, fundos de renda fixa.

---

## 📈 IPCA — Índice de Preços ao Consumidor Amplo

### 📖 Conceito

O **IPCA** mede a **inflação oficial do país**, calculado pelo IBGE.  
Mostra quanto os **preços de bens e serviços consumidos pelas famílias** subiram em determinado período.

📌 É o índice **usado pelo Banco Central para definir a meta de inflação** e para corrigir títulos como o **Tesouro IPCA+**.

### 🧮 Cálculo Básico

\[
Inflação = \frac{Preço\ final - Preço\ inicial}{Preço\ inicial} \times 100
\]

### 📊 Exemplo

- Se o IPCA de um ano foi **4,5%**, significa que, em média, **os preços subiram 4,5%**.
- Um título Tesouro IPCA+ 2029 pagando **IPCA + 5%** renderia:  
  \[
  Rentabilidade\ real = 4.5\% + 5\% = 9.5\% ao ano
  \]

💡 **Usado em:** Tesouro IPCA+, contratos de aluguel e reajuste de tarifas públicas.

---

## 📊 IGP-M — Índice Geral de Preços do Mercado

### 📖 Conceito

O **IGP-M** é calculado pela **FGV (Fundação Getúlio Vargas)** e reflete a **variação de preços em três etapas da economia:**
- **IPA (Preços no Atacado)** — 60%
- **IPC (Preços ao Consumidor)** — 30%
- **INCC (Construção Civil)** — 10%

📌 É conhecido como **“inflação do aluguel”**, pois é usado como referência em **reajustes de contratos imobiliários** e outros acordos comerciais.

### 📊 Exemplo

- Se o IGP-M acumulado do ano foi de **8%**, um aluguel de R$ 2.000 passaria para:  
  \[
  Novo\ valor = 2000 \times (1 + 0.08) = R\$ 2.160,00
  \]

💡 **Usado em:** contratos de aluguel, tarifas de energia, escolas e planos de saúde.

---

## ⚖️ Comparativo Rápido

| Indicador | Tipo | Medido por | Usado em | Influência Principal |
|------------|------|-------------|-----------|----------------------|
| **CDI** | Taxa de juros | Mercado interbancário | CDB, LCI, LCA, Fundos | Rendimento de aplicações financeiras |
| **IPCA** | Inflação ao consumidor | IBGE | Tesouro IPCA+, contratos, reajustes | Poder de compra e política monetária |
| **IGP-M** | Inflação geral (mercado) | FGV | Aluguéis, tarifas, contratos | Reajustes contratuais |

---

## 🧠 Em Resumo

- **CDI:** base para **investimentos financeiros**.  
- **IPCA:** mede a **inflação oficial** (usado em políticas públicas e títulos públicos).  
- **IGP-M:** mede a **inflação de contratos e aluguéis**.  

Esses três índices caminham juntos e ajudam a entender **quanto o dinheiro rende ou perde valor ao longo do tempo**.

---

## 📊 Exemplo em Python

```python
# Simulação de investimento atrelado ao CDI, IPCA e IGP-M

cdi = 0.10      # 10% ao ano
ipca = 0.045    # 4.5% ao ano
igpm = 0.08     # 8% ao ano

capital = 1000

# Investimento atrelado ao CDI (110% do CDI)
cdi_total = capital * (1 + (cdi * 1.10))
# Tesouro IPCA+ 5%
ipca_total = capital * (1 + ipca + 0.05)
# Aluguel reajustado pelo IGP-M
igpm_total = capital * (1 + igpm)

print("CDI (110%): R$", round(cdi_total, 2))
print("Tesouro IPCA+5%: R$", round(ipca_total, 2))
print("Reajuste IGP-M: R$", round(igpm_total, 2))

```

## 📌 Outros Indicadores Relevantes

- **SELIC**: taxa básica de juros definida pelo Banco Central; referência para crédito e investimentos.
- **IPCA-15**: prévia mensal do IPCA — sinal antecipado da inflação oficial.
- **INPC**: inflação focada em famílias de menor renda; usada em reajustes salariais.
- **INCC**: custo da construção; usado em contratos de obras.
- **IGP-DI / IGP-10**: variações do IGP com datas de referência diferentes; IGP-M, IGP-DI e IGP-10 são úteis em reajustes contratuais.
- **Ptax**: taxa de câmbio referência do Bacen.
- **PIB / Taxa de desemprego**: indicadores macroeconômicos importantes para contexto.

