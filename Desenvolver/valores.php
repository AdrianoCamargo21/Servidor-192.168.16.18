<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
$voltalogin="<script>window.location='http://192.168.13.2/Desenvolver/valores.html';</script>";
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
$dataaj = implode("/",array_reverse(explode("-",$data)));
$base=$_POST["base"];
if ($base=='') {
    session_destroy();
    echo "<script>alert('Base Inválida');</script>";
    echo $voltalogin;
    exit;
}
if ($base=='C') {
    if(!@($con=pg_connect ("host=192.168.16.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@"))){
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
    echo"<html><center><h1><font face='Arial' color='black'>Caçador:$dataaj </font></h1></center></html>";
   
    $sql="select ((sum( cjurdupli)) -(sum(cdesdupli))) as juro, (sum(cvpadupli)) as prestacoes
from asduplicatas where cempdupli in (1,2) and  cdpadupli = '$data'";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $juro1=$resulsql['juro'];
    $prest1=$resulsql['prestacoes'];
    $sql="select ((sum( cjurdupli)) -(sum(cdesdupli))) as juro, (sum(cvpadupli)) as prestacoes
from asduplicatas where cempdupli in (3,4) and  cdpadupli = '$data'";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $juro3=$resulsql['juro'];
    $prest3=$resulsql['prestacoes'];
    $sql="select ((sum( cjurdupli)) -(sum(cdesdupli))) as juro, (sum(cvpadupli)) as prestacoes
from asduplicatas where cempdupli in (5,6) and  cdpadupli = '$data'";;
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $juro5=$resulsql['juro'];
    $prest5=$resulsql['prestacoes'];
    $sql="select ((sum( cjurdupli)) -(sum(cdesdupli))) as juro, (sum(cvpadupli)) as prestacoes
from asduplicatas where cempdupli in (7,8) and  cdpadupli = '$data'";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $juro7=$resulsql['juro'];
    $prest7=$resulsql['prestacoes'];
    $sql="select ((sum( cjurdupli)) -(sum(cdesdupli))) as juro, (sum(cvpadupli)) as prestacoes
from asduplicatas where cempdupli in (9,10) and  cdpadupli = '$data'";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $juro9=$resulsql['juro'];
    $prest9=$resulsql['prestacoes'];
    $sql="select ((sum( cjurdupli)) -(sum(cdesdupli))) as juro, (sum(cvpadupli)) as prestacoes
from asduplicatas where cempdupli in (11,12) and  cdpadupli = '$data'";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $juro11=$resulsql['juro'];
    $prest11=$resulsql['prestacoes'];
    $sql="select ((sum( cjurdupli)) -(sum(cdesdupli))) as juro, (sum(cvpadupli)) as prestacoes from asduplicatas where cempdupli > 12 and  cdpadupli = '$data'";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $jurofc=$resulsql['juro'];
    $prestfc=$resulsql['prestacoes'];
    $sql="select (sum(centsaidas)) entradas from asaidas where cempresasaidas in (1,2) and cemisaidas = '$data'";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $entr1=$resulsql['entradas'];
    $sql="select (sum(centsaidas)) entradas from asaidas where cempresasaidas in (3,4) and cemisaidas = '$data'";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $entr3=$resulsql['entradas'];
    $sql="select (sum(centsaidas)) entradas from asaidas where cempresasaidas in (5,6) and cemisaidas = '$data'";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $entr5=$resulsql['entradas'];
    $sql="select (sum(centsaidas)) entradas from asaidas where cempresasaidas in (7,8) and cemisaidas = '$data'";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $entr7=$resulsql['entradas'];
    $sql="select (sum(centsaidas)) entradas from asaidas where cempresasaidas in (9,10) and cemisaidas = '$data'";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $entr9=$resulsql['entradas'];
    $sql="select (sum(centsaidas)) entradas from asaidas where cempresasaidas in (11,12) and cemisaidas = '$data'";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $entr11=$resulsql['entradas'];
    $sql="select (sum(centsaidas)) as entradas from asaidas where cempresasaidas > 12 and cemisaidas = '$data'";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $entrfc=$resulsql['entradas'];
    $sql="select (sum (ctotsaidas)) avista from asaidas inner join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao
 where caviaprsaidas = 'V' and cempresasaidas in (1,2) and ctranatureza='SIM' and ctessaidas='S' and cemisaidas = '$data'";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $avst1=$resulsql['avista'];
    $sql="select (sum (ctotsaidas)) avista from asaidas inner join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao
 where caviaprsaidas = 'V' and cempresasaidas in (3,4) and ctranatureza='SIM' and ctessaidas='S' and cemisaidas = '$data'";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $avst3=$resulsql['avista'];
    $sql="select (sum (ctotsaidas)) avista from asaidas inner join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao
 where caviaprsaidas = 'V' and cempresasaidas in (5,6) and ctranatureza='SIM' and ctessaidas='S' and cemisaidas = '$data'";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $avst5=$resulsql['avista'];
    $sql="select (sum (ctotsaidas)) avista from asaidas inner join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao
 where caviaprsaidas = 'V' and cempresasaidas in (7,8) and ctranatureza='SIM' and ctessaidas='S' and cemisaidas = '$data'";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $avst7=$resulsql['avista'];
    $sql="select (sum (ctotsaidas)) avista from asaidas inner join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao
 where caviaprsaidas = 'V' and cempresasaidas in (9,10) and ctranatureza='SIM' and ctessaidas='S' and cemisaidas = '$data'";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $avst9=$resulsql['avista'];
    $sql="select (sum (ctotsaidas)) avista from asaidas inner join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao
 where caviaprsaidas = 'V' and cempresasaidas in (11,12) and ctranatureza='SIM' and ctessaidas='S' and cemisaidas = '$data'";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $avst11=$resulsql['avista'];
    $sql="select (sum (ctotsaidas)) avista from asaidas inner join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao
 where caviaprsaidas = 'V' and cempresasaidas > 12 and ctranatureza='SIM' and ctessaidas='S' and cemisaidas = '$data'";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $avstfc=$resulsql['avista'];
    echo "<br><br>";
    echo "<table border='2' width='100%' bgcolor=#E3F6CE >";
    echo "<tr><td>Loja</td>"."<td>TT Dinheiro</td>"."<td>Juros</td>"."<td>Devoluções</td>"."</tr>";
    echo "<td>".'Tatiane'."</td>\n";
    if ($juro1 < 0) {
        $juro1=0;
    }
    $loja1=$entr1+$avst1+$prest1-$juro1;
    $loja1a=number_format($loja1,2,",",".");
    echo "<td>".$loja1a."</td>\n";
    $juro1a=number_format($juro1,2,",",".");
    echo "<td>".$juro1a."</td>\n";
    $sql="select sum(ctotsaidas) as trocas from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas='$data' and cempresasaidas in (1,2 ) ";
    $exsql=pg_query($con,$sql);
    $rssql=pg_fetch_array($exsql);
    $devolucoes=$rssql['trocas'];
    $tttroca=$devolucoes;
    $devolucoes=number_format($devolucoes,2,",",".");
    echo "<td><font color=\"red\">".$devolucoes."</td>\n";
    echo "</tr>\n";
    echo "<td>".'Lucélia'."</td>\n";
    if ($juro3 < 0) {
        $juro3=0;
    }   
    $loja3=$entr3+$avst3+$prest3-$juro3;
    $loja3a=number_format($loja3,2,",",".");
    echo "<td>".$loja3a."</td>\n";
    $juro3a=number_format($juro3,2,",",".");
    echo "<td>".$juro3a."</td>\n";
    $sql="select sum(ctotsaidas) as trocas from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas='$data' and cempresasaidas in (3,4 ) ";
    $exsql=pg_query($con,$sql);
    $rssql=pg_fetch_array($exsql);
    $devolucoes=$rssql['trocas'];
    $tttroca=$tttroca+$devolucoes;    
    $devolucoes=number_format($devolucoes,2,",",".");
    echo "<td><font color=\"red\">".$devolucoes."</td>\n";
    echo "</tr>\n";    
    echo "<td>".'Maynara'."</td>\n";
    if ($juro5 < 0) {
        $juro5=0;
    }
    $loja5=$entr5+$avst5+$prest5-$juro5;
    $loja5a=number_format($loja5,2,",",".");
    echo "<td>".$loja5a."</td>\n";
    $juro5a=number_format($juro5,2,",",".");
    echo "<td>".$juro5a."</td>\n";
    $sql="select sum(ctotsaidas) as trocas from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas='$data' and cempresasaidas in (5,6 ) ";
    $exsql=pg_query($con,$sql);
    $rssql=pg_fetch_array($exsql);
    $devolucoes=$rssql['trocas'];
    $tttroca=$tttroca+$devolucoes;  
    $devolucoes=number_format($devolucoes,2,",",".");
    echo "<td><font color=\"red\">".$devolucoes."</td>\n";
    echo "</tr>\n";
    echo "<td>".'Adrielli'."</td>\n";
    if ($juro7 < 0) {
        $juro7=0;
    }
    $loja7=$entr7+$avst7+$prest7-$juro7;
    $loja7a=number_format($loja7,2,",",".");
    echo "<td>".$loja7a."</td>\n";
    $juro7a=number_format($juro7,2,",",".");
    echo "<td>".$juro7a."</td>\n";
    $sql="select sum(ctotsaidas) as trocas from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas='$data' and cempresasaidas in (7,8 ) ";
    $exsql=pg_query($con,$sql);
    $rssql=pg_fetch_array($exsql);
    $devolucoes=$rssql['trocas'];
    $tttroca=$tttroca+$devolucoes;
    $devolucoes=number_format($devolucoes,2,",",".");
    echo "<td><font color=\"red\">".$devolucoes."</td>\n";
    echo "</tr>\n";
    echo "<td>".'Gislaine'."</td>\n";
    if ($juro9 < 0) {
        $juro9=0;
    }
    $loja9=$entr9+$avst9+$prest9-$juro9;
    $loja9a=number_format($loja9,2,",",".");
    echo "<td>".$loja9a."</td>\n";
    $juro9a=number_format($juro9,2,",",".");
    echo "<td>".$juro9a."</td>\n";
    $sql="select sum(ctotsaidas) as trocas from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas='$data' and cempresasaidas in (9,10 ) ";
    $exsql=pg_query($con,$sql);
    $rssql=pg_fetch_array($exsql);
    $devolucoes=$rssql['trocas'];
    $tttroca=$tttroca+$devolucoes;
    $devolucoes=number_format($devolucoes,2,",",".");
    echo "<td><font color=\"red\">".$devolucoes."</td>\n";
    echo "</tr>\n";
    echo "<td>".'Juciane'."</td>\n";
    if ($juro11 < 0) {
        $juro11=0;
    }
    $loja11=$entr11+$avst11+$prest11-$juro11;
    $loja11a=number_format($loja11,2,",",".");
    echo "<td>".$loja11a."</td>\n";
    $juro11a=number_format($juro11,2,",",".");
    echo "<td>".$juro11a."</td>\n";
    $sql="select sum(ctotsaidas) as trocas from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas='$data' and cempresasaidas in (11,12 ) ";
    $exsql=pg_query($con,$sql);
    $rssql=pg_fetch_array($exsql);
    $devolucoes=$rssql['trocas'];
    $tttroca=$tttroca+$devolucoes;
    $devolucoes=number_format($devolucoes,2,",",".");
    echo "<td><font color=\"red\">".$devolucoes."</td>\n";
    echo "</tr>\n";
    echo "<td>".'Outras Empresas CDR'."</td>\n";
    if ($jurofc < 0) {
        $jurofc=0;
    }
    $lojafc=$entrfc+$avstfc+$prestfc-$jurofc;
    $lojafca=number_format($lojafc,2,",",".");
    echo "<td>".$lojafca."</td>\n";
    $jurofca=number_format($jurofc,2,",",".");
    echo "<td>".$jurofca."</td>\n";
    $sql="select sum(ctotsaidas) as trocas from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas='$data' and cempresasaidas > 12 ";
    $exsql=pg_query($con,$sql);
    $rssql=pg_fetch_array($exsql);
    $devolucoes=$rssql['trocas'];
    $tttroca=$tttroca+$devolucoes;
    $devolucoes=number_format($devolucoes,2,",",".");
    echo "<td><font color=\"red\">".$devolucoes."</td>\n";
    echo "</tr>\n";
    echo "<td>".'Totais'."</td>\n";
    $lojas=$loja1+$loja3+$loja5+$loja7+$loja9+$loja11+$lojafc;
    $lojas=number_format($lojas,2,",",".");
    echo "<td>".$lojas."</td>\n";
    $juros=$juro1+$juro3+$juro5+$juro7+$juro9+$juro11+$jurofc;
    $juros=number_format($juros,2,",",".");
    echo "<td>".$juros."</td>\n";
    $tttroca=number_format($tttroca,2,",",".");
    echo "<td>".$tttroca."</td>\n";
    echo "</tr>";
    
    echo "<table border='2' width='100%' bgcolor=#E3F6CE >";
    echo "<tr><td>Loja</td>"."<td>Destino</td>"."<td>Valor</td>"."</tr>";
    
    $sql="select sum(ctotsaidas),cempresasaidas,cclisaidas from asaidas where i_asa_codigo_tna <> 86 and cclisaidas in (39498,41238,43575,30702) and  cnatsaidas in ('5.102','6.102','1.202','2.202','5.114','6.114','5.405','6.405') and cemisaidas = '$data' GROUP BY cempresasaidas,cclisaidas order by cempresasaidas,cclisaidas";
    $exsql=pg_query($con,$sql);
    $rssql= pg_fetch_array($exsql);
    if ($rssql == '') {        
    } else {
        $exsql=pg_query($con,$sql);
        while($row = pg_fetch_assoc($exsql)){
            $emp=$row['cempresasaidas'];
            $valor=$row['sum'];
            $cliente=$row['cclisaidas'];
            if ($cliente=='30702') {
                $destido='Lages';
            }
            if ($cliente=='39498') {
                $destido='Videira';
            }
            if ($cliente=='41238') {
                $destido='Martello';
            }
            if ($cliente=='43575') {
                $destido='Shop Masp Videira';
            }
            if ($cliente=='41239') {
                $destido='Atacadão';
            }
            if ($cliente=='46028') {
                $destido='Confecções Apolo';
            }
            $valor=number_format($valor,2,",",".");
            if ($emp==1 or $emp==2) {
                $loja='Tatiane';
            }
            if ($emp==3 or $emp==4) {
                $loja='Lucélia';
            }
            if ($emp==5 or $emp==6) {
                $loja='Maynara';
            }
            if ($emp==7 or $emp==8) {
                $loja='Adrielli';
            }
            if ($emp==9 or $emp==10) {
                $loja='Gisaline';
            }
            if ($emp==11 or $emp==12) {
                $loja='Juciane';
            }
            if ($emp>12) {
                $loja='Outras Empresas';
            }
            echo "<td>".$loja."</td>\n";
            echo "<td>".$destido."</td>\n";
            echo "<td>"."R$".$valor."</td>\n";            
            echo "</tr>";
        }
    }
    
    
    
    echo "<br>";
    $sql="select cusuariocod,cnomope from parametros order by cnomope";
    $exsql=pg_query($con,$sql);
    echo "<table border='2' width='100%' bgcolor=#E3F6CE >";
    echo "<tr><td>Cod.Usuário</td>"."<td>Usuário</td>"."<td>Faturamento</td>"."</tr>";
    while($row = pg_fetch_assoc($exsql)){
        $codu=$row['cusuariocod'];
        $usu=$row['cnomope'];
        $com="select (sum(cvpadupli)) prestacao from asduplicatas where cdpadupli = '$data' and copadupli=$codu ";
        $excom= pg_query($con,$com);
        $rescom= pg_fetch_array($excom);
        $prestu=$rescom['prestacao'];
        $com="select (sum (ctotsaidas)) avista from asaidas inner join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao
        where caviaprsaidas = 'V'  and ctranatureza='SIM' and ctessaidas='S' and cemisaidas = '$data' and copcsaidas = $codu ";
        $excom= pg_query($con,$com);
        $rscom= pg_fetch_array($excom);
        $avstu=$rscom['avista'];
        $com="select (sum(centsaidas)) entradas from asaidas where copcsaidas = $codu  and cemisaidas = '$data'";
        $excom= pg_query($con,$com);
        $rscom= pg_fetch_array($excom);
        $entrus=$rscom['entradas'];
        $fat=$prestu+$avstu+$entrus;
        if ($fat <> 0) {
            $fat=number_format($fat,2,",",".");
            echo "<td>".$codu."</td>\n";
            echo "<td>".$usu."</td>\n";
            echo "<td>".$fat."</td>\n";
            echo "</tr>";
        }
       
    }

    echo "<br>";
    echo "<table border='2' width='100%' bgcolor=#E3F6CE >";   
    
}
if ($base=='V') {
    if(!@($con=pg_connect ("host=192.168.16.190 dbname=troll_videira port=5430 user=postgres password=ky$14gr@"))){
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
    echo"<html><center><h1><font face='Arial' color='black'>Videira:$dataaj </font></h1></center></html>";
    $sql="select ((sum( cjurdupli)) -(sum(cdesdupli))) as juro, (sum(cvpadupli)) as prestacoes
from asduplicatas where cempdupli in (13,14) and  cdpadupli = '$data'";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $juro13=$resulsql['juro'];
    $prest13=$resulsql['prestacoes'];
    $sql="select ((sum( cjurdupli)) -(sum(cdesdupli))) as juro, (sum(cvpadupli)) as prestacoes
from asduplicatas where cempdupli in (15,16) and  cdpadupli = '$data'";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $juro15=$resulsql['juro'];
    $prest15=$resulsql['prestacoes'];
    $sql="select ((sum( cjurdupli)) -(sum(cdesdupli))) as juro, (sum(cvpadupli)) as prestacoes
from asduplicatas where cempdupli in (17,18) and  cdpadupli = '$data'";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $juro17=$resulsql['juro'];
    $prest17=$resulsql['prestacoes'];
    $sql="select ((sum( cjurdupli)) -(sum(cdesdupli))) as juro, (sum(cvpadupli)) as prestacoes from asduplicatas where cempdupli > 18 and  cdpadupli = '$data'";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $jurofv=$resulsql['juro'];
    $prestfv=$resulsql['prestacoes'];
    $sql="select ((sum( cjurdupli)) -(sum(cdesdupli))) as juro, (sum(cvpadupli)) as prestacoes from asduplicatas where cempdupli < 13 and  cdpadupli = '$data'";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $jurofv1=$resulsql['juro'];
    $prestfv1=$resulsql['prestacoes'];
    $sql="select (sum(centsaidas)) entradas from asaidas where cempresasaidas in (13,14) and cemisaidas = '$data'";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $entr13=$resulsql['entradas'];
    $sql="select (sum(centsaidas)) entradas from asaidas where cempresasaidas in (15,16) and cemisaidas = '$data'";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $entr15=$resulsql['entradas'];
    $sql="select (sum(centsaidas)) entradas from asaidas where cempresasaidas in (17,18) and cemisaidas = '$data'";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $entr17=$resulsql['entradas'];
    $sql="select (sum(centsaidas)) as entradas from asaidas where cempresasaidas > 18 and cemisaidas = '$data'";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $entrfv=$resulsql['entradas'];
    $sql="select (sum(centsaidas)) entradas from asaidas where cempresasaidas < 13 and cemisaidas = '$data'";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $entrfv1=$resulsql['entradas'];
    $sql="select (sum (ctotsaidas)) avista from asaidas inner join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao
 where caviaprsaidas = 'V' and cempresasaidas in (13,14) and ctranatureza='SIM' and ctessaidas='S' and cemisaidas = '$data'";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $avst13=$resulsql['avista'];
    $sql="select (sum (ctotsaidas)) avista from asaidas inner join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao
 where caviaprsaidas = 'V' and cempresasaidas in (15,16) and ctranatureza='SIM' and ctessaidas='S' and cemisaidas = '$data'";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $avst15=$resulsql['avista'];
    $sql="select (sum (ctotsaidas)) avista from asaidas inner join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao
 where caviaprsaidas = 'V' and cempresasaidas in (17,18) and ctranatureza='SIM' and ctessaidas='S' and cemisaidas = '$data'";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $avst17=$resulsql['avista'];
    $sql="select (sum (ctotsaidas)) avista from asaidas inner join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao
 where caviaprsaidas = 'V' and cempresasaidas > 18 and ctranatureza='SIM' and ctessaidas='S' and cemisaidas = '$data';";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $avstfv=$resulsql['avista'];
    $sql="select (sum (ctotsaidas)) avista from asaidas inner join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao
 where caviaprsaidas = 'V' and cempresasaidas < 13 and ctranatureza='SIM' and ctessaidas='S' and cemisaidas = '$data';";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $avstfv1=$resulsql['avista'];
    echo "<br><br>";
    echo "<table border='2' width='100%' bgcolor=#E3F6CE >";
    echo "<tr><td>Loja</td>"."<td>TT Dinheiro</td>"."<td>Juros</td>"."<td>Trocas</td>"."</tr>";
    echo "<td>".'Nádia'."</td>\n";
    if ($juro13 < 0) {
        $juro13=0;
    }
    $loja13=$entr13+$avst13+$prest13-$juro13;
    $loja13a=number_format($loja13,2,",",".");
    echo "<td>".$loja13a."</td>\n";
    $juro13a=number_format($juro13,2,",",".");
    echo "<td>".$juro13a."</td>\n";
    $sql="select sum(ctotsaidas) as trocas from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where  i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas='$data' and cempresasaidas in (13,14 ) ";
    $exsql=pg_query($con,$sql);
    $rssql=pg_fetch_array($exsql);
    $devolucoes=$rssql['trocas'];
    $tttroca=$devolucoes;
    $devolucoes=number_format($devolucoes,2,",",".");
    echo "<td><font color=\"red\">".$devolucoes."</td>\n";
    echo "</tr>\n";
    echo "<td>".'Táis'."</td>\n";
    if ($juro15 < 0) {
        $juro15=0;
    }
    $loja15=$entr15+$avst15+$prest15-$juro15;
    $loja15a=number_format($loja15,2,",",".");
    echo "<td>".$loja15a."</td>\n";
    $juro15a=number_format($juro15,2,",",".");
    echo "<td>".$juro15a."</td>\n";
    $sql="select sum(ctotsaidas) as trocas from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas='$data' and cempresasaidas in (15,16 ) ";
    $exsql=pg_query($con,$sql);
    $rssql=pg_fetch_array($exsql);
    $devolucoes=$rssql['trocas'];
    $tttroca=$tttroca+$devolucoes;
    $devolucoes=number_format($devolucoes,2,",",".");
    echo "<td><font color=\"red\">".$devolucoes."</td>\n";
    echo "</tr>\n";
    echo "<td>".'Shop Videira'."</td>\n";
    if ($juro17 < 0) {
        $juro17=0;
    }
    $loja17=$entr17+$avst17+$prest17-$juro17;
    $loja17a=number_format($loja17,2,",",".");
    echo "<td>".$loja17a."</td>\n";
    $juro17a=number_format($juro17,2,",",".");
    echo "<td>".$juro17a."</td>\n";
    $sql="select sum(ctotsaidas) as trocas from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas='$data' and cempresasaidas in (17,18 ) ";
    $exsql=pg_query($con,$sql);
    $rssql=pg_fetch_array($exsql);
    $devolucoes=$rssql['trocas'];
    $tttroca=$tttroca+$devolucoes;
    $devolucoes=number_format($devolucoes,2,",",".");
    echo "<td><font color=\"red\">".$devolucoes."</td>\n";
    echo "</tr>\n";
    echo "<td>".'Outras Empresas Videira'."</td>\n";
    $jurofv2=$jurofv+$jurofv1;
    if ($jurofv2 < 0) {
        $jurofv2=0;
    }
    $entrfv2=$entrfv+$entrfv1;
    $avstfv2=$avstfv+$avstfv1;
    $prestfv2=$prestfv+$prestfv1;
    $lojafv=$entrfv2+$avstfv2+$prestfv2-$jurofv2;
    $lojafva=number_format($lojafv,2,",",".");
    echo "<td>".$lojafva."</td>\n";
    $jurofv2a=number_format($jurofv2,2,",",".");
    echo "<td>".$jurofv2a."</td>\n";
    $sql="select sum(ctotsaidas) as trocas from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas='$data' and cempresasaidas < 13 ";
    $exsql=pg_query($con,$sql);
    $rssql=pg_fetch_array($exsql);
    $devolucoes1=$rssql['trocas'];
    $sql="select sum(ctotsaidas) as trocas from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas='$data' and cempresasaidas > 18 ";
    $exsql=pg_query($con,$sql);
    $rssql=pg_fetch_array($exsql);
    $devolucoes2=$rssql['trocas'];
    $devolucoes=$devolucoes1+$devolucoes2;    
    $tttroca=$tttroca+$devolucoes;
    $devolucoes=number_format($devolucoes,2,",",".");
    echo "<td><font color=\"red\">".$devolucoes."</td>\n";
    echo "</tr>\n";
    echo "<td>".'Totais'."</td>\n";
    $lojas=$loja13+$loja15+$loja17+$lojafva;
    $lojas=number_format($lojas,2,",",".");
    echo "<td>".$lojas."</td>\n";
    $juros=$juro13+$juro15+$juro17+$jurofv2;
    $juros=number_format($juros,2,",",".");
    echo "<td>".$juros."</td>\n";
    $tttroca=number_format($tttroca,2,",",".");
    echo "<td>".$tttroca."</td>\n";
    echo "</tr>";
    
    echo "<table border='2' width='100%' bgcolor=#E3F6CE >";
    echo "<tr><td>Loja</td>"."<td>Destino</td>"."<td>Valor</td>"."</tr>";
    
    $sql="select sum(ctotsaidas),cempresasaidas,cclisaidas from asaidas 
    where i_asa_codigo_tna <> 75 and cclisaidas in (17675,4732,17262,20517,22818,30783,30702,45942,41239,46028,42749) and  cnatsaidas in ('5.102','6.102','1.202','2.202','5.114','6.114','5.405','6.405') and cemisaidas = '$data' GROUP BY cempresasaidas,cclisaidas order by cempresasaidas,cclisaidas";
    $exsql=pg_query($con,$sql);
    $rssql= pg_fetch_array($exsql);
    if ($rssql == '') {
    } else {
        $exsql=pg_query($con,$sql);
        while($row = pg_fetch_assoc($exsql)){
            $emp=$row['cempresasaidas'];
            $valor=$row['sum'];
            $cliente=$row['cclisaidas'];
            if ($cliente=='17675') {
                $destido='Lucélia';
            }
            if ($cliente=='4732') {
                $destido='Tatiane';
            }
            if ($cliente=='17262') {
                $destido='Maynara';
            }
            if ($cliente=='20517') {
                $destido='Adrielli';
            }
            if ($cliente=='22818') {
                $destido='Gislaine';
            }
            if ($cliente=='30783') {
                $destido='Juciane';
            }
            if ($cliente=='30702') {
                $destido='Lages';
            }
            if ($cliente=='41239') {
                $destido='Atacadão';
            }
            if ($cliente=='46028') {
                $destido='Gislaine Joinville';
            }
            if ($cliente=='42749') {                
                $destido='Estoque Feira (20)';
            }
            $valor=number_format($valor,2,",",".");
            if ($emp==13 or $emp==14) {
                $loja='Nadia';
            }
            if ($emp==15 or $emp==16) {
                $loja='Martello';
            }
            if ($emp==17 or $emp==18) {
                $loja='Shop Masp Videira';
            }    
            if ($emp>18 or $emp < 13 ) {
                $loja='Outras Empresas';
            }
            echo "<td>".$loja."</td>\n";
            echo "<td>".$destido."</td>\n";
            echo "<td>"."R$".$valor."</td>\n";
            echo "</tr>";
        }
    } 
    echo "<br>";
    $sql="select cusuariocod,cnomope from parametros order by cnomope";
    $exsql=pg_query($con,$sql);
    echo "<table border='2' width='100%' bgcolor=#E3F6CE >";
    echo "<tr><td>Cod.Usuário</td>"."<td>Usuário</td>"."<td>Faturamento</td>"."</tr>";
    while($row = pg_fetch_assoc($exsql)){
        $codu=$row['cusuariocod'];
        $usu=$row['cnomope'];
        $com="select (sum(cvpadupli)) prestacao from asduplicatas where cdpadupli = '$data' and copadupli=$codu ";
        $excom= pg_query($con,$com);
        $rescom= pg_fetch_array($excom);
        $prestu=$rescom['prestacao'];
        $com="select (sum (ctotsaidas)) avista from asaidas inner join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao
        where caviaprsaidas = 'V'  and ctranatureza='SIM' and ctessaidas='S' and cemisaidas = '$data' and copcsaidas = $codu "; 
        $excom= pg_query($con,$com);
        $rscom= pg_fetch_array($excom);
        $avstu=$rscom['avista'];
        $com="select (sum(centsaidas)) entradas from asaidas where copcsaidas = $codu  and cemisaidas = '$data'";
        $excom= pg_query($con,$com);
        $rscom= pg_fetch_array($excom);
        $entrus=$rscom['entradas'];
        $fat=$prestu+$avstu+$entrus;
        if ($fat <> 0) {
            $fat=number_format($fat,2,",",".");
            echo "<td>".$codu."</td>\n";
            echo "<td>".$usu."</td>\n";
            echo "<td>".$fat."</td>\n";
            echo "</tr>";
        }
        
    }
    echo "<br>";
    echo "<table border='2' width='100%' bgcolor=#E3F6CE >";
    
}

if ($base=='J') {
    if(!@($con=pg_connect ("host=192.168.16.190 dbname=troll_joinville port=5430 user=postgres password=ky$14gr@"))){
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
    echo"<html><center><h1><font face='Arial' color='black'>Joinville:$dataaj </font></h1></center></html>";
    $sql="select ((sum( cjurdupli)) -(sum(cdesdupli))) as juro, (sum(cvpadupli)) as prestacoes
from asduplicatas where cempdupli in (1,2) and  cdpadupli = '$data'";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $juro1=$resulsql['juro'];
    $prest1=$resulsql['prestacoes'];
    $sql="select ((sum( cjurdupli)) -(sum(cdesdupli))) as juro, (sum(cvpadupli)) as prestacoes
from asduplicatas where cempdupli in (3,4) and  cdpadupli = '$data'";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $juro2=$resulsql['juro'];
    $prest2=$resulsql['prestacoes'];
    $sql="select ((sum( cjurdupli)) -(sum(cdesdupli))) as juro, (sum(cvpadupli)) as prestacoes from asduplicatas where cempdupli > 4 and  cdpadupli = '$data'";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $jurofj=$resulsql['juro'];
    $prestfj=$resulsql['prestacoes'];
    $sql="select (sum(centsaidas)) entradas from asaidas where cempresasaidas in (1,2) and cemisaidas = '$data'";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $entr1=$resulsql['entradas'];
    $sql="select (sum(centsaidas)) entradas from asaidas where cempresasaidas in (3,4) and cemisaidas = '$data'";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $entr2=$resulsql['entradas'];  
    $sql="select (sum(centsaidas)) as entradas from asaidas where cempresasaidas > 4 and cemisaidas = '$data'";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $entrfj=$resulsql['entradas'];
    $sql="select (sum (ctotsaidas)) avista from asaidas inner join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao
 where caviaprsaidas = 'V' and cempresasaidas in (1,2) and ctranatureza='SIM' and ctessaidas='S' and cemisaidas = '$data'";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $avst1=$resulsql['avista'];
    $sql="select (sum (ctotsaidas)) avista from asaidas inner join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao
 where caviaprsaidas = 'V' and cempresasaidas in (3,4) and ctranatureza='SIM' and ctessaidas='S' and cemisaidas = '$data'";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $avst2=$resulsql['avista']; 
    $sql="select (sum (ctotsaidas)) avista from asaidas inner join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao
 where caviaprsaidas = 'V' and cempresasaidas > 4 and ctranatureza='SIM' and ctessaidas='S' and cemisaidas = '$data';";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $avstfj=$resulsql['avista'];    
    echo "<br><br>";
    echo "<table border='2' width='100%' bgcolor=#E3F6CE >";
    echo "<tr><td>Loja</td>"."<td>TT Dinheiro</td>"."<td>Juros</td>"."<td>Trocas</td>"."</tr>";
    echo "<td>".'Joinville'."</td>\n";
    if ($juro1 < 0) {
        $juro1=0;
    }
    $loja1=$entr1+$avst1+$prest1-$juro1;
    $loja1a=number_format($loja1,2,",",".");
    echo "<td>".$loja1a."</td>\n";
    $juro1a=number_format($juro1,2,",",".");
    echo "<td>".$juro1a."</td>\n";
    $sql="select sum(ctotsaidas) as trocas from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas='$data' and cempresasaidas in (1,2) ";
    $exsql=pg_query($con,$sql);
    $rssql=pg_fetch_array($exsql);
    $devolucoes=$rssql['trocas'];
    $tttroca=$devolucoes;
    $devolucoes=number_format($devolucoes,2,",",".");
    echo "<td><font color=\"red\">".$devolucoes."</td>\n";
    echo "</tr>\n";
    echo "<td>".'Gislaine'."</td>\n";
    if ($juro2 < 0) {
        $juro2=0;
    }
    $loja2=$entr2+$avst2+$prest2-$juro2;
    $loja2a=number_format($loja2,2,",",".");
    echo "<td>".$loja2a."</td>\n";
    $juro2a=number_format($juro2,2,",",".");
    echo "<td>".$juro2a."</td>\n";
    $sql="select sum(ctotsaidas) as trocas from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas='$data' and cempresasaidas in (3,4 ) ";
    $exsql=pg_query($con,$sql);
    $rssql=pg_fetch_array($exsql);
    $devolucoes=$rssql['trocas'];
    $tttroca=$tttroca+$devolucoes;
    $devolucoes=number_format($devolucoes,2,",",".");
    echo "<td><font color=\"red\">".$devolucoes."</td>\n";
    echo "</tr>\n"; 
    echo "<td>".'Outras Empresas'."</td>\n";
    $jurofv2=$jurofj;
    if ($jurofv2 < 0) {
        $jurofv2=0;
    }
    $entrfv2=$entrfj;
    $avstfv2=$avstfj;
    $prestfv2=$prestfj;
    $lojafv=$entrfv2+$avstfv2+$prestfv2-$jurofv2;
    $lojafva=number_format($lojafv,2,",",".");
    echo "<td>".$lojafva."</td>\n";
    $jurofv2a=number_format($jurofv2,2,",",".");
    echo "<td>".$jurofv2a."</td>\n";
    $sql="select sum(ctotsaidas) as trocas from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas='$data' and cempresasaidas  > 4 ";
    $exsql=pg_query($con,$sql);
    $rssql=pg_fetch_array($exsql);
    $devolucoes=$rssql['trocas'];
    $tttroca=$tttroca+$devolucoes;
    $devolucoes=number_format($devolucoes,2,",",".");
    echo "<td><font color=\"red\">".$devolucoes."</td>\n";
    echo "</tr>\n";
    echo "<td>".'Totais'."</td>\n";
    $lojas=$loja1+$loja2+$lojafva;
    $lojas=number_format($lojas,2,",",".");
    echo "<td>".$lojas."</td>\n";
    $juros=$juro1+$juro2+$jurofv2;
    $juros=number_format($juros,2,",",".");
    echo "<td>".$juros."</td>\n";    
    $tttroca=number_format($tttroca,2,",",".");
    echo "<td>".$tttroca."</td>\n";
    echo "</tr>";
    echo "<table border='2' width='100%' bgcolor=#E3F6CE >";
    echo "<tr><td>Loja</td>"."<td>Destino</td>"."<td>Valor</td>"."</tr>";    
    $sql="select sum(ctotsaidas),cempresasaidas,cclisaidas from asaidas
    where cclisaidas in (39498,41238,43575,30702,45942) and i_asa_codigo_tna <> 20 and   cnatsaidas in ('5.102','6.102','1.202','2.202','5.114','6.114','5.405','6.405') and cemisaidas = '$data' GROUP BY cempresasaidas,cclisaidas order by cempresasaidas,cclisaidas";
    $exsql=pg_query($con,$sql);
    $rssql= pg_fetch_array($exsql);
    if ($rssql == '') {
    } else {
        $exsql=pg_query($con,$sql);
        while($row = pg_fetch_assoc($exsql)){
            $emp=$row['cempresasaidas'];
            $valor=$row['sum'];
            $cliente=$row['cclisaidas'];
            if ($cliente=='17675') {
                $destido='Lucélia';
            }
            if ($cliente=='4732') {
                $destido='Tatiane';
            }
            if ($cliente=='17262') {
                $destido='Maynara';
            }
            if ($cliente=='20517') {
                $destido='Adrielli';
            }
            if ($cliente=='22818') {
                $destido='Gislaine';
            }
            if ($cliente=='30783') {
                $destido='Ju (Shop Masp)';
            }
            if ($cliente=='39498') {
                $destido='Nadia';
            }
            if ($cliente=='41238') {
                $destido='Martello';
            }
            if ($cliente=='43575') {
                $destido='Aline (Shop Masp)';
            }
            if ($cliente=='30702') {
                $destido='Lages';
            }
            if ($cliente=='45942') {
                $destido='Atacadão Lages Lages';
            }
            $valor=number_format($valor,2,",",".");
            if ($emp==1 or $emp==2) {
                $loja='Atacadão';
            }
            if ($emp==3 or $emp==4) {
                $loja='Confecções Apolo';
            }
            if ($emp>4 ) {
                $loja='Outras Empresas';
            }
            echo "<td>".$loja."</td>\n";
            echo "<td>".$destido."</td>\n";
            echo "<td>"."R$".$valor."</td>\n";
            echo "</tr>";
        }
    }
    echo "<br>";
    $sql="select cusuariocod,cnomope from parametros order by cnomope";
    $exsql=pg_query($con,$sql);
    echo "<table border='2' width='100%' bgcolor=#E3F6CE >";
    echo "<tr><td>Cod.Usuário</td>"."<td>Usuário</td>"."<td>Faturamento</td>"."</tr>";
    while($row = pg_fetch_assoc($exsql)){
        $codu=$row['cusuariocod'];
        $usu=$row['cnomope'];
        $com="select (sum(cvpadupli)) prestacao from asduplicatas where cdpadupli = '$data' and copadupli=$codu ";
        $excom= pg_query($con,$com);
        $rescom= pg_fetch_array($excom);
        $prestu=$rescom['prestacao'];
        $com="select (sum (ctotsaidas)) avista from asaidas inner join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao
        where caviaprsaidas = 'V'  and ctranatureza='SIM' and ctessaidas='S' and cemisaidas = '$data' and copcsaidas = $codu ";
        $excom= pg_query($con,$com);
        $rscom= pg_fetch_array($excom);
        $avstu=$rscom['avista'];
        $com="select (sum(centsaidas)) entradas from asaidas where copcsaidas = $codu  and cemisaidas = '$data'";
        $excom= pg_query($con,$com);
        $rscom= pg_fetch_array($excom);
        $entrus=$rscom['entradas'];
        $fat=$prestu+$avstu+$entrus;
        if ($fat <> 0) {
            $fat=number_format($fat,2,",",".");
            echo "<td>".$codu."</td>\n";
            echo "<td>".$usu."</td>\n";
            echo "<td>".$fat."</td>\n";
            echo "</tr>";
        }
        
    }
    echo "<br>";
    echo "<table border='2' width='100%' bgcolor=#E3F6CE >";
    
}


if ($base=='L') {
    if(!@($con=pg_connect ("host=192.168.16.190 dbname=troll_lages port=5430 user=postgres password=ky$14gr@"))){
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
    echo"<html><center><h1><font face='Arial' color='black'>Lages:$dataaj </font></h1></center></html>";
    $sql="select ((sum( cjurdupli)) -(sum(cdesdupli))) as juro, (sum(cvpadupli)) as prestacoes
    from asduplicatas where cempdupli in (1,2) and  cdpadupli = '$data'";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $juro1=$resulsql['juro'];
    $prest1=$resulsql['prestacoes'];
    $sql="select ((sum( cjurdupli)) -(sum(cdesdupli))) as juro, (sum(cvpadupli)) as prestacoes
    from asduplicatas where cempdupli in (3,4) and  cdpadupli = '$data'";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $juro2=$resulsql['juro'];
    $prest2=$resulsql['prestacoes'];
    $sql="select ((sum( cjurdupli)) -(sum(cdesdupli))) as juro, (sum(cvpadupli)) as prestacoes from asduplicatas where cempdupli > 4 and  cdpadupli = '$data'";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $jurofj=$resulsql['juro'];
    $prestfj=$resulsql['prestacoes'];
    $sql="select (sum(centsaidas)) entradas from asaidas where cempresasaidas in (1,2) and cemisaidas = '$data'";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $entr1=$resulsql['entradas'];
    $sql="select (sum(centsaidas)) entradas from asaidas where cempresasaidas in (3,4) and cemisaidas = '$data'";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $entr2=$resulsql['entradas'];  
    $sql="select (sum(centsaidas)) as entradas from asaidas where cempresasaidas > 4 and cemisaidas = '$data'";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $entrfj=$resulsql['entradas'];
    $sql="select (sum (ctotsaidas)) avista from asaidas inner join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao
    where caviaprsaidas = 'V' and cempresasaidas in (1,2) and ctranatureza='SIM' and ctessaidas='S' and cemisaidas = '$data'";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $avst1=$resulsql['avista'];
    $sql="select (sum (ctotsaidas)) avista from asaidas inner join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao
    where caviaprsaidas = 'V' and cempresasaidas in (3,4) and ctranatureza='SIM' and ctessaidas='S' and cemisaidas = '$data'";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $avst2=$resulsql['avista']; 
    $sql="select (sum (ctotsaidas)) avista from asaidas inner join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao
    where caviaprsaidas = 'V' and cempresasaidas > 4 and ctranatureza='SIM' and ctessaidas='S' and cemisaidas = '$data';";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $avstfj=$resulsql['avista'];    
    echo "<br><br>";
    echo "<table border='2' width='100%' bgcolor=#E3F6CE >";
    echo "<tr><td>Loja</td>"."<td>TT Dinheiro</td>"."<td>Juros</td>"."<td>Trocas</td>"."</tr>";
    echo "<td>".'Lages'."</td>\n";
    if ($juro1 < 0) {
        $juro1=0;
    }
    $loja1=$entr1+$avst1+$prest1-$juro1;
    $loja1a=number_format($loja1,2,",",".");
    echo "<td>".$loja1a."</td>\n";
    $juro1a=number_format($juro1,2,",",".");
    echo "<td>".$juro1a."</td>\n";
    $sql="select sum(ctotsaidas) as trocas from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas='$data' and cempresasaidas in (1,2) ";
    $exsql=pg_query($con,$sql);
    $rssql=pg_fetch_array($exsql);
    $devolucoes=$rssql['trocas'];
    $tttroca=$devolucoes;
    $devolucoes=number_format($devolucoes,2,",",".");
    echo "<td><font color=\"red\">".$devolucoes."</td>\n";
    echo "</tr>\n";
    echo "<td>".'Atacadão'."</td>\n";
    if ($juro2 < 0) {
        $juro2=0;
    }
    $loja2=$entr2+$avst2+$prest2-$juro2;
    $loja2a=number_format($loja2,2,",",".");
    echo "<td>".$loja2a."</td>\n";
    $juro2a=number_format($juro2,2,",",".");
    echo "<td>".$juro2a."</td>\n";
    $sql="select sum(ctotsaidas) as trocas from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas='$data' and cempresasaidas in (3,4 ) ";
    $exsql=pg_query($con,$sql);
    $rssql=pg_fetch_array($exsql);
    $devolucoes=$rssql['trocas'];
    $tttroca=$tttroca+$devolucoes;
    $devolucoes=number_format($devolucoes,2,",",".");
    echo "<td><font color=\"red\">".$devolucoes."</td>\n";
    echo "</tr>\n"; 
    echo "<td>".'Outras Empresas'."</td>\n";
    $jurofv2=$jurofj;
    if ($jurofv2 < 0) {
        $jurofv2=0;
    }
    $entrfv2=$entrfj;
    $avstfv2=$avstfj;
    $prestfv2=$prestfj;
    $lojafv=$entrfv2+$avstfv2+$prestfv2-$jurofv2;
    $lojafva=number_format($lojafv,2,",",".");
    echo "<td>".$lojafva."</td>\n";
    $jurofv2a=number_format($jurofv2,2,",",".");
    echo "<td>".$jurofv2a."</td>\n";
    $sql="select sum(ctotsaidas) as trocas from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas='$data' and cempresasaidas  > 4 ";
    $exsql=pg_query($con,$sql);
    $rssql=pg_fetch_array($exsql);
    $devolucoes=$rssql['trocas'];
    $tttroca=$tttroca+$devolucoes;
    $devolucoes=number_format($devolucoes,2,",",".");
    echo "<td><font color=\"red\">".$devolucoes."</td>\n";
    echo "</tr>\n";
    echo "<td>".'Totais'."</td>\n";
    $lojas=$loja1+$loja2+$lojafva;
    $lojas=number_format($lojas,2,",",".");
    echo "<td>".$lojas."</td>\n";
    $juros=$juro1+$juro2+$jurofv2;
    $juros=number_format($juros,2,",",".");
    echo "<td>".$juros."</td>\n";    
    $tttroca=number_format($tttroca,2,",",".");
    echo "<td>".$tttroca."</td>\n";
    echo "</tr>";
    echo "<table border='2' width='100%' bgcolor=#E3F6CE >";
    echo "<tr><td>Loja</td>"."<td>Destino</td>"."<td>Valor</td>"."</tr>";    
    $sql="select sum(ctotsaidas),cempresasaidas,cclisaidas from asaidas
    where cclisaidas in (1843,3,1955,1323,12876,2170,11966,3538,13258,13152) and i_asa_codigo_tna <>  21 and  cnatsaidas in ('5.102','6.102','1.202','2.202','5.114','6.114','5.405','6.405') and cemisaidas = '$data' GROUP BY cempresasaidas,cclisaidas order by cempresasaidas,cclisaidas";
    $exsql=pg_query($con,$sql);
    $rssql= pg_fetch_array($exsql);
    if ($rssql == '') {
    } else {
        $exsql=pg_query($con,$sql);
        while($row = pg_fetch_assoc($exsql)){
            $emp=$row['cempresasaidas'];
            $valor=$row['sum'];
            $cliente=$row['cclisaidas'];
            if ($cliente=='1843') {
                $destido='Lucélia';
            }
            if ($cliente=='3') {
                $destido='Rosane';
            }
            if ($cliente=='1955') {
                $destido='Vila Viadão';
            }
            if ($cliente=='1323') {
                $destido='Adrielli';
            }
            if ($cliente=='12876') {
                $destido='Josi (Apolo)';
            }
            if ($cliente=='2170') {
                $destido='Ju (Shop Masp)';
            }
            if ($cliente=='11966') {
                $destido='Mayara (Atacadão)';
            }
            if ($cliente=='3538') {
                $destido='Nadia Gatinha';
            }
            if ($cliente=='13258') {
                $destido='Martello';
            }
            if ($cliente=='13152') {
                $destido='Aline (Shop Masp)';
            }
            $valor=number_format($valor,2,",",".");
            if ($emp==1 or $emp==2) {
                $loja='Papai Cesar';
            }
            if ($emp==3 or $emp==4) {
                $loja='Atacadão Lages';
            }
            if ($emp>4 ) {
                $loja='Outras Empresas';
            }
            echo "<td>".$loja."</td>\n";
            echo "<td>".$destido."</td>\n";
            echo "<td>"."R$".$valor."</td>\n";
            echo "</tr>";
        }
    }
    echo "<br>";
    $sql="select cusuariocod,cnomope from parametros order by cnomope";
    $exsql=pg_query($con,$sql);
    echo "<table border='2' width='100%' bgcolor=#E3F6CE >";
    echo "<tr><td>Cod.Usuário</td>"."<td>Usuário</td>"."<td>Faturamento</td>"."</tr>";
    while($row = pg_fetch_assoc($exsql)){
        $codu=$row['cusuariocod'];
        $usu=$row['cnomope'];
        $com="select (sum(cvpadupli)) prestacao from asduplicatas where cdpadupli = '$data' and copadupli=$codu ";
        $excom= pg_query($con,$com);
        $rescom= pg_fetch_array($excom);
        $prestu=$rescom['prestacao'];
        $com="select (sum (ctotsaidas)) avista from asaidas inner join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao
        where caviaprsaidas = 'V'  and ctranatureza='SIM' and ctessaidas='S' and cemisaidas = '$data' and copcsaidas = $codu ";
        $excom= pg_query($con,$com);
        $rscom= pg_fetch_array($excom);
        $avstu=$rscom['avista'];
        $com="select (sum(centsaidas)) entradas from asaidas where copcsaidas = $codu  and cemisaidas = '$data'";
        $excom= pg_query($con,$com);
        $rscom= pg_fetch_array($excom);
        $entrus=$rscom['entradas'];
        $fat=$prestu+$avstu+$entrus;
        if ($fat <> 0) {
            $fat=number_format($fat,2,",",".");
            echo "<td>".$codu."</td>\n";
            echo "<td>".$usu."</td>\n";
            echo "<td>".$fat."</td>\n";
            echo "</tr>";
        }
        
    }
    echo "<br>";
    echo "<table border='2' width='100%' bgcolor=#E3F6CE >";
    
}






?>
<!DOCTYPE html>
<html>
<head>
<center>
<title>ViaBrasil.bay</title>
<link rel="stylesheet" href="css/style.css"></link>
<a title='Imprimir' href='javascript:window.print()'><img src="img/impressora.jpg" alt="10" heigth ="40px" width="40px"  border="0" /></a>
<br><br>

</center>
</head>
</html>
