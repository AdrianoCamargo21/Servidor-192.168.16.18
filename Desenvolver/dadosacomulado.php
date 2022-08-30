<!DOCTYPE html>
<html>
<head>
<title>Acomulado</title>
<meta http-equiv='refresh' content='1800' ;url=http://192.168.13.2/Desenvolver/produtos.php';'>
</head>
</html>
<?php
date_default_timezone_set('America/Sao_Paulo');
$hora=date('H:i:s');
$hora_parte=explode(":",$hora);
$hora_h=$hora_parte[0];
$minuto=$hora_parte[1];
$segundo=$hora_parte[2];
?>
<HTML>
<HEAD>
<center>
  <script tpye=text/javascript>
var segundo=<?php echo $segundo;?>;
var minuto=<?php echo $minuto;?>;
var hora=<?php echo $hora_h;?>;
 function tempo(){
	  if (segundo<59){
		   segundo=segundo+1
		    if (segundo==59){
			     minuto=minuto+1;
			      segundo=0;
			       if (hora==24){
				        hora=hora+1;
				         minuto=0;
				          segundo=0;
				           }
		             }
            }
   document.getElementById("relogio").innerHTML=(hora+":"+minuto+":"+segundo);
    }
</script>
</center>
</HEAD>
<meta name="GENERATOR" content="MAX's HTML Beauty++ ME">
<body onload="setInterval('tempo();',1000)">
<div name="relogio" id="relogio"></div>
<center><img src="img/fundo1.jpg"alt="10" heigth ="100px" width="400px" ></center>
<BODY>
</BODY>
</HTML>
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
if(!@($conexaol=pg_connect ("host=192.168.10.190 dbname=troll_lages port=5430 user=postgres password=ky$14gr@"))){
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
if(!@($conexaoj=pg_connect ("host=192.168.10.190 dbname=troll_joinville port=5430 user=postgres password=ky$14gr@"))){
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
$comando="select (sum(cvpadupli))as prestacao from asduplicatas where cdpadupli <= '2018-10-07'";
$excomando=pg_query($conexaoc,$comando);
$rscomando=pg_fetch_array($excomando);
$valorc=$rscomando['prestacao'];
$comando="select (sum(cvpadupli))as prestacao from asduplicatas where cdpadupli <= '2018-10-03'";
$excomando=pg_query($conexaov,$comando);
$rscomando=pg_fetch_array($excomando);
$valorv=$rscomando['prestacao'];
$comando="select (sum(cvpadupli))as prestacao from asduplicatas where cdpadupli <= '2018-10-03'";
$excomando=pg_query($conexaol,$comando);
$rscomando=pg_fetch_array($excomando);
$valorl=$rscomando['prestacao'];
$comando="select (sum(cvpadupli))as prestacao from asduplicatas where cdpadupli <= '2018-10-03'";
$excomando=pg_query($conexaoj,$comando);
$rscomando=pg_fetch_array($excomando);
$valorj=$rscomando['prestacao'];
echo "<table border='2' width='30%' #E3F6CE align=center >";
echo "<tr><td>Valor Pago Caçador R$</td>"."<td>Valor Pago Videira R$</td>"."<td>Valor Pago Lages R$</td>"."<td>Valor Pago Joinville R$</td>"."</tr>";
echo "<td>".$valorc."</td>\n";
echo "<td>".$valorv."</td>\n";
echo "<td>".$valorl."</td>\n";
echo "<td>".$valorj."</td>\n";
echo "</tr>\n";


$comando="select *from acomula order by id ";
$excomando=pg_query($conexaoc,$comando);
echo "Legenda Base:<br>";
echo "1-Caçador.<br>";
echo "2-Videira.<br>";
echo "3-Lages.<br>";
echo "4-Joinville.<br>";
echo "<table border='2' width='100%' bgcolor=#E3F6CE >";
echo "<tr><td>Id</td>"."<td>Valor R$</td>"."<td>Data Entregue Pela Karol</td>"."<td>Base</td>"."<td>Valor Pago Até a Entrega da Conferência</td>"."</tr>";
while ($row = pg_fetch_assoc ( $excomando)) {    
    echo "<td>".$row['id']."</td>\n";
    echo "<td>".$row['valor']."</td>\n";
    echo "<td>".$row['data']."</td>\n";
    echo "<td>".$row['base']."</td>\n";
    echo "<td>".$row['pago']."</td>\n"; 
    echo "</tr>\n";
}



$comando="select *from confacomulado order by id ";
$excomando=pg_query($conexaoc,$comando);
echo "<br>";
echo "<table border='2' width='100%' #E3F6CE >";
echo "<tr><td>Id</td>"."<td>Valor Correto R$</td>"."<td>Valor do Sistema</td>"."<td>Data Análise</td>"."<td>Base</td>"."</tr>";
while ($row = pg_fetch_assoc ( $excomando)) {
    echo "<td>".$row['id']."</td>\n";
    echo "<td>".$row['valorcorreto']."</td>\n";
    echo "<td>".$row['valorsistema']."</td>\n";
    echo "<td>".$row['data']."</td>\n";
    echo "<td>".$row['sistema']."</td>\n";
    echo "</tr>\n";
}


exit;  
    

?>      
    




