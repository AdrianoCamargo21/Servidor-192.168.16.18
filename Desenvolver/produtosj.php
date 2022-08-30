<!DOCTYPE html>
<html>
<head>
<title>Replicador Produtos Joinville</title>
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
function line(){
    $backtrace = debug_backtrace();
    $line = $backtrace[0]['line'];
    return $line;
}
set_time_limit(0);
$time = date('H:i:s');
$dia= date('d-m-Y');
if(!@($serv=pg_connect ("host=127.0.0.1 dbname=via_brasil port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados da Replicação  Data:$dia  Hora:$time </font></b></p>";
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
    echo "<p style=background:#D3D3D3; align=center <br/><b><font size=5 color=#FF0000>Servidor De Replicação Conectado</font></b></p>";
}
if(!@($destino=pg_connect ("host=192.168.16.77 dbname=troll port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados De Videira Data:$dia  Hora:$time </font></b></p>";
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
if(!@($con=pg_connect ("host=192.168.16.2 dbname=troll port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Caçador Data:$dia  Hora:$time </font></b></p>";
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
$sql="select codigo from replicadorproduto where base=2 order by codigo desc limit 1 ";
echo $sql.'<br>';
$exsql=pg_query($serv,$sql);
if (!$exsql){   
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>Erro Ao Carregar Código Inicial Data:$dia  Hora:$time </font></b></p>";
    pg_close($serv);
    pg_close($con);    
    exit;
}
$rsql=pg_fetch_array($exsql);
$cod=$rsql ['codigo'];
if ($cod == null) {
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>Nenhum Código Inicial Retornou da Busca Data:$dia  Hora:$time </font></b></p>";
    pg_close($serv);
    pg_close($con);
    exit;
}
$sql = "delete from log3"; echo $sql.'<br>';
$exsql = pg_query($con,$sql);
if (!$exsql){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>Erro</font></b></p>";
    echo 'Linha'.line();
    pg_close($serv);
    pg_close($con);
    exit;
}
$sql="insert into log3 select *from log where tabela = 'aprodutos'  and operacao='UPDATE' and depois not like '%cqtd%' and codigo > $cod ";
echo $sql.'<br>';
$exsql=pg_query($con,$sql);
if (!$exsql){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>Erro No Primeiro Cadastro Data:$dia  Hora:$time </font></b></p>";
    pg_close($serv);
    pg_close($con);
    exit;
}
$sql="insert into log3 select *from log where tabela = 'aprodutos' and operacao in ('INSERT','DELETE')  and codigo > $cod ";
echo $sql.'<br>';
$exsql=pg_query($con,$sql);
if (!$exsql){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>Erro No Segundo Cadastro Data:$dia  Hora:$time </font></b></p>";
    pg_close($serv);
    pg_close($con);
    exit;
}
$sql="insert into log3 select *from log where codigo > $cod and tabela in ('tmarca','tlinha','tgrupo','tunidadeproduto','tdepartamento','ncm','grade',
     'grades_produto','produtos_kit','opc_grade','opc_grade_produto')";
echo $sql.'<br>';
$exsql=pg_query($con,$sql);
if (!$exsql){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>Erro No Terceiro Cadastro Data:$dia  Hora:$time </font></b></p>";
    pg_close($serv);
    pg_close($con);
    exit;
}
$sql="select *from log3 where codigo > $cod order by codigo";
echo $sql.'<br>';
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
    $depois=$dados['depois'];
    $codusiario=$dados['cod_usu'];
    if ($codusiario== null) {
        $codusiario='NULL';
    }
    $com="insert into tplog values($codigo,'$data','$hora','$operacao','$tabela','$usuario','$antes','$depois',$codusiario,NULL,NULL)";
    echo $com.'<br>';
    $excom=pg_query($destino,$com);
    if (!$excom) {
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>Erro Ao Copiar O Código=$codigo</font></b></p>";
        $com="delete from log3";
        $excom=pg_query($con,$com);
        pg_close($serv);
        pg_close($con);
        exit;
    }
    $com="SELECT adilog( codigo , datal , hora , tabela , operacao , antes , depois , usuario , 0 ) from tplog where codigo = $codigo";
    echo $com.'<br>';
    $excom=pg_query($destino,$com);
    if (!$excom) {        
        $com="delete from log3";
        $excom=pg_query($con,$com);
        $com="delete from tplog where codigo = $codigo";       
        $excom=pg_query($destino,$com);
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>Erro Ao Replicar O Código=$codigo</font></b></p>";
        pg_close($serv);
        pg_close($con);
        exit;
    }
    $com="delete from replicadorproduto where codigo < $codigo and base = 2 ";
    echo $com.'<br>';
    $excom=pg_query($serv,$com);
    if (!$excom) {
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>Erro ao Apagar O Código:$codigo da Tabela Do Servidor</font></b></p>";
        pg_close($serv);
        pg_close($con);
        exit;
    }
    $com="insert into replicadorproduto(codigo,base) VALUES ($codigo,2)";echo $com.'<br>';
    $excom=pg_query($serv,$com);
    if (!$excom) {
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>Erro Ao Cadastrar Registro:$codigo Porem o Mesmo 
        Foi Lançado</font></b></p>";
        pg_close($serv);
        pg_close($con);
        exit;
    }
    $com="delete from tplog where  codigo = $codigo";echo $com.'<br>';
    $excom=pg_query($destino,$com);
    if (!$excom) {
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>Erro ao Apagar O Código:$codigo da Tabela Templog</font></b></p>";
        pg_close($serv);
        pg_close($con);
        exit;
    }
    $com="delete from log2 where codigo = $codigo";echo $com.'<br>';
    $excom=pg_query($con,$com);
	if (!$excom) {
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>Erro ao Apagar O Código:$codigo da Tabela log3 De Origem</font></b></p>";
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