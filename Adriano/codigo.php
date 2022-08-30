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
echo 'Caçador-Geral'.'<br>';
$sql = "select cprohistorico from ahistorico group by cprohistorico order by cprohistorico";
$exsql = pg_query($congc,$sql);
while($row = pg_fetch_assoc( $exsql)){
    $codigo = $row['cprohistorico'];
    $com = "select ccodproduto from aprodutos where ccodproduto = $codigo ";
    $excom = pg_query($congc,$com);
    $rscom=pg_fetch_array($excom);
    $cod=$rscom['ccodproduto'];
    if ($cod == null) {
        echo $codigo.'<br>';
    }
}
echo 'Videira-Geral'.'<br>';
$sql = "select cprohistorico from ahistorico group by cprohistorico order by cprohistorico";
$exsql = pg_query($congv,$sql);
while($row = pg_fetch_assoc( $exsql)){
    $codigo = $row['cprohistorico'];
    $com = "select ccodproduto from aprodutos where ccodproduto = $codigo ";
    $excom = pg_query($congv,$com);
    $rscom=pg_fetch_array($excom);
    $cod=$rscom['ccodproduto'];
    if ($cod == null) {
        echo $codigo.'<br>';
    }
}
echo 'Joinville-Geral'.'<br>';
$sql = "select cprohistorico from ahistorico group by cprohistorico order by cprohistorico";
$exsql = pg_query($congj,$sql);
while($row = pg_fetch_assoc( $exsql)){
    $codigo = $row['cprohistorico'];
    $com = "select ccodproduto from aprodutos where ccodproduto = $codigo ";
    $excom = pg_query($congj,$com);
    $rscom=pg_fetch_array($excom);
    $cod=$rscom['ccodproduto'];
    if ($cod == null) {
        echo $codigo.'<br>';
    }
}
echo 'Caçador-Local'.'<br>';
$sql = "select cprohistorico from ahistorico group by cprohistorico order by cprohistorico";
$exsql = pg_query($conc,$sql);
while($row = pg_fetch_assoc( $exsql)){
    $codigo = $row['cprohistorico'];
    $com = "select ccodproduto from aprodutos where ccodproduto = $codigo ";
    $excom = pg_query($conc,$com);
    $rscom=pg_fetch_array($excom);
    $cod=$rscom['ccodproduto'];
    if ($cod == null) {
        echo $codigo.'<br>';
    }
}
echo 'Videira-Local'.'<br>';
$sql = "select cprohistorico from ahistorico group by cprohistorico order by cprohistorico";
$exsql = pg_query($conv,$sql);
while($row = pg_fetch_assoc( $exsql)){
    $codigo = $row['cprohistorico'];
    $com = "select ccodproduto from aprodutos where ccodproduto = $codigo ";
    $excom = pg_query($conv,$com);
    $rscom=pg_fetch_array($excom);
    $cod=$rscom['ccodproduto'];
    if ($cod == null) {
        echo $codigo.'<br>';
    }
}
echo 'Joinville-Local'.'<br>';
$sql = "select cprohistorico from ahistorico group by cprohistorico order by cprohistorico";
$exsql = pg_query($conj,$sql);
while($row = pg_fetch_assoc( $exsql)){
    $codigo = $row['cprohistorico'];
    $com = "select ccodproduto from aprodutos where ccodproduto = $codigo ";
    $excom = pg_query($conj,$com);
    $rscom=pg_fetch_array($excom);
    $cod=$rscom['ccodproduto'];
    if ($cod == null) {
        echo $codigo.'<br>';
    }
}
echo 'Lages-Local'.'<br>';
$sql = "select cprohistorico from ahistorico group by cprohistorico order by cprohistorico";
$exsql = pg_query($conl,$sql);
while($row = pg_fetch_assoc( $exsql)){
    $codigo = $row['cprohistorico'];
    $com = "select ccodproduto from aprodutos where ccodproduto = $codigo ";
    $excom = pg_query($conl,$com);
    $rscom=pg_fetch_array($excom);
    $cod=$rscom['ccodproduto'];
    if ($cod == null) {
        echo $codigo.'<br>';
    }
}
?>