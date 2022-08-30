<!DOCTYPE html>
<html>
<head>
<br><br>
</html>
<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
include_once("conexao.php");
date_default_timezone_set('America/Sao_Paulo');
$volta="<script>window.location='http://192.168.13.2/Silvio/'</script>";
//error_reporting(0);
set_time_limit(0);
$datain = $_POST['datai'];
if ($datain == null) {
    echo "<script>alert('Data Inicial Inválida');</script>"; echo $volta; exit;    
}
$datafi = $_POST['dataf'];
if ($datafi == null) {
    echo "<script>alert('Data Final Inválida');</script>"; echo $volta; exit;
}
$dataia = implode("/",array_reverse(explode("-",$datain)));
$datafa = implode("/",array_reverse(explode("-",$datafi)));
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
    $dmarca = $cmarca.'-'.$dmarca;
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
echo 'Vendas De:'.$dataia.' Até:'.$datafa.'<br>';
echo 'Filtros Selecionados:'.'<br>';
echo 'Linha:'.$dlinha.'<br>';
echo 'Grupo:'.$dgrupo.'<br>';
echo 'Marca:'.$dmarca.'<br>';
echo 'Depar.:'.$dpartamento.'<br><br>';
$tipo = $_POST['rel'];
if ($tipo == 'T') {
	echo "<table border='2' width='100%' bgcolor=#F5F6CE >";
	echo "<tr><td><font size=3><strong></strong></font></td>"."<td><font color=\"black\" size=3><strong>Rosane</strong></font></td>".
	   	 "<td><font color=\"black\" size=3><strong>Josi</strong></font></td>"."<td><font color=\"black\" size=3><strong>Nadia</strong></font></td>".
	   	 "<td><font color=\"black\" size=3><strong>Cleusa</strong></font></td>".
	   	 "<td><font color=\"black\" size=3><strong>Mayara</strong></font></td>"."<td><font color=\"black\" size=3><strong>César</strong></font></td>".
	   	 "<td><font color=\"black\" size=3><strong>Adriele</strong></font></td>"."<td><font color=\"black\" size=3><strong>Feira (18)</strong></font></td>".
	   	 "<td><font color=\"black\" size=3><strong>Feira (20)</strong></font></td>"."<td><font color=\"black\" size=3><strong>Vila</strong></font></td>".
	   	 "<td><font color=\"black\" size=3><strong>Feira (22)</strong></font></td>"."<td><font color=\"black\" size=3><strong>Total</strong></font></td>"."</tr>";
	
	function vend($a,$b,$c,$d,$e,$f,$g)
	//a = Empresa
	//b = Data Inicial
	//c = Data Final
	//d = Linha
	//e = Grupo
	//f = Marca
	//g = Departamento
	{
        $vend = "select (select (sum(csaihisotorico)-sum(centhistorico))  from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas
                 join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and cemihistorico >= '$b' and cemihistorico <= '$c'
                 $d $e $f $g and cemphistorico in ($a)) as vendas,
                (select (sum(centhistorico)-sum(csaihisotorico))  from ahistorico inner join aprodutos on cprohistorico = ccodproduto $d $e $f $g
                and cemphistorico in ($a)) as estoque , (select (sum((centhistorico-csaihisotorico)*cpcuproduto))  from ahistorico inner join aprodutos on cprohistorico = ccodproduto $d $e $f $g
                and cemphistorico in ($a)) as custo ";
         return $vend;
	}
	$sql = vend('1,2',$datain,$datafi,$clinha,$cgrupo,$cmarca,$cdepartamento);
	$exsql = pg_query($conn,$sql);
	$rssql = pg_fetch_array($exsql);
	$venda1 = $rssql['vendas'];
	$estoque1 = $rssql['estoque'];
	$custo1 = $rssql['custo'];
	$c1 = $venda1;
	$c2 = $estoque1;
	$c3 = $custo1;
	$exsql = pg_query($conj,$sql);
	$rssql = pg_fetch_array($exsql);
	$venda2 = $rssql['vendas'];
	$estoque2 = $rssql['estoque'];
	$custo2 = $rssql['custo'];
	$c1 += $venda2;
	$c2 += $estoque2;
	$c3 += $custo2;
	$exsql = pg_query($conl,$sql);
	$rssql = pg_fetch_array($exsql);
	$venda3 = $rssql['vendas'];
	$estoque3 = $rssql['estoque'];
	$custo3 = $rssql['custo'];
	$c1 += $venda3;
	$c2 += $estoque3;
	$c3 += $custo3;	
	$sql = vend('3,4',$datain,$datafi,$clinha,$cgrupo,$cmarca,$cdepartamento);
    $exsql = pg_query($conj,$sql);
    $rssql = pg_fetch_array($exsql);
    $venda4 = $rssql['vendas'];
    $estoque4 = $rssql['estoque'];
    $custo4 = $rssql['custo'];
    $c1 += $venda4;
    $c2 += $estoque4;
    $c3 += $custo4; 
    $sql = vend('13,14',$datain,$datafi,$clinha,$cgrupo,$cmarca,$cdepartamento);
    $exsql = pg_query($conv,$sql);
    $rssql = pg_fetch_array($exsql);
    $venda5 = $rssql['vendas'];
    $estoque5 = $rssql['estoque'];
    $custo5 = $rssql['custo'];
    $c1 += $venda5;
    $c2 += $estoque5;
    $c3 += $custo5;
    $sql = vend('15,16',$datain,$datafi,$clinha,$cgrupo,$cmarca,$cdepartamento);
    $exsql = pg_query($conv,$sql);
    $rssql = pg_fetch_array($exsql);
    $venda6 = $rssql['vendas'];
    $estoque6 = $rssql['estoque'];
    $custo6 = $rssql['custo'];
    $c1 += $venda6;
    $c2 += $estoque6;
    $c3 += $custo6;
    $sql = vend('7,8',$datain,$datafi,$clinha,$cgrupo,$cmarca,$cdepartamento);
    $exsql = pg_query($conn,$sql);
    $rssql = pg_fetch_array($exsql);
    $venda7 = $rssql['vendas'];
    $estoque7 = $rssql['estoque'];
    $custo7 = $rssql['custo'];
    $c1 += $venda7;
    $c2 += $estoque7;
    $c3 += $custo7;
    $sql = vend('18',$datain,$datafi,$clinha,$cgrupo,$cmarca,$cdepartamento);
    $exsql = pg_query($conn,$sql);
    $rssql = pg_fetch_array($exsql);
    $venda8 = $rssql['vendas'];
    $estoque8 = $rssql['estoque'];
    $custo8 = $rssql['custo'];
    $c1 += $venda8;
    $c2 += $estoque8;
    $c3 += $custo8;
    $sql = vend('20',$datain,$datafi,$clinha,$cgrupo,$cmarca,$cdepartamento);
    $exsql = pg_query($conn,$sql);
    $rssql = pg_fetch_array($exsql);
    $venda9 = $rssql['vendas'];
    $estoque9 = $rssql['estoque'];
    $custo9 = $rssql['custo'];
    $c1 += $venda9;
    $c2 += $estoque9;
    $c3 += $custo9;
    $sql = vend('5,6',$datain,$datafi,$clinha,$cgrupo,$cmarca,$cdepartamento);
    $exsql = pg_query($conn,$sql);
    $rssql = pg_fetch_array($exsql);
    $venda10 = $rssql['vendas'];
    $estoque10 = $rssql['estoque'];
    $custo10 = $rssql['custo'];
    $c1 += $venda10;
    $c2 += $estoque10;
    $c3 += $custo10;
    $sql = vend('22',$datain,$datafi,$clinha,$cgrupo,$cmarca,$cdepartamento);
    $exsql = pg_query($conn,$sql);
    $rssql = pg_fetch_array($exsql);
    $venda11 = $rssql['vendas'];
    $estoque11 = $rssql['estoque'];
    $custo11 = $rssql['custo'];
    $c1 += $venda11;
    $c2 += $estoque11;
    $c3 += $custo11;
    echo "<td><strong><font color=\"black\">".'Venda'."</font></strong></td>\n";
    echo "<td>".number_format($venda1,2,",",".")."</td>\n";
    echo "<td>".number_format($venda4,2,",",".")."</td>\n"; 
    echo "<td>".number_format($venda5,2,",",".")."</td>\n"; 
    echo "<td>".number_format($venda6,2,",",".")."</td>\n"; 
    echo "<td>".number_format($venda2,2,",",".")."</td>\n";
    echo "<td>".number_format($venda3,2,",",".")."</td>\n";
    echo "<td>".number_format($venda7,2,",",".")."</td>\n";
    echo "<td>".number_format($venda8,2,",",".")."</td>\n";
    echo "<td>".number_format($venda9,2,",",".")."</td>\n";
    echo "<td>".number_format($venda10,2,",",".")."</td>\n";
    echo "<td>".number_format($venda11,2,",",".")."</td>\n";
    echo "<td><strong><font color=\"black\">".number_format($c1,2,",",".")."</font></strong></td>\n";
    echo "</tr>\n";    
    echo "<td><strong><font color=\"black\">".'Estoque'."</font></strong></td>\n";
    echo "<td>".number_format($estoque1,2,",",".")."</td>\n";
    echo "<td>".number_format($estoque4,2,",",".")."</td>\n";
    echo "<td>".number_format($estoque5,2,",",".")."</td>\n";
    echo "<td>".number_format($estoque6,2,",",".")."</td>\n";
    echo "<td>".number_format($estoque2,2,",",".")."</td>\n";
    echo "<td>".number_format($estoque3,2,",",".")."</td>\n";
    echo "<td>".number_format($estoque7,2,",",".")."</td>\n";
    echo "<td>".number_format($estoque8,2,",",".")."</td>\n";
    echo "<td>".number_format($estoque9,2,",",".")."</td>\n";
    echo "<td>".number_format($estoque10,2,",",".")."</td>\n";
    echo "<td>".number_format($estoque11,2,",",".")."</td>\n";
    echo "<td><strong><font color=\"black\">".number_format($c2,2,",",".")."</font></strong></td>\n";   
    echo "</tr>\n";
    echo "<td><strong><font color=\"black\">".'Custo'."</font></strong></td>\n";
    echo "<td>".number_format($custo1,2,",",".")."</td>\n";
    echo "<td>".number_format($custo4,2,",",".")."</td>\n";
    echo "<td>".number_format($custo5,2,",",".")."</td>\n";
    echo "<td>".number_format($custo6,2,",",".")."</td>\n";
    echo "<td>".number_format($custo2,2,",",".")."</td>\n";
    echo "<td>".number_format($custo3,2,",",".")."</td>\n";
    echo "<td>".number_format($custo7,2,",",".")."</td>\n";
    echo "<td>".number_format($custo8,2,",",".")."</td>\n";
    echo "<td>".number_format($custo9,2,",",".")."</td>\n";
    echo "<td>".number_format($custo10,2,",",".")."</td>\n";
    echo "<td>".number_format($custo11,2,",",".")."</td>\n";
    echo "<td><strong><font color=\"black\">".number_format($c3,2,",",".")."</font></strong></td>\n";   
    echo "</table>";
}
if ($tipo == 'M') {
    $sql="begin";
    $exsql=pg_query($conn,$sql);
    function vend($a,$b,$c,$d,$e,$f,$g)
    //a = Empresa
    //b = Data Inicial
    //c = Data Final
    //d = Linha
    //e = Grupo
    //f = Marca
    //g = Departamento
    {
        $vend = "select (sum(csaihisotorico)-sum(centhistorico)) as vendas,cmarproduto,cdesmarca  from ahistorico inner join aprodutos on cprohistorico = ccodproduto
                join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna
                join tmarca on cmarproduto =  ccodmarca where i_tna_valida_comissao = '0'
                and cemihistorico >= '$b' and cemihistorico <= '$c' $d $e $f $g  and cemphistorico in ($a) group by cmarproduto,cdesmarca having sum(centhistorico-csaihisotorico) <> 0
                order by cdesmarca";
        return $vend;
    }
    $sql = vend('1,2',$datain,$datafi,$clinha,$cgrupo,$cmarca,$cdepartamento);
    $exsql=pg_query($conn,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $xmarca=$row['cmarproduto'];
        $dmarca=$row['cdesmarca'];
        $venda=$row['vendas'];
        $com="insert into silviorelatorio VALUES ($xmarca,'$dmarca',$venda)";
        $excom=pg_query($conn,$com);	 
    }
    $exsql=pg_query($conj,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $xmarca=$row['cmarproduto'];
        $dmarca=$row['cdesmarca'];
        $venda=$row['vendas'];
        $com="select codigo from silviorelatorio where codigo =$xmarca ";
        $excom=pg_query($conn,$com);
        $rscom=pg_fetch_array($excom);
        $ccmarca=$rscom['codigo'];
        if ($ccmarca == null) {
            $com="insert into silviorelatorio VALUES ($xmarca,'$dmarca',0,0,0,0,$venda)";;
        } else {
            $com="update silviorelatorio set mayara = $venda where  codigo =$xmarca ";
        }
        $excom=pg_query($conn,$com);
    }
    $exsql=pg_query($conl,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $xmarca=$row['cmarproduto'];
        $dmarca=$row['cdesmarca'];
        $venda=$row['vendas'];
        $com="select codigo from silviorelatorio where codigo =$xmarca ";
        $excom=pg_query($conn,$com);
        $rscom=pg_fetch_array($excom);
        $ccmarca=$rscom['codigo'];
        if ($ccmarca == null) {
            $com="insert into silviorelatorio VALUES ($xmarca,'$dmarca',0,0,0,0,0,$venda)";;
        } else {
            $com="update silviorelatorio set cesar = $venda where  codigo =$xmarca ";
        }
        $excom=pg_query($conn,$com);
    }
    $sql = vend('3,4',$datain,$datafi,$clinha,$cgrupo,$cmarca,$cdepartamento);
    $exsql=pg_query($conj,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $xmarca=$row['cmarproduto'];
        $dmarca=$row['cdesmarca'];
        $venda=$row['vendas'];
        $com="select codigo from silviorelatorio where codigo =$xmarca ";
        $excom=pg_query($conn,$com);
        $rscom=pg_fetch_array($excom);
        $ccmarca=$rscom['codigo'];
        if ($ccmarca == null) {
            $com="insert into silviorelatorio VALUES ($xmarca,'$dmarca',0,$venda)";;
        } else {
            $com="update silviorelatorio set josi = $venda where  codigo =$xmarca ";
        }
        $excom=pg_query($conn,$com);
    }
    $sql = vend('13,14',$datain,$datafi,$clinha,$cgrupo,$cmarca,$cdepartamento);
    $exsql=pg_query($conv,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $xmarca=$row['cmarproduto'];
        $dmarca=$row['cdesmarca'];
        $venda=$row['vendas'];
        $com="select codigo from silviorelatorio where codigo =$xmarca ";
        $excom=pg_query($conn,$com);
        $rscom=pg_fetch_array($excom);
        $ccmarca=$rscom['codigo'];
        if ($ccmarca == null) {
            $com="insert into silviorelatorio VALUES ($xmarca,'$dmarca',0,0,$venda)";;
        } else {
            $com="update silviorelatorio set nadia = $venda where  codigo =$xmarca ";
        }
        $excom=pg_query($conn,$com);
    }
    $sql = vend('15,16',$datain,$datafi,$clinha,$cgrupo,$cmarca,$cdepartamento);
    $exsql=pg_query($conv,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $xmarca=$row['cmarproduto'];
        $dmarca=$row['cdesmarca'];
        $venda=$row['vendas'];
        $com="select codigo from silviorelatorio where codigo =$xmarca ";
        $excom=pg_query($conn,$com);
        $rscom=pg_fetch_array($excom);
        $ccmarca=$rscom['codigo'];
        if ($ccmarca == null) {
            $com="insert into silviorelatorio VALUES ($xmarca,'$dmarca',0,0,0,$venda)";;
        } else {
            $com="update silviorelatorio set cleusa = $venda where  codigo =$xmarca ";
        }
        $excom=pg_query($conn,$com);
    }
    $sql = vend('7,8',$datain,$datafi,$clinha,$cgrupo,$cmarca,$cdepartamento);
    $exsql=pg_query($conn,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $xmarca=$row['cmarproduto'];
        $dmarca=$row['cdesmarca'];
        $venda=$row['vendas'];
        $com="select codigo from silviorelatorio where codigo =$xmarca ";
        $excom=pg_query($conn,$com);
        $rscom=pg_fetch_array($excom);
        $ccmarca=$rscom['codigo'];
        if ($ccmarca == null) {
            $com="insert into silviorelatorio (codigo, marca,adriele) VALUES ($xmarca,'$dmarca',$venda)";;
        } else {
            $com="update silviorelatorio set adriele = $venda where  codigo =$xmarca ";
        }
        $excom=pg_query($conn,$com);
    }
    $sql = vend('18',$datain,$datafi,$clinha,$cgrupo,$cmarca,$cdepartamento);
    $exsql=pg_query($conn,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $xmarca=$row['cmarproduto'];
        $dmarca=$row['cdesmarca'];
        $venda=$row['vendas'];
        $com="select codigo from silviorelatorio where codigo =$xmarca ";
        $excom=pg_query($conn,$com);
        $rscom=pg_fetch_array($excom);
        $ccmarca=$rscom['codigo'];
        if ($ccmarca == null) {
            $com="insert into silviorelatorio (codigo, marca,feira) VALUES ($xmarca,'$dmarca',$venda)";;
        } else {
            $com="update silviorelatorio set feira = $venda where  codigo =$xmarca ";
        }
        $excom=pg_query($conn,$com);
    }
    $sql = vend('20',$datain,$datafi,$clinha,$cgrupo,$cmarca,$cdepartamento);
    $exsql=pg_query($conn,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $xmarca=$row['cmarproduto'];
        $dmarca=$row['cdesmarca'];
        $venda=$row['vendas'];
        $com="select codigo from silviorelatorio where codigo =$xmarca ";
        $excom=pg_query($conn,$com);
        $rscom=pg_fetch_array($excom);
        $ccmarca=$rscom['codigo'];
        if ($ccmarca == null) {
            $com="insert into silviorelatorio (codigo, marca,feiradois) VALUES ($xmarca,'$dmarca',$venda)";;
        } else {
            $com="update silviorelatorio set feiradois = $venda where  codigo =$xmarca ";
        }
        $excom=pg_query($conn,$com);
    }
    $sql = vend('5,6',$datain,$datafi,$clinha,$cgrupo,$cmarca,$cdepartamento);
    $exsql=pg_query($conn,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $xmarca=$row['cmarproduto'];
        $dmarca=$row['cdesmarca'];
        $venda=$row['vendas'];
        $com="select codigo from silviorelatorio where codigo =$xmarca ";
        $excom=pg_query($conn,$com);
        $rscom=pg_fetch_array($excom);
        $ccmarca=$rscom['codigo'];
        if ($ccmarca == null) {
            $com="insert into silviorelatorio (codigo, marca,vila) VALUES ($xmarca,'$dmarca',$venda)";;
        } else {
            $com="update silviorelatorio set vila = $venda where  codigo =$xmarca ";
        }
        $excom=pg_query($conn,$com);
    }
    $sql = vend('22',$datain,$datafi,$clinha,$cgrupo,$cmarca,$cdepartamento);
    $exsql=pg_query($conn,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $xmarca=$row['cmarproduto'];
        $dmarca=$row['cdesmarca'];
        $venda=$row['vendas'];
        $com="select codigo from silviorelatorio where codigo =$xmarca ";
        $excom=pg_query($conn,$com);
        $rscom=pg_fetch_array($excom);
        $ccmarca=$rscom['codigo'];
        if ($ccmarca == null) {
            $com="insert into silviorelatorio (codigo, marca,feiratres) VALUES ($xmarca,'$dmarca',$venda)";;
        } else {
            $com="update silviorelatorio set feiratres = $venda where  codigo =$xmarca ";
        }
        $excom=pg_query($conn,$com);
    }
    echo "<table border='2' width='100%' bgcolor=#F5F6CE >";
    echo "<tr><td><font size=3><strong>Venda/Marca</strong></font></td>"."<td><font color=\"black\" size=3><strong>Rosane</strong></font></td>".
   	    "<td><font color=\"black\" color=\"Red\" size=3><strong>Josi</strong></font></td>"."<td><font color=\"black\" size=3><strong>Nadia</strong></font></td>".
   	    "<td><font color=\"black\" size=3><strong>Cleusa</strong></font></td>"."<td><font color=\"black\" size=3><strong>Mayara</strong></font></td>".
   	    "<td><font color=\"black\" size=3><strong>César</strong></font></td>"."<td><font color=\"black\" size=3><strong>Adriele</strong></font></td>".
   	    "<td><font color=\"black\" size=3><strong>Feira(18)</strong></font></td>"."<td><font color=\"black\" size=3><strong>Feira(20)</strong></font></td>".
   	    "<td><font color=\"black\" size=3><strong>Vila</strong></font></td>"."<td><font color=\"black\" size=3><strong>Feira (22)</strong></font></td>"."<td><font color=\"black\" size=3><strong>Total</strong></font></td>"."</tr>";
    $sql="select *from silviorelatorio order by marca";
    $exsql=pg_query($conn,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $xmarca=$row['marca'];
        echo "<td><strong><font color=\"black\">".$xmarca."</font></strong></td>\n";
        $qtd=$row['rosane'];$c1=$qtd;	        
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
        $qtd=$row['josi'];$c1=$c1+$qtd;
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
        $qtd=$row['nadia'];$c1=$c1+$qtd;
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
        $qtd=$row['cleusa'];$c1=$c1+$qtd;
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
        $qtd=$row['mayara'];$c1=$c1+$qtd;
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
        $qtd=$row['cesar'];$c1=$c1+$qtd;
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
        $qtd=$row['adriele'];$c1=$c1+$qtd;
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
        $qtd=$row['feira'];$c1=$c1+$qtd;
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
        $qtd=$row['feiradois'];$c1=$c1+$qtd;
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
        $qtd=$row['vila'];$c1=$c1+$qtd;
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
        $qtd=$row['feiratres'];$c1=$c1+$qtd;
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
        echo "<td><strong>".number_format($c1,2,",",".")."</strong></td>\n";
        echo "</tr>\n";	        
    }
    $sql="rollback";
    $exsql=pg_query($conn,$sql);	
    echo "</table>";
    echo "<br><br>";
    $sql="begin";
    $exsql=pg_query($conn,$sql);   
    function venda($a,$d,$e,$f,$g)
    //a = Empresa
    //b = Data Inicial
    //c = Data Final
    //d = Linha
    //e = Grupo
    //f = Marca
    //g = Departamento
    {
        $vend = "select (sum(centhistorico)-sum(csaihisotorico)) as vendas,cmarproduto,cdesmarca  from ahistorico inner join aprodutos on cprohistorico = ccodproduto
                 join tmarca on cmarproduto =  ccodmarca where cemphistorico in ($a) $d $e $f $g
                 group by cmarproduto,cdesmarca  having sum(centhistorico-csaihisotorico) <> 0
                order by cdesmarca ";
        return $vend;
    }
    $sql = venda('1,2',$clinha,$cgrupo,$cmarca,$cdepartamento);  
    $exsql=pg_query($conn,$sql); 
    while ($row = pg_fetch_assoc($exsql)) {
        $xmarca=$row['cmarproduto'];
        $dmarca=$row['cdesmarca'];
        $venda=$row['vendas'];
        $com="insert into silviorelatorio VALUES ($xmarca,'$dmarca',$venda)";
        $excom=pg_query($conn,$com);
    }
    $exsql=pg_query($conj,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $xmarca=$row['cmarproduto'];
        $dmarca=$row['cdesmarca'];
        $venda=$row['vendas'];
        $com="select codigo from silviorelatorio where codigo =$xmarca ";
        $excom=pg_query($conn,$com);
        $rscom=pg_fetch_array($excom);
        $ccmarca=$rscom['codigo'];
        if ($ccmarca == null) {
            $com="insert into silviorelatorio VALUES ($xmarca,'$dmarca',0,0,0,0,$venda)";;
        } else {
            $com="update silviorelatorio set mayara = $venda where  codigo =$xmarca ";
        }
        $excom=pg_query($conn,$com);
    }
    $exsql=pg_query($conl,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $xmarca=$row['cmarproduto'];
        $dmarca=$row['cdesmarca'];
        $venda=$row['vendas'];
        $com="select codigo from silviorelatorio where codigo =$xmarca ";
        $excom=pg_query($conn,$com);
        $rscom=pg_fetch_array($excom);
        $ccmarca=$rscom['codigo'];
        if ($ccmarca == null) {
            $com="insert into silviorelatorio VALUES ($xmarca,'$dmarca',0,0,0,0,0,$venda)";;
        } else {
            $com="update silviorelatorio set cesar = $venda where  codigo =$xmarca ";
        }
        $excom=pg_query($conn,$com);
    }
    $sql = venda('3,4',$clinha,$cgrupo,$cmarca,$cdepartamento);
    $exsql=pg_query($conj,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $xmarca=$row['cmarproduto'];
        $dmarca=$row['cdesmarca'];
        $venda=$row['vendas'];
        $com="select codigo from silviorelatorio where codigo =$xmarca ";
        $excom=pg_query($conn,$com);
        $rscom=pg_fetch_array($excom);
        $ccmarca=$rscom['codigo'];
        if ($ccmarca == null) {
            $com="insert into silviorelatorio VALUES ($xmarca,'$dmarca',0,$venda)";;
        } else {
            $com="update silviorelatorio set josi = $venda where  codigo =$xmarca ";
        }
        $excom=pg_query($conn,$com);
    }
    $sql = venda('13,14',$clinha,$cgrupo,$cmarca,$cdepartamento);
    $exsql=pg_query($conv,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $xmarca=$row['cmarproduto'];
        $dmarca=$row['cdesmarca'];
        $venda=$row['vendas'];
        $com="select codigo from silviorelatorio where codigo =$xmarca ";
        $excom=pg_query($conn,$com);
        $rscom=pg_fetch_array($excom);
        $ccmarca=$rscom['codigo'];
        if ($ccmarca == null) {
            $com="insert into silviorelatorio VALUES ($xmarca,'$dmarca',0,0,$venda)";;
        } else {
            $com="update silviorelatorio set nadia = $venda where  codigo =$xmarca ";
        }
        $excom=pg_query($conn,$com);
    }
    $sql = venda('15,16',$clinha,$cgrupo,$cmarca,$cdepartamento);
    $exsql=pg_query($conv,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $xmarca=$row['cmarproduto'];
        $dmarca=$row['cdesmarca'];
        $venda=$row['vendas'];
        $com="select codigo from silviorelatorio where codigo =$xmarca ";
        $excom=pg_query($conn,$com);
        $rscom=pg_fetch_array($excom);
        $ccmarca=$rscom['codigo'];
        if ($ccmarca == null) {
            $com="insert into silviorelatorio VALUES ($xmarca,'$dmarca',0,0,0,$venda)";;
        } else {
            $com="update silviorelatorio set cleusa = $venda where  codigo =$xmarca ";
        }
        $excom=pg_query($conn,$com);
    }
    $sql = venda('7,8',$clinha,$cgrupo,$cmarca,$cdepartamento);
    $exsql=pg_query($conn,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $xmarca=$row['cmarproduto'];
        $dmarca=$row['cdesmarca'];
        $venda=$row['vendas'];
        $com="select codigo from silviorelatorio where codigo =$xmarca ";
        $excom=pg_query($conn,$com);
        $rscom=pg_fetch_array($excom);
        $ccmarca=$rscom['codigo'];
        if ($ccmarca == null) {
            $com="insert into silviorelatorio (codigo, marca,adriele) VALUES ($xmarca,'$dmarca',$venda)";;
        } else {
            $com="update silviorelatorio set adriele = $venda where  codigo =$xmarca ";
        }
        $excom=pg_query($conn,$com);
    }
    $sql = venda('18',$clinha,$cgrupo,$cmarca,$cdepartamento);
    $exsql=pg_query($conn,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $xmarca=$row['cmarproduto'];
        $dmarca=$row['cdesmarca'];
        $venda=$row['vendas'];
        $com="select codigo from silviorelatorio where codigo =$xmarca ";
        $excom=pg_query($conn,$com);
        $rscom=pg_fetch_array($excom);
        $ccmarca=$rscom['codigo'];
        if ($ccmarca == null) {
            $com="insert into silviorelatorio (codigo, marca,feira) VALUES ($xmarca,'$dmarca',$venda)";;
        } else {
            $com="update silviorelatorio set feira = $venda where  codigo =$xmarca ";
        }        
        $excom=pg_query($conn,$com);
    }
    $sql = venda('20',$clinha,$cgrupo,$cmarca,$cdepartamento);
    $exsql=pg_query($conn,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $xmarca=$row['cmarproduto'];
        $dmarca=$row['cdesmarca'];
        $venda=$row['vendas'];
        $com="select codigo from silviorelatorio where codigo =$xmarca ";
        $excom=pg_query($conn,$com);
        $rscom=pg_fetch_array($excom);
        $ccmarca=$rscom['codigo'];
        if ($ccmarca == null) {
            $com="insert into silviorelatorio (codigo, marca,feiradois) VALUES ($xmarca,'$dmarca',$venda)";;
        } else {
            $com="update silviorelatorio set feiradois = $venda where  codigo =$xmarca ";
        }
        $excom=pg_query($conn,$com);
    }
    $sql = venda('5,6',$clinha,$cgrupo,$cmarca,$cdepartamento);
    $exsql=pg_query($conn,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $xmarca=$row['cmarproduto'];
        $dmarca=$row['cdesmarca'];
        $venda=$row['vendas'];
        $com="select codigo from silviorelatorio where codigo =$xmarca ";
        $excom=pg_query($conn,$com);
        $rscom=pg_fetch_array($excom);
        $ccmarca=$rscom['codigo'];
        if ($ccmarca == null) {
            $com="insert into silviorelatorio (codigo, marca,vila) VALUES ($xmarca,'$dmarca',$venda)";;
        } else {
            $com="update silviorelatorio set vila = $venda where  codigo =$xmarca ";
        }
        $excom=pg_query($conn,$com);
    }
    $sql = venda('22',$clinha,$cgrupo,$cmarca,$cdepartamento);
    $exsql=pg_query($conn,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $xmarca=$row['cmarproduto'];
        $dmarca=$row['cdesmarca'];
        $venda=$row['vendas'];
        $com="select codigo from silviorelatorio where codigo =$xmarca ";
        $excom=pg_query($conn,$com);
        $rscom=pg_fetch_array($excom);
        $ccmarca=$rscom['codigo'];
        if ($ccmarca == null) {
            $com="insert into silviorelatorio (codigo, marca,feiratres) VALUES ($xmarca,'$dmarca',$venda)";;
        } else {
            $com="update silviorelatorio set feiratres = $venda where  codigo =$xmarca ";
        }
        $excom=pg_query($conn,$com);
    }
    echo "<table border='2' width='100%' bgcolor=#F5F6CE >";
    echo "<tr><td><font size=3><strong>Estoque/Marca</strong></font></td>"."<td><font color=\"black\" size=3><strong>Rosane</strong></font></td>".
   	    "<td><font color=\"black\" color=\"Red\" size=3><strong>Josi</strong></font></td>"."<td><font color=\"black\" size=3><strong>Nadia</strong></font></td>".
   	    "<td><font color=\"black\" size=3><strong>Cleusa</strong></font></td>"."<td><font color=\"black\" size=3><strong>Mayara</strong></font></td>".
   	    "<td><font color=\"black\" size=3><strong>César</strong></font></td>"."<td><font color=\"black\" size=3><strong>Adriele</strong></font></td>".
   	    "<td><font color=\"black\" size=3><strong>Feira(18)</strong></font></td>"."<td><font color=\"black\" size=3><strong>Feira(20)</strong></font></td>".
   	    "<td><font color=\"black\" size=3><strong>Vila</strong></font></td>"."<td><font color=\"black\" size=3><strong>Total</strong></font></td>"."</tr>";
    $sql="select *from silviorelatorio order by marca";
    $exsql=pg_query($conn,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $xmarca=$row['marca'];
        echo "<td><strong><font color=\"black\">".$xmarca."</font></strong></td>\n";
        $qtd=$row['rosane'];$c1=$qtd;
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
        $qtd=$row['josi'];$c1=$c1+$qtd;
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
        $qtd=$row['nadia'];$c1=$c1+$qtd;
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
        $qtd=$row['cleusa'];$c1=$c1+$qtd;
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
        $qtd=$row['mayara'];$c1=$c1+$qtd;
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
        $qtd=$row['cesar'];$c1=$c1+$qtd;
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
        $qtd=$row['adriele'];$c1=$c1+$qtd;
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
        $qtd=$row['feira'];$c1=$c1+$qtd;
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
        $qtd=$row['feiradois'];$c1=$c1+$qtd;
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
        $qtd=$row['vila'];$c1=$c1+$qtd;
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
        $qtd=$row['feiratres'];$c1=$c1+$qtd;
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
        echo "<td><strong>".number_format($c1,2,",",".")."</strong></td>\n";
        echo "</tr>\n";        
    }
    echo "<td><font size=4><strong>".'TT'."</strong></font></td>\n";
    $sql="select sum(rosane)as rosane,sum(josi)as josi,sum(nadia)as nadia,sum(cleusa)as cleusa,sum(mayara)as mayara,sum(cesar)as cesar, sum(adriele) as adriele, sum(feira) as feira ,sum(feiradois) as feiradois,
        sum(vila) as vila , sum(feiratres) as feiratres from silviorelatorio ";
    $exsql=pg_query($conn,$sql);
    $rssql=pg_fetch_array($exsql);
    $tt=$rssql['rosane'];$c1=$tt;
    echo "<td><font size=4><strong>".number_format($tt,2,",",".")."</strong></font></td>\n";
    $tt=$rssql['josi'];$c1=$c1+$tt;
    echo "<td><font size=4><strong>".number_format($tt,2,",",".")."</strong></font></td>\n";
    $tt=$rssql['nadia'];$c1=$c1+$tt;
    echo "<td><font size=4><strong>".number_format($tt,2,",",".")."</strong></font></td>\n";
    $tt=$rssql['cleusa'];$c1=$c1+$tt;
    echo "<td><font size=4><strong>".number_format($tt,2,",",".")."</strong></font></td>\n";
    $tt=$rssql['mayara'];$c1=$c1+$tt;
    echo "<td><font size=4><strong>".number_format($tt,2,",",".")."</strong></font></td>\n";
    $tt=$rssql['cesar'];$c1=$c1+$tt;
    echo "<td><font size=4><strong>".number_format($tt,2,",",".")."</strong></font></td>\n";
    $tt=$rssql['adriele'];$c1=$c1+$tt;
    echo "<td><font size=4><strong>".number_format($tt,2,",",".")."</strong></font></td>\n";
    $tt=$rssql['feira'];$c1=$c1+$tt;
    echo "<td><font size=4><strong>".number_format($tt,2,",",".")."</strong></font></td>\n";
    $tt=$rssql['feiradois'];$c1=$c1+$tt;
    echo "<td><font size=4><strong>".number_format($tt,2,",",".")."</strong></font></td>\n";
    $tt=$rssql['vila'];$c1=$c1+$tt;
    echo "<td><font size=4><strong>".number_format($tt,2,",",".")."</strong></font></td>\n";
    $tt=$rssql['feiratres'];$c1=$c1+$tt;
    echo "<td><font size=4><strong>".number_format($tt,2,",",".")."</strong></font></td>\n";
    echo "<td><font size=4><strong>".number_format($c1,2,",",".")."</strong></font></td>\n";
    echo "</tr>\n";    
    $sql="rollback";
    $exsql=pg_query($conn,$sql);
    echo "</table>";
    echo "<br><br>";    
}
if ($tipo == 'C') {
    if ($cmarca == null) {
        echo "<script>alert('Esse relátorio exige o Filtro de Marca');</script>";echo $volta;exit;
    }
    $sql="begin";
    $exsql=pg_query($conn,$sql);
    function vend($a,$b,$c,$d,$e,$f,$g)
    //a = Empresa
    //b = Data Inicial
    //c = Data Final
    //d = Linha
    //e = Grupo
    //f = Marca
    //g = Departamento
    {
        $vend = "select (sum(csaihisotorico)-sum(centhistorico)) as vendas,cprohistorico,cmarproduto,cdesmarca,(cdesproduto):: character varying(10)  from ahistorico inner join aprodutos on cprohistorico = ccodproduto
                join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna
                join tmarca on cmarproduto =  ccodmarca where i_tna_valida_comissao = '0' and cemihistorico >= '$b' and cemihistorico <= '$c' $d $e $f $g and cemphistorico in ($a)
                group by cprohistorico,cmarproduto,cdesmarca,cdesproduto having sum(centhistorico-csaihisotorico) <> 0 order by cprohistorico";
        return $vend;
    }
    $sql = vend('1,2',$datain,$datafi,$clinha,$cgrupo,$cmarca,$cdepartamento);
    $exsql=pg_query($conn,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $codigo=$row['cprohistorico'];
        $xmarca=$row['cmarproduto'];
        $dmarca=$row['cdesmarca'];
        $venda=$row['vendas'];
        $desc=$row['cdesproduto'];
        $com="insert into silviorelatorio (codigo,marca,rosane,descri) VALUES ($codigo,'$dmarca',$venda,'$desc')";
        $excom=pg_query($conn,$com);
    }
    $exsql=pg_query($conj,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $codigo=$row['cprohistorico'];
        $xmarca=$row['cmarproduto'];
        $dmarca=$row['cdesmarca'];
        $venda=$row['vendas'];
        $desc=$row['cdesproduto'];
        $com="select codigo from silviorelatorio where codigo =$codigo ";
        $excom=pg_query($conn,$com);
        $rscom=pg_fetch_array($excom);
        $ccmarca=$rscom['codigo'];
        if ($ccmarca == null) {
            $com="insert into silviorelatorio (codigo,marca,mayara,descri) VALUES ($codigo,'$dmarca',$venda,'$desc')";
        } else {
            $com="update silviorelatorio set mayara = $venda where  codigo =$codigo ";
        }
        $excom=pg_query($conn,$com);
    }
    $exsql=pg_query($conl,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $codigo=$row['cprohistorico'];
        $xmarca=$row['cmarproduto'];
        $dmarca=$row['cdesmarca'];
        $venda=$row['vendas'];
        $desc=$row['cdesproduto'];
        $com="select codigo from silviorelatorio where codigo =$codigo ";
        $excom=pg_query($conn,$com);
        $rscom=pg_fetch_array($excom);
        $ccmarca=$rscom['codigo'];
        if ($ccmarca == null) {
            $com="insert into silviorelatorio (codigo,marca,cesar,descri) VALUES ($codigo,'$dmarca',$venda,'$desc')";
        } else {
            $com="update silviorelatorio set cesar = $venda where  codigo =$codigo ";
        }
        $excom=pg_query($conn,$com);
    }
    $sql = vend('3,4',$datain,$datafi,$clinha,$cgrupo,$cmarca,$cdepartamento);
    $exsql=pg_query($conj,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $codigo=$row['cprohistorico'];
        $xmarca=$row['cmarproduto'];
        $dmarca=$row['cdesmarca'];
        $venda=$row['vendas'];
        $desc=$row['cdesproduto'];
        $com="select codigo from silviorelatorio where codigo =$codigo ";
        $excom=pg_query($conn,$com);
        $rscom=pg_fetch_array($excom);
        $ccmarca=$rscom['codigo'];
        if ($ccmarca == null) {
            $com="insert into silviorelatorio (codigo,marca,josi,descri) VALUES ($codigo,'$dmarca',$venda,'$desc')";
        } else {
            $com="update silviorelatorio set josi = $venda where  codigo =$codigo ";
        }
        $excom=pg_query($conn,$com);
    }
    $sql = vend('13,14',$datain,$datafi,$clinha,$cgrupo,$cmarca,$cdepartamento);
    $exsql=pg_query($conv,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $codigo=$row['cprohistorico'];
        $xmarca=$row['cmarproduto'];
        $dmarca=$row['cdesmarca'];
        $venda=$row['vendas'];
        $desc=$row['cdesproduto'];
        $com="select codigo from silviorelatorio where codigo =$codigo ";
        $excom=pg_query($conn,$com);
        $rscom=pg_fetch_array($excom);
        $ccmarca=$rscom['codigo'];
        if ($ccmarca == null) {
            $com="insert into silviorelatorio (codigo,marca,nadia,descri) VALUES ($codigo,'$dmarca',$venda,'$desc')";
        } else {
            $com="update silviorelatorio set nadia = $venda where  codigo =$codigo ";
        }
        $excom=pg_query($conn,$com);
    }
    $sql = vend('15,16',$datain,$datafi,$clinha,$cgrupo,$cmarca,$cdepartamento);
    $exsql=pg_query($conv,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $codigo=$row['cprohistorico'];
        $xmarca=$row['cmarproduto'];
        $dmarca=$row['cdesmarca'];
        $venda=$row['vendas'];
        $desc=$row['cdesproduto'];
        $com="select codigo from silviorelatorio where codigo =$codigo ";
        $excom=pg_query($conn,$com);
        $rscom=pg_fetch_array($excom);
        $ccmarca=$rscom['codigo'];
        if ($ccmarca == null) {
            $com="insert into silviorelatorio (codigo,marca,cleusa,descri) VALUES ($codigo,'$dmarca',$venda,'$desc')";
        } else {
            $com="update silviorelatorio set cleusa = $venda where  codigo =$codigo ";
        }
        $excom=pg_query($conn,$com);
    }
    $sql = vend('18',$datain,$datafi,$clinha,$cgrupo,$cmarca,$cdepartamento);
    $exsql=pg_query($conn,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $codigo=$row['cprohistorico'];
        $xmarca=$row['cmarproduto'];
        $dmarca=$row['cdesmarca'];
        $venda=$row['vendas'];
        $desc=$row['cdesproduto'];
        $com="select codigo from silviorelatorio where codigo = $codigo ";
        $excom=pg_query($conn,$com);
        $rscom=pg_fetch_array($excom);
        $ccmarca=$rscom['codigo'];
        if ($ccmarca == null) {
            $com="insert into silviorelatorio (codigo,marca,feira,descri) VALUES ($codigo,'$dmarca',$venda,'$desc')";
        } else {
            $com="update silviorelatorio set feira = $venda where  codigo =$codigo ";
        }
        $excom=pg_query($conn,$com);
    }
    $sql = vend('20',$datain,$datafi,$clinha,$cgrupo,$cmarca,$cdepartamento);
    $exsql=pg_query($conn,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $codigo=$row['cprohistorico'];
        $xmarca=$row['cmarproduto'];
        $dmarca=$row['cdesmarca'];
        $venda=$row['vendas'];
        $desc=$row['cdesproduto'];
        $com="select codigo from silviorelatorio where codigo = $codigo ";
        $excom=pg_query($conn,$com);
        $rscom=pg_fetch_array($excom);
        $ccmarca=$rscom['codigo'];
        if ($ccmarca == null) {
            $com="insert into silviorelatorio (codigo,marca,feiradois,descri) VALUES ($codigo,'$dmarca',$venda,'$desc')";
        } else {
            $com="update silviorelatorio set feiradois = $venda where  codigo =$codigo ";
        }
        $excom=pg_query($conn,$com);
    }
    $sql = vend('22',$datain,$datafi,$clinha,$cgrupo,$cmarca,$cdepartamento);
    $exsql=pg_query($conn,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $codigo=$row['cprohistorico'];
        $xmarca=$row['cmarproduto'];
        $dmarca=$row['cdesmarca'];
        $venda=$row['vendas'];
        $desc=$row['cdesproduto'];
        $com="select codigo from silviorelatorio where codigo = $codigo ";
        $excom=pg_query($conn,$com);
        $rscom=pg_fetch_array($excom);
        $ccmarca=$rscom['codigo'];
        if ($ccmarca == null) {
            $com="insert into silviorelatorio (codigo,marca,feiratres,descri) VALUES ($codigo,'$dmarca',$venda,'$desc')";
        } else {
            $com="update silviorelatorio set feiratres = $venda where  codigo =$codigo ";
        }
        $excom=pg_query($conn,$com);
    }
    $sql = vend('5,6',$datain,$datafi,$clinha,$cgrupo,$cmarca,$cdepartamento);
    $exsql=pg_query($conn,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $codigo=$row['cprohistorico'];
        $xmarca=$row['cmarproduto'];
        $dmarca=$row['cdesmarca'];
        $venda=$row['vendas'];
        $desc=$row['cdesproduto'];
        $com="select codigo from silviorelatorio where codigo = $codigo ";
        $excom=pg_query($conn,$com);
        $rscom=pg_fetch_array($excom);
        $ccmarca=$rscom['codigo'];
        if ($ccmarca == null) {
            $com="insert into silviorelatorio (codigo,marca,vila,descri) VALUES ($codigo,'$dmarca',$venda,'$desc')";
        } else {
            $com="update silviorelatorio set vila = $venda where  codigo =$codigo ";
        }
        $excom=pg_query($conn,$com);
    }
    $sql = vend('7,8',$datain,$datafi,$clinha,$cgrupo,$cmarca,$cdepartamento);
    $exsql=pg_query($conn,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $codigo=$row['cprohistorico'];
        $xmarca=$row['cmarproduto'];
        $dmarca=$row['cdesmarca'];
        $venda=$row['vendas'];
        $desc=$row['cdesproduto'];
        $com="select codigo from silviorelatorio where codigo =$codigo ";
        $excom=pg_query($conn,$com);
        $rscom=pg_fetch_array($excom);
        $ccmarca=$rscom['codigo'];
        if ($ccmarca == null) {
            $com="insert into silviorelatorio (codigo,marca,adriele,descri) VALUES ($codigo,'$dmarca',$venda,'$desc')";
        } else {
            $com="update silviorelatorio set adriele = $venda where  codigo =$codigo ";
        }
        $excom=pg_query($conn,$com);
    }

    echo "<table border='2' width='100%' bgcolor=#F5F6CE >";
    echo "<tr><td><font color=\"red\" size=4><strong>$dmarca</strong></font></td>"."<td><font color=\"black\" size=3><strong>Descrição</strong></font></td>".
        "<td><font color=\"black\" size=3><strong>Rosane</strong></font></td>".
        "<td><font color=\"black\" color=\"Red\" size=3><strong>Josi</strong></font></td>"."<td><font color=\"black\" size=3><strong>Nadia</strong></font></td>".
        "<td><font color=\"black\" size=3><strong>Cleusa</strong></font></td>"."<td><font color=\"black\" size=3><strong>Mayara</strong></font></td>".
        "<td><font color=\"black\" size=3><strong>César</strong></font></td>"."<td><font color=\"black\" size=3><strong>Adriele</strong></font></td>".
        "<td><font color=\"black\" size=3><strong>Feira(18)</strong></font></td>"."<td><font color=\"black\" size=3><strong>Feira(20)</strong></font></td>".
        "<td><font color=\"black\" size=3><strong>Vila</strong></font></td>"."<td><font color=\"black\" size=3><strong>Feira (22)</strong></font></td>"."<td><font color=\"black\" size=3><strong>Total</strong></font></td>"."</tr>";
    $sql="select *from silviorelatorio order by codigo";
    $exsql=pg_query($conn,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $codigo=$row['codigo'];        
        echo "<td><strong><font color=\"black\">".$codigo."</font></strong></td>\n";
        $desc=$row['descri'];
        echo "<td><strong><font color=\"black\">".$desc."</font></strong></td>\n";
        $qtd=$row['rosane'];$c1=$qtd;
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
        $qtd=$row['josi'];$c1=$c1+$qtd;
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
        $qtd=$row['nadia'];$c1=$c1+$qtd;
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
        $qtd=$row['cleusa'];$c1=$c1+$qtd;
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
        $qtd=$row['mayara'];$c1=$c1+$qtd;
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
        $qtd=$row['cesar'];$c1=$c1+$qtd;
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
        $qtd=$row['adriele'];$c1=$c1+$qtd;
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
        $qtd=$row['feira'];$c1=$c1+$qtd;
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
        $qtd=$row['feiradois'];$c1=$c1+$qtd;
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
        $qtd=$row['vila'];$c1=$c1+$qtd;
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
        $qtd=$row['feiratres'];$c1=$c1+$qtd;
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
        echo "<td><strong>".number_format($c1,2,",",".")."</strong></td>\n";
        echo "</tr>\n";
    }
    $sql="rollback";
    $exsql=pg_query($conn,$sql);
    echo "</table>";
    echo "<br><br>";
    $sql="begin";
    $exsql=pg_query($conn,$sql);
    function venda($a,$d,$e,$f,$g)
    //a = Empresa
    //b = Data Inicial
    //c = Data Final
    //d = Linha
    //e = Grupo
    //f = Marca
    //g = Departamento
    {
        $vend = "select (sum(centhistorico)-sum(csaihisotorico)) as vendas,cprohistorico,cmarproduto,cdesmarca,(cdesproduto):: character varying(10)  from ahistorico inner join aprodutos on cprohistorico = ccodproduto
                join tmarca on cmarproduto =  ccodmarca where  cemphistorico in ($a) $d $e $f $g  group by cprohistorico,cmarproduto,cdesmarca,cdesproduto  having sum(centhistorico-csaihisotorico) <> 0
                order by cprohistorico ";   
        return $vend;
    }
    $sql = venda('1,2',$clinha,$cgrupo,$cmarca,$cdepartamento);
    $exsql=pg_query($conn,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $codigo=$row['cprohistorico'];
        $xmarca=$row['cmarproduto'];
        $dmarca=$row['cdesmarca'];
        $venda=$row['vendas'];
        $desc=$row['cdesproduto'];
        $com="insert into silviorelatorio (codigo,marca,rosane,descri) VALUES ($codigo,'$dmarca',$venda,'$desc')";
        $excom=pg_query($conn,$com);
    }
    $exsql=pg_query($conj,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $codigo=$row['cprohistorico'];
        $xmarca=$row['cmarproduto'];
        $dmarca=$row['cdesmarca'];
        $venda=$row['vendas'];
        $desc=$row['cdesproduto'];
        $com="select codigo from silviorelatorio where codigo =$codigo ";
        $excom=pg_query($conn,$com);
        $rscom=pg_fetch_array($excom);
        $ccmarca=$rscom['codigo'];
        if ($ccmarca == null) {
            $com="insert into silviorelatorio (codigo,marca,mayara,descri) VALUES ($codigo,'$dmarca',$venda,'$desc')";
        } else {
            $com="update silviorelatorio set mayara = $venda where  codigo =$codigo ";
        }
        $excom=pg_query($conn,$com);
    }
    $exsql=pg_query($conl,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $codigo=$row['cprohistorico'];
        $xmarca=$row['cmarproduto'];
        $dmarca=$row['cdesmarca'];
        $venda=$row['vendas'];
        $desc=$row['cdesproduto'];
        $com="select codigo from silviorelatorio where codigo =$codigo ";
        $excom=pg_query($conn,$com);
        $rscom=pg_fetch_array($excom);
        $ccmarca=$rscom['codigo'];
        if ($ccmarca == null) {
            $com="insert into silviorelatorio (codigo,marca,cesar,descri) VALUES ($codigo,'$dmarca',$venda,'$desc')";
        } else {
            $com="update silviorelatorio set cesar = $venda where  codigo =$codigo ";
        }
        $excom=pg_query($conn,$com);
    }
    $sql = venda('3,4',$clinha,$cgrupo,$cmarca,$cdepartamento);
    $exsql=pg_query($conj,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $codigo=$row['cprohistorico'];
        $xmarca=$row['cmarproduto'];
        $dmarca=$row['cdesmarca'];
        $venda=$row['vendas'];
        $desc=$row['cdesproduto'];
        $com="select codigo from silviorelatorio where codigo =$codigo ";
        $excom=pg_query($conn,$com);
        $rscom=pg_fetch_array($excom);
        $ccmarca=$rscom['codigo'];
        if ($ccmarca == null) {
            $com="insert into silviorelatorio (codigo,marca,josi,descri) VALUES ($codigo,'$dmarca',$venda,'$desc')";
        } else {
            $com="update silviorelatorio set josi = $venda where  codigo =$codigo ";
        }
        $excom=pg_query($conn,$com);
    }
    $sql = venda('13,14',$clinha,$cgrupo,$cmarca,$cdepartamento);
    $exsql=pg_query($conv,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $codigo=$row['cprohistorico'];
        $xmarca=$row['cmarproduto'];
        $dmarca=$row['cdesmarca'];
        $venda=$row['vendas'];
        $desc=$row['cdesproduto'];
        $com="select codigo from silviorelatorio where codigo =$codigo ";
        $excom=pg_query($conn,$com);
        $rscom=pg_fetch_array($excom);
        $ccmarca=$rscom['codigo'];
        if ($ccmarca == null) {
            $com="insert into silviorelatorio (codigo,marca,nadia,descri) VALUES ($codigo,'$dmarca',$venda,'$desc')";
        } else {
            $com="update silviorelatorio set nadia = $venda where  codigo =$codigo ";
        }
        $excom=pg_query($conn,$com);
    }
    $sql = venda('15,16',$clinha,$cgrupo,$cmarca,$cdepartamento);
    $exsql=pg_query($conv,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $codigo=$row['cprohistorico'];
        $xmarca=$row['cmarproduto'];
        $dmarca=$row['cdesmarca'];
        $venda=$row['vendas'];
        $desc=$row['cdesproduto'];
        $com="select codigo from silviorelatorio where codigo =$codigo ";
        $excom=pg_query($conn,$com);
        $rscom=pg_fetch_array($excom);
        $ccmarca=$rscom['codigo'];
        if ($ccmarca == null) {
            $com="insert into silviorelatorio (codigo,marca,cleusa,descri) VALUES ($codigo,'$dmarca',$venda,'$desc')";
        } else {
            $com="update silviorelatorio set cleusa = $venda where  codigo =$codigo ";
        }
        $excom=pg_query($conn,$com);
    }
    $sql = venda('7,8',$clinha,$cgrupo,$cmarca,$cdepartamento);
    $exsql=pg_query($conn,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $codigo=$row['cprohistorico'];
        $xmarca=$row['cmarproduto'];
        $dmarca=$row['cdesmarca'];
        $venda=$row['vendas'];
        $desc=$row['cdesproduto'];
        $com="select codigo from silviorelatorio where codigo =$codigo ";
        $excom=pg_query($conn,$com);
        $rscom=pg_fetch_array($excom);
        $ccmarca=$rscom['codigo'];
        if ($ccmarca == null) {
            $com="insert into silviorelatorio (codigo,marca,adriele,descri) VALUES ($codigo,'$dmarca',$venda,'$desc')";
        } else {
            $com="update silviorelatorio set adriele = $venda where  codigo =$codigo ";
        }
        $excom=pg_query($conn,$com);
    }
    $sql = venda('18',$clinha,$cgrupo,$cmarca,$cdepartamento);
    $exsql=pg_query($conn,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $codigo=$row['cprohistorico'];
        $xmarca=$row['cmarproduto'];
        $dmarca=$row['cdesmarca'];
        $venda=$row['vendas'];
        $desc=$row['cdesproduto'];
        $com="select codigo from silviorelatorio where codigo =$codigo ";
        $excom=pg_query($conn,$com);
        $rscom=pg_fetch_array($excom);
        $ccmarca=$rscom['codigo'];
        if ($ccmarca == null) {
            $com="insert into silviorelatorio (codigo,marca,feira,descri) VALUES ($codigo,'$dmarca',$venda,'$desc')";
        } else {
            $com="update silviorelatorio set feira = $venda where  codigo =$codigo ";
        }
        $excom=pg_query($conn,$com);
    }
    $sql = venda('20',$clinha,$cgrupo,$cmarca,$cdepartamento);
    $exsql=pg_query($conn,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $codigo=$row['cprohistorico'];
        $xmarca=$row['cmarproduto'];
        $dmarca=$row['cdesmarca'];
        $venda=$row['vendas'];
        $desc=$row['cdesproduto'];
        $com="select codigo from silviorelatorio where codigo =$codigo ";
        $excom=pg_query($conn,$com);
        $rscom=pg_fetch_array($excom);
        $ccmarca=$rscom['codigo'];
        if ($ccmarca == null) {
            $com="insert into silviorelatorio (codigo,marca,feiradois,descri) VALUES ($codigo,'$dmarca',$venda,'$desc')";
        } else {
            $com="update silviorelatorio set feiradois = $venda where  codigo =$codigo ";
        }
        $excom=pg_query($conn,$com);
    }
    $sql = venda('22',$clinha,$cgrupo,$cmarca,$cdepartamento);
    $exsql=pg_query($conn,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $codigo=$row['cprohistorico'];
        $xmarca=$row['cmarproduto'];
        $dmarca=$row['cdesmarca'];
        $venda=$row['vendas'];
        $desc=$row['cdesproduto'];
        $com="select codigo from silviorelatorio where codigo =$codigo ";
        $excom=pg_query($conn,$com);
        $rscom=pg_fetch_array($excom);
        $ccmarca=$rscom['codigo'];
        if ($ccmarca == null) {
            $com="insert into silviorelatorio (codigo,marca,feiratres,descri) VALUES ($codigo,'$dmarca',$venda,'$desc')";
        } else {
            $com="update silviorelatorio set feiratres = $venda where  codigo =$codigo ";
        }
        $excom=pg_query($conn,$com);
    }
    echo "<table border='2' width='100%' bgcolor=#F5F6CE >";
    echo "<tr><td><font color=\"red\" size=3><strong>$dmarca</strong></font></td>"."<td><font color=\"black\" size=3><strong>Descrição</strong></font></td>"."<td><font color=\"black\" size=3><strong>Rosane</strong></font></td>".
        "<td><font color=\"black\" color=\"Red\" size=3><strong>Josi</strong></font></td>"."<td><font color=\"black\" size=3><strong>Nadia</strong></font></td>".
        "<td><font color=\"black\" size=3><strong>Cleusa</strong></font></td>"."<td><font color=\"black\" size=3><strong>Mayara</strong></font></td>".
        "<td><font color=\"black\" size=3><strong>César</strong></font></td>"."<td><font color=\"black\" size=3><strong>Adriele</strong></font></td>".
        "<td><font color=\"black\" size=3><strong>Feira(18)</strong></font></td>"."<td><font color=\"black\" size=3><strong>Feira(20)</strong></font></td>"."<td><font color=\"black\" size=3><strong>Vila</strong></font></td>"."<td><font color=\"black\" size=3><strong>Feira(22)</strong></font></td>"."<td><font color=\"black\" size=3><strong>Total</strong></font></td>"."</tr>";
    $sql="select *from silviorelatorio order by codigo";
    $exsql=pg_query($conn,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $codigo=$row['codigo'];
        echo "<td><strong><font color=\"black\">".$codigo."</font></strong></td>\n";
        $desc=$row['descri'];
        echo "<td><strong><font color=\"black\">".$desc."</font></strong></td>\n";
        $qtd=$row['rosane'];$c1=$qtd;
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
        $qtd=$row['josi'];$c1=$c1+$qtd;
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
        $qtd=$row['nadia'];$c1=$c1+$qtd;
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
        $qtd=$row['cleusa'];$c1=$c1+$qtd;
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
        $qtd=$row['mayara'];$c1=$c1+$qtd;
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
        $qtd=$row['cesar'];$c1=$c1+$qtd;
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
        $qtd=$row['adriele'];$c1=$c1+$qtd;
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
        $qtd=$row['feira'];$c1=$c1+$qtd;
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
        $qtd=$row['feiradois'];$c1=$c1+$qtd;
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
        $qtd=$row['vila'];$c1=$c1+$qtd;
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
        $qtd=$row['feiratres'];$c1=$c1+$qtd;
        echo "<td>".number_format($qtd,2,",",".")."</td>\n";
        echo "<td><strong>".number_format($c1,2,",",".")."</strong></td>\n";
        echo "</tr>\n";
    }
    echo "<td><font size=4><strong>".'TT'."</strong></font></td>\n";
    $sql="select sum(rosane)as rosane,sum(josi)as josi,sum(nadia)as nadia,sum(cleusa)as cleusa,sum(mayara)as mayara,sum(cesar)as cesar,sum(adriele) as adriele,sum(feira) as feira,sum(feiradois) as feiradois , sum(vila) as vila , sum(feiratres) as feiratres from silviorelatorio ";
    $exsql=pg_query($conn,$sql);
    $rssql=pg_fetch_array($exsql);
    echo "<td><font size=4><strong>".''."</strong></font></td>\n";
    $tt=$rssql['rosane'];$c1=$tt;
    echo "<td><font size=4><strong>".number_format($tt,2,",",".")."</strong></font></td>\n";
    $tt=$rssql['josi'];$c1=$c1+$tt;
    echo "<td><font size=4><strong>".number_format($tt,2,",",".")."</strong></font></td>\n";
    $tt=$rssql['nadia'];$c1=$c1+$tt;
    echo "<td><font size=4><strong>".number_format($tt,2,",",".")."</strong></font></td>\n";
    $tt=$rssql['cleusa'];$c1=$c1+$tt;
    echo "<td><font size=4><strong>".number_format($tt,2,",",".")."</strong></font></td>\n";
    $tt=$rssql['mayara'];$c1=$c1+$tt;
    echo "<td><font size=4><strong>".number_format($tt,2,",",".")."</strong></font></td>\n";
    $tt=$rssql['cesar'];$c1=$c1+$tt;
    echo "<td><font size=4><strong>".number_format($tt,2,",",".")."</strong></font></td>\n";
    $tt=$rssql['adriele'];$c1=$c1+$tt;
    echo "<td><font size=4><strong>".number_format($tt,2,",",".")."</strong></font></td>\n";
    $tt=$rssql['feira'];$c1=$c1+$tt;
    echo "<td><font size=4><strong>".number_format($tt,2,",",".")."</strong></font></td>\n";
    $tt=$rssql['feiradois'];$c1=$c1+$tt;
    echo "<td><font size=4><strong>".number_format($tt,2,",",".")."</strong></font></td>\n";
    $tt=$rssql['vila'];$c1=$c1+$tt;
    echo "<td><font size=4><strong>".number_format($tt,2,",",".")."</strong></font></td>\n";
    $tt=$rssql['feiratres'];$c1=$c1+$tt;
    echo "<td><font size=4><strong>".number_format($tt,2,",",".")."</strong></font></td>\n";
    echo "<td><font size=4><strong>".number_format($c1,2,",",".")."</strong></font></td>\n";
    echo "</tr>\n";
    $sql="rollback";
    $exsql=pg_query($conn,$sql);
    echo "</table>";
    echo "<br><br>";
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