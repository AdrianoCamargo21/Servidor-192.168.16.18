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
//$volta = "<script>window.location='http://192.168.13.2/Adriano/'</script>";
$tipo = $_POST['tipo']; 
if ($tipo == 'F') {
    $datai = $_POST['datai'];
    if ($datai == null) {
        echo "<script>alert('Data Inicial Inválida');</script>";
        echo $volta;
        exit;
    }
    $dataf = $_POST['dataf'];
    if ($dataf == null) {
        echo "<script>alert('Data Final Inválida');</script>";
        echo $volta;
        exit;
    }    
    $congo = $congc;
    $com = "select sum(cpcuproduto*csaihisotorico)::numeric (18,2),cclisaidas,cempresasaidas,ccnpjempresa from ahistorico inner join aprodutos on  cprohistorico = ccodproduto
            inner join asaidas on  cisahistorico = cidesaidas 
            inner join tempresa on cempresasaidas = ccodempresa           
            where cclisaidas in (39498,41238,43575,30702) and cemisaidas >= '$datai' and cemisaidas <= '$dataf'  group by cclisaidas,cempresasaidas,ccnpjempresa order by cclisaidas  ";
    $excom = pg_query($congo,$com);
    while($row = pg_fetch_assoc( $excom)){
        $cliente = $row['cclisaidas'];
        $emps = $row['cempresasaidas'];
        $cnpjo = $row['ccnpjempresa']; 
        $tt = $row['sum'];
        if ($cliente == 39498 or $cliente == 41238 or $cliente == 43575 ) {
            $congd = $congv;
        } else {
            $congd = $congl;
        }
        if ($emps == 1) {
            $serie = 31;
        } elseif ($emps == 3){
            $serie = 32;
        } elseif ($emps == 5){
            $serie = 33;
        } elseif ($emps == 7){
            $serie = 41;
        } else {
            echo "<script>alert('Erro ao Buscar empresa de origem');</script>";
            echo $volta;
            exit;
        }
        $emp = $emps +1;
        $saioper = 54;
        $sql = "select cnomecliente,ccnpj,cinsest,cendereco,ccidade,ccep,cbairro,cuf,cfoneresidencial from aclientes where ccodigo = $cliente";
        $exsql = pg_query($congo,$sql);
        $resulsql = pg_fetch_array($exsql);
        $fant = $resulsql['cnomecliente'];
        $cnpj = $resulsql['ccnpj'];
        $insc = $resulsql['cinsest'];
        $end = $resulsql['cendereco'];
        $cidade = $resulsql['ccidade'];
        $uf = $resulsql['cuf'];
        $cep = $resulsql['cuf'];
        $bairro = $resulsql['cbairro'];
        $fone = $resulsql['cfoneresidencial'];
        $sql = "select Max(sequencia) from anosequencia where serie = '$serie' ";
        $exsql= pg_query($congo,$sql);
        $resulsql = pg_fetch_array($exsql);
        $ult = $resulsql['max'];
        $ult ++;
        $sql = "INSERT INTO anosequencia(serie, sequencia, i_ano_status_emissao)VALUES ($serie,$ult,1)";
        $exsql= pg_query($congo,$sql);
        if (!$exsql){
            echo "<script>alert('Erro ao Inserir Squência na tabela anosequencia');</script>";
            echo $voltalogin;
            exit;
        }
        $sql = "select nextval( 'seque_ahcontas')";
        $exsql = pg_query($congo,$sql);
        $resulsql = pg_fetch_array($exsql);
        $idahc = $resulsql['nextval'];
        $sql = "select Max(i_ahc_ide_transacao_fin) from ahcontas ";
        $exsql= pg_query($congo,$sql);
        $resulsql= pg_fetch_array($exsql);
        $ults = $resulsql['max'];
        $ults ++;
        $sql = "select nextval( 'seque_asaidas')";
        $exsql= pg_query($congo,$sql);
        $resulsql= pg_fetch_array($exsql);
        $ids = $resulsql['nextval'];
        $sql = "INSERT INTO ahcontas VALUES ($idahc,1,'Venda Nota Manual: $ult - Emissor: $serie',0.00,0.00,1,3,5,'','','$dia',NULL,NULL,0,
	           '',$emp,$ids,0,0,'F',1,'',NULL,NULL,1,'IMPORTA',NULL,NULL,0,'','$cliente-$fant',$cliente,0,NULL,0,$ults,0,
	           2,0,0,0,0,0,0,0,1,'','',0,'',NULL,0,0)";
        $exsql = pg_query($congo,$sql);
        $sql = "INSERT INTO asaidas VALUES ($ids,'V','S','$dia','$dia',NULL,0,'5.102', $ult,0,0,$serie,$cliente,0.00,0.00,0.00,
	           0.00,0.00,0.00,0.00,0,1,0,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,1,1,1,1,
	           'IMPORTA','$time','$dia',0,'',NULL,NULL,0.00,0.00,0.00,0.00,0.00,0.00,$emp,0.00,0.000,0.000,0,
	           '','','',0,'',0,0,0,'','$fant','',$cnpj, $insc,'','$end','$cidade', '$uf','$cep','$bairro','',
	           '$fone',0,0,0,$ults,NULL,NULL,NULL,NULL,'','','','','',0.00,0.00,0.00,0,0,0,NULL,'P',0.00,
        	   0.00,0.00,0,0.00,NULL,'',0.00,0.00,NULL,$saioper,0.00,0.00,0,0,0,0,'','E',NULL,NULL,'',NULL,NULL,'N',0.00,
        	   0.00,0.00,0.00,'',0.00,0.00,1,0,'',0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,1,'',
        	   '','',0.00,0.00,0.00,1,'',0,'',0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,'',0,NULL,'',0,0,0,0.00,0,0,NULL,
        	   0,0,'',0,0,'',NULL,NULL,0,0,0,'','',0.00)";
        $exsql = pg_query($congo,$sql);
        if (!$exsql){
            echo "<script>alert('Erro ao Inserir Sáida Do Sistema');</script>";
            echo $voltalogin;
            exit;
        }
        $sql = "update asaidas set cmersaidas= $tt ,cvbrsaidas= $tt,ctotsaidas= $tt,ccussaidas= $tt
	               where cidesaidas =$ids";
        $exsql = pg_query($congo,$sql);
        $sql = "update ahcontas set cvalorcreditohistorico = $tt where idhistorico =$idahc";
        $exsql = pg_query($congo,$sql);
        $sql = "select ccodfornecedor from afornecedor where ccgcfornecedor = '$cnpjo'";
        $exsql = pg_query($congd ,$sql);
        $resulsql = pg_fetch_array($exsql);
        $forncedor = $resulsql['ccodfornecedor'];
        $sql = "select nextval('seque_aentradas')";
        $exsql = pg_query($congd,$sql);
        $resulsql = pg_fetch_array($exsql);
        $id = $resulsql['nextval'];
        $sql = "select max(ccodempresa) from tempresa where ccnpjempresa = '$cnpj' "; 
        $exsql = pg_query($congd ,$sql);
        $resulsql = pg_fetch_array($exsql);
        $empdestino = $resulsql['max'];       
        pg_query($congd,"select logar('COPIA',1,0)");
        $sql = "INSERT INTO aentradas VALUES ($id,'V','$forncedor','$dia','$dia','$ult','$tt','$tt','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','1.152','0.00','0.00'
              ,NULL,'PAGO','0','','$dia','$time',null,null,'0',null,'IMPORTA','','$empdestino','01','','0.00','0.00','','0.00',null,'2','0.00','0.00','0.00','0.00',NULL,'0.00',NULL
              ,'0','0',0.00,0.00,'0.00','0.00',0.00,'$ids',null,0)"; 
        $exsql = pg_query($congd,$sql);
        if (!$exsql){
            echo $sql.'<br>';
            echo "<script>alert('Erro ao Inserir A Entrada No Sistema');</script>";
            $sql = "delete from asaidas where  cidesaidas =$ids";
            $exsql = pg_query($congo,$sql);
            $sql = "delete from ahcontas where idhistorico =$idahc";
            $exsql = pg_query($congo,$sql);
            echo $voltalogin;
            exit;
        }
        $sql = "INSERT INTO aeduplicatas VALUES (nextval('seque_aeduplicatas'),'$id', '1', '$forncedor', 'DUPLICATA',
               '1', '$tt','$dia','0.00','0.00',NULL,'0.00','','NAO','$dia','$time','IMPORTA','1',NULL,NULL,'','0','$empdestino','','','0','0')";
        $exsql = pg_query($congd,$sql);
        if (!$exsql){
            echo $sql.'<br>';
            echo "<script>alert('Erro ao Inserir A Duplicata No Sistema');</script>";
            $sql = "delete from asaidas where  cidesaidas =$ids";
            $exsql = pg_query($congo,$sql);
            $sql = "delete from ahcontas where idhistorico =$idahc";
            $exsql = pg_query($congo,$sql);
            echo $voltalogin;
            exit;
        }      
    }
    echo "<script>alert('Caçador OK');</script>";    
    $congo = $congj;
    $com = "select sum(cpcuproduto*csaihisotorico)::numeric (18,2),cclisaidas,cempresasaidas,ccnpjempresa from ahistorico inner join aprodutos on  cprohistorico = ccodproduto
            inner join asaidas on  cisahistorico = cidesaidas
            inner join tempresa on cempresasaidas = ccodempresa
            where cclisaidas in (39498,41238,43575,30702) and cemisaidas >= '$datai' and cemisaidas <= '$dataf'  group by cclisaidas,cempresasaidas,ccnpjempresa order by cclisaidas  ";
    $excom = pg_query($congo,$com);
    while($row = pg_fetch_assoc( $excom )){
        $cliente = $row['cclisaidas'];
        $emps = $row['cempresasaidas'];
        $cnpjo = $row['ccnpjempresa'];
        $tt = $row['sum'];
        if ($cliente == 39498 or $cliente == 41238 or $cliente == 43575 ) {
            $congd = $congv;
        } else {
            $congd = $congl;
        }
        if ($emps == 9) {
            $serie = 52;
        } elseif ($emps == 3){
            $serie = 51;
        } else {
            echo "<script>alert('Erro ao Buscar empresa de origem');</script>";
            echo $volta;
            exit;
        }
        $emp = $emps +1;
        $saioper = 3;
        $sql = "select cnomecliente,ccnpj,cinsest,cendereco,ccidade,ccep,cbairro,cuf,cfoneresidencial from aclientes where ccodigo = $cliente";
        $exsql = pg_query($congo,$sql);
        $resulsql = pg_fetch_array($exsql);
        $fant = $resulsql['cnomecliente'];
        $cnpj = $resulsql['ccnpj'];
        $insc = $resulsql['cinsest'];
        $end = $resulsql['cendereco'];
        $cidade = $resulsql['ccidade'];
        $uf = $resulsql['cuf'];
        $cep = $resulsql['cuf'];
        $bairro = $resulsql['cbairro'];
        $fone = $resulsql['cfoneresidencial'];
        $sql = "select Max(sequencia) from anosequencia where serie = '$serie' ";
        $exsql= pg_query($congo,$sql);
        $resulsql = pg_fetch_array($exsql);
        $ult = $resulsql['max'];
        $ult ++;
        $sql = "INSERT INTO anosequencia(serie, sequencia, i_ano_status_emissao)VALUES ($serie,$ult,1)";
        $exsql= pg_query($congo,$sql);
        if (!$exsql){            
            echo "<script>alert('Erro ao Inserir Squência na tabela anosequencia');</script>";
            echo $voltalogin;
            exit;
        }
        $sql = "select nextval( 'seque_ahcontas')";
        $exsql = pg_query($congo,$sql);
        $resulsql = pg_fetch_array($exsql);
        $idahc = $resulsql['nextval'];
        $sql = "select Max(i_ahc_ide_transacao_fin) from ahcontas ";
        $exsql= pg_query($congo,$sql);
        $resulsql= pg_fetch_array($exsql);
        $ults = $resulsql['max'];
        $ults ++;
        $sql = "select nextval( 'seque_asaidas')";
        $exsql= pg_query($congo,$sql);
        $resulsql= pg_fetch_array($exsql);
        $ids = $resulsql['nextval'];
        $sql = "INSERT INTO ahcontas VALUES ($idahc,1,'Venda Nota Manual: $ult - Emissor: $serie',0.00,0.00,1,3,5,'','','$dia',NULL,NULL,0,
	           '',$emp,$ids,0,0,'F',1,'',NULL,NULL,1,'IMPORTA',NULL,NULL,0,'','$cliente-$fant',$cliente,0,NULL,0,$ults,0,
	           2,0,0,0,0,0,0,0,1,'','',0,'',NULL,0,0)";
        $exsql = pg_query($congo,$sql);
        $sql = "INSERT INTO asaidas VALUES ($ids,'V','S','$dia','$dia',NULL,0,'5.102', $ult,0,0,$serie,$cliente,0.00,0.00,0.00,
	           0.00,0.00,0.00,0.00,0,1,0,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,1,1,1,1,
	           'IMPORTA','$time','$dia',0,'',NULL,NULL,0.00,0.00,0.00,0.00,0.00,0.00,$emp,0.00,0.000,0.000,0,
	           '','','',0,'',0,0,0,'','$fant','',$cnpj, $insc,'','$end','$cidade', '$uf','$cep','$bairro','',
	           '$fone',0,0,0,$ults,NULL,NULL,NULL,NULL,'','','','','',0.00,0.00,0.00,0,0,0,NULL,'P',0.00,
        	   0.00,0.00,0,0.00,NULL,'',0.00,0.00,NULL,$saioper,0.00,0.00,0,0,0,0,'','E',NULL,NULL,'',NULL,NULL,'N',0.00,
        	   0.00,0.00,0.00,'',0.00,0.00,1,0,'',0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,1,'',
        	   '','',0.00,0.00,0.00,1,'',0,'',0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,'',0,NULL,'',0,0,0,0.00,0,0,NULL,
        	   0,0,'',0,0,'',NULL,NULL,0,0,0,'','',0.00)";
        $exsql = pg_query($congo,$sql);
        if (!$exsql){            
            echo "<script>alert('Erro ao Inserir Sáida Do Sistema');</script>";
            echo $voltalogin;
            exit;
        }
        $sql = "update asaidas set cmersaidas= $tt ,cvbrsaidas= $tt,ctotsaidas= $tt,ccussaidas= $tt
	               where cidesaidas =$ids";
        $exsql = pg_query($congo,$sql);
        $sql = "update ahcontas set cvalorcreditohistorico = $tt where idhistorico =$idahc";
        $exsql = pg_query($congo,$sql);       
        $sql = "select ccodfornecedor from afornecedor where ccgcfornecedor = '$cnpjo'";
        $exsql = pg_query($congd ,$sql);
        $resulsql = pg_fetch_array($exsql);
        $forncedor = $resulsql['ccodfornecedor'];
        $sql = "select nextval('seque_aentradas')";
        $exsql = pg_query($congd,$sql);
        $resulsql = pg_fetch_array($exsql);
        $id = $resulsql['nextval'];
        $sql = "select max(ccodempresa) from tempresa where ccnpjempresa = '$cnpj' ";
        $exsql = pg_query($congd ,$sql);
        $resulsql = pg_fetch_array($exsql);
        $empdestino = $resulsql['max'];
        pg_query($congd,"select logar('COPIA',1,0)");
        $sql = "INSERT INTO aentradas VALUES ($id,'V','$forncedor','$dia','$dia','$ult','$tt','$tt','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','1.152','0.00','0.00'
              ,NULL,'PAGO','0','','$dia','$time',null,null,'0',null,'IMPORTA','','$empdestino','01','','0.00','0.00','','0.00',null,'2','0.00','0.00','0.00','0.00',NULL,'0.00',NULL
              ,'0','0',0.00,0.00,'0.00','0.00',0.00,0.00,0.00,'$ids',null,0)";
        $exsql = pg_query($congd,$sql);
        if (!$exsql){
            echo $sql.'<br>';
            echo "<script>alert('Erro ao Inserir A Entrada No Sistema');</script>";
            $sql = "delete from asaidas where  cidesaidas =$ids";
            $exsql = pg_query($congo,$sql);
            $sql = "delete from ahcontas where idhistorico =$idahc";
            $exsql = pg_query($congo,$sql);
            echo $voltalogin;
            exit;
        }
        $sql = "INSERT INTO aeduplicatas VALUES (nextval('seque_aeduplicatas'),'$id', '1', '$forncedor', 'DUPLICATA',
               '1', '$tt','$dia','0.00','0.00',NULL,'0.00','','NAO','$dia','$time','IMPORTA','1',NULL,NULL,'','0','$empdestino','','','0','0')";
        $exsql = pg_query($congd,$sql);
        if (!$exsql){
            echo $sql.'<br>';            
            echo "<script>alert('Erro ao Inserir A Duplicata No Sistema');</script>";
            $sql = "delete from asaidas where  cidesaidas =$ids";
            $exsql = pg_query($congo,$sql);
            $sql = "delete from ahcontas where idhistorico =$idahc";
            $exsql = pg_query($congo,$sql);
            echo $voltalogin;
            exit;
        }      
    }
    echo "<script>alert('Joinville OK');</script>";
    
        
    $congo = $congv;
    $com = "select sum(cpcuproduto*csaihisotorico)::numeric (18,2),cclisaidas,cempresasaidas,ccnpjempresa from ahistorico inner join aprodutos on  cprohistorico = ccodproduto
        inner join asaidas on  cisahistorico = cidesaidas
        inner join tempresa on cempresasaidas = ccodempresa
        where cclisaidas in (41239,46028,30702) and cemisaidas >= '$datai' and cemisaidas <= '$dataf'  group by cclisaidas,cempresasaidas,ccnpjempresa order by cclisaidas  ";
    $excom = pg_query($congo,$com);
    while($row = pg_fetch_assoc( $excom)){
        $cliente = $row['cclisaidas'];
        $emps = $row['cempresasaidas'];
        $cnpjo = $row['ccnpjempresa'];
        $tt = $row['sum'];
        if ($cliente == 41239 or $cliente == 46028) {
            $congd = $congj;
        } else {
            $congd = $congl;
        }
        if ($emps == 13) {
            $serie = 95;
        } elseif ($emps == 17){
            $serie = 78;
        } elseif ($emps == 15){
            $serie = 91;
        }  else {
            echo "<script>alert('Erro ao Buscar empresa de origem');</script>";
            echo $volta;
            exit;
        }
        $emp = $emps +1;
        $saioper = 54;
        $sql = "select cnomecliente,ccnpj,cinsest,cendereco,ccidade,ccep,cbairro,cuf,cfoneresidencial from aclientes where ccodigo = $cliente";
        $exsql = pg_query($congo,$sql);
        $resulsql = pg_fetch_array($exsql);
        $fant = $resulsql['cnomecliente'];
        $cnpj = $resulsql['ccnpj'];
        $insc = $resulsql['cinsest'];
        $end = $resulsql['cendereco'];
        $cidade = $resulsql['ccidade'];
        $uf = $resulsql['cuf'];
        $cep = $resulsql['cuf'];
        $bairro = $resulsql['cbairro'];
        $fone = $resulsql['cfoneresidencial'];
        $sql = "select Max(sequencia) from anosequencia where serie = '$serie' ";
        $exsql= pg_query($congo,$sql);
        $resulsql = pg_fetch_array($exsql);
        $ult = $resulsql['max'];
        $ult ++;
        $sql = "INSERT INTO anosequencia(serie, sequencia, i_ano_status_emissao)VALUES ($serie,$ult,1)";
        $exsql= pg_query($congo,$sql);
        if (!$exsql){
            $com = "ROLLBACK";
            $excom = pg_query($congo,$com);
            echo "<script>alert('Erro ao Inserir Squência na tabela anosequencia');</script>";
            echo $voltalogin;
            exit;
        }
        $sql = "select nextval( 'seque_ahcontas')";
        $exsql = pg_query($congo,$sql);
        $resulsql = pg_fetch_array($exsql);
        $idahc = $resulsql['nextval'];
        $sql = "select Max(i_ahc_ide_transacao_fin) from ahcontas ";
        $exsql= pg_query($congo,$sql);
        $resulsql= pg_fetch_array($exsql);
        $ults = $resulsql['max'];
        $ults ++;
        $sql = "select nextval( 'seque_asaidas')";
        $exsql= pg_query($congo,$sql);
        $resulsql= pg_fetch_array($exsql);
        $ids = $resulsql['nextval'];
        $sql = "INSERT INTO ahcontas VALUES ($idahc,1,'Venda Nota Manual: $ult - Emissor: $serie',0.00,0.00,1,3,5,'','','$dia',NULL,NULL,0,
           '',$emp,$ids,0,0,'F',1,'',NULL,NULL,1,'IMPORTA',NULL,NULL,0,'','$cliente-$fant',$cliente,0,NULL,0,$ults,0,
           2,0,0,0,0,0,0,0,1,'','',0,'',NULL,0,0)";
        $exsql = pg_query($congo,$sql);
        $sql = "INSERT INTO asaidas VALUES ($ids,'V','S','$dia','$dia',NULL,0,'5.102', $ult,0,0,$serie,$cliente,0.00,0.00,0.00,
           0.00,0.00,0.00,0.00,0,1,0,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,1,1,1,1,
           'IMPORTA','$time','$dia',0,'',NULL,NULL,0.00,0.00,0.00,0.00,0.00,0.00,$emp,0.00,0.000,0.000,0,
           '','','',0,'',0,0,0,'','$fant','',$cnpj, $insc,'','$end','$cidade', '$uf','$cep','$bairro','',
           '$fone',0,0,0,$ults,NULL,NULL,NULL,NULL,'','','','','',0.00,0.00,0.00,0,0,0,NULL,'P',0.00,
    	   0.00,0.00,0,0.00,NULL,'',0.00,0.00,NULL,$saioper,0.00,0.00,0,0,0,0,'','E',NULL,NULL,'',NULL,NULL,'N',0.00,
    	   0.00,0.00,0.00,'',0.00,0.00,1,0,'',0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,1,'',
    	   '','',0.00,0.00,0.00,1,'',0,'',0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,'',0,NULL,'',0,0,0,0.00,0,0,NULL,
    	   0,0,'',0,0,'',NULL,NULL,0,0,0,'','',0.00)";
        $exsql = pg_query($congo,$sql);
        if (!$exsql){            
            echo "<script>alert('Erro ao Inserir Sáida Do Sistema');</script>";
            echo $voltalogin;
            exit;
        }
        $sql = "update asaidas set cmersaidas= $tt ,cvbrsaidas= $tt,ctotsaidas= $tt,ccussaidas= $tt
               where cidesaidas =$ids";
        $exsql = pg_query($congo,$sql);
        $sql = "update ahcontas set cvalorcreditohistorico = $tt where idhistorico =$idahc";
        $exsql = pg_query($congo,$sql);       
        $sql = "select ccodfornecedor from afornecedor where ccgcfornecedor = '$cnpjo'";
        $exsql = pg_query($congd ,$sql);
        $resulsql = pg_fetch_array($exsql);
        $forncedor = $resulsql['ccodfornecedor'];
        $sql = "select nextval('seque_aentradas')";
        $exsql = pg_query($congd,$sql);
        $resulsql = pg_fetch_array($exsql);
        $id = $resulsql['nextval'];
        $sql = "select max(ccodempresa) from tempresa where ccnpjempresa = '$cnpj' ";
        $exsql = pg_query($congd ,$sql);
        $resulsql = pg_fetch_array($exsql);
        $empdestino = $resulsql['max'];
        pg_query($congd,"select logar('COPIA',1,0)");
        $sql = "INSERT INTO aentradas VALUES ($id,'V','$forncedor','$dia','$dia','$ult','$tt','$tt','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','1.152','0.00','0.00'
          ,NULL,'PAGO','0','','$dia','$time',null,null,'0',null,'IMPORTA','','$empdestino','01','','0.00','0.00','','0.00',null,'2','0.00','0.00','0.00','0.00',NULL,'0.00',NULL
          ,'0','0',0.00,0.00,'0.00','0.00',0.00,0.00,'$ids',null,0)";
        $exsql = pg_query($congd,$sql);
        if (!$exsql){
            echo $sql.'<br>';           
            echo "<script>alert('Erro ao Inserir A Entrada No Sistema');</script>";
            $sql = "delete from asaidas where  cidesaidas =$ids";
            $exsql = pg_query($congo,$sql);
            $sql = "delete from ahcontas where idhistorico =$idahc";
            $exsql = pg_query($congo,$sql);
            echo $voltalogin;
            exit;
        }
        $sql = "INSERT INTO aeduplicatas VALUES (nextval('seque_aeduplicatas'),'$id', '1', '$forncedor', 'DUPLICATA',
           '1', '$tt','$dia','0.00','0.00',NULL,'0.00','','NAO','$dia','$time','IMPORTA','1',NULL,NULL,'','0','$empdestino','','','0','0')";
        $exsql = pg_query($congd,$sql);
        if (!$exsql){
            echo $sql.'<br>';
            $com = "ROLLBACK";
            $excom = pg_query($congd,$com);
            echo "<script>alert('Erro ao Inserir A Duplicata No Sistema');</script>";
            $sql = "delete from asaidas where  cidesaidas =$ids";
            $exsql = pg_query($congo,$sql);
            $sql = "delete from ahcontas where idhistorico =$idahc";
            $exsql = pg_query($congo,$sql);
            echo $voltalogin;
            exit;
        }        
    }
    echo "<script>alert('Videira OK');</script>";    
    $congo = $congl;
    $com = "select sum(cpcuproduto*csaihisotorico)::numeric (18,2),cclisaidas,cempresasaidas,ccnpjempresa from ahistorico inner join aprodutos on  cprohistorico = ccodproduto
        inner join asaidas on  cisahistorico = cidesaidas
        inner join tempresa on cempresasaidas = ccodempresa
        where cclisaidas in (41239,46028,39498,41238,43575) and cemisaidas >= '$datai' and cemisaidas <= '$dataf'  group by cclisaidas,cempresasaidas,ccnpjempresa order by cclisaidas  ";
    $excom=pg_query($congo,$com);
    while($row = pg_fetch_assoc( $excom)){
        $cliente = $row['cclisaidas'];
        $emps = $row['cempresasaidas'];
        $cnpjo = $row['ccnpjempresa'];
        $tt = $row['sum'];
        if ($cliente == 41239 or $cliente == 46028) {
            $congd = $congj;
        } else {
            $congd = $congv;
        }
        if ($emps == 1) {
            $serie = 95;
        } elseif ($emps == 17){
            $serie = 78;
        } elseif ($emps == 15){
            $serie = 91;
        }  else {
            echo "<script>alert('Erro ao Buscar empresa de origem');</script>";
            echo $volta;
            exit;
        }
        $emp = $emps +1;
        $saioper = 3;
        $sql = "select cnomecliente,ccnpj,cinsest,cendereco,ccidade,ccep,cbairro,cuf,cfoneresidencial from aclientes where ccodigo = $cliente";
        $exsql = pg_query($congo,$sql);
        $resulsql = pg_fetch_array($exsql);
        $fant = $resulsql['cnomecliente'];
        $cnpj = $resulsql['ccnpj'];
        $insc = $resulsql['cinsest'];
        $end = $resulsql['cendereco'];
        $cidade = $resulsql['ccidade'];
        $uf = $resulsql['cuf'];
        $cep = $resulsql['cuf'];
        $bairro = $resulsql['cbairro'];
        $fone = $resulsql['cfoneresidencial'];
        $sql = "select Max(sequencia) from anosequencia where serie = '$serie' ";
        $exsql= pg_query($congo,$sql);
        $resulsql = pg_fetch_array($exsql);
        $ult = $resulsql['max'];
        $ult ++;
        $sql = "INSERT INTO anosequencia(serie, sequencia, i_ano_status_emissao)VALUES ($serie,$ult,1)";
        $exsql= pg_query($congo,$sql);
        if (!$exsql){
            $com = "ROLLBACK";
            $excom = pg_query($congo,$com);
            echo "<script>alert('Erro ao Inserir Squência na tabela anosequencia');</script>";
            echo $voltalogin;
            exit;
        }
        $sql = "select nextval( 'seque_ahcontas')";
        $exsql = pg_query($congo,$sql);
        $resulsql = pg_fetch_array($exsql);
        $idahc = $resulsql['nextval'];
        $sql = "select Max(i_ahc_ide_transacao_fin) from ahcontas ";
        $exsql= pg_query($congo,$sql);
        $resulsql= pg_fetch_array($exsql);
        $ults = $resulsql['max'];
        $ults ++;
        $sql = "select nextval( 'seque_asaidas')";
        $exsql= pg_query($congo,$sql);
        $resulsql= pg_fetch_array($exsql);
        $ids = $resulsql['nextval'];
        $sql = "INSERT INTO ahcontas VALUES ($idahc,1,'Venda Nota Manual: $ult - Emissor: $serie',0.00,0.00,1,3,5,'','','$dia',NULL,NULL,0,
           '',$emp,$ids,0,0,'F',1,'',NULL,NULL,1,'IMPORTA',NULL,NULL,0,'','$cliente-$fant',$cliente,0,NULL,0,$ults,0,
           2,0,0,0,0,0,0,0,1,'','',0,'',NULL,0,0)";
        $exsql = pg_query($congo,$sql);
        $sql = "INSERT INTO asaidas VALUES ($ids,'V','S','$dia','$dia',NULL,0,'5.102', $ult,0,0,$serie,$cliente,0.00,0.00,0.00,
           0.00,0.00,0.00,0.00,0,1,0,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,1,1,1,1,
           'IMPORTA','$time','$dia',0,'',NULL,NULL,0.00,0.00,0.00,0.00,0.00,0.00,$emp,0.00,0.000,0.000,0,
           '','','',0,'',0,0,0,'','$fant','',$cnpj, $insc,'','$end','$cidade', '$uf','$cep','$bairro','',
           '$fone',0,0,0,$ults,NULL,NULL,NULL,NULL,'','','','','',0.00,0.00,0.00,0,0,0,NULL,'P',0.00,
    	   0.00,0.00,0,0.00,NULL,'',0.00,0.00,NULL,$saioper,0.00,0.00,0,0,0,0,'','E',NULL,NULL,'',NULL,NULL,'N',0.00,
    	   0.00,0.00,0.00,'',0.00,0.00,1,0,'',0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,1,'',
    	   '','',0.00,0.00,0.00,1,'',0,'',0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,'',0,NULL,'',0,0,0,0.00,0,0,NULL,
    	   0,0,'',0,0,'',NULL,NULL,0,0,0,'','',0.00)";
        $exsql = pg_query($congo,$sql);
        if (!$exsql){
            $com = "ROLLBACK";
            $excom = pg_query($congo,$com);
            echo "<script>alert('Erro ao Inserir Sáida Do Sistema');</script>";
            echo $voltalogin;
            exit;
        }
        $sql = "update asaidas set cmersaidas= $tt ,cvbrsaidas= $tt,ctotsaidas= $tt,ccussaidas= $tt
               where cidesaidas =$ids";
        $exsql = pg_query($congo,$sql);
        $sql = "update ahcontas set cvalorcreditohistorico = $tt where idhistorico =$idahc";
        $exsql = pg_query($congo,$sql);
        $sql = "COMMIT";
        $exsql = pg_query($congo,$sql);
        $sql = "BEGIN";
        $exsql = pg_query($congd ,$sql);
        $sql = "select ccodfornecedor from afornecedor where ccgcfornecedor = '$cnpjo'";
        $exsql = pg_query($congd ,$sql);
        $resulsql = pg_fetch_array($exsql);
        $forncedor = $resulsql['ccodfornecedor'];
        $sql = "select nextval('seque_aentradas')";
        $exsql = pg_query($congd,$sql);
        $resulsql = pg_fetch_array($exsql);
        $id = $resulsql['nextval'];
        $sql = "select max(ccodempresa) from tempresa where ccnpjempresa = '$cnpj' ";
        $exsql = pg_query($congd ,$sql);
        $resulsql = pg_fetch_array($exsql);
        $empdestino = $resulsql['max'];
        pg_query($congd,"select logar('COPIA',1,0)");
        $sql = "INSERT INTO aentradas VALUES ($id,'V','$forncedor','$dia','$dia','$ult','$tt','$tt','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','1.152','0.00','0.00'
          ,NULL,'PAGO','0','','$dia','$time',null,null,'0',null,'IMPORTA','','$empdestino','01','','0.00','0.00','','0.00',null,'2','0.00','0.00','0.00','0.00',NULL,'0.00',NULL
          ,'0','0',0.00,0.00,'0.00','0.00',0.00,0.00,'$ids',null,0)";
        $exsql = pg_query($congd,$sql);
        if (!$exsql){
            echo $sql.'<br>';
            $com = "ROLLBACK";
            $excom = pg_query($congd,$com);
            echo "<script>alert('Erro ao Inserir A Entrada No Sistema');</script>";
            $sql = "delete from asaidas where  cidesaidas =$ids";
            $exsql = pg_query($congo,$sql);
            $sql = "delete from ahcontas where idhistorico =$idahc";
            $exsql = pg_query($congo,$sql);
            echo $voltalogin;
            exit;
        }
        $sql = "INSERT INTO aeduplicatas VALUES (nextval('seque_aeduplicatas'),'$id', '1', '$forncedor', 'DUPLICATA',
           '1', '$tt','$dia','0.00','0.00',NULL,'0.00','','NAO','$dia','$time','IMPORTA','1',NULL,NULL,'','0','$empdestino','','','0','0')";
        $exsql = pg_query($congd,$sql);
        if (!$exsql){
            echo $sql.'<br>';
            $com = "ROLLBACK";
            $excom = pg_query($congd,$com);
            echo "<script>alert('Erro ao Inserir A Duplicata No Sistema');</script>";
            $sql = "delete from asaidas where  cidesaidas =$ids";
            $exsql = pg_query($congo,$sql);
            $sql = "delete from ahcontas where idhistorico =$idahc";
            $exsql = pg_query($congo,$sql);
            echo $voltalogin;
            exit;
        }
        $sql = "COMMIT";
        $exsql = pg_query($congd,$sql);
    }
    echo "<script>alert('Lages OK');</script>"; 
    echo $volta; exit;
      

    
}
if ($tipo == 'D') {
    $id = $_POST['id'];
    if ($id == null) {
        echo "<script>alert('Ide Inválido');</script>"; echo $volta; exit;
    }
    $divi = "20.00";
    echo "<table border='2' width='100%' bgcolor=#ffffff >";
    echo "<tr><td><font size=3><strong>Código</strong></font></td>"."<td><font color=\"black\" size=3><strong>Referência</strong></font></td>".
        "<td><font color=\"black\" size=3><strong>Descrição</strong></font></td>"."<td><font color=\"black\" size=3><strong>Departamento</strong></font></td>"."<td><font color=\"black\" size=3><strong>Quantidade</strong></font></td>"."</tr>";
    $sql = "select ccodgrupo,cdesgrupo,sum(centhistorico) from aprodutos inner join ahistorico on ccodproduto = cprohistorico
            inner join tgrupo on  cgruporduto = ccodgrupo where cienhistorico = $id group by ccodgrupo,cdesgrupo order by cdesgrupo";
    $exsql = pg_query($conc,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $cgrupo = $row['ccodgrupo'];
        $dsgrupo = $row['cdesgrupo'];
        $tgrupo = $row['sum'];
        echo "<td><strong><font size=2 color=\"black\">".$dsgrupo."</font></strong></td>\n";
        echo "</tr>\n";
        $com = "select ccodproduto,crefporduto,cdesproduto,cdesdepartamento,sum(centhistorico) from aprodutos inner join ahistorico on ccodproduto = cprohistorico
                inner join  tdepartamento on cdepproduto = ccoddepartamento            
                where cgruporduto = $cgrupo and cienhistorico = $id   
                group by ccodproduto,crefporduto,cdesproduto,cdesdepartamento order by cdesdepartamento,ccodproduto"; 
        $excom = pg_query($conc,$com);
        while ($rom = pg_fetch_assoc($excom)) {
            echo "<td>".$rom['ccodproduto']."</td>\n";
            echo "<td>".$rom['crefporduto']."</td>\n";
            echo "<td><font size=1>".$rom['cdesproduto']."</font></td>\n";
            echo "<td><font size=1>".$rom['cdesdepartamento']."</font></td>\n";
            echo "<td>".number_format( $rom['sum'], 2, ',', '.' )."</td>\n";            
            echo "</tr>\n";            
        }
        echo "<td><strong><font size=3 color=\"black\">".'Total de Produtos'."</font></strong></td>\n";
        echo "<td><strong><font size=3 color=\"black\">".number_format( $tgrupo, 2, ',', '.' )."</font></strong></td>\n";
        $div = $tgrupo - ($tgrupo / 100 * $divi); 
        $div = floor($div);
        $josi = $tgrupo - $div;
        echo "<td><strong><font size=3 color=\"blue\">".number_format( $josi, 2, ',', '.' )."</font></strong></td>\n";
        echo "</tr>\n";
        echo "<td><strong><font size=3 color=\"black\">".''."</font></strong></td>\n";
        echo "</tr>\n";
    }
}
if ($tipo == 'B') {
    /*$sql = "select *from aprodutos inner join ahistorico on ccodproduto = cprohistorico where cemphistorico = '18'
            group by ccodproduto,cidehistorico
            having sum(centhistorico-csaihisotorico) >0
            order by ccodproduto " ;
    */
    $sql ="select *from aprodutos inner join ahistorico on ccodproduto = cprohistorico where cemphistorico = 18 and cqtde18produto > 0 group by ccodproduto,cidehistorico  order by ccodproduto";
    $exsql = pg_query($congc,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $ccodproduto = $row['ccodproduto'];
        $cdesproduto = $row['cdesproduto'];
        $crefporduto = $row['crefporduto'];
        $cpveproduto = $row['cpveproduto'];
        $cpcuproduto = $row['cpcuproduto'];
        $cpcoproduto = $row['cpcoproduto'];
        $cuniproduto = $row['cuniproduto'];
        $com = "select *from tunidadeproduto where d_tun_descricao = '$cuniproduto'";
        $excom = pg_query($conp,$com);
        $rscom = pg_fetch_array($excom);
        $verefica = $rscom['d_tun_descricao'];
        if ($verefica == null) {
            $com = "select *from tunidadeproduto where d_tun_descricao = '$cuniproduto'";
            $excom = pg_query($congc,$com);
            $rscom = pg_fetch_array($excom);
            $unid = $rscom['d_tun_descricao'];
            $comunid = $rscom['d_tun_descricao'];
            $com = "insert into tunidadeproduto values ('$unid','$comunid')";
            $excom = pg_query($conp,$com);
        }
        $ccplproduto = $row['ccplproduto'];        
        $i_apr_codigo_cnm = $row['i_apr_codigo_cnm'];
        $com = "select *from ncm where i_ncm_codigo = '$i_apr_codigo_cnm'";
        $excom = pg_query($conp,$com);
        $rscom = pg_fetch_array($excom);
        $verefica = $rscom['i_ncm_codigo'];
        if ($verefica == null) {
            $com = "select *from ncm where i_ncm_codigo = '$i_apr_codigo_cnm'";
            $excom = pg_query($congc,$com);
            $rscom = pg_fetch_array($excom);
            $ncm = $rscom['i_ncm_codigo'];
            $i_ncm_nome = $rscom['i_ncm_nome'];
            $n_ncm_mva = $rscom['n_ncm_mva'];
            if ($n_ncm_mva == null) {
                $n_ncm_mva = "NULL";
            }
            $n_ncm_mva_reajustavel = $rscom['n_ncm_mva_reajustavel'];
            if ($n_ncm_mva_reajustavel == null) {
                $n_ncm_mva_reajustavel = "NULL";
            }            
            $n_ncm_reducao_mva = $rscom['n_ncm_reducao_mva'];
            if ($n_ncm_reducao_mva == null) {
                $n_ncm_reducao_mva = NULL;
            }
            
            $com = "insert into ncm values ('$ncm','$i_ncm_nome',$n_ncm_mva,$n_ncm_mva_reajustavel,$n_ncm_reducao_mva)";
            $excom = pg_query($conp,$com);
        }
        $com = "select *from aprodutos where cantpoduto = 'A$ccodproduto'";
        $excom = pg_query($conp,$com);
        $rscom = pg_fetch_array($excom);
        $verefica = $rscom['ccodproduto'];
        if ($verefica == null) {
            $com = "BEGIN";
            $excom = pg_query($conp,$com);
            $com = "select nextval('seque_aprodutos')";
            $excom = pg_query($conp,$com);
            $rscom = pg_fetch_array($excom);
            $id = $rscom['nextval'];
            $com = "insert into aprodutos (ccodproduto,ctipproduto,cdesproduto,crefporduto,cpveproduto,cpcuproduto,
            cpcoproduto,cuniproduto,ccplproduto,clinproduto,ctriproduto,csitproduto,cperaltvenda,
            cponestoque,clistaprecos,i_apr_codigo_cnm,copcadproduto,cuscadproduto,cantpoduto,s_apr_iat,s_apr_ippt) values(
            $id,0,'$cdesproduto','$crefporduto',$cpveproduto,$cpcuproduto,$cpcoproduto,'$cuniproduto',
            '$ccplproduto',34,1,0,0,0,0,$i_apr_codigo_cnm,1,'IMPORTA','A$ccodproduto','A','T')";
            $excom = pg_query($conp,$com);
            if (!$excom){
                $query = "ROLLBACK";
                $exquery = pg_query($conp,$query);
                $id = $id -1;
                $query = "SELECT setval('public.seque_aprodutos', '$id', true)";
                $exquery = pg_query($conp,$query);
                echo "<script>alert('Erro Ao Cadastrar o Código: $ccodproduto');</script>";
                echo "$com";
                exit;
            } else {
                $com = "COMMIT";
                $excom = pg_query($conp,$com);
                echo "Código Cadastrado:$ccodproduto <br>";
                $com = "update aprodutos set cantpoduto = 'A$id' where ccodproduto = $ccodproduto ";
                $excom = pg_query($conc,$com);
            } 
        }    
    }
}
if ($tipo == 'H') {
    echo "<table border='10' width='100%' bgcolor=#F5F6CE >";
    echo "<tr><td><font size=3><strong>Id. ahistorico</strong></font></td>"."<td><font color=\"black\" size=3><strong>Código</strong></font></td>".
        "<td><font color=\"black\" size=3><strong>Quantidade</strong></font></td>"."<td><font color=\"black\" size=3><strong>Ide Inezistente</strong></font></td>"."</tr>";
    $sql = "select cidehistorico,cprohistorico,cienhistorico,sum(centhistorico) from ahistorico where ctiphistorico = 'E'
            group by cidehistorico,cprohistorico,cienhistorico order by cprohistorico ";
    echo "<td><strong><font color=\"black\">".'Joinville'."</font></strong></td>\n";
    echo "</tr>\n";
    $exsql = pg_query($congj,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $ccodigo = $row['cprohistorico'];
        $id = $row['cidehistorico'];
        $ide = $row['cienhistorico'];
        $qtd = $row['sum'];
        $com = "select *from aentradas where csidentradas = $ide ";
        $excom = pg_query($congj,$com);
        $rscom = pg_fetch_array($excom);
        $verefica = $rscom['csidentradas'];
        if ($verefica == null) {
            echo "<td>".$id."</td>\n";
            echo "<td>".$ccodigo."</td>\n";
            echo "<td>".$qtd."</td>\n";
            echo "<td>".$qtd."</td>\n";
            echo "<td>".$ide."</td>\n";
            echo "</tr>\n";
        }        
    }
    echo "<td><strong><font color=\"black\">".'Lages'."</font></strong></td>\n";
    echo "</tr>\n";
    $exsql = pg_query($congl,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $ccodigo = $row['cprohistorico'];
        $id = $row['cidehistorico'];
        $ide = $row['cienhistorico'];
        $qtd = $row['sum'];
        $com = "select *from aentradas where csidentradas = $ide ";
        $excom = pg_query($congl,$com);
        $rscom = pg_fetch_array($excom);
        $verefica = $rscom['csidentradas'];
        if ($verefica == null) {
            echo "<td>".$id."</td>\n";
            echo "<td>".$ccodigo."</td>\n";
            echo "<td>".$qtd."</td>\n";
            echo "<td>".$qtd."</td>\n";
            echo "<td>".$ide."</td>\n";
            echo "</tr>\n";
        }
    }
    echo "<td><strong><font color=\"black\">".'Videira'."</font></strong></td>\n";
    echo "</tr>\n";
    $exsql = pg_query($congv,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $ccodigo = $row['cprohistorico'];
        $id = $row['cidehistorico'];
        $ide = $row['cienhistorico'];
        $qtd = $row['sum'];
        $com = "select *from aentradas where csidentradas = $ide ";
        $excom = pg_query($congv,$com);
        $rscom = pg_fetch_array($excom);
        $verefica = $rscom['csidentradas'];
        if ($verefica == null) {
            echo "<td>".$id."</td>\n";
            echo "<td>".$ccodigo."</td>\n";
            echo "<td>".$qtd."</td>\n";
            echo "<td>".$qtd."</td>\n";
            echo "<td>".$ide."</td>\n";
            echo "</tr>\n";
        }
    }
    echo "<td><strong><font color=\"black\">".'Caçador'."</font></strong></td>\n";
    echo "</tr>\n";
    $exsql = pg_query($congc,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $ccodigo = $row['cprohistorico'];
        $id = $row['cidehistorico'];
        $ide = $row['cienhistorico'];
        $qtd = $row['sum'];
        $com = "select *from aentradas where csidentradas = $ide ";
        $excom = pg_query($congc,$com);
        $rscom = pg_fetch_array($excom);
        $verefica = $rscom['csidentradas'];
        if ($verefica == null) {
            echo "<td>".$id."</td>\n";
            echo "<td>".$ccodigo."</td>\n";
            echo "<td>".$qtd."</td>\n";
            echo "<td>".$qtd."</td>\n";
            echo "<td>".$ide."</td>\n";
            echo "</tr>\n";
        }
    }
    echo "</table>";
}




if ($tipo == 'E') {
    $con = $conl;
    $sql = "select *from aclientes  order by ccodigo";
    $exsql = pg_query($con,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $ccodigo = $row['ccodigo'];
        $cnomecliente = $row['cnomecliente'];
        $cnomecliente = str_replace("'","",$cnomecliente);
        $ccpf = $row['ccpf'];
        $ccnpj = $row['ccnpj'];
        if ($ccpf <> null) {
            $com = "select *from aclientes2 where ccpf = '$ccpf'";
        } elseif ($ccnpj <> null) {
            $com = "select *from aclientes2 where ccnpj = '$ccnpj'";
        } elseif ($cnomecliente <> null) {
            $com = "select ccodigo from aclientes2 where cnomecliente  ilike '%$cnomecliente%'"; 
        }
        $excom = pg_query($con,$com);
        $rscom = pg_fetch_array($excom);
        $verefica = $rscom['ccodigo'];
        if ($verefica == null) {
            echo "<script>alert('Cliente: $ccodigo Não Cadastrado na Tabela 02 ');</script>";
            exit;
        } else {
            $com = "update aclientes2 set ccodantigo = $ccodigo where ccodigo = $verefica";
            $excom = pg_query($con,$com);
            echo "Cliente Veinculado $verefica - $ccodigo <br>";
            
        }
    }
}


if ($tipo == 'I') {
    $destino = $conl;
    $origem = $conc;
    $sql = "select *from aclientes where ccodigo = 13962 order by ccodigo";
    $exsql = pg_query($origem,$sql);
    while ($row = pg_fetch_assoc($exsql)) {       
        $ccodigo = $row['ccodigo'];
        $cnomecliente = $row['cnomecliente'];
        $cnomecliente = str_replace("'","",$cnomecliente);
        $csexo = $row['csexo'];
        $cnascimento  = $row['cnascimento'];
        if ($cnascimento == null){
            $cnascimento = 'NULL';
        } else {
            $cnascimento = "'$cnascimento'";
        }
        $cestadocivil = $row['cestadocivil'];
        $cmae = $row['cmae'];
        $cmae = str_replace("'","",$cmae);
        $cpai = $row['cpai'];
        $cpai = str_replace("'","",$cpai);
        $cdatacadastro = $row['cdatacadastro'];
        if ($cdatacadastro == null) {
            $cdatacadastro = 'NULL';
        } else {
            $cdatacadastro = "'$cdatacadastro'";
        }
        $cpessoa = $row['cpessoa'];
        $cdocumento = $row['cdocumento'];
        $ccpf = $row['ccpf'];
        $ccnpj = $row['ccnpj'];
        $cinsest = $row['cinsest'];
        $ctituloeleitor = $row['ctituloeleitor'];
        $ctituloeleitor = str_replace("'","",$ctituloeleitor);
        $cnaturalidadde = $row['cnaturalidadde'];
        $cnaturalidadde = str_replace("'","",$cnaturalidadde);
        $cestadonatural = $row['cestadonatural'];
        $cendereco = $row['cendereco'];
        $cendereco = str_replace("'","",$cendereco); 
        $cbairro = $row['cbairro'];
        $cproximidade = $row['cproximidade'];
        $cproximidade = str_replace("'","",$cproximidade);
        $ccidade = $row['ccidade'];$ccep = $row['ccep'];$cuf = $row['cuf'];$cfoneresidencial = $row['cfoneresidencial'];
        $cfonecomercial = $row['cfonecomercial'];$cfonecelular = $row['cfonecelular'];
        $cemail = $row['cemail'];
        $cemail = str_replace("'","",$cemail);
        $chomepage = $row['chomepage'];
        $cconjuge = $row['cconjuge'];
        $cconjuge = str_replace("'","",$cconjuge);
        $cnasconjuge = $row['cnasconjuge'];
        if ($cnasconjuge == null){
            $cnasconjuge = 'NULL';
        } else {
            $cnasconjuge = "'$cnasconjuge'";
        }
        $cmaeconjuge = $row['cmaeconjuge'];
        $cmaeconjuge = str_replace("'","",$cmaeconjuge); 
        $cpaiconjuge = $row['cpaiconjuge'];
        $cpaiconjuge = str_replace("'","",$cpaiconjuge); 
        $cdocconjuge = $row['cdocconjuge'];$ccpfconjuge = $row['ccpfconjuge'];
        $cloctraconjuge = $row['cloctraconjuge'];
        $cloctraconjuge = str_replace("'","",$cloctraconjuge);
        $cendtraconjuge = $row['cendtraconjuge'];
        $cendtraconjuge = str_replace("'","",$cendtraconjuge);
        $ctelconjuge = $row['ctelconjuge'];$ccelconjuge = $row['ccelconjuge'];
        $cproconjuge = $row['cproconjuge'];
        if ($cproconjuge == null) {
            $cproconjuge = 'NULL';
        }
        $crdaconjuge = $row['crdaconjuge'];
        if ($crdaconjuge == null) {
            $crdaconjuge = 'NULL';
        }
        $cadmconjuge = $row['cadmconjuge'];
        if ($cadmconjuge == null){
            $cadmconjuge = 'NULL';
        } else {
            $cadmconjuge = "'$cadmconjuge'";
        }
        $cnatconjuge = $row['cnatconjuge'];
        $ctracliente = $row['ctracliente'];
        $ctracliente = str_replace("'","",$ctracliente);
        $cendtracliente = $row['cendtracliente'];
        $cendtracliente = str_replace("'","",$cendtracliente); 
        $crdacliente = $row['crdacliente'];
        if ($crdacliente == null) {
            $crdacliente = 'NULL';
        }
        $cprofissaocliente = $row['cprofissaocliente'];
        if ($cprofissaocliente == null) {
            $cprofissaocliente = 'NULL';
        }
        $procliente = $row['procliente'];
        if ($procliente == null){
            $procliente = 'NULL';
        }        
        $coutrencliente = $row['coutrencliente'];$ccrecliente = $row['ccrecliente'];
        $climcarcliente = $row['climcarcliente'];
        if ($climcarcliente == null) {
            $climcarcliente = 'NULL';
        }
        $cfatmedcliente = $row['cfatmedcliente'];
        if ($cfatmedcliente == null) {
            $cfatmedcliente = 'NULL';
        }
        $cchecliente = $row['cchecliente'];$climchecliente = $row['climchecliente'];
        $clojrefcliente = $row['clojrefcliente'];
        $clojrefcliente = str_replace("'","",$clojrefcliente); 
        $cultcomcliente = $row['cultcomcliente'];
        if ($cultcomcliente == null){
            $cultcomcliente = 'NULL';
        } else {
            $cultcomcliente = "'$cultcomcliente'";
        }
        $ctipcliente = $row['ctipcliente'];
        if ($ctipcliente == null){
            $ctipcliente = 'NULL';
        } else {
            $ctipcliente = "'$ctipcliente'";
        }
        $cptucliente = $row['cptucliente'];
        if ($cptucliente == null) {
            $cptucliente = 'NULL';
        }
        $ccodspccliente = $row['ccodspccliente'];
        if ($ccodspccliente == null) {
            $ccodspccliente = 'NULL';
        }
        $cendpagcliente = $row['cendpagcliente'];$ccidpagcliente = $row['ccidpagcliente'];
        $cestpagcliente = $row['cestpagcliente'];$cceppagcliente = $row['cceppagcliente'];$cemiavicliente = $row['cemiavicliente'];$cenvspccliente = $row['cenvspccliente'];
        $cavicobcliente = $row['cavicobcliente']; $cendcorcliente = $row['cendcorcliente'];$cblovencliente = $row['cblovencliente'];
        $cdatavipgtcliente = $row['cdatavipgtcliente'];
        if ($cdatavipgtcliente == null){
            $cdatavipgtcliente = 'NULL';
        } else {
            $cdatavipgtcliente = "'$cdatavipgtcliente'";
        }
        $ccasprocliente = $row['ccasprocliente'];
        $cterprocliente = $row['cterprocliente'];
        $ccarprocliente = $row['ccarprocliente'];
        $coutbencliente = $row['coutbencliente'];
        $cdesoutbencliente = $row['cdesoutbencliente'];
        $ccodctbcliente = $row['ccodctbcliente'];
        if ($ccodctbcliente == null){
            $ccodctbcliente = 'NULL';
        }        
        $catlcadcliente = $row['catlcadcliente'];
        if ($catlcadcliente == null){
            $catlcadcliente = 'NULL';
        } else {
            $catlcadcliente = "'$catlcadcliente'";
        }
        $cvencadcliente = $row['cvencadcliente'];
        if ($cvencadcliente == null){
            $cvencadcliente = 'NULL';
        } else {
            $cvencadcliente = "'$cvencadcliente'";
        }
        $cfotcliente = $row['cfotcliente'];
        $casscliente = $row['casscliente'];
        $cdoccliente = $row['cdoccliente'];
        $canicliente = $row['canicliente'];
        $cceptabcliente = $row['cceptabcliente'];
        $cregcliente = $row['cregcliente'];
        if ($cregcliente == null){
            $cregcliente = 'NULL';
        }
        $ccodconvenio = $row['ccodconvenio'];
        if ($ccodconvenio == null){
            $ccodconvenio = 'NULL';
        }
        $ctipimpcliente = $row['ctipimpcliente'];
        if ($ctipimpcliente == null){
            $ctipimpcliente = 'NULL';
        }
        $cluzcliente = $row['cluzcliente'];
        $cextin01 = $row['cextin01'];
        $ccarga01 = $row['ccarga01'];
        if ($ccarga01 == null){
            $ccarga01 = 'NULL';
        }
        $crecarga01 = $row['crecarga01'];
        if ($crecarga01 == null){
            $crecarga01 = 'NULL';
        }
        $cextin02 = $row['cextin02'];
        $ccarga02 = $row['ccarga02'];
        if ($ccarga02 == null){
            $ccarga02 = 'NULL';
        }
        $crecarga02 = $row['crecarga02'];
        if ($crecarga02 == null){
            $crecarga02 = 'NULL';
        }
        $cextin03 = $row['cextin03'];
        $ccarga03 = $row['ccarga03'];
        if ($ccarga03 == null){
            $ccarga03 = 'NULL';
        }
        $crecarga03 = $row['crecarga03'];
        if ($crecarga03 == null){
            $crecarga03 = 'NULL';
        }
        $cextin04 = $row['cextin04'];
        $ccarga04 = $row['ccarga04'];
        if ($ccarga04 == null){
            $ccarga04 = 'NULL';
        }
        $crecarga04 = $row['crecarga04'];
        if ($crecarga04 == null){
            $crecarga04 = 'NULL';
        }
        $cextin05 = $row['cextin05'];
        $ccarga05 = $row['ccarga05'];
        if ($ccarga05 == null){
            $ccarga05 = 'NULL';
        }
        $crecarga05 = $row['crecarga05'];
        if ($crecarga05 == null){
            $crecarga05 = 'NULL';
        }
        $cextin06 = $row['cextin06'];
        $ccarga06 = $row['ccarga06'];
        if ($ccarga06 == null){
            $ccarga06 = 'NULL';
        }
        $crecarga06 = $row['crecarga06'];
        if ($crecarga06 == null){
            $crecarga06 = 'NULL';
        }
        $cextin07 = $row['cextin07'];
        $ccarga07 = $row['ccarga07'];
        if ($ccarga07 == null){
            $ccarga07 = 'NULL';
        }
        $crecarga07 = $row['crecarga07'];
        if ($crecarga07 == null){
            $crecarga07 = 'NULL';
        }
        $cextin08 = $row['cextin08'];
        $ccarga08 = $row['ccarga08'];
        if ($ccarga08 == null){
            $ccarga08 = 'NULL';
        }
        $crecarga08 = $row['crecarga08'];
        if ($crecarga08 == null){
            $crecarga08 = 'NULL';
        }
        $cextin09 = $row['cextin09'];
        $ccarga09 = $row['ccarga09'];
        if ($ccarga09 == null){
            $ccarga09 = 'NULL';
        }
        $crecarga09 = $row['crecarga09'];
        if ($crecarga09 == null){
            $crecarga09 = 'NULL';
        }
        $cextin10 = $row['cextin10'];
        $ccarga10 = $row['ccarga10'];
        if ($ccarga10 == null){
            $ccarga10 = 'NULL';
        }
        $crecarga10 = $row['crecarga10'];
        if ($crecarga10 == null){
            $crecarga10 = 'NULL';
        }
        $ccodantigo = $row['ccodantigo'];
        if ($ccodantigo == null) {
            $ccodantigo = 'NULL';
        }
        
        $cobsclientes = $row['cobsclientes'];
        $cobsclientes = str_replace("'","",$cobsclientes); 
        $senha_net = $row['senha_net'];
        $nivel_net = $row['nivel_net'];
        $ativacao_net = $row['ativacao_net'];
        if ($ativacao_net == null){
            $ativacao_net = 'NULL';
        }
        $bloqueio_net = $row['bloqueio_net'];
        if ($bloqueio_net == null){
            $bloqueio_net = 'NULL';
        }
        $cod_fotografo = $row['cod_fotografo'];
        if ($cod_fotografo == null) {
            $cod_fotografo = 'NULL';
        }
        $forma_cadastro = $row['forma_cadastro'];
        if ($forma_cadastro == null) {
            $forma_cadastro = 'NULL';
        }
        $dependente_1 = $row['dependente_1'];
        $dependente_2 = $row['dependente_2'];
        $dependente_3 = $row['dependente_3'];
        $dependente_4 = $row['dependente_4'];
        $dependente_5 = $row['dependente_5'];
        $dependente_6 = $row['dependente_6'];
        $dependente_7 = $row['dependente_7'];
        $dependente_8 = $row['dependente_8'];
        $dependente_9 = $row['dependente_9'];
        $dependente_10 = $row['dependente_10'];
        $valor_mensal = $row['valor_mensal'];
        if ($valor_mensal == null) {
            $valor_mensal = 'NULL';
        }
        $dat_inc_celesc = $row['dat_inc_celesc'];
        if ($dat_inc_celesc == null){
            $dat_inc_celesc = 'NULL';
        } else {
            $dat_inc_celesc = "'$dat_inc_celesc'";
        }
        $dat_alt_celesc = $row['dat_alt_celesc'];
        if ($dat_alt_celesc == null){
            $dat_alt_celesc = 'NULL';
        } else {
            $dat_alt_celesc = "'$dat_alt_celesc'";
        }
        $dat_exc_celesc = $row['dat_exc_celesc'];
        if ($dat_exc_celesc == null){
            $dat_exc_celesc = 'NULL';
        } else {
            $dat_exc_celesc = "'$dat_exc_celesc'";
        }
        $mot_bloq_venda = $row['mot_bloq_venda'];
        $mot_bloq_venda = str_replace("'","",$mot_bloq_venda);
        $limite_credito = $row['limite_credito'];
        $ati_ult_limite = $row['ati_ult_limite'];
        if ($ati_ult_limite == null) {
            $ati_ult_limite = 'NULL';
        }
        $contatos_cliente = $row['contatos_cliente'];
        $desconto_cliente = $row['desconto_cliente'];
        if ($desconto_cliente == null) {
            $desconto_cliente = 'NULL';
        }
        $fax_cliente = $row['fax_cliente'];
        $bloq_vendas_aprazo = $row['bloq_vendas_aprazo'];
        if ($bloq_vendas_aprazo == null) {
            $bloq_vendas_aprazo = 'NULL';
        }
        $i_acl_codigo_ven_foto = $row['i_acl_codigo_ven_foto'];
        if ($i_acl_codigo_ven_foto == null) {
            $i_acl_codigo_ven_foto = 'NULL';
        }
        $i_acl_tab_preco = $row['i_acl_tab_preco'];
        if ($i_acl_tab_preco == null) {
            $i_acl_tab_preco = 'NULL';
        }        
        $i_acl_perc_aplicar_venda = $row['i_acl_perc_aplicar_venda'];
        if ($i_acl_perc_aplicar_venda == null) {
            $i_acl_perc_aplicar_venda = 'NULL';
        }
        $i_cond_pagto_padrao = $row['i_cond_pagto_padrao'];
        if ($i_cond_pagto_padrao == null){
            $i_cond_pagto_padrao = 'NULL';
        }
        $s_acl_outro_fone = $row['s_acl_outro_fone'];
        $s_acl_outro_fone2 = $row['s_acl_outro_fone2'];
        $s_acl_msn = $row['s_acl_msn'];
        $s_acl_skype = $row['s_acl_skype'];
        $i_acl_codigo_fon = $row['i_acl_codigo_fon'];
        if ($i_acl_codigo_fon == null){
            $i_acl_codigo_fon = 'NULL';
        }
        $d_acl_data_casamento = $row['d_acl_data_casamento'];
        if ($d_acl_data_casamento == null){
            $d_acl_data_casamento = 'NULL';
        } else {
            $d_acl_data_casamento = "'$d_acl_data_casamento'";
        }            
        $n_acl_limite_cartao_fidelidade = $row['n_acl_limite_cartao_fidelidade'];
        if ($n_acl_limite_cartao_fidelidade == null) {
            $n_acl_limite_cartao_fidelidade = 'NULL';
        }
        $d_acl_entrada_cartao_fid = $row['d_acl_entrada_cartao_fid'];
        if ($d_acl_entrada_cartao_fid == null){
            $d_acl_entrada_cartao_fid = 'NULL';
        } else {
            $d_acl_entrada_cartao_fid = "'$d_acl_entrada_cartao_fid'";
        }
        $d_acl_bloqueio_cartao_fid = $row['d_acl_bloqueio_cartao_fid'];
        if ($d_acl_bloqueio_cartao_fid == null){
            $d_acl_bloqueio_cartao_fid = 'NULL';
        } else {
            $d_acl_bloqueio_cartao_fid = "'$d_acl_bloqueio_cartao_fid'";
        }            
        $d_acl_entrega_cartao_fid = $row['d_acl_entrega_cartao_fid'];
        if ($d_acl_entrega_cartao_fid == null){
            $d_acl_entrega_cartao_fid = 'NULL';
        } else {
            $d_acl_entrega_cartao_fid = "'$d_acl_entrega_cartao_fid'";
        }
        $d_acl_admissao = $row['d_acl_admissao'];
        if ($d_acl_admissao == null){
            $d_acl_admissao = 'NULL';
        } else {
            $d_acl_admissao = "'$d_acl_admissao'";
        }
        $s_acl_estatistica = $row['s_acl_estatistica'];
        $s_acl_estatistica = str_replace("'","",$s_acl_estatistica); 
        $n_acl_pontos_cliente = $row['n_acl_pontos_cliente'];
        $n_acl_bloq_gerar_cred_venda = $row['n_acl_bloq_gerar_cred_venda'];
        $n_acl_bloq_nf_dev_venda = $row['n_acl_bloq_nf_dev_venda'];
        $s_acl_numero_cartao_fidelidade = $row['s_acl_numero_cartao_fidelidade'];
        $s_acl_logradouro = $row['s_acl_logradouro'];
        $s_acl_denominacao_social = $row['s_acl_denominacao_social'];
        $s_acl_denominacao_social  = str_replace("'","",$s_acl_denominacao_social); 
        $i_acl_situacao_cliente = $row['i_acl_situacao_cliente'];
        $s_acl_usuario_windows = $row['s_acl_usuario_windows'];
        $s_acl_senha_windows = $row['s_acl_senha_windows'];
        $s_acl_url_logmein = $row['s_acl_url_logmein'];
        $s_acl_senha_logmein = $row['s_acl_senha_logmein'];
        $s_acl_nome_responsavel = $row['s_acl_nome_responsavel'];
        $i_acl_codigo_parceiro_prc = $row['i_acl_codigo_parceiro_prc'];
        if ($i_acl_codigo_parceiro_prc == null){
            $i_acl_codigo_parceiro_prc = 'NULL';
        }
        $i_acl_bloqueia_senha = $row['i_acl_bloqueia_senha'];
        $s_acl_insc_municipal = $row['s_acl_insc_municipal'];
        $i_acl_codigo_ram = $row['i_acl_codigo_ram'];
        if ($i_acl_codigo_ram == null){
            $i_acl_codigo_ram = 'NULL';
        }
        $i_acl_tipo_cliente_juridico = $row['i_acl_tipo_cliente_juridico'];
        $i_acl_modelo_cliente = $row['i_acl_modelo_cliente'];
        $i_acl_codigo_acl = $row['i_acl_codigo_acl'];
        if ($i_acl_codigo_acl == null){
            $i_acl_codigo_acl = 'NULL';
        }
        $i_acl_susp_pis_cofins = $row['i_acl_susp_pis_cofins'];
        $i_acl_icms_diferido = $row['i_acl_icms_diferido'];
        $s_acl_obs_parametros = $row['s_acl_obs_parametros'];
        $i_acl_endereco_numero = $row['i_acl_endereco_numero'];
        if ($i_acl_endereco_numero == null) {
            $i_acl_endereco_numero = 'NULL';
        }
        $i_acl_calculo_rs = $row['i_acl_calculo_rs'];
        if ($i_acl_calculo_rs == null) {
            $i_acl_calculo_rs = 'NULL';
        }
        $i_acl_concessao_icms_st = $row['i_acl_concessao_icms_st'];
        $s_acl_endereco_entrega = $row['s_acl_endereco_entrega'];
        $s_acl_bairro_entrega = $row['s_acl_bairro_entrega'];
        $i_acl_cep_entrega = $row['i_acl_cep_entrega'];
        $s_acl_complemento_entrega = $row['s_acl_complemento_entrega'];
        $s_acl_bairro_cobranca = $row['s_acl_bairro_cobranca'];
        $i_acl_tipo_mercado = $row['i_acl_tipo_mercado'];
        $n_acl_valor_adicional_celesc = $row['n_acl_valor_adicional_celesc'];
        $n_acl_valor_adesao_celesc = $row['n_acl_valor_adesao_celesc'];
        $i_acl_qtde_vezes_adesao_celesc = $row['i_acl_qtde_vezes_adesao_celesc'];
        if ($i_acl_qtde_vezes_adesao_celesc == null){
            $i_acl_qtde_vezes_adesao_celesc = 'NULL';
        }
        $i_acl_contador_adesao_celesc = $row['i_acl_contador_adesao_celesc'];
        if ($i_acl_contador_adesao_celesc == null){
            $i_acl_contador_adesao_celesc = 'NULL';
        }
        $i_acl_codigo_tco1 = $row['i_acl_codigo_tco1'];
        if ($i_acl_codigo_tco1 == null){
            $i_acl_codigo_tco1 = 'NULL';
        }
        $s_acl_mensagem_nfe = $row['s_acl_mensagem_nfe'];
        $i_acl_possui_internet = $row['i_acl_possui_internet'];
        $i_acl_suspensao_retencao = $row['i_acl_suspensao_retencao'];
        $i_acl_suspensao_iss = $row['i_acl_suspensao_iss'];
        $i_acl_codigo_tgc = $row['i_acl_codigo_tgc'];
        if ($i_acl_codigo_tgc == null){
            $i_acl_codigo_tgc = 'NULL';
        }
        $i_acl_codigo_tcc = $row['i_acl_codigo_tcc'];
        if ($i_acl_codigo_tcc == null){
            $i_acl_codigo_tcc = 'NULL';
        }
        $s_acl_inscricao_rural = $row['s_acl_inscricao_rural'];
        if ($s_acl_inscricao_rural == null) {
            $s_acl_inscricao_rural = 'NULL';
        }
        $i_acl_permite_gerar_senha_offline = $row['i_acl_permite_gerar_senha_offline'];
        if ($i_acl_permite_gerar_senha_offline == null){
            $i_acl_permite_gerar_senha_offline = 'NULL';
        }
        $i_acl_possui_tabela_preco = $row['i_acl_possui_tabela_preco'];
        $i_acl_seq_unica = $row['i_acl_seq_unica'];
        $s_acl_complemento = $row['s_acl_complemento'];
        $s_acl_msg_venda = $row['s_acl_msg_venda'];
        $i_acl_permit_credito_st_ret = $row['i_acl_permit_credito_st_ret'];
        if ($i_acl_permit_credito_st_ret == null){
            $i_acl_permit_credito_st_ret = 'NULL';
        }
        $n_acl_limite_mensal = $row['n_acl_limite_mensal'];
        if ($n_acl_limite_mensal == null){
            $n_acl_limite_mensal = 'NULL';
        }
        $s_acl_tipo_logradouro = $row['s_acl_tipo_logradouro'];
        $s_acl_tipo_bairro = $row['s_acl_tipo_bairro'];
        $s_acl_passaporte = $row['s_acl_passaporte'];
        $s_acl_uf_entrega = $row['s_acl_uf_entrega'];
        $i_acl_calcula_imp_por_entrega = $row['i_acl_calcula_imp_por_entrega'];
        if ($i_acl_calcula_imp_por_entrega == null){
            $i_acl_calcula_imp_por_entrega = 'NULL';
        }
        $s_acl_preferencia_perfil = $row['s_acl_preferencia_perfil'];
        $s_acl_preferencia_perfil = str_replace("'","",$s_acl_preferencia_perfil); 
        if ($ccpf <> null) {
            $com = "select *from aclientes2 where ccpf = '$ccpf'";            
        } elseif ($ccnpj <> null) {
            $com = "select *from aclientes2 where ccnpj = '$ccnpj'";            
        } elseif ($cnomecliente <> null) {
            $com = "select ccodigo from aclientes2 where cnomecliente  ilike '%$cnomecliente%'";            
        }
        //$com = "select *from aclientes2 where ccpf = '1'";
        $excom = pg_query($destino,$com);
        $rscom = pg_fetch_array($excom);
        $verefica = $rscom['ccodigo'];        
        if ($verefica == null) {
            $com = "BEGIN";
            $excom = pg_query($destino,$com);
            if ($ccep <> null) {
                $com = "select ccodcep from tcep where ccodcep = '$ccep'"; 
                $excom = pg_query($destino,$com);
                $rscom = pg_fetch_array($excom);
                $verefica = $rscom['ccodcep'];
                if ($verefica == null) {
                    $com = "select *from tcep where ccodcep = '$ccep' ";
                    $excom = pg_query($origem,$com);
                    $rscom = pg_fetch_array($excom);
                    $ccodcep = $rscom['ccodcep'];
                    if ($ccodcep <> null) {
                        $ccidcep = $rscom['ccidcep'];
                        $cufcep = $rscom['cufcep'];
                        $cbaicep = $rscom['cbaicep'];
                        $ctipcep = $rscom['ctipcep'];
                        $i_tce_codigo_cidade = $rscom['i_tce_codigo_cidade'];
                        if ($i_tce_codigo_cidade == null) {
                            $i_tce_codigo_cidade = "NULL";
                        }
                        $i_tce_codigo_uf = $rscom['i_tce_codigo_uf'];
                        if ($i_tce_codigo_uf == null) {
                            $i_tce_codigo_uf = "NULL";
                        }
                        $i_tce_codigo_pais = $rscom['i_tce_codigo_pais'];
                        if ($i_tce_codigo_pais == null) {
                            $i_tce_codigo_pais = "NULL";
                        }
                        $s_tce_nome_pais = $rscom['s_tce_nome_pais'];
                        $i_tce_tipo_cep = $rscom['i_tce_tipo_cep'];
                        $s_tce_logradouro = $rscom['s_tce_logradouro'];
                        $com = "insert into tcep values ('$ccodcep','$ccidcep','$cufcep',
                        '$cbaicep',$ctipcep,$i_tce_codigo_cidade,$i_tce_codigo_uf,$i_tce_codigo_pais,
                        '$s_tce_nome_pais',$i_tce_tipo_cep,'$s_tce_logradouro')";
                        $excom = pg_query($destino,$com);
                        if (!$excom){
                            $query = "ROLLBACK";
                            $exquery = pg_query($destino,$query);
                            echo "<script>alert('Erro Ao Cadastrar o Cep : $ccep');</script>";
                            echo "$com";
                            exit;
                        }
                    }
                    else {
                        $ccep = '00000000';
                    }
                }
            }                        
            if ($procliente <> 0 and $procliente <> 'NULL') {
                $com = "select *from tprofissao where codprofissao = $procliente"; 
                $excom = pg_query($destino,$com);
                $rscom = pg_fetch_array($excom);
                $codprofissao = $rscom['codprofissao'];
                $desprofissao = $rscom['desprofissao'];
                $diaprofissao = $rscom['diaprofissao'];
                $com = "select codprofissao from tprofissao where  desprofissao ilike'%$desprofissao%'";
                $excom = pg_query($destino,$com);
                $rscom = pg_fetch_array($excom);
                $verefica = $rscom['codprofissao'];
                if ($verefica == null) {
                    $com = "select nextval('seque_tprofissao')";
                    $excom = pg_query($destino,$com);
                    $rscom = pg_fetch_array($excom);
                    $procliente = $rscom['nextval'];
                    $com = "insert into tprofissao values ($procliente,'$desprofissao','$diaprofissao')";
                    $excom = pg_query($destino,$com);
                    if (!$excom){
                        $com = "ROLLBACK";
                        $excom = pg_query($destino,$com);
                        echo "<script>alert('Erro Cadastrar a profissão $desprofissao ');</script>";
                        echo "$com";
                        exit;
                    }                    
                }
            }            
            if ($ctipcliente <> 'NULL' or $ctipcliente > 0) {
                $com = "select codtipocliente from tcliente where codtipocliente = $ctipcliente";
                $excom = pg_query($destino,$com);
                $rscom = pg_fetch_array($excom);
                $verefica = $rscom['codtipocliente'];
                if ($verefica == null) {
                    $com = "select *from tcliente where codtipocliente = $ctipcliente ";
                    $excom = pg_query($destino,$com);
                    $rscom = pg_fetch_array($excom);
                    $codtipocliente = $rscom['codtipocliente'];
                    $destipcliente = $rscom['destipcliente'];
                    $i_tcl_cor_cliente = $rscom['i_tcl_cor_cliente'];
                    if ($i_tcl_cor_cliente == null) {
                        $i_tcl_cor_cliente = 'NULL';
                    }
                    $n_tcl_pontos_cliente = $rscom['n_tcl_pontos_cliente'];
                    if ($n_tcl_pontos_cliente == null) {
                        $n_tcl_pontos_cliente = 'NULL';
                    }
                }                
            }
            /*
            $com = "select nextval('seque_aclientes')";
            $excom = pg_query($destino,$com);
            $rscom = pg_fetch_array($excom);
            $id = $rscom['nextval'];
            */
            $com = "select nextval('sequencia_paf')";
            $excom = pg_query($destino,$com);
            $rscom = pg_fetch_array($excom);
            $paf = $rscom['nextval'];
            $com = "insert into aclientes2 values  ($ccodigo,'$cnomecliente','$csexo',$cnascimento,'$cestadocivil','$cmae','$cpai',$cdatacadastro,'$cpessoa','$cdocumento',
    		'$ccpf','$ccnpj','$cinsest','$ctituloeleitor','$cnaturalidadde','$cestadonatural','$cendereco','$cbairro ','$cproximidade','$ccidade','$ccep','$cuf','$cfoneresidencial',
    		'$cfonecomercial','$cfonecelular','$cemail','$chomepage','$cconjuge',$cnasconjuge,'$cmaeconjuge','$cpaiconjuge','$cdocconjuge','$ccpfconjuge','$cloctraconjuge','$cendtraconjuge',
    		'$ctelconjuge','$ccelconjuge',$cproconjuge,$crdaconjuge,$cadmconjuge,'$cnatconjuge','$ctracliente','$cendtracliente',$crdacliente,$cprofissaocliente,$procliente,$coutrencliente,
    		'$ccrecliente',$climcarcliente,$cfatmedcliente,'$cchecliente',$climchecliente,'$clojrefcliente',$cultcomcliente,$ctipcliente,$cptucliente,$ccodspccliente,'$cendpagcliente',
    		'$ccidpagcliente','$cestpagcliente','$cceppagcliente','$cemiavicliente','$cenvspccliente','$cavicobcliente','$cendcorcliente','$cblovencliente',$cdatavipgtcliente,'$ccasprocliente',
    		'$cterprocliente','$ccarprocliente','$coutbencliente','$cdesoutbencliente',$ccodctbcliente,$catlcadcliente,$cvencadcliente,'$cfotcliente','$casscliente','$cdoccliente','$canicliente',
    		1,'IMPORTA','$time','$dia',NULL,NULL,0,'',1,'$cceptabcliente',$cregcliente,$ccodconvenio,$ctipimpcliente,'$cluzcliente','$cextin01',$ccarga01,$crecarga01,'$cextin02',$ccarga02,$crecarga02,
    		'$cextin03',$ccarga03,$crecarga03,'$cextin04',$ccarga04,$crecarga04,'$cextin05',$ccarga05,$crecarga05,'$cextin06',$ccarga06,$crecarga06,'$cextin07',$ccarga07,$crecarga07,'$cextin08',
    		$ccarga08,$crecarga08,'$cextin09',$ccarga09,$crecarga09,'$cextin10',$ccarga10,$crecarga10,$ccodantigo,'$cobsclientes','$senha_net','$nivel_net',$ativacao_net,$bloqueio_net,$cod_fotografo,
    		$forma_cadastro,1,'$dependente_1','$dependente_2','$dependente_3','$dependente_4','$dependente_5','$dependente_6','$dependente_7','$dependente_8','$dependente_9','$dependente_10',
    		$valor_mensal,$dat_inc_celesc,$dat_alt_celesc,$dat_exc_celesc,'$mot_bloq_venda',$limite_credito,$ati_ult_limite,'$contatos_cliente',$desconto_cliente,'$fax_cliente',$bloq_vendas_aprazo,
    		$i_acl_codigo_ven_foto,$i_acl_tab_preco,$i_acl_perc_aplicar_venda,$i_cond_pagto_padrao,'$s_acl_outro_fone','$s_acl_outro_fone2','$s_acl_msn','$s_acl_skype',$i_acl_codigo_fon,$d_acl_data_casamento,
    		$n_acl_limite_cartao_fidelidade,$d_acl_entrada_cartao_fid,$d_acl_bloqueio_cartao_fid,$d_acl_entrega_cartao_fid,$d_acl_admissao,'$s_acl_estatistica',$n_acl_pontos_cliente,$n_acl_bloq_gerar_cred_venda,
    		$n_acl_bloq_nf_dev_venda,'$s_acl_numero_cartao_fidelidade','$s_acl_logradouro','$s_acl_denominacao_social',$i_acl_situacao_cliente,'$s_acl_usuario_windows','$s_acl_senha_windows','$s_acl_url_logmein',
    		'$s_acl_senha_logmein','$s_acl_nome_responsavel',$i_acl_codigo_parceiro_prc,$i_acl_bloqueia_senha,'$s_acl_insc_municipal',$i_acl_codigo_ram,$i_acl_tipo_cliente_juridico,$i_acl_modelo_cliente,$i_acl_codigo_acl,
    		$i_acl_susp_pis_cofins,$i_acl_icms_diferido,'$s_acl_obs_parametros',$i_acl_endereco_numero,$i_acl_calculo_rs,$i_acl_concessao_icms_st,'$s_acl_endereco_entrega','$s_acl_bairro_entrega','$i_acl_cep_entrega',
    		'$s_acl_complemento_entrega','$s_acl_bairro_cobranca','$i_acl_tipo_mercado',$n_acl_valor_adicional_celesc,$n_acl_valor_adesao_celesc,$i_acl_qtde_vezes_adesao_celesc,$i_acl_contador_adesao_celesc,
    		$i_acl_codigo_tco1,'$s_acl_mensagem_nfe',$i_acl_possui_internet,$i_acl_suspensao_retencao,$i_acl_suspensao_iss,$i_acl_codigo_tgc,$i_acl_codigo_tcc,$s_acl_inscricao_rural,$i_acl_permite_gerar_senha_offline,
    		$i_acl_possui_tabela_preco,$i_acl_seq_unica,'$s_acl_complemento',$paf,'$s_acl_msg_venda',$i_acl_permit_credito_st_ret,$n_acl_limite_mensal,'$s_acl_tipo_logradouro','$s_acl_tipo_bairro',
    		'$s_acl_passaporte','$s_acl_uf_entrega',$i_acl_calcula_imp_por_entrega,'$s_acl_preferencia_perfil')";
    		$com = strtoupper($com);
    		
    		$excom = pg_query($destino,$com);
    		if (!$excom){    		    
    		    $query = "ROLLBACK";
    		    $exquery = pg_query($destino,$query);
    		    /*
    		    $id = $id -1;
    		    $query = "SELECT setval('public.seque_aclientes', '$id', true)";
    		    $exquery = pg_query($destino,$query);
    		    */
    		    echo "<script>alert('Erro Ao Cadastrar Cliente $ccodigo');</script>";
    		    echo "$com";
    		    exit;
    		} else {
    		    $com = "COMMIT";
    		    $excom = pg_query($destino,$com);
    		    echo "Cliente Importado $ccodigo <br>";
    		}           
        }	    
    }
} elseif  ($tipo == 'C') {
    function formatCnpjCpf($value)
    {
        $cnpj_cpf = preg_replace("/\D/", '', $value);    
        if (strlen($cnpj_cpf) === 11) {
            return preg_replace("/(\d{3})(\d{3})(\d{3})(\d{2})/", "\$1.\$2.\$3-\$4", $cnpj_cpf);
        }    
        return preg_replace("/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/", "\$1.\$2.\$3/\$4-\$5", $cnpj_cpf);
    }
    function venda($a)
    {
        $query = "select cemisaidas,cclisaidas,cnotsaidas,ccnpjempresa from asaidas inner join tempresa on cempresasaidas = ccodempresa where  i_asa_codigo_tna = $a and cemisaidas >= '2022-01-01'
                order by cclisaidas,ccnpjempresa,cemisaidas ";
        return $query;
    }
    if ($tipo == 'C') {
        echo "<table border='10' width='100%' bgcolor=#F5F6CE >";
        echo "<tr><td><font size=3><strong>NFE</strong></font></td>"."<td><font color=\"black\" size=3><strong>Emissão</strong></font></td>".
            "<td><font color=\"black\" size=3><strong>Cliente Nfe</strong></font></td>"."<td><font color=\"black\" size=3><strong>Cpj Emis</strong></font></td>"."</tr>";
        echo "<td><strong><font color=\"black\">".'Caçador'."</font></strong></td>\n";   
        echo "</tr>\n";   
        $sql = venda('86'); 
        $exsql = pg_query($congc,$sql);
        while ($row = pg_fetch_assoc($exsql)){
            $nfe = $row['cnotsaidas'];
            $emis = $row['cemisaidas'];
            $cliente = $row['cclisaidas'];
            $cnpj = $row['ccnpjempresa'];       
            if ($cliente == 39498 or $cliente == 41238 or $cliente == 43575 ) {
                $con = $congv;
            } elseif ($cliente == 41239 or $cliente == 46028) {
                $con = $congj;
            } elseif ($cliente == 30702) {
                $con = $congl;
            } else {
                echo "<script>alert('Nfe: $nfe emitida Cliente errado : $cliente');</script>"; echo $volta; exit;            
            }
            $com = "select  csidentradas from aentradas inner join afornecedor on ccodfornecedor = cforentradas  where ccgcfornecedor = '$cnpj' and cemientradas = '$emis' and cnfientradas = $nfe ";
            $excom = pg_query($con,$com);
            $rscom =pg_fetch_array($excom);
            $id = $rscom['csidentradas'];
            if ($id == null) {
                $com = "select cnomecliente from aclientes where ccodigo = $cliente";
                $excom = pg_query($conc,$com);
                $rscom =pg_fetch_array($excom);
                $nome = $rscom['cnomecliente'];
                echo "<td>".$nfe."</td>\n";
                echo "<td>".implode("/",array_reverse(explode("-",$emis)))."</td>\n";
                echo "<td>".$cliente.'-'.$nome."</td>\n";
                echo "<td>".formatCnpjCpf($cnpj)."</td>\n";
                echo "</tr>\n"; 
            }
        }
        echo "<td><strong><font color=\"black\">".'Lages'."</font></strong></td>\n";
        echo "</tr>\n";
        $sql = venda('34'); 
        $exsql = pg_query($conl,$sql);
        while ($row = pg_fetch_assoc($exsql)){
            $nfe = $row['cnotsaidas'];
            $emis = $row['cemisaidas'];
            $cliente = $row['cclisaidas'];
            $cnpj = $row['ccnpjempresa'];
            if ($cliente == 39498 or $cliente == 41238 or $cliente == 43575 ) {
                $con = $conv;
            } elseif ($cliente == 41239 or $cliente == 46028) {
                $con = $conj;
            }  else {
                echo "<script>alert('Nfe: $nfe emitida Cliente errado : $cliente');</script>"; echo $volta; exit;
            }
            $com = "select  csidentradas from aentradas inner join afornecedor on ccodfornecedor = cforentradas  where ccgcfornecedor = '$cnpj' and cemientradas = '$emis' and cnfientradas = $nfe ";
            $excom = pg_query($con,$com);
            $rscom =pg_fetch_array($excom);
            $id = $rscom['csidentradas'];
            if ($id == null) {
                $com = "select cnomecliente from aclientes where ccodigo = $cliente";
                $excom = pg_query($conl,$com);
                $rscom =pg_fetch_array($excom);
                $nome = $rscom['cnomecliente'];
                echo "<td>".$nfe."</td>\n";
                echo "<td>".implode("/",array_reverse(explode("-",$emis)))."</td>\n";
                echo "<td>".$cliente.'-'.$nome."</td>\n";
                echo "<td>".formatCnpjCpf($cnpj)."</td>\n";
                echo "</tr>\n";
            }
        }
        echo "<td><strong><font color=\"black\">".'Civegui'."</font></strong></td>\n";
        echo "</tr>\n";
        $sql = venda('20'); 
        $exsql = pg_query($conj,$sql);
        while ($row = pg_fetch_assoc($exsql)){
            $nfe = $row['cnotsaidas'];
            $emis = $row['cemisaidas'];
            $cliente = $row['cclisaidas'];
            $cnpj = $row['ccnpjempresa'];
            if ($cliente == 39498 or $cliente == 41238 or $cliente == 43575 ) {
                $con = $conv;
            }  elseif ($cliente == 30702) {
                $con = $conl;
            } else {
                echo "<script>alert('Nfe: $nfe emitida Cliente errado : $cliente');</script>"; echo $volta; exit;
            }
            $com = "select  csidentradas from aentradas inner join afornecedor on ccodfornecedor = cforentradas  where ccgcfornecedor = '$cnpj' and cemientradas = '$emis' and cnfientradas = $nfe ";
            $excom = pg_query($con,$com);
            $rscom =pg_fetch_array($excom);
            $id = $rscom['csidentradas'];
            if ($id == null) {
                $com = "select cnomecliente from aclientes where ccodigo = $cliente";
                $excom = pg_query($conj,$com);
                $rscom =pg_fetch_array($excom);
                $nome = $rscom['cnomecliente'];
                echo "<td>".$nfe."</td>\n";
                echo "<td>".implode("/",array_reverse(explode("-",$emis)))."</td>\n";
                echo "<td>".$cliente.'-'.$nome."</td>\n";
                echo "<td>".formatCnpjCpf($cnpj)."</td>\n";
                echo "</tr>\n";
            }
        }
        echo "<td><strong><font color=\"black\">".'Videira'."</font></strong></td>\n";
        echo "</tr>\n";
        $sql = venda('75');
        $exsql = pg_query($conv,$sql);
        while ($row = pg_fetch_assoc($exsql)){
            $nfe = $row['cnotsaidas'];
            $emis = $row['cemisaidas'];
            $cliente = $row['cclisaidas'];
            $cnpj = $row['ccnpjempresa'];
            if ($cliente == 41239 or $cliente == 46028) {
                $con = $conj;
            } elseif ($cliente == 30702) {
                $con = $conl;
            } else {
                echo "<script>alert('Nfe: $nfe emitida Cliente errado : $cliente');</script>"; echo $volta; exit;
            }
            $com = "select  csidentradas from aentradas inner join afornecedor on ccodfornecedor = cforentradas  where ccgcfornecedor = '$cnpj' and cemientradas = '$emis' and cnfientradas = $nfe ";
            $excom = pg_query($con,$com);
            $rscom =pg_fetch_array($excom);
            $id = $rscom['csidentradas'];
            if ($id == null) {
                $com = "select cnomecliente from aclientes where ccodigo = $cliente";
                $excom = pg_query($conv,$com);
                $rscom =pg_fetch_array($excom);
                $nome = $rscom['cnomecliente'];
                echo "<td>".$nfe."</td>\n";
                echo "<td>".implode("/",array_reverse(explode("-",$emis)))."</td>\n";
                echo "<td>".$cliente.'-'.$nome."</td>\n";
                echo "<td>".formatCnpjCpf($cnpj)."</td>\n";
                echo "</tr>\n";
            }
        }        
        echo "</table>";
    }
} elseif ($tipo == 'V'){
    echo "<table border='10' width='100%' bgcolor=#F5F6CE >";
    echo "<tr><td><font size=3><strong>NFE</strong></font></td>"."<td><font color=\"black\" size=3><strong>Emissão</strong></font></td>".
        "<td><font color=\"black\" size=3><strong>Cliente Nfe</strong></font></td>".
        "<td><font color=\"black\" size=3><strong>Cpj Emis</strong></font></td>"."<td><font color=\"black\" size=3><strong>Icms</strong></font></td>"."</tr>";
    function formatCnpjCpf($value)
    {
        $cnpj_cpf = preg_replace("/\D/", '', $value);
        if (strlen($cnpj_cpf) === 11) {
            return preg_replace("/(\d{3})(\d{3})(\d{3})(\d{2})/", "\$1.\$2.\$3-\$4", $cnpj_cpf);
        }
        return preg_replace("/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/", "\$1.\$2.\$3/\$4-\$5", $cnpj_cpf);
    }
    function venda($a)
    {
        $query = "select cemisaidas,cclisaidas,cnotsaidas,ccnpjempresa,cicmhistorico from asaidas inner join tempresa on 
                cempresasaidas = ccodempresa 
                inner join ahistorico on cidesaidas = cisahistorico
                where  i_asa_codigo_tna = $a and cidesaidas > 1173989
                order by cclisaidas,ccnpjempresa,cemisaidas ";
        return $query;
    }
    $sql = venda('86');
    $exsql = pg_query($congc,$sql);
    while ($row = pg_fetch_assoc($exsql)){
        $nfe = $row['cnotsaidas'];
        $emis = $row['cemisaidas'];
        $cliente = $row['cclisaidas'];
        $cnpj = $row['ccnpjempresa'];
        $icms = $row['cicmhistorico'];      
        if ($cliente == 39498 or $cliente == 41238 or $cliente == 43575 or $cliente == 41239 or $cliente == 46028 or $cliente == 30702 ) {
            
        } else {
            echo "<script>alert('Nfe: $nfe emitida Cliente errado : $cliente');</script>"; echo $volta; exit;
        }
        if ($icms <> 12.00) {
            $com = "select cnomecliente from aclientes where ccodigo = $cliente";
            $excom = pg_query($conc,$com);
            $rscom =pg_fetch_array($excom);
            $nome = $rscom['cnomecliente'];
            echo "<td>".$nfe."</td>\n";
            echo "<td>".implode("/",array_reverse(explode("-",$emis)))."</td>\n";
            echo "<td>".$cliente.'-'.$nome."</td>\n";
            echo "<td>".formatCnpjCpf($cnpj)."</td>\n";
            echo "<td>".$icms."</td>\n";
            echo "</tr>\n";
        }
    }    
} elseif ($tipo == 'A'){
    echo "<table border='10' width='100%' bgcolor=#F5F6CE >";
    echo "<tr><td><font size=3><strong>NFE</strong></font></td>"."<td><font color=\"black\" size=3><strong>Emissão</strong></font></td>".
        "<td><font color=\"black\" size=3><strong>Cliente Nfe</strong></font></td>".
        "<td><font color=\"black\" size=3><strong>Cpj Emis</strong></font></td>"."<td><font color=\"black\" size=3><strong>Icms</strong></font></td>"."</tr>";
    function formatCnpjCpf($value)
    {
        $cnpj_cpf = preg_replace("/\D/", '', $value);
        if (strlen($cnpj_cpf) === 11) {
            return preg_replace("/(\d{3})(\d{3})(\d{3})(\d{2})/", "\$1.\$2.\$3-\$4", $cnpj_cpf);
        }
        return preg_replace("/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/", "\$1.\$2.\$3/\$4-\$5", $cnpj_cpf);
    }
    function venda($a)
    {
        $query = "select cemisaidas,cclisaidas,cnotsaidas,ccnpjempresa,cicmhistorico from asaidas inner join tempresa on
                cempresasaidas = ccodempresa
                inner join ahistorico on cidesaidas = cisahistorico
                inner join aclientes on cclisaidas = ccodigo
                where  i_asa_codigo_tna = $a and cemisaidas >= '2022-03-1' and cpessoa = 'J' and i_asa_finalidade_venda = 1
                and   csaihisotorico - n_ahi_qtde_devolvido <> 0
                group by cemisaidas,cclisaidas,cnotsaidas,ccnpjempresa,cicmhistorico
                order by cclisaidas,ccnpjempresa,cemisaidas ";
        return $query;
    }
    $sql = venda('1');
    $exsql = pg_query($conc,$sql);
    while ($row = pg_fetch_assoc($exsql)){
        $nfe = $row['cnotsaidas'];
        $emis = $row['cemisaidas'];
        $cliente = $row['cclisaidas'];
        $cnpj = $row['ccnpjempresa'];
        $icms = $row['cicmhistorico'];       
        if ($icms <> 17.00) {
            $com = "select cnomecliente from aclientes where ccodigo = $cliente";
            $excom = pg_query($conc,$com);
            $rscom =pg_fetch_array($excom);
            $nome = $rscom['cnomecliente'];
            echo "<td>".$nfe."</td>\n";
            echo "<td>".implode("/",array_reverse(explode("-",$emis)))."</td>\n";
            echo "<td>".$cliente.'-'.$nome."</td>\n";
            echo "<td>".formatCnpjCpf($cnpj)."</td>\n";
            echo "<td>".$icms."</td>\n";
            echo "</tr>\n";
        }
    }
}
?>