<?php header("Content-Type: text/html; charset=ISO-8859-1",true);
$dia= date('Y-m-d');
Clearstatcache()?>
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
<title>Result</title>
<center><img src="img/result.png"alt="10" heigth ="100px" width="200px" ></center>
<form name = "form1" method= "post" action= "result.php">
<table width="100%" cellspacing="1" cellpadding="3" border="5" bgcolor="#CEF6EC">
<tr>
<td><font color="Black" face="arial, verdana, helvetica">
<center>
<br><br/>
<input type="radio" name="tipo" value="C" onClick="expandit(this)">Listar Lançamentos Efetudados
<span style="display:none" style=&{head};>
<br><br>
<font size=4 color=#FF0000><strong><center>** Essa Opção e Somente Para Consulta De Lançamentos Efetuados **</center></strong></font>        
<br>
Selecione a Empresa:
<select name="origem">
<option value="1">Loja Adrieli</option>
<option value="2">Loja Rosane</option>
<option value="3">Loja Vila</option>
<option value="4">Loja Lucélia</option>
<option value="5">Loja Josiane</option>
<option value="6">Loja Mayara</option>
</select>
<br>
<input  name= "data" type= "date" value = <?php echo $dia ?> > 
<br><br>       
</span>	
<input type="radio" name="tipo" value="N" onClick="expandit(this)">Criar Lançamento
<span style="display:none" style=&{head};>
<br><br> 
Usuário:
<input name= "login" type= "text" id="login">
Senha: 	
<input name= "senha" type= "password" id="senha">
</span>
<input type="radio" name="tipo" value="L" onClick="expandit(this)">Acesso Administrativo
<span style="display:none" style=&{head};>
<br><br>
<INPUT type="radio" name="base" checked="yes" value="C">ViaBrasil/Civegui 	
	<INPUT type="radio" name="base" value="V">ViaVideira	
	<INPUT type="radio" name="base" value="L">ViaLages
	<br><br> 
Usuário:
<input name= "logina" type= "text" id="logina">
Senha: 	
<input name= "senhaa" type= "password" id="senhaa">
<br><br>
<input  name= "dataa" type= "date" value = <?php echo $dia ?> > 
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
