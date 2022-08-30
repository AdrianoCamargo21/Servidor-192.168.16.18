<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
function soNumero($str) {
    return preg_replace("/[^0-9]/", "", $str);
}
$voltalogin="<script>window.location='http://192.168.13.2/Desenvolver/servicos.html'</script>";
date_default_timezone_set('America/Sao_Paulo');
$time=date('H:i:s');
$dia= date('Y-m-d');
set_time_limit(0);
$nfe=$_POST['numeronfe'];
if ($nfe == null ){
    echo "<script>alert('Favor informar o numero da nota');</script>";
    echo "$voltalogin";
}
if ($nfe < 0 or $nfe == '0' ){
    echo "<script>alert('Numero da nota não pode ser negativo ou igual a zero');</script>";
    echo "$voltalogin";
}
$data=$_POST['data'];
if ($data == null){
   $data=$dia;
}
$valor=$_POST['valor'];
if ($valor == null or $valor < '0' ){
    echo "<script>alert('O valor não pode ser negativo ou igual a zero');</script>";
    echo "$voltalogin";
}
$emp=$_POST['empresa'];
$forcnpj=$_POST['forcnpj'];
if ($forcnpj == '' or $forcnpj <= '0' ){
    echo "<script>alert('Cnpj do Fornecedor inválido');</script>";
    echo $voltalogin;
}
$forcnpj = soNumero($forcnpj);
if(strlen($forcnpj)> 14 or strlen($forcnpj)< 14){    
    echo "<script>alert('Cnpj inválido');</script>";
    echo $voltalogin;    
}
$tipo=$_POST['tipo']; 
if ($emp <=6) {
    if(!@($con=pg_connect ("host=192.168.16.2 dbname=troll port=5430 user=postgres password=ky$14gr@"))){
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
    if ($emp == 1) {
        $loja='1'; 
    } elseif ($emp == 2){
        $loja='3';
    } elseif ($emp == 3){
        $loja='5';
    } elseif ($emp == 4){
        $loja='7';
    } elseif ($emp == 5){
        $loja='9';
    } elseif ($emp == 6){
        $loja='11';
    }
    if ($tipo == 'S') {
        $produto='37445';
    } elseif ($tipo == 'T'){
        $produto='107564';
    }
    
}
if ($emp >= '7'){
    if(!@($con=pg_connect ("host=192.168.9.10 dbname=troll port=5430 user=postgres password=ky$14gr@"))){
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
    if ($emp == 7) {
        $loja='13';
    } elseif ($emp == 8){
        $loja='15';
    } elseif ($emp == 9){
        $loja='17';
    }
    if ($tipo == 'S') {
        $produto=37445;
    } elseif ($tipo == 'T'){
        $produto=107564;
    }
    
}
if ($emp >= '10' and $emp <= 11 ){
    if(!@($con=pg_connect ("host=192.168.16.77 dbname=troll port=5430 user=postgres password=ky$14gr@"))){
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
    if ($emp == 10) {
        $loja='1';
    } elseif ($emp == 11){
        $loja='3';
    } 
    if ($tipo == 'S') {
        $produto=37445;
    } elseif ($tipo == 'T'){
        $produto=107564;
    }    
}
if ($emp >= '18'){
    if(!@($con=pg_connect ("host=192.168.11.2 dbname=troll port=5430 user=postgres password=ky$14gr@"))){
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
    if ($emp == 18) {
        $loja='1';
    } elseif ($emp == 19){
        $loja='3';
    } 
    if ($tipo == 'S') {
        $produto=4;
    } elseif ($tipo == 'T'){
        $produto=6;
    }    
}
$sql = "select ccodfornecedor,cuffornecedor  from afornecedor where ccgcfornecedor = '$forcnpj'"; 
$exsql = pg_query($con,$sql);
$rssql=pg_fetch_array($exsql);
$codforn=$rssql['ccodfornecedor'];
$uf=$rssql['cuffornecedor'];
if ($codforn == null){
    echo "<script>alert('Fornecedor Não Cadastrado');</script>";
    pg_close($con);
    echo "$voltalogin";
}
if ($uf == null) {
    echo "<script>alert('Uf Do Fornecedor Não Cadastrada');</script>";
    pg_close($con);
    echo "$voltalogin";
}
if ($tipo = 'S') {    
    if ($uf == 'SC'){
        $cfop='1.933';
    }else {
        $cfop='2.933';
    } 
} else {
    if ($uf == 'SC'){
        $cfop='1.303';
    } else {
        $uf='2.303';
    }    
}
$sql= "select cnfientradas from aentradas where cnfientradas = '$nfe' and cforentradas = '$codforn'";
$exsql=pg_query($con,$sql);
$rssql=pg_fetch_array($exsql);
if ($rssql <> null){
    pg_close($con);
    echo "<script>alert('Numero da Nota já lançada');</script>";
    echo "$voltalogin";
}
$sql="select nextval('seque_aentradas') as id";
$exsql= pg_query($con,$sql);
$rssql= pg_fetch_array($exsql);
$id=$rssql['id'];
if ($id == null) {
    echo "<script>alert('Erro Ao Buscar Um Id Para a Entrada');</script>";
    echo $voltalogin;
    exit;
}
$sql="begin";
$exsql= pg_query($con,$sql);
$sql="select logar('IMPORTA',1,0);INSERT INTO aentradas VALUES ($id,'V','$codforn','$data','$dia','$nfe','$valor','$valor','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00',
    '$cfop','0.00','0.00',NULL,'PAGO','0','','$dia','$time',null,null,'0','1','COPIA','','$loja','01','','0.00','0.00','','0.00',null,'2','0.00','0.00','0.00','0.00','','','0.00',
    '99','0','0','0.00','0.00','0.00','0.00','0',null)";
$exsql= pg_query($con,$sql);
if (!$exsql){
    $sql="rollback";
    $exsql= pg_query($con,$sql);
    echo "<script>alert('Erro ao Incluir a Nfe de Entrada');</script>";
    echo $voltalogin;
    exit;
}  
$sql="select logar('IMPORTA',1,0);INSERT INTO ahistorico VALUES((nextval('seque_ahistorico')),'$id','0','0','E','','$produto','$data','$valor','$valor','$valor'
    ,'$valor','0.0000','0.0000','0.0000','0.0000','0.0000','0.0000','0.0000','$valor','SERVIÇOS','$cfop','0.0000','1.0000','$codforn','0','0.00','0.00','0.00',
    '0.00','0.00','0.00','0.00','0.00','0.00','0.0000','0','$dia','$time','ADRIANO','13',NULL,NULL,'0','','$loja','0.00','0','0','0','0.00','0.00','0.00','0.00',
    '0.00','$valor',NULL,NULL,NULL,'0.0000','0.0000','0.00','0.0000','0.00','0.0000','0.0000','$valor','0.00','0.00','0.00','0',NULL,'0.0000','0.0000','0.0000',
    '1','','0','000','0.00','0.00','0','0','0',NULL,NULL,'0.0000',NULL,'0',NULL,'','0','0.00','0.00','0','0.00','0.0000','0.0000','0.00','0.00','0.00',NULL,'','',
    NULL,NULL,'0','02','07','07','0.00','0.00','0.00','0.00','0.00','0','0.00','0','','0.000','0.0000','0.000','0.0000','0','0','0','','0.00','0.00','0.00','','0.00',
    '0','','0.00','0.00','0.00','0.0000','0.00','0.0000','0.0000','0.0000','0.00','','','0.00','0.00','0.00','0.00','',NULL,'','0.00',NULL,'0','0.00','0.0000','0.00',
    '0.00','0','','0.00','0','0','0.0000','','0.00','','0','','0.00','0.00')";
$exsql= pg_query($con,$sql);
if (!$exsql){
    $sql="rollback";
    $exsql= pg_query($con,$sql);
    echo "<script>alert('Erro ao Incluir o Historico da  Nfe de Entrada');</script>";
    echo $voltalogin;
    exit;
}
$sql="commit";
$exsql= pg_query($con,$sql);
echo "<script>alert('Importada Com Sucesso Nfe:$nfe');</script>";
echo $voltalogin;
exit;
?>