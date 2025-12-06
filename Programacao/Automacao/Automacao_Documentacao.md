# 📜 Automação | Criação de Documentação

## Script:

- Cria Documentação:
  - Version.md
  - Readme.md
  - Information.md
  - Struture.md
  - About.md
  - Route.md
  - sketch I.md
  - sketchII.md
 
````bash
@echo off
title Gerador de Documentação
color 0a

echo ================================
echo    Criando Documentação Base
echo ================================

:: Criar pasta
mkdir documentacao

:: Criar arquivos dentro da pasta
type nul > documentacao\Version.md
type nul > documentacao\Readme.md
type nul > documentacao\Information.md
type nul > documentacao\Structure.md
type nul > documentacao\About.md
type nul > documentacao\Route.md
type nul > documentacao\sketch_I.md
type nul > documentacao\sketch_II.md

echo.
echo Documentação criada com sucesso!
echo.
pause
````
