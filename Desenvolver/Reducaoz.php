<?php
header("Content-Type: text/html; charset=ISO-8859-1",true);
set_time_limit(0);
$time=date('H:i:s');
$dia= date('Y-m-d');
$voltalogin="<script>window.location='http://192.168.13.2/Desenvolver/VereficaReducoesZ.html';</script>";
//error_reporting(0);
$base=$_POST["base"];
if ($base == '') {
	echo "<script>alert('Base Inválida');</script>";
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
if ($base ==  1) {
	$servidor="Caçador";
	if(!@($con=pg_connect ("host=192.168.16.2 dbname=troll port=5430 user=postgres password=ky$14gr@"))){
		echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Caçador Data:$dia  Hora:$time </font></b></p>";
		exit($erro);
	}	
}
if ($base ==  2) {
	$servidor="Lages";
	if(!@($con=pg_connect ("host=192.168.11.2 dbname=Troll port=5431 user=postgres password=ky$14gr@"))){
		echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Lages Data:$dia  Hora:$time </font></b></p>";
		exit($erro);
	}	
}
if ($base ==  3) {
	$servidor="Videira";
	if(!@($con=pg_connect ("host=192.168.9.10 dbname=troll port=5433 user=postgres password=ky$14gr@"))){
		echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Videira Data:$dia  Hora:$time </font></b></p>";
		exit($erro);
	}	
}
if ($base ==  4) {
	$servidor="Joinville";
	if(!@($con=pg_connect ("host=192.168.19.2 dbname=troll port=5434 user=postgres password=ky$14gr@"))){
		echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Joinville Data:$dia  Hora:$time </font></b></p>";
		exit($erro);
	}	
}
$empp=$_POST["emp"];
if ($empp == null) {		
	echo "<script>alert('Empresa Inválida');</script>";	
	pg_close($con);
	echo $voltalogin;
	exit;
} elseif ($empp % 2  == 0){
	echo "<script>alert('Empresa: $emp Inválida');</script>";	
	pg_close($con);
	echo $voltalogin;
	exit;
}
echo "<table border='2' width='100%' bgcolor=#FFFFFF >";
echo "<tr><td>Empresa</td>"."<td>Emissor</td>"."<td>Data</td>"."</tr>";
$data=date('Y-m-d', strtotime($dia. '-40 days'));
$sql="select cserserie,cempserie from tseriesnf where cempserie = $empp  order by cempserie";
$exsql= pg_query($con,$sql);
while ($row = pg_fetch_assoc( $exsql)) {
    $serie=$row['cserserie'];   
    $com="select i_r02_crz ,d_r02_data_movimento_reducao from registror02 where d_r02_data_movimento_reducao >= '$data' and i_r02_codigo_tse =$serie order by i_r02_crz ";
    $excom= pg_query($con,$com);
    while ($resul = pg_fetch_assoc( $excom)) {
        $numero=$resul['i_r02_crz'];
        $data=$resul['d_r02_data_movimento_reducao'];
        $query="select i_c405_crz from c405 where i_c405_crz = $numero and i_c405_codigo_tse = $serie";
        $exquery= pg_query($con,$query);
        $rsquery=pg_fetch_array($exquery);
        $red=$rsquery['i_c405_crz'];
        if ($red == null) {            
            echo "<td>".$empp."</td>\n";
            echo "<td>".$serie."</td>\n";
            echo "<td>".$data."</td>\n";
            echo "</tr>\n";            
        }
    }
}
pg_close($con);
?>
<!DOCTYPE html>
<html>
<head>
<center>
<link rel="stylesheet" href="css/style.css"></link>
<a title='Imprimir' href='javascript:window.print()'><img src="img/impressora.jpg" alt="5" heigth ="50px" width="50px"  border="0" /></a>
<br><br>
<center><form name = "form1" method= "post" action= "VereficaReducoesZ.html">
<input class="btn btn-red" type="submit" value="Voltar"/>	
<br><br>
</center>
</head>
</html>

