# 💻Introducao a Java:

## Tipos de Variaveis(Tipagem)

## 📦 Tipos de Variáveis em C#

| Tipo      | Descrição                                 | Exemplo                  |
|-----------|-------------------------------------------|--------------------------|
| `int`     | Número inteiro                            | `int idade = 25;`        |
| `double`  | Número decimal (alta precisão)            | `double pi = 3.14;`      |
| `float`   | Número decimal (menos preciso, usa `f`)   | `float peso = 70.5f;`    |
| `decimal` | Número decimal (usado em finanças)        | `decimal valor = 10.5m;` |
| `char`    | Um único caractere (entre aspas simples)  | `char letra = 'A';`      |
| `string`  | Conjunto de caracteres (texto)            | `string nome = "Ana";`   |
| `bool`    | Verdadeiro ou falso (booleano)            | `bool ativo = true;`     |
| `var`     | Tipo inferido automaticamente             | `var idade = 30;`        |
| `object`  | Tipo genérico base de todos os tipos      | `object x = "texto";`    |


## Operações de Comperações:

```Java
int n1 = 5;
int n2 = 5;
n1 == n2 -> Comparações Uso de equals
n1 + n2 -> Soma Porem e int não double, implicitamente não permite
n1 - n2 -> Subtracao Porem e int não double, implicitamente não permite
n1 < n2 -> Maior que
n1 > n2 -> Menor que
```
## Array:

- int[] array = { 1, 2, 3, 4, 5 };


## Condicao:

```Java
if(n1==n2){
   System.out.println("Não e Igual")
}else{
    System.out.println("E igual")
}
```
## Loop For:

```Java
class Main {
    public static void main(String[] args) {
        for(int i=0; i<=10; i++){
    System.out.println("Incremente"+i);
}
    }
}
```

## Switch Case:

```Java
int diaDaSemana = 3;

switch (diaDaSemana) {
    case 1:
        System.out.println("Domingo");
        break;
    case 2:
        System.out.println("Segunda-feira");
        break;
    case 3:
        System.out.println("Terça-feira");
        break;
    default:
        System.out.println("Dia inválido");
}

```

## Retorno:

```Java
public class Main {

    public static int soma(int a, int b) {
        return a + b;
    }

    public static void main(String[] args) {
        int resultado = soma(5, 10);
        System.out.println("Resultado da soma: " + resultado);
    }
}
```

## Tratamento de Erro:

```Java
public class Main {
    public static void main(String[] args) {
        try {
            int resultado = 10 / 0;
        } catch (ArithmeticException e) {
            System.out.println("Erro: Divisão por zero!");
        } finally {
            System.out.println("Execução concluída.");
        }
    }
}
```

## Operadores Comuns
Operador	Descrição	Exemplo
+	Soma	5 + 3 = 8
-	Subtração	10 - 4 = 6
*	Multiplicação	2 * 3 = 6
/	Divisão	10 / 2 = 5
%	Resto da divisão	10 % 3 = 1
==	Igualdade (primitivos)	a == b
!=	Diferente	a != b
<	Menor que	a < b
>	Maior que	a > b
<=	Menor ou igual	a <= b
>=	Maior ou igual	a >= b

```Java
int dia = 3;
switch (dia) {
    case 1: System.out.println("Domingo"); break;
    case 2: System.out.println("Segunda-feira"); break;
    case 3: System.out.println("Terça-feira"); break;
    default: System.out.println("Dia inválido");
}
```

```
int i = 0;
do {
    System.out.println("Contador: " + i);
    i++;
} while (i < 10);
```

```
public class Pessoa {
    String nome;
    int idade;

    public Pessoa(String nome, int idade) {
        this.nome = nome;
        this.idade = idade;
    }

    public void apresentar() {
        System.out.println("Olá, meu nome é " + nome + " e tenho " + idade + " anos.");
    }

    public static void main(String[] args) {
        Pessoa p = new Pessoa("Ana", 25);
        p.apresentar();
    }
}
```

