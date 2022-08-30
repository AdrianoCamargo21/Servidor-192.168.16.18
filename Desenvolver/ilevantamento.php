<?php header('Content-Type: text/html; charset=ISO-8859-1',true);?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css"></link>
<center><img src="img/fundo1.jpg"alt="1" heigth ="100px" width="500px" ></center>
<center>
<?php
set_time_limit(900);
$time=date('H:i');
$dia= date('Y-m-d');
$data=$_POST['data'];
if ($data=='' or $data < 1) {
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Data da Posição do estoque inválida**</font></b></p>";
    ?>
        <!DOCTYPE html>
    	<html>
    	<head>
    	<link rel="stylesheet" href="css/style.css"></link>
		<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
		<center><form name = "form1" method= "post" action= "ilevantamento.html"> 
		<br>
		<input class="btn btn-red" type="submit" value="ENVIAR"/>
		</head>
		</html>
		<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
		<?php
		
        exit;
}
$obs=$_POST['obs'];
if ($obs=='') {
    $obs='Sem descrição no Cadastro';
}

$emp=$_POST['emp'];
if ($emp=='' or $emp < 1) {
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Empresa Inválida**</font></b></p>";
    ?>
        <!DOCTYPE html>
    	<html>
    	<head>
    	<link rel="stylesheet" href="css/style.css"></link>
		<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
		<center><form name = "form1" method= "post" action= "ilevantamento.html"> 
		<br>
		<input class="btn btn-red" type="submit" value="ENVIAR"/>
		</head>
		</html>
		<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
		<?php
		
        exit;
}
$linha=$_POST['lin'];
if ($linha=='' or $linha < 0) {
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Linha Inválida**</font></b></p>";
    ?>
        <!DOCTYPE html>
    	<html>
    	<head>
    	<link rel="stylesheet" href="css/style.css"></link>
		<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
		<center><form name = "form1" method= "post" action= "ilevantamento.html"> 
		<br>
		<input class="btn btn-red" type="submit" value="ENVIAR"/>
		</head>
		</html>
		<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
		<?php
		
        exit;
}
$marca=$_POST['mar'];
if ($marca=='' or $marca < 0) {
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Marca Inválida**</font></b></p>";
    ?>
        <!DOCTYPE html>
    	<html>
    	<head>
    	<link rel="stylesheet" href="css/style.css"></link>
		<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
		<center><form name = "form1" method= "post" action= "ilevantamento.html"> 
		<br>
		<input class="btn btn-red" type="submit" value="ENVIAR"/>
		</head>
		</html>
		<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
		<?php
		
        exit;
}
$grupo=$_POST['grup'];
if ($grupo=='' or $grupo < 0) {
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Grupo Inválido**</font></b></p>";
    ?>
        <!DOCTYPE html>
    	<html>
    	<head>
    	<link rel="stylesheet" href="css/style.css"></link>
		<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
		<center><form name = "form1" method= "post" action= "ilevantamento.html"> 
		<br>
		<input class="btn btn-red" type="submit" value="ENVIAR"/>
		</head>
		</html>
		<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
		<?php
		
        exit;
}
$dep=$_POST['dep'];
if ($dep=='' or $dep < 0) {
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Departamento Inválido**</font></b></p>";
    ?>
        <!DOCTYPE html>
    	<html>
    	<head>
    	<link rel="stylesheet" href="css/style.css"></link>
		<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
		<center><form name = "form1" method= "post" action= "ilevantamento.html"> 
		<br>
		<input class="btn btn-red" type="submit" value="ENVIAR"/>
		</head>
		</html>
		<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
		<?php		
        exit;
}
$base=$_POST['base'];
if ($base=='1') {
    if(!@($con=pg_connect ("host=192.168.10.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@"))){
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Caçador Data:$dia  Hora:$time </font></b></p>";
        echo "<p style=background:#000000; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista Favor avisar o Adriano</font></b></p>";
        ?>
        <!DOCTYPE html>
    	<html>
    	<head>
    	<center><img src="img/error.jpg"alt="500" heigth ="500px" width="100px" ></center>
		<center><form name = "form1" method= "post" action= "ilevantamento.html"> 
		<br>
		<input class="btn btn-red" type="submit" value="ENVIAR"/>
		</head>
		</html>
		<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
		<?php
        exit; 
    }
}
if ($base=='2') {
    if(!@($con=pg_connect ("host=192.168.10.190 dbname=troll_lages port=5430 user=postgres password=ky$14gr@"))){
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Lages Data:$dia  Hora:$time </font></b></p>";
        echo "<p style=background:#000000; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista Favor avisar o Adriano</font></b></p>";
        ?>
        <!DOCTYPE html>
    	<html>
    	<head>
    	<center><img src="img/error.jpg"alt="500" heigth ="500px" width="100px" ></center>
		<center><form name = "form1" method= "post" action= "ilevantamento.html"> 
		<br>
		<input class="btn btn-red" type="submit" value="ENVIAR"/>
		</head>
		</html>
		<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
		<?php
        exit; 
    }
}
if ($base=='3') {
    if(!@($con=pg_connect ("host=192.168.10.190 dbname=troll_videira port=5430 user=postgres password=ky$14gr@"))){
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Videira Data:$dia  Hora:$time </font></b></p>";
        echo "<p style=background:#000000; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista Favor avisar o Adriano</font></b></p>";
        ?>
        <!DOCTYPE html>
    	<html>
    	<head>
    	<center><img src="img/error.jpg"alt="500" heigth ="500px" width="100px" ></center>
		<center><form name = "form1" method= "post" action= "ilevantamento.html"> 
		<br>
		<input class="btn btn-red" type="submit" value="ENVIAR"/>
		</head>
		</html>
		<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
		<?php
        exit; 
    }
}
if ($base=='4') {
    if(!@($con=pg_connect ("host=192.168.10.190 dbname=troll_joinville port=5430 user=postgres password=ky$14gr@"))){
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Joinville Data:$dia  Hora:$time </font></b></p>";
        echo "<p style=background:#000000; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista Favor avisar o Adriano</font></b></p>";
        ?>
        <!DOCTYPE html>
    	<html>
    	<head>
    	<center><img src="img/error.jpg"alt="500" heigth ="500px" width="100px" ></center>
		<center><form name = "form1" method= "post" action= "ilevantamento.html"> 
		<br>
		<input class="btn btn-red" type="submit" value="ENVIAR"/>
		</head>
		</html>
		<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
		<?php
        exit; 
    }
}
if ($base=='5') {
    if(!@($con=pg_connect ("host=192.168.10.190 dbname=silvio_pessoal port=5430 user=postgres password=ky$14gr@"))){
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Porto União Data:$dia  Hora:$time </font></b></p>";
        echo "<p style=background:#000000; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista Favor avisar o Adriano</font></b></p>";
        ?>
        <!DOCTYPE html>
    	<html>
    	<head>
    	<center><img src="img/error.jpg"alt="500" heigth ="500px" width="100px" ></center>
		<center><form name = "form1" method= "post" action= "ilevantamento.html"> 
		<br>
		<input class="btn btn-red" type="submit" value="ENVIAR"/>
		</head>
		</html>
		<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
		<?php
        exit; 
    }
}
if ($linha<>'0') {
    $linha = "and clinproduto in ($linha)";
} else {
    $linha ='';
}
if ($marca<>'0') {
    $marca = "and cmarproduto in ($marca)";
} else {
    $marca ='';
}
if ($grupo<>'0') {
    $grupo = "and cgruporduto in ($grupo)";
} else {
    $grupo ='';
}
if ($dep<>'0') {
    $dep = "and cdepproduto  in ($dep)";
} else {
    $dep ='';
}

$sql="select (nextval('seque_levantamento')) as sequencia";
$exsql=pg_query($con,$sql);
if (!$exsql){
    pg_close($con);
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Erro ao Carregar sequência*</font></b></p>";
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
    <center><form name = "form1" method= "post" action= "ilevantamento.html"> 
	<br>
	<input class="btn btn-red" type="submit" value="ENVIAR"/>    
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit;    
}
$rssql=pg_fetch_array($exsql);
$seq=$rssql['sequencia'];
$sql="INSERT INTO levantamento(id, dia, descricao, status, data) VALUES ($seq,'$dia','$obs','A', '$data')";
$exsql=pg_query($con,$sql);
if (!$exsql){
    pg_close($con);
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Erro ao Inserir o Pedido*</font></b></p>";
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
    <center><form name = "form1" method= "post" action= "ilevantamento.html"> 
	<br>
	<input class="btn btn-red" type="submit" value="ENVIAR"/>    
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit;    
}
$sql="select ccodproduto,(sum(centhistorico)-sum(csaihisotorico)) as qtd from aprodutos iner join ahistorico on ccodproduto = cprohistorico  where cemihistorico <= '$data'
and cemphistorico in ($emp) $linha $marca $grupo $dep GROUP BY ccodproduto order by ccodproduto";
$exsql=pg_query($con,$sql);
if (!$exsql){    
    $sql="delete from levantamento where id = $seq  ";
    $exsql=pg_query($con,$sql);
    pg_close($con);
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Erro ao Fazer a Consulta dos Produtos*</font></b></p>";
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
    <center><form name = "form1" method= "post" action= "ilevantamento.html"> 
	<br>
	<input class="btn btn-red" type="submit" value="ENVIAR"/>    
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit;    
}
$rssql=pg_fetch_array($exsql);
$cod=$rssql['ccodproduto'];
if ($cod=='') {
    $sql="delete from levantamento where id = $seq  ";
    $exsql=pg_query($con,$sql);
    pg_close($con);
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Nenhum Produto Com Esse Filtro**</font></b></p>";
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
    <center><form name = "form1" method= "post" action= "ilevantamento.html"> 
	<br>
	<input class="btn btn-red" type="submit" value="ENVIAR"/>    
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit;    
}
$exsql=pg_query($con,$sql);
while($dados=pg_fetch_array($exsql)){
    $cod=$dados['ccodproduto'];
    $qtd=$dados['qtd'];
    $com="INSERT INTO itens_levantamento(id, codlevantamento, produto, estoque, coleta)
    VALUES (nextval('seque_itens_levantamento'),$seq,$cod,'$qtd','0')";
    $excom=pg_query($con,$com);
    if (!$excom){
        $sql="delete from levantamento where id = $seq  ";
        $exsql=pg_query($con,$sql);
        pg_close($con);
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Erro ao Importar Produtos*</font></b></p>";
        ?>
   		 <!DOCTYPE html>
		 <html>
  	  	 <head>
    	 <center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
    	 <center><form name = "form1" method= "post" action= "ilevantamento.html"> 
		<br>
		<input class="btn btn-red" type="submit" value="ENVIAR"/>    
		</head>
		</html>
		<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
		<?php
        exit;    
}
}
?>
<link rel="stylesheet" href="css/style.css"></link>
<center><img src=img/okk.jpg alt="400" heigth ="400px" width="300px" ></center>
<center><form name = "form1" method= "post" action= "levantamento.php"></center>
<center><input class="btn btn-red"  type="submit"  value="Voltar"></center>
</center>
</head>
</html>





















