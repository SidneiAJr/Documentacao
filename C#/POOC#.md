# 🧱 O que é POO?

POO (Programação Orientada a Objetos) é um jeito de organizar o código pensando em objetos que têm propriedades (dados) e comportamentos (métodos).

Em C#, isso significa trabalhar com:

Classes

Objetos

Encapsulamento

Herança

Polimorfismo

``` C#
📦 Exemplo Básico de Classe e Objeto
// Definindo a classe
public class Pessoa
{
    // Propriedades (características)
    public string Nome;
    public int Idade;

    // Método (comportamento)
    public void Falar()
    {
        Console.WriteLine($"Olá, meu nome é {Nome} e tenho {Idade} anos.");
    }
```

``` C#
class Program
{
    static void Main(string[] args)
    {
        // Criando um objeto da classe Pessoa
        Pessoa p1 = new Pessoa();

        // Atribuindo valores
        p1.Nome = "João";
        p1.Idade = 25;

        // Chamando o método
        p1.Falar();  // Saída: Olá, meu nome é João e tenho 25 anos.
    }
}
```

``` C#
🧬 Os 4 Pilares da POO em C#
1. Encapsulamento

Esconder os detalhes internos e proteger os dados.

Exemplo com private e public:

public class ContaBancaria
{
    private double saldo;

    public void Depositar(double valor)
    {
        saldo += valor;
    }

    public double VerSaldo()
    {
        return saldo;
    }
}

}
```
