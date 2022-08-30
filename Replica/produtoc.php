<!DOCTYPE html>
<html>
<head>
<title>Caçador</title>
<center><img src="img/fundo1.jpg"alt="10" heigth ="100px" width="400px" ></center>
</head>
</html>
<?php
//$voltalogin="<script>window.location='http://192.168.13.2/replica/produtoc.html'</script>";
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
<BODY>
</BODY>
</HTML>
<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
set_time_limit(0);
$time=date('H:i:s');
$dia= date('d-m-Y');
if(!@($destino=pg_connect ("host=192.168.16.2 dbname=troll port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados De Destino Data:$dia  Hora:$time </font></b></p>";
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
if(!@($origem=pg_connect ("host=192.168.16.190 dbname=troll_lages port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Origem Data:$dia  Hora:$time </font></b></p>";
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
$cod=$_POST['cod'];
$sql = "select *from aprodutos where ccodproduto = $cod ";
$exsql=pg_query($origem,$sql);
$rssql=pg_fetch_array($exsql);
$cod=$rssql ['ccodproduto'];
$barra=$rssql ['cbarproduto'];
if ($barra == null){
	$barra='NULL';
}
$desc=$rssql ['cdesproduto'];
$unid=$rssql ['cuniproduto'];
$ref=$rssql ['crefporduto'];
$linha=$rssql ['clinproduto'];
$marca=$rssql ['cmarproduto'];
$marca=$rssql ['cmarproduto'];
if ($marca ==  null){
	$marca='NULL';
}
$grupo=$rssql ['cgruporduto'];
$departamento=$rssql ['cdepproduto'];
$ncm=$rssql ['i_apr_codigo_cnm'];
$comple=$rssql ['ccplproduto'];
$venda=$rssql ['cpveproduto'];
$custo=$rssql ['cpcuproduto'];
$sql="Select logar('ADRIANO',13,0);update aprodutos set cdesproduto='$desc',cuniproduto='$unid',crefporduto='$ref',
 clinproduto=$linha,cmarproduto=$marca,cgruporduto='$grupo',cdepproduto='$departamento',i_apr_codigo_cnm='$ncm',
 ccplproduto='$comple',cpveproduto=$venda,cpcuproduto=$custo,cbarproduto=$barra where ccodproduto= $cod ";
$exsql=pg_query($destino,$sql);
pg_close($origem);
 pg_close($destino);
echo "<script>alert('Código Atualizado!!');</script>";
echo "$voltalogin";
?>
<!DOCTYPE html>
<html>
<head>
</head>
</html>