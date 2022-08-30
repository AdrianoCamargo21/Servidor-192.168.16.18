<!DOCTYPE html>
<html>
<head>
<title>Acomulado</title>
<meta http-equiv='refresh' content='1800' ;url=http://192.168.16.190/Desenvolver/produtos.php';'>
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
set_time_limit(0);
date_default_timezone_set('America/Sao_Paulo');
$datadia=date('Y-m-d');

$time=date('H:i:s');
$dia= date('d-m-Y');

$data=date('Y-m-d');

if(!@($conexaoc=pg_connect ("host=192.168.16.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@"))){
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
$comando="select data from confacomulado where sistema = '1' order by data desc ";
$excomando=pg_query($conexaoc,$comando);
$rscomando=pg_fetch_array($excomando);
$datac=$rscomando['data'];
if ($data <= $datac ) {
    echo "<p style=background:#D7DF01; align=center <br/><b><font size=5 color=#0404B4>Caçador:Conferência Já Realizada '$dia' , '$time'  </font></b></p>";;
} else {
    $camando="select valor,data from acomula where base= '1' ";
    $excomando=pg_query($conexaoc,$camando);
    $rscomando=pg_fetch_array($excomando);
    $datas=$rscomando['data'];    
    $valor=$rscomando['valor'];
    $data=date('Y-m-d', strtotime($dia. '-1 days'));
    if ($datas == $data or $datas > $data ) {
        echo "<p style=background:#D7DF01; align=center <br/><b><font size=5 color=#0404B4>Conferência Já Realizada '$dia' , '$time'  </font></b></p>";
        exit;
    }
    $comando="select ((sum(ctotsaidas))-(sum(centsaidas))) as total  from asaidas where cemisaidas > '$datas' and caviaprsaidas = 'P'";
    set_time_limit(120);
    $excomando=pg_query($conexaoc,$comando);
    $rscomando=pg_fetch_array($excomando);
    $total=$rscomando['total'];
    $comando="select (((sum(cvpadupli))-(sum(cjurdupli)))+(sum(cdesdupli)))as prestacao from asduplicatas where cdpadupli > '$datas'";
    $excomando=pg_query($conexaoc,$comando);
    $rscomando=pg_fetch_array($excomando);
    $pag=$rscomando['prestacao'];
    $montante=(($valor+$total)-$pag);
    $comando="select (sum(cvprdupli)) as receber from asduplicatas where cdpadupli is null";
    $excomando=pg_query($conexaoc,$comando);
    $rscomando=pg_fetch_array($excomando);
    $receber=$rscomando['receber'];
    $comando="INSERT INTO confacomulado(id, valorcorreto, valorsistema, sistema, data) VALUES (nextval('seq_acomulado'),'$montante','$receber','1','$datadia')";
    $excomando=pg_query($conexaoc,$comando);
}
if(!@($conexaov=pg_connect ("host=192.168.16.190 dbname=troll_videira port=5430 user=postgres password=ky$14gr@"))){
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
$comando="select data from confacomulado where sistema = '2' order by data desc";
$excomando=pg_query($conexaoc,$comando);
$rscomando=pg_fetch_array($excomando);
$datac=$rscomando['data'];
if ($data <= $datac ) {
    echo "<p style=background:#D7DF01; align=center <br/><b><font size=5 color=#0404B4>Videira:Conferência Já Realizada '$dia' , '$time'  </font></b></p>";;
} else {
    $camando="select valor,data from acomula where base= '2'";
    $excomando=pg_query($conexaoc,$camando);
    $rscomando=pg_fetch_array($excomando);
    $datas=$rscomando['data'];
    $valor=$rscomando['valor'];
    $data=date('Y-m-d', strtotime($dia. '-1 days'));
    if ($datas == $data or $datas > $data ) {
        echo "<p style=background:#D7DF01; align=center <br/><b><font size=5 color=#0404B4>Conferência Já Realizada '$dia' , '$time'  </font></b></p>";
        exit;
    }
    $comando="select ((sum(ctotsaidas))-(sum(centsaidas))) as total  from asaidas where cemisaidas > '$datas' and caviaprsaidas = 'P'";
    $excomando=pg_query($conexaov,$comando);
    $rscomando=pg_fetch_array($excomando);
    $total=$rscomando['total'];
    $comando="select (((sum(cvpadupli))-(sum(cjurdupli)))+(sum(cdesdupli)))as prestacao from asduplicatas where cdpadupli > '$datas'";
    $excomando=pg_query($conexaov,$comando);
    $rscomando=pg_fetch_array($excomando);
    $pag=$rscomando['prestacao'];
    $montante=(($valor+$total)-$pag);
    $comando="select (sum(cvprdupli)) as receber from asduplicatas where cdpadupli is null";
    $excomando=pg_query($conexaov,$comando);
    $rscomando=pg_fetch_array($excomando);
    $receber=$rscomando['receber'];
    $comando="INSERT INTO confacomulado(id, valorcorreto, valorsistema, sistema, data) VALUES (nextval('seq_acomulado'),'$montante','$receber','2','$datadia')";
    $excomando=pg_query($conexaoc,$comando);
}
if(!@($conexaol=pg_connect ("host=192.168.16.190 dbname=troll_lages port=5430 user=postgres password=ky$14gr@"))){
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
$comando="select data from confacomulado where sistema = '3' order by data desc";
$excomando=pg_query($conexaoc,$comando);
$rscomando=pg_fetch_array($excomando);
$datac=$rscomando['data'];
if ($data <= $datac ) {
    echo "<p style=background:#D7DF01; align=center <br/><b><font size=5 color=#0404B4>Lages:Conferência Já Realizada '$dia' , '$time'  </font></b></p>";;
} else {
    $camando="select valor,data from acomula where base= '3'";
    $excomando=pg_query($conexaoc,$camando);
    $rscomando=pg_fetch_array($excomando);
    $datas=$rscomando['data'];
    $valor=$rscomando['valor'];
    $data=date('Y-m-d', strtotime($dia. '-1 days'));
    if ($datas == $data or $datas > $data ) {
        echo "<p style=background:#D7DF01; align=center <br/><b><font size=5 color=#0404B4>Conferência Já Realizada '$dia' , '$time'  </font></b></p>";
        exit;
    }
    $comando="select ((sum(ctotsaidas))-(sum(centsaidas))) as total  from asaidas where cemisaidas > '$datas' and caviaprsaidas = 'P'";
    $excomando=pg_query($conexaol,$comando);
    $rscomando=pg_fetch_array($excomando);
    $total=$rscomando['total'];
    $comando="select (((sum(cvpadupli))-(sum(cjurdupli)))+(sum(cdesdupli)))as prestacao from asduplicatas where cdpadupli > '$datas'";
    $excomando=pg_query($conexaol,$comando);
    $rscomando=pg_fetch_array($excomando);
    $pag=$rscomando['prestacao'];
    $montante=(($valor+$total)-$pag);
    $comando="select (sum(cvprdupli)) as receber from asduplicatas where cdpadupli is null";
    $excomando=pg_query($conexaol,$comando);
    $rscomando=pg_fetch_array($excomando);
    $receber=$rscomando['receber'];
    $comando="INSERT INTO confacomulado(id, valorcorreto, valorsistema, sistema, data) VALUES (nextval('seq_acomulado'),'$montante','$receber','3','$datadia')";
    $excomando=pg_query($conexaoc,$comando);
}
if(!@($conexaoj=pg_connect ("host=192.168.16.190 dbname=troll_joinville port=5430 user=postgres password=ky$14gr@"))){
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
$comando="select data from confacomulado where sistema = '4' order by data desc";
$excomando=pg_query($conexaoc,$comando);
$rscomando=pg_fetch_array($excomando);
$datac=$rscomando['data'];
if ($data <= $datac ) {
    echo "<p style=background:#D7DF01; align=center <br/><b><font size=5 color=#0404B4>Joinville:Conferência Já Realizada '$dia' , '$time'  </font></b></p>";;
} else {
    $camando="select valor,data from acomula where base= '4'";
    $excomando=pg_query($conexaoc,$camando);
    $rscomando=pg_fetch_array($excomando);
    $datas=$rscomando['data'];
    $valor=$rscomando['valor'];
    $data=date('Y-m-d', strtotime($dia. '-1 days'));
    if ($datas == $data or $datas > $data ) {
        echo "<p style=background:#D7DF01; align=center <br/><b><font size=5 color=#0404B4>Conferência Já Realizada '$dia' , '$time'  </font></b></p>";
        exit;
    }
    $comando="select ((sum(ctotsaidas))-(sum(centsaidas))) as total  from asaidas where cemisaidas > '$datas' and caviaprsaidas = 'P'";
    $excomando=pg_query($conexaoj,$comando);
    $rscomando=pg_fetch_array($excomando);
    $total=$rscomando['total'];
    $comando="select (((sum(cvpadupli))-(sum(cjurdupli)))+(sum(cdesdupli)))as prestacao from asduplicatas where cdpadupli > '$datas'";
    $excomando=pg_query($conexaoj,$comando);
    $rscomando=pg_fetch_array($excomando);
    $pag=$rscomando['prestacao'];
    $montante=(($valor+$total)-$pag);
    $comando="select (sum(cvprdupli)) as receber from asduplicatas where cdpadupli is null";
    $excomando=pg_query($conexaoj,$comando);
    $rscomando=pg_fetch_array($excomando);
    $receber=$rscomando['receber'];
    $comando="INSERT INTO confacomulado(id, valorcorreto, valorsistema, sistema, data) VALUES (nextval('seq_acomulado'),'$montante','$receber','4','$datadia')";
    $excomando=pg_query($conexaoc,$comando);
}
    
    
    
    
    
    
    
    
    
    
    
    
    exit;












?>      
    




