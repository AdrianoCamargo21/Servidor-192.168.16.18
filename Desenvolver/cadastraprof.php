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
set_time_limit(0);
date_default_timezone_set('America/Sao_Paulo');
$time = date('H:i:s');
$dia = date('d-m-Y');

if(!@($cono=pg_connect ("host = 192.168.16.2 dbname = troll port = 5430 user = postgres password = ky$14gr@"))){
    echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=30 color=#000000> Sem Comunicação Banco de Dados de Origem Data:$dia  Hora:$time </font></b></p>";
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

if(!@($cond = pg_connect ("host = 192.168.11.2 dbname = troll port = 5430 user = postgres password = ky$14gr@"))){
    echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=30 color=#000000> Sem Comunicação Banco de Dados Destino Data:$dia  Hora:$time </font></b></p>";
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
echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=30 color=#000000> Tabela Tprofissão </font></b></p>";
$sql = "select *from tprofissao order by   codprofissao";
$exsql = pg_query($cono,$sql);
while($row = pg_fetch_assoc($exsql)){
    $codigo = $row['codprofissao'];
    $desc = $row['desprofissao'];
    $dtp = $row['diaprofissao'];
    $com = "select codprofissao,desprofissao from tprofissao where codprofissao = $codigo";
    $excom = pg_query($cond,$com);
    $rscom = pg_fetch_array($excom);
    $ccodigo = $rscom['codprofissao'];
    $cdesc = $rscom['desprofissao'];
    if ($ccodigo == null) {
        $com = "insert into tprofissao values ($codigo,'$desc','$dtp')";
        $excom = pg_query($cond,$com);
        echo "Código Cadastrado $codigo"."<br>";
    } else {
        if ($desc <> $cdesc) {
            $com = "update tprofissao set desprofissao = '$desc' where codprofissao = $codigo";
            $excom = pg_query($cond,$com);
            echo "Código $codigo Atualizado"."<br>";    
        } else {
            echo "Código já estava ok"."<br>";                
        }       
    }
}
echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=30 color=#000000> Tabela Tregião </font></b></p>";
$sql = "select *from tregiao order by ccodregiao";
$exsql = pg_query($cono,$sql);
while($row = pg_fetch_assoc($exsql)){
    $codigo = $row['ccodregiao'];
    $desc = $row['cdesregiao'];    
    $com = "select ccodregiao,cdesregiao from tregiao where ccodregiao = $codigo";
    $excom = pg_query($cond,$com);
    $rscom = pg_fetch_array($excom);
    $ccodigo = $rscom['ccodregiao'];
    $cdesc = $rscom['cdesregiao'];
    if ($ccodigo == null) {
        $com = "insert into tregiao values ($codigo,'$desc')";
        $excom = pg_query($cond,$com);
        echo "Código Cadastrado $codigo"."<br>";
    } else {
        if ($desc <> $cdesc) {
            $com = "update tregiao set cdesregiao = '$desc' where ccodregiao = $codigo";
            $excom = pg_query($cond,$com);
            echo "Código $codigo Atualizado"."<br>";
        } else {
            echo "Código já estava ok"."<br>";
        }
    }
}
?>