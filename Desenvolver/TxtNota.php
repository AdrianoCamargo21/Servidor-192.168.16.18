<?php
header("Content-Type: text/html; charset=ISO-8859-1",true);
set_time_limit(0);
$time=date('H:i:s');
$dia= date('Y-m-d');
$voltalogin="<script>window.location='http://192.168.13.2/Desenvolver/NotaEmTxt.html';</script>";
//error_reporting(0);
$erro = "<p style=background:#000000; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista Favor avisar o Adriano</font></b></p>
<!DOCTYPE html>
<html>
<head>
<center><img src='img/error.jpg' alt='500' heigth='500px' width='100px'></center>
</head>
</html>";

$base=$_POST["base"];
if ($base == '') {
	echo "<script>alert('Base Inválida');</script>";
	echo $voltalogin;
	exit;
}
if ($base <= 6 ) {
	$servidor="Caçador";
	if(!@($con=pg_connect ("host=192.168.10.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@"))){
		echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Caçador Data:$dia  Hora:$time </font></b></p>";
		exit($erro);
	} else {
		echo "<p style=background:#D3D3D3; align=center <br/><b><font size=5 color=#FF0000>Servidor: $servidor Conectado</font></b></p>";
	}	
} elseif ($base > 6 and $base <= 9 ){
	$servidor="Videira";
	if(!@($con=pg_connect ("host=192.168.10.190 dbname=troll_videira port=5430 user=postgres password=ky$14gr@"))){
		echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Videira Data:$dia  Hora:$time </font></b></p>";
		exit($erro);
	} else {
		echo "<p style=background:#D3D3D3; align=center <br/><b><font size=5 color=#FF0000>Servidor: $servidor Conectado</font></b></p>";
	}	
} else {
	$servidor="Joinville";
	if(!@($con=pg_connect ("host=192.168.10.190 dbname=troll_joinville port=5430 user=postgres password=ky$14gr@"))){
		echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Joinville Data:$dia  Hora:$time </font></b></p>";
		exit($erro);
	} else {
		echo "<p style=background:#D3D3D3; align=center <br/><b><font size=5 color=#FF0000>Servidor: $servidor Conectado</font></b></p>";
	}
}
$data=$_POST["data"];
if ($data == null) {
	echo "<script>alert('Data inválida');</script>";	
	pg_close($con);
	echo $voltalogin;
}
$nfe=$_POST["nfe"];
if ($nfe == null) {
	echo "<script>alert('Nfe inválida');</script>";	
	pg_close($con);
	echo $voltalogin;
}
$tipo='S';
if ($tipo == 'S'){
	$sql="select cidesaidas from asaidas where cemisaidas ='$data' and cnotsaidas = '$nfe'";
	$exsql= pg_query($con,$sql);
	$rssql= pg_fetch_array($exsql);
	$id=$rssql['cidesaidas'];
	if ($id == null) {
		echo "<script>alert('Nenhuma Dado Retornou Confira o Numero da Nota Fiscal:$nfe e Data Da Mesma:$data');</script>";	
		pg_close($con);
		echo $voltalogin;
	}
	echo "<p style=background:#00FF00; align=center <br/><b><font size=5 color=#0000FF>Nfe:$nfe</font></b></p>"; 
	$sql="select cprohistorico,(sum(csaihisotorico)) from ahistorico where cisahistorico = $id GROUP BY cprohistorico order by cprohistorico";
	$exsql=pg_query($con,$sql);
	while($dados=pg_fetch_array($exsql)){
		$cod=$dados['cprohistorico'];
		$qtd=$dados['sum'];
		echo "$cod;".number_format($qtd,0,",",".").'<br>';
	}
}