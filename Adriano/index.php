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
<title>Adriano</title>

<form name = "form1" method= "post" action= "primeira.php">
<table width="100%" cellspacing="1" cellpadding="3" border="5" bgcolor="#CEF6EC">

<tr>
<td><font color="Black" face="arial, verdana, helvetica">
<center>
<center><img src="img/Adriano.jpg"alt="50" heigth ="300px" width="300px" ></center>
<br><br/>
<input type="radio" name="tipo" value="B" >Exportacão de Produtos
<input type="radio" name="tipo" value="C" >Conferência de Nfe
<input type="radio" name="tipo" value="V" >Verefica Imposto Filiais
<input type="radio" name="tipo" value="A" >Verefica Imposto Notas clientes Juridicos
</p>
<input type="radio" name="tipo" value="H" >Conferência Historico sem Entrada
<input type="radio" name="tipo" value="I" >Importação de Cliente
<input type="radio" name="tipo" value="E" >Equivalência Aclientes2
<input type="radio" name="tipo" value="D" onClick="expandit(this)" >Grupo Produtos
<span style="display:none" style=&{head};>
<br><br>
Idº
<input name= "id" type= "number" id="id" min ="1">
</span>	
<input type="radio" name="tipo" value="F" onClick="expandit(this)" >Trânsferencia Mensal
<span style="display:none" style=&{head};>
<br>
De:
<input  name= "datai" type= "date" value = <?php echo $dia ?> > 
Até:
<input  name= "dataf" type= "date" value = <?php echo $dia ?> > 
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
