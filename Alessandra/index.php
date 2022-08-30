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
<title>Pagina Interna Crediário</title>
<br><br/><br><br/><br><br/>
<form name = "form1" method= "post" action= "primeira.php">
<center><table width="80%" cellspacing="1" cellpadding="3" border="10" bgcolor="#FFFAFA"></center>

<tr>
<td><font color="Black" face="arial, verdana, helvetica">
<center>
<br><br/>
<marquee direction="down"><center> <img src="img/crediario.jpg"alt="50" heigth ="300px" width="600px" ></center></marquee>
<br><br/>
<input type="radio" name="tipo" value="G"  >Carregar Clientes

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
