<?php header('Content-Type: text/html; charset=ISO-8859-1',true);?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css"></link>
<center><img src="img/fundo1.jpg"alt="1" heigth ="100px" width="500px" ></center>
<center>
<table width="1000" cellspacing="1" cellpadding="3" border="0" bgcolor="#8EF787">
<tr>
<td><font color="Black" face="arial, verdana, helvetica">
<form name = "form1" method= "post" action= "conf.php">
<br>
<center>
<select name="loja">
<option value="1">Tatiane</option>
<option value="3">Lucélia</option>
<option value="5">Maynara</option>
<option value="7">Adry</option>
<option value="11">Hilda</option>
<option value="13">Nadia</option>
<option value="15">Táis</option>
<option value="16">Gi (Gatona) </option>
</select>
<br>
	<br>
	Data :
	<input name="data"  type= "date" id="data" />
	<br><br>
	<input class="btn btn-green" type="submit" value="Inclui" />
	
	<input class="btn btn-red" type="reset" value="Cancelar" />
		
</center>
</center>
</form>
</font>
</td>
</tr>
</head>
</html>
