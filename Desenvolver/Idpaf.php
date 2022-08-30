<?php header('Content-Type: text/html; charset=ISO-8859-1',true);?>
<!DOCTYPE html>
<html>
<title>Ide Paf</title>
<link rel="stylesheet" href="css/style.css"></link>
<center><img src="img/fundo1.jpg"alt="10" heigth ="100px" width="400px" ></center>
<table width="1330" cellspacing="1" cellpadding="3" border="0" bgcolor="#ACFA58">
<tr>
<td><font color="Black" face="arial, verdana, helvetica">
<center><h1><font face="Arial" color="Red">ID Paf :</font></h1></center>
<form name = "form1" method= "post" action= "paf.php">
<center>
<center><h5><font face="Arial" color="Red">Números Duplicados :</font></h1></center>
De:
<input name= "id" type= "number" id="id">
Ate:
<input name= "id2" type= "number" id="id2">
</center>
<center><INPUT type="radio"  name="Base" value="V"> Videira</center> 	
<center><INPUT type="radio"  name="Base" checked="yes"  value="J"> Joinville</center> 
<center><INPUT type="radio"  name="Base" value="C"> Caçador</center> 
<center><INPUT type="radio"  name="Base" value="L"> Lages</center> 


<center><input class="btn btn-green" type="submit" value="Enviar"  /></center>
</form>
</font>
</html>













	







	