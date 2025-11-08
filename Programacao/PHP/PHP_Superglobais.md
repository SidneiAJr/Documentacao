# 🌐 Superglobais em PHP 

As superglobais são variáveis internas do PHP disponíveis em qualquer parte do código, sem necessidade de declaração.  
Elas armazenam informações sobre o servidor, cliente, requisições, sessões, cookies e arquivos enviados.

---

# 🔹 1. $_GET
Usada para receber dados enviados pela URL através do método GET.  
É ideal para buscas, filtros, paginação e parâmetros visíveis.  
Nunca deve ser usada para dados sensíveis, pois tudo aparece na URL.

---

# 🔹 2. $_POST
Usada para receber dados enviados por formulários através do método POST.  
É indicada para logins, cadastros e envio de informações privadas.  
Mais segura que GET, pois os dados não ficam expostos na URL.

---

# 🔹 3. $_REQUEST
Combina GET, POST e COOKIE.  
Pode causar conflitos e problemas de segurança, por isso não é recomendada em projetos sérios.

---

# 🔹 4. $_SERVER
Armazena informações do servidor e da requisição atual, como método HTTP, IP do usuário, navegador utilizado e caminhos internos.  
É útil para logs, segurança e identificação do cliente.

---

# 🔹 5. $_SESSION
Usada para guardar dados temporários de cada usuário durante a navegação.  
Essencial para sistemas de login, carrinhos de compras e preferências individuais.  
Requer sessão iniciada e precisa de cuidados de segurança, como regeneração de ID.

---

# 🔹 6. $_COOKIE
Armazena dados diretamente no navegador do usuário.  
Útil para lembrar preferências, configurar temas ou manter pequenas informações persistentes.  
Cookies podem ser modificados pelo usuário, então nunca são completamente confiáveis.

---

# 🔹 7. $_FILES
Contém informações sobre arquivos enviados por formulários.  
Armazena nome, tipo, tamanho e local temporário.  
Muito usada para upload de fotos, documentos e anexos.

---

# 🔹 8. $_ENV
Armazena variáveis de ambiente do sistema.  
Muito utilizada para guardar configurações importantes, como chaves de API, dados de conexão e parâmetros de produção.

---

# 🔹 9. $_GLOBALS
Permite acessar variáveis globais de qualquer parte do código.  
É pouco recomendada por dificultar organização e aumentar riscos de segurança.

---

# ✔️ Boas Práticas no Uso de Superglobais
- Sempre valide e sanitize qualquer entrada do usuário.  
- Prefira `filter_input()` para validar GET e POST.  
- Evite o uso de `$_REQUEST`.  
- Não armazene dados sensíveis em cookies.  
- Regere o ID da sessão ao efetuar login.  
- Use variáveis de ambiente para configurações críticas.

---

# 📝 Exercício Sugerido
Crie uma página que receba o nome do usuário via GET, a senha via POST e armazene o tema do site em um cookie.  
Depois exiba essas informações usando as superglobais adequadas.
