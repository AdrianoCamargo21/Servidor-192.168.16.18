<!DOCTYPE html>
<html>
<head>
<title>Sorteio live</title>
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
<audio id="audio">
    <source src="aplausos.mp3" type="audio/mp3" />
</audio>

<script type="text/javascript">

    audio = document.getElementById('audio');

function play(){
    audio.play();
}

</script>
<input type="button" value="" onclick="play()";>

<BODY>
</BODY>
</HTML>
<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
set_time_limit(0);
date_default_timezone_set('America/Sao_Paulo');
$time=date('H:i:s');
$dia= date('d-m-Y');

$arr=array("0");
$arr[] = '50';
$arr[] = '51';
$arr[] = '52';
$arr[] = '53';
$arr[] = '54';
$arr[] = '55';
$arr[] = '56';
$arr[] = '57';
$resultado = array_rand($arr);
if ($resultado == '0') {
    $resultado = array_rand($arr);
}
echo "<p style=background:#F5F5DC; align=center <br/><b><font size=5 color=#FF0000>Numero de Participantes:qtd </font></b></p>";
echo "<p style=background:#F5F5DC; align=center <br/><b><font size=30 color=#FF0000>Cliente Sorteada n�: $arr[$resultado] Nome:nome </font></b></p>";
echo "<p style=background:#F5F5DC; align=center <br/><b><font size=30 color=#FF0000>Final do telefone (XX)XXXXX-final </font></b></p>";
echo "<script> play();</script>";
?>
<!DOCTYPE html>
<html>
<head>
<center><img src=img/parabens.gif alt="600" heigth ="600px" width="600px" ></center>
</head>
</html>
<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
exit;
































exit;
if(!@($serv=pg_connect ("host=127.0.0.1 dbname=via_brasil port=5435 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunica��o Banco de Dados da Replica��o  Data:$dia  Hora:$time </font></b></p>";
    echo "<p style=background:#000000; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista Favor avisar o Adriano</font></b></p>";
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <meta http-equiv='refresh' content='5' url=http://localhost/Desenvolver/clientesv.php';'>
    <center><img src="img/error.jpg"alt="500" heigth ="500px" width="100px" ></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit;
} else {
    echo "<p style=background:#D3D3D3; align=center <br/><b><font size=5 color=#FF0000>Servidor De Replica��o Conectado</font></b></p>";
}
if(!@($destino=pg_connect ("host=192.168.10.153 dbname=troll port=5434 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunica��o Banco de Dados De Joinville Data:$dia  Hora:$time </font></b></p>";
    echo "<p style=background:#000000; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista Favor avisar o Adriano</font></b></p>";
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <meta http-equiv='refresh' content='5' url=http://localhost/Desenvolver/clientesv.php';'>
    <center><img src="img/error.jpg"alt="500" heigth ="500px" width="100px" ></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit;
} else {
    echo "<p style=background:#D3D3D3; align=center <br/><b><font size=5 color=#FF0000>Servidor Replicado de Joinville Conectado</font></b></p>";
}
if(!@($con=pg_connect ("host=192.168.10.30 dbname=troll port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunica��o Banco de Dados de Ca�ador Data:$dia  Hora:$time </font></b></p>";
    echo "<p style=background:#000000; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista Favor avisar o Adriano</font></b></p>";
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <meta http-equiv='refresh' content='5' url=http://localhost/Desenvolver/clientesv.php';'>
    <center><img src="img/error.jpg"alt="500" heigth ="500px" width="100px" ></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit;
} else {
    echo "<p style=background:#D3D3D3; align=center <br/><b><font size=5 color=#FF0000>Servidor De Origem Conectado</font></b></p>";
}
$sql="select codigo from replicadorcliente where base=2 order by codigo desc limit 1 ";
$exsql=pg_query($serv,$sql);
if (!$exsql){   
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>Erro Ao Carregar C�digo Inicial Data:$dia  Hora:$time </font></b></p>";
    pg_close($serv);
    pg_close($con);    
    exit;
}
$rsql=pg_fetch_array($exsql);
$cod=$rsql ['codigo'];
if ($cod == null) {
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>Nenhum C�digo Inicial Retornou da Busca Data:$dia  Hora:$time </font></b></p>";
    pg_close($serv);
    pg_close($con);
    exit;
}
$sql="select *from log where codigo > $cod and tabela in ('aclientes','tcliente','tprofissao','tclasse_cliente','tregiao','tcep') order by codigo limit 10 ";
$exsql=pg_query($con,$sql);
if (!$exsql){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>Erro Ao Buscar Logs Na Tabela de Origem Data:$dia  Hora:$time </font></b></p>";
    pg_close($serv);
    pg_close($con);
    exit;
}
$rsql=pg_fetch_array($exsql);
if ($rsql == null) {
    pg_close($serv);
    pg_close($con);
    echo "<p style=background:#F5F5DC; align=center <br/><b><font size=30 color=#00FF00>Nada Para Replicar em: '$dia' , '$time'  </font></b></p>";
    ?>
    <!DOCTYPE html>
	<html>
	<head>
	<meta http-equiv='refresh' content='20' url=http://localhost/Desenvolver/clientesv.php';'>
	<center><img src=img/ok.png alt="400" heigth ="400px" width="300px" ></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit;
}
$exsql=pg_query($con,$sql);
while($dados=pg_fetch_array($exsql)){
    $codigo=$dados['codigo'];
    $data=$dados['datal'];
    $hora=$dados['hora'];
    $operacao=$dados['operacao'];
    $tabela=$dados['tabela'];
    $usuario=$dados['usuario'];
	$antes=$dados['antes'];
    $antes=str_replace(chr(39),'',$antes);
    $depois=$dados['depois'];
    $depois=str_replace(chr(39),'',$depois); 
    $codusiario=$dados['cod_usu'];
    if ($codusiario== null) {
        $codusiario='NULL';
    }
    $com="insert into tplog values($codigo,'$data','$hora','$operacao','$tabela','$usuario','$antes','$depois',$codusiario,NULL,NULL)";
    $excom=pg_query($destino,$com);
    if (!$excom) {
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>Erro Ao Copiar O C�gigo=$codigo</font></b></p>";
        pg_close($serv);
        pg_close($con);
        exit;
    }
    $com="SELECT adilog( codigo , datal , hora , tabela , operacao , antes , depois , usuario , 0 ) from tplog where codigo = $codigo";
    $excom=pg_query($destino,$com);
    if (!$excom) {        
        $com="delete from tplog where codigo = $codigo";
        $excom=pg_query($destino,$com);
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>Erro Ao Replicar O C�gigo=$codigo</font></b></p>";
        pg_close($serv);
        pg_close($con);
        exit;
    }
    $com="insert into replicadorcliente(codigo,base) VALUES ($codigo,2)";
    $excom=pg_query($serv,$com);
    if (!$excom) {
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>Erro Ao Cadastrar Registro:$codig Porem o Mesmo 
        Foi Lan�ado</font></b></p>";
        pg_close($serv);
        pg_close($con);
        exit;
    }
    $com="delete from tplog where  codigo = $codigo";
    $excom=pg_query($destino,$com);
    if (!$excom) {
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>Erro ao Apagar O C�digo:$codigo da Tabela Templog</font></b></p>";
        pg_close($serv);
        pg_close($con);
        exit;
    }
    $com="delete from replicadorcliente where codigo < $codigo and base = 2 ";
    $excom=pg_query($serv,$com);
    if (!$excom) {
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>Erro ao Apagar O C�digo:$codigo da Tabela Do Servidor</font></b></p>";
        pg_close($serv);
        pg_close($con);
        exit;
    }
    
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv='refresh' content='5' url=http://localhost/Desenvolver/clientesv.php';'>
<center><img src=img/okk.jpg alt="400" heigth ="400px" width="300px" ></center>
</head>
</html>