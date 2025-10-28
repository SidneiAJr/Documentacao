# 🪟 Responsividade — Adaptando o Layout para Celulares

A **responsividade** garante que o site se ajuste automaticamente a diferentes tamanhos de tela — como celulares, tablets e desktops.

Para isso, usamos **Media Queries**, que aplicam estilos específicos com base na **largura do dispositivo**.

---

## 🧩 Exemplo Prático — Ajustando para telas menores

```css
/* Estilos padrão (para telas grandes) */
.a {
  padding: 80px;
}

.b {
  width: 60%;
}

h1 {
  font-size: 36px;
}

.btn {
  width: 120px;
  height: 50px;
  font-size: 18px;
}

/* Estilos aplicados em telas com largura até 768px */
@media (max-width: 768px) {
  .a {
    padding: 40px;
  }

  .b {
    width: 90%;
  }

  h1 {
    font-size: 24px;
  }

  .btn {
    width: 80px;
    height: 40px;
    font-size: 16px;
  }
}
