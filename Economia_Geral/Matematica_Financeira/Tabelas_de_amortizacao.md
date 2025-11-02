# 💰 Tabelas de Amortização — Price e SAC

Este guia explica os **dois principais sistemas de amortização** utilizados em financiamentos:  
a **Tabela Price (Sistema Francês de Amortização)** e o **SAC (Sistema de Amortização Constante)**.  
Inclui **fórmulas matemáticas**, **comparativos** e **exemplo em Java** para cálculos automáticos.

---

## 📘 Conceitos Básicos

**Amortização:** é o pagamento da dívida ao longo do tempo, com parcelas compostas de:
- **Amortização:** parte que reduz o saldo devedor.
- **Juros:** custo do capital emprestado.

A cada parcela, o **saldo devedor diminui**, e os juros são calculados sobre o valor restante.

---

## 🧮 1. Tabela Price (Sistema Francês)

### 🧩 Características:
- Parcelas **iguais** durante todo o financiamento.
- A **parte de juros** diminui com o tempo.
- A **amortização** (parte que quita a dívida) aumenta progressivamente.

### 📐 Fórmula da Parcela (PMT):
\[
PMT = PV \times \frac{i(1+i)^n}{(1+i)^n - 1}
\]

Onde:
- **PMT** = valor da parcela  
- **PV** = valor financiado (presente)  
- **i** = taxa de juros por período  
- **n** = número total de parcelas  

---

### 🧾 Exemplo de Cálculo

**Exemplo:**  
Valor financiado = R$ 10.000,00  
Taxa = 1% ao mês  
Prazo = 5 meses  

\[
PMT = 10.000 \times \frac{0.01(1.01)^5}{(1.01)^5 - 1} = 2.051,00
\]

💡 As parcelas serão de **R$ 2.051,00 fixas**.

---

## 📊 2. Sistema SAC (Amortização Constante)

### 🧩 Características:
- A **amortização é fixa**.
- As **parcelas diminuem** com o tempo.
- Os **juros** caem linearmente, pois o saldo devedor é reduzido de forma constante.

### 📐 Fórmulas:

**Amortização constante:**
\[
A = \frac{PV}{n}
\]

**Juros de cada parcela:**
\[
J_t = SD_{t-1} \times i
\]

**Parcela total:**
\[
PMT_t = A + J_t
\]

---

### 🧾 Exemplo de Cálculo

**Valor financiado:** R$ 10.000,00  
**Taxa:** 1% ao mês  
**Prazo:** 5 meses  

| Parcela | Saldo Devedor (R$) | Amortização (R$) | Juros (R$) | Parcela (R$) |
|----------|--------------------|------------------|-------------|---------------|
| 1 | 10.000,00 | 2.000,00 | 100,00 | 2.100,00 |
| 2 | 8.000,00 | 2.000,00 | 80,00 | 2.080,00 |
| 3 | 6.000,00 | 2.000,00 | 60,00 | 2.060,00 |
| 4 | 4.000,00 | 2.000,00 | 40,00 | 2.040,00 |
| 5 | 2.000,00 | 2.000,00 | 20,00 | 2.020,00 |

📉 As parcelas diminuem gradualmente.

---

## 💻 3. Exemplo em Java — Comparativo Price vs SAC

```java
public class Financiamento {
    public static void main(String[] args) {
        double valor = 10000;
        double taxa = 0.01; // 1% ao mês
        int meses = 5;

        System.out.println("=== Tabela PRICE ===");
        double pmt = valor * (taxa * Math.pow(1 + taxa, meses)) / (Math.pow(1 + taxa, meses) - 1);
        double saldo = valor;

        for (int i = 1; i <= meses; i++) {
            double juros = saldo * taxa;
            double amort = pmt - juros;
            saldo -= amort;
            System.out.printf("Parcela %d: R$ %.2f | Juros: R$ %.2f | Amort: R$ %.2f | Saldo: R$ %.2f%n",
                    i, pmt, juros, amort, saldo);
        }

        System.out.println("\n=== Tabela SAC ===");
        double amortizacao = valor / meses;
        saldo = valor;

        for (int i = 1; i <= meses; i++) {
            double juros = saldo * taxa;
            double parcela = amortizacao + juros;
            saldo -= amortizacao;
            System.out.printf("Parcela %d: R$ %.2f | Juros: R$ %.2f | Amort: R$ %.2f | Saldo: R$ %.2f%n",
                    i, parcela, juros, amortizacao, saldo);
        }
    }
}
```
