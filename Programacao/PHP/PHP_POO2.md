# POO - PHP 
```php
<?php
// Definição da classe Pessoa
class Pessoa {
    // Propriedades (atributos)
    public $nome;
    public $idade;

    // Método construtor para inicializar as propriedades
    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    // Método para apresentar a pessoa
    public function apresentar() {
        echo "Olá, meu nome é " . $this->nome . " e tenho " . $this->idade . " anos.";
    }
}

// Criando um objeto da classe Pessoa
$pessoa1 = new Pessoa("Ana", 25);

// Chamando o método apresentar do objeto
$pessoa1->apresentar();
?>
```
