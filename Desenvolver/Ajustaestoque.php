<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
$voltalogin="<script>window.location='http://192.168.13.2:8080/Desenvolver/Ajustaestoque.html';</script>";
date_default_timezone_set('America/Sao_Paulo');
$time=date('H:i:s');
$dia= date('d-m-Y');
//$data= date ('Y-m-d');
$data = '2021-12-31';
set_time_limit(0);
$empl=$_POST["empl"];
if ($empl == null){
	echo "<script>alert('Emprese A Ser Manipulada Inválida');</script>";
    echo $voltalogin;
    exit;
}
$base=$_POST["base"];
if ($base==null) {    
    echo "<script>alert('Base Inválida');</script>";
    echo $voltalogin;
    exit;
}
if ($base == 'C'){
	if(!@($conl=pg_connect ("host = 192.168.16.2 dbname=troll port=5430 user=postgres password=ky$14gr@"))){
	    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados Local de Caçador Data:$dia  Hora:$time </font></b></p>";
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
	if(!@($cong=pg_connect ("host =192.168.16.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@"))){
	    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados Geral de Caçador Data:$dia  Hora:$time </font></b></p>";
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
}
if ($base == 'V'){
	if(!@($conl=pg_connect ("host=192.168.9.10 dbname=troll port=5430 user=postgres password=ky$14gr@"))){
	    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados Local de Videira Data:$dia  Hora:$time </font></b></p>";
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
	if(!@($cong=pg_connect ("host=192.168.16.190 dbname=troll_videira port=5430 user=postgres password=ky$14gr@"))){
	    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados Geral de Videira Data:$dia  Hora:$time </font></b></p>";
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
}
if ($base == 'L'){
	if(!@($conl=pg_connect ("host=192.168.11.2 dbname=troll port=5430 user=postgres password=ky$14gr@"))){
	    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados Local de Lages Data:$dia  Hora:$time </font></b></p>";
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
	if(!@($cong=pg_connect ("host=192.168.16.190 dbname=troll_lages port=5430 user=postgres password=ky$14gr@"))){
	    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados Geral de Lages Data:$dia  Hora:$time </font></b></p>";
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
}
if ($base == 'J'){
	if(!@($conl=pg_connect ("host=192.168.16.77 dbname=troll port=5430 user=postgres password=ky$14gr@"))){
	    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados Local de Joinville Data:$dia  Hora:$time </font></b></p>";
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
	if(!@($cong=pg_connect ("host=192.168.16.190 dbname=troll_joinville port=5430 user=postgres password=ky$14gr@"))){
	    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados Geral de Joinville Data:$dia  Hora:$time </font></b></p>";
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
}
$sql="select ccodempresa from tempresa where ccodempresa = '$empl'";
$exsql= pg_query($conl,$sql);
$resulsql= pg_fetch_array($exsql);
$code=$resulsql['ccodempresa'];
if ($code == null){
	echo "<script>alert('A Empresa Digitada Não Corresponde a Nenhuma Empresa do Sistema');</script>";
    echo $voltalogin;
    exit;	
}
if ($empl%2 == 0) {
	echo "<script>alert('A Empresa Selecionada Não Pode Ser Manipuláda');</script>";
    echo $voltalogin;
    exit;
}
$empg=$empl+1;
$empg=$empl.','.$empg;
$sql="select cprohistorico,sum(centhistorico-csaihisotorico) as estoque from ahistorico where cemphistorico in 
     ($empg) and cemihistorico <= '2021-12-31'
	 group by cprohistorico
	 having sum(centhistorico-csaihisotorico) >= 0 	
	 order by cprohistorico ";
$exsql=pg_query($cong,$sql);
while($row = pg_fetch_assoc($exsql)){
	$produto=$row['cprohistorico'];
	$qtdg=$row['estoque'];
	$com="select ccodproduto,cdesproduto,sum(centhistorico-csaihisotorico) as estoque from ahistorico
	inner join aprodutos on ccodproduto=cprohistorico
	where cemphistorico in ($empl) and cprohistorico = $produto and cemihistorico <= '2021-12-31'
	group by ccodproduto,cdesproduto 	
	order by ccodproduto";
	$excon= pg_query($conl,$com);
	$resulcom= pg_fetch_array($excon);
	$codigo=$resulcom['ccodproduto'];
	$qtdl=$resulcom['estoque'];
	$desc=$resulcom['cdesproduto'];	
	if ($codigo <> null){		
		if ($qtdg <> $qtdl) {			
			if ($qtdg < $qtdl ) {				
				$dif= $qtdl - $qtdg;
				$com="select logar('INVENTÁRIO',1,0);INSERT INTO ahistorico
	    		VALUES (nextval('seque_ahistorico'),NULL,0,0,'O','AJUSTE INVENTÁRIO',$produto,'$data',0.000,0.0000,0.0000,0.0000,0.0000,0.0000, 
	            0.0000,0.0000,0.0000,0.0000,0.0000,0.00,'$desc','',$dif,0.0000,NULL,0,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.000,0,'$data', 
	            '$time','INVENTÁRIO',1,NULL,NULL,NULL,'',$empl,0.00,0,0,0,0.00,NULL,NULL,NULL,NULL,0.00,0,0,0,0.0000,0.0000,0.00,0.0000,0.00,0.0000,0.0000,0.0000, 
	            0.00,0.00,0.00,0,0,0.0000,0.0000,0.0000,0,'',0,'',0.00,0.00,NULL,NULL,NULL,NULL,NULL,0.0000,0,NULL,NULL,'',0,0.00,0.00,0,0.00,0.0000,0.0000,0.00,0.00, 
	            0.00,0,'','',NULL,NULL,NULL,'','','',0.00,0.00,0.00,0.00,0.00,'',0.00,'','',0.000,0.0000,0.0000,0.0000,0,0,0,'',0.00,0.00,0.00,NULL,NULL,NULL,'',0.00,0.00, 
	            0.00,NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL,NULL,NULL,NULL,'',NULL,'',NULL,0,0,0.00,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,'',NULL,'',NULL,'',NULL,NULL)";
	            $excom=pg_query($conl,$com);
				if (!$excom){						
					echo "<script>alert('Erro  Ao Manipular o Item :$produto');</script>";exit;							
				}
			} else {
				$dif=$qtdg-$qtdl;				
				$com="select logar('INVETÁRIO',1,0);INSERT INTO ahistorico
	    		VALUES (nextval('seque_ahistorico'),NULL,0,0,'I','AJUSTE INVENTÁRIO',$produto,'$data',0.000,0.0000,0.0000,0.0000,0.0000,0.0000,
	            0.0000,0.0000,0.0000,0.0000,0.0000,0.00,'$desc','',0.0000,$dif,NULL,0,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.000,0,'$data',
	            '$time','INVENTÁRIO',1,NULL,NULL,NULL,'',$empl,0.00,0,0,0,0.00,NULL,NULL,NULL,NULL,0.00,0,0,0,0.0000,0.0000,0.00,0.0000,0.00,0.0000,0.0000,0.0000,
	            0.00,0.00,0.00,0,0,0.0000,0.0000,0.0000,0,'',0,'',0.00,0.00,NULL,NULL,NULL,NULL,NULL,0.0000,0,NULL,NULL,'',0,0.00,0.00,0,0.00,0.0000,0.0000,0.00,0.00,
	            0.00,0,'','',NULL,NULL,NULL,'','','',0.00,0.00,0.00,0.00,0.00,'',0.00,'','',0.000,0.0000,0.0000,0.0000,0,0,0,'',0.00,0.00,0.00,NULL,NULL,NULL,'',0.00,0.00,
	            0.00,NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL,NULL,NULL,NULL,'',NULL,'',NULL,0,0,0.00,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,'',NULL,'',NULL,'',NULL,NULL)";
	            $excom=pg_query($conl,$com);
				if (!$excom){
					echo "<script>alert('Erro  Ao Manipular o Item :$produto');</script>";exit;		
				}
			}
		}
	}	
}
$sql="select cprohistorico,sum(centhistorico-csaihisotorico) as estoque from ahistorico where cemphistorico = $empl  and cemihistorico <= '2021-12-31'
	 group by cprohistorico
	 having sum(centhistorico-csaihisotorico) < 0 	
	 order by cprohistorico "; 
$exsql=pg_query($conl,$sql);
while($row = pg_fetch_assoc($exsql)){
	$produto=$row['cprohistorico'];
	$dif=$row['estoque'];
	$dif= abs($dif);
	$com="select logar('INVETÁRIO',1,0);INSERT INTO ahistorico
    VALUES (nextval('seque_ahistorico'),NULL,0,0,'I','AJUSTE INVENTÁRIO',$produto,'$data',0.000,0.0000,0.0000,0.0000,0.0000,0.0000,
    0.0000,0.0000,0.0000,0.0000,0.0000,0.00,'$desc','',0.0000,$dif,NULL,0,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.000,0,'$data',
    '$time','INVENTÁRIO',1,NULL,NULL,NULL,'',$empl,0.00,0,0,0,0.00,NULL,NULL,NULL,NULL,0.00,0,0,0,0.0000,0.0000,0.00,0.0000,0.00,0.0000,0.0000,0.0000,
    0.00,0.00,0.00,0,0,0.0000,0.0000,0.0000,0,'',0,'',0.00,0.00,NULL,NULL,NULL,NULL,NULL,0.0000,0,NULL,NULL,'',0,0.00,0.00,0,0.00,0.0000,0.0000,0.00,0.00,
    0.00,0,'','',NULL,NULL,NULL,'','','',0.00,0.00,0.00,0.00,0.00,'',0.00,'','',0.000,0.0000,0.0000,0.0000,0,0,0,'',0.00,0.00,0.00,NULL,NULL,NULL,'',0.00,0.00,
    0.00,NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL,NULL,NULL,NULL,'',NULL,'',NULL,0,0,0.00,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,'',NULL,'',NULL,'',NULL,NULL)";
    $excom=pg_query($conl,$com);
	if (!$excom){
		echo "<script>alert('Erro  Ao Manipular o Item :$produto');</script>";exit;		
	}
}
echo "<script>alert('Empresa Ajustada');</script>";
//echo $voltalogin;		
?>
	



