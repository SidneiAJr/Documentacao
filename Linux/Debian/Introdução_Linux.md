# 🚀 Tutorial Básico: Baixar e Instalar Linux (Mint, MX Linux, antiX, Debian)

Beleza — aqui vai um guia prático e direto para baixar as ISOs do Linux Mint, MX Linux, antiX ou Debian, verificar integridade, criar um pendrive bootável e fazer a instalação básica. Vou cobrir Windows / Linux / macOS para criação do USB e dar dicas pós-instalação. Tudo em português, passo a passo. 📦💻

##  ***Aviso importante: faça backup dos seus dados antes de instalar! Alterações de particionamento podem apagar tudo no disco.***

## 1) Qual distro escolher 

Linux Mint — Excelente para iniciantes; interface amigável (Cinnamon, MATE, Xfce). Recomendado se você quer algo parecido com Windows e “funciona na boa”.

MX Linux — Leve, estável, muitas ferramentas gráficas próprias; ótimo para máquinas com recursos limitados.

antiX — Muito leve, pensado para hardware MUITO antigo; mínimo e rápido.

Debian — Muito estável e “pura”; ótima base para aprender; instalação pode ser mais manual em alguns pontos.

Escolha conforme: conforto (Mint) vs leveza (MX/antiX) vs estabilidade/padrão (Debian).

## 2) Baixando a ISO (passos gerais)

Acesse o site oficial da distribuição (procure "Linux Mint download", "MX Linux download", "antiX download", "Debian download" — baixe apenas dos sites oficiais ou mirrors de confiança).

Escolha a versão/edição adequada ao seu hardware (arquitetura x86_64 / amd64 na maioria dos PCs modernos).

Baixe a ISO para seu computador.

Não confie em ISOs baixadas de fontes não oficiais.

## 3) Verificar integridade da ISO (obrigatório)
Por que verificar?

Para garantir que o arquivo não foi corrompido e foi baixado do site oficial (evita ISOs alteradas por terceiros).

Passos comuns:

No site você normalmente encontra um SHA256 (ou MD5) e/ou assinatura GPG (.sig).

```bash
sha256sum nome-da-iso.iso
# compare o hash gerado com o hash indicado no site
```

```bash
shasum -a 256 nome-da-iso.iso
```

```bash
Get-FileHash nome-da-iso.iso -Algorithm SHA256
```

Verificar SHA256 no Linux/macOS:

Abra terminal no diretório do arquivo e rode:
