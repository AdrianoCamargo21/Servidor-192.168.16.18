<?php header('Content-Type: text/html; charset=ISO-8859-1',true);?>
<!DOCTYPE html>
<html>
<body bgcolor="#F0FFF0">
<title>Lavantamento de Estoque</title>
<link rel="stylesheet" href="css/style.css"></link>
</body>
<center>

<img src="img/fundo1.jpg"alt="10" heigth ="600px" width="600px" >






<script type="text/javascript">
function inclui()
{
location.href= "http://192.168.13.2/Desenvolver/ilevantamento.html"
}
function carrega()
{
location.href= "http://192.168.13.2/Desenvolver/clevantamento.html"
}
function ajusta()
{
location.href= "http://192.168.13.2/Desenvolver/alevantamento.html"
}
</script>
<br>


<table width="1180" cellspacing="1" cellpadding="3" border="0" bgcolor="#8EF787">

<tr>
<form method="post" action="">

<td><font color="Black" face="arial, verdana, helvetica">
<center>
<h2><center><font color="Black"> Levantamento:</font></center></h2>
<INPUT type="radio" name="Escolha" value="SELECIONAR" onClick="inclui()">Inclusão
<INPUT type="radio" name="Escolha" value="SELECIONAR" onClick="carrega()">Careregar TXT
<INPUT type="radio" name="Escolha" value="SELECIONAR" onClick="ajusta()">Ajusta/Consulta
</center>
<center>

<br>
<input class="btn btn-red" type="reset" value="Cancelar" />



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




