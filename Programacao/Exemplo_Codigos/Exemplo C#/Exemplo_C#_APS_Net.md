# Exemplo C# | ASP NET | Tecnico OLD | Cadastro de Hospedagem

Esse código foi desenvolvido em um projeto de um sistema de hospedagem (talvez para gerenciar pacotes e tarifas de hospedagens). É uma página ASP.NET com um formulário simples para cadastrar informações como nome da hospedagem, tarifa e pacotes disponíveis. O código é antigo (2014), e não lembro os detalhes exatos de como tudo foi implementado. 

Aqui está um resumo do que está acontecendo na página.

- `Esse Codigo foi desevolvido no tecnico nem eu muito menos eu lembra KKKKK`

````html
<%@ Page Title="" Language="C#" MasterPageFile="~/MasterPage.master" AutoEventWireup="true" CodeFile="ADDHOSPEDAGEM.ASPX.cs" Inherits="ADDHOSPEDAGEM" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>

<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    <table cellpadding="0" cellspacing="0" class="auto-style1">
        <!-- Campo Pacotes -->
        <tr>
            <td>Pacotes:
                <asp:DropDownList ID="DropDownList1" runat="server" DataSourceID="SqlDataSourcepacotes" DataTextField="pacote" DataValueField="id">
                </asp:DropDownList>
                <asp:SqlDataSource ID="SqlDataSourcepacotes" runat="server" ConnectionString="<%$ ConnectionStrings:ConnectionString %>" ProviderName="<%$ ConnectionStrings:ConnectionString.ProviderName %>" SelectCommand="SELECT * FROM [PACOTES]"></asp:SqlDataSource>
            </td>
        </tr>
        <!-- Campo Nome da Hospedagem -->
        <tr>
            <td>Nome da hospedagem:
                <asp:TextBox ID="TextBox1" runat="server" MaxLength="10"></asp:TextBox>
            </td>
        </tr>
        <!-- Campo Valor da Tarifa -->
        <tr>
            <td>Valor da Tarifa:
                <asp:TextBox ID="TextBox2" runat="server"></asp:TextBox>
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>
                <asp:Button ID="Button1" runat="server" Text="Gravar" />
                <asp:Button ID="Button2" runat="server" Text="Cancelar" />
            </td>
        </tr>
    </table>
</asp:Content>
````



