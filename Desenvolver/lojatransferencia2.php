<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Grupo Via Brasil</title>
<script>
window.history.forward(1);
</Script>
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
date_default_timezone_set('America/Sao_Paulo');
error_reporting(0);
session_start();
$time=date('H:i:s');
$dia= date('Y-m-d');
set_time_limit(0);
$voltalogin="<script>window.location='http://192.168.13.2:8080/Desenvolver/lojatransferencia.html';</script>";
$cliente = $_SESSION['cliente'];
if ($cliente=='') {
    session_destroy();
    echo "<script>alert('Erro ao Carregar Cliente');</script>";
    echo $voltalogin;
    exit;
}
$login = $_SESSION['login'];
if ($login=='') {
    session_destroy();
    echo "<script>alert('erro ao carregar login');</script>";
    echo $voltalogin;
    exit;
}
$codlogin = $_SESSION['codlogin'];
if ($codlogin=='') {
    session_destroy();
    echo "<script>alert('erro ao carregar login');</script>";
    echo $voltalogin;
    exit;
}
$fant = $_SESSION['fantasia'];
if ($fant=='') {
    session_destroy();
    echo "<script>alert('Erro ao Carregar Nome do Cliente');</script>";
    echo $voltalogin;
    exit;
}
$loja = $_SESSION['loja'];
if ($loja=='') {
    session_destroy();
    echo "<script>alert('Erro ao Carregar empresa de origem');</script>";
    echo $voltalogin;
    exit;
}
$emp= $_SESSION['emp'];
if ($emp=='') {
    session_destroy();
    echo "<script>alert('Erro ao Carregar empresa de origem');</script>";
    echo $voltalogin;
    exit;
}
$cfop= $_SESSION['cfop'];
if ($cfop=='') {
    session_destroy();
    echo "<script>alert('Erro ao Carregar Cfop');</script>";
    echo $voltalogin;
    exit;
}
$origen= $_SESSION['origem'];
if ($origen=='') {
    session_destroy();
    echo "<script>alert('Erro ao Carregar empresa de Origem');</script>";
    echo $voltalogin;
    exit;
}
$destino= $_SESSION['destino'];
if ($destino=='') {
    session_destroy();
    echo "<script>alert('Erro ao Carregar empresa de Destino');</script>";
    echo $voltalogin;
    exit;
}
if ($origen == 'C'){	
	if ($emp == 12) {			
		$logo='<tr  align="center"><td  bgcolor="#F5ECCE"  width="50" valign="center"><img border="0" src="img/sh.jpg"  height="60"></td>';
	} else {
		$logo='<tr  align="center"><td  bgcolor="#F5ECCE"  width="50" valign="center"><img border="0" src="img/fundo1.png"  height="60"></td>';
	}
}
if ($origen == 'V'){	
	if ($emp == 17) {			
		$logo='<tr  align="center"><td  bgcolor="#F5ECCE"  width="50" valign="center"><img border="0" src="img/sh.jpg"  height="60"></td>';
	} else {
		$logo='<tr  align="center"><td  bgcolor="#F5ECCE"  width="50" valign="center"><img border="0" src="img/fundo1.png"  height="60"></td>';
	}
}
if ($origen == 'J'){	
	if ($emp == 2) {			
		$logo='<tr  align="center"><td  bgcolor="#F5ECCE"  width="50" valign="center"><img border="0" src="img/at.jpg"  height="60"></td>';
	} else {
		$logo='<tr  align="center"><td  bgcolor="#F5ECCE"  width="50" valign="center"><img border="0" src="img/fundo1.png"  height="60"></td>';
	}
}
if ($origen == 'L'){	
	if ($emp == 4) {			
		$logo='<tr  align="center"><td  bgcolor="#F5ECCE"  width="50" valign="center"><img border="0" src="img/at.jpg"  height="60"></td>';
	} else {
		$logo='<tr  align="center"><td  bgcolor="#F5ECCE"  width="50" valign="center"><img border="0" src="img/fundo1.png"  height="60"></td>';
	}
}
if ($origen == 'C') {
    if(!@($cono=pg_connect ("host=192.168.16.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Caçador Data:$dia  Hora:$time </font></b></p>";
    echo "<p style=background:#000000; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista Favor avisar o Adriano</font></b></p>";
    session_destroy();
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
}
if ($origen=='V') {
	if(!@($cono=pg_connect ("host=192.168.16.190 dbname=troll_videira port=5430 user=postgres password=ky$14gr@"))){
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Videira Data:$dia  Hora:$time </font></b></p>";
        session_destroy();
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
	};
}
if ($origen=='J') {
	if(!@($cono=pg_connect ("host=192.168.16.190 dbname=troll_joinville port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Joinville Data:$dia  Hora:$time </font></b></p>";
    echo "<p style=background:#000000; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista Favor avisar o Adriano</font></b></p>";
    session_destroy();
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
}
if ($origen=='L') {
	if(!@($cono=pg_connect ("host=192.168.16.190 dbname=troll_lages port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Lages Data:$dia  Hora:$time </font></b></p>";
    echo "<p style=background:#000000; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista Favor avisar o Adriano</font></b></p>";
    session_destroy();
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
}
if ($destino == 'C') {
    if(!@($cond=pg_connect ("host=192.168.16.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Caçador Data:$dia  Hora:$time </font></b></p>";
    echo "<p style=background:#000000; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista Favor avisar o Adriano</font></b></p>";
    session_destroy();
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
}
if ($destino=='V') {
	if(!@($cond=pg_connect ("host=192.168.16.190 dbname=troll_videira port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Videira Data:$dia  Hora:$time </font></b></p>";
    echo "<p style=background:#000000; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista Favor avisar o Adriano</font></b></p>";
    session_destroy();
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
}
if ($destino=='J') {
	if(!@($cond=pg_connect ("host=192.168.16.190 dbname=troll_joinville port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Joinville Data:$dia  Hora:$time </font></b></p>";
    echo "<p style=background:#000000; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista Favor avisar o Adriano</font></b></p>";
    session_destroy();
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
}
if ($destino=='L') {
    if(!@($cond=pg_connect ("host=192.168.16.190 dbname=troll_lages port=5430 user=postgres password=ky$14gr@"))){
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Lages Data:$dia  Hora:$time </font></b></p>";
        echo "<p style=background:#000000; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista Favor avisar o Adriano</font></b></p>";
        session_destroy();
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
}
$ids= $_SESSION['ids'];
if ($ids=='') {
    session_destroy();
    echo "<script>alert('Id de saida Inválido');</script>";
    echo $voltalogin;
    exit;
}
$idc= $_SESSION['idahc'];
if ($idc == '') {
    session_destroy();
    echo "<script>alert('Id da Conta Inválido');</script>";
    echo $voltalogin;
    exit;
}
$tipo=$_POST["tipo"];
if ($tipo=='CADASTRAR' ) {
    $qtd=$_POST["qtd"];
    if ($qtd=='') {
        $qtd='1';
    }
    $cod=$_POST["cod"];
    if ($cod=='') {
        
    } 
}
if ($cod == null) {	
	$cod=$_GET['codigo'];
	if ($cod <> null) {
		$qtd='1';
	}
} 
if ($tipo=='CARREGAR') {    
    $etq=$_POST["etq"];
    if ($etq=='G') {
        $sql="delete from tetiqacumulada";
        $exsql= pg_query($cond,$sql);        
    }
    $nome_temporario=$_FILES["Arquivo"]["tmp_name"];
    $nome_real=$_FILES["Arquivo"]["name"];
    $nome_temporario=$_FILES["Arquivo"]["tmp_name"];
    $nome_real=$_FILES["Arquivo"]["name"];
    if (!copy($nome_temporario,$nome_real)){
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Ao caregar o Arquivo**</font></b></p>";
        session_destroy();
        ?>
        <!DOCTYPE html>
    	<html>
    	<head>
    	<link rel="stylesheet" href="css/style.css"></link>
		<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
		</head>
		</html>
		<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
		<?php
        
    }
    $arquivo="$nome_real";
    if (file_exists($arquivo)){              
        $arq = fopen($arquivo,'r');
        $ll=0;
        while(!feof($arq))
            for($i=0; $i<1; $i++){
                if ($conteudo = fgets($arq)){
                    $ll++;
                    $linha = explode(';', $conteudo);
            }
            if ($linha[0] <> '') {			
				$sql="select ccodproduto,cdesproduto,cpcuproduto,cdepproduto from aprodutos where ccodproduto =$linha[0] and  csitproduto = 0 ";
				$exsql= pg_query($cono,$sql);
				$resulsql= pg_fetch_array($exsql);
				$codtx=$resulsql['ccodproduto'];				
				if ($codtx =='') {
				    $sql="select ccodproduto,cdesproduto,cpcuproduto,cdepproduto from aprodutos where cantpoduto = $linha[0] and  csitproduto = 0 ";
				    $exsql= pg_query($cono,$sql);
				    $resulsql= pg_fetch_array($exsql);
				    $codtx=$resulsql['ccodproduto'];
				    if ($codtx == '') {						
				        echo "Codigo:$linha[0] com Qtd: $linha[1] Coletádo Errado Insira ele Manulmente";
				    } else {
		          		$desc=$resulsql['cdesproduto'];
		          		$custo=$resulsql['cpcuproduto'];
						$dep=$resulsql['cdepproduto'];						
					}					
				} else {
              		$desc=$resulsql['cdesproduto'];
	          		$custo=$resulsql['cpcuproduto'];
					$dep=$resulsql['cdepproduto'];
					
				}
				if ($codtx <> '') {
				    if ($desc=='') {
				        $desc ='Sem Descrição';
				    }
				    if ($custo < 0) {
				        $custo='0.01';
				    }
					if ($linha[1] =='') {
					    $qtdtx=1;
					} else {
					    $qtdtx=$linha[1];
					}
					if ($dep=='') {
					    $dep='0';
					}

				    $tctx=$qtdtx*$custo;
					$sql="INSERT INTO tempahistorico
            		VALUES (nextval('seque_ahistorico'),NULL,$ids,0,'S',NULL,$codtx,'$dia',$custo,$custo,$custo,$custo,0.00,0.00,0.00,0.00,0.00,0.00,0.00, 
                    $tctx,'$desc',$cfop,$qtdtx,0.00,NULL,$cliente,17.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0,'$dia','$time','$login',$codlogin,NULL, 
                    NULL,NULL,NULL,$emp,$custo,0,0,$dep,0.00,NULL,NULL,NULL,NULL,0.00,0,0,1,$custo,0.00,0.00,0.000,0.00,0.00,0.000,0.000,0.00,0.00,0.00, 
                    0,0,$custo,0.00,0.00,1,NULL,0,'0.00',0.00,0.00,NULL,NULL,NULL,NULL,NULL,0.00,0,NULL,NULL,NULL,0,0.00,0.00,0,0.00,$tctx,$tctx,0.00,0.00, 
                    0.00,0,NULL,'',NULL,NULL,NULL,99,1,1,$custo,$custo,$custo,0.00,0.00,0,0.00,'0','999',0.00,0.00,0.00,0.00,0,0,0,'',0.00,0.00,0.00,NULL,NULL, 
                    NULL,NULL,0.00,0.00,0.00,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0.00,NULL,NULL,NULL,NULL,NULL, 
                    NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'\\',NULL,NULL,NULL,NULL,NULL)";
                    $exsql= pg_query($cono,$sql);
                    if ($etq=='G') {
                        $sql="insert into tetiqacumulada (i_tet_codigo_prod, n_tet_qtd_prod) values($codtx,$qtdtx)";
                        $exsql= pg_query($cond,$sql);
                    }
                    $linha = array();// linpa o array de $linha e volta para o for
				}
            }
        }        
	    if (file_exists($arquivo)) {
	        unlink($arquivo);
	    }
    }
                
}
if ($tipo=='CANCELAR') {
    $ide=$_POST["ide"];
    if ($ide<>'') {
        $sql="delete from tempahistorico where cidehistorico=$ide and cisahistorico = $ids";
        $exsql= pg_query($cono,$sql);
    }
}
if ($tipo=="CANCELAR NFE") {
    $sql="delete from tempahistorico where cisahistorico = $ids";
    $exsql= pg_query($cono,$sql);
    $sql="delete from tempahcontas where idhistorico = $idc ";
    $exsql= pg_query($cono,$sql);
    $sql="delete from tempasaidas where cidesaidas =$ids";
    $exsql= pg_query($cono,$sql);
    echo "<script>alert('Tranferencia Cancelada com sucesso');</script>";
    session_destroy();
    echo $voltalogin;
    exit;    
}
$sql="select sum(cvtothistorico) from tempahistorico where cisahistorico = $ids ";
$exsql= pg_query($cono,$sql);
$resulsql= pg_fetch_array($exsql);
$total=$resulsql['sum'];
$sql="select  count(cidehistorico) FROM tempahistorico where cisahistorico = $ids  ";
$exsql= pg_query($cono,$sql);
$resulsql= pg_fetch_array($exsql);
$itens=$resulsql['count'];
$sql="select  sum(csaihisotorico) FROM tempahistorico where cisahistorico = $ids  ";
$exsql= pg_query($cono,$sql);
$resulsql= pg_fetch_array($exsql);
$pcs=$resulsql['sum'];
if ($tipo=="FINALIZA NFE") {
	$etq=$_POST["etq"];
    if ($etq=='G') {
        $sql="delete from tetiqacumulada";
        $exsql= pg_query($cond,$sql);
		$sql="select cprohistorico,sum(csaihisotorico) from  tempahistorico where cisahistorico = $ids GROUP BY cprohistorico";
		$exsql= pg_query($cono,$sql);
		while ($row = pg_fetch_assoc( $exsql)) {
		   $codet=$row['cprohistorico'];
		   $qtde=$row['sum'];
		   $com="INSERT INTO tetiqacumulada(i_tet_codigo_prod, n_tet_qtd_prod)VALUES ($codet,$qtde)";
		   $excom= pg_query($cond,$com);
		}		       
    }
	if ($total > 0) {
		$sql="update tempasaidas set cmersaidas=$total ,cvbrsaidas=$total,ctotsaidas=$total,ccussaidas=$total 
		where cidesaidas =$ids";		
		$exsql= pg_query($cono,$sql);
		$sql="update tempahcontas set cvalorcreditohistorico = $total where idhistorico =$idc";
		$exsql= pg_query($cono,$sql);
		$sql="insert into ahcontas select *from tempahcontas where idhistorico =$idc  " ;
  		$exsql= pg_query($cono,$sql);
		if (!$exsql){
    		echo "<script>alert('Erro Ao Finalizar Nfe');</script>";
			$sql="delete from tempahcontas where idhistorico =$idc ";
			$exsql= pg_query($cono,$sql);
			$sql="delete from tempasaidas where cidesaidas =$ids";
			$exsql= pg_query($cono,$sql);
			$sql="delete from tempahistorico where cisahistorico = $ids";
			$exsql= pg_query($cono,$sql);
			session_destroy();
    		echo $voltalogin;
    		exit;
		}
		$sql="insert into asaidas select *from tempasaidas where cidesaidas =$ids " ;
		$exsql= pg_query($cono,$sql);
 		if (!$exsql){ 			
    		echo "<script>alert('Erro ao inserir a saida ');</script>";
			$sql="delete from tempahcontas where idhistorico =$idc ";
			$exsql= pg_query($cono,$sql);
			$sql="delete from tempasaidas where cidesaidas =$ids";
			$exsql= pg_query($cono,$sql);
			$sql="delete from tempahistorico where cisahistorico = $ids";
			$exsql= pg_query($cono,$sql);
			session_destroy();
    		echo $voltalogin;
    		exit;
		}
		$sql="insert into ahistorico select *from tempahistorico where cisahistorico = $ids" ;
		$exsql= pg_query($cono,$sql);
 		if (!$exsql){
    		echo "<script>alert('Erro ao inseriri a conta');</script>";
			$sql="delete from tempahcontas where idhistorico =$idc ";
			$exsql= pg_query($cono,$sql);
			$sql="delete from tempasaidas where cidesaidas =$ids";
			$exsql= pg_query($cono,$sql);
			$sql="delete from tempahistorico where cisahistorico = $ids";
			$exsql= pg_query($cono,$sql);
			session_destroy();
    		echo $voltalogin;
    		exit;
		}
		$sql="delete from tempahcontas where idhistorico =$idc ";
		$exsql= pg_query($cono,$sql);
		$sql="delete from tempasaidas where cidesaidas =$ids";
		$exsql= pg_query($cono,$sql);
		$sql="delete from tempahistorico where cisahistorico = $ids";
		$exsql= pg_query($cono,$sql);
		$sql="select cnotsaidas,cempresasaidas,cnpj_saidas,ctotsaidas from asaidas where cidesaidas='$ids'";
		$exsql= pg_query($cono,$sql);
    	$rssql=pg_fetch_array($exsql);
   		$cnpjsaidas= $rssql['cnpj_saidas'];    
    	$totalsaidas=$rssql ['ctotsaidas'];
    	$nfe=$rssql ['cnotsaidas'];
    	$emps=$rssql ['cempresasaidas'];
    	if($cnpjsaidas == '' ){
    	    session_destroy();
        	echo "<script>alert('Erro Avisar o Adriano Saida Gravada Erro 01');</script>";
        	echo $voltalogin;
        	exit;
    	}
    	$sql="insert into ahistorico2 select * from ahistorico where cisahistorico = '$ids'";
    	$exsql= pg_query($cono,$sql);
    	$sql = "SELECT COUNT(*) FROM ahistorico2 where  cisahistorico = '$ids'";
    	$exsql = pg_query($cono,$sql);
    	$rssql=pg_fetch_array($exsql);
    	$totalo=$rssql ['count'];
    	if ($origen <> $destino) {
        	$sql="select *from ahistorico2 where cisahistorico = '$ids'";
        	$exsql=pg_query($cono,$sql);
        	while($row = pg_fetch_assoc( $exsql)){
        	    $cidehistorico=$row['cidehistorico'];$cisahistorico=$row['cisahistorico'];
        	    $cipehistorico=$row['cipehistorico'];$ctiphistorico=$row['ctiphistorico'];$cmothistorico=$row['cmothistorico'];
        	    $cprohistorico=$row['cprohistorico'];$cemihistorico=$row['cemihistorico'];$cvcohistorico=$row['cvcohistorico'];
        	    $cvcuhistorico=$row['cvcuhistorico'];$cvbrhistorico=$row['cvbrhistorico'];$cvlqhistorico=$row['cvlqhistorico'];
        	    $cvdeshistorico=$row['cvdeshistorico'];$cvfrehistorico=$row['cvfrehistorico'];$cvachistorico=$row['cvachistorico'];
        	    $cvichistorico=$row['cvichistorico'];$cviphistorico=$row['cviphistorico'];$cvishistorico=$row['cvishistorico'];
        	    $cvfihistorico=$row['cvfihistorico'];$cvtothistorico=$row['cvtothistorico'];$cdeshistorico=$row['cdeshistorico'];
        	    $ccfohistorico=$row['ccfohistorico'];$csaihisotorico=$row['csaihisotorico'];$centhistorico=$row['centhistorico'];
        	    $cclihistorico=$row['cclihistorico'];$cicmhistorico=$row['cicmhistorico'];
        	    $cipihistorico=$row['cipihistorico'];$cisshistorico=$row['cisshistorico'];$cluchistorico=$row['cluchistorico'];
        	    $cpdehistorico=$row['cpdehistorico'];$cpfrhistorico=$row['cpfrhistorico'];$cpachistorico=$row['cpachistorico'];
        	    $cpfihistorico=$row['cpfihistorico'];$cpcohistorico=$row['cpcohistorico'];$cvohistorico=$row['cvohistorico'];
        	    $ctipphistorico=$row['ctipphistorico'];$cdtcahistorico=$row['cdtcahistorico'];$chocahistorico=$row['chocahistorico'];
        	    $cuscadhistorico=$row['cuscadhistorico'];$copcadhistorico=$row['copcadhistorico'];
        	    $copatuhistorico=$row['copatuhistorico'];
    			if ($copatuhistorico=='') {
    			    $copatuhistorico='NULL';
    			}
        	    $cusatuhistorico=$row['cusatuhistorico'];$cemphistorico=$row['cemphistorico'];$cvarealhistorico=$row['cvarealhistorico'];$cbaiesthistorico=$row['cbaiesthistorico'];
        	    $fot_historico=$row['fot_historico'];$dep_historico=$row['dep_historico'];$valor_foto=$row['valor_foto']; $perc_cus_ope=$row['perc_cus_ope'];
    			if ($perc_cus_ope=='') {
    			    $perc_cus_ope='NULL';
    			}
        	    $val_cus_ope=$row['val_cus_ope'];
    			if ($val_cus_ope=='') {
    			    $val_cus_ope='NULL';
    			}
    			$perc_imp_venda=$row['perc_imp_venda'];
    			if ($perc_imp_venda=='') {
    			    $perc_imp_venda='NULL';
    			}
    			$val_imp_venda=$row['val_imp_venda'];
    			if ($val_imp_venda=='') {
    			    $val_imp_venda='NULL';
    			}
    			$prec_mim_produto=$row['prec_mim_produto'];
        	    $i_ahi_codigo_cat=$row['i_ahi_codigo_cat'];
        		if ($i_ahi_codigo_cat=='') {
    			    $i_ahi_codigo_cat='NULL';
    			}    	    
        	    $i_ahi_codigo_sct=$row['i_ahi_codigo_sct'];
                if ($i_ahi_codigo_sct=='') {
    			    $i_ahi_codigo_sct='NULL';
    			} 
        	    $i_ahi_codigo_ven=$row['i_ahi_codigo_ven'];$n_ahi_valor_custo_venda=$row['n_ahi_valor_custo_venda'];
        	    $n_ahi_perc_custo_venda=$row['n_ahi_perc_custo_venda'];$n_ahi_perc_reducao=$row['n_ahi_perc_reducao'];
        	    $n_ahi_valor_icms_formacao_preco=$row['n_ahi_valor_icms_formacao_preco'];$n_ahi_perc_icms_formacao_preco=$row['n_ahi_perc_icms_formacao_preco'];
        	    $n_ahi_valor_lucro_zero=$row['n_ahi_valor_lucro_zero'];$n_ahi_valor_lucro=$row['n_ahi_valor_lucro'];$n_ahi_custo_medio=$row['n_ahi_custo_medio'];
        	    $n_ahi_preco_padrao=$row['n_ahi_preco_padrao']; $n_ahi_perc_fun_rural=$row['n_ahi_perc_fun_rural'];$n_ahi_valor_fun_rural=$row['n_ahi_valor_fun_rural'];
        	    $i_ahi_cultura_aplicar=$row['i_ahi_cultura_aplicar'];$i_ahi_receita_ide=$row['i_ahi_receita_ide'];
                 if ($i_ahi_receita_ide=='') {
    			    $i_ahi_receita_ide='NULL';
    			} 
        	    $n_ahi_base_icms=$row['n_ahi_base_icms'];
        	    $n_ahi_base_substituicao=$row['n_ahi_base_substituicao'];$n_ahi_icms_substituicao=$row['n_ahi_icms_substituicao'];$i_ahi_seq_ordem_item=$row['i_ahi_seq_ordem_item'];
        	    $s_ahi_cfop_contabil=$row['s_ahi_cfop_contabil'];$i_ahi_clas_fical=$row['i_ahi_clas_fical'];$s_ahi_sit_tributaria=$row['s_ahi_sit_tributaria'];$n_ahi_per_icms_subs=$row['n_ahi_per_icms_subs'];
        	    $n_ahi_per_conv_subst=$row['n_ahi_per_conv_subst'];
        	    $i_ahi_codigo_parceria=$row['i_ahi_codigo_parceria'];
    			if ($i_ahi_codigo_parceria=='') {
    			    $i_ahi_codigo_parceria='NULL';
    			}
    			$i_ahi_ide_historico_pedido=$row['i_ahi_ide_historico_pedido'];
    			if ($i_ahi_ide_historico_pedido=='') {
    			    $i_ahi_ide_historico_pedido='NULL';
    			}
        	    $n_ahi_qtd_entregue_pedido=$row['n_ahi_qtd_entregue_pedido'];$i_ahi_ide_ahi=$row['i_ahi_ide_ahi'];
        		if ($i_ahi_ide_ahi=='') {
    			    $i_ahi_ide_ahi='NULL';
    			}    	    
        	    $i_ahi_ide_romaneio=$row['i_ahi_ide_romaneio'];
    			if ($i_ahi_ide_romaneio=='') {
    			    $i_ahi_ide_romaneio='NULL';
    			}
    			$s_ahi_obs_item=$row['s_ahi_obs_item'];$i_ahi_cod_produto_cli_acl=$row['i_ahi_cod_produto_cli_acl'];
        	    $n_ahi_valor_desconto_nota=$row['n_ahi_valor_desconto_nota'];$n_ahi_perc_desconto_item=$row['n_ahi_perc_desconto_item'];$i_ahi_codigo_tcb=$row['i_ahi_codigo_tcb'];
        	    $n_ahi_perc_desc_nota=$row['n_ahi_perc_desc_nota'];$n_ahi_valor_tot_item=$row['n_ahi_valor_tot_item'];$n_ahi_valor_tot_nota=$row['n_ahi_valor_tot_nota'];$n_ahi_valor_desc_item=$row['n_ahi_valor_desc_item'];$n_ahi_valor_pis=$row['n_ahi_valor_pis'];
        	    $n_ahi_valor_cofins=$row['n_ahi_valor_cofins'];$i_ahi_codigo_aor=$row['i_ahi_codigo_aor'];
        		if ($i_ahi_codigo_aor=='') {
    			    $i_ahi_codigo_aor='NULL';
    			}
        	    $s_ahi_complemento_impresso=$row['s_ahi_complemento_impresso'];$s_ahi_garantia_prod=$row['s_ahi_garantia_prod'];
        	    $s_ahi_cst_ipi=$row['s_ahi_cst_ipi'];$s_ahi_cst_pis=$row['s_ahi_cst_pis'];$s_ahi_cst_cofins=$row['s_ahi_cst_cofins'];$n_ahi_base_cofins=$row['n_ahi_base_cofins'];$n_ahi_base_pis=$row['n_ahi_base_pis'];$n_ahi_base_ipi=$row['n_ahi_base_ipi'];$n_ahi_aliquota_pis=$row['n_ahi_aliquota_pis'];
        	    $n_ahi_aliquota_cofins=$row['n_ahi_aliquota_cofins'];$s_ahi_indicacao_movimento=$row['s_ahi_indicacao_movimento'];$n_ahi_aliquota_st=$row['n_ahi_aliquota_st'];$s_ahi_apuracao_ipi=$row['s_ahi_apuracao_ipi'];$s_ahi_cod_enquadramento_ipi=$row['s_ahi_cod_enquadramento_ipi'];$n_ahi_qtd_base_pis=$row['n_ahi_qtd_base_pis'];$n_ahi_aliq_pis_reais=$row['n_ahi_aliq_pis_reais'];
        	    $n_ahi_qtde_base_cofins=$row['n_ahi_qtde_base_cofins'];$n_ahi_aliq_cofins_reais=$row['n_ahi_aliq_cofins_reais'];$i_ahi_csosn=$row['i_ahi_csosn'];$i_ahi_numero_adicao=$row['i_ahi_numero_adicao'];$i_ahi_num_seq_item_adicao=$row['i_ahi_num_seq_item_adicao'];$s_ahi_cod_fabri_estrangeiro=$row['s_ahi_cod_fabri_estrangeiro'];$n_ahi_valor_desc_item_di=$row['n_ahi_valor_desc_item_di'];
        	    $n_ahi_valor_red_icms=$row['n_ahi_valor_red_icms'];$n_ahi_seguro_item=$row['n_ahi_seguro_item'];$s_ahi_totalizador_parcial=$row['s_ahi_totalizador_parcial'];
    			if ($s_ahi_totalizador_parcial=='') {
    			    $s_ahi_totalizador_parcial='NULL';
    			}
    			$n_ahi_perc_seguro=$row['n_ahi_perc_seguro'];
    			if ($n_ahi_perc_seguro=='') {
    			    $n_ahi_perc_seguro='NULL';
    			}
    			$s_ahi_sit_tributaria_xml=$row['s_ahi_sit_tributaria_xml'];$n_ahi_base_ii=$row['n_ahi_base_ii'];$n_ahi_valor_ii=$row['n_ahi_valor_ii'];$n_ahi_aliquota_ii=$row['n_ahi_aliquota_ii'];
        	    $n_ahi_base_icms_xml=$row['n_ahi_base_icms_xml'];
    			if ($n_ahi_base_icms_xml=='') {
    			    $n_ahi_base_icms_xml='NULL';
    			}
    			$n_ahi_aliq_icms_xml=$row['n_ahi_aliq_icms_xml'];
    			if ($n_ahi_aliq_icms_xml=='') {
    			    $n_ahi_aliq_icms_xml='NULL';
    			}
    			$n_ahi_valor_icms_xml=$row['n_ahi_valor_icms_xml'];
    			if ($n_ahi_valor_icms_xml=='') {
    			    $n_ahi_valor_icms_xml='NULL';
    			}
    			$n_ahi_base_st_xml=$row['n_ahi_base_st_xml'];
    			if ($n_ahi_base_st_xml=='') {
    			    $n_ahi_base_st_xml='NULL';
    			}
    			$n_ahi_valor_st_xml=$row['n_ahi_valor_st_xml'];
    			if ($n_ahi_valor_st_xml=='') {
    			    $n_ahi_valor_st_xml='NULL';
    			}
    			$n_ahi_valor_acrescimo_item=$row['n_ahi_valor_acrescimo_item'];
    			if ($n_ahi_valor_acrescimo_item=='') {
    			    $n_ahi_valor_acrescimo_item='NULL';
    			}
    			$s_ahi_cst_pis_xml=$row['s_ahi_cst_pis_xml'];$s_ahi_cst_cofins_xml=$row['s_ahi_cst_cofins_xml'];
    			$n_ahi_base_cofins_xml=$row['n_ahi_base_cofins_xml'];			
    			if ($n_ahi_base_cofins_xml=='') {
    			    $n_ahi_base_cofins_xml='NULL';
    			}
        	    $n_ahi_base_pis_xml=$row['n_ahi_base_pis_xml'];
    			if ($n_ahi_base_pis_xml=='') {
    			    $n_ahi_base_pis_xml='NULL';
    			}
    			$n_ahi_valor_pis_xml=$row['n_ahi_valor_pis_xml'];
    			if ($n_ahi_valor_pis_xml=='') {
    			    $n_ahi_valor_pis_xml='NULL';
    			}
    			$n_ahi_valor_cofins_xml=$row['n_ahi_valor_cofins_xml'];
    			if ($n_ahi_valor_cofins_xml=='') {
    			    $n_ahi_valor_cofins_xml='NULL';
    			}
    			$s_ahi_operacao=$row['s_ahi_operacao'];$i_ahi_codigo_cna=$row['i_ahi_codigo_cna'];
    			if ($i_ahi_codigo_cna=='') {
    			    $i_ahi_codigo_cna='NULL';
    			}
    			$s_ahi_codigo_lei116=$row['s_ahi_codigo_lei116'];$n_ahi_desp_aduaneiras=$row['n_ahi_desp_aduaneiras'];
    			if ($n_ahi_desp_aduaneiras=='') {
    			   $n_ahi_desp_aduaneiras='NULL' ;
    			}
    			$i_ahi_codigo_frem=$row['i_ahi_codigo_frem'];
        		if ($i_ahi_codigo_frem=='') {
    			   $i_ahi_codigo_frem='NULL' ;
    			}
    			$i_ahi_codigo_fpro=$row['i_ahi_codigo_fpro'];$n_ahi_tot_impostos=$row['n_ahi_tot_impostos'];
        	    $n_ahi_qtde_devolvido=$row['n_ahi_qtde_devolvido'];
    			if ($n_ahi_qtde_devolvido=='') {
    			    $n_ahi_qtde_devolvido='NULL';
    			}
    			$n_ahi_perc_red_icms_st=$row['n_ahi_perc_red_icms_st'];
    			if ($n_ahi_perc_red_icms_st=='') {
    			    $n_ahi_perc_red_icms_st='NULL';
    			}
    			$n_ahi_vlr_red_base_icms_st=$row['n_ahi_vlr_red_base_icms_st'];
    			if ($n_ahi_vlr_red_base_icms_st=='') {
    			    $n_ahi_vlr_red_base_icms_st='NULL';
    			}
    			$i_ahi_cod_devolucao=$row['i_ahi_cod_devolucao'];
    			if ($i_ahi_cod_devolucao=='') {
    			    $i_ahi_cod_devolucao='NULL';
    			}
    			$s_ahi_chave_fci=$row['s_ahi_chave_fci'];$n_ahi_mva_xml=$row['n_ahi_mva_xml'];
    			if ($n_ahi_mva_xml=='') {
    			    $n_ahi_mva_xml='NULL';
    			}
    			$i_ahi_ide_entregue=$row['i_ahi_ide_entregue'];
    			if ($i_ahi_ide_entregue=='') {
    			    $i_ahi_ide_entregue='NULL';
    			}
    			$i_ahi_uso_cosumo=$row['i_ahi_uso_cosumo'];
    			if ($i_ahi_uso_cosumo=='') {
    			    $i_ahi_uso_cosumo='NULL';
    			}			
        	    $s_ahi_pedido_compra_nfe=$row['s_ahi_pedido_compra_nfe'];$i_ahi_item_ped_compra_nfe=$row['i_ahi_item_ped_compra_nfe'];
    			if ($i_ahi_item_ped_compra_nfe=='') {
    			    $i_ahi_item_ped_compra_nfe='NULL';
    			}
    
    			$s_ahi_cest=$row['s_ahi_cest'];
    			$n_ahi_perc_ipi_devol=$row['n_ahi_perc_ipi_devol'];
    			if ($n_ahi_perc_ipi_devol=='') {
    			    $n_ahi_perc_ipi_devol='NULL';
    			}
    			$n_ahi_valor_ipi_devol=$row['n_ahi_valor_ipi_devol'];
    			if ($n_ahi_valor_ipi_devol=='') {
    			    $n_ahi_valor_ipi_devol='NULL';
    			}
    			$n_ahi_vl_desoneracao=$row['n_ahi_vl_desoneracao'];
    			if ($n_ahi_vl_desoneracao == '') {
    			    $n_ahi_vl_desoneracao = 'NULL';
    			}
    			$n_ahi_perc_desoneracao=$row['n_ahi_perc_desoneracao'];
    			if ($n_ahi_perc_desoneracao == '') {
    			    $n_ahi_perc_desoneracao = 'NULL';
    			}
    			$i_ahi_mod_desoneracao=$row['i_ahi_mod_desoneracao'];
    			if ($i_ahi_mod_desoneracao == '') {
    			    $i_ahi_mod_desoneracao = 'NULL';
    			}
        	    $com="INSERT INTO ahistorico2
            VALUES ('$cidehistorico',NULL,'$cisahistorico','$cipehistorico','$ctiphistorico','$cmothistorico','$cprohistorico','$cemihistorico','$cvcohistorico','$cvcuhistorico','$cvbrhistorico','$cvlqhistorico','$cvdeshistorico','$cvfrehistorico','$cvachistorico','$cvichistorico','$cviphistorico','$cvishistorico','$cvfihistorico','$cvtothistorico','$cdeshistorico','$ccfohistorico','$csaihisotorico','$centhistorico',NULL,'$cclihistorico','$cicmhistorico','$cipihistorico','$cisshistorico','$cluchistorico','$cpdehistorico','$cpfrhistorico','$cpachistorico','$cpfihistorico','$cpcohistorico','$cvohistorico','$ctipphistorico','$cdtcahistorico','$chocahistorico','$cuscadhistorico',
            '$copcadhistorico',NULL,NULL,$copatuhistorico,'$cusatuhistorico','$cemphistorico','$cvarealhistorico','$cbaiesthistorico','$fot_historico','$dep_historico','$valor_foto',$perc_cus_ope,$val_cus_ope,$perc_imp_venda,$val_imp_venda,'$prec_mim_produto',$i_ahi_codigo_cat,$i_ahi_codigo_sct,'$i_ahi_codigo_ven','$n_ahi_valor_custo_venda','$n_ahi_perc_custo_venda','$n_ahi_perc_reducao','$n_ahi_valor_icms_formacao_preco','$n_ahi_perc_icms_formacao_preco','$n_ahi_valor_lucro_zero','$n_ahi_valor_lucro','$n_ahi_custo_medio','$n_ahi_preco_padrao','$n_ahi_perc_fun_rural','$n_ahi_valor_fun_rural','$i_ahi_cultura_aplicar',$i_ahi_receita_ide,'$n_ahi_base_icms',
            '$n_ahi_base_substituicao','$n_ahi_icms_substituicao','$i_ahi_seq_ordem_item','$s_ahi_cfop_contabil','$i_ahi_clas_fical','$s_ahi_sit_tributaria','$n_ahi_per_icms_subs','$n_ahi_per_conv_subst',NULL,NULL,NULL,$i_ahi_codigo_parceria,$i_ahi_ide_historico_pedido,'$n_ahi_qtd_entregue_pedido',$i_ahi_ide_ahi,NULL,$i_ahi_ide_romaneio,'$s_ahi_obs_item','$i_ahi_cod_produto_cli_acl','$n_ahi_valor_desconto_nota','$n_ahi_perc_desconto_item','$i_ahi_codigo_tcb','$n_ahi_perc_desc_nota','$n_ahi_valor_tot_item','$n_ahi_valor_tot_nota','$n_ahi_valor_desc_item','$n_ahi_valor_pis','$n_ahi_valor_cofins',$i_ahi_codigo_aor,'$s_ahi_complemento_impresso','$s_ahi_garantia_prod',NULL,NULL,NULL,'$s_ahi_cst_ipi',
            '$s_ahi_cst_pis','$s_ahi_cst_cofins','$n_ahi_base_cofins','$n_ahi_base_pis','$n_ahi_base_ipi','$n_ahi_aliquota_pis','$n_ahi_aliquota_cofins','$s_ahi_indicacao_movimento','$n_ahi_aliquota_st','$s_ahi_apuracao_ipi','$s_ahi_cod_enquadramento_ipi','$n_ahi_qtd_base_pis','$n_ahi_aliq_pis_reais','$n_ahi_qtde_base_cofins','$n_ahi_aliq_cofins_reais','$i_ahi_csosn','$i_ahi_numero_adicao','$i_ahi_num_seq_item_adicao','$s_ahi_cod_fabri_estrangeiro','$n_ahi_valor_desc_item_di','$n_ahi_valor_red_icms','$n_ahi_seguro_item',$s_ahi_totalizador_parcial,$n_ahi_perc_seguro,NULL,'$s_ahi_sit_tributaria_xml','$n_ahi_base_ii','$n_ahi_valor_ii','$n_ahi_aliquota_ii',$n_ahi_base_icms_xml,$n_ahi_aliq_icms_xml,$n_ahi_valor_icms_xml,
            $n_ahi_base_st_xml,$n_ahi_valor_st_xml,$n_ahi_valor_acrescimo_item,'$s_ahi_cst_pis_xml','$s_ahi_cst_cofins_xml',$n_ahi_base_cofins_xml,$n_ahi_base_pis_xml,$n_ahi_valor_pis_xml,$n_ahi_valor_cofins_xml,'$s_ahi_operacao',$i_ahi_codigo_cna,'$s_ahi_codigo_lei116',$n_ahi_desp_aduaneiras,$i_ahi_codigo_frem,'$i_ahi_codigo_fpro','$n_ahi_tot_impostos',$n_ahi_qtde_devolvido,$n_ahi_perc_red_icms_st,$n_ahi_vlr_red_base_icms_st,$i_ahi_cod_devolucao,'$s_ahi_chave_fci',$n_ahi_mva_xml,$i_ahi_ide_entregue,$i_ahi_uso_cosumo,NULL,NULL,NULL,'$s_ahi_pedido_compra_nfe',$i_ahi_item_ped_compra_nfe,'$s_ahi_cest',$n_ahi_perc_ipi_devol,
            $n_ahi_valor_ipi_devol,$n_ahi_vl_desoneracao,$n_ahi_perc_desoneracao,$i_ahi_mod_desoneracao)";
            $excom= pg_query($cond,$com);        
        	}
    	}
    	$sql= "select ccnpjempresa from tempresa where ccodempresa = '$emps'";
    	$exsql= pg_query($cono,$sql);
    	$rssql= pg_fetch_array($exsql);
    	$cnpj= $rssql ['ccnpjempresa'];
    	$sql = "SELECT COUNT(*) FROM ahistorico2 where  cisahistorico = '$ids'";
    	$exsql = pg_query($cond,$sql);
    	$rssql=pg_fetch_array($exsql);
    	$totald=$rssql ['count'];    	
    	if ($totalo <> $totald ) {
    	    echo $sql.'<br>';
			echo $totald.'<br>';
			session_destroy();
			echo "<script>alert('Erro Na Sincroçizançao '.$totalo.'--'.$totald);</script>";
    	    exit;
    	}
    	$sql="select ccodfornecedor from afornecedor where ccgcfornecedor like '%$cnpj' ";
    	$exsql = pg_query($cond,$sql);
    	$rssql = pg_fetch_array($exsql);
    	$fornecedor = $rssql['ccodfornecedor'];
    	if ($fornecedor == ''){
    	    session_destroy();
    	    echo"<script>alert('Fornecedor Não Cadastrado Avisar o Adriano');</script>";
    	    exit;
    	}
    	$sql= "select MAX(ccodempresa) as ccodempresa from tempresa where ccnpjempresa like'%$cnpjsaidas%' ";
    	$exsql= pg_query($cond,$sql);
    	$rssql= pg_fetch_array($exsql);
    	$empnfe=$rssql['ccodempresa'];
    	if ($empnfe == ''){
    	    session_destroy();
    	    echo "<script>alert('Empresa destino não confere com o cliente da Nfe favor verefique');</script>";
    	    echo $voltalogin;
    	    exit;
    	    
    	}
    	$sql= "select cnfientradas from aentradas where cnfientradas = '$nfe' and cforentradas = '$fornecedor' ";
    	$exsql= pg_query($cond,$sql);
    	$rssql= pg_fetch_array($exsql);
    	if ( $rssql >= '1'){
    	    session_destroy();
    	    echo "<script>alert('Este Numero de Nfe: $nfe  Já existe para esse fornecedor avisar o Adriano');</script>";
    	    echo "$voltalogin";    	    
    	}
    	$sql="select nextval('seque_aentradas')";
    	$exsql= pg_query($cond,$sql);
    	$resulsql= pg_fetch_array($exsql);
    	$id=$resulsql['nextval'];
    	pg_query($cond,"select logar('COPIA',1,0)");
        $com="INSERT INTO aentradas(
            csidentradas, ctipentradas, cforentradas, cemientradas, cdenentradas,
            cnfientradas, cvalentradas, cvprentradas, cicmentradas, cbasentradas,
            cipientradas, csubentradas, cfreentradas, cfinentradas, caceentradas,
            clucentradas, cfopentradas, cdesentradas, cententradas, ctraentradas,
            ctfreentradas, cqtventradas, cespentradas, cdtcaentradas, chocaentradas,
            cdtatentradas, choatentradas, copeatentradas, copecaentrdada,
            cusucaentrada, cusuatentrada, cempentrada, i_aen_serie_nf, s_aen_obs,
            n_aen_base_substituicao, n_aen_base_isenta, s_aen_cfop_contabil,
            n_margem_convenio_subs, i_aen_ide_pedido, i_aen_codigo_tna, n_aen_valor_pis,
            n_aen_valor_cofins, n_aen_valor_pis_st, n_aen_valor_cofins_st,
            s_aen_protocolo_nfe, s_aen_chave_nfe, n_aen_seguro, s_aen_modelo_nota,
            i_aen_ind_frete, i_aen_exclui_sped, n_aen_base_st_xml, n_aen_valor_st_xml,
            n_aen_custo_operacional, n_aen_tot_iss, i_aen_ide_saida_trans,
            i_aen_codigo_afa)
            VALUES ($id,'V','$fornecedor','$dia','$dia','$nfe','$totalsaidas','$totalsaidas','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','1.152','0.00','0.00',NULL,'PAGO','0','','$dia','$time',null,null,'0',null,'$login','','$empnfe','01','','0.00','0.00','','0.00',null,'2','0.00','0.00','0.00','0.00','','','0.00','','0','0','0.00','0.00','0.00','0.00','$ids',null)";
            $excom=pg_query($cond,$com);
	}
	$sql = "select csidentradas from aentradas where cemientradas = '$dia' and cnfientradas = '$nfe' and cforentradas =  '$fornecedor' and cempentrada = '$empnfe'";
	$exsql=pg_query($cond,$sql );
	$rssql=pg_fetch_array($exsql);
	$identrada = $rssql ['csidentradas'];
	if ($identrada == ''){
	    pg_query($cond,'delete from ahistorico2 where  cisahistorico = $ids');	    
	    echo "<script>alert('Nota não foi incluida automaticamente');</script>";
	    echo '<br><br>';
	    echo '<br><br>';
	    echo "<span style='color:red;'> Confira os dados coletados </span>";
	    echo '<br><br>';
	    echo "'$empnfe', '$fornecedor', Emisão: '$dia', Numero Da Nfe: '$nfe', Empresa Da Nfe: '$empnfe'";
	    session_destroy();
	    exit;
	}
	pg_query($cond,"update ahistorico2 set centhistorico = csaihisotorico where cprohistorico = cprohistorico and  cisahistorico = '$ids'");
	pg_query($cond,"update ahistorico2 set cienhistorico=  '$identrada' where cisahistorico = '$ids'");
	pg_query($cond,"update ahistorico2 set csaihisotorico = '0' where cienhistorico=  '$identrada'");
	pg_query($cond,"update ahistorico2 set ctiphistorico = 'E' where cienhistorico=  '$identrada'");
	pg_query($cond,"update ahistorico2 set cisahistorico = '0' where cienhistorico=  '$identrada'");
	pg_query($cond,"update ahistorico2 set cidehistorico = nextval('seque_ahistorico') where cienhistorico=  '$identrada' ");
	pg_query($cond,"update ahistorico2 set cmothistorico= 'TRANFERENCIA  FEITA AUTOMATICAMENTE' where cienhistorico=  '$identrada' ");
	pg_query($cond,"update ahistorico2 set cclihistorico = '0' where  cienhistorico=  '$identrada'");
	pg_query($cond,"update ahistorico2 set cipehistorico = '0' where cienhistorico=  '$identrada' ");
	pg_query($cond,"update ahistorico2 set ccfohistorico = '1.152' where cienhistorico=  '$identrada' ");
	pg_query($cond,"update ahistorico2 set cemphistorico = '$empnfe' where cienhistorico=  '$identrada'");
	pg_query($cond,"update ahistorico2 set cforhistorico= '$fornecedor' where cienhistorico=  '$identrada' ");	
	pg_query($cond,"insert into ahistorico select * from ahistorico2 where cienhistorico=  '$identrada' ");
	pg_query($cond,"delete from ahistorico2 where cienhistorico=  '$identrada'");
	if ($origen == 'V' or $origen == 'L' or $destino == 'V' or $destino == 'L') {
	    $sql="INSERT INTO aeduplicatas(
        cideduplicata, cienduplicata, cparduplicata, cforduplicata, ctipduplicata,
        cnumduplicata, cvalduplicata, cvenduplicata, cjurduplicata, cdesduplicata,
        cdpaduplicata, cvapduplicata, cfladuplicata, cbeduplicata, cdtcadduplicata,
        chocadduplicata, cuscadduplicata, copcadduplicata, cdtatuduplicata,
        choatuduplicata, cusatuduplicata, copatuduplicata, cempduplicata,
        c_aceite_duplicata, s_aed_observacoes, i_aed_ide_ped, i_aed_numero_empenho)
        VALUES (nextval('seque_aeduplicatas'),'$identrada', '1', '$fornecedor', 'DUPLICATA',
        '1', '$totalsaidas','$dia','0.00','0.00',NULL,'0.00','','NAO','$dia','$time','$login','1',NULL,
        NULL,'','0','$empnfe','','','0','0')";
	    $exsql= pg_query($cond,$sql);
	}
	echo "<script>alert('Lancamento Concluido com Suceso ');</script>";	
	$sql="select cprohistorico,(sum(centhistorico)),cdesproduto from ahistorico iner join aprodutos on cprohistorico=ccodproduto where cienhistorico= '$identrada' GROUP BY cprohistorico,cdesproduto  
	order by cprohistorico";
	$exsql=pg_query($cond,$sql );
	echo "<table border='2' width='100%' bgcolor=#E1F5A9 >";	
	echo "<tr><td><font color=\"#0404B4\"><strong>Empresa de Origem</strong></font></td>"."<td><font color=\"#0404B4\"><strong>Para:</strong></font></td>"."</tr>";
	echo "<td><span style='color:#0101DF;'>".$emp.'-'.$loja."</span></td>\n";
	echo "<td><span style='color:#0101DF;'>".$fant."</span></td>\n";
	echo "</tr>";
	echo "</table>";
	echo "<table border='2' width='50%' bgcolor=#E1F5A9 >";
	$diaajustado=implode("/",array_reverse(explode("-",$dia)));	
	echo "<tr><td><font color=\"#0404B4\"><strong>Data:$diaajustado</strong></font></td>"."<td><font color=\"#0404B4\"><strong>Hora:$time</strong></font></td>".
	"<td><font color=\"#0404B4\"><strong>Operdor:$codlogin-$login</strong></font></td>"."<td><font color=\"#0404B4\"><strong>Nfe:$nfe</strong></font></td>"."</tr>";
	echo "</table>".'<br><br>';
	echo "<table border='2' width='100%' bgcolor=#E1F5A9 >";
	echo "<tr><td>Código</td>"."<td>Descrição</td>"."<td>Quantidade</td>"."</tr>";
	while($row = pg_fetch_assoc( $exsql)){
		$produto=$row['cprohistorico'];
		$descricao=$row['cdesproduto'];
		$qtd=$row['sum'];
        echo "<td><span style='color:#0101DF;'>".$produto."</span></td>\n";
        echo "<td><span style='color:#0101DF;'>".$descricao."</span></td>\n";
        echo "<td><span style='color:#0101DF;'>".$qtd."</span></td>\n";            
        echo "</tr>\n";
        
	}
	session_destroy();
	echo "</table>";
	$qtdfinal=number_format($pcs,2,",",".");
	echo "<table border='2' width='50%' bgcolor=#E1F5A9 >";
	echo "<tr><td><font color=\"#0404B4\"><strong>Toal de Peças/Pares:$qtdfinal</strong></font></td>"."</tr>";	
	echo "</table>".'<br><br>';
	?>
<!DOCTYPE html>
<html>
<head>    
<link rel="stylesheet" href="css/style.css"></link>
<center><form name = "form1" method= "post" action= "lojatransferencia.html"></center>
<br><br>
<center>
<a title='Imprimir' href='javascript:window.print()'><img src="img/impressora.jpg" alt="10" heigth ="40px" width="40px"  border="0" /></a>
</center>
<br><br>
<center><input class="btn btn-red"  type="submit" name="inativar" value="Voltar"></center>
<br><br>
</form>
</head>
</html>
<?php
	exit;
}

$sql="select ccodproduto,cdesproduto,cpcuproduto,cdepproduto,csitproduto from aprodutos where ccodproduto = '$cod' and csitproduto = '0'";
$exsql= pg_query($cono,$sql);
$resulsql= pg_fetch_array($exsql);
$codnovo=$resulsql['ccodproduto'];
$desc=$resulsql['cdesproduto'];
$custo=$resulsql['cpcuproduto'];
$dep=$resulsql['cdepproduto'];
if ($dep=='') {
    $dep='0';
}
if ($desc == null and $cod <> null){
	$sql="select ccodproduto,cdesproduto,cpcuproduto,cdepproduto,csitproduto from aprodutos where cantpoduto = '$cod' and csitproduto = '0'";
	$exsql= pg_query($cono,$sql);
	$resulsql= pg_fetch_array($exsql);
	$cod=$resulsql['ccodproduto'];
	$desc=$resulsql['cdesproduto'];
	$custo=$resulsql['cpcuproduto'];
	$dep=$resulsql['cdepproduto'];
	if ($dep=='') {
	    $dep='0';
	}
}
if ($desc=='') {
    echo "<table border='1'   cellspacing='10' width='100%' bgcolor=#8EF787 >";
    echo $logo."<td><font color=\"black\"><strong>Empresa de origem:$emp-$loja</strong></font></td>"."<td><font color=\"black\"><strong>Usuário:$login</strong></font></td>"."<td><font color=\"black\"><strong><HTML><h4> <div name='relogio' id='relogio'></div></h4></HTML></strong></font></td>"."</tr>";
    echo "</tr>\n";
    echo "<table border='5' width='100%' bgcolor=#8EF787 >";
    echo "<tr><td><font color=\"black\"><strong>Cód. Cliente</strong></font></td>"."<td><font color=\"black\"><strong>Nome:</strong></font></td>"."</tr>";
    echo "<td>".$cliente."</td>\n";
    echo "<td>".$fant."</td>\n";
    echo "</tr>\n";
    echo "<table border='10' width='100%' bgcolor=#F2F2F2>";
    echo "<tr><td><font color=\"black\"><strong>Id</strong></font></td>"."<td><font color=\"black\"><strong>Código</strong></font></td>"."<td><font color=\"black\"><strong>Descrição</strong></font></td>"."<td><font color=\"black\"><strong>Qtd.</strong></font></td>"."<td><font color=\"black\"><strong>R$ Custo</strong></font></td>"."<td><font color=\"black\"><strong>R$ Total</strong></font></td>"."</tr>";
    $sql="select cidehistorico,cprohistorico,csaihisotorico,cvlqhistorico,cdeshistorico,(csaihisotorico*cvlqhistorico) as total from tempahistorico where cisahistorico = $ids order by
    cidehistorico ";
    $exsql= pg_query($cono,$sql);
    $cor1='#F5DEB3';
    $cor2='#DCDCDC';
    $ini=1;
    while($row=pg_fetch_array($exsql)){
    	if ($ini%2 == 0){
    		$cor=$cor1;
    	} else {
    		$cor=$cor2;
    	}
        echo "<td bgcolor=$cor>".$row['cidehistorico']."</td>\n";
        echo "<td bgcolor=$cor>".$row['cprohistorico']."</td>\n";
        echo "<td bgcolor=$cor>".$row['cdeshistorico']."</td>\n";
        echo "<td bgcolor=$cor>".$row['csaihisotorico']."</td>\n";
        $custoh=$row['cvlqhistorico'];
        $custoh=number_format($custoh,2,",",".");
        echo "<td bgcolor=$cor>".$custoh."</td>\n";
        $tcustoh=$row['total'];
        $tcustoh=number_format($tcustoh,2,",",".");
        echo "<td bgcolor=$cor>".$tcustoh."</td>\n";
        echo "</tr>\n";
        $ini ++;

    }
    echo "<table border='0' width='100%' bgcolor=#00FFFF >";
   
} else { 
    if ($custo == '') {
        $custo = '0.01';
    }
    
    
    $tc=$qtd*$custo;
    $sql="INSERT INTO tempahistorico(
            cidehistorico, cienhistorico, cisahistorico, cipehistorico, ctiphistorico, 
            cmothistorico, cprohistorico, cemihistorico, cvcohistorico, cvcuhistorico, 
            cvbrhistorico, cvlqhistorico, cvdeshistorico, cvfrehistorico, 
            cvachistorico, cvichistorico, cviphistorico, cvishistorico, cvfihistorico, 
            cvtothistorico, cdeshistorico, ccfohistorico, csaihisotorico, 
            centhistorico, cforhistorico, cclihistorico, cicmhistorico, cipihistorico, 
            cisshistorico, cluchistorico, cpdehistorico, cpfrhistorico, cpachistorico, 
            cpfihistorico, cpcohistorico, cvohistorico, ctipphistorico, cdtcahistorico, 
            chocahistorico, cuscadhistorico, copcadhistorico, cdtatuhistorico, 
            choatuhistorico, copatuhistorico, cusatuhistorico, cemphistorico, 
            cvarealhistorico, cbaiesthistorico, fot_historico, dep_historico, 
            valor_foto, perc_cus_ope, val_cus_ope, perc_imp_venda, val_imp_venda, 
            prec_mim_produto, i_ahi_codigo_cat, i_ahi_codigo_sct, i_ahi_codigo_ven, 
            n_ahi_valor_custo_venda, n_ahi_perc_custo_venda, n_ahi_perc_reducao, 
            n_ahi_valor_icms_formacao_preco, n_ahi_perc_icms_formacao_preco, 
            n_ahi_valor_lucro_zero, n_ahi_valor_lucro, n_ahi_custo_medio, 
            n_ahi_preco_padrao, n_ahi_perc_fun_rural, n_ahi_valor_fun_rural, 
            i_ahi_cultura_aplicar, i_ahi_receita_ide, n_ahi_base_icms, n_ahi_base_substituicao, 
            n_ahi_icms_substituicao, i_ahi_seq_ordem_item, s_ahi_cfop_contabil, 
            i_ahi_clas_fical, s_ahi_sit_tributaria, n_ahi_per_icms_subs, 
            n_ahi_per_conv_subst, i_ahi_codigo_fprc, i_ahi_codigo_feve, i_ahi_ide_pedido, 
            i_ahi_codigo_parceria, i_ahi_ide_historico_pedido, n_ahi_qtd_entregue_pedido, 
            i_ahi_ide_ahi, i_ahi_saldo_produto, i_ahi_ide_romaneio, s_ahi_obs_item, 
            i_ahi_cod_produto_cli_acl, n_ahi_valor_desconto_nota, n_ahi_perc_desconto_item, 
            i_ahi_codigo_tcb, n_ahi_perc_desc_nota, n_ahi_valor_tot_item, 
            n_ahi_valor_tot_nota, n_ahi_valor_desc_item, n_ahi_valor_pis, 
            n_ahi_valor_cofins, i_ahi_codigo_aor, s_ahi_complemento_impresso, 
            s_ahi_garantia_prod, i_ahi_codigo_aor_indice, i_ahi_codigo_ahi_indice, 
            i_ahi_codigo_orp, s_ahi_cst_ipi, s_ahi_cst_pis, s_ahi_cst_cofins, 
            n_ahi_base_cofins, n_ahi_base_pis, n_ahi_base_ipi, n_ahi_aliquota_pis, 
            n_ahi_aliquota_cofins, s_ahi_indicacao_movimento, n_ahi_aliquota_st, 
            s_ahi_apuracao_ipi, s_ahi_cod_enquadramento_ipi, n_ahi_qtd_base_pis, 
            n_ahi_aliq_pis_reais, n_ahi_qtde_base_cofins, n_ahi_aliq_cofins_reais, 
            i_ahi_csosn, i_ahi_numero_adicao, i_ahi_num_seq_item_adicao, 
            s_ahi_cod_fabri_estrangeiro, n_ahi_valor_desc_item_di, n_ahi_valor_red_icms, 
            n_ahi_seguro_item, s_ahi_totalizador_parcial, n_ahi_perc_seguro, 
            i_ahi_csosn_xml, s_ahi_sit_tributaria_xml, n_ahi_base_ii, n_ahi_valor_ii, 
            n_ahi_aliquota_ii, n_ahi_base_icms_xml, n_ahi_aliq_icms_xml, 
            n_ahi_valor_icms_xml, n_ahi_base_st_xml, n_ahi_valor_st_xml, 
            n_ahi_valor_acrescimo_item, s_ahi_cst_pis_xml, s_ahi_cst_cofins_xml, 
            n_ahi_base_cofins_xml, n_ahi_base_pis_xml, n_ahi_valor_pis_xml, 
            n_ahi_valor_cofins_xml, s_ahi_operacao, i_ahi_codigo_cna, s_ahi_codigo_lei116, 
            n_ahi_desp_aduaneiras, i_ahi_codigo_frem, i_ahi_codigo_fpro, 
            n_ahi_tot_impostos, n_ahi_qtde_devolvido, n_ahi_perc_red_icms_st, 
            n_ahi_vlr_red_base_icms_st, i_ahi_cod_devolucao, s_ahi_chave_fci, 
            n_ahi_mva_xml, i_ahi_ide_entregue, i_ahi_uso_cosumo, n_ahi_perc_diferimento, 
            s_ahi_codigo_ser_mun, i_ahi_valor_imposto_diferido, s_ahi_pedido_compra_nfe, 
            i_ahi_item_ped_compra_nfe, s_ahi_cest, n_ahi_perc_ipi_devol, 
            n_ahi_valor_ipi_devol)
            VALUES (nextval('seque_ahistorico'),NULL,$ids,0,'S',NULL,$cod,'$dia',$custo,$custo,$custo,$custo,0.00,0.00,0.00,0.00,0.00,0.00,0.00, 
            $tc,'$desc',$cfop,$qtd,0.00,NULL,$cliente,17.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0,'$dia','$time','$login',$codlogin,NULL, 
            NULL,NULL,NULL,$emp,$custo,0,0,$dep,0.00,NULL,NULL,NULL,NULL,0.00,0,0,1,$custo,0.00,0.00,0.000,0.00,0.00,0.000,0.000,0.00,0.00,0.00, 
            0,0,$custo,0.00,0.00,1,NULL,0,'0.00',0.00,0.00,NULL,NULL,NULL,NULL,NULL,0.00,0,NULL,NULL,NULL,0,0.00,0.00,0,0.00,$tc,$tc,0.00,0.00, 
            0.00,0,NULL,'',NULL,NULL,NULL,99,1,1,$custo,$custo,$custo,0.00,0.00,0,0.00,'0','999',0.00,0.00,0.00,0.00,0,0,0,'',0.00,0.00,0.00,NULL,NULL, 
            NULL,NULL,0.00,0.00,0.00,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0.00,NULL,NULL,NULL,NULL,NULL, 
            NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'\\',NULL,NULL)";
            $exsql= pg_query($cono,$sql);        
            header("Location: http://192.168.13.2:8080/desenvolver/lojatransferencia2.php");    
    echo "<table border='0' width='100%' bgcolor=#E3F6CE >";
}
?>
<!DOCTYPE html>
<html>
<center><form name = "form1" method= "post" action= "lojatransferencia2.php" enctype="multipart/form-data">
<link rel="stylesheet" href="css/style.css"></link>
<center><form name = "form1" method= "post" action= "">
<br><br> 
<table width="100%" cellspacing="1" cellpadding="3" border="3" bgcolor="#8EF787">
<tr>
<td><font color="Black" face="arial, verdana, helvetica">
<center>
Código:
<input name= "cod" type= "number" id="cod" min="1" autofocus>
Quantidade:
<input name= "qtd" type= "number" id="qtd" value="1" min="1" > </P> 
<?php
if ($total > 0) {
    $tt=$total;
    $tt=number_format($tt,2,",",".");
    $pcs=number_format($pcs,2,",",".");
    echo "<font color=\"black\" size=4><strong>"."Total De Itens:".number_format($itens,2,",",".")."    Total de Pçs/Pares:".$pcs."</strong></font>".'<br>';
    echo "<font color=\"black\" size=4><strong>"."Total Do Romaneio:".$tt."</strong></font>";
    
}
if ($loja=='Vanessa') {
    $img="at.jpg";
}
?>
</center>
</font></td>
</tr>
<tr>
<td bgcolor="8EF787">
<font face="arial, verdana, helvetica">
</font>
<center>
<br>
<input name= "tipo" class="btn btn-green" type="submit" value="CADASTRAR"   />
<input name= "tipo"  class="btn btn-red" type="reset" value="Limpar" />.'</p>'
<br>
<script language="JavaScript1.2">
<!--
var ns6=document.getElementById&&!document.all?1:0
var head="display:''"
var folder=''
function expandit(curobj){
folder=ns6?curobj.nextSibling.nextSibling.style:document.all[curobj.sourceIndex+1].style
if (folder.display=="none")
folder.display=""
else
folder.display="none"
}
//-->
</script>
<input type="radio" name="tipo" value="E" onClick="expandit(this)">Exclusão de Item
<span style="display:none" style=&{head};>
id:
<input name= "ide" type= "number" id="ide" min="1" value="1" >
<input name= "tipo" class="btn btn-red" type="submit" value="CANCELAR" />
</span>
<input type="radio" name="tipo" value="E" onClick="expandit(this)">Carregar Txt
<span style="display:none" style=&{head};>
<br><br>
<INPUT type="radio" name="etq" value="G">Gerar Etiquetas 
<br><br>
<center><input type="file" name="Arquivo" id="Arquivo" accept=".txt"><br></center>
<br><br>
<input name= "tipo" class="btn btn-grenn" type="submit" value="CARREGAR" />
</span>
(<a href="http://zxing.appspot.com/scan?ret=http://192.168.13.2:8080/desenvolver/lojatransferencia2.php?codigo={CODE}">Escanear Celular</a>):
<br><br>
</center>	
</tr>
</table>
<br><br>
<table width="100%" cellspacing="1" cellpadding="3" border="3" bgcolor="#8EF787">
<tr>
<td><font color="Black" face="arial, verdana, helvetica">   
<?php if($total > 0): ?>
<center>
<input name= "tipo" class="btn btn-green" Onsubmit="return this.nomedobotao.disabled=true" type="submit" value="FINALIZA NFE"  />	

<?php endif; ?>
<input name= "tipo" class="btn btn-red" type="submit" value="CANCELAR NFE" />
<INPUT type="radio" name="etq" value="G">Gerar Etiquetas 
</center>
</form>
</tr>
</table>
</form>
</html>
<br><br>