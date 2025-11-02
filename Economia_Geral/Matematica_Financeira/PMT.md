# 📘 O que é **PMT** em Financiamentos? (Java / Excel / Matemática Financeira)

A sigla **PMT** significa **Payment** (pagamento) e representa o **valor da parcela mensal**
de um financiamento, empréstimo ou investimento com **juros compostos**.

É usada em **Java, Excel, calculadoras financeiras e sistemas bancários**.

---

## 🧠 Fórmula da PMT

\[
\text{PMT} = \frac{PV \times i}{1 - (1 + i)^{-n}}
\]

| Símbolo | Significado |
|----------|-------------|
| `PMT` | Valor da **parcela mensal** |
| `PV` | Valor presente (**valor financiado**) |
| `i` | **Taxa de juros mensal** (ex: 0,02 para 2%) |
| `n` | **Número total de parcelas** (ex: 12 meses = 12) |

---

## ✅ Exemplo Rápido

**Financiamento de R$ 10.000,00**  
**Juros de 2% ao mês (0,02)**  
**Pagamento em 12 meses**

\[
PMT = \frac{10.000 \times 0,02}{1 - (1 + 0,02)^{-12}} \approx 936,75
\]

👉 Você pagaria **R$ 936,75 por mês** durante **12 meses**.

---

## 🛠️ Exemplo em Java (cálculo manual da PMT)

```java
double pv = 10000;   // valor do financiamento
double i = 0.02;     // 2% ao mês
double n = 12;       // 12 parcelas

double pmt = (pv * i) / (1 - Math.pow(1 + i, -n));

System.out.println("Parcela mensal: R$ " + String.format("%.2f", pmt));
```
