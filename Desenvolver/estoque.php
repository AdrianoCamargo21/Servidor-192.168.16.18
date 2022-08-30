<!DOCTYPE html>
<html>
<head>
<title>Estoque em Determidana Data</title>
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







<marquee behavior="slide"><h1> <div name="relogio" id="relogio"></div></h1> </marquee>


<BODY>
</BODY>
</HTML>
<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
date_default_timezone_set('America/Sao_Paulo');
$time=date('H:i:s');
$dia= date('d-m-Y');
$base=$_POST['Base'];
if ($base == 'J') {
    if(!@($conexao=pg_connect ("host=192.168.10.190 dbname=troll_joinville port=5430 user=postgres password=ky$14gr@"))){
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
    
if ($base=='C') {
    if(!@($conexao=pg_connect ("host=192.168.10.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@"))){
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
if ($base=='V') {
    if(!@($conexao=pg_connect ("host=192.168.10.190 dbname=troll_videira port=5430 user=postgres password=ky$14gr@"))){
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
}
if ($base=='L') {
    if(!@($conexao=pg_connect ("host=192.168.10.190 dbname=troll_lages port=5430 user=postgres password=ky$14gr@"))){
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
$data=$_POST['data'];
if ($data=='') {
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Data Inválida </font></b></p>";
    ?>
    <!DOCTYPE html>
	<html>
	<head>    
	<link rel="stylesheet" href="css/style.css"></link>
	<center><img src=img/X.png alt="400" heigth ="400px" width="300px" ></center>
	<center><form name = "form1" method= "post" action= "estoque.html"></center>
	<center><input class="btn btn-red"  type="submit" name="inativar" value="Voltar"></center>
	</form>
	</head>
	</html>
	<?php
    exit;
}
$busca=$data=date('d-m-Y');
echo "<p style=background:#00FF00; align=center <br/><b><font size=5 color=#0000FF>Busca em: '$dia' , '$time' Com Base na Data: $busca  </font></b></p>";
$comando="select ccodlinha,cdeslinha,(sum(centhistorico-csaihisotorico))as qtd,
(sum((centhistorico-csaihisotorico)*cpcuproduto))as custo  
from tlinha 
inner join aprodutos on clinproduto=ccodlinha  
inner join ahistorico on ccodproduto =cprohistorico 
where cemihistorico < '$data' 
group by  ccodlinha
having (sum(centhistorico-csaihisotorico)) <> 0
order by cdeslinha";
set_time_limit(120);
$excomando=pg_query($conexao,$comando);
echo "<table border='2' width='100%' bgcolor=#FFFAFA>";
echo "<tr><td>Cód. Linha</td>"."<td>Descrião Da Linha</td>"."<td>Qtd Pares</td>"."<td>Total De Custo</td>"."</tr>";

while ($row = pg_fetch_assoc($excomando)){
    $codlinha=$row['ccodlinha'];
    $deslinha=$row['cdeslinha'];
    $qtd=$row['qtd'];
    $qtd=number_format( $qtd,2,",",".");
    $custo=$row['custo'];
    $custo=number_format( $custo,2,",",".");
    echo "<td>".$codlinha."</td>\n";
    echo "<td>".$deslinha."</td>\n";
    if ($qtd < 0) {
        echo "<td><font color=\"red\">".$qtd."</font></td>\n";
    } else {
        echo "<td>".$qtd."</td>\n";
    }
    if ($custo < 0) {
        echo "<td><font color=\"red\">".$custo."</font></td>\n";
    }else {
        echo "<td>".$custo."</td>\n";
    }
    echo "</tr>\n";
    
}
$com="select (sum(centhistorico-csaihisotorico))as qtd,
(sum((centhistorico-csaihisotorico)*cpcuproduto))as custo  
from tlinha 
inner join aprodutos on clinproduto=ccodlinha  
inner join ahistorico on ccodproduto =cprohistorico 
where cemihistorico < '$data' 
having (sum(centhistorico-csaihisotorico)) <> 0";
set_time_limit(120);
$excom=pg_query($conexao,$com);
$resulcom= pg_fetch_array($excom);
$custo=$resulcom['custo'];
$custo=number_format( $custo,2,",",".");
$qtd=$resulcom['qtd'];
$qtd=number_format( $qtd,2,",",".");
echo "<table border='' width='100%' bgcolor=#FFFAFA>";
echo "<tr><td>Quantidade Total:$qtd </td>"."<td>Custo Total R$ $custo</td>"."</tr>";



exit;

$data=date('Y-m-d', strtotime($dia. '-4 days'));
$cacador="70,71,72,73,74,86,90,94";
$comando=("select cidesaidas,cnotsaidas,csrisaidas,cempresasaidas from asaidas where cemisaidas >= '$data' and s_asa_chave_nfe  is null and csrisaidas in ($cacador)  order by cidesaidas");
$excomando=pg_query($conexaoc,$comando);
$rscomando=pg_fetch_array($excomando);
if (!$excomando){
    pg_close($conexaoc);
    pg_close($conexaov);
    pg_close($conexaol);
    pg_close($conexaoj);
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Erro ao Carregar Notas base Caçador**</font></b></p>";
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit;    
}
$id=$rscomando['cidesaidas'];
$nfe=$rscomando['cnotsaidas'];
$serie=$rscomando['csrisaidas'];
$empre=$rscomando['cempresasaidas'];
if ($id == ''){   
       
} else {
   
    while ($id <> '') {        
        echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>ERRO!!! **Nota Sem Chave de acesso
Em Caçador   Empresa:'$empre'  Serie:'$serie' Nfe: '$nfe' **</font></b></p>";
        $comando=("select cidesaidas,cnotsaidas,csrisaidas,cempresasaidas from asaidas where cemisaidas >= '$data' 
and s_asa_chave_nfe  is null and csrisaidas in ($cacador) and cidesaidas >  $id  order by cidesaidas");
        $excomando=pg_query($conexaoc,$comando);
        $rscomando=pg_fetch_array($excomando);
        $id=$rscomando['cidesaidas'];
        $nfe=$rscomando['cnotsaidas'];
        $serie=$rscomando['csrisaidas'];
        $empre=$rscomando['cempresasaidas'];
    }
}
$videira="3,99";
$comando=("select cidesaidas,cnotsaidas,csrisaidas,cempresasaidas from asaidas where cemisaidas >= '$data' and s_asa_chave_nfe  is null and csrisaidas in ($videira)  order by cidesaidas");
$excomando=pg_query($conexaov,$comando);
$rscomando=pg_fetch_array($excomando);
if (!$excomando){
    pg_close($conexaoc);
    pg_close($conexaov);
    pg_close($conexaol);
    pg_close($conexaoj);
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Erro Carregar Notas base Videira**</font></b></p>";
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit;    
}
$id=$rscomando['cidesaidas'];
$nfe=$rscomando['cnotsaidas'];
$serie=$rscomando['csrisaidas'];
$empre=$rscomando['cempresasaidas'];
if ($id == ''){
    
} else {
   
    while ($id <> '') {
        echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>ERRO!!! **Nota Sem Chave de acesso
Em Videira   Empresa:'$empre'  Serie:'$serie' Nfe: '$nfe' **</font></b></p>";
        $comando=("select cidesaidas,cnotsaidas,csrisaidas,cempresasaidas from asaidas where cemisaidas >= '$data' 
and s_asa_chave_nfe  is null and csrisaidas in ($videira) and cidesaidas >  $id  order by cidesaidas");
        $excomando=pg_query($conexaov,$comando);
        $rscomando=pg_fetch_array($excomando);
        $id=$rscomando['cidesaidas'];
        $nfe=$rscomando['cnotsaidas'];
        $serie=$rscomando['csrisaidas'];
        $empre=$rscomando['cempresasaidas'];
    }
}
$lages="4";
$comando=("select cidesaidas,cnotsaidas,csrisaidas,cempresasaidas from asaidas where cemisaidas >= '$data' and s_asa_chave_nfe  is null and csrisaidas in ($lages)  order by cidesaidas");
$excomando=pg_query($conexaol,$comando);
$rscomando=pg_fetch_array($excomando);
if (!$excomando){
    pg_close($conexaoc);
    pg_close($conexaov);
    pg_close($conexaol);
    pg_close($conexaoj);
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Erro Carregar Notas base Lages**</font></b></p>";
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit;    
}
$id=$rscomando['cidesaidas'];
$nfe=$rscomando['cnotsaidas'];
$serie=$rscomando['csrisaidas'];
$empre=$rscomando['cempresasaidas'];
if ($id == ''){
    
} else {
   
    while ($id <> '') {        
        echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>ERRO!!! **Nota Sem Chave de acesso
Em Lages  Empresa:'$empre'  Serie:'$serie' Nfe: '$nfe' **</font></b></p>";
        $comando=("select cidesaidas,cnotsaidas,csrisaidas,cempresasaidas from asaidas where cemisaidas >= '$data' 
and s_asa_chave_nfe  is null and csrisaidas in ($lages) and cidesaidas >  $id order by cidesaidas");
        $excomando=pg_query($conexaol,$comando);
        $rscomando=pg_fetch_array($excomando);
        $id=$rscomando['cidesaidas'];
        $nfe=$rscomando['cnotsaidas'];
        $serie=$rscomando['csrisaidas'];
        $empre=$rscomando['cempresasaidas'];
    }
}
$joinville="1";
$comando=("select cidesaidas,cnotsaidas,csrisaidas,cempresasaidas from asaidas where cemisaidas >= '$data' and s_asa_chave_nfe  is null and csrisaidas in ($joinville)  order by cidesaidas");
$excomando=pg_query($conexaoj,$comando);
$rscomando=pg_fetch_array($excomando);
if (!$excomando){
    pg_close($conexaoc);
    pg_close($conexaov);
    pg_close($conexaol);
    pg_close($conexaoj);
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Erro Carregar Notas base Joinville**</font></b></p>";
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit;    
}
$id=$rscomando['cidesaidas'];
$nfe=$rscomando['cnotsaidas'];
$serie=$rscomando['csrisaidas'];
$empre=$rscomando['cempresasaidas'];
if ($id == ''){    
} else {
   
    while ($id <> '') {
        echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>ERRO!!! **Nota Sem Chave de acesso
Em Joinville  Empresa:'$empre'  Serie:'$serie' Nfe: '$nfe' **</font></b></p>";
        $comando=("select cidesaidas,cnotsaidas,csrisaidas,cempresasaidas from asaidas where cemisaidas >= '$data' 
and s_asa_chave_nfe  is null and csrisaidas in ($joinville) and cidesaidas >  $id  order by cidesaidas");
        $excomando=pg_query($conexaoj,$comando);
        $rscomando=pg_fetch_array($excomando);
        $id=$rscomando['cidesaidas'];
        $nfe=$rscomando['cnotsaidas'];
        $serie=$rscomando['csrisaidas'];
        $empre=$rscomando['cempresasaidas'];
    }
}
$cacador="8,10,68,70";
$comando=("select cnotsaidas,cemisaidas,cempresasaidas from asaidas   where cemisaidas >= '$data' and i_asa_codigo_tna in ($cacador) and 
caviaprsaidas <> 'V' order by cnotsaidas ");
$excomando=pg_query($conexaoc,$comando);
$rscomando=pg_fetch_array($excomando);
if (!$excomando){
    pg_close($conexaoc);
    pg_close($conexaov);
    pg_close($conexaol);
    pg_close($conexaoj);
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Erro Carregar Notas Sistema de Caçador**</font></b></p>";
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit;    
}
$nf=$rscomando['cnotsaidas'];
$emissao=$rscomando['cemisaidas'];
$emp=$rscomando['cempresasaidas'];
if ($nf== '') {
    
} else {
   
    while($nf <> ''){
        echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>ERRO!!! **Nota lançada aprazo
Em Caçador Empresa:'$emp'  Emisão:'$emissao' Nfe: '$nf' **</font></b></p>";
        $comando=("select cnotsaidas,cemisaidas,cempresasaidas from asaidas   where cemisaidas >= '$data' and i_asa_codigo_tna in ($cacador) and
caviaprsaidas <> 'V' and cnotsaidas > $nf  order by cnotsaidas ");
        $excomando=pg_query($conexaoc,$comando);
        $rscomando=pg_fetch_array($excomando);
        $nf=$rscomando['cnotsaidas'];
        $emissao=$rscomando['cemisaidas'];
        $emp=$rscomando['cempresasaidas'];
    }
}
$videira="8,10,68,69";
$comando=("select cnotsaidas,cemisaidas,cempresasaidas from asaidas   where cemisaidas >= '$data' and i_asa_codigo_tna in ($videira) and
caviaprsaidas <> 'V' order by cnotsaidas ");
$excomando=pg_query($conexaov,$comando);
$rscomando=pg_fetch_array($excomando);
if (!$excomando){
    pg_close($conexaoc);
    pg_close($conexaov);
    pg_close($conexaol);
    pg_close($conexaoj);
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Erro Carregar Notas Sistema de Videira**</font></b></p>";
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit;    
}
$nf=$rscomando['cnotsaidas'];
$emissao=$rscomando['cemisaidas'];
$emp=$rscomando['cempresasaidas'];
if ($nf== '') {
    
} else {
   
    while($nf <> ''){
        echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>ERRO!!! **Nota lançada aprazo
Em Videira Empresa:'$emp'  Emisão:'$emissao' Nfe: '$nf' **</font></b></p>";
        $comando=("select cnotsaidas,cemisaidas,cempresasaidas from asaidas   where cemisaidas >= '$data' and i_asa_codigo_tna in ($videira) and
caviaprsaidas <> 'V' and cnotsaidas > $nf  order by cnotsaidas ");
        $excomando=pg_query($conexaov,$comando);
        $rscomando=pg_fetch_array($excomando);
        $nf=$rscomando['cnotsaidas'];
        $emissao=$rscomando['cemisaidas'];
        $emp=$rscomando['cempresasaidas'];
    }
}
$lages="24,25,10";
$comando=("select cnotsaidas,cemisaidas,cempresasaidas from asaidas where cemisaidas >= '$data' and i_asa_codigo_tna in ($lages) and
caviaprsaidas <> 'V' order by cnotsaidas ");
$excomando=pg_query($conexaol,$comando);
$rscomando=pg_fetch_array($excomando);
if (!$excomando){
    pg_close($conexaoc);
    pg_close($conexaov);
    pg_close($conexaol);
    pg_close($conexaoj);
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Erro Carregar Notas Sistema de Lages**</font></b></p>";
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit;    
}
$nf=$rscomando['cnotsaidas'];
$emissao=$rscomando['cemisaidas'];
$emp=$rscomando['cempresasaidas'];
if ($nf== '') {
    
} else {
   
    while($nf <> ''){
        echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>ERRO!!! **Nota lançada aprazo
Em Lages Empresa:'$emp'  Emisão:'$emissao' Nfe: '$nf' **</font></b></p>";
        $comando=("select cnotsaidas,cemisaidas,cempresasaidas from asaidas   where cemisaidas >= '$data' and i_asa_codigo_tna in ($lages) and
caviaprsaidas <> 'V' and cnotsaidas > $nf  order by cnotsaidas ");
        $excomando=pg_query($conexaol,$comando);
        $rscomando=pg_fetch_array($excomando);
        $nf=$rscomando['cnotsaidas'];
        $emissao=$rscomando['cemisaidas'];
        $emp=$rscomando['cempresasaidas'];
    }
}
$joinville="9";
$comando=("select cnotsaidas,cemisaidas,cempresasaidas from asaidas where cemisaidas >= '$data' and i_asa_codigo_tna in ($joinville) and
caviaprsaidas <> 'V' order by cnotsaidas ");
$excomando=pg_query($conexaoj,$comando);
$rscomando=pg_fetch_array($excomando);
if (!$excomando){
    pg_close($conexaoc);
    pg_close($conexaov);
    pg_close($conexaol);
    pg_close($conexaoj);
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Erro Carregar Notas Sistema de Joinville**</font></b></p>";
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit;    
}
$nf=$rscomando['cnotsaidas'];
$emissao=$rscomando['cemisaidas'];
$emp=$rscomando['cempresasaidas'];
if ($nf== '') {
    
} else {
   
    while($nf <> ''){
        echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>ERRO!!! **Nota lançada aprazo
Em Joinville Empresa:'$emp'  Emisão:'$emissao' Nfe: '$nf' **</font></b></p>";
        $comando=("select cnotsaidas,cemisaidas,cempresasaidas from asaidas   where cemisaidas >= '$data' and i_asa_codigo_tna in ($joinville) and
caviaprsaidas <> 'V' and cnotsaidas > $nf  order by cnotsaidas ");
        $excomando=pg_query($conexaoj,$comando);
        $rscomando=pg_fetch_array($excomando);
        $nf=$rscomando['cnotsaidas'];
        $emissao=$rscomando['cemisaidas'];
        $emp=$rscomando['cempresasaidas'];
    }
}
if(!@($conexaolc=pg_connect ("host=192.168.10.30 dbname=troll port=5430 user=postgres password=ky$14gr@"))){
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
if(!@($conexaolv=pg_connect ("host=192.168.10.99 dbname=troll port=5433 user=postgres password=ky$14gr@"))){
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
if(!@($conexaoll=pg_connect ("host=192.168.11.2 dbname=Troll port=5431 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de ..Lages Data:$dia  Hora:$time </font></b></p>";
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
if(!@($conexaolj=pg_connect ("host=192.168.12.3 dbname=troll port=5434 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de ..Joinville Data:$dia  Hora:$time </font></b></p>";
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
if(!@($conexaoc=pg_connect ("host=192.168.10.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@"))){
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
if(!@($conexaov=pg_connect ("host=192.168.10.190 dbname=troll_videira port=5430 user=postgres password=ky$14gr@"))){
    pg_close($conexaoc);
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
$cacador="8";
$comando="select cidesaidas,cnotsaidas,cemisaidas,cempresasaidas from asaidas where cemisaidas >='$data' and i_asa_codigo_tna in ($cacador) order by cidesaidas";
$excomando=pg_query($conexaoc,$comando);
$rscomando=pg_fetch_array($excomando);
if (!$excomando){
    pg_close($conexaoc);
    pg_close($conexaov); 
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Erro Carregar Transferencia Sistema de Caçador**</font></b></p>";
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit;    
}
$id=$rscomando['cidesaidas'];
$nf=$rscomando['cnotsaidas'];
$emi=$rscomando['cemisaidas'];
$emp=$rscomando['cempresasaidas'];
if ($id == '') {
    
}else{    
    while ($id <> '') {        
        $comando="select csidentradas from aentradas where i_aen_ide_saida_trans = '$id'";        
        $excomando=pg_query($conexaoc,$comando);
        $rscomando=pg_fetch_array($excomando);
        $ide=$rscomando['csidentradas'];
        if ($ide== '') {
           
            echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>ERRO!!! **Erro Nota sem Tranferência em Caçador Nfe: '$nf'  Emisão:'$emi' Empresa:'$emp'**</font></b></p>";
        }
        $comando="select cidesaidas,cnotsaidas,cemisaidas,cempresasaidas from asaidas where cemisaidas >='$data' and i_asa_codigo_tna in ($cacador) and cidesaidas > '$id'  order by cidesaidas";
        $excomando=pg_query($conexaoc,$comando);
        $rscomando=pg_fetch_array($excomando);
        $id=$rscomando['cidesaidas'];
        $nf=$rscomando['cnotsaidas'];
        $emi=$rscomando['cemisaidas'];
        $emp=$rscomando['cempresasaidas'];
    }
    
}
$videira="8";
$comando="select cidesaidas,cnotsaidas,cemisaidas,cempresasaidas from asaidas where cemisaidas >='$data' and i_asa_codigo_tna in ($videira) order by cidesaidas";
$excomando=pg_query($conexaov,$comando);
$rscomando=pg_fetch_array($excomando);
if (!$excomando){    
    pg_close($conexaov);
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Erro Carregar Transferencia Sistema de Caçador**</font></b></p>";
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit;    
}
$id=$rscomando['cidesaidas'];
$nf=$rscomando['cnotsaidas'];
$emi=$rscomando['cemisaidas'];
$emp=$rscomando['cempresasaidas'];
if ($id == '') {
    
}else{    
    while ($id <> '') {        
        $comando="select csidentradas from aentradas where i_aen_ide_saida_trans = '$id'";        
        $excomando=pg_query($conexaov,$comando);
        $rscomando=pg_fetch_array($excomando);
        $ide=$rscomando['csidentradas'];
        if ($ide== '') {
           
            echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>ERRO!!! **Erro Nota sem Tranferência em Videira Nfe: '$nf'  Emisão:'$emi' Empresa:'$emp'**</font></b></p>";
        }
        $comando="select cidesaidas,cnotsaidas,cemisaidas,cempresasaidas from asaidas where cemisaidas >='$data' and i_asa_codigo_tna in ($videira) and cidesaidas > '$id'  order by cidesaidas";
        $excomando=pg_query($conexaov,$comando);
        $rscomando=pg_fetch_array($excomando);
        $id=$rscomando['cidesaidas'];
        $nf=$rscomando['cnotsaidas'];
        $emi=$rscomando['cemisaidas'];
        $emp=$rscomando['cempresasaidas'];
    }
    
}
$cacador="8";
$comando="select cidesaidas,cnotsaidas,cemisaidas,cnpj_saidas,cempresasaidas from asaidas where cnpj_saidas < 0 and  cemisaidas >= '$data' and i_asa_codigo_tna in ($cacador) order by cidesaidas  ";
$excomando=pg_query($conexaoc,$comando);
$rscomando=pg_fetch_array($excomando);
$id=$rscomando['cidesaidas'];
$nf=$rscomando['cnotsaidas'];
$emi=$rscomando['cemisaidas'];
$emp=$rscomando['cempresasaidas'];
if ($id=='') {
    
} else {
   
    while ($id <> '') { 
        echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>ERRO!!! **Erro Nota Transfeência Para pessoa Fisica  Caçador Nfe: '$nf'  Emisão:'$emi' Empresa:'$emp'**</font></b></p>";    
        $comando="select cidesaidas,cnotsaidas,cemisaidas,cnpj_saidas,cempresasaidas from asaidas  where cnpj_saidas is null and  cemisaidas >= '$data' and i_asa_codigo_tna in ($cacador) and cidesaidas > $id  order by cidesaidas ";
        $excomando=pg_query($conexaoc,$comando);
        $rscomando=pg_fetch_array($excomando);
        $id=$rscomando['cidesaidas'];
        $nf=$rscomando['cnotsaidas'];
        $emi=$rscomando['cemisaidas'];        
        $emp=$rscomando['cempresasaidas'];
    }
    
}

$videira="8";
$comando="select cidesaidas,cnotsaidas,cemisaidas,cnpj_saidas,cempresasaidas from asaidas where cnpj_saidas < 0 and cemisaidas >= '$data' and i_asa_codigo_tna in ($videira) order by cidesaidas  ";
$excomando=pg_query($conexaov,$comando);
$rscomando=pg_fetch_array($excomando);
$id=$rscomando['cidesaidas'];
$nf=$rscomando['cnotsaidas'];
$emi=$rscomando['cemisaidas'];
$emp=$rscomando['cempresasaidas'];
if ($id=='') {
    
} else {
   
    while ($id <> '') {  
        echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>ERRO!!! **Erro Nota Para pessoa Fisica Videira Nfe: '$nf'  Emisão:'$emi' Empresa:'$emp'**</font></b></p>";
         $comando="select cidesaidas,cnotsaidas,cemisaidas,cnpj_saidas,cempresasaidas from asaidas where cnpj_saidas is null and cemisaidas >= '$data' and i_asa_codigo_tna in ($videira) and cidesaidas > $id  order by cidesaidas ";
        $excomando=pg_query($conexaov,$comando);
        $rscomando=pg_fetch_array($excomando);
        $id=$rscomando['cidesaidas'];
        $nf=$rscomando['cnotsaidas'];
        $emi=$rscomando['cemisaidas'];        
        $emp=$rscomando['cempresasaidas'];
    }
    
}
$cacador="68";
$comando="select cidesaidas,cnotsaidas,cemisaidas,cempresasaidas from asaidas where cpf_saidas < 0 and  cemisaidas >= '$data' and i_asa_codigo_tna in ($cacador) order by cidesaidas  ";
$excomando=pg_query($conexaoc,$comando);
$rscomando=pg_fetch_array($excomando);
$id=$rscomando['cidesaidas'];
$nf=$rscomando['cnotsaidas'];
$emi=$rscomando['cemisaidas'];
$emp=$rscomando['cempresasaidas'];
if ($id=='') {
    
} else {
   
    while ($id <> '') {
        echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>ERRO!!! **Erro Nota Condicional Para pessoa Juridica Caçador Nfe: '$nf'  Emisão:'$emi' Empresa:'$emp'**</font></b></p>";
        $comando="select cidesaidas,cnotsaidas,cemisaidas,cnpj_saidas,cempresasaidas from asaidas  where cnpj_saidas is null and  cemisaidas >= '$data' and i_asa_codigo_tna in ($cacador) and cidesaidas > $id  order by cidesaidas ";
        $excomando=pg_query($conexaoc,$comando);
        $rscomando=pg_fetch_array($excomando);
        $id=$rscomando['cidesaidas'];
        $nf=$rscomando['cnotsaidas'];
        $emi=$rscomando['cemisaidas'];
        $emp=$rscomando['cempresasaidas'];
    }
    
}
$videira="68";
$comando="select cidesaidas,cnotsaidas,cemisaidas,cempresasaidas from asaidas where cpf_saidas < 0 and  cemisaidas >= '$data' and i_asa_codigo_tna in ($videira) order by cidesaidas  ";
$excomando=pg_query($conexaov,$comando);
$rscomando=pg_fetch_array($excomando);
$id=$rscomando['cidesaidas'];
$nf=$rscomando['cnotsaidas'];
$emi=$rscomando['cemisaidas'];
$emp=$rscomando['cempresasaidas'];
if ($id=='') {
    
} else {
   
    while ($id <> '') {
        echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>ERRO!!! **Erro Nota Condicional Para pessoa Juridica Videira Nfe: '$nf'  Emisão:'$emi' Empresa:'$emp'**</font></b></p>";
        $comando="select cidesaidas,cnotsaidas,cemisaidas,cnpj_saidas,cempresasaidas from asaidas  where cnpj_saidas is null and  cemisaidas >= '$data' and i_asa_codigo_tna in ($videira) and cidesaidas > $id  order by cidesaidas ";
        $excomando=pg_query($conexaov,$comando);
        $rscomando=pg_fetch_array($excomando);
        $id=$rscomando['cidesaidas'];
        $nf=$rscomando['cnotsaidas'];
        $emi=$rscomando['cemisaidas'];
        $emp=$rscomando['cempresasaidas'];
    }
    
}
$lages="24";
$comando="select cidesaidas,cnotsaidas,cemisaidas,cempresasaidas from asaidas where cpf_saidas < 0 and  cemisaidas >= '$data' and i_asa_codigo_tna in ($lages) order by cidesaidas  ";
$excomando=pg_query($conexaol,$comando);
$rscomando=pg_fetch_array($excomando);
$id=$rscomando['cidesaidas'];
$nf=$rscomando['cnotsaidas'];
$emi=$rscomando['cemisaidas'];
$emp=$rscomando['cempresasaidas'];
if ($id=='') {
    
} else {
   
    while ($id <> '') {
        echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>ERRO!!! **Erro Nota Condicional Para pessoa Juridica Lages Nfe: '$nf'  Emisão:'$emi' Empresa:'$emp'**</font></b></p>";
        $comando="select cidesaidas,cnotsaidas,cemisaidas,cnpj_saidas,cempresasaidas from asaidas  where cnpj_saidas is null and  cemisaidas >= '$data' and i_asa_codigo_tna in ($lages) and cidesaidas > $id  order by cidesaidas ";
        $excomando=pg_query($conexaol,$comando);
        $rscomando=pg_fetch_array($excomando);
        $id=$rscomando['cidesaidas'];
        $nf=$rscomando['cnotsaidas'];
        $emi=$rscomando['cemisaidas'];
        $emp=$rscomando['cempresasaidas'];
    }
    
}
$cacador="8";
$comando="select cidesaidas,cnotsaidas,cemisaidas,cempresasaidas from asaidas where  cemisaidas >= '$data' and i_asa_codigo_tna in ($cacador) order by cidesaidas";
$excomando=pg_query($conexaoc,$comando);
$rscomando=pg_fetch_array($excomando);
$id=$rscomando['cidesaidas'];
$nf=$rscomando['cnotsaidas'];
$emi=$rscomando['cemisaidas'];
$emp=$rscomando['cempresasaidas'];

if ($id == '') {
    
} else {    
    while ($id <> '' ) {
        $comando="select ccnpjempresa from tempresa where ccodempresa = $emp";       
        $excomando=pg_query($conexaoc,$comando);
        $rscomando=pg_fetch_array($excomando);        
        $cnj=$rscomando['ccnpjempresa'];
        $comando="select ccodfornecedor from afornecedor where ccgcfornecedor = '$cnj'";        
        $excomando=pg_query($conexaoc,$comando);
        $rscomando=pg_fetch_array($excomando);
        $codfor=$rscomando['ccodfornecedor'];
        $comando="select cforentradas from aentradas where cemientradas = '$emi' and i_aen_ide_saida_trans = $id";        
        $excomando=pg_query($conexaoc,$comando);
        $rscomando=pg_fetch_array($excomando);
        $codfore=$rscomando['cforentradas'];        
        if ($codfor<>$codfore ){
           
            echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>ERRO!!! **Erro Nota C/ Fornecedor errado Caçador: Nfe: '$nf'  Emisão:'$emi' Empresa:'$emp'**</font></b></p>";            
        }
        $comando="select cidesaidas,cnotsaidas,cemisaidas,cempresasaidas from asaidas where  cemisaidas >= '$data' and i_asa_codigo_tna in ($cacador) and cidesaidas > $id order by cidesaidas";        
        $excomando=pg_query($conexaoc,$comando);
        $rscomando=pg_fetch_array($excomando);
        $id=$rscomando['cidesaidas'];
        $nf=$rscomando['cnotsaidas'];
        $emi=$rscomando['cemisaidas'];
        $emp=$rscomando['cempresasaidas'];
        if ($id == ''){
            break;
        }
        $comando="select ccnpjempresa from tempresa where ccodempresa = $emp";        
        $excomando=pg_query($conexaoc,$comando);
        $rscomando=pg_fetch_array($excomando);
        $cnj=$rscomando['ccnpjempresa'];
        $comando="select ccodfornecedor from afornecedor where ccgcfornecedor = '$cnj'";        
        $excomando=pg_query($conexaoc,$comando);
        $rscomando=pg_fetch_array($excomando);
        $codfor=$rscomando['ccodfornecedor'];
        $comando="select cforentradas from aentradas where cemientradas = '$emi' and i_aen_ide_saida_trans = $id";       
        $excomando=pg_query($conexaoc,$comando);
        $rscomando=pg_fetch_array($excomando);
        $codfore=$rscomando['cforentradas'];        
    }
    
}
$videira="8";
$comando="select cidesaidas,cnotsaidas,cemisaidas,cempresasaidas from asaidas where  cemisaidas >= '$data' and i_asa_codigo_tna in ($videira) order by cidesaidas";
$excomando=pg_query($conexaov,$comando);
$rscomando=pg_fetch_array($excomando);
$id=$rscomando['cidesaidas'];
$nf=$rscomando['cnotsaidas'];
$emi=$rscomando['cemisaidas'];
$emp=$rscomando['cempresasaidas'];
if ($id == '') {
    
} else {
    while ($id <> '' ) {
        $comando="select ccnpjempresa from tempresa where ccodempresa = $emp";
        $excomando=pg_query($conexaov,$comando);
        $rscomando=pg_fetch_array($excomando);
        $cnj=$rscomando['ccnpjempresa'];
        $comando="select ccodfornecedor from afornecedor where ccgcfornecedor = '$cnj'";
        $excomando=pg_query($conexaov,$comando);
        $rscomando=pg_fetch_array($excomando);
        $codfor=$rscomando['ccodfornecedor'];
        $comando="select cforentradas from aentradas where cemientradas = '$emi' and i_aen_ide_saida_trans = $id";
        $excomando=pg_query($conexaov,$comando);
        $rscomando=pg_fetch_array($excomando);
        $codfore=$rscomando['cforentradas'];
        if ($codfor<>$codfore ){
           
            echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>ERRO!!! **Erro Nota C/ Fornecedor errado Videira: Nfe: '$nf'  Emisão:'$emi' Empresa:'$emp'**</font></b></p>";
        }
        $comando="select cidesaidas,cnotsaidas,cemisaidas,cempresasaidas from asaidas where  cemisaidas >= '$data' and i_asa_codigo_tna in ($videira) and cidesaidas > $id order by cidesaidas";
        $excomando=pg_query($conexaov,$comando);
        $rscomando=pg_fetch_array($excomando);
        $id=$rscomando['cidesaidas'];
        $nf=$rscomando['cnotsaidas'];
        $emi=$rscomando['cemisaidas'];
        $emp=$rscomando['cempresasaidas'];
        if ($id == ''){
            break;
        }
        $comando="select ccnpjempresa from tempresa where ccodempresa = $emp";
        $excomando=pg_query($conexaov,$comando);
        $rscomando=pg_fetch_array($excomando);
        $cnj=$rscomando['ccnpjempresa'];
        $comando="select ccodfornecedor from afornecedor where ccgcfornecedor = '$cnj'";
        $excomando=pg_query($conexaov,$comando);
        $rscomando=pg_fetch_array($excomando);
        $codfor=$rscomando['ccodfornecedor'];
        $comando="select cforentradas from aentradas where cemientradas = '$emi' and i_aen_ide_saida_trans = $id";
        $excomando=pg_query($conexaov,$comando);
        $rscomando=pg_fetch_array($excomando);
        $codfore=$rscomando['cforentradas'];
    }    
}
$cacador="8";
$comando="select cidesaidas,cnotsaidas,cemisaidas,cnpj_saidas,cempresasaidas from asaidas where cemisaidas >= '$data' and i_asa_codigo_tna in ($cacador) order by cidesaidas  ";
$excomando=pg_query($conexaoc,$comando);
$rscomando=pg_fetch_array($excomando);
$id=$rscomando['cidesaidas'];
$nf=$rscomando['cnotsaidas'];
$emi=$rscomando['cemisaidas'];
$emp=$rscomando['cempresasaidas'];
$cnpj=$rscomando['cnpj_saidas'];
if ($id == ''){    
}else {
    while ($id <> '') {
        $comando="select ccodempresa from tempresa where ccnpjempresa ='$cnpj' order by ccodempresa ";
        $excomando=pg_query($conexaoc,$comando);
        $rscomando=pg_fetch_array($excomando);
        $code=$rscomando['ccodempresa'];
        if ($code == '') {
           
            echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>ERRO!!! **Erro Cliente em Nfe Não Cadastado Como Empresa Destino Caçador Nfe: '$nf'  Emisão:'$emi' Empresa:'$emp'**</font></b></p>";
        }
        $comando ="select cempentrada from aentradas where i_aen_ide_saida_trans = '$id' ";
        $excomando=pg_query($conexaoc,$comando);
        $rscomando=pg_fetch_array($excomando);
        $codc=$rscomando['cempentrada'];
        if ($codc <> '') {
            if ($code <> $codc) {
               
            echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>ERRO!!! **Erro nota em c/ entrada em epresa errada Lançado:'$codc' Correta:'$code' Nfe: '$nf'  Emisão:'$emi' Empresa:'$emp'**</font></b></p>";
            }
            $comando="select cidesaidas,cnotsaidas,cemisaidas,cnpj_saidas,cempresasaidas from asaidas where cemisaidas >= '$data' and i_asa_codigo_tna in ($cacador) and cidesaidas > $id  order by cidesaidas  ";
            $excomando=pg_query($conexaoc,$comando);
            $rscomando=pg_fetch_array($excomando);
            $id=$rscomando['cidesaidas'];
            $nf=$rscomando['cnotsaidas'];
            $emi=$rscomando['cemisaidas'];
            $emp=$rscomando['cempresasaidas'];
            $cnpj=$rscomando['cnpj_saidas'];
        }else {
            $comando="select cidesaidas,cnotsaidas,cemisaidas,cnpj_saidas,cempresasaidas from asaidas where cemisaidas >= '$data' and i_asa_codigo_tna in ($cacador) and cidesaidas > $id  order by cidesaidas  ";
            $excomando=pg_query($conexaoc,$comando);
            $rscomando=pg_fetch_array($excomando);
            $id=$rscomando['cidesaidas'];
            $nf=$rscomando['cnotsaidas'];
            $emi=$rscomando['cemisaidas'];
            $emp=$rscomando['cempresasaidas'];
            $cnpj=$rscomando['cnpj_saidas'];
        }        
    }
    
}
$videira="8";
$comando="select cidesaidas,cnotsaidas,cemisaidas,cnpj_saidas,cempresasaidas from asaidas where cemisaidas >= '$data' and i_asa_codigo_tna in ($videira) order by cidesaidas  ";
$excomando=pg_query($conexaov,$comando);
$rscomando=pg_fetch_array($excomando);
$id=$rscomando['cidesaidas'];
$nf=$rscomando['cnotsaidas'];
$emi=$rscomando['cemisaidas'];
$emp=$rscomando['cempresasaidas'];
$cnpj=$rscomando['cnpj_saidas'];
if ($id == ''){
    
}else {
    while ($id <> '') {
        $comando="select ccodempresa from tempresa where ccnpjempresa ='$cnpj' order by ccodempresa ";
        $excomando=pg_query($conexaov,$comando);
        $rscomando=pg_fetch_array($excomando);
        $code=$rscomando['ccodempresa'];
        if ($code == '') {
           
            echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>ERRO!!! **Erro Cliente em Nfe Não Cadastado Como Empresa Destino Videira Nfe: '$nf'  Emisão:'$emi' Empresa:'$emp'**</font></b></p>";
        }
        $comando ="select cempentrada from aentradas where i_aen_ide_saida_trans = '$id' ";
        $excomando=pg_query($conexaov,$comando);
        $rscomando=pg_fetch_array($excomando);
        $codc=$rscomando['cempentrada'];
        if ($codc <> '') {
            if ($code <> $codc) {
               
                echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>ERRO!!! **Erro nota em c/ entrada em epressa errada Videira Correta:'$codc' Lançado:'$code' Nfe: '$nf'  Emisão:'$emi' Empresa:'$emp'**</font></b></p>";
            }
            $comando="select cidesaidas,cnotsaidas,cemisaidas,cnpj_saidas,cempresasaidas from asaidas where cemisaidas >= '$data' and i_asa_codigo_tna in ($videira) and cidesaidas > $id  order by cidesaidas  ";
            $excomando=pg_query($conexaov,$comando);
            $rscomando=pg_fetch_array($excomando);
            $id=$rscomando['cidesaidas'];
            $nf=$rscomando['cnotsaidas'];
            $emi=$rscomando['cemisaidas'];
            $emp=$rscomando['cempresasaidas'];
            $cnpj=$rscomando['cnpj_saidas'];
        }else {
            $comando="select cidesaidas,cnotsaidas,cemisaidas,cnpj_saidas,cempresasaidas from asaidas where cemisaidas >= '$data' and i_asa_codigo_tna in ($videira) and cidesaidas > $id  order by cidesaidas  ";
            $excomando=pg_query($conexaov,$comando);
            $rscomando=pg_fetch_array($excomando);
            $id=$rscomando['cidesaidas'];
            $nf=$rscomando['cnotsaidas'];
            $emi=$rscomando['cemisaidas'];
            $emp=$rscomando['cempresasaidas'];
            $cnpj=$rscomando['cnpj_saidas'];
        }        
    }
    
}
$confeccoes="10,14,15,18,22,24,33,41,42,45,47,48,49,53,63,70,71,73,76,78,79,81,84,85,88,95,96,98,104,108,109,110,115";
$comando="select ccodproduto,cemihistorico,cemphistorico from aprodutos inner join ahistorico on ccodproduto =cprohistorico where clinproduto in ($confeccoes) and cemihistorico >= '$data' and (csaihisotorico > 0) and cemphistorico in (3,4) order by ccodproduto  ";
$excomando=pg_query($conexaoc,$comando);
$rscomando=pg_fetch_array($excomando);
$cod=$rscomando['ccodproduto'];
$emis=$rscomando['cemihistorico'];
$empr=$rscomando['cemphistorico'];
if ($cod == '') {
    
} else {    
    while ($cod <> '') {
        $com="select (cqtde3produto+cqtde4produto)as estoque from aprodutos where ccodproduto =  $cod ";
        $excom=pg_query($conexaoc,$com);
        $rscom=pg_fetch_array($excom);
        $qtd=$rscom['estoque'];        
        if ( $qtd < 0) {
           
            echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>ERRO!!! Código Registrado Errado: $cod empresa: $empr emisão: $emis **</font></b></p>";
        }        
        $comando="select ccodproduto,cemihistorico,cemphistorico from aprodutos inner join ahistorico on ccodproduto =cprohistorico where clinproduto in ($confeccoes) 
and cemihistorico >= '$data' and (csaihisotorico > 0) and cemphistorico in (3,4) and  ccodproduto > $cod order by ccodproduto ";
        $excomando=pg_query($conexaoc,$comando);
        $rscomando=pg_fetch_array($excomando);
        $cod=$rscomando['ccodproduto'];
        $emis=$rscomando['cemihistorico'];
        $empr=$rscomando['cemphistorico'];
        
    }   
}

$comando="select ccodproduto,cemihistorico,cemphistorico from aprodutos inner join ahistorico on ccodproduto =cprohistorico where clinproduto in ($confeccoes) and cemihistorico >= '$data' and (csaihisotorico > 0) and cemphistorico in (5,6) order by ccodproduto  ";
set_time_limit(120);
$excomando=pg_query($conexaoc,$comando);
$rscomando=pg_fetch_array($excomando);
$cod=$rscomando['ccodproduto'];
$emis=$rscomando['cemihistorico'];
$empr=$rscomando['cemphistorico'];
if ($cod == '') {
    
} else {
    while ($cod <> '') {
        $com="select (cqtde5produto+cqtde6produto)as estoque from aprodutos where ccodproduto =  $cod ";
        $excom=pg_query($conexaoc,$com);
        $rscom=pg_fetch_array($excom);
        $qtd=$rscom['estoque'];
        if ( $qtd < 0) {
           
            echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>ERRO!!! Código Registrado Errado: $cod empresa: $empr emisão: $emis **</font></b></p>";
        }
        $comando="select ccodproduto,cemihistorico,cemphistorico from aprodutos inner join ahistorico on ccodproduto =cprohistorico where clinproduto in ($confeccoes)
and cemihistorico >= '$data' and (csaihisotorico > 0) and cemphistorico in (5,6) and  ccodproduto > $cod order by ccodproduto ";
        $excomando=pg_query($conexaoc,$comando);
        $rscomando=pg_fetch_array($excomando);
        $cod=$rscomando['ccodproduto'];
        $emis=$rscomando['cemihistorico'];
        $empr=$rscomando['cemphistorico'];
        
    }
}

$comando="select ccodproduto,cemihistorico,cemphistorico from aprodutos inner join ahistorico on ccodproduto =cprohistorico where clinproduto in ($confeccoes) and cemihistorico >= '$data' and (csaihisotorico > 0) and cemphistorico in (7,8) order by ccodproduto  ";
$excomando=pg_query($conexaoc,$comando);
$rscomando=pg_fetch_array($excomando);
$cod=$rscomando['ccodproduto'];
$emis=$rscomando['cemihistorico'];
$empr=$rscomando['cemphistorico'];
if ($cod == '') {
    
} else {
    while ($cod <> '') {
        $com="select (cqtde7produto+cqtde8produto)as estoque from aprodutos where ccodproduto =  $cod ";
        $excom=pg_query($conexaoc,$com);
        $rscom=pg_fetch_array($excom);
        $qtd=$rscom['estoque'];
        if ( $qtd < 0) {
           
            echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>ERRO!!! Código Registrado Errado: $cod empresa: $empr emisão: $emis **</font></b></p>";
        }
        $comando="select ccodproduto,cemihistorico,cemphistorico from aprodutos inner join ahistorico on ccodproduto =cprohistorico where clinproduto in ($confeccoes)
and cemihistorico >= '$data' and (csaihisotorico > 0) and cemphistorico in (7,8) and  ccodproduto > $cod order by ccodproduto ";
        $excomando=pg_query($conexaoc,$comando);
        $rscomando=pg_fetch_array($excomando);
        $cod=$rscomando['ccodproduto'];
        $emis=$rscomando['cemihistorico'];
        $empr=$rscomando['cemphistorico'];
        
    }
}

$calcados="9,11,16,17,20,25,33,34,44,46,51,54,55,59,58,60,61,74,71,86,93,97,99,102,106,107,111,112";
$comando="select ccodproduto,cemihistorico,cemphistorico from aprodutos inner join ahistorico on ccodproduto =cprohistorico where clinproduto in ($calcados) and cemihistorico >= '$data' and (csaihisotorico > 0) and cemphistorico in (1,2) order by ccodproduto  ";
$excomando=pg_query($conexaoc,$comando);
$rscomando=pg_fetch_array($excomando);
$cod=$rscomando['ccodproduto'];
$emis=$rscomando['cemihistorico'];
$empr=$rscomando['cemphistorico'];
if ($cod == '') {
    
} else {
    $com="select (cqtde1produto+cqtde2produto)as estoque from aprodutos where ccodproduto =  $cod ";
    $excom=pg_query($conexaoc,$com);
    $rscom=pg_fetch_array($excom);
    $qtd=$rscom['estoque'];
    if ( $qtd < 0) {       
        echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>ERRO!!! Código Registrado Errado: $cod empresa: $empr emisão: $emis **</font></b></p>";
    }    
    while ($cod <> '') {
        
        $comando="select ccodproduto,cemihistorico,cemphistorico from aprodutos inner join ahistorico on ccodproduto =cprohistorico where clinproduto in ($calcados)
and cemihistorico >= '$data' and (csaihisotorico > 0) and cemphistorico in (1,2) and  ccodproduto > $cod order by ccodproduto ";
        $excomando=pg_query($conexaoc,$comando);
        $rscomando=pg_fetch_array($excomando);
        $cod=$rscomando['ccodproduto'];
        $emis=$rscomando['cemihistorico'];
        $empr=$rscomando['cemphistorico'];
        
    }
}

$calcados="9,11,16,17,20,25,33,34,44,46,51,54,55,59,58,60,61,74,71,86,93,97,99,102,106,107,111,112";
$comando="select ccodproduto,cemihistorico,cemphistorico from aprodutos inner join ahistorico on ccodproduto =cprohistorico where clinproduto in ($calcados) and cemihistorico >= '$data' and (csaihisotorico > 0) and cemphistorico in (9,10) order by ccodproduto  ";
$excomando=pg_query($conexaoc,$comando);
$rscomando=pg_fetch_array($excomando);
$cod=$rscomando['ccodproduto'];
$emis=$rscomando['cemihistorico'];
$empr=$rscomando['cemphistorico'];
if ($cod == '') {
    
} else {
    $com="select (cqtde9produto+cqtde10produto)as estoque from aprodutos where ccodproduto =  $cod ";
    $excom=pg_query($conexaoc,$com);
    $rscom=pg_fetch_array($excom);
    $qtd=$rscom['estoque'];
    if ( $qtd < 0) {
       
        echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>ERRO!!! Código Registrado Errado: $cod empresa: $empr emisão: $emis **</font></b></p>";
    }
    while ($cod <> '') {
        
        $comando="select ccodproduto,cemihistorico,cemphistorico from aprodutos inner join ahistorico on ccodproduto =cprohistorico where clinproduto in ($calcados)
and cemihistorico >= '$data' and (csaihisotorico > 0) and cemphistorico in (9,10) and  ccodproduto > $cod order by ccodproduto ";
        $excomando=pg_query($conexaoc,$comando);
        $rscomando=pg_fetch_array($excomando);
        $cod=$rscomando['ccodproduto'];
        $emis=$rscomando['cemihistorico'];
        $empr=$rscomando['cemphistorico'];
        
    }
}

$comando="select id,valorcorreto,valorsistema,data from confacomulado where sistema = 1 order by id DESC";
$excomando=pg_query($conexaoc,$comando);
$rscomando=pg_fetch_array($excomando);
$valorcorreto=$rscomando['valorcorreto'];
$valorsistema=$rscomando['valorsistema'];
$data=$rscomando['data'];
$dif=$valorcorreto-$valorsistema;
if ($dif <> '0') {
   
    echo "<p style=background:#D3D3D3; align=center <br/><b><font size=5 color=#0404B4>Recebivél Caçador Diferença R$:$dif Conferido Até: $data </font></b></p>";
}
$comando="select id,valorcorreto,valorsistema,data from confacomulado where sistema = '2' order by id DESC";
$excomando=pg_query($conexaoc,$comando);
$rscomando=pg_fetch_array($excomando);
$valorcorreto=$rscomando['valorcorreto'];
$valorsistema=$rscomando['valorsistema'];
$data=$rscomando['data'];
$dif=$valorcorreto-$valorsistema;
if ($dif <> '0') {
   
    echo "<p style=background:#D3D3D3; align=center <br/><b><font size=5 color=#0404B4>Recebivél Videira Diferença R$:$dif Conferido Até: $data </font></b></p>";
}

$comando="select id,valorcorreto,valorsistema,data from confacomulado where sistema = 3 order by id DESC";
$excomando=pg_query($conexaoc,$comando);
$rscomando=pg_fetch_array($excomando);
$valorcorreto=$rscomando['valorcorreto'];
$valorsistema=$rscomando['valorsistema'];
$data=$rscomando['data'];
$dif=$valorcorreto-$valorsistema;
if ($dif <> '0') {
   
    echo "<p style=background:#D3D3D3; align=center <br/><b><font size=5 color=#0404B4>Recebivél Lages Diferença R$:$dif Conferido Até: $data </font></b></p>";
}

$comando="select id,valorcorreto,valorsistema,data from confacomulado where sistema = 4 order by id DESC";
$excomando=pg_query($conexaoc,$comando);
$rscomando=pg_fetch_array($excomando);
$valorcorreto=$rscomando['valorcorreto'];
$valorsistema=$rscomando['valorsistema'];
$data=$rscomando['data'];
$dif=$valorcorreto-$valorsistema;
if ($dif <> '0') {
   
    echo "<p style=background:#D3D3D3; align=center <br/><b><font size=5 color=#0404B4>Recebivél Joinville Diferença R$:$dif Conferido Até: $data </font></b></p>";
}

$data=date('Y-m-d', strtotime($dia. '-1 days'));
$dia_time  = date('w', strtotime($data));
if ($dia_time == '0'){
    $data=date('Y-m-d', strtotime($dia. '-2 days'));
} else {
    $data=date('Y-m-d', strtotime($dia. '-1 days'));
}

$comando="select i_asa_cod_asa_orig,cempresasaidas,cnotsaidas,ctotsaidas  from asaidas  where cemisaidas >= '$data' and i_asa_codigo_tna = '70' order by i_asa_cod_asa_orig  ";
$excomando=pg_query($conexaoc,$comando);
$rscomando=pg_fetch_array($excomando);
$ide=$rscomando['i_asa_cod_asa_orig'];
$empe=$rscomando['cempresasaidas'];
$nfe=$rscomando['cnotsaidas'];
$valore=$rscomando['ctotsaidas'];
if ($ide == '') {
     
}else {
    while ($ide <> '') {        
        $comando="select  cempresasaidas,ctotsaidas,i_asa_codigo_tna from asaidas where cidesaidas =  $ide ";
        $excomando=pg_query($conexaoc,$comando);
        $rscomando=pg_fetch_array($excomando);
        $emps=$rscomando['cempresasaidas'];
        $valors=$rscomando['ctotsaidas'];
        $ope=$rscomando['i_asa_codigo_tna'];
        if ($empe <> $emps) {
           
            echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>**Caçador:ERRO!!! Nota De Outra Empresa Selecionada Nfe:$nfe **</font></b></p>";
        }
        if ($valore <> $valors ) {
           
            echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>**Caçador:ERRO!!! Nota De Outro Valor Selecionado Nfe:$nfe **</font></b></p>";
        }
        if ($ope <> '68') {
           
            echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>**Caçador:ERRO!!! Nota de Sáida Não era condicional Nfe:$nfe **</font></b></p>";
        }
        $comando="select i_asa_cod_asa_orig,cempresasaidas,cnotsaidas,ctotsaidas  from asaidas  where cemisaidas >= '$data' and i_asa_codigo_tna = '70' and i_asa_cod_asa_orig > $ide  order by i_asa_cod_asa_orig  ";
        $excomando=pg_query($conexaoc,$comando);
        $rscomando=pg_fetch_array($excomando);
        $ide=$rscomando['i_asa_cod_asa_orig'];
        $empe=$rscomando['cempresasaidas'];
        $nfe=$rscomando['cnotsaidas'];
        $valore=$rscomando['ctotsaidas'];
    }
    
}
$comando="select i_asa_cod_asa_orig,cempresasaidas,cnotsaidas,ctotsaidas  from asaidas  where cemisaidas >= '$data' and i_asa_codigo_tna = '69' order by i_asa_cod_asa_orig  ";
$excomando=pg_query($conexaov,$comando);
$rscomando=pg_fetch_array($excomando);
$ide=$rscomando['i_asa_cod_asa_orig'];
$empe=$rscomando['cempresasaidas'];
$nfe=$rscomando['cnotsaidas'];
$valore=$rscomando['ctotsaidas'];
if ($ide == '') {
    
}else {
    while ($ide <> '') {
        $comando="select  cempresasaidas,ctotsaidas,i_asa_codigo_tna from asaidas where cidesaidas =  $ide ";
        $excomando=pg_query($conexaov,$comando);
        $rscomando=pg_fetch_array($excomando);
        $emps=$rscomando['cempresasaidas'];
        $valors=$rscomando['ctotsaidas'];
        $ope=$rscomando['i_asa_codigo_tna'];
        if ($empe <> $emps) {
           
            echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>**Videira:ERRO!!! Nota De Outra Empresa Selecionada Nfe:$nfe **</font></b></p>";
        }
        if ($valore <> $valors ) {
           
            echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>**Videira:ERRO!!! Nota De Outro Valor Selecionado Nfe:$nfe **</font></b></p>";
        }
        if ($ope <> '68') {
           
            echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>**Videira:ERRO!!! Nota de Sáida Não era condicional Nfe:$nfe **</font></b></p>";
        }
        $comando="select i_asa_cod_asa_orig,cempresasaidas,cnotsaidas,ctotsaidas  from asaidas  where cemisaidas >= '$data' and i_asa_codigo_tna = '69' and i_asa_cod_asa_orig > $ide  order by i_asa_cod_asa_orig  ";
        $excomando=pg_query($conexaov,$comando);
        $rscomando=pg_fetch_array($excomando);
        $ide=$rscomando['i_asa_cod_asa_orig'];
        $empe=$rscomando['cempresasaidas'];
        $nfe=$rscomando['cnotsaidas'];
        $valore=$rscomando['ctotsaidas'];
    }
    
}
$comando="select i_asa_cod_asa_orig,cempresasaidas,cnotsaidas,ctotsaidas  from asaidas  where cemisaidas >= '$data' and i_asa_codigo_tna = '25' order by i_asa_cod_asa_orig  ";
$excomando=pg_query($conexaol,$comando);
$rscomando=pg_fetch_array($excomando);
$ide=$rscomando['i_asa_cod_asa_orig'];
$empe=$rscomando['cempresasaidas'];
$nfe=$rscomando['cnotsaidas'];
$valore=$rscomando['ctotsaidas'];
if ($ide == '') {   
    
}else {
    while ($ide <> '') {        
        $comando="select  cempresasaidas,ctotsaidas,i_asa_codigo_tna from asaidas where cidesaidas =  $ide ";
        $excomando=pg_query($conexaol,$comando);
        $rscomando=pg_fetch_array($excomando);
        $emps=$rscomando['cempresasaidas'];
        $valors=$rscomando['ctotsaidas'];
        $ope=$rscomando['i_asa_codigo_tna'];
        if ($empe <> $emps) {
           
            echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>**Lages:ERRO!!! Nota De Outra Empresa Selecionada Nfe:$nfe **</font></b></p>";
        }
        if ($valore <> $valors ) {
           
            echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>**Lages:ERRO!!! Nota De Outro Valor Selecionado Nfe:$nfe **</font></b></p>";
        }
        if ($ope <> '24') {
           
            echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>**Lages:ERRO!!! Nota de Sáida Não era condicional Nfe:$nfe **</font></b></p>";
        }
        $comando="select i_asa_cod_asa_orig,cempresasaidas,cnotsaidas,ctotsaidas  from asaidas  where cemisaidas >= '$data' and i_asa_codigo_tna = '25' and i_asa_cod_asa_orig > $ide  order by i_asa_cod_asa_orig  ";
        $excomando=pg_query($conexaol,$comando);
        $rscomando=pg_fetch_array($excomando);
        $ide=$rscomando['i_asa_cod_asa_orig'];
        $empe=$rscomando['cempresasaidas'];
        $nfe=$rscomando['cnotsaidas'];
        $valore=$rscomando['ctotsaidas'];
    }
    
}
$comando="select i_asa_cod_asa_orig,cempresasaidas,cnotsaidas,ctotsaidas  from asaidas  where cemisaidas >= '$data' and i_asa_codigo_tna = '10' order by i_asa_cod_asa_orig  ";
$excomando=pg_query($conexaolc,$comando);
$rscomando=pg_fetch_array($excomando);
$ide=$rscomando['i_asa_cod_asa_orig'];
$empe=$rscomando['cempresasaidas'];
$nfe=$rscomando['cnotsaidas'];
$valore=$rscomando['ctotsaidas'];
if ($ide == '') {
    
}else {
    
    while ($ide <> '') {
        $comando="select  cempresasaidas,ctotsaidas,i_asa_codigo_tna,cemisaidas from asaidas where cidesaidas =  $ide ";
        $excomando=pg_query($conexaolc,$comando);
        $rscomando=pg_fetch_array($excomando);
        $emps=$rscomando['cempresasaidas'];
        $valors=$rscomando['ctotsaidas'];
        $emi=$rscomando['cemisaidas'];
        $ope=$rscomando['i_asa_codigo_tna'];
        if ($ope <> '1') {
           
            echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>**Caçador:ERRO!!! Nota de Sáida Não era Venda Nfe:$nfe Empresa:$emps, Data:$emi **</font></b></p>";
        }
        $comando="select i_asa_cod_asa_orig,cempresasaidas,cnotsaidas,ctotsaidas  from asaidas  where cemisaidas >= '$data' and i_asa_codigo_tna = '10' and i_asa_cod_asa_orig > $ide  order by i_asa_cod_asa_orig  ";
        $excomando=pg_query($conexaoc,$comando);
        $rscomando=pg_fetch_array($excomando);
        $ide=$rscomando['i_asa_cod_asa_orig'];
        $empe=$rscomando['cempresasaidas'];
        $nfe=$rscomando['cnotsaidas'];
        $valore=$rscomando['ctotsaidas'];
    }
    
}
$comando="select i_asa_cod_asa_orig,cempresasaidas,cnotsaidas,ctotsaidas  from asaidas  where cemisaidas >= '$data' and i_asa_codigo_tna = '10' order by i_asa_cod_asa_orig  ";
$excomando=pg_query($conexaolv,$comando);
$rscomando=pg_fetch_array($excomando);
$ide=$rscomando['i_asa_cod_asa_orig'];
$empe=$rscomando['cempresasaidas'];
$nfe=$rscomando['cnotsaidas'];
$valore=$rscomando['ctotsaidas'];
if ($ide == '') {
    
}else {
    while ($ide <> '') {
        $comando="select  cempresasaidas,ctotsaidas,i_asa_codigo_tna,cemisaidas from asaidas where cidesaidas =  $ide ";
        $excomando=pg_query($conexaolv,$comando);
        $rscomando=pg_fetch_array($excomando);
        $emps=$rscomando['cempresasaidas'];
        $valors=$rscomando['ctotsaidas'];
        $emi=$rscomando['cemisaidas'];
        $ope=$rscomando['i_asa_codigo_tna'];
        if ($ope <> '1') {
           
            echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>**Videira:ERRO!!! Nota de Sáida Não era Venda Nfe:$nfe Empresa:$emps, Data:$emi **</font></b></p>";
        }
        $comando="select i_asa_cod_asa_orig,cempresasaidas,cnotsaidas,ctotsaidas  from asaidas  where cemisaidas >= '$data' and i_asa_codigo_tna = '10' and i_asa_cod_asa_orig > $ide  order by i_asa_cod_asa_orig  ";
        $excomando=pg_query($conexaolv,$comando);
        $rscomando=pg_fetch_array($excomando);
        $ide=$rscomando['i_asa_cod_asa_orig'];
        $empe=$rscomando['cempresasaidas'];
        $nfe=$rscomando['cnotsaidas'];
        $valore=$rscomando['ctotsaidas'];
    }
    
}
$comando="select i_asa_cod_asa_orig,cempresasaidas,cnotsaidas,ctotsaidas  from asaidas  where cemisaidas >= '$data' and i_asa_codigo_tna = '10' order by i_asa_cod_asa_orig  ";
$excomando=pg_query($conexaoll,$comando);
$rscomando=pg_fetch_array($excomando);
$ide=$rscomando['i_asa_cod_asa_orig'];
$empe=$rscomando['cempresasaidas'];
$nfe=$rscomando['cnotsaidas'];
$valore=$rscomando['ctotsaidas'];
if ($ide == '') {
   
}else {
    while ($ide <> '') {
        $comando="select  cempresasaidas,ctotsaidas,i_asa_codigo_tna,cemisaidas from asaidas where cidesaidas =  $ide ";
        $excomando=pg_query($conexaoll,$comando);
        $rscomando=pg_fetch_array($excomando);
        $emps=$rscomando['cempresasaidas'];
        $valors=$rscomando['ctotsaidas'];
        $emi=$rscomando['cemisaidas'];
        $ope=$rscomando['i_asa_codigo_tna'];
        if ($ope <> '1') {
           
            echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>**Lages:ERRO!!! Nota de Sáida Não era Venda Nfe:$nfe Empresa:$emps, Data:$emi **</font></b></p>";
        }
        $comando="select i_asa_cod_asa_orig,cempresasaidas,cnotsaidas,ctotsaidas  from asaidas  where cemisaidas >= '$data' and i_asa_codigo_tna = '10' and i_asa_cod_asa_orig > $ide  order by i_asa_cod_asa_orig  ";
        $excomando=pg_query($conexaol,$comando);
        $rscomando=pg_fetch_array($excomando);
        $ide=$rscomando['i_asa_cod_asa_orig'];
        $empe=$rscomando['cempresasaidas'];
        $nfe=$rscomando['cnotsaidas'];
        $valore=$rscomando['ctotsaidas'];
    }
    
}


$comando="select cidesaidas,cnotsaidas,cemisaidas,cempresasaidas,cnpj_saidas from asaidas where cemisaidas >='$data' and i_asa_codigo_tna in (3) order by cidesaidas";
$excomando=pg_query($conexaoc,$comando);
$rscomando=pg_fetch_array($excomando);
$id=$rscomando['cidesaidas'];
$nf=$rscomando['cnotsaidas'];
$emp=$rscomando['cempresasaidas'];
$emi=$rscomando['cemisaidas'];
$cnpj=$rscomando['cnpj_saidas'];
if ($id == '') {
    
}else {   
    while ($id<> '') {
        
        if ($cnpj =='26484625000160' or $cnpj=='26484625000240') {
            $com="select csidentradas from aentradas where i_aen_ide_saida_trans = '$id'";
            $excom=pg_query($conexaov,$com);
            $rscom=pg_fetch_array($excom);
            $ide=$rscom['csidentradas'];
            if ($ide == '') {
               
                echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>**ERRO!!! Nota não lançada em Videira Nfe:$nf emisão:$emi **</font></b></p>";
            }
        } else {           
            $com="select csidentradas from aentradas where i_aen_ide_saida_trans = '$id'";
            $excom=pg_query($conexaoj,$com);
            $rscom=pg_fetch_array($excom);
            $ide=$id=$rscom['csidentradas'];
            if ($ide == '') {
               
                echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>**ERRO!!! Nota não lançada em Joinville Nfe:$nf emisão:$emi **</font></b></p>";
            }            
        }        
        $comando="select cidesaidas,cnotsaidas,cemisaidas,cempresasaidas,cnpj_saidas from asaidas where cemisaidas >='$data' and cidesaidas > $id  and i_asa_codigo_tna in (3) order by cidesaidas";        
        $excomando=pg_query($conexaoc,$comando);
        $rscomando=pg_fetch_array($excomando);
        $id=$rscomando['cidesaidas'];
        $nf=$rscomando['cnotsaidas'];
        $emp=$rscomando['cempresasaidas'];
        $emi=$rscomando['cemisaidas'];
        $cnpj=$rscomando['cnpj_saidas'];
        if ($id == ''){
            break;
        }
    }
}

$comando="select cidesaidas,cnotsaidas,cemisaidas,cempresasaidas,cnpj_saidas from asaidas where cemisaidas >='$data' and i_asa_codigo_tna in (3) order by cidesaidas";
$excomando=pg_query($conexaov,$comando);
$rscomando=pg_fetch_array($excomando);
$id=$rscomando['cidesaidas'];
$nf=$rscomando['cnotsaidas'];
$emp=$rscomando['cempresasaidas'];
$emi=$rscomando['cemisaidas'];
$cnpj=$rscomando['cnpj_saidas'];
if ($id == '') {
    
}else {
    while ($id<> '') {        
        if ($cnpj =='02534216000162' or $cnpj=='02534216000243' or $cnpj=='02534216000324' or $cnpj=='02534216000405' or $cnpj=='02534216000596'
            or $cnpj=='02534216000677') {
            $com="select csidentradas from aentradas where i_aen_ide_saida_trans = '$id'";           
            $excom=pg_query($conexaoc,$com);
            $rscom=pg_fetch_array($excom);
            $ide=$rscom['csidentradas'];
            if ($ide == '') {
               
                echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>**ERRO!!! Nota não lançada em Caçador Nfe:$nf emisão:$emi **</font></b></p>";
            }
        } else {
            $com="select csidentradas from aentradas where i_aen_ide_saida_trans = '$id'";
            $excom=pg_query($conexaoj,$com);
            $rscom=pg_fetch_array($excom);
            $ide=$id=$rscom['csidentradas'];
            if ($ide == '') {
               
                echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>**ERRO!!! Nota não lançada em Joinville Nfe:$nf emisão:$emi **</font></b></p>";
            }
        }
        $comando="select cidesaidas,cnotsaidas,cemisaidas,cempresasaidas,cnpj_saidas from asaidas where cemisaidas >='$data' and cidesaidas > $id  and i_asa_codigo_tna in (3) order by cidesaidas";
        $excomando=pg_query($conexaov,$comando);
        $rscomando=pg_fetch_array($excomando);
        $id=$rscomando['cidesaidas'];
        $nf=$rscomando['cnotsaidas'];
        $emp=$rscomando['cempresasaidas'];
        $emi=$rscomando['cemisaidas'];
        $cnpj=$rscomando['cnpj_saidas'];
        if ($id == ''){
            break;
        }
    }
}

$confeccoes="10,14,15,18,22,24,33,41,42,45,47,48,49,53,63,70,71,73,76,78,79,81,84,85,88,95,96,98,104,108,109,110,115,13";
$comando="select ccodproduto,cemihistorico,cemphistorico from aprodutos inner join ahistorico on ccodproduto=cprohistorico where clinproduto in ($confeccoes) and cemihistorico >= '$data' and (centhistorico > 0) and cemphistorico in (3,4) order by ccodproduto  ";
$excomando=pg_query($conexaoc,$comando);
$rscomando=pg_fetch_array($excomando);
$cod=$rscomando['ccodproduto'];
$emis=$rscomando['cemihistorico'];
$empr=$rscomando['cemphistorico'];
if ($cod == '') {
    
} else {
       
    while ($cod <> '') {
        $comando = "select (cqtde3produto+cqtde4produto) as dif from aprodutos where ccodproduto = $cod ";
        $excomando=pg_query($conexaoc,$comando);
        $rscomando=pg_fetch_array($excomando);
        $qtd=$rscomando['dif'];
        if ($qtd > '1' or $qtd < '0'){            
            echo "<embed src='sond/Camp.mp3'width='0' height='0'>";
            echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>ERRO!!! Código Com Entrada Errada: $cod empresa: $empr emisão: $emis **</font></b></p>";
        }
        $comando="select ccodproduto,cemihistorico,cemphistorico from aprodutos inner join ahistorico on ccodproduto =cprohistorico where clinproduto in ($confeccoes)
and cemihistorico >= '$data' and (centhistorico > 0) and cemphistorico in (3,4) and  ccodproduto > $cod order by ccodproduto ";
        $excomando=pg_query($conexaoc,$comando);
        $rscomando=pg_fetch_array($excomando);
        $cod=$rscomando['ccodproduto'];
        $emis=$rscomando['cemihistorico'];
        $empr=$rscomando['cemphistorico'];
        
    }
}
$confeccoes="10,14,15,18,22,24,33,41,42,45,47,48,49,53,63,70,71,73,76,78,79,81,84,85,88,95,96,98,104,108,109,110,115,13";
$comando="select ccodproduto,cemihistorico,cemphistorico from aprodutos inner join ahistorico on ccodproduto=cprohistorico where clinproduto in ($confeccoes) and cemihistorico >= '$data' and (centhistorico > 0) and cemphistorico in (5,6) order by ccodproduto  ";
$excomando=pg_query($conexaoc,$comando);
$rscomando=pg_fetch_array($excomando);
$cod=$rscomando['ccodproduto'];
$emis=$rscomando['cemihistorico'];
$empr=$rscomando['cemphistorico'];
if ($cod == '') {
    
} else {
    
    while ($cod <> '') {
        $comando = "select (cqtde5produto+cqtde6produto) as dif from aprodutos where ccodproduto = $cod ";
        $excomando=pg_query($conexaoc,$comando);
        $rscomando=pg_fetch_array($excomando);
        $qtd=$rscomando['dif'];
        if ($qtd > '1' or $qtd < '0'){
            echo "<embed src='sond/Camp.mp3'width='0' height='0'>";
            echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>ERRO!!! Código Com Entrada Errada: $cod empresa: $empr emisão: $emis **</font></b></p>";
        }
        $comando="select ccodproduto,cemihistorico,cemphistorico from aprodutos inner join ahistorico on ccodproduto =cprohistorico where clinproduto in ($confeccoes)
and cemihistorico >= '$data' and (centhistorico > 0) and cemphistorico in (5,6) and  ccodproduto > $cod order by ccodproduto ";
        $excomando=pg_query($conexaoc,$comando);
        $rscomando=pg_fetch_array($excomando);
        $cod=$rscomando['ccodproduto'];
        $emis=$rscomando['cemihistorico'];
        $empr=$rscomando['cemphistorico'];
        
    }
}
$confeccoes="10,14,15,18,22,24,33,41,42,45,47,48,49,53,63,70,71,73,76,78,79,81,84,85,88,95,96,98,104,108,109,110,115,13";
$comando="select ccodproduto,cemihistorico,cemphistorico from aprodutos inner join ahistorico on ccodproduto=cprohistorico where clinproduto in ($confeccoes) and cemihistorico >= '$data' and (centhistorico > 0) and cemphistorico in (7,8) order by ccodproduto  ";
$excomando=pg_query($conexaoc,$comando);
$rscomando=pg_fetch_array($excomando);
$cod=$rscomando['ccodproduto'];
$emis=$rscomando['cemihistorico'];
$empr=$rscomando['cemphistorico'];
if ($cod == '') {
    
} else {
    
    while ($cod <> '') {
        $comando = "select (cqtde7produto+cqtde8produto) as dif from aprodutos where ccodproduto = $cod ";
        $excomando=pg_query($conexaoc,$comando);
        $rscomando=pg_fetch_array($excomando);
        $qtd=$rscomando['dif'];
        if ($qtd > '1' or $qtd < '0'){            
            echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>ERRO!!! Código Com Entrada Errada: $cod empresa: $empr emisão: $emis **</font></b></p>";
        }
        $comando="select ccodproduto,cemihistorico,cemphistorico from aprodutos inner join ahistorico on ccodproduto =cprohistorico where clinproduto in ($confeccoes)
and cemihistorico >= '$data' and (centhistorico > 0) and cemphistorico in (7,8) and  ccodproduto > $cod order by ccodproduto ";
        $excomando=pg_query($conexaoc,$comando);
        $rscomando=pg_fetch_array($excomando);
        $cod=$rscomando['ccodproduto'];
        $emis=$rscomando['cemihistorico'];
        $empr=$rscomando['cemphistorico'];
        
    }
}


$calcados="9,11,16,17,20,25,33,34,44,46,51,54,55,59,58,60,61,74,71,86,93,97,99,102,106,107,111,112";
$comando="select ccodproduto,cemihistorico,cemphistorico from aprodutos inner join ahistorico on ccodproduto =cprohistorico where clinproduto in ($calcados) and cemihistorico >= '$data' and (centhistorico > 0) and cemphistorico in (9,10) order by ccodproduto  ";
$excomando=pg_query($conexaoc,$comando);
$rscomando=pg_fetch_array($excomando);
$cod=$rscomando['ccodproduto'];
$emis=$rscomando['cemihistorico'];
$empr=$rscomando['cemphistorico'];
if ($cod == '') {
        
} else {        
    while ($cod <> '') {
        $comando = "select (cqtde9produto+cqtde10produto) as dif from aprodutos where ccodproduto = $cod ";
        $excomando=pg_query($conexaoc,$comando);
        $rscomando=pg_fetch_array($excomando);
        $qtd=$rscomando['dif'];
        if ($qtd > '1' or $qtd < '0'){            
            echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>ERRO!!! Código Com Entrada Errada: $cod empresa: $empr emisão: $emis **</font></b></p>";
        }
        $comando="select ccodproduto,cemihistorico,cemphistorico from aprodutos inner join ahistorico on ccodproduto =cprohistorico where clinproduto in ($calcados) and cemihistorico >= '$data' 
and (centhistorico > 0) and cemphistorico in (9,10) and ccodproduto > $cod  order by ccodproduto  ";
        $excomando=pg_query($conexaoc,$comando);
        $rscomando=pg_fetch_array($excomando);
        $cod=$rscomando['ccodproduto'];
        $emis=$rscomando['cemihistorico'];
        $empr=$rscomando['cemphistorico'];
        
    }
}
$calcados="9,11,16,17,20,25,33,34,44,46,51,54,55,59,58,60,61,74,71,86,93,97,99,102,106,107,111,112";
$comando="select ccodproduto,cemihistorico,cemphistorico from aprodutos inner join ahistorico on ccodproduto =cprohistorico where clinproduto in ($calcados) and cemihistorico >= '$data' and (centhistorico > 0) and cemphistorico in (1,2) order by ccodproduto  ";
$excomando=pg_query($conexaoc,$comando);
$rscomando=pg_fetch_array($excomando);
$cod=$rscomando['ccodproduto'];
$emis=$rscomando['cemihistorico'];
$empr=$rscomando['cemphistorico'];
if ($cod == '') {
    
} else {
    while ($cod <> '') {
        $comando = "select (cqtde9produto+cqtde10produto) as dif from aprodutos where ccodproduto = $cod ";
        $excomando=pg_query($conexaoc,$comando);
        $rscomando=pg_fetch_array($excomando);
        $qtd=$rscomando['dif'];
        if ($qtd > '1' or $qtd < '0'){            
            echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>ERRO!!! Código Com Entrada Errada: $cod empresa: $empr emisão: $emis **</font></b></p>";
        }
        $comando="select ccodproduto,cemihistorico,cemphistorico from aprodutos inner join ahistorico on ccodproduto =cprohistorico where clinproduto in ($calcados) and cemihistorico >= '$data'
and (centhistorico > 0) and cemphistorico in (1,2) and ccodproduto > $cod  order by ccodproduto  ";
        $excomando=pg_query($conexaoc,$comando);
        $rscomando=pg_fetch_array($excomando);
        $cod=$rscomando['ccodproduto'];
        $emis=$rscomando['cemihistorico'];
        $empr=$rscomando['cemphistorico'];
        
    }
}

$comando=("select codigo,datal,hora,usuario from log where substituto is null AND tabela IS DISTINCT FROM 'versao_bd' ORDER BY codigo" );
$excomando=pg_query($conexaolc,$comando);
$rscomando=pg_fetch_array($excomando);
$cod=$rscomando['codigo'];
if ($cod <> '') {
    $com="select codigo from controlereplicador where codigo = '$cod' and base = '1'";
    $excom=pg_query($conexaoc,$com);
    $rscom=pg_fetch_array($excom);
    $ultcod=$rscom['codigo'];
    if ($ultcod < $cod) {
        pg_query($conexaoc,"INSERT INTO controlereplicador(id, codigo, base) VALUES (nextval('seq_controlereplicador'),$cod, '1')");
        
    }
    if ($ultcod==$cod){
       
        echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>Caçador Replicador Parado</font></b></p>";
    }
}else {
    
}
$excomando=pg_query($conexaolv,$comando);
$rscomando=pg_fetch_array($excomando);
$cod=$rscomando['codigo'];
if ($cod <> '') {
    $com="select codigo from controlereplicador where codigo = '$cod' and base = '2'";
    $excom=pg_query($conexaoc,$com);
    $rscom=pg_fetch_array($excom);
    $ultcod=$rscom['codigo'];
    if ($ultcod < $cod) {
        pg_query($conexaoc,"INSERT INTO controlereplicador(id, codigo, base) VALUES (nextval('seq_controlereplicador'),$cod, '2')");
        
    }
    if ($ultcod==$cod){
       
        echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>Videira Replicador Parado</font></b></p>";
    }
}else {
    
}
$excomando=pg_query($conexaoll,$comando);
$rscomando=pg_fetch_array($excomando);
$cod=$rscomando['codigo'];
if ($cod <> '') {
    $com="select codigo from controlereplicador where codigo = '$cod' and base = '3'";
    $excom=pg_query($conexaoc,$com);
    $rscom=pg_fetch_array($excom);
    $ultcod=$rscom['codigo'];
    if ($ultcod < $cod) {
        pg_query($conexaoc,"INSERT INTO controlereplicador(id, codigo, base) VALUES (nextval('seq_controlereplicador'),$cod, '3')");
        
    }
    if ($ultcod==$cod){
       
        echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>Lages Replicador Parado</font></b></p>";
    }
}else {
    
}
set_time_limit(120);
$excomando=pg_query($conexaolj,$comando);

$rscomando=pg_fetch_array($excomando);
$cod=$rscomando['codigo'];
if ($cod <> '') {
    $com="select codigo from controlereplicador where codigo = '$cod' and base = '4'";
    $excom=pg_query($conexaoc,$com);
    $rscom=pg_fetch_array($excom);
    $ultcod=$rscom['codigo'];
    if ($ultcod < $cod) {
        pg_query($conexaoc,"INSERT INTO controlereplicador(id, codigo, base) VALUES (nextval('seq_controlereplicador'),$cod, '4')");
        
    }
    if ($ultcod==$cod){
       
        echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>Joinville Replicador Parado</font></b></p>";
    }
}else {
    
}
$comando="select *from controlevendas where loja = '1' order by data DESC ";
$excomando=pg_query($conexaoc,$comando);
$rscomando=pg_fetch_array($excomando);
$datac=$rscomando['data'];
if ($data > $datac) {
   
    echo "<p style=background:#000000; align=center <br/><b><font size=4 color=#FF0000>Conferência Loja Tati Pendente</font></b></p>";
}

$comando="select *from controlevendas where loja = '3' order by data DESC ";
$excomando=pg_query($conexaoc,$comando);
$rscomando=pg_fetch_array($excomando);
$datac=$rscomando['data'];
if ($data > $datac) {
   
    echo "<p style=background:#000000; align=center <br/><b><font size=4 color=#FF0000>Conferência Loja Lucélia Pendente</font></b></p>";
}

$comando="select *from controlevendas where loja = '5' order by data DESC ";
$excomando=pg_query($conexaoc,$comando);
$rscomando=pg_fetch_array($excomando);
$datac=$rscomando['data'];
if ($data > $datac) {
   
    echo "<p style=background:#000000; align=center <br/><b><font size=4 color=#FF0000>Conferência Loja  Maynara</font></b></p>";
}

$comando="select *from controlevendas where loja = '7' order by data DESC ";
$excomando=pg_query($conexaoc,$comando);
$rscomando=pg_fetch_array($excomando);
$datac=$rscomando['data'];
if ($data > $datac) {
   
    echo "<p style=background:#000000; align=center <br/><b><font size=4 color=#FF0000>Conferência Loja Vila Pendente</font></b></p>";
}
$comando="select *from controlevendas where loja = '9' order by data DESC ";
$excomando=pg_query($conexaoc,$comando);
$rscomando=pg_fetch_array($excomando);
$datac=$rscomando['data'];
if ($data > $datac) {
   
    echo "<p style=background:#000000; align=center <br/><b><font size=4 color=#FF0000>Conferência Loja Eliane Pendente</font></b></p>";
}

$comando="select *from controlevendas where loja = '11' order by data DESC ";
$excomando=pg_query($conexaoc,$comando);
$rscomando=pg_fetch_array($excomando);
$datac=$rscomando['data'];
if ($data > $datac) {
   
    echo "<p style=background:#000000; align=center <br/><b><font size=4 color=#FF0000>Conferência Loja Hilda Pendente</font></b></p>";
}

$comando="select *from controlevendas where loja = '13' order by data DESC ";
$excomando=pg_query($conexaoc,$comando);
$rscomando=pg_fetch_array($excomando);
$datac=$rscomando['data'];
if ($data > $datac) {
   
    echo "<p style=background:#000000; align=center <br/><b><font size=4 color=#FF0000>Conferência Loja Nadia Pendente</font></b></p>";
}

$comando="select *from controlevendas where loja = '15' order by data DESC ";
$excomando=pg_query($conexaoc,$comando);
$rscomando=pg_fetch_array($excomando);
$datac=$rscomando['data'];
if ($data > $datac) {
   
    echo "<p style=background:#000000; align=center <br/><b><font size=4 color=#FF0000>Conferência Loja Adrielli Pendente</font></b></p>";
}


?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css"></link>

<marquee behavior="alternate" scrollamount="10" ><?php echo "<p style=background:#00FF00; align=center <br/><b><font size=5 color=#FFFFFF>Última Conferência em : '$dia' , '$time'  </font></b></p>"; ?></marquee>
<body>

<!--agora vem o script-->

<style>

body { 

background-image: url("https://www.celos.com.br/site/wp-content/uploads/2017/08/fd.jpg");

background-attachament:fixed;
background-size:100%;
background-repeat: no-repeat;



}

</style>

</body>

</head>
</html>






   
    




