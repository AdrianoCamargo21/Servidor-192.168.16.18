<!DOCTYPE html>
<html>
<center><img src="img/fundo1.jpg"alt="500" heigth ="500px" width="250px" ></center>
<head>
<title>Vendas</title>
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
<marquee behavior="alternate" scrollamount="1" ><h1><div name="relogio" id="relogio"></div></h1></marquee>
<BODY>
</BODY>
</HTML>
<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
$voltalogin="<script>window.location='http://192.168.10.190/desenvolver/horast.html';</script>";
date_default_timezone_set('America/Sao_Paulo');
$time=date('H:i:s');
$dia= date('d-m-Y');
$data=$_POST["data"];
if ($data =='') {
    echo "<script>alert('Data Inválida');</script>";
    echo "$voltalogin";
}
$horaInicial=$_POST["entp"];
$horaFinal=$_POST["saip"];


/*Bom...vamos lá.

Ok...vamos entrar com os respectivos dados.*/


$intervalo   = "00:00:00";
$horaAuxuliar   = "00:00:00";
/*
 Bom...primeiramente...você terá que converter esses valores com a função strtotime
 */

$horaInicial  = strtotime($horaInicial);
$horaFinal    = strtotime($horaFinal);
$intervalo    = strtotime($intervalo);
$horaAuxuliar = strtotime($horaAuxuliar);
/*
 Bom...agora é só dividir os valores...e você terá o total de segundos trabalhados
 */
$totalSegundos = ($horaFinal - $horaInicial);

$totalHora = $totalSegundos / 3600;

/*E não podemos esquecer a hora de intervalo né...observe que criei uma hora auxiliar para que possa ser interagaida com ele beleza...*/
$segundosIntervalo = $intervalo - $horaAuxuliar;
$horaIntervalo = $segundosIntervalo /3600;

/* E finalmente para que você saiba realmente quantas horas o fulano trabalhou...de acordo com as horas inseridas pelo usuario é claro...*/

$horasTrabalhadas = $totalHora;

$segundosTotal = $totalSegundos - $segundosIntervalo;
echo $totalHora*8.00."<br>";
/*E para que tudo saia num formato bunitinhu...te messa função aí para converter a parada ok...*/
echo "<br>Horas = ".$hora = converterHora($segundosTotal);


function converterHora($total_segundos){
    
    $hora = sprintf("%02s",floor($total_segundos / (60*60)));
    $total_segundos = ($total_segundos % (60*60));
    
    $minuto = sprintf("%02s",floor ($total_segundos / 60 ));
    $total_segundos = ($total_segundos % 60);
    
    $hora_minuto = $hora.":".$minuto;
    return $hora_minuto;
}




exit;

$ents=$_POST["ents"];
$sais=$_POST["sais"];
$entt=$_POST["entt"];
$sait=$_POST["sait"];

$jornada=(($saip-$entp)+($sais-$ents)+($sait-$entt));
echo $jornada;

$dia_time  = date('w', strtotime($data));
if ($dia_time == '0'){
   
} else {

}

exit;

if(!@($conexaoc=pg_connect ("host=192.168.10.30 dbname=troll port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Caçador Data:$dia  Hora:$time </font></b></p>";
    echo "<p style=background:#000000; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista Favor avisar o Adriano</font></b></p>";
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <center><img src="img/error.jpg"alt="500" heigth ="500px" width="100px" ></center>
    <link rel="stylesheet" href="css/style.css"></link>
    <br><br>
    <center><form name = "form1" method= "post" action= "via.html"></center>
	<center><input class="btn btn-green"  type="submit"  value="Voltar"></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit; 
}

if(!@($conexaogc=pg_connect ("host=192.168.10.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Caçador Data:$dia  Hora:$time </font></b></p>";
    echo "<p style=background:#000000; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista Favor avisar o Adriano</font></b></p>";
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <center><img src="img/error.jpg"alt="500" heigth ="500px" width="100px" ></center>
    <link rel="stylesheet" href="css/style.css"></link>
    <br><br>
    <center><form name = "form1" method= "post" action= "via.html"></center>
	<center><input class="btn btn-green"  type="submit"  value="Voltar"></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit; 
}
if(!@($conexaogv=pg_connect ("host=192.168.10.190 dbname=troll_videira port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Videira Data:$dia  Hora:$time </font></b></p>";
    echo "<p style=background:#000000; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista Favor avisar o Adriano</font></b></p>";
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <center><img src="img/error.jpg"alt="500" heigth ="500px" width="100px" ></center>
    <link rel="stylesheet" href="css/style.css"></link>
    <br><br>
    <center><form name = "form1" method= "post" action= "via.html"></center>
	<center><input class="btn btn-green"  type="submit"  value="Voltar"></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit; 
}
$voltalogin="<script>window.location='http://192.168.10.190/via.html';</script>";
$login=$_POST["login"];
$login = strtoupper($login);
if ($login == ''){
    echo "<script>alert('Login Não Pode Ser Em Branco');</script>";
    echo "$voltalogin";
    exit;
}
$senha=$_POST["senha"];
if ($senha == ''){
    echo "<script>alert('Senha Não Pode Ser em Branco');</script>";
    echo "$voltalogin";
    exit;
}
$com= "select cnomope from parametros where cnomope= '$login'";
$excom=pg_query($conexaoc,$com);
$rsexcom= pg_fetch_array($excom);
if ($rsexcom== '' ){    
    echo "<script>alert('Usuário Inválido');</script>";
    echo "$voltalogin";   
}
$com = "select cnomope,csenhausuario from parametros where cnomope= '$login' and csenhausuario='$senha'  ";
$excom=pg_query($conexaoc,$com);
$rsexcom= pg_fetch_array($excom);
if ($rsexcom == '') {    
    echo "<script>alert('Senha Inválida');</script>";
    echo "$voltalogin";    
}
if ($login == 'ADRIANO' ){
    $vendedor=$_POST["codv"];
    $resumo=$_POST["loja"];
    if ($vendedor== '' or $vendedor < '0'){
        echo "<script>alert('Digite o Número de Vendedor ou Digite 0 Para listar Todos');</script>";
        echo $voltalogin;
    }
    $dti=$_POST["dtin"];
    $dtf=$_POST["dtfn"];
    if ($dti== '' or $dtf== '' ){
        echo "<script>alert('Data Inválida');</script>";
        echo $voltalogin;
    }
    if ($dtf < $dti ){
        echo "<script>alert('Data Final Não Pode ser Menor que data inicial');</script>";
        echo $voltalogin;
    }
    if ($resumo == 'V'){
        if ($vendedor == '0'){
            $comando="select ccodvendedor,cnomvendedor from tvendedores iner join asaidas on cvensaidas=ccodvendedor join tnaturezaoperacao
on  i_tna_codigo_operacao =  i_asa_codigo_tna where cemisaidas >= '$dti' and cemisaidas <= '$dtf' and i_tna_valida_comissao = 0 group by ccodvendedor order by ccodvendedor";
            $excomando=pg_query($conexaogc,$comando);
            echo "<table border='2' width='100%' bgcolor=#FFFAFA>";            
            echo "<tr><td>Cód. Vendedor</td>"."<td>Vendedor</td>"."<td>Valor Bruto R$:</td>"."<td><font color=\"red\">Devoluções R$:</font></td>"."<td>Uniforme R$:</td>"."<td>Valor Liquido R$:</td>"."</tr>";
            set_time_limit(120);
            while ($row = pg_fetch_assoc($excomando)){
                $vend=$row['ccodvendedor'];
                echo "<td>".$row['ccodvendedor']."</td>\n";
                echo "<td>".$row['cnomvendedor']."</td>\n";
                $com="select (select sum(ctotsaidas) from  asaidas inner join tvendedores on ccodvendedor=cvensaidas where cemisaidas >= '$dti' and cemisaidas <= '$dtf' and ctessaidas = 'S' and i_asa_codigo_tna in (1,57) and ccodvendedor = '$vend')as bruto,
                (select  sum(cvlqhistorico) from ahistorico inner join tvendedores on i_ahi_codigo_ven = ccodvendedor  inner join aprodutos on cprohistorico = ccodproduto inner join asaidas on cisahistorico = cidesaidas  where cemihistorico >= '$dti' and cemihistorico <= '$dtf' and  ctessaidas = 'S' and i_asa_codigo_tna in (1,57) and clinproduto = 108 and ccodvendedor = '$vend' ) as uniformeb ,
                (select  sum(cvlqhistorico) from ahistorico inner join tvendedores on i_ahi_codigo_ven = ccodvendedor inner join aprodutos on cprohistorico = ccodproduto inner join asaidas on cisahistorico = cidesaidas where cemihistorico >= '$dti' and cemihistorico <= '$dtf' and  ctessaidas = 'E'and i_asa_codigo_tna in (10) and clinproduto = 108 and ccodvendedor = '$vend' ) as uniformel ,
                (select  sum(ctotsaidas ) from asaidas inner join tvendedores on ccodvendedor =  cvensaidas where cemisaidas >= '$dti' and cemisaidas <= '$dtf' and ctessaidas = 'E' and i_asa_codigo_tna in (10) and ccodvendedor = '$vend') as troca";         
                $excom=pg_query($conexaogc,$com);
                $rscom=pg_fetch_array($excom);
                $vbruto=$rscom['bruto'];
                if ($vbruto == '') {
                    $vbruto=0.00;
                }
                $vbrutoa=number_format( $vbruto,2,",",".");
                $uniformeb=$rscom['uniformeb'];
                $uniformel=$rscom['uniformel'];
                $uniforme=$uniformeb-$uniformel;
                $valordevolub=$rscom['troca'];
                $valordevol=$valordevolub-$uniformel;
                $valordevola=number_format( $valordevol,2,",",".");
                $uniformea=number_format( $uniforme,2,",",".");
                echo "<td>".$vbrutoa."</td>\n";
                if ($valordevol <> 0){
                    echo "<td><font color=\"red\">".$valordevola."</font></td>\n";
                }else {
                    echo "<td>".$valordevola."</td>\n";                
                }
                if ($uniforme <> 0) {
                    echo "<td><font color=\"red\">".$uniformea."</font></td>\n";
                }else{
                    echo "<td>".$uniformea."</td>\n";
                }
                $liquido=$vbruto-$valordevol-$uniforme;
                $liquidoa=number_format($liquido,2,",",".");
                if ($liquido < 0) {
                    echo "<td><font color=\"red\">". $liquidoa."</font></td>\n";
                } else {
                    echo "<td>".$liquidoa."</td>\n";
                }                
                echo "</tr>\n";                 
	       }
        }
        if ($vendedor <> 0){
            $comando="select ccodvendedor,cnomvendedor from tvendedores where ccodvendedor=$vendedor";
            $excomando=pg_query($conexaogc,$comando);
            echo "<table border='2' width='100%' bgcolor=#FFFAFA>";
            echo "<tr><td>Cód. Vendedor</td>"."<td>Vendedor</td>"."<td>Valor Bruto R$:</td>"."<td><font color=\"red\">Devoluções R$:</font></td>"."<td>Uniforme R$:</td>"."<td>Valor Liquido R$:</td>"."</tr>";
            set_time_limit(120);
            while ($row = pg_fetch_assoc($excomando)){
                $vend=$row['ccodvendedor'];
                echo "<td>".$row['ccodvendedor']."</td>\n";
                echo "<td>".$row['cnomvendedor']."</td>\n";
                $com="select (select sum(ctotsaidas) from  asaidas inner join tvendedores on ccodvendedor=cvensaidas where cemisaidas >= '$dti' and cemisaidas <= '$dtf' and ctessaidas = 'S' and i_asa_codigo_tna in (1,57) and ccodvendedor = '$vend')as bruto,
                (select  sum(cvlqhistorico) from ahistorico inner join tvendedores on i_ahi_codigo_ven = ccodvendedor  inner join aprodutos on cprohistorico = ccodproduto inner join asaidas on cisahistorico = cidesaidas  where cemihistorico >= '$dti' and cemihistorico <= '$dtf' and  ctessaidas = 'S' and i_asa_codigo_tna in (1,57) and clinproduto = 108 and ccodvendedor = '$vend' ) as uniformeb ,
                (select  sum(cvlqhistorico) from ahistorico inner join tvendedores on i_ahi_codigo_ven = ccodvendedor inner join aprodutos on cprohistorico = ccodproduto inner join asaidas on cisahistorico = cidesaidas where cemihistorico >= '$dti' and cemihistorico <= '$dtf' and  ctessaidas = 'E'and i_asa_codigo_tna in (10) and clinproduto = 108 and ccodvendedor = '$vend' ) as uniformel ,
                (select  sum(ctotsaidas ) from asaidas inner join tvendedores on ccodvendedor =  cvensaidas where cemisaidas >= '$dti' and cemisaidas <= '$dtf' and ctessaidas = 'E' and i_asa_codigo_tna in (10) and ccodvendedor = '$vend') as troca";
                $excom=pg_query($conexaogc,$com);
                $rscom=pg_fetch_array($excom);
                $vbruto=$rscom['bruto'];
                if ($vbruto == '') {
                    $vbruto=0.00;
                }
                $vbrutoa=number_format( $vbruto,2,",",".");
                $uniformeb=$rscom['uniformeb'];
                $uniformel=$rscom['uniformel'];
                $uniforme=$uniformeb-$uniformel;
                $valordevolub=$rscom['troca'];
                $valordevol=$valordevolub-$uniformel;
                $valordevola=number_format( $valordevol,2,",",".");
                $uniformea=number_format( $uniforme,2,",",".");
                echo "<td>".$vbrutoa."</td>\n";
                if ($valordevol <> 0){
                    echo "<td><font color=\"red\">".$valordevola."</font></td>\n";
                }else {
                    echo "<td>".$valordevola."</td>\n";
                }
                if ($uniforme <> 0) {
                    echo "<td><font color=\"red\">".$uniformea."</font></td>\n";
                }else{
                    echo "<td>".$uniformea."</td>\n";
                }
                $liquido=$vbruto-$valordevol-$uniforme;
                $liquidoa=number_format($liquido,2,",",".");
                if ($liquido < 0) {
                    echo "<td><font color=\"red\">". $liquidoa."</font></td>\n";
                } else {
                    echo "<td>".$liquidoa."</td>\n";
                }
                echo "</tr>\n";
            }
            
        }
    }
}


?>