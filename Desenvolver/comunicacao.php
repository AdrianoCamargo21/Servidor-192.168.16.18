<!DOCTYPE html>
<html>
<head>
<title>Conferência</title>
<meta http-equiv='refresh' content='600' ;url=http://192.168.13.2/Desenvolver/comunicacao.php';'>
</head>
</html>
<?php
date_default_timezone_set('America/Sao_Paulo');
$hora=date('H:i:s');
$hora_parte=explode(":",$hora);
$hora_h=$hora_parte[0];
$minuto=$hora_parte[1];
$segundo=$hora_parte[2];
?>
<HTML>
<HEAD>
<center>
  <script tpye=text/javascript>
var segundo=<?php echo $segundo;?>;
var minuto=<?php echo $minuto;?>;
var hora=<?php echo $hora_h;?>;
 function tempo(){
	  if (segundo<59){
		   segundo=segundo+1
		    if (segundo==59){
			     minuto=minuto+1;
			      segundo=0;
			       if (hora==24){
				        hora=hora+1;
				         minuto=0;
				          segundo=0;
				           }
		             }
            }
   document.getElementById("relogio").innerHTML=(hora+":"+minuto+":"+segundo);
    }
</script>
</center>
</HEAD>
<meta name="GENERATOR" content="MAX's HTML Beauty++ ME">
<body onload="setInterval('tempo();',1000)">
<marquee behavior="slide"><h1> <div name="relogio" id="relogio"></div></h1> </marquee>
<BODY>
</BODY>
</HTML>
<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
set_time_limit(0);
date_default_timezone_set('America/Sao_Paulo');
$time = date('H:i:s');
$dia = date('d-m-Y');
include_once("conexao.php");
$data = date('Y-m-d', strtotime($dia. '- 1 days')); echo 'Data Inicial da Conferência:'.implode("/",array_reverse(explode("-",$data))).'<br>';

//Conferência Dos TDMS
$dataf= date('Y-m-d');
$datai=date('Y-m-d', strtotime($dataf. '-30 days'));
echo "<table border='2' width='100%' bgcolor=#FFFFFF >";
echo "<tr><td>Empresa</td>"."<td>Emissor</td>"."<td>Data</td>"."</tr>";
echo "<td>".'CAÇADOR'."</td>\n";
echo "<td>".''."</td>\n";
echo "<td>".''."</td>\n";
echo "</tr>\n";
$sql="select cserserie,cempserie from tseriesnf order by cempserie";
$exsql= pg_query($conc,$sql);
while ($row = pg_fetch_assoc( $exsql)) {
    $serie=$row['cserserie'];
    $emp=$row['cempserie'];
    $com="select i_r02_crz ,d_r02_data_movimento_reducao from registror02 where d_r02_data_movimento_reducao >= '$datai' and i_r02_codigo_tse =$serie order by i_r02_crz ";
    $excom= pg_query($conc,$com);
    while ($row = pg_fetch_assoc( $excom)) {
        $numero=$row['i_r02_crz'];
        $data=$row['d_r02_data_movimento_reducao'];
        $com1="select i_c405_crz from c405 where i_c405_crz = $numero and i_c405_codigo_tse = $serie";
        $excom1= pg_query($conc,$com1);
        $rscom1=pg_fetch_array($excom1);
        $red=$rscom1['i_c405_crz'];
        if ($red ==  '') {
            echo "<td>".$emp."</td>\n";
            echo "<td>".$serie."</td>\n";
            echo "<td>".$data."</td>\n";
            echo "</tr>\n";
        }
    }
}
echo "<td>".'VIDEIRA/MARTELLO'."</td>\n";
echo "<td>".''."</td>\n";
echo "<td>".''."</td>\n";
echo "</tr>\n";
$sql="select cserserie,cempserie from tseriesnf order by cempserie";
$exsql= pg_query($conv,$sql);
while ($row = pg_fetch_assoc( $exsql)) {
    $serie=$row['cserserie'];
    $emp=$row['cempserie'];
    $com="select i_r02_crz ,d_r02_data_movimento_reducao from registror02 where d_r02_data_movimento_reducao >= '$datai' and i_r02_codigo_tse =$serie order by i_r02_crz ";
    $excom= pg_query($conv,$com);
    while ($row = pg_fetch_assoc( $excom)) {
        $numero=$row['i_r02_crz'];
        $data=$row['d_r02_data_movimento_reducao'];
        $com1="select i_c405_crz from c405 where i_c405_crz = $numero and i_c405_codigo_tse = $serie";
        $excom1= pg_query($conv,$com1);
        $rscom1=pg_fetch_array($excom1);
        $red=$rscom1['i_c405_crz'];
        if ($red ==  null) {            
            echo "<td>".$emp."</td>\n";
            echo "<td>".$serie."</td>\n";
            echo "<td>".$data."</td>\n";
            echo "</tr>\n";
        }
    }
}
echo "<td>".'LAGES'."</td>\n";
echo "<td>".''."</td>\n";
echo "<td>".''."</td>\n";
echo "</tr>\n";
$sql="select cserserie,cempserie from tseriesnf order by cempserie";
$exsql= pg_query($conl,$sql);
while ($row = pg_fetch_assoc( $exsql)) {
    $serie=$row['cserserie'];
    $emp=$row['cempserie'];
    $com="select i_r02_crz ,d_r02_data_movimento_reducao from registror02 where d_r02_data_movimento_reducao >= '$datai' and i_r02_codigo_tse =$serie order by i_r02_crz ";
    $excom= pg_query($conl,$com);
    while ($row = pg_fetch_assoc( $excom)) {
        $numero=$row['i_r02_crz'];
        $data=$row['d_r02_data_movimento_reducao'];
        $com1="select i_c405_crz from c405 where i_c405_crz = $numero and i_c405_codigo_tse = $serie";
        $excom1= pg_query($conl,$com1);
        $rscom1=pg_fetch_array($excom1);
        $red=$rscom1['i_c405_crz'];
        if ($red ==  null) {            
            echo "<td>".$emp."</td>\n";
            echo "<td>".$serie."</td>\n";
            echo "<td>".$data."</td>\n";
            echo "</tr>\n";
        }
    }
}
echo "<td>".'ATACADÂO'."</td>\n";
echo "<td>".''."</td>\n";
echo "<td>".''."</td>\n";
echo "</tr>\n";
$sql="select cserserie,cempserie from tseriesnf order by cempserie";
$exsql= pg_query($conj,$sql);
while ($row = pg_fetch_assoc( $exsql)) {
    $serie=$row['cserserie'];
    $emp=$row['cempserie'];
    $com="select i_r02_crz ,d_r02_data_movimento_reducao from registror02 where d_r02_data_movimento_reducao >= '$datai' and i_r02_codigo_tse =$serie order by i_r02_crz ";
    $excom= pg_query($conj,$com);
    while ($row = pg_fetch_assoc( $excom)) {
        $numero=$row['i_r02_crz'];
        $data=$row['d_r02_data_movimento_reducao'];
        $com1="select i_c405_crz from c405 where i_c405_crz = $numero and i_c405_codigo_tse = $serie";
        $excom1= pg_query($conj,$com1);
        $rscom1=pg_fetch_array($excom1);
        $red=$rscom1['i_c405_crz'];
        if ($red ==  null) {            
            echo "<td>".$emp."</td>\n";
            echo "<td>".$serie."</td>\n";
            echo "<td>".$data."</td>\n";
            echo "</tr>\n";
        }
    }
}
$data = date('Y-m-d', strtotime($dia. '- 1 days'));
echo "</table>";
//Fim Conferência Dos TDMS
function chave($a,$b)
{
    $query = "select cidesaidas,cnotsaidas,csrisaidas,cempresasaidas from asaidas where cemisaidas >= '$b' and s_asa_chave_nfe  is null and csrisaidas in ($a) 
             order by cidesaidas";
    return $query;
}
$sql = chave('71,70,74,72',$data);
$exsql = pg_query ($conc,$sql);
while($row = pg_fetch_assoc($exsql)){
    $nfe = $row['cnotsaidas'];
    $serie = $row['csrisaidas'];
    $empre = $row['cempresasaidas'];
    echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>°Nota Sem Chave de acesso
            Em Caçador   Empresa:'$empre'  Serie:'$serie' Nfe: '$nfe' </font></b></p>";
}
$sql = chave('3,99,102',$data);
$exsql = pg_query ($conv,$sql);
while($row = pg_fetch_assoc($exsql)){
    $nfe = $row['cnotsaidas'];
    $serie = $row['csrisaidas'];
    $empre = $row['cempresasaidas'];
    echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>°Nota Sem Chave de acesso
            Em Videira   Empresa:'$empre'  Serie:'$serie' Nfe: '$nfe' </font></b></p>";
}
$sql = chave('4,12',$data);
$exsql = pg_query ($conl,$sql);
while($row = pg_fetch_assoc($exsql)){
    $nfe = $row['cnotsaidas'];
    $serie = $row['csrisaidas'];
    $empre = $row['cempresasaidas'];
    echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>°Nota Sem Chave de acesso
            Em Lages   Empresa:'$empre'  Serie:'$serie' Nfe: '$nfe' </font></b></p>";
}
$sql = chave('1,6',$data);
$exsql = pg_query ($conj,$sql);
while($row = pg_fetch_assoc($exsql)){
    $nfe = $row['cnotsaidas'];
    $serie = $row['csrisaidas'];
    $empre = $row['cempresasaidas'];
    echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>°Nota Sem Chave de acesso
            Em Joinville   Empresa:'$empre'  Serie:'$serie' Nfe: '$nfe' </font></b></p>";
}
function aprazo($a,$b)
{
    $query = "select cnotsaidas,cemisaidas,cempresasaidas from asaidas   where cemisaidas >= '$b' and i_asa_codigo_tna in ($a) and 
              caviaprsaidas <> 'V' order by cnotsaidas";
    return $query;
}
$sql = aprazo('8,10,68,70',$data);
$exsql = pg_query($conc,$sql);
while($row = pg_fetch_assoc($exsql)){
    $nfe = $row['cnotsaidas'];
    $emi = $row['cemisaidas'];
    $emp = $row['cempresasaidas'];
    echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>°Nota lançada aprazo
        Em Caçador Empresa:'$emp'  Emisão: '$emi' Nfe: '$nf' </font></b></p>";
}
$sql = aprazo('8,10,68,69',$data);
$exsql = pg_query($conv,$sql);
while($row = pg_fetch_assoc($exsql)){
    $nfe = $row['cnotsaidas'];
    $emi = $row['cemisaidas'];
    $emp = $row['cempresasaidas'];
    echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>°Nota lançada aprazo
        Em Videira Empresa:'$emp'  Emisão: '$emi' Nfe: '$nf' </font></b></p>";
}
$sql = aprazo('3,10,22,23',$data);
$exsql = pg_query($conl,$sql);
while($row = pg_fetch_assoc($exsql)){
    $nfe = $row['cnotsaidas'];
    $emi = $row['cemisaidas'];
    $emp = $row['cempresasaidas'];
    echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>°Nota lançada aprazo
        Em Lages Empresa:'$emp'  Emisão: '$emi' Nfe: '$nf' </font></b></p>";
}
$sql = aprazo('3,15,16,9',$data);
$exsql = pg_query($conj,$sql);
while($row = pg_fetch_assoc($exsql)){
    $nfe = $row['cnotsaidas'];
    $emi = $row['cemisaidas'];
    $emp = $row['cempresasaidas'];
    echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>°Nota lançada aprazo
        Em Joinville Empresa:'$emp'  Emisão: '$emi' Nfe: '$nf' </font></b></p>";
}
function transferencia($a,$b)
{
    $query = "select cidesaidas,cnotsaidas,cemisaidas,cempresasaidas from asaidas where cemisaidas >='$b' and i_asa_codigo_tna in 
            ($a) order by cidesaidas";
    return $query;
    
}
$sql = transferencia('8',$data);
$exsql = pg_query($conc,$sql);
while($row = pg_fetch_assoc($exsql)){
    $id = $row['cidesaidas'];
    $nfe = $row['cnotsaidas'];
    $emi = $row['cemisaidas'];
    $emp = $row['cempresasaidas'];
    $com = "select csidentradas from aentradas where i_aen_ide_saida_trans = '$id'";
    $excom = pg_query($conc,$com);
    $rscom = pg_fetch_array($excom); 
    if ($rscom == null) {
        echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>°Erro Nota sem Tranferência em Caçador Nfe: '$nfe'  Emisão: '$emi' Empresa:'$emp'</font></b></p>";
    }    
}
$sql = transferencia('8',$data);
$exsql = pg_query($conv,$sql);
while($row = pg_fetch_assoc($exsql)){
    $id = $row['cidesaidas'];
    $nfe = $row['cnotsaidas'];
    $emi = $row['cemisaidas'];
    $emp = $row['cempresasaidas'];
    $com = "select csidentradas from aentradas where i_aen_ide_saida_trans = '$id'";
    $excom = pg_query($conv,$com);
    $rscom = pg_fetch_array($excom);
    if ($rscom == null) {
        echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>°Erro Nota sem Tranferência em Videira Nfe: '$nfe'  Emisão: '$emi' Empresa:'$emp'</font></b></p>";
    }
}
$sql = transferencia('3',$data);
$exsql = pg_query($conl,$sql);
while($row = pg_fetch_assoc($exsql)){
    $id = $row['cidesaidas'];
    $nfe = $row['cnotsaidas'];
    $emi = $row['cemisaidas'];
    $emp = $row['cempresasaidas'];
    $com = "select csidentradas from aentradas where i_aen_ide_saida_trans = '$id'";
    $excom = pg_query($conl,$com);
    $rscom = pg_fetch_array($excom);
    if ($rscom == null) {
        echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>°Erro Nota sem Tranferência em Lages Nfe: '$nfe'  Emisão: '$emi' Empresa:'$emp'</font></b></p>";
    }
}
$sql = transferencia('3',$data);
$exsql = pg_query($conj,$sql);
while($row = pg_fetch_assoc($exsql)){
    $id = $row['cidesaidas'];
    $nfe = $row['cnotsaidas'];
    $emi = $row['cemisaidas'];
    $emp = $row['cempresasaidas'];
    $com = "select csidentradas from aentradas where i_aen_ide_saida_trans = '$id'";
    $excom = pg_query($conj,$com);
    $rscom = pg_fetch_array($excom);
    if ($rscom == null) {
        echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>°Erro Nota sem Tranferência em Joinville Nfe: '$nfe'  Emisão: '$emi' Empresa:'$emp'</font></b></p>";
    }
}
function fisica($a,$b)
{
    $query = "select cidesaidas,cnotsaidas,cemisaidas,cnpj_saidas,cempresasaidas from asaidas where cnpj_saidas < 0 and  cemisaidas >= '$b' and i_asa_codigo_tna in ($a) order by cidesaidas";
    return $query;    
}
$sql = fisica('8',$data);
$exsql = pg_query($conc,$sql);
while($row = pg_fetch_assoc($exsql)){
    $nfe = $row['cnotsaidas'];
    $emi = $row['cemisaidas'];
    $emp = $row['cempresasaidas'];
    echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>°Transferencia Para Pessoa Fiseica 
        Em Caçador Empresa:'$emp'  Emisão: '$emi' Nfe: '$nfe' </font></b></p>";
}
$sql = fisica('8',$data);
$exsql = pg_query($conv,$sql);
while($row = pg_fetch_assoc($exsql)){
    $nfe = $row['cnotsaidas'];
    $emi = $row['cemisaidas'];
    $emp = $row['cempresasaidas'];
    echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>°Transferencia Para Pessoa Fiseica
        Em Videira Empresa:'$emp'  Emisão: '$emi' Nfe: '$nfe' </font></b></p>";
}
$sql = fisica('3',$data);
$exsql = pg_query($conl,$sql);
while($row = pg_fetch_assoc($exsql)){
    $nfe = $row['cnotsaidas'];
    $emi = $row['cemisaidas'];
    $emp = $row['cempresasaidas'];
    echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>°Transferencia Para Pessoa Fiseica
        Em Lages Empresa:'$emp'  Emisão: '$emi' Nfe: '$nfe' </font></b></p>";
}
$sql = fisica('3',$data);
$exsql = pg_query($conj,$sql);
while($row = pg_fetch_assoc($exsql)){
    $nfe = $row['cnotsaidas'];
    $emi = $row['cemisaidas'];
    $emp = $row['cempresasaidas'];
    echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>°Transferencia Para Pessoa Fiseica
        Em Joinville Empresa:'$emp'  Emisão: '$emi' Nfe: '$nfe' </font></b></p>";
}
function juridica($a,$b)
{
    $query = "select cidesaidas,cnotsaidas,cemisaidas,cempresasaidas from asaidas where cpf_saidas < 0 and  cemisaidas >= '$b' and i_asa_codigo_tna in ($a) and cclisaidas <> '25411' order by cidesaidas";
    return $query;
}
$sql = juridica('68',$data);
$exsql = pg_query($conc,$sql);
while($row = pg_fetch_assoc($exsql)){
    $nfe = $row['cnotsaidas'];
    $emi = $row['cemisaidas'];
    $emp = $row['cempresasaidas'];
    echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>°Nota Condicional Pessao Juridica
        Em Caçador Empresa:'$emp'  Emisão: '$emi' Nfe: '$nfe' </font></b></p>";
}
$sql = juridica('68',$data);
$exsql = pg_query($conv,$sql);
while($row = pg_fetch_assoc($exsql)){
    $nfe = $row['cnotsaidas'];
    $emi = $row['cemisaidas'];
    $emp = $row['cempresasaidas'];
    echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>°Nota Condicional Pessao Juridica
        Em Videira Empresa:'$emp'  Emisão: '$emi' Nfe: '$nfe' </font></b></p>";
}
$sql = juridica('24',$data);
$exsql = pg_query($conl,$sql);
while($row = pg_fetch_assoc($exsql)){
    $nfe = $row['cnotsaidas'];
    $emi = $row['cemisaidas'];
    $emp = $row['cempresasaidas'];
    echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>°Nota Condicional Pessao Juridica
        Em Lages Empresa:'$emp'  Emisão: '$emi' Nfe: '$nfe' </font></b></p>";
}
$sql = juridica('15',$data);
$exsql = pg_query($conj,$sql);
while($row = pg_fetch_assoc($exsql)){
    $nfe = $row['cnotsaidas'];
    $emi = $row['cemisaidas'];
    $emp = $row['cempresasaidas'];
    echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>°Nota Condicional Pessao Juridica
        Em Joinville Empresa:'$emp'  Emisão: '$emi' Nfe: '$nfe' </font></b></p>";
}
function conftrans($a,$b)
{
    $query = "select cidesaidas,cnotsaidas,cemisaidas,cempresasaidas,cnpj_saidas from asaidas where  cemisaidas >= '$b' and i_asa_codigo_tna in ($a) order by cidesaidas";
    return $query;
}
$sql = conftrans('8',$data);
$exsql = pg_query($congc,$sql);
while($row = pg_fetch_assoc($exsql)){
    $id = $row['cidesaidas'];
    $nfe = $row['cnotsaidas'];
    $emi = $row['cemisaidas'];
    $emp = $row['cempresasaidas'];
    $cnpjcli = $row['cnpj_saidas'];
    $com = "select ccnpjempresa from tempresa where ccodempresa = $emp";
    $excom = pg_query($congc,$com);
    $rscom = pg_fetch_array($excom);
    $cnpj = $rscom['ccnpjempresa'];
    $com = "select ccodfornecedor from afornecedor where ccgcfornecedor = '$cnpj'";
    $excom = pg_query($congc,$com);
    $rscom = pg_fetch_array($excom);
    $codfor = $rscom['ccodfornecedor'];
    $com = "select cforentradas from aentradas where cemientradas = '$emi' and i_aen_ide_saida_trans = $id";
    $excom = pg_query($congc,$com);
    $rscom = pg_fetch_array($excom);
    $codfore = $rscom['cforentradas'];
    if ($codfore <> null) {
        if ($codfor<>$codfore ){
            echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>°Erro Nota C/ Fornecedor errado Caçador: Nfe: '$nfe'  Emisão:'$emi' Empresa:'$emp'</font></b></p>";
        }
        $com = "select ccodempresa from tempresa where ccnpjempresa ='$cnpjcli' order by ccodempresa";
        $excom = pg_query($congc,$com);
        $rscom = pg_fetch_array($excom);
        $code = $rscom['ccodempresa'];
        if ($code == null) {            
            echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>°Erro Cliente em Nfe Não Cadastado Como Empresa Destino Caçador Nfe: '$nfe'  Emisão:'$emi' Empresa:'$emp'</font></b></p>";
        } else {
            $com = "select cempentrada from aentradas where i_aen_ide_saida_trans = '$id' ";
            $excom = pg_query($congc,$com);
            $rscom = pg_fetch_array($excom);
            $codc = $rscom['cempentrada'];
            if ($codc <> null) {
                if ($code <> $codc) {                  
                    echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>°Caçador :Erro nota em c/ entrada em epresa errada Lançado:'$codc' Correta:'$code' Nfe: '$nfe'  Emisão:'$emi' Empresa:'$emp'</font></b></p>";
                }
            }
        }
    }
}
$sql = conftrans('8',$data);
$exsql = pg_query($congv,$sql);
while($row = pg_fetch_assoc($exsql)){
    $id = $row['cidesaidas'];
    $nfe = $row['cnotsaidas'];
    $emi = $row['cemisaidas'];
    $emp = $row['cempresasaidas'];
    $cnpjcli = $row['cnpj_saidas'];
    $com = "select ccnpjempresa from tempresa where ccodempresa = $emp";
    $excom = pg_query($congv,$com);
    $rscom = pg_fetch_array($excom);
    $cnpj = $rscom['ccnpjempresa'];
    $com = "select ccodfornecedor from afornecedor where ccgcfornecedor = '$cnpj'";
    $excom = pg_query($congv,$com);
    $rscom = pg_fetch_array($excom);
    $codfor = $rscom['ccodfornecedor'];
    $com = "select cforentradas from aentradas where cemientradas = '$emi' and i_aen_ide_saida_trans = $id";
    $excom = pg_query($congv,$com);
    $rscom = pg_fetch_array($excom);
    $codfore = $rscom['cforentradas'];
    if ($codfore <> null) {
        if ($codfor<>$codfore ){
            echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>°Erro Nota C/ Fornecedor errado Videira: Nfe: '$nfe'  Emisão:'$emi' Empresa:'$emp'</font></b></p>";
        }
        $com = "select ccodempresa from tempresa where ccnpjempresa ='$cnpjcli' order by ccodempresa";
        $excom = pg_query($congv,$com);
        $rscom = pg_fetch_array($excom);
        $code = $rscom['ccodempresa'];
        if ($code == null) {
            echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>°Erro Cliente em Nfe Não Cadastado Como Empresa Destino Videira Nfe: '$nf'  Emisão:'$emi' Empresa:'$emp'</font></b></p>";
        } else {
            $com = "select cempentrada from aentradas where i_aen_ide_saida_trans = '$id' ";
            $excom = pg_query($congv,$com);
            $rscom = pg_fetch_array($excom);
            $codc = $rscom['cempentrada'];
            if ($codc <> null) {
                if ($code <> $codc) {
                    echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>°Caçador :Erro nota em c/ entrada em epresa errada Lançado:'$codc' Correta:'$code' Nfe: '$nfe'  Emisão:'$emi' Empresa:'$emp'</font></b></p>";
                }
            }
        }
    }
}
$sql = conftrans('3',$data);
$exsql = pg_query($congl,$sql);
while($row = pg_fetch_assoc($exsql)){
    $id = $row['cidesaidas'];
    $nfe = $row['cnotsaidas'];
    $emi = $row['cemisaidas'];
    $emp = $row['cempresasaidas'];
    $cnpjcli = $row['cnpj_saidas'];
    $com = "select ccnpjempresa from tempresa where ccodempresa = $emp";
    $excom = pg_query($congl,$com);
    $rscom = pg_fetch_array($excom);
    $cnpj = $rscom['ccnpjempresa'];
    $com = "select ccodfornecedor from afornecedor where ccgcfornecedor = '$cnpj'";
    $excom = pg_query($congl,$com);
    $rscom = pg_fetch_array($excom);
    $codfor = $rscom['ccodfornecedor'];
    $com = "select cforentradas from aentradas where cemientradas = '$emi' and i_aen_ide_saida_trans = $id";
    $excom = pg_query($congl,$com);
    $rscom = pg_fetch_array($excom);
    $codfore = $rscom['cforentradas'];
    if ($codfore <> null) {
        if ($codfor<>$codfore ){
            echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>°Erro Nota C/ Fornecedor errado Lages: Nfe: '$nf'  Emisão:'$emi' Empresa:'$emp'</font></b></p>";
        }
        $com = "select ccodempresa from tempresa where ccnpjempresa ='$cnpjcli' order by ccodempresa";
        $excom = pg_query($congl,$com);
        $rscom = pg_fetch_array($excom);
        $code = $rscom['ccodempresa'];
        if ($code == null) {
            echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>°Erro Cliente em Nfe Não Cadastado Como Empresa Destino Lages Nfe: '$nf'  Emisão:'$emi' Empresa:'$emp'</font></b></p>";
        } else {
            $com = "select cempentrada from aentradas where i_aen_ide_saida_trans = '$id' ";
            $excom = pg_query($congl,$com);
            $rscom = pg_fetch_array($excom);
            $codc = $rscom['cempentrada'];
            if ($codc <> null) {
                if ($code <> $codc) {
                    echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>°Caçador :Erro nota em c/ entrada em epresa errada Lançado:'$codc' Correta:'$code' Nfe: '$nf'  Emisão:'$emi' Empresa:'$emp'</font></b></p>";
                }
            }
        }
    }
}
$sql = conftrans('3',$data);
$exsql = pg_query($congj,$sql);
while($row = pg_fetch_assoc($exsql)){
    $id = $row['cidesaidas'];
    $nfe = $row['cnotsaidas'];
    $emi = $row['cemisaidas'];
    $emp = $row['cempresasaidas'];
    $cnpjcli = $row['cnpj_saidas'];
    $com = "select ccnpjempresa from tempresa where ccodempresa = $emp";
    $excom = pg_query($congj,$com);
    $rscom = pg_fetch_array($excom);
    $cnpj = $rscom['ccnpjempresa'];
    $com = "select ccodfornecedor from afornecedor where ccgcfornecedor = '$cnpj'";
    $excom = pg_query($congj,$com);
    $rscom = pg_fetch_array($excom);
    $codfor = $rscom['ccodfornecedor'];
    $com = "select cforentradas from aentradas where cemientradas = '$emi' and i_aen_ide_saida_trans = $id";
    $excom = pg_query($congj,$com);
    $rscom = pg_fetch_array($excom);
    $codfore = $rscom['cforentradas'];
    if ($codfore <> null) {
        if ($codfor<>$codfore ){
            echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>°Erro Nota C/ Fornecedor errado Joinville: Nfe: '$nfe'  Emisão:'$emi' Empresa:'$emp'</font></b></p>";
        }
        $com = "select ccodempresa from tempresa where ccnpjempresa ='$cnpjcli' order by ccodempresa"; 
        $excom = pg_query($congj,$com);
        $rscom = pg_fetch_array($excom);
        $code = $rscom['ccodempresa'];
        if ($code == null) {
            echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>°Erro Cliente em Nfe Não Cadastado Como Empresa Destino Joinville Nfe: '$nf'  Emisão:'$emi' Empresa:'$emp'</font></b></p>";
        } else {
            $com = "select cempentrada from aentradas where i_aen_ide_saida_trans = '$id' ";
            $excom = pg_query($congj,$com);
            $rscom = pg_fetch_array($excom);
            $codc = $rscom['cempentrada'];
            if ($codc <> null) {
                if ($code <> $codc) {
                    echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>°Caçador :Erro nota em c/ entrada em epresa errada Lançado:'$codc' Correta:'$code' Nfe: '$nfe'  Emisão:'$emi' Empresa:'$emp'</font></b></p>";
                }
            }
        }
    }
}
echo "<table border='2' width='100%' bgcolor=#FFFFFF >";
echo "<tr><td>Código</td>"."<td>Empressa</td>"."<td>Emisão</td>"."</tr>";
$conf = "10,14,15,18,22,24,33,41,42,45,49,53,63,70,71,73,76,78,79,81,84,85,88,95,96,98,104,108,109,110,115,13,117,121,122,129,127,129,130,135,136,138,140,141,143,144";
$cal = "9,11,16,17,20,25,33,34,44,46,51,54,55,59,58,60,61,74,71,86,93,97,99,102,107,111,112,120,116,119,120,123,128,132,137,139,145";
function saidalinha($a,$b,$c)
{
    $query = "select cprohistorico,sum(csaihisotorico),cemihistorico from ahistorico inner join aprodutos on cprohistorico = ccodproduto where                 
             cemihistorico >= '$b' and clinproduto in ($a) and cemphistorico in ($c)               
             group by cprohistorico,cemihistorico having sum(csaihisotorico) > 0 order by cemihistorico,cprohistorico ";
    return $query;
}
function saidatodas($b,$c)
{
    $query = "select cprohistorico,sum(csaihisotorico),cemihistorico from ahistorico inner join aprodutos on cprohistorico = ccodproduto where
             cemihistorico >= '$b' and clinproduto <> 103 and cemphistorico in ($c)
             group by cprohistorico,cemihistorico having sum(csaihisotorico) > 0 order by cemihistorico,cprohistorico ";
    return $query;
}
echo "<td>".'Rosane'."</td>\n";
echo "</tr>\n";
$emp = '1,2';
$sql = saidalinha($cal,$data,$emp); 
$exsql = pg_query($congc,$sql);
while($row = pg_fetch_assoc($exsql)){
    $cod = $row['cprohistorico'];
    $emi = $row['cemihistorico'];
    $qtd = $row['sum'];
    $com = "select sum(centhistorico-csaihisotorico) from ahistorico
            where cprohistorico = $cod and cemphistorico in ($emp)  
            ";
    $excom = pg_query($congc,$com);
    $rscom = pg_fetch_array($excom);
    $estoq = $rscom['sum'];
    if ($estoq < 0) {
        echo "<td>".$cod."</td>\n";
        echo "<td>".$emp."</td>\n";
        echo "<td>".implode("/",array_reverse(explode("-",$emi)))."</td>\n";
        echo "</tr>\n";        
    }
}
echo "<td>".'Lucélia'."</td>\n";
echo "</tr>\n";
$emp = '3,4';
$sql = saidalinha($conf,$data,$emp);
$exsql = pg_query($congc,$sql);
while($row = pg_fetch_assoc($exsql)){
    $cod = $row['cprohistorico'];
    $emi = $row['cemihistorico'];
    $qtd = $row['sum'];
    $com = "select sum(centhistorico-csaihisotorico) from ahistorico where cprohistorico = $cod and cemphistorico in ($emp)";
    $excom = pg_query($congc,$com);
    $rscom = pg_fetch_array($excom);
    $estoq = $rscom['sum'];
    if ($estoq < 0) {
        echo "<td>".$cod."</td>\n";
        echo "<td>".$emp."</td>\n";
        echo "<td>".implode("/",array_reverse(explode("-",$emi)))."</td>\n";
        echo "</tr>\n";
    }
}
echo "<td>".'Vila'."</td>\n";
echo "</tr>\n";
$emp = '5,6';
$sql = saidalinha($conf,$data,$emp);
$exsql = pg_query($congc,$sql);
while($row = pg_fetch_assoc($exsql)){
    $cod = $row['cprohistorico'];
    $emi = $row['cemihistorico'];
    $qtd = $row['sum'];
    $com = "select sum(centhistorico-csaihisotorico) from ahistorico where cprohistorico = $cod and cemphistorico in ($emp)";
    $excom = pg_query($congc,$com);
    $rscom = pg_fetch_array($excom);
    $estoq = $rscom['sum'];
    if ($estoq  < 0) {
        echo "<td>".$cod."</td>\n";
        echo "<td>".$emp."</td>\n";
        echo "<td>".implode("/",array_reverse(explode("-",$emi)))."</td>\n";
        echo "</tr>\n";
    }
}
echo "<td>".'Adrielli'."</td>\n";
echo "</tr>\n";
$emp = '7,8';
$sql = saidalinha($conf,$data,$emp);
$exsql = pg_query($congc,$sql);
while($row = pg_fetch_assoc($exsql)){
    $cod = $row['cprohistorico'];
    $emi = $row['cemihistorico'];
    $qtd = $row['sum'];
    $com = "select sum(centhistorico-csaihisotorico) from ahistorico where cprohistorico = $cod and cemphistorico in ($emp)";
    $excom = pg_query($congc,$com);
    $rscom = pg_fetch_array($excom);
    $estoq = $rscom['sum'];
    if ($estoq < 0) {
        echo "<td>".$cod."</td>\n";
        echo "<td>".$emp."</td>\n";
        echo "<td>".implode("/",array_reverse(explode("-",$emi)))."</td>\n";
        echo "</tr>\n";
    }
}
echo "<td>".'Atacadão'."</td>\n";
echo "</tr>\n";
$emp = '1,2';
$sql = saidatodas($data,$emp);
$exsql = pg_query($congj,$sql);
while($row = pg_fetch_assoc($exsql)){
    $cod = $row['cprohistorico'];
    $emi = $row['cemihistorico'];
    $qtd = $row['sum'];
    $com = "select sum(centhistorico-csaihisotorico) from ahistorico where cprohistorico = $cod and cemphistorico in ($emp)";
    $excom = pg_query($congj,$com);
    $rscom = pg_fetch_array($excom);
    $estoq = $rscom['sum'];
    if ($estoq < 0) {
        echo "<td>".$cod."</td>\n";
        echo "<td>".$emp."</td>\n";
        echo "<td>".implode("/",array_reverse(explode("-",$emi)))."</td>\n";
        echo "</tr>\n";
    }
}
echo "<td>".'Josi'."</td>\n";
echo "</tr>\n";
$emp = '3,4';
$sql = saidalinha($cal,$data,$emp);
$exsql = pg_query($congj,$sql);
while($row = pg_fetch_assoc($exsql)){
    $cod = $row['cprohistorico'];
    $emi = $row['cemihistorico'];
    $qtd = $row['sum'];
    $com = "select sum(centhistorico-csaihisotorico) from ahistorico where cprohistorico = $cod and cemphistorico in ($emp)";
    $excom = pg_query($congj,$com);
    $rscom = pg_fetch_array($excom);
    $estoq = $rscom['sum'];
    if ($estoq < 0) {
        echo "<td>".$cod."</td>\n";
        echo "<td>".$emp."</td>\n";
        echo "<td>".implode("/",array_reverse(explode("-",$emi)))."</td>\n";
        echo "</tr>\n";
    }
}
echo "<td>".'Nadia'."</td>\n";
echo "</tr>\n";
$emp = '13,14';
$sql = saidatodas($data,$emp);
$exsql = pg_query($congv,$sql);
while($row = pg_fetch_assoc($exsql)){
    $cod = $row['cprohistorico'];
    $emi = $row['cemihistorico'];
    $qtd = $row['sum'];
    $com = "select sum(centhistorico-csaihisotorico) from ahistorico where cprohistorico = $cod and cemphistorico in ($emp)";
    $excom = pg_query($congv,$com);
    $rscom = pg_fetch_array($excom);
    $estoq = $rscom['sum'];
    if ($estoq < 0) {
        echo "<td>".$cod."</td>\n";
        echo "<td>".$emp."</td>\n";
        echo "<td>".implode("/",array_reverse(explode("-",$emi)))."</td>\n";
        echo "</tr>\n";
    }
}
echo "<td>".'Shop Videira'."</td>\n";
echo "</tr>\n";
$emp = '17,18';
$sql = saidatodas($data,$emp);
$exsql = pg_query($congv,$sql);
while($row = pg_fetch_assoc($exsql)){
    $cod = $row['cprohistorico'];
    $emi = $row['cemihistorico'];
    $qtd = $row['sum'];
    $com = "select sum(centhistorico-csaihisotorico) from ahistorico where cprohistorico = $cod and cemphistorico in ($emp)";
    $excom = pg_query($congv,$com);
    $rscom = pg_fetch_array($excom);
    $estoq = $rscom['sum'];
    if ($estoq < 0) {
        echo "<td>".$cod."</td>\n";
        echo "<td>".$emp."</td>\n";
        echo "<td>".implode("/",array_reverse(explode("-",$emi)))."</td>\n";
        echo "</tr>\n";
    }
}
echo "<td>".'Martello'."</td>\n";
echo "</tr>\n";
$emp = '15,16';
$sql = saidatodas($data,$emp);
$exsql = pg_query($congv,$sql);
while($row = pg_fetch_assoc($exsql)){
    $cod = $row['cprohistorico'];
    $emi = $row['cemihistorico'];
    $qtd = $row['sum'];
    $com = "select sum(centhistorico-csaihisotorico) from ahistorico where cprohistorico = $cod and cemphistorico in ($emp)";
    $excom = pg_query($congv,$com);
    $rscom = pg_fetch_array($excom);
    $estoq = $rscom['sum'];
    if ($estoq < 0) {
        echo "<td>".$cod."</td>\n";
        echo "<td>".$emp."</td>\n";
        echo "<td>".implode("/",array_reverse(explode("-",$emi)))."</td>\n";
        echo "</tr>\n";
    }
}




$sql="select sistema from confacomulado  group by sistema";
$exsql=pg_query($congc,$sql);
while($row = pg_fetch_assoc($exsql)){
    $sis=$row['sistema'];
    $com="select id,(valorcorreto-valorsistema)as dif from confacomulado where sistema =$sis order by id desc limit 1  ";
    $excom=pg_query($congc,$com);
    $rscom=pg_fetch_array($excom);
    $dif=$rscom['dif'];
    if ( $dif < 0 or $dif > 0 ) {
        $som ++;
        if ($sis==1){
            $emp='Caçador';
        }
        if ($sis==2){
            $emp='Videira';
        }
        if ($sis==3){
            $emp='Lages';
        }
        if ($sis==4){
            $emp='Atacadão';
        }
        echo "<p style=background:#D3D3D3; align=center <br/><b><font size=5 color=#0404B4>Recebivél $emp Diferença R$:$dif  </font></b></p>";
    }    
}
$sql="select i_asa_cod_asa_orig,cempresasaidas,cnotsaidas,ctotsaidas  from asaidas  where cemisaidas >= '$data' and i_asa_codigo_tna = '70' order by i_asa_cod_asa_orig";
$exsql=pg_query($congc,$sql);
while($row = pg_fetch_assoc($exsql)){
    $ide=$row['i_asa_cod_asa_orig'];
    $empe=$row['cempresasaidas'];
    $nfe=$row['cnotsaidas'];
    $valore=$row['ctotsaidas'];
    $com="select  cempresasaidas,ctotsaidas,i_asa_codigo_tna from asaidas where cidesaidas =  $ide";
    $excom=pg_query($congc,$com);
    $rscom=pg_fetch_array($excom);
    $emps=$rscom['cempresasaidas'];
    $valors=$rscom['ctotsaidas'];
    $ope=$rscom['i_asa_codigo_tna'];
    if ($empe <> $emps) {
        $som ++;
        echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>°Caçador: Nota De Outra Empresa Selecionada Nfe:$nfe </font></b></p>";
    }
    if ($valore <> $valors ) {
        $som ++;
        echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>°Caçador: Nota De Outro Valor Selecionado Nfe:$nfe </font></b></p>";
    }
    if ($ope <> '68') {
        $som ++;
        echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>°Caçador: Nota de Sáida Não era condicional Nfe:$nfe </font></b></p>";
    }
}
$sql="select i_asa_cod_asa_orig,cempresasaidas,cnotsaidas,ctotsaidas,cemisaidas  from asaidas  where cemisaidas >= '$data' and i_asa_codigo_tna = '69' order by i_asa_cod_asa_orig";
$exsql=pg_query($congv,$sql);
while($row = pg_fetch_assoc($exsql)){
    $ide=$row['i_asa_cod_asa_orig'];
    $empe=$row['cempresasaidas'];
    $nfe=$row['cnotsaidas'];
    $valore=$row['ctotsaidas'];
    $emisao=$row['cemisaidas'];
    $com="select  cempresasaidas,ctotsaidas,i_asa_codigo_tna from asaidas where cidesaidas =  $ide";
    $excom=pg_query($congv,$com);
    $rscom=pg_fetch_array($excom);
    $emps=$rscom['cempresasaidas'];
    $valors=$rscom['ctotsaidas'];
    $ope=$rscom['i_asa_codigo_tna'];
    if ($empe <> $emps) {
        $som ++;
        echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>°Videira: Nota De Outra Empresa Selecionada Nfe:$nfe,$emisao  </font></b></p>";
    }
    if ($valore <> $valors ) {
        $som ++;
        echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>°Videira: Nota De Outro Valor Selecionado Nfe:$nfe </font></b></p>";
    }
    if ($ope <> '68') {        
        echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>°Videira: Nota de Sáida Não era condicional Nfe:$nfe </font></b></p>";
    }
}
$sql="select i_asa_cod_asa_orig,cempresasaidas,cnotsaidas,ctotsaidas  from asaidas  where cemisaidas >= '$data' and i_asa_codigo_tna = '16' order by i_asa_cod_asa_orig";
$exsql=pg_query($congj,$sql);
while($row = pg_fetch_assoc($exsql)){
    $ide=$row['i_asa_cod_asa_orig'];
    $empe=$row['cempresasaidas'];
    $nfe=$row['cnotsaidas'];
    $valore=$row['ctotsaidas'];
    $com="select  cempresasaidas,ctotsaidas,i_asa_codigo_tna from asaidas where cidesaidas =  $ide";
    $excom=pg_query($congj,$com);
    $rscom=pg_fetch_array($excom);
    $emps=$rscom['cempresasaidas'];
    $valors=$rscom['ctotsaidas'];
    $ope=$rscom['i_asa_codigo_tna'];
    if ($empe <> $emps) {
        $som ++;
        echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>°Joinville: Nota De Outra Empresa Selecionada Nfe:$nfe </font></b></p>";
    }
    if ($valore <> $valors ) {
        $som ++;
        echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>°Joinville: Nota De Outro Valor Selecionado Nfe:$nfe </font></b></p>";
    }
    if ($ope <> '15') {
        $som ++;
        echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>°Joinville: Nota de Sáida Não era condicional Nfe:$nfe </font></b></p>";
    }
}
$sql="select i_asa_cod_asa_orig,cempresasaidas,cnotsaidas,ctotsaidas  from asaidas  where cemisaidas >= '$data' and i_asa_codigo_tna = '25' order by i_asa_cod_asa_orig";
$exsql=pg_query($congl,$sql);
while($row = pg_fetch_assoc($exsql)){
    $ide=$row['i_asa_cod_asa_orig'];
    $empe=$row['cempresasaidas'];
    $nfe=$row['cnotsaidas'];
    $valore=$row['ctotsaidas'];
    $com="select  cempresasaidas,ctotsaidas,i_asa_codigo_tna from asaidas where cidesaidas =  $ide";
    $excom=pg_query($congl,$com);
    $rscom=pg_fetch_array($excom);
    $emps=$rscom['cempresasaidas'];
    $valors=$rscom['ctotsaidas'];
    $ope=$rscom['i_asa_codigo_tna'];
    if ($empe <> $emps) {
        $som ++;
        echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>°Lages: Nota De Outra Empresa Selecionada Nfe:$nfe </font></b></p>";
    }
    if ($valore <> $valors ) {
        $som ++;
        echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>°Lages: Nota De Outro Valor Selecionado Nfe:$nfe </font></b></p>";
    }
    if ($ope <> '24') {
        $som ++;
        echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>°Lages: Nota de Sáida Não era condicional Nfe:$nfe </font></b></p>";
    }
}
$sql="select cidesaidas,cnotsaidas,cemisaidas,cempresasaidas,cnpj_saidas from asaidas where cemisaidas >='$data' and i_asa_codigo_tna in (54) order by cidesaidas";
$exsql=pg_query($congc,$sql);
while($row = pg_fetch_assoc($exsql)){   
    $id=$row['cidesaidas'];
    $nf=$row['cnotsaidas'];
    $emp=$row['cempresasaidas'];
    $emi=$row['cemisaidas'];
    $cnpj=$row['cnpj_saidas'];
    if ($cnpj =='26484625000160' or $cnpj=='26484625000240' or $cnpj=='26484625000321' ) {
        $com="select csidentradas from aentradas where i_aen_ide_saida_trans = '$id'";
        $excom=pg_query($congv,$com);
        $rscom=pg_fetch_array($excom);
        $ide=$rscom['csidentradas'];
        if ($ide == '') {
            $som ++;
            echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>° Nota de Caçador não lançada em Videira Nfe:$nf emisão:$emi </font></b></p>";
        }
    }else {
            if ($cnpj=='18103672000198' or $cnpj=='18103672000279') {
                $com="select csidentradas from aentradas where i_aen_ide_saida_trans = '$id'";
                $excom=pg_query($congl,$com);
                $rscom=pg_fetch_array($excom);
                $ide=$rscom['csidentradas'];
                if ($ide == '') {
                    $som ++;
                    echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>° Nota de Caçador  não lançada em Lages Nfe:$nf emisão:$emi </font></b></p>";
                }
            } else{
                if ($cnpj=='28401154000104' or $cnpj == '28401154000295' ) {
                    $com="select csidentradas from aentradas where i_aen_ide_saida_trans = '$id'";
                    $excom=pg_query($congj,$com);
                    $rscom=pg_fetch_array($excom);
                    $ide=$rscom['csidentradas'];
                    if ($ide == '') {
                        $som ++;
                        echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>° Nota de Caçador  não lançada No Atacadão Nfe:$nf emisão:$emi </font></b></p>";
                    }
                } else{
                    $som ++;
                    echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>°Caçador-Cliente Não Cadastrado Como Filial  </font></b></p>";
                }
            }
        }        
    }

$sql="select cidesaidas,cnotsaidas,cemisaidas,cempresasaidas,cnpj_saidas from asaidas where cemisaidas >='$data' and i_asa_codigo_tna in (54) order by cidesaidas";
$exsql=pg_query($congv,$sql);
while($row = pg_fetch_assoc($exsql)){
    $id=$row['cidesaidas'];
    $nf=$row['cnotsaidas'];
    $emp=$row['cempresasaidas'];
    $emi=$row['cemisaidas'];
    $cnpj=$row['cnpj_saidas'];
    if ($cnpj =='02534216000162' or $cnpj=='02534216000243' or $cnpj=='02534216000324' or $cnpj=='02534216000405'
        or $cnpj=='02534216000596' or $cnpj=='02534216000677') {
        $com="select csidentradas from aentradas where i_aen_ide_saida_trans = '$id'";
        $excom=pg_query($congc,$com);
        $rscom=pg_fetch_array($excom);
        $ide=$rscom['csidentradas'];
        if ($ide == '') {
            $som ++;
            echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>° Nota de Videira  não lançada em Caçador Nfe:$nf emisão:$emi </font></b></p>";
        }
        }else {
            if ($cnpj=='18103672000198' or $cnpj=='18103672000279') {
                $com="select csidentradas from aentradas where i_aen_ide_saida_trans = '$id'";
                $excom=pg_query($congl,$com);
                $rscom=pg_fetch_array($excom);
                $ide=$rscom['csidentradas'];
                if ($ide == '') {
                    $som ++;
                    echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>° Nota de Videira não lançada em Lages Nfe:$nf emisão:$emi </font></b></p>";
                }
            } else{
                if ($cnpj=='28401154000104' or $cnpj=='28401154000295') {
                    $com="select csidentradas from aentradas where i_aen_ide_saida_trans = '$id'";
                    $excom=pg_query($congj,$com);
                    $rscom=pg_fetch_array($excom);
                    $ide=$rscom['csidentradas'];
                    if ($ide == '') {
                        $som ++;
                        echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>° Nota de Videira não lançada No Atacadão Nfe:$nf emisão:$emi </font></b></p>";
                    }
                } else{
                    $som ++;
                    echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>°Vdeira-Cliente Não Cadastrado Como Filial Nf:$nf </font></b></p>";
                }
            }
        }
    }

$sql="select cidesaidas,cnotsaidas,cemisaidas,cempresasaidas,cnpj_saidas from asaidas where cemisaidas >='$data' and i_asa_codigo_tna in (14) order by cidesaidas";
$exsql=pg_query($congl,$sql);
while($row = pg_fetch_assoc($exsql)){
    $id=$row['cidesaidas'];
    $nf=$row['cnotsaidas'];
    $emp=$row['cempresasaidas'];
    $emi=$row['cemisaidas'];
    $cnpj=$row['cnpj_saidas'];
    if ($cnpj =='02534216000162' or $cnpj=='02534216000243' or $cnpj=='02534216000324' or $cnpj=='02534216000405'
        or $cnpj=='02534216000596' or $cnpj=='02534216000677' or $cnpj=='82692419000388' or $cnpj=='81345605000116' or $cnpj=='25534042000133' ) {
            $com="select csidentradas from aentradas where cnfientradas = '$nf' and cforentradas in (1602,2578) ";
            $excom=pg_query($congc,$com);
            $rscom=pg_fetch_array($excom);
            $ide=$rscom['csidentradas'];
            if ($ide == '') {
                $som ++;
                echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>° Nota de Lages  não lançada em Caçador Nfe:$nf emisão:$emi </font></b></p>";
            }
        }else {
                if ($cnpj =='26484625000160' or $cnpj=='26484625000240' or $cnpj=='26484625000321' )  {
                    $com="select csidentradas from aentradas where cnfientradas = '$nf' and cforentradas in (1602)";
                    $excom=pg_query($congv,$com);
                    $rscom=pg_fetch_array($excom);
                    $ide=$rscom['csidentradas'];
                    if ($ide == '') {
                        $som ++;
                        echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>° Nota de Lages não lançada em Videira Nfe:$nf emisão:$emi </font></b></p>";
                    }
                } else{
                    if ($cnpj=='28401154000104' or $cnpj=='28401154000295'  ) {
                        $com="select csidentradas from aentradas where cnfientradas = '$nf' and cforentradas in (111) ";
                        $excom=pg_query($congj,$com);
                        $rscom=pg_fetch_array($excom);
                        $ide=$rscom['csidentradas'];
                        if ($ide == '') {
                            $som ++;
                            echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>° Nota de Lages não lançada Base de Joinville Nfe:$nf emisão:$emi </font></b></p>";
                        }
                    } else{
                        $som ++;
                        echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>°Lages-Cliente Não Cadastrado Como Filial  Em Lages Nf:$nf</font></b></p>";
                    }
                }
            }
        }
        
$sql="select cidesaidas,cnotsaidas,cemisaidas,cempresasaidas,cnpj_saidas from asaidas where cemisaidas >='$data' and i_asa_codigo_tna in (12) order by cidesaidas";
$exsql=pg_query($congj,$sql);
while($row = pg_fetch_assoc($exsql)){
    $id=$row['cidesaidas'];
    $nf=$row['cnotsaidas'];
    $emp=$row['cempresasaidas'];
    $emi=$row['cemisaidas'];
    $cnpj=$row['cnpj_saidas'];
    if ($cnpj =='02534216000162' or $cnpj=='02534216000243' or $cnpj=='02534216000324' or $cnpj=='02534216000405'
    or $cnpj=='02534216000596' or $cnpj=='02534216000677') {
        $com="select csidentradas from aentradas where i_aen_ide_saida_trans = '$id'";
        $excom=pg_query($congc,$com);
        $rscom=pg_fetch_array($excom);
        $ide=$rscom['csidentradas'];
        if ($ide == '') {
            $som ++;
            echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>° Nota do Atacadão não lançada em Caçador Nfe:$nf emisão:$emi </font></b></p>";
        }
    }else {
        if ($cnpj =='26484625000160' or $cnpj=='26484625000240' or $cnpj=='26484625000321' )  {
            $com="select csidentradas from aentradas where i_aen_ide_saida_trans = '$id'";
            $excom=pg_query($congv,$com);
            $rscom=pg_fetch_array($excom);
            $ide=$rscom['csidentradas'];
            if ($ide == '') {
                $som ++;
                echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>° Nota do Atacadão não lançada em Videira Nfe:$nf emisão:$emi </font></b></p>";
            }
        } else{
            if ($cnpj=='18103672000198' or $cnpj=='18103672000279') {
                $com="select csidentradas from aentradas where i_aen_ide_saida_trans = '$id'";
                $excom=pg_query($congl,$com);
                $rscom=pg_fetch_array($excom);
                $ide=$rscom['csidentradas'];
                if ($ide == '') {
                    $som ++;
                    echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>° Nota do Atacadão não lançada em Lages Nfe:$nf emisão:$emi </font></b></p>";
                }
            } else{
                $som ++;
                echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>°Atacadão-Cliente Não Cadastrado Como Filial </font></b></p>";
            }
        }
    }
}








$sql="select codigo,datal,hora,usuario from log where substituto is null AND tabela IS DISTINCT FROM 'versao_bd' ORDER BY codigo limit 1";
$exsql=pg_query($conc,$sql);
$rssql=pg_fetch_array($exsql);
$cod=$rssql['codigo'];
if ($cod <> '') {
    $com="select codigo from controlereplicador where  base = '1' order by codigo desc limit 1  ";
    $excom=pg_query($congc,$com);
    $rscom=pg_fetch_array($excom);
    $ultcod=$rscom['codigo'];    
    if ($ultcod < $cod) {
        pg_query($congc,"INSERT INTO controlereplicador(id, codigo, base) VALUES (nextval('seq_controlereplicador'),$cod, '1')");
        
    }
    if ($ultcod==$cod){
        $som ++;
        echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>°Caçador Replicador Parado</font></b></p>";
    }
}
$exsql=pg_query($conv,$sql);
$rssql=pg_fetch_array($exsql);
$cod=$rssql['codigo'];
if ($cod <> '') {
    $com="select codigo from controlereplicador where  base = '2' order by codigo desc limit 1";
    $excom=pg_query($congc,$com);
    $rscom=pg_fetch_array($excom);
    $ultcod=$rscom['codigo'];
    if ($ultcod < $cod) {
        pg_query($congc,"INSERT INTO controlereplicador(id, codigo, base) VALUES (nextval('seq_controlereplicador'),$cod, '2')");
        
    }
    if ($ultcod==$cod){
        $som ++;
        echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>°Videira Replicador Parado</font></b></p>";
    }
}
$exsql=pg_query($conl,$sql);
$rssql=pg_fetch_array($exsql);
$cod=$rssql['codigo'];
if ($cod <> '') {
    $com="select codigo from controlereplicador where  base = '3' order by codigo desc limit 1";
    $excom=pg_query($congc,$com);
    $rscom=pg_fetch_array($excom);
    $ultcod=$rscom['codigo'];
    if ($ultcod < $cod) {
        pg_query($congc,"INSERT INTO controlereplicador(id, codigo, base) VALUES (nextval('seq_controlereplicador'),$cod, '3')");
        
    }
    if ($ultcod==$cod){
        $som ++;
        echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>°Lages Replicador Parado</font></b></p>";
    }
}
$exsql=pg_query($conj,$sql);
$rssql=pg_fetch_array($exsql);
$cod=$rssql['codigo'];
if ($cod <> '') {
    $com="select codigo from controlereplicador where  base = '4' order by codigo desc limit 1";
    $excom=pg_query($congc,$com);
    $rscom=pg_fetch_array($excom);
    $ultcod=$rscom['codigo'];
    if ($ultcod < $cod) {
        pg_query($congc,"INSERT INTO controlereplicador(id, codigo, base) VALUES (nextval('seq_controlereplicador'),$cod, '4')");
        
    }   
    if ($ultcod==$cod){
        $som ++;
        echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=5 color=#000000>°<b>Joinville Replicador Parado</b></font></b></p>";
    }
}




$sql="select cserserie,cempserie from tseriesnf where i_tse_serie_por_modelo = '1' order by cserserie" ;
$exsql= pg_query($conc,$sql);
while ($row = pg_fetch_assoc( $exsql)) {
    $serie=$row['cserserie'];
    $emp=$row['cempserie'];
    $com="select cnotsaidas,cemisaidas from asaidas where cemisaidas >= '$datai' and csrisaidas =  $serie and cempresasaidas <> $emp";
    $excom= pg_query($conc,$com);
    $rscom=pg_fetch_array($excom);
    $nf=$rscom['cnotsaidas'];
    $emi=$rscom['cemisaidas'];
    if ($nf <> null) {
        $som ++;
        echo "Nota Fiscal com série errada:$nf emissão em :$emi ".'<br>';
    }
}




pg_close($congj);
pg_close($congl);
pg_close($congc);
pg_close($congv);
pg_close($conc);
pg_close($conv);
pg_close($conl);
pg_close($conj);
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css"></link>
<marquee behavior="alternate" scrollamount="10" ><?php echo "<p align=center <br/><b><font size=5 color=#000000>Última Conferência em : '$dia' , '$time'  </font></b></p>"; ?></marquee>
<body>
<!--agora vem o script-->
<style>
body {
background-image: url("img/novo.gif");
background-attachment: fixed;
background-repeat: no-repeat;
background-position: right top;	
background-size: 30%;

}
</style>
</body>
</head>
</html>