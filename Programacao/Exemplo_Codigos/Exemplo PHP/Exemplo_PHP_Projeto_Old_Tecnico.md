# PHP | Projeto Completo Tecnico | OLD HTML 4

### Formulario em HTML

- Entradas de usuario com F usuario
- Entrdas de senha com F senha

````html
<table width="712" height="93" border="2">
    <tr>
        <td width="182" rowspan="2">
            <img src="images/9.jpg" alt="" width="176" height="140" />
        </td>
        <td width="512">Livraria Paluminio</td>
    </tr>
    <tr>
        <td>
            <form id="form2" name="form2" method="post" action="">
                <p><strong>Usuário:
                    <input type="text" name="f_usuario" id="f_usuario" />
                </strong></p>
                <p><strong>Senha:
                    <input name="f_senha" type="password" id="f_senha" />
                </strong>
                <input type="submit" name="button2" id="button2" value="OK" />
                </p>
            </form>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <form id="form1" name="form1" method="post" action="">
                <strong>Busca:
                    <input type="text" name="f_prod" id="f_prod" />
                </strong>
                <input type="submit" name="button" id="button" value="OK" />
            </form>
        </td>
    </tr>
</table>
````


