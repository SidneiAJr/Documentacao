# 💰 Introdução a Juros Simples e Compostos

![Status](https://img.shields.io/badge/Status-Concluído-green)
![Categoria](https://img.shields.io/badge/Tema-Matemática%20Financeira-blue)
![Formato](https://img.shields.io/badge/Tipo-Estudo%20Teórico-orange)

> Conceitos fundamentais sobre **juros simples** e **juros compostos**, aplicados em finanças, investimentos e cálculo de rendimentos.

---

## 📘 Conceito de Juros

**Juros** é a remuneração do capital emprestado ou investido ao longo do tempo.  
Ele representa o **custo do dinheiro no tempo**, ou seja, quanto o valor aplicado ou devido cresce.

---

## 📗 Juros Simples

O **juros simples** é calculado **somente sobre o valor inicial (capital)**.  
O valor dos juros é o mesmo em todos os períodos.

### 🧮 Fórmula

\[
J = C \times i \times t
\]

| Símbolo | Significado |
|----------|--------------|
| **J** | Juros |
| **C** | Capital inicial |
| **i** | Taxa de juros (em decimal) |
| **t** | Tempo |

---

### 📊 Exemplo de Cálculo

**Exemplo:**  
Um capital de **R$ 1.000,00** é aplicado a uma taxa de **5% ao mês**, durante **4 meses**.

\[
J = 1000 \times 0.05 \times 4 = 200
\]

💡 **Juros totais:** R$ 200,00  
💰 **Montante final:**  
\[
M = C + J = 1000 + 200 = R$ 1.200,00
\]

---

## 📘 Juros Compostos

Nos **juros compostos**, os juros de cada período **são incorporados ao capital**, gerando **juros sobre juros**.  
É o tipo mais usado em aplicações financeiras reais.

### 🧮 Fórmula

\[
M = C \times (1 + i)^t
\]

| Símbolo | Significado |
|----------|--------------|
| **M** | Montante final |
| **C** | Capital inicial |
| **i** | Taxa de juros (em decimal) |
| **t** | Tempo (períodos) |

---

### 📊 Exemplo de Cálculo

**Exemplo:**  
Um capital de **R$ 1.000,00** é aplicado a uma taxa de **5% ao mês**, durante **4 meses**.

\[
M = 1000 \times (1 + 0.05)^4 = 1000 \times 1.21550625 = R$ 1.215,51
\]

💡 **Juros totais:**  
\[
J = M - C = 1215.51 - 1000 = R$ 215,51
\]

🧠 Perceba que o valor final é maior que no juros simples (R$ 1.200,00).

---

## ⚖️ Comparativo: Juros Simples x Compostos

| Característica | Juros Simples | Juros Compostos |
|----------------|----------------|----------------|
| Base de cálculo | Sempre o capital inicial | Capital cresce a cada período |
| Fórmula principal | J = C × i × t | M = C × (1 + i)^t |
| Crescimento | Linear | Exponencial |
| Uso comum | Empréstimos curtos, títulos antigos | Investimentos, poupança, financiamentos |

---

## 🧮 Exemplo em Python

```python
# Juros Simples
def juros_simples(C, i, t):
    J = C * i * t
    M = C + J
    return M

# Juros Compostos
def juros_compostos(C, i, t):
    M = C * (1 + i) ** t
    return M

# Exemplo de uso
C = 1000
i = 0.05
t = 4

print("Montante (Simples):", juros_simples(C, i, t))
print("Montante (Compostos):", juros_compostos(C, i, t))
