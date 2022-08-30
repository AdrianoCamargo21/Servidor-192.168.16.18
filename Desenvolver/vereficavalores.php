<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
session_start();
$voltalogin="<script>window.location='http://192.168.13.2/Desenvolver/vereficavalores.html';</script>";
$time=date('H:i:s');
$dia= date('Y-m-d');
$datai=$_POST["datai"];
if ($datai=='') {
    session_destroy();
    echo "<script>alert('Data Inicial Inválida');</script>";
    echo $voltalogin;
    exit;
}
$dataf=$_POST["dataf"];
if ($dataf=='') {
    session_destroy();
    echo "<script>alert('Data Final Inválida');</script>";
    echo $voltalogin;
    exit;
}
$tipo=$_POST["tipo"];
if ($tipo=='') {
    session_destroy();
    echo "<script>alert('Tipo De Consulta Inválida');</script>";
    echo $voltalogin;
    exit;
}
if(!@($conc=pg_connect ("host=192.168.16.190  dbname=troll_cdr port=5430 user=postgres password=ky$14gr@"))){
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
if(!@($resultc=pg_connect ("host=192.168.16.190  dbname=result_cdr port=5430 user=postgres password=ky$14gr@"))){
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
if(!@($conv=pg_connect ("host=192.168.16.190  dbname=troll_videira port=5430 user=postgres password=ky$14gr@"))){
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
if(!@($resultv=pg_connect ("host=192.168.16.190  dbname=result_videira port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=30 color=#000000> Sem Comunicação Banco de Dados de Result de Videira Data:$dia  Hora:$time </font></b></p>";
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
if(!@($conl=pg_connect ("host=192.168.16.190  dbname=troll_lages port=5430 user=postgres password=ky$14gr@"))){
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
if(!@($resultl=pg_connect ("host=192.168.16.190  dbname=result_lages port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=30 color=#000000> Sem Comunicação Banco de Dados de Result Joinville Data:$dia  Hora:$time </font></b></p>";
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
if(!@($conj=pg_connect ("host=192.168.16.190  dbname=troll_joinville port=5430 user=postgres password=ky$14gr@"))){
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
if(!@($resultj=pg_connect ("host=192.168.16.190  dbname=result_joinville port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=30 color=#000000> Sem Comunicação Banco de Dados de Result Joinville Data:$dia  Hora:$time </font></b></p>";
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
$dataia=$datai;
$datafa=$dataf;
$dataia = implode("/",array_reverse(explode("-",$dataia)));
$datafa = implode("/",array_reverse(explode("-",$datafa)));
if ($tipo =='D') {
    echo"<html><center><h1><font face='Arial' color='black'>Devoluções De:$dataia Até:$datafa </font></h1></center></html>";
    echo "<table border='2' width='100%' #E3F6CE >";
    echo "<tr><td>Valor Sistema</td>"."<td>Valor Result</td>"."<td>Diferença</td>"."<td>Sistema</td>"."</tr>";
    $sql="select sum(ctotsaidas) as devolucoes from asaidas  where cemisaidas >= '$datai' and cemisaidas <= '$dataf' and i_asa_codigo_tna = '10'";
    $exsql= pg_query($conc,$sql);
    $resulsql= pg_fetch_array($exsql);
    $devos=$resulsql['devolucoes'];
    $sql="select sum (cvalordebitohistorico) as devolucoes from ahcontas  where ccodigofavorecidohistorico = '34' and cdatahistorico >= '$datai' and cdatahistorico <= '$dataf' ";
    $exsql= pg_query($resultc,$sql);
    $resulsql= pg_fetch_array($exsql);
    $devor=$resulsql['devolucoes'];
    $dif=$devos-$devor;
    $devos=number_format($devos,2,",",".");
    $devor=number_format($devor,2,",",".");
    $dif=number_format($dif,2,",",".");
    echo "<td>".$devos."</td>\n";
    echo "<td>".$devor."</td>\n";
    echo "<td>".$dif."</td>\n";
    echo "<td>".'Caçador'."</td>\n";
    echo "</tr>\n";
    $sql="select sum(ctotsaidas) as devolucoes from asaidas  where cemisaidas >= '$datai' and cemisaidas <= '$dataf' and i_asa_codigo_tna = '10'";
    $exsql= pg_query($conv,$sql);
    $resulsql= pg_fetch_array($exsql);
    $devos=$resulsql['devolucoes'];
    $sql="select sum (cvalordebitohistorico) as devolucoes from ahcontas  where ccodigofavorecidohistorico = '34' and cdatahistorico >= '$datai' and cdatahistorico <= '$dataf' ";
    $exsql= pg_query($resultv,$sql);
    $resulsql= pg_fetch_array($exsql);
    $devor=$resulsql['devolucoes'];
    $dif=$devos-$devor;
    $devos=number_format($devos,2,",",".");
    $devor=number_format($devor,2,",",".");
    $dif=number_format($dif,2,",",".");
    echo "<td>".$devos."</td>\n";
    echo "<td>".$devor."</td>\n";
    echo "<td>".$dif."</td>\n";
    echo "<td>".'Videira'."</td>\n";
    echo "</tr>\n";
    $sql="select sum(ctotsaidas) as devolucoes from asaidas  where cemisaidas >= '$datai' and cemisaidas <= '$dataf' and i_asa_codigo_tna = '9'";
    $exsql= pg_query($conj,$sql);
    $resulsql= pg_fetch_array($exsql);
    $devos=$resulsql['devolucoes'];
    $sql="select sum (cvalordebitohistorico) as devolucoes from ahcontas  where ccodigofavorecidohistorico = '12' and cdatahistorico >= '$datai' and cdatahistorico <= '$dataf' ";
    $exsql= pg_query($resultj,$sql);
    $resulsql= pg_fetch_array($exsql);
    $devor=$resulsql['devolucoes'];
    $dif=$devos-$devor;
    $devos=number_format($devos,2,",",".");
    $devor=number_format($devor,2,",",".");
    $dif=number_format($dif,2,",",".");
    echo "<td>".$devos."</td>\n";
    echo "<td>".$devor."</td>\n";
    echo "<td>".$dif."</td>\n";
    echo "<td>".'Atacadão'."</td>\n";
    echo "</tr>\n";
    $sql="select sum(ctotsaidas) as devolucoes from asaidas  where cemisaidas >= '$datai' and cemisaidas <= '$dataf' and i_asa_codigo_tna = '10'";
    $exsql= pg_query($conl,$sql);
    $resulsql= pg_fetch_array($exsql);
    $devos=$resulsql['devolucoes'];
    $sql="select sum (cvalordebitohistorico) as devolucoes from ahcontas  where ccodigofavorecidohistorico = '34' and cdatahistorico >= '$datai' and cdatahistorico <= '$dataf' ";
    $exsql= pg_query($resultl,$sql);
    $resulsql= pg_fetch_array($exsql);
    $devor=$resulsql['devolucoes'];
    $dif=$devos-$devor;
    $devos=number_format($devos,2,",",".");
    $devor=number_format($devor,2,",",".");
    $dif=number_format($dif,2,",",".");
    echo "<td>".$devos."</td>\n";
    echo "<td>".$devor."</td>\n";
    echo "<td>".$dif."</td>\n";
    echo "<td>".'Lages'."</td>\n";
    echo "</tr>\n";
}
if ($tipo == 'F') {
    echo"<html><center><h1><font face='Arial' color='black'>Faturamento De:$dataia Até:$datafa </font></h1></center></html>";
    echo "<table border='2' width='100%' #E3F6CE >";
    echo "<tr><td>Valor Sistema</td>"."<td>Result Juros+Fat</td>"."<td>Diferença</td>"."<td>Sistema</td>"."</tr>";
    $sql="select (sum( cjurdupli)) as juro, (sum(cvpadupli)) as prestacoes from asduplicatas where  cdpadupli >=  '$datai' and  cdpadupli <=  '$dataf' ";
    $exsql= pg_query($conc,$sql);
    $resulsql= pg_fetch_array($exsql);
    $prest=$resulsql['prestacoes'];
    $sql="select sum(centsaidas) as entrada from asaidas INNER JOIN tnaturezaoperacao on i_asa_codigo_tna = i_tna_codigo_operacao
    WHERE caviaprsaidas='P'  AND ctessaidas ='S' AND  ctpvnatureza = 'S' AND cemisaidas >= '$datai' and  cemisaidas <=  '$dataf'";
    $exsql= pg_query($conc,$sql);
    $resulsql= pg_fetch_array($exsql);
    $entra=$resulsql['entrada'];
    $sql="select sum(ctotsaidas) as avista from asaidas INNER JOIN tnaturezaoperacao  on i_asa_codigo_tna = i_tna_codigo_operacao
    WHERE caviaprsaidas='V' AND ctessaidas ='S' AND  ctpvnatureza = 'S' and ctranatureza='SIM' AND cemisaidas >= '$datai' and  cemisaidas <=  '$dataf'";  
    $exsql= pg_query($conc,$sql);
    $resulsql= pg_fetch_array($exsql);
    $avista=$resulsql['avista'];
    $dia=$prest+$entra+$avista;    
    $sql="select (sum (cvalorcreditohistorico)) as faturamento from ahcontas  where ccodigofavorecidohistorico in ('39',49) and cdatahistorico >= '$datai' and cdatahistorico <= '$dataf' ";
    $exsql= pg_query($resultc,$sql);
    $resulsql= pg_fetch_array($exsql);
    $fat=$resulsql['faturamento'];
    $dif=$dia-$fat;
    $dia=number_format($dia,2,",",".");
    $fat=number_format($fat,2,",",".");
    $dif=number_format($dif,2,",",".");
    echo "<td>".$dia."</td>\n";
    echo "<td>".$fat."</td>\n";
    echo "<td>".$dif."</td>\n";
    echo "<td>".'Caçador'."</td>\n";
    echo "</tr>\n";
    $sql="select (sum( cjurdupli)) as juro, (sum(cvpadupli)) as prestacoes from asduplicatas where  cdpadupli >=  '$datai' and  cdpadupli <=  '$dataf' ";
    $exsql= pg_query($conv,$sql);
    $resulsql= pg_fetch_array($exsql);
    $prest=$resulsql['prestacoes'];
    $sql="select sum(centsaidas) as entrada from asaidas INNER JOIN tnaturezaoperacao on i_asa_codigo_tna = i_tna_codigo_operacao
    WHERE caviaprsaidas='P'  AND ctessaidas ='S' AND  ctpvnatureza = 'S' AND cemisaidas >= '$datai' and  cemisaidas <=  '$dataf'";
    $exsql= pg_query($conv,$sql);
    $resulsql= pg_fetch_array($exsql);
    $entra=$resulsql['entrada'];
    $sql="select sum(ctotsaidas) as avista from asaidas INNER JOIN tnaturezaoperacao  on i_asa_codigo_tna = i_tna_codigo_operacao
    WHERE caviaprsaidas='V' AND ctessaidas ='S' AND  ctpvnatureza = 'S'  and ctranatureza='SIM' AND cemisaidas >= '$datai' and  cemisaidas <=  '$dataf'";
    $exsql= pg_query($conv,$sql);
    $resulsql= pg_fetch_array($exsql);
    $avista=$resulsql['avista'];
    $dia=$prest+$entra+$avista;
    $sql="select (sum (cvalorcreditohistorico)) as faturamento from ahcontas  where ccodigofavorecidohistorico in ('39',49) and cdatahistorico >= '$datai' and cdatahistorico <= '$dataf' ";
    $exsql= pg_query($resultv,$sql);
    $resulsql= pg_fetch_array($exsql);
    $fat=$resulsql['faturamento'];
    $dif=$dia-$fat;
    $dia=number_format($dia,2,",",".");
    $fat=number_format($fat,2,",",".");
    $dif=number_format($dif,2,",",".");
    echo "<td>".$dia."</td>\n";
    echo "<td>".$fat."</td>\n";
    echo "<td>".$dif."</td>\n";
    echo "<td>".'Videira'."</td>\n";
    echo "</tr>\n";
    $sql="select (sum( cjurdupli)) as juro, (sum(cvpadupli)) as prestacoes from asduplicatas where  cdpadupli >=  '$datai' and  cdpadupli <=  '$dataf' ";
    $exsql= pg_query($conj,$sql);
    $resulsql= pg_fetch_array($exsql);
    $prest=$resulsql['prestacoes'];
    $sql="select sum(centsaidas) as entrada from asaidas INNER JOIN tnaturezaoperacao on i_asa_codigo_tna = i_tna_codigo_operacao
    WHERE caviaprsaidas='P'  AND ctessaidas ='S' AND  ctpvnatureza = 'S' AND cemisaidas >= '$datai' and  cemisaidas <=  '$dataf'";
    $exsql= pg_query($conj,$sql);
    $resulsql= pg_fetch_array($exsql);
    $entra=$resulsql['entrada'];
    $sql="select sum(ctotsaidas) as avista from asaidas INNER JOIN tnaturezaoperacao  on i_asa_codigo_tna = i_tna_codigo_operacao
    WHERE caviaprsaidas='V' AND ctessaidas ='S' AND  ctpvnatureza = 'S' and ctranatureza='SIM'   AND cemisaidas >= '$datai' and  cemisaidas <=  '$dataf'";
    $exsql= pg_query($conj,$sql);
    $resulsql= pg_fetch_array($exsql);
    $avista=$resulsql['avista'];
    $dia=$prest+$entra+$avista;
    $sql="select (sum (cvalorcreditohistorico)) as faturamento from ahcontas  where ccodigofavorecidohistorico in ('2') and cdatahistorico >= '$datai' and cdatahistorico <= '$dataf' ";
    $exsql= pg_query($resultj,$sql);
    $resulsql= pg_fetch_array($exsql);
    $fat=$resulsql['faturamento'];
    $dif=$dia-$fat;
    $dia=number_format($dia,2,",",".");
    $fat=number_format($fat,2,",",".");
    $dif=number_format($dif,2,",",".");
    echo "<td>".$dia."</td>\n";
    echo "<td>".$fat."</td>\n";
    echo "<td>".$dif."</td>\n";
    echo "<td>".'Atacadão'."</td>\n";
    echo "</tr>\n";
    $sql="select (sum( cjurdupli)) as juro, (sum(cvpadupli)) as prestacoes from asduplicatas where  cdpadupli >=  '$datai' and  cdpadupli <=  '$dataf' ";
    $exsql= pg_query($conl,$sql);
    $resulsql= pg_fetch_array($exsql);
    $prest=$resulsql['prestacoes'];
    $sql="select sum(centsaidas) as entrada from asaidas INNER JOIN tnaturezaoperacao on i_asa_codigo_tna = i_tna_codigo_operacao
    WHERE caviaprsaidas='P'  AND ctessaidas ='S' AND  ctpvnatureza = 'S' AND cemisaidas >= '$datai' and  cemisaidas <=  '$dataf'";
    $exsql= pg_query($conl,$sql);
    $resulsql= pg_fetch_array($exsql);
    $entra=$resulsql['entrada'];
    $sql="select sum(ctotsaidas) as avista from asaidas INNER JOIN tnaturezaoperacao  on i_asa_codigo_tna = i_tna_codigo_operacao
    WHERE caviaprsaidas='V' AND ctessaidas ='S' AND  ctpvnatureza = 'S' and ctranatureza='SIM'   AND cemisaidas >= '$datai' and  cemisaidas <=  '$dataf'";
    $exsql= pg_query($conl,$sql);
    $resulsql= pg_fetch_array($exsql);
    $avista=$resulsql['avista'];
    $dia=$prest+$entra+$avista;
    $sql="select (sum (cvalorcreditohistorico)) as faturamento from ahcontas  where ccodigofavorecidohistorico in ('39','49') and cdatahistorico >= '$datai' and cdatahistorico <= '$dataf' ";
    $exsql= pg_query($resultl,$sql);
    $resulsql= pg_fetch_array($exsql);
    $fat=$resulsql['faturamento'];
    $dif=$dia-$fat;
    $dia=number_format($dia,2,",",".");
    $fat=number_format($fat,2,",",".");
    $dif=number_format($dif,2,",",".");
    echo "<td>".$dia."</td>\n";
    echo "<td>".$fat."</td>\n";
    echo "<td>".$dif."</td>\n";
    echo "<td>".'Lages'."</td>\n";
    echo "</tr>\n";
}
if ($tipo == 'FO') {
    echo"<html><center><h1><font face='Arial' color='black'>Duplicatas De:$dataia Até:$datafa </font></h1></center></html>";
    echo "<table border='2' width='100%' #E3F6CE >";
    echo "<tr><td>Valor Sistema</td>"."<td>Valor Result</td>"."<td>Diferença</td>"."<td>Sistema</td>"."</tr>";
    $sql="select (sum(cvapduplicata)) as duplicadas from aeduplicatas inner join afornecedor on cforduplicata=ccodfornecedor where cdpaduplicata >= '$datai' and cdpaduplicata <= '$dataf' and ctipofornecedor in (1,4) and cnumduplicata <> 'SILVIO'";
    $exsql= pg_query($conc,$sql);
    $resulsql= pg_fetch_array($exsql);
    $dupli=$resulsql['duplicadas'];
    $sql="select sum (cvalordebitohistorico) as fornecedor from ahcontas  where ccodigofavorecidohistorico = '41' and cdatahistorico >= '$datai' and cdatahistorico <= '$dataf' ";
    $exsql= pg_query($resultc,$sql);
    $resulsql= pg_fetch_array($exsql);
    $forne=$resulsql['fornecedor'];
    $dif=$dupli-$forne;
    $dupli=number_format($dupli,2,",",".");
    $forne=number_format($forne,2,",",".");
    $dif=number_format($dif,2,",",".");
    echo "<td>".$dupli."</td>\n";
    echo "<td>".$forne."</td>\n";
    echo "<td>".$dif."</td>\n";
    echo "<td>".'Caçador'."</td>\n";
    echo "</tr>\n";
    $sql="select (sum(cvapduplicata)) as duplicadas from aeduplicatas inner join afornecedor on cforduplicata=ccodfornecedor where cdpaduplicata >= '$datai' and cdpaduplicata <= '$dataf' and ctipofornecedor in (1,4) and cnumduplicata <> 'SILVIO'";
    $exsql= pg_query($conv,$sql);
    $resulsql= pg_fetch_array($exsql);
    $dupli=$resulsql['duplicadas'];
    $sql="select sum (cvalordebitohistorico) as fornecedor from ahcontas  where ccodigofavorecidohistorico = '41' and cdatahistorico >= '$datai' and cdatahistorico <= '$dataf' ";
    $exsql= pg_query($resultv,$sql);
    $resulsql= pg_fetch_array($exsql);
    $forne=$resulsql['fornecedor'];
    $dif=$dupli-$forne;
    $dupli=number_format($dupli,2,",",".");
    $forne=number_format($forne,2,",",".");
    $dif=number_format($dif,2,",",".");
    echo "<td>".$dupli."</td>\n";
    echo "<td>".$forne."</td>\n";
    echo "<td>".$dif."</td>\n";
    echo "<td>".'Videira'."</td>\n";
    echo "</tr>\n";
    $sql="select (sum(cvapduplicata)) as duplicadas from aeduplicatas inner join afornecedor on cforduplicata=ccodfornecedor where cdpaduplicata >= '$datai' and cdpaduplicata <= '$dataf' and ctipofornecedor in (38528,38530) and cnumduplicata <> 'SILVIO'";
    $exsql= pg_query($conj,$sql);
    $resulsql= pg_fetch_array($exsql);
    $dupli=$resulsql['duplicadas'];
    $sql="select sum (cvalordebitohistorico) as fornecedor from ahcontas  where ccodigofavorecidohistorico = '20' and cdatahistorico >= '$datai' and cdatahistorico <= '$dataf' ";
    $exsql= pg_query($resultj,$sql);
    $resulsql= pg_fetch_array($exsql);
    $forne=$resulsql['fornecedor'];
    $dif=$dupli-$forne;
    $dupli=number_format($dupli,2,",",".");
    $forne=number_format($forne,2,",",".");
    $dif=number_format($dif,2,",",".");
    echo "<td>".$dupli."</td>\n";
    echo "<td>".$forne."</td>\n";
    echo "<td>".$dif."</td>\n";
    echo "<td>".'Atacadão'."</td>\n";
    echo "</tr>\n";
    $sql="select (sum(cvapduplicata)) as duplicadas from aeduplicatas inner join afornecedor on cforduplicata=ccodfornecedor where cdpaduplicata >= '$datai' and cdpaduplicata <= '$dataf' and ctipofornecedor in (1,4) and cnumduplicata <> 'SILVIO'";
    $exsql= pg_query($conl,$sql);
    $resulsql= pg_fetch_array($exsql);
    $dupli=$resulsql['duplicadas'];
    $sql="select sum (cvalordebitohistorico) as fornecedor from ahcontas  where ccodigofavorecidohistorico = '41' and cdatahistorico >= '$datai' and cdatahistorico <= '$dataf' ";
    $exsql= pg_query($resultl,$sql);
    $resulsql= pg_fetch_array($exsql);
    $forne=$resulsql['fornecedor'];
    $dif=$dupli-$forne;
    $dupli=number_format($dupli,2,",",".");
    $forne=number_format($forne,2,",",".");
    $dif=number_format($dif,2,",",".");
    echo "<td>".$dupli."</td>\n";
    echo "<td>".$forne."</td>\n";
    echo "<td>".$dif."</td>\n";
    echo "<td>".'Lages'."</td>\n";
    echo "</tr>\n";
}





?>
<!DOCTYPE html>
<html>
<head>
<center>
<title>ViaBrasil.bay</title>
<link rel="stylesheet" href="css/style.css"></link>
<a title='Imprimir' href='javascript:window.print()'><img src="img/impressora.jpg" alt="20" heigth ="100px" width="100px"  border="0" /></a>
<br><br>
<center><form name = "form1" method= "post" action= "vereficavalores.html">
<input class="btn btn-red" type="submit" value="Voltar"/>

<br><br>
</center>
</head>
</html>
