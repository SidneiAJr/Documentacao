# 💻Introducao a Java:

## Tipos de Variaveis(Tipagem)

- Int -> Inteiro
- Double -> Numero quebrado
- Floar -> Com numero ou virgula
- char -> Um caracter

## Operações de Comperações:

- int n1 = 5;
- int n2 = 5;
- n1 === n2 -> Comparações
- n1 + n2 -> Soma Porem e int não double, implicitamente não permite
- n1 - n2 -> Subtracao Porem e int não double, implicitamente não permite
- n1 < n2 -> Maior que
- n1 > n2 -> Menor que

## Array:

- int[] array = { 1, 2, 3, 4, 5 };


## Condicao:

```Java
if(n1==n2){
    console.log("Não e Igual")
}else{
    console.log("E igual")
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
