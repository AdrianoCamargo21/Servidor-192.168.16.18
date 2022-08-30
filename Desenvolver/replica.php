<!DOCTYPE html>
<html>
<head>
<title>Replicador</title>
<center><img src="img/fundo1.jpg"alt="10" heigth ="100px" width="400px" ></center>
</head>
</html>

<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
$voltalogin="<script>window.location='http://192.168.13.2/Desenvolver/replica.php'</script>";
$errocacador="<script>alert('Não Foi possivel Conectar ao BD Troll Caçador');</script>";
$errolages="<script>alert('Não Foi possivel Conectar ao BD Troll Lages');</script>";
$erroVideira="<script>alert('Não Foi possivel Conectar ao BD Troll Videira');</script>";
$erroJoinville="<script>alert('Não Foi possivel Conectar ao BD Troll Joinville');</script>";
$proclog=("select codigo,datal,hora,usuario from log where substituto is null AND tabela IS DISTINCT FROM 'versao_bd' ORDER BY codigo" );
$conta=("SELECT COUNT(*) FROM log where substituto is null AND tabela IS DISTINCT FROM 'versao_bd' ");
set_time_limit(800);





if(!@($conecacador=pg_connect('host=192.168.10.30 dbname=troll port=5430 user=postgres password=ky$14gr@'))) {
    pg_close($conecacador);
    echo "$errocacador";
    echo "$voltalogin";
    exit;
}
$exproclog=pg_query($proclog);
$rsproclog=pg_fetch_array($exproclog);
$log = $rsproclog['codigo'];
$data = $rsproclog['datal'];
$time=$rsproclog['hora'];
$usuario=$rsproclog['usuario'];
$exconta=pg_query($conta);
$rsconta=pg_fetch_array($exconta);
$falta=$rsconta ['count'];

if ($log == ''){
    echo "<br/><b><font color=\"#FF0000\"> Nada P/ Replicar Sistema de Caçador </font></b>";
    echo '<br/>';
}else {
    echo '<br/>Sistema de Caçador'.'----'. $log.'-'."<font color=\"#FF0000\">$data</font>".'-'.$time.'-Usuário:'.$usuario;
    echo "<br/>Falta Copiar:$falta-log</b>";
    echo '<br/>';
}
pg_close($conecacador);

if(!@($conelages=pg_connect('host=192.168.11.2 dbname=Troll port=5431 user=postgres password=ky$14gr@'))) {
    pg_close($conelages);
    echo "$errolages";
    echo "$voltalogin";
    exit;
}
$exproclog=pg_query($proclog);
$rsproclog=pg_fetch_array($exproclog);
$log = $rsproclog['codigo'];
$data = $rsproclog['datal'];
$time=$rsproclog['hora'];
$usuario=$rsproclog['usuario'];
$exconta=pg_query($conta);
$rsconta=pg_fetch_array($exconta);
$falta=$rsconta ['count'];


if ($log == ''){
    echo "<br/><b><font color=\"#FF0000\"> Nada P/ Replicar Sistema de Lages </font></b>";
    echo '<br/>';
}else {
    echo '<br/>Sistema de Lages'.'-------'. $log.'-'."<font color=\"#FF0000\">$data</font>".'-'.$time.'-Usuário:'.$usuario;
    echo "<br/>Falta Copiar:$falta-log</b>";
    echo '<br/>';
}
pg_close($conelages);

if(!@($conevideira=pg_connect('host=192.168.10.99 dbname=troll port=5433 user=postgres password=ky$14gr@'))) {
    pg_close($conevideira);
    echo "$erroVideira";
    echo "$voltalogin";
    exit;
}
$exproclog=pg_query($proclog);
$rsproclog=pg_fetch_array($exproclog);
$log = $rsproclog['codigo'];
$data = $rsproclog['datal'];
$time=$rsproclog['hora'];
$usuario=$rsproclog['usuario'];
$exconta=pg_query($conta);
$rsconta=pg_fetch_array($exconta);
$falta=$rsconta ['count'];


if ($log == ''){
    echo "<br/><b><font color=\"#FF0000\"> Nada P/ Replicar Sistema de Videira </font></b>";
    echo '<br/>';
}else {
    echo '<br/>Sistema de Videira'.'-----'. $log.'-'."<font color=\"#FF0000\">$data</font>".'-'.$time.'-Usuário:'.$usuario;
    echo "<br/>Falta Copiar:$falta-log</b>";
    echo '<br/>';
}
pg_close($conevideira);

if(!@($conejoinville=pg_connect('host=192.168.10.153 dbname=troll port=5434 user=postgres password=ky$14gr@'))) {
    pg_close($conejoinville);
    echo "$erroJoinville";
    echo "$voltalogin";
    exit;
}
$exproclog=pg_query($proclog);
$rsproclog=pg_fetch_array($exproclog);
$log = $rsproclog['codigo'];
$data = $rsproclog['datal'];
$time=$rsproclog['hora'];
$usuario=$rsproclog['usuario'];
$exconta=pg_query($conta);
$rsconta=pg_fetch_array($exconta);
$falta=$rsconta ['count'];


if ($log == ''){
    echo "<br/><b><font color=\"#FF0000\"> Nada P/ Replicar Sistema de Joinville </font></b>";
    echo '<br/>';
}else {
    echo '<br/>Sistema de Joinville'.'----'. $log.'-'."<font color=\"#FF0000\">$data</font>".'-'.$time.'-Usuário:'.$usuario;
    echo "<br/>Falta Copiar:$falta-log</b>";
    echo '<br/>';
}
pg_close($conejoinville);

if(!@($conecacador=pg_connect('host=192.168.10.30 dbname=Modulo_Result port=5430 user=postgres password=ky$14gr@'))) {
    pg_close($conecacador);
    echo "$errocacador";
    echo "$voltalogin";
    exit;
}
$exproclog=pg_query($proclog);
$rsproclog=pg_fetch_array($exproclog);
$log = $rsproclog['codigo'];
$data = $rsproclog['datal'];
$time=$rsproclog['hora'];
$usuario=$rsproclog['usuario'];
$exconta=pg_query($conta);
$rsconta=pg_fetch_array($exconta);
$falta=$rsconta ['count'];


if ($log == ''){
    echo "<br/><b><font color=\"#FF0000\"> Nada P/ Replicar Sistema Result de Caçador </font></b>";
    echo '<br/>';
}else {
    echo '<br/>Sistema Result Caçador'.'----'. $log.'-'."<font color=\"#FF0000\">$data</font>".'-'.$time.'-Usuário:'.$usuario;
    echo "<br/>Falta Copiar:$falta-log</b>";
    echo '<br/>';
    pg_close($conecacador);
}

if(!@($conelages=pg_connect('host=192.168.11.2 dbname=Modulo_Result port=5431 user=postgres password=ky$14gr@'))) {
    pg_close($conelages);
    echo "$errocacador";
    echo "$voltalogin";
    exit;
}
$exproclog=pg_query($proclog);
$rsproclog=pg_fetch_array($exproclog);
$log = $rsproclog['codigo'];
$data = $rsproclog['datal'];
$time=$rsproclog['hora'];
$usuario=$rsproclog['usuario'];
$exconta=pg_query($conta);
$rsconta=pg_fetch_array($exconta);
$falta=$rsconta ['count'];


if ($log == ''){
    echo "<br/><b><font color=\"#FF0000\"> Nada P/ Replicar Sistema Result de Lages </font></b>";
    echo '<br/>';
}else {
    echo '<br/>Sistema Result Lages'.'----'. $log.'-'."<font color=\"#FF0000\">$data</font>".'-'.$time.'-Usuário:'.$usuario;
    echo "<br/>Falta Copiar:$falta-log</b>";
    echo '<br/>';
}
pg_close($conelages);

if(!@($conejoinville=pg_connect('host=192.168.10.153 dbname=result port=5434 user=postgres password=ky$14gr@'))) {
    pg_close($conejoinville);
    echo "$erroJoinville";
    echo "$voltalogin";
    exit;
}
$exproclog=pg_query($proclog);
$rsproclog=pg_fetch_array($exproclog);
$log = $rsproclog['codigo'];
$data = $rsproclog['datal'];
$time=$rsproclog['hora'];
$usuario=$rsproclog['usuario'];
$exconta=pg_query($conta);
$rsconta=pg_fetch_array($exconta);
$falta=$rsconta ['count'];


if ($log == ''){
    echo "<br/><b><font color=\"#FF0000\"> Nada P/ Replicar Sistema Result de Joinville </font></b>";
    echo '<br/>';
}else {
    echo '<br/>Sistema Result Joinville'.'----'. $log.'-'."<font color=\"#FF0000\">$data</font>".'-'.$time.'-Usuário:'.$usuario;
    echo "<br/>Falta Copiar:$falta-log</b>";
    echo '<br/>';
}
pg_close($conejoinville);

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css"></link>
<center><img src="img/replica.png"alt="10" heigth ="100px" width="400px" ></center>
<center><form name = "form1" method= "post" action= "replica.php"></center>
<center><input class="btn btn-green"  type="submit"  value="Recarregar"></center>
</head>
</html>