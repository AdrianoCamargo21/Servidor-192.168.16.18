<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<!DOCTYPE html>
<html>
<html lang="pt">
<head>
<link rel="stylesheet" href="css/style.css"></link>
<br><br>
</html>
<?php
$dia = date('Y-m-d');
set_time_limit(0);
session_start();
include_once("conexao.php");
date_default_timezone_set('America/Sao_Paulo');
$time = date('H:i:s');
$dia = date('Y-m-d');
$newdate = '2022-08-21' ; 
//and copcsaidas = 142
$sql = "select *from asaidas where cemisaidas = '2022-08-22' and cempresasaidas = 20 and copcsaidas in( 142,150) ";
$exsql = pg_query($congc,$sql);
while($row = pg_fetch_assoc( $exsql)){
    $id = $row['cidesaidas'];
    $com = "update asaidas set cemisaidas = '$newdate' where cidesaidas = $id ";
    $excom = pg_query($congc,$com);
    $com = "update ahistorico set cemihistorico = '$newdate' where cisahistorico = $id";
    $excom = pg_query($congc,$com);
    $com = "update aordens set data_fat = '$newdate' where ide_asaidas = $id ";
    $excom = pg_query($congc,$com);
    $com = "update ahcontas  set cdatahistorico  = '$newdate' where cidesaivenhist = $id ";
    $excom = pg_query($congc,$com);
    
}
?>