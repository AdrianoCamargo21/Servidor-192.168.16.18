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
$time=date('H:i:s');
$dia= date('d-m-Y');
if(!@($conexaoc=pg_connect ("host=192.168.16.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@"))){
	echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Caçador Data:$dia  Hora:$time </font></b></p>";
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
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Videira  </font></b></p>";
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
$voltalogin="<script>window.location='http://192.168.13.2/Desenvolver/Controle.php';</script>";
session_start();
$loja=$_POST['loja'];
$data= $_POST['data']; //pega os dados do formulario e grava em $numero
$_SESSION['data'] = $data; //gravo uma sessao com o nome de numero e com valor de $numer
$_SESSION['loja'] = $loja;
if ($data == '') {
   echo '<script>window.alert(\'Data Inválida\');</script>';
   echo "$voltalogin";
}
$loja=$_POST['loja'];
if ($loja=='1') {
    $con=$conexaoc;
    $emp='1,2';
}
if ($loja=='3') {
    $con=$conexaoc;
    $emp='3,4';
}
if ($loja=='5') {
    $con=$conexaoc;
    $emp='5,6';
}
if ($loja=='7') {
    $con=$conexaoc;
    $emp='7,8';
}
if ($loja=='9') {
    $con=$conexaoc;
    $emp='9,10';
}
if ($loja=='11') {
    $con=$conexaoc;
    $emp='11,12';
}
if ($loja=='13') {
    $con=$conexaov;
    $emp='13,14';
}
if ($loja=='15') {
    $con=$conexaov;
    $emp='15,16';
}
if ($loja=='17') {
    $con=$conexaov;
    $emp='17,18';
}
if ($loja=='16') {
    $con=$conexaoj;
    $emp='4,3';
}
$sql="select ccodvendedor,cnomvendedor,(COUNT(asaidas)) as vendas,(sum(ctotsaidas)) as valor from tvendedores iner join asaidas on ccodvendedor = cvensaidas join tnaturezaoperacao on i_asa_codigo_tna =  i_tna_codigo_operacao
     where cemisaidas = '$data' and caviaprsaidas ='V' and cempresasaidas in ($emp) and ctranatureza ='SIM' and i_tna_valida_comissao ='0' group by ccodvendedor  order by ccodvendedor";
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
echo "<table border='2' width='100%' bgcolor=#E3F6CE >";
echo "<tr><td>Cód. Vendedor</td>"."<td>Nome Vendedor</td>"."<td>Quantidade Propostas</td>"."<td>Valores R$:</td>"."</tr>";
while($row=pg_fetch_array($exsql)){
    echo "<td>".$row['ccodvendedor']."</td>\n";
    echo "<td>".$row['cnomvendedor']."</td>\n";
    echo "<td>".$row['vendas']."</td>\n";
    $valor=$row['valor'];
    $valor=number_format($valor,2,",",".");
    echo "<td>".$valor."</td>\n";
    echo "</tr>\n";
}
$sql="INSERT INTO controlevendas(id, data, loja) VALUES (nextval('seq_controlevenda'),'$data','$loja')";
$exsql=pg_query($conexaoc,$sql);

?>

<center>

<center><form name = "form1" method= "post" action= "Controle.php"></center>
<center><input class="btn btn-red"  type="submit"  value="Voltar"></center>
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
<br>
<input type="radio" name="tipo" value="L" onClick="expandit(this)">Listar Vendas
<span style="display:none" style=&{head};>
<center><form name = "form1" method= "post" action= "lista.php"> 
Vendedor:
<input name= "vend" type= "number" id="vend" min="1" value="0" >
<input class="btn btn-green" type="submit" value="ENVIAR"/>

</span>
</P>
</center>
</center>
</form>
</font>
</td>
</tr>
</head>
</html>