<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
//error_reporting(0);
date_default_timezone_set('America/Sao_Paulo');
$time=date('H:i:s');
$dia= date('d-m-Y');
$diaing=date('Y-m-d');
set_time_limit(0);
$volta="<script>window.location='http://192.168.13.2/Desenvolver/site.html'</script>";
if(!@($conc=pg_connect ("host=192.168.16.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Caçador Data:$dia  Hora:$time </font></b></p>";
    echo "<p style=background:#000000; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista Favor avisar o Adriano</font></b></p>";
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <center><img src="img/Silvioerro.png"alt="500" heigth ="300px" width="300px" ></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit; 
}
if(!@($conv=pg_connect ("host=192.168.16.190 dbname=troll_videira port=5430 user=postgres password=ky$14gr@"))){
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
if(!@($conl=pg_connect ("host=192.168.16.190 dbname=troll_lages port=5430 user=postgres password=ky$14gr@"))){
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
$datain=$_POST['datain'];
if ($datain == null ) {
    $datain = $diaing;
}
$datafi=$_POST['datafn'];
if ($datafi == null ) {
    $datafi = $diaing;
}
echo "<table border='2' width='100%' bgcolor=#F5F6CE >";
echo "<tr><td><font size=3><strong>Código</strong></font></td>"."<td><font color=\"black\" size=3><strong>Referência</strong></font></td>".
    "<td><font color=\"black\" size=3><strong>Desrição</strong></font></td>"."<td><font color=\"black\" size=3><strong>Complemento</strong></font></td>"
        ."<td><font color=\"red\" size=3><strong>Sáidas</strong></font></td>"."<td><font color=\"blue\" size=3><strong>Entradas</strong></font></td>"."<td><font color=\"black\" size=3><strong>Shop Cdr</strong></font></td>".
    "<td><font color=\"black\" size=3><strong>Shop Videira</strong></font></td>"."<td><font color=\"black\" size=3><strong>Shop Lages</strong></font></td>"."</tr>";
    $sql="select ccodproduto,crefporduto,cdesproduto,ccplproduto,s_apr_descricao_grades, (sum(csaihisotorico)) as saidas , (sum(centhistorico)) as entradas  from ahistorico innner join aprodutos on cprohistorico = ccodproduto where 
    cemihistorico >= '$datain' and cemihistorico <= '$datafi' and cmarproduto in (423,993,1927) and cgruporduto in (141,140,2,100,154,579,212,155) group by ccodproduto order by crefporduto";
$exsql=pg_query($conc,$sql);
while ($row = pg_fetch_assoc($exsql)) {
    $codigo=$row['ccodproduto'];
    echo "<td>".$codigo."</td>\n";
    $ref = $row['crefporduto'];
    echo "<td>".$ref."</td>\n";
    $descrição=$row['cdesproduto'];    
    echo "<td>".$descrição."</td>\n";
    $grade=$row['s_apr_descricao_grades'];
    if ($grade <> null) {
        $complemento=$row['ccplproduto'];
        echo "<td>".'Nº'.$grade.' '.$complemento."</td>\n";
    } else {    
        $complemento=$row['ccplproduto'];
        echo "<td>".$complemento."</td>\n";
    }    
    $saidas=$row['saidas'];
    echo "<td><font color=\"red\">".number_format($saidas,2,",",".")."</font></td>\n";
    $entradas=$row['entradas'];
    echo "<td><font color=\"blue\">".number_format($entradas,2,",",".")."</font></td>\n";
    $com="select (sum(centhistorico)-sum(csaihisotorico)) as qtd from ahistorico  where cprohistorico = $codigo  and cemphistorico in (3,4)";
    $excom=pg_query($conc,$com);
    $rscom=pg_fetch_array($excom);
    $qtd=$rscom['qtd'];
    if ($qtd >= 0) {
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
    } else {
        echo "<td>".'0,00'."</td>\n";
    }
    $com="select (sum(centhistorico)-sum(csaihisotorico)) as qtd from ahistorico  where cprohistorico = $codigo  and cemphistorico in (13,14)";
    $excom=pg_query($conv,$com);
    $rscom=pg_fetch_array($excom);
    $qtd=$rscom['qtd'];
    if ($qtd >= 0) {
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
    } else {
        echo "<td>".'0,00'."</td>\n";
    }
    $com="select (sum(centhistorico)-sum(csaihisotorico)) as qtd from ahistorico  where cprohistorico = $codigo  and cemphistorico in (1,2)";
    $excom=pg_query($conl,$com);
    $rscom=pg_fetch_array($excom);
    $qtd=$rscom['qtd'];
    if ($qtd >= 0) {
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
    } else {
        echo "<td>".'0,00'."</td>\n";
    }    
    echo "</tr>\n";
}
echo "</table>";
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css"></link>
<center><form name = "form1" method= "post" action= "site.html"></center>
<br><br>
<center>
<a title='Imprimir' href='javascript:window.print()'><img src="img/impressora.jpg" alt="10" heigth ="40px" width="40px"  border="0" /></a>
</center>
<br><br>
<center><input class="btn btn-red"  type="submit" name="inativar" value="Voltar"></center>
<br><br>
</form>
</head>
</html>