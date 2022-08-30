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
$voltalogin="<script>window.location='http://192.168.13.2/Desenvolver/Controle.php';</script>";
$vend=$_POST['vend'];

if ($vend=='' or $vend<=0 ) {
    echo '<script>window.alert(\'Vendedor Inválido\');</script>';
    echo "$voltalogin";
}
if(!@($conexaoc=pg_connect ("host=192.168.16.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@"))){
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
if(!@($conexaov=pg_connect ("host=192.168.16.190 dbname=troll_videira port=5430 user=postgres password=ky$14gr@"))){
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
if(!@($conexaoj=pg_connect ("host=192.168.16.190 dbname=troll_joinville port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Joinville  </font></b></p>";
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
$_SESSION['vend'] = $vend;

if ($loja < 13) {
    $con=$conexaoc;
} else {
    if ($loja >13 and $loja < 16) {
        $con=$conexaov;
    } else {
        $con=$conexaoj;
    }
    
}
$sql="select cidesaidas,ccodvendedor,cnomvendedor,ctotsaidas from tvendedores iner join asaidas on ccodvendedor = cvensaidas join tnaturezaoperacao on i_asa_codigo_tna =  i_tna_codigo_operacao
where cemisaidas = '$data' and caviaprsaidas ='V'  and ccodvendedor= $vend and ctranatureza ='SIM' and i_tna_valida_comissao ='0'  order by ctotsaidas";
$exsql=pg_query($con,$sql);
$rsql=pg_fetch_array($exsql);
if ($rsql=='') {
    echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>Nenhuma Venda nessa Data</font></b></p>";
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
$exsql=pg_query($con,$sql);
echo "<table border='5' width='100%' bgcolor=#E3F6CE >";
echo "<tr><td>Id</td>"."<td>Cód. Vendedor</td>"."<td>Nome Vendedor:</td>"."<td>Valor da Venda</td>"."</tr>";
while($row=pg_fetch_array($exsql)){
    echo "<td>".$row['cidesaidas']."</td>\n";
    echo "<td>".$row['ccodvendedor']."</td>\n";
    $valor=$row['ctotsaidas'];
    echo "<td>".$row['cnomvendedor']."</td>\n";
    $valor=$row['ctotsaidas'];
    $valor=number_format($valor,2,",",".");
    echo "<td>".$valor."</td>\n";
    echo "</tr>\n";
}
?>
<!DOCTYPE html>
<html>
<head>
<center><form name = "form1" method= "post" action= "Controle.php"></center>
<center><input class="btn btn-green"  type="submit"  value="Voltar"></center>
</p>
</head>
</form>
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
<center>
<head>
<input type="radio" name="tipo" value="L" onClick="expandit(this)">Alteração:
<span style="display:none" style=&{head};>
<center><form name = "form1" method= "post" action= "altera.php">
Id:
<input name= "id" type= "number" id="id" min="1" value="0"  > 

Novo Vendedor:
<input name= "nvend" type= "number" id="vend" min="1" value="0" max="200" > 
<br>
<input class="btn btn-red" type="submit" value="ENVIAR"/>
</form>

</center>
</span>

</html>

