<?php
header("Content-Type: text/html; charset=ISO-8859-1",true);
set_time_limit(0);
$time=date('H:i:s');
$dia= date('Y-m-d');
$voltalogin="<script>window.location='http://192.168.13.2/Desenvolver/CompararNotas.html';</script>";
error_reporting(0);
$origem=$_POST["origem"];
if ($origem == '') {
	echo "<script>alert('Base De Origem Inválida');</script>";
	echo $voltalogin;
	exit;
}
$erro = "<p style=background:#000000; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista Favor avisar o Adriano</font></b></p>
<!DOCTYPE html>
<html>
<head>
<center><img src='img/error.jpg' alt='500' heigth='500px' width='100px'></center>
</head>
</html>";
if ($origem ==  1) {
	$servidor="Caçador";
	if(!@($cono=pg_connect ("host=192.168.10.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@"))){
		echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Caçador Data:$dia  Hora:$time </font></b></p>";
		exit($erro);
	}	
}
if ($origem ==  2) {
	$servidor="Lages";
	if(!@($cono=pg_connect ("host=192.168.10.190 dbname=troll_lages port=5430 user=postgres password=ky$14gr@"))){
		echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Lages Data:$dia  Hora:$time </font></b></p>";
		exit($erro);
	}	
}
if ($origem ==  3) {
	$servidor="Videira";
	if(!@($cono=pg_connect ("host=192.168.10.190 dbname=troll_videira port=5430 user=postgres password=ky$14gr@"))){
		echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Videira Data:$dia  Hora:$time </font></b></p>";
		exit($erro);
	}	
}
if ($origem ==  4) {
	$servidor="Joinville";
	if(!@($cono=pg_connect ("host=192.168.10.190 dbname=troll_joinville port=5430 user=postgres password=ky$14gr@"))){
		echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Joinville Data:$dia  Hora:$time </font></b></p>";
		exit($erro);
	}	
}
$cliente=$_POST["cliente"];
if ($cliente == null) {		
	echo "<script>alert('Cliente Inválido');</script>";	
	pg_close($cono);
	echo $voltalogin;
	exit;
} 
$datain=$_POST["datin"];
if ($datain == null) {		
	echo "<script>alert('Data Inicial Inválida');</script>";	
	pg_close($cono);
	echo $voltalogin;
	exit;
} 
$datafi=$_POST["datfi"];
if ($datafi == null) {		
	echo "<script>alert('Data Final Inválida');</script>";	
	pg_close($cono);
	echo $voltalogin;
	exit;
} 


if ($cliente== 39498 or $cliente== 43575) {
	$servidord="Videira";
	if(!@($cond=pg_connect ("host=192.168.10.190 dbname=troll_videira port=5430 user=postgres password=ky$14gr@"))){
		echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Videira Data:$dia  Hora:$time </font></b></p>";
		exit($erro);
	}
	
}  else {
	echo "<script>alert('Cliente Ainda em Desenvolvimento ou inválido');</script>";	
	pg_close($cono);
	echo $voltalogin;
	exit;
}
$sql="select cnotsaidas,cemisaidas, ccnpjempresa,sum(csaihisotorico) from asaidas  left join tempresa on cempresasaidas = ccodempresa
	left join ahistorico on cisahistorico = cidesaidas 
	where cemisaidas >= '$datain' and cemisaidas <= '$datafi' and cclisaidas = $cliente 
	and cnotsaidas = 34188
	GROUP BY cnotsaidas,cemisaidas,ccnpjempresa order by cnotsaidas ";
	echo "<table border='5' width='100%' bgcolor=#E3F6CE >";
	echo "<tr><td>Nota Fiscal</td>"."<td>Data</td>"."<td>Fornecedor</td>"."</tr>";
$exsql=pg_query($cono,$sql);
while ($row = pg_fetch_assoc($exsql)) {
	$forn=$row['ccnpjempresa'];
	if ($forn == null) {
		echo "<script>alert('Comando Com Erro $sql');</script>";	
		pg_close($cono);
		pg_close($cond);
		echo $voltalogin;
		exit;
	}
	$data=$row['cemisaidas'];
	if ($data == null){
		echo "<script>alert('Comando com Erro $sql');</script>";	
		pg_close($cono);
		pg_close($cond);
		echo $voltalogin;
		exit;
	}
	$nfe=$row['cnotsaidas'];
	if ($nfe == null){
		echo "<script>alert('Comando com Erro $sql');</script>";	
		pg_close($cono);
		pg_close($cond);
		echo $voltalogin;
		exit;
	}
	$qtds=$row['sum'];
	$com="select ccodfornecedor,sum(centhistorico) from aentradas left join ahistorico on cienhistorico=csidentradas
	left join afornecedor on ccodfornecedor = cforhistorico 
	where ccgcfornecedor =  '$forn' and cemientradas = '$data'  and cnfientradas = $nfe
	GROUP BY ccodfornecedor ";
	$excom= pg_query($cond,$com);
	$rscom= pg_fetch_array($excom);
	$forne=$rscom['ccodfornecedor'];
	$qtde=$rscom['sum'];
	exit($qtds);
	if ($forne == null){			
		pg_close($cono);
		pg_close($cond);
		echo "<td>".$nfe."</td>\n";
		echo "<td>".$data."</td>\n";
		echo "<td>".$forn."</td>\n";
		echo "</tr>\n";
		exit;				
	} else {
		if ($qtds<> $qtde){
			echo "<script>alert('Nota Fiscal $nfe com Entrada em $servidor com Data em :$data
			 com quantidade diferentes Saida:$qtde Entrada:$qtds');</script>";	
		}
	}	
}
?>
<!DOCTYPE html>
<html>
<head>
<center>
<link rel="stylesheet" href="css/style.css"></link>
<a title='Imprimir' href='javascript:window.print()'><img src="img/impressora.jpg" alt="5" heigth ="50px" width="50px"  border="0" /></a>
<br><br>
<center><form name = "form1" method= "post" action= "CompararNotas.html">
<input class="btn btn-red" type="submit" value="Voltar"/>	
<br><br>
</center>
</head>
</html>