# 🧩 Generics em Java

Generics permitem criar **classes, interfaces e métodos** que trabalham com **tipos parametrizados**, aumentando a **reutilização** e **segurança de tipo** no código.

---

## 🔹 Exemplo básico

```java
public class Caixa<T> {
    private T item;

    public void adicionar(T novoItem) {
        this.item = novoItem;
    }

    public T getItem() {
        return item;
    }
}

public class Main {
    public static void main(String[] args) {
        Caixa<String> caixaTexto = new Caixa<>();
        caixaTexto.adicionar("Olá mundo!");

        Caixa<Integer> caixaNumero = new Caixa<>();
        caixaNumero.adicionar(42);

        System.out.println(caixaTexto.getItem());
        System.out.println(caixaNumero.getItem());
    }
}

```
