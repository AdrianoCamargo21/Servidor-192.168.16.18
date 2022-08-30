<!DOCTYPE html>
<html>
<head>
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

<BODY>
</BODY>
</HTML>
<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
set_time_limit(90000);
date_default_timezone_set('America/Sao_Paulo');
$time=date('H:i:s');
$dia= date('d-m-Y');
$voltalogin="<script>window.location='http://192.168.13.2/Desenvolver/vereficamargem.html'</script>";
$datai=$_POST['datai'];
if ($datai == ''){
    echo "<script>alert('Data Inicial Inválida');</script>";
    echo "$voltalogin";
}
$dataf=$_POST['dataf'];
if ($dataf == ''){
    echo "<script>alert('Data Final Inválida');</script>";
    echo "$voltalogin";
}
$dataia=$datai;
$datafa=$dataf;
$dataia = implode("/",array_reverse(explode("-",$dataia)));
$datafa = implode("/",array_reverse(explode("-",$datafa)));
$base=$_POST['base'];
if ($base=='C') {
    if(!@($con=pg_connect ("host=192.168.10.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@"))){
        echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=30 color=#000000> Sem Comunicação Banco de Dados  Data:$dia  Hora:$time </font></b></p>";
        echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista e o Adriano Não Estiver Na Sala Favor avisar o Adriano</font></b></p>";
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
 echo"<html><center><h1><font face='Arial' color='black'>Caçador De:$dataia Até:$datafa </font></h1></center></html>";
}
if ($base=='V') {
    if(!@($con=pg_connect ("host=192.168.10.190 dbname=troll_videira port=5430 user=postgres password=ky$14gr@"))){
        echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=30 color=#000000> Sem Comunicação Banco de Dados  Data:$dia  Hora:$time </font></b></p>";
        echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista e o Adriano Não Estiver Na Sala Favor avisar o Adriano</font></b></p>";
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
echo"<html><center><h1><font face='Arial' color='black'>Videira De:$dataia Até:$datafa </font></h1></center></html>";
}
if ($base=='L') {
    if(!@($con=pg_connect ("host=192.168.10.190 dbname=troll_lages port=5430 user=postgres password=ky$14gr@"))){
        echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=30 color=#000000> Sem Comunicação Banco de Dados  Data:$dia  Hora:$time </font></b></p>";
        echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista e o Adriano Não Estiver Na Sala Favor avisar o Adriano</font></b></p>";
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
echo"<html><center><h1><font face='Arial' color='black'>Lages De:$dataia Até:$datafa </font></h1></center></html>";
    echo "<table border='2' width='100%' bgcolor=#E3F6CE >";
    echo "<tr><td>Cód.</td>"."<td>Desconto</td>"."<td>Lucro</td>"."<td>Linha</td>"."<td>Marca</td>"."<td>Grupo</td>"."<td>Departamento</td>"."<td>Vendedor</td>".
         "<td>Pf</td>"."<td>Cond.</td>"."<td>Nf</td>"."<td>Obs</td>"."</tr>";
    $sql="select cempresasaidas,caviaprsaidas,cprohistorico,cdeslinha,cdesmarca,cdesgrupo,cdesdepartamento,cnomvendedor,cnotsaidas,cobssaidas,(((cpveproduto-cvlqhistorico)/cpveproduto)*100)::numeric(18,2) as margem
        ,((cvlqhistorico/cpcuproduto)*100-100)::numeric(18,2) as lucro
         from ahistorico inner join asaidas on cidesaidas=cisahistorico 
        join aprodutos on cprohistorico=ccodproduto join tlinha on clinproduto = ccodlinha join tmarca on cmarproduto= ccodmarca join tgrupo on ccodgrupo = cgruporduto join tdepartamento on ccoddepartamento=cdepproduto
        join tvendedores on cvensaidas=ccodvendedor
        where cempresasaidas in (1,2) and  i_asa_codigo_tna = '1' and cemihistorico >= '$datai' and cemihistorico <= '$dataf'  and (cvlqhistorico <(cpcuproduto*2)) and ccodlinha <> '103' and ccodlinha in (46,54,47,42,9,123,121,120,119,117,116,115) order by margem";
    $exsql=pg_query($con,$sql);
    while($row = pg_fetch_assoc($exsql)){
    $emp=$row['cempresasaidas']; 
        if($emp % 2 == 0){
            $pf='S';
        } else {
            $pf='N';
        }
        $tipo=$row['caviaprsaidas'];
        $cod=$row['cprohistorico'];    
        $linha=$row['cdeslinha'];
        $marca=$row['cdesmarca'];
        $grupo=$row['cdesgrupo'];
        $departamento=$row['cdesdepartamento'];
        $vend=$row['cnomvendedor'];
        $nota=$row['cnotsaidas'];
        $obs=$row['cobssaidas'];
        $margem=$row['margem'];
        $lucro=$row['lucro'];
        $margem=number_format($margem,2,",",".");
       if ($margem > 0) {
           echo "<td>".$cod."</td>\n";
           echo "<td>".$margem.'%'."</td>\n";
           echo "<td>".$lucro.'%'."</td>\n";
           echo "<td>".$linha."</td>\n";
           echo "<td>".$marca."</td>\n";
           echo "<td>".$grupo."</td>\n";
           echo "<td>".$departamento."</td>\n";
           echo "<td>".$vend."</td>\n";
           echo "<td>".$pf."</td>\n";
           echo "<td>".$tipo."</td>\n";
           echo "<td>".$nota."</td>\n";
           echo "<td>".$obs."</td>\n";
           echo "</tr>\n";
       }
    }
    exit;
}
echo "<table border='2' width='100%' bgcolor=#E3F6CE >";
echo "<tr><td>Cód.</td>"."<td>Desconto</td>"."<td>Lucro</td>"."<td>Linha</td>"."<td>Marca</td>"."<td>Grupo</td>"."<td>Departamento</td>"."<td>Vendedor</td>".
     "<td>Pf</td>"."<td>Cond.</td>"."<td>Nf</td>"."<td>Obs</td>"."</tr>";
$sql="select cempresasaidas,caviaprsaidas,cprohistorico,cdeslinha,cdesmarca,cdesgrupo,cdesdepartamento,cnomvendedor,cnotsaidas,cobssaidas,(((cpveproduto-cvlqhistorico)/cpveproduto)*100)::numeric(18,2) as margem
    ,((cvlqhistorico/cpcuproduto)*100-100)::numeric(18,2) as lucro
     from ahistorico inner join asaidas on cidesaidas=cisahistorico 
    join aprodutos on cprohistorico=ccodproduto join tlinha on clinproduto = ccodlinha join tmarca on cmarproduto= ccodmarca join tgrupo on ccodgrupo = cgruporduto join tdepartamento on ccoddepartamento=cdepproduto
    join tvendedores on cvensaidas=ccodvendedor
    where i_asa_codigo_tna = '1' and cemihistorico >= '$datai' and cemihistorico <= '$dataf'  and (cvlqhistorico <(cpcuproduto*2)) and ccodlinha <> '103' and ccodlinha in (46,54,47,42,9,123,121,120,119,117,116,115) order by margem";
$exsql=pg_query($con,$sql);
while($row = pg_fetch_assoc($exsql)){
$emp=$row['cempresasaidas']; 
    if($emp % 2 == 0){
        $pf='S';
    } else {
        $pf='N';
    }
    $tipo=$row['caviaprsaidas'];
    $cod=$row['cprohistorico'];    
    $linha=$row['cdeslinha'];
    $marca=$row['cdesmarca'];
    $grupo=$row['cdesgrupo'];
    $departamento=$row['cdesdepartamento'];
    $vend=$row['cnomvendedor'];
    $nota=$row['cnotsaidas'];
    $obs=$row['cobssaidas'];
    $margem=$row['margem'];
    $lucro=$row['lucro'];
    $margem=number_format($margem,2,",",".");
   if ($margem > 0) {
       echo "<td>".$cod."</td>\n";
       echo "<td>".$margem.'%'."</td>\n";
       echo "<td>".$lucro.'%'."</td>\n";
       echo "<td>".$linha."</td>\n";
       echo "<td>".$marca."</td>\n";
       echo "<td>".$grupo."</td>\n";
       echo "<td>".$departamento."</td>\n";
       echo "<td>".$vend."</td>\n";
       echo "<td>".$pf."</td>\n";
       echo "<td>".$tipo."</td>\n";
       echo "<td>".$nota."</td>\n";
       echo "<td>".$obs."</td>\n";
       echo "</tr>\n";
   }
}




























exit;




    











exit;































?>