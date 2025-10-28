# Operações Matemáticas em COBOL
➕ ADD (somar)

➖ SUBTRACT (subtrair)

✖️ MULTIPLY (multiplicar)

➗ DIVIDE (dividir)

```cobol
IDENTIFICATION DIVISION.
PROGRAM-ID. CalculadoraSimples.

DATA DIVISION.
WORKING-STORAGE SECTION.
01  NUM1     PIC 9(3).
01  NUM2     PIC 9(3).
01  SOMA     PIC 9(4).
01  MEDIA    PIC 9(4)V9(2).

PROCEDURE DIVISION.
INICIO.
    DISPLAY "Digite o primeiro número: ".
    ACCEPT NUM1.
    DISPLAY "Digite o segundo número: ".
    ACCEPT NUM2.

    ADD NUM1 TO NUM2 GIVING SOMA.
    COMPUTE MEDIA = (NUM1 + NUM2) / 2.

    DISPLAY "Soma = " SOMA.
    DISPLAY "Média = " MEDIA.

    STOP RUN.

```
