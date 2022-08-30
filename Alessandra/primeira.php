<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<!DOCTYPE html>
<html>
<html lang="pt">
<head>
<link rel="stylesheet" href="css/style.css"></link>
<br><br>
</html>
<?php
header("Content-Type: text/html; charset=ISO-8859-1",true);
session_start();
set_time_limit(0);
date_default_timezone_set('America/Sao_Paulo');
include_once("conexao.php");
$time = date('H:i:s');
$dia = date('Y-m-d');
$voltalogin = "<script>window.location='http://192.168.13.2/Alessandra/'</script>";
$tipo = $_POST['tipo'];
if ($tipo == 'G') {
    //$base = $_POST['rel'];
	$sql = "select *from aclientes where ctipcliente = '21' order by ccodigo ";
	$exsql = pg_query($conc,$sql);
	 while ($row = pg_fetch_assoc($exsql)) {
		$cod = $row['ccodigo'];
		$com = "select count(*) from asduplicatas where cdpadupli is null and cclidupli= $cod";
		$excom = pg_query($conc,$com);
		$rscom = pg_fetch_array($excom);
		$verefica = $rscom['count'];
		if ($verefica > 0) {
		    $com = " select *from clientes_aces where codigo = $cod ";
		    $excom = pg_query($conc,$com);
		    $rscom = pg_fetch_array($excom);
		    $verefica = $rscom['codigo'];
		    if ($verefica == null) {
		        $com = "insert into clientes_aces values ($cod,0) ";
		        $excom = pg_query($conc,$com);
		    }
		}
		$com = "select count(*) from asduplicatas where cdpadupli is null and cclidupli= $cod";
		$excom = pg_query($conv,$com);
		$rscom = pg_fetch_array($excom);
		$verefica = $rscom['count'];
		if ($verefica > 0) {
		    $com = " select *from clientes_aces where codigo = $cod ";
		    $excom = pg_query($conc,$com);
		    $rscom = pg_fetch_array($excom);
		    $verefica = $rscom['codigo'];
		    if ($verefica == null) {
		        $com = "insert into clientes_aces values ($cod,0) ";
		        $excom = pg_query($conc,$com);
		    }
		}
		$com = "select count(*) from asduplicatas where cdpadupli is null and cclidupli= $cod";
		$excom = pg_query($conj,$com);
		$rscom = pg_fetch_array($excom);
		$verefica = $rscom['count'];
		if ($verefica > 0) {
		    $com = " select *from clientes_aces where codigo = $cod ";
		    $excom = pg_query($conc,$com);
		    $rscom = pg_fetch_array($excom);
		    $verefica = $rscom['codigo'];
		    if ($verefica == null) {
		        $com = "insert into clientes_aces values ($cod,0) ";
		        $excom = pg_query($conc,$com);
		    }
		}
		$com = "select count(*) from asduplicatas where cdpadupli is null and cclidupli= $cod";
		$excom = pg_query($conl,$com);
		$rscom = pg_fetch_array($excom);
		$verefica = $rscom['count'];
		if ($verefica > 0) {
		    $com = " select *from clientes_aces where codigo = $cod ";
		    $excom = pg_query($conl,$com);
		    $rscom = pg_fetch_array($excom);
		    $verefica = $rscom['codigo'];
		    if ($verefica == null) {
		        $com = "insert into clientes_aces values ($cod,0) ";
		        $excom = pg_query($conc,$sql);
		        
		    }
		}
	}
	$sql = "select count(*) from clientes_aces where enviado = 0 ";
	$exsql = pg_query($conc,$sql);
	$rsql = pg_fetch_array($exsql);
	$cac = $rsql['count'];
	$sql = "select count(*) from clientes_aces where enviado = 0 ";
	$exsql = pg_query($conl,$sql);
	$rsql = pg_fetch_array($exsql);
	$lag = $rsql['count'];
	echo "<p style=background:#FFE4C4; align=center <br/><b><font size=30 color=#FF0000><br><br>Planilha de Clientes Carregada <br><br> Cdr: $cac Lages: $lag <br><br> </font></b></p>";
	
	
	?>
	
	<center>
	<br><br>
	 <form method="POST" action="gerar_planilha.php">
	<INPUT type="radio" name="base" value="C" checked = “checked”>Cacador 	
	<INPUT type="radio" name="base" value="L">Lages 
	<br><br>
   
    <input name= "bt"  class="btn btn-green" type="submit" value="GERAR PLANILHA"/>
    <input name= "bt"  class="btn btn-red"   type="submit" value="CANCELAR" />
    <br><br>
    </center>
    <?php
    header('Content-Type: text/html; charset=utf-8');
}
?>