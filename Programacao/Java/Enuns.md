# 🔷 Enums em Java

Enums são tipos especiais usados para representar **conjuntos fixos de constantes**.  
Eles tornam o código mais legível e seguro.

---

## 🔹 Exemplo básico

```java
public enum DiaDaSemana {
    SEGUNDA, TERCA, QUARTA, QUINTA, SEXTA, SABADO, DOMINGO
}

public class Teste {
    public static void main(String[] args) {
        DiaDaSemana hoje = DiaDaSemana.SEGUNDA;
        System.out.println("Hoje é: " + hoje);
    }
}
```

## Enum com atributos e métodos
```java
public enum Nivel {
    BAIXO(1), MEDIO(2), ALTO(3);

    private int valor;

    Nivel(int valor) {
        this.valor = valor;
    }

    public int getValor() {
        return valor;
    }
}

public class TesteEnum {
    public static void main(String[] args) {
        for (Nivel n : Nivel.values()) {
            System.out.println(n + " - " + n.getValor());
        }
    }
}
```
