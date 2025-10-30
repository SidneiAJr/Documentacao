# Permissões no Android

As **permissões** no Android são necessárias quando o aplicativo precisa acessar recursos sensíveis ou informações privadas no dispositivo do usuário, como câmera, localização, armazenamento, etc. A partir do Android 6.0 (API 23), as permissões precisam ser solicitadas em tempo de execução.

## Tipos Comuns de Permissões
# Permissões no Android

As **permissões** no Android são necessárias quando o aplicativo precisa acessar recursos sensíveis ou informações privadas no dispositivo do usuário, como câmera, localização, armazenamento, etc. A partir do Android 6.0 (API 23), as permissões precisam ser solicitadas em tempo de execução.

## Tipos Comuns de Permissões

- **Acesso à Câmera**: Para capturar fotos ou vídeos.
  - Ex: `android.permission.CAMERA`
- **Acesso à Localização**: Para obter a localização do dispositivo.
  - Ex: `android.permission.ACCESS_FINE_LOCATION`, `android.permission.ACCESS_COARSE_LOCATION`
- **Acesso ao Armazenamento**: Para ler e gravar arquivos no armazenamento do dispositivo.
  - Ex: `android.permission.READ_EXTERNAL_STORAGE`, `android.permission.WRITE_EXTERNAL_STORAGE`
- **Acesso à Internet**: Para permitir que o aplicativo se conecte à internet.
  - Ex: `android.permission.INTERNET`
- **Acesso ao Microfone**: Para gravar áudio.
  - Ex: `android.permission.RECORD_AUDIO`
- **Acesso aos Contatos**: Para ler a agenda de contatos do usuário.
  - Ex: `android.permission.READ_CONTACTS`
- **Acesso ao Bluetooth**: Para comunicação com dispositivos via Bluetooth.
  - Ex: `android.permission.BLUETOOTH`, `android.permission.BLUETOOTH_ADMIN`
- **Acesso à Câmera Frontal**: Para capturar vídeos ou tirar selfies.
  - Ex: `android.permission.CAMERA`

## Permissões em Tempo de Execução

A partir do Android 6.0, você precisa solicitar permissões em tempo de execução para acessar recursos sensíveis. Aqui está um exemplo de como pedir permissão para acessar a câmera:

```java
if (ContextCompat.checkSelfPermission(this, Manifest.permission.CAMERA) != PackageManager.PERMISSION_GRANTED) {
    ActivityCompat.requestPermissions(this, new String[]{Manifest.permission.CAMERA}, 1);
}
- **Acesso à Câmera**: Para capturar fotos ou vídeos.
  - Ex: `android.permission.CAMERA`
- **Acesso à Localização**: Para obter a localização do dispositivo.
  - Ex: `android.permission.ACCESS_FINE_LOCATION`, `android.permission.ACCESS_COARSE_LOCATION`
- **Acesso ao Armazenamento**: Para ler e gravar arquivos no armazenamento do dispositivo.
  - Ex: `android.permission.READ_EXTERNAL_STORAGE`, `android.permission.WRITE_EXTERNAL_STORAGE`
- **Acesso à Internet**: Para permitir que o aplicativo se conecte à internet.
  - Ex: `android.permission.INTERNET`
- **Acesso ao Microfone**: Para gravar áudio.
  - Ex: `android.permission.RECORD_AUDIO`
- **Acesso aos Contatos**: Para ler a agenda de contatos do usuário.
  - Ex: `android.permission.READ_CONTACTS`
- **Acesso ao Bluetooth**: Para comunicação com dispositivos via Bluetooth.
  - Ex: `android.permission.BLUETOOTH`, `android.permission.BLUETOOTH_ADMIN`
- **Acesso à Câmera Frontal**: Para capturar vídeos ou tirar selfies.
  - Ex: `android.permission.CAMERA`
```
## Permissões em Tempo de Execução

A partir do Android 6.0, você precisa solicitar permissões em tempo de execução para acessar recursos sensíveis. Aqui está um exemplo de como pedir permissão para acessar a câmera:

```java
if (ContextCompat.checkSelfPermission(this, Manifest.permission.CAMERA) != PackageManager.PERMISSION_GRANTED) {
    ActivityCompat.requestPermissions(this, new String[]{Manifest.permission.CAMERA}, 1);
}
```
