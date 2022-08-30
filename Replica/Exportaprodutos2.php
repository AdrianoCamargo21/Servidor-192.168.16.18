<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
date_default_timezone_set('America/Sao_Paulo');
$time=date('H:i:s');
$dia= date('d-m-Y');
$data= date ('Y-m-d');
set_time_limit(0);
if(!@($loc=pg_connect ("host=192.168.16.3 dbname=troll port=5434 user=postgres password=ky$14gr@"))){
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
if(!@($geral=pg_connect ("host=192.168.10.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@"))){
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
//$sql="select cprohistorico from ahistorico group by cprohistorico order by cprohistorico";
$sql="select ccodproduto from aprodutos where ccodproduto > 87458 order by ccodproduto ";
$exsql=pg_query($geral,$sql);
$c=0;
while($row = pg_fetch_assoc($exsql)){
	if ($c== 10){
		break;
	}
	//$produto=$row['cprohistorico'];
	$produto=$row['ccodproduto'];
	$com="select ccodproduto from aprodutos where ccodproduto = $produto ";
    $excom=pg_query($loc,$com);
    $rscom=pg_fetch_array($excom);
    $codigo=$rscom['ccodproduto'];
    if ($codigo == null){
    	$com="select ccodproduto,cdesproduto,crefporduto,cbarproduto,i_apr_codigo_cnm,cuniproduto,cgruporduto,cdesgrupo,cmarproduto,cdesmarca,clinproduto,cdeslinha,
		cdepproduto,cdesdepartamento,cpveproduto,cpcuproduto,cpcoproduto,ccadproduto,ccplproduto,s_tun_complemento_desc from aprodutos  
		left join tgrupo on cgruporduto = ccodgrupo 
		left join tmarca on cmarproduto = ccodmarca
		left join tlinha on clinproduto = ccodlinha
		left join tunidadeproduto on cuniproduto = d_tun_descricao
		left  join tdepartamento on cdepproduto = ccoddepartamento
		where ccodproduto = $produto";
    	$excom=pg_query($geral,$com);
	    $rscom=pg_fetch_array($excom);
	    $codigo=$rscom['ccodproduto'];
	    if ($codigo == null){
	    	echo 'Produto Não Encontrado '. $produto.'<br>';
	    } else {
	    	$desc=$rscom['cdesproduto'];$ref=$rscom['crefporduto'];
	    	$barra=$rscom['cbarproduto'];$ncm=$rscom['i_apr_codigo_cnm'];
	    	$und=$rscom['cuniproduto'];
	    	$dsund=$rscom['s_tun_complemento_desc'];
	    	$grupo=$rscom['cgruporduto'];
	    	if ($grupo == null){$grupo = "NULL";}
	    	$dsgrupo=$rscom['cdesgrupo'];
	    	$marca=$rscom['cmarproduto'];
	   		if ($marca == null){$marca = "NULL";}
	    	$dsmarca=$rscom['cdesmarca'];
	    	$linha=$rscom['clinproduto'];
	    	if ($linha == null){$linha = "NULL";}
	    	$dslinha=$rscom['cdeslinha'];
	    	$departamento=$rscom['cdepproduto'];
	    	if ($departamento == null){$departamento = "NULL";}
	    	$dsdepartamento=$rscom['cdesdepartamento'];$venda=$rscom['cpveproduto'];
	    	$custo=$rscom['cpcuproduto'];$compra=$rscom['cpcoproduto'];
	    	$dataa=$rscom['ccadproduto'];$comple=$rscom['ccplproduto'];
	    	$com="select nextval('sequencia_paf')";
        	$excom=pg_query($loc,$com);
	    	$rscom=pg_fetch_array($excom);
	    	$paf=$rscom['nextval'];
	    	$com="select i_ncm_codigo from ncm where i_ncm_codigo ='$ncm' ";
	    	$excom=pg_query($loc,$com);
	    	$rscom=pg_fetch_array($excom);
	    	$cncm=$rscom['i_ncm_codigo'];
			if ($cncm == null){
				$com="insert into ncm values('$ncm',NULL,0.00,0.00,0.00)";
				$excom=pg_query($loc,$com);
			}
			if ($marca <> 'NULL'){ 
				$com="select ccodmarca from tmarca where ccodmarca ='$marca' ";
		    	$excom=pg_query($loc,$com);
		    	$rscom=pg_fetch_array($excom);	    	
		    	$cmarca=$rscom['ccodmarca'];
				if ($cmarca == null){
					$com="insert into tmarca values($marca,'$dsdepartamento',NULL)";
					$excom=pg_query($loc,$com);
				} 
			} 
			if ($grupo <> 'NULL'){ 
				$com="select ccodgrupo from tgrupo where ccodgrupo ='$grupo' ";
		    	$excom=pg_query($loc,$com);
		    	$rscom=pg_fetch_array($excom);	    	
		    	$cgrupo=$rscom['ccodgrupo'];
				if ($cgrupo == null){
					$com="insert into tgrupo values($grupo,'$dsgrupo',0)";
					$excom=pg_query($loc,$com);
				} 
			}
	    	if ($und <> 'NULL'){ 
				$com="select d_tun_descricao from tunidadeproduto where d_tun_descricao ='$und' ";
		    	$excom=pg_query($loc,$com);
		    	$rscom=pg_fetch_array($excom);	    	
		    	$cund=$rscom['d_tun_descricao'];
				if ($cund == null){
					$com="insert into tunidadeproduto values('$und','$dsund')";
					$excom=pg_query($loc,$com);
				} 
			}  	
	    	$com= "insert into aprodutos values ($produto,0,'$desc','$ref','$barra', $venda, $custo, $compra,'$und',0.0000,0.00,0.00,0.000,0.000,0.00,0.0000,0.0000,'$dataa',NULL,NULL,
			NULL,NULL,'$comple',$grupo,$linha,$marca,1,NULL,$departamento,0,$custo,$custo,$custo,'$data','$time',59,'Cadastro',NULL,NULL,NULL,
			NULL,0.000,0.0000,0.0000,0.000,0.000,0.000,0.000,0.0000,0.0000,0.0000,0.00,0.00,0.0000,NULL,0,0,0,NULL,NULL,$custo,$custo,0,NULL,NULL,
			NULL,NULL,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.0000,0.0000,0.0000,
			0.0000,0.0000,0.0000,0.0000,0.0000,0.0000,0.0000,0.0000,0.0000,0.0000,0.0000,0.0000,0.0000,0.0000,0.0000,0.0000,0.0000,0.0000,0.0000,0.0000, 
			0.0000,0.0000,0.0000,0.0000,NULL,0.0000,0.0000,0.0000,0.0000,0.0000,0.0000,0.0000,0.0000,0.0000,0.0000,0.0000,0.0000,0.0000,0.0000,0.0000,0.0000,
			0.0000,0.0000,0.0000,0.00,0.0000,0.0000,0.0000,0.0000,NULL,NULL,NULL,NULL,NULL,0.00,0.0000,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,
			NULL,NULL,NULL,NULL,NULL,NULL,NULL,0.0000,NULL,0.000,NULL,NULL,0,NULL,NULL,NULL,0,NULL,NULL,0.00,0.00,0.00,NULL,NULL,NULL,NULL,NULL,0.00,0.00,0,0,
			0,NULL,'$ncm','T','T',NULL,0.00000,NULL,$custo,$custo,$custo,$custo,$custo,$custo,$custo,NULL,NULL,NULL,NULL,0,NULL,0,NULL,1,$paf,NULL,NULL,NULL,
			NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'A',NULL,NULL,NULL,NULL,NULL,NULL,
			NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,
			NULL,NULL,NULL,NULL,NULL)";
	    	$excom=pg_query($loc,$com);
		    if (!$excom) {
		        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>Erro Ao Cadastrar o Cód :$produto</font></b></p>";
		       	echo $com;
		        exit;
	    	}
	    	echo 'Produto Cadastrado: '.$produto.'<br>';    		    	
	    }    	
    }	
}

