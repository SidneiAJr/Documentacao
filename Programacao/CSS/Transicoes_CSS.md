# 🎨 1. Transições e Animações Suaves

Deixa o site mais vivo e moderno.

```css
/* Transição padrão para todos os elementos interativos */
* {
    transition: all 0.3s ease-in-out;
}

/* Animação de entrada suave na página */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.b {
    animation: fadeIn 0.8s ease forwards;
}
```
