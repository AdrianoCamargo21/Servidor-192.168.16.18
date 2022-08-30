<!DOCTYPE html>
<html>
<head>
<title>Transferencias</title>
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
$time=date('H:i:s');
$dia= date('d-m-Y');
if(!@($conb=pg_connect ("host=192.168.16.2 dbname=openfire port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Caçador Data:$dia  Hora:$time </font></b></p>";
    echo "<p style=background:#000000; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista Favor avisar o Adriano</font></b></p>";
    ?>
    <!DOCTYPE html>
    <html>
    <head>
     <meta http-equiv='refresh' content='20' ;url=http://192.168.13.2/desenvolver/transferenciacontrole.php';'>
    <center><img src="img/error.jpg"alt="500" heigth ="500px" width="100px" ></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit; 
}
if(!@($con=pg_connect ("host=192.168.16.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Caçador Data:$dia  Hora:$time </font></b></p>";
    echo "<p style=background:#000000; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista Favor avisar o Adriano</font></b></p>";
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <meta http-equiv='refresh' content='20' ;url=http://192.168.13.2/desenvolver/transferenciacontrole.php';'>
    <center><img src="img/error.jpg"alt="500" heigth ="500px" width="100px" ></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit; 
}
$dtni = '2022-08-24';


function notas($a,$b,$c)
{
    $query = "select *from aentradas iner join afornecedor on cforentradas=ccodfornecedor where  cempentrada in ($a) and cemientradas >= '$c' and ctipofornecedor = $b 
             and cusucaentrada <> 'ADRIANO' and cusucaentrada <> 'TAINA'  ";
    return $query;
}
$sql = notas('1,2',4,$dtni);
$exsql = pg_query($con,$sql);
while($row = pg_fetch_array($exsql)){
    $nf = $row['cnfientradas'];
    $fornecedor = $row['cforentradas'];
    $emisao = $row['cemientradas'];
    $usur = $row['cusucaentrada'];
    $com="select numerofe from controletransferencia where numerofe = $nf and empresa='1'";
    $excom= pg_query($conb,$com);
    $rescom= pg_fetch_array($excom);
    $nfe=$rescom['numerofe'];
    if ($nfe == null) {
        $com="INSERT INTO controletransferencia VALUES (nextval('seq_controletransfe'),$nf,'$emisao', '$fornecedor','P',1,'$usur')";
        $excom= pg_query($conb,$com);
    }
}
$sql = notas('3,4',4,$dtni);
$exsql = pg_query($con,$sql);
while($row = pg_fetch_array($exsql)){
    $nf = $row['cnfientradas'];
    $fornecedor = $row['cforentradas'];
    $emisao = $row['cemientradas'];
    $usur = $row['cusucaentrada'];
    $com="select numerofe from controletransferencia where numerofe = $nf and empresa='2'";
    $excom= pg_query($conb,$com);
    $rescom= pg_fetch_array($excom);
    $nfe=$rescom['numerofe'];
    if ($nfe == null) {
        $com="INSERT INTO controletransferencia VALUES (nextval('seq_controletransfe'),$nf,'$emisao', '$fornecedor','P',2,'$usur')";
        $excom= pg_query($conb,$com);
    }
}
$sql = notas('5,6',4,$dtni);
$exsql = pg_query($con,$sql);
while($row = pg_fetch_array($exsql)){
    $nf = $row['cnfientradas'];
    $fornecedor = $row['cforentradas'];
    $emisao = $row['cemientradas'];
    $usur = $row['cusucaentrada'];
    $com="select numerofe from controletransferencia where numerofe = $nf and empresa='3'";
    $excom= pg_query($conb,$com);
    $rescom= pg_fetch_array($excom);
    $nfe=$rescom['numerofe'];
    if ($nfe == null) {
        $com="INSERT INTO controletransferencia VALUES (nextval('seq_controletransfe'),$nf,'$emisao', '$fornecedor','P',3,'$usur')";
        $excom= pg_query($conb,$com);
    }
}
$sql = notas('7,8',4,$dtni);
$exsql = pg_query($con,$sql);
while($row = pg_fetch_array($exsql)){
    $nf = $row['cnfientradas'];
    $fornecedor = $row['cforentradas'];
    $emisao = $row['cemientradas'];
    $usur = $row['cusucaentrada'];
    $com="select numerofe from controletransferencia where numerofe = $nf and empresa='5'";
    $excom= pg_query($conb,$com);
    $rescom= pg_fetch_array($excom);
    $nfe=$rescom['numerofe'];
    if ($nfe == null) {
        $com="INSERT INTO controletransferencia VALUES (nextval('seq_controletransfe'),$nf,'$emisao', '$fornecedor','P',5,'$usur')";
        $excom= pg_query($conb,$com);
    }
}
if(!@($con=pg_connect ("host=192.168.16.190 dbname=troll_videira port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Videira Data:$dia  Hora:$time </font></b></p>";
    echo "<p style=background:#000000; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista Favor avisar o Adriano</font></b></p>";
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <meta http-equiv='refresh' content='20' ;url=http://192.168.13.2/desenvolver/transferenciacontrole.php';'>
    <center><img src="img/error.jpg"alt="500" heigth ="500px" width="100px" ></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit; 
}
$sql = notas('13,14',4,$dtni);
$exsql = pg_query($con,$sql);
while($row = pg_fetch_array($exsql)){
    $nf = $row['cnfientradas'];
    $fornecedor = $row['cforentradas'];
    $emisao = $row['cemientradas'];
    $usur = $row['cusucaentrada'];
    $com="select numerofe from controletransferencia where numerofe = $nf and empresa='8'";
    $excom= pg_query($conb,$com);
    $rescom= pg_fetch_array($excom);
    $nfe=$rescom['numerofe'];
    if ($nfe == null) {
        $com="INSERT INTO controletransferencia VALUES (nextval('seq_controletransfe'),$nf,'$emisao', '$fornecedor','P',8,'$usur')";
        $excom= pg_query($conb,$com);
    }
}
$sql = notas('15,16',4,$dtni);
$exsql = pg_query($con,$sql);
while($row = pg_fetch_array($exsql)){
    $nf = $row['cnfientradas'];
    $fornecedor = $row['cforentradas'];
    $emisao = $row['cemientradas'];
    $usur = $row['cusucaentrada'];
    $com="select numerofe from controletransferencia where numerofe = $nf and empresa='7'";
    $excom= pg_query($conb,$com);
    $rescom= pg_fetch_array($excom);
    $nfe=$rescom['numerofe'];
    if ($nfe == null) {
        $com="INSERT INTO controletransferencia VALUES (nextval('seq_controletransfe'),$nf,'$emisao', '$fornecedor','P',7,'$usur')";
        $excom= pg_query($conb,$com);
    }
}
$sql = notas('17,18',4,$dtni);
$exsql = pg_query($con,$sql);
while($row = pg_fetch_array($exsql)){
    $nf = $row['cnfientradas'];
    $fornecedor = $row['cforentradas'];
    $emisao = $row['cemientradas'];
    $usur = $row['cusucaentrada'];
    $com="select numerofe from controletransferencia where numerofe = $nf and empresa='9'";
    $excom= pg_query($conb,$com);
    $rescom= pg_fetch_array($excom);
    $nfe=$rescom['numerofe'];
    if ($nfe == null) {
        $com="INSERT INTO controletransferencia VALUES (nextval('seq_controletransfe'),$nf,'$emisao', '$fornecedor','P',9,'$usur')";
        $excom= pg_query($conb,$com);
    }
}
if(!@($con=pg_connect ("host=192.168.16.190 dbname=troll_joinville port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Joinville Data:$dia  Hora:$time </font></b></p>";
    echo "<p style=background:#000000; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista Favor avisar o Adriano</font></b></p>";
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <meta http-equiv='refresh' content='20' ;url=http://192.168.13.2/desenvolver/transferenciacontrole.php';'>
    <center><img src="img/error.jpg"alt="500" heigth ="500px" width="100px" ></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit; 
}
$sql = notas('1,2',38530,$dtni);
$exsql = pg_query($con,$sql);
while($row = pg_fetch_array($exsql)){
    $nf = $row['cnfientradas'];
    $fornecedor = $row['cforentradas'];
    $emisao = $row['cemientradas'];
    $usur = $row['cusucaentrada'];
    $com="select numerofe from controletransferencia where numerofe = $nf and empresa='10'";
    $excom= pg_query($conb,$com);
    $rescom= pg_fetch_array($excom);
    $nfe=$rescom['numerofe'];
    if ($nfe == null) {
        $com="INSERT INTO controletransferencia VALUES (nextval('seq_controletransfe'),$nf,'$emisao', '$fornecedor','P',10,'$usur')";
        $excom= pg_query($conb,$com);
    }
}
$sql = notas('3,4',38530,$dtni);
$exsql = pg_query($con,$sql);
while($row = pg_fetch_array($exsql)){
    $nf = $row['cnfientradas'];
    $fornecedor = $row['cforentradas'];
    $emisao = $row['cemientradas'];
    $usur = $row['cusucaentrada'];
    $com="select numerofe from controletransferencia where numerofe = $nf and empresa='13'";
    $excom= pg_query($conb,$com);
    $rescom= pg_fetch_array($excom);
    $nfe=$rescom['numerofe'];
    if ($nfe == null) {
        $com="INSERT INTO controletransferencia VALUES (nextval('seq_controletransfe'),$nf,'$emisao', '$fornecedor','P',13,'$usur')";
        $excom= pg_query($conb,$com);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv='refresh' content='20' ;url=http://192.168.13.2/desenvolver/transferenciacontrole.php';'>
<center><img src="https://media.giphy.com/media/11JTxkrmq4bGE0/giphy.gif" width="480"  heigth ="369"  frameBorder="0" class="giphy-embed" width="200px" ></center>

</head>
</html>
<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
exit; 


?> 