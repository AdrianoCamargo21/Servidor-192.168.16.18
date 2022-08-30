<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
date_default_timezone_set('America/Sao_Paulo');
$time=date('H:i:s');
$dia= date('d-m-Y');
if(!@($conexaoc=pg_connect ("host=192.168.10.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@"))){
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
if(!@($conexaov=pg_connect ("host=192.168.10.190 dbname=troll_videira port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Videira Data:$dia  Hora:$time </font></b></p>";
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
if(!@($conexaol=pg_connect ("host=192.168.10.190 dbname=troll_lages port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Lages Data:$dia  Hora:$time </font></b></p>";
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
if(!@($conexaoj=pg_connect ("host=192.168.10.190 dbname=troll_joinville port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Joinville Data:$dia  Hora:$time </font></b></p>";
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
$datai=$_POST['data'];
$dataf=date('Y-m-d', strtotime($datai. '-90 days'));
set_time_limit(500);

//Caçador
$comando="select (sum(cvprdupli)) as pagas from asduplicatas where cvendupli <= '$datai' and  cvendupli >='$dataf' and cdpadupli is not null ";
$excomando=pg_query($conexaoc,$comando);
$rscomando=pg_fetch_array($excomando);
$pagas=$rscomando['pagas'];
$comando="select (sum(cvprdupli)) as vencidas from asduplicatas where cvendupli <= '$datai' and  cvendupli >='$dataf'";
$excomando=pg_query($conexaoc,$comando);
$rscomando=pg_fetch_array($excomando);
if (!$excomando){
    pg_close($conexaoc);
    pg_close($conexaov);
    pg_close($conexaol);
    pg_close($conexaoj);
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Erro ao Carregar Parcelas base Caçador**</font></b></p>";
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit;    
}
$venc=$rscomando['vencidas'];
$perc=3.0/100.0;
$venc=$venc-($perc *$venc );
$venc=$venc-$pagas;
$comando="select (sum(cvprdupli)) as receber from asduplicatas where cvendupli > '$datai' and cdpadupli is null ";
$excomando=pg_query($conexaoc,$comando);
$rscomando=pg_fetch_array($excomando);
if (!$excomando){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Erro ao Carregar Parcelas base Caçador**</font></b></p>";
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit;    
}
$avenc=$rscomando['receber'];
$avenc=$avenc-($perc*$avenc);
$parcela=$venc+$avenc;
$parcela=number_format($parcela, 2, ',',' ');
$comando="select (sum(cvalduplicata )) as avencer from aeduplicatas where cvenduplicata > '$datai' and cdpaduplicata is null";
$excomando=pg_query($conexaoc,$comando);
$rscomando=pg_fetch_array($excomando);
$dupliab=$rscomando['avencer'];
$dupliab=number_format($dupliab, 2, ',', ' ');
$comando="select (sum(cvapduplicata )) as pagas from aeduplicatas where  cdpaduplicata >  '$datai'";
$excomando=pg_query($conexaoc,$comando);
$rscomando=pg_fetch_array($excomando);
$duplipg=$rscomando['pagas'];
$duplipg=number_format($duplipg, 2, ',', ' ');
$comando="select  ccodlinha ,cdeslinha,(sum(cqtdproduto*cpcuproduto)::numeric (18,2) ) as total from tlinha inner join aprodutos on clinproduto = ccodlinha  where cqtdproduto <> 0 group by ccodlinha ,cdeslinha order by cdeslinha";
$excomando=pg_query($conexaoc,$comando);
echo "<table border='2' width='100%' bgcolor=#FF0000>";
echo "<tr><td bgcolor=#FAFAFA ><span style='color:black;'><center>Caçador<center></span></td>"."</tr>";

echo "<table border='2' width='100%' bgcolor=#FFFAFA>";

echo "<tr><td>Código Da Linha</td>"."<td>Descrição da Linha</td>"."<td>R$ Estoque</td>"."</tr>";

while ($row = pg_fetch_assoc($excomando)) {
    echo "<td>".$row['ccodlinha']."</td>\n";
    echo "<td>".$row['cdeslinha']."</td>\n";
    echo "<td>".$row['total']."</td>\n";
    echo "</tr>\n";
}

echo "<table border='2' width='100%' bgcolor=#FFFAFA>";
echo "<tr><td>Duplicatas</td>"."<td>Duplicatas Pagas </td>"."<td>Parcelas</td>"."</tr>";
echo "<td>$dupliab</td>.<td>$duplipg</td>.<td>$parcela</td>";
echo "</tr>\n";
pg_close ($conexaoc);

//Caçador


//Videira
$comando="select (sum(cvprdupli)) as pagas from asduplicatas where cvendupli <= '$datai' and  cvendupli >='$dataf' and cdpadupli is not null ";
$excomando=pg_query($conexaov,$comando);
$rscomando=pg_fetch_array($excomando);
$pagas=$rscomando['pagas'];
$comando="select (sum(cvprdupli)) as vencidas from asduplicatas where cvendupli <= '$datai' and  cvendupli >='$dataf'";
$excomando=pg_query($conexaov,$comando);
$rscomando=pg_fetch_array($excomando);
if (!$excomando){
    pg_close($conexaoc);
    pg_close($conexaov);
    pg_close($conexaol);
    pg_close($conexaoj);
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Erro ao Carregar Parcelas base Caçador**</font></b></p>";
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit;    
}
$venc=$rscomando['vencidas'];
$perc=3.0/100.0;
$venc=$venc-($perc *$venc );
$venc=$venc-$pagas;
$comando="select (sum(cvprdupli)) as receber from asduplicatas where cvendupli > '$datai' and cdpadupli is null ";
$excomando=pg_query($conexaov,$comando);
$rscomando=pg_fetch_array($excomando);
if (!$excomando){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Erro ao Carregar Parcelas base Caçador**</font></b></p>";
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit;    
}
$avenc=$rscomando['receber'];
$avenc=$avenc-($perc*$avenc);
$parcela=$venc+$avenc;
$parcela=number_format($parcela, 2, ',', ' ');
$comando="select (sum(cvalduplicata )) as avencer from aeduplicatas where cvenduplicata > '$datai' and cdpaduplicata is null";
$excomando=pg_query($conexaov,$comando);
$rscomando=pg_fetch_array($excomando);
$dupliab=$rscomando['avencer'];
$dupliab=number_format($dupliab, 2, ',', ' ');
$comando="select (sum(cvapduplicata )) as pagas from aeduplicatas where  cdpaduplicata >  '$datai'";
$excomando=pg_query($conexaov,$comando);
$rscomando=pg_fetch_array($excomando);
$duplipg=$rscomando['pagas'];
$duplipg=number_format($duplipg, 2, ',', ' ');
$comando="select  ccodlinha ,cdeslinha,(sum((cqtde13produto+cqtde14produto)*cpcuproduto )::numeric (18,2) ) as total from tlinha inner join aprodutos on clinproduto = ccodlinha where (cqtde13produto+cqtde14produto) <> 0    group by ccodlinha ,cdeslinha order by total";
$excomando=pg_query($conexaov,$comando);

echo "<table border='2' width='100%' bgcolor=#0000FF>";
echo '<br><br>';
echo '<br><br>';
echo "<tr><td bgcolor=#FAFAFA ><span style='color:black;'><center>Videira<center></span></td>"."</tr>";
echo "<table border='2' width='100%' bgcolor=#FFFAFA>";
echo "<tr><td>Código Da Linha</td>"."<td>Descrição da Linha</td>"."<td>R$ Estoque</td>"."</tr>";
while ($row = pg_fetch_assoc($excomando)) {
    echo "<td>".$row['ccodlinha']."</td>\n";
    echo "<td>".$row['cdeslinha']."</td>\n";
    echo "<td>".$row['total']."</td>\n";
    echo "</tr>\n";
}
echo "<table border='2' width='100%' bgcolor=#FFFAFA>";
echo "<tr><td>Duplicatas</td>"."<td>Duplicatas Pagas </td>"."<td>Parcelas</td>"."</tr>";
echo "<td>$dupliab</td>.<td>$duplipg</td>.<td>$parcela</td>";
$comando="select  ccodlinha ,cdeslinha,(sum((cqtde15produto+cqtde16produto)*cpcuproduto )::numeric (18,2) ) as total from tlinha inner join aprodutos on clinproduto = ccodlinha where (cqtde15produto+cqtde16produto) <> 0    group by ccodlinha ,cdeslinha order by total";
$excomando=pg_query($conexaov,$comando);
echo "<table border='2' width='100%' bgcolor=#00FF00>";
echo "<tr><td bgcolor=#FAFAFA ><span style='color:black;'><center>Martello<center></span></td>"."</tr>";
echo "<table border='2' width='100%' bgcolor=#FFFAFA>";
echo "<tr><td>Código Da Linha</td>"."<td>Descrição da Linha</td>"."<td>R$ Estoque</td>"."</tr>";
while ($row = pg_fetch_assoc($excomando)) {
    echo "<td>".$row['ccodlinha']."</td>\n";
    echo "<td>".$row['cdeslinha']."</td>\n";
    echo "<td>".$row['total']."</td>\n";
    echo "</tr>\n";
}
$comando="select  ccodlinha ,cdeslinha,(sum((cqtde17produto+cqtde18produto)*cpcuproduto )::numeric (18,2) ) as total from tlinha inner join aprodutos on clinproduto = ccodlinha where (cqtde17produto+cqtde18produto) <> 0    group by ccodlinha ,cdeslinha order by total";
$excomando=pg_query($conexaov,$comando);
echo "<table border='2' width='100%' bgcolor=#00FF00>";
echo "<tr><td bgcolor=#FAFAFA ><span style='color:black;'><center>Shop Masp<center></span></td>"."</tr>";
echo "<table border='2' width='100%' bgcolor=#FFFAFA>";
echo "<tr><td>Código Da Linha</td>"."<td>Descrição da Linha</td>"."<td>R$ Estoque</td>"."</tr>";
while ($row = pg_fetch_assoc($excomando)) {
    echo "<td>".$row['ccodlinha']."</td>\n";
    echo "<td>".$row['cdeslinha']."</td>\n";
    echo "<td>".$row['total']."</td>\n";
    echo "</tr>\n";
}
pg_close($conexaov);
//Videira



//Lages
$comando="select (sum(cvprdupli)) as pagas from asduplicatas where cvendupli <= '$datai' and  cvendupli >='$dataf' and cdpadupli is not null ";
$excomando=pg_query($conexaol,$comando);
$rscomando=pg_fetch_array($excomando);
$pagas=$rscomando['pagas'];
$comando="select (sum(cvprdupli)) as vencidas from asduplicatas where cvendupli <= '$datai' and  cvendupli >='$dataf'";
$excomando=pg_query($conexaol,$comando);
$rscomando=pg_fetch_array($excomando);
if (!$excomando){
    pg_close($conexaoc);
    pg_close($conexaov);
    pg_close($conexaol);
    pg_close($conexaoj);
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Erro ao Carregar Parcelas base Caçador**</font></b></p>";
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit;    
}
$venc=$rscomando['vencidas'];
$perc=5.0/100.0;
$venc=$venc-($perc *$venc );
$venc=$venc-$pagas;
$comando="select (sum(cvprdupli)) as receber from asduplicatas where cvendupli > '$datai' and cdpadupli is null ";
$excomando=pg_query($conexaol,$comando);
$rscomando=pg_fetch_array($excomando);
if (!$excomando){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Erro ao Carregar Parcelas base Caçador**</font></b></p>";
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit;    
}
$avenc=$rscomando['receber'];
$avenc=$avenc-($perc*$avenc);
$parcela=$venc+$avenc;
$parcela=number_format($parcela, 2, ',', ' ');
$comando="select (sum(cvalduplicata )) as avencer from aeduplicatas where cvenduplicata > '$datai' and cdpaduplicata is null";
$excomando=pg_query($conexaol,$comando);
$rscomando=pg_fetch_array($excomando);
$dupliab=$rscomando['avencer'];
$dupliab=number_format($dupliab, 2, ',', ' ');
$comando="select (sum(cvapduplicata )) as pagas from aeduplicatas where  cdpaduplicata >  '$datai'";
$excomando=pg_query($conexaol,$comando);
$rscomando=pg_fetch_array($excomando);
$duplipg=$rscomando['pagas'];
$duplipg=number_format($duplipg, 2, ',', ' ');

$comando="select  ccodlinha ,cdeslinha,(sum((cqtde1produto+cqtde2produto)*cpcuproduto )::numeric (18,2) ) as total from tlinha inner join aprodutos on clinproduto = ccodlinha where (cqtde1produto+cqtde2produto) <> 0    group by ccodlinha ,cdeslinha order by total";
$excomando=pg_query($conexaol,$comando);
echo "<table border='2' width='100%' bgcolor=#FFFF00>";
echo "<tr><td bgcolor=#FAFAFA ><span style='color:black;'><center>Lages<center></span></td>"."</tr>";
echo '<br><br>';
echo '<br><br>';
echo "<table border='2' width='100%' bgcolor=#FFFAFA>";
echo "<tr><td>Código Da Linha</td>"."<td>Descrição da Linha</td>"."<td>R$ Estoque</td>"."</tr>";
while ($row = pg_fetch_assoc($excomando)) {
    echo "<td>".$row['ccodlinha']."</td>\n";
    echo "<td>".$row['cdeslinha']."</td>\n";
    echo "<td>".$row['total']."</td>\n";
    echo "</tr>\n";
}

$comando="select  ccodlinha ,cdeslinha,(sum((cqtde3produto+cqtde4produto)*cpcuproduto )::numeric (18,2) ) as total from tlinha inner join aprodutos on clinproduto = ccodlinha where (cqtde3produto+cqtde4produto) <> 0    group by ccodlinha ,cdeslinha order by total";
$excomando=pg_query($conexaol,$comando);
echo "<table border='2' width='100%' bgcolor=#FFFF00>";
echo "<tr><td bgcolor=#FAFAFA ><span style='color:black;'><center>Atacadão Lages<center></span></td>"."</tr>";
echo '<br><br>';
echo '<br><br>';
echo "<table border='2' width='100%' bgcolor=#FFFAFA>";
echo "<tr><td>Código Da Linha</td>"."<td>Descrição da Linha</td>"."<td>R$ Estoque</td>"."</tr>";
while ($row = pg_fetch_assoc($excomando)) {
    echo "<td>".$row['ccodlinha']."</td>\n";
    echo "<td>".$row['cdeslinha']."</td>\n";
    echo "<td>".$row['total']."</td>\n";
    echo "</tr>\n";
}



echo "<table border='2' width='100%' bgcolor=#FFFAFA>";
echo "<tr><td>Duplicatas</td>"."<td>Duplicatas Pagas </td>"."<td>Parcelas</td>"."</tr>";
echo "<td>$dupliab</td>.<td>$duplipg</td>.<td>$parcela</td>";
pg_close($conexaol);
//lages


//Joinville
$comando="select (sum(cvprdupli)) as pagas from asduplicatas where cvendupli <= '$datai' and  cvendupli >='$dataf' and cdpadupli is not null ";
$excomando=pg_query($conexaoj,$comando);
$rscomando=pg_fetch_array($excomando);
$pagas=$rscomando['pagas'];
$comando="select (sum(cvprdupli)) as vencidas from asduplicatas where cvendupli <= '$datai' and  cvendupli >='$dataf'";
$excomando=pg_query($conexaoj,$comando);
$rscomando=pg_fetch_array($excomando);
if (!$excomando){
    pg_close($conexaoc);
    pg_close($conexaov);
    pg_close($conexaol);
    pg_close($conexaoj);
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Erro ao Carregar Parcelas base Caçador**</font></b></p>";
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit;    
}
$venc=$rscomando['vencidas'];
$perc=3.0/100.0;
$venc=$venc-($perc *$venc );
$venc=$venc-$pagas;
$comando="select (sum(cvprdupli)) as receber from asduplicatas where cvendupli > '$datai' and cdpadupli is null ";
$excomando=pg_query($conexaoj,$comando);
$rscomando=pg_fetch_array($excomando);
if (!$excomando){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Erro ao Carregar Parcelas base Caçador**</font></b></p>";
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit;    
}
$avenc=$rscomando['receber'];
$avenc=$avenc-($perc*$avenc);
$parcela=$venc+$avenc;
$parcela=number_format($parcela, 2, ',', ' ');
$comando="select (sum(cvalduplicata )) as avencer from aeduplicatas where cvenduplicata > '$datai' and cdpaduplicata is null";
$excomando=pg_query($conexaoj,$comando);
$rscomando=pg_fetch_array($excomando);
$dupliab=$rscomando['avencer'];
$dupliab=number_format($dupliab, 2, ',', ' ');
$comando="select (sum(cvapduplicata )) as pagas from aeduplicatas where  cdpaduplicata >  '$datai'";
$excomando=pg_query($conexaoj,$comando);
$rscomando=pg_fetch_array($excomando);
$duplipg=$rscomando['pagas'];
$duplipg=number_format($duplipg, 2, ',', ' ');
$comando="select  ccodlinha ,cdeslinha,(sum((cqtdproduto)*cpcuproduto )::numeric (18,2) ) as total from tlinha inner join aprodutos on clinproduto = ccodlinha where cqtdproduto <> 0    group by ccodlinha ,cdeslinha order by total";
$excomando=pg_query($conexaoj,$comando);
echo "<table border='2' width='100%' bgcolor=#FF0000>";
echo "<tr><td bgcolor=#FAFAFA ><span style='color:black;'><center>Joinville<center></span></td>"."</tr>";
echo '<br><br>';
echo '<br><br>';
echo "<table border='2' width='100%' bgcolor=#FFFAFA>";
echo "<tr><td>Código Da Linha</td>"."<td>Descrição da Linha</td>"."<td>R$ Estoque</td>"."</tr>";
while ($row = pg_fetch_assoc($excomando)) {
    echo "<td>".$row['ccodlinha']."</td>\n";
    echo "<td>".$row['cdeslinha']."</td>\n";
    echo "<td>".$row['total']."</td>\n";
    echo "</tr>\n";
}
echo "<table border='2' width='100%' bgcolor=#FFFAFA>";
echo "<tr><td>Duplicatas</td>"."<td>Duplicatas Pagas </td>"."<td>Parcelas</td>"."</tr>";
echo "<td>$dupliab</td>.<td>$duplipg</td>.<td>$parcela</td>";
pg_close($conexaoj);
//joinville






exit;

$mes = date("m");      // Mês desejado, pode ser por ser obtido por POST, GET, etc.
$ano = date("Y"); // Ano atual
$ultimo_dia = date("t", mktime(0,0,0,$mes,'01',$ano)); // Mágica, plim!


echo $ultimo_dia;














?>







   
    




