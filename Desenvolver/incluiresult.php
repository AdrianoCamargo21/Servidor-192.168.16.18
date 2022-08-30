<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');
set_time_limit(0);
$time=date('H:i:s');
$dia= date('Y-m-d');
$voltalogin="<script>window.location='http://192.168.13.2/Desenvolver/novovalores.html';</script>";
$data = $_SESSION['data'];
if ($data== null) {
    session_destroy();
    echo "<script>alert('Data Não Carregada');</script>";
    echo $voltalogin;
    exit;
}
$base= $_SESSION['base'];
if ($base== null) {
    session_destroy();
    echo "<script>alert('Base Não Carregada');</script>";
    echo $voltalogin;
    exit;
}
$ref=substr_replace($data, '', -3);
$ref=implode("/",explode("-",$ref));

if ($base=='C') {
    $loja1=$_SESSION['loja1'];
    $juro1=$_SESSION['juro1'];
    $troca1=$_SESSION['troca1'];
    $loja3=$_SESSION['loja3'];
    $juro3=$_SESSION['juro3'];
    $troca3=$_SESSION['troca3'];
    $loja5=$_SESSION['loja5'];
    $juro5=$_SESSION['juro5'];
    $troca5=$_SESSION['troca5'];
    $loja7=$_SESSION['loja7'];
    $juro7=$_SESSION['juro7'];
    $troca7=$_SESSION['troca7'];
    $loja9=$_SESSION['loja9'];
    $juro9=$_SESSION['juro9'];
    $troca9=$_SESSION['troca9'];
    $loja11=$_SESSION['loja11'];
    $juro11=$_SESSION['juro11'];
    $troca11=$_SESSION['troca11'];
    if(!@($con=pg_connect ("host=192.168.16.74 dbname=resultcdr port=5435 user=postgres password=ky$14gr@"))){
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados Do Result de Caçador Data:$dia  Hora:$time </font></b></p>";
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
    $sql="select data from automatico where data = '$data' and base = 'C' ";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $ultima=$resulsql['data'];
    if ($ultima <> null) {
        session_destroy();
        echo "<script>alert('Data Já Lançada');</script>";
        echo $voltalogin;
        exit;
    } else {
        $sql="begin";
        $exsql= pg_query($con,$sql);
        $sql="insert into automatico values ('$data','$base')";
        $exsql= pg_query($con,$sql);
        if (!$exsql){
            session_destroy();
            echo "<script>alert('Erro Ao Cadastrar o controle de Datas ');</script>";
            $sql="rollback"; 
            $exsql= pg_query($con,$sql);
            echo $voltalogin;
        }
        if ($loja1 > 0) {
            $sql="insert into ahcontas values (nextval('seque_ahcontas'),1,'FATURAMENTO CONFECÇÕES', $loja1,0.00,11,16,39,'','','$data',NULL,NULL,0,
            '$ref',1,0,0,0,'',0,'','$data','$time',1,'AUTOMÁTICO',NULL,NULL,0,'','',NULL,NULL,NULL,NULL,0,0,0,0,NULL,NULL,0,NULL,NULL,2,NULL,'','',0,NULL,
            NULL, 0, 0)";
            $exsql= pg_query($con,$sql);
            if (!$exsql){
                session_destroy();
                $sql="rollback";
                $exsql= pg_query($con,$sql);
                echo "<script>alert('Erro Ao Cadastrar o Primeiro Lançamento De Faturamento ');</script>";
                echo $voltalogin;
            }
        }
        if ($juro1 > 0) {
            $sql="insert into ahcontas values (nextval('seque_ahcontas'),1,'JUROS CONFECÇÕES', $juro1,0.00,11,17,49,'','','$data',NULL,NULL,0,
            '$ref',1,0,0,0,'',0,'','$data','$time',1,'AUTOMÁTICO',NULL,NULL,0,'','',NULL,NULL,NULL,NULL,0,0,0,0,NULL,NULL,0,NULL,NULL,2,NULL,'','',0,NULL,
            NULL, 0, 0)";
            $exsql= pg_query($con,$sql);
            if (!$exsql){
                session_destroy();
                $sql="rollback";
                $exsql= pg_query($con,$sql);
                echo "<script>alert('Erro Ao Cadastrar o Primeiro Lançamento De Juro ');</script>";
                echo $voltalogin;
            }
        }
        if ($troca1 > 0) {
            $sql="insert into ahcontas values (nextval('seque_ahcontas'),1,'DEVOLUÇÕES ROSANE', 0.00,$troca1,11,11,34,'','','$data',NULL,NULL,0,
            '$ref',1,0,0,0,'',0,'','$data','$time',1,'AUTOMÁTICO',NULL,NULL,0,'','',NULL,NULL,NULL,NULL,0,0,0,0,NULL,NULL,0,NULL,NULL,2,NULL,'','',0,NULL,
            NULL, 0, 0)";
            $exsql= pg_query($con,$sql);
            if (!$exsql){
                session_destroy();
                $sql="rollback";
                $exsql= pg_query($con,$sql);
                echo "<script>alert('Erro Ao Cadastrar o Primeiro Lançamento De Trocas ');</script>";
                echo $voltalogin;
            }
        }
        if ($loja3 > 0) {
            $sql="insert into ahcontas values (nextval('seque_ahcontas'),1,'FATURAMENTO ESPORTES', $loja3,0.00,11,16,39,'','','$data',NULL,NULL,0,
            '$ref',1,0,0,0,'',0,'','$data','$time',1,'AUTOMÁTICO',NULL,NULL,0,'','',NULL,NULL,NULL,NULL,0,0,0,0,NULL,NULL,0,NULL,NULL,4,NULL,'','',0,NULL,
            NULL, 0, 0)";
            $exsql= pg_query($con,$sql);
            if (!$exsql){
                session_destroy();
                $sql="rollback";
                $exsql= pg_query($con,$sql);
                echo "<script>alert('Erro Ao Cadastrar o Segundo Lançamento De Faturamento ');</script>";
                echo $voltalogin;
            }
        }
        if ($juro3 > 0) {
            $sql="insert into ahcontas values (nextval('seque_ahcontas'),1,'JUROS ESPORTES', $juro3,0.00,11,17,49,'','','$data',NULL,NULL,0,
            '$ref',1,0,0,0,'',0,'','$data','$time',1,'AUTOMÁTICO',NULL,NULL,0,'','',NULL,NULL,NULL,NULL,0,0,0,0,NULL,NULL,0,NULL,NULL,4,NULL,'','',0,NULL,
            NULL, 0, 0)";
            $exsql= pg_query($con,$sql);
            if (!$exsql){
                session_destroy();
                $sql="rollback";
                $exsql= pg_query($con,$sql);
                echo "<script>alert('Erro Ao Cadastrar o Segundo Lançamento De Juro ');</script>";
                echo $voltalogin;
            }
        }
        if ($troca3 > 0) {
            $sql="insert into ahcontas values (nextval('seque_ahcontas'),1,'DEVOLUÇÕES ESPORTES', 0.00,$troca3,11,11,34,'','','$data',NULL,NULL,0,
            '$ref',1,0,0,0,'',0,'','$data','$time',1,'AUTOMÁTICO',NULL,NULL,0,'','',NULL,NULL,NULL,NULL,0,0,0,0,NULL,NULL,0,NULL,NULL,4,NULL,'','',0,NULL,
            NULL, 0, 0)";
            $exsql= pg_query($con,$sql);
            if (!$exsql){
                session_destroy();
                $sql="rollback";
                $exsql= pg_query($con,$sql);
                echo "<script>alert('Erro Ao Cadastrar o Segundo Lançamento De Trocas ');</script>";
                echo $voltalogin;
            }
        }
        if ($loja5 > 0) {
            $sql="insert into ahcontas values (nextval('seque_ahcontas'),1,'FATURAMENTO MAY', $loja5,0.00,11,16,39,'','','$data',NULL,NULL,0,
            '$ref',1,0,0,0,'',0,'','$data','$time',1,'AUTOMÁTICO',NULL,NULL,0,'','',NULL,NULL,NULL,NULL,0,0,0,0,NULL,NULL,0,NULL,NULL,3,NULL,'','',0,NULL,
            NULL, 0, 0)";
            $exsql= pg_query($con,$sql);
            if (!$exsql){
                session_destroy();
                $sql="rollback";
                $exsql= pg_query($con,$sql);
                echo "<script>alert('Erro Ao Cadastrar o Terceiro Lançamento De Faturamento ');</script>";
                echo $voltalogin;
            }
        }
        if ($juro5 > 0) {
            $sql="insert into ahcontas values (nextval('seque_ahcontas'),1,'JUROS MAY', $juro5,0.00,11,17,49,'','','$data',NULL,NULL,0,
            '$ref',1,0,0,0,'',0,'','$data','$time',1,'AUTOMÁTICO',NULL,NULL,0,'','',NULL,NULL,NULL,NULL,0,0,0,0,NULL,NULL,0,NULL,NULL,3,NULL,'','',0,NULL,
            NULL, 0, 0)";
            $exsql= pg_query($con,$sql);
            if (!$exsql){
                session_destroy();
                $sql="rollback";
                $exsql= pg_query($con,$sql);
                echo "<script>alert('Erro Ao Cadastrar o Terceiro Lançamento De Juro ');</script>";
                echo $voltalogin;
            }
        }
        if ($troca5 > 0) {
            $sql="insert into ahcontas values (nextval('seque_ahcontas'),1,'DEVOLUÇÕES MAY', 0.00,$troca5,11,11,34,'','','$data',NULL,NULL,0,
            '$ref',1,0,0,0,'',0,'','$data','$time',1,'AUTOMÁTICO',NULL,NULL,0,'','',NULL,NULL,NULL,NULL,0,0,0,0,NULL,NULL,0,NULL,NULL,3,NULL,'','',0,NULL,
            NULL, 0, 0)";
            $exsql= pg_query($con,$sql);
            if (!$exsql){
                session_destroy();
                $sql="rollback";
                $exsql= pg_query($con,$sql);
                echo "<script>alert('Erro Ao Cadastrar o Segundo Lançamento De Trocas ');</script>";
                echo $voltalogin;
            }
        }
        if ($loja7 > 0) {
            $sql="insert into ahcontas values (nextval('seque_ahcontas'),1,'FATURAMENTO ADRI', $loja7,0.00,11,16,39,'','','$data',NULL,NULL,0,
            '$ref',1,0,0,0,'',0,'','$data','$time',1,'AUTOMÁTICO',NULL,NULL,0,'','',NULL,NULL,NULL,NULL,0,0,0,0,NULL,NULL,0,NULL,NULL,1,NULL,'','',0,NULL,
            NULL, 0, 0)";
            $exsql= pg_query($con,$sql);
            if (!$exsql){
                session_destroy();
                $sql="rollback";
                $exsql= pg_query($con,$sql);
                echo "<script>alert('Erro Ao Cadastrar o Quarto Lançamento De Faturamento ');</script>";
                echo $voltalogin;
            }
        }
        if ($juro7 > 0) {
            $sql="insert into ahcontas values (nextval('seque_ahcontas'),1,'JUROS ADRI', $juro7,0.00,11,17,49,'','','$data',NULL,NULL,0,
            '$ref',1,0,0,0,'',0,'','$data','$time',1,'AUTOMÁTICO',NULL,NULL,0,'','',NULL,NULL,NULL,NULL,0,0,0,0,NULL,NULL,0,NULL,NULL,1,NULL,'','',0,NULL,
            NULL, 0, 0)";
            $exsql= pg_query($con,$sql);
            if (!$exsql){
                session_destroy();
                $sql="rollback";
                $exsql= pg_query($con,$sql);
                echo "<script>alert('Erro Ao Cadastrar o Quarto Lançamento De Juro ');</script>";
                echo $voltalogin;
            }
        }
        if ($troca7 > 0) {
            $sql="insert into ahcontas values (nextval('seque_ahcontas'),1,'DEVOLUÇÕES ADRI', 0.00,$troca7,11,11,34,'','','$data',NULL,NULL,0,
            '$ref',1,0,0,0,'',0,'','$data','$time',1,'AUTOMÁTICO',NULL,NULL,0,'','',NULL,NULL,NULL,NULL,0,0,0,0,NULL,NULL,0,NULL,NULL,1,NULL,'','',0,NULL,
            NULL, 0, 0)";
            $exsql= pg_query($con,$sql);
            if (!$exsql){
                session_destroy();
                $sql="rollback";
                $exsql= pg_query($con,$sql);
                echo "<script>alert('Erro Ao Cadastrar o Quarto Lançamento De Trocas ');</script>";
                echo $voltalogin;
            }
        }
        if ($loja9 > 0) {
            $sql="insert into ahcontas values (nextval('seque_ahcontas'),1,'FATURAMENTO ANTIGO APOLO', $loja9,0.00,11,16,39,'','','$data',NULL,NULL,0,
            '$ref',1,0,0,0,'',0,'','$data','$time',1,'AUTOMÁTICO',NULL,NULL,0,'','',NULL,NULL,NULL,NULL,0,0,0,0,NULL,NULL,0,NULL,NULL,5,NULL,'','',0,NULL,
            NULL, 0, 0)";
            $exsql= pg_query($con,$sql);
            if (!$exsql){
                session_destroy();
                $sql="rollback";
                $exsql= pg_query($con,$sql);
                echo "<script>alert('Erro Ao Cadastrar o Quinto Lançamento De Faturamento ');</script>";
                echo $voltalogin;
            }
        }
        if ($juro9 > 0) {
            $sql="insert into ahcontas values (nextval('seque_ahcontas'),1,'JUROS ANTIGO APOLO', $juro9,0.00,11,17,49,'','','$data',NULL,NULL,0,
            '$ref',1,0,0,0,'',0,'','$data','$time',1,'AUTOMÁTICO',NULL,NULL,0,'','',NULL,NULL,NULL,NULL,0,0,0,0,NULL,NULL,0,NULL,NULL,5,NULL,'','',0,NULL,
            NULL, 0, 0)";
            $exsql= pg_query($con,$sql);
            if (!$exsql){
                session_destroy();
                $sql="rollback";
                $exsql= pg_query($con,$sql);
                echo "<script>alert('Erro Ao Cadastrar o Quinto Lançamento De Juro ');</script>";
                echo $voltalogin;
            }
        }
        if ($troca9 > 0) {
            $sql="insert into ahcontas values (nextval('seque_ahcontas'),1,'DEVOLUÇÕES ANTIGO APOLO', 0.00,$troca9,11,11,34,'','','$data',NULL,NULL,0,
            '$ref',1,0,0,0,'',0,'','$data','$time',1,'AUTOMÁTICO',NULL,NULL,0,'','',NULL,NULL,NULL,NULL,0,0,0,0,NULL,NULL,0,NULL,NULL,5,NULL,'','',0,NULL,
            NULL, 0, 0)";
            $exsql= pg_query($con,$sql);
            if (!$exsql){
                session_destroy();
                $sql="rollback";
                $exsql= pg_query($con,$sql);
                echo "<script>alert('Erro Ao Cadastrar o Quinto Lançamento De Trocas ');</script>";
                echo $voltalogin;
            }
        }
        if ($loja11 > 0) {
            $sql="insert into ahcontas values (nextval('seque_ahcontas'),1,'FATURAMENTO SHOP MASP', $loja11,0.00,11,16,39,'','','$data',NULL,NULL,0,
            '$ref',1,0,0,0,'',0,'','$data','$time',1,'AUTOMÁTICO',NULL,NULL,0,'','',NULL,NULL,NULL,NULL,0,0,0,0,NULL,NULL,0,NULL,NULL,8,NULL,'','',0,NULL,
            NULL, 0, 0)";
            $exsql= pg_query($con,$sql);
            if (!$exsql){
                session_destroy();
                $sql="rollback";
                $exsql= pg_query($con,$sql);
                echo "<script>alert('Erro Ao Cadastrar o Sexto Lançamento De Faturamento ');</script>";
                echo $voltalogin;
            }
        }
        if ($juro11 > 0) {
            $sql="insert into ahcontas values (nextval('seque_ahcontas'),1,'JUROS SHOP MASP', $juro11,0.00,11,17,49,'','','$data',NULL,NULL,0,
            '$ref',1,0,0,0,'',0,'','$data','$time',1,'AUTOMÁTICO',NULL,NULL,0,'','',NULL,NULL,NULL,NULL,0,0,0,0,NULL,NULL,0,NULL,NULL,8,NULL,'','',0,NULL,
            NULL, 0, 0)";
            $exsql= pg_query($con,$sql);
            if (!$exsql){
                session_destroy();
                $sql="rollback";
                $exsql= pg_query($con,$sql);
                echo "<script>alert('Erro Ao Cadastrar o Sexto Lançamento De Juro ');</script>";
                echo $voltalogin;
            }
        }
        if ($troca11 > 0) {
            $sql="insert into ahcontas values (nextval('seque_ahcontas'),1,'DEVOLUÇÕES SHOP MASP', 0.00,$troca11,11,11,34,'','','$data',NULL,NULL,0,
            '$ref',1,0,0,0,'',0,'','$data','$time',1,'AUTOMÁTICO',NULL,NULL,0,'','',NULL,NULL,NULL,NULL,0,0,0,0,NULL,NULL,0,NULL,NULL,8,NULL,'','',0,NULL,
            NULL, 0, 0)";
            $exsql= pg_query($con,$sql);
            if (!$exsql){
                session_destroy();
                $sql="rollback";
                $exsql= pg_query($con,$sql);
                echo "<script>alert('Erro Ao Cadastrar o Sexto Lançamento De Trocas ');</script>";
                echo $voltalogin;
            }
        }        
        $sql="commit";
        $exsql= pg_query($con,$sql);        
    }
}
if ($base=='J') {
    $loja1=$_SESSION['loja1'];
    $juro1=$_SESSION['juro1'];
    $troca1=$_SESSION['troca1'];
    $loja2=$_SESSION['loja2'];
    $juro2=$_SESSION['juro2'];
    $troca2=$_SESSION['troca2'];
        if(!@($con=pg_connect ("host=192.168.16.74 dbname=resultcdr port=5435 user=postgres password=ky$14gr@"))){
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados Do Result de Caçador Data:$dia  Hora:$time </font></b></p>";
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
    $sql="select data from automatico where data = '$data' and base = '$base'";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $ultima=$resulsql['data'];
    if ($ultima <> null) {
        session_destroy();
        echo "<script>alert('Data Já Lançada');</script>";
        echo $voltalogin;
        exit;
    } else {
        $sql="begin";
        $exsql= pg_query($con,$sql);
        $sql="insert into automatico values ('$data','$base')";
        $exsql= pg_query($con,$sql);
        if (!$exsql){
            session_destroy();
            echo "<script>alert('Erro Ao Cadastrar o controle de Data ');</script>";
            $sql="rollback"; 
            $exsql= pg_query($con,$sql);
            echo $voltalogin;
        }
        if ($loja1 > 0) {
            $sql="insert into ahcontas values (nextval('seque_ahcontas'),1,'FATURAMENTO ATACADÃO', $loja1,0.00,11,16,39,'','','$data',NULL,NULL,0,
            '$ref',1,0,0,0,'',0,'','$data','$time',1,'AUTOMÁTICO',NULL,NULL,0,'','',NULL,NULL,NULL,NULL,0,0,0,0,NULL,NULL,0,NULL,NULL,11,NULL,'','',0,NULL,
            NULL, 0, 0)";
            $exsql= pg_query($con,$sql);
            if (!$exsql){
                session_destroy();
                $sql="rollback";
                $exsql= pg_query($con,$sql);
                echo "<script>alert('Erro Ao Cadastrar o Primeiro Lançamento De Faturamento ');</script>";
                echo $voltalogin;
            }
        }
        if ($juro1 > 0) {
            $sql="insert into ahcontas values (nextval('seque_ahcontas'),1,'JUROS ATACADÃO', $juro1,0.00,11,17,49,'','','$data',NULL,NULL,0,
            '$ref',1,0,0,0,'',0,'','$data','$time',1,'AUTOMÁTICO',NULL,NULL,0,'','',NULL,NULL,NULL,NULL,0,0,0,0,NULL,NULL,0,NULL,NULL,11,NULL,'','',0,NULL,
            NULL, 0, 0)";
            $exsql= pg_query($con,$sql);
            if (!$exsql){
                session_destroy();
                $sql="rollback";
                $exsql= pg_query($con,$sql);
                echo "<script>alert('Erro Ao Cadastrar o Primeiro Lançamento De Juro ');</script>";
                echo $voltalogin;
            }
        }
        if ($troca1 > 0) {
            $sql="insert into ahcontas values (nextval('seque_ahcontas'),1,'DEVOLUÇÕES ATACADÃO', 0.00,$troca1,11,11,34,'','','$data',NULL,NULL,0,
            '$ref',1,0,0,0,'',0,'','$data','$time',1,'AUTOMÁTICO',NULL,NULL,0,'','',NULL,NULL,NULL,NULL,0,0,0,0,NULL,NULL,0,NULL,NULL,11,NULL,'','',0,NULL,
            NULL, 0, 0)";
            $exsql= pg_query($con,$sql);
            if (!$exsql){
                session_destroy();
                $sql="rollback";
                $exsql= pg_query($con,$sql);
                echo "<script>alert('Erro Ao Cadastrar o Primeiro Lançamento De Trocas ');</script>";
                echo $voltalogin;
            }
        }
        if ($loja2 > 0) {
            $sql="insert into ahcontas values (nextval('seque_ahcontas'),1,'FATURAMENTO APOLO', $loja2,0.00,11,16,39,'','','$data',NULL,NULL,0,
            '$ref',1,0,0,0,'',0,'','$data','$time',1,'AUTOMÁTICO',NULL,NULL,0,'','',NULL,NULL,NULL,NULL,0,0,0,0,NULL,NULL,0,NULL,NULL,5,NULL,'','',0,NULL,
            NULL, 0, 0)";
            $exsql= pg_query($con,$sql);
            if (!$exsql){
                session_destroy();
                $sql="rollback";
                $exsql= pg_query($con,$sql);
                echo "<script>alert('Erro Ao Cadastrar o Segundo Lançamento De Faturamento ');</script>";
                echo $voltalogin;
            }
        }
        if ($juro2 > 0) {
            $sql="insert into ahcontas values (nextval('seque_ahcontas'),1,'JUROS APOLO', $juro2,0.00,11,17,49,'','','$data',NULL,NULL,0,
            '$ref',1,0,0,0,'',0,'','$data','$time',1,'AUTOMÁTICO',NULL,NULL,0,'','',NULL,NULL,NULL,NULL,0,0,0,0,NULL,NULL,0,NULL,NULL,5,NULL,'','',0,NULL,
            NULL, 0, 0)";
            $exsql= pg_query($con,$sql);
            if (!$exsql){
                session_destroy();
                $sql="rollback";
                $exsql= pg_query($con,$sql);
                echo "<script>alert('Erro Ao Cadastrar o Segundo Lançamento De Juro ');</script>";
                echo $voltalogin;
            }
        }
        if ($troca2 > 0) {
            $sql="insert into ahcontas values (nextval('seque_ahcontas'),1,'DEVOLUÇÕES APOLO', 0.00,$troca2,11,11,34,'','','$data',NULL,NULL,0,
            '$ref',1,0,0,0,'',0,'','$data','$time',1,'AUTOMÁTICO',NULL,NULL,0,'','',NULL,NULL,NULL,NULL,0,0,0,0,NULL,NULL,0,NULL,NULL,5,NULL,'','',0,NULL,
            NULL, 0, 0)";
            $exsql= pg_query($con,$sql);
            if (!$exsql){
                session_destroy();
                $sql="rollback";
                $exsql= pg_query($con,$sql);
                echo "<script>alert('Erro Ao Cadastrar o Segundo Lançamento De Trocas ');</script>";
                echo $voltalogin;
            }
        }               
        $sql="commit";
        $exsql= pg_query($con,$sql);        
    }
}
if ($base=='V') {
    $loja13=$_SESSION['loja13'];
    $juro13=$_SESSION['juro13'];
    $troca13=$_SESSION['troca13'];
    $loja15=$_SESSION['loja15'];
    $juro15=$_SESSION['juro15'];
    $troca15=$_SESSION['troca15'];
    $loja17=$_SESSION['loja17'];
    $juro17=$_SESSION['juro17'];
    $troca17=$_SESSION['troca17'];
    if(!@($con=pg_connect ("host=192.168.16.74 dbname=resultvideira port=5435 user=postgres password=ky$14gr@"))){
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados Do Result de Videira Data:$dia  Hora:$time </font></b></p>";
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
    $sql="select data from automatico where data = '$data' and base = '$base'";
    $exsql= pg_query($con,$sql);
    $resulsql= pg_fetch_array($exsql);
    $ultima=$resulsql['data'];
    if ($ultima <> null) {
        session_destroy();
        echo "<script>alert('Data Já Lançada');</script>";
        echo $voltalogin;
        exit;
    } else {
        $sql="begin";
        $exsql= pg_query($con,$sql);
        $sql="insert into automatico values ('$data','$base')";
        $exsql= pg_query($con,$sql);
        if (!$exsql){
            session_destroy();
            echo "<script>alert('Erro Ao Cadastrar o controle de Data ');</script>";
            $sql="rollback"; 
            $exsql= pg_query($con,$sql);
            echo $voltalogin;
        }
        if ($loja13 > 0) {
            $sql="insert into ahcontas values (nextval('seque_ahcontas'),1,'FATURAMENTO VIDEIRA', $loja13,0.00,11,16,39,'','','$data',NULL,NULL,0,
            '$ref',1,0,0,0,'',0,'','$data','$time',1,'AUTOMÁTICO',NULL,NULL,0,'','',NULL,NULL,NULL,NULL,0,0,0,0,NULL,NULL,0,NULL,NULL,6,NULL,'','',0,NULL,
            NULL, 0, 0)";
            $exsql= pg_query($con,$sql);
            if (!$exsql){
                session_destroy();
                $sql="rollback";
                $exsql= pg_query($con,$sql);
                echo "<script>alert('Erro Ao Cadastrar o Primeiro Lançamento De Faturamento ');</script>";
                echo $voltalogin;
            }
        }        
        if ($juro13 > 0) {
            $sql="insert into ahcontas values (nextval('seque_ahcontas'),1,'JUROS VIDEIRA', $juro13,0.00,11,17,49,'','','$data',NULL,NULL,0,
            '$ref',1,0,0,0,'',0,'','$data','$time',1,'AUTOMÁTICO',NULL,NULL,0,'','',NULL,NULL,NULL,NULL,0,0,0,0,NULL,NULL,0,NULL,NULL,6,NULL,'','',0,NULL,
            NULL, 0, 0)";
            $exsql= pg_query($con,$sql);
            if (!$exsql){
                session_destroy();
                $sql="rollback";
                $exsql= pg_query($con,$sql);
                echo "<script>alert('Erro Ao Cadastrar o Primeiro Lançamento De Juro ');</script>";
                echo $voltalogin;
            }
        }
        if ($troca13 > 0) {
            $sql="insert into ahcontas values (nextval('seque_ahcontas'),1,'DEVOLUÇÕES VIDEIRA', 0.00,$troca13,11,11,34,'','','$data',NULL,NULL,0,
            '$ref',1,0,0,0,'',0,'','$data','$time',1,'AUTOMÁTICO',NULL,NULL,0,'','',NULL,NULL,NULL,NULL,0,0,0,0,NULL,NULL,0,NULL,NULL,6,NULL,'','',0,NULL,
            NULL, 0, 0)";
            $exsql= pg_query($con,$sql);
            if (!$exsql){
                session_destroy();
                $sql="rollback";
                $exsql= pg_query($con,$sql);
                echo "<script>alert('Erro Ao Cadastrar o Primeiro Lançamento De Trocas ');</script>";
                echo $voltalogin;
            }
        }
        if ($loja15 > 0) {
            $sql="insert into ahcontas values (nextval('seque_ahcontas'),1,'FATURAMENTO MARTELLO', $loja15,0.00,11,16,39,'','','$data',NULL,NULL,0,
            '$ref',1,0,0,0,'',0,'','$data','$time',1,'AUTOMÁTICO',NULL,NULL,0,'','',NULL,NULL,NULL,NULL,0,0,0,0,NULL,NULL,0,NULL,NULL,7,NULL,'','',0,NULL,
            NULL, 0, 0)";
            $exsql= pg_query($con,$sql);
            if (!$exsql){
                session_destroy();
                $sql="rollback";
                $exsql= pg_query($con,$sql);
                echo "<script>alert('Erro Ao Cadastrar o Segundo Lançamento De Faturamento ');</script>";
                echo $voltalogin;
            }
        }
        if ($juro15 > 0) {
            $sql="insert into ahcontas values (nextval('seque_ahcontas'),1,'JUROS MARTELLO', $juro15,0.00,11,17,49,'','','$data',NULL,NULL,0,
            '$ref',1,0,0,0,'',0,'','$data','$time',1,'AUTOMÁTICO',NULL,NULL,0,'','',NULL,NULL,NULL,NULL,0,0,0,0,NULL,NULL,0,NULL,NULL,7,NULL,'','',0,NULL,
            NULL, 0, 0)";
            $exsql= pg_query($con,$sql);
            if (!$exsql){
                session_destroy();
                $sql="rollback";
                $exsql= pg_query($con,$sql);
                echo "<script>alert('Erro Ao Cadastrar o Segundo Lançamento De Juro ');</script>";
                echo $voltalogin;
            }
        }
        if ($troca15 > 0) {
            $sql="insert into ahcontas values (nextval('seque_ahcontas'),1,'DEVOLUÇÕES MARTELLO', 0.00,$troca15,11,11,34,'','','$data',NULL,NULL,0,
            '$ref',1,0,0,0,'',0,'','$data','$time',1,'AUTOMÁTICO',NULL,NULL,0,'','',NULL,NULL,NULL,NULL,0,0,0,0,NULL,NULL,0,NULL,NULL,7,NULL,'','',0,NULL,
            NULL, 0, 0)";
            $exsql= pg_query($con,$sql);
            if (!$exsql){
                session_destroy();
                $sql="rollback";
                $exsql= pg_query($con,$sql);
                echo "<script>alert('Erro Ao Cadastrar o Segundo Lançamento De Trocas ');</script>";
                echo $voltalogin;
            }
        }
        if ($loja17 > 0) {
            $sql="insert into ahcontas values (nextval('seque_ahcontas'),1,'FATURAMENTO SHOP VIDEIRA', $loja17,0.00,11,16,39,'','','$data',NULL,NULL,0,
            '$ref',1,0,0,0,'',0,'','$data','$time',1,'AUTOMÁTICO',NULL,NULL,0,'','',NULL,NULL,NULL,NULL,0,0,0,0,NULL,NULL,0,NULL,NULL,8,NULL,'','',0,NULL,
            NULL, 0, 0)";
            $exsql= pg_query($con,$sql);
            if (!$exsql){
                session_destroy();
                $sql="rollback";
                $exsql= pg_query($con,$sql);
                echo "<script>alert('Erro Ao Cadastrar o Segundo Lançamento De Faturamento ');</script>";
                echo $voltalogin;
            }
        }
        if ($juro17 > 0) {
            $sql="insert into ahcontas values (nextval('seque_ahcontas'),1,'JUROS SHOP VIDEIRA', $juro17,0.00,11,17,49,'','','$data',NULL,NULL,0,
            '$ref',1,0,0,0,'',0,'','$data','$time',1,'AUTOMÁTICO',NULL,NULL,0,'','',NULL,NULL,NULL,NULL,0,0,0,0,NULL,NULL,0,NULL,NULL,8,NULL,'','',0,NULL,
            NULL, 0, 0)";
            $exsql= pg_query($con,$sql);
            if (!$exsql){
                session_destroy();
                $sql="rollback";
                $exsql= pg_query($con,$sql);
                echo "<script>alert('Erro Ao Cadastrar o Segundo Lançamento De Juro ');</script>";
                echo $voltalogin;
            }
        }
        if ($troca17 > 0) {
            $sql="insert into ahcontas values (nextval('seque_ahcontas'),1,'DEVOLUÇÕES SHOP VIDEIRA', 0.00,$troca17,11,11,34,'','','$data',NULL,NULL,0,
            '$ref',1,0,0,0,'',0,'','$data','$time',1,'AUTOMÁTICO',NULL,NULL,0,'','',NULL,NULL,NULL,NULL,0,0,0,0,NULL,NULL,0,NULL,NULL,8,NULL,'','',0,NULL,
            NULL, 0, 0)";
            $exsql= pg_query($con,$sql);
            if (!$exsql){
                session_destroy();
                $sql="rollback";
                $exsql= pg_query($con,$sql);
                echo "<script>alert('Erro Ao Cadastrar o Segundo Lançamento De Trocas ');</script>";
                echo $voltalogin;
            }
        }       
        $sql="commit";
        $exsql= pg_query($con,$sql);        
    }
}
session_destroy();
echo "<script>alert('Lançamento concluido sem erros ');</script>";
echo $voltalogin;
?>
