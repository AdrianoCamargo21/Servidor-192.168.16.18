<?php header('Content-Type: text/html; charset=ISO-8859-1',true);?>
<!DOCTYPE html>
<html>
<body bgcolor="#F0FFF0">
<title>ViaBrasil.bay</title>
<link rel="stylesheet" href="css/style.css"></link>
</body>
<center>
<table width="1180" cellspacing="1" cellpadding="3" border="0" bgcolor="#8EF787">
<table width="1180" cellspacing="1" cellpadding="3" border="0" bgcolor="#8EF787">
<tr>
<img src="img/fundo1.jpg"alt="10" heigth ="120px" width="130px" >
<br>
<td><font color="Black" face="arial, verdana, helvetica">

<h2><center><font color="Black"> Entre Com Seu Usuario e Senha do Troll:</font></center></h2>
<center><form name = "form1" method= "post" action= "importa.php"></center>
<center>

	Nome: 	
		<input name = "login" type= "text" id= "login">
		<br>	
	Senha: 	
		<input name= "senha" type= "password" id="senha">
		<br>				
	Numero Da Nfe:	
		<input name= "numeronfe" type= "number" id="numeronfe">
		<br>
	Codigo Do Cliente Da Nfe :	
		<input name= "clientenfe" type= "number" id="clientenfe">
		<br>
	Data Da Nfe :		
		<input name="datanfe"  type= "date"  value="<?php echo date('Y/m/d');?>" id="datanfe" />
		
		
		
		
		
</center>
<center>
<font face="Arial" color="#000000">Selecione Origem/Destino Transferência</font>
<br>
<form method="post" action="importacao.php">
<select name="transferencia">
<option value="1">Caçador Para Videira</option>
<option value="2">Caçador Para Joinville</option>
<option value="3">Videira Para Caçador</option>
<option value="4">Videira Para Joinville</option>
<option value="5">Joinville Para Caçador</option>
<option value="6">Joinville Para Videra</option>
<option value="8">Caçador Para Lages</option>
<option value="7">Nfe Bom Jesus(Caçador) </option>
<option value="10">Nfe Bom Jesus(Lages) </option>
<option value="9">Caçador Para Porto União</option>
</select>
<br>
<tr>
   <td bgcolor="#8EF787">
   <font face="arial, verdana, helvetica">
   </font>
   </td>
</tr>
</table>


<table width="1180" cellspacing="1" cellpadding="3" border="0" bgcolor="#8EF787">
<tr>

<td><font color="Black" face="arial, verdana, helvetica">

<center>


<font face="Arial" color="black">Data Nfe Bom Jesus:</font>
<input name = "databomjesus" type= "date" id= "databomjesus">
<br>
<font face="Arial" color="black">Nfe Bom Jesus:</font>
<input name = "nfebomjesus" type= "number" id= "nfebomjesus">
<br>
<form method="post" action="importacao.php">
<input class="btn btn-green" type="submit" name="inativar" value="Fazer Transferência " />
<input class="btn btn-red" type="reset" value="Cancelar" />


 
 </center>
 
 
 </tr>
 
 <td bgcolor="#00FFFF">
   <font face="arial, verdana, helvetica">
   </font>
   </td>
</table>



 
</font></td>
</tr>

<br><br>
<table width="1180" cellspacing="1" cellpadding="3" border="0" bgcolor="#8EF787">
<tr>
<b></b>
<td><font color="Black" face="arial, verdana, helvetica">
<center>
<h2>Inativar Uso e Consumo</h2>
<form method="post" action="importacao.php">
<select name="inativarl">
<option value="1"> Produtos de Caçador</option>
<option value="2">Produtos de Videira</option>
<option value="3">Prudutos de Joinville</option>
<option value="4">Produtos de Lages</option>
</form>
</select>
<br>
<form method="post" action="importacao.php">
        </select>
	    <input class="btn btn-green"  type="submit" name="inativar" value="CONFIRMA" />
        <input class="btn btn-red" type="reset" value="Cancelar" />
</center>
</font></td>
</tr>
<tr>
   <td bgcolor="#00FFFF">
   <font face="arial, verdana, helvetica">
   </font>
   </td>
</tr>
</table> 
<br>

<table width="1180" cellspacing="1" cellpadding="3" border="0" bgcolor="#8EF787">
<tr>
<td><font color="Black" face="arial, verdana, helvetica">
<center>


<h2>Parcela Manual</h2>
<form method="post" action="importacao.php">
<select name="Parcela">
<option value="1">Sistema de Caçador</option>
<option value="2">Sistema de Videira</option>
<option value="3">Sistema de Joinville</option>
<option value="4">Sistema de Lages</option>
</select>
</center>
<center>
	Código do Cliente:	
		
		<input name= "Codigo" type= "number" id="datanfe">
		<br>
		
	Nfe:	
		<input name= "ClientNfe" type= "number" id="datanfe">
		<br>
		
			Vencimento:	
		<input name= "Vencimento" type= "date" id="datanfe">
	<br>
	<form method="post" action="importacao.php">
<input class="btn btn-green" type="submit" name="inativar" value="Inclui" />
	<input class="btn btn-red" type="reset" value="Cancelar" />
</select>	
	</center>

   
</font></td>
</tr>
<tr>
   <td bgcolor="#00FFFF">
   <font face="arial, verdana, helvetica">
   </font>
   </td>
</tr>
</table>
<br>
 

<table width="1180" cellspacing="1" cellpadding="3" border="0" bgcolor="#8EF787">
<tr>
<td><font color="Black" face="arial, verdana, helvetica">
<center>

<h3	>Consulta Grupos Por Linha:</h3>
<form method="post" action="importacao.php" name="inativar" >
		<select name="linhas">
		<option value="1">Sistema de Caçador</option>
		<option value="2">Sistema de Videira</option>
		<option value="3">Sistema de Joinville</option>
		<option value="4">Sistema de Lages</option>
		</select>
	Linha:		
		<input name= "linha" type= "number" id="linha">
		<br>

		
		<FORM>	
		
		<INPUT type="radio" name="saldo" checked="yes" value="T">Todos	
		<INPUT type="radio" name="saldo" value="S">Com Saldo
		<INPUT type="radio" name="saldo" value="N">Negativos</P>


		
				
		<input class="btn btn-green" type="submit" name=inativar value="SELECIONAR" />
		<input class="btn btn-red" type="reset" value="Cancelar" />
		<br><br/>






</form>
</center>
</font>

</td>

</tr>
<td bgcolor="#00FFFF">
   <font face="arial, verdana, helvetica">
   </font>
   </td>
</table>

<script type="text/javascript">
function cacador()
{
location.href= "http://192.168.13.2/Desenvolver/cacador.html"
}
function spark()
{
location.href= "http://192.168.10.30:9090"
}
function Manager()
{
location.href= "http://192.168.11.2:8081"
}
function Nfe()
{
	location.href= "http://192.168.13.2/Desenvolver/transferencia.html"
}
function historico()
{
	location.href= "http://192.168.13.2/Desenvolver/historico.html"
}
function vendas()
{
	location.href= "http://192.168.13.2/via.html"
}
function produtosvideira()
{
	location.href= "http://192.168.13.2/Desenvolver/produtos.php"
}
function produtosjoinville()
{
	location.href= "http://192.168.13.2/Desenvolver/produtosj.php"
}
function replica()
{
	location.href= "http://192.168.13.2/Desenvolver/replica.php"
}	
function pedido()
{
	location.href= "http://192.168.13.2/Desenvolver/Pedidos.php"
}
function reducao()
{
	location.href= "http://192.168.13.2/Desenvolver/Reducao.html"
}
function energia()
{
	location.href= "http://192.168.13.2/Desenvolver/energia.html"
}
function cte()
{
	location.href= "http://192.168.13.2/Desenvolver/Cte.html"
}
function servico()
{
	location.href= "http://192.168.13.2/Desenvolver/servicos.html"
}
function reducaov()
{
	location.href= "http://192.168.13.2/Desenvolver/Reducaov.html"
}
function backup()
{
	location.href= "http://192.168.13.2/Desenvolver/backup.html"
}
function clientes()
{
	location.href= "http://192.168.13.2/Desenvolver/Clientes.html"
}
function paf()
{
	location.href= "http://192.168.13.2/Desenvolver/Idpaf.php"
}
function bj()
{
	location.href= "http://192.168.13.2/Desenvolver/BomJesus.html"
}
function expbj()
{
	location.href= "http://192.168.13.2/Desenvolver/ExportaBomJesus.html"
}
function conf()
{
	location.href= "http://192.168.13.2/Desenvolver/comunicacao.php"
}
function conftrocas()
{
	location.href= "http://192.168.13.2/Desenvolver/devolucoescontrole.html"
}
function controle()
{
	location.href= "http://192.168.13.2/Desenvolver/controle.php"
}
function coletor()
{
	location.href= "http://192.168.13.2/Desenvolver/Importa Coletores.html"
}
function dados()
{
	location.href= "http://192.168.13.2/Desenvolver/dados.html"
}
function acomula()
{
	location.href= "http://192.168.13.2/Desenvolver/dadosacomulado.php"
}
function estoquec()
{
	location.href= "http://192.168.13.2/Desenvolver/estoquec.php"
}
function estoquel()
{
	location.href= "http://192.168.13.2/Desenvolver/estoquel.php"
}
function txt()
{
	location.href= "http://192.168.13.2/Desenvolver/nota.html"
}
function conferenciabj()
{
	location.href= "http://192.168.13.2/Desenvolver/conferenciabj.html"
}
function notaid()
{
	location.href= "http://192.168.13.2/Desenvolver/notaid.html"
}
function contabil()
{
	location.href= "http://192.168.13.2/Desenvolver/contabil.html"
}
function inclusao()
{
	location.href= "http://192.168.13.2/Desenvolver/inclusaobj.html"
}
function exclusao()
{
	location.href= "http://192.168.13.2/Desenvolver/exclusaobj.html"
}
</script>
<br>

<center>
<table width="1180" cellspacing="1" cellpadding="3" border="0" bgcolor="#8EF787">
<tr>
<td><font color="Black" face="arial, verdana, helvetica">
<INPUT type="radio" name="Escolha" value="SELECIONAR" onClick="historico()">Mudar Histórico da Venda
<INPUT type="radio" name="Escolha" value="SELECIONAR" onClick="vendas()">Vendas
<INPUT type="radio" name="Escolha" value="SELECIONAR" onClick="produtosvideira()">Produtos Videira
<INPUT type="radio" name="Escolha" value="SELECIONAR" onClick="produtosjoinville()">Produtos Joinville
<INPUT type="radio" name="Escolha" value="SELECIONAR" onClick="replica()">Replicador
<INPUT type="radio" name="Escolha" value="SELECIONAR" onClick="pedido()">Pedidos
<INPUT type="radio" name="Escolha" value="SELECIONAR" onClick="reducao()">Reduções Z
<INPUT type="radio" name="Escolha" value="SELECIONAR" onClick="energia()">Fatura de Luz
<INPUT type="radio" name="Escolha" value="SELECIONAR" onClick="cte()">Cte
<INPUT type="radio" name="Escolha" value="SELECIONAR" onClick="backup()">Backup

<br>
<INPUT type="radio" name="Escolha" value="SELECIONAR" onClick="servico()">Nota Serviço
<INPUT type="radio" name="Escolha" value="SELECIONAR" onClick="Nfe()">Nota Sem Vinculo de  Tranferência
<INPUT type="radio" name="Escolha" value="SELECIONAR" onClick="cacador()">Linhas Por Empresa
<INPUT type="radio" name="Escolha" value="SELECIONAR" onClick="clientes()">Clientes
<INPUT type="radio" name="Escolha" value="SELECIONAR" onClick="paf()">Duplicidade Paf
<INPUT type="radio" name="Escolha" value="SELECIONAR" onClick="bj()">Venda Bom Jesus
<INPUT type="radio" name="Escolha" value="SELECIONAR" onClick="expbj()">Exportação de Produtos
<br>
<INPUT type="radio" name="Escolha" value="SELECIONAR" onClick="conf()">Conferência
<INPUT type="radio" name="Escolha" value="SELECIONAR" onClick="conftrocas()">Conf. Devoluções
<INPUT type="radio" name="Escolha" value="SELECIONAR" onClick="controle()">Conf. Vendas
<INPUT type="radio" name="Escolha" value="SELECIONAR" onClick="coletor()">Coletores
<INPUT type="radio" name="Escolha" value="SELECIONAR" onClick="dados()">Dados Mensal
<INPUT type="radio" name="Escolha" value="SELECIONAR" onClick="acomula()">Acomulado
<INPUT type="radio" name="Escolha" value="SELECIONAR" onClick="estoquec()">Est. Min.Caçador
<INPUT type="radio" name="Escolha" value="SELECIONAR" onClick="estoquel()">Est. Min.Lages
<INPUT type="radio" name="Escolha" value="SELECIONAR" onClick="txt()">Pedido TXT
<br>
<INPUT type="radio" name="Escolha" value="SELECIONAR" onClick="conferenciabj()">Bom Jesus Conf.
<INPUT type="radio" name="Escolha" value="SELECIONAR" onClick="notaid()">Nota(ID)
<INPUT type="radio" name="Escolha" value="SELECIONAR" onClick="contabil()">Custo/Estoque
<INPUT type="radio" name="Escolha" value="SELECIONAR" onClick="inclusao()">Inclusão Bj
<INPUT type="radio" name="Escolha" value="SELECIONAR" onClick="exclusao()">Enclusão Bj
<center>



</center>
</font>
</td>
</tr>
<td bgcolor="#00FFFF">
   <font face="arial, verdana, helvetica">
   </font>
   </td>
</table>
<br>






<table width="1180" cellspacing="1" cellpadding="3" border="0" bgcolor="#8EF787">
<tr>





<td><font color="Black" face="arial, verdana, helvetica">



<input class="btn btn-green" type="button" value="Spark" onClick="spark()">
<input class="btn btn-red" type="button" value="E-Doc" onClick="Manager()">

</font>
</td>
</tr>
<td bgcolor="#00FFFF">
   <font face="arial, verdana, helvetica">
   </font>
   </td>
</table>





</html>


	