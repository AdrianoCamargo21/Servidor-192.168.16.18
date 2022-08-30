<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
error_reporting(0);
$volta="<script>window.location='http://192.168.13.2/Replica/Condicional.html'</script>";
date_default_timezone_set('America/Sao_Paulo');
$time=date('H:i:s');
$dia=date('Y-m-d');
$data=date('d-m-Y');
set_time_limit(0);
$base=$_POST['base'];
if ($base == null){
    echo "<script>alert('Base Inválida');</script>";echo $volta;
}
$dtini=$_POST['datai'];
if ($dtini== null) {
    $dtini=$dia;
}
$dtfin=$_POST['dataf'];
if ($dtfin== null) {
    $dtfin=$dia;
}
$dtinia = implode("/",array_reverse(explode("-",$dtini)));
$dtfina = implode("/",array_reverse(explode("-",$dtfin)));
$emp=$_POST['emp'];
if ($emp == 0 or $emp == null) {
    $filtro = null;
    $tipo='Todas';
} else {
    $filtro = ' and cempresasaidas='.$emp;
}
if ($base=='C') {
    if(!@($con=pg_connect ("host=192.168.16.2 dbname=troll port=5430 user=postgres password=ky$14gr@"))){
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Caçador Data:$data  Hora:$time </font></b></p>";
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
    $oper='68';
    if ($emp == 1) {
        $tipo='Rosane';
    } elseif ($emp == 3){
        $tipo='Lucélia';
    } elseif ($emp == 5){
        $tipo='Vila';
    } elseif ($emp == 7){
        $tipo='Adrielli';
    } elseif ($emp >7){
        echo "<script>alert('Empresa Inválida');</script>";echo $volta;
    }
}
if ($base=='V') {
    if(!@($con=pg_connect ("host=192.168.9.10 dbname=troll port=5430 user=postgres password=ky$14gr@"))){
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Videira Data:$data  Hora:$time </font></b></p>";
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
    $oper='68';
    if ($emp == 13) {
        $tipo='Nadia';
    } elseif ($emp == 15){
        $tipo='Martello';
    } elseif ($emp == 17){
        $tipo='Shop Videira';
    } 
}
if ($base=='J') {
    if(!@($con=pg_connect ("host=192.168.16.77 dbname=troll port=5430 user=postgres password=ky$14gr@"))){
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Joinville Data:$data  Hora:$time </font></b></p>";
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
    $oper='15';
    if ($emp == 1) {
        $tipo='Josiane';
    } elseif ($emp == 3){
        $tipo='Ronani';
    } 
}
if ($base=='L') {    
    if(!@($con=pg_connect ("host=192.168.11.2 dbname=troll port=5430 user=postgres password=ky$14gr@"))){
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Lages Data:$data  Hora:$time </font></b></p>";
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
    $oper='24';
    if ($emp == 1) {
        $tipo='César';
    } elseif ($emp == 3){
        $tipo='Atacadão';
    } 
}
$sql="select cnotsaidas,cemisaidas,cclisaidas,cnomecliente,ctotsaidas,i_ahi_codigo_ven,cnomvendedor from asaidas inner join aclientes on cclisaidas = ccodigo join ahistorico on 
     cisahistorico = cidesaidas join tvendedores on ccodvendedor = i_ahi_codigo_ven where i_asa_codigo_tna = $oper and cemisaidas >= '$dtini' 
     and cemisaidas <= '$dtfin' and n_ahi_qtde_devolvido < csaihisotorico $filtro  group by cnotsaidas,cclisaidas,cnomecliente,i_ahi_codigo_ven,cnomvendedor,ctotsaidas,cemisaidas 
     order by cemisaidas ";
$exsql= pg_query($con,$sql);
$rssql= pg_fetch_array($exsql);
$nfe=$rssql['cnotsaidas'];
if ($nfe == null) {
    echo "<script>alert('Nenhum condicional em aberto de: $dtinia a: $dtfina da empresa: $tipo' );</script>";echo $volta;
}
echo"<html><center><h1><font face='Arial' color='black'>Condicionais Em Aberto De:$dtinia Até:$dtfina </font></h1></center></html>";
echo"<html><center><h1><font face='Arial' color='black'>Loja:$tipo </font></h1></center></html>";
echo "<table border='2' width='100%' bgcolor=#FFFFF0 >";
echo "<tr><td><font color=\"black\" size=5><strong>Nfe</strong></font></td>"."<td><font color=\"black\" size=5><strong>Data</strong></font></td>".
"<td><font color=\"black\" size=5><strong>Cliente</strong></font></td>"."<td><font color=\"black\" size=5><strong>Valor R$</strong></font></td>".
"<td><font color=\"black\" size=5><strong>Vendedor</strong></font></td>"."</tr>";
$exsql=pg_query($con,$sql);
while ($row = pg_fetch_assoc($exsql)) {
    $nfe=$row['cnotsaidas'];
    $emissao=$row['cemisaidas'];
    $codcliente=$row['cclisaidas'];
    $nomecliente=$row['cnomecliente'];
    $valornf=$row['ctotsaidas'];
    $codvend=$row['i_ahi_codigo_ven'];
    $nomevnd=$row['cnomvendedor'];
    echo "<td>".$nfe."</td>\n";
    echo "<td>".implode("/",array_reverse(explode("-",$emissao)))."</td>\n";
    echo "<td>".$codcliente.'-'.$nomecliente."</td>\n";
    echo "<td>".'R$ '.number_format($valornf,2,",",".")."</td>\n";
    echo "<td>".$codvend.'-'.$nomevnd."</td>\n";
    echo "</tr>\n";
    
}
echo "</table>";

?>
<!DOCTYPE html>
<html>
<head>
<center>
<title>Condicional.bay</title>
<link rel="stylesheet" href="css/style.css"></link>
<br><br>
<a title='Imprimir' href='javascript:window.print()'><img src="img/impressora.jpg" alt="60" heigth ="60px" width="60px"  border="0" /></a>
<br><br>
<center><form name = "form1" method= "post" action= "Condicional.html">
<input class="btn btn-red" type="submit" value="Voltar"/>

<br><br>
</center>
</head>
</html>
