<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
header("Content-Type: text/html; charset=ISO-8859-1",true);
date_default_timezone_set('America/Sao_Paulo');
set_time_limit(0);
$time=date('H:i:s');
$hora=date('H-i-s');
$dia= date('Y-m-d');
$diabrasil=date('d-m-Y');
$voltalogin="<script>window.location='http://192.168.13.2/Desenvolver/Importacliente.html'</script>";
$arquivo = "tidas.csv";
if(!@($serv=pg_connect ("host=192.168.16.17 dbname=viabrasil port=5430 user=postgres password=ky$14gr@"))){
    echo "<script>alert('Sem Cominicação com nossos Servidores Tente Novamente Mais Tarde');</script>";
    exit($volta);
}
function soNumero($str) {
	return preg_replace("/[^0-9]/", "", $str);
}
if (file_exists($arquivo)) {
    unlink($arquivo);
}
$nome_temporario=$_FILES["Arquivo"]["tmp_name"];
$nome_real=$_FILES["Arquivo"]["name"];
if (!copy($nome_temporario,$nome_real)){
	pg_close($serv);
    echo "<script>alert('Erro ao Carregar o Arquivo');</script>";
	echo $voltalogin;
	exit;
}
$antigo="$nome_real";
$arquivo_novo="tidas.csv";
rename($antigo,$arquivo_novo);
if (file_exists('tidas.csv')){
	$arquivo = 'tidas.csv';
    $arq = fopen($arquivo,'r');
    $ll=0;
    while(!feof($arq))
    for($i=0; $i<1; $i++){
    	if ($conteudo = fgets($arq)){
        	$ll++;
            $linha = explode(';', $conteudo);
            $cpf=$linha[5]; 
            $nome=$linha[4]; 
            if ($cpf == 'CPF' or $cpf == null) {
        		$linha = array();
        	} else {
        	        	          	    
            	    $cpf = soNumero($cpf);        	    
                	$sql="select nome from tidas where cpf = '$cpf' ";
                	$exsql= pg_query($serv,$sql);
    				$rssql= pg_fetch_array($exsql);
    				$cnome=$rssql['nome'];
    				if ($cnome == null) {
    					$sql="insert into tidas( nome, cpf) values ('$nome','$cpf')";
    					$exsql= pg_query($serv,$sql);
    				}
        	    
        	    
        	}
            $linha = array();             
    	}
    }
   	echo "<script>alert('Arquivo Carregado com sucesso!!! total de Linhas:$ll ');</script>";
	pg_close($serv);
	echo $voltalogin;
}else {
	echo "<script>alert('Erro ao Carregar o Arquivo');</script>";
	pg_close($serv);
	echo $voltalogin;
	exit;
}
?>