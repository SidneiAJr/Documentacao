# 🦀 Tutorial de Rust

Rust tem uma sintaxe que lembra C++, Python e JavaScript em alguns aspectos, mas é fortemente tipado e seguro.

| Tipo                                       | Descrição                          | Exemplo de Valor            | Tamanho Aproximado                     |
| ------------------------------------------ | ---------------------------------- | --------------------------- | -------------------------------------- |
| `i8`, `i16`, `i32`, `i64`, `i128`, `isize` | Números inteiros com sinal         | `-5`, `2000`                | 1, 2, 4, 8, 16 bytes (depende do tipo) |
| `u8`, `u16`, `u32`, `u64`, `u128`, `usize` | Números inteiros sem sinal         | `10`, `2000`                | 1, 2, 4, 8, 16 bytes (depende do tipo) |
| `f32`                                      | Número decimal de precisão simples | `3.14`, `-0.5`              | 4 bytes                                |
| `f64`                                      | Número decimal de precisão dupla   | `2.718281828`               | 8 bytes                                |
| `char`                                     | Um único caractere Unicode         | `'A'`, `'ß'`, `'😊'`        | 4 bytes                                |
| `bool`                                     | Verdadeiro ou falso                | `true`, `false`             | 1 byte                                 |
| `String`                                   | Texto alocado dinamicamente        | `String::from("Olá mundo")` | variável                               |
| `&str`                                     | Fatias de string (referência)      | `"Olá mundo"`               | variável                               |

## Variáveis em Rust são imutáveis por padrão. Para permitir alteração, use mut:

let mut x = 5;
x += 1;

