<?php header('Content-Type: text/html; charset=ISO-8859-1',true);?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css"></link>
<center><img src="img/fundo1.jpg"alt="1" heigth ="100px" width="500px" ></center>
<center>
<table width="1180" cellspacing="1" cellpadding="3" border="0" bgcolor="#8EF787">
<tr>
<td><font color="Black" face="arial, verdana, helvetica">
<?php
if(!@($conexaoc=pg_connect ("host=192.168.16.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Caçador  </font></b></p>";
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
if(!@($conexaov=pg_connect ("host=192.168.16.190 dbname=troll_videira port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Caçador  </font></b></p>";
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
session_start();

$data = $_SESSION['data']; 
$loja=  $_SESSION['loja'];

echo $loja;
exit;

if ($loja < 13) {   


foreach($_POST as $nome_campo => $valor) {    
   $comando = $nome_campo . '-'. $valor ."<br>";
   if ($valor== '') {
       echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>Vendedor: $nome_campo sem uma quantidade Válida</font></b></p>";
       ?>
    <!DOCTYPE html>
    <html>
    <head>
    <center><form name = "form1" method= "post" action= "Controle.php"></center>
	<center><input class="btn btn-green"  type="submit"  value="Voltar"></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit; 
   }
   $com ="select ccodvendedor,cnomvendedor,(COUNT(asaidas)) as vendas from tvendedores iner join asaidas on ccodvendedor = cvensaidas join tnaturezaoperacao on i_asa_codigo_tna =  i_tna_codigo_operacao
where cemisaidas = '$data' and caviaprsaidas ='V' and ccodvendedor= $nome_campo and ctranatureza ='SIM' and i_tna_valida_comissao ='0' group by ccodvendedor  order by ccodvendedor";
   $excom=pg_query($conexaoc,$com);
   $rscomando=pg_fetch_array($excom);
   $qtd=$rscomando['vendas'];
   $codv=$rscomando['ccodvendedor'];
   $nom=$rscomando['cnomvendedor'];
   if ($valor <> $qtd){
    $com="select ccodvendedor,cnomvendedor,ctotsaidas from tvendedores iner join asaidas on ccodvendedor = cvensaidas join tnaturezaoperacao on i_asa_codigo_tna =  i_tna_codigo_operacao
where cemisaidas = '$data' and caviaprsaidas ='V'  and ccodvendedor= $nome_campo and ctranatureza ='SIM' and i_tna_valida_comissao ='0'  order by ctotsaidas";
    $excom=pg_query($conexaoc,$com);
    echo "<p style=background:#000000; align=center <br/><b><font size=3 color=#7CFC00>**Vendedor:$codv-$nom**</font></b></p>";
    echo "<p style=background:#000000; align=center <br/><b><font size=3 color=#7CFC00>**Lista de Vendas Você digitou: $valor porem tem: $qtd **</font></b></p>";
    echo "<table border='2' width='100%' bgcolor=#E3F6CE >";
    echo "<tr><td>Código</td>"."<td>Nome Vendedor</td>"."<td>Venda</td>"."</tr>";
    while ($row = pg_fetch_assoc ( $excom)) {
        echo "<td>".$row['ccodvendedor']."</td>\n";
        echo "<td>".$row['cnomvendedor']."</td>\n";
        echo "<td>".$row['ctotsaidas']."</td>\n";
        echo "</tr>\n";        
        
    }    
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <br>
    <center><form name = "form1" method= "post" action= "Controle.php"></center>
	<center><input class="btn btn-green"  type="submit"  value="Voltar"></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit;
   }   
}
echo "<p style=background:#D3D3D3; align=center <br/><b><font size=5 color=#0404B4>Conferência Efetuada com Sucesso</font></b></p>";
pg_query($conexaoc,"INSERT INTO controlevendas(id, data, loja) VALUES (nextval('seq_controlevenda'),'$data',$loja);");
}
if ($loja >= 13) {
    
    
    foreach($_POST as $nome_campo => $valor) {
        $comando = $nome_campo . '-'. $valor ."<br>";
        if ($valor== '') {
            echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>Vendedor: $nome_campo sem uma quantidade Válida</font></b></p>";
            ?>
    <!DOCTYPE html>
    <html>
    <head>
    <center><form name = "form1" method= "post" action= "Controle.php"></center>
	<center><input class="btn btn-green"  type="submit"  value="Voltar"></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit; 
   }
   $com ="select ccodvendedor,cnomvendedor,(COUNT(asaidas)) as vendas from tvendedores iner join asaidas on ccodvendedor = cvensaidas join tnaturezaoperacao on i_asa_codigo_tna =  i_tna_codigo_operacao
where cemisaidas = '$data' and caviaprsaidas ='V' and ccodvendedor= $nome_campo and ctranatureza ='SIM' and i_tna_valida_comissao ='0' group by ccodvendedor  order by ccodvendedor";
   $excom=pg_query($conexaov,$com);
   $rscomando=pg_fetch_array($excom);
   $qtd=$rscomando['vendas'];
   $codv=$rscomando['ccodvendedor'];
   $nom=$rscomando['cnomvendedor'];
   if ($valor <> $qtd){
    $com="select ccodvendedor,cnomvendedor,ctotsaidas from tvendedores iner join asaidas on ccodvendedor = cvensaidas join tnaturezaoperacao on i_asa_codigo_tna =  i_tna_codigo_operacao
where cemisaidas = '$data' and caviaprsaidas ='V'  and ccodvendedor= $nome_campo and ctranatureza ='SIM' and i_tna_valida_comissao ='0'  order by ctotsaidas";
    $excom=pg_query($conexaov,$com);
    echo "<p style=background:#000000; align=center <br/><b><font size=3 color=#7CFC00>**Vendedor:$codv-$nom**</font></b></p>";
    echo "<p style=background:#000000; align=center <br/><b><font size=3 color=#7CFC00>**Lista de Vendas Você digitou: $valor porem tem: $qtd **</font></b></p>";
    echo "<table border='2' width='100%' bgcolor=#E3F6CE >";
    echo "<tr><td>Código</td>"."<td>Nome Vendedor</td>"."<td>Venda</td>"."</tr>";
    while ($row = pg_fetch_assoc ( $excom)) {
        echo "<td>".$row['ccodvendedor']."</td>\n";
        echo "<td>".$row['cnomvendedor']."</td>\n";
        echo "<td>".$row['ctotsaidas']."</td>\n";
        echo "</tr>\n";        
        
    }    
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <br>
    <center><form name = "form1" method= "post" action= "Controle.php"></center>
	<center><input class="btn btn-green"  type="submit"  value="Voltar"></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit;
   }   
}
echo "<p style=background:#D3D3D3; align=center <br/><b><font size=5 color=#0404B4>Conferência Efetuada com Sucesso</font></b></p>";
pg_query($conexaoc,"INSERT INTO controlevendas(id, data, loja) VALUES (nextval('seq_controlevenda'),'$data',$loja);");
}
?>
<br><br>
<center><img src=img/okk.jpg alt="400" heigth ="400px" width="300px" ></center>
<center><form name = "form1" method= "post" action= "Controle.php"></center>
<center><input class="btn btn-green"  type="submit"  value="Voltar"></center>
</center>
</form>
</font>
</td>
</tr>
</head>
</html>
