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
if(!@($conc=pg_connect ("host=192.168.10.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@"))){
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
if(!@($conv=pg_connect ("host=192.168.10.190 dbname=troll_videira port=5430 user=postgres password=ky$14gr@"))){
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
if(!@($conl=pg_connect ("host=192.168.10.190 dbname=troll_lages port=5430 user=postgres password=ky$14gr@"))){
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
if(!@($conj=pg_connect ("host=192.168.10.190 dbname=troll_joinville port=5430 user=postgres password=ky$14gr@"))){
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
echo "<table border='2' width='30%' #E3F6CE align=center >";
echo "<tr><td>Caçador</td>"."<td>Videira</td>"."<td>Lages</td>"."<td>Joinville</td>"."</tr>";
$sql="select (sum( cjurdupli)) as juro, (sum(cvpadupli)) as prestacoes from asduplicatas where  cdpadupli <=  '2019-09-30'";
$exsql= pg_query($conc,$sql);
$resulsql= pg_fetch_array($exsql);
$prest=$resulsql['prestacoes'];
$sql="select sum(centsaidas) as entrada from asaidas INNER JOIN tnaturezaoperacao on i_asa_codigo_tna = i_tna_codigo_operacao
WHERE caviaprsaidas='P'  AND ctessaidas ='S' AND  ctpvnatureza = 'S' AND cemisaidas <= '2019-09-30'";
$exsql= pg_query($conc,$sql);
$resulsql= pg_fetch_array($exsql);
$entra=$resulsql['entrada'];
$sql="select sum(ctotsaidas) as avista from asaidas INNER JOIN tnaturezaoperacao  on i_asa_codigo_tna = i_tna_codigo_operacao
WHERE caviaprsaidas='V' AND ctessaidas ='S' AND  ctpvnatureza = 'S'  AND cemisaidas <= '2019-09-30'";
$exsql= pg_query($conc,$sql);
$resulsql= pg_fetch_array($exsql);
$avista=$resulsql['avista'];
$geral=$prest+$entra+$avista;
$geral=number_format($geral,2,",",".");
echo "<td>".$geral."</td>\n";
$sql="select (sum( cjurdupli)) as juro, (sum(cvpadupli)) as prestacoes from asduplicatas where  cdpadupli <=  '2019-09-30'";
$exsql= pg_query($conv,$sql);
$resulsql= pg_fetch_array($exsql);
$prest=$resulsql['prestacoes'];
$sql="select sum(centsaidas) as entrada from asaidas INNER JOIN tnaturezaoperacao on i_asa_codigo_tna = i_tna_codigo_operacao
WHERE caviaprsaidas='P'  AND ctessaidas ='S' AND  ctpvnatureza = 'S' AND cemisaidas <= '2019-09-30'";
$exsql= pg_query($conv,$sql);
$resulsql= pg_fetch_array($exsql);
$entra=$resulsql['entrada'];
$sql="select sum(ctotsaidas) as avista from asaidas INNER JOIN tnaturezaoperacao  on i_asa_codigo_tna = i_tna_codigo_operacao
WHERE caviaprsaidas='V' AND ctessaidas ='S' AND  ctpvnatureza = 'S'  AND cemisaidas <= '2019-09-30'";
$exsql= pg_query($conv,$sql);
$resulsql= pg_fetch_array($exsql);
$avista=$resulsql['avista'];
$geral=$prest+$entra+$avista;
$geral=number_format($geral,2,",",".");
echo "<td>".$geral."</td>\n";
$sql="select (sum( cjurdupli)) as juro, (sum(cvpadupli)) as prestacoes from asduplicatas where  cdpadupli <=  '2019-09-30'";
$exsql= pg_query($conl,$sql);
$resulsql= pg_fetch_array($exsql);
$prest=$resulsql['prestacoes'];
$sql="select sum(centsaidas) as entrada from asaidas INNER JOIN tnaturezaoperacao on i_asa_codigo_tna = i_tna_codigo_operacao
WHERE caviaprsaidas='P'  AND ctessaidas ='S' AND  ctpvnatureza = 'S' AND cemisaidas <= '2019-09-30'";
$exsql= pg_query($conl,$sql);
$resulsql= pg_fetch_array($exsql);
$entra=$resulsql['entrada'];
$sql="select sum(ctotsaidas) as avista from asaidas INNER JOIN tnaturezaoperacao  on i_asa_codigo_tna = i_tna_codigo_operacao
WHERE caviaprsaidas='V' AND ctessaidas ='S' AND  ctpvnatureza = 'S'  AND cemisaidas <= '2019-09-30'";
$exsql= pg_query($conl,$sql);
$resulsql= pg_fetch_array($exsql);
$avista=$resulsql['avista'];
$geral=$prest+$entra+$avista;
$geral=number_format($geral,2,",",".");
echo "<td>".$geral."</td>\n";
$sql="select (sum( cjurdupli)) as juro, (sum(cvpadupli)) as prestacoes from asduplicatas where  cdpadupli <=  '2019-09-30'";
$exsql= pg_query($conj,$sql);
$resulsql= pg_fetch_array($exsql);
$prest=$resulsql['prestacoes'];
$sql="select sum(centsaidas) as entrada from asaidas INNER JOIN tnaturezaoperacao on i_asa_codigo_tna = i_tna_codigo_operacao
WHERE caviaprsaidas='P'  AND ctessaidas ='S' AND  ctpvnatureza = 'S' AND cemisaidas <= '2019-09-30'";
$exsql= pg_query($conj,$sql);
$resulsql= pg_fetch_array($exsql);
$entra=$resulsql['entrada'];
$sql="select sum(ctotsaidas) as avista from asaidas INNER JOIN tnaturezaoperacao  on i_asa_codigo_tna = i_tna_codigo_operacao
WHERE caviaprsaidas='V' AND ctessaidas ='S' AND  ctpvnatureza = 'S'  AND cemisaidas <= '2019-09-30'";
$exsql= pg_query($conj,$sql);
$resulsql= pg_fetch_array($exsql);
$avista=$resulsql['avista'];
$geral=$prest+$entra+$avista;
$geral=number_format($geral,2,",",".");
echo "<td>".$geral."</td>\n";
echo "</tr>\n";
echo "<table border='2' width='100%' #E3F6CE >";
echo "<tr><td>Valor Coletado</td>"."<td>Data </td>"."<td>Base</td>"."</tr>";
$sql="select *from acomuladosilvio order by base  ";
$exsql=pg_query($conc,$sql);
while($row = pg_fetch_assoc($exsql)){
    $valor=$row['valor'];
    $valor=number_format($valor,2,",",".");
    $data=$row['data'];
    $data = implode("/",array_reverse(explode("-",$data)));
    $base=$row['base'];
    if ($base == '1') {
        $base='Caçador';
    } else {
        if ($base == '2') {
            $base='Videira';
        } else {
            if ($base == '3') {
                $base='Lages';
            } else {
                $base='Joinville';
            }
        }
    }
    echo "<td>".'R$'.$valor."</td>\n";
    echo "<td>".$data."</td>\n";
    echo "<td>".$base."</td>\n";
    echo "</tr>\n";
}
echo "<table border='2' width='100%' #E3F6CE >";
echo "<tr><td>Id</td>"."<td>Valor Sistema </td>"."<td>Anterior + Dia</td>"."<td>Faturamento Dia</td>"."<td>Data</td>"."<td>Direfrença</td>"."<td>Base</td>"."<td>Observação</td>"."</tr>";
$sql="select *from acomuladosilviolog order by id  ";
$exsql=pg_query($conc,$sql);
while($row = pg_fetch_assoc($exsql)){
    $id=$row['id'];
    $sistema=$row['valorsistema'];   
    
    $data=$row['data'];
    $data = implode("/",array_reverse(explode("-",$data)));
    $base=$row['base'];
    if ($base == '1') {
        $base='Caçador';
    } else {
        if ($base == '2') {
            $base='Videira';
        } else {
            if ($base == '3') {
                $base='Lages';
            } else {
                $base='Joinville';
            }
        }
    }
    $conf=$row['valorconf'];
    $dia=$row['faturamentodia'];
    $obs=$row['obs'];
    $dif=$sistema-$conf;
    $sistema=number_format($sistema,2,",",".");
    $conf=number_format($conf,2,",",".");
    $dif=number_format($dif,2,",",".");
    $dia=number_format($dia,2,",",".");
    echo "<td>".$id."</td>\n";
    echo "<td>".'R$'.$sistema."</td>\n";
    echo "<td>".'R$'.$conf."</td>\n";
    echo "<td>".'R$'.$dia."</td>\n";
    echo "<td>".$data."</td>\n";
    
    echo "<td>".'R$'.$dif."</td>\n";
    echo "<td>".$base."</td>\n";
    if ($dif <> 0) {
        echo "<td>".$obs."</td>\n";
    }
    echo "</tr>\n";
}



 
    

?>      
    




