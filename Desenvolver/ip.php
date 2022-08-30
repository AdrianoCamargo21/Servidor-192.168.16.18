<!DOCTYPE html>
<html>
<head>
<title>Acomulado</title>
<meta http-equiv='refresh' content='1800' ;url=http://192.168.13.2/Desenvolver/produtos.php';'>
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
set_time_limit(900);
date_default_timezone_set('America/Sao_Paulo');
$time=date('H:i:s');
$dia= date('Y-m-d');
if(!@($con=pg_connect ("host=192.168.10.30 dbname=openfire port=5430 user=postgres password=ky$14gr@"))){
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
$voltalogin="<script>window.location='http://192.168.10.191/Desenvolver/ip.html';</script>";
$tipo=$_POST['tipo'];
if ($tipo =='') {
    echo '<script>window.alert(\'Selecione Uma Operação\');</script>';
    echo $voltalogin;
}
if ($tipo == 'C') {
    $ip=$_POST['ip'];
    if ($ip =='192.168.10.0' or $ip =='' ) {
        echo '<script>window.alert(\'Ip inválido\');</script>';
        echo $voltalogin;
    }
    $desc=$_POST['desc'];
    if ($desc == '') {
        echo '<script>window.alert(\'Descrição Inválida\');</script>';
        echo $voltalogin;
    }
    $loja=$_POST['loja'];
    $sql=("select ip from ip  where  ip ='$ip'");
    $exsql=pg_query($con,$sql);
    if (!$exsql){
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Erro ao Procurar o Ip**</font></b></p>";
        ?>
   		<!DOCTYPE html>
	    <html>
    	<head>
    	<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
		</head>
		</html>
		<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
		<?php
        exit;    
    } 
    $rssql=pg_fetch_array($exsql);
    $ipp=$rssql['ip'];
    if ($ipp <> '') {
        echo '<script>window.alert(\'Ip Já Cadastrado\');</script>';
        echo $voltalogin;
    } else {
        $sql="INSERT INTO ip(id, ip, aparelho, loja) VALUES (nextval('seq_ip'),'$ip','$desc','$loja')";
        $exsql=pg_query($con,$sql);
        if (!$exsql){
            echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Erro ao Cadastrar o Ip**</font></b></p>";
            ?>
   			<!DOCTYPE html>
		    <html>
    		<head>
    		<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
			</head>
			</html>
			<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
			<?php
            exit;    
        } 
    }   
} 






exit;
?>