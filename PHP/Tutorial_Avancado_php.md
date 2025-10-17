# 🚀 Guia Avançado de PHP com Boas Práticas

Este guia foi criado para quem já entende o básico de PHP e quer evoluir para um **nível profissional**, seguindo **boas práticas, padrões de arquitetura, segurança, organização de código e padrões usados no mercado** (PSR, Composer, MVC, PDO seguro, etc).

---

## 📂 Estrutura de Projeto Profissional

Organize seu projeto assim:

/meu-projeto
│── /app
│ │── /Controllers
│ │── /Models
│ │── /Views
│ │── /Core (rotas, classe base, helpers)
│── /public
│ │── index.php (primeiro arquivo chamado pelo navegador)
│── /config
│ │── database.php
│── /vendor (criado automaticamente pelo Composer)
│── .env (configurações sensíveis)
│── composer.json


✅ **Motivo**: Isso separa **responsabilidades**, facilita manutenção e segue padrão de frameworks como Laravel.

---

## 🎼 Composer e Autoload

Composer é o **gerenciador de dependências oficial do PHP**.

### Inicializar um projeto com Composer:

```bash
composer init


