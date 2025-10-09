# 💻Introducao a C#:

## Respositorios com C#

![Dev Jogos](https://github.com/SidneiAJr/Documentacao_Linguagens/blob/main/prints/1.PNG)

## Exemplo de Codigo - Unity:

![Exemplo de codigo](https://github.com/SidneiAJr/Documentacao_Linguagens/blob/main/prints/2.PNG)

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

## Array (Tamanho Fixo)

// Array de inteiros com 5 elementos
int[] arrayInt = new int[5] { 1, 2, 3, 4, 5 };  // Declaração e inicialização do array

// Array de doubles com 5 elementos
double[] arrayDouble = new double[5] { 1.1, 2.2, 3.3, 4.4, 5.5 };  // Declaração e inicialização do array

- int[,] matriz = new int[2, 3]  // Declara um array de 2 linhas e 3 colunas
{
    { 1, 2, 3 },
    { 4, 5, 6 }
};

Console.WriteLine(matriz[0, 0]);  // Saída: 1
Console.WriteLine(matriz[1, 2]);  // Saída: 6

## Comandos com Arrays:

- Declarar e Inicializar:

- new tipo[tamanho]{ valor1, valor2, ... }

- Acessar Elemento:

- arr[índice]

- Modificar Elemento:

- arr[índice] = valor

- Tamanho do Array:

- arr.Length

- Redimensionar o Array:

- Array.Resize(ref arr, novoTamanho)

- Copiar Array:

- arr.Clone()

- arr.CopyTo(outroArray, índice)

- Obter Índice Máximo:

- arr.GetUpperBound(0)

- Comandos com List<T>:

- Criar e Inicializar Lista:

- new List<T>()

- new List<T> { valor1, valor2, ... }

- Adicionar Elemento:

- lista.Add(valor)

- Inserir Elemento:

- lista.Insert(índice, valor)

- Remover Elemento:

- lista.Remove(valor)

- lista.RemoveAt(índice)

- Limpar Lista:

- lista.Clear()

- Verificar se Item Existe:

- lista.Contains(valor)

- Obter Índice de Item:

- lista.IndexOf(valor)

- Ordenar Lista:

- lista.Sort()

- Inverter Lista:

- lista.Reverse()

- Iterar sobre Lista:

- lista.ForEach(action)

## Condicao:
````
if(n1===n2){
    console.log("Não e Igual")
}else{
    console.log("E igual")
}

## Loop: 

using System;

public class HelloWorld
{
    public static void Main(string[] args)
    {
        
for(int i=0; i<=10; i++){
    Console.WriteLine($"Incrementado {i}");
}
    }
}


