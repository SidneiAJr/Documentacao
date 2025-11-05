# Tutorial Básico de React Native com Expo

Esse tutorial vai te guiar na criação do seu primeiro aplicativo React Native utilizando o **Expo**. O **Expo** facilita o processo de desenvolvimento, sem a necessidade de configuração de emuladores ou complicação com dependências nativas. Vamos criar um contador simples com botão.

---

## 1. **Instalação do Ambiente**

Antes de começar a codificar, você precisa ter algumas ferramentas instaladas no seu computador.

### Passo 1: Instalar o **Node.js**
1. Acesse o [site oficial do Node.js](https://nodejs.org) e baixe a versão **LTS**.
2. Siga o instalador e verifique se o Node.js foi instalado corretamente rodando no terminal:
```bash
   node -v
   npm -v
```

Passo 2: Instalar o Expo CLI

O Expo CLI é uma ferramenta de linha de comando que facilita a criação e o gerenciamento de aplicativos React Native.

Abra o terminal e rode o seguinte comando:

```bash
npm install -g expo-cli
```

Baixe o app Expo Go na App Store (para iOS) ou Google Play (para Android). Com esse app, você poderá visualizar seu aplicativo React Native no celular, escaneando o QR code gerado pelo Expo.
```bash
expo init MeuPrimeiroApp
```
