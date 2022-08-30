<!DOCTYPE html>
<html>
<head>
<title>Acomulado</title>
<meta http-equiv='refresh' content='1800' ;url=http://192.168.13.2/Desenvolver/produtos.php';'>
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
<div name="relogio" id="relogio"></div>
<BODY>
</BODY>
</HTML>
<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
date_default_timezone_set('America/Sao_Paulo');
$time=date('H:i:s');
$dia= date('d-m-Y');
if(!@($conexaolc=pg_connect ("host=192.168.10.30 dbname=troll port=5430 user=postgres password=ky$14gr@"))){
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
if(!@($conexaogc=pg_connect ("host=192.168.10.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@"))){
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
if(!@($conexaogv=pg_connect ("host=192.168.10.190 dbname=troll_videira port=5430 user=postgres password=ky$14gr@"))){
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
$data=$_POST['date'];
ECHO $data;
if ($data == ''){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Data inválida </font></b></p>";
    ?>
    <!DOCTYPE html>
	<html>
	<head>    
	<link rel="stylesheet" href="css/style.css"></link>	
	<center><form name = "form1" method= "post" action= "devolucoescontrole.html"></center>
	<center><input class="btn btn-red"  type="submit" value="Voltar"></center>
	</form>
	</head>
	</html>
	<?php		    
    exit;
}

$tipo=$_POST['tipo'];
if ($tipo == 'I') {
    $com="select data from controledevolucoesdata order by data DESC";
    $excom=pg_query($conexaogc,$com);
    $resut= pg_fetch_array($excom);
    $ultdata=$resut['data'];
    ECHO $ultdata;
    if ($ultdata >= $data) {
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Data Já Conferida </font></b></p>";
        ?>
   		<!DOCTYPE html>
	    <html>
		<head>    
		<link rel="stylesheet" href="css/style.css"></link>	
		<center><form name = "form1" method= "post" action= "devolucoescontrole.html"></center>
		<center><input class="btn btn-red"  type="submit" value="Voltar"></center>
		</form>
		</head>
		</html>
		<?php		    
        exit;
    }
    $com="select cprohistorico,(select sum(centhistorico) where cprohistorico = cprohistorico ) as centhistorico  from ahistorico inner join asaidas on cisahistorico = cidesaidas where cemihistorico = '$data' and i_asa_codigo_tna = '10' and cemphistorico in (1,2) GROUP BY cprohistorico order by cprohistorico";
    $excom=pg_query($conexaogc,$com);
    $resut= pg_fetch_array($excom);
    $cod=$resut['cprohistorico'];
    $qtd=$resut['centhistorico'];
    while ($cod <> ''){
        $com="select id,codigo,quantidadedv from controledevolucoes where empresa = '1' and codigo=$cod";
        $excom=pg_query($conexaogc,$com);
        $resut= pg_fetch_array($excom);
        $codp=$resut['codigo'];
        $qtdv=$resut['quantidadedv'];
        $id=$resut['id'];
        if ($codp == ''){
            pg_query($conexaogc,"INSERT INTO controledevolucoes(id, codigo, quantidade, quantidadedv, empresa) VALUES (nextval('seq_controledevolucoes'),$cod,0,$qtd,'1')");
        }
        if ($codp <> ''){
            $novaqtd=$qtdv+$qtd;
            pg_query($conexaogc,"update controledevolucoes set quantidadedv = $novaqtd where codigo=$cod and empresa = '1' and id = $id ");
        }
        $com="select cprohistorico,(select sum(centhistorico) where cprohistorico = cprohistorico ) as centhistorico  from ahistorico inner join asaidas on cisahistorico = cidesaidas where cemihistorico = '$data' and i_asa_codigo_tna = '10' and cemphistorico in (1,2) and cprohistorico > $cod GROUP BY cprohistorico order by cprohistorico";
        $excom=pg_query($conexaogc,$com);
        $resut= pg_fetch_array($excom);
        $cod=$resut['cprohistorico'];
        $qtd=$resut['centhistorico'];
        if ($cod == '') {
            break;
        }
    }
    $com="select cprohistorico,(select sum(centhistorico) where cprohistorico = cprohistorico ) as centhistorico  from ahistorico inner join asaidas on cisahistorico = cidesaidas where cemihistorico = '$data' and i_asa_codigo_tna = '10' and cemphistorico in (3,4) GROUP BY cprohistorico order by cprohistorico";
    $excom=pg_query($conexaogc,$com);
    $resut= pg_fetch_array($excom);
    $cod=$resut['cprohistorico'];
    $qtd=$resut['centhistorico'];
    while ($cod <> ''){
        $com="select id,codigo,quantidadedv from controledevolucoes where empresa = '3' and codigo=$cod  ";
        $excom=pg_query($conexaogc,$com);
        $resut= pg_fetch_array($excom);
        $codp=$resut['codigo'];
        $qtdv=$resut['quantidadedv'];
        $id=$resut['id'];
        if ($codp == ''){
            pg_query($conexaogc,"INSERT INTO controledevolucoes(id, codigo, quantidade, quantidadedv, empresa) VALUES (nextval('seq_controledevolucoes'),$cod,0,$qtd,'3')");
        }
        if ($codp <> ''){
            $novaqtd=$qtdv+$qtd;
            pg_query($conexaogc,"update controledevolucoes set quantidadedv = $novaqtd where codigo=$cod and empresa = '3' and id = $id ");
        }
        $com="select cprohistorico,(select sum(centhistorico) where cprohistorico = cprohistorico ) as centhistorico  from ahistorico inner join asaidas on cisahistorico = cidesaidas where cemihistorico = '$data' and i_asa_codigo_tna = '10' and cemphistorico in (3,4) and cprohistorico > $cod GROUP BY cprohistorico order by cprohistorico";
        $excom=pg_query($conexaogc,$com);
        $resut= pg_fetch_array($excom);
        $cod=$resut['cprohistorico'];
        $qtd=$resut['centhistorico'];
        if ($cod == '') {
            break;
        }
    }
    $com="select cprohistorico,(select sum(centhistorico) where cprohistorico = cprohistorico ) as centhistorico  from ahistorico inner join asaidas on cisahistorico = cidesaidas where cemihistorico = '$data' and i_asa_codigo_tna = '10' and cemphistorico in (5,6) GROUP BY cprohistorico order by cprohistorico";
    $excom=pg_query($conexaogc,$com);
    $resut= pg_fetch_array($excom);
    $cod=$resut['cprohistorico'];
    $qtd=$resut['centhistorico'];
    while ($cod <> ''){
        $com="select id,codigo,quantidadedv from controledevolucoes where empresa = '5' and codigo=$cod";
        $excom=pg_query($conexaogc,$com);
        $resut= pg_fetch_array($excom);
        $codp=$resut['codigo'];
        $qtdv=$resut['quantidadedv'];
        $id=$resut['id'];
        if ($codp == ''){
            pg_query($conexaogc,"INSERT INTO controledevolucoes(id, codigo, quantidade, quantidadedv, empresa) VALUES (nextval('seq_controledevolucoes'),$cod,0,$qtd,'5')");
        }
        if ($codp <> ''){
            $novaqtd=$qtdv+$qtd;
            pg_query($conexaogc,"update controledevolucoes set quantidadedv = $novaqtd where codigo=$cod and empresa = '5'  and id = $id ");
        }
        $com="select cprohistorico,(select sum(centhistorico) where cprohistorico = cprohistorico ) as centhistorico  from ahistorico inner join asaidas on cisahistorico = cidesaidas where cemihistorico = '$data' and i_asa_codigo_tna = '10' and cemphistorico in (5,6) and cprohistorico > $cod GROUP BY cprohistorico order by cprohistorico";
        $excom=pg_query($conexaogc,$com);
        $resut= pg_fetch_array($excom);
        $cod=$resut['cprohistorico'];
        $qtd=$resut['centhistorico'];
        if ($cod == '') {
            break;
        }
    }
    $com="select cprohistorico,(select sum(centhistorico) where cprohistorico = cprohistorico ) as centhistorico  from ahistorico inner join asaidas on cisahistorico = cidesaidas where cemihistorico = '$data' and i_asa_codigo_tna = '10' and cemphistorico in (7,8)  GROUP BY cprohistorico order by cprohistorico";
    $excom=pg_query($conexaogc,$com);
    $resut= pg_fetch_array($excom);
    $cod=$resut['cprohistorico'];
    $qtd=$resut['centhistorico'];
    while ($cod <> ''){
        $com="select id,codigo,quantidadedv from controledevolucoes where empresa = '7' and codigo=$cod";
        $excom=pg_query($conexaogc,$com);
        $resut= pg_fetch_array($excom);
        $codp=$resut['codigo'];
        $qtdv=$resut['quantidadedv'];
        $id=$resut['id'];
        if ($codp == ''){
            pg_query($conexaogc,"INSERT INTO controledevolucoes(id, codigo, quantidade, quantidadedv, empresa) VALUES (nextval('seq_controledevolucoes'),$cod,0,$qtd,'7')");
        }
        if ($codp <> ''){
            $novaqtd=$qtdv+$qtd;
            pg_query($conexaogc,"update controledevolucoes set quantidadedv = $novaqtd where codigo=$cod and empresa = '7' and id = $id ");
        }
        $com="select cprohistorico,(select sum(centhistorico) where cprohistorico = cprohistorico ) as centhistorico  from ahistorico inner join asaidas on cisahistorico = cidesaidas where cemihistorico = '$data' and i_asa_codigo_tna = '10' and cemphistorico in (7,8) and cprohistorico > $cod GROUP BY cprohistorico order by cprohistorico";
        $excom=pg_query($conexaogc,$com);
        $resut= pg_fetch_array($excom);
        $cod=$resut['cprohistorico'];
        $qtd=$resut['centhistorico'];
        if ($cod == '') {
            break;
        }
    }
    $com="select cprohistorico,(select sum(centhistorico) where cprohistorico = cprohistorico ) as centhistorico  from ahistorico inner join asaidas on cisahistorico = cidesaidas where cemihistorico = '$data' and i_asa_codigo_tna = '10' and cemphistorico in (9,10) GROUP BY cprohistorico order by cprohistorico";
    $excom=pg_query($conexaogc,$com);
    $resut= pg_fetch_array($excom);
    $cod=$resut['cprohistorico'];
    $qtd=$resut['centhistorico'];
    while ($cod <> ''){
        $com="select id,codigo,quantidadedv,empresa from controledevolucoes where empresa = '9' and codigo=$cod";
        $excom=pg_query($conexaogc,$com);
        $resut= pg_fetch_array($excom);
        $codp=$resut['codigo'];
        $qtdv=$resut['quantidadedv'];
        $id=$resut['id'];        
        if ($codp == ''){
            pg_query($conexaogc,"INSERT INTO controledevolucoes(id, codigo, quantidade, quantidadedv, empresa) VALUES (nextval('seq_controledevolucoes'),$cod,0,$qtd,'9')");
        }
        if ($codp <> ''){
            $novaqtd=$qtdv+$qtd;
            pg_query($conexaogc,"update controledevolucoes set quantidadedv = $novaqtd where codigo=$cod and id = $id and empresa = '9'  ");
        }
        $com="select cprohistorico,(select sum(centhistorico) where cprohistorico = cprohistorico ) as centhistorico  from ahistorico inner join asaidas on cisahistorico = cidesaidas where cemihistorico = '$data' and i_asa_codigo_tna = '10' and cemphistorico in (9,10) and cprohistorico > $cod GROUP BY cprohistorico order by cprohistorico";
        $excom=pg_query($conexaogc,$com);
        $resut= pg_fetch_array($excom);
        $cod=$resut['cprohistorico'];
        $qtd=$resut['centhistorico'];
        if ($cod == '') {
            break;
        }
    }
    $com="select cprohistorico,(select sum(centhistorico) where cprohistorico = cprohistorico ) as centhistorico  from ahistorico inner join asaidas on cisahistorico = cidesaidas where cemihistorico = '$data' and i_asa_codigo_tna = '10' and cemphistorico in (11,12) GROUP BY cprohistorico order by cprohistorico";
    $excom=pg_query($conexaogc,$com);
    $resut= pg_fetch_array($excom);
    $cod=$resut['cprohistorico'];
    $qtd=$resut['centhistorico'];
    while ($cod <> ''){
        $com="select id,codigo,quantidadedv from controledevolucoes where empresa = '11' and codigo=$cod";
        $excom=pg_query($conexaogc,$com);
        $resut= pg_fetch_array($excom);
        $codp=$resut['codigo'];
        $qtdv=$resut['quantidadedv'];
        $id=$resut['id'];       
        if ($codp == ''){
            pg_query($conexaogc,"INSERT INTO controledevolucoes(id, codigo, quantidade, quantidadedv, empresa) VALUES (nextval('seq_controledevolucoes'),$cod,0,$qtd,'11')");
        }
        if ($codp <> ''){
            $novaqtd=$qtdv+$qtd;
            pg_query($conexaogc,"update controledevolucoes set quantidadedv = $novaqtd where codigo=$cod and id = $id and empresa = '11' ");
        }
        $com="select cprohistorico,(select sum(centhistorico) where cprohistorico = cprohistorico ) as centhistorico  from ahistorico inner join asaidas on cisahistorico = cidesaidas where cemihistorico = '$data' and i_asa_codigo_tna = '10' and cemphistorico in (11,12) and cprohistorico > $cod GROUP BY cprohistorico order by cprohistorico";
        $excom=pg_query($conexaogc,$com);
        $resut= pg_fetch_array($excom);
        $cod=$resut['cprohistorico'];
        $qtd=$resut['centhistorico'];
        if ($cod == '') {
            break;
        }
    }
    $com="select cprohistorico,(select sum(centhistorico) where cprohistorico = cprohistorico ) as centhistorico  from ahistorico inner join asaidas on cisahistorico = cidesaidas where cemihistorico = '$data' and i_asa_codigo_tna = '10' and cemphistorico in (13,14) GROUP BY cprohistorico order by cprohistorico";
    $excom=pg_query($conexaogv,$com);
    $resut= pg_fetch_array($excom);
    $cod=$resut['cprohistorico'];
    $qtd=$resut['centhistorico'];
    while ($cod <> ''){
        $com="select id,codigo,quantidadedv from controledevolucoes where empresa = '13' and codigo=$cod";
        $excom=pg_query($conexaogc,$com);
        $resut= pg_fetch_array($excom);
        $codp=$resut['codigo'];
        $qtdv=$resut['quantidadedv'];
        $id=$resut['id'];
        if ($codp == ''){
            pg_query($conexaogc,"INSERT INTO controledevolucoes(id, codigo, quantidade, quantidadedv, empresa) VALUES (nextval('seq_controledevolucoes'),$cod,0,$qtd,'13')");
        }
        if ($codp <> ''){
            $novaqtd=$qtdv+$qtd;
            pg_query($conexaogc,"update controledevolucoes set quantidadedv = $novaqtd where codigo=$cod and id = $id and empresa = '13' ");
        }
        $com="select cprohistorico,(select sum(centhistorico) where cprohistorico = cprohistorico ) as centhistorico  from ahistorico inner join asaidas on cisahistorico = cidesaidas where cemihistorico = '$data' and i_asa_codigo_tna = '10' and cemphistorico in (13,14) and cprohistorico > $cod GROUP BY cprohistorico order by cprohistorico";
        $excom=pg_query($conexaogv,$com);
        $resut= pg_fetch_array($excom);
        $cod=$resut['cprohistorico'];
        $qtd=$resut['centhistorico'];
        if ($cod == '') {
            break;
        }
    }
    $com="select cprohistorico,(select sum(centhistorico) where cprohistorico = cprohistorico ) as centhistorico  from ahistorico inner join asaidas on cisahistorico = cidesaidas where cemihistorico = '$data' and i_asa_codigo_tna = '10' and cemphistorico in (15,16) GROUP BY cprohistorico order by cprohistorico";
    $excom=pg_query($conexaogv,$com);
    $resut= pg_fetch_array($excom);
    $cod=$resut['cprohistorico'];
    $qtd=$resut['centhistorico'];
    while ($cod <> ''){
        $com="select id,codigo,quantidadedv from controledevolucoes where empresa = '15' and codigo=$cod";
        $excom=pg_query($conexaogc,$com);
        $resut= pg_fetch_array($excom);
        $codp=$resut['codigo'];
        $qtdv=$resut['quantidadedv'];
        $id=$resut['id'];
        if ($codp == ''){
            pg_query($conexaogc,"INSERT INTO controledevolucoes(id, codigo, quantidade, quantidadedv, empresa) VALUES (nextval('seq_controledevolucoes'),$cod,0,$qtd,'15')");
        }
        if ($codp <> ''){
            $novaqtd=$qtdv+$qtd;
            pg_query($conexaogc,"update controledevolucoes set quantidadedv = $novaqtd where codigo=$cod and empresa = '15' and id = $id ");
        }
        $com="select cprohistorico,(select sum(centhistorico) where cprohistorico = cprohistorico ) as centhistorico  from ahistorico inner join asaidas on cisahistorico = cidesaidas where cemihistorico = '$data' and i_asa_codigo_tna = '10' and cemphistorico in (15,16) and cprohistorico > $cod GROUP BY cprohistorico order by cprohistorico";
        $excom=pg_query($conexaogv,$com);
        $resut= pg_fetch_array($excom);
        $cod=$resut['cprohistorico'];
        $qtd=$resut['centhistorico'];
        if ($cod == '') {
            break;
        }
    }
    
    pg_query($conexaogc,"INSERT INTO controledevolucoesdata(id,data)VALUES (nextval('seq_controledevolucoesdata'),'$data')");
    $com ="select id,codigo,quantidade,empresa from controledevolucoeslog where status = 'P' and data <='$data' order by id ";
    $excom=pg_query($conexaolc,$com);
    $resut= pg_fetch_array($excom);
    $id=$resut['id'];
    $cod=$resut['codigo'];
    $qtd=$resut['quantidade'];
    $emp=$resut['empresa'];
    while ($id<> ''){
        $com="select codigo,quantidade from controledevolucoes where empresa = '$emp' and codigo=$cod";
        $excom=pg_query($conexaogc,$com);
        $resut= pg_fetch_array($excom);
        $codp=$resut['codigo'];
        $qtdv=$resut['quantidade'];
        if ($codp == ''){
            pg_query($conexaogc,"INSERT INTO controledevolucoes(id, codigo, quantidade, quantidadedv, empresa) VALUES (nextval('seq_controledevolucoes'),$cod,$qtd,0,'$emp')");
        }
        if ($codp <> ''){
            $novaqtd=$qtdv+$qtd;
            pg_query($conexaogc,"update controledevolucoes set quantidade = $novaqtd where codigo=$cod and empresa = $emp  ");
        }
        pg_query($conexaolc,"update controledevolucoeslog set status = 'C' where id = $id ");
        $com ="select id,codigo,quantidade,empresa from controledevolucoeslog where status = 'P' and id > $id and data <='$data'  order by id ";
        $excom=pg_query($conexaolc,$com);
        $resut= pg_fetch_array($excom);
        $id=$resut['id'];
        $cod=$resut['codigo'];
        $qtd=$resut['quantidade'];
        $emp=$resut['empresa'];
        if ($id == '') {
            break;
        }
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    echo "<p style=background:#00FF00; align=center <br/><b><font size=30 color=#0000FF>Análise Incluida</font></b></p>";
    ?>
        <!DOCTYPE html>
		<html>
		<head>    
		<link rel="stylesheet" href="css/style.css"></link>
		<center><img src=img/okk.jpg alt="400" heigth ="400px" width="300px" ></center>	
		<center><form name = "form1" method= "post" action= "devolucoescontrole.html"></center>
		<center><input class="btn btn-red"  type="submit" value="Voltar"></center>
		</form>
		</head>
		</html>
		<?php		    
        exit;    
}
if ($tipo == 'P') {
    $com="select codigo,quantidade,quantidadedv,empresa from controledevolucoes  where (quantidade-quantidadedv) >0";
    $excom=pg_query($conexaogc,$com);
    $resut= pg_fetch_array($excom);
    if ($resut == '') {
        echo "<p style=background:#00FF00; align=center <br/><b><font size=30 color=#0000FF>Nenhum Produto Pendente</font></b></p>";
        ?>
        <!DOCTYPE html>
		<html>
		<head>    
		<link rel="stylesheet" href="css/style.css"></link>
		<center><img src=img/okk.jpg alt="400" heigth ="400px" width="300px" ></center>	
		<center><form name = "form1" method= "post" action= "devolucoescontrole.html"></center>
		<center><input class="btn btn-red"  type="submit" value="Voltar"></center>
		</form>
		</head>
		</html>
		<?php		    
        exit;
    }else {
        $com="select codigo,quantidade,quantidadedv,empresa from controledevolucoes  where (quantidade-quantidadedv) >0";
        $excom=pg_query($conexaogc,$com);
        echo "<p style=background:#000000; align=center <br/><b><font size=10 color=#7CFC00>**Lista de Pendentes**</font></b></p>";
        echo "<table border='2' width='100%' bgcolor=#E3F6CE >";
        echo "<tr><td>Código</td>"."<td>Quantidade Cadastrada</td>"."<td>Quantidade Devolvida</td>"."<td>Empresa</td>"."</tr>";
        while ($row = pg_fetch_assoc ( $excom)) {
            echo "<td>".$row['codigo']."</td>\n";
            echo "<td>".$row['quantidade']."</td>\n";
            echo "<td>".$row['quantidadedv']."</td>\n";
            echo "<td>".$row['empresa']."</td>\n";            
            echo "</tr>\n"; 
        }        
        ?>
        <!DOCTYPE html>
		<html>
		<head>    
		<link rel="stylesheet" href="css/style.css"></link>		
		<center><form name = "form1" method= "post" action= "devolucoescontrole.html"></center>
		<center><input class="btn btn-red"  type="submit" value="Voltar"></center>
		<br><br>
		</form>
		</head>
		</html>
		<?php		    
        exit;        
    }
}
if ($tipo == 'E') {
    $com="select codigo,quantidade,quantidadedv,empresa from controledevolucoes  where (quantidade-quantidadedv) <0";
    $excom=pg_query($conexaogc,$com);
    $resut= pg_fetch_array($excom);
    if ($resut == '') {
        echo "<p style=background:#00FF00; align=center <br/><b><font size=30 color=#0000FF>Nenhum Produto Errado</font></b></p>";
        ?>
        <!DOCTYPE html>
		<html>
		<head>    
		<link rel="stylesheet" href="css/style.css"></link>
		<center><img src=img/okk.jpg alt="400" heigth ="400px" width="300px" ></center>	
		<center><form name = "form1" method= "post" action= "devolucoescontrole.html"></center>
		<center><input class="btn btn-red"  type="submit" value="Voltar"></center>
		</form>
		</head>
		</html>
		<?php		    
        exit;
    }else {
        $com="select codigo,quantidade,quantidadedv,empresa from controledevolucoes  where (quantidade-quantidadedv) <0 order by empresa,codigo";
        $excom=pg_query($conexaogc,$com);
        echo "<p style=background:#000000; align=center <br/><b><font size=10 color=#7CFC00>**Lista de Erros**</font></b></p>";
        echo "<table border='2' width='100%' bgcolor=#E3F6CE >";
        echo "<tr><td>Código</td>"."<td>Quantidade Cadastrada</td>"."<td>Quantidade Devolvida</td>"."<td>Empresa</td>"."</tr>";
        while ($row = pg_fetch_assoc ( $excom)) {
            echo "<td>".$row['codigo']."</td>\n";
            echo "<td>".$row['quantidade']."</td>\n";
            echo "<td>".$row['quantidadedv']."</td>\n";
            echo "<td>".$row['empresa']."</td>\n";            
            echo "</tr>\n"; 
        }        
        ?>
        <!DOCTYPE html>
		<html>
		<head>    
		<link rel="stylesheet" href="css/style.css"></link>		
		<center><form name = "form1" method= "post" action= "devolucoescontrole.html"></center>
		<center><input class="btn btn-red"  type="submit" value="Voltar"></center>
		<br><br>
		</form>
		</head>
		</html>
		<?php		    
        exit;        
    }
}
 

exit;
    
    

?>