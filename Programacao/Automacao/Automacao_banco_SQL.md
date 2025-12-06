# 📜Automacao | Banco de dados:

## Porque criei esse Script?

- Criar o Banco sql com a escrutura base
- Criar o SQl
- Ja criar todo o sistema:

## Script abaixo:

```bash

@echo off
title Criador de Banco - MySQL XAMPP
cls

echo ==============================
echo     CRIAR BANCO DE DADOS
echo ==============================

set /p DBNAME="Nome do banco: "
set /p DBUSER="Usuario do banco: "
set /p DBPASS="Senha do usuario: "
set /p ROOTPASS="Senha do root (XAMPP): "

echo Criando banco de dados...
mysql -u root -p%ROOTPASS% -e "CREATE DATABASE IF NOT EXISTS %DBNAME%;"

echo Criando usuario...
mysql -u root -p%ROOTPASS% -e "CREATE USER IF NOT EXISTS '%DBUSER%'@'localhost' IDENTIFIED BY '%DBPASS%';"

echo Aplicando permissoes...
mysql -u root -p%ROOTPASS% -e "GRANT ALL PRIVILEGES ON %DBNAME%.* TO '%DBUSER%'@'localhost'; FLUSH PRIVILEGES;"

echo Banco criado com sucesso!
echo.

:: Criar pasta e arquivo sql
md "Banco de Dados" >nul 2>&1
echo -- Arquivo SQL gerado automaticamente > "Banco de Dados\%DBNAME%.sql"

echo ==============================
echo Criar tabela agora
echo ==============================

set /p TABLENAME="Nome da tabela: "
set /p COLUMNS="Defina as colunas (ex: id INT PRIMARY KEY, nome VARCHAR(100)): "

echo Adicionando tabela ao arquivo SQL...

echo CREATE TABLE %TABLENAME% (%COLUMNS%); >> "Banco de Dados\%DBNAME%.sql"

echo.
echo Tabela adicionada ao arquivo SQL!
echo.
pause

````



