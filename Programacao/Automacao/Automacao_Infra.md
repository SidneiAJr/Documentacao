# 📜 Script de Automação | Infra Estrutura:

## O que tem no Script?

- Verificação de Ping no DNS:
- Monitoramento de Servidor se Cair:
- Monitora Porta e serviço:
- Testa Internet e DNS
- Testa Acesso a Site:

````bash
@echo off
title Monitor de Servidor - Automação Turbo
color 0A

:: ====== CAMINHO DO LOG ======
set LOG=monitor_log.txt

:MENU
cls
echo ============================================
echo        🚨 Monitor de Servidor / Rede
echo ============================================
echo.
echo [1] Monitorar servidor e reiniciar se cair
echo [2] Monitorar porta e reiniciar serviço
echo [3] Testar internet (Ping 8.8.8.8)
echo [4] Testar acesso a site (google.com)
echo [0] Sair
echo.
set /p opc=Escolha uma opcao: 

if "%opc%"=="1" goto MONITOR_SERVER
if "%opc%"=="2" goto MONITOR_PORT
if "%opc%"=="3" goto PING_TEST
if "%opc%"=="4" goto SITE_TEST
if "%opc%"=="0" exit
goto MENU


:: ============================================================
:: 1 — MONITORAR SERVIDOR E REINICIAR SE CAIR
:: ============================================================
:MONITOR_SERVER
cls
echo --------------------------------------------
echo MONITORANDO SERVIDOR...
echo --------------------------------------------
echo.
set /p host=Digite o IP ou dominio do servidor: 

echo Monitorando servidor %host%...
echo Pressione CTRL + C para parar.
timeout /t 2 >nul

:LOOP_SERVER
ping -n 1 %host% >nul
if errorlevel 1 (
    echo [%date% %time%] Servidor %host% caiu! >> %LOG%
    echo Servidor caiu! Reiniciando...
    :: coloque aqui o comando que reinicia seu servidor
    :: exemplo: net stop MeuServidor ^& net start MeuServidor
) else (
    echo Servidor Online: %host%
)

timeout /t 3 >nul
goto LOOP_SERVER


:: ============================================================
:: 2 — MONITORAR PORTA E REINICIAR SERVIÇO
:: ============================================================
:MONITOR_PORT
cls
echo --------------------------------------------
echo MONITORAR PORTA
echo --------------------------------------------
echo.

set /p porta=Digite a porta a monitorar: 
set /p servico=Digite o nome do servico para reiniciar: 

echo Monitorando porta %porta%...
timeout /t 2 >nul

:LOOP_PORT
netstat -ano | find ":%porta%" >nul
if errorlevel 1 (
    echo [%date% %time%] Porta %porta% offline! Restart do serviço >> %LOG%
    echo Porta %porta% offline... Reiniciando serviço %servico%...
    net stop "%servico%" >nul
    net start "%servico%" >nul
) else (
    echo Porta %porta% OK!
)

timeout /t 3 >nul
goto LOOP_PORT


:: ============================================================
:: 3 — TESTE DE INTERNET (PING 8.8.8.8)
:: ============================================================
:PING_TEST
cls
echo Testando conexão com a internet...
echo.

ping 8.8.8.8 -n 1 >nul
if errorlevel 1 (
    echo Sem internet!
    echo [%date% %time%] Falha no ping ao DNS >> %LOG%
) else (
    echo Internet OK!
)

pause
goto MENU


:: ============================================================
:: 4 — TESTAR ACESSO A SITE
:: ============================================================
:SITE_TEST
cls
echo Testar acesso a site
echo.

set /p URL=Digite um site (ex: google.com): 

curl -Is %URL% >nul 2>&1
if errorlevel 1 (
    echo Site inacessível!
    echo [%date% %time%] Falha ao acessar %URL% >> %LOG%
) else (
    echo Site OK!
)

pause
goto MENU
````
