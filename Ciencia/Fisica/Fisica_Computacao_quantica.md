# ⚛️ Física — Diferença entre Computação Quântica e Computação Convencional

A **computação quântica** e a **computação clássica** diferem fundamentalmente na forma como representam e processam informações.

## 💡 Computação Convencional
Na computação tradicional (ou clássica), a informação é armazenada em **bits**, que podem assumir apenas dois estados possíveis:
- `0` → nível lógico baixo (falso)
- `1` → nível lógico alto (verdadeiro)

Esses bits seguem as regras da **lógica booleana** e da **física clássica**, sendo manipulados por portas lógicas (AND, OR, NOT, etc.).  
Cada operação é determinística — ou seja, o sistema sempre está em **um único estado por vez**.

---

## 🧠 Computação Quântica
Na computação quântica, a unidade básica de informação é o **qubit** (*quantum bit*).  
Um qubit, graças aos princípios da **superposição** e do **emaranhamento quântico**, pode representar **simultaneamente** os estados `0` e `1`.

Matematicamente, um qubit é descrito por uma combinação linear dos dois estados básicos:

\[
|\psi\rangle = \alpha|0\rangle + \beta|1\rangle
\]

onde:
- `α` e `β` são **amplitudes de probabilidade complexas**;
- \(|\alpha|^2 + |\beta|^2 = 1\), garantindo a normalização do estado.

Isso permite que um computador quântico realize cálculos **em paralelo** — explorando múltiplas possibilidades de forma simultânea.

---

## ⚙️ Consequências Práticas
| Conceito | Computação Convencional | Computação Quântica |
|-----------|-------------------------|----------------------|
| Unidade básica | Bit (0 ou 1) | Qubit (0 e 1 ao mesmo tempo) |
| Física aplicada | Clássica | Quântica |
| Operações | Determinísticas | Probabilísticas |
| Processamento | Sequencial | Paralelo (via superposição) |
| Comunicação entre unidades | Independente | Emaranhamento quântico |
| Aplicações típicas | Softwares gerais, IA, bancos de dados | Criptografia, simulações quânticas, otimização complexa |

---

## 🧩 Em resumo
A **computação quântica** não substitui a convencional — ela **complementa**, oferecendo um modelo especializado para resolver **problemas de natureza quântica ou altamente complexa**, como:
- Fatoração de grandes números (criptografia RSA)
- Modelagem de moléculas e interações atômicas
- Otimização combinatória
- Simulações físicas em escala subatômica

Enquanto a computação tradicional continuará essencial para o uso geral, a quântica representa um salto conceitual na forma como entendemos e manipulamos a informação no nível mais fundamental da realidade.
