<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
$volta="<script>window.location='http://192.168.13.2/Loja/whats.html'</script>";
$time=date('H:i:s');
$dia= date('Y-m-d');
set_time_limit(0);
$base=$_POST['base'];
if ($base == null){
    echo "<script>alert('Base Inválida');</script>";echo "$volta";exit; 
}
$empresa=$_POST['emp'];
if ($empresa == null){
    echo "<script>alert('Empresa Inválida Para Puxar Todas Utilize o 0 ');</script>";echo "$volta";exit; 
}
$dtini=$_POST['dataini'];
if ($dtini== '') {
    $dtini=$dia;    
}
$dtfin=$_POST['datafin'];
if ($dtfin=='') {
    $dtfin=$dia;
}
$dataia=$dtini;
$datafa=$dtfin;
$dataia = implode("/",array_reverse(explode("-",$dataia)));
$datafa = implode("/",array_reverse(explode("-",$datafa)));
if ($base== 1){
	if(!@($con=pg_connect('host=192.168.10.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@'))){
	    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados De Caçador Data:$dia  Hora:$time </font></b></p>";
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
if ($base== 3){
	if(!@($con=pg_connect('host=192.168.10.190 dbname=troll_videira port=5430 user=postgres password=ky$14gr@'))){
	    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados De Videira Data:$dia  Hora:$time </font></b></p>";
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
if ($base== 4){
	if(!@($con=pg_connect('host=192.168.10.190 dbname=troll_joinville port=5430 user=postgres password=ky$14gr@'))){
	    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados De Joiville Data:$dia  Hora:$time </font></b></p>";
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




$sql="select ccodigo,cnomecliente,cfoneresidencial,cfonecelular,fax_cliente from aclientes 
inner join asaidas on ccodigo = cclisaidas where cemisaidas >= '$dtini' and cemisaidas <= '$dtfin'
 and cempresasaidas in ($empresa) and caviaprsaidas = 'P' group by ccodigo order by ccodigo";
$exsql=pg_query($con,$sql);
$rsql=pg_fetch_array($exsql);
if ($rsql == null) {
	echo "<script>alert('Nenhum Cliente Retornou');</script>";echo "$volta";exit; 
}
$exsql=pg_query($con,$sql);
while($dados=pg_fetch_array($exsql)){
	$cod=$dados['ccodigo'];
	$nome=$dados['cnomecliente'];
	$foneresi=$dados['cfoneresidencial'];
	$fonecelu=$dados['cfonecelular'];
	$fax=$dados['fax_cliente'];
	if (strlen($fonecelu) == 11 ) {		
		echo $cod.'-'.$nome.'<br>';		
		echo '<img src="img/whats.jpg"alt="10" heigth ="100px" width="20px" >'.'(49)'.substr($fonecelu,2,5).'-'.substr($fonecelu,7).'<br><br>';
		
	} elseif (strlen($fonecelu) == 10){
		$vereficador=substr($fonecelu,2,1);
		if ($vereficador <> 3){
			$fonecelu=substr($fonecelu,0,2).'9'.substr($fonecelu,2);
			echo $cod.'-'.$nome.'<br>';		
			echo '<img src="img/whats.jpg"alt="10" heigth ="100px" width="20px" >'.'(49)'.substr($fonecelu,2,5).'-'.substr($fonecelu,7).'<br><br>';
		}
	} elseif (strlen($foneresi) == 10 or strlen($fax) == 10 ){
		$vereficador=substr($foneresi,2,1);
		if ($vereficador <> 3 ){
			if ($vereficador <> null ){
			$foneresi=substr($foneresi,0,2).'9'.substr($foneresi,2);
			echo $cod.'-'.$nome.'<br>';	
			echo '1'.'<img src="img/whats.jpg"alt="10" heigth ="100px" width="20px" >'.'(49)'.substr($foneresi,2,5).'-'.substr($foneresi,7).'<br><br>';
			} else {
				$vereficador=substr($fax,2,1);
				if ($vereficador <> 3){
					$fax=substr($fax,0,2).'9'.substr($fax,2);
					echo $cod.'-'.$nome.'<br>';
					echo '<img src="img/whats.jpg"alt="10" heigth ="100px" width="20px" >'.'(49)'.substr($fax,2,5).'-'.substr($fax,7).'<br><br>';
				}	
			}
		} else{
			$vereficador=substr($fax,2,1);
			if ($vereficador <> 3){
				$fax=substr($fax,0,2).'9'.substr($fax,2);
				echo $cod.'-'.$nome.'<br>';	
				echo '<img src="img/x.jpg"alt="10" heigth ="100px" width="20px" >'.'   Sem Celular ou Cadastrado em um Campo inválido'.'<br><br>';
			}
		}
	}else {
		echo $cod.'-'.$nome. 'sem telefone Celular Cadastrado'.'<br><br>';
	}
}









//echo ($sql);










exit;
?>
<!DOCTYPE html>
<html>
<head>
<center>
<title>ViaBrasil.bay</title>
<link rel="stylesheet" href="css/style.css"></link>
<a title='Imprimir' href='javascript:window.print()'><img src="img/impressora.jpg" alt="50" heigth ="100px" width="100px"  border="0" /></a>
<br><br>
<center><form name = "form1" method= "post" action= "vendas.html">
<input class="btn btn-red" type="submit" value="Voltar"/>

<br><br>
</center>
</head>
</html>



