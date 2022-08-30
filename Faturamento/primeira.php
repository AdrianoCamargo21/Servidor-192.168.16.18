<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<!DOCTYPE html>
<html>
<html lang="pt">
<head>
<link rel="stylesheet" href="css/style.css"></link>
<br><br>
</html>
<?php
session_start();
set_time_limit(0);
include_once("conexao.php");
$volta = "<script>window.location='http://192.168.13.2/Faturamento/'</script>";
$login = $_POST['login'];
if ($login == null) {
    echo "<script>alert('Login Inválido');</script>";
    echo $volta;
    exit;
}
$senha = $_POST['senha'];
if ($senha == null) {
    echo "<script>alert('Senha Inválida');</script>";
    echo $volta;
    exit;
}
$sql = "select *from parametros where usuario ilike '%$login%' and senha = $senha";
$exsql= pg_query($conc,$sql);
$resulsql= pg_fetch_array($exsql);
$id = $resulsql['id'];
if ($id == null) {
    echo "<script>alert('Login ou Senha Inválidos');</script>";
    echo $volta;
    exit;
} 
$_SESSION['login']= $login;
header("Location: http://192.168.13.2/Faturamento/segunda.php");
?>