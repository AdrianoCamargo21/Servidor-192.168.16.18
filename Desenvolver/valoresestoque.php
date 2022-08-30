<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
session_start();
$voltalogin="<script>window.location='http://192.168.13.2/Desenvolver/Dados Estoque.html';</script>";
$time=date('H:i:s');
$dia= date('Y-m-d');
set_time_limit(1000);
$data=$_POST["data"];
if ($data=='') {
    session_destroy();
    echo "<script>alert('Data Inválida');</script>";
    echo $voltalogin;
    exit;
}
if(!@($conc=pg_connect ("host=192.168.10.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@"))){
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
if(!@($conv=pg_connect ("host=192.168.10.190 dbname=troll_videira port=5430 user=postgres password=ky$14gr@"))){
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
if(!@($conl=pg_connect ("host=192.168.10.190 dbname=troll_lages port=5430 user=postgres password=ky$14gr@"))){
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
if(!@($conj=pg_connect ("host=192.168.10.190 dbname=troll_joinville port=5430 user=postgres password=ky$14gr@"))){
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
$meses = array(
    '01'=>'Janeiro',
    '02'=>'Fevereiro',
    '03'=>'Março',
    '04'=>'Abril',
    '05'=>'Maio',
    '06'=>'Junho',
    '07'=>'Julho',
    '08'=>'Agosto',
    '09'=>'Setembro',
    '10'=>'Outubro',
    '11'=>'Novembro',
    '12'=>'Dezembro'
);


$sql="select sum((centhistorico-csaihisotorico)*cpcuproduto) as valor from ahistorico inner join aprodutos on ccodproduto = cprohistorico where cemihistorico <= '$data' and
cemphistorico in (1,2) and clinproduto <> 75";
$exsql= pg_query($conc,$sql);
$resulsql= pg_fetch_array($exsql);
$filial02c=$resulsql['valor'];
$sql="select sum((centhistorico-csaihisotorico)*cpcuproduto) as valor from ahistorico inner join aprodutos on ccodproduto = cprohistorico where cemihistorico <= '$data' and
cemphistorico in (3,4) and clinproduto <> 75";
$exsql= pg_query($conc,$sql);
$resulsql= pg_fetch_array($exsql);
$matrizc=$resulsql['valor'];
$sql="select sum((centhistorico-csaihisotorico)*cpcuproduto) as valor from ahistorico inner join aprodutos on ccodproduto = cprohistorico where cemihistorico <= '$data' and
cemphistorico in (5,6) and clinproduto <> 75";
$exsql= pg_query($conc,$sql);
$resulsql= pg_fetch_array($exsql);
$filial03c=$resulsql['valor'];
$sql="select sum((centhistorico-csaihisotorico)*cpcuproduto) as valor from ahistorico inner join aprodutos on ccodproduto = cprohistorico where cemihistorico <= '$data' and
cemphistorico in (7,8) and clinproduto <> 75";
$exsql= pg_query($conc,$sql);
$resulsql= pg_fetch_array($exsql);
$filial04c=$resulsql['valor'];
$sql="select sum((centhistorico-csaihisotorico)*cpcuproduto) as valor from ahistorico inner join aprodutos on ccodproduto = cprohistorico where cemihistorico <= '$data' and
cemphistorico in (9,10) and clinproduto <> 75";
$exsql= pg_query($conc,$sql);
$resulsql= pg_fetch_array($exsql);
$filial05c=$resulsql['valor'];
$sql="select sum((centhistorico-csaihisotorico)*cpcuproduto) as valor from ahistorico inner join aprodutos on ccodproduto = cprohistorico where cemihistorico <= '$data' and
cemphistorico in (11,12) and clinproduto <> 75";
$exsql= pg_query($conc,$sql);
$resulsql= pg_fetch_array($exsql);
$filial06c=$resulsql['valor'];
$sql="select sum((centhistorico-csaihisotorico)*cpcuproduto) as valor from ahistorico inner join aprodutos on ccodproduto = cprohistorico where cemihistorico <= '$data' and
cemphistorico in (13,14) and clinproduto <> 75";
$exsql= pg_query($conv,$sql);
$resulsql= pg_fetch_array($exsql);
$matrizv=$resulsql['valor'];
$sql="select sum((centhistorico-csaihisotorico)*cpcuproduto) as valor from ahistorico inner join aprodutos on ccodproduto = cprohistorico where cemihistorico <= '$data' and
cemphistorico in (15,16) and clinproduto <> 75";
$exsql= pg_query($conv,$sql);
$resulsql= pg_fetch_array($exsql);
$filial02v=$resulsql['valor'];
$sql="select sum((centhistorico-csaihisotorico)*cpcuproduto) as valor from ahistorico inner join aprodutos on ccodproduto = cprohistorico where cemihistorico <= '$data' and
cemphistorico in (17,18) and clinproduto <> 75";
$exsql= pg_query($conv,$sql);
$resulsql= pg_fetch_array($exsql);
$filial03v=$resulsql['valor'];
$sql="select sum((centhistorico-csaihisotorico)*cpcuproduto) as valor from ahistorico inner join aprodutos on ccodproduto = cprohistorico where cemihistorico <= '$data' and
cemphistorico in (1,2) and clinproduto <> 75";
$exsql= pg_query($conl,$sql);
$resulsql= pg_fetch_array($exsql);
$matrizl=$resulsql['valor'];
$sql="select sum((centhistorico-csaihisotorico)*cpcuproduto) as valor from ahistorico inner join aprodutos on ccodproduto = cprohistorico where cemihistorico <= '$data' and
cemphistorico in (3,4) and clinproduto <> 75";
$exsql= pg_query($conl,$sql);
$resulsql= pg_fetch_array($exsql);
$filial02l=$resulsql['valor'];
$sql="select sum((centhistorico-csaihisotorico)*cpcuproduto) as valor from ahistorico inner join aprodutos on ccodproduto = cprohistorico where cemihistorico <= '$data' and
cemphistorico in (1,2) and clinproduto <> 75";
$exsql= pg_query($conj,$sql);
$resulsql= pg_fetch_array($exsql);
$matrizat=$resulsql['valor'];
$partes = explode("-", $data);
$dia = $partes[0];
$mess = $partes[1];
$ano = $partes[2];
$mes= $meses[$mess];



echo "<table border='10' width='100%' bgcolor=#E3F6CE >";
echo "<tr><td>Estoque em :$mes/$dia</td>"."</tr>";
echo "</tr>";
echo "<table border='2' width='100%' bgcolor=#E3F6CE >";
echo "<tr><td>Empresa</td>"."<td>TT Estoque</td>"."</tr>";
echo "<td>".'Matriz Caçador'."</td>\n";
$matrizc=number_format($matrizc,2,",",".");
echo "<td>".$matrizc."</td>\n";
echo "</tr>\n";
echo "<td>".'Filial02 Caçador'."</td>\n";
$filial02c=number_format($filial02c,2,",",".");
echo "<td>".$filial02c."</td>\n";
echo "</tr>\n";
echo "<td>".'Filial03 Caçador'."</td>\n";
$filial03c=number_format($filial03c,2,",",".");
echo "<td>".$filial03c."</td>\n";
echo "</tr>\n";
echo "<td>".'Filial04 Caçador'."</td>\n";
$filial04c=number_format($filial04c,2,",",".");
echo "<td>".$filial04c."</td>\n";
echo "</tr>\n";
echo "<td>".'Filial05 Caçador'."</td>\n";
$filial05c=number_format($filial05c,2,",",".");
echo "<td>".$filial05c."</td>\n";
echo "</tr>\n";
echo "<td>".'Filial06 Caçador'."</td>\n";
$filial06c=number_format($filial06c,2,",",".");
echo "<td>".$filial06c."</td>\n";
echo "</tr>\n";
echo "<td>".'Matriz Videira'."</td>\n";
$matrizv=number_format($matrizv,2,",",".");
echo "<td>".$matrizv."</td>\n";
echo "</tr>\n";
echo "<td>".'Filial02 Videira'."</td>\n";
$filial02v=number_format($filial02v,2,",",".");
echo "<td>".$filial02v."</td>\n";
echo "</tr>\n";
echo "<td>".'Filial03 Videira'."</td>\n";
$filial03v=number_format($filial03v,2,",",".");
echo "<td>".$filial03v."</td>\n";
echo "</tr>\n";
echo "<td>".'Matriz Lages'."</td>\n";
$matrizl=number_format($matrizl,2,",",".");
echo "<td>".$matrizl."</td>\n";
echo "</tr>\n";
echo "<td>".'Filial02 Lages'."</td>\n";
$filial02l=number_format($filial02l,2,",",".");
echo "<td>".$filial02l."</td>\n";
echo "</tr>\n";
echo "<td>".'Matriz Civegui'."</td>\n";
$matrizat=number_format($matrizat,2,",",".");
echo "<td>".$matrizat."</td>\n";
?>
