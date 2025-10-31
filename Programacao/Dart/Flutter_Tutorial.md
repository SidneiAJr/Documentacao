# 🚀 Introdução ao Flutter

## 📘 O que é o Flutter?

O **Flutter** é um **framework open-source** criado pelo **Google** para o desenvolvimento de **aplicativos multiplataforma** — ou seja, com um único código-base é possível criar apps para:

- **Android**
- **iOS**
- **Web**
- **Desktop (Windows, macOS e Linux)**
- **Dispositivos embarcados (Embedded)**

Ele utiliza a linguagem **Dart**, também desenvolvida pelo Google, e é conhecido pelo seu **alto desempenho**, **agilidade no desenvolvimento** e **facilidade de personalização da interface**.

---

## 🌟 Principais Vantagens

| Vantagem | Descrição |
|-----------|------------|
| 🧩 **Cross-Platform** | Um único código-fonte roda em múltiplas plataformas. |
| ⚡ **Hot Reload** | Permite visualizar alterações no código em tempo real sem reiniciar o app. |
| 🧱 **Widgets Personalizáveis** | O Flutter é baseado em widgets, permitindo criar interfaces ricas e customizadas. |
| 🚀 **Desempenho Nativo** | O código é compilado diretamente para **ARM** ou **x64**, garantindo fluidez. |
| 🧠 **Comunidade Ativa** | Grande suporte da comunidade e da própria Google. |
| 🔌 **Integração com APIs e Plugins** | Facilmente integrável com pacotes de terceiros e bibliotecas nativas. |

---

## 🧰 Como Instalar o Flutter

### 🪟 Passo 1: Baixar o Flutter
1. Acesse o site oficial: [https://flutter.dev/docs/get-started/install](https://flutter.dev/docs/get-started/install)
2. Escolha o pacote compatível com seu sistema operacional:
   - **Windows**: arquivo `.zip`
   - **macOS**: arquivo `.zip`
   - **Linux**: arquivo `.tar.xz`
3. Extraia o arquivo em um diretório de sua preferência (ex: `C:\src\flutter`).
4. Adicione o diretório `flutter/bin` ao **PATH** do sistema.

> 💡 **Dica:** no Windows, você pode editar as variáveis de ambiente em  
> `Painel de Controle > Sistema > Configurações Avançadas > Variáveis de Ambiente`.

---

### 🧩 Passo 2: Instalar o Android Studio
O **Android Studio** é a IDE oficial recomendada para desenvolver com Flutter.

1. Baixe e instale o [Android Studio](https://developer.android.com/studio).
2. Após a instalação:
   - Vá em **File > Settings > Plugins**.
   - Pesquise e instale os plugins **Flutter** e **Dart**.
3. Crie um novo projeto Flutter para validar a instalação.

> 🧠 Também é possível usar outras IDEs, como **Visual Studio Code** (com as extensões Flutter e Dart) ou **IntelliJ IDEA**.

---

### 🧪 Passo 3: Verificar a Instalação
No terminal, execute:
```bash
flutter doctor
Doctor summary (to see all details, run flutter doctor -v):
[✓] Flutter (Channel stable, 3.x.x)
[✓] Android toolchain - develop for Android devices
[✓] Android Studio (version X.X)
[✓] Connected device
```

## Comandos:

| Comando                       | Descrição                                          |
| ----------------------------- | -------------------------------------------------- |
| `flutter create nome_projeto` | Cria um novo projeto Flutter                       |
| `flutter run`                 | Executa o app em um emulador ou dispositivo físico |
| `flutter build apk`           | Gera o APK para Android                            |
| `flutter clean`               | Limpa cache e build do projeto                     |
| `flutter pub get`             | Baixa dependências listadas no `pubspec.yaml`      |
| `flutter doctor`              | Verifica se tudo está configurado corretamente     |
