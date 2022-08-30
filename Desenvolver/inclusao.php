<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
date_default_timezone_set('America/Sao_Paulo');
$time=date('H:i:s');
$dia= date('d-m-Y');
$base=$_POST['base'];
if ($base == '' ) {
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>Base Inválida</font></b></p>";
    ?>
    <!DOCTYPE html>
	<html>
	<head>
	<link rel="stylesheet" href="css/style.css"></link>
	<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit;
}
if ($base=='C') {
    if(!@($con=pg_connect('host=192.168.10.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@'))){
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
    if(!@($con=pg_connect('host=192.168.10.190 dbname=troll_lages port=5430 user=postgres password=ky$14gr@'))){
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
$id=$_POST['id'];
if ($id == '' or $id < 0 ) {
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **ID Inválido**</font></b></p>";
    ?>
    <!DOCTYPE html>
	<html>
	<head>
	<link rel="stylesheet" href="css/style.css"></link>
	<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit;
}
$preco=$_POST['preco'];
if ($preco=='') {
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Lista de preço Inválida**</font></b></p>";
    ?>
    <!DOCTYPE html>
	<html>
	<head>
	<link rel="stylesheet" href="css/style.css"></link>
	<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit;
}
if ($preco == 'N') {
    $tabela='adrianocodigobomjesusnovo';
} else {
    $tabela='adrianocodigobomjesusvelho';
}
$com="select entrada from adrianoidbomjesus where entrada = $id ";
$excom=pg_query($con,$com);
$rscom=pg_fetch_array($excom);
$entrada=$rscom['entrada'];
if ($entrada <> '') {
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Id Já Carregado**</font></b></p>";
    ?>
    <!DOCTYPE html>
	<html>
	<head>
	<link rel="stylesheet" href="css/style.css"></link>
	<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit;
} else {
    if ($tabela=='adrianocodigobomjesusvelho') {
        $valor='V';
    }else {
        $valor ='N';
    }
    $com="INSERT INTO adrianoidbomjesus(entrada, saida,preco)VALUES ($id,0,'$valor')";
    $excom=pg_query($con,$com);
}

$com="select cprohistorico,centhistorico from ahistorico where cienhistorico = $id order by cprohistorico ";
set_time_limit(900);
$excom=pg_query($con,$com);
$rscom=pg_fetch_array($excom);
$codigo=$rscom['cprohistorico'];
if ($codigo=='') {
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>Nenhuma NFe com esse id favor verificar**</font></b></p>";
    ?>
    <!DOCTYPE html>
	<html>
	<head>
	<link rel="stylesheet" href="css/style.css"></link>
	<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit;
}
set_time_limit(900);
$excom=pg_query($con,$com);
while($dados=pg_fetch_array($excom)){
    $codigo=$dados['cprohistorico'];
    $qnt=$dados['centhistorico']; 
    $sqlone="select quantidade from $tabela where codigo = $codigo";
    set_time_limit(900);
    $exsqlone=pg_query($con,$sqlone);
    $rssqlone=pg_fetch_array($exsqlone);
    $qnta=$rssqlone['quantidade'];
    if ($qnta == '') {
        echo 'Produto Não Presente na tabela de Preços:'  .$tabela.'  Código do Produto:'.$codigo.'-'.$qnt.'<br>' ;
    } else {
        $qntn=$qnt+$qnta;
        $sqldu="update $tabela set quantidade =$qntn where codigo=$codigo";
        set_time_limit(900);
        pg_query($con,$sqldu);
    }
}
echo "<p style=background:#00FF00; align=center <br/><b><font size=5 color=#FFFFFF>(id:$id)Quantidades Carrega Com Sucesso em $dia , $time  </font></b></p>";
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css"></link>
<center><img src="img/fundo1.jpg"alt="1" heigth ="500px" width="500px" ></center>
<center><img src="img/inclusao.png"alt="1" heigth ="500px" width="500px" ></center>
</head>
</html>
