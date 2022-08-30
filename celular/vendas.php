<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
date_default_timezone_set('America/Sao_Paulo');
$time=date('H:i:s');
error_reporting(0);
set_time_limit(0);
function menosUmaHora($time) {
    $hora = explode(':', $time);//Cria uma array com 3 posições: 0 hora, 1 minuto, 2 segundo
    $hora[0] = (int) $hora[0]; //converte de string para inteiro
    $hora[1] = (int) $hora[1]; //converte de string para inteiro
    $hora[2] = (int) $hora[2]; //converte de string para inteiro
    if ($hora[0] <= 0) { //Verifica se o valor da posição hora é menor ou igual a 0
        $hora[0] = 11; //Se sim, posição hora agora é 11
    } else {
        $hora[0] --; //Se não, posição hora terá 1 subtraido
    }
    return implode(':', $hora);//Monta a string em ordem hh:mm:ss e retorna
}
$time=  menosUmaHora($time);
$dia= date('Y-m-d');
$meses = array (1 => "Janeiro", 2 => "Fevereiro", 3 => "Março", 4 => "Abril", 5 => "Maio", 6 => "Junho", 7 => "Julho", 8 => "Agosto", 9 => "Setembro", 10 => "Outubro", 11 => "Novembro", 12 => "Dezembro");
$diasdasemana = array (1 => "Segunda-Feira",2 => "Terça-Feira",3 => "Quarta-Feira",4 => "Quinta-Feira",5 => "Sexta-Feira",6 => "Sábado",0 => "Domingo");
$hoje = getdate();
$dia = $hoje["mday"];
$mes = $hoje["mon"];
$nomemes = $meses[$mes];
$ano = $hoje["year"];
$diadasemana = $hoje["wday"];
$nomediadasemana = $diasdasemana[$diadasemana];
echo "$nomediadasemana, $dia de $nomemes de $ano";
if(!@($conc=pg_connect ("host=192.168.16.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@"))){
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
if(!@($conv=pg_connect ("host=192.168.16.190 dbname=troll_videira port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Videira Data:$dia  Hora:$time </font></b></p>";
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
if(!@($conl=pg_connect ("host=192.168.16.190 dbname=troll_lages port=5430 user=postgres password=ky$14gr@"))){
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
if(!@($conj=pg_connect ("host=192.168.16.190 dbname=troll_joinville port=5430 user=postgres password=ky$14gr@"))){
   echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Joinville Data:$dia  Hora:$time </font></b></p>";
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
$dia= date('Y-m-d');
$volta="<script>window.location='http://192.168.13.2/celular/vendas.html'</script>";
$login=$_POST['login'];
if ($login == null){
    echo "<script>alert('Login inválido');</script>";echo "$volta";exit;
}
$login=strtoupper($login);
$senha=$_POST['senha'];
if ($senha == ''){
    echo "<script>alert('Senha inválida');</script>"; echo "$volta";exit;
}
$dtini=$_POST['dataini'];
if ($dtini== '') {
    $dtini=$dia;
}
$dtfin=$_POST['datafin'];
if ($dtfin=='') {
    $dtfin=$dia;
}
$dataia=$dtini;
$datafa=$dtfin;
$dataia = implode("/",array_reverse(explode("-",$dataia)));
$datafa = implode("/",array_reverse(explode("-",$datafa)));
$tipo=$_POST['tipo'];
if(!@($serv=pg_connect ("host=192.168.16.190 dbname=viabrasil port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco do Servidor Data:$dia  Hora:$time </font></b></p>";
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
$sql="select codigo from vendas where usuario='$login' and senha='$senha'";
$exsql= pg_query($serv,$sql);
$rssql= pg_fetch_array($exsql);
$codigo=$rssql['codigo'];
if ($codigo == '') {
    echo "<script>alert('Usuário ou Senha Inválidos');</script>";echo "$volta";exit;
} else {
    if ($login == 'ADRIELI') {
        echo "<script>alert('PALMEIRAS CAMPEÂO!!!!!!!!!!!!');</script>";
    } else {
        echo "<script>alert('Bem-Vinda(o) : $login');</script>";
    }
}
if ($tipo == 'V'){
	if ($login == 'ROSANE') {
		$sql="select ccodvendedor,cnomvendedor from asaidas inner join tvendedores on ccodvendedor = cvensaidas
		      where cemisaidas >='$dtini' and cemisaidas<= '$dtfin'  and cempresasaidas in (1,2) group by ccodvendedor order by ccodvendedor";
		$base=$conc;		
	}
	if ($login == 'LUCELIA') {
		$sql="select ccodvendedor,cnomvendedor from asaidas inner join tvendedores on ccodvendedor = cvensaidas
		      where cemisaidas >='$dtini' and cemisaidas<= '$dtfin'  and cempresasaidas in (3,4) group by ccodvendedor order by ccodvendedor";
		$base=$conc;		
	}
	if ($login == 'ADRIELI') {
		$sql="select ccodvendedor,cnomvendedor from asaidas inner join tvendedores on ccodvendedor = cvensaidas
		      where cemisaidas >='$dtini' and cemisaidas<= '$dtfin'  and cempresasaidas in (7,8) group by ccodvendedor order by ccodvendedor";
		$base=$conc;		
	}
	if ($login == 'MAYNARA') {
		$sql="select ccodvendedor,cnomvendedor from asaidas inner join tvendedores on ccodvendedor = cvensaidas
		      where cemisaidas >='$dtini' and cemisaidas<= '$dtfin'  and cempresasaidas in (5,6) group by ccodvendedor order by ccodvendedor";
		$base=$conc;		
	}
	if ($login == 'ROSANI') {
		$sql="select ccodvendedor,cnomvendedor from asaidas inner join tvendedores on ccodvendedor = cvensaidas
		      where cemisaidas >='$dtini' and cemisaidas<= '$dtfin'  and cempresasaidas in (3,4) group by ccodvendedor order by ccodvendedor";
		$base=$conj;		
	}
	if ($login == 'JOSIANE') {
		$sql="select ccodvendedor,cnomvendedor from asaidas inner join tvendedores on ccodvendedor = cvensaidas
		      where cemisaidas >='$dtini' and cemisaidas<= '$dtfin'  and cempresasaidas in (1,2) group by ccodvendedor order by ccodvendedor";
		$base=$conj;		
	}
	if ($login == 'MAYARA') {
		$sql="select ccodvendedor,cnomvendedor from asaidas inner join tvendedores on ccodvendedor = cvensaidas
		      where cemisaidas >='$dtini' and cemisaidas<= '$dtfin'  and cempresasaidas in (15,16) group by ccodvendedor order by ccodvendedor";
		$base=$conv;		
	}
	if ($login == 'NADIA') {
		$sql="select ccodvendedor,cnomvendedor from asaidas inner join tvendedores on ccodvendedor = cvensaidas
		      where cemisaidas >='$dtini' and cemisaidas<= '$dtfin'  and cempresasaidas in (13,14,17,18) group by ccodvendedor order by ccodvendedor";
		$base=$conv;		
	}
	$tvend='0';
    $tgeral='0';
    $tvendbrt='0';
    $tgeralbrt='0';
    $tdev='0';
    $tgeraldev='0';
    $tbrin='0';
    $tgeralbrin='0';
    $tuni='0';
    $tgeraluni='0';
	echo"<html><center><h1><font face='Arial' color='black'>Venda por Vendedores De:$dataia Até:$datafa </font></h1></center></html>";
    echo "<table border='2' width='100%' bgcolor=#FFFFF0 >";
    echo "<tr><td>Número</td>"."<td>Nome</td>"."<td>Valor Bruto</td>"."<td>Devoluções</td>"."<td>Uniforme</td>"."<td>Brinquedos</td>"."<td>Valor Líquido</td>"."</tr>";
    echo "<td><font color=\"red\" size=4><strong>".$login."</strong></font></td>\n";
    echo "</tr>\n";
    $exsql=pg_query($base,$sql);
    while($row = pg_fetch_assoc($exsql)){
        $vend=$row['ccodvendedor']; 
        $com="select 
        (select cnomvendedor from tvendedores where ccodvendedor = $vend) as vendedor,
        (select sum(cvlqhistorico*csaihisotorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin'  and i_ahi_codigo_ven = $vend) as vendas,
        (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin'  and i_ahi_codigo_ven = $vend )as trocas, 
        (select sum(cvlqhistorico*csaihisotorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and clinproduto = '108' and i_ahi_codigo_ven = $vend )as vuniforme, 
        (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and clinproduto = '108' and i_ahi_codigo_ven = $vend ) as tuniforme,
        (select sum(cvlqhistorico*csaihisotorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and clinproduto = '13' and i_ahi_codigo_ven = $vend )as vbrinquedo,
        (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and clinproduto = '13' and i_ahi_codigo_ven = $vend ) as tbrinquedo";       
        $excom= pg_query($base,$com);
        $rscom= pg_fetch_array($excom);
        $nome=$rscom['vendedor'];
        $venda=$rscom['vendas'];
        if ($venda== null) {
            $venda='0.00';
        }  
        $trocas=$rscom['trocas'];
        if ($trocas== null) {
            $trocas='0.00';
        }
        $vendau=$rscom['vuniforme'];
        if ($vendau== null) {
            $vendau='0.00';
        }
        $trocau=$rscom['tuniforme'];
        if ($trocau== null) {
            $trocau='0.00';
        }
        $vendab=$rscom['vbrinquedo'];
        if ($vendab== null) {
            $vendab='0.00';
        }
        $trocab=$rscom['tbrinquedo'];
        if ($trocab== null) {
            $trocab='0.00';
        }
        $brinquedo=$vendab-$trocab;
        $uniforme=$vendau-$trocau;
        $vendaliq=$venda-$trocas;
        $vendaliq=$vendaliq-$uniforme-$brinquedo;                
        $tbrin=$tbrin+$brinquedo;
        $tvend=$tvend+$vendaliq;
        $tvendbrt=$venda+$tvendbrt;
        $tdev=$tdev+$trocas;
        $tuni=$tuni+$uniforme;
        if ($vendaliq <> '0,00') {
            echo "<td>".$vend."</td>\n";
            echo "<td>".$nome."</td>\n";
            echo "<td>".number_format($venda,2,",",".")."</td>\n";
            echo "<td>".number_format($trocas,2,",",".")."</td>\n";
            echo "<td>".number_format($uniforme,2,",",".")."</td>\n";
            echo "<td>".number_format($brinquedo,2,",",".")."</td>\n";
            echo "<td>".number_format($vendaliq,2,",",".")."</td>\n";
            echo "</tr>\n";
        }        
    }
    echo "<td><font color=\"black\" size=4><strong>".'Totais'."</strong></font></td>\n";
    echo "<td><font color=\"black\" size=4><strong>".''."</strong></font></td>\n";
    echo "<td><font color=\"black\" size=4><strong>".'R$'.number_format($tvendbrt,2,",",".")."</strong></font></td>\n";
    echo "<td><font color=\"red\" size=4><strong>".'R$'.number_format($tdev,2,",",".")."</strong></font></td>\n";
    echo "<td><font color=\"red\" size=4><strong>".'R$'.number_format($tuni,2,",",".")."</strong></font></td>\n";
    echo "<td><font color=\"red\" size=4><strong>".'R$'.number_format($tbrin,2,",",".")."</strong></font></td>\n";
    echo "<td><font color=\"black\" size=4><strong>".'R$'.$tvend."</strong></font></td>\n";
    echo "</tr>\n"; 
}
if ($tipo =='L') {
    $ttemp='0';
    $ttger='0';
    $ttempbruto='0';
    $ttgerbruto='0';
    $ttdevemp='0';
    $ttdevger='0';
    $ttuniemp='0';
    $ttuniger='0';
    $ttbrinemp='0';
    $ttbringer='0';
    echo"<html><center><h1><font face='Arial' color='black'>Venda por Loja De:$dataia Até:$datafa </font></h1></center></html>";    
    echo "<table border='2' width='100%' bgcolor=#FFFFF0 >";
    echo "<tr><td><font color=\"black\" size=5><strong>Loja</strong></font></td>"."<td><font color=\"black\" size=5><strong>Valor Bruto</strong></font></td>"."<td><font color=\"black\" size=5><strong>Devoluções</strong></font></td>"."<td><font color=\"black\" size=5><strong>Uniforme</strong></font></td>"."<td><font color=\"black\" size=5><strong>Brinquedo</strong></font></td>"."<td><font color=\"black\" size=5><strong>Valor Líquido</strong></font></td>"."</tr>";
    echo "<td><font color=\"red\" size=4><strong>".'Caçador'."</strong></font></td>\n";
    echo "<td><font color=\"black\" size=4><strong>".''."</strong></font></td>\n";
    echo "<td><font color=\"red\" size=4><strong>".''."</strong></font></td>\n";
    echo "<td><font color=\"red\" size=4><strong>".''."</strong></font></td>\n";
    echo "<td><font color=\"black\" size=4><strong>".''."</strong></font></td>\n";
    echo "</tr>\n";
    echo "<td>".'Rosane'."</td>\n";
    $sql="select (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemisaidas>='$dtini' and cemisaidas <= '$dtfin' and cempresasaidas in (1,2)) as vendas,
    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas>='$dtini' and cemisaidas <= '$dtfin' and cempresasaidas in (1,2 ) )as trocas,
    (select sum(cvlqhistorico*csaihisotorico)  from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas  join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S'  and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and   clinproduto = '108' and cempresasaidas in (1,2) )as vuniforme,
    (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas  join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E'  and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and   clinproduto = '108' and cempresasaidas in (1,2)) as tuniforme,
    (select sum(cvlqhistorico*csaihisotorico)  from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas  join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S'  and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and   clinproduto = '13' and cempresasaidas in (1,2) )as vbrinquedo,
    (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas  join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E'  and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and   clinproduto = '12' and cempresasaidas in (1,2)) as tbrinquedo";
    $exsql= pg_query($conc,$sql);
    $rssql= pg_fetch_array($exsql);
    $venda=$rssql['vendas'];
    if ($venda== null) {
        $venda='0.00';
    }    
    $trocas=$rssql['trocas'];
    if ($trocas== null) {
        $trocas='0.00';
    }
    $vendau=$rssql['vuniforme'];
    if ($vendau== null) {
        $vendau='0.00';
    }
    $trocau=$rssql['tuniforme'];
    if ($trocau==null) {
        $trocau='0.00';
    }
    $vendab=$rssql['vbrinquedo'];
    if ($vendab== null) {
        $vendab='0.00';
    }
    $trocab=$rssql['tbrinquedo'];
    if ($trocab== null) {
        $trocab='0.00';
    }
    $brinquedo=$vendab-$trocab;
    $uniforme=$vendau-$trocau;
    $vendaliq=$venda-$trocas;
    $vendaliq=$vendaliq-$uniforme-$brinquedo;
    $ttuniemp=$ttuniemp+$uniforme;
    $ttuniger=$ttuniger+$uniforme;
    $ttbrinemp=$ttbrinemp+$brinquedo;
    $ttbringer=$ttbringer+$brinquedo;
    $ttemp=$ttemp+$vendaliq;
    $ttger=$ttger+$vendaliq;
    $ttempbruto=$ttempbruto+$venda;
    $ttgerbruto=$ttgerbruto+$venda;    
    $ttdevemp=$ttdevemp+$trocas;
    $ttdevger=$ttdevger+$trocas;
    echo "<td>".number_format($venda,2,",",".")."</td>\n";
    echo "<td>".number_format($trocas,2,",",".")."</td>\n";
    echo "<td>".number_format($uniforme,2,",",".")."</td>\n";
    echo "<td>".number_format($brinquedo,2,",",".")."</td>\n";
    echo "<td>".number_format($vendaliq,2,",",".")."</td>\n";
    echo "</tr>\n";
    echo "<td>".'Lucélia'."</td>\n";
    $sql="select (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemisaidas>='$dtini' and cemisaidas <= '$dtfin' and cempresasaidas in (3,4)) as vendas,
    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas>='$dtini' and cemisaidas <= '$dtfin' and cempresasaidas in (3,4 ) )as trocas,
    (select sum(cvlqhistorico*csaihisotorico)  from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas  join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S'  and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and   clinproduto = '108' and cempresasaidas in (3,4) )as vuniforme,
    (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas  join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E'  and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and   clinproduto = '108' and cempresasaidas in (3,4)) as tuniforme,
    (select sum(cvlqhistorico*csaihisotorico)  from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas  join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S'  and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and   clinproduto = '13' and cempresasaidas in (3,4) )as vbrinquedo,
    (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas  join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E'  and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and   clinproduto = '12' and cempresasaidas in (3,4)) as tbrinquedo";
    $exsql= pg_query($conc,$sql);
    $rssql= pg_fetch_array($exsql);
    $venda=$rssql['vendas'];
    if ($venda== null) {
        $venda='0.00';
    }
    $trocas=$rssql['trocas'];
    if ($trocas== null) {
        $trocas='0.00';
    }
    $vendau=$rssql['vuniforme'];
    if ($vendau== null) {
        $vendau='0.00';
    }
    $trocau=$rssql['tuniforme'];
    if ($trocau==null) {
        $trocau='0.00';
    }
    $vendab=$rssql['vbrinquedo'];
    if ($vendab== null) {
        $vendab='0.00';
    }
    $trocab=$rssql['tbrinquedo'];
    if ($trocab== null) {
        $trocab='0.00';
    }
    $brinquedo=$vendab-$trocab;
    $uniforme=$vendau-$trocau;
    $vendaliq=$venda-$trocas;
    $vendaliq=$vendaliq-$uniforme-$brinquedo;
    $ttuniemp=$ttuniemp+$uniforme;
    $ttuniger=$ttuniger+$uniforme;
    $ttbrinemp=$ttbrinemp+$brinquedo;
    $ttbringer=$ttbringer+$brinquedo;
    $ttemp=$ttemp+$vendaliq;
    $ttger=$ttger+$vendaliq;
    $ttempbruto=$ttempbruto+$venda;
    $ttgerbruto=$ttgerbruto+$venda;
    $ttdevemp=$ttdevemp+$trocas;
    $ttdevger=$ttdevger+$trocas;
    echo "<td>".number_format($venda,2,",",".")."</td>\n";
    echo "<td>".number_format($trocas,2,",",".")."</td>\n";
    echo "<td>".number_format($uniforme,2,",",".")."</td>\n";
    echo "<td>".number_format($brinquedo,2,",",".")."</td>\n";
    echo "<td>".number_format($vendaliq,2,",",".")."</td>\n";
    echo "</tr>\n";
    echo "<td>".'Vila'."</td>\n";
    $sql="select (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemisaidas>='$dtini' and cemisaidas <= '$dtfin' and cempresasaidas in (5,6)) as vendas,
    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas>='$dtini' and cemisaidas <= '$dtfin' and cempresasaidas in (5,6 ) )as trocas,
    (select sum(cvlqhistorico*csaihisotorico)  from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas  join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S'  and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and   clinproduto = '108' and cempresasaidas in (5,6) )as vuniforme,
    (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas  join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E'  and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and   clinproduto = '108' and cempresasaidas in (5,6)) as tuniforme,
    (select sum(cvlqhistorico*csaihisotorico)  from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas  join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S'  and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and   clinproduto = '13' and cempresasaidas in (5,6) )as vbrinquedo,
    (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas  join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E'  and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and   clinproduto = '12' and cempresasaidas in (5,6)) as tbrinquedo";
    $exsql= pg_query($conc,$sql);
    $rssql= pg_fetch_array($exsql);
    $venda=$rssql['vendas'];
    if ($venda== null) {
        $venda='0.00';
    }
    $trocas=$rssql['trocas'];
    if ($trocas== null) {
        $trocas='0.00';
    }
    $vendau=$rssql['vuniforme'];
    if ($vendau== null) {
        $vendau='0.00';
    }
    $trocau=$rssql['tuniforme'];
    if ($trocau==null) {
        $trocau='0.00';
    }
    $vendab=$rssql['vbrinquedo'];
    if ($vendab== null) {
        $vendab='0.00';
    }
    $trocab=$rssql['tbrinquedo'];
    if ($trocab== null) {
        $trocab='0.00';
    }
    $brinquedo=$vendab-$trocab;
    $uniforme=$vendau-$trocau;
    $vendaliq=$venda-$trocas;
    $vendaliq=$vendaliq-$uniforme-$brinquedo;
    $ttuniemp=$ttuniemp+$uniforme;
    $ttuniger=$ttuniger+$uniforme;
    $ttbrinemp=$ttbrinemp+$brinquedo;
    $ttbringer=$ttbringer+$brinquedo;
    $ttemp=$ttemp+$vendaliq;
    $ttger=$ttger+$vendaliq;
    $ttempbruto=$ttempbruto+$venda;
    $ttgerbruto=$ttgerbruto+$venda;
    $ttdevemp=$ttdevemp+$trocas;
    $ttdevger=$ttdevger+$trocas;
    echo "<td>".number_format($venda,2,",",".")."</td>\n";
    echo "<td>".number_format($trocas,2,",",".")."</td>\n";
    echo "<td>".number_format($uniforme,2,",",".")."</td>\n";
    echo "<td>".number_format($brinquedo,2,",",".")."</td>\n";
    echo "<td>".number_format($vendaliq,2,",",".")."</td>\n";
    echo "</tr>\n";
    echo "<td>".'Adry'."</td>\n";
    $sql="select (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemisaidas>='$dtini' and cemisaidas <= '$dtfin' and cempresasaidas in (7,8)) as vendas,
    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas>='$dtini' and cemisaidas <= '$dtfin' and cempresasaidas in (7,8 ) )as trocas,
    (select sum(cvlqhistorico*csaihisotorico)  from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas  join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S'  and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and   clinproduto = '108' and cempresasaidas in (7,8) )as vuniforme,
    (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas  join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E'  and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and   clinproduto = '108' and cempresasaidas in (7,8)) as tuniforme,
    (select sum(cvlqhistorico*csaihisotorico)  from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas  join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S'  and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and   clinproduto = '13' and cempresasaidas in (7,8) )as vbrinquedo,
    (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas  join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E'  and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and   clinproduto = '12' and cempresasaidas in (7,8)) as tbrinquedo";
    $exsql= pg_query($conc,$sql);
    $rssql= pg_fetch_array($exsql);
    $venda=$rssql['vendas'];
    if ($venda== null) {
        $venda='0.00';
    }
    $trocas=$rssql['trocas'];
    if ($trocas== null) {
        $trocas='0.00';
    }
    $vendau=$rssql['vuniforme'];
    if ($vendau== null) {
        $vendau='0.00';
    }
    $trocau=$rssql['tuniforme'];
    if ($trocau==null) {
        $trocau='0.00';
    }
    $vendab=$rssql['vbrinquedo'];
    if ($vendab== null) {
        $vendab='0.00';
    }
    $trocab=$rssql['tbrinquedo'];
    if ($trocab== null) {
        $trocab='0.00';
    }
    $brinquedo=$vendab-$trocab;
    $uniforme=$vendau-$trocau;
    $vendaliq=$venda-$trocas;
    $vendaliq=$vendaliq-$uniforme-$brinquedo;
    $ttuniemp=$ttuniemp+$uniforme;
    $ttuniger=$ttuniger+$uniforme;
    $ttbrinemp=$ttbrinemp+$brinquedo;
    $ttbringer=$ttbringer+$brinquedo;
    $ttemp=$ttemp+$vendaliq;
    $ttger=$ttger+$vendaliq;
    $ttempbruto=$ttempbruto+$venda;
    $ttgerbruto=$ttgerbruto+$venda;
    $ttdevemp=$ttdevemp+$trocas;
    $ttdevger=$ttdevger+$trocas;
    echo "<td>".number_format($venda,2,",",".")."</td>\n";
    echo "<td>".number_format($trocas,2,",",".")."</td>\n";
    echo "<td>".number_format($uniforme,2,",",".")."</td>\n";
    echo "<td>".number_format($brinquedo,2,",",".")."</td>\n";
    echo "<td>".number_format($vendaliq,2,",",".")."</td>\n";
    echo "</tr>\n";
    echo "<td>".'Shop Masp Cdr'."</td>\n";
    $sql="select (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemisaidas>='$dtini' and cemisaidas <= '$dtfin' and cempresasaidas in (11,12)) as vendas,
    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas>='$dtini' and cemisaidas <= '$dtfin' and cempresasaidas in (11,12 ) )as trocas,
    (select sum(cvlqhistorico*csaihisotorico)  from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas  join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S'  and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and   clinproduto = '108' and cempresasaidas in (11,12) )as vuniforme,
    (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas  join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E'  and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and   clinproduto = '108' and cempresasaidas in (11,12)) as tuniforme,
    (select sum(cvlqhistorico*csaihisotorico)  from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas  join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S'  and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and   clinproduto = '13' and cempresasaidas in (11,12) )as vbrinquedo,
    (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas  join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E'  and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and   clinproduto = '12' and cempresasaidas in (11,12)) as tbrinquedo";
    $exsql= pg_query($conc,$sql);
    $rssql= pg_fetch_array($exsql);
    $venda=$rssql['vendas'];
    if ($venda== null) {
        $venda='0.00';
    }
    $trocas=$rssql['trocas'];
    if ($trocas== null) {
        $trocas='0.00';
    }
    $vendau=$rssql['vuniforme'];
    if ($vendau== null) {
        $vendau='0.00';
    }
    $trocau=$rssql['tuniforme'];
    if ($trocau==null) {
        $trocau='0.00';
    }
    $vendab=$rssql['vbrinquedo'];
    if ($vendab== null) {
        $vendab='0.00';
    }
    $trocab=$rssql['tbrinquedo'];
    if ($trocab== null) {
        $trocab='0.00';
    }
    $brinquedo=$vendab-$trocab;
    $uniforme=$vendau-$trocau;
    $vendaliq=$venda-$trocas;
    $vendaliq=$vendaliq-$uniforme-$brinquedo;
    $ttuniemp=$ttuniemp+$uniforme;
    $ttuniger=$ttuniger+$uniforme;
    $ttbrinemp=$ttbrinemp+$brinquedo;
    $ttbringer=$ttbringer+$brinquedo;
    $ttemp=$ttemp+$vendaliq;
    $ttger=$ttger+$vendaliq;
    $ttempbruto=$ttempbruto+$venda;
    $ttgerbruto=$ttgerbruto+$venda;
    $ttdevemp=$ttdevemp+$trocas;
    $ttdevger=$ttdevger+$trocas;
    echo "<td>".number_format($venda,2,",",".")."</td>\n";
    echo "<td>".number_format($trocas,2,",",".")."</td>\n";
    echo "<td>".number_format($uniforme,2,",",".")."</td>\n";
    echo "<td>".number_format($brinquedo,2,",",".")."</td>\n";
    echo "<td>".number_format($vendaliq,2,",",".")."</td>\n";
    echo "</tr>\n";
    echo "<td>".'Josiane'."</td>\n";
    $sql="select (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemisaidas>='$dtini' and cemisaidas <= '$dtfin' and cempresasaidas in (3,4)) as vendas,
    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas>='$dtini' and cemisaidas <= '$dtfin' and cempresasaidas in (3,4 ) )as trocas,
    (select sum(cvlqhistorico*csaihisotorico)  from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas  join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S'  and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and   clinproduto = '108' and cempresasaidas in (3,4) )as vuniforme,
    (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas  join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E'  and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and   clinproduto = '108' and cempresasaidas in (3,4)) as tuniforme,
    (select sum(cvlqhistorico*csaihisotorico)  from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas  join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S'  and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and   clinproduto = '13' and cempresasaidas in (3,4) )as vbrinquedo,
    (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas  join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E'  and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and   clinproduto = '12' and cempresasaidas in (3,4)) as tbrinquedo";
    $exsql= pg_query($conj,$sql);
    $rssql= pg_fetch_array($exsql);
    $venda=$rssql['vendas'];
    if ($venda== null) {
        $venda='0.00';
    }
    $trocas=$rssql['trocas'];
    if ($trocas== null) {
        $trocas='0.00';
    }
    $vendau=$rssql['vuniforme'];
    if ($vendau== null) {
        $vendau='0.00';
    }
    $trocau=$rssql['tuniforme'];
    if ($trocau==null) {
        $trocau='0.00';
    }
    $vendab=$rssql['vbrinquedo'];
    if ($vendab== null) {
        $vendab='0.00';
    }
    $trocab=$rssql['tbrinquedo'];
    if ($trocab== null) {
        $trocab='0.00';
    }
    $brinquedo=$vendab-$trocab;
    $uniforme=$vendau-$trocau;
    $vendaliq=$venda-$trocas;
    $vendaliq=$vendaliq-$uniforme-$brinquedo;
    $ttuniemp=$ttuniemp+$uniforme;
    $ttuniger=$ttuniger+$uniforme;
    $ttbrinemp=$ttbrinemp+$brinquedo;
    $ttbringer=$ttbringer+$brinquedo;
    $ttemp=$ttemp+$vendaliq;
    $ttger=$ttger+$vendaliq;
    $ttempbruto=$ttempbruto+$venda;
    $ttgerbruto=$ttgerbruto+$venda;
    $ttdevemp=$ttdevemp+$trocas;
    $ttdevger=$ttdevger+$trocas;
    echo "<td>".number_format($venda,2,",",".")."</td>\n";
    echo "<td>".number_format($trocas,2,",",".")."</td>\n";
    echo "<td>".number_format($uniforme,2,",",".")."</td>\n";
    echo "<td>".number_format($brinquedo,2,",",".")."</td>\n";
    echo "<td>".number_format($vendaliq,2,",",".")."</td>\n";
    echo "</tr>\n";
    echo "<td>".'Mayara'."</td>\n";
    $sql="select (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemisaidas>='$dtini' and cemisaidas <= '$dtfin' and cempresasaidas in (1,2)) as vendas,
    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas>='$dtini' and cemisaidas <= '$dtfin' and cempresasaidas in (1,2 ) )as trocas,
    (select sum(cvlqhistorico*csaihisotorico)  from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas  join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S'  and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and   clinproduto = '108' and cempresasaidas in (1,2) )as vuniforme,
    (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas  join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E'  and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and   clinproduto = '108' and cempresasaidas in (1,2)) as tuniforme,
    (select sum(cvlqhistorico*csaihisotorico)  from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas  join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S'  and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and   clinproduto = '13' and cempresasaidas in (1,2) )as vbrinquedo,
    (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas  join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E'  and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and   clinproduto = '12' and cempresasaidas in (1,2)) as tbrinquedo";
    $exsql= pg_query($conj,$sql);
    $rssql= pg_fetch_array($exsql);
    $venda=$rssql['vendas'];
    if ($venda== null) {
        $venda='0.00';
    }
    $trocas=$rssql['trocas'];
    if ($trocas== null) {
        $trocas='0.00';
    }
    $vendau=$rssql['vuniforme'];
    if ($vendau== null) {
        $vendau='0.00';
    }
    $trocau=$rssql['tuniforme'];
    if ($trocau==null) {
        $trocau='0.00';
    }
    $vendab=$rssql['vbrinquedo'];
    if ($vendab== null) {
        $vendab='0.00';
    }
    $trocab=$rssql['tbrinquedo'];
    if ($trocab== null) {
        $trocab='0.00';
    }
    $brinquedo=$vendab-$trocab;
    $uniforme=$vendau-$trocau;
    $vendaliq=$venda-$trocas;
    $vendaliq=$vendaliq-$uniforme-$brinquedo;
    $ttuniemp=$ttuniemp+$uniforme;
    $ttuniger=$ttuniger+$uniforme;
    $ttbrinemp=$ttbrinemp+$brinquedo;
    $ttbringer=$ttbringer+$brinquedo;
    $ttemp=$ttemp+$vendaliq;
    $ttger=$ttger+$vendaliq;
    $ttempbruto=$ttempbruto+$venda;
    $ttgerbruto=$ttgerbruto+$venda;
    $ttdevemp=$ttdevemp+$trocas;
    $ttdevger=$ttdevger+$trocas;
    echo "<td>".number_format($venda,2,",",".")."</td>\n";
    echo "<td>".number_format($trocas,2,",",".")."</td>\n";
    echo "<td>".number_format($uniforme,2,",",".")."</td>\n";
    echo "<td>".number_format($brinquedo,2,",",".")."</td>\n";
    echo "<td>".number_format($vendaliq,2,",",".")."</td>\n";
    echo "</tr>\n";
    echo "<td>".'César '."</td>\n";
    $sql="select (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemisaidas>='$dtini' and cemisaidas <= '$dtfin' and cempresasaidas in (1,2)) as vendas,
    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas>='$dtini' and cemisaidas <= '$dtfin' and cempresasaidas in (1,2 ) )as trocas,
    (select sum(cvlqhistorico*csaihisotorico)  from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas  join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S'  and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and   clinproduto = '108' and cempresasaidas in (1,2) )as vuniforme,
    (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas  join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E'  and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and   clinproduto = '108' and cempresasaidas in (1,2)) as tuniforme,
    (select sum(cvlqhistorico*csaihisotorico)  from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas  join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S'  and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and   clinproduto = '13' and cempresasaidas in (1,2) )as vbrinquedo,
    (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas  join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E'  and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and   clinproduto = '12' and cempresasaidas in (1,2)) as tbrinquedo";
    $exsql= pg_query($conl,$sql);
    $rssql= pg_fetch_array($exsql);
    $venda=$rssql['vendas'];
    if ($venda== null) {
        $venda='0.00';
    }
    $trocas=$rssql['trocas'];
    if ($trocas== null) {
        $trocas='0.00';
    }
    $vendau=$rssql['vuniforme'];
    if ($vendau== null) {
        $vendau='0.00';
    }
    $trocau=$rssql['tuniforme'];
    if ($trocau==null) {
        $trocau='0.00';
    }
    $vendab=$rssql['vbrinquedo'];
    if ($vendab== null) {
        $vendab='0.00';
    }
    $trocab=$rssql['tbrinquedo'];
    if ($trocab== null) {
        $trocab='0.00';
    }
    $brinquedo=$vendab-$trocab;
    $uniforme=$vendau-$trocau;
    $vendaliq=$venda-$trocas;
    $vendaliq=$vendaliq-$uniforme-$brinquedo;
    $ttuniemp=$ttuniemp+$uniforme;
    $ttuniger=$ttuniger+$uniforme;
    $ttbrinemp=$ttbrinemp+$brinquedo;
    $ttbringer=$ttbringer+$brinquedo;
    $ttemp=$ttemp+$vendaliq;
    $ttger=$ttger+$vendaliq;
    $ttempbruto=$ttempbruto+$venda;
    $ttgerbruto=$ttgerbruto+$venda;
    $ttdevemp=$ttdevemp+$trocas;
    $ttdevger=$ttdevger+$trocas;
    echo "<td>".number_format($venda,2,",",".")."</td>\n";
    echo "<td>".number_format($trocas,2,",",".")."</td>\n";
    echo "<td>".number_format($uniforme,2,",",".")."</td>\n";
    echo "<td>".number_format($brinquedo,2,",",".")."</td>\n";
    echo "<td>".number_format($vendaliq,2,",",".")."</td>\n";
    echo "</tr>\n";
    echo "<td>".'Atacadão Lages'."</td>\n";
    $sql="select (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemisaidas>='$dtini' and cemisaidas <= '$dtfin' and cempresasaidas in (3,4)) as vendas,
    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas>='$dtini' and cemisaidas <= '$dtfin' and cempresasaidas in (3,4 ) )as trocas,
    (select sum(cvlqhistorico*csaihisotorico)  from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas  join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S'  and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and   clinproduto = '108' and cempresasaidas in (3,4) )as vuniforme,
    (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas  join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E'  and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and   clinproduto = '108' and cempresasaidas in (3,4)) as tuniforme,
    (select sum(cvlqhistorico*csaihisotorico)  from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas  join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S'  and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and   clinproduto = '13' and cempresasaidas in (3,4) )as vbrinquedo,
    (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas  join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E'  and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and   clinproduto = '12' and cempresasaidas in (3,4)) as tbrinquedo";
    $exsql= pg_query($conl,$sql);
    $rssql= pg_fetch_array($exsql);
    $venda=$rssql['vendas'];
    if ($venda== null) {
        $venda='0.00';
    }
    $trocas=$rssql['trocas'];
    if ($trocas== null) {
        $trocas='0.00';
    }
    $vendau=$rssql['vuniforme'];
    if ($vendau== null) {
        $vendau='0.00';
    }
    $trocau=$rssql['tuniforme'];
    if ($trocau==null) {
        $trocau='0.00';
    }
    $vendab=$rssql['vbrinquedo'];
    if ($vendab== null) {
        $vendab='0.00';
    }
    $trocab=$rssql['tbrinquedo'];
    if ($trocab== null) {
        $trocab='0.00';
    }
    $brinquedo=$vendab-$trocab;
    $uniforme=$vendau-$trocau;
    $vendaliq=$venda-$trocas;
    $vendaliq=$vendaliq-$uniforme-$brinquedo;
    $ttuniemp=$ttuniemp+$uniforme;
    $ttuniger=$ttuniger+$uniforme;
    $ttbrinemp=$ttbrinemp+$brinquedo;
    $ttbringer=$ttbringer+$brinquedo;
    $ttemp=$ttemp+$vendaliq;
    $ttger=$ttger+$vendaliq;
    $ttempbruto=$ttempbruto+$venda;
    $ttgerbruto=$ttgerbruto+$venda;
    $ttdevemp=$ttdevemp+$trocas;
    $ttdevger=$ttdevger+$trocas;
    echo "<td>".number_format($venda,2,",",".")."</td>\n";
    echo "<td>".number_format($trocas,2,",",".")."</td>\n";
    echo "<td>".number_format($uniforme,2,",",".")."</td>\n";
    echo "<td>".number_format($brinquedo,2,",",".")."</td>\n";
    echo "<td>".number_format($vendaliq,2,",",".")."</td>\n";
    echo "</tr>\n";
    echo "<td>".'Nádia'."</td>\n";
    $sql="select (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemisaidas>='$dtini' and cemisaidas <= '$dtfin' and cempresasaidas in (13,14)) as vendas,
    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas>='$dtini' and cemisaidas <= '$dtfin' and cempresasaidas in (13,14 ) )as trocas,
    (select sum(cvlqhistorico*csaihisotorico)  from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas  join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S'  and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and   clinproduto = '108' and cempresasaidas in (13,14) )as vuniforme,
    (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas  join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E'  and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and   clinproduto = '108' and cempresasaidas in (13,14)) as tuniforme,
    (select sum(cvlqhistorico*csaihisotorico)  from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas  join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S'  and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and   clinproduto = '13' and cempresasaidas in (13,14) )as vbrinquedo,
    (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas  join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E'  and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and   clinproduto = '12' and cempresasaidas in (13,14)) as tbrinquedo";
    $exsql= pg_query($conv,$sql);
    $rssql= pg_fetch_array($exsql);
    $venda=$rssql['vendas'];
    if ($venda== null) {
        $venda='0.00';
    }
    $trocas=$rssql['trocas'];
    if ($trocas== null) {
        $trocas='0.00';
    }
    $vendau=$rssql['vuniforme'];
    if ($vendau== null) {
        $vendau='0.00';
    }
    $trocau=$rssql['tuniforme'];
    if ($trocau==null) {
        $trocau='0.00';
    }
    $vendab=$rssql['vbrinquedo'];
    if ($vendab== null) {
        $vendab='0.00';
    }
    $trocab=$rssql['tbrinquedo'];
    if ($trocab== null) {
        $trocab='0.00';
    }
    $brinquedo=$vendab-$trocab;
    $uniforme=$vendau-$trocau;
    $vendaliq=$venda-$trocas;
    $vendaliq=$vendaliq-$uniforme-$brinquedo;
    $ttuniemp=$ttuniemp+$uniforme;
    $ttuniger=$ttuniger+$uniforme;
    $ttbrinemp=$ttbrinemp+$brinquedo;
    $ttbringer=$ttbringer+$brinquedo;
    $ttemp=$ttemp+$vendaliq;
    $ttger=$ttger+$vendaliq;
    $ttempbruto=$ttempbruto+$venda;
    $ttgerbruto=$ttgerbruto+$venda;
    $ttdevemp=$ttdevemp+$trocas;
    $ttdevger=$ttdevger+$trocas;
    echo "<td>".number_format($venda,2,",",".")."</td>\n";
    echo "<td>".number_format($trocas,2,",",".")."</td>\n";
    echo "<td>".number_format($uniforme,2,",",".")."</td>\n";
    echo "<td>".number_format($brinquedo,2,",",".")."</td>\n";
    echo "<td>".number_format($vendaliq,2,",",".")."</td>\n";
    echo "</tr>\n";
    echo "<td>".'Cleusa'."</td>\n";
    $sql="select (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemisaidas>='$dtini' and cemisaidas <= '$dtfin' and cempresasaidas in (15,16)) as vendas,
    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas>='$dtini' and cemisaidas <= '$dtfin' and cempresasaidas in (15,16 ) )as trocas,
    (select sum(cvlqhistorico*csaihisotorico)  from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas  join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S'  and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and   clinproduto = '108' and cempresasaidas in (15,16) )as vuniforme,
    (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas  join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E'  and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and   clinproduto = '108' and cempresasaidas in (15,16)) as tuniforme,
    (select sum(cvlqhistorico*csaihisotorico)  from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas  join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S'  and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and   clinproduto = '13' and cempresasaidas in (15,16) )as vbrinquedo,
    (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas  join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E'  and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and   clinproduto = '12' and cempresasaidas in (15,16)) as tbrinquedo";
    $exsql= pg_query($conv,$sql);
    $rssql= pg_fetch_array($exsql);
    $venda=$rssql['vendas'];
    if ($venda== null) {
        $venda='0.00';
    }
    $trocas=$rssql['trocas'];
    if ($trocas== null) {
        $trocas='0.00';
    }
    $vendau=$rssql['vuniforme'];
    if ($vendau== null) {
        $vendau='0.00';
    }
    $trocau=$rssql['tuniforme'];
    if ($trocau==null) {
        $trocau='0.00';
    }
    $vendab=$rssql['vbrinquedo'];
    if ($vendab== null) {
        $vendab='0.00';
    }
    $trocab=$rssql['tbrinquedo'];
    if ($trocab== null) {
        $trocab='0.00';
    }
    $brinquedo=$vendab-$trocab;
    $uniforme=$vendau-$trocau;
    $vendaliq=$venda-$trocas;
    $vendaliq=$vendaliq-$uniforme-$brinquedo;
    $ttuniemp=$ttuniemp+$uniforme;
    $ttuniger=$ttuniger+$uniforme;
    $ttbrinemp=$ttbrinemp+$brinquedo;
    $ttbringer=$ttbringer+$brinquedo;
    $ttemp=$ttemp+$vendaliq;
    $ttger=$ttger+$vendaliq;
    $ttempbruto=$ttempbruto+$venda;
    $ttgerbruto=$ttgerbruto+$venda;
    $ttdevemp=$ttdevemp+$trocas;
    $ttdevger=$ttdevger+$trocas;
    echo "<td>".number_format($venda,2,",",".")."</td>\n";
    echo "<td>".number_format($trocas,2,",",".")."</td>\n";
    echo "<td>".number_format($uniforme,2,",",".")."</td>\n";
    echo "<td>".number_format($brinquedo,2,",",".")."</td>\n";
    echo "<td>".number_format($vendaliq,2,",",".")."</td>\n";
    echo "</tr>\n";
    echo "<td>".'Shop Videira'."</td>\n";
    $sql="select (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S' and cemisaidas>='$dtini' and cemisaidas <= '$dtfin' and cempresasaidas in (17,18)) as vendas,
    (select sum(ctotsaidas) from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E' and cemisaidas>='$dtini' and cemisaidas <= '$dtfin' and cempresasaidas in (17,18 ) )as trocas,
    (select sum(cvlqhistorico*csaihisotorico)  from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas  join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S'  and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and   clinproduto = '108' and cempresasaidas in (17,18) )as vuniforme,
    (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas  join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E'  and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and   clinproduto = '108' and cempresasaidas in (17,18)) as tuniforme,
    (select sum(cvlqhistorico*csaihisotorico)  from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas  join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='S'  and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and   clinproduto = '13' and cempresasaidas in (17,18) )as vbrinquedo,
    (select sum(cvlqhistorico*centhistorico) from ahistorico inner join aprodutos on cprohistorico = ccodproduto join asaidas on cisahistorico = cidesaidas  join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' and ctessaidas='E'  and cemihistorico >= '$dtini' and cemihistorico <= '$dtfin' and   clinproduto = '12' and cempresasaidas in (17,18)) as tbrinquedo";
    $exsql= pg_query($conv,$sql);
    $rssql= pg_fetch_array($exsql);
    $venda=$rssql['vendas'];
    if ($venda== null) {
        $venda='0.00';
    }
    $trocas=$rssql['trocas'];
    if ($trocas== null) {
        $trocas='0.00';
    }
    $vendau=$rssql['vuniforme'];
    if ($vendau== null) {
        $vendau='0.00';
    }
    $trocau=$rssql['tuniforme'];
    if ($trocau==null) {
        $trocau='0.00';
    }
    $vendab=$rssql['vbrinquedo'];
    if ($vendab== null) {
        $vendab='0.00';
    }
    $trocab=$rssql['tbrinquedo'];
    if ($trocab== null) {
        $trocab='0.00';
    }
    $brinquedo=$vendab-$trocab;
    $uniforme=$vendau-$trocau;
    $vendaliq=$venda-$trocas;
    $vendaliq=$vendaliq-$uniforme-$brinquedo;
    $ttuniemp=$ttuniemp+$uniforme;
    $ttuniger=$ttuniger+$uniforme;
    $ttbrinemp=$ttbrinemp+$brinquedo;
    $ttbringer=$ttbringer+$brinquedo;
    $ttemp=$ttemp+$vendaliq;
    $ttger=$ttger+$vendaliq;
    $ttempbruto=$ttempbruto+$venda;
    $ttgerbruto=$ttgerbruto+$venda;
    $ttdevemp=$ttdevemp+$trocas;
    $ttdevger=$ttdevger+$trocas;
    echo "<td>".number_format($venda,2,",",".")."</td>\n";
    echo "<td>".number_format($trocas,2,",",".")."</td>\n";
    echo "<td>".number_format($uniforme,2,",",".")."</td>\n";
    echo "<td>".number_format($brinquedo,2,",",".")."</td>\n";
    echo "<td>".number_format($vendaliq,2,",",".")."</td>\n";
    echo "</tr>\n";
    echo "<td><font color=\"black\" size=4><strong>".'Total Geral'."</strong></font></td>\n";
    echo "<td><font color=\"black\" size=4><strong>".'R$'.number_format($ttgerbruto,2,",",".")."</strong></font></td>\n";
    echo "<td><font color=\"red\" size=4><strong>".'R$'.number_format($ttdevger,2,",",".")."</strong></font></td>\n";
    echo "<td><font color=\"red\" size=4><strong>".'R$'.number_format($ttuniger,2,",",".")."</strong></font></td>\n";
    echo "<td><font color=\"red\" size=4><strong>".'R$'.number_format($ttbringer,2,",",".")."</strong></font></td>\n";
    echo "<td><font color=\"black\" size=4><strong>".'R$'.number_format($ttger,2,",",".")."</strong></font></td>\n";
    echo "</tr>\n";
    echo "<table border='0' width='100%' bgcolor=#FFFFF0 >";
    echo '<br><br>';  

}
?>
<!DOCTYPE html>
<html>
<head>
<center>
<title>ViaBrasil.bay</title>
<link rel="stylesheet" href="css/style.css"></link>
<br><br>
<center><form name = "form1" method= "post" action= "vendas.html">
<input class="btn btn-red" type="submit" value="Voltar"/>

<br><br>
</center>
</head>
</html>



