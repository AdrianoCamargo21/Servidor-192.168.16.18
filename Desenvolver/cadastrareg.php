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

if(!@($cono=pg_connect ("host=192.168.10.30 dbname=troll port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=30 color=#000000> Sem Comunicação Banco de Dados de Origem Data:$dia  Hora:$time </font></b></p>";
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

if(!@($cond=pg_connect ("host=192.168.10.153 dbname=troll port=5434 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=30 color=#000000> Sem Comunicação Banco de Dados Destino Data:$dia  Hora:$time </font></b></p>";
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
$sql="select *from tregiao order by ccodregiao ";
$exsql=pg_query($cono,$sql);
while($row = pg_fetch_assoc($exsql)){
    $cod=$row['ccodregiao'];
    $desc=$row['cdesregiao'];
    $com="select ccodregiao,cdesregiao from tregiao where ccodregiao = '$cod' ";
    $excom=pg_query($cond,$com);
    $rscom=pg_fetch_array($excom);
    $coda=$rscom['ccodregiao'];
    $desca=$rscom['cdesregiao'];
    if ($coda == '') {
        $com="INSERT INTO tregiao(ccodregiao, cdesregiao) VALUES ($cod,'$desc')";
        $excom=pg_query($cond,$com);
    } else {        
     if ($desc <> $desca) {
         $com="update tregiao set cdesregiao = '$desc' where ccodregiao= '$coda'  ";
         $excom=pg_query($cond,$com);
     }   
    }  
}






exit;

?>