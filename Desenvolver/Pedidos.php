<!DOCTYPE html>
<html>
<head>
<title>Pedidos</title>
<center><img src="img/Pedidos.png"alt="10" heigth ="100px" width="100px" ></center>
</head>
</html>

<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
$voltalogin="<script>window.location='http://192.168.13.2/Desenvolver/login.html'</script>";
$errocacador="<script>alert('Não Foi possivel Conectar ao BD Troll Caçador');</script>";
$errolages="<script>alert('Não Foi possivel Conectar ao BD Troll Lages');</script>";
$erroVideira="<script>alert('Não Foi possivel Conectar ao BD Troll Videira');</script>";
$erroJoinville="<script>alert('Não Foi possivel Conectar ao BD Troll Joinville');</script>";
$procpd=("select i_pdi_codigo,d_pdi_data_emissao,i_pdi_codigo_emp,i_pdi_numero_pedido from pedidos where i_pdi_status= '0'order by i_pdi_codigo  " );

if(!@($conecacador=pg_connect('host=192.168.10.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@'))) {
    pg_close($conecacador);
    echo "$errocacador";
    echo "$voltalogin";
    exit;
}

$exprocpd=pg_query($procpd);
$rsprocpd=pg_fetch_array($exprocpd);
$ped=$rsprocpd['i_pdi_codigo'];
$data=$rsprocpd['d_pdi_data_emissao'];
$empr=$rsprocpd['i_pdi_codigo_emp'];
$npedido=$rsprocpd['i_pdi_numero_pedido'];

echo "<br/><b><font color=\"#FF0000\"> Lista de Pedidos: </font></b>";
if ($ped <>'') {
    while ($ped <>''){
    echo '<br/>Sistema de Caçador'.'----'.'Nº do Pedido:'.$ped.'-'.'Data:'."<font color=\"#FF0000\">$data</font>".'-'.'Empresa:'.$empr;
    $procpd2=("select i_pdi_codigo,d_pdi_data_emissao,i_pdi_codigo_emp from pedidos where i_pdi_status= '0' and i_pdi_codigo > $ped  order by i_pdi_codigo  " );
    $exprocpd2=pg_query($procpd2);
    $rsprocpd2=pg_fetch_array($exprocpd2);
    $ped=$rsprocpd2['i_pdi_codigo'];
    $data=$rsprocpd2['d_pdi_data_emissao'];
    $empr=$rsprocpd2['i_pdi_codigo_emp'];
    $npedido=$rsprocpd['i_pdi_numero_pedido'];
    if ($ped == '' ){
        break;
    }
    }
} else {
    echo "<br/><b><font color=\"#000000\"> Nenhum Pedido em Caçador </font></b>";
}

pg_close($conecacador);

if(!@($conelages=pg_connect('host=192.168.10.190 dbname=troll_lages port=5430 user=postgres password=ky$14gr@'))) {
    pg_close($conelages);
    echo "$errolages";
    echo "$voltalogin";
    exit;
}
$exprocpd=pg_query($procpd);
$rsprocpd=pg_fetch_array($exprocpd);
$ped=$rsprocpd['i_pdi_codigo'];
$data=$rsprocpd['d_pdi_data_emissao'];
$empr=$rsprocpd['i_pdi_codigo_emp'];
$npedido=$rsprocpd['i_pdi_numero_pedido'];
if ($ped <>'') {
    echo '<br/>Sistema de Lages'.'----'.'Nº do Pedido:'.$ped.'-'.'Data:'."<font color=\"#FF0000\">$data</font>".'-'.'Empresa:'.$empr;
} else {
    echo "<br/><b><font color=\"#000000\"> Nenhum Pedidos em Lages </font></b>";
}
pg_close ($conelages);
if(!@($conevideira=pg_connect('host=192.168.10.190 dbname=troll_videira port=5430 user=postgres password=ky$14gr@'))) {
    pg_close($conevideira);
    echo "$erroVideira";
    echo "$voltalogin";
    exit;
}
$exprocpd=pg_query($procpd);
$rsprocpd=pg_fetch_array($exprocpd);
$ped=$rsprocpd['i_pdi_codigo'];
$data=$rsprocpd['d_pdi_data_emissao'];
$empr=$rsprocpd['i_pdi_codigo_emp'];
$npedido=$rsprocpd['i_pdi_numero_pedido'];
if ($ped <>'') {
    while ($ped <>''){
        echo '<br/>Sistema de Videira'.'----'.'Id do pedido:'.$ped.'---'.'Nº do pedido:'.$npedido.'-'.'Data:'."<font color=\"#FF0000\">$data</font>".'-'.'Empresa:'.$empr;
        $procpd2=("select i_pdi_codigo,d_pdi_data_emissao,i_pdi_codigo_emp from pedidos where i_pdi_status= '0' and i_pdi_codigo > $ped  order by i_pdi_codigo  " );
        $exprocpd2=pg_query($procpd2);
        $rsprocpd2=pg_fetch_array($exprocpd2);
        $ped=$rsprocpd2['i_pdi_codigo'];
        $data=$rsprocpd2['d_pdi_data_emissao'];
        $empr=$rsprocpd2['i_pdi_codigo_emp'];
        $npedido=$rsprocpd['i_pdi_numero_pedido'];
        if ($ped == '' ){
            break;
        }
    }
} else {
    echo "<br/><b><font color=\"#000000\"> Nenhum Pedido em Caçador </font></b>";
}
pg_close($conevideira);
if(!@($conejoinville=pg_connect('host=192.168.10.190 dbname=troll_joinville port=5430 user=postgres password=ky$14gr@'))) {
    pg_close($conejoinville);
    echo "$erroJoinville";
    echo "$voltalogin";
    exit;
}
$exprocpd=pg_query($procpd);
$rsprocpd=pg_fetch_array($exprocpd);
$ped=$rsprocpd['i_pdi_codigo'];
$data=$rsprocpd['d_pdi_data_emissao'];
$empr=$rsprocpd['i_pdi_codigo_emp'];
$npedido=$rsprocpd['i_pdi_numero_pedido'];
if ($ped <>'') {
    echo '<br/>Sistema de Joinville'.'----'.'Nº do Pedido:'.$ped.'-'.'Data:'."<font color=\"#FF0000\">$data</font>".'-'.'Empresa:'.$empr;
}  else {
    echo "<br/><b><font color=\"#000000\"> Nenhum Pedidos em Joinville </font></b>";
    echo "<br><br>";
}
?>
    <!DOCTYPE html>
    <html>
    <head>
    
    
    <link rel="stylesheet" href="css/style.css"></link>
<center><form name = "form1" method= "post" action= "login.php"></center>
<input class="btn btn-red"  type="submit" name="inativar" value="Voltar">
</form>
<center><form name = "form1" method= "post" action= "Pedidos.php"></center>
<input class="btn btn-green"  type="submit" name="inativar" value="Recarregar">


</head>
</html>