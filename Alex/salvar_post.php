<!DOCTYPE html>
<html>
<head>
<br><br>
</html>
<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
include_once("conexao.php");
date_default_timezone_set('America/Sao_Paulo');
$time = date('H:i:s');
$dia = date('Y-m-d');
//$volta="<script>window.location='http://192.168.13.2/Alex/'</script>";
//error_reporting(0);	
set_time_limit(0);
$clinha = $_POST['linha'];
if ($clinha <> null) {
    $sql = "select cdeslinha from tlinha where ccodlinha = $clinha";
    $exsql = pg_query($conn,$sql);
    $rssql = pg_fetch_array($exsql);
    $dlinha = $rssql['cdeslinha'];
    $dlinha = $clinha.'-'.$dlinha;
    $clinha = ' and clinproduto='.$clinha;	    
} else {
    $dlinha = '0-Todas';
}
$cgrupo = $_POST['grupo'];
if ($cgrupo <> null) {
    $sql = "select cdesgrupo from tgrupo where ccodgrupo = $cgrupo";
    $exsql = pg_query($conn,$sql);
    $rssql = pg_fetch_array($exsql);
    $dgrupo = $rssql['cdesgrupo'];
    $dgrupo = $cgrupo.'-'.$dgrupo;
    $cgrupo = ' and cgruporduto='.$cgrupo;	    
} else {
    $dgrupo = '0-Todos';
}	
$cmarca = $_POST['marca'];
if ($cmarca <> null) {
    $sql = "select cdesmarca from tmarca where ccodmarca = $cmarca";
    $exsql = pg_query($conn,$sql);
    $rssql = pg_fetch_array($exsql);
    $dmarca = $rssql['cdesmarca'];
    $dmarca=$cmarca.'-'.$dmarca;
    $cmarca = ' and cmarproduto='.$cmarca;
}else {
    $dmarca = '0-Todas';
}
$cdepartamento = $_POST['departamento'];
if ($cdepartamento <> null) {
    $sql = "select cdesdepartamento from tdepartamento where ccoddepartamento = $cdepartamento";
    $exsql = pg_query($conn,$sql);
    $rssql = pg_fetch_array($exsql);
    $dpartamento = $rssql['cdesdepartamento'];
    $dpartamento = $cdepartamento.'-'.$dpartamento;
    $cdepartamento = ' and cdepproduto='.$cdepartamento;
}else {
    $dpartamento = '0-Todos';
}
echo "<br><br>";
echo "Filtros Selecionados:"."<br><br>";
echo "Linha:".$dlinha."<br>";
echo "Grupo:".$dgrupo."<br>";
echo "Marca:".$dmarca."<br>";
echo "Depar.:".$dpartamento."<br><br>";
$tipo = $_POST['rel'];
$dados = $_POST['dados'];
if ($tipo == 'T') {
	echo "<table border='2' width='100%' bgcolor=#F5F6CE >";
	echo "<tr><td><font size=3><strong></strong></font></td>"."<td><font color=\"black\" size=3><strong>Esportes</strong></font></td>".
	   	"<td><font color=\"black\" size=3><strong>Adrieli</strong></font></td>"."<td><font color=\"black\" size=3><strong>Vila</strong></font></td>".
	   	"<td><font color=\"black\" size=3><strong>Nadia</strong></font></td>"."<td><font color=\"black\" size=3><strong>Cleusa</strong></font></td>".
	   	"<td><font color=\"black\" size=3><strong>Shop Vid.</strong></font></td>"."<td><font color=\"black\" size=3><strong>Atacadão</strong></font></td>".
	   	"<td><font color=\"black\" size=3><strong>Lages</strong></font></td>"."<td><font color=\"black\" size=3><strong>Total</strong></font></td>"."</tr>";
	$sql = "select (select (sum(centhistorico)-sum(csaihisotorico))  from ahistorico inner join aprodutos on cprohistorico = ccodproduto $clinha $cgrupo $cmarca $cdepartamento 
            and cemphistorico in (3,4)) as estoque "; 
	echo "<td><strong><font color=\"black\">".'Estoque'."</font></strong></td>\n";
	$exsql = pg_query($conn,$sql);
    $rssql = pg_fetch_array($exsql);     
    $estoq = $rssql['estoque'];
    echo "<td>".number_format($estoq,2,",",".")."</td>\n";
    $c2 = $estoq;
    $sql = "select (select (sum(centhistorico)-sum(csaihisotorico))  from ahistorico inner join aprodutos on cprohistorico = ccodproduto $clinha $cgrupo $cmarca $cdepartamento
            and cemphistorico in (7,8)) as estoque "; 
    $exsql = pg_query($conn,$sql);
    $rssql = pg_fetch_array($exsql);
    $estoq = $rssql['estoque'];
    $c2 += $estoq;
    echo "<td>".number_format($estoq,2,",",".")."</td>\n";
    $sql = "select (select (sum(centhistorico)-sum(csaihisotorico))  from ahistorico inner join aprodutos on cprohistorico = ccodproduto $clinha $cgrupo $cmarca $cdepartamento
            and cemphistorico in (5,6)) as estoque ";
    $exsql = pg_query($conn,$sql);
    $rssql = pg_fetch_array($exsql);
    $estoq = $rssql['estoque'];
    $c2 += $estoq;
    echo "<td>".number_format($estoq,2,",",".")."</td>\n";
    $sql = "select (select (sum(centhistorico)-sum(csaihisotorico))  from ahistorico inner join aprodutos on cprohistorico = ccodproduto $clinha $cgrupo $cmarca $cdepartamento
            and cemphistorico in (13,14)) as estoque ";
    $exsql = pg_query($conv,$sql);
    $rssql = pg_fetch_array($exsql);
    $estoq = $rssql['estoque'];
    $c2 += $estoq;
    echo "<td>".number_format($estoq,2,",",".")."</td>\n";
    $sql = "select (select (sum(centhistorico)-sum(csaihisotorico))  from ahistorico inner join aprodutos on cprohistorico = ccodproduto $clinha $cgrupo $cmarca $cdepartamento
            and cemphistorico in (15,16)) as estoque ";
    $exsql = pg_query($conv,$sql);
    $rssql = pg_fetch_array($exsql);
    $estoq = $rssql['estoque'];
    $c2 += $estoq;
    echo "<td>".number_format($estoq,2,",",".")."</td>\n";
    $sql = "select (select (sum(centhistorico)-sum(csaihisotorico))  from ahistorico inner join aprodutos on cprohistorico = ccodproduto $clinha $cgrupo $cmarca $cdepartamento
            and cemphistorico in (17,18)) as estoque ";
    $exsql = pg_query($conv,$sql);
    $rssql = pg_fetch_array($exsql);
    $estoq = $rssql['estoque'];
    $c2 += $estoq;
    echo "<td>".number_format($estoq,2,",",".")."</td>\n";
    $sql = "select (select (sum(centhistorico)-sum(csaihisotorico))  from ahistorico inner join aprodutos on cprohistorico = ccodproduto $clinha $cgrupo $cmarca $cdepartamento
            and cemphistorico in (1,2)) as estoque ";
    $exsql = pg_query($conj,$sql);
    $rssql = pg_fetch_array($exsql);
    $estoq = $rssql['estoque'];
    $c2 += $estoq;
    echo "<td>".number_format($estoq,2,",",".")."</td>\n";
    $exsql = pg_query($conl,$sql);
    $rssql = pg_fetch_array($exsql);
    $estoq = $rssql['estoque'];
    $c2 += $estoq;
    echo "<td>".number_format($estoq,2,",",".")."</td>\n";    
    echo "<td><strong><font color=\"black\">".number_format($c2,2,",",".")."</font></strong></td>\n";   
    echo "</tr>\n";
    echo "</table>";
    if ($dados == 'V') {
        $dtin = $_POST['datai'];
        if ($dtin == null) {
            $dtin = $dia;
        }
        $dtfn = $_POST['dataf'];
        if ($dtfn == null) {
            $dtfn = $dia;
        }
        $partes = explode("-", $dtin);
        $ano = $partes[0];
        $mes = $partes[1];
        $dia = $partes[2];
        $datai = $dia.'/'.$mes.'/'.$ano;
        $partes = explode("-", $dtfn);
        $ano = $partes[0];
        $mes = $partes[1];
        $dia = $partes[2];
        $dataf = $dia.'/'.$mes.'/'.$ano;
        echo "<br><br>";
        echo "Vendas de:$datai até: $dataf";
        echo "<br>";
        echo "<table border='2' width='100%' bgcolor=#F5F6CE >";
        echo "<tr><td><center><font color=\"black\" size=2><strong>Esportes</strong></center></font></td>"."<td><strong><center><font color=\"black\" size=2><strong>Adrieli</strong></center></font></td>".
            "<td><center><font color=\"black\" size=2><strong>Vila</strong></center></font></td>"."<td><center><font color=\"black\" size=2><strong>Nadia</strong></center></font></td>".
            "<td><center><font color=\"black\" size=2><strong>Cleusa</strong></center></font></td>"."<td><center><font color=\"black\" size=2><strong>Shop Vid.</strong></center></font></td>".
            "<td><center><font color=\"black\" size=2><strong>Atac.</strong></center></font></td>"."<td><center><font color=\"black\" size=2><strong>Lages</strong></center></font></td>".
            "<td><center><font color=\"black\" size=2><strong>TT</strong></center></font></td>"."</tr>";
        
        $sql = "select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join
            tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and
            cemihistorico >= '$dtin' and cemphistorico in (3,4) and cemihistorico <= '$dtfn' $clinha $cgrupo $cmarca $cdepartamento )";
        $exsql = pg_query($conn,$sql);
        $rssql = pg_fetch_array($exsql);
        $tt = $rssql['sum']; $c1 = $tt;
        echo "<td><font size=2><strong><center>".number_format($tt,2,",",".")."</center></strong></font></td>\n";
        $sql = "select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join
            tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and
            cemihistorico >= '$dtin' and cemphistorico in (7,8) and cemihistorico <= '$dtfn' $clinha $cgrupo $cmarca $cdepartamento )";
        $exsql = pg_query($conn,$sql);
        $rssql = pg_fetch_array($exsql);
        $tt = $rssql['sum']; $c1 += $tt;
        echo "<td><font size=2><strong><center>".number_format($tt,2,",",".")."</center></strong></font></td>\n";
        $sql = "select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join
            tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and
            cemihistorico >= '$dtin' and cemphistorico in (5,6) and cemihistorico <= '$dtfn' $clinha $cgrupo $cmarca $cdepartamento )";
        $exsql = pg_query($conn,$sql);
        $rssql = pg_fetch_array($exsql);
        $tt = $rssql['sum']; $c1 += $tt;
        echo "<td><font size=2><strong><center>".number_format($tt,2,",",".")."</center></strong></font></td>\n";
        $sql = "select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join
            tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and
            cemihistorico >= '$dtin' and cemphistorico in (13,14) and cemihistorico <= '$dtfn' $clinha $cgrupo $cmarca $cdepartamento )";
        $exsql = pg_query($conv,$sql);
        $rssql = pg_fetch_array($exsql);
        $tt = $rssql['sum']; $c1 += $tt;
        echo "<td><font size=2><strong><center>".number_format($tt,2,",",".")."</center></strong></font></td>\n";
        $sql = "select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join
            tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and
            cemihistorico >= '$dtin' and cemphistorico in (15,16) and cemihistorico <= '$dtfn' $clinha $cgrupo $cmarca $cdepartamento )";
        $exsql = pg_query($conv,$sql);
        $rssql = pg_fetch_array($exsql);
        $tt = $rssql['sum']; $c1 += $tt;
        echo "<td><font size=2><strong><center>".number_format($tt,2,",",".")."</center></strong></font></td>\n";
        $sql = "select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join
            tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and
            cemihistorico >= '$dtin' and cemphistorico in (17,18) and cemihistorico <= '$dtfn' $clinha $cgrupo $cmarca $cdepartamento )";
        $exsql = pg_query($conv,$sql);
        $rssql = pg_fetch_array($exsql);
        $tt = $rssql['sum']; $c1 += $tt;
        echo "<td><font size=2><strong><center>".number_format($tt,2,",",".")."</center></strong></font></td>\n";
        $sql = "select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join
            tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and
            cemihistorico >= '$dtin' and cemphistorico in (1,2) and cemihistorico <= '$dtfn' $clinha $cgrupo $cmarca $cdepartamento )";
        $exsql = pg_query($conj,$sql);
        $rssql = pg_fetch_array($exsql);
        $tt = $rssql['sum']; $c1 += $tt;
        echo "<td><font size=2><strong><center>".number_format($tt,2,",",".")."</center></strong></font></td>\n";
        $sql = "select (select sum(csaihisotorico-centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join
            tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha on ccodlinha = clinproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and
            cemihistorico >= '$dtin' and cemphistorico in (1,2) and cemihistorico <= '$dtfn' $clinha $cgrupo $cmarca $cdepartamento )";
        $exsql = pg_query($conl,$sql);
        $rssql = pg_fetch_array($exsql);
        $tt = $rssql['sum']; $c1 += $tt;
        echo "<td><font size=2><strong><center>".number_format($tt,2,",",".")."</center></strong></font></td>\n";
        echo "<td><font size=2><strong><center>".number_format($c1,2,",",".")."</center></strong></font></td>\n";
        echo "</table>";
        echo "<br><br>";
    }
}
if ($tipo == 'M') {   
    $sql = "begin";
    $exsql = pg_query($conn,$sql);    
    $sql = "select (sum(centhistorico)-sum(csaihisotorico)) as estoque,(sum(centhistorico*cpcuproduto)-sum(csaihisotorico*cpcuproduto)) as custo,cmarproduto,cdesmarca  from ahistorico inner join aprodutos on cprohistorico = ccodproduto
         join tmarca on cmarproduto =  ccodmarca $clinha $cgrupo $cmarca $cdepartamento and cemphistorico in (3,4)
         group by cmarproduto,cdesmarca  having sum(centhistorico-csaihisotorico) <> 0
        order by cdesmarca";
    $exsql = pg_query($conn,$sql); 
    while ($row = pg_fetch_assoc($exsql)) {
        $codmarca = $row['cmarproduto'];
        $dmarca = $row['cdesmarca'];
        $estoque = $row['estoque']; 
        $custo = $row['custo']; 
        $com = "insert into alexrelatorio (codigo, marca, esportes,custoesportes) VALUES ($codmarca,'$dmarca',$estoque,$custo)";
        $excom = pg_query($conn,$com);
    }
    $sql = "select (sum(centhistorico)-sum(csaihisotorico)) as estoque,(sum(centhistorico*cpcuproduto)-sum(csaihisotorico*cpcuproduto)) as custo,cmarproduto,cdesmarca  from ahistorico inner join aprodutos on cprohistorico = ccodproduto
         join tmarca on cmarproduto =  ccodmarca $clinha $cgrupo $cmarca $cdepartamento and cemphistorico in (7,8)
         group by cmarproduto,cdesmarca  having sum(centhistorico-csaihisotorico) <> 0
        order by cdesmarca";    
    $exsql=pg_query($conn,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $codmarca = $row['cmarproduto'];
        $dmarca = $row['cdesmarca'];
        $estoque = $row['estoque'];
        $custo = $row['custo']; 
        $com = "select codigo from alexrelatorio where codigo = $codmarca ";
        $excom = pg_query($conn,$com);
        $rscom = pg_fetch_array($excom);
        $ccmarca = $rscom['codigo'];
        if ($ccmarca == null) {
            $com = "insert into alexrelatorio (codigo, marca, adrieli,custoadrieli) VALUES ($codmarca,'$dmarca',$estoque,$custo)";
        } else {
            $com = "update alexrelatorio set adrieli = $estoque , custoadrieli = $custo  where  codigo = $codmarca ";
        }
        $excom=pg_query($conn,$com);
    }
    $sql = "select (sum(centhistorico)-sum(csaihisotorico)) as estoque,(sum(centhistorico*cpcuproduto)-sum(csaihisotorico*cpcuproduto)) as custo,cmarproduto,cdesmarca  from ahistorico inner join aprodutos on cprohistorico = ccodproduto
         join tmarca on cmarproduto =  ccodmarca $clinha $cgrupo $cmarca $cdepartamento and cemphistorico in (5,6)
         group by cmarproduto,cdesmarca  having sum(centhistorico-csaihisotorico) <> 0
        order by cdesmarca";
    $exsql=pg_query($conn,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $codmarca = $row['cmarproduto'];
        $dmarca = $row['cdesmarca'];
        $estoque = $row['estoque'];
        $custo = $row['custo']; 
        $com = "select codigo from alexrelatorio where codigo = $codmarca ";
        $excom = pg_query($conn,$com);
        $rscom = pg_fetch_array($excom);
        $ccmarca = $rscom['codigo'];
        if ($ccmarca == null) {
            $com = "insert into alexrelatorio (codigo, marca, vila, custovila) VALUES ($codmarca,'$dmarca',$estoque,$custo)";
        } else {
            $com = "update alexrelatorio set vila = $estoque ,custovila = $custo  where  codigo = $codmarca ";
        }
        $excom=pg_query($conn,$com);
    }
    $sql = "select (sum(centhistorico)-sum(csaihisotorico)) as estoque,cmarproduto,cdesmarca,(sum(centhistorico*cpcuproduto)-sum(csaihisotorico*cpcuproduto)) as custo  from ahistorico inner join aprodutos on cprohistorico = ccodproduto
         join tmarca on cmarproduto =  ccodmarca $clinha $cgrupo $cmarca $cdepartamento and cemphistorico in (13,14)
         group by cmarproduto,cdesmarca  having sum(centhistorico-csaihisotorico) <> 0
        order by cdesmarca";
    $exsql=pg_query($conv,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $codmarca = $row['cmarproduto'];
        $dmarca = $row['cdesmarca'];
        $estoque = $row['estoque'];
        $custo = $row['custo'];
        $com = "select codigo from alexrelatorio where codigo = $codmarca ";
        $excom = pg_query($conn,$com);
        $rscom = pg_fetch_array($excom);
        $ccmarca = $rscom['codigo'];
        if ($ccmarca == null) {
            $com = "insert into alexrelatorio (codigo, marca, nadia, custonadia) VALUES ($codmarca,'$dmarca',$estoque,$custo)";
        } else {
            $com = "update alexrelatorio set nadia = $estoque,  custonadia = $custo where  codigo = $codmarca ";
        }
        $excom=pg_query($conn,$com);
    }
    $sql = "select (sum(centhistorico)-sum(csaihisotorico)) as estoque,cmarproduto,cdesmarca,(sum(centhistorico*cpcuproduto)-sum(csaihisotorico*cpcuproduto)) as custo  from ahistorico inner join aprodutos on cprohistorico = ccodproduto
         join tmarca on cmarproduto =  ccodmarca $clinha $cgrupo $cmarca $cdepartamento and cemphistorico in (15,16)
         group by cmarproduto,cdesmarca  having sum(centhistorico-csaihisotorico) <> 0
        order by cdesmarca";
    $exsql=pg_query($conv,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $codmarca = $row['cmarproduto'];
        $dmarca = $row['cdesmarca'];
        $estoque = $row['estoque'];
        $custo = $row['custo'];
        $com = "select codigo from alexrelatorio where codigo = $codmarca ";
        $excom = pg_query($conn,$com);
        $rscom = pg_fetch_array($excom);
        $ccmarca = $rscom['codigo'];
        if ($ccmarca == null) {
            $com = "insert into alexrelatorio (codigo, marca, cleusa, custocleusa) VALUES ($codmarca,'$dmarca',$estoque,$custo)";
        } else {
            $com = "update alexrelatorio set cleusa = $estoque, custocleusa = $custo where  codigo = $codmarca ";
        }
        $excom=pg_query($conn,$com);
    }
    $sql = "select (sum(centhistorico)-sum(csaihisotorico)) as estoque,cmarproduto,cdesmarca,(sum(centhistorico*cpcuproduto)-sum(csaihisotorico*cpcuproduto)) as custo  from ahistorico inner join aprodutos on cprohistorico = ccodproduto
         join tmarca on cmarproduto =  ccodmarca $clinha $cgrupo $cmarca $cdepartamento and cemphistorico in (17,18)
         group by cmarproduto,cdesmarca  having sum(centhistorico-csaihisotorico) <> 0
        order by cdesmarca";
    $exsql=pg_query($conv,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $codmarca = $row['cmarproduto'];
        $dmarca = $row['cdesmarca'];
        $estoque = $row['estoque'];
        $custo = $row['custo'];
        $com = "select codigo from alexrelatorio where codigo = $codmarca ";
        $excom = pg_query($conn,$com);
        $rscom = pg_fetch_array($excom);
        $ccmarca = $rscom['codigo'];
        if ($ccmarca == null) {
            $com = "insert into alexrelatorio (codigo, marca, shop, custoshop) VALUES ($codmarca,'$dmarca',$estoque,$custo)";
        } else {
            $com = "update alexrelatorio set shop = $estoque, custoshop = $custo where  codigo = $codmarca ";
        }
        $excom=pg_query($conn,$com);
    }
    $sql = "select (sum(centhistorico)-sum(csaihisotorico)) as estoque,cmarproduto,cdesmarca,(sum(centhistorico*cpcuproduto)-sum(csaihisotorico*cpcuproduto)) as custo  from ahistorico inner join aprodutos on cprohistorico = ccodproduto
         join tmarca on cmarproduto =  ccodmarca $clinha $cgrupo $cmarca $cdepartamento and cemphistorico in (1,2)
         group by cmarproduto,cdesmarca  having sum(centhistorico-csaihisotorico) <> 0
        order by cdesmarca";
    $exsql=pg_query($conj,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $codmarca = $row['cmarproduto'];
        $dmarca = $row['cdesmarca'];
        $estoque = $row['estoque'];
        $custo = $row['custo'];
        $com = "select codigo from alexrelatorio where codigo = $codmarca ";
        $excom = pg_query($conn,$com);
        $rscom = pg_fetch_array($excom);
        $ccmarca = $rscom['codigo'];
        if ($ccmarca == null) {
            $com = "insert into alexrelatorio (codigo, marca, atacadao, custoatacadao) VALUES ($codmarca,'$dmarca',$estoque,$custo)";
        } else {
            $com = "update alexrelatorio set atacadao = $estoque, custoatacadao =$custo  where  codigo = $codmarca ";
        }
        $excom=pg_query($conn,$com);
    }
    $sql = "select (sum(centhistorico)-sum(csaihisotorico)) as estoque,cmarproduto,cdesmarca,(sum(centhistorico*cpcuproduto)-sum(csaihisotorico*cpcuproduto)) as custo   from ahistorico inner join aprodutos on cprohistorico = ccodproduto
         join tmarca on cmarproduto =  ccodmarca $clinha $cgrupo $cmarca $cdepartamento and cemphistorico in (1,2)
         group by cmarproduto,cdesmarca  having sum(centhistorico-csaihisotorico) <> 0
        order by cdesmarca";
    $exsql=pg_query($conl,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $codmarca = $row['cmarproduto'];
        $dmarca = $row['cdesmarca'];
        $estoque = $row['estoque'];
        $custo = $row['custo'];
        $com = "select codigo from alexrelatorio where codigo = $codmarca ";
        $excom = pg_query($conn,$com);
        $rscom = pg_fetch_array($excom);
        $ccmarca = $rscom['codigo'];
        if ($ccmarca == null) {
            $com = "insert into alexrelatorio (codigo, marca, lages, custolages) VALUES ($codmarca,'$dmarca',$estoque,$custo)";
        } else {
            $com = "update alexrelatorio set lages = $estoque, custolages = $custo where  codigo = $codmarca ";
        }
        $excom = pg_query($conn,$com);
    }
    echo "<table border='2' width='100%' bgcolor=#F5F6CE >";
    echo "<tr><td><font size=3><strong></strong></font></td>"."<td><font color=\"black\" size=3><strong>Esportes</strong></font></td>"."<td><font color=\"black\" size=3><strong>Custo</strong></font></td>".
        "<td><font color=\"black\" size=3><strong>Adrieli</strong></font></td>"."<td><font color=\"black\" size=3><strong>Custo</strong></font></td>"."<td><font color=\"black\" size=3><strong>Vila</strong></font></td>".
        "<td><font color=\"black\" size=3><strong>Custo</strong></font></td>"."<td><font color=\"black\" size=3><strong>Nadia</strong></font></td>"."<td><font color=\"black\" size=3><strong>Custo</strong></font></td>".
        "<td><font color=\"black\" size=3><strong>Cleusa</strong></font></td>"."<td><font color=\"black\" size=3><strong>Custo</strong></font></td>"."<td><font color=\"black\" size=3><strong>Shop Vid.</strong></font></td>".
        "<td><font color=\"black\" size=3><strong>Custo</strong></font></td>"."<td><font color=\"black\" size=3><strong>Atacadão</strong></font></td>"."<td><font color=\"black\" size=3><strong>Custo</strong></font></td>".
        "<td><font color=\"black\" size=3><strong>Lages</strong></font></td>"."<td><font color=\"black\" size=3><strong>Custo</strong></font></td>"."<td><font color=\"black\" size=3><strong>TT Pç</strong></font></td>"."<td><font color=\"black\" size=3><strong>TT Custo</strong></font></td>"."</tr>";
    $sql = "select *from alexrelatorio order by marca";
    $exsql = pg_query($conn,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $codmarca = $row['marca'];
        echo "<td><strong><font color=\"black\">".$codmarca."</font></strong></td>\n";
        $qtd = $row['esportes']; $c1 = $qtd;
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
        $custo = $row['custoesportes']; $c2 = $custo;
        echo "<td>".number_format($custo,2,",",".")."</td>\n";
        $qtd = $row['adrieli']; $c1 += $qtd;
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
        $custo = $row['custoadrieli']; $c2 += $custo;
        echo "<td>".number_format($custo,2,",",".")."</td>\n";
        $qtd = $row['vila']; $c1 += $qtd;
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
        $custo = $row['custovila']; $c2 += $custo;
        echo "<td>".number_format($custo,2,",",".")."</td>\n";
        $qtd = $row['nadia']; $c1 += $qtd;
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
        $custo = $row['custonadia']; $c2 += $custo;
        echo "<td>".number_format($custo,2,",",".")."</td>\n";
        $qtd = $row['cleusa']; $c1 += $qtd;
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
        $custo = $row['custocleusa']; $c2 += $custo;
        echo "<td>".number_format($custo,2,",",".")."</td>\n";
        $qtd = $row['shop']; $c1 += $qtd;
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
        $custo = $row['custoshop']; $c2 += $custo;
        echo "<td>".number_format($custo,2,",",".")."</td>\n";
        $qtd = $row['atacadao']; $c1 += $qtd;
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
        $custo = $row['custoatacadao']; $c2 += $custo;
        echo "<td>".number_format($custo,2,",",".")."</td>\n";
        $qtd = $row['lages']; $c1 += $qtd;
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
        $custo = $row['custolages']; $c2 += $custo;
        echo "<td>".number_format($custo,2,",",".")."</td>\n";
        echo "<td><strong>".number_format($c1,2,",",".")."</strong></td>\n";
        echo "<td><strong>".number_format($c2,2,",",".")."</strong></td>\n";
        echo "</tr>\n";        
    }
    echo "<td><font size=4><strong>".'TT'."</strong></font></td>\n";
    $sql = "select sum(esportes)as esportes,sum(adrieli)as adrieli,sum(vila)as vila,sum(nadia)as nadia,sum(cleusa)as cleusa,sum(shop)as shop,sum(atacadao)as atacadao,
            sum(lages)as lages,sum(custoesportes)as cesportes,sum(custoadrieli)as cadrieli,sum(custovila)as cvila,sum(custonadia)as cnadia,sum(custocleusa)as ccleusa,
            sum(custoshop)as cshop,sum(custoatacadao)as catacadao,sum(custolages)as clages from alexrelatorio ";
    $exsql=pg_query($conn,$sql);
    $rssql=pg_fetch_array($exsql);
    $tt = $rssql['esportes']; $c1 = $tt;
    echo "<td><font size=4><strong>".number_format($tt,2,",",".")."</strong></font></td>\n";
    $tt = $rssql['cesportes']; $c2 = $tt;
    echo "<td><font size=4><strong>".number_format($tt,2,",",".")."</strong></font></td>\n";
    $tt = $rssql['adrieli'];$c1 += $tt;
    echo "<td><font size=4><strong>".number_format($tt,2,",",".")."</strong></font></td>\n";
    $tt = $rssql['cadrieli']; $c2 += $tt;
    echo "<td><font size=4><strong>".number_format($tt,2,",",".")."</strong></font></td>\n";
    $tt = $rssql['vila'];$c1 += $tt;
    echo "<td><font size=4><strong>".number_format($tt,2,",",".")."</strong></font></td>\n";
    $tt = $rssql['cvila']; $c2 += $tt;
    echo "<td><font size=4><strong>".number_format($tt,2,",",".")."</strong></font></td>\n";
    $tt = $rssql['nadia'];$c1 += $tt;
    echo "<td><font size=4><strong>".number_format($tt,2,",",".")."</strong></font></td>\n";
    $tt = $rssql['cnadia']; $c2 += $tt;
    echo "<td><font size=4><strong>".number_format($tt,2,",",".")."</strong></font></td>\n";
    $tt = $rssql['cleusa'];$c1 += $tt;
    echo "<td><font size=4><strong>".number_format($tt,2,",",".")."</strong></font></td>\n";
    $tt = $rssql['ccleusa']; $c2 += $tt;
    echo "<td><font size=4><strong>".number_format($tt,2,",",".")."</strong></font></td>\n";
    $tt = $rssql['shop'];$c1 += $tt;
    echo "<td><font size=4><strong>".number_format($tt,2,",",".")."</strong></font></td>\n";
    $tt = $rssql['cshop']; $c2 += $tt;
    echo "<td><font size=4><strong>".number_format($tt,2,",",".")."</strong></font></td>\n";
    $tt = $rssql['atacadao'];$c1 += $tt;    
    echo "<td><font size=4><strong>".number_format($tt,2,",",".")."</strong></font></td>\n";
    $tt = $rssql['catacadao']; $c2 += $tt;
    echo "<td><font size=4><strong>".number_format($tt,2,",",".")."</strong></font></td>\n";
    $tt = $rssql['lages'];$c1 += $tt;  
    echo "<td><font size=4><strong>".number_format($tt,2,",",".")."</strong></font></td>\n";
    $tt = $rssql['clages']; $c2 += $tt;
    echo "<td><font size=4><strong>".number_format($tt,2,",",".")."</strong></font></td>\n";
    echo "<td><font size=4><strong>".number_format($c1,2,",",".")."</strong></font></td>\n";
    echo "<td><font size=4><strong>".number_format($c2,2,",",".")."</strong></font></td>\n";
    echo "</tr>\n";    
    $sql="rollback";
    $exsql=pg_query($conn,$sql);
    echo "</table>";
    echo "<br><br>";
    if ($dados == 'V') {
        $dtin = $_POST['datai'];
        if ($dtin == null) {
            $dtin = $dia;
        }
        $dtfn = $_POST['dataf'];
        if ($dtfn == null) {
            $dtfn = $dia;
        }
        $partes = explode("-", $dtin);
        $ano = $partes[0];
        $mes = $partes[1];
        $dia = $partes[2];
        $datai = $dia.'/'.$mes.'/'.$ano;
        $partes = explode("-", $dtfn);
        $ano = $partes[0];
        $mes = $partes[1];
        $dia = $partes[2];
        $dataf = $dia.'/'.$mes.'/'.$ano;
        echo "<br><br>";
        echo "Vendas de:$datai até: $dataf";
        echo "<br>";
        echo "<table border='2' width='100%' bgcolor=#F5F6CE >";
        echo "<tr><td><center><font color=\"black\" size=2><strong>Esportes</strong></center></font></td>"."<td><strong><center><font color=\"black\" size=2><strong>Adrieli</strong></center></font></td>".
            "<td><center><font color=\"black\" size=2><strong>Vila</strong></center></font></td>"."<td><center><font color=\"black\" size=2><strong>Nadia</strong></center></font></td>".
            "<td><center><font color=\"black\" size=2><strong>Cleusa</strong></center></font></td>"."<td><center><font color=\"black\" size=2><strong>Shop Vid.</strong></center></font></td>".
            "<td><center><font color=\"black\" size=2><strong>Atac.</strong></center></font></td>"."<td><center><font color=\"black\" size=2><strong>Lages</strong></center></font></td>".
            "<td><center><font color=\"black\" size=2><strong>TT</strong></center></font></td>"."</tr>";
        
        $sql = "select sum(csaihisotorico-centhistorico) as qtd,(sum(csaihisotorico*cpcuproduto-centhistorico*cpcuproduto)) as custo ,cdesmarca from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna join tlinha on ccodlinha = clinproduto
             inner join tmarca on ccodmarca = cmarproduto where i_tna_valida_comissao = '0' and ctessaidas in ('S','E') and cemihistorico >= '$dtin' and cemphistorico in (3,4) and cemihistorico <= '$dtfn' $clinha $cgrupo $cmarca $cdepartamento  group by cdesmarca
            having sum(centhistorico-csaihisotorico) <> 0   order by  cdesmarca"; 
        $exsql = pg_query($conn,$sql);
        while ($row = pg_fetch_assoc($exsql)) {
            $tt = $row['qtd']; $c1 = $tt;
            echo "<td><font size=4><strong>".number_format($tt,2,",",".")."</strong></font></td>\n";
            $custo = $row['custo']; $c2 = $custo;
            echo "<td><font size=4><strong>".number_format($custo,2,",",".")."</strong></font></td>\n";
            echo "</tr>\n";           
        }       
        echo "</table>";
        echo "<br><br>";
    
    }
    
}
if ($tipo == 'C') {
    if ($cmarca == Null) {
        echo "<script>alert('Esse relátorio exige o Filtro de Marca');</script>";echo $volta;exit;
    }    
    $sql = "begin";
    $exsql=pg_query($conn,$sql);
    $sql = "select (sum(centhistorico)-sum(csaihisotorico)) as estoque,cprohistorico,cmarproduto,cdesmarca,cdesproduto,cpcuproduto,cpveproduto  from ahistorico inner join aprodutos on cprohistorico = ccodproduto
         join tmarca on cmarproduto =  ccodmarca $clinha $cgrupo $cmarca $cdepartamento and cemphistorico in (3,4)
         group by cprohistorico,cmarproduto,cdesmarca,cdesproduto,cpcuproduto,cpveproduto   having sum(centhistorico-csaihisotorico) <> 0
        order by cprohistorico ";
    $exsql=pg_query($conn,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $codigo = $row['cprohistorico'];
        $codmarca = $row['cmarproduto'];
        $dmarca = $row['cdesmarca'];
        $estoque = $row['estoque'];
        $custo = $row['cpcuproduto'];
        $venda = $row['cpveproduto'];
        $desc = $row['cdesproduto'];
        $com = "insert into alexrelatorio (codigo, marca, esportes,custo, venda, descricao) VALUES ($codigo,'$codmarca',$estoque,$custo,$venda,'$desc')";
        $excom = pg_query($conn,$com);
    }
    $sql = "select (sum(centhistorico)-sum(csaihisotorico)) as estoque,cprohistorico,cmarproduto,cdesmarca,cdesproduto,cpcuproduto,cpveproduto  from ahistorico inner join aprodutos on cprohistorico = ccodproduto
         join tmarca on cmarproduto =  ccodmarca $clinha $cgrupo $cmarca $cdepartamento and cemphistorico in (7,8)
         group by cprohistorico,cmarproduto,cdesmarca,cdesproduto,cpcuproduto,cpveproduto  having sum(centhistorico-csaihisotorico) <> 0
        order by cprohistorico ";    
    $exsql = pg_query($conn,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $codigo = $row['cprohistorico'];
        $codmarca = $row['cmarproduto'];
        $dmarca = $row['cdesmarca'];
        $estoque = $row['estoque'];
        $custo = $row['cpcuproduto'];
        $venda = $row['cpveproduto'];
        $desc = $row['cdesproduto'];
        $com = "select codigo from alexrelatorio where codigo =$codigo ";
        $excom = pg_query($conn,$com);
        $rscom = pg_fetch_array($excom);
        $ccodigo = $rscom['codigo'];
        if ($ccodigo == null) {
            $com = "insert into alexrelatorio (codigo, marca, adrieli,custo, venda, descricao) VALUES ($codigo,'$codmarca',$estoque,$custo,$venda,'$desc')";
        } else {
            $com = "update alexrelatorio set adrieli = $estoque where  codigo =$codigo ";
        }
        $excom=pg_query($conn,$com);
    }
    $sql = "select (sum(centhistorico)-sum(csaihisotorico)) as estoque,cprohistorico,cmarproduto,cdesmarca,cdesproduto,cpcuproduto,cpveproduto  from ahistorico inner join aprodutos on cprohistorico = ccodproduto
         join tmarca on cmarproduto =  ccodmarca $clinha $cgrupo $cmarca $cdepartamento and cemphistorico in (5,6)
         group by cprohistorico,cmarproduto,cdesmarca,cdesproduto,cpcuproduto,cpveproduto  having sum(centhistorico-csaihisotorico) <> 0
        order by cprohistorico ";
    $exsql = pg_query($conn,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $codigo = $row['cprohistorico'];
        $codmarca = $row['cmarproduto'];
        $dmarca = $row['cdesmarca'];
        $estoque = $row['estoque'];
        $custo = $row['cpcuproduto'];
        $venda = $row['cpveproduto'];
        $desc = $row['cdesproduto'];
        $com = "select codigo from alexrelatorio where codigo =$codigo ";
        $excom = pg_query($conn,$com);
        $rscom = pg_fetch_array($excom);
        $ccodigo = $rscom['codigo'];
        if ($ccodigo == null) {
            $com = "insert into alexrelatorio (codigo, marca, vila,custo, venda, descricao) VALUES ($codigo,'$codmarca',$estoque,$custo,$venda,'$desc')";
        } else {
            $com = "update alexrelatorio set vila = $estoque where  codigo =$codigo ";
        }
        $excom=pg_query($conn,$com);
    }
    $sql = "select (sum(centhistorico)-sum(csaihisotorico)) as estoque,cprohistorico,cmarproduto,cdesmarca,cdesproduto,cpcuproduto,cpveproduto  from ahistorico inner join aprodutos on cprohistorico = ccodproduto
         join tmarca on cmarproduto =  ccodmarca $clinha $cgrupo $cmarca $cdepartamento and cemphistorico in (13,14)
         group by cprohistorico,cmarproduto,cdesmarca,cdesproduto,cpcuproduto,cpveproduto  having sum(centhistorico-csaihisotorico) <> 0
        order by cprohistorico ";
    $exsql = pg_query($conv,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $codigo = $row['cprohistorico'];
        $codmarca = $row['cmarproduto'];
        $dmarca = $row['cdesmarca'];
        $estoque = $row['estoque'];
        $custo = $row['cpcuproduto'];
        $venda = $row['cpveproduto'];
        $desc = $row['cdesproduto'];
        $com = "select codigo from alexrelatorio where codigo =$codigo ";
        $excom = pg_query($conn,$com);
        $rscom = pg_fetch_array($excom);
        $ccodigo = $rscom['codigo'];
        if ($ccodigo == null) {
            $com = "insert into alexrelatorio (codigo, marca, nadia,custo, venda, descricao) VALUES ($codigo,'$codmarca',$estoque,$custo,$venda,'$desc')";
        } else {
            $com = "update alexrelatorio set nadia = $estoque where  codigo =$codigo ";
        }
        $excom=pg_query($conn,$com);
    }
    $sql = "select (sum(centhistorico)-sum(csaihisotorico)) as estoque,cprohistorico,cmarproduto,cdesmarca,cdesproduto,cpcuproduto,cpveproduto  from ahistorico inner join aprodutos on cprohistorico = ccodproduto
         join tmarca on cmarproduto =  ccodmarca $clinha $cgrupo $cmarca $cdepartamento and cemphistorico in (15,16)
         group by cprohistorico,cmarproduto,cdesmarca,cdesproduto,cpcuproduto,cpveproduto  having sum(centhistorico-csaihisotorico) <> 0
        order by cprohistorico ";
    $exsql = pg_query($conv,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $codigo = $row['cprohistorico'];
        $codmarca = $row['cmarproduto'];
        $dmarca = $row['cdesmarca'];
        $estoque = $row['estoque'];
        $custo = $row['cpcuproduto'];
        $venda = $row['cpveproduto'];
        $desc = $row['cdesproduto'];
        $com = "select codigo from alexrelatorio where codigo =$codigo ";
        $excom = pg_query($conn,$com);
        $rscom = pg_fetch_array($excom);
        $ccodigo = $rscom['codigo'];
        if ($ccodigo == null) {
            $com = "insert into alexrelatorio (codigo, marca, cleusa,custo, venda, descricao) VALUES ($codigo,'$codmarca',$estoque,$custo,$venda,'$desc')";
        } else {
            $com = "update alexrelatorio set cleusa = $estoque where  codigo =$codigo ";
        }
        $excom=pg_query($conn,$com);
    }
    $sql = "select (sum(centhistorico)-sum(csaihisotorico)) as estoque,cprohistorico,cmarproduto,cdesmarca,cdesproduto,cpcuproduto,cpveproduto  from ahistorico inner join aprodutos on cprohistorico = ccodproduto
         join tmarca on cmarproduto =  ccodmarca $clinha $cgrupo $cmarca $cdepartamento and cemphistorico in (17,18)
         group by cprohistorico,cmarproduto,cdesmarca,cdesproduto,cpcuproduto,cpveproduto  having sum(centhistorico-csaihisotorico) <> 0
        order by cprohistorico ";
    $exsql = pg_query($conv,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $codigo = $row['cprohistorico'];
        $codmarca = $row['cmarproduto'];
        $dmarca = $row['cdesmarca'];
        $estoque = $row['estoque'];
        $custo = $row['cpcuproduto'];
        $venda = $row['cpveproduto'];
        $desc = $row['cdesproduto'];
        $com = "select codigo from alexrelatorio where codigo =$codigo ";
        $excom = pg_query($conn,$com);
        $rscom = pg_fetch_array($excom);
        $ccodigo = $rscom['codigo'];
        if ($ccodigo == null) {
            $com = "insert into alexrelatorio (codigo, marca, shop,custo, venda, descricao) VALUES ($codigo,'$codmarca',$estoque,$custo,$venda,'$desc')";
        } else {
            $com = "update alexrelatorio set shop = $estoque where  codigo =$codigo ";
        }
        $excom=pg_query($conn,$com);
    }
    $sql = "select (sum(centhistorico)-sum(csaihisotorico)) as estoque,cprohistorico,cmarproduto,cdesmarca,cdesproduto,cpcuproduto,cpveproduto  from ahistorico inner join aprodutos on cprohistorico = ccodproduto
         join tmarca on cmarproduto =  ccodmarca $clinha $cgrupo $cmarca $cdepartamento and cemphistorico in (1,2)
         group by cprohistorico,cmarproduto,cdesmarca,cdesproduto,cpcuproduto,cpveproduto  having sum(centhistorico-csaihisotorico) <> 0
        order by cprohistorico ";
    $exsql = pg_query($conj,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $codigo = $row['cprohistorico'];
        $codmarca = $row['cmarproduto'];
        $dmarca = $row['cdesmarca'];
        $estoque = $row['estoque'];
        $custo = $row['cpcuproduto'];
        $venda = $row['cpveproduto'];
        $desc = $row['cdesproduto'];
        $com = "select codigo from alexrelatorio where codigo =$codigo ";
        $excom = pg_query($conn,$com);
        $rscom = pg_fetch_array($excom);
        $ccodigo = $rscom['codigo'];
        if ($ccodigo == null) {
            $com = "insert into alexrelatorio (codigo, marca, atacadao,custo, venda, descricao) VALUES ($codigo,'$codmarca',$estoque,$custo,$venda,'$desc')";
        } else {
            $com = "update alexrelatorio set atacadao = $estoque where  codigo = $codigo ";
        }
        $excom=pg_query($conn,$com);
    }
    $sql = "select (sum(centhistorico)-sum(csaihisotorico)) as estoque,cprohistorico,cmarproduto,cdesmarca,cdesproduto,cpcuproduto,cpveproduto from ahistorico inner join aprodutos on cprohistorico = ccodproduto
         join tmarca on cmarproduto =  ccodmarca $clinha $cgrupo $cmarca $cdepartamento and cemphistorico in (1,2)
         group by cprohistorico,cmarproduto,cdesmarca,cdesproduto,cpcuproduto,cpveproduto  having sum(centhistorico-csaihisotorico) <> 0
        order by cprohistorico ";
    $exsql = pg_query($conl,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $codigo = $row['cprohistorico'];
        $codmarca = $row['cmarproduto'];
        $dmarca = $row['cdesmarca'];
        $estoque = $row['estoque'];
        $custo = $row['cpcuproduto'];
        $venda = $row['cpveproduto'];
        $desc = $row['cdesproduto'];
        $com = "select codigo from alexrelatorio where codigo =$codigo ";
        $excom = pg_query($conn,$com);
        $rscom = pg_fetch_array($excom);
        $ccodigo = $rscom['codigo'];
        if ($ccodigo == null) {
            $com = "insert into alexrelatorio (codigo, marca, lages,custo, venda, descricao) VALUES ($codigo,'$codmarca',$estoque,$custo,$venda,'$desc')";
        } else {
            $com = "update alexrelatorio set lages = $estoque where  codigo =$codigo ";
        }
        $excom=pg_query($conn,$com);
    }
    
    $tipo = $_POST['tipo'];
    if ($tipo == 'C') {    
        echo "<table border='2' width='100%' bgcolor=#F5F6CE >";
        echo "<tr><td><center><font size=2><strong>Cód</strong></center></font></td>"."<td><center><font color=\"black\" size=2><strong>Descrição</strong></center></font></td>".
            "<td><center><font color=\"black\" size=2><strong>Esp.</strong></center></font></td>"."<td><strong><center><font color=\"black\" size=2><strong>Adrieli</strong></center></font></td>".
            "<td><center><font color=\"black\" size=2><strong>Vila</strong></center></font></td>"."<td><center><font color=\"black\" size=2><strong>Nadia</strong></center></font></td>".
            "<td><center><font color=\"black\" size=2><strong>Cleusa</strong></center></font></td>"."<td><center><font color=\"black\" size=2><strong>Shop Vid.</strong></center></font></td>".
            "<td><center><font color=\"black\" size=2><strong>Atac.</strong></center></font></td>"."<td><center><font color=\"black\" size=2><strong>Lages</strong></center></font></td>".
            "<td><center><font color=\"black\" size=2><strong>Total</strong></center></font></td>"."<td><center><font color=\"black\" size=2><strong>Custo Un.</strong></font></center></td>".
            "<td><center><font color=\"black\" size=2><strong>Venda</strong></center></font></td>"."<td><center><font color=\"black\" size=2><strong>TT Custo</strong></font></center></td>"."</tr>";
        $sql = "select *from alexrelatorio order by codigo";
        $exsql = pg_query($conn,$sql);
        $ttcusto = 0.00;
        while ($row = pg_fetch_assoc($exsql)) {
            $codigo = $row['codigo'];
            echo "<td><center><strong><font color=\"black\" size=2>".$codigo."</font></strong><center></td>\n";
            $custo =  $row['custo'];
            $venda = $row['venda'];
            $desc =  $row['descricao'];       
            echo "<td><center><strong><font color=\"black\" size=1>".substr($desc, 0, 15)."</font></center></strong></td>\n";
            $qtd = $row['esportes']; $c1 = $qtd;
            echo "<td><font color=\"black\" size=1><center>".number_format($qtd,2,",",".")."</center></font></td>\n";
            $qtd = $row['adrieli']; $c1 += $qtd;
            echo "<td><font color=\"black\" size=1><center>".number_format($qtd,2,",",".")."</center></font></td>\n";
            $qtd = $row['vila']; $c1 += $qtd;
            echo "<td><font color=\"black\" size=1><center>".number_format($qtd,2,",",".")."</center></font></td>\n";
            $qtd = $row['nadia']; $c1 += $qtd;
            echo "<td><font color=\"black\" size=1><center>".number_format($qtd,2,",",".")."</center></font></td>\n";
            $qtd = $row['cleusa']; $c1 += $qtd;
            echo "<td><font color=\"black\" size=1><center>".number_format($qtd,2,",",".")."</center></font></td>\n";
            $qtd = $row['shop']; $c1 += $qtd;
            echo "<td><font color=\"black\" size=1><center>".number_format($qtd,2,",",".")."</center></font></td>\n";
            $qtd = $row['atacadao']; $c1 += $qtd;
            echo "<td><font color=\"black\" size=1><center>".number_format($qtd,2,",",".")."</center></font></td>\n";
            $qtd = $row['lages']; $c1 += $qtd;        
            echo "<td><font color=\"black\" size=1><center>".number_format($qtd,2,",",".")."</center></font></td>\n";
            echo "<td><font color=\"black\" size=1><strong><center>".number_format($c1,2,",",".")."</center></strong></font></td>\n";
            echo "<td><font color=\"black\" size=1><center>".number_format($custo,2,",",".")."</center></font></td>\n"; 
            echo "<td><font color=\"black\" size=1><center>".number_format($venda,2,",",".")."</center></font></td>\n"; 
            echo "<td><font color=\"black\" size=1><center>".number_format(($custo*$c1),2,",",".")."</center></font></td>\n";        
            $ttcusto += ($custo*$c1); 
            echo "</tr>\n";
        }
        echo "<td><center><font size=3><strong>".'TT'."</strong></font></center></td>\n";
        echo "<td><center><font size=3><strong>".''."</strong></font></center></td>\n";
        $sql = "select sum(esportes)as esportes,sum(adrieli)as adrieli,sum(vila)as vila,sum(nadia)as nadia,sum(cleusa)as cleusa,sum(shop)as shop,sum(atacadao)as atacadao,
                sum(lages)as lages,sum(custo)  from alexrelatorio ";
        $exsql = pg_query($conn,$sql);
        $rssql = pg_fetch_array($exsql);
        $tt = $rssql['esportes']; $c1 = $tt;
        echo "<td><font size=2><strong><center>".number_format($tt,2,",",".")."</center></strong></font></td>\n";
        $tt = $rssql['adrieli'];$c1 += $tt;
        echo "<td><font size=2><strong><center>".number_format($tt,2,",",".")."</center></strong></font></td>\n";
        $tt = $rssql['vila'];$c1 += $tt;
        echo "<td><font size=2><strong><center>".number_format($tt,2,",",".")."</center></strong></font></td>\n";
        $tt = $rssql['nadia'];$c1 += $tt;
        echo "<td><font size=2><strong><center>".number_format($tt,2,",",".")."</center></strong></font></td>\n";
        $tt = $rssql['cleusa'];$c1 += $tt;
        echo "<td><font size=2><strong><center>".number_format($tt,2,",",".")."</center></strong></font></td>\n";
        $tt = $rssql['shop'];$c1 += $tt;
        echo "<td><font size=2><strong><center>".number_format($tt,2,",",".")."</center></strong></font></td>\n";
        $tt = $rssql['atacadao'];$c1 += $tt;
        echo "<td><font size=2><strong><center>".number_format($tt,2,",",".")."</center></strong></font></td>\n";
        $tt = $rssql['lages'];$c1 += $tt;
        echo "<td><font size=2><strong><center>".number_format($tt,2,",",".")."</center></strong></font></td>\n";
        echo "<td><font size=2><strong><center>".number_format($c1,2,",",".")."</center></strong></font></td>\n";
        echo "<td><font size=2><strong><center>".""."</center></strong></font></td>\n";
        echo "<td><font size=2><strong><center>".""."</center></strong></font></td>\n";
        echo "<td><font size=2><strong><center>".number_format($ttcusto,2,",",".")."</center></strong></font></td>\n";
        echo "</tr>\n";
        $sql="rollback";
        $exsql=pg_query($conn,$sql);
        echo "</table>";
        echo "<br><br>"; 
    }
    if ($tipo == 'S') {
        echo "<table border='2' width='100%' bgcolor=#F5F6CE >";
        echo "<tr><td><center><font size=2><strong>Cód</strong></center></font></td>".
            "<td><center><font color=\"black\" size=2><strong>Esp.</strong></center></font></td>"."<td><strong><center><font color=\"black\" size=2><strong>Adrieli</strong></center></font></td>".
            "<td><center><font color=\"black\" size=2><strong>Vila</strong></center></font></td>"."<td><center><font color=\"black\" size=2><strong>Nadia</strong></center></font></td>".
            "<td><center><font color=\"black\" size=2><strong>Cleusa</strong></center></font></td>"."<td><center><font color=\"black\" size=2><strong>Shop Vid.</strong></center></font></td>".
            "<td><center><font color=\"black\" size=2><strong>Atac.</strong></center></font></td>"."<td><center><font color=\"black\" size=2><strong>Lages</strong></center></font></td>".
            "<td><center><font color=\"black\" size=2><strong>Total</strong></center></font></td>"."<td><center><font color=\"black\" size=2><strong>Custo Un.</strong></font></center></td>".
            "<td><center><font color=\"black\" size=2><strong>Venda</strong></center></font></td>"."<td><center><font color=\"black\" size=2><strong>TT Custo</strong></font></center></td>"."</tr>";
        $sql = "select *from alexrelatorio order by codigo";
        $exsql = pg_query($conn,$sql);
        $ttcusto = 0.00;
        while ($row = pg_fetch_assoc($exsql)) {
            $codigo = $row['codigo'];
            echo "<td><center><strong><font color=\"black\" size=2>".$codigo."</font></strong><center></td>\n";
            $custo =  $row['custo'];
            $venda = $row['venda'];
            $qtd = $row['esportes']; $c1 = $qtd;
            echo "<td><font color=\"black\" size=1><center>".number_format($qtd,2,",",".")."</center></font></td>\n";
            $qtd = $row['adrieli']; $c1 += $qtd;
            echo "<td><font color=\"black\" size=1><center>".number_format($qtd,2,",",".")."</center></font></td>\n";
            $qtd = $row['vila']; $c1 += $qtd;
            echo "<td><font color=\"black\" size=1><center>".number_format($qtd,2,",",".")."</center></font></td>\n";
            $qtd = $row['nadia']; $c1 += $qtd;
            echo "<td><font color=\"black\" size=1><center>".number_format($qtd,2,",",".")."</center></font></td>\n";
            $qtd = $row['cleusa']; $c1 += $qtd;
            echo "<td><font color=\"black\" size=1><center>".number_format($qtd,2,",",".")."</center></font></td>\n";
            $qtd = $row['shop']; $c1 += $qtd;
            echo "<td><font color=\"black\" size=1><center>".number_format($qtd,2,",",".")."</center></font></td>\n";
            $qtd = $row['atacadao']; $c1 += $qtd;
            echo "<td><font color=\"black\" size=1><center>".number_format($qtd,2,",",".")."</center></font></td>\n";
            $qtd = $row['lages']; $c1 += $qtd;
            echo "<td><font color=\"black\" size=1><center>".number_format($qtd,2,",",".")."</center></font></td>\n";
            echo "<td><font color=\"black\" size=1><strong><center>".number_format($c1,2,",",".")."</center></strong></font></td>\n";
            echo "<td><font color=\"black\" size=1><center>".number_format($custo,2,",",".")."</center></font></td>\n";
            echo "<td><font color=\"black\" size=1><center>".number_format($venda,2,",",".")."</center></font></td>\n";
            echo "<td><font color=\"black\" size=1><center>".number_format(($custo*$c1),2,",",".")."</center></font></td>\n";
            $ttcusto += ($custo*$c1);
            echo "</tr>\n";
        }
        echo "<td><center><font size=3><strong>".'TT'."</strong></font></center></td>\n";
        $sql = "select sum(esportes)as esportes,sum(adrieli)as adrieli,sum(vila)as vila,sum(nadia)as nadia,sum(cleusa)as cleusa,sum(shop)as shop,sum(atacadao)as atacadao,
                sum(lages)as lages,sum(custo)  from alexrelatorio ";
        $exsql = pg_query($conn,$sql);
        $rssql = pg_fetch_array($exsql);
        $tt = $rssql['esportes']; $c1 = $tt;
        echo "<td><font size=2><strong><center>".number_format($tt,2,",",".")."</center></strong></font></td>\n";
        $tt = $rssql['adrieli'];$c1 += $tt;
        echo "<td><font size=2><strong><center>".number_format($tt,2,",",".")."</center></strong></font></td>\n";
        $tt = $rssql['vila'];$c1 += $tt;
        echo "<td><font size=2><strong><center>".number_format($tt,2,",",".")."</center></strong></font></td>\n";
        $tt = $rssql['nadia'];$c1 += $tt;
        echo "<td><font size=2><strong><center>".number_format($tt,2,",",".")."</center></strong></font></td>\n";
        $tt = $rssql['cleusa'];$c1 += $tt;
        echo "<td><font size=2><strong><center>".number_format($tt,2,",",".")."</center></strong></font></td>\n";
        $tt = $rssql['shop'];$c1 += $tt;
        echo "<td><font size=2><strong><center>".number_format($tt,2,",",".")."</center></strong></font></td>\n";
        $tt = $rssql['atacadao'];$c1 += $tt;
        echo "<td><font size=2><strong><center>".number_format($tt,2,",",".")."</center></strong></font></td>\n";
        $tt = $rssql['lages'];$c1 += $tt;
        echo "<td><font size=2><strong><center>".number_format($tt,2,",",".")."</center></strong></font></td>\n";
        echo "<td><font size=2><strong><center>".number_format($c1,2,",",".")."</center></strong></font></td>\n";
        echo "<td><font size=2><strong><center>".""."</center></strong></font></td>\n";
        echo "<td><font size=2><strong><center>".""."</center></strong></font></td>\n";
        echo "<td><font size=2><strong><center>".number_format($ttcusto,2,",",".")."</center></strong></font></td>\n";
        echo "</tr>\n";
        $sql="rollback";
        $exsql=pg_query($conn,$sql);
        echo "</table>";
        echo "<br><br>";
    }
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