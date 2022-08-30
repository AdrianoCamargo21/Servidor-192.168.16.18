<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
$voltalogin="<script>window.location='http://192.168.13.2:8080/loja/Nfe.html';</script>";
date_default_timezone_set('America/Sao_Paulo');
$time=date('H:i:s');
$dia= date('d-m-Y');
set_time_limit(0);
$cod = $_POST["cod"];
if ($cod == null) {    
    echo "<script>alert('Código Inválido');</script>";
    echo $voltalogin;
    exit;
}
if(!@($conc = pg_connect ("host=192.168.16.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@"))){
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
if(!@($conv = pg_connect ("host=192.168.16.190 dbname=troll_videira port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Videira Data:$dia  Hora:$time </font></b></p>";
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
if(!@($conj=pg_connect ("host=192.168.16.190 dbname=troll_joinville port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Joinville Data:$dia  Hora:$time </font></b></p>";
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
echo '<html>
<center><img src="img/fundo1.png"alt="10" heigth ="100px" width="300px" ></center>
<center><img src="img/nota.jpg"  width="150" >
<h3>º Quando Aparecer em Vermelho e que a Nfe já Foi Utilizada</h3>
<h3></h3>
</center>
</html>';
echo "<table border='2' width='100%' bgcolor=#E3F6CE >";
echo "<tr><td>Código</td>"."<td>Descrição Do Produto</td>"."<td>Empresa de Saida</td>"."<td>Valor R$</td>"."<td>Nfe</td>"."<td>Data</td>"."<td>Vendedor</td>"."<td>Nome do Cliente</td>"."</tr>";

$sql="select cisahistorico,cnomvendedor,cdesproduto,cnotsaidas,cprohistorico,cemphistorico,cnomecliente,
replace(cvlqhistorico,'.',',')as valor,TO_CHAR(cemisaidas, 'DD/MM/YYYY') 
as dia,replace(csaihisotorico,'.',',') as qtd, replace(n_ahi_qtde_devolvido,'.',',') as dev,cvensaidas from ahistorico 
inner join asaidas on cisahistorico = cidesaidas 
inner join aprodutos on cprohistorico=ccodproduto
inner join tvendedores on cvensaidas = ccodvendedor
inner join aclientes on cclisaidas = ccodigo
where cprohistorico = $cod and i_asa_codigo_tna = 1 
order by cemisaidas desc";
$exsql=pg_query($conc,$sql);
while($row = pg_fetch_assoc($exsql)){
	$cod=$row['cprohistorico'];
	$desc=$row['cdesproduto'];
	$emp=$row['cemphistorico'];
	$nfe=$row['cnotsaidas'];
	$valor=$row['valor'];	
	$data=$row['dia'];
	$qtd=$row['qtd'];
	$qtddv=$row['dev'];
	$vend=$row['cvensaidas'];
	$nvend=$row['cnomvendedor'];
	$data=$row['dia'];
	$nome=$row['cnomecliente'];
	if ($emp == 1 or $emp == 2) {
		$loja='Rosane';
	} else if ($emp == 3 or $emp == 4) {
		$loja='Lucélia';
	} else if ($emp == 5 or $emp == 6) {
		$loja='Maynara';	
	} else if ($emp == 7 or $emp == 8) {
		$loja='Adrielli';
	} else if ($emp == 9 or $emp == 10) {
		$loja='Antigo Apolo (Filial ViaBrasil)';
	} else if ($emp == 11 or $emp == 12) {
		$loja='Shop Caçador';
	} else if ($emp == 13 or $emp == 14) {
		$loja='Antigo Videira (Filial ViaBrasil)';
	} else if ($emp == 15 or $emp == 16) {
		$loja='Antigo Martello (Filial ViaBrasil)';
	}
	if ($emp % 2) {		
	} else {
	  $nfe=0;
	
	}	
	if ($qtddv == null) {
		echo "<td>".$cod."</td>\n";
		echo "<td>".$desc."</td>\n";
		echo "<td>".$loja."</td>\n";
		echo "<td>".$valor."</td>\n";
		echo "<td>".$nfe."</td>\n";
		echo "<td>".$data."</td>\n";
		echo "<td>".$vend.'-'.$nvend."</td>\n";
		echo "<td>".$nome."</td>\n";
		echo "</tr>";
		
	} else if ($qtd-$qtddv > 0) {
		echo "<td>".$cod."</td>\n";
		echo "<td>".$desc."</td>\n";
		echo "<td>".$loja."</td>\n";
		echo "<td>".$valor."</td>\n";
		echo "<td>".$nfe."</td>\n";
		echo "<td>".$data."</td>\n";
		echo "<td>".$vend.'-'.$nvend."</td>\n";
		echo "<td>".$nome."</td>\n";
		echo "</tr>";
	} else {
		echo "<td><font color=\"red\">".$cod."</font></td>\n";
		echo "<td><font color=\"red\">".$desc."</font></td>\n";
		echo "<td><font color=\"red\">".$loja."</font></td>\n";
		echo "<td><font color=\"red\">".$valor."</font></td>\n";
		echo "<td><font color=\"red\">".$nfe."</font></td>\n";
		echo "<td><font color=\"red\">".$data."</font></td>\n";
		echo "<td><font color=\"red\">".$vend.'-'.$nvend."</font></td>\n";
		echo "<td><font color=\"red\">".$nome."</font></td>\n";
		echo "</tr>";
	}
}
$exsql=pg_query($conv,$sql);
while($row = pg_fetch_assoc($exsql)){
	$cod=$row['cprohistorico'];
	$desc=$row['cdesproduto'];
	$emp=$row['cemphistorico'];
	$nfe=$row['cnotsaidas'];
	$valor=$row['valor'];	
	$data=$row['dia'];
	$qtd=$row['qtd'];
	$qtddv=$row['dev'];
	$vend=$row['cvensaidas'];
	$nvend=$row['cnomvendedor'];
	$nome=$row['cnomecliente'];
	if ($emp == 13 or $emp == 14) {
		$loja='Nadia';
	} else if ($emp == 15 or $emp == 16) {
		$loja='Martello';
	} else if ($emp == 17 or $emp == 18) {
		$loja='Shop Masp Videira';	
	}
	if ($emp % 2) {		
	} else {
	  $nfe=0;	
	}	
if ($qtddv == null) {
		echo "<td>".$cod."</td>\n";
		echo "<td>".$desc."</td>\n";
		echo "<td>".$loja."</td>\n";
		echo "<td>".$valor."</td>\n";
		echo "<td>".$nfe."</td>\n";
		echo "<td>".$data."</td>\n";
		echo "<td>".$vend.'-'.$nvend."</td>\n";
		echo "<td>".$nome."</td>\n";
		echo "</tr>";
		
	} else if ($qtd-$qtddv > 0) {
		echo "<td>".$cod."</td>\n";
		echo "<td>".$desc."</td>\n";
		echo "<td>".$loja."</td>\n";
		echo "<td>".$valor."</td>\n";
		echo "<td>".$nfe."</td>\n";
		echo "<td>".$data."</td>\n";
		echo "<td>".$vend.'-'.$nvend."</td>\n";
		echo "<td>".$nome."</td>\n";
		echo "</tr>";
	} else {
		echo "<td><font color=\"red\">".$cod."</font></td>\n";
		echo "<td><font color=\"red\">".$desc."</font></td>\n";
		echo "<td><font color=\"red\">".$loja."</font></td>\n";
		echo "<td><font color=\"red\">".$valor."</font></td>\n";
		echo "<td><font color=\"red\">".$nfe."</font></td>\n";
		echo "<td><font color=\"red\">".$data."</font></td>\n";
		echo "<td><font color=\"red\">".$vend.'-'.$nvend."</font></td>\n";
		echo "<td><font color=\"red\">".$nome."</font></td>\n";
		echo "</tr>";
	}
}
$exsql=pg_query($conj,$sql);
while($row = pg_fetch_assoc($exsql)){
	$cod=$row['cprohistorico'];
	$desc=$row['cdesproduto'];
	$emp=$row['cemphistorico'];
	$nfe=$row['cnotsaidas'];
	$valor=$row['valor'];	
	$data=$row['dia'];
	$qtd=$row['qtd'];
	$qtddv=$row['dev'];
	$vend=$row['cvensaidas'];
	$nvend=$row['cnomvendedor'];
	$nome=$row['cnomecliente'];
	if ($emp == 1 or $emp == 2) {
		$loja='Eliane';
	} else if ($emp == 3 or $emp == 4) {
		$loja='Rosani Apolo';
	} 
	if ($emp % 2) {		
	} else {
	  $nfe=0;	
	}	
if ($qtddv == null) {
		echo "<td>".$cod."</td>\n";
		echo "<td>".$desc."</td>\n";
		echo "<td>".$loja."</td>\n";
		echo "<td>".$valor."</td>\n";
		echo "<td>".$nfe."</td>\n";
		echo "<td>".$data."</td>\n";
		echo "<td>".$vend.'-'.$nvend."</td>\n";
		echo "<td>".$nome."</td>\n";
		echo "</tr>";
		
	} else if ($qtd-$qtddv > 0) {
		echo "<td>".$cod."</td>\n";
		echo "<td>".$desc."</td>\n";
		echo "<td>".$loja."</td>\n";
		echo "<td>".$valor."</td>\n";
		echo "<td>".$nfe."</td>\n";
		echo "<td>".$data."</td>\n";
		echo "<td>".$vend.'-'.$nvend."</td>\n";
		echo "<td>".$nome."</td>\n";
		echo "</tr>";
	} else {
		echo "<td><font color=\"red\">".$cod."</font></td>\n";
		echo "<td><font color=\"red\">".$desc."</font></td>\n";
		echo "<td><font color=\"red\">".$loja."</font></td>\n";
		echo "<td><font color=\"red\">".$valor."</font></td>\n";
		echo "<td><font color=\"red\">".$nfe."</font></td>\n";
		echo "<td><font color=\"red\">".$data."</font></td>\n";
		echo "<td><font color=\"red\">".$vend.'-'.$nvend."</font></td>\n";
		echo "<td><font color=\"red\">".$nome."</font></td>\n";
		echo "</tr>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<center>
<link rel="stylesheet" href="css/style.css"></link>
<form name = "form1" method= "post" action= "Nfe.html">
<input class="btn btn-red" type="submit" value="VOLTAR"/>
<br><br>
</form>
</center>
</head>
</html>
