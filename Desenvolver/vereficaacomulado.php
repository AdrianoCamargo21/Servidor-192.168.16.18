<!DOCTYPE html>
<html>
<head>
<title>Acomulado Silvio</title>
<meta http-equiv='refresh' content='1800' ;url=http://192.168.13.2/Desenvolver/vereficaacolulado.php';'>
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

<BODY>
</BODY>
</HTML>
<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
set_time_limit(90000);
date_default_timezone_set('America/Sao_Paulo');
$time=date('H:i:s');
$dia= date('d-m-Y');
$data=date('Y-m-d');
$data=date('Y-m-d', strtotime($data. '-3 days'));

if(!@($conc=pg_connect ("host=192.168.16.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=30 color=#000000> Sem Comunicação Banco de Dados de Caçador Data:$dia  Hora:$time </font></b></p>";
    echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista e o Adriano Não Estiver Na Sala Favor avisar o Adriano</font></b></p>";
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
if(!@($conv=pg_connect ("host=192.168.16.190 dbname=troll_videira port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=30 color=#000000> Sem Comunicação Banco de Dados de Videira Data:$dia  Hora:$time </font></b></p>";
    echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista e o Adriano Não Estiver Na Sala Favor avisar o Adriano</font></b></p>";
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
if(!@($conl=pg_connect ("host=192.168.16.190 dbname=troll_lages port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=30 color=#000000> Sem Comunicação Banco de Dados de Lages Data:$dia  Hora:$time </font></b></p>";
    echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista e o Adriano Não Estiver Na Sala Favor avisar o Adriano</font></b></p>";
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
if(!@($conj=pg_connect ("host=192.168.16.190 dbname=troll_joinville port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=30 color=#000000> Sem Comunicação Banco de Dados de Joinville Data:$dia  Hora:$time </font></b></p>";
    echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista e o Adriano Não Estiver Na Sala Favor avisar o Adriano</font></b></p>";
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
$sql="select valor from acomuladosilvio where base='1'";
$exsql= pg_query($conc,$sql);
$resulsql= pg_fetch_array($exsql);
$acomulado=$resulsql['valor'];
if ($geral <> $acomulado) {
    $dif=$geral-$acomulado;
    $dif=number_format($dif,2,",",".");
    echo "<p style=background:#D3D3D3; align=center <br/><b><font size=5 color=#FF0000>Acomulado de Caçador com Diferença Data Retroativa 30/09/2019 Valor:$dif</font></b></p>";
}
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
$sql="select valor from acomuladosilvio where base='2'";
$exsql= pg_query($conc,$sql);
$resulsql= pg_fetch_array($exsql);
$acomulado=$resulsql['valor'];
if ($geral <> $acomulado) {
    $dif=$geral-$acomulado;
    $dif=number_format($dif,2,",",".");
    echo "<p style=background:#D3D3D3; align=center <br/><b><font size=5 color=#FF0000>Acomulado de Videira com Diferença Data Retroativa 30/09/2019 Valor:$dif</font></b></p>";
}
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
$sql="select valor from acomuladosilvio where base='3'";
$exsql= pg_query($conc,$sql);
$resulsql= pg_fetch_array($exsql);
$acomulado=$resulsql['valor'];
if ($geral <> $acomulado) {
    $dif=$geral-$acomulado;
    $dif=number_format($dif,2,",",".");
    echo "<p style=background:#D3D3D3; align=center <br/><b><font size=5 color=#FF0000>Acomulado de Lages com Diferença Data Retroativa 30/09/2019 Valor:$dif</font></b></p>";
}
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
$sql="select valor from acomuladosilvio where base='4'";
$exsql= pg_query($conc,$sql);
$resulsql= pg_fetch_array($exsql);
$acomulado=$resulsql['valor'];
$geral=number_format($geral,2,",",".");
$acomulado=number_format($acomulado,2,",",".");
if ($geral <> $acomulado ) {
    $dif=$geral-$acomulado;
    $dif=number_format($dif,2,",",".");
    echo "<p style=background:#D3D3D3; align=center <br/><b><font size=5 color=#FF0000>Acomulado de Joinville com Diferença Data Retroativa 30/09/2019 Valor:$dif</font></b></p>";
}
$sql="select data,valorconf from acomuladosilviolog where base = '1' order by data desc";
$exsql= pg_query($conc,$sql);
$resulsql= pg_fetch_array($exsql);
$datac=$resulsql['data'];
$valorc=$resulsql['valorconf'];
if ($datac >= $data) {
    echo "<p style=background:#D3D3D3; align=center <br/><b><font size=5 color=#FF0000>Caçador Data:$data Já Conferida</font></b></p>";
} else {
    $sql="select (sum( cjurdupli)) as juro, (sum(cvpadupli)) as prestacoes from asduplicatas where  cdpadupli <=  '$data'";
    $exsql= pg_query($conc,$sql);
    $resulsql= pg_fetch_array($exsql);
    $prest=$resulsql['prestacoes'];
    $sql="select sum(centsaidas) as entrada from asaidas INNER JOIN tnaturezaoperacao on i_asa_codigo_tna = i_tna_codigo_operacao
    WHERE caviaprsaidas='P'  AND ctessaidas ='S' AND  ctpvnatureza = 'S' AND cemisaidas <= '$data'";
    $exsql= pg_query($conc,$sql);
    $resulsql= pg_fetch_array($exsql);
    $entra=$resulsql['entrada'];
    $sql="select sum(ctotsaidas) as avista from asaidas INNER JOIN tnaturezaoperacao  on i_asa_codigo_tna = i_tna_codigo_operacao
    WHERE caviaprsaidas='V' AND ctessaidas ='S' AND  ctpvnatureza = 'S'  AND cemisaidas <= '$data'";
    $exsql= pg_query($conc,$sql);
    $resulsql= pg_fetch_array($exsql);
    $avista=$resulsql['avista'];
    $sistema=$prest+$entra+$avista;
    $sql="select (sum( cjurdupli)) as juro, (sum(cvpadupli)) as prestacoes from asduplicatas where  cdpadupli =  '$data'";
    $exsql= pg_query($conc,$sql);
    $resulsql= pg_fetch_array($exsql);
    $prest=$resulsql['prestacoes'];
    $sql="select sum(centsaidas) as entrada from asaidas INNER JOIN tnaturezaoperacao on i_asa_codigo_tna = i_tna_codigo_operacao
    WHERE caviaprsaidas='P'  AND ctessaidas ='S' AND  ctpvnatureza = 'S' AND cemisaidas = '$data'";
    $exsql= pg_query($conc,$sql);
    $resulsql= pg_fetch_array($exsql);
    $entra=$resulsql['entrada'];
    $sql="select sum(ctotsaidas) as avista from asaidas INNER JOIN tnaturezaoperacao  on i_asa_codigo_tna = i_tna_codigo_operacao
    WHERE caviaprsaidas='V' AND ctessaidas ='S' AND  ctpvnatureza = 'S'  AND cemisaidas = '$data'";
    $exsql= pg_query($conc,$sql);
    $resulsql= pg_fetch_array($exsql);
    $avista=$resulsql['avista'];
    $diaa=$prest+$entra+$avista;
    $dia=$diaa+$valorc;
    $sql="INSERT INTO acomuladosilviolog(id, valorsistema, data, base, valorconf,faturamentodia,obs)VALUES (nextval('seq_acomuladosilvio'),'$sistema','$data','1','$dia',$diaa,'Nenhuma')";
    $exsql= pg_query($conc,$sql);
}
$sql="select data,valorconf from acomuladosilviolog where base = '2' order by data desc";
$exsql= pg_query($conc,$sql);
$resulsql= pg_fetch_array($exsql);
$datac=$resulsql['data'];
$valorc=$resulsql['valorconf'];
if ($datac >= $data) {
    echo "<p style=background:#D3D3D3; align=center <br/><b><font size=5 color=#FF0000>Videira Data:$data Já Conferida</font></b></p>";
} else {
    $sql="select (sum( cjurdupli)) as juro, (sum(cvpadupli)) as prestacoes from asduplicatas where  cdpadupli <=  '$data'";
    $exsql= pg_query($conv,$sql);
    $resulsql= pg_fetch_array($exsql);
    $prest=$resulsql['prestacoes'];
    $sql="select sum(centsaidas) as entrada from asaidas INNER JOIN tnaturezaoperacao on i_asa_codigo_tna = i_tna_codigo_operacao
    WHERE caviaprsaidas='P'  AND ctessaidas ='S' AND  ctpvnatureza = 'S' AND cemisaidas <= '$data'";
    $exsql= pg_query($conv,$sql);
    $resulsql= pg_fetch_array($exsql);
    $entra=$resulsql['entrada'];
    $sql="select sum(ctotsaidas) as avista from asaidas INNER JOIN tnaturezaoperacao  on i_asa_codigo_tna = i_tna_codigo_operacao
    WHERE caviaprsaidas='V' AND ctessaidas ='S' AND  ctpvnatureza = 'S'  AND cemisaidas <= '$data'";
    $exsql= pg_query($conv,$sql);
    $resulsql= pg_fetch_array($exsql);
    $avista=$resulsql['avista'];
    $sistema=$prest+$entra+$avista;
    $sql="select (sum( cjurdupli)) as juro, (sum(cvpadupli)) as prestacoes from asduplicatas where  cdpadupli =  '$data'";
    $exsql= pg_query($conv,$sql);
    $resulsql= pg_fetch_array($exsql);
    $prest=$resulsql['prestacoes'];
    $sql="select sum(centsaidas) as entrada from asaidas INNER JOIN tnaturezaoperacao on i_asa_codigo_tna = i_tna_codigo_operacao
    WHERE caviaprsaidas='P'  AND ctessaidas ='S' AND  ctpvnatureza = 'S' AND cemisaidas = '$data'";
    $exsql= pg_query($conv,$sql);
    $resulsql= pg_fetch_array($exsql);
    $entra=$resulsql['entrada'];
    $sql="select sum(ctotsaidas) as avista from asaidas INNER JOIN tnaturezaoperacao  on i_asa_codigo_tna = i_tna_codigo_operacao
    WHERE caviaprsaidas='V' AND ctessaidas ='S' AND  ctpvnatureza = 'S'  AND cemisaidas = '$data'";
    $exsql= pg_query($conv,$sql);
    $resulsql= pg_fetch_array($exsql);
    $avista=$resulsql['avista'];
    $diaa=$prest+$entra+$avista;
    $dia=$diaa+$valorc;
    $sql="INSERT INTO acomuladosilviolog(id, valorsistema, data, base, valorconf,faturamentodia,obs)VALUES (nextval('seq_acomuladosilvio'),'$sistema','$data','2','$dia',$diaa,'Nenhuma')";
    $exsql= pg_query($conc,$sql);
}
$sql="select data,valorconf from acomuladosilviolog where base = '3' order by data desc";
$exsql= pg_query($conc,$sql);
$resulsql= pg_fetch_array($exsql);
$datac=$resulsql['data'];
$valorc=$resulsql['valorconf'];
if ($datac >= $data) {
    echo "<p style=background:#D3D3D3; align=center <br/><b><font size=5 color=#FF0000>Lages Data:$data Já Conferida</font></b></p>";
} else {
    $sql="select (sum( cjurdupli)) as juro, (sum(cvpadupli)) as prestacoes from asduplicatas where  cdpadupli <=  '$data'";
    $exsql= pg_query($conl,$sql);
    $resulsql= pg_fetch_array($exsql);
    $prest=$resulsql['prestacoes'];
    $sql="select sum(centsaidas) as entrada from asaidas INNER JOIN tnaturezaoperacao on i_asa_codigo_tna = i_tna_codigo_operacao
    WHERE caviaprsaidas='P'  AND ctessaidas ='S' AND  ctpvnatureza = 'S' AND cemisaidas <= '$data'";
    $exsql= pg_query($conl,$sql);
    $resulsql= pg_fetch_array($exsql);
    $entra=$resulsql['entrada'];
    $sql="select sum(ctotsaidas) as avista from asaidas INNER JOIN tnaturezaoperacao  on i_asa_codigo_tna = i_tna_codigo_operacao
    WHERE caviaprsaidas='V' AND ctessaidas ='S' AND  ctpvnatureza = 'S'  AND cemisaidas <= '$data'";
    $exsql= pg_query($conl,$sql);
    $resulsql= pg_fetch_array($exsql);
    $avista=$resulsql['avista'];
    $sistema=$prest+$entra+$avista;
    $sql="select (sum( cjurdupli)) as juro, (sum(cvpadupli)) as prestacoes from asduplicatas where  cdpadupli =  '$data'";
    $exsql= pg_query($conl,$sql);
    $resulsql= pg_fetch_array($exsql);
    $prest=$resulsql['prestacoes'];
    $sql="select sum(centsaidas) as entrada from asaidas INNER JOIN tnaturezaoperacao on i_asa_codigo_tna = i_tna_codigo_operacao
    WHERE caviaprsaidas='P'  AND ctessaidas ='S' AND  ctpvnatureza = 'S' AND cemisaidas = '$data'";
    $exsql= pg_query($conl,$sql);
    $resulsql= pg_fetch_array($exsql);
    $entra=$resulsql['entrada'];
    $sql="select sum(ctotsaidas) as avista from asaidas INNER JOIN tnaturezaoperacao  on i_asa_codigo_tna = i_tna_codigo_operacao
    WHERE caviaprsaidas='V' AND ctessaidas ='S' AND  ctpvnatureza = 'S'  AND cemisaidas = '$data'";
    $exsql= pg_query($conl,$sql);
    $resulsql= pg_fetch_array($exsql);
    $avista=$resulsql['avista'];
    $diaa=$prest+$entra+$avista;
    $dia=$diaa+$valorc;
    $sql="INSERT INTO acomuladosilviolog(id, valorsistema, data, base, valorconf,faturamentodia,obs)VALUES (nextval('seq_acomuladosilvio'),'$sistema','$data','3','$dia','$diaa','Nenhuma')";
    $exsql= pg_query($conc,$sql);
}
$sql="select data,valorconf from acomuladosilviolog where base = '4' order by data desc";
$exsql= pg_query($conc,$sql);
$resulsql= pg_fetch_array($exsql);
$datac=$resulsql['data'];
$valorc=$resulsql['valorconf'];
if ($datac >= $data) {
    echo "<p style=background:#D3D3D3; align=center <br/><b><font size=5 color=#FF0000>Joinville Data:$data Já Conferida</font></b></p>";
} else {
    $sql="select (sum( cjurdupli)) as juro, (sum(cvpadupli)) as prestacoes from asduplicatas where  cdpadupli <=  '$data'";
    $exsql= pg_query($conj,$sql);
    $resulsql= pg_fetch_array($exsql);
    $prest=$resulsql['prestacoes'];
    $sql="select sum(centsaidas) as entrada from asaidas INNER JOIN tnaturezaoperacao on i_asa_codigo_tna = i_tna_codigo_operacao
    WHERE caviaprsaidas='P'  AND ctessaidas ='S' AND  ctpvnatureza = 'S' AND cemisaidas <= '$data'";
    $exsql= pg_query($conj,$sql);
    $resulsql= pg_fetch_array($exsql);
    $entra=$resulsql['entrada'];
    $sql="select sum(ctotsaidas) as avista from asaidas INNER JOIN tnaturezaoperacao  on i_asa_codigo_tna = i_tna_codigo_operacao
    WHERE caviaprsaidas='V' AND ctessaidas ='S' AND  ctpvnatureza = 'S'  AND cemisaidas <= '$data'";
    $exsql= pg_query($conj,$sql);
    $resulsql= pg_fetch_array($exsql);
    $avista=$resulsql['avista'];
    $sistema=$prest+$entra+$avista;
    $sql="select (sum( cjurdupli)) as juro, (sum(cvpadupli)) as prestacoes from asduplicatas where  cdpadupli =  '$data'";
    $exsql= pg_query($conj,$sql);
    $resulsql= pg_fetch_array($exsql);
    $prest=$resulsql['prestacoes'];
    $sql="select sum(centsaidas) as entrada from asaidas INNER JOIN tnaturezaoperacao on i_asa_codigo_tna = i_tna_codigo_operacao
    WHERE caviaprsaidas='P'  AND ctessaidas ='S' AND  ctpvnatureza = 'S' AND cemisaidas = '$data'";
    $exsql= pg_query($conj,$sql);
    $resulsql= pg_fetch_array($exsql);
    $entra=$resulsql['entrada'];
    $sql="select sum(ctotsaidas) as avista from asaidas INNER JOIN tnaturezaoperacao  on i_asa_codigo_tna = i_tna_codigo_operacao
    WHERE caviaprsaidas='V' AND ctessaidas ='S' AND  ctpvnatureza = 'S'  AND cemisaidas = '$data'";
    $exsql= pg_query($conj,$sql);
    $resulsql= pg_fetch_array($exsql);
    $avista=$resulsql['avista'];
    $diaa=$prest+$entra+$avista;
    $dia=$diaa+$valorc;
    $sql="INSERT INTO acomuladosilviolog(id, valorsistema, data, base, valorconf,faturamentodia,obs)VALUES (nextval('seq_acomuladosilvio'),'$sistema','$data','4','$dia',$diaa,'Nenhuma')";
    $exsql= pg_query($conc,$sql);
}


?>