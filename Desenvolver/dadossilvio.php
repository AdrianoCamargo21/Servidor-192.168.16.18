<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
error_reporting(0);
date_default_timezone_set('America/Sao_Paulo');
$time=date('H:i:s');
$dia= date('d-m-Y');
$diaing=date('Y-m-d');
set_time_limit(0);
$volta="<script>window.location='http://192.168.13.2/Desenvolver/dadossilvio.html'</script>";
if(!@($conc=pg_connect ("host=192.168.16.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Caçador Data:$dia  Hora:$time </font></b></p>";
    echo "<p style=background:#000000; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista Favor avisar o Adriano</font></b></p>";
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <center><img src="img/Silvioerro.png"alt="500" heigth ="300px" width="300px" ></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit; 
}
if(!@($conv=pg_connect ("host=192.168.16.190 dbname=troll_videira port=5430 user=postgres password=ky$14gr@"))){
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
if(!@($conl=pg_connect ("host=192.168.16.190 dbname=troll_lages port=5430 user=postgres password=ky$14gr@"))){
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
if(!@($conj=pg_connect ("host=192.168.16.190 dbname=troll_joinville port=5430 user=postgres password=ky$14gr@"))){
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
$base=$_POST['base']; 
if ($base== 'REVL') {
	$datain=$_POST['dataii'];
	if ($datain == null) {
		$datain=$diaing;
	}
	$dataf=$_POST['dataff'];
	if ($dataf == null) {
		$dataf=$diaing;
	}
	$dataina=$_POST['dataiaa'];
	if ($dataina == null) {
    	$partes = explode("-", $datain);
	    $ano = $partes[0];
	    $mes = $partes[1];
	    $dia = $partes[2];
	    $anoant=$ano-1;
	    $dataina=$anoant.'-'.$mes.'-'.$dia;
	}
	$datafa=$_POST['datafaa'];
	if ($datafa == null) {
		$partes = explode("-", $dataf);
	    $ano = $partes[0];
	    $mes = $partes[1];
	    $dia = $partes[2];
	    $anoant=$ano-1;
	    $datafa=$anoant.'-'.$mes.'-'.$dia;
	}
	$partes = explode("-", $dataina);
    $ano = $partes[0];
    $mes = $partes[1];
    $dia = $partes[2];	
	echo "<table border='2' width='200%' bgcolor=#F5F6CE >";
	echo "<tr><td><font size=3><strong>Cód.</strong></font></td>"."<td><font color=\"black\" size=3><strong>Linha</strong></font></td>".
	"<td><font color=\"black\" size=3><strong>Rosane</strong></font></td>"."<td><font color=\"black\" size=3><strong>Rosane/$ano</strong></font></td>"
	."<td><font color=\"black\" size=3><strong>Lucélia</strong></font></td>"."<td><font color=\"black\" size=3><strong>Lucélia/$ano</strong></font></td>".
	"<td><font color=\"black\" size=3><strong>Maynara</strong></font></td>"."<td><font color=\"black\" size=3><strong>Maynara/$ano</strong></font></td>".
	"<td><font color=\"black\" size=3><strong>Adrielli</strong></font></td>"."<td><font color=\"black\" size=3><strong>Adrielli/$ano</strong></font></td>"
	."<td><font color=\"black\" size=3><strong>Shop Cdr</strong></font></td>"."<td><font color=\"black\" size=3><strong>Shop Cdr/$ano</strong></font></td>"
	."<td><font color=\"black\" size=3><strong>Nádia</strong></font></td>"."<td><font color=\"black\" size=3><strong>Nádia/$ano</strong></font></td>"
	."<td><font color=\"black\" size=3><strong>Martello</strong></font></td>"."<td><font color=\"black\" size=3><strong>Martello/$ano</strong></font></td>"
	."<td><font color=\"black\" size=3><strong>Shop Vid</strong></font></td>"."<td><font color=\"black\" size=3><strong>Shop Vid/$ano</strong></font></td>"
	."<td><font color=\"black\" size=3><strong>Atacadão Cdr</strong></font></td>"."<td><font color=\"black\" size=3><strong>Atacadão Cdr/$ano</strong></font></td>"
	."<td><font color=\"black\" size=3><strong>Rosani</strong></font></td>"."<td><font color=\"black\" size=3><strong>Rosani/$ano</strong></font></td>"
	."<td><font color=\"black\" size=3><strong>Lages</strong></font></td>"."<td><font color=\"black\" size=3><strong>Lages/$ano</strong></font></td>".
	"<td><font color=\"black\" size=3><strong>Atacadão Lg</strong></font></td>"."<td><font color=\"black\" size=3><strong>Atacadão Lg/$ano</strong></font></td>".
	"<td><font color=\"black\" size=3><strong>TT Venda</strong></font></td>"."</tr>";
	$c1=0.00;$c2=0.00;$c3=0.00;$c4=0.00;$c5=0.00;$c6=0.00;$c7=0.00;$c8=0.00;$c9=0.00;$c10=0.00;$c11=0.00;$c12=0.00;$c13=0.00;$c14=0.00;$c15=0.00;$c16=0.00;$c17=0.00;$c18=0.00;$c19=0.00;$c20=0.00;$c21=0.00;$c22=0.00;$c23=0.00;$c24=0.00;
	$c25=0.00;
	$l1=0.00;
	$linha=$_POST['linhaa'];
	if ($linha == null or $linha==0) {
		echo "<td><font color=\"black\" size=4><strong>".'Confecções'."</strong></font></td>\n";
		echo "</tr>\n"; 
		$sql="select ccodlinha,cdeslinha from tlinha where cdeslinha ilike '%CONFECÇÕES%' order by cdeslinha";
		$exsql=pg_query($conc,$sql);
		while ($row = pg_fetch_assoc($exsql)) {
	        $codlinha=$row['ccodlinha'];
	        $deslinha=$row['cdeslinha'];
	        $com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
			join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
			on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
			cemihistorico <= '$dataf'  and ccodlinha = '$codlinha')";
	        $excom=pg_query($conc,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $resulbc=$rscom['sum'];
		    $excom=pg_query($conl,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $resulbl=$rscom['sum'];
	        $excom=pg_query($conv,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $resulbv=$rscom['sum'];
	        $excom=pg_query($conj,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $resulbj=$rscom['sum'];
		    $com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
			join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
			on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
			cemihistorico <= '$datafa'  and ccodlinha = '$codlinha')";
	        $excom=pg_query($conc,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $aresulbc=$rscom['sum'];
		    $excom=pg_query($conl,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $aresulbl=$rscom['sum'];
	        $excom=pg_query($conv,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $aresulbv=$rscom['sum'];
	        $excom=pg_query($conj,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $aresulbj=$rscom['sum'];		    
		   if ($resulbc > 0 or $resulbl > 0 or $resulbv > 0  or $resulbk > 0 or $aresulbc > 0 or $aresulbl > 0 or $aresulbv > 0  or $aresulbj > 0) {
		   		echo "<td><font color=\"red\" size=4 >".$codlinha."</font></td>\n";
		   		echo "<td><font color=\"red\" size=4 >".$deslinha."</font></td>\n";
		   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";//exit($com);	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c1=$c1+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c2=$c2+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
				$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c3=$c3+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c4=$c4+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (5,6) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c5=$c5+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (5,6) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c6=$c6+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (7,8) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c7=$c7+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (7,8) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c8=$c8+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (11,12) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c9=$c9+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (11,12) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c10=$c10+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (13,14) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c11=$c11+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (13,14) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c12=$c12+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (15,16) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c13=$c13+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (15,16) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c14=$c14+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (17,18) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c15=$c15+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (17,18) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c16=$c16+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conj,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c17=$c17+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conj,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c18=$c18+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    			    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conj,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c19=$c19+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conj,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c20=$c20+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    			    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conl,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c21=$c21+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conl,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c22=$c22+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conl,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c23=$c23+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conl,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c24=$c24+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
	    	    echo "<td><font color=\"black\" size=4><strong>".number_format($l1,2,",",".")."</strong></font></td>\n";
	    	    $c25= $c25+$l1;
	    	    $l1=0.00;		    	
		   		echo "</tr>\n";
		   }		       	        
		}
		$tc1=$c1;$tc2=$c2;$tc3=$c3;$tc4=$c4;$tc5=$c5;$tc6=$c6;$tc7=$c7;$tc8=$c8;$tc9=$c9;$tc10=$c10;$tc11=$c11;$tc12=$c12;$tc13=$c13;$tc14=$c14;$tc15=$c15;
		$tc16=$c16;$tc17=$c17;$tc18=$c18;$tc19=$c19;$tc20=$c20;$tc21=$c21;$tc22=$c22;$tc23=$c23;$tc24=$c24;$tc25=$c25;
        echo "<td><font color=\"black\" size=5><strong>".'TT'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=5><strong>".null."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c1,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c2,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c3,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c4,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c5,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c6,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c7,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c8,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c9,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c10,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c11,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c12,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c13,2,",",".")."</strong></font></td>\n";
        echo "<td><font color=\"black\" size=4><strong>".number_format($c14,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c15,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c16,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c17,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c18,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c19,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c20,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c21,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c22,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c23,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c24,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c25,2,",",".")."</strong></font></td>\n";			    
		echo "</tr>\n";
		$c1=0.00;$c2=0.00;$c3=0.00;$c4=0.00;$c5=0.00;$c6=0.00;$c7=0.00;$c8=0.00;$c9=0.00;$c10=0.00;$c11=0.00;$c12=0.00;$c13=0.00;$c14=0.00;$c15=0.00;$c16=0.00;$c17=0.00;$c18=0.00;$c19=0.00;$c20=0.00;$c21=0.00;$c22=0.00;$c23=0.00;$c24=0.00;
		$c25=0.00;
		echo "<td><font color=\"black\" size=4><strong>".'Calçados'."</strong></font></td>\n";
		echo "</tr>\n"; 
		$sql="select ccodlinha,cdeslinha from tlinha where cdeslinha ilike '%CALÇADOS%' order by cdeslinha";
		$exsql=pg_query($conc,$sql);
		while ($row = pg_fetch_assoc($exsql)) {
	        $codlinha=$row['ccodlinha'];
	        $deslinha=$row['cdeslinha'];
	        $com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
			join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
			on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
			cemihistorico <= '$dataf'  and ccodlinha = '$codlinha')";
	        $excom=pg_query($conc,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $resulbc=$rscom['sum'];
		    $excom=pg_query($conl,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $resulbl=$rscom['sum'];
	        $excom=pg_query($conv,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $resulbv=$rscom['sum'];
	        $excom=pg_query($conj,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $resulbj=$rscom['sum'];
		    $com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
			join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
			on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
			cemihistorico <= '$datafa'  and ccodlinha = '$codlinha')";
	        $excom=pg_query($conc,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $aresulbc=$rscom['sum'];
		    $excom=pg_query($conl,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $aresulbl=$rscom['sum'];
	        $excom=pg_query($conv,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $aresulbv=$rscom['sum'];
	        $excom=pg_query($conj,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $aresulbj=$rscom['sum'];		    
		   if ($resulbc > 0 or $resulbl > 0 or $resulbv > 0  or $resulbk > 0 or $aresulbc > 0 or $aresulbl > 0 or $aresulbv > 0  or $aresulbj > 0) {
		   		echo "<td><font color=\"red\" size=4 >".$codlinha."</font></td>\n";
		   		echo "<td><font color=\"red\" size=4 >".$deslinha."</font></td>\n";
		   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c1=$c1+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c2=$c2+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
				$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c3=$c3+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c4=$c4+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (5,6) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c5=$c5+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (5,6) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c6=$c6+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (7,8) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c7=$c7+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (7,8) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c8=$c8+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (11,12) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c9=$c9+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (11,12) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c10=$c10+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (13,14) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c11=$c11+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (13,14) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c12=$c12+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (15,16) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c13=$c13+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (15,16) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c14=$c14+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (17,18) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c15=$c15+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (17,18) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c16=$c16+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conj,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c17=$c17+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conj,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c18=$c18+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    			    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conj,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c19=$c19+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conj,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c20=$c20+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    			    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conl,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c21=$c21+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conl,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c22=$c22+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conl,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c23=$c23+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conl,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c24=$c24+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
	    	    echo "<td><font color=\"black\" size=4><strong>".number_format($l1,2,",",".")."</strong></font></td>\n";
	    	    $c25= $c25+$l1;
	    	    $l1=0.00;		    	
		   		echo "</tr>\n";
		   }		       	        
		}
		$tc1=$tc1+$c1;$tc2=$tc2+$c2;$tc3=$tc3+$c3;$tc4=$tc4+$c4;$tc5=$tc5+$c5;$tc6=$tc6+$c6;$tc7=$tc7+$c7;$tc8=$tc8+$c8;$tc9=$tc9+$c9;$tc10=$tc10+$c10;$tc11=$tc11+$c11;
		$tc12=$tc12+$c12;$tc13=$tc13+$c13;$tc14=$tc14+$c14;$tc15=$tc15+$c15;$tc16=$tc16+$c16;$tc17=$tc17+$c17;$tc18=$tc18+$c18;$tc19=$tc19+$c19;$tc20=$tc20+$c20;
		$tc21=$tc21+$c21;$tc22=$tc23+$c23;$tc24=$tc24+$c24;$tc25=$tc25+$c25;
        echo "<td><font color=\"black\" size=5><strong>".'TT'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=5><strong>".null."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c1,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c2,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c3,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c4,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c5,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c6,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c7,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c8,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c9,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c10,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c11,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c12,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c13,2,",",".")."</strong></font></td>\n";
        echo "<td><font color=\"black\" size=4><strong>".number_format($c14,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c15,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c16,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c17,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c18,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c19,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c20,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c21,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c22,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c23,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c24,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c25,2,",",".")."</strong></font></td>\n";			    
		echo "</tr>\n";
		$c1=0.00;$c2=0.00;$c3=0.00;$c4=0.00;$c5=0.00;$c6=0.00;$c7=0.00;$c8=0.00;$c9=0.00;$c10=0.00;$c11=0.00;$c12=0.00;$c13=0.00;$c14=0.00;$c15=0.00;$c16=0.00;$c17=0.00;$c18=0.00;$c19=0.00;$c20=0.00;$c21=0.00;$c22=0.00;$c23=0.00;$c24=0.00;
		$c25=0.00;
		echo "<td><font color=\"black\" size=4><strong>".'Esportes'."</strong></font></td>\n";
		echo "</tr>\n"; 
		$sql="select ccodlinha,cdeslinha from tlinha where cdeslinha ilike '%ESPORTES%' order by cdeslinha";
		$exsql=pg_query($conc,$sql);
		while ($row = pg_fetch_assoc($exsql)) {
	        $codlinha=$row['ccodlinha'];
	        $deslinha=$row['cdeslinha'];
	        $com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
			join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
			on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
			cemihistorico <= '$dataf'  and ccodlinha = '$codlinha')";
	        $excom=pg_query($conc,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $resulbc=$rscom['sum'];
		    $excom=pg_query($conl,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $resulbl=$rscom['sum'];
	        $excom=pg_query($conv,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $resulbv=$rscom['sum'];
	        $excom=pg_query($conj,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $resulbj=$rscom['sum'];
		    $com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
			join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
			on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
			cemihistorico <= '$datafa'  and ccodlinha = '$codlinha')";
	        $excom=pg_query($conc,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $aresulbc=$rscom['sum'];
		    $excom=pg_query($conl,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $aresulbl=$rscom['sum'];
	        $excom=pg_query($conv,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $aresulbv=$rscom['sum'];
	        $excom=pg_query($conj,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $aresulbj=$rscom['sum'];		    
		   if ($resulbc > 0 or $resulbl > 0 or $resulbv > 0  or $resulbk > 0 or $aresulbc > 0 or $aresulbl > 0 or $aresulbv > 0  or $aresulbj > 0) {
		   		echo "<td><font color=\"red\" size=4 >".$codlinha."</font></td>\n";
		   		echo "<td><font color=\"red\" size=4 >".$deslinha."</font></td>\n";
		   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c1=$c1+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c2=$c2+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
				$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c3=$c3+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c4=$c4+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (5,6) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c5=$c5+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (5,6) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c6=$c6+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (7,8) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c7=$c7+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (7,8) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c8=$c8+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (11,12) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c9=$c9+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (11,12) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c10=$c10+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (13,14) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c11=$c11+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (13,14) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c12=$c12+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (15,16) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c13=$c13+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (15,16) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c14=$c14+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (17,18) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c15=$c15+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (17,18) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c16=$c16+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conj,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c17=$c17+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conj,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c18=$c18+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    			    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conj,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c19=$c19+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conj,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c20=$c20+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    			    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conl,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c21=$c21+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conl,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c22=$c22+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conl,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c23=$c23+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conl,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c24=$c24+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
	    	    echo "<td><font color=\"black\" size=4><strong>".number_format($l1,2,",",".")."</strong></font></td>\n";
	    	    $c25= $c25+$l1;
	    	    $l1=0.00;		    	
		   		echo "</tr>\n";
		   }		       	        
		}
		$tc1=$tc1+$c1;$tc2=$tc2+$c2;$tc3=$tc3+$c3;$tc4=$tc4+$c4;$tc5=$tc5+$c5;$tc6=$tc6+$c6;$tc7=$tc7+$c7;$tc8=$tc8+$c8;$tc9=$tc9+$c9;$tc10=$tc10+$c10;$tc11=$tc11+$c11;
		$tc12=$tc12+$c12;$tc13=$tc13+$c13;$tc14=$tc14+$c14;$tc15=$tc15+$c15;$tc16=$tc16+$c16;$tc17=$tc17+$c17;$tc18=$tc18+$c18;$tc19=$tc19+$c19;$tc20=$tc20+$c20;
		$tc21=$tc21+$c21;$tc22=$tc23+$c23;$tc24=$tc24+$c24;$tc25=$tc25+$c25;
        echo "<td><font color=\"black\" size=5><strong>".'TT'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=5><strong>".null."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c1,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c2,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c3,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c4,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c5,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c6,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c7,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c8,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c9,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c10,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c11,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c12,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c13,2,",",".")."</strong></font></td>\n";
        echo "<td><font color=\"black\" size=4><strong>".number_format($c14,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c15,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c16,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c17,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c18,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c19,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c20,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c21,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c22,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c23,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c24,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c25,2,",",".")."</strong></font></td>\n";			    
		echo "</tr>\n";
		$c1=0.00;$c2=0.00;$c3=0.00;$c4=0.00;$c5=0.00;$c6=0.00;$c7=0.00;$c8=0.00;$c9=0.00;$c10=0.00;$c11=0.00;$c12=0.00;$c13=0.00;$c14=0.00;$c15=0.00;$c16=0.00;$c17=0.00;$c18=0.00;$c19=0.00;$c20=0.00;$c21=0.00;$c22=0.00;$c23=0.00;$c24=0.00;
		$c25=0.00;
		echo "<td><font color=\"black\" size=4><strong>".'Brinquedos'."</strong></font></td>\n";
		echo "</tr>\n"; 
		$sql="select ccodlinha,cdeslinha from tlinha where cdeslinha ilike '%BRINQUEDOS%' order by cdeslinha";
		$exsql=pg_query($conc,$sql);
		while ($row = pg_fetch_assoc($exsql)) {
	        $codlinha=$row['ccodlinha'];
	        $deslinha=$row['cdeslinha'];
	        $com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
			join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
			on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
			cemihistorico <= '$dataf'  and ccodlinha = '$codlinha')";
	        $excom=pg_query($conc,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $resulbc=$rscom['sum'];
		    $excom=pg_query($conl,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $resulbl=$rscom['sum'];
	        $excom=pg_query($conv,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $resulbv=$rscom['sum'];
	        $excom=pg_query($conj,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $resulbj=$rscom['sum'];
		    $com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
			join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
			on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
			cemihistorico <= '$datafa'  and ccodlinha = '$codlinha')";
	        $excom=pg_query($conc,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $aresulbc=$rscom['sum'];
		    $excom=pg_query($conl,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $aresulbl=$rscom['sum'];
	        $excom=pg_query($conv,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $aresulbv=$rscom['sum'];
	        $excom=pg_query($conj,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $aresulbj=$rscom['sum'];		    
		   if ($resulbc > 0 or $resulbl > 0 or $resulbv > 0  or $resulbk > 0 or $aresulbc > 0 or $aresulbl > 0 or $aresulbv > 0  or $aresulbk > 0) {
		   		echo "<td><font color=\"red\" size=4 >".$codlinha."</font></td>\n";
		   		echo "<td><font color=\"red\" size=4 >".$deslinha."</font></td>\n";
		   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c1=$c1+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c2=$c2+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
				$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c3=$c3+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c4=$c4+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (5,6) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c5=$c5+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (5,6) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c6=$c6+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (7,8) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c7=$c7+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (7,8) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c8=$c8+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (11,12) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c9=$c9+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (11,12) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c10=$c10+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (13,14) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c11=$c11+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (13,14) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c12=$c12+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (15,16) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c13=$c13+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (15,16) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c14=$c14+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (17,18) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c15=$c15+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (17,18) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c16=$c16+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conj,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c17=$c17+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conj,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c18=$c18+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    			    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conj,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c19=$c19+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conj,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c20=$c20+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    			    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conl,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c21=$c21+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conl,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c22=$c22+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conl,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c23=$c23+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conl,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c24=$c24+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
	    	    echo "<td><font color=\"black\" size=4><strong>".number_format($l1,2,",",".")."</strong></font></td>\n";
	    	    $c25= $c25+$l1;
	    	    $l1=0.00;		    	
		   		echo "</tr>\n";
		   }		       	        
		}
		$tc1=$tc1+$c1;$tc2=$tc2+$c2;$tc3=$tc3+$c3;$tc4=$tc4+$c4;$tc5=$tc5+$c5;$tc6=$tc6+$c6;$tc7=$tc7+$c7;$tc8=$tc8+$c8;$tc9=$tc9+$c9;$tc10=$tc10+$c10;$tc11=$tc11+$c11;
		$tc12=$tc12+$c12;$tc13=$tc13+$c13;$tc14=$tc14+$c14;$tc15=$tc15+$c15;$tc16=$tc16+$c16;$tc17=$tc17+$c17;$tc18=$tc18+$c18;$tc19=$tc19+$c19;$tc20=$tc20+$c20;
		$tc21=$tc21+$c21;$tc22=$tc23+$c23;$tc24=$tc24+$c24;$tc25=$tc25+$c25;
        echo "<td><font color=\"black\" size=5><strong>".'TT'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=5><strong>".null."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c1,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c2,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c3,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c4,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c5,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c6,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c7,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c8,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c9,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c10,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c11,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c12,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c13,2,",",".")."</strong></font></td>\n";
        echo "<td><font color=\"black\" size=4><strong>".number_format($c14,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c15,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c16,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c17,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c18,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c19,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c20,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c21,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c22,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c23,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c24,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c25,2,",",".")."</strong></font></td>\n";			    
		echo "</tr>\n";	
		$c1=0.00;$c2=0.00;$c3=0.00;$c4=0.00;$c5=0.00;$c6=0.00;$c7=0.00;$c8=0.00;$c9=0.00;$c10=0.00;$c11=0.00;$c12=0.00;$c13=0.00;$c14=0.00;$c15=0.00;$c16=0.00;$c17=0.00;$c18=0.00;$c19=0.00;$c20=0.00;$c21=0.00;$c22=0.00;$c23=0.00;$c24=0.00;
		$c25=0.00;
		echo "<td><font color=\"black\" size=4><strong>".'Uniforme Escolar'."</strong></font></td>\n";
		echo "</tr>\n"; 
		$sql="select ccodlinha,cdeslinha from tlinha where cdeslinha ilike '%UNIFORME%' order by cdeslinha";
		$exsql=pg_query($conc,$sql);
		while ($row = pg_fetch_assoc($exsql)) {
	        $codlinha=$row['ccodlinha'];
	        $deslinha=$row['cdeslinha'];
	        $com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
			join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
			on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
			cemihistorico <= '$dataf'  and ccodlinha = '$codlinha')";
	        $excom=pg_query($conc,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $resulbc=$rscom['sum'];
		    $excom=pg_query($conl,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $resulbl=$rscom['sum'];
	        $excom=pg_query($conv,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $resulbv=$rscom['sum'];
	        $excom=pg_query($conj,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $resulbj=$rscom['sum'];
		    $com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
			join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
			on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
			cemihistorico <= '$datafa'  and ccodlinha = '$codlinha')";
	        $excom=pg_query($conc,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $aresulbc=$rscom['sum'];
		    $excom=pg_query($conl,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $aresulbl=$rscom['sum'];
	        $excom=pg_query($conv,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $aresulbv=$rscom['sum'];
	        $excom=pg_query($conj,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $aresulbj=$rscom['sum'];		    
		   if ($resulbc > 0 or $resulbl > 0 or $resulbv > 0  or $resulbk > 0 or $aresulbc > 0 or $aresulbl > 0 or $aresulbv > 0  or $aresulbk > 0) {
		   		echo "<td><font color=\"red\" size=4 >".$codlinha."</font></td>\n";
		   		echo "<td><font color=\"red\" size=4 >".$deslinha."</font></td>\n";
		   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c1=$c1+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c2=$c2+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
				$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c3=$c3+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c4=$c4+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (5,6) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c5=$c5+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (5,6) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c6=$c6+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (7,8) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c7=$c7+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (7,8) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c8=$c8+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (11,12) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c9=$c9+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (11,12) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c10=$c10+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (13,14) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c11=$c11+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (13,14) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c12=$c12+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (15,16) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c13=$c13+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (15,16) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c14=$c14+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (17,18) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c15=$c15+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (17,18) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c16=$c16+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conj,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c17=$c17+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conj,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c18=$c18+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    			    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conj,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c19=$c19+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conj,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c20=$c20+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    			    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conl,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c21=$c21+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conl,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c22=$c22+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conl,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c23=$c23+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conl,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c24=$c24+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
	    	    echo "<td><font color=\"black\" size=4><strong>".number_format($l1,2,",",".")."</strong></font></td>\n";
	    	    $c25= $c25+$l1;
	    	    $l1=0.00;		    	
		   		echo "</tr>\n";
		   }		       	        
		}
		$tc1=$tc1+$c1;$tc2=$tc2+$c2;$tc3=$tc3+$c3;$tc4=$tc4+$c4;$tc5=$tc5+$c5;$tc6=$tc6+$c6;$tc7=$tc7+$c7;$tc8=$tc8+$c8;$tc9=$tc9+$c9;$tc10=$tc10+$c10;$tc11=$tc11+$c11;
		$tc12=$tc12+$c12;$tc13=$tc13+$c13;$tc14=$tc14+$c14;$tc15=$tc15+$c15;$tc16=$tc16+$c16;$tc17=$tc17+$c17;$tc18=$tc18+$c18;$tc19=$tc19+$c19;$tc20=$tc20+$c20;
		$tc21=$tc21+$c21;$tc22=$tc23+$c23;$tc24=$tc24+$c24;$tc25=$tc25+$c25;
        echo "<td><font color=\"black\" size=5><strong>".'TT'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=5><strong>".null."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c1,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c2,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c3,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c4,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c5,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c6,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c7,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c8,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c9,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c10,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c11,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c12,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c13,2,",",".")."</strong></font></td>\n";
        echo "<td><font color=\"black\" size=4><strong>".number_format($c14,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c15,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c16,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c17,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c18,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c19,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c20,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c21,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c22,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c23,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c24,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c25,2,",",".")."</strong></font></td>\n";			    
		echo "</tr>\n";
		echo "<td><font color=\"black\" size=5><strong>".'TT'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=5><strong>".null."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($tc1,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($tc2,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($tc3,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($tc4,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($tc5,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($tc6,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($tc7,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($tc8,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($tc9,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($tc10,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($tc11,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($tc12,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($tc13,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($tc14,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($tc15,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($tc16,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($tc17,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($tc18,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($tc19,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($tc20,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($tc21,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($tc22,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($tc23,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($tc24,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($tc25,2,",",".")."</strong></font></td>\n";			    
		echo "</tr>\n";		
	} else {
		echo "<td><font color=\"black\" size=4><strong>".$linha."</strong></font></td>\n";
		echo "</tr>\n"; 
		$sql="select ccodlinha,cdeslinha from tlinha where ccodlinha in ($linha) order by cdeslinha";
		$exsql=pg_query($conc,$sql);
		while ($row = pg_fetch_assoc($exsql)) {
	        $codlinha=$row['ccodlinha'];
	        $deslinha=$row['cdeslinha'];
	        $com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
			join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
			on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
			cemihistorico <= '$dataf'  and ccodlinha = '$codlinha')";
	        $excom=pg_query($conc,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $resulbc=$rscom['sum'];
		    $excom=pg_query($conl,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $resulbl=$rscom['sum'];
	        $excom=pg_query($conv,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $resulbv=$rscom['sum'];
	        $excom=pg_query($conj,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $resulbj=$rscom['sum'];
		    $com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
			join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
			on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
			cemihistorico <= '$datafa'  and ccodlinha = '$codlinha')";
	        $excom=pg_query($conc,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $aresulbc=$rscom['sum'];
		    $excom=pg_query($conl,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $aresulbl=$rscom['sum'];
	        $excom=pg_query($conv,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $aresulbv=$rscom['sum'];
	        $excom=pg_query($conj,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $aresulbj=$rscom['sum'];		    
		   if ($resulbc > 0 or $resulbl > 0 or $resulbv > 0  or $resulbk > 0 or $aresulbc > 0 or $aresulbl > 0 or $aresulbv > 0  or $aresulbk > 0) {
		   		echo "<td><font color=\"red\" size=4 >".$codlinha."</font></td>\n";
		   		echo "<td><font color=\"red\" size=4 >".$deslinha."</font></td>\n";
		   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c1=$c1+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c2=$c2+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
				$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c3=$c3+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c4=$c4+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (5,6) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c5=$c5+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (5,6) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c6=$c6+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (7,8) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c7=$c7+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (7,8) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c8=$c8+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (11,12) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c9=$c9+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (11,12) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c10=$c10+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (13,14) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c11=$c11+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (13,14) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c12=$c12+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (15,16) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c13=$c13+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (15,16) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c14=$c14+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (17,18) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c15=$c15+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (17,18) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c16=$c16+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conj,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c17=$c17+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conj,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c18=$c18+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    			    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conj,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c19=$c19+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conj,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c20=$c20+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    			    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conl,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c21=$c21+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conl,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c22=$c22+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	    	$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conl,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c23=$c23+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conl,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c24=$c24+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
	    	    echo "<td><font color=\"black\" size=4><strong>".number_format($l1,2,",",".")."</strong></font></td>\n";
	    	    $c25= $c25+$l1;
	    	    $l1=0.00;		    	
		   		echo "</tr>\n";
		   }		       	        
		}
		$tc1=$c1;$tc2=$c2;$tc3=$c3;$tc4=$c4;$tc5=$c5;$tc6=$c6;$tc7=$c7;$tc8=$c8;$tc9=$c9;$tc10=$c10;$tc11=$c11;$tc12=$c12;$tc13=$c13;$tc14=$c14;$tc15=$c15;
		$tc16=$c16;$tc17=$c17;$tc18=$c18;$tc19=$c19;$tc20=$c20;$tc21=$c21;$tc22=$c22;$tc23=$c23;$tc24=$c24;$tc25=$c25;
        echo "<td><font color=\"black\" size=5><strong>".'TT'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=5><strong>".null."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c1,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c2,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c3,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c4,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c5,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c6,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c7,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c8,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c9,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c10,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c11,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c12,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c13,2,",",".")."</strong></font></td>\n";
        echo "<td><font color=\"black\" size=4><strong>".number_format($c14,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c15,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c16,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c17,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c18,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c19,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c20,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c21,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c22,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c23,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c24,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c25,2,",",".")."</strong></font></td>\n";			    
		echo "</tr>\n";
	}	
	exit;
}
if ($base== 'REVLC') {
	$datain=$_POST['dataiii'];
	if ($datain == null) {
		$datain=$diaing;
	}
	$dataf=$_POST['datafff'];
	if ($dataf == null) {
		$dataf=$diaing;
	}
	$dataina=$_POST['dataiaaa'];
	if ($dataina == null) {
    	$partes = explode("-", $datain);
	    $ano = $partes[0];
	    $mes = $partes[1];
	    $dia = $partes[2];
	    $anoant=$ano-1;
	    $dataina=$anoant.'-'.$mes.'-'.$dia;
	}
	$datafa=$_POST['datafaaa'];
	if ($datafa == null) {
		$partes = explode("-", $dataf);
	    $ano = $partes[0];
	    $mes = $partes[1];
	    $dia = $partes[2];
	    $anoant=$ano-1;
	    $datafa=$anoant.'-'.$mes.'-'.$dia;
	}
	$partes = explode("-", $dataina);
    $ano = $partes[0];
    $mes = $partes[1];
    $dia = $partes[2];	
	echo "<table border='2' width='200%' bgcolor=#F5F6CE >";
	echo "<tr><td><font size=3><strong>Cód.</strong></font></td>"."<td><font color=\"black\" size=3><strong>Linha</strong></font></td>".
	"<td><font color=\"black\" size=3><strong>Rosane</strong></font></td>"."<td><font color=\"black\" size=3><strong>Rosane/$ano</strong></font></td>"
	."<td><font color=\"black\" size=3><strong>Lucélia</strong></font></td>"."<td><font color=\"black\" size=3><strong>Lucélia/$ano</strong></font></td>".
	"<td><font color=\"black\" size=3><strong>Maynara</strong></font></td>"."<td><font color=\"black\" size=3><strong>Maynara/$ano</strong></font></td>".
	"<td><font color=\"black\" size=3><strong>Adrielli</strong></font></td>"."<td><font color=\"black\" size=3><strong>Adrielli/$ano</strong></font></td>"
	."<td><font color=\"black\" size=3><strong>Shop Cdr</strong></font></td>"."<td><font color=\"black\" size=3><strong>Shop Cdr/$ano</strong></font></td>"
	."<td><font color=\"black\" size=3><strong>Nádia</strong></font></td>"."<td><font color=\"black\" size=3><strong>Nádia/$ano</strong></font></td>"
	."<td><font color=\"black\" size=3><strong>Martello</strong></font></td>"."<td><font color=\"black\" size=3><strong>Martello/$ano</strong></font></td>"
	."<td><font color=\"black\" size=3><strong>Shop Vid</strong></font></td>"."<td><font color=\"black\" size=3><strong>Shop Vid/$ano</strong></font></td>"
	."<td><font color=\"black\" size=3><strong>Atacadão Cdr</strong></font></td>"."<td><font color=\"black\" size=3><strong>Atacadão Cdr/$ano</strong></font></td>"
	."<td><font color=\"black\" size=3><strong>Rosani</strong></font></td>"."<td><font color=\"black\" size=3><strong>Rosani/$ano</strong></font></td>"
	."<td><font color=\"black\" size=3><strong>Lages</strong></font></td>"."<td><font color=\"black\" size=3><strong>Lages/$ano</strong></font></td>".
	"<td><font color=\"black\" size=3><strong>Atacadão Lg</strong></font></td>"."<td><font color=\"black\" size=3><strong>Atacadão Lg/$ano</strong></font></td>".
	"<td><font color=\"black\" size=3><strong>TT Venda</strong></font></td>"."</tr>";
	$c1=0.00;$c2=0.00;$c3=0.00;$c4=0.00;$c5=0.00;$c6=0.00;$c7=0.00;$c8=0.00;$c9=0.00;$c10=0.00;$c11=0.00;$c12=0.00;$c13=0.00;$c14=0.00;$c15=0.00;$c16=0.00;$c17=0.00;$c18=0.00;$c19=0.00;$c20=0.00;$c21=0.00;$c22=0.00;$c23=0.00;$c24=0.00;
	$c25=0.00;
	$l1=0.00;
	$linha=$_POST['linhaaa'];
	if ($linha == null or $linha==0) {
		echo "<td><font color=\"black\" size=4><strong>".'Confecções'."</strong></font></td>\n";
		echo "</tr>\n"; 
		$sql="select ccodlinha,cdeslinha from tlinha where cdeslinha ilike '%CONFECÇÕES%' order by cdeslinha";
		$exsql=pg_query($conc,$sql);
		while ($row = pg_fetch_assoc($exsql)) {
	        $codlinha=$row['ccodlinha'];
	        $deslinha=$row['cdeslinha'];
	        $com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
			join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
			on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
			cemihistorico <= '$dataf'  and ccodlinha = '$codlinha')";
	        $excom=pg_query($conc,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $resulbc=$rscom['sum'];
		    $excom=pg_query($conl,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $resulbl=$rscom['sum'];
	        $excom=pg_query($conv,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $resulbv=$rscom['sum'];
	        $excom=pg_query($conj,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $resulbj=$rscom['sum'];
		    $com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
			join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
			on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
			cemihistorico <= '$datafa'  and ccodlinha = '$codlinha')";
	        $excom=pg_query($conc,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $aresulbc=$rscom['sum'];
		    $excom=pg_query($conl,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $aresulbl=$rscom['sum'];
	        $excom=pg_query($conv,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $aresulbv=$rscom['sum'];
	        $excom=pg_query($conj,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $aresulbj=$rscom['sum'];		    
		    if ($resulbc > 0 or $resulbl > 0 or $resulbv > 0  or $resulbj > 0 or $aresulbc > 0 or $aresulbl > 0 or $aresulbv > 0  or $aresulbj > 0) {
		   		echo "<td><font color=\"red\" size=4 >".$codlinha."</font></td>\n";
		   		echo "<td><font color=\"red\" size=4 >".$deslinha."</font></td>\n";
		   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )"; 		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c1=$c1+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="(select (sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto))) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c2=$c2+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
				$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c3=$c3+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c4=$c4+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (5,6) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c5=$c5+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (5,6) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c6=$c6+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (7,8) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c7=$c7+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (7,8) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c8=$c8+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (11,12) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c9=$c9+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (11,12) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c10=$c10+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (13,14) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c11=$c11+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto))) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (13,14) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c12=$c12+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (15,16) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c13=$c13+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (15,16) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c14=$c14+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum(((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (17,18) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c15=$c15+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (17,18) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c16=$c16+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conj,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c17=$c17+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conj,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c18=$c18+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conj,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c19=$c19+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conj,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c20=$c20+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conl,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c21=$c21+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conl,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c22=$c22+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conl,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c23=$c23+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conl,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c24=$c24+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
	    	    echo "<td><font color=\"black\" size=4><strong>".number_format($l1,2,",",".")."</strong></font></td>\n";
	    	    $c25= $c25+$l1;
	    	    $l1=0.00;		    	
		   		echo "</tr>\n";
		   }		       	        
		}
		$tc1=$c1;$tc2=$c2;$tc3=$c3;$tc4=$c4;$tc5=$c5;$tc6=$c6;$tc7=$c7;$tc8=$c8;$tc9=$c9;$tc10=$c10;$tc11=$c11;$tc12=$c12;$tc13=$c13;$tc14=$c14;$tc15=$c15;
		$tc16=$c16;$tc17=$c17;$tc18=$c18;$tc19=$c19;$tc20=$c20;$tc21=$c21;$tc22=$c22;$tc23=$c23;$tc24=$c24;$tc25=$c25;
        echo "<td><font color=\"black\" size=5><strong>".'TT'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=5><strong>".null."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c1,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c2,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c3,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c4,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c5,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c6,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c7,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c8,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c9,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c10,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c11,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c12,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c13,2,",",".")."</strong></font></td>\n";
        echo "<td><font color=\"black\" size=4><strong>".number_format($c14,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c15,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c16,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c17,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c18,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c19,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c20,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c21,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c22,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c23,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c24,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c25,2,",",".")."</strong></font></td>\n";			    
		echo "</tr>\n";
		$c1=0.00;$c2=0.00;$c3=0.00;$c4=0.00;$c5=0.00;$c6=0.00;$c7=0.00;$c8=0.00;$c9=0.00;$c10=0.00;$c11=0.00;$c12=0.00;$c13=0.00;$c14=0.00;$c15=0.00;$c16=0.00;$c17=0.00;$c18=0.00;$c19=0.00;$c20=0.00;$c21=0.00;$c22=0.00;$c23=0.00;$c24=0.00;
		$c25=0.00;
		echo "<td><font color=\"black\" size=4><strong>".'Calçados'."</strong></font></td>\n";
		echo "</tr>\n"; 
		$sql="select ccodlinha,cdeslinha from tlinha where cdeslinha ilike '%CALÇADOS%' order by cdeslinha";
		$exsql=pg_query($conc,$sql);
		while ($row = pg_fetch_assoc($exsql)) {
	        $codlinha=$row['ccodlinha'];
	        $deslinha=$row['cdeslinha'];
	        $com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
			join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
			on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
			cemihistorico <= '$dataf'  and ccodlinha = '$codlinha')";
	        $excom=pg_query($conc,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $resulbc=$rscom['sum'];
		    $excom=pg_query($conl,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $resulbl=$rscom['sum'];
	        $excom=pg_query($conv,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $resulbv=$rscom['sum'];
	        $excom=pg_query($conj,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $resulbj=$rscom['sum'];
		    $com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
			join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
			on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
			cemihistorico <= '$datafa'  and ccodlinha = '$codlinha')";
	        $excom=pg_query($conc,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $aresulbc=$rscom['sum'];
		    $excom=pg_query($conl,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $aresulbl=$rscom['sum'];
	        $excom=pg_query($conv,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $aresulbv=$rscom['sum'];
	        $excom=pg_query($conj,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $aresulbj=$rscom['sum'];		    
		    if ($resulbc > 0 or $resulbl > 0 or $resulbv > 0  or $resulbj > 0 or $aresulbc > 0 or $aresulbl > 0 or $aresulbv > 0  or $aresulbj > 0) {
		   		echo "<td><font color=\"red\" size=4 >".$codlinha."</font></td>\n";
		   		echo "<td><font color=\"red\" size=4 >".$deslinha."</font></td>\n";
		   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c1=$c1+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c2=$c2+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
				$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto))) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c3=$c3+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c4=$c4+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (5,6) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c5=$c5+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (5,6) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c6=$c6+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (7,8) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c7=$c7+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (7,8) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c8=$c8+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (11,12) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c9=$c9+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (11,12) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c10=$c10+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (13,14) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c11=$c11+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (13,14) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c12=$c12+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (15,16) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c13=$c13+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (15,16) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c14=$c14+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (17,18) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c15=$c15+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (17,18) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c16=$c16+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conj,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c17=$c17+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conj,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c18=$c18+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conj,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c19=$c19+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conj,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c20=$c20+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conl,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c21=$c21+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conl,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c22=$c22+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conl,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c23=$c23+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conl,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c24=$c24+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
	    	    echo "<td><font color=\"black\" size=4><strong>".number_format($l1,2,",",".")."</strong></font></td>\n";
	    	    $c25= $c25+$l1;
	    	    $l1=0.00;		    	
		   		echo "</tr>\n";
		   }		       	        
		}
		$tc1=$tc1+$c1;$tc2=$tc2+$c2;$tc3=$tc3+$c3;$tc4=$tc4+$c4;$tc5=$tc5+$c5;$tc6=$tc6+$c6;$tc7=$tc7+$c7;$tc8=$tc8+$c8;$tc9=$tc9+$c9;$tc10=$tc10+$c10;$tc11=$tc11+$c11;
		$tc12=$tc12+$c12;$tc13=$tc13+$c13;$tc14=$tc14+$c14;$tc15=$tc15+$c15;$tc16=$tc16+$c16;$tc17=$tc17+$c17;$tc18=$tc18+$c18;$tc19=$tc19+$c19;$tc20=$tc20+$c20;
		$tc21=$tc21+$c21;$tc22=$tc23+$c23;$tc24=$tc24+$c24;$tc25=$tc25+$c25;
        echo "<td><font color=\"black\" size=5><strong>".'TT'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=5><strong>".null."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c1,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c2,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c3,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c4,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c5,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c6,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c7,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c8,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c9,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c10,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c11,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c12,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c13,2,",",".")."</strong></font></td>\n";
        echo "<td><font color=\"black\" size=4><strong>".number_format($c14,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c15,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c16,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c17,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c18,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c19,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c20,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c21,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c22,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c23,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c24,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c25,2,",",".")."</strong></font></td>\n";			    
		echo "</tr>\n";
		$c1=0.00;$c2=0.00;$c3=0.00;$c4=0.00;$c5=0.00;$c6=0.00;$c7=0.00;$c8=0.00;$c9=0.00;$c10=0.00;$c11=0.00;$c12=0.00;$c13=0.00;$c14=0.00;$c15=0.00;$c16=0.00;$c17=0.00;$c18=0.00;$c19=0.00;$c20=0.00;$c21=0.00;$c22=0.00;$c23=0.00;$c24=0.00;
		$c25=0.00;
		echo "<td><font color=\"black\" size=4><strong>".'Esportes'."</strong></font></td>\n";
		echo "</tr>\n"; 
		$sql="select ccodlinha,cdeslinha from tlinha where cdeslinha ilike '%ESPORTES%' order by cdeslinha";
		$exsql=pg_query($conc,$sql);
		while ($row = pg_fetch_assoc($exsql)) {
	        $codlinha=$row['ccodlinha'];
	        $deslinha=$row['cdeslinha'];
	        $com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
			join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
			on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
			cemihistorico <= '$dataf'  and ccodlinha = '$codlinha')";
	        $excom=pg_query($conc,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $resulbc=$rscom['sum'];
		    $excom=pg_query($conl,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $resulbl=$rscom['sum'];
	        $excom=pg_query($conv,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $resulbv=$rscom['sum'];
	        $excom=pg_query($conj,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $resulbj=$rscom['sum'];
		    $com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
			join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
			on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
			cemihistorico <= '$datafa'  and ccodlinha = '$codlinha')";
	        $excom=pg_query($conc,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $aresulbc=$rscom['sum'];
		    $excom=pg_query($conl,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $aresulbl=$rscom['sum'];
	        $excom=pg_query($conv,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $aresulbv=$rscom['sum'];
	        $excom=pg_query($conj,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $aresulbj=$rscom['sum'];		    
		    if ($resulbc > 0 or $resulbl > 0 or $resulbv > 0  or $resulbj > 0 or $aresulbc > 0 or $aresulbl > 0 or $aresulbv > 0  or $aresulbj > 0) {
		   		echo "<td><font color=\"red\" size=4 >".$codlinha."</font></td>\n";
		   		echo "<td><font color=\"red\" size=4 >".$deslinha."</font></td>\n";
		   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c1=$c1+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c2=$c2+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
				$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c3=$c3+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c4=$c4+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (5,6) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c5=$c5+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (5,6) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c6=$c6+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (7,8) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c7=$c7+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (7,8) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c8=$c8+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (11,12) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c9=$c9+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (11,12) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c10=$c10+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (13,14) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c11=$c11+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (13,14) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c12=$c12+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (15,16) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c13=$c13+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (15,16) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c14=$c14+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (17,18) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c15=$c15+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (17,18) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c16=$c16+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conj,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c17=$c17+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conj,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c18=$c18+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conj,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c19=$c19+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conj,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c20=$c20+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conl,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c21=$c21+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conl,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c22=$c22+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conl,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c23=$c23+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conl,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c24=$c24+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
	    	    echo "<td><font color=\"black\" size=4><strong>".number_format($l1,2,",",".")."</strong></font></td>\n";
	    	    $c25= $c25+$l1;
	    	    $l1=0.00;		    	
		   		echo "</tr>\n";
		   }		       	        
		}
		$tc1=$tc1+$c1;$tc2=$tc2+$c2;$tc3=$tc3+$c3;$tc4=$tc4+$c4;$tc5=$tc5+$c5;$tc6=$tc6+$c6;$tc7=$tc7+$c7;$tc8=$tc8+$c8;$tc9=$tc9+$c9;$tc10=$tc10+$c10;$tc11=$tc11+$c11;
		$tc12=$tc12+$c12;$tc13=$tc13+$c13;$tc14=$tc14+$c14;$tc15=$tc15+$c15;$tc16=$tc16+$c16;$tc17=$tc17+$c17;$tc18=$tc18+$c18;$tc19=$tc19+$c19;$tc20=$tc20+$c20;
		$tc21=$tc21+$c21;$tc22=$tc23+$c23;$tc24=$tc24+$c24;$tc25=$tc25+$c25;
        echo "<td><font color=\"black\" size=5><strong>".'TT'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=5><strong>".null."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c1,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c2,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c3,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c4,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c5,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c6,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c7,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c8,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c9,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c10,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c11,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c12,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c13,2,",",".")."</strong></font></td>\n";
        echo "<td><font color=\"black\" size=4><strong>".number_format($c14,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c15,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c16,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c17,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c18,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c19,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c20,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c21,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c22,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c23,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c24,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c25,2,",",".")."</strong></font></td>\n";			    
		echo "</tr>\n";
		$c1=0.00;$c2=0.00;$c3=0.00;$c4=0.00;$c5=0.00;$c6=0.00;$c7=0.00;$c8=0.00;$c9=0.00;$c10=0.00;$c11=0.00;$c12=0.00;$c13=0.00;$c14=0.00;$c15=0.00;$c16=0.00;$c17=0.00;$c18=0.00;$c19=0.00;$c20=0.00;$c21=0.00;$c22=0.00;$c23=0.00;$c24=0.00;
		$c25=0.00;
		echo "<td><font color=\"black\" size=4><strong>".'Brinquedos'."</strong></font></td>\n";
		echo "</tr>\n"; 		
		$sql="select ccodlinha,cdeslinha from tlinha where cdeslinha ilike '%BRINQUEDOS%' order by cdeslinha";		
		$exsql=pg_query($conc,$sql);
		while ($row = pg_fetch_assoc($exsql)) {
	        $codlinha=$row['ccodlinha'];
	        $deslinha=$row['cdeslinha'];
	        $com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
			join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
			on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
			cemihistorico <= '$dataf'  and ccodlinha = '$codlinha')";
	        $excom=pg_query($conc,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $resulbc=$rscom['sum'];
		    $excom=pg_query($conl,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $resulbl=$rscom['sum'];
	        $excom=pg_query($conv,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $resulbv=$rscom['sum'];
	        $excom=pg_query($conj,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $resulbj=$rscom['sum'];
		    $com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
			join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
			on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
			cemihistorico <= '$datafa'  and ccodlinha = '$codlinha')";
	        $excom=pg_query($conc,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $aresulbc=$rscom['sum'];
		    $excom=pg_query($conl,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $aresulbl=$rscom['sum'];
	        $excom=pg_query($conv,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $aresulbv=$rscom['sum'];
	        $excom=pg_query($conj,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $aresulbj=$rscom['sum'];		    
		    if ($resulbc > 0 or $resulbl > 0 or $resulbv > 0  or $resulbj > 0 or $aresulbc > 0 or $aresulbl > 0 or $aresulbv > 0  or $aresulbj > 0) {
		   		echo "<td><font color=\"red\" size=4 >".$codlinha."</font></td>\n";
		   		echo "<td><font color=\"red\" size=4 >".$deslinha."</font></td>\n";
		   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conc,$com); 	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c1=$c1+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c2=$c2+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
				$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c3=$c3+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c4=$c4+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (5,6) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c5=$c5+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (5,6) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c6=$c6+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (7,8) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c7=$c7+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (7,8) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c8=$c8+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (11,12) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c9=$c9+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (11,12) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c10=$c10+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (13,14) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c11=$c11+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (13,14) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c12=$c12+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (15,16) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c13=$c13+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (15,16) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c14=$c14+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (17,18) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c15=$c15+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (17,18) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c16=$c16+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conj,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c17=$c17+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conj,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c18=$c18+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conj,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c19=$c19+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conj,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c20=$c20+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conl,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c21=$c21+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conl,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c22=$c22+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conl,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c23=$c23+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conl,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c24=$c24+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
	    	    echo "<td><font color=\"black\" size=4><strong>".number_format($l1,2,",",".")."</strong></font></td>\n";
	    	    $c25= $c25+$l1;
	    	    $l1=0.00;		    	
		   		echo "</tr>\n";
		   }		       	        
		}
		$tc1=$tc1+$c1;$tc2=$tc2+$c2;$tc3=$tc3+$c3;$tc4=$tc4+$c4;$tc5=$tc5+$c5;$tc6=$tc6+$c6;$tc7=$tc7+$c7;$tc8=$tc8+$c8;$tc9=$tc9+$c9;$tc10=$tc10+$c10;$tc11=$tc11+$c11;
		$tc12=$tc12+$c12;$tc13=$tc13+$c13;$tc14=$tc14+$c14;$tc15=$tc15+$c15;$tc16=$tc16+$c16;$tc17=$tc17+$c17;$tc18=$tc18+$c18;$tc19=$tc19+$c19;$tc20=$tc20+$c20;
		$tc21=$tc21+$c21;$tc22=$tc23+$c23;$tc24=$tc24+$c24;$tc25=$tc25+$c25;
        echo "<td><font color=\"black\" size=5><strong>".'TT'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=5><strong>".null."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c1,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c2,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c3,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c4,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c5,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c6,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c7,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c8,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c9,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c10,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c11,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c12,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c13,2,",",".")."</strong></font></td>\n";
        echo "<td><font color=\"black\" size=4><strong>".number_format($c14,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c15,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c16,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c17,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c18,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c19,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c20,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c21,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c22,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c23,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c24,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c25,2,",",".")."</strong></font></td>\n";			    
		echo "</tr>\n";	
		$c1=0.00;$c2=0.00;$c3=0.00;$c4=0.00;$c5=0.00;$c6=0.00;$c7=0.00;$c8=0.00;$c9=0.00;$c10=0.00;$c11=0.00;$c12=0.00;$c13=0.00;$c14=0.00;$c15=0.00;$c16=0.00;$c17=0.00;$c18=0.00;$c19=0.00;$c20=0.00;$c21=0.00;$c22=0.00;$c23=0.00;$c24=0.00;
		$c25=0.00;
		echo "<td><font color=\"black\" size=4><strong>".'Uniforme Escolar'."</strong></font></td>\n";
		echo "</tr>\n"; 
		
		$sql="select ccodlinha,cdeslinha from tlinha where cdeslinha ilike '%UNIFORME%' order by cdeslinha";
		$exsql=pg_query($conc,$sql);
		while ($row = pg_fetch_assoc($exsql)) {
	        $codlinha=$row['ccodlinha'];
	        $deslinha=$row['cdeslinha'];
	        $com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
			join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
			on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
			cemihistorico <= '$dataf'  and ccodlinha = '$codlinha')";
	        $excom=pg_query($conc,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $resulbc=$rscom['sum'];
		    $excom=pg_query($conl,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $resulbl=$rscom['sum'];
	        $excom=pg_query($conv,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $resulbv=$rscom['sum'];
	        $excom=pg_query($conj,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $resulbj=$rscom['sum'];
		    $com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
			join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
			on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
			cemihistorico <= '$datafa'  and ccodlinha = '$codlinha')";
	        $excom=pg_query($conc,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $aresulbc=$rscom['sum'];
		    $excom=pg_query($conl,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $aresulbl=$rscom['sum'];
	        $excom=pg_query($conv,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $aresulbv=$rscom['sum'];
	        $excom=pg_query($conj,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $aresulbj=$rscom['sum'];		    
		    if ($resulbc > 0 or $resulbl > 0 or $resulbv > 0  or $resulbj > 0 or $aresulbc > 0 or $aresulbl > 0 or $aresulbv > 0  or $aresulbj > 0) {
		   		echo "<td><font color=\"red\" size=4 >".$codlinha."</font></td>\n";
		   		echo "<td><font color=\"red\" size=4 >".$deslinha."</font></td>\n";
		   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c1=$c1+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c2=$c2+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
				$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c3=$c3+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c4=$c4+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (5,6) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c5=$c5+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (5,6) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c6=$c6+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (7,8) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c7=$c7+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto))from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (7,8) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c8=$c8+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (11,12) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c9=$c9+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (11,12) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c10=$c10+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (13,14) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c11=$c11+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (13,14) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c12=$c12+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (15,16) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c13=$c13+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (15,16) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c14=$c14+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (17,18) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c15=$c15+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (17,18) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c16=$c16+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conj,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c17=$c17+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conj,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c18=$c18+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conj,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c19=$c19+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conj,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c20=$c20+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conl,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c21=$c21+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conl,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c22=$c22+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conl,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c23=$c23+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conl,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c24=$c24+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
	    	    echo "<td><font color=\"black\" size=4><strong>".number_format($l1,2,",",".")."</strong></font></td>\n";
	    	    $c25= $c25+$l1;
	    	    $l1=0.00;		    	
		   		echo "</tr>\n";
		   }		       	        
		}
		$tc1=$tc1+$c1;$tc2=$tc2+$c2;$tc3=$tc3+$c3;$tc4=$tc4+$c4;$tc5=$tc5+$c5;$tc6=$tc6+$c6;$tc7=$tc7+$c7;$tc8=$tc8+$c8;$tc9=$tc9+$c9;$tc10=$tc10+$c10;$tc11=$tc11+$c11;
		$tc12=$tc12+$c12;$tc13=$tc13+$c13;$tc14=$tc14+$c14;$tc15=$tc15+$c15;$tc16=$tc16+$c16;$tc17=$tc17+$c17;$tc18=$tc18+$c18;$tc19=$tc19+$c19;$tc20=$tc20+$c20;
		$tc21=$tc21+$c21;$tc22=$tc23+$c23;$tc24=$tc24+$c24;$tc25=$tc25+$c25;
        echo "<td><font color=\"black\" size=5><strong>".'TT'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=5><strong>".null."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c1,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c2,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c3,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c4,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c5,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c6,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c7,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c8,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c9,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c10,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c11,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c12,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c13,2,",",".")."</strong></font></td>\n";
        echo "<td><font color=\"black\" size=4><strong>".number_format($c14,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c15,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c16,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c17,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c18,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c19,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c20,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c21,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c22,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c23,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c24,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c25,2,",",".")."</strong></font></td>\n";			    
		echo "</tr>\n";
		echo "<td><font color=\"black\" size=5><strong>".'TT'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=5><strong>".null."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($tc1,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($tc2,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($tc3,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($tc4,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($tc5,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($tc6,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($tc7,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($tc8,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($tc9,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($tc10,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($tc11,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($tc12,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($tc13,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($tc14,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($tc15,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($tc16,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($tc17,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($tc18,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($tc19,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($tc20,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($tc21,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($tc22,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($tc23,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($tc24,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($tc25,2,",",".")."</strong></font></td>\n";			    
		echo "</tr>\n";		
	} else {
		echo "<td><font color=\"black\" size=4><strong>".$linha."</strong></font></td>\n";
		echo "</tr>\n"; 
		$sql="select ccodlinha,cdeslinha from tlinha where ccodlinha in ($linha) order by cdeslinha";
		$exsql=pg_query($conc,$sql);
		while ($row = pg_fetch_assoc($exsql)) {
	        $codlinha=$row['ccodlinha'];
	        $deslinha=$row['cdeslinha'];
	        $com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
			join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
			on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
			cemihistorico <= '$dataf'  and ccodlinha = '$codlinha')";
	        $excom=pg_query($conc,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $resulbc=$rscom['sum'];
		    $excom=pg_query($conl,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $resulbl=$rscom['sum'];
	        $excom=pg_query($conv,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $resulbv=$rscom['sum'];
	        $excom=pg_query($conj,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $resulbj=$rscom['sum'];
		    $com="select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
			join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
			on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
			cemihistorico <= '$datafa'  and ccodlinha = '$codlinha')";
	        $excom=pg_query($conc,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $aresulbc=$rscom['sum'];
		    $excom=pg_query($conl,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $aresulbl=$rscom['sum'];
	        $excom=pg_query($conv,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $aresulbv=$rscom['sum'];
	        $excom=pg_query($conj,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $aresulbj=$rscom['sum'];		    
		    if ($resulbc > 0 or $resulbl > 0 or $resulbv > 0  or $resulbj > 0 or $aresulbc > 0 or $aresulbl > 0 or $aresulbv > 0  or $aresulbj > 0) {
		   		echo "<td><font color=\"red\" size=4 >".$codlinha."</font></td>\n";
		   		echo "<td><font color=\"red\" size=4 >".$deslinha."</font></td>\n";
		   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c1=$c1+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c2=$c2+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
				$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c3=$c3+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c4=$c4+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (5,6) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c5=$c5+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (5,6) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c6=$c6+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (7,8) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c7=$c7+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (7,8) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c8=$c8+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (11,12) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c9=$c9+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (11,12) )";	   		
		   		$excom=pg_query($conc,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c10=$c10+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (13,14) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c11=$c11+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (13,14) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c12=$c12+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (15,16) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c13=$c13+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (15,16) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c14=$c14+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (17,18) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c15=$c15+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (17,18) )";	   		
		   		$excom=pg_query($conv,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c16=$c16+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
		    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conj,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c17=$c17+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conj,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c18=$c18+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conj,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c19=$c19+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conj,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c20=$c20+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conl,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c21=$c21+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (1,2) )";	   		
		   		$excom=pg_query($conl,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c22=$c22+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	    	$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$datain' and 
				cemihistorico <= '$dataf'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conl,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c23=$c23+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	   		$com="select (select sum((csaihisotorico*cpcuproduto)-(centhistorico*cpcuproduto)) from ahistorico inner join aprodutos on cprohistorico = ccodproduto 
				join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha 
				on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dataina' and 
				cemihistorico <= '$datafa'  and ccodlinha = '$codlinha' and cemphistorico in (3,4) )";	   		
		   		$excom=pg_query($conl,$com);	     
			    $rscom=pg_fetch_array($excom);
			    $estoque=$rscom['sum'];
			    if ($estoque == null or $estoque < 0){
			    	$estoque = 0.00;
		    	}
		    	$c24=$c24+$estoque;
		    	$l1=$l1+$estoque;
		    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
	    	    echo "<td><font color=\"black\" size=4><strong>".number_format($l1,2,",",".")."</strong></font></td>\n";
	    	    $c25= $c25+$l1;
	    	    $l1=0.00;		    	
		   		echo "</tr>\n";
		   }		       	        
		}
		$tc1=$c1;$tc2=$c2;$tc3=$c3;$tc4=$c4;$tc5=$c5;$tc6=$c6;$tc7=$c7;$tc8=$c8;$tc9=$c9;$tc10=$c10;$tc11=$c11;$tc12=$c12;$tc13=$c13;$tc14=$c14;$tc15=$c15;
		$tc16=$c16;$tc17=$c17;$tc18=$c18;$tc19=$c19;$tc20=$c20;$tc21=$c21;$tc22=$c22;$tc23=$c23;$tc24=$c24;$tc25=$c25;
        echo "<td><font color=\"black\" size=5><strong>".'TT'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=5><strong>".null."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c1,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c2,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c3,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c4,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c5,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c6,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c7,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c8,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c9,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c10,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c11,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c12,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c13,2,",",".")."</strong></font></td>\n";
        echo "<td><font color=\"black\" size=4><strong>".number_format($c14,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c15,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c16,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c17,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c18,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c19,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c20,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c21,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c22,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c23,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c24,2,",",".")."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".number_format($c25,2,",",".")."</strong></font></td>\n";			    
		echo "</tr>\n";
	}	
	exit;
}



if ($base == 'REG'){
	echo "<table border='2' width='100%' bgcolor=#F5F6CE >";
	echo "<tr><td><font size=3><strong>Cód.</strong></font></td>"."<td><font color=\"black\" size=3><strong>Grupo</strong></font></td>".
	"<td><font color=\"black\" size=3><strong>Rosane</strong></font></td>"."<td><font color=\"black\" size=3><strong>Lucélia</strong></font></td>".
	"<td><font color=\"black\" size=3><strong>Maynara</strong></font></td>"."<td><font color=\"black\" size=3><strong>Adrielli</strong></font></td>"
	."<td><font color=\"black\" size=3><strong>Shop Cdr</strong></font></td>"."<td><font color=\"black\" size=3><strong>Nádia</strong></font></td>"
	."<td><font color=\"black\" size=3><strong>Martello</strong></font></td>"."<td><font color=\"black\" size=3><strong>Shop Vid</strong></font></td>"
	."<td><font color=\"black\" size=3><strong>Atacadão Cdr</strong></font></td>"."<td><font color=\"black\" size=3><strong>Rosani</strong></font></td>"
	."<td><font color=\"black\" size=3><strong>Lages</strong></font></td>"."<td><font color=\"black\" size=3><strong>Atacadão Lg</strong></font></td>".
	"<td><font color=\"black\" size=3><strong>TT Grupo</strong></font></td>"."</tr>";
	$c1=0.00;$c2=0.00;$c3=0.00;$c4=0.00;$c5=0.00;$c6=0.00;$c7=0.00;$c8=0.00;$c9=0.00;$c10=0.00;$c11=0.00;$c12=0.00;$c13=0.00;
	$l1=0.00;
	$linha = $_POST['linha'];
	$filtrolinha=$linha;
	if ($linha <> null and $linha >0 ) {
		$linha= "and clinproduto in ($linha)";
	} else {
		$linha = null;
	}
	$marca = $_POST['marca'];
	$filtromarca=$marca;
	if ($marca <> null and $marca >0 ) {
		$marca= "and cmarproduto in  ($marca)";
	} else {
		$marca = null;
	}
	$depart = $_POST['depart'];
	$filtodepart=$depart;
	if ($depart <> null and $depart >0 ) {
		$depart= "and cdepproduto in  ($depart)";
	} else {
		$depart = null;
	}
	$sql="select ccodgrupo,cdesgrupo from tgrupo 
	inner join aprodutos on ccodgrupo=cgruporduto
	where ccodgrupo > 0 $linha $marca $depart
	group by ccodgrupo,cdesgrupo
	order by cdesgrupo";
 	$exsql=pg_query($conc,$sql);
	while ($row = pg_fetch_assoc($exsql)) {
        $codgrupo=$row['ccodgrupo'];
        $desgrupo=$row['cdesgrupo'];
        $com="select sum (centhistorico-csaihisotorico) from ahistorico inner join
        aprodutos on cprohistorico = ccodproduto
        where cgruporduto = $codgrupo $linha $marca $depart  ";
        $excom=pg_query($conc,$com);	     
	    $rscom=pg_fetch_array($excom);
	    $resulbc=$rscom['sum'];
	    $excom=pg_query($conl,$com);	     
	    $rscom=pg_fetch_array($excom);
	    $resulbl=$rscom['sum'];
        $excom=pg_query($conv,$com);	     
	    $rscom=pg_fetch_array($excom);
	    $resulbv=$rscom['sum'];
        $excom=pg_query($conj,$com);	     
	    $rscom=pg_fetch_array($excom);
	    $resulbj=$rscom['sum'];
	   if ($resulbc > 0 or $resulbl > 0 or $resulbv > 0  or $resulbk > 0) {
	   		echo "<td><font color=\"red\" size=4 >".$codgrupo."</font></td>\n";
	   		echo "<td><font color=\"red\" size=4 >".$desgrupo."</font></td>\n";
		   	$com="select sum (centhistorico-csaihisotorico) from ahistorico inner join
	        aprodutos on cprohistorico = ccodproduto 
	        where  cgruporduto = $codgrupo $linha $marca $depart and cemphistorico in (1,2)   ";
		   	$excom=pg_query($conc,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $estoque=$rscom['sum'];
		    if ($estoque == null or $estoque < 0){
		    	$estoque = 0.00;
	    	}
	    	$c1=$c1+$estoque;
	    	$l1=$l1+$estoque;
	    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
	    	$com="select sum (centhistorico-csaihisotorico) from ahistorico inner join
	        aprodutos on cprohistorico = ccodproduto
	        where  cgruporduto = $codgrupo $linha $marca $depart and cemphistorico in (3,4) ";
		   	$excom=pg_query($conc,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $estoque=$rscom['sum'];
		    if ($estoque == null or $estoque < 0){
		    	$estoque = 0.00;
	    	}
	    	$c2=$c2+$estoque;
	    	$l1=$l1+$estoque;
	    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
	    	$com="select sum (centhistorico-csaihisotorico) from ahistorico inner join
	        aprodutos on cprohistorico = ccodproduto
	        where  cgruporduto = $codgrupo $linha $marca $depart and cemphistorico in (5,6 )";
		   	$excom=pg_query($conc,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $estoque=$rscom['sum'];
		    if ($estoque == null or $estoque < 0){
		    	$estoque = 0.00;
	    	}
	    	$c3=$c3+$estoque;
	    	$l1=$l1+$estoque;
	    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
	    	$com="select sum (centhistorico-csaihisotorico) from ahistorico inner join
	        aprodutos on cprohistorico = ccodproduto
	        where  cgruporduto = $codgrupo $linha $marca $depart and cemphistorico in (7,8)";
		   	$excom=pg_query($conc,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $estoque=$rscom['sum'];
		    if ($estoque == null or $estoque < 0){
		    	$estoque = 0.00;
	    	}
	    	$c4=$c4+$estoque;
	    	$l1=$l1+$estoque;
	    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
	    	$com="select sum (centhistorico-csaihisotorico) from ahistorico inner join
	        aprodutos on cprohistorico = ccodproduto
	        where  cgruporduto = $codgrupo $linha $marca $depart and cemphistorico in (11,12)";
		   	$excom=pg_query($conc,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $estoque=$rscom['sum'];
		    if ($estoque == null or $estoque < 0){
		    	$estoque = 0.00;
	    	}
	    	$c5=$c5+$estoque;
	    	$l1=$l1+$estoque;
	    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
	    	$com="select sum (centhistorico-csaihisotorico) from ahistorico inner join
	        aprodutos on cprohistorico = ccodproduto
	        where  cgruporduto = $codgrupo $linha $marca $depart and cemphistorico in (13,14)";
		   	$excom=pg_query($conv,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $estoque=$rscom['sum'];
		    if ($estoque == null or $estoque < 0){
		    	$estoque = 0.00;
	    	}
	    	$c6=$c6+$estoque;
	    	$l1=$l1+$estoque;
	    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
        	$com="select sum (centhistorico-csaihisotorico) from ahistorico inner join
	        aprodutos on cprohistorico = ccodproduto
	        where  cgruporduto = $codgrupo $linha $marca $depart and cemphistorico in (15,16)";
		   	$excom=pg_query($conv,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $estoque=$rscom['sum'];
		    if ($estoque == null or $estoque < 0){
		    	$estoque = 0.00;
	    	}
	    	$c7=$c7+$estoque;
	    	$l1=$l1+$estoque;
	    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
        	$com="select sum (centhistorico-csaihisotorico) from ahistorico inner join
	        aprodutos on cprohistorico = ccodproduto
	        where  cgruporduto = $codgrupo $linha $marca $depart and cemphistorico in (17,18)";
		   	$excom=pg_query($conv,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $estoque=$rscom['sum'];
		    if ($estoque == null or $estoque < 0){
		    	$estoque = 0.00;
	    	}
	    	$c8=$c8+$estoque;
	    	$l1=$l1+$estoque;
	    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
        	$com="select sum (centhistorico-csaihisotorico) from ahistorico inner join
	        aprodutos on cprohistorico = ccodproduto
	        where  cgruporduto = $codgrupo $linha $marca $depart and cemphistorico in (1,2)";
		   	$excom=pg_query($conj,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $estoque=$rscom['sum'];
		    if ($estoque == null or $estoque < 0){
		    	$estoque = 0.00;
	    	}
	    	$c9=$c9+$estoque;
	    	$l1=$l1+$estoque;
	    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
            $com="select sum (centhistorico-csaihisotorico) from ahistorico inner join
	        aprodutos on cprohistorico = ccodproduto
	        where  cgruporduto = $codgrupo $linha $marca $depart and cemphistorico in (3,4)";
		   	$excom=pg_query($conj,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $estoque=$rscom['sum'];
		    if ($estoque == null or $estoque < 0){
		    	$estoque = 0.00;
	    	}
	    	$c10=$c10+$estoque;
	    	$l1=$l1+$estoque;
	    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
            $com="select sum (centhistorico-csaihisotorico) from ahistorico inner join
	        aprodutos on cprohistorico = ccodproduto
	        where  cgruporduto = $codgrupo $linha $marca $depart and cemphistorico in (1,2)";
		   	$excom=pg_query($conl,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $estoque=$rscom['sum'];
		    if ($estoque == null or $estoque < 0){
		    	$estoque = 0.00;
	    	}
	    	$c11=$c11+$estoque;
	    	$l1=$l1+$estoque;
	    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
            $com="select sum (centhistorico-csaihisotorico) from ahistorico inner join
	        aprodutos on cprohistorico = ccodproduto
	        where  cgruporduto = $codgrupo $linha $marca $depart and cemphistorico in (3,4)";
		   	$excom=pg_query($conl,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $estoque=$rscom['sum'];
		    if ($estoque == null or $estoque < 0){
		    	$estoque = 0.00;
	    	}
	    	$c12=$c12+$estoque;
	    	$l1=$l1+$estoque;
	    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	    echo "<td><font color=\"black\" size=4><strong>".number_format($l1,2,",",".")."</strong></font></td>\n";
    	    $c13=$c13+$l1;
    	    $l1=0.00;
	    	echo "</tr>\n"; 	
	    	
	    	    	
	   }
	       
    }
    echo "<td><font color=\"black\" size=5><strong>".'TT'."</strong></font></td>\n";
    echo "<td><font color=\"black\" size=5><strong>".null."</strong></font></td>\n";
    echo "<td><font color=\"black\" size=4><strong>".number_format($c1,2,",",".")."</strong></font></td>\n";
    echo "<td><font color=\"black\" size=4><strong>".number_format($c2,2,",",".")."</strong></font></td>\n";
    echo "<td><font color=\"black\" size=4><strong>".number_format($c3,2,",",".")."</strong></font></td>\n";
    echo "<td><font color=\"black\" size=4><strong>".number_format($c4,2,",",".")."</strong></font></td>\n";
    echo "<td><font color=\"black\" size=4><strong>".number_format($c5,2,",",".")."</strong></font></td>\n";
    echo "<td><font color=\"black\" size=4><strong>".number_format($c6,2,",",".")."</strong></font></td>\n";
    echo "<td><font color=\"black\" size=4><strong>".number_format($c7,2,",",".")."</strong></font></td>\n";
    echo "<td><font color=\"black\" size=4><strong>".number_format($c8,2,",",".")."</strong></font></td>\n";
    echo "<td><font color=\"black\" size=4><strong>".number_format($c9,2,",",".")."</strong></font></td>\n";
    echo "<td><font color=\"black\" size=4><strong>".number_format($c10,2,",",".")."</strong></font></td>\n";
    echo "<td><font color=\"black\" size=4><strong>".number_format($c11,2,",",".")."</strong></font></td>\n";
    echo "<td><font color=\"black\" size=4><strong>".number_format($c12,2,",",".")."</strong></font></td>\n";
    echo "<td><font color=\"black\" size=4><strong>".number_format($c13,2,",",".")."</strong></font></td>\n";
	echo "</tr>\n";
	if ($linha <> null or $linha >0){
		echo "Linhas:"."<br>";
		$sql="select ccodlinha,cdeslinha from tlinha where ccodlinha in ($filtrolinha)  order by ccodlinha ";
		$exsql=pg_query($conc,$sql);	    
	    while ($row = pg_fetch_assoc($exsql)) {
	        $codl=$row['ccodlinha'];
	        $deslinha=$row['cdeslinha'];
	        echo $codl.'-'.$deslinha.'<br>';	        
	    }	
	} else {
		echo "Linhas:Todas"."<br>";
	}
	if ($marca <> null or $marca >0){
		echo "Marcas:"."<br>";
		$sql="select ccodmarca,cdesmarca from tmarca where ccodmarca in ($filtromarca)  order by ccodmarca ";
		$exsql=pg_query($conc,$sql);	    
	    while ($row = pg_fetch_assoc($exsql)) {
	        $codl=$row['ccodmarca'];
	        $deslinha=$row['cdesmarca'];
	        echo $codl.'-'.$deslinha.'<br>';	        
	    }	
	} else {
		echo "Marca:Todas"."<br>";
	}
	if ($depart <> null or $depart >0){
		echo "Departamentos:"."<br>";
		$sql="select ccoddepartamento,cdesdepartamento from tdepartamento where ccoddepartamento in ($filtodepart)  order by ccoddepartamento ";
		$exsql=pg_query($conc,$sql);	    
	    while ($row = pg_fetch_assoc($exsql)) {
	        $codl=$row['ccoddepartamento'];
	        $deslinha=$row['cdesdepartamento'];
	        echo $codl.'-'.$deslinha.'<br>';	        
	    }	
	} else {
		echo "Departamentos:Todos"."<br>";
	}
	echo "<br><br>";
	exit;
}
if ($base=='RE'){
	echo "<table border='2' width='100%' bgcolor=#F5F6CE >";
	echo "<tr><td><font size=3><strong>Cód.</strong></font></td>"."<td><font color=\"black\" size=3><strong>Marca</strong></font></td>".
	"<td><font color=\"black\" size=3><strong>Rosane</strong></font></td>"."<td><font color=\"black\" size=3><strong>Lucélia</strong></font></td>".
	"<td><font color=\"black\" size=3><strong>Maynara</strong></font></td>"."<td><font color=\"black\" size=3><strong>Adrielli</strong></font></td>"
	."<td><font color=\"black\" size=3><strong>Shop Cdr</strong></font></td>"."<td><font color=\"black\" size=3><strong>Nádia</strong></font></td>"
	."<td><font color=\"black\" size=3><strong>Martello</strong></font></td>"."<td><font color=\"black\" size=3><strong>Shop Vid</strong></font></td>"
	."<td><font color=\"black\" size=3><strong>Atacadão Cdr</strong></font></td>"."<td><font color=\"black\" size=3><strong>Rosani</strong></font></td>"
	."<td><font color=\"black\" size=3><strong>Lages</strong></font></td>"."<td><font color=\"black\" size=3><strong>Atacadão Lg</strong></font></td>".
	"<td><font color=\"black\" size=3><strong>TT Marca</strong></font></td>"."</tr>";
	$c1=0.00;$c2=0.00;$c3=0.00;$c4=0.00;$c5=0.00;$c6=0.00;$c7=0.00;$c8=0.00;$c9=0.00;$c10=0.00;$c11=0.00;$c12=0.00;$c13=0.00;
	$l1=0.00;
	$linha = $_POST['linha'];
	$filtrolinha=$linha;
	if ($linha <> null and $linha >0 ) {
		$linha= "and clinproduto in ($linha)";
	} else {
		$linha = null;
	}
	$grupo = $_POST['grupo'];
	$filtrogrupo=$grupo;
	if ($grupo <> null and $grupo >0 ) {
		$grupo= "and cgruporduto in  ($grupo)";
	} else {
		$grupo = null;
	}	
	$depart = $_POST['departa'];
	$filtodepart=$depart;
	if ($depart <> null and $depart >0 ) {
		$depart= "and cdepproduto in  ($depart)";
	} else {
		$depart = null;
	} 
	$sql="select ccodmarca,cdesmarca from tmarca 
	inner join aprodutos on ccodmarca=cmarproduto
	where ccodmarca > 0 $linha $grupo $depart
	group by ccodmarca,cdesmarca
	order by cdesmarca";
 	$exsql=pg_query($conc,$sql);    
    while ($row = pg_fetch_assoc($exsql)) {
        $codmarca=$row['ccodmarca'];
        $desmarca=$row['cdesmarca'];
        $com="select sum (centhistorico-csaihisotorico) from ahistorico inner join
        aprodutos on cprohistorico = ccodproduto
        where cmarproduto = $codmarca $linha $grupo $depart  ";
        $excom=pg_query($conc,$com);	     
	    $rscom=pg_fetch_array($excom);
	    $resulbc=$rscom['sum'];
	    $excom=pg_query($conl,$com);	     
	    $rscom=pg_fetch_array($excom);
	    $resulbl=$rscom['sum'];
        $excom=pg_query($conv,$com);	     
	    $rscom=pg_fetch_array($excom);
	    $resulbv=$rscom['sum'];
        $excom=pg_query($conj,$com);	     
	    $rscom=pg_fetch_array($excom);
	    $resulbj=$rscom['sum'];
	   if ($resulbc > 0 or $resulbl > 0 or $resulbv > 0  or $resulbk > 0) {
	   		echo "<td><font color=\"red\" size=4 >".$codmarca."</font></td>\n";
	   		echo "<td><font color=\"red\" size=4 >".$desmarca."</font></td>\n";
		   	$com="select sum (centhistorico-csaihisotorico) from ahistorico inner join
	        aprodutos on cprohistorico = ccodproduto 
	        where cmarproduto = $codmarca and cemphistorico in (1,2) $linha $grupo $depart  ";
		   	$excom=pg_query($conc,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $estoque=$rscom['sum'];
		    if ($estoque == null or $estoque < 0){
		    	$estoque = 0.00;
	    	}
	    	$c1=$c1+$estoque;
	    	$l1=$l1+$estoque;
	    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
	    	$com="select sum (centhistorico-csaihisotorico) from ahistorico inner join
	        aprodutos on cprohistorico = ccodproduto
	        where cmarproduto = $codmarca and cemphistorico in (3,4) $linha $grupo $depart";
		   	$excom=pg_query($conc,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $estoque=$rscom['sum'];
		    if ($estoque == null or $estoque < 0){
		    	$estoque = 0.00;
	    	}
	    	$c2=$c2+$estoque;
	    	$l1=$l1+$estoque;
	    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
	    	$com="select sum (centhistorico-csaihisotorico) from ahistorico inner join
	        aprodutos on cprohistorico = ccodproduto
	        where cmarproduto = $codmarca and cemphistorico in (5,6 )$linha $grupo $depart";
		   	$excom=pg_query($conc,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $estoque=$rscom['sum'];
		    if ($estoque == null or $estoque < 0){
		    	$estoque = 0.00;
	    	}
	    	$c3=$c3+$estoque;
	    	$l1=$l1+$estoque;
	    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
	    	$com="select sum (centhistorico-csaihisotorico) from ahistorico inner join
	        aprodutos on cprohistorico = ccodproduto
	        where cmarproduto = $codmarca and cemphistorico in (7,8)$linha $grupo $depart";
		   	$excom=pg_query($conc,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $estoque=$rscom['sum'];
		    if ($estoque == null or $estoque < 0){
		    	$estoque = 0.00;
	    	}
	    	$c4=$c4+$estoque;
	    	$l1=$l1+$estoque;
	    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
	    	$com="select sum (centhistorico-csaihisotorico) from ahistorico inner join
	        aprodutos on cprohistorico = ccodproduto
	        where cmarproduto = $codmarca and cemphistorico in (11,12)$linha $grupo $depart";
		   	$excom=pg_query($conc,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $estoque=$rscom['sum'];
		    if ($estoque == null or $estoque < 0){
		    	$estoque = 0.00;
	    	}
	    	$c5=$c5+$estoque;
	    	$l1=$l1+$estoque;
	    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
	    	$com="select sum (centhistorico-csaihisotorico) from ahistorico inner join
	        aprodutos on cprohistorico = ccodproduto
	        where cmarproduto = $codmarca and cemphistorico in (13,14)$linha $grupo $depart";
		   	$excom=pg_query($conv,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $estoque=$rscom['sum'];
		    if ($estoque == null or $estoque < 0){
		    	$estoque = 0.00;
	    	}
	    	$c6=$c6+$estoque;
	    	$l1=$l1+$estoque;
	    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
        	$com="select sum (centhistorico-csaihisotorico) from ahistorico inner join
	        aprodutos on cprohistorico = ccodproduto
	        where cmarproduto = $codmarca and cemphistorico in (15,16)$linha $grupo $depart";
		   	$excom=pg_query($conv,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $estoque=$rscom['sum'];
		    if ($estoque == null or $estoque < 0){
		    	$estoque = 0.00;
	    	}
	    	$c7=$c7+$estoque;
	    	$l1=$l1+$estoque;
	    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
        	$com="select sum (centhistorico-csaihisotorico) from ahistorico inner join
	        aprodutos on cprohistorico = ccodproduto
	        where cmarproduto = $codmarca and cemphistorico in (17,18)$linha $grupo $depart";
		   	$excom=pg_query($conv,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $estoque=$rscom['sum'];
		    if ($estoque == null or $estoque < 0){
		    	$estoque = 0.00;
	    	}
	    	$c8=$c8+$estoque;
	    	$l1=$l1+$estoque;
	    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
        	$com="select sum (centhistorico-csaihisotorico) from ahistorico inner join
	        aprodutos on cprohistorico = ccodproduto
	        where cmarproduto = $codmarca and cemphistorico in (1,2)$linha $grupo $depart";
		   	$excom=pg_query($conj,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $estoque=$rscom['sum'];
		    if ($estoque == null or $estoque < 0){
		    	$estoque = 0.00;
	    	}
	    	$c9=$c9+$estoque;
	    	$l1=$l1+$estoque;
	    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
            $com="select sum (centhistorico-csaihisotorico) from ahistorico inner join
	        aprodutos on cprohistorico = ccodproduto
	        where cmarproduto = $codmarca and cemphistorico in (3,4)$linha $grupo $depart";
		   	$excom=pg_query($conj,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $estoque=$rscom['sum'];
		    if ($estoque == null or $estoque < 0){
		    	$estoque = 0.00;
	    	}
	    	$c10=$c10+$estoque;
	    	$l1=$l1+$estoque;
	    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
            $com="select sum (centhistorico-csaihisotorico) from ahistorico inner join
	        aprodutos on cprohistorico = ccodproduto
	        where cmarproduto = $codmarca and cemphistorico in (1,2)$linha $grupo $depart";
		   	$excom=pg_query($conl,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $estoque=$rscom['sum'];
		    if ($estoque == null or $estoque < 0){
		    	$estoque = 0.00;
	    	}
	    	$c11=$c11+$estoque;
	    	$l1=$l1+$estoque;
	    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
            $com="select sum (centhistorico-csaihisotorico) from ahistorico inner join
	        aprodutos on cprohistorico = ccodproduto
	        where cmarproduto = $codmarca and cemphistorico in (3,4)$linha $grupo $depart";
		   	$excom=pg_query($conl,$com);	     
		    $rscom=pg_fetch_array($excom);
		    $estoque=$rscom['sum'];
		    if ($estoque == null or $estoque < 0){
		    	$estoque = 0.00;
	    	}
	    	$c12=$c12+$estoque;
	    	$l1=$l1+$estoque;
	    	echo "<td>".number_format($estoque,2,",",".")."</td>\n";
    	    echo "<td><font color=\"black\" size=4><strong>".number_format($l1,2,",",".")."</strong></font></td>\n";
    	    $c13=$c13+$l1;
    	    $l1=0.00;
	    	echo "</tr>\n"; 	    	    	
	   }
	       
    }
    echo "<td><font color=\"black\" size=5><strong>".'TT'."</strong></font></td>\n";
    echo "<td><font color=\"black\" size=5><strong>".null."</strong></font></td>\n";
    echo "<td><font color=\"black\" size=4><strong>".number_format($c1,2,",",".")."</strong></font></td>\n";
    echo "<td><font color=\"black\" size=4><strong>".number_format($c2,2,",",".")."</strong></font></td>\n";
    echo "<td><font color=\"black\" size=4><strong>".number_format($c3,2,",",".")."</strong></font></td>\n";
    echo "<td><font color=\"black\" size=4><strong>".number_format($c4,2,",",".")."</strong></font></td>\n";
    echo "<td><font color=\"black\" size=4><strong>".number_format($c5,2,",",".")."</strong></font></td>\n";
    echo "<td><font color=\"black\" size=4><strong>".number_format($c6,2,",",".")."</strong></font></td>\n";
    echo "<td><font color=\"black\" size=4><strong>".number_format($c7,2,",",".")."</strong></font></td>\n";
    echo "<td><font color=\"black\" size=4><strong>".number_format($c8,2,",",".")."</strong></font></td>\n";
    echo "<td><font color=\"black\" size=4><strong>".number_format($c9,2,",",".")."</strong></font></td>\n";
    echo "<td><font color=\"black\" size=4><strong>".number_format($c10,2,",",".")."</strong></font></td>\n";
    echo "<td><font color=\"black\" size=4><strong>".number_format($c11,2,",",".")."</strong></font></td>\n";
    echo "<td><font color=\"black\" size=4><strong>".number_format($c12,2,",",".")."</strong></font></td>\n";
    echo "<td><font color=\"black\" size=4><strong>".number_format($c13,2,",",".")."</strong></font></td>\n";
	echo "</tr>\n";
	if ($linha <> null or $linha >0){
		echo "Linhas:"."<br>";
		$sql="select ccodlinha,cdeslinha from tlinha where ccodlinha in ($filtrolinha)  order by ccodlinha ";
		$exsql=pg_query($conc,$sql);	    
	    while ($row = pg_fetch_assoc($exsql)) {
	        $codl=$row['ccodlinha'];
	        $deslinha=$row['cdeslinha'];
	        echo $codl.'-'.$deslinha.'<br>';	        
	    }	
	} else {
		echo "Linhas:Todas"."<br>";
	}
	if ($grupo <> null or $grupo >0){
		echo "Grupos:"."<br>";
		$sql="select ccodgrupo,cdesgrupo from tgrupo where ccodgrupo in ($filtrogrupo)  order by ccodgrupo ";
		$exsql=pg_query($conc,$sql);	    
	    while ($row = pg_fetch_assoc($exsql)) {
	        $codl=$row['ccodgrupo'];
	        $deslinha=$row['cdesgrupo'];
	        echo $codl.'-'.$deslinha.'<br>';	        
	    }	
	} else {
		echo "Grupos:Todos"."<br>";
	}
	if ($depart <> null or $depart >0){
		echo "Departamentos:"."<br>";
		$sql="select ccoddepartamento,cdesdepartamento from tdepartamento where ccoddepartamento in ($filtodepart)  order by ccoddepartamento ";
		$exsql=pg_query($conc,$sql);	    
	    while ($row = pg_fetch_assoc($exsql)) {
	        $codl=$row['ccoddepartamento'];
	        $deslinha=$row['cdesdepartamento'];
	        echo $codl.'-'.$deslinha.'<br>';	        
	    }	
	} else {
		echo "Departamentos:Todos"."<br>";
	}
	echo "<br><br>";
exit;	
}
if ($base <> 'VE'){
	$dataf=$_POST['data'];
	if ($dataf == '') {
	    $base=$_POST['base'];
	    if ($base <> 'F') {
	        echo "<script>alert('Data Inválida');</script>";
	        echo "$volta";
	    }
	} else {
	    $partes = explode("-", $dataf);
	    $ano = $partes[0];
	    $mes = $partes[1];
	    $dia = $partes[2];
	    $meses = array(
	        '01'=>'JANEIRO',
	        '02'=>'FEVEREIRO',
	        '03'=>'MARÇO',
	        '04'=>'ABRIL',
	        '05'=>'MAIO',
	        '06'=>'JUNHO',
	        '07'=>'JULHO',
	        '08'=>'AGOSTO',
	        '09'=>'SETEMBRO',
	        '10'=>'OUTUBRO',
	        '11'=>'NOVEMBRO',
	        '12'=>'DEZEMBRO'
	    );
	    $anoant=$ano-1;
	    $datafant=$anoant.'-'.$mes.'-'.$dia;
	}
	
	if ($base=='F') { 
		if(!@($resullages=pg_connect ("host=192.168.16.190 dbname=result_lages port=5430 user=postgres password=ky$14gr@"))){
	        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados Result de Lages Data:$dia  Hora:$time </font></b></p>";
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
	    if(!@($resultcdr=pg_connect ("host=192.168.16.190 dbname=result_cdr port=5430 user=postgres password=ky$14gr@"))){
	        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados Result de Caçador Data:$dia  Hora:$time </font></b></p>";
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
	    if(!@($resultvda=pg_connect ("host=192.168.16.190 dbname=result_videira port=5430 user=postgres password=ky$14gr@"))){
	        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados Result de Videira Data:$dia  Hora:$time </font></b></p>";
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
	    if(!@($resuljoinville=pg_connect ("host=192.168.16.190 dbname=result_joinville port=5430 user=postgres password=ky$14gr@"))){
	        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados Result de Joinville Data:$dia  Hora:$time </font></b></p>";
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
	    $ref=$_POST['ref'];
	    if ($ref=='') {
	        echo "<script>alert('Refência Inválida');</script>";
	        echo "$volta";
	    }
	    $partes = explode("/", $ref);
	    $ano = $partes[0];
	    if(strlen($ano)< 4){
	        echo "<script>alert('Ano de Refrência Inválido');</script>";
	        echo "$volta";
	    }
	    $mes = $partes[1];
	    if(strlen($mes)<> 2 or $mes > 12){
	        echo "<script>alert('Mês de Referência Inválido');</script>";
	        echo "$volta";
	    }
	    $meses = array(
	        '01'=>'Janeiro',
	        '02'=>'Fevereiro',
	        '03'=>'Março',
	        '04'=>'Abril',
	        '05'=>'Maio',
	        '06'=>'Junho',
	        '07'=>'Julho',
	        '08'=>'Agosto',
	        '09'=>'Setembro',
	        '10'=>'Outubro',
	        '11'=>'Novembro',
	        '12'=>'Dezembro'
	    );   
	    $ultimo_dia = date("t", mktime(0,0,0,$mes,'01',$ano));
	    $dtini=$ano.'/'.$mes.'/'.'01';
	    $dtfin=$ano.'/'.$mes.'/'.$ultimo_dia;
	    
	    echo "<table border='2' width='20%' bgcolor=#F5F6CE >";
	    echo "<tr><td ><font color=\"black\" size=3><strong>Lages ViaBrasil $meses[$mes]/$ano</strong></font></td>"."</tr>";
	    echo "<table border='2' width='50%' bgcolor=#F6D8CE  >";
	    echo "<tr><td><font color=\"red\" size=3><strong>Operacional</strong></font></td>"."<td><font color=\"black\" size=3><strong></strong></font></td>"."</tr>";
	    $sql="select cnomefavorecido,(sum(cvalordebitohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=1 and  ccodigocategoriahistorico in (8,9,10)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;    
	    //Pega Cobrança,Despesa Bancaria,Despesa Operacional
	    $exsql=pg_query($resullages,$sql);
	    $ttcoluna1='0.00';
	    $tt='0.00';
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $ttcoluna1=$ttcoluna1+$valor;
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    $tt=$tt+$ttcoluna1;
	    echo "<td><font color=\"black\" size=4><strong>".'TT'."</td>\n";
	    $ttcoluna1=number_format($ttcoluna1,2,",",".");
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna1."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4><strong>".'Impostos:'."</td>\n";
	    echo "</tr>\n";
	    //Pega Impostos Pagos
	    $sql="select cnomefavorecido,(sum(cvalordebitohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=1 and  ccodigocategoriahistorico in (15)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    $exsql=pg_query($resullages,$sql);
	    $ttcoluna1='0.00';
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $ttcoluna1=$ttcoluna1+$valor;
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    $tt=$tt+$ttcoluna1;
	    echo "<td><font color=\"black\" size=4><strong>".'TT'."</td>\n";
	    $ttcoluna1=number_format($ttcoluna1,2,",",".");
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna1."</strong></font></td>\n";
	    echo "</tr>\n";  
	    echo "<td><font color=\"red\" size=4><strong>".'Funcionários:'."</td>\n";
	    echo "</tr>\n";
	    //Pega Funcionários
	    $sql="select cnomefavorecido,(sum(cvalordebitohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=1 and  ccodigocategoriahistorico in (14)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    $exsql=pg_query($resullages,$sql);
	    $ttcoluna1='0.00';
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $ttcoluna1=$ttcoluna1+$valor;
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    $tt=$tt+$ttcoluna1;
	    echo "<td><font color=\"black\" size=4><strong>".'TT'."</td>\n";
	    $ttcoluna1=number_format($ttcoluna1,2,",",".");
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna1."</strong></font></td>\n";
	    echo "</tr>\n";    
	    echo "<td><font color=\"red\" size=4 ><strong>".'Total Das Despesas'."</td>\n";
	    $tt=number_format($tt,2,",",".");
	    echo "<td><font color=\"red\" size=4 ><strong>".$tt."</strong></font></td>\n";
	    echo "</tr>\n"; 
	    //Pega Vendas	     
	    $sql="select (select sum(cvlqhistorico*csaihisotorico) from ahistorico 
		inner join aprodutos on cprohistorico = ccodproduto 
		join asaidas on cisahistorico = cidesaidas 
		join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna 
		join tlinha on ccodlinha = clinproduto
		where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cdeslinha not like '%ESPORTES%'
		and cemihistorico <= '$dtfin'  and cempresasaidas in (1,2))- 
		(select sum(cvlqhistorico*centhistorico) 
		from ahistorico 
		inner join aprodutos on cprohistorico = ccodproduto 
		join asaidas on cisahistorico = cidesaidas 
		join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna 
		join tlinha on ccodlinha = clinproduto
		where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cdeslinha not like '%ESPORTES%'
		and cemihistorico <= '$dtfin'  and cempresasaidas in (1,2))::numeric (18,2) as venda,
	    (select sum(cvlqhistorico*csaihisotorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and clinproduto = '108' and cempresasaidas in (1,2))-
	    (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and clinproduto = '108' and cempresasaidas in (1,2))::numeric (18,2) as uniforme,
	    (select sum(csaihisotorico*n_ahi_valor_custo_venda) from ahistorico 
	    inner join aprodutos on cprohistorico = ccodproduto 
	    join asaidas on cisahistorico = cidesaidas 
	    join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna
	    join tlinha on ccodlinha = clinproduto 
	    where i_tna_valida_comissao = '0' 
	    and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and cdeslinha not like '%ESPORTES%' 
	    and clinproduto <> 108 and clinproduto <> 13 
	    and cempresasaidas in (1,2))-
	    (select sum(n_ahi_valor_custo_venda*centhistorico) from ahistorico 
	    inner join aprodutos on cprohistorico = ccodproduto 
	    join asaidas on cisahistorico = cidesaidas 
	    join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna
	    join tlinha on ccodlinha = clinproduto  
	    where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cdeslinha not like '%ESPORTES%'  
	    and cemihistorico <= '$dtfin'  and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (1,2))::numeric (18,2) as custo";
	    $exsql=pg_query($conl,$sql);	     
	    $rssql=pg_fetch_array($exsql);
	    $venda1=$rssql['venda'];
	    $custo1=$rssql['custo'];
	    $dif1=$venda1-$custo1;
	    $venda1=number_format($venda1,2,",",".");
	    $custo1=number_format($custo1,2,",",".");
	    $dif1=number_format($dif1,2,",",".");
	    echo "<td><font color=\"red\" size=4 >".'Venda Bruta'."</font></td>\n";
	    echo "<td>".'R$'.$venda1."</td>\n";
	    echo "</tr>\n"; 
	    echo "<td><font color=\"red\" size=4 >".'Custo'."</font></td>\n";
	    echo "<td>".'R$'.$custo1."</td>\n";
	    echo "</tr>\n"; 
	    echo "<td><font color=\"red\" size=4 >".'Despesas'."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'.$tt."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Lucro Bruto'."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'.$dif1."</strong></font></td>\n";
	    echo "</tr>\n"; 
	    echo "<td><font color=\"red\" size=4 >".'Percas até '."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'."</strong></font></td>\n";
	    echo "</tr>\n";
	    //Pega Receitas Financeiras 
	    $sql="select cnomefavorecido,(sum(cvalorcreditohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=1 and  ccodigocategoriahistorico in (17)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    $exsql=pg_query($resultcdr,$sql);    
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];        
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    echo "<td><font color=\"red\" size=4 >".'Resultado Liquido '."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".''."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".''."</strong></font></td>\n";
	    echo "</tr>\n";	        
	    echo "<table border='2' width='20%' bgcolor=#F5F6CE >";
	    echo '<br><br>';
	    
        echo "<table border='2' width='20%' bgcolor=#F5F6CE >";
	    echo "<tr><td ><font color=\"black\" size=3><strong>Lages Shop Masp $meses[$mes]/$ano</strong></font></td>"."</tr>";
	    echo "<table border='2' width='50%' bgcolor=#F6D8CE  >";
	    echo "<tr><td><font color=\"red\" size=3><strong>Operacional</strong></font></td>"."<td><font color=\"black\" size=3><strong></strong></font></td>"."</tr>";
	    $sql="select cnomefavorecido,(sum(cvalordebitohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=3 and  ccodigocategoriahistorico in (8,9,10)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;    
	    //Pega Cobrança,Despesa Bancaria,Despesa Operacional
	    $exsql=pg_query($resullages,$sql);
	    $ttcoluna1='0.00';
	    $tt='0.00';
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $ttcoluna1=$ttcoluna1+$valor;
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    $tt=$tt+$ttcoluna1;
	    echo "<td><font color=\"black\" size=4><strong>".'TT'."</td>\n";
	    $ttcoluna1=number_format($ttcoluna1,2,",",".");
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna1."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4><strong>".'Impostos:'."</td>\n";
	    echo "</tr>\n";
	    //Pega Impostos Pagos
	    $sql="select cnomefavorecido,(sum(cvalordebitohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=3 and  ccodigocategoriahistorico in (15)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    $exsql=pg_query($resullages,$sql);
	    $ttcoluna1='0.00';
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $ttcoluna1=$ttcoluna1+$valor;
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    $tt=$tt+$ttcoluna1;
	    echo "<td><font color=\"black\" size=4><strong>".'TT'."</td>\n";
	    $ttcoluna1=number_format($ttcoluna1,2,",",".");
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna1."</strong></font></td>\n";
	    echo "</tr>\n";  
	    echo "<td><font color=\"red\" size=4><strong>".'Funcionários:'."</td>\n";
	    echo "</tr>\n";
	    //Pega Funcionários
	    $sql="select cnomefavorecido,(sum(cvalordebitohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=3 and  ccodigocategoriahistorico in (14)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    $exsql=pg_query($resullages,$sql);
	    $ttcoluna1='0.00';
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $ttcoluna1=$ttcoluna1+$valor;
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    $tt=$tt+$ttcoluna1;
	    echo "<td><font color=\"black\" size=4><strong>".'TT'."</td>\n";
	    $ttcoluna1=number_format($ttcoluna1,2,",",".");
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna1."</strong></font></td>\n";
	    echo "</tr>\n";    
	    echo "<td><font color=\"red\" size=4 ><strong>".'Total Das Despesas'."</td>\n";
	    $tt=number_format($tt,2,",",".");
	    echo "<td><font color=\"red\" size=4 ><strong>".$tt."</strong></font></td>\n";
	    echo "</tr>\n"; 
	    //Pega Vendas	     
	    $sql="select (select sum(cvlqhistorico*csaihisotorico) from ahistorico 
		inner join aprodutos on cprohistorico = ccodproduto 
		join asaidas on cisahistorico = cidesaidas 
		join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna 
		join tlinha on ccodlinha = clinproduto
		where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cdeslinha  like '%ESPORTES%'
		and cemihistorico <= '$dtfin'  and cempresasaidas in (1,2))- 
		(select sum(cvlqhistorico*centhistorico) 
		from ahistorico 
		inner join aprodutos on cprohistorico = ccodproduto 
		join asaidas on cisahistorico = cidesaidas 
		join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna 
		join tlinha on ccodlinha = clinproduto
		where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cdeslinha  like '%ESPORTES%'
		and cemihistorico <= '$dtfin'  and cempresasaidas in (1,2))::numeric (18,2) as venda,
	    (select sum(cvlqhistorico*csaihisotorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and clinproduto = '108' and cempresasaidas in (1,2))-
	    (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and clinproduto = '108' and cempresasaidas in (1,2))::numeric (18,2) as uniforme,
	    (select sum(csaihisotorico*n_ahi_valor_custo_venda) from ahistorico 
	    inner join aprodutos on cprohistorico = ccodproduto 
	    join asaidas on cisahistorico = cidesaidas 
	    join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna
	    join tlinha on ccodlinha = clinproduto 
	    where i_tna_valida_comissao = '0' 
	    and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and cdeslinha  like '%ESPORTES%' 
	    and clinproduto <> 108 and clinproduto <> 13 
	    and cempresasaidas in (1,2))-
	    (select sum(n_ahi_valor_custo_venda*centhistorico) from ahistorico 
	    inner join aprodutos on cprohistorico = ccodproduto 
	    join asaidas on cisahistorico = cidesaidas 
	    join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna
	    join tlinha on ccodlinha = clinproduto  
	    where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cdeslinha  like '%ESPORTES%'  
	    and cemihistorico <= '$dtfin'  and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (1,2))::numeric (18,2) as custo";
	    $exsql=pg_query($conl,$sql);	     
	    $rssql=pg_fetch_array($exsql);
	    $venda1=$rssql['venda'];
	    $custo1=$rssql['custo'];
	    $dif1=$venda1-$custo1;
	    $venda1=number_format($venda1,2,",",".");
	    $custo1=number_format($custo1,2,",",".");
	    $dif1=number_format($dif1,2,",",".");
	    echo "<td><font color=\"red\" size=4 >".'Venda Bruta'."</font></td>\n";
	    echo "<td>".'R$'.$venda1."</td>\n";
	    echo "</tr>\n"; 
	    echo "<td><font color=\"red\" size=4 >".'Custo'."</font></td>\n";
	    echo "<td>".'R$'.$custo1."</td>\n";
	    echo "</tr>\n"; 
	    echo "<td><font color=\"red\" size=4 >".'Despesas'."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'.$tt."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Lucro Bruto'."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'.$dif1."</strong></font></td>\n";
	    echo "</tr>\n"; 
	    echo "<td><font color=\"red\" size=4 >".'Percas até '."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'."</strong></font></td>\n";
	    echo "</tr>\n";
	    //Pega Receitas Financeiras 
	    $sql="select cnomefavorecido,(sum(cvalorcreditohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=3 and  ccodigocategoriahistorico in (17)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    $exsql=pg_query($resultcdr,$sql);    
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];        
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    echo "<td><font color=\"red\" size=4 >".'Resultado Liquido '."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".''."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".''."</strong></font></td>\n";
	    echo "</tr>\n";	        
	    echo "<table border='2' width='20%' bgcolor=#F5F6CE >";
	    echo '<br><br>';
	    
        echo "<table border='2' width='20%' bgcolor=#F5F6CE >";
	    echo "<tr><td ><font color=\"black\" size=3><strong>Lages Atacadão $meses[$mes]/$ano</strong></font></td>"."</tr>";
	    echo "<table border='2' width='50%' bgcolor=#F6D8CE  >";
	    echo "<tr><td><font color=\"red\" size=3><strong>Operacional</strong></font></td>"."<td><font color=\"black\" size=3><strong></strong></font></td>"."</tr>";
	    $sql="select cnomefavorecido,(sum(cvalordebitohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=2 and  ccodigocategoriahistorico in (8,9,10)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;    
	    //Pega Cobrança,Despesa Bancaria,Despesa Operacional
	    $exsql=pg_query($resullages,$sql);
	    $ttcoluna1='0.00';
	    $tt='0.00';
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $ttcoluna1=$ttcoluna1+$valor;
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    $tt=$tt+$ttcoluna1;
	    echo "<td><font color=\"black\" size=4><strong>".'TT'."</td>\n";
	    $ttcoluna1=number_format($ttcoluna1,2,",",".");
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna1."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4><strong>".'Impostos:'."</td>\n";
	    echo "</tr>\n";
	    //Pega Impostos Pagos
	    $sql="select cnomefavorecido,(sum(cvalordebitohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=2 and  ccodigocategoriahistorico in (15)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    $exsql=pg_query($resullages,$sql);
	    $ttcoluna1='0.00';
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $ttcoluna1=$ttcoluna1+$valor;
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    $tt=$tt+$ttcoluna1;
	    echo "<td><font color=\"black\" size=4><strong>".'TT'."</td>\n";
	    $ttcoluna1=number_format($ttcoluna1,2,",",".");
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna1."</strong></font></td>\n";
	    echo "</tr>\n";  
	    echo "<td><font color=\"red\" size=4><strong>".'Funcionários:'."</td>\n";
	    echo "</tr>\n";
	    //Pega Funcionários
	    $sql="select cnomefavorecido,(sum(cvalordebitohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=2 and  ccodigocategoriahistorico in (14)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    $exsql=pg_query($resullages,$sql);
	    $ttcoluna1='0.00';
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $ttcoluna1=$ttcoluna1+$valor;
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    $tt=$tt+$ttcoluna1;
	    echo "<td><font color=\"black\" size=4><strong>".'TT'."</td>\n";
	    $ttcoluna1=number_format($ttcoluna1,2,",",".");
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna1."</strong></font></td>\n";
	    echo "</tr>\n";    
	    echo "<td><font color=\"red\" size=4 ><strong>".'Total Das Despesas'."</td>\n";
	    $tt=number_format($tt,2,",",".");
	    echo "<td><font color=\"red\" size=4 ><strong>".$tt."</strong></font></td>\n";
	    echo "</tr>\n"; 
	    //Pega Vendas	     
	    $sql="select (select sum(cvlqhistorico*csaihisotorico) from ahistorico 
		inner join aprodutos on cprohistorico = ccodproduto 
		join asaidas on cisahistorico = cidesaidas 
		join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna 
		join tlinha on ccodlinha = clinproduto
		where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' 
		and cemihistorico <= '$dtfin'  and cempresasaidas in (3,4))- 
		(select sum(cvlqhistorico*centhistorico) 
		from ahistorico 
		inner join aprodutos on cprohistorico = ccodproduto 
		join asaidas on cisahistorico = cidesaidas 
		join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna 
		join tlinha on ccodlinha = clinproduto
		where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini'
		and cemihistorico <= '$dtfin'  and cempresasaidas in (3,4))::numeric (18,2) as venda,
	    (select sum(cvlqhistorico*csaihisotorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and clinproduto = '108' and cempresasaidas in (3,4))-
	    (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and clinproduto = '108' and cempresasaidas in (3,4))::numeric (18,2) as uniforme,
	    (select sum(csaihisotorico*n_ahi_valor_custo_venda) from ahistorico 
	    inner join aprodutos on cprohistorico = ccodproduto 
	    join asaidas on cisahistorico = cidesaidas 
	    join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna
	    join tlinha on ccodlinha = clinproduto 
	    where i_tna_valida_comissao = '0' 
	    and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin'  
	    and clinproduto <> 108 and clinproduto <> 13 
	    and cempresasaidas in (3,4))-
	    (select sum(n_ahi_valor_custo_venda*centhistorico) from ahistorico 
	    inner join aprodutos on cprohistorico = ccodproduto 
	    join asaidas on cisahistorico = cidesaidas 
	    join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna
	    join tlinha on ccodlinha = clinproduto  
	    where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' 
	    and cemihistorico <= '$dtfin'  and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (3,4))::numeric (18,2) as custo";
	    $exsql=pg_query($conl,$sql);	     
	    $rssql=pg_fetch_array($exsql);
	    $venda1=$rssql['venda'];
	    $custo1=$rssql['custo'];
	    $dif1=$venda1-$custo1;
	    $venda1=number_format($venda1,2,",",".");
	    $custo1=number_format($custo1,2,",",".");
	    $dif1=number_format($dif1,2,",",".");
	    echo "<td><font color=\"red\" size=4 >".'Venda Bruta'."</font></td>\n";
	    echo "<td>".'R$'.$venda1."</td>\n";
	    echo "</tr>\n"; 
	    echo "<td><font color=\"red\" size=4 >".'Custo'."</font></td>\n";
	    echo "<td>".'R$'.$custo1."</td>\n";
	    echo "</tr>\n"; 
	    echo "<td><font color=\"red\" size=4 >".'Despesas'."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'.$tt."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Lucro Bruto'."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'.$dif1."</strong></font></td>\n";
	    echo "</tr>\n"; 
	    echo "<td><font color=\"red\" size=4 >".'Percas até '."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'."</strong></font></td>\n";
	    echo "</tr>\n";
	    //Pega Receitas Financeiras 
	    $sql="select cnomefavorecido,(sum(cvalorcreditohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=2 and  ccodigocategoriahistorico in (17)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    $exsql=pg_query($resultcdr,$sql);    
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];        
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    echo "<td><font color=\"red\" size=4 >".'Resultado Liquido '."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".''."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".''."</strong></font></td>\n";
	    echo "</tr>\n";	        
	    echo "<table border='2' width='20%' bgcolor=#F5F6CE >";
	    echo '<br><br>';
	    
	    
	    
	    
	    echo "<table border='2' width='20%' bgcolor=#F5F6CE >";
	    echo "<tr><td ><font color=\"black\" size=3><strong>Atacadão Cdr $meses[$mes]/$ano</strong></font></td>"."</tr>";
	    echo "<table border='2' width='50%' bgcolor=#F6D8CE  >";
	    echo "<tr><td><font color=\"red\" size=3><strong>Operacional</strong></font></td>"."<td><font color=\"black\" size=3><strong></strong></font></td>"."</tr>";
	    $sql="select cnomefavorecido,(sum(cvalordebitohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=11 and  ccodigocategoriahistorico in (8,9,10)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;    
	    //Pega Cobrança,Despesa Bancaria,Despesa Operacional
	    $exsql=pg_query($resullages,$sql);
	    $ttcoluna1='0.00';
	    $tt='0.00';
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $ttcoluna1=$ttcoluna1+$valor;
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    $tt=$tt+$ttcoluna1;
	    echo "<td><font color=\"black\" size=4><strong>".'TT'."</td>\n";
	    $ttcoluna1=number_format($ttcoluna1,2,",",".");
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna1."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4><strong>".'Impostos:'."</td>\n";
	    echo "</tr>\n";
	    //Pega Impostos Pagos
	    $sql="select cnomefavorecido,(sum(cvalordebitohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=11 and  ccodigocategoriahistorico in (15)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    $exsql=pg_query($resullages,$sql);
	    $ttcoluna1='0.00';
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $ttcoluna1=$ttcoluna1+$valor;
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    $tt=$tt+$ttcoluna1;
	    echo "<td><font color=\"black\" size=4><strong>".'TT'."</td>\n";
	    $ttcoluna1=number_format($ttcoluna1,2,",",".");
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna1."</strong></font></td>\n";
	    echo "</tr>\n";  
	    echo "<td><font color=\"red\" size=4><strong>".'Funcionários:'."</td>\n";
	    echo "</tr>\n";
	    //Pega Funcionários
	    $sql="select cnomefavorecido,(sum(cvalordebitohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=11 and  ccodigocategoriahistorico in (14)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    $exsql=pg_query($resullages,$sql);
	    $ttcoluna1='0.00';
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $ttcoluna1=$ttcoluna1+$valor;
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    $tt=$tt+$ttcoluna1;
	    echo "<td><font color=\"black\" size=4><strong>".'TT'."</td>\n";
	    $ttcoluna1=number_format($ttcoluna1,2,",",".");
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna1."</strong></font></td>\n";
	    echo "</tr>\n";    
	    echo "<td><font color=\"red\" size=4 ><strong>".'Total Das Despesas'."</td>\n";
	    $tt=number_format($tt,2,",",".");
	    echo "<td><font color=\"red\" size=4 ><strong>".$tt."</strong></font></td>\n";
	    echo "</tr>\n"; 
	    //Pega Vendas	     
	    $sql="select (select sum(cvlqhistorico*csaihisotorico) from ahistorico 
		inner join aprodutos on cprohistorico = ccodproduto 
		join asaidas on cisahistorico = cidesaidas 
		join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna 
		join tlinha on ccodlinha = clinproduto
		where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' 
		and cemihistorico <= '$dtfin'  and cempresasaidas in (1,2))- 
		(select sum(cvlqhistorico*centhistorico) 
		from ahistorico 
		inner join aprodutos on cprohistorico = ccodproduto 
		join asaidas on cisahistorico = cidesaidas 
		join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna 
		join tlinha on ccodlinha = clinproduto
		where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini'
		and cemihistorico <= '$dtfin'  and cempresasaidas in (1,2))::numeric (18,2) as venda,
	    (select sum(cvlqhistorico*csaihisotorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and clinproduto = '108' and cempresasaidas in (1,2))-
	    (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and clinproduto = '108' and cempresasaidas in (1,2))::numeric (18,2) as uniforme,
	    (select sum(csaihisotorico*n_ahi_valor_custo_venda) from ahistorico 
	    inner join aprodutos on cprohistorico = ccodproduto 
	    join asaidas on cisahistorico = cidesaidas 
	    join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna
	    join tlinha on ccodlinha = clinproduto 
	    where i_tna_valida_comissao = '0' 
	    and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin'  
	    and clinproduto <> 108 and clinproduto <> 13 
	    and cempresasaidas in (1,2))-
	    (select sum(n_ahi_valor_custo_venda*centhistorico) from ahistorico 
	    inner join aprodutos on cprohistorico = ccodproduto 
	    join asaidas on cisahistorico = cidesaidas 
	    join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna
	    join tlinha on ccodlinha = clinproduto  
	    where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' 
	    and cemihistorico <= '$dtfin'  and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (1,2))::numeric (18,2) as custo";
	    $exsql=pg_query($conj,$sql);	     
	    $rssql=pg_fetch_array($exsql);
	    $venda1=$rssql['venda'];
	    $custo1=$rssql['custo'];
	    $dif1=$venda1-$custo1;
	    $venda1=number_format($venda1,2,",",".");
	    $custo1=number_format($custo1,2,",",".");
	    $dif1=number_format($dif1,2,",",".");
	    echo "<td><font color=\"red\" size=4 >".'Venda Bruta'."</font></td>\n";
	    echo "<td>".'R$'.$venda1."</td>\n";
	    echo "</tr>\n"; 
	    echo "<td><font color=\"red\" size=4 >".'Custo'."</font></td>\n";
	    echo "<td>".'R$'.$custo1."</td>\n";
	    echo "</tr>\n"; 
	    echo "<td><font color=\"red\" size=4 >".'Despesas'."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'.$tt."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Lucro Bruto'."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'.$dif1."</strong></font></td>\n";
	    echo "</tr>\n"; 
	    echo "<td><font color=\"red\" size=4 >".'Percas até '."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'."</strong></font></td>\n";
	    echo "</tr>\n";
	    //Pega Receitas Financeiras 
	    $sql="select cnomefavorecido,(sum(cvalorcreditohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=2 and  ccodigocategoriahistorico in (17)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    $exsql=pg_query($resultcdr,$sql);    
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];        
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    echo "<td><font color=\"red\" size=4 >".'Resultado Liquido '."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".''."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".''."</strong></font></td>\n";
	    echo "</tr>\n";	        
	    echo "<table border='2' width='20%' bgcolor=#F5F6CE >";
	    echo '<br><br>';
	    
	    
	    
	    echo "<table border='2' width='20%' bgcolor=#F5F6CE >";
	    echo "<tr><td ><font color=\"black\" size=3><strong>Calçados Adrielli $meses[$mes]/$ano</strong></font></td>"."</tr>";
	    echo "<table border='2' width='50%' bgcolor=#F6D8CE  >";
	    echo "<tr><td><font color=\"red\" size=3><strong>Operacional</strong></font></td>"."<td><font color=\"black\" size=3><strong></strong></font></td>"."</tr>";
	    $sql="select cnomefavorecido,(sum(cvalordebitohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=1 and  ccodigocategoriahistorico in (8,9,10)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;    
	    //Pega Cobrança,Despesa Bancaria,Despesa Operacional
	    $exsql=pg_query($resultcdr,$sql);
	    $ttcoluna1='0.00';
	    $tt='0.00';
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $ttcoluna1=$ttcoluna1+$valor;
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    $tt=$tt+$ttcoluna1;
	    echo "<td><font color=\"black\" size=4><strong>".'TT'."</td>\n";
	    $ttcoluna1=number_format($ttcoluna1,2,",",".");
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna1."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4><strong>".'Impostos:'."</td>\n";
	    echo "</tr>\n";
	    $sql="select cnomefavorecido,(sum(cvalordebitohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=1 and  ccodigocategoriahistorico in (15)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    $exsql=pg_query($resultcdr,$sql);
	    $ttcoluna1='0.00';
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $ttcoluna1=$ttcoluna1+$valor;
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    $tt=$tt+$ttcoluna1;
	    echo "<td><font color=\"black\" size=4><strong>".'TT'."</td>\n";
	    $ttcoluna1=number_format($ttcoluna1,2,",",".");
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna1."</strong></font></td>\n";
	    echo "</tr>\n";  
	    echo "<td><font color=\"red\" size=4><strong>".'Funcionários:'."</td>\n";
	    echo "</tr>\n";
	    $sql="select cnomefavorecido,(sum(cvalordebitohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=1 and  ccodigocategoriahistorico in (14)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    $exsql=pg_query($resultcdr,$sql);
	    $ttcoluna1='0.00';
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $ttcoluna1=$ttcoluna1+$valor;
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    $tt=$tt+$ttcoluna1;
	    echo "<td><font color=\"black\" size=4><strong>".'TT'."</td>\n";
	    $ttcoluna1=number_format($ttcoluna1,2,",",".");
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna1."</strong></font></td>\n";
	    echo "</tr>\n";    
	    echo "<td><font color=\"red\" size=4 ><strong>".'Total Das Despesas'."</td>\n";
	    $tt=number_format($tt,2,",",".");
	    echo "<td><font color=\"red\" size=4 ><strong>".$tt."</strong></font></td>\n";
	    echo "</tr>\n";    
	    $sql="select (sum(
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemisaidas>='$dtini' and cemisaidas <= '$dtfin' and cempresasaidas in (7,8))-
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas>='$dtini' and cemisaidas <= '$dtfin' and cempresasaidas in (7,8 ))))::numeric (18,2) as venda,
	    (select sum(cvlqhistorico*csaihisotorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and clinproduto = '108' and cempresasaidas in (7,8))-
	    (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and clinproduto = '108' and cempresasaidas in (7,8))::numeric (18,2) as uniforme,
	    (select sum(csaihisotorico*n_ahi_valor_custo_venda) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (7,8))-
	    (select sum(n_ahi_valor_custo_venda*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin'  and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (7,8))::numeric (18,2) as custo";
	    $exsql=pg_query($conc,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $venda1=$rssql['venda'];
	    $custo1=$rssql['custo'];
	    $dif1=$venda1-$custo1;
	    $venda1=number_format($venda1,2,",",".");
	    $custo1=number_format($custo1,2,",",".");
	    $dif1=number_format($dif1,2,",",".");
	    echo "<td><font color=\"red\" size=4 >".'Venda Bruta'."</font></td>\n";
	    echo "<td>".'R$'.$venda1."</td>\n";
	    echo "</tr>\n"; 
	    echo "<td><font color=\"red\" size=4 >".'Custo'."</font></td>\n";
	    echo "<td>".'R$'.$custo1."</td>\n";
	    echo "</tr>\n"; 
	    echo "<td><font color=\"red\" size=4 >".'Despesas'."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'.$tt."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Lucro Bruto'."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'.$dif1."</strong></font></td>\n";
	    echo "</tr>\n"; 
	    echo "<td><font color=\"red\" size=4 >".'Percas até '."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'."</strong></font></td>\n";
	    echo "</tr>\n"; 
	    $sql="select cnomefavorecido,(sum(cvalorcreditohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=1 and  ccodigocategoriahistorico in (17)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    $exsql=pg_query($resultcdr,$sql);    
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];        
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    echo "<td><font color=\"red\" size=4 >".'Resultado Liquido '."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".''."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".''."</strong></font></td>\n";
	    echo "</tr>\n";    
	    echo "<table border='2' width='20%' bgcolor=#F5F6CE >";
	    echo '<br><br>';
	    echo "<tr><td ><font color=\"black\" size=3><strong>Calçados Maynara $meses[$mes]/$ano</strong></font></td>"."</tr>";
	    echo "<table border='2' width='50%'  bgcolor=#F6D8CE  >";
	    echo "<tr><td><font color=\"red\" size=3><strong>Operacional</strong></font></td>"."<td><font color=\"black\" size=3><strong></strong></font></td>"."</tr>";
	    $sql="select cnomefavorecido,(sum(cvalordebitohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=3 and  ccodigocategoriahistorico in (8,9,10)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    //Pega Cobrança,Despesa Bancaria,Despesa Operacional
	    $exsql=pg_query($resultcdr,$sql);
	    $ttcoluna1='0.00';
	    $tt='0.00';
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $ttcoluna1=$ttcoluna1+$valor;
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    $tt=$tt+$ttcoluna1;
	    echo "<td><font color=\"black\" size=4><strong>".'TT'."</td>\n";
	    $ttcoluna1=number_format($ttcoluna1,2,",",".");
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna1."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4><strong>".'Impostos:'."</td>\n";
	    echo "</tr>\n";
	    $sql="select cnomefavorecido,(sum(cvalordebitohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=3 and  ccodigocategoriahistorico in (15)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    $exsql=pg_query($resultcdr,$sql);
	    $ttcoluna1='0.00';
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $ttcoluna1=$ttcoluna1+$valor;
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    $tt=$tt+$ttcoluna1;
	    echo "<td><font color=\"black\" size=4><strong>".'TT'."</td>\n";
	    $ttcoluna1=number_format($ttcoluna1,2,",",".");
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna1."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4><strong>".'Funcionários:'."</td>\n";
	    echo "</tr>\n";
	    $sql="select cnomefavorecido,(sum(cvalordebitohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=3 and  ccodigocategoriahistorico in (14)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    $exsql=pg_query($resultcdr,$sql);
	    $ttcoluna1='0.00';
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $ttcoluna1=$ttcoluna1+$valor;
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    $tt=$tt+$ttcoluna1;
	    echo "<td><font color=\"black\" size=4><strong>".'TT'."</td>\n";
	    $ttcoluna1=number_format($ttcoluna1,2,",",".");
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna1."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'Total Das Despesas'."</td>\n";
	    $tt=number_format($tt,2,",",".");
	    echo "<td><font color=\"red\" size=4 ><strong>".$tt."</strong></font></td>\n";
	    echo "</tr>\n";
	    $sql="select (sum(
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemisaidas>='$dtini' and cemisaidas <= '$dtfin' and cempresasaidas in (5,6))-
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas>='$dtini' and cemisaidas <= '$dtfin' and cempresasaidas in (5,6 ))))::numeric (18,2) as venda,
	    (select sum(cvlqhistorico*csaihisotorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and clinproduto = '108' and cempresasaidas in (5,6))-
	    (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and clinproduto = '108' and cempresasaidas in (5,6))::numeric (18,2) as uniforme,
	    (select sum(csaihisotorico*n_ahi_valor_custo_venda) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (5,6))-
	    (select sum(n_ahi_valor_custo_venda*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin'  and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (5,6))::numeric (18,2) as custo";
	    $exsql=pg_query($conc,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $venda1=$rssql['venda'];
	    $custo1=$rssql['custo'];
	    $dif1=$venda1-$custo1;
	    $venda1=number_format($venda1,2,",",".");
	    $custo1=number_format($custo1,2,",",".");
	    $dif1=number_format($dif1,2,",",".");
	    echo "<td><font color=\"red\" size=4 >".'Venda Bruta'."</font></td>\n";
	    echo "<td>".'R$'.$venda1."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Custo'."</font></td>\n";
	    echo "<td>".'R$'.$custo1."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Despesas'."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'.$tt."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Lucro Bruto'."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'.$dif1."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Percas até '."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'."</strong></font></td>\n";
	    echo "</tr>\n";
	    $sql="select cnomefavorecido,(sum(cvalorcreditohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=3 and  ccodigocategoriahistorico in (17)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    $exsql=pg_query($resultcdr,$sql);
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    echo "<td><font color=\"red\" size=4 >".'Resultado Liquido '."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".''."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".''."</strong></font></td>\n";
	    echo "</tr>\n";
	    
	    echo "<table border='2' width='20%' bgcolor=#F5F6CE >";
	    echo '<br><br>';
	    echo "<tr><td ><font color=\"black\" size=3><strong>Esportes $meses[$mes]/$ano</strong></font></td>"."</tr>";
	    echo "<table border='2' width='50%' bgcolor=#F6D8CE  >";
	    echo "<tr><td><font color=\"red\" size=3><strong>Operacional</strong></font></td>"."<td><font color=\"black\" size=3><strong></strong></font></td>"."</tr>";
	    $sql="select cnomefavorecido,(sum(cvalordebitohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=4 and  ccodigocategoriahistorico in (8,9,10)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    //Pega Cobrança,Despesa Bancaria,Despesa Operacional
	    $exsql=pg_query($resultcdr,$sql);
	    $ttcoluna1='0.00';
	    $tt='0.00';
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $ttcoluna1=$ttcoluna1+$valor;
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    $tt=$tt+$ttcoluna1;
	    echo "<td><font color=\"black\" size=4><strong>".'TT'."</td>\n";
	    $ttcoluna1=number_format($ttcoluna1,2,",",".");
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna1."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4><strong>".'Impostos:'."</td>\n";
	    echo "</tr>\n";
	    $sql="select cnomefavorecido,(sum(cvalordebitohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=4 and  ccodigocategoriahistorico in (15)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    $exsql=pg_query($resultcdr,$sql);
	    $ttcoluna1='0.00';
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $ttcoluna1=$ttcoluna1+$valor;
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    $tt=$tt+$ttcoluna1;
	    echo "<td><font color=\"black\" size=4><strong>".'TT'."</td>\n";
	    $ttcoluna1=number_format($ttcoluna1,2,",",".");
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna1."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4><strong>".'Funcionários:'."</td>\n";
	    echo "</tr>\n";
	    $sql="select cnomefavorecido,(sum(cvalordebitohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=4 and  ccodigocategoriahistorico in (14)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    $exsql=pg_query($resultcdr,$sql);
	    $ttcoluna1='0.00';
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $ttcoluna1=$ttcoluna1+$valor;
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    $tt=$tt+$ttcoluna1;
	    echo "<td><font color=\"black\" size=4><strong>".'TT'."</td>\n";
	    $ttcoluna1=number_format($ttcoluna1,2,",",".");
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna1."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'Total Das Despesas'."</td>\n";
	    $tt=number_format($tt,2,",",".");
	    echo "<td><font color=\"red\" size=4 ><strong>".$tt."</strong></font></td>\n";
	    echo "</tr>\n";
	    $sql="select (sum(
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemisaidas>='$dtini' and cemisaidas <= '$dtfin' and cempresasaidas in (3,4))-
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas>='$dtini' and cemisaidas <= '$dtfin' and cempresasaidas in (3,4 ))))::numeric (18,2) as venda,
	    (select sum(cvlqhistorico*csaihisotorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and clinproduto = '108' and cempresasaidas in (3,4))-
	    (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and clinproduto = '108' and cempresasaidas in (3,4))::numeric (18,2) as uniforme,
	    (select sum(csaihisotorico*n_ahi_valor_custo_venda) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (3,4))-
	    (select sum(n_ahi_valor_custo_venda*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin'  and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (3,4))::numeric (18,2) as custo";
	    $exsql=pg_query($conc,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $venda1=$rssql['venda'];
	    $custo1=$rssql['custo'];
	    $dif1=$venda1-$custo1;
	    $venda1=number_format($venda1,2,",",".");
	    $custo1=number_format($custo1,2,",",".");
	    $dif1=number_format($dif1,2,",",".");
	    echo "<td><font color=\"red\" size=4 >".'Venda Bruta'."</font></td>\n";
	    echo "<td>".'R$'.$venda1."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Custo'."</font></td>\n";
	    echo "<td>".'R$'.$custo1."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Despesas'."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'.$tt."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Lucro Bruto'."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'.$dif1."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Percas até '."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'."</strong></font></td>\n";
	    echo "</tr>\n";
	    $sql="select cnomefavorecido,(sum(cvalorcreditohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=4 and  ccodigocategoriahistorico in (17)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    $exsql=pg_query($resultcdr,$sql);
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    echo "<td><font color=\"red\" size=4 >".'Resultado Liquido '."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".''."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".''."</strong></font></td>\n";
	    echo "</tr>\n";
	    
	    echo "<table border='2' width='20%' bgcolor=#F5F6CE >";
	    echo '<br><br>';    
	    echo "<tr><td ><font color=\"black\" size=3><strong>Tatiane $meses[$mes]/$ano</strong></font></td>"."</tr>";
	    echo "<table border='2' width='50%' bgcolor=#F6D8CE  >";
	    echo "<tr><td><font color=\"red\" size=3><strong>Operacional</strong></font></td>"."<td><font color=\"black\" size=3><strong></strong></font></td>"."</tr>";
	    $sql="select cnomefavorecido,(sum(cvalordebitohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=2 and  ccodigocategoriahistorico in (8,9,10)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    //Pega Cobrança,Despesa Bancaria,Despesa Operacional
	    $exsql=pg_query($resultcdr,$sql);
	    $ttcoluna1='0.00';
	    $tt='0.00';
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $ttcoluna1=$ttcoluna1+$valor;
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    $tt=$tt+$ttcoluna1;
	    echo "<td><font color=\"black\" size=4><strong>".'TT'."</td>\n";
	    $ttcoluna1=number_format($ttcoluna1,2,",",".");
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna1."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4><strong>".'Impostos:'."</td>\n";
	    echo "</tr>\n";
	    $sql="select cnomefavorecido,(sum(cvalordebitohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=2 and  ccodigocategoriahistorico in (15)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    $exsql=pg_query($resultcdr,$sql);
	    $ttcoluna1='0.00';
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $ttcoluna1=$ttcoluna1+$valor;
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    $tt=$tt+$ttcoluna1;
	    echo "<td><font color=\"black\" size=4><strong>".'TT'."</td>\n";
	    $ttcoluna1=number_format($ttcoluna1,2,",",".");
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna1."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4><strong>".'Funcionários:'."</td>\n";
	    echo "</tr>\n";
	    $sql="select cnomefavorecido,(sum(cvalordebitohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=2 and  ccodigocategoriahistorico in (14)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    $exsql=pg_query($resultcdr,$sql);
	    $ttcoluna1='0.00';
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $ttcoluna1=$ttcoluna1+$valor;
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    $tt=$tt+$ttcoluna1;
	    echo "<td><font color=\"black\" size=4><strong>".'TT'."</td>\n";
	    $ttcoluna1=number_format($ttcoluna1,2,",",".");
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna1."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'Total Das Despesas'."</td>\n";
	    $tt=number_format($tt,2,",",".");
	    echo "<td><font color=\"red\" size=4 ><strong>".$tt."</strong></font></td>\n";
	    echo "</tr>\n";
	    $sql="select (sum(
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemisaidas>='$dtini' and cemisaidas <= '$dtfin' and cempresasaidas in (1,2))-
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas>='$dtini' and cemisaidas <= '$dtfin' and cempresasaidas in (1,2 ))))::numeric (18,2) as venda,   
	    (select sum(csaihisotorico*n_ahi_valor_custo_venda) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin'  and cempresasaidas in (1,2))-
	    (select sum(n_ahi_valor_custo_venda*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin'   and cempresasaidas in (1,2))::numeric (18,2) as custo,
	    (select sum(cvlqhistorico*csaihisotorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and clinproduto = '108' and cempresasaidas in (1,2))-
	    (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and clinproduto = '108' and cempresasaidas in (1,2))::numeric (18,2) as uniforme,
	    (select sum(csaihisotorico*n_ahi_valor_custo_venda) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and clinproduto = '108'  and cempresasaidas in (1,2))-
	    (select sum(n_ahi_valor_custo_venda*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and clinproduto = '108'  and cempresasaidas in (1,2))::numeric (18,2) as custouni,
	    (select sum(cvlqhistorico*csaihisotorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and clinproduto = '13' and cempresasaidas in (1,2))-
	    (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and clinproduto = '13' and cempresasaidas in (1,2))::numeric (18,2) as brinquedos,
	    (select sum(csaihisotorico*n_ahi_valor_custo_venda) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and clinproduto = '13'  and cempresasaidas in (1,2))-
	    (select sum(n_ahi_valor_custo_venda*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and clinproduto = '13'  and cempresasaidas in (1,2))::numeric (18,2) as custobrin";    
	    $exsql=pg_query($conc,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $unif=$rssql['uniforme'];
	    $cunif=$rssql['custouni'];
	    $difuni=$unif-$cunif;
	    $brinquedos=$rssql['brinquedos'];
	    $cubrin=$rssql['custobrin'];
	    $difbrin=$brinquedos-$cubrin;
	    $venda1=$rssql['venda'];
	    $custo1=$rssql['custo'];
	    $dif1=$venda1-$custo1;
	    $conf=$venda1-$unif-$brinquedos;
	    $cuntoconf=$custo1-$cunif-$cubrin;
	    $difconf=$conf-$cuntoconf;
	    $conf=number_format($conf,2,",",".");
	    $cuntoconf=number_format($cuntoconf,2,",",".");
	    $difconf=number_format($difconf,2,",",".");
	    $brinquedos=number_format($brinquedos,2,",",".");
	    $cubrin=number_format($cubrin,2,",",".");
	    $difbrin=number_format($difbrin,2,",",".");
	    $unif=number_format($unif,2,",",".");
	    $cunif=number_format($cunif,2,",",".");
	    $difuni=number_format($difuni,2,",",".");
	    $venda1=number_format($venda1,2,",",".");
	    $custo1=number_format($custo1,2,",",".");
	    $dif1=number_format($dif1,2,",",".");
	    echo "<td><font color=\"red\" size=4 >".'Venda Bruta'."</font></td>\n";
	    echo "<td>".'R$'.$venda1."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Custo'."</font></td>\n";
	    echo "<td>".'R$'.$custo1."</td>\n";
	    echo "</tr>\n";    
	    echo "<td><font color=\"red\" size=4 >".'Lucro Bruto'."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'.$dif1."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Confecções'."</font></td>\n";
	    echo "<td>".'R$'.$conf."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Custo Conf'."</font></td>\n";
	    echo "<td>".'R$'.$difconf."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Lucro Conf'."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'.$dif1."</strong></font></td>\n";
	    echo "</tr>\n";   
	    echo "<td><font color=\"red\" size=4 >".'Brinquedos'."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'.$brinquedos."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Custo Brinquedos'."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'.$cubrin."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Lucro'."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'.$difbrin."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Uniforme'."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'.$unif."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Custo Uniforme'."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'.$cunif."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Lucro'."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'.$difuni."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Despesas'."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'.$tt."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Percas até '."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'."</strong></font></td>\n";
	    echo "</tr>\n";
	    $sql="select cnomefavorecido,(sum(cvalorcreditohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=2 and  ccodigocategoriahistorico in (17)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    $exsql=pg_query($resultcdr,$sql);
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    echo "<td><font color=\"red\" size=4 >".'Resultado Liquido '."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".''."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".''."</strong></font></td>\n";
	    echo "</tr>\n";
	    
	    
	    echo "<table border='2' width='20%' bgcolor=#F5F6CE >";
	    echo '<br><br>';
	    echo "<tr><td ><font color=\"black\" size=3><strong>Gislaine $meses[$mes]/$ano</strong></font></td>"."</tr>";
	    echo "<table border='2' width='50%'  bgcolor=#F6D8CE  >";
	    echo "<td><font color=\"red\" size=4 >".'Result CDR '."</font></td>\n";
	    echo "</tr>\n";
	    $sql="select cnomefavorecido,(sum(cvalordebitohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=5 and  ccodigocategoriahistorico in (8,9,10)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    //Pega Cobrança,Despesa Bancaria,Despesa Operacional
	    $exsql=pg_query($resultcdr,$sql);
	    $ttcoluna1='0.00';
	    $tt='0.00';
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $ttcoluna1=$ttcoluna1+$valor;
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    echo "<td><font color=\"red\" size=4 >".'Result Joinville '."</font></td>\n";
	    echo "</tr>\n";
	    $sql="select cnomefavorecido,(sum(cvalordebitohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=2 and  ccodigocategoriahistorico in (3)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    //Pega Cobrança,Despesa Bancaria,Despesa Operacional
	    $exsql=pg_query($resuljoinville,$sql);
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $ttcoluna1=$ttcoluna1+$valor;
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    $tt=$tt+$ttcoluna1;
	    echo "<td><font color=\"black\" size=4><strong>".'TT'."</td>\n";
	    $ttcoluna1=number_format($ttcoluna1,2,",",".");
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna1."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4><strong>".'Impostos:'."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Result Cdr '."</font></td>\n";
	    echo "</tr>\n";
	    $sql="select cnomefavorecido,(sum(cvalordebitohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=5 and  ccodigocategoriahistorico in (15)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    $exsql=pg_query($resultcdr,$sql);
	    $ttcoluna1='0.00';
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $ttcoluna1=$ttcoluna1+$valor;
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    $tt=$tt+$ttcoluna1;
	    echo "<td><font color=\"black\" size=4><strong>".'TT'."</td>\n";
	    $ttcoluna1=number_format($ttcoluna1,2,",",".");
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna1."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4><strong>".'Funcionários:'."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Result Cdr '."</font></td>\n";
	    echo "</tr>\n";
	    $sql="select cnomefavorecido,(sum(cvalordebitohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=5 and  ccodigocategoriahistorico in (14)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    $exsql=pg_query($resultcdr,$sql);
	    $ttcoluna1='0.00';
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $ttcoluna1=$ttcoluna1+$valor;
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    echo "<td><font color=\"red\" size=4 >".'Result Joinville '."</font></td>\n";
	    echo "</tr>\n";
	    $sql="select cnomefavorecido,(sum(cvalordebitohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=2 and  ccodigocategoriahistorico in (7)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    //Pega Cobrança,Despesa Bancaria,Despesa Operacional
	    $exsql=pg_query($resuljoinville,$sql);
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $ttcoluna1=$ttcoluna1+$valor;
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    $tt=$tt+$ttcoluna1;
	    echo "<td><font color=\"black\" size=4><strong>".'TT'."</td>\n";
	    $ttcoluna1=number_format($ttcoluna1,2,",",".");
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna1."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'Total Das Despesas'."</td>\n";
	    $tt=number_format($tt,2,",",".");
	    echo "<td><font color=\"red\" size=4 ><strong>".$tt."</strong></font></td>\n";
	    echo "</tr>\n";
	    $sql="select (sum(
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemisaidas>='$dtini' and cemisaidas <= '$dtfin' and cempresasaidas in (9,10))-
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas>='$dtini' and cemisaidas <= '$dtfin' and cempresasaidas in (9,10 ))))::numeric (18,2) as venda,
	    (select sum(csaihisotorico*n_ahi_valor_custo_venda) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (9,10))-
	    (select sum(n_ahi_valor_custo_venda*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin'  and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (9,10))::numeric (18,2) as custo";
	    $exsql=pg_query($conc,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $venda1=$rssql['venda'];
	    $custo1=$rssql['custo'];
	    $sql="select (sum(
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemisaidas>='$dtini' and cemisaidas <= '$dtfin' and cempresasaidas in (3,4))-
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas>='$dtini' and cemisaidas <= '$dtfin' and cempresasaidas in (3,4 ))))::numeric (18,2) as venda,
	    (select sum(csaihisotorico*n_ahi_valor_custo_venda) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (3,4))-
	    (select sum(n_ahi_valor_custo_venda*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin'  and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (3,4))::numeric (18,2) as custo";
	    $exsql=pg_query($conj,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $venda2=$rssql['venda'];
	    $custo2=$rssql['custo'];
	    $venda1=$venda1+$venda2;
	    $custo1=$custo1+$custo2;   
	    $dif1=$venda1-$custo1;
	    $venda1=number_format($venda1,2,",",".");
	    $custo1=number_format($custo1,2,",",".");
	    $dif1=number_format($dif1,2,",",".");
	    echo "<td><font color=\"red\" size=4 >".'Venda Bruta'."</font></td>\n";
	    echo "<td>".'R$'.$venda1."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Custo'."</font></td>\n";
	    echo "<td>".'R$'.$custo1."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Despesas'."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'.$tt."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Lucro Bruto'."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'.$dif1."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Percas até '."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'."</strong></font></td>\n";
	    echo "</tr>\n"; 
	    echo "<td><font color=\"red\" size=4 >".'Result Cdr '."</font></td>\n";
	    echo "</tr>\n";
	    $sql="select cnomefavorecido,(sum(cvalorcreditohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=5 and  ccodigocategoriahistorico in (17)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    $exsql=pg_query($resultcdr,$sql);
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    echo "<td><font color=\"red\" size=4 >".'Resultado Liquido '."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".''."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".''."</strong></font></td>\n";
	    echo "</tr>\n";
	    
	    echo "<table border='2' width='20%' bgcolor=#F5F6CE >";
	    echo '<br><br>';
	    echo "<tr><td ><font color=\"black\" size=3><strong>Videira $meses[$mes]/$ano</strong></font></td>"."</tr>";
	    echo "<table border='2' width='50%'  bgcolor=#F6D8CE  >";
	    echo "<tr><td><font color=\"red\" size=3><strong>Operacional</strong></font></td>"."<td><font color=\"black\" size=3><strong></strong></font></td>"."</tr>";
	    echo "<td><font color=\"red\" size=4 >".'Result CDR '."</font></td>\n";
	    echo "</tr>\n";
	    $sql="select cnomefavorecido,(sum(cvalordebitohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=6 and  ccodigocategoriahistorico in (8,9,10)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    //Pega Cobrança,Despesa Bancaria,Despesa Operacional
	    $exsql=pg_query($resultcdr,$sql);
	    $ttcoluna1='0.00';
	    $tt='0.00';
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $ttcoluna1=$ttcoluna1+$valor;
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    echo "<td><font color=\"red\" size=4 >".'Result Videira '."</font></td>\n";
	    echo "</tr>\n";
	    $sql="select cnomefavorecido,(sum(cvalordebitohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=6 and  ccodigocategoriahistorico in (8,9,10)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    //Pega Cobrança,Despesa Bancaria,Despesa Operacional
	    $exsql=pg_query($resultvda,$sql);
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $ttcoluna1=$ttcoluna1+$valor;
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    $tt=$tt+$ttcoluna1;
	    echo "<td><font color=\"black\" size=4><strong>".'TT'."</td>\n";
	    $ttcoluna1=number_format($ttcoluna1,2,",",".");
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna1."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4><strong>".'Impostos:'."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Result Cdr '."</font></td>\n";
	    echo "</tr>\n";
	    $sql="select cnomefavorecido,(sum(cvalordebitohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=6 and  ccodigocategoriahistorico in (15)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    $exsql=pg_query($resultcdr,$sql);
	    $ttcoluna1='0.00';
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $ttcoluna1=$ttcoluna1+$valor;
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    echo "<td><font color=\"red\" size=4 >".'Result Videira '."</font></td>\n";
	    echo "</tr>\n";
	    $sql="select cnomefavorecido,(sum(cvalordebitohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=6 and  ccodigocategoriahistorico in (15)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    $exsql=pg_query($resultvda,$sql);
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $ttcoluna1=$ttcoluna1+$valor;
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    $tt=$tt+$ttcoluna1;
	    echo "<td><font color=\"black\" size=4><strong>".'TT'."</td>\n";
	    $ttcoluna1=number_format($ttcoluna1,2,",",".");
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna1."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4><strong>".'Funcionários:'."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Result Cdr '."</font></td>\n";
	    echo "</tr>\n";
	    $sql="select cnomefavorecido,(sum(cvalordebitohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=6 and  ccodigocategoriahistorico in (14)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    $exsql=pg_query($resultcdr,$sql);
	    $ttcoluna1='0.00';
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $ttcoluna1=$ttcoluna1+$valor;
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    echo "<td><font color=\"red\" size=4 >".'Result Videira '."</font></td>\n";
	    echo "</tr>\n";
	    $sql="select cnomefavorecido,(sum(cvalordebitohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=6 and  ccodigocategoriahistorico in (14)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    $exsql=pg_query($resultvda,$sql);    
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $ttcoluna1=$ttcoluna1+$valor;
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    echo "<td><font color=\"red\" size=4 ><strong>".'Total Das Despesas'."</td>\n";
	    $tt=number_format($tt,2,",",".");
	    echo "<td><font color=\"red\" size=4 ><strong>".$tt."</strong></font></td>\n";
	    echo "</tr>\n";
	    $sql="select (sum(
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemisaidas>='$dtini' and cemisaidas <= '$dtfin' and cempresasaidas in (13,14))-
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas>='$dtini' and cemisaidas <= '$dtfin' and cempresasaidas in (13,14 ))))::numeric (18,2) as venda,
	    (select sum(csaihisotorico*n_ahi_valor_custo_venda) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (13,14))-
	    (select sum(n_ahi_valor_custo_venda*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin'  and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (13,14))::numeric (18,2) as custo";
	    $exsql=pg_query($conc,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $venda1=$rssql['venda'];
	    $custo1=$rssql['custo'];
	    $sql="select (sum(
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemisaidas>='$dtini' and cemisaidas <= '$dtfin' and cempresasaidas in (13,14))-
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas>='$dtini' and cemisaidas <= '$dtfin' and cempresasaidas in (13,14 ))))::numeric (18,2) as venda,
	    (select sum(csaihisotorico*n_ahi_valor_custo_venda) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (13,14))-
	    (select sum(n_ahi_valor_custo_venda*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin'  and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (13,14))::numeric (18,2) as custo";
	    $exsql=pg_query($conv,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $venda2=$rssql['venda'];
	    $custo2=$rssql['custo'];
	    $venda1=$venda1+$venda2;
	    $custo1=$custo1+$custo2;
	    $dif1=$venda1-$custo1;
	    $venda1=number_format($venda1,2,",",".");
	    $custo1=number_format($custo1,2,",",".");
	    $dif1=number_format($dif1,2,",",".");
	    echo "<td><font color=\"red\" size=4 >".'Venda Bruta'."</font></td>\n";
	    echo "<td>".'R$'.$venda1."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Custo'."</font></td>\n";
	    echo "<td>".'R$'.$custo1."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Despesas'."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'.$tt."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Lucro Bruto'."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'.$dif1."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Percas até '."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Result Cdr '."</font></td>\n";
	    echo "</tr>\n";
	    $sql="select cnomefavorecido,(sum(cvalorcreditohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=6 and  ccodigocategoriahistorico in (17)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    $exsql=pg_query($resultcdr,$sql);
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    echo "<td><font color=\"red\" size=4 >".'Result Videira '."</font></td>\n";
	    echo "</tr>\n";
	    $sql="select cnomefavorecido,(sum(cvalorcreditohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=6 and  ccodigocategoriahistorico in (17)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    $exsql=pg_query($resultvda,$sql);
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }   
	    echo "<td><font color=\"red\" size=4 >".'Resultado Liquido '."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".''."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".''."</strong></font></td>\n";
	    echo "</tr>\n";
	    
	    echo "<table border='2' width='20%' bgcolor=#F5F6CE >";
	    echo '<br><br>';
	    echo "<tr><td ><font color=\"black\" size=3><strong>Martello $meses[$mes]/$ano</strong></font></td>"."</tr>";
	    echo "<table border='2' width='50%'  bgcolor=#F6D8CE  >";
	    echo "<tr><td><font color=\"red\" size=3><strong>Operacional</strong></font></td>"."<td><font color=\"black\" size=3><strong></strong></font></td>"."</tr>";
	    echo "<td><font color=\"red\" size=4 >".'Result CDR '."</font></td>\n";
	    echo "</tr>\n";
	    $sql="select cnomefavorecido,(sum(cvalordebitohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=7 and  ccodigocategoriahistorico in (8,9,10)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    //Pega Cobrança,Despesa Bancaria,Despesa Operacional
	    $exsql=pg_query($resultcdr,$sql);
	    $ttcoluna1='0.00';
	    $tt='0.00';
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];	        
	        $ttcoluna1=$ttcoluna1+$valor;
	        if ($valor == null ) {
	        	$valor= '0.00';
	        }
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    echo "<td><font color=\"red\" size=4 >".'Result Videira '."</font></td>\n";
	    echo "</tr>\n";
	    $sql="select cnomefavorecido,(sum(cvalordebitohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=7 and  ccodigocategoriahistorico in (8,9,10)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    //Pega Cobrança,Despesa Bancaria,Despesa Operacional
	    $exsql=pg_query($resultvda,$sql);
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];	        
	        $ttcoluna1=$ttcoluna1+$valor;
	    	if ($valor == null ) {
	        	$valor= '0.00';
	        }	
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    if ($ttcoluna1 == null) {
	    	$ttcoluna1= '0.00';
	    }    
	    $tt=$tt+$ttcoluna1;
	    echo "<td><font color=\"black\" size=4><strong>".'TT'."</td>\n";
	    $ttcoluna1=number_format($ttcoluna1,2,",",".");
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna1."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4><strong>".'Impostos:'."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Result Cdr '."</font></td>\n";
	    echo "</tr>\n";
	    $sql="select cnomefavorecido,(sum(cvalordebitohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=7 and  ccodigocategoriahistorico in (15)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    $exsql=pg_query($resultcdr,$sql);
	    $ttcoluna1='0.00';
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
        	if ($valor == null ) {
        		$valor= '0.00';
	        }
	        $ttcoluna1=$ttcoluna1+$valor;
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    echo "<td><font color=\"red\" size=4 >".'Result Videira '."</font></td>\n";
	    echo "</tr>\n";
	    $sql="select cnomefavorecido,(sum(cvalordebitohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=7 and  ccodigocategoriahistorico in (15)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    $exsql=pg_query($resultvda,$sql);
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
            if ($valor == null ) {
        		$valor= '0.00';
	        }
	        $ttcoluna1=$ttcoluna1+$valor;
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    $tt=$tt+$ttcoluna1;
	    echo "<td><font color=\"black\" size=4><strong>".'TT'."</td>\n";
	    $ttcoluna1=number_format($ttcoluna1,2,",",".");
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna1."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4><strong>".'Funcionários:'."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Result Cdr '."</font></td>\n";
	    echo "</tr>\n";
	    $sql="select cnomefavorecido,(sum(cvalordebitohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=7 and  ccodigocategoriahistorico in (14)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    $exsql=pg_query($resultcdr,$sql);
	    $ttcoluna1='0.00';
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	    	if ($valor == null ) {
        		$valor= '0.00';
	        }
	        $ttcoluna1=$ttcoluna1+$valor;
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    echo "<td><font color=\"red\" size=4 >".'Result Videira '."</font></td>\n";
	    echo "</tr>\n";
	    $sql="select cnomefavorecido,(sum(cvalordebitohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=7 and  ccodigocategoriahistorico in (14)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    $exsql=pg_query($resultvda,$sql);
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	    	if ($valor == null ) {
        		$valor= '0.00';
	        }
	        $ttcoluna1=$ttcoluna1+$valor;
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    $tt=$tt+$ttcoluna1;
	    echo "<td><font color=\"red\" size=4 ><strong>".'Total Das Despesas'."</td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".number_format($tt,2,",",".")."</strong></font></td>\n";
	    echo "</tr>\n";
	    $sql="select (sum(
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemisaidas>='$dtini' and cemisaidas <= '$dtfin' and cempresasaidas in (15,16))-
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas>='$dtini' and cemisaidas <= '$dtfin' and cempresasaidas in (15,16 ))))::numeric (18,2) as venda,
	    (select sum(csaihisotorico*n_ahi_valor_custo_venda) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (15,16))-
	    (select sum(n_ahi_valor_custo_venda*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin'  and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (15,16))::numeric (18,2) as custo";
	    $exsql=pg_query($conc,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $venda1=$rssql['venda'];
	    $custo1=$rssql['custo'];
	    $sql="select (sum(
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemisaidas>='$dtini' and cemisaidas <= '$dtfin' and cempresasaidas in (15,16))-
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas>='$dtini' and cemisaidas <= '$dtfin' and cempresasaidas in (15,16 ))))::numeric (18,2) as venda,
	    (select sum(csaihisotorico*n_ahi_valor_custo_venda) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (15,16))-
	    (select sum(n_ahi_valor_custo_venda*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin'  and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (15,16))::numeric (18,2) as custo";
	    $exsql=pg_query($conv,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $venda2=$rssql['venda'];
	    $custo2=$rssql['custo'];
	    $venda1=$venda1+$venda2;
	    $custo1=$custo1+$custo2;
	    $dif1=$venda1-$custo1;
	    $venda1=number_format($venda1,2,",",".");
	    $custo1=number_format($custo1,2,",",".");
	    $dif1=number_format($dif1,2,",",".");
	    echo "<td><font color=\"red\" size=4 >".'Venda Bruta'."</font></td>\n";
	    echo "<td>".'R$'.$venda1."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Custo'."</font></td>\n";
	    echo "<td>".'R$'.$custo1."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Despesas'."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'.$tt."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Lucro Bruto'."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'.$dif1."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Percas até '."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Result Cdr '."</font></td>\n";
	    echo "</tr>\n";
	    $sql="select cnomefavorecido,(sum(cvalorcreditohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=7 and  ccodigocategoriahistorico in (17)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    $exsql=pg_query($resultcdr,$sql);
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    echo "<td><font color=\"red\" size=4 >".'Result Videira '."</font></td>\n";
	    echo "</tr>\n";
	    $sql="select cnomefavorecido,(sum(cvalorcreditohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=7 and  ccodigocategoriahistorico in (17)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    $exsql=pg_query($resultvda,$sql);
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }   
	    echo "<td><font color=\"red\" size=4 >".'Resultado Liquido '."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".''."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".''."</strong></font></td>\n";
	    echo "</tr>\n";
	    
	    echo "<table border='2' width='20%' bgcolor=#F5F6CE >";
	    echo '<br><br>';
	    echo "<tr><td ><font color=\"black\" size=3><strong>Shop Videira $meses[$mes]/$ano</strong></font></td>"."</tr>";
	    echo "<table border='2' width='50%'  bgcolor=#F6D8CE  >";
	    echo "<tr><td><font color=\"red\" size=3><strong>Operacional</strong></font></td>"."<td><font color=\"black\" size=3><strong></strong></font></td>"."</tr>";
	    echo "<td><font color=\"red\" size=4 >".'Result CDR '."</font></td>\n";
	    echo "</tr>\n";
	    $sql="select cnomefavorecido,(sum(cvalordebitohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=10 and  ccodigocategoriahistorico in (8,9,10)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    //Pega Cobrança,Despesa Bancaria,Despesa Operacional
	    $exsql=pg_query($resultcdr,$sql);
	    $ttcoluna1='0.00';
	    $tt='0.00';
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $ttcoluna1=$ttcoluna1+$valor;
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    echo "<td><font color=\"red\" size=4 >".'Result Videira '."</font></td>\n";
	    echo "</tr>\n";
	    $sql="select cnomefavorecido,(sum(cvalordebitohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=10 and  ccodigocategoriahistorico in (8,9,10)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    //Pega Cobrança,Despesa Bancaria,Despesa Operacional
	    $exsql=pg_query($resultvda,$sql);
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $ttcoluna1=$ttcoluna1+$valor;
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    $tt=$tt+$ttcoluna1;
	    echo "<td><font color=\"black\" size=4><strong>".'TT'."</td>\n";
	    $ttcoluna1=number_format($ttcoluna1,2,",",".");
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna1."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4><strong>".'Impostos:'."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Result Cdr '."</font></td>\n";
	    echo "</tr>\n";
	    $sql="select cnomefavorecido,(sum(cvalordebitohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=10 and  ccodigocategoriahistorico in (15)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    $exsql=pg_query($resultcdr,$sql);
	    $ttcoluna1='0.00';
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $ttcoluna1=$ttcoluna1+$valor;
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    echo "<td><font color=\"red\" size=4 >".'Result Videira '."</font></td>\n";
	    echo "</tr>\n";
	    $sql="select cnomefavorecido,(sum(cvalordebitohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=10 and  ccodigocategoriahistorico in (15)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    $exsql=pg_query($resultvda,$sql);
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $ttcoluna1=$ttcoluna1+$valor;
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    $tt=$tt+$ttcoluna1;
	    echo "<td><font color=\"black\" size=4><strong>".'TT'."</td>\n";
	    $ttcoluna1=number_format($ttcoluna1,2,",",".");
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna1."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4><strong>".'Funcionários:'."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Result Cdr '."</font></td>\n";
	    echo "</tr>\n";
	    $sql="select cnomefavorecido,(sum(cvalordebitohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=10 and  ccodigocategoriahistorico in (14)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    $exsql=pg_query($resultcdr,$sql);
	    $ttcoluna1='0.00';
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $ttcoluna1=$ttcoluna1+$valor;
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    echo "<td><font color=\"red\" size=4 >".'Result Videira '."</font></td>\n";
	    echo "</tr>\n";
	    $sql="select cnomefavorecido,(sum(cvalordebitohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=10 and  ccodigocategoriahistorico in (14)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    $exsql=pg_query($resultvda,$sql);
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $ttcoluna1=$ttcoluna1+$valor;
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    $tt=$tt+$ttcoluna1;
	    echo "<td><font color=\"red\" size=4 ><strong>".'Total Das Despesas'."</td>\n";
	    $tt=number_format($tt,2,",",".");
	    echo "<td><font color=\"red\" size=4 ><strong>".$tt."</strong></font></td>\n";
	    echo "</tr>\n";
	    $sql="select (sum(
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemisaidas>='$dtini' and cemisaidas <= '$dtfin' and cempresasaidas in (17,18))-
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas>='$dtini' and cemisaidas <= '$dtfin' and cempresasaidas in (17,18 ))))::numeric (18,2) as venda,
	    (select sum(csaihisotorico*n_ahi_valor_custo_venda) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (17,18))-
	    (select sum(n_ahi_valor_custo_venda*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin'  and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (17,18))::numeric (18,2) as custo";
	    $exsql=pg_query($conc,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $venda1=$rssql['venda'];
	    $custo1=$rssql['custo'];
	    $sql="select (sum(
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemisaidas>='$dtini' and cemisaidas <= '$dtfin' and cempresasaidas in (17,18))-
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas>='$dtini' and cemisaidas <= '$dtfin' and cempresasaidas in (17,18 ))))::numeric (18,2) as venda,
	    (select sum(csaihisotorico*n_ahi_valor_custo_venda) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (17,18))-
	    (select sum(n_ahi_valor_custo_venda*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin'  and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (17,18))::numeric (18,2) as custo";
	    $exsql=pg_query($conv,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $venda2=$rssql['venda'];
	    $custo2=$rssql['custo'];
	    $venda1=$venda1+$venda2;
	    $custo1=$custo1+$custo2;
	    $dif1=$venda1-$custo1;
	    $venda1=number_format($venda1,2,",",".");
	    $custo1=number_format($custo1,2,",",".");
	    $dif1=number_format($dif1,2,",",".");
	    echo "<td><font color=\"red\" size=4 >".'Venda Bruta'."</font></td>\n";
	    echo "<td>".'R$'.$venda1."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Custo'."</font></td>\n";
	    echo "<td>".'R$'.$custo1."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Despesas'."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'.$tt."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Lucro Bruto'."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'.$dif1."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Percas até '."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Result Cdr '."</font></td>\n";
	    echo "</tr>\n";
	    $sql="select cnomefavorecido,(sum(cvalorcreditohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=10 and  ccodigocategoriahistorico in (17)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    $exsql=pg_query($resultcdr,$sql);
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    echo "<td><font color=\"red\" size=4 >".'Result Videira '."</font></td>\n";
	    echo "</tr>\n";
	    $sql="select cnomefavorecido,(sum(cvalorcreditohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=10 and  ccodigocategoriahistorico in (17)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    $exsql=pg_query($resultvda,$sql);
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }    
	    echo "<td><font color=\"red\" size=4 >".'Resultado Liquido '."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".''."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".''."</strong></font></td>\n";
	    echo "</tr>\n";
	    
	    echo "<table border='2' width='20%' bgcolor=#F5F6CE >";
	    echo "<tr><td ><font color=\"black\" size=3><strong>Shop Masp $meses[$mes]/$ano</strong></font></td>"."</tr>";
	    echo '<br><br>';
	    
	    echo "<table border='2' width='50%' bgcolor=#F6D8CE  >";
	    echo "<tr><td><font color=\"red\" size=3><strong>Operacional</strong></font></td>"."<td><font color=\"black\" size=3><strong></strong></font></td>"."</tr>";
	    $sql="select cnomefavorecido,(sum(cvalordebitohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=8 and  ccodigocategoriahistorico in (8,9,10)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    //Pega Cobrança,Despesa Bancaria,Despesa Operacional
	    $exsql=pg_query($resultcdr,$sql);
	    $ttcoluna1='0.00';
	    $tt='0.00';
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $ttcoluna1=$ttcoluna1+$valor;
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    $tt=$tt+$ttcoluna1;
	    echo "<td><font color=\"black\" size=4><strong>".'TT'."</td>\n";
	    $ttcoluna1=number_format($ttcoluna1,2,",",".");
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna1."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4><strong>".'Impostos:'."</td>\n";
	    echo "</tr>\n";
	    $sql="select cnomefavorecido,(sum(cvalordebitohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=8 and  ccodigocategoriahistorico in (15)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    $exsql=pg_query($resultcdr,$sql);
	    $ttcoluna1='0.00';
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $ttcoluna1=$ttcoluna1+$valor;
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    $tt=$tt+$ttcoluna1;
	    echo "<td><font color=\"black\" size=4><strong>".'TT'."</td>\n";
	    $ttcoluna1=number_format($ttcoluna1,2,",",".");
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna1."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4><strong>".'Funcionários:'."</td>\n";
	    echo "</tr>\n";
	    $sql="select cnomefavorecido,(sum(cvalordebitohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=8 and  ccodigocategoriahistorico in (14)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    $exsql=pg_query($resultcdr,$sql);
	    $ttcoluna1='0.00';
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $ttcoluna1=$ttcoluna1+$valor;
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    $tt=$tt+$ttcoluna1;
	    echo "<td><font color=\"black\" size=4><strong>".'TT'."</td>\n";
	    $ttcoluna1=number_format($ttcoluna1,2,",",".");
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna1."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'Total Das Despesas'."</td>\n";
	    $tt=number_format($tt,2,",",".");
	    echo "<td><font color=\"red\" size=4 ><strong>".$tt."</strong></font></td>\n";
	    echo "</tr>\n";
	    $sql="select (sum(
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemisaidas>='$dtini' and cemisaidas <= '$dtfin' and cempresasaidas in (11,12))-
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas>='$dtini' and cemisaidas <= '$dtfin' and cempresasaidas in (11,12))))::numeric (18,2) as venda,
	    (select sum(cvlqhistorico*csaihisotorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and clinproduto = '108' and cempresasaidas in (11,12))-
	    (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and clinproduto = '108' and cempresasaidas in (11,12))::numeric (18,2) as uniforme,
	    (select sum(csaihisotorico*n_ahi_valor_custo_venda) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (11,12))-
	    (select sum(n_ahi_valor_custo_venda*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin'  and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (11,12))::numeric (18,2) as custo";
	    $exsql=pg_query($conc,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $venda1=$rssql['venda'];
	    $custo1=$rssql['custo'];
	    $dif1=$venda1-$custo1;
	    $venda1=number_format($venda1,2,",",".");
	    $custo1=number_format($custo1,2,",",".");
	    $dif1=number_format($dif1,2,",",".");
	    echo "<td><font color=\"red\" size=4 >".'Venda Bruta'."</font></td>\n";
	    echo "<td>".'R$'.$venda1."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Custo'."</font></td>\n";
	    echo "<td>".'R$'.$custo1."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Despesas'."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'.$tt."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Lucro Bruto'."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'.$dif1."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 >".'Percas até '."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'."</strong></font></td>\n";
	    echo "</tr>\n";
	    $sql="select cnomefavorecido,(sum(cvalorcreditohistorico)) from ahcontas inner join afavorecidos on ccodigofavorecido=ccodigofavorecidohistorico
	    where creferenciahistorico ='$ref' and i_ahc_codigo_departamento=8 and  ccodigocategoriahistorico in (17)
	    GROUP BY cnomefavorecido order by cnomefavorecido " ;
	    $exsql=pg_query($resultcdr,$sql);
	    while ($row = pg_fetch_assoc($exsql)) {
	        $desc=$row['cnomefavorecido'];
	        $valor=$row['sum'];
	        $valor=number_format($valor,2,",",".");
	        echo "<td>".$desc."</td>\n";
	        echo "<td>".'R$'.$valor."</td>\n";
	        echo "</tr>\n";
	    }
	    echo "<td><font color=\"red\" size=4 >".'Resultado Liquido '."</font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".'R$'."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".''."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4 ><strong>".''."</strong></font></td>\n";
	    echo "</tr>\n"; 
	    
	    
	    
	}
if ($base=='D') {
	    echo "<table border='2' width='20%' bgcolor=#F5F6CE >";
	    echo "<tr><td ><font color=\"black\" size=3><strong>Lista De Vendas</strong></font></td>"."</tr>";
	    echo "</table>";
	    echo "<table border='2' width='20%' bgcolor=#01DFD7 >";
	    echo "<tr><td><font color=\"black\" size=3><strong>Vendas $meses[$mes] $ano</strong></font></td>"."</tr>";
	    echo "</table>";
	    echo "<table border='2' width='50%' bgcolor=#F6D8CE >";
	    echo "<tr><td><font color=\"black\" size=3><strong></strong></font></td>"."<td><font color=\"black\" size=3><strong></strong></font></td>".
	         "<td><font color=\"black\" size=3><strong></strong></font></td>"."<td><font color=\"black\" size=3><strong></strong></font></td>"."</tr>";
	    echo "<td><font color=\"black\" size=4><strong>".'Calçados Matriz'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Calçados Filial'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Venda:'."</td>\n";
	    $dtini=$ano.'-'.$mes.'-'.'01';
	    $sql="select (sum(
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemisaidas>='$dtini' and cemisaidas <= '$dataf' and cempresasaidas in (7,8))-
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas>='$dtini' and cemisaidas <= '$dataf' and cempresasaidas in (7,8 ))))::numeric (18,2) as venda,
	    (select sum(cvlqhistorico*csaihisotorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf' and clinproduto = '108' and cempresasaidas in (7,8))-
	    (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf' and clinproduto = '108' and cempresasaidas in (7,8))::numeric (18,2) as uniforme,
	    (select sum(csaihisotorico*n_ahi_valor_custo_venda) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf' and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (7,8))-
	    (select sum(n_ahi_valor_custo_venda*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf'  and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (7,8))::numeric (18,2) as custo";
	    $exsql=pg_query($conc,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $venda1=$rssql['venda'];
	    $custo1=$rssql['custo'];
	    $dif1=$venda1-$custo1;
	    $venda1=number_format($venda1,2,",",".");
	    $custo1=number_format($custo1,2,",",".");
	    $dif1=number_format($dif1,2,",",".");
	    echo "<td>".'R$'.$venda1."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Venda:'."</td>\n";
	    $sql="select (sum(
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemisaidas>='$dtini' and cemisaidas <= '$dataf' and cempresasaidas in (5,6))-
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas>='$dtini' and cemisaidas <= '$dataf' and cempresasaidas in (5,6 ))))::numeric (18,2) as venda,
	    (select sum(cvlqhistorico*csaihisotorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf' and clinproduto = '108' and cempresasaidas in (5,6))-
	    (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf' and clinproduto = '108' and cempresasaidas in (5,6))::numeric (18,2) as uniforme,
	    (select sum(csaihisotorico*n_ahi_valor_custo_venda) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf' and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (5,6))-
	    (select sum(n_ahi_valor_custo_venda*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf'  and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (5,6))::numeric (18,2) as custo";
	    $exsql=pg_query($conc,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $venda2=$rssql['venda'];
	    $custo2=$rssql['custo'];
	    $dif2=$venda2-$custo2;
	    $venda2=number_format($venda2,2,",",".");
	    $custo2=number_format($custo2,2,",",".");
	    $dif2=number_format($dif2,2,",",".");
	    echo "<td>".'R$'.$venda2."</td>\n";    
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Custo:'."</td>\n";
	    echo "<td>".'R$'.$custo1."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Custo:'."</td>\n";
	    echo "<td>".'R$'.$custo2."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Total:'."</td>\n";
	    echo "<td>".'R$'.$dif1."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Total:'."</td>\n";
	    echo "<td>".'R$'.$dif2."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    
	    echo "<td><font color=\"black\" size=4><strong>".'Martello'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Videira'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Venda:'."</td>\n";
	    $dtini=$ano.'-'.$mes.'-'.'01';
	    $sql="select (sum(
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemisaidas>='$dtini' and cemisaidas <= '$dataf' and cempresasaidas in (15,16))-
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas>='$dtini' and cemisaidas <= '$dataf' and cempresasaidas in (15,16 ))))::numeric (18,2) as venda,
	    (select sum(cvlqhistorico*csaihisotorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf' and clinproduto = '108' and cempresasaidas in (15,16))-
	    (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf' and clinproduto = '108' and cempresasaidas in (15,16))::numeric (18,2) as uniforme,
	    (select sum(csaihisotorico*n_ahi_valor_custo_venda) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf' and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (15,16))-
	    (select sum(n_ahi_valor_custo_venda*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf'  and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (15,16))::numeric (18,2) as custo";
	    $exsql=pg_query($conv,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $venda1=$rssql['venda'];
	    $custo1=$rssql['custo'];
	    $dif1=$venda1-$custo1;
	    $venda1=number_format($venda1,2,",",".");
	    $custo1=number_format($custo1,2,",",".");
	    $dif1=number_format($dif1,2,",",".");
	    echo "<td>".'R$'.$venda1."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Venda:'."</td>\n";
	    $sql="select (sum(
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemisaidas>='$dtini' and cemisaidas <= '$dataf' and cempresasaidas in (13,14))-
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas>='$dtini' and cemisaidas <= '$dataf' and cempresasaidas in (13,14 ))))::numeric (18,2) as venda,
	    (select sum(cvlqhistorico*csaihisotorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf' and clinproduto = '108' and cempresasaidas in (13,14))-
	    (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf' and clinproduto = '108' and cempresasaidas in (13,14))::numeric (18,2) as uniforme,
	    (select sum(csaihisotorico*n_ahi_valor_custo_venda) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf' and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (13,14))-
	    (select sum(n_ahi_valor_custo_venda*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf'  and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (13,14))::numeric (18,2) as custo";
	    $exsql=pg_query($conv,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $venda2=$rssql['venda'];
	    $custo2=$rssql['custo'];
	    $dif2=$venda2-$custo2;
	    $venda2=number_format($venda2,2,",",".");
	    $custo2=number_format($custo2,2,",",".");
	    $dif2=number_format($dif2,2,",",".");
	    echo "<td>".'R$'.$venda2."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Custo:'."</td>\n";
	    echo "<td>".'R$'.$custo1."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Custo:'."</td>\n";
	    echo "<td>".'R$'.$custo2."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Total:'."</td>\n";
	    echo "<td>".'R$'.$dif1."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Total:'."</td>\n";
	    echo "<td>".'R$'.$dif2."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	
	    echo "<td><font color=\"black\" size=4><strong>".'Esportes'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Shop Masp'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Venda:'."</td>\n";
	    $dtini=$ano.'-'.$mes.'-'.'01';
	    $sql="select (sum(
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemisaidas>='$dtini' and cemisaidas <= '$dataf' and cempresasaidas in (3,4))-
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas>='$dtini' and cemisaidas <= '$dataf' and cempresasaidas in (3,4 ))))::numeric (18,2) as venda,
	    (select sum(cvlqhistorico*csaihisotorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf' and clinproduto = '108' and cempresasaidas in (3,4))-
	    (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf' and clinproduto = '108' and cempresasaidas in (3,4))::numeric (18,2) as uniforme,
	    (select sum(csaihisotorico*n_ahi_valor_custo_venda) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf' and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (3,4))-
	    (select sum(n_ahi_valor_custo_venda*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf'  and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (3,4))::numeric (18,2) as custo";
	    $exsql=pg_query($conc,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $venda1=$rssql['venda'];
	    $custo1=$rssql['custo'];
	    $dif1=$venda1-$custo1;
	    $venda1=number_format($venda1,2,",",".");
	    $custo1=number_format($custo1,2,",",".");
	    $dif1=number_format($dif1,2,",",".");
	    echo "<td>".'R$'.$venda1."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Venda:'."</td>\n";
	    $sql="select (sum(
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemisaidas>='$dtini' and cemisaidas <= '$dataf' and cempresasaidas in (11,12))-
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas>='$dtini' and cemisaidas <= '$dataf' and cempresasaidas in (11,12 ))))::numeric (18,2) as venda,
	    (select sum(cvlqhistorico*csaihisotorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf' and clinproduto = '108' and cempresasaidas in (11,12))-
	    (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf' and clinproduto = '108' and cempresasaidas in (11,12))::numeric (18,2) as uniforme,
	    (select sum(csaihisotorico*n_ahi_valor_custo_venda) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf' and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (11,12))-
	    (select sum(n_ahi_valor_custo_venda*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf'  and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (11,12))::numeric (18,2) as custo";
	    $exsql=pg_query($conc,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $venda2=$rssql['venda'];
	    $custo2=$rssql['custo'];
	    $dif2=$venda2-$custo2;
	    $venda2=number_format($venda2,2,",",".");
	    $custo2=number_format($custo2,2,",",".");
	    $dif2=number_format($dif2,2,",",".");
	    echo "<td>".'R$'.$venda2."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Custo:'."</td>\n";
	    echo "<td>".'R$'.$custo1."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Custo:'."</td>\n";
	    echo "<td>".'R$'.$custo2."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Total:'."</td>\n";
	    echo "<td>".'R$'.$dif1."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Total:'."</td>\n";
	    echo "<td>".'R$'.$dif2."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    
	    echo "<td><font color=\"black\" size=4><strong>".'Confecções Matriz'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Brinquedos'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Venda:'."</td>\n";
	    $dtini=$ano.'-'.$mes.'-'.'01';
	    $sql="select (sum( (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemisaidas>='$dtini' and cemisaidas <= '$dataf' and cempresasaidas in (1,2))- 
	(select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas>='$dtini' and cemisaidas <= '$dataf' and cempresasaidas in (1,2 ))))::numeric (18,2) as venda, 
	(select sum(cvlqhistorico*csaihisotorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf' and clinproduto = '108' and cempresasaidas in (1,2))- 
	(select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf' and clinproduto = '108' and cempresasaidas in (1,2))::numeric (18,2) as uniforme,
	(select sum(cvlqhistorico*csaihisotorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf' and clinproduto = '13' and cempresasaidas in (1,2))- 
	(select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf' and clinproduto = '13' and cempresasaidas in (1,2))::numeric (18,2) as brinquedos,
	(select sum(csaihisotorico*n_ahi_valor_custo_venda) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf' and clinproduto = 13 and cempresasaidas in (1,2))- 
	(select sum(n_ahi_valor_custo_venda*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf' and clinproduto = 13  and cempresasaidas in (1,2))::numeric (18,2) as custobri,
	(select sum(csaihisotorico*n_ahi_valor_custo_venda) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf' and clinproduto = 108  and cempresasaidas in (1,2))- 
	(select sum(n_ahi_valor_custo_venda*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf' and clinproduto = 108  and cempresasaidas in (1,2))::numeric (18,2) as custouni, 
	(select sum(csaihisotorico*n_ahi_valor_custo_venda) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf' and clinproduto <> 108 and clinproduto <> 13 and clinproduto <> 13 and cempresasaidas in (1,2))- 
	(select sum(n_ahi_valor_custo_venda*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf' and clinproduto <> 108 and clinproduto <> 13 and clinproduto <> 13 and cempresasaidas in (1,2))::numeric (18,2) as custo";    
	    $exsql=pg_query($conc,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $venda1=$rssql['venda'];
	    $custo1=$rssql['custo'];
	    $uniforme=$rssql['uniforme'];
	    $cuniforme=$rssql['custouni'];
	    $brinquedos=$rssql['brinquedos'];
	    $cubrinquedos=$rssql['custobri'];
	    $venda1=$venda1-$uniforme-$brinquedos;
	    $dif1=$venda1-$custo1;
	    $venda1=number_format($venda1,2,",",".");
	    $custo1=number_format($custo1,2,",",".");
	    $dif1=number_format($dif1,2,",",".");
	    echo "<td>".'R$'.$venda1."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Venda:'."</td>\n";  
	    $venda2=$brinquedos;
	    $custo2=$cubrinquedos;
	    $dif2=$venda2-$custo2;
	    $venda2=number_format($venda2,2,",",".");
	    $custo2=number_format($custo2,2,",",".");
	    $dif2=number_format($dif2,2,",",".");
	    echo "<td>".'R$'.$venda2."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Custo:'."</td>\n";
	    echo "<td>".'R$'.$custo1."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Custo:'."</td>\n";
	    echo "<td>".'R$'.$custo2."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Total:'."</td>\n";
	    echo "<td>".'R$'.$dif1."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Total:'."</td>\n";
	    echo "<td>".'R$'.$dif2."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    
	    echo "<td><font color=\"black\" size=4><strong>".'Confecções Filial'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"Red\" size=4><strong>".'Uniformes'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Venda:'."</td>\n";
	    $sql="select (sum(
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemisaidas>='$dtini' and cemisaidas <= '$dataf' and cempresasaidas in (3,4))-
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas>='$dtini' and cemisaidas <= '$dataf' and cempresasaidas in (3,4 ))))::numeric (18,2) as venda,
	    (select sum(cvlqhistorico*csaihisotorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf' and clinproduto = '108' and cempresasaidas in (3,4))-
	    (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf' and clinproduto = '108' and cempresasaidas in (3,4))::numeric (18,2) as uniforme,
	    (select sum(csaihisotorico*n_ahi_valor_custo_venda) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf' and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (3,4))-
	    (select sum(n_ahi_valor_custo_venda*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf'  and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (3,4))::numeric (18,2) as custo";
	    $exsql=pg_query($conj,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $venda1=$rssql['venda'];
	    $custo1=$rssql['custo'];
	    $dif1=$venda1-$custo1;
	    $venda1=number_format($venda1,2,",",".");
	    $custo1=number_format($custo1,2,",",".");
	    $dif1=number_format($dif1,2,",",".");
	    echo "<td>".'R$'.$venda1."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Venda:'."</td>\n";
	    
	    $venda2=$uniforme;
	    $custo2=$cuniforme;
	    $dif2=$venda2-$custo2;
	    $venda2=number_format($venda2,2,",",".");
	    $custo2=number_format($custo2,2,",",".");
	    $dif2=number_format($dif2,2,",",".");
	    echo "<td>".'R$'.$venda2."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Custo:'."</td>\n";
	    echo "<td>".'R$'.$custo1."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Custo:'."</td>\n";
	    echo "<td>".'R$'.$custo2."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Total:'."</td>\n";
	    echo "<td>".'R$'.$dif1."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Total:'."</td>\n";
	    echo "<td>".'R$'.$dif2."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"red \" size=4><strong>".'COM UNIFORME'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'TT Venda:'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'TT Custo:'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";   
	
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Lages'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Uniforme'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Venda:'."</td>\n";
	    $dtini=$ano.'-'.$mes.'-'.'01';
	    $sql="select (sum( (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemisaidas>='$dtini' and cemisaidas <= '$dataf' and cempresasaidas in (1,2))-
	(select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas>='$dtini' and cemisaidas <= '$dataf' and cempresasaidas in (1,2 ))))::numeric (18,2) as venda,
	(select sum(cvlqhistorico*csaihisotorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf' and clinproduto = '108' and cempresasaidas in (1,2))-
	(select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf' and clinproduto = '108' and cempresasaidas in (1,2))::numeric (18,2) as uniforme,
	(select sum(cvlqhistorico*csaihisotorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf' and clinproduto = '13' and cempresasaidas in (1,2))-
	(select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf' and clinproduto = '13' and cempresasaidas in (1,2))::numeric (18,2) as brinquedos,
	(select sum(csaihisotorico*n_ahi_valor_custo_venda) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf' and clinproduto = 13 and cempresasaidas in (1,2))-
	(select sum(n_ahi_valor_custo_venda*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf' and clinproduto = 13  and cempresasaidas in (1,2))::numeric (18,2) as custobri,
	(select sum(csaihisotorico*n_ahi_valor_custo_venda) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf' and clinproduto = 108  and cempresasaidas in (1,2))-
	(select sum(n_ahi_valor_custo_venda*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf' and clinproduto = 108  and cempresasaidas in (1,2))::numeric (18,2) as custouni,
	(select sum(csaihisotorico*n_ahi_valor_custo_venda) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf' and clinproduto <> 108 and clinproduto <> 13 and clinproduto <> 13 and cempresasaidas in (1,2))-
	(select sum(n_ahi_valor_custo_venda*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf' and clinproduto <> 108 and clinproduto <> 13 and clinproduto <> 13 and cempresasaidas in (1,2))::numeric (18,2) as custo";
	    $exsql=pg_query($conl,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $venda1=$rssql['venda'];
	    $custo1=$rssql['custo'];
	    $uniforme=$rssql['uniforme'];
	    $cuniforme=$rssql['custouni'];
	    $brinquedos=$rssql['brinquedos'];
	    $cubrinquedos=$rssql['custobri'];
	    $venda1=$venda1-$uniforme-$brinquedos;
	    $dif1=$venda1-$custo1;
	    $venda1=number_format($venda1,2,",",".");
	    $custo1=number_format($custo1,2,",",".");
	    $dif1=number_format($dif1,2,",",".");
	    echo "<td>".'R$'.$venda1."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Venda:'."</td>\n";
	    $venda2=$uniforme;
	    $custo2=$cuniforme;
	    $dif2=$venda2-$custo2;
	    $venda2=number_format($venda2,2,",",".");
	    $custo2=number_format($custo2,2,",",".");
	    $dif2=number_format($dif2,2,",",".");
	    echo "<td>".'R$'.$venda2."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Custo:'."</td>\n";
	    echo "<td>".'R$'.$custo1."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Custo:'."</td>\n";
	    echo "<td>".'R$'.$custo2."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Total:'."</td>\n";
	    echo "<td>".'R$'.$dif1."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Total:'."</td>\n";
	    echo "<td>".'R$'.$dif2."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    
	    echo "<td><font color=\"black\" size=4><strong>".'Atacadão Cdr'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Atacadão Lages'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Venda:'."</td>\n";    
	    $sql="select (sum(
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemisaidas>='$dtini' and cemisaidas <= '$dataf' and cempresasaidas in (1,2))-
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas>='$dtini' and cemisaidas <= '$dataf' and cempresasaidas in (1,2 ))))::numeric (18,2) as venda,
	    (select sum(cvlqhistorico*csaihisotorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf' and clinproduto = '108' and cempresasaidas in (1,2))-
	    (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf' and clinproduto = '108' and cempresasaidas in (1,2))::numeric (18,2) as uniforme,
	    (select sum(csaihisotorico*n_ahi_valor_custo_venda) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf' and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (1,2))-
	    (select sum(n_ahi_valor_custo_venda*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf'  and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (1,2))::numeric (18,2) as custo";
	    $exsql=pg_query($conj,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $venda1=$rssql['venda'];
	    $custo1=$rssql['custo'];
	    $dif1=$venda1-$custo1;
	    $venda1=number_format($venda1,2,",",".");
	    $custo1=number_format($custo1,2,",",".");
	    $dif1=number_format($dif1,2,",",".");
	    echo "<td>".'R$'.$venda1."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Venda:'."</td>\n";
	    $sql="select (sum(
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemisaidas>='$dtini' and cemisaidas <= '$dataf' and cempresasaidas in (3,4))-
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas>='$dtini' and cemisaidas <= '$dataf' and cempresasaidas in (3,4 ))))::numeric (18,2) as venda,
	    (select sum(cvlqhistorico*csaihisotorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf' and clinproduto = '108' and cempresasaidas in (3,4))-
	    (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf' and clinproduto = '108' and cempresasaidas in (3,4))::numeric (18,2) as uniforme,
	    (select sum(csaihisotorico*n_ahi_valor_custo_venda) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf' and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (3,4))-
	    (select sum(n_ahi_valor_custo_venda*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dataf'  and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (3,4))::numeric (18,2) as custo";
	    $exsql=pg_query($conl,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $venda2=$rssql['venda'];
	    $custo2=$rssql['custo'];
	    $dif2=$venda2-$custo2;
	    $venda2=number_format($venda2,2,",",".");
	    $custo2=number_format($custo2,2,",",".");
	    $dif2=number_format($dif2,2,",",".");
	    echo "<td>".'R$'.$venda2."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Custo:'."</td>\n";
	    echo "<td>".'R$'.$custo1."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Custo:'."</td>\n";
	    echo "<td>".'R$'.$custo2."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Total:'."</td>\n";
	    echo "<td>".'R$'.$dif1."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Total:'."</td>\n";
	    echo "<td>".'R$'.$dif2."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Todas As Lojas'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"red \" size=4><strong>".'COM UNIFORME'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'TT Venda'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'TT Custo'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Total'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'tt Calçados'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"red \" size=4><strong>".'tt Confecções'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'tt videira'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"red \" size=4><strong>".'tt lages'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"red \" size=4><strong>".'Shop Videira'."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'tt esportes'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"red \" size=4><strong>".'tt atacadao'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"red \" size=4><strong>".'ataca lages'."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'brinquedos'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"red \" size=4><strong>".'tt uniforme'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"red \" size=4><strong>".'feirão  lages'."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    echo "<table border='2' width='20%' bgcolor=#F5F6CE >";
	    echo "<tr><td ><font color=\"black\" size=3><strong>Lista De Vendas</strong></font></td>"."</tr>";
	    echo "</table>";
	    echo "<table border='2' width='20%' bgcolor=#01DFD7 >";
	    echo "<tr><td><font color=\"black\" size=3><strong>Vendas $meses[$mes] $anoant</strong></font></td>"."</tr>";
	    echo "</table>";
	    echo "<table border='2' width='50%' bgcolor=#F6D8CE >";
	    echo "<tr><td><font color=\"black\" size=3><strong></strong></font></td>"."<td><font color=\"black\" size=3><strong></strong></font></td>".
	        "<td><font color=\"black\" size=3><strong></strong></font></td>"."<td><font color=\"black\" size=3><strong></strong></font></td>"."</tr>";
	    echo "<td><font color=\"black\" size=4><strong>".'Calçados Matriz'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Calçados Filial'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Venda:'."</td>\n";
	    $dtini=$anoant.'-'.$mes.'-'.'01';
	    $sql="select (sum(
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemisaidas>='$dtini' and cemisaidas <= '$datafant' and cempresasaidas in (7,8))-
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas>='$dtini' and cemisaidas <= '$datafant' and cempresasaidas in (7,8 ))))::numeric (18,2) as venda,
	    (select sum(cvlqhistorico*csaihisotorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant' and clinproduto = '108' and cempresasaidas in (7,8))-
	    (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant' and clinproduto = '108' and cempresasaidas in (7,8))::numeric (18,2) as uniforme,
	    (select sum(csaihisotorico*n_ahi_valor_custo_venda) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant' and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (7,8))-
	    (select sum(n_ahi_valor_custo_venda*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant'  and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (7,8))::numeric (18,2) as custo";
	    $exsql=pg_query($conc,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $venda1=$rssql['venda'];
	    $custo1=$rssql['custo'];
	    $dif1=$venda1-$custo1;
	    $venda1=number_format($venda1,2,",",".");
	    $custo1=number_format($custo1,2,",",".");
	    $dif1=number_format($dif1,2,",",".");
	    echo "<td>".'R$'.$venda1."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Venda:'."</td>\n";
	    $sql="select (sum(
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemisaidas>='$dtini' and cemisaidas <= '$datafant' and cempresasaidas in (5,6))-
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas>='$dtini' and cemisaidas <= '$datafant' and cempresasaidas in (5,6 ))))::numeric (18,2) as venda,
	    (select sum(cvlqhistorico*csaihisotorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant' and clinproduto = '108' and cempresasaidas in (5,6))-
	    (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant' and clinproduto = '108' and cempresasaidas in (5,6))::numeric (18,2) as uniforme,
	    (select sum(csaihisotorico*n_ahi_valor_custo_venda) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant' and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (5,6))-
	    (select sum(n_ahi_valor_custo_venda*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant'  and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (5,6))::numeric (18,2) as custo";
	    $exsql=pg_query($conc,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $venda2=$rssql['venda'];
	    $custo2=$rssql['custo'];
	    $dif2=$venda2-$custo2;
	    $venda2=number_format($venda2,2,",",".");
	    $custo2=number_format($custo2,2,",",".");
	    $dif2=number_format($dif2,2,",",".");
	    echo "<td>".'R$'.$venda2."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Custo:'."</td>\n";
	    echo "<td>".'R$'.$custo1."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Custo:'."</td>\n";
	    echo "<td>".'R$'.$custo2."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Total:'."</td>\n";
	    echo "<td>".'R$'.$dif1."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Total:'."</td>\n";
	    echo "<td>".'R$'.$dif2."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    
	    echo "<td><font color=\"black\" size=4><strong>".'Martello'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Videira'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Venda:'."</td>\n";
	    $dtini=$anoant.'-'.$mes.'-'.'01';
	    $sql="select (sum(
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemisaidas>='$dtini' and cemisaidas <= '$datafant' and cempresasaidas in (15,16))-
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas>='$dtini' and cemisaidas <= '$datafant' and cempresasaidas in (15,16 ))))::numeric (18,2) as venda,
	    (select sum(cvlqhistorico*csaihisotorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant' and clinproduto = '108' and cempresasaidas in (15,16))-
	    (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant' and clinproduto = '108' and cempresasaidas in (15,16))::numeric (18,2) as uniforme,
	    (select sum(csaihisotorico*n_ahi_valor_custo_venda) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant' and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (15,16))-
	    (select sum(n_ahi_valor_custo_venda*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant'  and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (15,16))::numeric (18,2) as custo";
	    $exsql=pg_query($conv,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $venda1=$rssql['venda'];
	    $custo1=$rssql['custo'];
	    $dif1=$venda1-$custo1;
	    $venda1=number_format($venda1,2,",",".");
	    $custo1=number_format($custo1,2,",",".");
	    $dif1=number_format($dif1,2,",",".");
	    echo "<td>".'R$'.$venda1."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Venda:'."</td>\n";
	    $sql="select (sum(
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemisaidas>='$dtini' and cemisaidas <= '$datafant' and cempresasaidas in (13,14))-
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas>='$dtini' and cemisaidas <= '$datafant' and cempresasaidas in (13,14 ))))::numeric (18,2) as venda,
	    (select sum(cvlqhistorico*csaihisotorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant' and clinproduto = '108' and cempresasaidas in (13,14))-
	    (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant' and clinproduto = '108' and cempresasaidas in (13,14))::numeric (18,2) as uniforme,
	    (select sum(csaihisotorico*n_ahi_valor_custo_venda) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant' and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (13,14))-
	    (select sum(n_ahi_valor_custo_venda*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant'  and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (13,14))::numeric (18,2) as custo";
	    $exsql=pg_query($conv,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $venda2=$rssql['venda'];
	    $custo2=$rssql['custo'];
	    $dif2=$venda2-$custo2;
	    $venda2=number_format($venda2,2,",",".");
	    $custo2=number_format($custo2,2,",",".");
	    $dif2=number_format($dif2,2,",",".");
	    echo "<td>".'R$'.$venda2."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Custo:'."</td>\n";
	    echo "<td>".'R$'.$custo1."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Custo:'."</td>\n";
	    echo "<td>".'R$'.$custo2."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Total:'."</td>\n";
	    echo "<td>".'R$'.$dif1."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Total:'."</td>\n";
	    echo "<td>".'R$'.$dif2."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    
	    echo "<td><font color=\"black\" size=4><strong>".'Esportes'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Shop Masp'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Venda:'."</td>\n";
	    $dtini=$anoant.'-'.$mes.'-'.'01';
	    $sql="select (sum(
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemisaidas>='$dtini' and cemisaidas <= '$datafant' and cempresasaidas in (3,4))-
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas>='$dtini' and cemisaidas <= '$datafant' and cempresasaidas in (3,4 ))))::numeric (18,2) as venda,
	    (select sum(cvlqhistorico*csaihisotorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant' and clinproduto = '108' and cempresasaidas in (3,4))-
	    (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant' and clinproduto = '108' and cempresasaidas in (3,4))::numeric (18,2) as uniforme,
	    (select sum(csaihisotorico*n_ahi_valor_custo_venda) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant' and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (3,4))-
	    (select sum(n_ahi_valor_custo_venda*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant'  and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (3,4))::numeric (18,2) as custo";
	    $exsql=pg_query($conc,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $venda1=$rssql['venda'];
	    $custo1=$rssql['custo'];
	    $dif1=$venda1-$custo1;
	    $venda1=number_format($venda1,2,",",".");
	    $custo1=number_format($custo1,2,",",".");
	    $dif1=number_format($dif1,2,",",".");
	    echo "<td>".'R$'.$venda1."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Venda:'."</td>\n";
	    $sql="select (sum(
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemisaidas>='$dtini' and cemisaidas <= '$datafant' and cempresasaidas in (11,12))-
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas>='$dtini' and cemisaidas <= '$datafant' and cempresasaidas in (11,12 ))))::numeric (18,2) as venda,
	    (select sum(cvlqhistorico*csaihisotorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant' and clinproduto = '108' and cempresasaidas in (11,12))-
	    (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant' and clinproduto = '108' and cempresasaidas in (11,12))::numeric (18,2) as uniforme,
	    (select sum(csaihisotorico*n_ahi_valor_custo_venda) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant' and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (11,12))-
	    (select sum(n_ahi_valor_custo_venda*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant'  and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (11,12))::numeric (18,2) as custo";
	    $exsql=pg_query($conc,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $venda2=$rssql['venda'];
	    $custo2=$rssql['custo'];
	    $dif2=$venda2-$custo2;
	    $venda2=number_format($venda2,2,",",".");
	    $custo2=number_format($custo2,2,",",".");
	    $dif2=number_format($dif2,2,",",".");
	    echo "<td>".'R$'.$venda2."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Custo:'."</td>\n";
	    echo "<td>".'R$'.$custo1."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Custo:'."</td>\n";
	    echo "<td>".'R$'.$custo2."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Total:'."</td>\n";
	    echo "<td>".'R$'.$dif1."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Total:'."</td>\n";
	    echo "<td>".'R$'.$dif2."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    
	    echo "<td><font color=\"black\" size=4><strong>".'Confecções Matriz'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Brinquedos'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Venda:'."</td>\n";
	    $dtini=$anoant.'-'.$mes.'-'.'01';
	    $sql="select (sum( (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemisaidas>='$dtini' and cemisaidas <= '$datafant' and cempresasaidas in (1,2))-
	(select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas>='$dtini' and cemisaidas <= '$datafant' and cempresasaidas in (1,2 ))))::numeric (18,2) as venda,
	(select sum(cvlqhistorico*csaihisotorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant' and clinproduto = '108' and cempresasaidas in (1,2))-
	(select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant' and clinproduto = '108' and cempresasaidas in (1,2))::numeric (18,2) as uniforme,
	(select sum(cvlqhistorico*csaihisotorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant' and clinproduto = '13' and cempresasaidas in (1,2))-
	(select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant' and clinproduto = '13' and cempresasaidas in (1,2))::numeric (18,2) as brinquedos,
	(select sum(csaihisotorico*n_ahi_valor_custo_venda) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant' and clinproduto = 13 and cempresasaidas in (1,2))-
	(select sum(n_ahi_valor_custo_venda*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant' and clinproduto = 13  and cempresasaidas in (1,2))::numeric (18,2) as custobri,
	(select sum(csaihisotorico*n_ahi_valor_custo_venda) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant' and clinproduto = 108  and cempresasaidas in (1,2))-
	(select sum(n_ahi_valor_custo_venda*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant' and clinproduto = 108  and cempresasaidas in (1,2))::numeric (18,2) as custouni,
	(select sum(csaihisotorico*n_ahi_valor_custo_venda) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant' and clinproduto <> 108 and clinproduto <> 13 and clinproduto <> 13 and cempresasaidas in (1,2))-
	(select sum(n_ahi_valor_custo_venda*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant' and clinproduto <> 108 and clinproduto <> 13 and clinproduto <> 13 and cempresasaidas in (1,2))::numeric (18,2) as custo";
	    $exsql=pg_query($conc,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $venda1=$rssql['venda'];
	    $custo1=$rssql['custo'];
	    $uniforme=$rssql['uniforme'];
	    $cuniforme=$rssql['custouni'];
	    $brinquedos=$rssql['brinquedos'];
	    $cubrinquedos=$rssql['custobri'];
	    $venda1=$venda1-$uniforme-$brinquedos;
	    $dif1=$venda1-$custo1;
	    $venda1=number_format($venda1,2,",",".");
	    $custo1=number_format($custo1,2,",",".");
	    $dif1=number_format($dif1,2,",",".");
	    echo "<td>".'R$'.$venda1."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Venda:'."</td>\n";
	    $venda2=$brinquedos;
	    $custo2=$cubrinquedos;
	    $dif2=$venda2-$custo2;
	    $venda2=number_format($venda2,2,",",".");
	    $custo2=number_format($custo2,2,",",".");
	    $dif2=number_format($dif2,2,",",".");
	    echo "<td>".'R$'.$venda2."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Custo:'."</td>\n";
	    echo "<td>".'R$'.$custo1."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Custo:'."</td>\n";
	    echo "<td>".'R$'.$custo2."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Total:'."</td>\n";
	    echo "<td>".'R$'.$dif1."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Total:'."</td>\n";
	    echo "<td>".'R$'.$dif2."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    
	    echo "<td><font color=\"black\" size=4><strong>".'Confecções Filial'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"Red\" size=4><strong>".'Uniformes'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Venda:'."</td>\n";
	    $sql="select (sum(
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemisaidas>='$dtini' and cemisaidas <= '$datafant' and cempresasaidas in (3,4))-
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas>='$dtini' and cemisaidas <= '$datafant' and cempresasaidas in (3,4 ))))::numeric (18,2) as venda,
	    (select sum(cvlqhistorico*csaihisotorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant' and clinproduto = '108' and cempresasaidas in (3,4))-
	    (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant' and clinproduto = '108' and cempresasaidas in (3,4))::numeric (18,2) as uniforme,
	    (select sum(csaihisotorico*n_ahi_valor_custo_venda) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant' and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (3,4))-
	    (select sum(n_ahi_valor_custo_venda*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant'  and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (3,4))::numeric (18,2) as custo";
	    $exsql=pg_query($conj,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $venda1=$rssql['venda'];
	    $custo1=$rssql['custo'];
	    $dif1=$venda1-$custo1;
	    $venda1=number_format($venda1,2,",",".");
	    $custo1=number_format($custo1,2,",",".");
	    $dif1=number_format($dif1,2,",",".");
	    echo "<td>".'R$'.$venda1."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Venda:'."</td>\n";
	    
	    $venda2=$uniforme;
	    $custo2=$cuniforme;
	    $dif2=$venda2-$custo2;
	    $venda2=number_format($venda2,2,",",".");
	    $custo2=number_format($custo2,2,",",".");
	    $dif2=number_format($dif2,2,",",".");
	    echo "<td>".'R$'.$venda2."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Custo:'."</td>\n";
	    echo "<td>".'R$'.$custo1."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Custo:'."</td>\n";
	    echo "<td>".'R$'.$custo2."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Total:'."</td>\n";
	    echo "<td>".'R$'.$dif1."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Total:'."</td>\n";
	    echo "<td>".'R$'.$dif2."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"red \" size=4><strong>".'COM UNIFORME'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'TT Venda:'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'TT Custo:'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Lages'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Uniforme'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Venda:'."</td>\n";
	    $dtini=$anoant.'-'.$mes.'-'.'01';
	    $sql="select (sum( (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemisaidas>='$dtini' and cemisaidas <= '$datafant' and cempresasaidas in (1,2))-
	(select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas>='$dtini' and cemisaidas <= '$datafant' and cempresasaidas in (1,2 ))))::numeric (18,2) as venda,
	(select sum(cvlqhistorico*csaihisotorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant' and clinproduto = '108' and cempresasaidas in (1,2))-
	(select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant' and clinproduto = '108' and cempresasaidas in (1,2))::numeric (18,2) as uniforme,
	(select sum(cvlqhistorico*csaihisotorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant' and clinproduto = '13' and cempresasaidas in (1,2))-
	(select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant' and clinproduto = '13' and cempresasaidas in (1,2))::numeric (18,2) as brinquedos,
	(select sum(csaihisotorico*n_ahi_valor_custo_venda) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant' and clinproduto = 13 and cempresasaidas in (1,2))-
	(select sum(n_ahi_valor_custo_venda*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant' and clinproduto = 13  and cempresasaidas in (1,2))::numeric (18,2) as custobri,
	(select sum(csaihisotorico*n_ahi_valor_custo_venda) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant' and clinproduto = 108  and cempresasaidas in (1,2))-
	(select sum(n_ahi_valor_custo_venda*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant' and clinproduto = 108  and cempresasaidas in (1,2))::numeric (18,2) as custouni,
	(select sum(csaihisotorico*n_ahi_valor_custo_venda) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant' and clinproduto <> 108 and clinproduto <> 13 and clinproduto <> 13 and cempresasaidas in (1,2))-
	(select sum(n_ahi_valor_custo_venda*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant' and clinproduto <> 108 and clinproduto <> 13 and clinproduto <> 13 and cempresasaidas in (1,2))::numeric (18,2) as custo";
	    $exsql=pg_query($conl,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $venda1=$rssql['venda'];
	    $custo1=$rssql['custo'];
	    $uniforme=$rssql['uniforme'];
	    $cuniforme=$rssql['custouni'];
	    $brinquedos=$rssql['brinquedos'];
	    $cubrinquedos=$rssql['custobri'];
	    $venda1=$venda1-$uniforme-$brinquedos;
	    $dif1=$venda1-$custo1;
	    $venda1=number_format($venda1,2,",",".");
	    $custo1=number_format($custo1,2,",",".");
	    $dif1=number_format($dif1,2,",",".");
	    echo "<td>".'R$'.$venda1."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Venda:'."</td>\n";
	    $venda2=$uniforme;
	    $custo2=$cuniforme;
	    $dif2=$venda2-$custo2;
	    $venda2=number_format($venda2,2,",",".");
	    $custo2=number_format($custo2,2,",",".");
	    $dif2=number_format($dif2,2,",",".");
	    echo "<td>".'R$'.$venda2."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Custo:'."</td>\n";
	    echo "<td>".'R$'.$custo1."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Custo:'."</td>\n";
	    echo "<td>".'R$'.$custo2."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Total:'."</td>\n";
	    echo "<td>".'R$'.$dif1."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Total:'."</td>\n";
	    echo "<td>".'R$'.$dif2."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    
	    echo "<td><font color=\"black\" size=4><strong>".'Atacadão Cdr'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Atacadão Lages'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Venda:'."</td>\n";
	    $sql="select (sum(
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemisaidas>='$dtini' and cemisaidas <= '$datafant' and cempresasaidas in (1,2))-
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas>='$dtini' and cemisaidas <= '$datafant' and cempresasaidas in (1,2 ))))::numeric (18,2) as venda,
	    (select sum(cvlqhistorico*csaihisotorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant' and clinproduto = '108' and cempresasaidas in (1,2))-
	    (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant' and clinproduto = '108' and cempresasaidas in (1,2))::numeric (18,2) as uniforme,
	    (select sum(csaihisotorico*n_ahi_valor_custo_venda) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant' and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (1,2))-
	    (select sum(n_ahi_valor_custo_venda*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant'  and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (1,2))::numeric (18,2) as custo";
	    $exsql=pg_query($conj,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $venda1=$rssql['venda'];
	    $custo1=$rssql['custo'];
	    $dif1=$venda1-$custo1;
	    $venda1=number_format($venda1,2,",",".");
	    $custo1=number_format($custo1,2,",",".");
	    $dif1=number_format($dif1,2,",",".");
	    echo "<td>".'R$'.$venda1."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Venda:'."</td>\n";
	    $sql="select (sum(
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemisaidas>='$dtini' and cemisaidas <= '$datafant' and cempresasaidas in (3,4))-
	    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas>='$dtini' and cemisaidas <= '$datafant' and cempresasaidas in (3,4 ))))::numeric (18,2) as venda,
	    (select sum(cvlqhistorico*csaihisotorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant' and clinproduto = '108' and cempresasaidas in (3,4))-
	    (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant' and clinproduto = '108' and cempresasaidas in (3,4))::numeric (18,2) as uniforme,
	    (select sum(csaihisotorico*n_ahi_valor_custo_venda) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant' and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (3,4))-
	    (select sum(n_ahi_valor_custo_venda*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$datafant'  and clinproduto <> 108 and clinproduto <> 13 and cempresasaidas in (3,4))::numeric (18,2) as custo";
	    $exsql=pg_query($conl,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $venda2=$rssql['venda'];
	    $custo2=$rssql['custo'];
	    $dif2=$venda2-$custo2;
	    $venda2=number_format($venda2,2,",",".");
	    $custo2=number_format($custo2,2,",",".");
	    $dif2=number_format($dif2,2,",",".");
	    echo "<td>".'R$'.$venda2."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Custo:'."</td>\n";
	    echo "<td>".'R$'.$custo1."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Custo:'."</td>\n";
	    echo "<td>".'R$'.$custo2."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Total:'."</td>\n";
	    echo "<td>".'R$'.$dif1."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Total:'."</td>\n";
	    echo "<td>".'R$'.$dif2."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Todas As Lojas'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"red \" size=4><strong>".'COM UNIFORME'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'TT Venda'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'TT Custo'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Total'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'tt Calçados'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"red \" size=4><strong>".'tt Confecções'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'tt videira'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"red \" size=4><strong>".'tt lages'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"red \" size=4><strong>".'Shop Videira'."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'tt esportes'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"red \" size=4><strong>".'tt atacadao'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"red \" size=4><strong>".'ataca lages'."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'brinquedos'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"red \" size=4><strong>".'tt uniforme'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"red \" size=4><strong>".'feirão  lages'."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</td>\n";
	    echo "</tr>\n";
	    
	    
	}
	if ($base=='V') {
	    echo "<table border='2' width='20%' bgcolor=#F5F6CE >";
	    echo "<tr><td ><font color=\"black\" size=3><strong>Estoques de Videira</strong></font></td>"."</tr>";
	    echo "</table>";
	    echo "<table border='2' width='20%' bgcolor=#01DFD7 >";
	    echo "<tr><td><font color=\"black\" size=3><strong>ESTOQUES $meses[$mes] $ano</strong></font></td>"."</tr>";
	    echo "</table>";
	    echo "<table border='2' width='100%' bgcolor=#F6D8CE >";
	    echo "<tr><td><font color=\"black\" size=3><strong></strong></font></td>"."<td><font color=\"black\" size=3><strong>Videira</strong></font></td>"."<td><font color=\"black\" size=3><strong>Videira/$anoant</strong></font></td>".
	        "<td><font color=\"black\" size=3><strong>Diferença</strong></font></td>"."<td><font color=\"black\" size=3><strong>Martello</strong></font></td>"."<td><font color=\"black\" size=3><strong>Martello/$anoant</strong></font></td>".
	        "<td><font color=\"black\" size=3><strong>Diferença</strong></font></td>"."<td><font color=\"black\" size=3><strong>Shop Masp</strong></font></td>"."<td><font color=\"black\" size=3><strong>Shop Masp/$anoant</strong></font></td>".
	        "<td><font color=\"black\" size=3><strong>Diferença</strong></font></td>"."</tr>";
	    echo "<td><font color=\"black\" size=4><strong>".'Calçados'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    $ttcoluna1='0.00'; //Total Coluna 1 da Linha dos Produtos
	    $ttgeral='0.00';   //Total Coluna 1 Geral De Todas Linhas
	    $ttcoluna2='0.00'; //Total Coluna 2 da Linha dos Produtos
	    $ttgera2='0.00';   //Total Coluna 2 Geral  De Todas Linhas
	    $ttcoluna3='0.00'; //Total Coluna 3 da Linha dos Produtos
	    $ttgera3='0.00';   //Total Coluna 3 Geral De Todas Linhas
	    $ttcoluna4='0.00'; //Total Coluna 4 da Linha dos Produtos
	    $ttgera4='0.00';   //Total Coluna 4 Geral De Todas Linhas
	    $ttcoluna5='0.00'; //Total Coluna 5 da Linha dos Produtos
	    $ttgera5='0.00';   //Total Coluna 5 Geral De Todas Linhas
	    $ttcoluna6='0.00'; //Total Coluna 6 da Linha dos Produtos
	    $ttgera6='0.00';   //Total Coluna 6 Geral De Todas Linhas
	    $sql="select ccodlinha,cdeslinha from tlinha where cdeslinha ilike ('%CALÇADOS%') order by cdeslinha ";
	    $exsql=pg_query($conv,$sql);
	    while ($row = pg_fetch_assoc($exsql)) {
	        $codl=$row['ccodlinha'];
	        $deslinha=$row['ccodlinha'];
	        $deslinha=$row['cdeslinha'];
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (13,14)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conv,$query);
	        $rsquery=pg_fetch_array($exquery);        
	        $estoque=$rsquery['estoque'];
	        $ttcoluna1=$ttcoluna1+$estoque;
	        $ttgeral=$ttgeral+$estoque;
	        $cedula=$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".$deslinha."</td>\n";
	        echo "<td>".'R$'.$estoque."</td>\n";
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$datafant' and cemphistorico in (13,14)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conv,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $ttcoluna2=$ttcoluna2+$estoque;
	        $ttgera2=$ttgera2+$estoque;
	        $cedula=$cedula-$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        $cedula=number_format($cedula,2,",",".");        
	        echo "<td>".'R$'.$estoque."</td>\n";
	        if ($cedula<= 0) {
	            $cor="red";
	        } else {
	            $cor="black";
	        }
	        echo "<td><font color=\"$cor\">".'R$'.$cedula."</font></td>\n";
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (15,16)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conv,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $ttcoluna3=$ttcoluna3+$estoque;
	        $ttgera3=$ttgera3+$estoque;
	        $cedula=$estoque;
	        $estoque=number_format($estoque,2,",",".");        
	        echo "<td>".'R$'.$estoque."</td>\n";
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$datafant' and cemphistorico in (15,16)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conv,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $ttcoluna4=$ttcoluna4+$estoque;
	        $ttgera4=$ttgera4+$estoque;
	        $cedula=$cedula-$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        $cedula=number_format($cedula,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        if ($cedula<= 0) {
	            $cor="red";
	        } else {
	            $cor="black";
	        }
	        echo "<td><font color=\"$cor\">".'R$'.$cedula."</font></td>\n";
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (17,18)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conv,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $ttcoluna5=$ttcoluna5+$estoque;
	        $ttgera5=$ttgera5+$estoque;
	        $cedula=$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$datafant' and cemphistorico in (17,18)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conv,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $ttcoluna6=$ttcoluna6+$estoque;
	        $ttgera6=$ttgera6+$estoque;
	        $cedula=$cedula-$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        $cedula=number_format($cedula,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        if ($cedula<= 0) {
	            $cor="red";
	        } else {
	            $cor="black";
	        }
	        echo "<td><font color=\"$cor\">".'R$'.$cedula."</font></td>\n";       
	        echo "</tr>\n";
	    }
	    $cedula=$ttcoluna1-$ttcoluna2;
	    $cedula1=$ttcoluna3-$ttcoluna4;
	    $cedula2=$ttcoluna5-$ttcoluna6;
	    echo "<td><font color=\"black\" size=4><strong>".'TT'."</td>\n";
	    $ttcoluna1=number_format($ttcoluna1,2,",",".");
	    $ttcoluna2=number_format($ttcoluna2,2,",",".");
	    $ttcoluna3=number_format($ttcoluna3,2,",",".");
	    $ttcoluna4=number_format($ttcoluna4,2,",",".");
	    $ttcoluna5=number_format($ttcoluna5,2,",",".");
	    $ttcoluna6=number_format($ttcoluna6,2,",",".");
	    $cedula=number_format($cedula,2,",",".");
	    $cedula1=number_format($cedula1,2,",",".");
	    $cedula2=number_format($cedula2,2,",",".");
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna1."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna2."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$cedula."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna3."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna4."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$cedula1."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna5."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna6."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$cedula2."</strong></font></td>\n";
	    echo "</tr>\n";
	    $ttcoluna1='0.00';
	    $ttcoluna2='0.00';
	    $ttcoluna3='0.00';
	    $ttcoluna4='0.00';
	    $ttcoluna5='0.00';
	    $ttcoluna6='0.00';
	    echo "<td><font color=\"black\" size=4><strong>".'Confecções'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    $sql="select ccodlinha,cdeslinha from tlinha where cdeslinha ilike ('%CONFECÇÕES%') order by cdeslinha ";
	    $exsql=pg_query($conv,$sql);
	    while ($row = pg_fetch_assoc($exsql)) {
	        $codl=$row['ccodlinha'];
	        $deslinha=$row['ccodlinha'];
	        $deslinha=$row['cdeslinha'];
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (13,14)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conv,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $ttcoluna1=$ttcoluna1+$estoque;
	        $ttgeral=$ttgeral+$estoque;
	        $cedula=$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".$deslinha."</td>\n";
	        echo "<td>".'R$'.$estoque."</td>\n";
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$datafant' and cemphistorico in (13,14)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conv,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $ttcoluna2=$ttcoluna2+$estoque;
	        $ttgera2=$ttgera2+$estoque;
	        $cedula=$cedula-$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        $cedula=number_format($cedula,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        if ($cedula<= 0) {
	            $cor="red";
	        } else {
	            $cor="black";
	        }
	        echo "<td><font color=\"$cor\">".'R$'.$cedula."</font></td>\n";
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (15,16)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conv,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $ttcoluna3=$ttcoluna3+$estoque;
	        $ttgera3=$ttgera3+$estoque;
	        $cedula=$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$datafant' and cemphistorico in (15,16)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conv,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $ttcoluna4=$ttcoluna4+$estoque;
	        $ttgera4=$ttgera4+$estoque;
	        $cedula=$cedula-$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        $cedula=number_format($cedula,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        if ($cedula<= 0) {
	            $cor="red";
	        } else {
	            $cor="black";
	        }
	        echo "<td><font color=\"$cor\">".'R$'.$cedula."</font></td>\n";
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (17,18)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conv,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $ttcoluna5=$ttcoluna5+$estoque;
	        $ttgera5=$ttgera5+$estoque;
	        $cedula=$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$datafant' and cemphistorico in (17,18)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conv,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $ttcoluna6=$ttcoluna6+$estoque;
	        $ttgera6=$ttgera6+$estoque;
	        $cedula=$cedula-$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        $cedula=number_format($cedula,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        if ($cedula<= 0) {
	            $cor="red";
	        } else {
	            $cor="black";
	        }
	        echo "<td><font color=\"$cor\">".'R$'.$cedula."</font></td>\n";
	        echo "</tr>\n";
	    }
	    $cedula=$ttcoluna1-$ttcoluna2;
	    $cedula1=$ttcoluna3-$ttcoluna4;
	    $cedula2=$ttcoluna5-$ttcoluna6;
	    echo "<td><font color=\"black\" size=4><strong>".'TT'."</td>\n";
	    $ttcoluna1=number_format($ttcoluna1,2,",",".");
	    $ttcoluna2=number_format($ttcoluna2,2,",",".");
	    $ttcoluna3=number_format($ttcoluna3,2,",",".");
	    $ttcoluna4=number_format($ttcoluna4,2,",",".");
	    $ttcoluna5=number_format($ttcoluna5,2,",",".");
	    $ttcoluna6=number_format($ttcoluna6,2,",",".");
	    $cedula=number_format($cedula,2,",",".");
	    $cedula1=number_format($cedula1,2,",",".");
	    $cedula2=number_format($cedula2,2,",",".");
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna1."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna2."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$cedula."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna3."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna4."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$cedula1."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna5."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna6."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$cedula2."</strong></font></td>\n";
	    echo "</tr>\n";
	    $ttcoluna1='0.00';
	    $ttcoluna2='0.00';
	    $ttcoluna3='0.00';
	    $ttcoluna4='0.00';
	    $ttcoluna5='0.00';
	    $ttcoluna6='0.00';
	    echo "<td><font color=\"black\" size=4><strong>".'Esportes'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    $sql="select ccodlinha,cdeslinha from tlinha where cdeslinha ilike ('%ESPORTES%') order by cdeslinha ";
	    $exsql=pg_query($conv,$sql);
	    while ($row = pg_fetch_assoc($exsql)) {
	        $codl=$row['ccodlinha'];
	        $deslinha=$row['ccodlinha'];
	        $deslinha=$row['cdeslinha'];
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (13,14)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conv,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $ttcoluna1=$ttcoluna1+$estoque;
	        $ttgeral=$ttgeral+$estoque;
	        $cedula=$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".$deslinha."</td>\n";
	        echo "<td>".'R$'.$estoque."</td>\n";
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$datafant' and cemphistorico in (13,14)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conv,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $ttcoluna2=$ttcoluna2+$estoque;
	        $ttgera2=$ttgera2+$estoque;
	        $cedula=$cedula-$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        $cedula=number_format($cedula,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        if ($cedula<= 0) {
	            $cor="red";
	        } else {
	            $cor="black";
	        }
	        echo "<td><font color=\"$cor\">".'R$'.$cedula."</font></td>\n";
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (15,16)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conv,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $ttcoluna3=$ttcoluna3+$estoque;
	        $ttgera3=$ttgera3+$estoque;
	        $cedula=$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$datafant' and cemphistorico in (15,16)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conv,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $ttcoluna4=$ttcoluna4+$estoque;
	        $ttgera4=$ttgera4+$estoque;
	        $cedula=$cedula-$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        $cedula=number_format($cedula,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        if ($cedula<= 0) {
	            $cor="red";
	        } else {
	            $cor="black";
	        }
	        echo "<td><font color=\"$cor\">".'R$'.$cedula."</font></td>\n";
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (17,18)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conv,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $ttcoluna5=$ttcoluna5+$estoque;
	        $ttgera5=$ttgera5+$estoque;
	        $cedula=$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$datafant' and cemphistorico in (17,18)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conv,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $ttcoluna6=$ttcoluna6+$estoque;
	        $ttgera6=$ttgera6+$estoque;
	        $cedula=$cedula-$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        $cedula=number_format($cedula,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        if ($cedula<= 0) {
	            $cor="red";
	        } else {
	            $cor="black";
	        }
	        echo "<td><font color=\"$cor\">".'R$'.$cedula."</font></td>\n";
	        echo "</tr>\n";
	    }
	    $cedula=$ttcoluna1-$ttcoluna2;
	    $cedula1=$ttcoluna3-$ttcoluna4;
	    $cedula2=$ttcoluna5-$ttcoluna6;
	    echo "<td><font color=\"black\" size=4><strong>".'TT'."</td>\n";
	    $ttcoluna1=number_format($ttcoluna1,2,",",".");
	    $ttcoluna2=number_format($ttcoluna2,2,",",".");
	    $ttcoluna3=number_format($ttcoluna3,2,",",".");
	    $ttcoluna4=number_format($ttcoluna4,2,",",".");
	    $ttcoluna5=number_format($ttcoluna5,2,",",".");
	    $ttcoluna6=number_format($ttcoluna6,2,",",".");
	    $cedula=number_format($cedula,2,",",".");
	    $cedula1=number_format($cedula1,2,",",".");
	    $cedula2=number_format($cedula2,2,",",".");
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna1."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna2."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$cedula."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna3."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna4."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$cedula1."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna5."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna6."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$cedula2."</strong></font></td>\n";
	    echo "</tr>\n";
	    $ttcoluna1='0.00';
	    $ttcoluna2='0.00';
	    $ttcoluna3='0.00';
	    $ttcoluna4='0.00';
	    $ttcoluna5='0.00';
	    $ttcoluna6='0.00';
	    echo "<td><font color=\"black\" size=4><strong>".'Brinquedos'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    $sql="select ccodlinha,cdeslinha from tlinha where cdeslinha ilike ('%BRINQUEDOS%') order by cdeslinha ";
	    $exsql=pg_query($conv,$sql);
	    while ($row = pg_fetch_assoc($exsql)) {
	        $codl=$row['ccodlinha'];
	        $deslinha=$row['ccodlinha'];
	        $deslinha=$row['cdeslinha'];
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (13,14)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conv,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $ttcoluna1=$ttcoluna1+$estoque;
	        $ttgeral=$ttgeral+$estoque;
	        $cedula=$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".$deslinha."</td>\n";
	        echo "<td>".'R$'.$estoque."</td>\n";
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$datafant' and cemphistorico in (13,14)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conv,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $ttcoluna2=$ttcoluna2+$estoque;
	        $ttgera2=$ttgera2+$estoque;
	        $cedula=$cedula-$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        $cedula=number_format($cedula,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        if ($cedula<= 0) {
	            $cor="red";
	        } else {
	            $cor="black";
	        }
	        echo "<td><font color=\"$cor\">".'R$'.$cedula."</font></td>\n";
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (15,16)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conv,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $ttcoluna3=$ttcoluna3+$estoque;
	        $ttgera3=$ttgera3+$estoque;
	        $cedula=$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$datafant' and cemphistorico in (15,16)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conv,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $ttcoluna4=$ttcoluna4+$estoque;
	        $ttgera4=$ttgera4+$estoque;
	        $cedula=$cedula-$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        $cedula=number_format($cedula,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        if ($cedula<= 0) {
	            $cor="red";
	        } else {
	            $cor="black";
	        }
	        echo "<td><font color=\"$cor\">".'R$'.$cedula."</font></td>\n";
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (17,18)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conv,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $ttcoluna5=$ttcoluna5+$estoque;
	        $ttgera5=$ttgera5+$estoque;
	        $cedula=$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$datafant' and cemphistorico in (17,18)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conv,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $ttcoluna6=$ttcoluna6+$estoque;
	        $ttgera6=$ttgera6+$estoque;
	        $cedula=$cedula-$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        $cedula=number_format($cedula,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        if ($cedula<= 0) {
	            $cor="red";
	        } else {
	            $cor="black";
	        }
	        echo "<td><font color=\"$cor\">".'R$'.$cedula."</font></td>\n";
	        echo "</tr>\n";
	    }
	    $cedula=$ttcoluna1-$ttcoluna2;
	    $cedula1=$ttcoluna3-$ttcoluna4;
	    $cedula2=$ttcoluna5-$ttcoluna6;
	    echo "<td><font color=\"black\" size=4><strong>".'TT'."</td>\n";
	    $ttcoluna1=number_format($ttcoluna1,2,",",".");
	    $ttcoluna2=number_format($ttcoluna2,2,",",".");
	    $ttcoluna3=number_format($ttcoluna3,2,",",".");
	    $ttcoluna4=number_format($ttcoluna4,2,",",".");
	    $ttcoluna5=number_format($ttcoluna5,2,",",".");
	    $ttcoluna6=number_format($ttcoluna6,2,",",".");
	    $cedula=number_format($cedula,2,",",".");
	    $cedula1=number_format($cedula1,2,",",".");
	    $cedula2=number_format($cedula2,2,",",".");
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna1."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna2."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$cedula."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna3."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna4."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$cedula1."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna5."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna6."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$cedula2."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Total Geral'."</td>\n";
	    $cedula=$ttgeral-$ttgera2;
	    $cedula1=$ttgera3-$ttcoluna4;
	    $cedula2=$ttgera5-$ttcoluna5;
	    $ttgeral=number_format($ttgeral,2,",",".");
	    $ttgera2=number_format($ttgera2,2,",",".");
	    $cedula=number_format($cedula,2,",",".");
	    $ttgera3=number_format($ttgera3,2,",",".");
	    $ttgera4=number_format($ttgera4,2,",",".");
	    $cedula1=number_format($cedula1,2,",",".");
	    $ttgera5=number_format($ttgera5,2,",",".");
	    $ttgera6=number_format($ttgera6,2,",",".");
	    $cedula2=number_format($cedula2,2,",",".");
	    echo "<td><font color=\"red\" size=4><strong>".$ttgeral."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttgera2."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$cedula."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttgera3."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttgera4."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$cedula1."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttgera5."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttgera6."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$cedula2."</strong></font></td>\n";    
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Areceber'."</td>\n";
	    $datain=date('Y-m-d', strtotime($dataf. '-90 days'));
	    $sql="select (sum(cvprdupli)) as pagas from asduplicatas where  cvendupli >='$datain' and cvendupli <= '$dataf' and cempdupli in (13,14) and cdpadupli is not null";
	    $exsql=pg_query($conv,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $pagas=$rssql['pagas'];
	    $sql="select (sum(cvprdupli)) as vencidas from asduplicatas where cvendupli >='$datain' and cvendupli <= '$dataf' and cempdupli in (13,14) ";
	    $exsql=pg_query($conv,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $venc=$rssql['vencidas'];
	    $perc=3.0/100.0;
	    $venc=$venc-($perc *$venc );
	    $venc=$venc-$pagas;
	    $sql="select (sum(cvprdupli)) as receber from asduplicatas where cvendupli > '$dataf' and cempdupli in (13,14) and cdpadupli is null ";
	    $exsql=pg_query($conv,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $avenc=$rssql['receber'];
	    $avenc=$avenc-($perc*$avenc);
	    $parcela=$venc+$avenc;
	    $parcela=number_format($parcela,2,",",".");
	    echo "<td><font color=\"black\" size=4><strong>".$parcela."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</strong></font></td>\n";
	    $sql="select (sum(cvprdupli)) as pagas from asduplicatas where  cvendupli >='$datain' and cvendupli <= '$dataf' and cempdupli in (15,16) and cdpadupli is not null";
	    $exsql=pg_query($conv,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $pagas=$rssql['pagas'];
	    $sql="select (sum(cvprdupli)) as vencidas from asduplicatas where cvendupli >='$datain' and cvendupli <= '$dataf' and cempdupli in (15,16) ";
	    $exsql=pg_query($conv,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $venc=$rssql['vencidas'];
	    $perc=3.0/100.0;
	    $venc=$venc-($perc *$venc );
	    $venc=$venc-$pagas;
	    $sql="select (sum(cvprdupli)) as receber from asduplicatas where cvendupli > '$dataf' and cempdupli in (15,16) and cdpadupli is null ";
	    $exsql=pg_query($conv,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $avenc=$rssql['receber'];
	    $avenc=$avenc-($perc*$avenc);
	    $parcela=$venc+$avenc;
	    $parcela=number_format($parcela,2,",",".");
	    echo "<td><font color=\"black\" size=4><strong>".$parcela."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</strong></font></td>\n";
	    $sql="select (sum(cvprdupli)) as pagas from asduplicatas where  cvendupli >='$datain' and cvendupli <= '$dataf' and cempdupli in (17,18) and cdpadupli is not null";
	    $exsql=pg_query($conv,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $pagas=$rssql['pagas'];
	    $sql="select (sum(cvprdupli)) as vencidas from asduplicatas where cvendupli >='$datain' and cvendupli <= '$dataf' and cempdupli in (17,18) ";
	    $exsql=pg_query($conv,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $venc=$rssql['vencidas'];
	    $perc=3.0/100.0;
	    $venc=$venc-($perc *$venc );
	    $venc=$venc-$pagas;
	    $sql="select (sum(cvprdupli)) as receber from asduplicatas where cvendupli > '$dataf' and cempdupli in (17,18) and cdpadupli is null ";
	    $exsql=pg_query($conv,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $avenc=$rssql['receber'];
	    $avenc=$avenc-($perc*$avenc);
	    $parcela=$venc+$avenc;
	    $parcela=number_format($parcela,2,",",".");
	    echo "<td><font color=\"black\" size=4><strong>".$parcela."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Duplicatas Apagar'."</td>\n";
	    $sql="select (sum(cvalduplicata )) as avencer from aeduplicatas where cvenduplicata > '$dataf' and cempduplicata in (13,14) and cdpaduplicata is null";
	    $exsql=pg_query($conv,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $dupliab=$rssql['avencer'];
	    $soma=$dupliab;
	    $dupliab=number_format($dupliab,2,",",".");
	    echo "<td><font color=\"black\" size=4><strong>".$dupliab."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</strong></font></td>\n";
	    $sql="select (sum(cvalduplicata )) as avencer from aeduplicatas where cvenduplicata > '$dataf' and cempduplicata in (15,16) and cdpaduplicata is null";
	    $exsql=pg_query($conv,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $dupliab=$rssql['avencer'];
	    $soma1=$dupliab;
	    $dupliab=number_format($dupliab,2,",",".");
	    echo "<td><font color=\"black\" size=4><strong>".$dupliab."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</strong></font></td>\n";
	    $sql="select (sum(cvalduplicata )) as avencer from aeduplicatas where cvenduplicata > '$dataf' and cempduplicata in (17,18) and cdpaduplicata is null";
	    $exsql=pg_query($conv,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $dupliab=$rssql['avencer'];
	    $soma2=$dupliab;
	    $dupliab=number_format($dupliab,2,",",".");
	    echo "<td><font color=\"black\" size=4><strong>".$dupliab."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Duplicatas Pagas'."</td>\n";
	    $sql="select (sum(cvapduplicata )) as pagas from aeduplicatas where  cdpaduplicata >  '$dataf'and cempduplicata in (13,14)";
	    $exsql=pg_query($conv,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $duplipg=$rssql['pagas'];
	    $soma=$soma+$duplipg;
	    $duplipg=number_format($duplipg,2,",",".");
	    echo "<td><font color=\"black\" size=4><strong>".$duplipg."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</strong></font></td>\n";
	    $sql="select (sum(cvapduplicata )) as pagas from aeduplicatas where  cdpaduplicata >  '$dataf'and cempduplicata in (15,16)";
	    $exsql=pg_query($conv,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $duplipg=$rssql['pagas'];
	    $soma1=$soma1+$duplipg;
	    $duplipg=number_format($duplipg,2,",",".");
	    echo "<td><font color=\"black\" size=4><strong>".$duplipg."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</strong></font></td>\n";
	    $sql="select (sum(cvapduplicata )) as pagas from aeduplicatas where  cdpaduplicata >  '$dataf'and cempduplicata in (17,18)";
	    $exsql=pg_query($conv,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $duplipg=$rssql['pagas'];
	    $soma2=$soma2+$duplipg;
	    $duplipg=number_format($duplipg,2,",",".");
	    echo "<td><font color=\"black\" size=4><strong>".$duplipg."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</strong></font></td>\n";
	    echo "</tr>\n";
	    $soma=number_format($soma,2,",",".");
	    $soma1=number_format($soma1,2,",",".");
	    $soma2=number_format($soma2,2,",",".");
	    echo "<td><font color=\"black\" size=4><strong>".'Total de Duplicatas'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".$soma."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".$soma1."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".$soma2."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'R$0,00'."</strong></font></td>\n";
	    echo "</tr>\n";
	    $ttcoluna1='0.00';
	    $ttcoluna2='0.00';
	    $ttcoluna3='0.00';
	    $ttcoluna4='0.00';
	    $ttcoluna5='0.00';
	    $ttcoluna6='0.00';
	    $sql="select ccodlinha,cdeslinha from tlinha where cdeslinha ilike ('%UNIFORME%') order by cdeslinha ";
	    $exsql=pg_query($conv,$sql);
	    while ($row = pg_fetch_assoc($exsql)) {
	        $codl=$row['ccodlinha'];
	        $deslinha=$row['ccodlinha'];
	        $deslinha=$row['cdeslinha'];
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (13,14)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conv,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $ttcoluna1=$ttcoluna1+$estoque;        
	        $cedula=$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".$deslinha."</td>\n";
	        echo "<td>".'R$'.$estoque."</td>\n";
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$datafant' and cemphistorico in (13,14)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conv,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $ttcoluna2=$ttcoluna2+$estoque;        
	        $cedula=$cedula-$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        $cedula=number_format($cedula,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        if ($cedula<= 0) {
	            $cor="red";
	        } else {
	            $cor="black";
	        }
	        echo "<td><font color=\"$cor\">".'R$'.$cedula."</font></td>\n";
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (15,16)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conv,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $ttcoluna3=$ttcoluna3+$estoque;        
	        $cedula=$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$datafant' and cemphistorico in (15,16)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conv,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $ttcoluna4=$ttcoluna4+$estoque;        
	        $cedula=$cedula-$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        $cedula=number_format($cedula,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        if ($cedula<= 0) {
	            $cor="red";
	        } else {
	            $cor="black";
	        }
	        echo "<td><font color=\"$cor\">".'R$'.$cedula."</font></td>\n";
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (17,18)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conv,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $ttcoluna5=$ttcoluna5+$estoque;        
	        $cedula=$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$datafant' and cemphistorico in (17,18)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conv,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $ttcoluna6=$ttcoluna6+$estoque;       
	        $cedula=$cedula-$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        $cedula=number_format($cedula,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        if ($cedula<= 0) {
	            $cor="red";
	        } else {
	            $cor="black";
	        }
	        echo "<td><font color=\"$cor\">".'R$'.$cedula."</font></td>\n";
	        echo "</tr>\n";
	    }
	    $cedula=$ttcoluna1-$ttcoluna2;
	    $cedula1=$ttcoluna3-$ttcoluna4;
	    $cedula2=$ttcoluna5-$ttcoluna6;
	    echo "<td><font color=\"black\" size=4><strong>".'TT'."</td>\n";
	    $ttcoluna1=number_format($ttcoluna1,2,",",".");
	    $ttcoluna2=number_format($ttcoluna2,2,",",".");
	    $ttcoluna3=number_format($ttcoluna3,2,",",".");
	    $ttcoluna4=number_format($ttcoluna4,2,",",".");
	    $ttcoluna5=number_format($ttcoluna5,2,",",".");
	    $ttcoluna6=number_format($ttcoluna6,2,",",".");
	    $cedula=number_format($cedula,2,",",".");
	    $cedula1=number_format($cedula1,2,",",".");
	    $cedula2=number_format($cedula2,2,",",".");
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna1."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna2."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$cedula."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna3."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna4."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$cedula1."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna5."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna6."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$cedula2."</strong></font></td>\n";
	    echo "</tr>\n";   
	    
	}
	if ($base=='L') {
	    echo "<table border='2' width='20%' bgcolor=#F5F6CE >";
	    echo "<tr><td ><font color=\"black\" size=3><strong>Estoques de Lages</strong></font></td>"."</tr>";
	    echo "</table>";
	    echo "<table border='2' width='20%' bgcolor=#01DFD7 >";
	    echo "<tr><td><font color=\"black\" size=3><strong>ESTOQUES $meses[$mes] $ano</strong></font></td>"."</tr>";
	    echo "</table>";
	    echo "<table border='2' width='100%' bgcolor=#F6D8CE >";
	    echo "<tr><td><font color=\"black\" size=3><strong></strong></font></td>"."<td><font color=\"black\" size=3><strong>Lages Matriz</strong></font></td>"."<td><font color=\"black\" size=3><strong>Lages Matriz/$anoant</strong></font></td>".
	        "<td><font color=\"black\" size=3><strong>Diferença</strong></font></td>"."<td><font color=\"black\" size=3><strong>Atacadão</strong></font></td>"."<td><font color=\"black\" size=3><strong>Atacadão/$anoant</strong></font></td>".
	        "<td><font color=\"black\" size=3><strong>Diferença</strong></font></td>"."<td><font color=\"black\" size=3><strong>Comparativo</strong></font></td>"."</tr>";
	    echo "<td><font color=\"black\" size=4><strong>".'Calçados'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";    
	    $ttcoluna1='0.00'; //Total Coluna 1 da Linha dos Produtos
	    $ttgeral='0.00';   //Total Coluna 1 Geral De Todas Linhas
	    $ttcoluna2='0.00'; //Total Coluna 2 da Linha dos Produtos
	    $ttgera2='0.00';   //Total Coluna 2 Geral  De Todas Linhas
	    $ttcoluna3='0.00'; //Total Coluna 3 da Linha dos Produtos
	    $ttgera3='0.00';   //Total Coluna 3 Geral De Todas Linhas
	    $ttcoluna4='0.00'; //Total Coluna 4 da Linha dos Produtos
	    $ttgera4='0.00';   //Total Coluna 4 Geral De Todas Linhas
	    $sql="select ccodlinha,cdeslinha from tlinha where cdeslinha ilike ('%CALÇADOS%') order by cdeslinha ";
	    $exsql=pg_query($conl,$sql);
	    while ($row = pg_fetch_assoc($exsql)) {
	        $codl=$row['ccodlinha'];
	        $deslinha=$row['cdeslinha'];
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (1,2)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conl,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $deslinha=$rsquery['cdeslinha'];
	        $estoque=$rsquery['estoque'];
	        $ttcoluna1=$ttcoluna1+$estoque;
	        $ttgeral=$ttgeral+$estoque;
	        $cedula=$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        if ($deslinha <> '') {
	            echo "<td>".$deslinha."</td>\n";
	        }else {
	            $query="select cdeslinha from tlinha where ccodlinha = $codl ";
	            $exquery=pg_query($conc,$query);
	            $rsquery=pg_fetch_array($exquery);
	            $deslinha=$rsquery['cdeslinha'];
	            echo "<td>".$deslinha."</td>\n";
	        }       
	        echo "<td>".'R$'.$estoque."</td>\n";        
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$datafant' and cemphistorico in (1,2)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conl,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $deslinha=$rsquery['cdeslinha'];
	        $estoque=$rsquery['estoque'];
	        $ttcoluna2=$ttcoluna2+$estoque;
	        $ttgera2=$ttgera2+$estoque;
	        $cedula=$cedula-$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        $cedula=number_format($cedula,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";         
	        if ($cedula<= 0) {
	            $cor="red";
	        } else {
	            $cor="black";
	        }
	        echo "<td><font color=\"$cor\">".'R$'.$cedula."</font></td>\n";
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (3,4)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conl,$query);
	        $rsquery=pg_fetch_array($exquery);        
	        $estoque=$rsquery['estoque'];
	        $ttcoluna3=$ttcoluna3+$estoque;
	        $ttgera3=$ttgera3+$estoque;
	        $cedula=$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$datafant' and cemphistorico in (3,4)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conl,$query);
	        $rsquery=pg_fetch_array($exquery);        
	        $estoque=$rsquery['estoque'];
	        $ttcoluna4=$ttcoluna4+$estoque;
	        $ttgera4=$ttgera4+$estoque;
	        $cedula=$cedula-$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        $cedula=number_format($cedula,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        if ($cedula<= 0) {
	            $cor="red";
	        } else {
	            $cor="black";
	        }
	        echo "<td><font color=\"$cor\">".'R$'.$cedula."</font></td>\n";
	        echo "<td>".'R$0,00'."</td>\n";
	        echo "</tr>\n";
	    }
	    $cedula=$ttcoluna1-$ttcoluna2;
	    $cedula1=$ttcoluna3-$ttcoluna4;
	    echo "<td><font color=\"black\" size=4><strong>".'TT'."</td>\n";
	    $ttcoluna1=number_format($ttcoluna1,2,",",".");
	    $ttcoluna2=number_format($ttcoluna2,2,",",".");
	    $ttcoluna3=number_format($ttcoluna3,2,",",".");
	    $ttcoluna4=number_format($ttcoluna4,2,",",".");
	    $cedula=number_format($cedula,2,",",".");
	    $cedula1=number_format($cedula1,2,",",".");
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna1."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna2."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$cedula."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna3."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna4."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$cedula1."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".'R$0,00'."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Confecções'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    $ttcoluna1='0.00'; //Total Coluna 1 da Linha dos Produtos
	    $ttcoluna2='0.00'; //Total Coluna 2 da Linha dos Produtos
	    $ttcoluna3='0.00'; //Total Coluna 2 da Linha dos Produtos
	    $ttcoluna4='0.00'; //Total Coluna 2 da Linha dos Produtos
	    $sql="select ccodlinha,cdeslinha from tlinha where cdeslinha ilike ('%CONFECÇÕES%') order by cdeslinha ";
	    $exsql=pg_query($conc,$sql);
	    while ($row = pg_fetch_assoc($exsql)) {
	        $codl=$row['ccodlinha'];
	        $deslinha=$row['cdeslinha'];
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (1,2)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conl,$query);
	        $rsquery=pg_fetch_array($exquery);        
	        $estoque=$rsquery['estoque'];
	        $ttcoluna1=$ttcoluna1+$estoque;
	        $ttgeral=$ttgeral+$estoque;
	        $cedula=$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".$deslinha."</td>\n";
	        echo "<td>".'R$'.$estoque."</td>\n";
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$datafant' and cemphistorico in (1,2)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conl,$query);
	        $rsquery=pg_fetch_array($exquery);        
	        $estoque=$rsquery['estoque'];
	        $ttcoluna2=$ttcoluna2+$estoque;
	        $ttgera2=$ttgera2+$estoque;
	        $cedula=$cedula-$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        $cedula=number_format($cedula,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        if ($cedula<= 0) {
	            $cor="red";
	        } else {
	            $cor="black";
	        }
	        echo "<td><font color=\"$cor\">".'R$'.$cedula."</font></td>\n";
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (3,4)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conl,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $ttcoluna3=$ttcoluna3+$estoque;
	        $ttgera3=$ttgera3+$estoque;
	        $cedula=$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$datafant' and cemphistorico in (3,4)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conl,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $ttcoluna4=$ttcoluna4+$estoque;
	        $ttgera4=$ttgera4+$estoque;
	        $cedula=$cedula-$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        $cedula=number_format($cedula,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        if ($cedula<= 0) {
	            $cor="red";
	        } else {
	            $cor="black";
	        }
	        echo "<td><font color=\"$cor\">".'R$'.$cedula."</font></td>\n";
	        echo "<td>".'R$0,00'."</td>\n";
	        echo "</tr>\n";        
	    }
	    $cedula=$ttcoluna1-$ttcoluna2;
	    $cedula1=$ttcoluna3-$ttcoluna4;
	    echo "<td><font color=\"black\" size=4><strong>".'TT'."</td>\n";
	    $ttcoluna1=number_format($ttcoluna1,2,",",".");
	    $ttcoluna2=number_format($ttcoluna2,2,",",".");
	    $ttcoluna3=number_format($ttcoluna3,2,",",".");
	    $ttcoluna4=number_format($ttcoluna4,2,",",".");
	    $cedula=number_format($cedula,2,",",".");
	    $cedula1=number_format($cedula1,2,",",".");
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna1."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna2."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$cedula."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna3."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna4."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$cedula1."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".'R$0,00'."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Esportes'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    $ttcoluna1='0.00'; //Total Coluna 1 da Linha dos Produtos
	    $ttcoluna2='0.00'; //Total Coluna 2 da Linha dos Produtos
	    $ttcoluna3='0.00'; //Total Coluna 2 da Linha dos Produtos
	    $ttcoluna4='0.00'; //Total Coluna 2 da Linha dos Produtos
	    $sql="select ccodlinha,cdeslinha from tlinha where cdeslinha ilike ('%ESPORTES%') order by cdeslinha ";
	    $exsql=pg_query($conc,$sql);
	    while ($row = pg_fetch_assoc($exsql)) {
	        $codl=$row['ccodlinha'];
	        $deslinha=$row['cdeslinha'];
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (1,2)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conl,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $deslinha=$rsquery['cdeslinha'];
	        $estoque=$rsquery['estoque'];
	        $ttcoluna1=$ttcoluna1+$estoque;
	        $ttgeral=$ttgeral+$estoque;
	        $cedula=$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        if ($deslinha <> '') {
	            echo "<td>".$deslinha."</td>\n";
	        }else {
	            $query="select cdeslinha from tlinha where ccodlinha = $codl ";
	            $exquery=pg_query($conc,$query);
	            $rsquery=pg_fetch_array($exquery);
	            $deslinha=$rsquery['cdeslinha'];
	            echo "<td>".$deslinha."</td>\n";
	        }
	        echo "<td>".'R$'.$estoque."</td>\n";
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$datafant' and cemphistorico in (1,2)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conl,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $deslinha=$rsquery['cdeslinha'];
	        $estoque=$rsquery['estoque'];
	        $ttcoluna2=$ttcoluna2+$estoque;
	        $ttgera2=$ttgera2+$estoque;
	        $cedula=$cedula-$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        $cedula=number_format($cedula,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        if ($cedula<= 0) {
	            $cor="red";
	        } else {
	            $cor="black";
	        }
	        echo "<td><font color=\"$cor\">".'R$'.$cedula."</font></td>\n";
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (3,4)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conl,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $ttcoluna3=$ttcoluna3+$estoque;
	        $ttgera3=$ttgera3+$estoque;
	        $cedula=$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$datafant' and cemphistorico in (3,4)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conl,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $ttcoluna4=$ttcoluna4+$estoque;
	        $ttgera4=$ttgera4+$estoque;
	        $cedula=$cedula-$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        $cedula=number_format($cedula,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        if ($cedula<= 0) {
	            $cor="red";
	        } else {
	            $cor="black";
	        }
	        echo "<td><font color=\"$cor\">".'R$'.$cedula."</font></td>\n";
	        echo "<td>".'R$0,00'."</td>\n";
	        echo "</tr>\n";
	    }
	    $cedula=$ttcoluna1-$ttcoluna2;
	    $cedula1=$ttcoluna3-$ttcoluna4;
	    echo "<td><font color=\"black\" size=4><strong>".'TT'."</td>\n";
	    $ttcoluna1=number_format($ttcoluna1,2,",",".");
	    $ttcoluna2=number_format($ttcoluna2,2,",",".");
	    $ttcoluna3=number_format($ttcoluna3,2,",",".");
	    $ttcoluna4=number_format($ttcoluna4,2,",",".");
	    $cedula=number_format($cedula,2,",",".");
	    $cedula1=number_format($cedula1,2,",",".");
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna1."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna2."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$cedula."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna3."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna4."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$cedula1."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".'R$0,00'."</strong></font></td>\n";
	    echo "</tr>\n"; 
	    $ttcoluna1='0.00'; //Total Coluna 1 da Linha dos Produtos
	    $ttcoluna2='0.00'; //Total Coluna 2 da Linha dos Produtos
	    $ttcoluna3='0.00'; //Total Coluna 2 da Linha dos Produtos
	    $ttcoluna4='0.00'; //Total Coluna 2 da Linha dos Produtos
	    $sql="select ccodlinha,cdeslinha from tlinha where cdeslinha ilike ('%BRINQUEDOS%') order by cdeslinha ";
	    $exsql=pg_query($conc,$sql);
	    while ($row = pg_fetch_assoc($exsql)) {
	        $codl=$row['ccodlinha'];
	        $deslinha=$row['cdeslinha'];
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (1,2)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conl,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $deslinha=$rsquery['cdeslinha'];
	        $estoque=$rsquery['estoque'];
	        $ttcoluna1=$ttcoluna1+$estoque;
	        $ttgeral=$ttgeral+$estoque;
	        $cedula=$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        if ($deslinha <> '') {
	            echo "<td>".$deslinha."</td>\n";
	        }else {
	            $query="select cdeslinha from tlinha where ccodlinha = $codl ";
	            $exquery=pg_query($conc,$query);
	            $rsquery=pg_fetch_array($exquery);
	            $deslinha=$rsquery['cdeslinha'];
	            echo "<td>".$deslinha."</td>\n";
	        }
	        echo "<td>".'R$'.$estoque."</td>\n";
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$datafant' and cemphistorico in (1,2)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conl,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $deslinha=$rsquery['cdeslinha'];
	        $estoque=$rsquery['estoque'];
	        $ttcoluna2=$ttcoluna2+$estoque;
	        $ttgera2=$ttgera2+$estoque;
	        $cedula=$cedula-$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        $cedula=number_format($cedula,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        if ($cedula<= 0) {
	            $cor="red";
	        } else {
	            $cor="black";
	        }
	        echo "<td><font color=\"$cor\">".'R$'.$cedula."</font></td>\n";
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (3,4)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conl,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $ttcoluna3=$ttcoluna3+$estoque;
	        $ttgera3=$ttgera3+$estoque;
	        $cedula=$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$datafant' and cemphistorico in (3,4)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conl,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $ttcoluna4=$ttcoluna4+$estoque;
	        $ttgera4=$ttgera4+$estoque;
	        $cedula=$cedula-$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        $cedula=number_format($cedula,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        if ($cedula<= 0) {
	            $cor="red";
	        } else {
	            $cor="black";
	        }
	        echo "<td><font color=\"$cor\">".'R$'.$cedula."</font></td>\n";
	        echo "<td>".'R$0,00'."</td>\n";
	        echo "</tr>\n";        
	    }
	    echo "<td><font color=\"black\" size=4><strong>".'Total Geral'."</td>\n";
	    $cedula=$ttgeral-$ttgera2;
	    $cedula1=$ttgera3-$ttcoluna4;
	    $ttgeral=number_format($ttgeral,2,",",".");
	    $ttgera2=number_format($ttgera2,2,",",".");
	    $cedula=number_format($cedula,2,",",".");
	    $ttgera3=number_format($ttgera3,2,",",".");
	    $ttgera4=number_format($ttgera4,2,",",".");
	    $cedula1=number_format($cedula1,2,",",".");
	    echo "<td><font color=\"red\" size=4><strong>".$ttgeral."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttgera2."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$cedula."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttgera3."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttgera4."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$cedula1."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".'R$0,00'."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Areceber'."</td>\n";
	    $datain=date('Y-m-d', strtotime($dataf. '-90 days'));
	    $sql="select (sum(cvprdupli)) as pagas from asduplicatas where  cvendupli >='$datain' and cvendupli <= '$dataf' and cempdupli in (1,2) and cdpadupli is not null";
	    $exsql=pg_query($conl,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $pagas=$rssql['pagas'];
	    $sql="select (sum(cvprdupli)) as vencidas from asduplicatas where cvendupli >='$datain' and cvendupli <= '$dataf' and cempdupli in (1,2) ";
	    $exsql=pg_query($conl,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $venc=$rssql['vencidas'];
	    $perc=5.0/100.0;
	    $venc=$venc-($perc *$venc );
	    $venc=$venc-$pagas;
	    $sql="select (sum(cvprdupli)) as receber from asduplicatas where cvendupli > '$dataf' and cempdupli in (1,2) and cdpadupli is null ";
	    $exsql=pg_query($conl,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $avenc=$rssql['receber'];
	    $avenc=$avenc-($perc*$avenc);
	    $parcela=$venc+$avenc;    
	    $parcela=number_format($parcela,2,",",".");
	    echo "<td><font color=\"black\" size=4><strong>".$parcela."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'0,00'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'0,00'."</strong></font></td>\n";    
	    $sql="select (sum(cvprdupli)) as pagas from asduplicatas where  cvendupli >='$datain' and cvendupli <= '$dataf' and cempdupli in (3,4) and cdpadupli is not null";
	    $exsql=pg_query($conl,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $pagas=$rssql['pagas'];
	    $sql="select (sum(cvprdupli)) as vencidas from asduplicatas where cvendupli >='$datain' and cvendupli <= '$dataf'  and cempdupli in (3,4) ";
	    $exsql=pg_query($conl,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $venc=$rssql['vencidas'];
	    $perc=5.0/100.0;
	    $venc=$venc-($perc *$venc );
	    $venc=$venc-$pagas;
	    $sql="select (sum(cvprdupli)) as receber from asduplicatas where cvendupli > '$dataf' and cempdupli in (3,4) and cdpadupli is null ";
	    $exsql=pg_query($conl,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $avenc=$rssql['receber'];
	    $avenc=$avenc-($perc*$avenc);
	    $parcela=$venc+$avenc;
	    $parcela=number_format($parcela,2,",",".");
	    echo "<td><font color=\"black\" size=4><strong>".$parcela."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'0,00'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'0,00'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'0,00'."</strong></font></td>\n";
	    echo "</tr>\n";
	    $sql="select (sum(cvalduplicata )) as avencer from aeduplicatas where cvenduplicata > '$dataf' and cdpaduplicata is null";
	    $exsql=pg_query($conl,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $dupliab=$rssql['avencer'];
	    $sql="select (sum(cvapduplicata )) as pagas from aeduplicatas where  cdpaduplicata >  '$dataf'";
	    $exsql=pg_query($conl,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $duplipg=$rssql['pagas'];
	    $dif=$dupliab+$duplipg;
	    $duplipg=number_format($duplipg,2,",",".");
	    $dupliab=number_format($dupliab,2,",",".");
	    $dif=number_format($dif,2,",",".");
	    echo "<td><font color=\"black\" size=4><strong>".'Duplicatas Apagar'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".$dupliab."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'0,00'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'0,00'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'0,00'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'0,00'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'0,00'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'0,00'."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Duplicatas Pagas'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".$duplipg."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'0,00'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'0,00'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'0,00'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'0,00'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'0,00'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'0,00'."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Total de Duplicatas'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".$dif."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'0,00'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'0,00'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'0,00'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'0,00'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'0,00'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'0,00'."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Uniforme Escolar'."</td>\n";
	    $sql="select ccodlinha from tlinha where cdeslinha ilike ('%UNIFORME%') order by cdeslinha ";
	    $exsql=pg_query($conl,$sql);
	    while ($row = pg_fetch_assoc($exsql)) {
	        $codl=$row['ccodlinha'];
	        $query="select (sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (1,2)
	        and ccodlinha = $codl";
	        $exquery=pg_query($conl,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];       
	        $cedula=$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        $query="select (sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$datafant' and cemphistorico in (1,2)
	        and ccodlinha = $codl";
	        $exquery=pg_query($conl,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $cedula=$cedula-$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        $cedula=number_format($cedula,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        echo "<td>".'R$'.$cedula."</td>\n";        
	        $query="select (sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (3,4)
	        and ccodlinha = $codl";
	        $exquery=pg_query($conl,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $cedula=$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        $query="select (sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$datafant' and cemphistorico in (3,4)
	        and ccodlinha = $codl";
	        $exquery=pg_query($conl,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $cedula=$cedula-$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        $cedula=number_format($cedula,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        echo "<td>".'R$'.$cedula."</td>\n";
	        echo "<td>".'R$0,00'."</td>\n";
	        echo "</tr>\n";        
	    }
	    
	}
if ($base=='A') {
	$dep=$_POST['delin'];
		if ($dep == null or $dep == 0) {
			$dep= null;
		} else {
			$dep=" and cdepproduto in ($dep)";
		}
		
		$dianovo=implode("/",array_reverse(explode("-",$dataf)));
	    echo "<table border='2' width='20%' bgcolor=#F5F6CE >";
	    echo "<tr><td ><font color=\"black\" size=3><strong>Estoques Confecções</strong></font></td>"."</tr>";
	    echo "<table border='2' width='30%' bgcolor=#BDBDBD>";
	    echo "<tr><td><font color=\"black\" size=3><strong>ESTOQUES $meses[$mes] $ano</strong></font></td>"."<td><font color=\"black\" size=3><strong>Data: $dianovo</strong></font></td>"."</tr>";
	    echo "</table>";
	    echo "<table border='2' width='105%' bgcolor=#F8E0E0 >";
	    echo "<tr><td><font color=\"black\" size=3><strong>Linha</strong></font></td>"."<td><font color=\"black\" size=3><strong>Confecções Matriz</strong></font></td>"."<td><font color=\"black\" size=3><strong>Confecções Filial</strong></font></td>".
	         "<td><font color=\"black\" size=3><strong>Esportes</strong></font></td>"."<td><font color=\"black\" size=3><strong>Calçados Matriz</strong></font></td>"."<td><font color=\"black\" size=3><strong>Calçados Filial</strong></font></td>".
	         "<td><font color=\"black\" size=3><strong>Videira</strong></font></td>"."<td><font color=\"black\" size=3><strong>Shop Masp</strong></font></td>"."<td><font color=\"black\" size=3><strong>Atacadão</strong></font></td>".
	         "<td><font color=\"black\" size=3><strong>Lages</strong></font></td>"."<td><font color=\"black\" size=3><strong>Atacadão Lages</strong></font></td>"."<td><font color=\"black\" size=3><strong>Martello</strong></font></td>"."<td><font color=\"black\" size=3><strong>Total</strong></font></td>"."</tr>";
	    echo "<td><font color=\"black\" size=4><strong>".'Confecções'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    $sql="select ccodlinha,cdeslinha from tlinha where cdeslinha ilike ('%CONFECÇÕES%') order by cdeslinha ";
	    $exsql=pg_query($conc,$sql);    
	    $tt1='0.00';
	    $ttcoluna1='0.00';
	    $tt2='0.00';   
	    $ttcoluna2='0.00';
	    $tt3='0.00';
	    $ttcoluna3='0.00';
	    $tt4='0.00';
	    $ttcoluna4='0.00';
	    $tt5='0.00';
	    $ttcoluna5='0.00';
	    $tt6='0.00';
	    $ttcoluna6='0.00';
	    $tt7='0.00';
	    $ttcoluna7='0.00';
	    $tt8='0.00';
	    $ttcoluna8='0.00';
	    $tt9='0.00';
	    $ttcoluna9='0.00';
	    $tt10='0.00';
	    $ttcoluna10='0.00';
	    $tt11='0.00';
	    $ttcoluna11='0.00';
	    while ($row = pg_fetch_assoc($exsql)) {
	        $codl=$row['ccodlinha'];
	        $deslinha=$row['cdeslinha'];
	        echo "<td>".$deslinha."</td>\n";
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (1,2)
	        and ccodlinha = $codl
	        and cbaiesthistorico =0 
	        $dep
	        group by ccodlinha";
	        $exquery=pg_query($conc,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $dif=$estoque;
	        $ttcoluna1=$ttcoluna1+$estoque;
	        $tt1=$tt1+$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (9,10)
	        and ccodlinha = $codl
	        and cbaiesthistorico =0 
	        $dep
	        group by ccodlinha";
	        $exquery=pg_query($conc,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque1=$rsquery['estoque'];	        
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (3,4)
	        and ccodlinha = $codl
	        and cbaiesthistorico =0 
	        $dep
	        group by ccodlinha";
	        $exquery=pg_query($conj,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque2=$rsquery['estoque'];	        
	        $estoque=$estoque1+$estoque2;        
	        $dif=$dif+$estoque;
	        $ttcoluna2=$ttcoluna2+$estoque;
	        $tt2=$tt2+$estoque;
	        $estoque=number_format($estoque,2,",",".");        
	        echo "<td>".'R$'.$estoque."</td>\n";	        
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (3,4)
	        and ccodlinha = $codl
	        and cbaiesthistorico =0 
	        $dep
	        group by ccodlinha";
	        $exquery=pg_query($conc,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $dif=$dif+$estoque;
	        $ttcoluna3=$ttcoluna3+$estoque;
	        $tt3=$tt3+$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";        
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (7,8)
	        and ccodlinha = $codl
	        and cbaiesthistorico =0 
	        $dep
	        group by ccodlinha";
	        $exquery=pg_query($conc,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $dif=$dif+$estoque;
	        $ttcoluna4=$ttcoluna4+$estoque;
	        $tt4=$tt4+$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";	        
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (5,6)
	        and ccodlinha = $codl
	        and cbaiesthistorico =0 
	        $dep
	        group by ccodlinha";
	        $exquery=pg_query($conc,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $dif=$dif+$estoque;
	        $ttcoluna5=$ttcoluna5+$estoque;
	        $tt5=$tt5+$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";        
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (13,14)
	        and ccodlinha = $codl
	        and cbaiesthistorico =0
	        $dep
	        group by ccodlinha";
	        $exquery=pg_query($conv,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $dif=$dif+$estoque;
	        $ttcoluna6=$ttcoluna6+$estoque;
	        $tt6=$tt6+$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";	        
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (17,18)
	        and ccodlinha = $codl
	        and cbaiesthistorico =0 
	        $dep
	        group by ccodlinha";
	        $exquery=pg_query($conv,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $dif=$dif+$estoque;
	        $ttcoluna7=$ttcoluna7+$estoque;
	        $tt7=$tt7+$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (1,2)
	        and ccodlinha = $codl
	        and cbaiesthistorico =0 $dep group by ccodlinha";
	        $exquery=pg_query($conj,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $dif=$dif+$estoque;
	        $ttcoluna8=$ttcoluna8+$estoque;
	        $tt8=$tt8+$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (1,2)
	        and ccodlinha = $codl
	        and cbaiesthistorico =0 $dep group by ccodlinha";
	        $exquery=pg_query($conl,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $dif=$dif+$estoque;
	        $ttcoluna9=$ttcoluna9+$estoque;
	        $tt9=$tt9+$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (3,4)
	        and ccodlinha = $codl
	        and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conl,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $dif=$dif+$estoque;
	        $ttcoluna10=$ttcoluna10+$estoque;
	        $tt10=$tt10+$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (15,16)
	        and ccodlinha = $codl
	        and cbaiesthistorico =0 $dep group by ccodlinha";
	        $exquery=pg_query($conv,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $dif=$dif+$estoque;
	        $ttcoluna11=$ttcoluna11+$estoque;
	        $tt11=$tt11+$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";        
	        
	        if ($dif< 0) {
	            $cor="red";
	        } else {
	            $cor="black";
	        }
	        $dif=number_format($dif,2,",",".");
	        echo "<td><font color=\"$cor\">".'R$'.$dif."</font></td>\n";
	        $dif=0.00;       
	       
	        echo "</tr>\n";
	    }   
	    $dif=$ttcoluna1+$ttcoluna2+$ttcoluna3+$ttcoluna4+$ttcoluna5+$ttcoluna6+$ttcoluna7+$ttcoluna8+$ttcoluna9+$ttcoluna10+$ttcoluna11;
	    $ttcoluna1=number_format($ttcoluna1,2,",",".");
	    $ttcoluna2=number_format($ttcoluna2,2,",",".");
	    $ttcoluna3=number_format($ttcoluna3,2,",",".");
	    $ttcoluna4=number_format($ttcoluna4,2,",",".");
	    $ttcoluna5=number_format($ttcoluna5,2,",",".");
	    $ttcoluna6=number_format($ttcoluna6,2,",",".");
	    $ttcoluna7=number_format($ttcoluna7,2,",",".");
	    $ttcoluna8=number_format($ttcoluna8,2,",",".");
	    $ttcoluna9=number_format($ttcoluna9,2,",",".");
	    $ttcoluna10=number_format($ttcoluna10,2,",",".");
	    $ttcoluna11=number_format($ttcoluna11,2,",",".");
	    $dif=number_format($dif,2,",",".");
	    echo "<td><font color=\"black\" size=4><strong>".'TT'."</td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna1."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna2."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna3."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna4."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna5."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna6."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna7."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna8."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna9."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna10."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna11."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$dif."</strong></font></td>\n";
	    echo "</tr>\n";   
	}
	
	if ($base=='B') {
	    echo "<table border='2' width='20%' bgcolor=#F5F6CE >";
	    echo "<tr><td ><font color=\"black\" size=3><strong>Estoques Calçados</strong></font></td>"."</tr>";
	    echo "<table border='2' width='20%' bgcolor=#01DFD7 >";
	     echo "<tr><td><font color=\"black\" size=3><strong>ESTOQUES $meses[$mes] $ano</strong></font></td>"."<td><font color=\"black\" size=3><strong>Data: $dianovo</strong></font></td>"."</tr>";
	    echo "</table>";
	    echo "<table border='2' width='105%' bgcolor=#F6D8CE >";
	    echo "<tr><td><font color=\"black\" size=3><strong>Linha</strong></font></td>"."<td><font color=\"black\" size=3><strong>Confecções Matriz</strong></font></td>"."<td><font color=\"black\" size=3><strong>Confecções Filial</strong></font></td>".
	        "<td><font color=\"black\" size=3><strong>Esportes</strong></font></td>"."<td><font color=\"black\" size=3><strong>Calçados Matriz</strong></font></td>"."<td><font color=\"black\" size=3><strong>Calçados Filial</strong></font></td>".
	        "<td><font color=\"black\" size=3><strong>Videira</strong></font></td>"."<td><font color=\"black\" size=3><strong>Shop Masp</strong></font></td>"."<td><font color=\"black\" size=3><strong>Atacadão</strong></font></td>".
	        "<td><font color=\"black\" size=3><strong>Lages</strong></font></td>"."<td><font color=\"black\" size=3><strong>Atacadão Lages</strong></font></td>"."<td><font color=\"black\" size=3><strong>Martello</strong></font></td>"."<td><font color=\"black\" size=3><strong>Total</strong></font></td>"."</tr>";
	    echo "<td><font color=\"black\" size=4><strong>".'Calçadps'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    $sql="select ccodlinha,cdeslinha from tlinha where cdeslinha ilike ('%CALÇADOS%') order by cdeslinha ";
	    $exsql=pg_query($conc,$sql);
	    $tt1='0.00';
	    $ttcoluna1='0.00';
	    $tt2='0.00';
	    $ttcoluna2='0.00';
	    $tt3='0.00';
	    $ttcoluna3='0.00';
	    $tt4='0.00';
	    $ttcoluna4='0.00';
	    $tt5='0.00';
	    $ttcoluna5='0.00';
	    $tt6='0.00';
	    $ttcoluna6='0.00';
	    $tt7='0.00';
	    $ttcoluna7='0.00';
	    $tt8='0.00';
	    $ttcoluna8='0.00';
	    $tt9='0.00';
	    $ttcoluna9='0.00';
	    $tt10='0.00';
	    $ttcoluna10='0.00';
	    $tt11='0.00';
	    $ttcoluna11='0.00';
	    while ($row = pg_fetch_assoc($exsql)) {
	        $codl=$row['ccodlinha'];
	        $deslinha=$row['cdeslinha'];
	        echo "<td>".$deslinha."</td>\n";
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (1,2)
	        and ccodlinha = $codl
	        and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conc,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $dif=$estoque;
	        $ttcoluna1=$ttcoluna1+$estoque;
	        $tt1=$tt1+$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        
	        
	        
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (9,10)
	        and ccodlinha = $codl
	        and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conc,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque1=$rsquery['estoque'];
	        
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (3,4)
	        and ccodlinha = $codl
	        and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conj,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque2=$rsquery['estoque'];
	        
	        $estoque=$estoque1+$estoque2;
	        $dif=$dif+$estoque;
	        $ttcoluna2=$ttcoluna2+$estoque;
	        $tt2=$tt2+$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (3,4)
	        and ccodlinha = $codl
	        and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conc,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $dif=$dif+$estoque;
	        $ttcoluna3=$ttcoluna3+$estoque;
	        $tt3=$tt3+$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (7,8)
	        and ccodlinha = $codl
	        and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conc,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $dif=$dif+$estoque;
	        $ttcoluna4=$ttcoluna4+$estoque;
	        $tt4=$tt4+$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (5,6)
	        and ccodlinha = $codl
	        and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conc,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $dif=$dif+$estoque;
	        $ttcoluna5=$ttcoluna5+$estoque;
	        $tt5=$tt5+$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        
	        
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (13,14)
	        and ccodlinha = $codl
	        and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conv,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $dif=$dif+$estoque;
	        $ttcoluna6=$ttcoluna6+$estoque;
	        $tt6=$tt6+$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (17,18)
	        and ccodlinha = $codl
	        and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conv,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $dif=$dif+$estoque;
	        $ttcoluna7=$ttcoluna7+$estoque;
	        $tt7=$tt7+$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (1,2)
	        and ccodlinha = $codl
	        and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conj,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $dif=$dif+$estoque;
	        $ttcoluna8=$ttcoluna8+$estoque;
	        $tt8=$tt8+$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (1,2)
	        and ccodlinha = $codl
	        and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conl,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $dif=$dif+$estoque;
	        $ttcoluna9=$ttcoluna9+$estoque;
	        $tt9=$tt9+$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (3,4)
	        and ccodlinha = $codl
	        and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conl,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $dif=$dif+$estoque;
	        $ttcoluna10=$ttcoluna10+$estoque;
	        $tt10=$tt10+$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (3,4)
	        and ccodlinha = $codl
	        and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conc,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $dif=$dif+$estoque;
	        $ttcoluna11=$ttcoluna11+$estoque;
	        $tt11=$tt11+$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        
	        if ($dif< 0) {
	            $cor="red";
	        } else {
	            $cor="black";
	        }
	        $dif=number_format($dif,2,",",".");
	        echo "<td><font color=\"$cor\">".'R$'.$dif."</font></td>\n";
	        $dif=0.00;
	        
	        echo "</tr>\n";
	    }
	    $dif=$ttcoluna1+$ttcoluna2+$ttcoluna3+$ttcoluna4+$ttcoluna5+$ttcoluna6+$ttcoluna7+$ttcoluna8+$ttcoluna9+$ttcoluna10+$ttcoluna11;
	    $ttcoluna1=number_format($ttcoluna1,2,",",".");
	    $ttcoluna2=number_format($ttcoluna2,2,",",".");
	    $ttcoluna3=number_format($ttcoluna3,2,",",".");
	    $ttcoluna4=number_format($ttcoluna4,2,",",".");
	    $ttcoluna5=number_format($ttcoluna5,2,",",".");
	    $ttcoluna6=number_format($ttcoluna6,2,",",".");
	    $ttcoluna7=number_format($ttcoluna7,2,",",".");
	    $ttcoluna8=number_format($ttcoluna8,2,",",".");
	    $ttcoluna9=number_format($ttcoluna9,2,",",".");
	    $ttcoluna10=number_format($ttcoluna10,2,",",".");
	    $ttcoluna11=number_format($ttcoluna11,2,",",".");
	    $dif=number_format($dif,2,",",".");
	    echo "<td><font color=\"black\" size=4><strong>".'TT'."</td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna1."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna2."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna3."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna4."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna5."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna6."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna7."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna8."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna9."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna10."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna11."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$dif."</strong></font></td>\n";
	    echo "</tr>\n";
	}
	
	if ($base=='E') {
	    echo "<table border='2' width='20%' bgcolor=#F5F6CE >";
	    echo "<tr><td ><font color=\"black\" size=3><strong>Estoques Esportes</strong></font></td>"."</tr>";
	    echo "<table border='2' width='20%' bgcolor=#01DFD7 >";
	    echo "<tr><td><font color=\"black\" size=3><strong>ESTOQUES $meses[$mes] $ano</strong></font></td>"."</tr>";
	    echo "</table>";
	    echo "<table border='2' width='105%' bgcolor=#F6D8CE >";
	    echo "<tr><td><font color=\"black\" size=3><strong>Linha</strong></font></td>"."<td><font color=\"black\" size=3><strong>Confecções Matriz</strong></font></td>"."<td><font color=\"black\" size=3><strong>Confecções Filial</strong></font></td>".
	        "<td><font color=\"black\" size=3><strong>Esportes</strong></font></td>"."<td><font color=\"black\" size=3><strong>Calçados Matriz</strong></font></td>"."<td><font color=\"black\" size=3><strong>Calçados Filial</strong></font></td>".
	        "<td><font color=\"black\" size=3><strong>Videira</strong></font></td>"."<td><font color=\"black\" size=3><strong>Shop Masp</strong></font></td>"."<td><font color=\"black\" size=3><strong>Atacadão</strong></font></td>".
	        "<td><font color=\"black\" size=3><strong>Lages</strong></font></td>"."<td><font color=\"black\" size=3><strong>Atacadão Lages</strong></font></td>"."<td><font color=\"black\" size=3><strong>Martello</strong></font></td>"."<td><font color=\"black\" size=3><strong>Total</strong></font></td>"."</tr>";
	    echo "<td><font color=\"black\" size=4><strong>".'Esportes'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    $sql="select ccodlinha,cdeslinha from tlinha where cdeslinha ilike ('%ESPORTES%') order by cdeslinha ";
	    $exsql=pg_query($conc,$sql);
	    $tt1='0.00';
	    $ttcoluna1='0.00';
	    $tt2='0.00';
	    $ttcoluna2='0.00';
	    $tt3='0.00';
	    $ttcoluna3='0.00';
	    $tt4='0.00';
	    $ttcoluna4='0.00';
	    $tt5='0.00';
	    $ttcoluna5='0.00';
	    $tt6='0.00';
	    $ttcoluna6='0.00';
	    $tt7='0.00';
	    $ttcoluna7='0.00';
	    $tt8='0.00';
	    $ttcoluna8='0.00';
	    $tt9='0.00';
	    $ttcoluna9='0.00';
	    $tt10='0.00';
	    $ttcoluna10='0.00';
	    $tt11='0.00';
	    $ttcoluna11='0.00';
	    while ($row = pg_fetch_assoc($exsql)) {
	        $codl=$row['ccodlinha'];
	        $deslinha=$row['cdeslinha'];
	        echo "<td>".$deslinha."</td>\n";
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (1,2)
	        and ccodlinha = $codl
	        and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conc,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $dif=$estoque;
	        $ttcoluna1=$ttcoluna1+$estoque;
	        $tt1=$tt1+$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        
	        
	        
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (9,10)
	        and ccodlinha = $codl
	        and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conc,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque1=$rsquery['estoque'];
	        
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (3,4)
	        and ccodlinha = $codl
	        and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conj,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque2=$rsquery['estoque'];
	        
	        $estoque=$estoque1+$estoque2;
	        $dif=$dif+$estoque;
	        $ttcoluna2=$ttcoluna2+$estoque;
	        $tt2=$tt2+$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (3,4)
	        and ccodlinha = $codl
	        and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conc,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $dif=$dif+$estoque;
	        $ttcoluna3=$ttcoluna3+$estoque;
	        $tt3=$tt3+$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (7,8)
	        and ccodlinha = $codl
	        and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conc,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $dif=$dif+$estoque;
	        $ttcoluna4=$ttcoluna4+$estoque;
	        $tt4=$tt4+$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (5,6)
	        and ccodlinha = $codl
	        and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conc,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $dif=$dif+$estoque;
	        $ttcoluna5=$ttcoluna5+$estoque;
	        $tt5=$tt5+$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        
	        
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (13,14)
	        and ccodlinha = $codl
	        and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conv,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $dif=$dif+$estoque;
	        $ttcoluna6=$ttcoluna6+$estoque;
	        $tt6=$tt6+$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (17,18)
	        and ccodlinha = $codl
	        and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conv,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $dif=$dif+$estoque;
	        $ttcoluna7=$ttcoluna7+$estoque;
	        $tt7=$tt7+$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (1,2)
	        and ccodlinha = $codl
	        and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conj,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $dif=$dif+$estoque;
	        $ttcoluna8=$ttcoluna8+$estoque;
	        $tt8=$tt8+$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (1,2)
	        and ccodlinha = $codl
	        and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conl,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $dif=$dif+$estoque;
	        $ttcoluna9=$ttcoluna9+$estoque;
	        $tt9=$tt9+$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (3,4)
	        and ccodlinha = $codl
	        and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conl,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $dif=$dif+$estoque;
	        $ttcoluna10=$ttcoluna10+$estoque;
	        $tt10=$tt10+$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (3,4)
	        and ccodlinha = $codl
	        and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conc,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $dif=$dif+$estoque;
	        $ttcoluna11=$ttcoluna11+$estoque;
	        $tt11=$tt11+$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        
	        if ($dif< 0) {
	            $cor="red";
	        } else {
	            $cor="black";
	        }
	        $dif=number_format($dif,2,",",".");
	        echo "<td><font color=\"$cor\">".'R$'.$dif."</font></td>\n";
	        $dif=0.00;
	        
	        echo "</tr>\n";
	    }
	    $dif=$ttcoluna1+$ttcoluna2+$ttcoluna3+$ttcoluna4+$ttcoluna5+$ttcoluna6+$ttcoluna7+$ttcoluna8+$ttcoluna9+$ttcoluna10+$ttcoluna11;
	    $ttcoluna1=number_format($ttcoluna1,2,",",".");
	    $ttcoluna2=number_format($ttcoluna2,2,",",".");
	    $ttcoluna3=number_format($ttcoluna3,2,",",".");
	    $ttcoluna4=number_format($ttcoluna4,2,",",".");
	    $ttcoluna5=number_format($ttcoluna5,2,",",".");
	    $ttcoluna6=number_format($ttcoluna6,2,",",".");
	    $ttcoluna7=number_format($ttcoluna7,2,",",".");
	    $ttcoluna8=number_format($ttcoluna8,2,",",".");
	    $ttcoluna9=number_format($ttcoluna9,2,",",".");
	    $ttcoluna10=number_format($ttcoluna10,2,",",".");
	    $ttcoluna11=number_format($ttcoluna11,2,",",".");
	    $dif=number_format($dif,2,",",".");
	    echo "<td><font color=\"black\" size=4><strong>".'TT'."</td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna1."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna2."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna3."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna4."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna5."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna6."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna7."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna8."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna9."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna10."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna11."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$dif."</strong></font></td>\n";
	    echo "</tr>\n";
	}
	
	if ($base=='C') {
	    echo "<table border='2' width='20%' bgcolor=#F5F6CE >";
	    echo "<tr><td ><font color=\"black\" size=3><strong>Estoques de Caçador</strong></font></td>"."</tr>";
	    echo "</table>";
	    echo "<table border='2' width='20%' bgcolor=#01DFD7 >";
	     echo "<tr><td><font color=\"black\" size=3><strong>ESTOQUES $meses[$mes] $ano</strong></font></td>"."<td><font color=\"black\" size=3><strong>Data: $dianovo</strong></font></td>"."</tr>";
	    echo "</table>";
	    echo "<table border='2' width='100%' bgcolor=#F6D8CE >";
	    echo "<tr><td><font color=\"black\" size=3><strong></strong></font></td>"."<td><font color=\"black\" size=3><strong>Caçador</strong></font></td>"."<td><font color=\"black\" size=3><strong>Caçador/$anoant</strong></font></td>".
	        "<td><font color=\"black\" size=3><strong>Diferença</strong></font></td>"."<td><font color=\"black\" size=3><strong>Atacadão</strong></font></td>"."<td><font color=\"black\" size=3><strong>Atacadão/$anoant</strong></font></td>".
	        "<td><font color=\"black\" size=3><strong>Diferença</strong></font></td>"."<td><font color=\"black\" size=3><strong>Comparativo</strong></font></td>"."</tr>";        
	    echo "<td><font color=\"black\" size=4><strong>".'Calçados'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    $sql="select ccodlinha from tlinha where cdeslinha ilike ('%CALÇADOS%') order by cdeslinha ";
	    $ttcoluna1='0.00'; //Total Coluna 1 da Linha dos Produtos
	    $ttgeral='0.00';   //Total Coluna 1 Geral De Todas Linhas
	    $ttcoluna2='0.00'; //Total Coluna 2 da Linha dos Produtos
	    $ttgera2='0.00';   //Total Coluna 2 Geral  De Todas Linhas    
	    $ttcoluna3='0.00'; //Total Coluna 3 da Linha dos Produtos
	    $ttgera3='0.00';   //Total Coluna 3 Geral De Todas Linhas
	    $ttcoluna4='0.00'; //Total Coluna 4 da Linha dos Produtos
	    $ttgera4='0.00';   //Total Coluna 4 Geral De Todas Linhas
	    $exsql=pg_query($conc,$sql);
	    while ($row = pg_fetch_assoc($exsql)) {
	       $codl=$row['ccodlinha'];
	       //Caçador+ Joinville (3,4) (Ano Atual)
	       $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf'
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
			
	       $exquery=pg_query($conc,$query);
	       $rsquery=pg_fetch_array($exquery);
	       $deslinha=$rsquery['cdeslinha'];
	       $estoqueb1=$rsquery['estoque'];
	       $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (3,4)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";  
	       $exquery=pg_query($conj,$query);
	       $rsquery=pg_fetch_array($exquery);       
	       $estoqueb2=$rsquery['estoque'];            
	       if ($deslinha <> '') {
	           echo "<td>".$deslinha."</td>\n";
	       }else {
	           $query="select cdeslinha from tlinha where ccodlinha = $codl ";
	           $exquery=pg_query($conc,$query);
	           $rsquery=pg_fetch_array($exquery);
	           $deslinha=$rsquery['cdeslinha'];
	           echo "<td>".$deslinha."</td>\n";
	       }
	       $estoque=$estoqueb1+$estoqueb2;
	       $cedula=$estoque;
	       //Soma das Linhas e Soma Geral
	       $ttcoluna1=$ttcoluna1+$estoque;
	       $ttgeral=$ttgeral+$estoque;       
	       $estoque=number_format($estoque,2,",",".");
	       echo "<td>".'R$'.$estoque."</td>\n";      
	       //Caçador+ Joinville (3,4) (Ano Anterior)
	       
	       $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$datafant'
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";		
	       $exquery=pg_query($conc,$query);
	       $rsquery=pg_fetch_array($exquery);
	       $deslinha=$rsquery['cdeslinha'];
	       $estoqueb1=$rsquery['estoque'];
	       $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$datafant' and cemphistorico in (3,4)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	       $exquery=pg_query($conj,$query);
	       $rsquery=pg_fetch_array($exquery);       
	       $estoqueb2=$rsquery['estoque'];
	       $estoque=$estoqueb1+$estoqueb2;
	       $cedula=$cedula-$estoque;
	       
	       //Soma das Linhas e Soma Geral
	       $ttcoluna2=$ttcoluna2+$estoque;
	       $ttgera2=$ttgera2+$estoque;      
	       
	       
	       $estoque=number_format($estoque,2,",",".");
	       echo "<td>".'R$'.$estoque."</td>\n";
	       $cedula=number_format($cedula,2,",",".");
	       if ($cedula<= 0) {
	           $cor="red";
	       } else {
	           $cor="black";
	       }
	       echo "<td><font color=\"$cor\">".'R$'.$cedula."</font></td>\n";
	       
	       
	       $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (1,2)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	       $exquery=pg_query($conj,$query);
	       $rsquery=pg_fetch_array($exquery);       
	       $estoque=$rsquery['estoque'];
	       $cedula=$estoque;
	       $ttcoluna3=$ttcoluna3+$estoque;
	       $ttgera3=$ttgera3+$estoque;
	       $estoque=number_format($estoque,2,",",".");
	       echo "<td>".'R$'.$estoque."</td>\n";
	       $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$datafant' and cemphistorico in (1,2)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	       $exquery=pg_query($conj,$query);
	       $rsquery=pg_fetch_array($exquery);
	       $estoque=$rsquery['estoque'];
	       $cedula=$cedula-$estoque;
	       $ttcoluna4=$ttcoluna4+$estoque;
	       $ttgera4=$ttgera4+$estoque;
	       $estoque=number_format($estoque,2,",",".");       
	       echo "<td>".'R$'.$estoque."</td>\n";
	       $cedula=number_format($cedula,2,",",".");  
	       if ($cedula<= 0) {
	           $cor="red";
	       } else {
	           $cor="black";
	       }
	       echo "<td><font color=\"$cor\">".'R$'.$cedula."</font></td>\n";
	       
	       echo "<td>".'R$0,00'."</td>\n";
	       echo "</tr>\n";
	       
	       
	    }
	    $cedula=$ttcoluna1-$ttcoluna2;
	    $cedula1=$ttcoluna3-$ttcoluna4;
	    echo "<td><font color=\"black\" size=4><strong>".'TT'."</td>\n";
	    $ttcoluna1=number_format($ttcoluna1,2,",",".");
	    $ttcoluna2=number_format($ttcoluna2,2,",",".");
	    $ttcoluna3=number_format($ttcoluna3,2,",",".");
	    $ttcoluna4=number_format($ttcoluna4,2,",",".");    
	    $cedula=number_format($cedula,2,",",".");
	    $cedula1=number_format($cedula1,2,",",".");
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna1."</strong></font></td>\n";    
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna2."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$cedula."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna3."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna4."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$cedula1."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".'R$0,00'."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Confecções'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";    
	    $ttcoluna1='0.00'; //Total Coluna 1 da Linha dos Produtos
	    $ttcoluna2='0.00'; //Total Coluna 2 da Linha dos Produtos
	    $ttcoluna3='0.00'; //Total Coluna 2 da Linha dos Produtos
	    $ttcoluna4='0.00'; //Total Coluna 2 da Linha dos Produtos
	    $sql="select ccodlinha from tlinha where cdeslinha ilike ('%CONFECÇÕES%') order by cdeslinha ";
	    $exsql=pg_query($conc,$sql);
	    while ($row = pg_fetch_assoc($exsql)) {
	        $codl=$row['ccodlinha'];
	        //Caçador+ Joinville (3,4) (Ano Atual)
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf'
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";        
	        $exquery=pg_query($conc,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $deslinha=$rsquery['cdeslinha'];
	        $estoqueb1=$rsquery['estoque'];
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (3,4)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conj,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoqueb2=$rsquery['estoque'];
	        if ($deslinha <> '') {
	            echo "<td>".$deslinha."</td>\n";
	        }else {
	            $query="select cdeslinha from tlinha where ccodlinha = $codl ";
	            $exquery=pg_query($conc,$query);
	            $rsquery=pg_fetch_array($exquery);
	            $deslinha=$rsquery['cdeslinha'];
	            echo "<td>".$deslinha."</td>\n";
	        }
	        $estoque=$estoqueb1+$estoqueb2;
	        $cedula=$estoque;
	        //Soma das Linhas e Soma Geral
	        $ttcoluna1=$ttcoluna1+$estoque;
	        $ttgeral=$ttgeral+$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        //Caçador+ Joinville (3,4) (Ano Anterior)
	        
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$datafant'
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conc,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $deslinha=$rsquery['cdeslinha'];
	        $estoqueb1=$rsquery['estoque'];
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$datafant' and cemphistorico in (3,4)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conj,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoqueb2=$rsquery['estoque'];
	        $estoque=$estoqueb1+$estoqueb2;
	        $cedula=$cedula-$estoque;        
	        //Soma das Linhas e Soma Geral
	        $ttcoluna2=$ttcoluna2+$estoque;
	        $ttgera2=$ttgera2+$estoque;        
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        $cedula=number_format($cedula,2,",",".");
	        if ($cedula<= 0) {
	            $cor="red";
	        } else {
	            $cor="black";
	        }
	        echo "<td><font color=\"$cor\">".'R$'.$cedula."</font></td>\n";
	        
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (1,2)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conj,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $cedula=$estoque;
	        $ttcoluna3=$ttcoluna3+$estoque;
	        $ttgera3=$ttgera3+$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$datafant' and cemphistorico in (1,2)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conj,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $cedula=$cedula-$estoque;
	        $ttcoluna4=$ttcoluna4+$estoque;
	        $ttgera4=$ttgera4+$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        $cedula=number_format($cedula,2,",",".");
	        if ($cedula<= 0) {
	            $cor="red";
	        } else {
	            $cor="black";
	        }
	        echo "<td><font color=\"$cor\">".'R$'.$cedula."</font></td>\n";
	        $cedula1='0.00';
	        echo "<td>".'R$0,00'."</td>\n";
	        echo "</tr>\n";
	        
	    }
	    $cedula=$ttcoluna1-$ttcoluna2;
	    $cedula1=$ttcoluna3-$ttcoluna4;
	    echo "<td><font color=\"black\" size=4><strong>".'TT'."</td>\n";
	    $ttcoluna1=number_format($ttcoluna1,2,",",".");
	    $ttcoluna2=number_format($ttcoluna2,2,",",".");
	    $ttcoluna3=number_format($ttcoluna3,2,",",".");
	    $ttcoluna4=number_format($ttcoluna4,2,",",".");
	    $cedula=number_format($cedula,2,",",".");
	    $cedula1=number_format($cedula1,2,",",".");
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna1."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna2."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$cedula."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna3."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna4."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$cedula1."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".'R$0,00'."</strong></font></td>\n";
	    echo "</tr>\n";    
	    $ttcoluna1='0.00'; //Total Coluna 1 da Linha dos Produtos
	    $ttcoluna2='0.00'; //Total Coluna 2 da Linha dos Produtos 
	    $ttcoluna3='0.00'; //Total Coluna 2 da Linha dos Produtos 
	    $ttcoluna4='0.00'; //Total Coluna 2 da Linha dos Produtos 
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Esportes'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".''."</td>\n";
	    echo "</tr>\n";
	    $sql="select ccodlinha from tlinha where cdeslinha ilike ('%ESPORTES%') order by cdeslinha ";
	    $exsql=pg_query($conc,$sql);
	    while ($row = pg_fetch_assoc($exsql)) {
	        $codl=$row['ccodlinha'];
	        //Caçador+ Joinville (3,4) (Ano Atual)
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf'
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conc,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $deslinha=$rsquery['cdeslinha'];
	        $estoqueb1=$rsquery['estoque'];
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (3,4)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conj,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoqueb2=$rsquery['estoque'];
	        if ($deslinha <> '') {
	            echo "<td>".$deslinha."</td>\n";
	        }else {
	            $query="select cdeslinha from tlinha where ccodlinha = $codl ";
	            $exquery=pg_query($conc,$query);
	            $rsquery=pg_fetch_array($exquery);
	            $deslinha=$rsquery['cdeslinha'];
	            echo "<td>".$deslinha."</td>\n";
	        }
	        $estoque=$estoqueb1+$estoqueb2;
	        $cedula=$estoque;
	        //Soma das Linhas e Soma Geral
	        $ttcoluna1=$ttcoluna1+$estoque;
	        $ttgeral=$ttgeral+$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        //Caçador+ Joinville (3,4) (Ano Anterior)
	        
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$datafant'
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conc,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $deslinha=$rsquery['cdeslinha'];
	        $estoqueb1=$rsquery['estoque'];
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (3,4)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conj,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoqueb2=$rsquery['estoque'];
	        $estoque=$estoqueb1+$estoqueb2;
	        $cedula=$cedula-$estoque;
	        //Soma das Linhas e Soma Geral
	        $ttcoluna2=$ttcoluna2+$estoque;
	        $ttgera2=$ttgera2+$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        $cedula=number_format($cedula,2,",",".");
	        if ($cedula<= 0) {
	            $cor="red";
	        } else {
	            $cor="black";
	        }
	        echo "<td><font color=\"$cor\">".'R$'.$cedula."</font></td>\n";
	        $cedula='0.00';
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (1,2)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conj,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $cedula1=$estoque;
	        $ttcoluna3=$ttcoluna3+$estoque;
	        $ttgera3=$ttgera3+$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        $query="select cdeslinha,(sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$datafant' and cemphistorico in (1,2)
	        and ccodlinha = $codl
	         and cbaiesthistorico =0 group by ccodlinha";
	        $exquery=pg_query($conj,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $cedula1=$cedula1-$estoque;
	        $ttcoluna4=$ttcoluna4+$estoque;
	        $ttgera4=$ttgera4+$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        $cedula1=number_format($cedula1,2,",",".");
	        if ($cedula1<= 0) {
	            $cor="red";
	        } else {
	            $cor="black";
	        }
	        echo "<td><font color=\"$cor\">".'R$'.$cedula1."</font></td>\n";
	        $cedula1='0.00';
	        echo "<td>".'R$0,00'."</td>\n";
	        echo "</tr>\n";
	    }
	    $cedula=$ttcoluna1-$ttcoluna2;
	   
	    $cedula1=$ttcoluna3-$ttcoluna4;
	    echo "<td><font color=\"black\" size=4><strong>".'TT'."</td>\n";
	    $ttcoluna1=number_format($ttcoluna1,2,",",".");
	    $ttcoluna2=number_format($ttcoluna2,2,",",".");
	    $ttcoluna3=number_format($ttcoluna3,2,",",".");
	    $ttcoluna4=number_format($ttcoluna4,2,",",".");
	    $cedula=number_format($cedula,2,",",".");
	    $cedula1=number_format($cedula1,2,",",".");
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna1."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna2."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$cedula."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna3."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttcoluna4."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$cedula1."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".'R$0,00'."</strong></font></td>\n";
	    echo "</tr>\n";    
	    $ttcoluna1='0.00'; //Total Coluna 1 da Linha dos Produtos
	    $ttcoluna2='0.00'; //Total Coluna 2 da Linha dos Produtos
	    $ttcoluna3='0.00'; //Total Coluna 2 da Linha dos Produtos
	    $ttcoluna4='0.00'; //Total Coluna 2 da Linha dos Produtos    
	    echo "<td><font color=\"black\" size=4><strong>".'Brinquedos'."</td>\n";
	    $sql="select ccodlinha from tlinha where cdeslinha ilike ('%BRINQUEDOS%') order by cdeslinha ";
	    $exsql=pg_query($conc,$sql);
	    while ($row = pg_fetch_assoc($exsql)) {
	        $codl=$row['ccodlinha'];
	        $query="select (sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf'
	        and ccodlinha = $codl";        
	        $exquery=pg_query($conc,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque1=$rsquery['estoque'];
	        $query="select (sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (3,4)
	        and ccodlinha = $codl";
	        $exquery=pg_query($conj,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque2=$rsquery['estoque'];
	        $estoque=$estoque1+$estoque2;       
	        $cedula=$estoque;
	        $ttcoluna1=$ttcoluna1+$estoque;
	        $ttgeral=$ttgeral+$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";        
	        $query="select (sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$datafant'
	        and ccodlinha = $codl";
	        $exquery=pg_query($conc,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque1=$rsquery['estoque'];
	        $query="select (sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$datafant' and cemphistorico in (3,4)
	        and ccodlinha = $codl";
	        $exquery=pg_query($conj,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque2=$rsquery['estoque'];
	        $estoque=$estoque1+$estoque2;
	        $cedula=$cedula-$estoque;
	        $ttcoluna2=$ttcoluna2+$estoque;
	        $ttgera2=$ttgera2+$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        $cedula=number_format($cedula,2,",",".");
	        echo "<td>".'R$'.$cedula."</td>\n";
	        $query="select (sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (1,2)
	        and ccodlinha = $codl";
	        $exquery=pg_query($conj,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $cedula=$estoque;
	        $ttcoluna3=$ttcoluna3+$estoque;
	        $ttgera3=$ttgera3+$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        $query="select (sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$datafant' and cemphistorico in (1,2)
	        and ccodlinha = $codl";
	        $exquery=pg_query($conj,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $cedula=$cedula-$estoque;
	        $ttcoluna4=$ttcoluna4+$estoque;
	        $ttgera4=$ttgera4+$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        $cedula=number_format($cedula,2,",",".");
	        echo "<td>".'R$'.$cedula."</td>\n";
	        echo "<td>".'R$0,00'."</td>\n";      
	        echo "</tr>\n";
	        
	    }    
	    echo "<td><font color=\"black\" size=4><strong>".'Total Geral'."</td>\n";
	    $cedula=$ttgeral-$ttgera2;
	    $cedula1=$ttgera3-$ttgera4;
	    $ttgeral=number_format($ttgeral,2,",",".");
	    $ttgera2=number_format($ttgera2,2,",",".");
	    $cedula=number_format($cedula,2,",",".");
	    $ttgera3=number_format($ttgera3,2,",",".");
	    $ttgera4=number_format($ttgera4,2,",",".");
	    $cedula1=number_format($cedula1,2,",",".");
	    echo "<td><font color=\"red\" size=4><strong>".$ttgeral."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttgera2."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$cedula."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttgera3."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$ttgera4."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".$cedula1."</strong></font></td>\n";
	    echo "<td><font color=\"red\" size=4><strong>".'R$0,00'."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Areceber'."</td>\n";
	    $datain=date('Y-m-d', strtotime($dataf. '-90 days'));
	    $sql="select (sum(cvprdupli)) as pagas from asduplicatas where  cvendupli >='$datain' and cvendupli <= '$dataf' and cdpadupli is not null";
	    $exsql=pg_query($conc,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $pagas=$rssql['pagas'];
	    $sql="select (sum(cvprdupli)) as vencidas from asduplicatas where cvendupli >='$datain' and cvendupli <= '$dataf'  ";
	    $exsql=pg_query($conc,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $venc=$rssql['vencidas'];
	    $perc=3.0/100.0;
	    $venc=$venc-($perc *$venc );
	    $venc=$venc-$pagas;
	    $sql="select (sum(cvprdupli)) as receber from asduplicatas where cvendupli > '$dataf' and cdpadupli is null ";
	    $exsql=pg_query($conc,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $avenc=$rssql['receber'];
	    $avenc=$avenc-($perc*$avenc);
	    $parcela1=$venc+$avenc;
	    
	    $sql="select (sum(cvprdupli)) as pagas from asduplicatas where  cvendupli >='$datain' and cvendupli <= '$dataf' and cempdupli in (3,4) and cdpadupli is not null";
	    $exsql=pg_query($conj,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $pagas=$rssql['pagas'];
	    $sql="select (sum(cvprdupli)) as vencidas from asduplicatas where cvendupli >='$datain' and cvendupli <= '$dataf'  and cempdupli in (3,4) ";
	    $exsql=pg_query($conj,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $venc=$rssql['vencidas'];
	    $perc=3.0/100.0;
	    $venc=$venc-($perc *$venc );
	    $venc=$venc-$pagas;
	    $sql="select (sum(cvprdupli)) as receber from asduplicatas where cvendupli > '$dataf' and cempdupli in (3,4) and cdpadupli is null ";
	    $exsql=pg_query($conj,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $avenc=$rssql['receber'];
	    $avenc=$avenc-($perc*$avenc);
	    $parcela2=$venc+$avenc;
	    $parcela=$parcela1+$parcela2;
	    $parcela=number_format($parcela,2,",",".");
	    echo "<td><font color=\"black\" size=4><strong>".$parcela."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'0,00'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'0,00'."</strong></font></td>\n";
	    
	    $sql="select (sum(cvprdupli)) as pagas from asduplicatas where  cvendupli >='$datain' and cvendupli <= '$dataf' and cempdupli in (1,2) and cdpadupli is not null";
	    $exsql=pg_query($conj,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $pagas=$rssql['pagas'];
	    $sql="select (sum(cvprdupli)) as vencidas from asduplicatas where cvendupli >='$datain' and cvendupli <= '$dataf'  and cempdupli in (1,2) ";
	    $exsql=pg_query($conj,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $venc=$rssql['vencidas'];
	    $perc=3.0/100.0;
	    $venc=$venc-($perc *$venc );
	    $venc=$venc-$pagas;
	    $sql="select (sum(cvprdupli)) as receber from asduplicatas where cvendupli > '$dataf' and cempdupli in (1,2) and cdpadupli is null ";
	    $exsql=pg_query($conj,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $avenc=$rssql['receber'];
	    $avenc=$avenc-($perc*$avenc);
	    $parcela=$venc+$avenc;    
	    $parcela=number_format($parcela,2,",",".");
	    echo "<td><font color=\"black\" size=4><strong>".$parcela."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'0,00'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'0,00'."</strong></font></td>\n"; 
	    echo "<td><font color=\"black\" size=4><strong>".'0,00'."</strong></font></td>\n";  
	    echo "</tr>\n";    
	    $sql="select (sum(cvalduplicata )) as avencer from aeduplicatas where cvenduplicata > '$dataf' and cdpaduplicata is null";    
	    $exsql=pg_query($conc,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $dupliab1=$rssql['avencer'];
	    $sql="select (sum(cvapduplicata )) as pagas from aeduplicatas where  cdpaduplicata >  '$dataf'";
	    $exsql=pg_query($conc,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $duplipg1=$rssql['pagas'];
	    $dif1=$dupliab1+$duplipg1;
	    $sql="select (sum(cvalduplicata )) as avencer from aeduplicatas where cvenduplicata > '$dataf' and cdpaduplicata is null";
	    $exsql=pg_query($conj,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $dupliab2=$rssql['avencer'];
	    $sql="select (sum(cvapduplicata )) as pagas from aeduplicatas where  cdpaduplicata >  '$dataf'  ";
	    $exsql=pg_query($conj,$sql);
	    $rssql=pg_fetch_array($exsql);
	    $duplipg2=$rssql['pagas'];
	    $dif2=$dupliab2+$duplipg2;
	    $dupliab= $dupliab1+ $dupliab2;
	    $duplipg=$duplipg1+$duplipg2;
	    $dif=$dif1+$dif2;   
	    $duplipg=number_format($duplipg,2,",",".");
	    $dupliab=number_format($dupliab,2,",",".");
	    $dif=number_format($dif,2,",",".");
	    echo "<td><font color=\"black\" size=4><strong>".'Duplicatas Apagar'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".$dupliab."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'0,00'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'0,00'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'0,00'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'0,00'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'0,00'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'0,00'."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Duplicatas Pagas'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".$duplipg."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'0,00'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'0,00'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'0,00'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'0,00'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'0,00'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'0,00'."</strong></font></td>\n";
	    echo "</tr>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'Total de Duplicatas'."</td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".$dif."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'0,00'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'0,00'."</strong></font></td>\n";    
	    echo "<td><font color=\"black\" size=4><strong>".'0,00'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'0,00'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'0,00'."</strong></font></td>\n";
	    echo "<td><font color=\"black\" size=4><strong>".'0,00'."</strong></font></td>\n";
	    echo "</tr>\n";    
	    echo "<td><font color=\"black\" size=4><strong>".'Uniforme Escolar'."</td>\n";
	    $sql="select ccodlinha from tlinha where cdeslinha ilike ('%UNIFORME%') order by cdeslinha ";
	    $exsql=pg_query($conc,$sql);
	    while ($row = pg_fetch_assoc($exsql)) {
	        $codl=$row['ccodlinha'];        
	        $query="select (sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf'
	        and ccodlinha = $codl";       
	        $exquery=pg_query($conc,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque1=$rsquery['estoque'];
	        $query="select (sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (3,4)
	        and ccodlinha = $codl";
	        $exquery=pg_query($conj,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque2=$rsquery['estoque'];
	        $estoque=$estoque1+$estoque2;
	        $cedula=$estoque;       
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        $query="select (sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$datafant'
	        and ccodlinha = $codl";
	        $exquery=pg_query($conc,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque1=$rsquery['estoque'];
	        $query="select (sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$datafant' and cemphistorico in (3,4)
	        and ccodlinha = $codl";
	        $exquery=pg_query($conj,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque2=$rsquery['estoque'];
	        $estoque=$estoque1+$estoque2;
	        $cedula=$cedula-$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        $cedula=number_format($cedula,2,",",".");
	        echo "<td>".'R$'.$cedula."</td>\n";
	        $query="select (sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto 
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$dataf' and cemphistorico in (1,2)
	        and ccodlinha = $codl";
	        $exquery=pg_query($conj,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $cedula=$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        $query="select (sum((centhistorico-csaihisotorico)*cpcuproduto))as estoque from tlinha
	        left join aprodutos on ccodlinha=clinproduto 
	        left join ahistorico on ccodproduto=cprohistorico
	        where cemihistorico <= '$datafant' and cemphistorico in (1,2)
	        and ccodlinha = $codl";        
	        $exquery=pg_query($conj,$query);
	        $rsquery=pg_fetch_array($exquery);
	        $estoque=$rsquery['estoque'];
	        $cedula=$cedula-$estoque;
	        $estoque=number_format($estoque,2,",",".");
	        echo "<td>".'R$'.$estoque."</td>\n";
	        $cedula=number_format($cedula,2,",",".");
	        echo "<td>".'R$'.$cedula."</td>\n";
	        echo "<td>".'R$0,00'."</td>\n";       
	        echo "</tr>\n";      
	    }   
	}
}
if ($base=='VE') {
		$datain=$_POST['datai'];
	if ($datain == null ) {
		exit("<script>alert('Data Inicial Inválida');</script>".$volta);
	}
	$dataf=$_POST['dataf'];
	if ($dataf == null ) {
		exit("<script>alert('Data Final Inválida');</script>".$volta);
	}
	$dataina=$_POST['dataia'];
	if ($dataina == null) {
		$partes = explode("-", $datain);
	    $ano = $partes[0];
	    $mes = $partes[1];
	    $dia = $partes[2];
	    $anoant=$ano-1;
	    $dataina=$anoant.'-'.$mes.'-'.$dia;	    
	} else {
		$partes = explode("-", $datain);
	    $ano = $partes[0];
	    $mes = $partes[1];
	    $dia = $partes[2];
	    $anoant=$ano-1;   
	} 
	$datafa=$_POST['datafa'];
	if ($datafa == null) {
		$partes = explode("-", $dataf);
	    $ano = $partes[0];
	    $mes = $partes[1];
	    $dia = $partes[2];
	    $anoant=$ano-1;
	    $datafa=$anoant.'-'.$mes.'-'.$dia;	   
	}
	echo "<table border='2' width='100%' bgcolor=#FFFFF0 >";
    echo "<tr><td><font color=\"black\" size=3><strong>Loja</strong></font></td>"."<td><font color=\"black\" size=3><strong>Venda/$ano</strong></font></td>".
    "<td><font color=\"black\" size=3><strong>Lucro Bruto</strong></font></td>"."<td><font color=\"black\" size=3><strong>Venda/$anoant</strong></font></td>".
    "<td><font color=\"black\" size=3><strong>Lucro Bruto</strong></font></td>"."<td><font color=\"black\" size=3><strong>%Venda</strong></font></td>".
    "<td><font color=\"black\" size=3><strong>%Bruto</strong></font></td>"."<td><font color=\"black\" size=3><strong>Valores</strong></font></td>".
    "<td><font color=\"black\" size=3><strong>Resultado</strong></font></td>"."</tr>";
	$ttcoluna1=0.00;
	$ttsubgrupo1=0.00;
	$ttcoluna2=0.00;
	$ttsubgrupo2=0.00;
	$ttcoluna3=0.00;
	$ttsubgrupo3=0.00;
	$ttcoluna4=0.00;
	$ttsubgrupo4=0.00;
	

	
	$sql="select (select sum (csaihisotorico*cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='S' and cdeslinha ilike '%ESPORTES%') as a,
	(select sum (centhistorico *cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='E'  and cdeslinha ilike '%ESPORTES%') as b,
	(select sum (csaihisotorico*n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='S'  and cdeslinha  ilike '%ESPORTES%') as c,
	(select sum (centhistorico *n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='E'  and cdeslinha  ilike '%ESPORTES%') as d,
	(select sum (csaihisotorico*cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='S'   and cdeslinha ilike '%ESPORTES%') as e,
	(select sum (centhistorico *cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='E'  and cdeslinha ilike '%ESPORTES%') as f,
	(select sum (csaihisotorico*n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='S' and cdeslinha ilike '%ESPORTES%') as g,
	(select sum (centhistorico *n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='E' and cdeslinha ilike '%ESPORTES%') as h";
	$exsql=pg_query($conl,$sql);
    $rssql=pg_fetch_array($exsql);
    $venda=$rssql['a'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['b'];
    if ($troca == null) {
    	$troca=0.00;
    }        
    $esportesatual=$venda-$troca;
	$ttcoluna1=$ttcoluna1+$esportesatual;
	$ttsubgrupo1=$ttsubgrupo1+$esportesatual;
    $venda=$rssql['c'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['d'];
    if ($troca == null) {
    	$troca=0.00;
    }    
	$custo=$venda-$troca;
	$brutoshop=$esportesatual-$custo;
	$ttcoluna2=$ttcoluna2+$brutoshop;
	$ttsubgrupo2=$ttsubgrupo2+$brutoshop; 
    $venda=$rssql['e'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['f'];
    if ($troca == null) {
    	$troca=0.00;
    }    
    $esportesant=$venda-$troca;
	$ttcoluna3=$ttcoluna3+$esportesant; 
	$ttsubgrupo3=$ttsubgrupo3+$esportesant;
    $venda=$rssql['g'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['h'];
    if ($troca == null) {
    	$troca=0.00;
    }    
	$custo=$venda-$troca;
	$brutoshopant=$esportesant-$custo;
	$ttcoluna4=$ttcoluna4+$brutoshopant;
	$ttsubgrupo4=$ttsubgrupo4+$brutoshopant;
	
	
	$sql="select (select sum (csaihisotorico*cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='S' and clinproduto <> 108  and cdeslinha not ilike '%ESPORTES%') as a,
	(select sum (centhistorico *cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='E' and clinproduto <> 108  and cdeslinha  not ilike '%ESPORTES%') as b,
	(select sum (csaihisotorico*n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='S' and clinproduto <> 108  and cdeslinha not ilike '%ESPORTES%') as c,
	(select sum (centhistorico *n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='E' and clinproduto <> 108  and cdeslinha  not ilike '%ESPORTES%') as d,
	(select sum (csaihisotorico*cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='S' and clinproduto <> 108  and cdeslinha not ilike '%ESPORTES%') as e,
	(select sum (centhistorico *cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='E' and clinproduto <> 108  and cdeslinha  not ilike '%ESPORTES%') as f,
	(select sum (csaihisotorico*n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='S' and clinproduto <> 108  and cdeslinha not ilike '%ESPORTES%') as g,
	(select sum (centhistorico *n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='E' and clinproduto <> 108  and cdeslinha  not ilike '%ESPORTES%') as h";
	$exsql=pg_query($conl,$sql);
    $rssql=pg_fetch_array($exsql);
    $venda=$rssql['a'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['b'];
    if ($troca == null) {
    	$troca=0.00;
    }    
    $calcadosatual=$venda-$troca;
	$ttcoluna1=$ttcoluna1+$calcadosatual; 
	$ttsubgrupo1=$ttsubgrupo1+$calcadosatual;
    $venda=$rssql['c'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['d'];
    if ($troca == null) {
    	$troca=0.00;
    }    
	$custo=$venda-$troca;
	$brutoc=$calcadosatual-$custo;
	$ttcoluna2=$ttcoluna2+$brutoc;
	$ttsubgrupo2=$ttsubgrupo2+$brutoc;
    $venda=$rssql['e'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['f'];
    if ($troca == null) {
    	$troca=0.00;
    }    
    $calcadosante=$venda-$troca;
	$ttcoluna3=$ttcoluna3+$calcadosante; 
	$ttsubgrupo3=$ttsubgrupo3+$calcadosante;
    $venda=$rssql['g'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['h'];
    if ($troca == null) {
    	$troca=0.00;
    }    
	$custo=$venda-$troca;
	$brutocaant=$calcadosante-$custo;
	$ttcoluna4=$ttcoluna4+$brutocaant;
	$ttsubgrupo4=$ttsubgrupo4+$brutocaant;
	
	
	
	$sql="select (select sum (csaihisotorico*cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='S' and clinproduto = 108) as a,
	(select sum (centhistorico *cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='E' and clinproduto = 108) as b,
	(select sum (csaihisotorico*n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='S' and clinproduto = 108  ) as c,
	(select sum (centhistorico *n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='E' and clinproduto = 108 ) as d,
	(select sum (csaihisotorico*cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='S' and clinproduto = 108  ) as e,
	(select sum (centhistorico *cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='E' and clinproduto = 108  ) as f,
	(select sum (csaihisotorico*n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='S' and clinproduto = 108  ) as g,
	(select sum (centhistorico *n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='E' and clinproduto = 108  ) as h";
	$exsql=pg_query($conl,$sql);
    $rssql=pg_fetch_array($exsql);
    $venda=$rssql['a'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['b'];
    if ($troca == null) {
    	$troca=0.00;
    }  
    $uniformeatual=$venda-$troca;
	$ttcoluna1=$ttcoluna1+$uniformeatual;
	$ttsubgrupo1=$ttsubgrupo1+$uniformeatual;
    $venda=$rssql['c'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['d'];
    if ($troca == null) {
    	$troca=0.00;
    }    
	$custo=$venda-$troca;
	$brutou=$uniformeatual-$custo;
	$ttcoluna2=$ttcoluna2+$brutou;
	$ttsubgrupo2=$ttsubgrupo2+$brutou; 
	$venda=$rssql['e'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['f'];
    if ($troca == null) {
    	$troca=0.00;
    }    
    $uniformeante=$venda-$troca;
	$ttcoluna3=$ttcoluna3+$uniformeante; 
	$ttsubgrupo3=$ttsubgrupo3+$uniformeante;
    $venda=$rssql['g'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['h'];
    if ($troca == null) {
    	$troca=0.00;
    }    
	$custo=$venda-$troca;
	$brutounfant=$uniformeante-$custo;
	$ttcoluna4=$ttcoluna4+$brutounfant;
	$ttsubgrupo4=$ttsubgrupo4+$brutounfant;
	
	
	
	$sql="select (select sum (csaihisotorico*cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (3,4) and i_tna_valida_comissao = '0' and ctessaidas='S') as a,
	(select sum (centhistorico *cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (3,4) and i_tna_valida_comissao = '0' and ctessaidas='E' ) as b,
	(select sum (csaihisotorico*n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (3,4) and i_tna_valida_comissao = '0' and ctessaidas='S' ) as c,
	(select sum (centhistorico *n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (3,4) and i_tna_valida_comissao = '0' and ctessaidas='E' ) as d,
	(select sum (csaihisotorico*cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (3,4) and i_tna_valida_comissao = '0') as e,
	(select sum (centhistorico *cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (3,4) and i_tna_valida_comissao = '0' ) as f,
	(select sum (csaihisotorico*n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (3,4) and i_tna_valida_comissao = '0' ) as g,
	(select sum (centhistorico *n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (3,4) and i_tna_valida_comissao = '0' ) as h";
	$exsql=pg_query($conl,$sql);
    $rssql=pg_fetch_array($exsql);
    $venda=$rssql['a'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['b'];
    if ($troca == null) {
    	$troca=0.00;
    }  
    $atacadoatual=$venda-$troca;
	$ttcoluna1=$ttcoluna1+$atacadoatual;
	$ttsubgrupo1=$ttsubgrupo1+$atacadoatual;
	$venda=$rssql['c'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['d'];
    if ($troca == null) {
    	$troca=0.00;
    }    
	$custo=$venda-$troca;
	$brutoat=$atacadoatual-$custo;
	$ttcoluna2=$ttcoluna2+$brutoat;
	$ttsubgrupo2=$ttsubgrupo2+$brutoat; 
	$venda=$rssql['e'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['f'];
    if ($troca == null) {
    	$troca=0.00;
    }    
    $atacadoant=$venda-$troca;
	$ttcoluna3=$ttcoluna3+$atacadoant; 
	$ttsubgrupo3=$ttsubgrupo3+$atacadoant;
    $venda=$rssql['g'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['h'];
    if ($troca == null) {
    	$troca=0.00;
    }    
	$custo=$venda-$troca;
	$brutoatant=$atacadoant-$custo;
	$ttcoluna4=$ttcoluna4+$brutoatant;
	$ttsubgrupo4=$ttsubgrupo4+$brutoatant;
	//Fim Lages
	

	
	
	
	
	
	
	
	
	echo "<td><font color=\"Red\" size=3><strong>".'Lages'."</strong></font></td>\n";
	echo "<td>".number_format($calcadosatual,2,",",".")."</td>\n";
	echo "<td>".number_format($brutoc,2,",",".")."</td>\n";
	echo "<td>".number_format($calcadosante,2,",",".")."</td>\n";
	echo "<td>".number_format($brutocaant,2,",",".")."</td>\n";
	$vendaporcento=((($calcadosatual/$calcadosante)-1)*100);    
	$brutoporcento=((($brutoc/$brutocaant)-1)*100); 
	$difvenda=$calcadosatual-$calcadosante;
	$difresultado=$brutoc-$brutocaant;
	if ($vendaporcento < 1) {
		echo "<td><font color=\"Red\">".number_format($vendaporcento,2,",",".").'%'."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($vendaporcento,2,",",".").'%'."</font></td>\n";
	}
	if ($brutoporcento < 1) {
		echo "<td><font color=\"Red\">".number_format($brutoporcento,2,",",".").'%'."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($brutoporcento,2,",",".").'%'."</font></td>\n";
	}
	if ($difvenda < 1) {
		echo "<td><font color=\"Red\">".number_format($difvenda,2,",",".")."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($difvenda,2,",",".")."</font></td>\n";
	}
	if ($difresultado < 1) {
		echo "<td><font color=\"Red\">".number_format($difresultado,2,",",".")."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($difresultado,2,",",".")."</font></td>\n";
	}
	echo "</tr>\n";
	echo "<td><font color=\"Red\" size=3><strong>".'Uniformes'."</strong></font></td>\n";
	echo "<td>".number_format($uniformeatual,2,",",".")."</td>\n";
	echo "<td>".number_format($brutou,2,",",".")."</td>\n";
	echo "<td>".number_format($uniformeante,2,",",".")."</td>\n";
	echo "<td>".number_format($brutounfant,2,",",".")."</td>\n";
	$vendaporcento=((($uniformeatual/$uniformeante)-1)*100);    
	$brutoporcento=((($brutou/$brutounfant)-1)*100); 
	$difvenda=$uniformeatual-$uniformeante;
	$difresultado=$brutou-$brutounfant;
	if ($vendaporcento < 1) {
		echo "<td><font color=\"Red\">".number_format($vendaporcento,2,",",".").'%'."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($vendaporcento,2,",",".").'%'."</font></td>\n";
	}
	if ($brutoporcento < 1) {
		echo "<td><font color=\"Red\">".number_format($brutoporcento,2,",",".").'%'."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($brutoporcento,2,",",".").'%'."</font></td>\n";
	}
	if ($difvenda < 1) {
		echo "<td><font color=\"Red\">".number_format($difvenda,2,",",".")."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($difvenda,2,",",".")."</font></td>\n";
	}
	if ($difresultado < 1) {
		echo "<td><font color=\"Red\">".number_format($difresultado,2,",",".")."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($difresultado,2,",",".")."</font></td>\n";
	}
	echo "</tr>\n";
	echo "<td><font color=\"Red\" size=3><strong>".'Atacadão Lages'."</strong></font></td>\n";
	echo "<td>".number_format($atacadoatual,2,",",".")."</td>\n";
	echo "<td>".number_format($brutoat,2,",",".")."</td>\n";
	echo "<td>".number_format($atacadoant,2,",",".")."</td>\n";
	echo "<td>".number_format($brutoatant,2,",",".")."</td>\n";
	$vendaporcento=((($atacadoatual/$atacadoant)-1)*100);    
	$brutoporcento=((($brutoat/$brutoatant)-1)*100); 
	$difvenda=$atacadoatual-$atacadoant;
	$difresultado=$brutoat-$brutoatant;
	if ($vendaporcento < 1) {
		echo "<td><font color=\"Red\">".number_format($vendaporcento,2,",",".").'%'."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($vendaporcento,2,",",".").'%'."</font></td>\n";
	}
	if ($brutoporcento < 1) {
		echo "<td><font color=\"Red\">".number_format($brutoporcento,2,",",".").'%'."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($brutoporcento,2,",",".").'%'."</font></td>\n";
	}
	if ($difvenda < 1) {
		echo "<td><font color=\"Red\">".number_format($difvenda,2,",",".")."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($difvenda,2,",",".")."</font></td>\n";
	}
	if ($difresultado < 1) {
		echo "<td><font color=\"Red\">".number_format($difresultado,2,",",".")."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($difresultado,2,",",".")."</font></td>\n";
	}
	echo "</tr>\n";
	echo "<td><font color=\"Red\" size=3><strong>".'Shop Lages'."</strong></font></td>\n";
	echo "<td>".number_format($esportesatual,2,",",".")."</td>\n";
	echo "<td>".number_format($brutoshop,2,",",".")."</td>\n";
	echo "<td>".number_format($esportesant,2,",",".")."</td>\n";
	echo "<td>".number_format($brutoshopant,2,",",".")."</td>\n";
	$vendaporcento=((($esportesatual/$esportesant)-1)*100);    
	$brutoporcento=((($brutoshop/$brutoshopant)-1)*100); 
	$difvenda=$esportesatual-$esportesant;
	$difresultado=$brutoshop-$brutoshopant;
	if ($vendaporcento < 1) {
		echo "<td><font color=\"Red\">".number_format($vendaporcento,2,",",".").'%'."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($vendaporcento,2,",",".").'%'."</font></td>\n";
	}
	if ($brutoporcento < 1) {
		echo "<td><font color=\"Red\">".number_format($brutoporcento,2,",",".").'%'."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($brutoporcento,2,",",".").'%'."</font></td>\n";
	}
	if ($difvenda < 1) {
		echo "<td><font color=\"Red\">".number_format($difvenda,2,",",".")."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($difvenda,2,",",".")."</font></td>\n";
	}
	if ($difresultado < 1) {
		echo "<td><font color=\"Red\">".number_format($difresultado,2,",",".")."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($difresultado,2,",",".")."</font></td>\n";
	}
	echo "</tr>\n";
	echo "<td><font color=\"Black\" size=3><strong>".'TT Lages'."</strong></font></td>\n";
	echo "<td><font color=\"Black\" size=3><strong>".number_format($ttsubgrupo1,2,",",".")."</strong></font></td>\n";
	echo "<td><font color=\"Black\" size=3><strong>".number_format($ttsubgrupo2,2,",",".")."</strong></font></td>\n";
	echo "<td><font color=\"Black\" size=3><strong>".number_format($ttsubgrupo3,2,",",".")."</strong></font></td>\n";
	echo "<td><font color=\"Black\" size=3><strong>".number_format($ttsubgrupo4,2,",",".")."</strong></font></td>\n";
	$vendaporcento=((($ttsubgrupo1/$ttsubgrupo3)-1)*100);    
	$brutoporcento=((($ttsubgrupo2/$ttsubgrupo4)-1)*100); 
	$difvenda=$ttsubgrupo1-$ttsubgrupo3;
	$difresultado=$ttsubgrupo2-$ttsubgrupo4;
	if ($vendaporcento < 1) {
		echo "<td><font color=\"Red\" size=3><strong>".number_format($vendaporcento,2,",",".").'%'."</strong></font></td>\n";
	} else {
		echo "<td><font color=\"black\" size=3><strong>".number_format($vendaporcento,2,",",".").'%'."</strong></font></td>\n";
	}
	if ($brutoporcento < 1) {
		echo "<td><font color=\"Red\" size=3><strong>".number_format($brutoporcento,2,",",".").'%'."</strong></font></td>\n";
	} else {
		echo "<td><font color=\"black\" size=3><strong>".number_format($brutoporcento,2,",",".").'%'."</strong></font></td>\n";
	}
	if ($difvenda < 1) {
		echo "<td><font color=\"Red\" size=3><strong>".number_format($difvenda,2,",",".")."</strong></font></td>\n";
	} else {
		echo "<td><font color=\"black\" size=3><strong>".number_format($difvenda,2,",",".")."</strong></font></td>\n";
	}
	if ($difresultado < 1) {
		echo "<td><font color=\"Red\" size=3><strong>".number_format($difresultado,2,",",".")."</strong></font></td>\n";
	} else {
		echo "<td><font color=\"black\" size=3><strong>".number_format($difresultado,2,",",".")."</strong></font></td>\n";
	}
	echo "</tr>\n";
	
	
	
	
	
	//Começa Caçador
	$ttsubgrupo1=0.00;
	$ttsubgrupo2=0.00;
	$ttsubgrupo3=0.00;
	$ttsubgrupo4=0.00;
	
	$sql="select (select sum (csaihisotorico*cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (5,6) and i_tna_valida_comissao = '0' and ctessaidas='S') as a,
	(select sum (centhistorico *cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (5,6) and i_tna_valida_comissao = '0' and ctessaidas='E'  ) as b,
	(select sum (csaihisotorico*n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (5,6) and i_tna_valida_comissao = '0' and ctessaidas='S'  ) as c,
	(select sum (centhistorico *n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (5,6) and i_tna_valida_comissao = '0' and ctessaidas='E'  ) as d,
	(select sum (csaihisotorico*cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (5,6) and i_tna_valida_comissao = '0' and ctessaidas='S'  ) as e,
	(select sum (centhistorico *cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (5,6) and i_tna_valida_comissao = '0' and ctessaidas='E' ) as f,
	(select sum (csaihisotorico*n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (5,6) and i_tna_valida_comissao = '0' and ctessaidas='S' ) as g,
	(select sum (centhistorico *n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (5,6) and i_tna_valida_comissao = '0' and ctessaidas='E' ) as h";
	$exsql=pg_query($conc,$sql);
    $rssql=pg_fetch_array($exsql);
    $venda=$rssql['a'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['b'];
    if ($troca == null) {
    	$troca=0.00;
    }        
    $may=$venda-$troca;
	$ttcoluna1=$ttcoluna1+$may;
	$ttsubgrupo1=$ttsubgrupo1+$may;
    $venda=$rssql['c'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['d'];
    if ($troca == null) {
    	$troca=0.00;
    }    
	$custo=$venda-$troca;
	$brutomay=$may-$custo;
	$ttcoluna2=$ttcoluna2+$brutomay;
	$ttsubgrupo2=$ttsubgrupo2+$brutomay; 
    $venda=$rssql['e'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['f'];
    if ($troca == null) {
    	$troca=0.00;
    }    
    $mayant=$venda-$troca;
	$ttcoluna3=$ttcoluna3+$mayant; 
	$ttsubgrupo3=$ttsubgrupo3+$mayant;
    $venda=$rssql['g'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['h'];
    if ($troca == null) {
    	$troca=0.00;
    }    
	$custo=$venda-$troca;
	$brutomayant=$mayant-$custo;
	$ttcoluna4=$ttcoluna4+$brutomayant;
	$ttsubgrupo4=$ttsubgrupo4+$brutomayant;
	echo "<td><font color=\"Red\" size=3><strong>".'Maynara'."</strong></font></td>\n";
	echo "<td>".number_format($may,2,",",".")."</td>\n";
	echo "<td>".number_format($brutomay,2,",",".")."</td>\n";
	echo "<td>".number_format($mayant,2,",",".")."</td>\n";
	echo "<td>".number_format($brutomayant,2,",",".")."</td>\n";
	$vendaporcento=((($may/$mayant)-1)*100);    
	$brutoporcento=((($brutomay/$brutomayant)-1)*100); 
	$difvenda=$may-$mayant;
	$difresultado=$brutomay-$brutomayant;
	if ($vendaporcento < 1) {
		echo "<td><font color=\"Red\">".number_format($vendaporcento,2,",",".").'%'."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($vendaporcento,2,",",".").'%'."</font></td>\n";
	}
	if ($brutoporcento < 1) {
		echo "<td><font color=\"Red\">".number_format($brutoporcento,2,",",".").'%'."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($brutoporcento,2,",",".").'%'."</font></td>\n";
	}
	if ($difvenda < 1) {
		echo "<td><font color=\"Red\">".number_format($difvenda,2,",",".")."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($difvenda,2,",",".")."</font></td>\n";
	}
	if ($difresultado < 1) {
		echo "<td><font color=\"Red\">".number_format($difresultado,2,",",".")."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($difresultado,2,",",".")."</font></td>\n";
	}
	echo "</tr>\n";
	
	$sql="select (select sum (csaihisotorico*cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (7,8) and i_tna_valida_comissao = '0' and ctessaidas='S') as a,
	(select sum (centhistorico *cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (7,8) and i_tna_valida_comissao = '0' and ctessaidas='E'  ) as b,
	(select sum (csaihisotorico*n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (7,8) and i_tna_valida_comissao = '0' and ctessaidas='S'  ) as c,
	(select sum (centhistorico *n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (7,8) and i_tna_valida_comissao = '0' and ctessaidas='E'  ) as d,
	(select sum (csaihisotorico*cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (7,8) and i_tna_valida_comissao = '0' and ctessaidas='S'  ) as e,
	(select sum (centhistorico *cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (7,8) and i_tna_valida_comissao = '0' and ctessaidas='E' ) as f,
	(select sum (csaihisotorico*n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (7,8) and i_tna_valida_comissao = '0' and ctessaidas='S' ) as g,
	(select sum (centhistorico *n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (7,8) and i_tna_valida_comissao = '0' and ctessaidas='E' ) as h";
	$exsql=pg_query($conc,$sql);
    $rssql=pg_fetch_array($exsql);
    $venda=$rssql['a'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['b'];
    if ($troca == null) {
    	$troca=0.00;
    }        
    $may=$venda-$troca;
	$ttcoluna1=$ttcoluna1+$may;
	$ttsubgrupo1=$ttsubgrupo1+$may;
    $venda=$rssql['c'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['d'];
    if ($troca == null) {
    	$troca=0.00;
    }    
	$custo=$venda-$troca;
	$brutomay=$may-$custo;
	$ttcoluna2=$ttcoluna2+$brutomay;
	$ttsubgrupo2=$ttsubgrupo2+$brutomay; 
    $venda=$rssql['e'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['f'];
    if ($troca == null) {
    	$troca=0.00;
    }    
    $mayant=$venda-$troca;
	$ttcoluna3=$ttcoluna3+$mayant; 
	$ttsubgrupo3=$ttsubgrupo3+$mayant;
    $venda=$rssql['g'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['h'];
    if ($troca == null) {
    	$troca=0.00;
    }    
	$custo=$venda-$troca;
	$brutomayant=$mayant-$custo;
	$ttcoluna4=$ttcoluna4+$brutomayant;
	$ttsubgrupo4=$ttsubgrupo4+$brutomayant;
	echo "<td><font color=\"Red\" size=3><strong>".'Adrielle'."</strong></font></td>\n";
	echo "<td>".number_format($may,2,",",".")."</td>\n";
	echo "<td>".number_format($brutomay,2,",",".")."</td>\n";
	echo "<td>".number_format($mayant,2,",",".")."</td>\n";
	echo "<td>".number_format($brutomayant,2,",",".")."</td>\n";
	$vendaporcento=((($may/$mayant)-1)*100);    
	$brutoporcento=((($brutomay/$brutomayant)-1)*100); 
	$difvenda=$may-$mayant;
	$difresultado=$brutomay-$brutomayant;
	if ($vendaporcento < 1) {
		echo "<td><font color=\"Red\">".number_format($vendaporcento,2,",",".").'%'."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($vendaporcento,2,",",".").'%'."</font></td>\n";
	}
	if ($brutoporcento < 1) {
		echo "<td><font color=\"Red\">".number_format($brutoporcento,2,",",".").'%'."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($brutoporcento,2,",",".").'%'."</font></td>\n";
	}
	if ($difvenda < 1) {
		echo "<td><font color=\"Red\">".number_format($difvenda,2,",",".")."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($difvenda,2,",",".")."</font></td>\n";
	}
	if ($difresultado < 1) {
		echo "<td><font color=\"Red\">".number_format($difresultado,2,",",".")."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($difresultado,2,",",".")."</font></td>\n";
	}
	echo "</tr>\n";
	echo "<td><font color=\"Black\" size=3><strong>".'TT Calçados'."</strong></font></td>\n";
	echo "<td><font color=\"Black\" size=3><strong>".number_format($ttsubgrupo1,2,",",".")."</strong></font></td>\n";
	echo "<td><font color=\"Black\" size=3><strong>".number_format($ttsubgrupo2,2,",",".")."</strong></font></td>\n";
	echo "<td><font color=\"Black\" size=3><strong>".number_format($ttsubgrupo3,2,",",".")."</strong></font></td>\n";
	echo "<td><font color=\"Black\" size=3><strong>".number_format($ttsubgrupo4,2,",",".")."</strong></font></td>\n";
	$vendaporcento=((($ttsubgrupo1/$ttsubgrupo3)-1)*100);    
	$brutoporcento=((($ttsubgrupo2/$ttsubgrupo4)-1)*100); 
	$difvenda=$ttsubgrupo1-$ttsubgrupo3;
	$difresultado=$ttsubgrupo2-$ttsubgrupo4;
	if ($vendaporcento < 1) {
		echo "<td><font color=\"Red\" size=3><strong>".number_format($vendaporcento,2,",",".").'%'."</strong></font></td>\n";
	} else {
		echo "<td><font color=\"black\" size=3><strong>".number_format($vendaporcento,2,",",".").'%'."</strong></font></td>\n";
	}
	if ($brutoporcento < 1) {
		echo "<td><font color=\"Red\" size=3><strong>".number_format($brutoporcento,2,",",".").'%'."</strong></font></td>\n";
	} else {
		echo "<td><font color=\"black\" size=3><strong>".number_format($brutoporcento,2,",",".").'%'."</strong></font></td>\n";
	}
	if ($difvenda < 1) {
		echo "<td><font color=\"Red\" size=3><strong>".number_format($difvenda,2,",",".")."</strong></font></td>\n";
	} else {
		echo "<td><font color=\"black\" size=3><strong>".number_format($difvenda,2,",",".")."</strong></font></td>\n";
	}
	if ($difresultado < 1) {
		echo "<td><font color=\"Red\" size=3><strong>".number_format($difresultado,2,",",".")."</strong></font></td>\n";
	} else {
		echo "<td><font color=\"black\" size=3><strong>".number_format($difresultado,2,",",".")."</strong></font></td>\n";
	}
	echo "</tr>\n";
	
	
	
	
	$ttsubgrupo1=0.00;
	$ttsubgrupo2=0.00;
	$ttsubgrupo3=0.00;
	$ttsubgrupo4=0.00;
	
	$sql="select (select sum (csaihisotorico*cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (13,14) and i_tna_valida_comissao = '0' and ctessaidas='S') as a,
	(select sum (centhistorico *cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (13,14) and i_tna_valida_comissao = '0' and ctessaidas='E'  ) as b,
	(select sum (csaihisotorico*n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (13,14) and i_tna_valida_comissao = '0' and ctessaidas='S'  ) as c,
	(select sum (centhistorico *n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (13,14) and i_tna_valida_comissao = '0' and ctessaidas='E'  ) as d,
	(select sum (csaihisotorico*cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (13,14) and i_tna_valida_comissao = '0' and ctessaidas='S'  ) as e,
	(select sum (centhistorico *cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (13,14) and i_tna_valida_comissao = '0' and ctessaidas='E' ) as f,
	(select sum (csaihisotorico*n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (13,14) and i_tna_valida_comissao = '0' and ctessaidas='S' ) as g,
	(select sum (centhistorico *n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (13,14) and i_tna_valida_comissao = '0' and ctessaidas='E' ) as h";
	$exsql=pg_query($conv,$sql);
    $rssql=pg_fetch_array($exsql);
    $venda=$rssql['a'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['b'];
    if ($troca == null) {
    	$troca=0.00;
    }        
    $may=$venda-$troca;
	$ttcoluna1=$ttcoluna1+$may;
	$ttsubgrupo1=$ttsubgrupo1+$may;
    $venda=$rssql['c'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['d'];
    if ($troca == null) {
    	$troca=0.00;
    }    
	$custo=$venda-$troca;
	$brutomay=$may-$custo;
	$ttcoluna2=$ttcoluna2+$brutomay;
	$ttsubgrupo2=$ttsubgrupo2+$brutomay; 
    $venda=$rssql['e'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['f'];
    if ($troca == null) {
    	$troca=0.00;
    }    
    $mayant=$venda-$troca;
	$ttcoluna3=$ttcoluna3+$mayant; 
	$ttsubgrupo3=$ttsubgrupo3+$mayant;
    $venda=$rssql['g'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['h'];
    if ($troca == null) {
    	$troca=0.00;
    }    
	$custo=$venda-$troca;
	$brutomayant=$mayant-$custo;
	$ttcoluna4=$ttcoluna4+$brutomayant;
	$ttsubgrupo4=$ttsubgrupo4+$brutomayant;
	echo "<td><font color=\"Red\" size=3><strong>".'Videira'."</strong></font></td>\n";
	echo "<td>".number_format($may,2,",",".")."</td>\n";
	echo "<td>".number_format($brutomay,2,",",".")."</td>\n";
	echo "<td>".number_format($mayant,2,",",".")."</td>\n";
	echo "<td>".number_format($brutomayant,2,",",".")."</td>\n";
	$vendaporcento=((($may/$mayant)-1)*100);    
	$brutoporcento=((($brutomay/$brutomayant)-1)*100); 
	$difvenda=$may-$mayant;
	$difresultado=$brutomay-$brutomayant;
	if ($vendaporcento < 1) {
		echo "<td><font color=\"Red\">".number_format($vendaporcento,2,",",".").'%'."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($vendaporcento,2,",",".").'%'."</font></td>\n";
	}
	if ($brutoporcento < 1) {
		echo "<td><font color=\"Red\">".number_format($brutoporcento,2,",",".").'%'."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($brutoporcento,2,",",".").'%'."</font></td>\n";
	}
	if ($difvenda < 1) {
		echo "<td><font color=\"Red\">".number_format($difvenda,2,",",".")."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($difvenda,2,",",".")."</font></td>\n";
	}
	if ($difresultado < 1) {
		echo "<td><font color=\"Red\">".number_format($difresultado,2,",",".")."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($difresultado,2,",",".")."</font></td>\n";
	}
	echo "</tr>\n";
	$sql="select (select sum (csaihisotorico*cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (17,18) and i_tna_valida_comissao = '0' and ctessaidas='S') as a,
	(select sum (centhistorico *cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (17,18) and i_tna_valida_comissao = '0' and ctessaidas='E'  ) as b,
	(select sum (csaihisotorico*n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (17,18) and i_tna_valida_comissao = '0' and ctessaidas='S'  ) as c,
	(select sum (centhistorico *n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (17,18) and i_tna_valida_comissao = '0' and ctessaidas='E'  ) as d,
	(select sum (csaihisotorico*cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (17,18) and i_tna_valida_comissao = '0' and ctessaidas='S'  ) as e,
	(select sum (centhistorico *cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (17,18) and i_tna_valida_comissao = '0' and ctessaidas='E' ) as f,
	(select sum (csaihisotorico*n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (17,18) and i_tna_valida_comissao = '0' and ctessaidas='S' ) as g,
	(select sum (centhistorico *n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (17,18) and i_tna_valida_comissao = '0' and ctessaidas='E' ) as h";
	$exsql=pg_query($conv,$sql);
    $rssql=pg_fetch_array($exsql);
    $venda=$rssql['a'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['b'];
    if ($troca == null) {
    	$troca=0.00;
    }        
    $may=$venda-$troca;
	$ttcoluna1=$ttcoluna1+$may;
	$ttsubgrupo1=$ttsubgrupo1+$may;
    $venda=$rssql['c'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['d'];
    if ($troca == null) {
    	$troca=0.00;
    }    
	$custo=$venda-$troca;
	$brutomay=$may-$custo;
	$ttcoluna2=$ttcoluna2+$brutomay;
	$ttsubgrupo2=$ttsubgrupo2+$brutomay; 
    $venda=$rssql['e'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['f'];
    if ($troca == null) {
    	$troca=0.00;
    }    
    $mayant=$venda-$troca;
	$ttcoluna3=$ttcoluna3+$mayant; 
	$ttsubgrupo3=$ttsubgrupo3+$mayant;
    $venda=$rssql['g'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['h'];
    if ($troca == null) {
    	$troca=0.00;
    }    
	$custo=$venda-$troca;
	$brutomayant=$mayant-$custo;
	$ttcoluna4=$ttcoluna4+$brutomayant;
	$ttsubgrupo4=$ttsubgrupo4+$brutomayant;
	echo "<td><font color=\"Red\" size=3><strong>".'Shop Videira'."</strong></font></td>\n";
	echo "<td>".number_format($may,2,",",".")."</td>\n";
	echo "<td>".number_format($brutomay,2,",",".")."</td>\n";
	echo "<td>".number_format($mayant,2,",",".")."</td>\n";
	echo "<td>".number_format($brutomayant,2,",",".")."</td>\n";
	$vendaporcento=((($may/$mayant)-1)*100);    
	$brutoporcento=((($brutomay/$brutomayant)-1)*100); 
	$difvenda=$may-$mayant;
	$difresultado=$brutomay-$brutomayant;
	if ($vendaporcento < 1) {
		echo "<td><font color=\"Red\">".number_format($vendaporcento,2,",",".").'%'."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($vendaporcento,2,",",".").'%'."</font></td>\n";
	}
	if ($brutoporcento < 1) {
		echo "<td><font color=\"Red\">".number_format($brutoporcento,2,",",".").'%'."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($brutoporcento,2,",",".").'%'."</font></td>\n";
	}
	if ($difvenda < 1) {
		echo "<td><font color=\"Red\">".number_format($difvenda,2,",",".")."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($difvenda,2,",",".")."</font></td>\n";
	}
	if ($difresultado < 1) {
		echo "<td><font color=\"Red\">".number_format($difresultado,2,",",".")."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($difresultado,2,",",".")."</font></td>\n";
	}
	echo "</tr>\n";
		$sql="select (select sum (csaihisotorico*cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (15,16) and i_tna_valida_comissao = '0' and ctessaidas='S') as a,
	(select sum (centhistorico *cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (15,16) and i_tna_valida_comissao = '0' and ctessaidas='E'  ) as b,
	(select sum (csaihisotorico*n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (15,16) and i_tna_valida_comissao = '0' and ctessaidas='S'  ) as c,
	(select sum (centhistorico *n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (15,16) and i_tna_valida_comissao = '0' and ctessaidas='E'  ) as d,
	(select sum (csaihisotorico*cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (15,16) and i_tna_valida_comissao = '0' and ctessaidas='S'  ) as e,
	(select sum (centhistorico *cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (15,16) and i_tna_valida_comissao = '0' and ctessaidas='E' ) as f,
	(select sum (csaihisotorico*n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (15,16) and i_tna_valida_comissao = '0' and ctessaidas='S' ) as g,
	(select sum (centhistorico *n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (15,16) and i_tna_valida_comissao = '0' and ctessaidas='E' ) as h";
	$exsql=pg_query($conv,$sql);
    $rssql=pg_fetch_array($exsql);
    $venda=$rssql['a'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['b'];
    if ($troca == null) {
    	$troca=0.00;
    }        
    $may=$venda-$troca;
	$ttcoluna1=$ttcoluna1+$may;
	$ttsubgrupo1=$ttsubgrupo1+$may;
    $venda=$rssql['c'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['d'];
    if ($troca == null) {
    	$troca=0.00;
    }    
	$custo=$venda-$troca;
	$brutomay=$may-$custo;
	$ttcoluna2=$ttcoluna2+$brutomay;
	$ttsubgrupo2=$ttsubgrupo2+$brutomay; 
    $venda=$rssql['e'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['f'];
    if ($troca == null) {
    	$troca=0.00;
    }    
    $mayant=$venda-$troca;
	$ttcoluna3=$ttcoluna3+$mayant; 
	$ttsubgrupo3=$ttsubgrupo3+$mayant;
    $venda=$rssql['g'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['h'];
    if ($troca == null) {
    	$troca=0.00;
    }    
	$custo=$venda-$troca;
	$brutomayant=$mayant-$custo;
	$ttcoluna4=$ttcoluna4+$brutomayant;
	$ttsubgrupo4=$ttsubgrupo4+$brutomayant;
	echo "<td><font color=\"Red\" size=3><strong>".'Martello'."</strong></font></td>\n";
	echo "<td>".number_format($may,2,",",".")."</td>\n";
	echo "<td>".number_format($brutomay,2,",",".")."</td>\n";
	echo "<td>".number_format($mayant,2,",",".")."</td>\n";
	echo "<td>".number_format($brutomayant,2,",",".")."</td>\n";
	$vendaporcento=((($may/$mayant)-1)*100);    
	$brutoporcento=((($brutomay/$brutomayant)-1)*100); 
	$difvenda=$may-$mayant;
	$difresultado=$brutomay-$brutomayant;
	if ($vendaporcento < 1) {
		echo "<td><font color=\"Red\">".number_format($vendaporcento,2,",",".").'%'."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($vendaporcento,2,",",".").'%'."</font></td>\n";
	}
	if ($brutoporcento < 1) {
		echo "<td><font color=\"Red\">".number_format($brutoporcento,2,",",".").'%'."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($brutoporcento,2,",",".").'%'."</font></td>\n";
	}
	if ($difvenda < 1) {
		echo "<td><font color=\"Red\">".number_format($difvenda,2,",",".")."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($difvenda,2,",",".")."</font></td>\n";
	}
	if ($difresultado < 1) {
		echo "<td><font color=\"Red\">".number_format($difresultado,2,",",".")."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($difresultado,2,",",".")."</font></td>\n";
	}
	echo "</tr>\n";
	
	echo "<td><font color=\"Black\" size=3><strong>".'TT VDA'."</strong></font></td>\n";
	echo "<td><font color=\"Black\" size=3><strong>".number_format($ttsubgrupo1,2,",",".")."</strong></font></td>\n";
	echo "<td><font color=\"Black\" size=3><strong>".number_format($ttsubgrupo2,2,",",".")."</strong></font></td>\n";
	echo "<td><font color=\"Black\" size=3><strong>".number_format($ttsubgrupo3,2,",",".")."</strong></font></td>\n";
	echo "<td><font color=\"Black\" size=3><strong>".number_format($ttsubgrupo4,2,",",".")."</strong></font></td>\n";
	$vendaporcento=((($ttsubgrupo1/$ttsubgrupo3)-1)*100);    
	$brutoporcento=((($ttsubgrupo2/$ttsubgrupo4)-1)*100); 
	$difvenda=$ttsubgrupo1-$ttsubgrupo3;
	$difresultado=$ttsubgrupo2-$ttsubgrupo4;
	if ($vendaporcento < 1) {
		echo "<td><font color=\"Red\" size=3><strong>".number_format($vendaporcento,2,",",".").'%'."</strong></font></td>\n";
	} else {
		echo "<td><font color=\"black\" size=3><strong>".number_format($vendaporcento,2,",",".").'%'."</strong></font></td>\n";
	}
	if ($brutoporcento < 1) {
		echo "<td><font color=\"Red\" size=3><strong>".number_format($brutoporcento,2,",",".").'%'."</strong></font></td>\n";
	} else {
		echo "<td><font color=\"black\" size=3><strong>".number_format($brutoporcento,2,",",".").'%'."</strong></font></td>\n";
	}
	if ($difvenda < 1) {
		echo "<td><font color=\"Red\" size=3><strong>".number_format($difvenda,2,",",".")."</strong></font></td>\n";
	} else {
		echo "<td><font color=\"black\" size=3><strong>".number_format($difvenda,2,",",".")."</strong></font></td>\n";
	}
	if ($difresultado < 1) {
		echo "<td><font color=\"Red\" size=3><strong>".number_format($difresultado,2,",",".")."</strong></font></td>\n";
	} else {
		echo "<td><font color=\"black\" size=3><strong>".number_format($difresultado,2,",",".")."</strong></font></td>\n";
	}
	echo "</tr>\n";
	
	
	
	
	$ttsubgrupo1=0.00;
	$ttsubgrupo2=0.00;
	$ttsubgrupo3=0.00;
	$ttsubgrupo4=0.00;
	
	
	$sql="select (select sum (csaihisotorico*cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (9,10) and i_tna_valida_comissao = '0' and ctessaidas='S') as a,
	(select sum (centhistorico *cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (9,10) and i_tna_valida_comissao = '0' and ctessaidas='E'  ) as b,
	(select sum (csaihisotorico*n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (9,10) and i_tna_valida_comissao = '0' and ctessaidas='S'  ) as c,
	(select sum (centhistorico *n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (9,10) and i_tna_valida_comissao = '0' and ctessaidas='E'  ) as d,
	(select sum (csaihisotorico*cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (9,10) and i_tna_valida_comissao = '0' and ctessaidas='S'  ) as e,
	(select sum (centhistorico *cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (9,10) and i_tna_valida_comissao = '0' and ctessaidas='E' ) as f,
	(select sum (csaihisotorico*n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (9,10) and i_tna_valida_comissao = '0' and ctessaidas='S' ) as g,
	(select sum (centhistorico *n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (9,10) and i_tna_valida_comissao = '0' and ctessaidas='E' ) as h";
	$exsql=pg_query($conc,$sql);
    $rssql=pg_fetch_array($exsql);
    $a=$rssql['a'];
    if ($a == null){
    	$a=0.00;
    }
    $b=$rssql['b'];
    if ($b == null) {
    	$b=0.00;
    }        
    
    $c=$rssql['c'];
    if ($c == null){
    	$c=0.00;
    }
    $d=$rssql['d'];
    if ($d == null) {
    	$d=0.00;
    }    
    $e=$rssql['e'];
    if ($e == null){
    	$e=0.00;
    }
    $f=$rssql['f'];
    if ($f == null) {
    	$f=0.00;
    }
    
    $g=$rssql['g'];
    if ($g == null){
    	$g=0.00;
    }
    $h=$rssql['h'];
    if ($h == null) {
    	$h=0.00;
    }
	$sql="select (select sum (csaihisotorico*cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (3,4) and i_tna_valida_comissao = '0' and ctessaidas='S') as a,
	(select sum (centhistorico *cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (3,4) and i_tna_valida_comissao = '0' and ctessaidas='E'  ) as b,
	(select sum (csaihisotorico*n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (3,4) and i_tna_valida_comissao = '0' and ctessaidas='S'  ) as c,
	(select sum (centhistorico *n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (3,4) and i_tna_valida_comissao = '0' and ctessaidas='E'  ) as d,
	(select sum (csaihisotorico*cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (3,4) and i_tna_valida_comissao = '0' and ctessaidas='S'  ) as e,
	(select sum (centhistorico *cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (3,4) and i_tna_valida_comissao = '0' and ctessaidas='E' ) as f,
	(select sum (csaihisotorico*n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (3,4) and i_tna_valida_comissao = '0' and ctessaidas='S' ) as g,
	(select sum (centhistorico *n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (3,4) and i_tna_valida_comissao = '0' and ctessaidas='E' ) as h";
	$exsql=pg_query($conj,$sql);
    $rssql=pg_fetch_array($exsql);
    $aa=$rssql['a'];
    if ($aa == null){
    	$aa=0.00;
    }
    $bb=$rssql['b'];
    if ($bb == null) {
    	$bb=0.00;
    }        
    
    $cc=$rssql['c'];
    if ($cc == null){
    	$cc=0.00;
    }
    $dd=$rssql['d'];
    if ($dd == null) {
    	$dd=0.00;
    }    
    $ee=$rssql['e'];
    if ($ee == null){
    	$ee=0.00;
    }
    $ff=$rssql['f'];
    if ($ff == null) {
    	$ff=0.00;
    }    
    $gg=$rssql['g'];
    if ($gg == null){
    	$gg=0.00;
    }
    $hh=$rssql['h'];
    if ($hh == null) {
    	$hh=0.00;
    }
    
    
    
    
    
    
    
    $may=($a-$b)+($aa-$bb);
	$ttcoluna1=$ttcoluna1+$may;
	$ttsubgrupo1=$ttsubgrupo1+$may;    
	$custo=($c-$d)+($cc-$dd);
	$brutomay=$may-$custo;
	$ttcoluna2=$ttcoluna2+$brutomay;
	$ttsubgrupo2=$ttsubgrupo2+$brutomay;     
    $mayant=($e-$f)+($ee-$ff);
	$ttcoluna3=$ttcoluna3+$mayant; 
	$ttsubgrupo3=$ttsubgrupo3+$mayant;    
	$custo=($g-$h)+($gg-$hh);
	$brutomayant=$mayant-$custo;
	$ttcoluna4=$ttcoluna4+$brutomayant;
	$ttsubgrupo4=$ttsubgrupo4+$brutomayant;
	echo "<td><font color=\"Red\" size=3><strong>".'Confcções Apolo'."</strong></font></td>\n";
	echo "<td>".number_format($may,2,",",".")."</td>\n";
	echo "<td>".number_format($brutomay,2,",",".")."</td>\n";
	echo "<td>".number_format($mayant,2,",",".")."</td>\n";
	echo "<td>".number_format($brutomayant,2,",",".")."</td>\n";
	$vendaporcento=((($may/$mayant)-1)*100);    
	$brutoporcento=((($brutomay/$brutomayant)-1)*100); 
	$difvenda=$may-$mayant;
	$difresultado=$brutomay-$brutomayant;
	if ($vendaporcento < 1) {
		echo "<td><font color=\"Red\">".number_format($vendaporcento,2,",",".").'%'."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($vendaporcento,2,",",".").'%'."</font></td>\n";
	}
	if ($brutoporcento < 1) {
		echo "<td><font color=\"Red\">".number_format($brutoporcento,2,",",".").'%'."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($brutoporcento,2,",",".").'%'."</font></td>\n";
	}
	if ($difvenda < 1) {
		echo "<td><font color=\"Red\">".number_format($difvenda,2,",",".")."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($difvenda,2,",",".")."</font></td>\n";
	}
	if ($difresultado < 1) {
		echo "<td><font color=\"Red\">".number_format($difresultado,2,",",".")."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($difresultado,2,",",".")."</font></td>\n";
	}
	echo "</tr>\n";
	$sql="select (select sum (csaihisotorico*cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='S' and clinproduto <> 108 and clinproduto <> 13) as a,
	(select sum (centhistorico *cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='E' and clinproduto <> 108 and clinproduto <> 13 ) as b,
	(select sum (csaihisotorico*n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='S' and clinproduto <> 108 and clinproduto <> 13 ) as c,
	(select sum (centhistorico *n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='E' and clinproduto <> 108 and clinproduto <> 13 ) as d,
	(select sum (csaihisotorico*cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='S' and clinproduto <> 108 and clinproduto <> 13 ) as e,
	(select sum (centhistorico *cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='E' and clinproduto <> 108 and clinproduto <> 13 ) as f,
	(select sum (csaihisotorico*n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='S' and clinproduto <> 108 and clinproduto <> 13 ) as g,
	(select sum (centhistorico *n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='E' and clinproduto <> 108 and clinproduto <> 13 ) as h";
	$exsql=pg_query($conc,$sql);
    $rssql=pg_fetch_array($exsql);
    $venda=$rssql['a'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['b'];
    if ($troca == null) {
    	$troca=0.00;
    }        
    $may=$venda-$troca;
	$ttcoluna1=$ttcoluna1+$may;
	$ttsubgrupo1=$ttsubgrupo1+$may;
    $venda=$rssql['c'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['d'];
    if ($troca == null) {
    	$troca=0.00;
    }    
	$custo=$venda-$troca;
	$brutomay=$may-$custo;
	$ttcoluna2=$ttcoluna2+$brutomay;
	$ttsubgrupo2=$ttsubgrupo2+$brutomay; 
    $venda=$rssql['e'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['f'];
    if ($troca == null) {
    	$troca=0.00;
    }    
    $mayant=$venda-$troca;
	$ttcoluna3=$ttcoluna3+$mayant; 
	$ttsubgrupo3=$ttsubgrupo3+$mayant;
    $venda=$rssql['g'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['h'];
    if ($troca == null) {
    	$troca=0.00;
    }    
	$custo=$venda-$troca;
	$brutomayant=$mayant-$custo;
	$ttcoluna4=$ttcoluna4+$brutomayant;
	$ttsubgrupo4=$ttsubgrupo4+$brutomayant;
	echo "<td><font color=\"Red\" size=3><strong>".'Rosane'."</strong></font></td>\n";
	echo "<td>".number_format($may,2,",",".")."</td>\n";
	echo "<td>".number_format($brutomay,2,",",".")."</td>\n";
	echo "<td>".number_format($mayant,2,",",".")."</td>\n";
	echo "<td>".number_format($brutomayant,2,",",".")."</td>\n";
	$vendaporcento=((($may/$mayant)-1)*100);    
	$brutoporcento=((($brutomay/$brutomayant)-1)*100); 
	$difvenda=$may-$mayant;
	$difresultado=$brutomay-$brutomayant;
	if ($vendaporcento < 1) {
		echo "<td><font color=\"Red\">".number_format($vendaporcento,2,",",".").'%'."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($vendaporcento,2,",",".").'%'."</font></td>\n";
	}
	if ($brutoporcento < 1) {
		echo "<td><font color=\"Red\">".number_format($brutoporcento,2,",",".").'%'."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($brutoporcento,2,",",".").'%'."</font></td>\n";
	}
	if ($difvenda < 1) {
		echo "<td><font color=\"Red\">".number_format($difvenda,2,",",".")."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($difvenda,2,",",".")."</font></td>\n";
	}
	if ($difresultado < 1) {
		echo "<td><font color=\"Red\">".number_format($difresultado,2,",",".")."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($difresultado,2,",",".")."</font></td>\n";
	}
	echo "</tr>\n";
	$sql="select (select sum (csaihisotorico*cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='S' and clinproduto = 13) as a,
	(select sum (centhistorico *cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='E' and clinproduto = 13) as b,
	(select sum (csaihisotorico*n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='S' and clinproduto = 13 ) as c,
	(select sum (centhistorico *n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='E' and clinproduto = 13) as d,
	(select sum (csaihisotorico*cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='S' and clinproduto = 13 ) as e,
	(select sum (centhistorico *cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='E' and clinproduto = 13 ) as f,
	(select sum (csaihisotorico*n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='S' and clinproduto = 13 ) as g,
	(select sum (centhistorico *n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='E' and clinproduto = 13 ) as h";
	$exsql=pg_query($conc,$sql);
    $rssql=pg_fetch_array($exsql);
    $venda=$rssql['a'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['b'];
    if ($troca == null) {
    	$troca=0.00;
    }        
    $may=$venda-$troca;
	$ttcoluna1=$ttcoluna1+$may;
	$ttsubgrupo1=$ttsubgrupo1+$may;
    $venda=$rssql['c'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['d'];
    if ($troca == null) {
    	$troca=0.00;
    }    
	$custo=$venda-$troca;
	$brutomay=$may-$custo;
	$ttcoluna2=$ttcoluna2+$brutomay;
	$ttsubgrupo2=$ttsubgrupo2+$brutomay; 
    $venda=$rssql['e'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['f'];
    if ($troca == null) {
    	$troca=0.00;
    }    
    $mayant=$venda-$troca;
	$ttcoluna3=$ttcoluna3+$mayant; 
	$ttsubgrupo3=$ttsubgrupo3+$mayant;
    $venda=$rssql['g'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['h'];
    if ($troca == null) {
    	$troca=0.00;
    }    
	$custo=$venda-$troca;
	$brutomayant=$mayant-$custo;
	$ttcoluna4=$ttcoluna4+$brutomayant;
	$ttsubgrupo4=$ttsubgrupo4+$brutomayant;
	echo "<td><font color=\"Red\" size=3><strong>".'Brinquedos'."</strong></font></td>\n";
	echo "<td>".number_format($may,2,",",".")."</td>\n";
	echo "<td>".number_format($brutomay,2,",",".")."</td>\n";
	echo "<td>".number_format($mayant,2,",",".")."</td>\n";
	echo "<td>".number_format($brutomayant,2,",",".")."</td>\n";
	$vendaporcento=((($may/$mayant)-1)*100);    
	$brutoporcento=((($brutomay/$brutomayant)-1)*100); 
	$difvenda=$may-$mayant;
	$difresultado=$brutomay-$brutomayant;
	if ($vendaporcento < 1) {
		echo "<td><font color=\"Red\">".number_format($vendaporcento,2,",",".").'%'."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($vendaporcento,2,",",".").'%'."</font></td>\n";
	}
	if ($brutoporcento < 1) {
		echo "<td><font color=\"Red\">".number_format($brutoporcento,2,",",".").'%'."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($brutoporcento,2,",",".").'%'."</font></td>\n";
	}
	if ($difvenda < 1) {
		echo "<td><font color=\"Red\">".number_format($difvenda,2,",",".")."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($difvenda,2,",",".")."</font></td>\n";
	}
	if ($difresultado < 1) {
		echo "<td><font color=\"Red\">".number_format($difresultado,2,",",".")."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($difresultado,2,",",".")."</font></td>\n";
	}
	echo "</tr>\n";	
	$sql="select (select sum (csaihisotorico*cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='S' and clinproduto = 108) as a,
	(select sum (centhistorico *cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='E' and clinproduto = 108) as b,
	(select sum (csaihisotorico*n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='S' and clinproduto = 108 ) as c,
	(select sum (centhistorico *n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='E' and clinproduto = 108) as d,
	(select sum (csaihisotorico*cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='S' and clinproduto = 108 ) as e,
	(select sum (centhistorico *cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='E' and clinproduto = 108 ) as f,
	(select sum (csaihisotorico*n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='S' and clinproduto = 108 ) as g,
	(select sum (centhistorico *n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='E' and clinproduto = 108 ) as h";
	$exsql=pg_query($conc,$sql);
    $rssql=pg_fetch_array($exsql);
    $venda=$rssql['a'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['b'];
    if ($troca == null) {
    	$troca=0.00;
    }        
    $may=$venda-$troca;
	$ttcoluna1=$ttcoluna1+$may;
	$ttsubgrupo1=$ttsubgrupo1+$may;
    $venda=$rssql['c'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['d'];
    if ($troca == null) {
    	$troca=0.00;
    }    
	$custo=$venda-$troca;
	$brutomay=$may-$custo;
	$ttcoluna2=$ttcoluna2+$brutomay;
	$ttsubgrupo2=$ttsubgrupo2+$brutomay; 
    $venda=$rssql['e'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['f'];
    if ($troca == null) {
    	$troca=0.00;
    }    
    $mayant=$venda-$troca;
	$ttcoluna3=$ttcoluna3+$mayant; 
	$ttsubgrupo3=$ttsubgrupo3+$mayant;
    $venda=$rssql['g'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['h'];
    if ($troca == null) {
    	$troca=0.00;
    }    
	$custo=$venda-$troca;
	$brutomayant=$mayant-$custo;
	$ttcoluna4=$ttcoluna4+$brutomayant;
	$ttsubgrupo4=$ttsubgrupo4+$brutomayant;
	echo "<td><font color=\"Red\" size=3><strong>".'Uniformes'."</strong></font></td>\n";
	echo "<td>".number_format($may,2,",",".")."</td>\n";
	echo "<td>".number_format($brutomay,2,",",".")."</td>\n";
	echo "<td>".number_format($mayant,2,",",".")."</td>\n";
	echo "<td>".number_format($brutomayant,2,",",".")."</td>\n";
	$vendaporcento=((($may/$mayant)-1)*100);    
	$brutoporcento=((($brutomay/$brutomayant)-1)*100); 
	$difvenda=$may-$mayant;
	$difresultado=$brutomay-$brutomayant;
	if ($vendaporcento < 1) {
		echo "<td><font color=\"Red\">".number_format($vendaporcento,2,",",".").'%'."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($vendaporcento,2,",",".").'%'."</font></td>\n";
	}
	if ($brutoporcento < 1) {
		echo "<td><font color=\"Red\">".number_format($brutoporcento,2,",",".").'%'."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($brutoporcento,2,",",".").'%'."</font></td>\n";
	}
	if ($difvenda < 1) {
		echo "<td><font color=\"Red\">".number_format($difvenda,2,",",".")."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($difvenda,2,",",".")."</font></td>\n";
	}
	if ($difresultado < 1) {
		echo "<td><font color=\"Red\">".number_format($difresultado,2,",",".")."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($difresultado,2,",",".")."</font></td>\n";
	}
	echo "</tr>\n";
	echo "<td><font color=\"Black\" size=3><strong>".'TT Confecções'."</strong></font></td>\n";
	echo "<td><font color=\"Black\" size=3><strong>".number_format($ttsubgrupo1,2,",",".")."</strong></font></td>\n";
	echo "<td><font color=\"Black\" size=3><strong>".number_format($ttsubgrupo2,2,",",".")."</strong></font></td>\n";
	echo "<td><font color=\"Black\" size=3><strong>".number_format($ttsubgrupo3,2,",",".")."</strong></font></td>\n";
	echo "<td><font color=\"Black\" size=3><strong>".number_format($ttsubgrupo4,2,",",".")."</strong></font></td>\n";
	$vendaporcento=((($ttsubgrupo1/$ttsubgrupo3)-1)*100);    
	$brutoporcento=((($ttsubgrupo2/$ttsubgrupo4)-1)*100); 
	$difvenda=$ttsubgrupo1-$ttsubgrupo3;
	$difresultado=$ttsubgrupo2-$ttsubgrupo4;
	if ($vendaporcento < 1) {
		echo "<td><font color=\"Red\" size=3><strong>".number_format($vendaporcento,2,",",".").'%'."</strong></font></td>\n";
	} else {
		echo "<td><font color=\"black\" size=3><strong>".number_format($vendaporcento,2,",",".").'%'."</strong></font></td>\n";
	}
	if ($brutoporcento < 1) {
		echo "<td><font color=\"Red\" size=3><strong>".number_format($brutoporcento,2,",",".").'%'."</strong></font></td>\n";
	} else {
		echo "<td><font color=\"black\" size=3><strong>".number_format($brutoporcento,2,",",".").'%'."</strong></font></td>\n";
	}
	if ($difvenda < 1) {
		echo "<td><font color=\"Red\" size=3><strong>".number_format($difvenda,2,",",".")."</strong></font></td>\n";
	} else {
		echo "<td><font color=\"black\" size=3><strong>".number_format($difvenda,2,",",".")."</strong></font></td>\n";
	}
	if ($difresultado < 1) {
		echo "<td><font color=\"Red\" size=3><strong>".number_format($difresultado,2,",",".")."</strong></font></td>\n";
	} else {
		echo "<td><font color=\"black\" size=3><strong>".number_format($difresultado,2,",",".")."</strong></font></td>\n";
	}
	echo "</tr>\n";
	
	
	
	
	$ttsubgrupo1=0.00;
	$ttsubgrupo2=0.00;
	$ttsubgrupo3=0.00;
	$ttsubgrupo4=0.00;
	
	$sql="select (select sum (csaihisotorico*cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (3,4) and i_tna_valida_comissao = '0' and ctessaidas='S' ) as a,
	(select sum (centhistorico *cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (3,4) and i_tna_valida_comissao = '0' and ctessaidas='E' ) as b,
	(select sum (csaihisotorico*n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (3,4) and i_tna_valida_comissao = '0' and ctessaidas='S'  ) as c,
	(select sum (centhistorico *n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (3,4) and i_tna_valida_comissao = '0' and ctessaidas='E' ) as d,
	(select sum (csaihisotorico*cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (3,4) and i_tna_valida_comissao = '0' and ctessaidas='S'  ) as e,
	(select sum (centhistorico *cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (3,4) and i_tna_valida_comissao = '0' and ctessaidas='E' ) as f,
	(select sum (csaihisotorico*n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (3,4) and i_tna_valida_comissao = '0' and ctessaidas='S' ) as g,
	(select sum (centhistorico *n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (3,4) and i_tna_valida_comissao = '0' and ctessaidas='E'  ) as h";
	$exsql=pg_query($conc,$sql);
    $rssql=pg_fetch_array($exsql);
    $venda=$rssql['a'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['b'];
    if ($troca == null) {
    	$troca=0.00;
    }        
    $may=$venda-$troca;
	$ttcoluna1=$ttcoluna1+$may;
	$ttsubgrupo1=$ttsubgrupo1+$may;
    $venda=$rssql['c'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['d'];
    if ($troca == null) {
    	$troca=0.00;
    }    
	$custo=$venda-$troca;
	$brutomay=$may-$custo;
	$ttcoluna2=$ttcoluna2+$brutomay;
	$ttsubgrupo2=$ttsubgrupo2+$brutomay; 
    $venda=$rssql['e'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['f'];
    if ($troca == null) {
    	$troca=0.00;
    }    
    $mayant=$venda-$troca;
	$ttcoluna3=$ttcoluna3+$mayant; 
	$ttsubgrupo3=$ttsubgrupo3+$mayant;
    $venda=$rssql['g'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['h'];
    if ($troca == null) {
    	$troca=0.00;
    }    
	$custo=$venda-$troca;
	$brutomayant=$mayant-$custo;
	$ttcoluna4=$ttcoluna4+$brutomayant;
	$ttsubgrupo4=$ttsubgrupo4+$brutomayant;
	echo "<td><font color=\"Red\" size=3><strong>".'Esportes'."</strong></font></td>\n";
	echo "<td>".number_format($may,2,",",".")."</td>\n";
	echo "<td>".number_format($brutomay,2,",",".")."</td>\n";
	echo "<td>".number_format($mayant,2,",",".")."</td>\n";
	echo "<td>".number_format($brutomayant,2,",",".")."</td>\n";
	$vendaporcento=((($may/$mayant)-1)*100);    
	$brutoporcento=((($brutomay/$brutomayant)-1)*100); 
	$difvenda=$may-$mayant;
	$difresultado=$brutomay-$brutomayant;
	if ($vendaporcento < 1) {
		echo "<td><font color=\"Red\">".number_format($vendaporcento,2,",",".").'%'."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($vendaporcento,2,",",".").'%'."</font></td>\n";
	}
	if ($brutoporcento < 1) {
		echo "<td><font color=\"Red\">".number_format($brutoporcento,2,",",".").'%'."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($brutoporcento,2,",",".").'%'."</font></td>\n";
	}
	if ($difvenda < 1) {
		echo "<td><font color=\"Red\">".number_format($difvenda,2,",",".")."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($difvenda,2,",",".")."</font></td>\n";
	}
	if ($difresultado < 1) {
		echo "<td><font color=\"Red\">".number_format($difresultado,2,",",".")."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($difresultado,2,",",".")."</font></td>\n";
	}
	echo "</tr>\n";
	$sql="select (select sum (csaihisotorico*cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (11,12) and i_tna_valida_comissao = '0' and ctessaidas='S' ) as a,
	(select sum (centhistorico *cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (11,12) and i_tna_valida_comissao = '0' and ctessaidas='E' ) as b,
	(select sum (csaihisotorico*n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (11,12) and i_tna_valida_comissao = '0' and ctessaidas='S'  ) as c,
	(select sum (centhistorico *n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (11,12) and i_tna_valida_comissao = '0' and ctessaidas='E' ) as d,
	(select sum (csaihisotorico*cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (11,12) and i_tna_valida_comissao = '0' and ctessaidas='S'  ) as e,
	(select sum (centhistorico *cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (11,12) and i_tna_valida_comissao = '0' and ctessaidas='E' ) as f,
	(select sum (csaihisotorico*n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (11,12) and i_tna_valida_comissao = '0' and ctessaidas='S' ) as g,
	(select sum (centhistorico *n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (11,12) and i_tna_valida_comissao = '0' and ctessaidas='E'  ) as h";
	$exsql=pg_query($conc,$sql);
    $rssql=pg_fetch_array($exsql);
    $venda=$rssql['a'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['b'];
    if ($troca == null) {
    	$troca=0.00;
    }        
    $may=$venda-$troca;
	$ttcoluna1=$ttcoluna1+$may;
	$ttsubgrupo1=$ttsubgrupo1+$may;
    $venda=$rssql['c'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['d'];
    if ($troca == null) {
    	$troca=0.00;
    }    
	$custo=$venda-$troca;
	$brutomay=$may-$custo;
	$ttcoluna2=$ttcoluna2+$brutomay;
	$ttsubgrupo2=$ttsubgrupo2+$brutomay; 
    $venda=$rssql['e'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['f'];
    if ($troca == null) {
    	$troca=0.00;
    }    
    $mayant=$venda-$troca;
	$ttcoluna3=$ttcoluna3+$mayant; 
	$ttsubgrupo3=$ttsubgrupo3+$mayant;
    $venda=$rssql['g'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['h'];
    if ($troca == null) {
    	$troca=0.00;
    }    
	$custo=$venda-$troca;
	$brutomayant=$mayant-$custo;
	$ttcoluna4=$ttcoluna4+$brutomayant;
	$ttsubgrupo4=$ttsubgrupo4+$brutomayant;
	echo "<td><font color=\"Red\" size=3><strong>".'Shop Masp'."</strong></font></td>\n";
	echo "<td>".number_format($may,2,",",".")."</td>\n";
	echo "<td>".number_format($brutomay,2,",",".")."</td>\n";
	echo "<td>".number_format($mayant,2,",",".")."</td>\n";
	echo "<td>".number_format($brutomayant,2,",",".")."</td>\n";
	$vendaporcento=((($may/$mayant)-1)*100);    
	$brutoporcento=((($brutomay/$brutomayant)-1)*100); 
	$difvenda=$may-$mayant;
	$difresultado=$brutomay-$brutomayant;
	if ($vendaporcento < 1) {
		echo "<td><font color=\"Red\">".number_format($vendaporcento,2,",",".").'%'."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($vendaporcento,2,",",".").'%'."</font></td>\n";
	}
	if ($brutoporcento < 1) {
		echo "<td><font color=\"Red\">".number_format($brutoporcento,2,",",".").'%'."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($brutoporcento,2,",",".").'%'."</font></td>\n";
	}
	if ($difvenda < 1) {
		echo "<td><font color=\"Red\">".number_format($difvenda,2,",",".")."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($difvenda,2,",",".")."</font></td>\n";
	}
	if ($difresultado < 1) {
		echo "<td><font color=\"Red\">".number_format($difresultado,2,",",".")."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($difresultado,2,",",".")."</font></td>\n";
	}
	echo "</tr>\n";
	echo "<td><font color=\"Black\" size=3><strong>".'TT Esportes'."</strong></font></td>\n";
	echo "<td><font color=\"Black\" size=3><strong>".number_format($ttsubgrupo1,2,",",".")."</strong></font></td>\n";
	echo "<td><font color=\"Black\" size=3><strong>".number_format($ttsubgrupo2,2,",",".")."</strong></font></td>\n";
	echo "<td><font color=\"Black\" size=3><strong>".number_format($ttsubgrupo3,2,",",".")."</strong></font></td>\n";
	echo "<td><font color=\"Black\" size=3><strong>".number_format($ttsubgrupo4,2,",",".")."</strong></font></td>\n";
	$vendaporcento=((($ttsubgrupo1/$ttsubgrupo3)-1)*100);    
	$brutoporcento=((($ttsubgrupo2/$ttsubgrupo4)-1)*100); 
	$difvenda=$ttsubgrupo1-$ttsubgrupo3;
	$difresultado=$ttsubgrupo2-$ttsubgrupo4;
	if ($vendaporcento < 1) {
		echo "<td><font color=\"Red\" size=3><strong>".number_format($vendaporcento,2,",",".").'%'."</strong></font></td>\n";
	} else {
		echo "<td><font color=\"black\" size=3><strong>".number_format($vendaporcento,2,",",".").'%'."</strong></font></td>\n";
	}
	if ($brutoporcento < 1) {
		echo "<td><font color=\"Red\" size=3><strong>".number_format($brutoporcento,2,",",".").'%'."</strong></font></td>\n";
	} else {
		echo "<td><font color=\"black\" size=3><strong>".number_format($brutoporcento,2,",",".").'%'."</strong></font></td>\n";
	}
	if ($difvenda < 1) {
		echo "<td><font color=\"Red\" size=3><strong>".number_format($difvenda,2,",",".")."</strong></font></td>\n";
	} else {
		echo "<td><font color=\"black\" size=3><strong>".number_format($difvenda,2,",",".")."</strong></font></td>\n";
	}
	if ($difresultado < 1) {
		echo "<td><font color=\"Red\" size=3><strong>".number_format($difresultado,2,",",".")."</strong></font></td>\n";
	} else {
		echo "<td><font color=\"black\" size=3><strong>".number_format($difresultado,2,",",".")."</strong></font></td>\n";
	}
	echo "</tr>\n";
	
	
	
	
	$ttsubgrupo1=0.00;
	$ttsubgrupo2=0.00;
	$ttsubgrupo3=0.00;
	$ttsubgrupo4=0.00;
	
	$sql="select (select sum (csaihisotorico*cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='S'  and cdeslinha not ilike '%CONFECÇÕES%' ) as a,
	(select sum (centhistorico *cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='E' and cdeslinha not ilike '%CONFECÇÕES%' ) as b,
	(select sum (csaihisotorico*n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='S'  and cdeslinha not ilike '%CONFECÇÕES%' ) as c,
	(select sum (centhistorico *n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='E' and cdeslinha not ilike '%CONFECÇÕES%') as d,
	(select sum (csaihisotorico*cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='S' and  cdeslinha not ilike '%CONFECÇÕES%' ) as e,
	(select sum (centhistorico *cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='E' and cdeslinha not ilike '%CONFECÇÕES%' ) as f,
	(select sum (csaihisotorico*n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='S' and cdeslinha not ilike '%CONFECÇÕES%') as g,
	(select sum (centhistorico *n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='E'and cdeslinha not ilike '%CONFECÇÕES%' ) as h";
	$exsql=pg_query($conj,$sql);
    $rssql=pg_fetch_array($exsql);
    $venda=$rssql['a'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['b'];
    if ($troca == null) {
    	$troca=0.00;
    }        
    $may=$venda-$troca;
	$ttcoluna1=$ttcoluna1+$may;
	$ttsubgrupo1=$ttsubgrupo1+$may;
    $venda=$rssql['c'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['d'];
    if ($troca == null) {
    	$troca=0.00;
    }    
	$custo=$venda-$troca;
	$brutomay=$may-$custo;
	$ttcoluna2=$ttcoluna2+$brutomay;
	$ttsubgrupo2=$ttsubgrupo2+$brutomay; 
    $venda=$rssql['e'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['f'];
    if ($troca == null) {
    	$troca=0.00;
    }    
    $mayant=$venda-$troca;
	$ttcoluna3=$ttcoluna3+$mayant; 
	$ttsubgrupo3=$ttsubgrupo3+$mayant;
    $venda=$rssql['g'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['h'];
    if ($troca == null) {
    	$troca=0.00;
    }    
	$custo=$venda-$troca;
	$brutomayant=$mayant-$custo;
	$ttcoluna4=$ttcoluna4+$brutomayant;
	$ttsubgrupo4=$ttsubgrupo4+$brutomayant;
	echo "<td><font color=\"Red\" size=3><strong>".'ATA.CALÇ'."</strong></font></td>\n";
	echo "<td>".number_format($may,2,",",".")."</td>\n";
	echo "<td>".number_format($brutomay,2,",",".")."</td>\n";
	echo "<td>".number_format($mayant,2,",",".")."</td>\n";
	echo "<td>".number_format($brutomayant,2,",",".")."</td>\n";
	$vendaporcento=((($may/$mayant)-1)*100);    
	$brutoporcento=((($brutomay/$brutomayant)-1)*100); 
	$difvenda=$may-$mayant;
	$difresultado=$brutomay-$brutomayant;
	if ($vendaporcento < 1) {
		echo "<td><font color=\"Red\">".number_format($vendaporcento,2,",",".").'%'."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($vendaporcento,2,",",".").'%'."</font></td>\n";
	}
	if ($brutoporcento < 1) {
		echo "<td><font color=\"Red\">".number_format($brutoporcento,2,",",".").'%'."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($brutoporcento,2,",",".").'%'."</font></td>\n";
	}
	if ($difvenda < 1) {
		echo "<td><font color=\"Red\">".number_format($difvenda,2,",",".")."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($difvenda,2,",",".")."</font></td>\n";
	}
	if ($difresultado < 1) {
		echo "<td><font color=\"Red\">".number_format($difresultado,2,",",".")."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($difresultado,2,",",".")."</font></td>\n";
	}
	echo "</tr>\n";
	$sql="select (select sum (csaihisotorico*cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='S'  and cdeslinha  ilike '%CONFECÇÕES%' ) as a,
	(select sum (centhistorico *cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='E' and cdeslinha  ilike '%CONFECÇÕES%' ) as b,
	(select sum (csaihisotorico*n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='S'  and cdeslinha  ilike '%CONFECÇÕES%' ) as c,
	(select sum (centhistorico *n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$datain' and cemihistorico <= '$dataf' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='E' and cdeslinha  ilike '%CONFECÇÕES%') as d,
	(select sum (csaihisotorico*cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='S' and  cdeslinha  ilike '%CONFECÇÕES%' ) as e,
	(select sum (centhistorico *cvlqhistorico) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='E' and cdeslinha  ilike '%CONFECÇÕES%' ) as f,
	(select sum (csaihisotorico*n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='S' and cdeslinha  ilike '%CONFECÇÕES%') as g,
	(select sum (centhistorico *n_ahi_valor_custo_venda) from ahistorico left join aprodutos on cprohistorico=ccodproduto left join asaidas on cisahistorico = cidesaidas 
	left join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao left join tlinha on ccodlinha = clinproduto where cemihistorico >= '$dataina' and cemihistorico <= '$datafa' 
	and cemphistorico in (1,2) and i_tna_valida_comissao = '0' and ctessaidas='E'and cdeslinha  ilike '%CONFECÇÕES%' ) as h";
	$exsql=pg_query($conj,$sql);
    $rssql=pg_fetch_array($exsql);
    $venda=$rssql['a'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['b'];
    if ($troca == null) {
    	$troca=0.00;
    }        
    $may=$venda-$troca;
	$ttcoluna1=$ttcoluna1+$may;
	$ttsubgrupo1=$ttsubgrupo1+$may;
    $venda=$rssql['c'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['d'];
    if ($troca == null) {
    	$troca=0.00;
    }    
	$custo=$venda-$troca;
	$brutomay=$may-$custo;
	$ttcoluna2=$ttcoluna2+$brutomay;
	$ttsubgrupo2=$ttsubgrupo2+$brutomay; 
    $venda=$rssql['e'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['f'];
    if ($troca == null) {
    	$troca=0.00;
    }    
    $mayant=$venda-$troca;
	$ttcoluna3=$ttcoluna3+$mayant; 
	$ttsubgrupo3=$ttsubgrupo3+$mayant;
    $venda=$rssql['g'];
    if ($venda == null){
    	$venda=0.00;
    }
    $troca=$rssql['h'];
    if ($troca == null) {
    	$troca=0.00;
    }    
	$custo=$venda-$troca;
	$brutomayant=$mayant-$custo;
	$ttcoluna4=$ttcoluna4+$brutomayant;
	$ttsubgrupo4=$ttsubgrupo4+$brutomayant;
	echo "<td><font color=\"Red\" size=3><strong>".'ATA.CONF'."</strong></font></td>\n";
	echo "<td>".number_format($may,2,",",".")."</td>\n";
	echo "<td>".number_format($brutomay,2,",",".")."</td>\n";
	echo "<td>".number_format($mayant,2,",",".")."</td>\n";
	echo "<td>".number_format($brutomayant,2,",",".")."</td>\n";
	$vendaporcento=((($may/$mayant)-1)*100);    
	$brutoporcento=((($brutomay/$brutomayant)-1)*100); 
	$difvenda=$may-$mayant;
	$difresultado=$brutomay-$brutomayant;
	if ($vendaporcento < 1) {
		echo "<td><font color=\"Red\">".number_format($vendaporcento,2,",",".").'%'."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($vendaporcento,2,",",".").'%'."</font></td>\n";
	}
	if ($brutoporcento < 1) {
		echo "<td><font color=\"Red\">".number_format($brutoporcento,2,",",".").'%'."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($brutoporcento,2,",",".").'%'."</font></td>\n";
	}
	if ($difvenda < 1) {
		echo "<td><font color=\"Red\">".number_format($difvenda,2,",",".")."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($difvenda,2,",",".")."</font></td>\n";
	}
	if ($difresultado < 1) {
		echo "<td><font color=\"Red\">".number_format($difresultado,2,",",".")."</font></td>\n";
	} else {
		echo "<td><font color=\"black\">".number_format($difresultado,2,",",".")."</font></td>\n";
	}
	echo "</tr>\n";
	echo "<td><font color=\"Black\" size=3><strong>".'Atacadão Cdr'."</strong></font></td>\n";
	echo "<td><font color=\"Black\" size=3><strong>".number_format($ttsubgrupo1,2,",",".")."</strong></font></td>\n";
	echo "<td><font color=\"Black\" size=3><strong>".number_format($ttsubgrupo2,2,",",".")."</strong></font></td>\n";
	echo "<td><font color=\"Black\" size=3><strong>".number_format($ttsubgrupo3,2,",",".")."</strong></font></td>\n";
	echo "<td><font color=\"Black\" size=3><strong>".number_format($ttsubgrupo4,2,",",".")."</strong></font></td>\n";
	$vendaporcento=((($ttsubgrupo1/$ttsubgrupo3)-1)*100);    
	$brutoporcento=((($ttsubgrupo2/$ttsubgrupo4)-1)*100); 
	$difvenda=$ttsubgrupo1-$ttsubgrupo3;
	$difresultado=$ttsubgrupo2-$ttsubgrupo4;
	if ($vendaporcento < 1) {
		echo "<td><font color=\"Red\" size=3><strong>".number_format($vendaporcento,2,",",".").'%'."</strong></font></td>\n";
	} else {
		echo "<td><font color=\"black\" size=3><strong>".number_format($vendaporcento,2,",",".").'%'."</strong></font></td>\n";
	}
	if ($brutoporcento < 1) {
		echo "<td><font color=\"Red\" size=3><strong>".number_format($brutoporcento,2,",",".").'%'."</strong></font></td>\n";
	} else {
		echo "<td><font color=\"black\" size=3><strong>".number_format($brutoporcento,2,",",".").'%'."</strong></font></td>\n";
	}
	if ($difvenda < 1) {
		echo "<td><font color=\"Red\" size=3><strong>".number_format($difvenda,2,",",".")."</strong></font></td>\n";
	} else {
		echo "<td><font color=\"black\" size=3><strong>".number_format($difvenda,2,",",".")."</strong></font></td>\n";
	}
	if ($difresultado < 1) {
		echo "<td><font color=\"Red\" size=3><strong>".number_format($difresultado,2,",",".")."</strong></font></td>\n";
	} else {
		echo "<td><font color=\"black\" size=3><strong>".number_format($difresultado,2,",",".")."</strong></font></td>\n";
	}
	echo "</tr>\n";
	
	
	
	
	$ttsubgrupo1=0.00;
	$ttsubgrupo2=0.00;
	$ttsubgrupo3=0.00;
	$ttsubgrupo4=0.00;

	echo "<td><font color=\"Black\" size=3><strong>".'TT Geral'."</strong></font></td>\n";
	echo "<td><font color=\"Black\" size=3><strong>".number_format($ttcoluna1,2,",",".")."</strong></font></td>\n";
	echo "<td><font color=\"Black\" size=3><strong>".number_format($ttcoluna2,2,",",".")."</strong></font></td>\n";
	echo "<td><font color=\"Black\" size=3><strong>".number_format($ttcoluna3,2,",",".")."</strong></font></td>\n";
	echo "<td><font color=\"Black\" size=3><strong>".number_format($ttcoluna4,2,",",".")."</strong></font></td>\n";
	$vendaporcento=((($ttcoluna1/$ttcoluna3)-1)*100);    
	$brutoporcento=((($ttcoluna2/$ttcoluna4)-1)*100); 
	$difvenda=$ttcoluna1-$ttcoluna3;
	$difresultado=$ttcoluna2-$ttcoluna4;
	if ($vendaporcento < 1) {
		echo "<td><font color=\"Red\" size=3><strong>".number_format($vendaporcento,2,",",".").'%'."</strong></font></td>\n";
	} else {
		echo "<td><font color=\"black\" size=3><strong>".number_format($vendaporcento,2,",",".").'%'."</strong></font></td>\n";
	}
	if ($brutoporcento < 1) {
		echo "<td><font color=\"Red\" size=3><strong>".number_format($brutoporcento,2,",",".").'%'."</strong></font></td>\n";
	} else {
		echo "<td><font color=\"black\" size=3><strong>".number_format($brutoporcento,2,",",".").'%'."</strong></font></td>\n";
	}
	if ($difvenda < 1) {
		echo "<td><font color=\"Red\" size=3><strong>".number_format($difvenda,2,",",".")."</strong></font></td>\n";
	} else {
		echo "<td><font color=\"black\" size=3><strong>".number_format($difvenda,2,",",".")."</strong></font></td>\n";
	}
	if ($difresultado < 1) {
		echo "<td><font color=\"Red\" size=3><strong>".number_format($difresultado,2,",",".")."</strong></font></td>\n";
	} else {
		echo "<td><font color=\"black\" size=3><strong>".number_format($difresultado,2,",",".")."</strong></font></td>\n";
	}
	echo "</tr>\n";
	echo "De:".implode("/",array_reverse(explode("-",$datain)))."   Até:  ".implode("/",array_reverse(explode("-",$dataf)));
 	echo "      -----   ".implode("/",array_reverse(explode("-",$dataina)))." Até:".implode("/",array_reverse(explode("-",$datafa))).'<br>';
	
}
