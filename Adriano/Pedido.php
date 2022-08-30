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
include_once("conexao.php");
date_default_timezone_set('America/Sao_Paulo');
$time = date('H:i:s');
$dia = date('Y-m-d');
$sql = "select cserserie from tseriesnf where cempserie ='7' and ctiposerie = 4 ";
$exsql = pg_query($conc,$sql);
$rssql = pg_fetch_array($exsql);
$seriepedido = $rssql['cserserie'];
if ($seriepedido ==  null){
    echo "Nenhuma Série esta Cadastrada Para Pedido Favor Informar o Suporte para a Criação Da Mesma";
    exit;
}
$sql = "SELECT (MAX(i_pdi_numero_pedido)+1)as ultimo FROM pedidos where i_pdi_codigo_emp = 5 "; // empresa local
$exsql = pg_query($conc,$sql);
$rssql = pg_fetch_array($exsql);
$ult = $rssql['ultimo'];
$sql = "select (nextval('seque_pedidos'))as id";
$exsql = pg_query($conc, $sql);
$rssql = pg_fetch_array($exsql);
$idep = $rssql['id'];
$sql = "select logar('Importa','1',0);INSERT INTO pedidos
                VALUES ($idep,'$dia',NULL,$seriepedido,$ult,13962,1,1,11,0.00,0.00,0.00,0.00,0.00,1,5,1,0.00,0.00,0,0,0.00,0,
                NULL,1,0,NULL,0.00,0.00,0.00,1,0,0.000,0.000,'','','',0,'Cadastrado Via Slqt',0.00,0,0,NULL,NULL,'$time',1,NULL,0,NULL,'$dia',NULL,0,0,'',0.000,0.000,0,0,0)";
$exsql = pg_query($conc,$sql);
$sql = "select cprohistorico,(cdesproduto)::character varying(200),sum(centhistorico-csaihisotorico)::numeric (18),
	   cpveproduto from ahistorico inner join
	   aprodutos on cprohistorico = ccodproduto where cemphistorico = 5 group by cprohistorico,cpveproduto,cdesproduto
	   having sum(centhistorico-csaihisotorico) > 0 order by cprohistorico desc";
$exsql = pg_query($conc,$sql);
$total = 0.00;
while($row = pg_fetch_assoc( $exsql)){
    $codigo = $row['cprohistorico'];
    $qtdl = $row['sum'];
    $desc = $row['cdesproduto'];
    $venda = $row['cpveproduto'];
    $com = "select sum(centhistorico-csaihisotorico) from ahistorico where cprohistorico = $codigo and cemphistorico in (5,6)
            and cemihistorico < '$dia'";
    $excom = pg_query($congc,$com);
    $rscom = pg_fetch_array($excom);
    $qtdg = $rscom['sum']; 
    if ($qtdg < $qtdl) {
        $dif = $qtdl- $qtdg;
        $tt = $dif * $venda;
        $total =  $total + $tt;
        if ($total > 46000.00) {
            echo $codigo.'-'.$dif.'<br>';
            break;
        }        
        $com="select logar('Importa','1',0);INSERT INTO itens_pedidos
            VALUES (nextval('seque_itens_pedidos'),$codigo,$idep,'$desc',$dif,$venda,$tt,0.00,0.00,0.00,0.00,0.00,0.00,1,0.00,0.00,$venda,0.00,$dif,0.00,0.00,0.00,0.00)";
        $excom = pg_query($conc,$com);
        echo $codigo.'-'.$dif.'<br>';
    }
}
?>