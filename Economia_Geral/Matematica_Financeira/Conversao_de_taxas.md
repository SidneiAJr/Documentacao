# 📊 Conversão de Taxas de Juros

A **conversão de taxas** é usada para transformar uma taxa de juros de um período para outro — por exemplo, de **anual para mensal**, **mensal para diária**, ou **nominal para efetiva**.

---

## 🔹 Tipos de Taxas

### ✅ Taxa Nominal
É a taxa **anual**, mas que precisa ser dividida em subperíodos (como meses).

Exemplo:
> 12% ao ano com capitalização mensal → 1% ao mês nominal.

---

### ✅ Taxa Efetiva
É a taxa **real aplicada em um período**, considerando a capitalização composta.

Fórmula geral:
\[
(1 + i_a) = (1 + i_m)^{12}
\]

Onde:  
- \( i_a \) = taxa anual efetiva  
- \( i_m \) = taxa mensal efetiva

---

## 🔹 Conversões Comuns

### 🧩 1. Anual → Mensal
\[
i_m = (1 + i_a)^{1/12} - 1
\]

Exemplo:
> 12% ao ano  
> \( i_m = (1 + 0.12)^{1/12} - 1 = 0.009488 = 0.9488\% \) ao mês

---

### 🧩 2. Mensal → Anual
\[
i_a = (1 + i_m)^{12} - 1
\]

Exemplo:
> 2% ao mês  
> \( i_a = (1 + 0.02)^{12} - 1 = 0.2682 = 26.82\% \) ao ano

---

### 🧩 3. Diária → Mensal
\[
i_m = (1 + i_d)^{30} - 1
\]

Exemplo:
> 0.05% ao dia  
> \( i_m = (1 + 0.0005)^{30} - 1 = 0.015 = 1.5\% \) ao mês

---

### 🧩 4. Nominal → Efetiva
\[
i_e = \left(1 + \frac{i_n}{n}\right)^n - 1
\]

Onde:  
- \( i_e \): taxa efetiva anual  
- \( i_n \): taxa nominal anual  
- \( n \): número de períodos no ano

Exemplo:
> 24% nominal ao ano com capitalização mensal  
> \( i_e = (1 + 0.24/12)^{12} - 1 = 0.2682 = 26.82\% \)

---

## 🔹 Dica Prática

| Tipo de Conversão | Fórmula | Exemplo (Taxa de entrada) | Resultado |
|-------------------|----------|----------------------------|------------|
| Anual → Mensal | \( (1+i_a)^{1/12} - 1 \) | 12% a.a | 0.9488% a.m |
| Mensal → Anual | \( (1+i_m)^{12} - 1 \) | 2% a.m | 26.82% a.a |
| Diária → Mensal | \( (1+i_d)^{30} - 1 \) | 0.05% a.d | 1.5% a.m |
| Nominal → Efetiva | \( (1+\frac{i_n}{n})^n -1 \) | 24% nominal a.a | 26.82% efetiva |

---

## 🧠 Observações Importantes
- **Nunca use regra de três simples** em juros compostos.  
- Sempre converta taxas para o **mesmo período** antes de comparar.  
- O uso correto evita erros em financiamentos, investimentos e cálculos de rentabilidade.

---

📘 **Referências**
- Gitman, L. J. *Princípios de Administração Financeira*  
- Brigham & Ehrhardt, *Financial Management: Theory & Practice*
