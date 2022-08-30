<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
header("Content-Type: text/html; charset=ISO-8859-1",true);
date_default_timezone_set('America/Sao_Paulo');
set_time_limit(0);
$time=date('H:i:s');
$hora=date('H-i-s');
$dia= date('Y-m-d');
$diabrasil=date('d-m-Y');
function soNumero($str) {
    return preg_replace("/[^0-9]/", "", $str);
}
$voltalogin="<script>window.location='http://192.168.13.2/Desenvolver/Importaparcela.html'</script>";
$arquivo = "parcela.csv";
if (file_exists($arquivo)) {
    if(!@($serv=pg_connect ("host=192.168.16.17 dbname=viabrasil port=5430 user=postgres password=ky$14gr@"))){
        echo "<script>alert('Sem Cominicação com nossos Servidores Tente Novamente Mais Tarde');</script>";
        exit($volta);
    }
    $sql="delete from parcelatidas";
    $exsql= pg_query($serv,$sql);
    $arquivo = 'parcela.csv';
    $arq = fopen($arquivo,'r');
    $ll=0;
    while(!feof($arq))
        for($i=0; $i<1; $i++){
            if ($conteudo = fgets($arq)){
                $ll++;
                $linha = explode(';', $conteudo);
                $nfe = $linha[7]; 
                $cpf=$linha[2];
                $numero=$linha[9];
                $valor=$linha[11];
                $vencimento=$linha[10];
                if ($cpf == 'CPF' or $cpf == null) {
                    $linha = array();
                } else {                    
                    $cpf = soNumero($cpf);
                    $valor  = str_replace(',', '.', $valor );
                    $vencimento = implode("-",array_reverse(explode("/",$vencimento)));
                    $sql="insert into parcelatidas values ('$cpf',$numero,$valor,'$vencimento','$nfe')";
                    $exsql= pg_query($serv,$sql);
                }
                $linha = array();
            }
    }
    echo "<script>alert('Arquivo Carregado com sucesso!!! total de Linhas:$ll ');</script>";       
    pg_close($serv);
    echo $voltalogin;    
} else {
    pg_close($serv);
    echo "<script>alert('Erro ao Carregar o Arquivo');</script>";
    echo $voltalogin;
    exit;
}
?>