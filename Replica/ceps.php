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
    <head>s
    <center><img src="img/error.jpg"alt="500" heigth ="500px" width="100px" ></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit; 
}
if(!@($geral=pg_connect ("host=192.168.10.30 dbname=troll port=5430 user=postgres password=ky$14gr@"))){
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

$sql="select *from tcep order by ccodcep ";
$exsql=pg_query($geral,$sql);
$c=0;
while($row = pg_fetch_assoc($exsql)){
	if ($c== 10){
		break;
	}	
	$cep=$row['ccodcep'];
	$cidade=$row['ccidcep'];
	$cidade=str_replace("'"," ",$cidade);
	$uf=$row['cufcep'];
	$uf=str_replace("'"," ",$uf);
	$bairro=$row['cbaicep'];
	$bairro=str_replace("'"," ",$bairro);
	$tipo=$row['ctipcep'];
	$i_tce_codigo_cidade=$row['i_tce_codigo_cidade'];
	if ($i_tce_codigo_cidade == null) {
		$i_tce_codigo_cidade="NULL";
	}
	$i_tce_codigo_uf=$row['i_tce_codigo_uf'];
	if ($i_tce_codigo_uf== null){
		$i_tce_codigo_uf="NULL";
	}
	$i_tce_codigo_pais=$row['i_tce_codigo_pais'];
	if ($i_tce_codigo_pais== null){
		$i_tce_codigo_pais="NULL";
	}
	$s_tce_nome_pais=$row['s_tce_nome_pais'];
	$s_tce_nome_pais=str_replace("'"," ",$s_tce_nome_pais);	
	$i_tce_tipo_cep=$row['i_tce_tipo_cep'];	
	$s_tce_logradouro=$row['s_tce_logradouro'];
	$s_tce_logradouro=str_replace("'"," ",$s_tce_logradouro);	
	$com="select ccodcep from tcep where ccodcep = '$cep' ";
    $excom=pg_query($loc,$com);
    $rscom=pg_fetch_array($excom);
    $ccep=$rscom['ccodcep'];
    if ($ccep == null){
    	$com="insert into tcep values('$cep','$cidade','$uf','$bairro',$tipo,$i_tce_codigo_cidade,
    	$i_tce_codigo_uf,$i_tce_codigo_pais,'$s_tce_nome_pais',$i_tce_tipo_cep,'$s_tce_logradouro')";
    	$excom=pg_query($loc,$com);
    	if (!$excom){
			echo "Erro ao Cadastrar o Cep:$cep".'<br>';
			echo $com.'<br>';
    	} else {
    		echo $cep.' Cadastrado com Sucesso'.'<br>';
    	}
    }	
}

