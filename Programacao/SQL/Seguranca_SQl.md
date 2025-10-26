# 🔐 Gerenciamento de Usuários e Permissões no SQL

O controle de acesso em um banco de dados é essencial para garantir **segurança e integridade**.  
Cada usuário deve ter apenas as permissões necessárias para executar suas tarefas.

---

## 👤 Criação de Usuários

### MySQL
```sql
CREATE USER ''@'localhost' IDENTIFIED BY 'senha123';
```
