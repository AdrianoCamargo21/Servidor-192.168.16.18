<!DOCTYPE html>
<html>
<head>
<br><br>
</html>
<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
session_start();
include_once("conexao.php");
date_default_timezone_set('America/Sao_Paulo');
$time = date('H:i:s');
$dia = date('Y-m-d');
$voltalogin="<script>window.location='http://192.168.13.2/via/'</script>";
//error_reporting(0);	
set_time_limit(0);
$tipo = $_POST['auto'];
if ($tipo == "B") {
    $origem = $_POST['orige'];
    if ($origem <= 4) {
        $con = $congc;
        $sistema = 'C';
        $opera = 68;
    }
    if ($origem >= 5 and $origem <=7 ) {
        $con = $congv;
        $sistema = 'V';
        $opera = 68;
    }
    if ($origem >= 8 and $origem <=9 ) {
        $con = $congj;
        $sistema = 'J';
        $opera = 15;
    }
    if ($origem >= 10 ) {
        $con = $congl;
        $sistema = 'L';
        $opera = 34;
    }
    $nfe = $_POST['nfes'];
    if ($nfe == null or $nfe < 1) {
        echo "<script>alert('Número da Nfe Inválido');</script>";
        echo $voltalogin;
        exit;
    }
    $data = $_POST['data'];
    if ($data == null ) {
        $data = $dia;
    }
    $sql = "select cidesaidas,cclisaidas,cnomecliente from asaidas inner join aclientes on cclisaidas = ccodigo 
            where cemisaidas = '$data' and cnotsaidas = $nfe";
    $exsql = pg_query($con ,$sql);
    $rssql = pg_fetch_array($exsql);
    $id = $rssql['cidesaidas'];
    $cliente = $rssql['cclisaidas'];
    $nome = $rssql['cnomecliente'];
    if ($id == null) {
        echo "<script>alert('Nenhuma Nfe Retornou Da Busca');</script>";
        echo $voltalogin;
        exit;
    }
    $emiss = implode("/",array_reverse(explode("-",$data)));
    echo "<table border='2' width='100%' bgcolor=#FFFFFF >";
    echo "<tr><td><font size=3><strong>Cód :".$cliente."</strong></font></td>"."<td><font color=\"black\" size=3><strong>Nome: ".$nome."</strong></font></td>"
        ."<td><font color=\"black\" size=3><strong>Nfe: ".$nfe."</strong></font></td>"."<td><font color=\"black\" size=3><strong>Emissão: ".$emiss."</strong></font></td>"
        ."</tr>";
    echo "</table>"; 
    echo "<table border='2' width='100%' bgcolor=#FFFFFF >";
    echo "<tr><td><font size=3><strong>Código</strong></font></td>"."<td><font color=\"black\" size=3><strong>Descrição</strong></font></td>"
        ."<td><font color=\"black\" size=3><strong>Qtd</strong></font></td>"."<td><font color=\"black\" size=3><strong>R$ Custo</strong></font></td>"
        ."<td><font color=\"black\" size=3><strong>TT Custo</strong></font></td>"."</tr>";
    
    $ttqtd = 0;
    $ttcusto = 0;
    $ini = 1;
    $cor1 = "#D3D3D3";
    $cor2 = "#FDF5E6";
    $sql = "select cprohistorico,csaihisotorico,cdesproduto,cpcuproduto from ahistorico inner join aprodutos on cprohistorico = ccodproduto where cisahistorico = $id 
            order by cprohistorico ";
    $exsql=pg_query($con,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        if ($ini%2 == 0){
            $cor = $cor1;
        } else {
            $cor = $cor2;
        }
        $cod = $row['cprohistorico'];
        $qtd = $row['csaihisotorico'];
        $ttqtd += $qtd;
        $desc = $row['cdesproduto'];
        $custo = $row['cpcuproduto'];
        $ttitem = $qtd*$custo;
        $ttcusto += $ttitem;
        echo  "<td bgcolor=$cor>".$cod."</font></td>\n";
        echo  "<td bgcolor=$cor>".$desc."</font></td>\n";
        echo  "<td bgcolor=$cor>".number_format($qtd,2,",",".")."</font></td>\n";
        echo  "<td bgcolor=$cor>".number_format($custo,2,",",".")."</font></td>\n";
        echo  "<td bgcolor=$cor>".number_format($ttitem,2,",",".")."</font></td>\n";
        echo "</tr>\n";
        $ini ++;
        
    }
    echo "<td bgcolor = #FFFF00 ><font size=4><strong>".'TT'."</strong></font></td>\n";
    echo "<td bgcolor = #FFFF00 ><font size=4><strong>".''."</strong></font></td>\n";
    echo "<td bgcolor = #FFFF00 ><font size=4><strong>".'TT Itens: '.number_format($ttqtd,2,",",".")."</strong></font></td>\n";
    echo "<td bgcolor = #FFFF00 ><font size=4><strong>".''."</strong></font></td>\n";    
    echo "<td bgcolor = #FFFF00 ><font size=4><strong>".'TT Custo:'.number_format($ttcusto,2,",",".")."</strong></font></td>\n";
    echo "</tr>\n";
    echo "</table>";
    
    
    
    
    
}
if ($tipo == "A") {
    $origem = $_POST['origee'];
    if ($origem <= 4) {
        $con=$conc;
        $sistema = 'C';
        $opera = 86;
    }
    if ($origem >= 5 and $origem <=7 ) {
        $con=$conv;
        $sistema = 'V';
        $opera = 75;
    }
    if ($origem >= 8 and $origem <=9 ) {
        $con=$conj;
        $sistema = 'J';
        $opera = 20;
    }
    if ($origem >= 10 ) {
        $con=$conl;
        $sistema = 'L';
        $opera = 34;
    }    
    $nfe = $_POST['nfe'];
    if ($nfe == null or $nfe < 1) {
        echo "<script>alert('Número da Nfe Inválido');</script>";
        echo $voltalogin;
        exit;
    }
    $data = $_POST['dataa'];
    if ($data == null ) {
        $data = $dia;
    }
    $sql = "select cidesaidas,i_asa_codigo_tna,cclisaidas,cempresasaidas,s_asa_chave_nfe,s_asa_protocolo_nfe,ccnpjempresa,ctotsaidas,cicmsaidas,ccnpj,n_asa_valor_pis,n_asa_valor_cofins
     from asaidas inner join tempresa on cempresasaidas = ccodempresa inner join aclientes on ccodigo = cclisaidas  where cemisaidas = '$data' and cnotsaidas =  $nfe";
    $exsql = pg_query($con ,$sql);
    $resulsql = pg_fetch_array($exsql);
    $idsl = $resulsql['cidesaidas'];
    $ope = $resulsql['i_asa_codigo_tna'];
    $emporigem = $resulsql['cempresasaidas'];
    $cnpjo = $resulsql['ccnpjempresa'];
    $cnpjd = $resulsql['ccnpj'];
    $ttl = $resulsql['ctotsaidas'];
    $icms = $resulsql['cicmsaidas'];
    $pis = $resulsql['n_asa_valor_pis'];
    $protc = $resulsql['s_asa_protocolo_nfe'];
    $chave = $resulsql['s_asa_chave_nfe']; 
    if ($pis == null ) {
        $pis = 0.00;
    }
    $cofins = $resulsql['n_asa_valor_cofins'];
    if ($cofins == null) {
        $cofins = 0.00;
    }
    if ($idsl == null ) {
        echo "<script>alert('A Busca Não Retornou Nenhuma Nfe Verefique Dados e tente Novamente');</script>";
        echo $voltalogin;
        exit;
    }
    if ($ope <> $opera) {
        echo "<script>alert('Nota de Sáida com operação errada favor pedir para o Suporte Arrumar');</script>";
        echo $voltalogin;
        exit;
    }
    $cliente = $resulsql['cclisaidas'];
    if ($sistema == 'C') {
        $congo=$congc;
        $conlo=$conc;
        if ($cliente == 39498 or $cliente == 41238 or $cliente == 43575) {
            $congd=$congv;
            $conld=$conv;
            $sistemad = 'V';
        } else {
            if ($cliente == 41239 or $cliente == 46028) {
                $congd=$congj;
                $conld=$conj;
                $sistemad = 'J';
            } else {
                if ($cliente == 30702) {
                    $congd=$congl;
                    $conld=$conl;
                    $sistemad = 'L';
                } else {
                    echo "<script>alert('Cliente da Nota Não Cadastrado Para transferência');</script>";
                    echo $voltalogin;
                    exit;
                }
            }
        }
    }
    if ($sistema == 'V') {
        $congo=$congv;
        $conlo=$conv;
        if ($cliente == 41239 or $cliente == 46028) {
            $congd=$congj;
            $conld=$conj;
            $sistemad = 'J';
        } else {
            if ($cliente == 30702) {
                $congd=$congl;
                $conld=$conl;
                $sistemad = 'L';
            } else {
                echo "<script>alert('Cliente da Nota Não Cadastrado Para transferência');</script>";
                echo $voltalogin;
                exit;
            }
        }        
    }
    if ($sistema == 'J') {
        $congo=$congj;
        $conlo=$conj;
        if ($cliente == 39498 or $cliente == 41238 or $cliente == 43575 ) {
            $congd=$congv;
            $conld=$conv;
            $sistemad = 'V';
        } else {
            if ($cliente == 30702) {
                $congd=$congl;
                $conld=$conl;
                $sistemad = 'L';
            } else {
                echo "<script>alert('Cliente da Nota Não Cadastrado Para transferência');</script>";
                echo $voltalogin;
                exit;
            }
        }
    }
    if ($sistema == 'L') {
        $congo=$congl;
        $conlo=$conl;
        if ($cliente == 39498 or $cliente == 41238 or $cliente == 43575 ) {
            $congd=$congv;
            $conld=$conv;
            $sistemad = 'V';
        } else {
            if ($cliente == 41239 or $cliente == 46028  ) {
                $congd=$congj;
                $conld=$conj;
                $sistemad = 'J';
            } else {
                echo "<script>alert('Cliente da Nota Não Cadastrado Para transferência');</script>";
                echo $voltalogin;
                exit;
            }
        }
    }
    $sql = "select ccodfornecedor from afornecedor where ccgcfornecedor = '$cnpjo'";
    $exsql = pg_query($conld ,$sql);
    $resulsql = pg_fetch_array($exsql);
    $forncedor = $resulsql['ccodfornecedor'];
    if ($forncedor == null ) {
        echo "<script>alert('Nenhum Fornecedor retornou cadastre ele e tente Novamente');</script>";
        echo $voltalogin;
        exit;
    }
    $sql = "select csidentradas from aentradas where cnfientradas = $nfe and cforentradas = $forncedor ";
    $exsql = pg_query($conld ,$sql);
    $resulsql = pg_fetch_array($exsql);
    $ide = $resulsql['csidentradas'];
    if ($ide <> null ) {
        echo "<script>alert('Nota Fiscal Já Importada');</script>";
        echo $voltalogin;
        exit;
    }
    $sql = "select ccodempresa from tempresa where ccnpjempresa = '$cnpjd' ";
    $exsql = pg_query($conld ,$sql);
    $resulsql = pg_fetch_array($exsql);
    $empdestino = $resulsql['ccodempresa'];
    if ($empdestino ==  null ) {
        echo "<script>alert('Nenhuma Empresa retornou com o cnpj da saída');</script>";
        echo $voltalogin;
        exit;
    }
    /*
    if ($sistema == 'C') {
        if ($sistemad == 'J') {
            $filial = 'S';
        } else {
            $filial = 'S';
        }
    } else {
        $filial = 'N';
    }
    
    $filial = 'S';
    if ($filial == 'N') {        
        $sql = "select sum(cpcuproduto*csaihisotorico) from ahistorico inner join aprodutos on  cprohistorico = ccodproduto where cisahistorico = $idsl  ";
        $exsql = pg_query($conlo,$sql);
        $rssql = pg_fetch_array($exsql);
        $tt = $rssql['sum'];
        //$tt = number_format($tt, 2);
        $sql = "BEGIN";
        $exsql = pg_query($congo ,$sql);
        $emp = $emporigem +1;
        if ($origem == 1) {            
            $serie = 31;           
        }
        if ($origem == 2) {            
            $serie = 32;
        }
        if ($origem == 3) {            
            $serie = 41;
        }
        if ($origem == 4) {           
            $serie = 33;
        }
        if ($origem == 5) {
            $serie = 95;
        }
        if ($origem == 6) {
            $serie = 78;
        }
        if ($origem == 7) {
            $serie = 91;
        }
        if ($origem == 8) {
            $serie = 51;
        }
        if ($origem == 9) {
            $serie = 52;
        }
        if ($origem == 10) {
            $serie = 3;
        } 
        if ($origem <= 7) {
            $saioper = 54;
        } elseif ($origem > 7 and $origem <= 9 ) {
            $saioper = 3;
        } elseif ($origem == 10){
            $saioper = 14;
        }
        $sql = "select cnomecliente,ccnpj,cinsest,cendereco,ccidade,ccep,cbairro,cuf,cfoneresidencial from aclientes where ccodigo = $cliente";
        $exsql = pg_query($conlo,$sql);
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
        $sql = "select nextval('seque_aentradas')";
        $exsql = pg_query($congd,$sql);
        $resulsql = pg_fetch_array($exsql);
        $id = $resulsql['nextval'];
        $empnfe = $empdestino + 1 ;
        pg_query($congd,"select logar('COPIA',1,0)"); 
        if ($sistemad == 'J') {
            $sql = "INSERT INTO aentradas VALUES ($id,'V','$forncedor','$dia','$dia','$ult','$tt','$tt','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','1.152','0.00','0.00'
                  ,NULL,'PAGO','0','','$dia','$time',null,null,'0',null,'IMPORTA','','$empnfe','01','','0.00','0.00','','0.00',null,'2','0.00','0.00','0.00','0.00','','0.00',NULL
                  ,'0','0',0.00,'0.00','0.00','0.00',0.00,'$ids',null,0)";
        } else {
            $sql = "INSERT INTO aentradas VALUES ($id,'V','$forncedor','$dia','$dia','$ult','$tt','$tt','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','1.152','0.00','0.00'
                  ,NULL,'PAGO','0','','$dia','$time',null,null,'0',null,'IMPORTA','','$empnfe','01','','0.00','0.00','','0.00',null,'2','0.00','0.00','0.00','0.00',NULL,'','0.00',NULL
                  ,'0','0',0.00,'0.00','0.00','0.00',0.00,'$ids',null,0)";
        }
        $exsql = pg_query($congd,$sql);
        if (!$exsql){
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
               '1', '$tt','$dia','0.00','0.00',NULL,'0.00','','NAO','$dia','$time','IMPORTA','1',NULL,NULL,'','0','$empnfe','','','0','0')";
        $exsql = pg_query($congd,$sql);
        if (!$exsql){
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
        echo "<script>alert('Segunda Nfe: $ult gerada com sucesso');</script>";

    } else {
        echo "<script>alert('Nota para Josi ou Mayara não gera Segunda Nfe');</script>";
    }
    */
    $sql = "BEGIN";
    $exsql = pg_query($conld ,$sql);
    $sql = "select (nextval('seque_aentradas'))as id";
    $exsql = pg_query($conld,$sql);
    $rssql = pg_fetch_array($exsql);
    $ide = $rssql['id'];
    if ($ide == null ) {
        echo "<script>alert('Erro ao buscar o Id para importação avissar o Suporte');</script>";
        echo $voltalogin;
        exit;
    }
    $sql = "select logar('IMPORTA','1',0);INSERT INTO aentradas VALUES ($ide,'V',$forncedor,'$data','$data',$nfe,$ttl,$ttl,$icms,$ttl,0.00,0.00,0.00,0.00,0.00,0.00,'',0.00,0.00,
            NULL,'PAGO',0,0,'$dia','$time',NULL,NULL,0,1,'IMPORTA','',$empdestino,'1','',0.00,0.00,'',0.00,NULL,2,$pis,$cofins,0.00,0.00,'$protc','$chave',0.00,55,0,0,0.00,0.00,   
            0.00,0.00,$idsl,NULL,0) ";
    $exsql = pg_query($conld ,$sql);
    if  (!$exsql) {
        $sql = "ROLLBACK";
        $exsql = pg_query($conld,$sql);
        echo "<script>alert('Erro ao Inserir a Entrada');</script>";
        echo $voltalogin;
        exit;
    }
    if ($opera == '21') {
        $cfop = "1.917";
    } else {
        $cfop = "1.102";
    }
    $sql = "select cprohistorico,(cdesproduto)::character varying(30) ,cvlqhistorico,cvichistorico,csaihisotorico,cicmhistorico,i_ahi_seq_ordem_item,n_ahi_valor_pis,n_ahi_valor_cofins
             from ahistorico inner join aprodutos on cprohistorico = ccodproduto where cisahistorico = $idsl  "; 
    $exsql = pg_query($conlo,$sql);
    while($row = pg_fetch_assoc( $exsql)){
        $codigo = $row['cprohistorico'];
        $desc = $row['cdesproduto']; 
        $valor = $row['cvlqhistorico'];
        $icms = $row['cvichistorico'];
        $qtd = $row['csaihisotorico'];
        $percimp = $row['cicmhistorico'];
        $seq = $row['i_ahi_seq_ordem_item'];
        $pis = $row['n_ahi_valor_pis'];
        $co = $row['n_ahi_valor_cofins'];
        $tvalor = $valor * $qtd;
        $com = "select logar('IMPORTA','1',0);INSERT INTO ahistorico VALUES (nextval('seque_ahistorico'),$ide,0,0,'E','Código XML: $codigo Descrição XML: $desc',$codigo,'$data',
                $valor,$valor,$valor,$valor,0.0000,0.0000,0.0000,$icms,0.0000,0.0000,0.0000,$tvalor,'$desc','$cfop',0.0000,$qtd,$forncedor,0,$percimp,0.00,0.00,0.00,0.00,0.00, 
                0.00,0.00,0.00,0.0000,0,'$dia','$time','IMPORTA',1,NULL,NULL,0,'',$empdestino,0.00,0,0,0,0.00,0.00,0.00,0.00,0.00,$valor,NULL,NULL,NULL,0.0000,0.0000,0.00,0.0000,
                0.00,0.0000,0.0000,$valor,0.00,0.00,0.00,0,NULL,$valor,0.0000,0.0000,$seq,'',0,0.00,0.00,0.00,0,0,0,NULL,NULL,0.0000,NULL,0,NULL,'',0,0.00,0.00,0,0.00,0.0000,0.0000,        
                0.00,$pis,$cofins,NULL,'','',NULL,NULL,0,49,50,50,$valor,$valor,$valor,1.00,7.00,0,0.00,0,'',0.000,0.0000,0.000,0.0000,0,0,0,'',0.00,0.00,0.00,'',0.00,0,0.00,0.00,0.00,        
                0.00,0.0000,0.00,0.0000,0.0000,0.0000,0.00,01,01,$valor,$valor,$pis,$cofins,'',NULL,'',0.00,NULL,0,0.00,0.0000,0.00,0.00,0,'',0.00,0,0,0.0000,'',0,'',0.00,0.00)";
        $excom = pg_query($conld,$com);
        if  (!$excom) {             
            $com = "ROLLBACK";
            $excom = pg_query($conld,$com);
            echo "<script>alert('Erro ao Inserir Histórico');</script>"; 
            echo $voltalogin;
            exit;
        }
    }
    $sql = "COMMIT";
    $exsql = pg_query($conld,$sql);
    echo "<script>alert('Nota Lançada no Destino com sucesso ! ');</script>";
    echo $voltalogin;
    exit;  
    
}
if ($tipo == "P") {
     $origem = $_POST['origem'];
     if ($origem <= 4) {
         $con=$conc;
         $sistema = 'C';
         $opera = 86;
     }
     if ($origem >= 5 and $origem <=7 ) {
         $con=$conv;
         $sistema = 'V';
         $opera = 75;
     }
     if ($origem >= 8 and $origem <=9 ) {
         $con=$conj;
         $sistema = 'J';
         $opera = 20;
     }
     if ($origem >= 10 ) {
         $con=$conl;
         $sistema = 'L';
         $opera = 21;
     }
     $cliente = $_POST['cliente'];
    if ($cliente == null) {    
        echo "<script>alert('Erro ao Carregar o Código do  Cliente');</script>";
        echo $voltalogin;
        exit;
    }
    $login = $_POST["login"];
    $login = strtoupper($login);
    if ($login == null) {    
        echo "<script>alert('Login Inválido');</script>";
        echo $voltalogin;
        exit;
    }
    $senha = $_POST["senha"];
    $senha = strtoupper($senha);
    if ($senha == null) {    
        echo "<script>alert('Senha Inválida');</script>";
        echo $voltalogin;
        exit;
    }
    $sql = "select cusuariocod,clogempresa from parametros where csenhausuario = '$senha' and cnomope = '$login' ";
    $exsql= pg_query($con,$sql);
    $resulsql = pg_fetch_array($exsql);
    $codlogin = $resulsql['cusuariocod'];
    $emplogin = $resulsql['clogempresa'];
    if ($codlogin == null) {
        echo "<script>alert('Login ou Senha Invalidos');</script>";    
        echo $voltalogin;
        exit;
    }   
    if ($origem == 1) {
        $emploginn = 1;
        $loja = "Rosane";        
        if ($login <> "ADRIANO") {
            if ($emplogin <> $emploginn) {
                session_destroy();
                echo "<script>alert(' Usuário sem permissão para fazer notas da Loja:$loja');</script>";
                echo $voltalogin;
                exit;
            }
        }       
    }
    if ($origem == 2) {
        $emploginn = 3;
        $loja = "Lucélia";
        if ($login <> 'ADRIANO') {
            if ($emplogin <> $emploginn) {                
                echo   "<script>alert(' Usuário sem permissão para fazer notas da Loja:$loja');</script>";
                echo $voltalogin;
                exit;
            }
        }
    }
    if ($origem == 3) {
        $emploginn = 7;
        $loja = "Adrieli";
        if ($login <> 'ADRIANO') {
            if ($emplogin <> $emploginn) {
                session_destroy();
                echo   "<script>alert(' Usuário sem permissão para fazer notas da Loja: $loja');</script>";
                echo $voltalogin;
                exit;
            }
        }
    }
    if ($origem == 4) {
        $emploginn = 5;
        $loja = "Vila";
        if ($login <> 'ADRIANO') {
            if ($emplogin <> $emploginn) {
                session_destroy();
                echo   "<script>alert(' Usuário sem permissão para fazer notas da Loja:$loja');</script>";
                echo $voltalogin;
                exit;
            }
        }
    }    
    if ($origem == 5) {
        $emploginn = 13;
        $loja = "Nádia";
        if ($login <> 'ADRIANO') {
            if ($emplogin <> $emploginn) {
                session_destroy();
                echo   "<script>alert(' Usuário sem permissão para fazer notas da Loja:$loja');</script>";
                echo $voltalogin;
                exit;
            }
        }
    }
    if ($origem == 6) {
        $emploginn = 17;
        $loja = "Shop/Videira";
        if ($login <> 'ADRIANO') {
            if ($emplogin <> $emploginn) {
                session_destroy();
                echo   "<script>alert(' Usuário sem permissão para fazer notas da Loja:$loja');</script>";
                echo $voltalogin;
                exit;
            }
        }
    }
    if ($origem == 7) {
        $emploginn = 15;
        $loja = "Cleusa";
        if ($login <> 'ADRIANO') {
            if ($emplogin <> $emploginn) {
                session_destroy();
                echo   "<script>alert(' Usuário sem permissão para fazer notas da Loja:$loja');</script>";
                echo $voltalogin;
                exit;
            }
        }
    }
    if ($origem == 8) {
        $emploginn = 3;
        $loja = "Josiane";
        if ($login <> 'ADRIANO') {
            if ($emplogin <> $emploginn) {
                session_destroy();
                echo   "<script>alert(' Usuário sem permissão para fazer notas da Loja:$loja');</script>";
                echo $voltalogin;
                exit;
            }
        }
    }
    if ($origem == 9) {
        $emploginn = 1;
        $loja = "May";
        if ($login <> 'ADRIANO') {
            if ($emplogin <> $emploginn) {
                session_destroy();
                echo   "<script>alert(' Usuário sem permissão para fazer notas da Loja:$loja');</script>";
                echo $voltalogin;
                exit;
            }
        }
    }
    if ($origem == 10) {
        $emploginn = 1;
        $loja = "César";
        if ($login <> 'ADRIANO') {
            if ($emplogin <> $emploginn) {
                session_destroy();
                echo   "<script>alert(' Usuário sem permissão para fazer notas da Loja:$loja');</script>";
                echo $voltalogin;
                exit;
            }
        }
    }
    $sql = "select cnomecliente,ccnpj,cinsest,cendereco,ccidade,ccep,cbairro,cuf,cfoneresidencial
    	      from aclientes where ccodigo = $cliente";
    $exsql = pg_query($con,$sql);
    $resulsql = pg_fetch_array($exsql);
    $fant = $resulsql['cnomecliente'];
    if ($fant == null) {
        session_destroy();
        echo   "<script>alert('Nenhum cliente retornou verefique o codido digitado:$cliente');</script>";
        echo $voltalogin;
        exit;
    }
    $sql = "select nextval( 'seque_blx')";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $id=$resulsql['nextval'];
    $exsql= pg_query($con,$sql);
    $_SESSION['cliente'] = $cliente;
    $_SESSION['fantasia'] = $fant;
    $_SESSION['loja'] = $loja;
    $_SESSION['origem'] = $origem;
    $_SESSION['login']= $login;
    $_SESSION['codlogin'] = $codlogin;
    $_SESSION['emploginn'] = $emploginn;
    $_SESSION['id'] = $id;
    $_SESSION['sistema']= $sistema;
    header("Location: http://192.168.13.2:8080/via/pedido2.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css"></link>
<center><form name = "form1" method= "post" action= "index.php"></center>
<br><br>
<center>
</center>
<br><br>
<center><input class="btn btn-red"  type="submit"  value="Voltar"></center>
<br><br>
</form>
</head>
</html>