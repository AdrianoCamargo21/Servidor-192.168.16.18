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
<?php
$voltalogin="<script>window.location='http://192.168.10.190/Desenvolver/Controle.php';</script>";
$nvend=$_POST['nvend'];
if ($nvend=='' or $nvend<=0 ) {
    echo '<script>window.alert(\'Vendedor Inválido\');</script>';
    echo "$voltalogin";
}
$id=$_POST['id'];
if ($id=='' or $id<=0 ) {
    echo '<script>window.alert(\'Vendedor Inválido\');</script>';
    echo "$voltalogin";
}
if(!@($conexaoc=pg_connect ("host=192.168.10.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Caçador  </font></b></p>";
    echo "<p style=background:#000000; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista Favor avisar o Adriano</font></b></p>";
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <center><img src="img/error.jpg"alt="500" heigth ="500px" width="100px" ></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit; 
}
if(!@($conexaov=pg_connect ("host=192.168.10.190 dbname=troll_videira port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Caçador  </font></b></p>";
    echo "<p style=background:#000000; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista Favor avisar o Adriano</font></b></p>";
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <center><img src="img/error.jpg"alt="500" heigth ="500px" width="100px" ></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit; 
}
session_start();
$data = $_SESSION['data']; 
$loja=  $_SESSION['loja'];
$vend=  $_SESSION['vend'];

if ($loja < 13) {
    $con=$conexaoc;
} else {
    $con=$conexaov;
}
$sql="select ccodvendedor from tvendedores where ccodvendedor = $nvend";
$exsql=pg_query($con,$sql);
$rsql=pg_fetch_array($exsql);
if ($rsql=='') {
    echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>Vendedor inválido</font></b></p>";
    ?>
	<!DOCTYPE html>
	</form>
	<html>
	<head>
	<center><form name = "form1" method= "post" action= "Controle.php"></center>
	<center><input class="btn btn-green"  type="submit"  value="Voltar"></center>
	</form>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
	exit;            
}
$sql="select cidesaidas from asaidas where cidesaidas=$id and cemisaidas='$data' and cvensaidas=$vend ";

$exsql=pg_query($con,$sql);
$rsql=pg_fetch_array($exsql);
if ($rsql=='') {
    echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>Id Inválido</font></b></p>";
    ?>
	<!DOCTYPE html>
	</form>
	<html>
	<head>
	<center><form name = "form1" method= "post" action= "Controle.php"></center>
	<center><input class="btn btn-green"  type="submit"  value="Voltar"></center>
	</form>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
	exit;            
} else {
    $sql="update asaidas set  cvensaidas = '$nvend' where cidesaidas = $id  ";
    $exsql=pg_query($con,$sql);
    echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>Alteração Concluida com Sucesso</font></b></p>";
    ?>
    <!DOCTYPE html>
	</form>
	<html>
	<head>
	<center><form name = "form1" method= "post" action= "Controle.php"></center>
	<center><input class="btn btn-green"  type="submit"  value="Voltar"></center>
	</form>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
	exit; 
    
}


exit;








?>