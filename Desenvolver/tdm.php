<!DOCTYPE html>
<html>
<head>
<title>Conferência</title>
<meta http-equiv='refresh' content='600' ;url=http://192.168.13.2/Desenvolver/produtos.php';'>
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
<marquee behavior="slide"><h1> <div name="relogio" id="relogio"></div></h1> </marquee>
<BODY>
</BODY>
</HTML>
<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
set_time_limit(9000);
date_default_timezone_set('America/Sao_Paulo');
$time=date('H:i:s');
$dia= date('d-m-Y');

$som=0;

//Conferência Dos TDMS
$dataf= date('Y-m-d');
$datai=date('Y-m-d', strtotime($dataf. '-40 days'));
echo "<table border='2' width='100%' bgcolor=#E3F6CE >";
echo "<tr><td>Empresa</td>"."<td>Emissor</td>"."<td>Data</td>"."</tr>";
echo "<td>".'CAÇADOR'."</td>\n";
echo "<td>".''."</td>\n";
echo "<td>".''."</td>\n";
echo "</tr>\n";
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
$sql="select cserserie,cempserie from tseriesnf order by cempserie";
$exsql= pg_query($con,$sql);
while ($row = pg_fetch_assoc( $exsql)) {
    $serie=$row['cserserie'];
    $emp=$row['cempserie'];
    $com="select i_r02_crz ,d_r02_data_movimento_reducao from registror02 where d_r02_data_movimento_reducao >= '$datai' and i_r02_codigo_tse =$serie order by i_r02_crz ";
    $excom= pg_query($con,$com);
    while ($row = pg_fetch_assoc( $excom)) {
        $numero=$row['i_r02_crz'];
        $data=$row['d_r02_data_movimento_reducao'];
        $com1="select i_c405_crz from c405 where i_c405_crz = $numero and i_c405_codigo_tse = $serie";
        $excom1= pg_query($con,$com1);
        $rscom1=pg_fetch_array($excom1);
        $red=$rscom1['i_c405_crz'];
        if ($red ==  '') {
            $som ++;
            echo "<td>".$emp."</td>\n";
            echo "<td>".$serie."</td>\n";
            echo "<td>".$data."</td>\n";
            echo "</tr>\n";
            
        }
    }    
}
echo "<td>".'VIDAEIRA/MARTELLO'."</td>\n";
echo "<td>".''."</td>\n";
echo "<td>".''."</td>\n";
echo "</tr>\n";
if(!@($con=pg_connect ("host=192.168.9.10 dbname=troll port=5433 user=postgres password=ky$14gr@"))){
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
$sql="select cserserie,cempserie from tseriesnf order by cempserie";
$exsql= pg_query($con,$sql);
while ($row = pg_fetch_assoc( $exsql)) {
    $serie=$row['cserserie'];
    $emp=$row['cempserie'];
    $com="select i_r02_crz ,d_r02_data_movimento_reducao from registror02 where d_r02_data_movimento_reducao >= '$datai' and i_r02_codigo_tse =$serie order by i_r02_crz ";
    $excom= pg_query($con,$com);
    while ($row = pg_fetch_assoc( $excom)) {
        $numero=$row['i_r02_crz'];
        $data=$row['d_r02_data_movimento_reducao'];
        $com1="select i_c405_crz from c405 where i_c405_crz = $numero and i_c405_codigo_tse = $serie";
        $excom1= pg_query($con,$com1);
        $rscom1=pg_fetch_array($excom1);
        $red=$rscom1['i_c405_crz'];
        if ($red ==  '') {
            $som ++;
            echo "<td>".$emp."</td>\n";
            echo "<td>".$serie."</td>\n";
            echo "<td>".$data."</td>\n";
            echo "</tr>\n";
            
        }
    }    
}
echo "<td>".'LAGES'."</td>\n";
echo "<td>".''."</td>\n";
echo "<td>".''."</td>\n";
echo "</tr>\n";
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
$sql="select cserserie,cempserie from tseriesnf order by cempserie";
$exsql= pg_query($con,$sql);
while ($row = pg_fetch_assoc( $exsql)) {
    $serie=$row['cserserie'];
    $emp=$row['cempserie'];
    $com="select i_r02_crz ,d_r02_data_movimento_reducao from registror02 where d_r02_data_movimento_reducao >= '$datai' and i_r02_codigo_tse =$serie order by i_r02_crz ";
    $excom= pg_query($con,$com);
    while ($row = pg_fetch_assoc( $excom)) {
        $numero=$row['i_r02_crz'];
        $data=$row['d_r02_data_movimento_reducao'];
        $com1="select i_c405_crz from c405 where i_c405_crz = $numero and i_c405_codigo_tse = $serie";
        $excom1= pg_query($con,$com1);
        $rscom1=pg_fetch_array($excom1);
        $red=$rscom1['i_c405_crz'];
        if ($red ==  '') {
            $som ++;
            echo "<td>".$emp."</td>\n";
            echo "<td>".$serie."</td>\n";
            echo "<td>".$data."</td>\n";
            echo "</tr>\n";
            
        }
    }    
}
echo "<td>".'ATACADÂO'."</td>\n";
echo "<td>".''."</td>\n";
echo "<td>".''."</td>\n";
echo "</tr>\n";
if(!@($con=pg_connect ("host=192.168.19.2 dbname=troll port=5434 user=postgres password=ky$14gr@"))){
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
$sql="select cserserie,cempserie from tseriesnf order by cempserie";
$exsql= pg_query($con,$sql);
while ($row = pg_fetch_assoc( $exsql)) {
    $serie=$row['cserserie'];
    $emp=$row['cempserie'];
    $com="select i_r02_crz ,d_r02_data_movimento_reducao from registror02 where d_r02_data_movimento_reducao >= '$datai' and i_r02_codigo_tse =$serie order by i_r02_crz ";
    $excom= pg_query($con,$com);
    while ($row = pg_fetch_assoc( $excom)) {
        $numero=$row['i_r02_crz'];
        $data=$row['d_r02_data_movimento_reducao'];
        $com1="select i_c405_crz from c405 where i_c405_crz = $numero and i_c405_codigo_tse = $serie";
        $excom1= pg_query($con,$com1);
        $rscom1=pg_fetch_array($excom1);
        $red=$rscom1['i_c405_crz'];
        if ($red ==  '') {
            $som ++;
            echo "<td>".$emp."</td>\n";
            echo "<td>".$serie."</td>\n";
            echo "<td>".$data."</td>\n";
            echo "</tr>\n";
            
        }
    }    
}
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
$sql="select cserserie,max(d_c405_dt_doc ),cempserie from tseriesnf inner join c405 on i_c405_codigo_tse  = cserserie where d_c405_dt_doc >='$datai' GROUP BY cserserie order by cempserie,cserserie";
$exsql= pg_query($con,$sql);
echo "<table border='2' width='100%' bgcolor=#E3F6CE >";
echo "<tr><td>Empresa</td>"."<td>Emissor</td>"."<td>Data</td>"."</tr>";
echo "<td >".'Caçador'."</td>\n";
echo "<td>".''."</td>\n";
echo "<td>".''."</td>\n";
echo "</tr>\n";
while ($row = pg_fetch_assoc( $exsql)) {
    $serie=$row['cserserie'];
    $data=$row['max'];
    $emp=$row['cempserie']; 
    echo "<td>".$emp."</td>\n";
    echo "<td>".$serie."</td>\n";
    echo "<td>".$data."</td>\n";
    echo "</tr>\n";
    
}
if(!@($con=pg_connect ("host=192.168.9.10 dbname=troll port=5433 user=postgres password=ky$14gr@"))){
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
echo "<td >".'Videira'."</td>\n";
echo "<td>".''."</td>\n";
echo "<td>".''."</td>\n";
echo "</tr>\n";
$sql="select cserserie,max(d_c405_dt_doc ),cempserie from tseriesnf inner join c405 on i_c405_codigo_tse  = cserserie where d_c405_dt_doc >='$datai' GROUP BY cserserie order by cempserie,cserserie";
$exsql= pg_query($con,$sql);
while ($row = pg_fetch_assoc( $exsql)) {
    $serie=$row['cserserie'];
    $data=$row['max'];
    $emp=$row['cempserie'];
    echo "<td>".$emp."</td>\n";
    echo "<td>".$serie."</td>\n";
    echo "<td>".$data."</td>\n";
    echo "</tr>\n";
    
}
if(!@($con=pg_connect ("host=192.168.11.2 dbname=Troll port=5431 user=postgres password=ky$14gr@"))){
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
echo "<td >".'Lages'."</td>\n";
echo "<td>".''."</td>\n";
echo "<td>".''."</td>\n";
echo "</tr>\n";
$sql="select cserserie,max(d_c405_dt_doc ),cempserie from tseriesnf inner join c405 on i_c405_codigo_tse  = cserserie where d_c405_dt_doc >='$datai' GROUP BY cserserie order by cempserie,cserserie";
$exsql= pg_query($con,$sql);
while ($row = pg_fetch_assoc( $exsql)) {
    $serie=$row['cserserie'];
    $data=$row['max'];
    $emp=$row['cempserie'];
    echo "<td>".$emp."</td>\n";
    echo "<td>".$serie."</td>\n";
    echo "<td>".$data."</td>\n";
    echo "</tr>\n";
    
}
if(!@($con=pg_connect ("host=192.168.19.2 dbname=troll port=5434 user=postgres password=ky$14gr@"))){
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
echo "<td >".'Atacadão'."</td>\n";
echo "<td>".''."</td>\n";
echo "<td>".''."</td>\n";
echo "</tr>\n";
$sql="select cserserie,max(d_c405_dt_doc ),cempserie from tseriesnf inner join c405 on i_c405_codigo_tse  = cserserie where d_c405_dt_doc >='$datai' GROUP BY cserserie order by cempserie,cserserie";
$exsql= pg_query($con,$sql);
while ($row = pg_fetch_assoc( $exsql)) {
    $serie=$row['cserserie'];
    $data=$row['max'];
    $emp=$row['cempserie'];
    echo "<td>".$emp."</td>\n";
    echo "<td>".$serie."</td>\n";
    echo "<td>".$data."</td>\n";
    echo "</tr>\n";
    
}

echo '<br>';

//Fim Conferência Dos TDMS







if ($som >= 1) {
    echo "<embed src='sond/igor.mp3' width='0' height='0'>";
}
//
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css"></link>


<body>

<!--agora vem o script-->

<style>

body { 

background-image: url("https://ecocleanshine.com.br/wp-content/uploads/2018/05/pagamento-em-processamento.gif");

background-attachment: fixed;
background-repeat: no-repeat;



}

</style>

</body>

</head>
</html>






   
    




