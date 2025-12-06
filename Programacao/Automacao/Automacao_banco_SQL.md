# 📜Automacao | Banco de dados:

## Porque criei esse Script?

- Criar o Banco sql com a escrutura base
- Criar o SQl
- Ja criar todo o sistema:

## Script abaixo:

```bash

@echo off
title Criador de Banco e Tabelas MySQL

:: =============================
:: DADOS DO BANCO
:: =============================
set /p DBNAME="Nome do banco: "
set /p DBUSER="Usuario do banco: "
set /p DBPASS="Senha do usuario: "

echo Criando banco de dados...

mysql -u root -p -e "CREATE DATABASE IF NOT EXISTS %DBNAME%;"
mysql -u root -p -e "CREATE USER IF NOT EXISTS '%DBUSER%'@'localhost' IDENTIFIED BY '%DBPASS%';"
mysql -u root -p -e "GRANT ALL PRIVILEGES ON %DBNAME%.* TO '%DBUSER%'@'localhost'; FLUSH PRIVILEGES;"

echo Banco criado com sucesso!
echo.

:: =======================================
:: CRIAR PASTA E ARQUIVO SQL
:: =======================================
md "Banco de Dados" 2>nul
set SQLFILE="Banco de Dados\estrutura.sql"
type nul > %SQLFILE%

echo USE %DBNAME%; >> %SQLFILE%
echo. >> %SQLFILE%

:: =======================================
:: CRIAR TABELA
:: =======================================
set /p TABNAME="Nome da tabela: "
echo Criando tabela %TABNAME%...

set /p COLS="Quantas colunas a tabela vai ter? "

echo CREATE TABLE %TABNAME% ( >> %SQLFILE%

for /l %%i in (1,1,%COLS%) do (
    echo --------------------------------
    echo Coluna %%i

    set /p COLNAME="Nome da coluna: "
    set /p COLTYPE="Tipo (INT, VARCHAR, DATE, FLOAT, TEXT...): "
    
    set SIZEOPT=
    if /i "%COLTYPE%"=="VARCHAR" (
        set /p COLSIZE="Tamanho (ex: 255): "
        set SIZEOPT="(%COLSIZE%)"
    ) else (
        set SIZEOPT=
    )

    set /p NOTNULL="Not Null (S/N)? "
    if /i "%NOTNULL%"=="S" (set NN="NOT NULL") else (set NN=)

    set /p PRIMARYKEY="Primary Key (S/N)? "
    if /i "%PRIMARYKEY%"=="S" (set PK="PRIMARY KEY") else (set PK=)

    set /p AUTOI="Auto Increment (S/N)? "
    if /i "%AUTOI%"=="S" (set AI="AUTO_INCREMENT") else (set AI=)

    :: Montar linha SQL
    echo %COLNAME% %COLTYPE%%SIZEOPT% %NN% %PK% %AI%, >> %SQLFILE%
)

:: Remove a última vírgula: precisa terminar com ")"
powershell -Command "(Get-Content %SQLFILE%) -replace ',\s*$','' | Set-Content %SQLFILE%"

echo ) ENGINE=InnoDB; >> %SQLFILE%

echo.
echo Estrutura gerada no arquivo %SQLFILE%
echo Executando script SQL...

mysql -u root -p %DBNAME% < %SQLFILE%

echo.
echo Tabela criada com sucesso!
pause
````



