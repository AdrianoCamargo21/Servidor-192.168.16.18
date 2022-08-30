<!DOCTYPE html>
<html>
<head>
<title>Lages</title>

<center><img src="img/fundo1.jpg"alt="10" heigth ="100px" width="400px" ></center>
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
<BODY>
</BODY>
</HTML>
<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
date_default_timezone_set('America/Sao_Paulo');
$time=date('H:i:s');
$dia= date('d-m-Y');
if(!@($con=pg_connect ("host=192.168.11.2 dbname=Troll port=5431 user=postgres password=ky$14gr@"))){
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
echo "<p style=background:#D3D3D3; align=center <br/><b><font size=5 color=#FF0000>Servidor de Lages Conectado</font></b></p>";
$comando=("select i_tco2_codigo, s_tco2_descricao from tcor order by i_tco2_codigo  ;");
set_time_limit(300);
$excomando=pg_query($con,$comando);
$rscomando=pg_fetch_array($excomando);
if ($rscomando == '') {
    echo "<p style=background:#00FF00; align=center <br/><b><font size=30 color=#0000FF>Marcas Alteradas Com Sucesso em: '$dia' , '$time'  </font></b></p>";
    exit;
} else {
    set_time_limit(300);
    $excomando=pg_query($con,$comando);
    while ($row = pg_fetch_assoc($excomando)){
        $cod=$row['i_tco2_codigo'];
        $desc=$row['s_tco2_descricao'];
        $sql="select ccodmarca from tmarca where cdesmarca like upper('%$desc%')";
        set_time_limit(300);
        $exsql=pg_query($con,$sql);
        $rssql=pg_fetch_array($exsql);
        $codm=$rssql['ccodmarca'];
        if ($codm <> '') {
            set_time_limit(300);
            pg_query($con,"update aprodutos set cmarproduto = '$codm' where i_apr_codigo_cor='$cod'");
            pg_query($con,"update aprodutos set i_apr_codigo_cor = '0' where i_apr_codigo_cor='$cod'");
            pg_query($con,"delete from tcor where i_tco2_codigo = '$cod' ");
        }
        
    }    
}
exit;


?>