# Automacao Github:

## Porque criei esse script?
- Automação do github
- Toda Hora esqueço o pull
- chato de mais ++ 💢

````bash
@echo off
echo "           #######  ##   ##  ##   ##                     ####    ###### ";
echo "            ##   #  ###  ##  ##   ##                      ##     # ## # ";
echo "  ##  ##    ## #    #### ##  ##   ##            ### ##    ##       ## ";
echo "  #######   ####    ## ####  ##   ##           ##  ##     ##       ## ";
echo "  ## # ##   ## #    ##  ###  ##   ##           ##  ##     ##       ## ";
echo "  ##   ##   ##   #  ##   ##  ##   ##            #####     ##       ## ";
echo "  ##   ##  #######  ##   ##   #####                ##    ####     #### ";
echo "              
echo.
echo  Diretorio atual:
cd
echo.

set /p confirm="Esta pasta e a que gostaria de clonar o repositorio? correto? (s/n): "

if /I "%confirm%" NEQ "s" (
    echo ❌ Operacao Cancelada.
    pause
    exit
)

echo.
echo 🔄 Checando status...
git status
echo.

echo 🔽 Executando GIT PULL...
git pull
echo.

set /p msg="Digite a mensagem do commit: "

if "%msg%"=="" (
    echo ❌ Commit cancelado: mensagem vazia.
    pause
    exit
)

echo.
echo ➕ Adicionando arquivos...
git add .
echo.

echo 💬 Commitando...
git commit -m "%msg%"
echo.

echo 🚀 Fazendo push para a branch atual...
git push
echo.

echo ✅ Finalizado com sucesso!
pause

````
