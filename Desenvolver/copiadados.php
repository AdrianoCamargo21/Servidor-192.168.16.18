<!DOCTYPE html>
<html>
<head>
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

if(!@($origem=pg_connect ("host=192.168.10.30 dbname=troll port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=30 color=#000000> Sem Comunicação Banco de Dados De Origem Data:$dia  Hora:$time </font></b></p>";
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

if(!@($destino=pg_connect ("host=192.168.11.2 dbname=Troll port=5433 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=30 color=#000000> Sem Comunicação Banco de Dados De Destino Data:$dia  Hora:$time </font></b></p>";
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
$sql="SELECT i_ogp_codigo,i_ogp_codigo_apr,i_ogp_codigo_ogr FROM opc_grade_produto order by i_ogp_codigo ";
$exsql=pg_query($origem,$sql);
while($row = pg_fetch_assoc($exsql)){
    $cod=$row['i_ogp_codigo'];
    $desc=$row['i_ogp_codigo_apr'];
    $desc1=$row['i_ogp_codigo_ogr'];
    $com="SELECT *from opc_grade_produto where i_ogp_codigo = '$cod'  ";
    $excom=pg_query($destino,$com);
    $rscom=pg_fetch_array($excom);
    if ($rscom == '') {
        $com="INSERT INTO opc_grade_produto(i_ogp_codigo, i_ogp_codigo_apr, i_ogp_codigo_ogr)VALUES ('$cod','$desc','$desc1')";       
        $excom=pg_query($destino,$com);
    } else {
        $com="update opc_grade_produto set i_ogp_codigo_apr = '$desc', i_ogp_codigo_ogr='$desc1'  ";
    }
}
?>