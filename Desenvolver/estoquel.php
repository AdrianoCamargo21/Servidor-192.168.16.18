<!DOCTYPE html>
<html>
<head>
<title>Gera Pedido Bom Jesus</title>
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
$time=date('H:i');
$dia= date('d-m-Y');
$dia1=date('Y-m-d');
if(!@($conexaol=pg_connect ("host=192.168.10.190 dbname=troll_lages port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Lages Data:$dia Hora:$time </font></b></p>";
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
echo "<p style=background:#D3D3D3; align=center <br/><b><font size=5 color=#FF0000>Lista de Pedidos Lages Data: $dia Hora:$time</font></b></p>";
$com="select crefporduto,cdesproduto,(cminproduto-cqtdproduto)as quantidade from aprodutos where clinproduto ='108' and (cqtdproduto < cminproduto) order by crefporduto";
set_time_limit(120);
$excom=pg_query($conexaol,$com);
$rscom= pg_fetch_array($excom);
if ($rscom=='') {
    echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>Caçador Nenhum Produto Abaixo do Estoque Minimo</font></b></p>";;
} else {
    echo "<center><table border='2' width='100%' bgcolor=#FFFAFA>";
    echo "<tr><td>Referência</td>"."<td>Descrição</td>"."<td>Quantidade</td>"."</tr>";
    while ($row = pg_fetch_assoc($excom)){    
        echo "<td><font size=3>".$row['crefporduto']."</td>\n";
        echo "<td><font size=3>".$row['cdesproduto']."</td>\n";
        echo "<td><font size=3>".$row['quantidade']."</td>\n";
        echo "</tr>\n";  
    }
}


