# 💻 Introdução ao Python

Python é uma linguagem de programação de alto nível, interpretada e orientada a objetos.
É amplamente usada em diversos domínios, como desenvolvimento web, automação, análise de dados, inteligência artificial, entre outros.

## 🧩 Tipos de Variáveis

int: Números inteiros.

float: Números decimais.

str: Strings (sequências de texto).

bool: Valores lógicos (True ou False).

list: Lista de elementos.

tuple: Tupla (sequência imutável).

dict: Dicionário (estrutura de chave-valor).

set: Conjunto (sem valores duplicados).


## ✏️ Declaração de Variáveis

Em Python, não precisamos declarar o tipo de variável explicitamente. O tipo é atribuído dinamicamente.

Exemplo:

```PY
numero = 10
nome = "Sidnei"
ativo = True
```

## 🌀 Estruturas de Controle
Condicional:
```PY
n1 = 5
n2 = 5

if n1 == n2:
    print("São iguais")
else:
    print("Não são iguais")

Loop (Laço de Repetição):
for i in range(11):
    print(f"Incrementado {i}")
```
## 🗃️ Listas

Em Python, as listas são usadas para armazenar vários itens.

# Criando uma lista
lista = [1, 2, 3, 5, 6, 7]

# Adicionando um item
lista.append(8)

# Removendo o último item
lista.pop()

# Filtrando elementos
lista_filtrada = [x for x in lista if x > 3]


## 🔑 Dicionários (ou Objetos)

Dicionários são estruturas de dados que armazenam pares chave-valor.

# Criando um dicionário

```PY
pessoa = {
    "nome": "Ana",
    "idade": 25,
    "cidade": "São Paulo"
}

# Acessando um valor
print(pessoa["nome"])  # Saída: Ana

# Adicionando ou modificando um valor
pessoa["idade"] = 26
```

## 🧮 Funções

Em Python, as funções são definidas com a palavra-chave def.

# Função simples
def soma(a, b):
    return a + b

# Função com valor de retorno
resultado = soma(10, 20)
print(resultado)  # Saída: 30

# Função lambda (função anônima)
multiplica = lambda a, b: a * b
print(multiplica(2, 3))  # Saída: 6


## 🖥️ Interação com o Usuário

Python permite interação com o usuário via a função input(), que lê entradas no terminal.

nome = input("Qual é o seu nome? ")
print(f"Olá, {nome}!")


## 🧩 Trabalhando com Arquivos

Para ler e escrever arquivos em Python, usamos as funções open(), read(), e write().

# Abrir um arquivo e escrever nele
with open("exemplo.txt", "w") as arquivo:
    arquivo.write("Olá, Mundo!\nEste é um arquivo de exemplo.")

# Ler um arquivo
with open("exemplo.txt", "r") as arquivo:
    conteudo = arquivo.read()
    print(conteudo)
