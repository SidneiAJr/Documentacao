# 📜Automação | Menu CLI

- Backup do projeto (ZIP + horário)

- Relatório de tamanho do projeto

- Criar arquivo de log do dia

````bash
@echo off
title Menu CLI - Utilidades
color 0A

:: Diretórios
set "PROJETO=%cd%"
set "BACKUP_DIR=%PROJETO%\backups"
set "LOG_DIR=%PROJETO%\logs"

if not exist "%BACKUP_DIR%" mkdir "%BACKUP_DIR%"
if not exist "%LOG_DIR%" mkdir "%LOG_DIR%"

:MENU
cls
echo ==========================================
echo            MENU CLI - UTILIDADES
echo ==========================================
echo 1 - Criar Backup (ZIP)
echo 2 - Relatório de tamanho do projeto
echo 3 - Criar log do dia
echo 0 - Sair
echo ==========================================
set /p OP=Escolha uma opcao: 

if "%OP%"=="1" goto BACKUP
if "%OP%"=="2" goto RELATORIO
if "%OP%"=="3" goto LOG
if "%OP%"=="0" exit
goto MENU

:BACKUP
cls
echo Criando backup...
set HORA=%time::=%
set HORA=%HORA: =0%
set ARQUIVO=backup_%date:/=-%_%HORA%.zip
set DESTINO=%BACKUP_DIR%\%ARQUIVO%

powershell -command ^
    "Add-Type -AssemblyName 'System.IO.Compression.FileSystem';" ^
    "[IO.Compression.ZipFile]::CreateFromDirectory('%PROJETO%', '%DESTINO%');"

echo.
echo [OK] Backup criado em:
echo %DESTINO%
pause
goto MENU

:RELATORIO
cls
echo Calculando tamanho do projeto...
set size=0

for /f "usebackq" %%A in (`powershell -NoProfile -Command ^
    "(Get-ChildItem -Recurse -File).Sum({$_.Length})"`) do set size=%%A

set /a MB=%size%/1024/1024

echo.
echo ==========================================
echo Tamanho total do projeto: %MB% MB
echo ==========================================
pause
goto MENU

:LOG
cls
set DATA=%date:/=-%
set LOGFILE=%LOG_DIR%\log_%DATA%.txt

echo Registrando log...

>> "%LOGFILE%" echo [%time%] Atividade registrada.

echo [OK] Log atualizado:
echo %LOGFILE%
pause
goto MENU
````
