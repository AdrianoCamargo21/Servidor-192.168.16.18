<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
set_time_limit(800);
date_default_timezone_set('America/Sao_Paulo');
$time=date('H:i:s');
$dia= date('d-m-Y');
set_time_limit(800);
$base=$_POST['base'];
if ($base == 'C') {
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
if ($base == 'L') {
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
$sql="update bomjesusvelho set quantidade = '0';update bomjesusnovo set quantidade = '0';";
$exsql=pg_query($con,$sql);
if (!$exsql){
    pg_close($con);
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Erro ao Zerar Quantidades**</font></b></p>";
    ?>
	<!DOCTYPE html>
	<html>
	<head>
	<link rel="stylesheet" href="css/style.css"></link>
	<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
	<center><form name = "form1" method= "post" action= "cadastrabomjesus.html"> 
	<br>
	<input class="btn btn-red" type="submit" value="ENVIAR"/>    
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit;    
}
$sql="select ccodproduto,crefporduto,cdesproduto from aprodutos where clinproduto = '108' order by ccodproduto ";
$exsql=pg_query($con,$sql);
if (!$exsql){
    pg_close($con);
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Erro ao carregar produtos**</font></b></p>";
    ?>
	<!DOCTYPE html>
	<html>
	<head>
	<link rel="stylesheet" href="css/style.css"></link>
	<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
	<center><form name = "form1" method= "post" action= "cadastrabomjesus.html"> 
	<br>
	<input class="btn btn-red" type="submit" value="ENVIAR"/>    
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit;    
}
while($dados=pg_fetch_array($exsql)){    
    $cod=$dados['ccodproduto'];
    $ref=$dados['crefporduto'];
    $desc=$dados['cdesproduto'];
    $com="select codigo from bomjesusvelho where codigo =$cod ";
    $excom=pg_query($con,$com);
    $rscom=pg_fetch_array($excom);
    $codc=$rscom['codigo'];
    if ($codc=='') {
        $com="INSERT INTO bomjesusvelho(codigo, referencia, descricao, quantidade, preco)VALUES ($cod,'$ref','$desc',0.00,0.00)";
        $excom=pg_query($con,$com);
    }
    $com="select codigo from bomjesusnovo where codigo =$cod ";
    $excom=pg_query($con,$com);
    $rscom=pg_fetch_array($excom);
    $codc=$rscom['codigo'];
    if ($codc=='') {
        $com="INSERT INTO bomjesusnovo(codigo, referencia, descricao, quantidade, preco)VALUES ($cod,'$ref','$desc',0.00,0.00)";
        $excom=pg_query($con,$com);
    }
    
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css"></link>
<center><img src=img/okk.jpg alt="400" heigth ="400px" width="300px" ></center>
<center><form name = "form1" method= "post" action= "cadastrabomjesus.html"></center>
<center><input class="btn btn-red"  type="submit"  value="Voltar"></center>
</center>
</head>
</html>