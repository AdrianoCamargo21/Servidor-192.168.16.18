<!DOCTYPE html>
<html>
<center><img src="img/fundo1.jpg"alt="500" heigth ="500px" width="250px" ></center>
<head>
<title>Vendas</title>
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
<marquee behavior="alternate" scrollamount="1" ><h1><div name="relogio" id="relogio"></div></h1></marquee>
<BODY>
</BODY>
</HTML>
<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
set_time_limit(0);
$voltalogin="<script>window.location='http://192.168.10.191/desenvolver/conferenciabj.html';</script>";
date_default_timezone_set('America/Sao_Paulo');
$time=date('H:i:s');
$dia= date('d-m-Y');
$base=$_POST["base"];
if ($base=='C') {
    if(!@($con=pg_connect ("host=192.168.16.2 dbname=troll port=5430 user=postgres password=ky$14gr@"))){
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
}
if ($base=='L') {
    if(!@($con=pg_connect ("host=192.168.11.2 dbname=troll port=5430 user=postgres password=ky$14gr@"))){
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
}

$iddev = $_POST["iddev"];
if ($iddev == null or $iddev < '0' ) {
    echo "<script>alert('ID Da Nfe de devolução Inválido');</script>";
    echo "$voltalogin";
}
$idrec = $_POST["idrec"];
if ($idrec == null or $idrec < '0' ) {
    echo "<script>alert('ID Da Nfe Recebida Inválido');</script>";
    echo "$voltalogin";
}
$sql = "delete from conferenciabj";
$exsql = pg_query($con,$sql);
$sql ="insert into conferenciabj select cprohistorico,(sum(centhistorico)) as soma,'0'  from ahistorico inner join aentradas on cienhistorico = csidentradas  where csidentradas in  ($iddev) group by cprohistorico order by cprohistorico";
$exsql = pg_query($con,$sql);
/*
$comando="select csidentradas from aentradas where csidentradas=$idrec";
set_time_limit(0);
$excomando=pg_query($con,$comando);
$rscomando=pg_fetch_array($excomando);
$id=$rscomando['csidentradas'];
if ($id == '') {
    echo "<script>alert('Nenhuma NFe Recebida com esse ID');</script>";
    echo "$voltalogin";
}
*/
$comando="select cprohistorico,(sum(centhistorico)) as soma  from ahistorico inner join aentradas on cienhistorico = csidentradas  where csidentradas in  ($idrec) group by cprohistorico order by cprohistorico";

$excomando=pg_query($con,$comando);
while ($row = pg_fetch_assoc($excomando)){
    $codd=$row['cprohistorico'];
    $qtdd=$row['soma'];   
    $excom=pg_query("select codigo from conferenciabj where codigo = $codd ");
    $rscom=pg_fetch_array($excom);
    $codigo=$rscom['codigo'];
    if ($codigo == '') {        
        $excom=pg_query($con,"INSERT INTO conferenciabj(codigo, qtddev, qtdnota)VALUES ($codd, 0, $qtdd)");
    } else {        
        $excom=pg_query($con,"update conferenciabj set qtdnota= $qtdd where codigo= $codigo");        
    }    
}
$comando="select codigo,qtddev,qtdnota  from conferenciabj where (qtddev-qtdnota ) <> 0 order by codigo  " ;
$excomando=pg_query($con,$comando);
$rscomando=pg_fetch_array($excomando);
$cod=$rscomando['codigo'];
if ($cod <>''){ 
    echo "<table border='2' width='100%' bgcolor=#FFFAFA>";
    echo "<tr><td>Código</td>"."<td>Quantidade Devolução</td>"."<td><font color=\"red\">Quantidade Nfe Recebida </font></td>"."</tr>";
    $excomando=pg_query($con,$comando);
    while ($row = pg_fetch_assoc($excomando)){
        $cod=$row['codigo'];
        $qtdd=$row['qtddev'];
        $qtdn=$row['qtdnota'];
        echo "<td>".$cod."</td>\n";
        echo "<td>".$qtdd."</td>\n";
        echo "<td>".$qtdn."</td>\n";
        echo "</tr>\n";
    }
}
?>
    

