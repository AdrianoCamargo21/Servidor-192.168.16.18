<?php header("Content-Type: text/html; charset=ISO-8859-1",true);
$dia= date('Y-m-d');?>
<!DOCTYPE html>
<html>
<head>
	<script language="JavaScript1.2">
		<!--
		var ns6=document.getElementById&&!document.all?1:0
		var head="display:''"
		var folder=''
		function expandit(curobj){
		folder=ns6?curobj.nextSibling.nextSibling.style:document.all[curobj.sourceIndex+1].style
		if (folder.display=="none")
		folder.display=""
		else
		folder.display="none"
		}
    //-->
    </script>
<link rel="stylesheet" href="css/style.css"></link>
<title>Pedidos</title>
<center><img src="img/pedidos.png"alt="10" heigth ="100px" width="200px" ></center>
<form name = "form1" method= "post" action= "pedido.php">
<table width="100%" cellspacing="1" cellpadding="3" border="5" bgcolor="#CEF6EC">
<tr>
<td><font color="Black" face="arial, verdana, helvetica">
<center>
<br><br/>
<input type="radio" name="auto" value="A" onClick="expandit(this)">Lan�ar Nfe
<span style="display:none" style=&{head};>
<br><br>
<font size=4 color=#FF0000><strong><center>** Essa Op��o e para o Lan�amento automatico da Nfe **</center></strong></font>        
<br>
Selecione a Empresa de Sa�da do Pedido:
<select name="origee">
<option value="1">Loja Rosane</option>
<option value="2">Loja Luc�lia</option>
<option value="3">Loja Adrielli</option>
<option value="4">Loja Vila</option>
<option value="5">Loja N�dia</option>
<option value="6">Shop/Videira</option>
<option value="7">Loja Cleusa</option>
<option value="8">Loja Josi</option>
<option value="9">Loja Mayara</option>
<option value="10">Loja C�sar</option>
</select>
<br> 
Numero da Nfe: 	
<input name= "nfe" id="nfe" value="0" min="0" size ="5" maxlength="200"><br>
Data da Nfe:
<input  name= "dataa" type= "date" value = <?php echo $dia ?> > 
<br><br>       
</span>	
<input type="radio" name="auto" value="P" onClick="expandit(this)">Cria��o de Pedido
<span style="display:none" style=&{head};>
<br><br> 
Selecione a Empresa para cri��o do Pedido do Pedido:
<select name="origem">
<option value="1">Loja Rosane</option>
<option value="2">Loja Luc�lia</option>
<option value="3">Loja Adrielli</option>
<option value="4">Loja Vila</option>
<option value="5">Loja N�dia</option>
<option value="6">Shop/Videira</option>
<option value="7">Loja Cleusa</option>
<option value="8">Loja Josi</option>
<option value="9">Loja Mayara</option>
<option value="10">Loja C�sar</option>
</select> 
<br>
C�digo Cliente Destino:			
<input name= "cliente" type= "number" id="cliente"></p>
Usu�rio:
<input name= "login" type= "text" id="login">
Senha: 	
<input name= "senha" type= "password" id="senha">
</span>
<input type="radio" name="auto" value="B" onClick="expandit(this)">Impress�o Pedido S�cio
<span style="display:none" style=&{head};>
<br><br>
<font size=4 color=#FF0000><strong><center>** Essa Op��o e para Imprimir o Pedido ap�s Sua Cria��o **</center></strong></font>        
<br>
Selecione a Empresa de Sa�da do Pedido:
<select name="orige">
<option value="1">Loja Rosane</option>
<option value="2">Loja Luc�lia</option>
<option value="3">Loja Adrielli</option>
<option value="4">Loja Vila</option>
<option value="5">Loja N�dia</option>
<option value="6">Shop/Videira</option>
<option value="7">Loja Cleusa</option>
<option value="8">Loja Josi</option>
<option value="9">Loja Mayara</option>
<option value="10">Loja C�sar</option>
</select>
<br> 
Numero da Nfe: 	
<input name= "nfes" id="nfe" value="0" min="0" size ="5" maxlength="200"><br>
Data da Nfe:
<input  name= "data" type= "date" value = <?php echo $dia ?> > 
<br><br>       
</span>	
<br><br>
<input class="btn btn-green" type="submit" value="ENVIAR"/>
<input class="btn btn-red" type="reset" value="Cancelar" />		
<br><br>	
</font>
</center>
</td>
</tr>
</table> 
<br><br>
</head>
</html>
