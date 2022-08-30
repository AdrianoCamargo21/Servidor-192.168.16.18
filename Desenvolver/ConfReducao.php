<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
$time=date('H:i:s');
$dia= date('Y-m-d');
set_time_limit(90000);
$volta="<script>window.location='http://192.168.13.2/Desenvolver/ConferenciaReducao.html'</script>";
$loja=$_POST["loja"];
if ($loja=='') {
    echo "<script>alert('Loja Inválida');</script>";
    echo $volta;    
}
if ($loja <= 7) {
    if(!@($con=pg_connect ("host=192.168.10.30 dbname=troll port=5430 user=postgres password=ky$14gr@"))){
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
if ($loja > 7 and $loja <= 10) {
    if(!@($con=pg_connect ("host=192.168.10.99 dbname=troll port=5433 user=postgres password=ky$14gr@"))){
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
if ($loja =='11' ) {
    if(!@($con=pg_connect ("host=192.168.10.153 dbname=troll port=5434 user=postgres password=ky$14gr@"))){
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
}
if ($loja >'11' ) {
    if(!@($con=pg_connect ("host=192.168.11.2 dbname=Troll port=5433 user=postgres password=ky$14gr@"))){
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
if ($loja=='1') {
    $emp=1;
}
if ($loja=='2') {
    $emp=3;
}
if ($loja=='3') {
    $emp=7;
}
if ($loja=='4') {
    $emp=5;
}
if ($loja=='5') {
    $emp=9;
}
if ($loja=='7') {
    $emp=11;
}
if ($loja=='8') {
    $emp=15;
}
if ($loja=='9') {
    $emp=13;
}
if ($loja=='10') {
    $emp=11;
}
if ($loja=='11') {
    $emp=1;
}
if ($loja=='12') {
    $emp=1;
}
if ($loja=='13') {
    $emp=1;
}

$data=date('Y-m-d', strtotime($dia. '-60 days'));
echo "<table border='2' width='100%' bgcolor=#E3F6CE >";
echo "<tr><td>Serie</td>"."<td>Numero da Redução</td>"."</tr>";
echo "Verificar No Retaguarda em Tabela /Tabela Reduções Z";


$sql="select I_C405_CODIGO_TSE as serie from  C405 inner join tseriesnf on I_C405_CODIGO_TSE = cserserie 
WHERE D_C405_DT_DOC >= '$data' and cempserie=$emp  GROUP BY I_C405_CODIGO_TSE ORDER BY 
I_C405_CODIGO_TSE";

$exsql=pg_query($con,$sql);
while ($row = pg_fetch_assoc( $exsql)) {
    $serie=$row['serie'];
    $com="select I_C405_CRZ as inicial ,D_C405_DT_DOC from  C405 inner join tseriesnf on I_C405_CODIGO_TSE = cserserie
         where D_C405_DT_DOC >= '$data' and I_C405_CODIGO_TSE='$serie' order by I_C405_CRZ LIMIT 1";
    $excom=pg_query($con,$com);
    $rscom=pg_fetch_array($excom);
    $redini=$rscom['inicial']; 
    $com="select I_C405_CRZ as final ,D_C405_DT_DOC from  C405 inner join tseriesnf on I_C405_CODIGO_TSE = cserserie
         where D_C405_DT_DOC >= '$data' and I_C405_CODIGO_TSE='$serie' order by I_C405_CRZ DESC LIMIT 1";
    $excom=pg_query($con,$com);
    $rscom=pg_fetch_array($excom);
    $redfin=$rscom['final'];
    while ($redini <> $redfin) {
        $com="select I_C405_CRZ as reducao from C405 inner join tseriesnf on I_C405_CODIGO_TSE = cserserie
         where I_C405_CODIGO_TSE='$serie' and I_C405_CRZ= $redini  ";
        $excom=pg_query($con,$com);
        $rscom=pg_fetch_array($excom);
        $red=$rscom['reducao'];
        if ($red == '') {
            echo "<td>".$serie."</td>\n";
            echo "<td>".$redini."</td>\n";
            echo "</tr>";            
        }
        $redini ++;           
    }   

}
?>