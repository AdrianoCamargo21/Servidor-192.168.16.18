<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
date_default_timezone_set('America/Sao_Paulo');
$time=date('H:i:s');
$dia= date('d-m-Y');
$data=date('Y-m-d');
$datac=$_POST['data'];
set_time_limit(0);
if ($datac=='') {
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Data Inválida**</font></b></p>";
    ?>
        <!DOCTYPE html>
    	<html>
    	<head>
    	<link rel="stylesheet" href="css/style.css"></link>
		<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
		</head>
		</html>
		<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
		<?php
        exit;
}
if(!@($con=pg_connect('host=192.168.10.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@'))){
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

$sql= "select ((sum(centhistorico*cpcuproduto))-(sum(csaihisotorico*cpcuproduto))) as soma from ahistorico left join aprodutos on cprohistorico = ccodproduto 
	   where cemihistorico <= '$datac' and CSitProduto = 0 and cemphistorico in (3,4) ";
$exsql=pg_query($con,$sql);
$rssql=pg_fetch_array($exsql);
$result=$rssql['soma'];
$result = number_format($result,2,",",".");
echo "<table border='4' width='100%' bgcolor=#FFFAFA>";
echo "<tr><td>Via Brasil</td>"."</tr>";
echo "</TABLE>";
echo "<table border='2' width='100%' bgcolor=#FFFAFA>";
echo "<tr><td>Empresa</td>"."<td>R$ Custo </td>"."</tr>";
echo "<td>Matriz</td>.<td>R$ $result</td>"."</tr>\n";
echo "</tr>\n";
$sql= "select ((sum(centhistorico*cpcuproduto))-(sum(csaihisotorico*cpcuproduto))) as soma from ahistorico left join aprodutos on cprohistorico = ccodproduto 
	   where cemihistorico <= '$datac' and CSitProduto = 0 and cemphistorico in (1,2) ";
$exsql=pg_query($con,$sql);
$rssql=pg_fetch_array($exsql);
$result=$rssql['soma'];
$result = number_format($result,2,",",".");
echo "<td>Filial02</td>.<td>R$ $result</td>"."</tr>\n";
echo "</tr>\n";
$sql= "select ((sum(centhistorico*cpcuproduto))-(sum(csaihisotorico*cpcuproduto))) as soma from ahistorico left join aprodutos on cprohistorico = ccodproduto 
	   where cemihistorico <= '$datac' and CSitProduto = 0 and cemphistorico in (5,6) ";
$exsql=pg_query($con,$sql);
$rssql=pg_fetch_array($exsql);
$result=$rssql['soma'];
$result = number_format($result,2,",",".");
echo "<td>Filial03</td>.<td>R$ $result</td>"."</tr>\n";
echo "</tr>\n";
$sql= "select ((sum(centhistorico*cpcuproduto))-(sum(csaihisotorico*cpcuproduto))) as soma from ahistorico left join aprodutos on cprohistorico = ccodproduto 
	   where cemihistorico <= '$datac' and CSitProduto = 0 and cemphistorico in (7,8) ";
$exsql=pg_query($con,$sql);
$rssql=pg_fetch_array($exsql);
$result=$rssql['soma'];
$result = number_format($result,2,",",".");
echo "<td>Filial04</td>.<td>R$ $result</td>"."</tr>\n";
echo "</tr>\n";
echo "</TABLE>";
echo "<table border='4' width='100%' bgcolor=#FFFAFA>";
echo "<tr><td>Via Videira</td>"."</tr>";
echo "</TABLE>";
if(!@($con=pg_connect('host=192.168.10.190 dbname=troll_videira port=5430 user=postgres password=ky$14gr@'))){
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
$sql= "select ((sum(centhistorico*cpcuproduto))-(sum(csaihisotorico*cpcuproduto))) as soma from ahistorico left join aprodutos on cprohistorico = ccodproduto 
	   where cemihistorico <= '$datac' and CSitProduto = 0 and cemphistorico in (13,14) ";
$exsql=pg_query($con,$sql);
$rssql=pg_fetch_array($exsql);
$result=$rssql['soma'];
$result = number_format($result,2,",",".");
echo "<table border='2' width='100%' bgcolor=#FFFAFA>";
echo "<td>Matriz</td>.<td>R$ $result</td>"."</tr>\n";
echo "</tr>\n";
$sql= "select ((sum(centhistorico*cpcuproduto))-(sum(csaihisotorico*cpcuproduto))) as soma from ahistorico left join aprodutos on cprohistorico = ccodproduto 
	   where cemihistorico <= '$datac' and CSitProduto = 0 and cemphistorico in (15,16) ";
$exsql=pg_query($con,$sql);
$rssql=pg_fetch_array($exsql);
$result=$rssql['soma'];
$result = number_format($result,2,",",".");
echo "<td>Filial02</td>.<td>R$ $result</td>"."</tr>\n";
echo "</tr>\n";
$sql= "select ((sum(centhistorico*cpcuproduto))-(sum(csaihisotorico*cpcuproduto))) as soma from ahistorico left join aprodutos on cprohistorico = ccodproduto 
	   where cemihistorico <= '$datac' and CSitProduto = 0 and cemphistorico in (17,18) ";
$exsql=pg_query($con,$sql);
$rssql=pg_fetch_array($exsql);
$result=$rssql['soma'];
$result = number_format($result,2,",",".");
echo "<td>Filial03</td>.<td>R$ $result</td>"."</tr>\n";
echo "</tr>\n";
echo "</TABLE>";
echo "<table border='4' width='100%' bgcolor=#FFFAFA>";
echo "<tr><td>Via Lages</td>"."</tr>";
echo "</TABLE>";
if(!@($con=pg_connect('host=192.168.10.190 dbname=troll_lages port=5430 user=postgres password=ky$14gr@'))){
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
$sql= "select ((sum(centhistorico*cpcuproduto))-(sum(csaihisotorico*cpcuproduto))) as soma from ahistorico left join aprodutos on cprohistorico = ccodproduto 
	   where cemihistorico <= '$datac' and CSitProduto = 0 and cemphistorico in (1,2) ";
$exsql=pg_query($con,$sql);
$rssql=pg_fetch_array($exsql);
$result=$rssql['soma'];
$result = number_format($result,2,",",".");
echo "<table border='2' width='100%' bgcolor=#FFFAFA>";
echo "<td>Matriz</td>.<td>R$ $result</td>"."</tr>\n";
echo "</tr>\n";
$sql= "select ((sum(centhistorico*cpcuproduto))-(sum(csaihisotorico*cpcuproduto))) as soma from ahistorico left join aprodutos on cprohistorico = ccodproduto 
	   where cemihistorico <= '$datac' and CSitProduto = 0 and cemphistorico in (3,4) ";
$exsql=pg_query($con,$sql);
$rssql=pg_fetch_array($exsql);
$result=$rssql['soma'];
$result = number_format($result,2,",",".");
echo "<td>Filial02</td>.<td>R$ $result</td>"."</tr>\n";
echo "</tr>\n";
echo "</TABLE>";
echo "<table border='4' width='100%' bgcolor=#FFFAFA>";
echo "<tr><td>Civegui</td>"."</tr>";
echo "</TABLE>";
if(!@($con=pg_connect('host=192.168.10.190 dbname=troll_joinville port=5430 user=postgres password=ky$14gr@'))){
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
$sql= "select ((sum(centhistorico*cpcuproduto))-(sum(csaihisotorico*cpcuproduto))) as soma from ahistorico left join aprodutos on cprohistorico = ccodproduto 
	   where cemihistorico <= '$datac' and CSitProduto = 0 and cemphistorico in (1,2) ";
$exsql=pg_query($con,$sql);
$rssql=pg_fetch_array($exsql);
$result=$rssql['soma'];
$result = number_format($result,2,",",".");
echo "<table border='2' width='100%' bgcolor=#FFFAFA>";
echo "<td>Matriz</td>.<td>R$ $result</td>"."</tr>\n";
echo "</tr>\n";
$sql= "select ((sum(centhistorico*cpcuproduto))-(sum(csaihisotorico*cpcuproduto))) as soma from ahistorico left join aprodutos on cprohistorico = ccodproduto 
	   where cemihistorico <= '$datac' and CSitProduto = 0 and cemphistorico in (3,4) ";
$exsql=pg_query($con,$sql);
$rssql=pg_fetch_array($exsql);
$result=$rssql['soma'];
$result = number_format($result,2,",",".");
echo "<td>Filial02</td>.<td>R$ $result</td>"."</tr>\n";
echo "</tr>\n";
?>