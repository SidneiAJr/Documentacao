# 🚀 Desenvolvimento do Foguete

## Introdução / História (resumida)
Os primeiros foguetes modernos começaram a ser desenvolvidos nas primeiras décadas do século XX. Durante a Segunda Guerra Mundial, foguetes como os alemães **V-1** e **V-2** demonstraram o potencial da tecnologia de foguetes em grande escala. Após a guerra, avanços continuaram e culminaram em veículos maiores e mais sofisticados, como o **Saturno V**, o foguetes russos tambem como o **soyuz*** que levou o ser humano à Lua.

> Observação: este projeto é de caráter educativo e visa entender os princípios físicos que regem o voo de foguetes, desde conceitos fundamentais até experimentos simples (como foguetes d'água).

---

## Objetivos deste documento
- Explicar os conceitos físicos essenciais por trás de um foguete.  
- Apresentar a **Equação de Tsiolkovsky** (equação do foguete) e outros cálculos úteis.  
- Discutir estática e estabilidade aerodinâmica.  
- Sugerir um experimento prático (foguete d’água) para laboratório escolar.  
- Apontar medidas de segurança e referências de estudo.

---

## 1. Conceitos básicos de física

### Força de empuxo (Thrust)
O empuxo é a força que impulsiona o foguete para frente. Em propulsão a jato ou a foguete, o empuxo é gerado pela expulsão de massa a alta velocidade:

\[
F = \dot{m} \cdot v_e + (p_e - p_a) \cdot A_e
\]

onde:
- \(F\) é o empuxo (N),
- \(\dot{m}\) é a vazão mássica (kg/s),
- \(v_e\) é a velocidade de escape dos gases (m/s),
- \(p_e\) é a pressão dos gases na saída,
- \(p_a\) é a pressão ambiente,
- \(A_e\) é a área da saída (m²).

Para foguetes escolares (ex.: foguete d'água), o termo predominante é \(\dot{m} \cdot v_e\).

---

### Equação do foguete (Tsiolkovsky)
A equação que relaciona a variação de velocidade (Δv) com a velocidade de exaustão e a massa inicial/final é:

\[
\Delta v = v_e \ln\left(\frac{m_0}{m_f}\right)
\]

onde:
- \(\Delta v\) é a variação de velocidade (m/s),
- \(v_e\) é a velocidade efetiva de exaustão (m/s),
- \(m_0\) é a massa inicial (com combustível),
- \(m_f\) é a massa final (após queimar combustível).

Essa equação mostra a importância do **mass ratio** \(\frac{m_0}{m_f}\) e de \(v_e\) para alcançar altas velocidades.

---

### Massa e razão de massa
- **Razão de massa (mass ratio)** \(R = \frac{m_0}{m_f}\). Quanto maior, maior potencial de Δv.  
- A massa estrutural (casco, motores) e a massa útil (carga, tripulação) reduzem a eficiência se forem muito altas.

---

### Resistência do ar (arrasto)
O arrasto aerodinâmico reduz a velocidade do foguete e consome empuxo:

\[
D = \tfrac{1}{2} \rho C_d A v^2
\]

onde:
- \(D\) é a força de arrasto,
- \(\rho\) é a densidade do ar,
- \(C_d\) é o coeficiente de arrasto,
- \(A\) é a área de referência (m²),
- \(v\) é a velocidade relativa ao ar.

Projetos aerodinâmicos tentam reduzir \(C_d\) e \(A\).

---

## 2. Estabilidade e controle

### Centro de massa (CM) vs Centro de pressão (CP)
Para estabilidade em voo vertical (sans rotação indesejada), normalmente queremos:

- **CM** (centro de massa) à frente (abaixo) do **CP** (centro de pressão) quando visto da base (ou seja, CP atrás do CM ao longo do eixo longitudinal).  
- Se o CP estiver à frente do CM, pequenas perturbações tendem a crescer (instabilidade).

### Aletas e controle
- As aletas aumentam a estabilidade (movem o CP para trás) e melhoram o retorno ao eixo de voo.
- Controle ativo (gimbaling do motor, superfícies móveis) é usado em veículos maiores.

---

## 3. Estágios (staging)
Estágios múltiplos aumentam a eficiência: descarregar massa inútil (tanques vazios, motores) permite que os estágios superiores alcancem maior Δv com menor massa.

---

## 4. Tipos de propulsão (resumo)
- **Químico sólido**: simples, alta densidade de energia, difícil de controlar (ex.: foguetes de modelo e boosters).  
- **Químico líquido**: combustível e oxidante separados; maior controle e eficiência.  
- **Híbrido**: combina sólido e líquido.  
- **Elétrico (ion, Hall)**: alta velocidade de exaustão, baixo empuxo — ideal para espaço (não para lançar da Terra).  
- **Altas tecnologias**: nuclear térmico, pulsados, etc. (uso experimental/teórico).
- 



