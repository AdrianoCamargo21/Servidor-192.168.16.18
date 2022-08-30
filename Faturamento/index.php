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
<title>Faturamento</title>

<form name = "form1" method= "post" action= "primeira.php">
<table width="100%" cellspacing="1" cellpadding="3" border="5" bgcolor="#CEF6EC">
<tr>
<td><font color="Black" face="arial, verdana, helvetica">
<center>
<center><img src="img/Faturamento.jpg"alt="50" heigth ="300px" width="300px" ></center>
<br><br>
Usuário:
<input name= "login" type= "text" id="login">
Senha: 	
<input name= "senha" type= "password" id="senha">     
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
