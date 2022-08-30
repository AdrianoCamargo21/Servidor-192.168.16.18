<!DOCTYPE html>
<html>
<head>
<title>Replicação de Joinville</title>
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
set_time_limit(0);
date_default_timezone_set('America/Sao_Paulo');
$time=date('H:i:s');
$dia= date('d-m-Y');
if(!@($destino=pg_connect ("host=127.0.0.1 dbname=trollj port=5435 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados De Destino Data:$dia  Hora:$time </font></b></p>";
    echo "<p style=background:#000000; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista Favor avisar o Adriano</font></b></p>";
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <meta http-equiv='refresh' content='2' url=http://localhost/replica/joinville.php';'>
    <center><img src="img/error.jpg"alt="500" heigth ="500px" width="100px" ></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit;
}
if(!@($origem=pg_connect ("host=192.168.16.190 dbname=troll_joinville port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Origem Data:$dia  Hora:$time </font></b></p>";
    echo "<p style=background:#000000; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista Favor avisar o Adriano</font></b></p>";
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <meta http-equiv='refresh' content='2' url=http://localhost/replica/joinville.php';'>
    <center><img src="img/error.jpg"alt="500" heigth ="500px" width="100px" ></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit;
}
$sql="select *from logrep where codigo > 2931 and automatico is null order by codigo limit 100 ";
$exsql=pg_query($origem,$sql);
if (!$exsql){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>Erro ao Procurar códigos Data:$dia  Hora:$time </font></b></p>";
    pg_close($origem);
    pg_close($destino);
    exit;
}
$rsql=pg_fetch_array($exsql);
if ($rsql == null) {
    pg_close($origem);
    pg_close($destino);
    echo "<p style=background:#F5F5DC; align=center <br/><b><font size=30 color=#00FF00>Nada Para Replicar em: '$dia' , '$time'  </font></b></p>";
    ?>
    <!DOCTYPE html>
	<html>
	<head>
	<meta http-equiv='refresh' content='20' url=http://localhost/replica/joinville.php';'>	
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit;
}
$exsql=pg_query($origem,$sql);
$linha=0;
while($dados=pg_fetch_array($exsql)){
    $codigo=$dados['codigo'];
    $data=$dados['datal'];
    $hora=$dados['hora'];
    $operacao=$dados['operacao'];
    $tabela=$dados['tabela'];
    $usuario=$dados['usuario'];
    $antes=$dados['antes'];
    $antes=str_replace(chr(92),'',$antes);
    $antes=str_replace(chr(39),'',$antes); 
    $depois=$dados['depois'];
    $depois=str_replace(chr(92),'',$depois);     
    $depois=str_replace(chr(39),'',$depois);
    $codusiario=$dados['cod_usu'];
    if ($codusiario== null) {
        $codusiario='NULL';
    }
    $substituto=$dados['substituto'];
    if ($substituto== null) {
        $substituto='NULL';
    }
    $com="BEGIN;";
    $excom=pg_query($destino,$com);
    if (!$excom) {
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>Erro Ao Iniciar o Begin</font></b></p>";
        pg_close($origem);
        pg_close($destino);
        exit;
    }
	$com="DROP TABLE IF EXISTS templog;
	CREATE TEMP TABLE templog (codigo serial NOT NULL, datal date,  hora time without time zone,  operacao character varying(30) NOT NULL,  tabela character varying(60) NOT NULL,
  	usuario character varying(50), antes character varying,  depois character varying,  cod_usu integer,  automatico integer,  substituto integer);";
    $excom=pg_query($destino,$com);
    if (!$excom) {
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>Erro Ao Criar a Tebela Temporária</font></b></p>";
        $com="ROLLBACK;";
        $excom=pg_query($destino,$com);        
        pg_close($origem);
        pg_close($destino);
        exit;
    }
    $com="insert into templog values($codigo,'$data','$hora','$operacao','$tabela','$usuario','$antes','$depois',$codusiario,NULL,$substituto)";
    $excom=pg_query($destino,$com);
    if (!$excom) {
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>Erro Ao Inserir O Código=$codigo</font></b></p>";
        $com="ROLLBACK;";
        $excom=pg_query($destino,$com);        
        pg_close($origem);
        pg_close($destino);
        exit;
    }
    $com="SELECT adilog( codigo , datal , hora , tabela , operacao , antes , depois , usuario , 0 ) from templog where codigo=$codigo";
    $excom=pg_query($destino,$com);
    if (!$excom) {
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>Erro Ao Inserir O Código=$codigo</font></b></p>";
        $com="ROLLBACK;";
        $excom=pg_query($destino,$com);
        pg_close($origem);
        pg_close($destino);
        exit;
    }    
    $com="COMMIT;";
    $excom=pg_query($destino,$com);
    if (!$excom) {
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>Erro no COMMIT</font></b></p>";
        $com="ROLLBACK;";
        $excom=pg_query($destino,$com);
        pg_close($origem);
        pg_close($destino);
        exit;
    }
    $com="update logrep set automatico = 1 where codigo = $codigo";
    $excom=pg_query($origem,$com);
    if (!$excom) {
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>Erro Ao Atualizar o Log=$codigo Porem Foi Replicado</font></b></p>";
        pg_close($origem);
        pg_close($destino);
        exit;
    }    
   	$linha ++;
    echo $linha.'º Replicado o Código:'.$codigo.' Da Data:'.$data.' E Hora:'.$hora.'<br>';
}

pg_close($origem);
pg_close($destino);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv='refresh' content='5' url=http://localhost/Replica/joinville.php';'>
</head>
</html>