<!DOCTYPE html>
<html>
<head>
<title>Reduções</title>
<center><img src="img/fundo1.jpg"alt="10" heigth ="100px" width="400px" ></center>
<center><img src="img/reducao.jpg"alt="10" heigth ="100px" width="100px" ></center>
</head>
</html>

<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
$voltalogin="<script>window.location='http://192.168.13.2/Desenvolver/Reducao.html'</script>";
$erro="<script>alert('Não Foi possivel Conectar ao Banco de dados');</script>";

$base=$_POST['base'];

if ($base == 'C'){
    if(!@($conex=pg_connect('host=192.168.10.30 dbname=troll port=5430 user=postgres password=ky$14gr@'))) {
    pg_close($conex);
    echo "$erro";
    echo "$voltalogin";
    exit;
    }
}

if ($base == 'V'){
    if(!@($conex=pg_connect('host=192.168.10.99 dbname=troll port=5433 user=postgres password=ky$14gr@'))) {
        pg_close($conex);
        echo "$erro";
        echo "$voltalogin";
        exit;
    }
}


if ($base == 'J'){
    if(!@($conex=pg_connect('host=192.168.12.3 dbname=troll port=5434 user=postgres password=ky$14gr@'))) {
        pg_close($conex);
        echo "$erro";
        echo "$voltalogin";
        exit;
    }
}
if ($base == 'L'){
    if(!@($conex=pg_connect('host=192.168.11.2 dbname=Troll port=5431 user=postgres password=ky$14gr@'))) {
        pg_close($conex);
        echo "$erro";
        echo "$voltalogin";
        exit;
    }
}



$Datinc=$_POST['datainicial'];
$Datfin=$_POST['datafinal'];

if ($Datinc == '' ){
    echo '<script>window.alert(\'Data Inicial Invalida \');</script>';
    pg_close($conex);
    echo "$voltalogin";
}
if ($Datfin == '' ){
    echo '<script>window.alert(\'Data Final Invalida \');</script>';
    pg_close($conex);
    echo "$voltalogin";
}
if ($Datinc > $Datfin ){
    echo '<script>window.alert(\'Data Inicial Maior que Data Final \');</script>';
    pg_close($conex);
    echo "$voltalogin";
}

$procreducoes=("SELECT I_C405_CRZ, D_C405_DT_DOC,I_C405_CODIGO_TSE,cempserie  FROM C405 inner join 
tseriesnf on I_C405_CODIGO_TSE = cserserie   WHERE   D_C405_DT_DOC >= '$Datinc' 
AND D_C405_DT_DOC <= '$Datfin'  ORDER BY cempserie;");
$exprocreducoes=pg_query($procreducoes);
$rsprocreducoes=pg_fetch_array($exprocreducoes);
$empr=$rsprocreducoes['cempserie'];
$empr01=$empr;
$procreducoes=("SELECT I_C405_CRZ, D_C405_DT_DOC,I_C405_CODIGO_TSE,cempserie  FROM C405 inner join
tseriesnf on I_C405_CODIGO_TSE = cserserie   WHERE   D_C405_DT_DOC >= '$Datinc'
AND D_C405_DT_DOC <= '$Datfin'  ORDER BY cempserie desc ;");
$exprocreducoes=pg_query($procreducoes);
$rsprocreducoes=pg_fetch_array($exprocreducoes);
$empr=$rsprocreducoes['cempserie'];
$empr02=$empr;

if ($empr01 == ''){
    echo "<script>alert('Nenhuma Redução faltado Neste periodo');</script>";
    pg_close($conex);
    echo "$voltalogin";
    exit;
}

while ($empr01 <= $empr02 ){
    $procreducoes=("SELECT I_C405_CRZ, D_C405_DT_DOC,I_C405_CODIGO_TSE,cempserie  FROM C405 inner join
tseriesnf on I_C405_CODIGO_TSE = cserserie   WHERE   D_C405_DT_DOC >= '$Datinc'
AND D_C405_DT_DOC <= '$Datfin' and cempserie = '$empr01'  ORDER BY I_C405_CODIGO_TSE;");
    $exprocreducoes=pg_query($procreducoes);
    $rsprocreducoes=pg_fetch_array($exprocreducoes);
    $serie1=$rsprocreducoes['i_c405_codigo_tse'];

    $procreducoes=("SELECT I_C405_CRZ, D_C405_DT_DOC,I_C405_CODIGO_TSE,cempserie  FROM C405 inner join
tseriesnf on I_C405_CODIGO_TSE = cserserie   WHERE   D_C405_DT_DOC >= '$Datinc'
AND D_C405_DT_DOC <= '$Datfin' and cempserie = '$empr01'  ORDER BY I_C405_CODIGO_TSE desc ;");
    $exprocreducoes=pg_query($procreducoes);
    $rsprocreducoes=pg_fetch_array($exprocreducoes);
    $serie2=$rsprocreducoes['i_c405_codigo_tse'];
      
    while ($serie1 <= $serie2){
        $procreducoes=("SELECT I_C405_CRZ, D_C405_DT_DOC,I_C405_CODIGO_TSE,cempserie  FROM C405 inner join
tseriesnf on I_C405_CODIGO_TSE = cserserie   WHERE   D_C405_DT_DOC >= '$Datinc'
AND D_C405_DT_DOC <= '$Datfin' and cempserie = '$empr01' and I_C405_CODIGO_TSE = '$serie1' ORDER BY I_C405_CRZ ;");
        $exprocreducoes=pg_query($procreducoes);
        $rsprocreducoes=pg_fetch_array($exprocreducoes);
        $nume01=$rsprocreducoes['i_c405_crz'];
        $procreducoes=("SELECT I_C405_CRZ, D_C405_DT_DOC,I_C405_CODIGO_TSE,cempserie  FROM C405 inner join
tseriesnf on I_C405_CODIGO_TSE = cserserie   WHERE   D_C405_DT_DOC >= '$Datinc'
AND D_C405_DT_DOC <= '$Datfin' and cempserie = '$empr01' and I_C405_CODIGO_TSE = '$serie1' ORDER BY I_C405_CRZ desc ;");
        $exprocreducoes=pg_query($procreducoes);
        $rsprocreducoes=pg_fetch_array($exprocreducoes);
        $nume02=$rsprocreducoes['i_c405_crz'];

        while ($nume01 < $nume02){
            $procreducoes=("SELECT I_C405_CRZ, D_C405_DT_DOC,I_C405_CODIGO_TSE,cempserie  FROM C405 inner join
tseriesnf on I_C405_CODIGO_TSE = cserserie   WHERE cempserie = '$empr01' and I_C405_CODIGO_TSE = '$serie1' and  i_c405_crz = $nume01 ORDER BY I_C405_CRZ ;");
            set_time_limit(120);
            $exprocreducoes=pg_query($procreducoes);
            $rsprocreducoes=pg_fetch_array($exprocreducoes);
            $valida=$rsprocreducoes['i_c405_crz'];
            if ($valida == ''){
                echo "<br/><b><font color=\"#FF0000\">Pulou Uma Redução:$nume01,Serie:$serie1,Empresa:$empr01</font></b>";                
            }
            $nume01 ++;
        }
        $procreducoes=("SELECT I_C405_CRZ, D_C405_DT_DOC,I_C405_CODIGO_TSE,cempserie  FROM C405 inner join
tseriesnf on I_C405_CODIGO_TSE = cserserie   WHERE   D_C405_DT_DOC >= '$Datinc'
AND D_C405_DT_DOC <= '$Datfin' and cempserie = '$empr01' and I_C405_CODIGO_TSE > $serie1  ORDER BY I_C405_CODIGO_TSE;");
        $exprocreducoes=pg_query($procreducoes);
        $rsprocreducoes=pg_fetch_array($exprocreducoes);
        $serie1=$rsprocreducoes['i_c405_codigo_tse'];
        if ($serie1 == ''){
            break;
        }
    }
    $procreducoes=("SELECT I_C405_CRZ, D_C405_DT_DOC,I_C405_CODIGO_TSE,cempserie  FROM C405 inner join
tseriesnf on I_C405_CODIGO_TSE = cserserie   WHERE   D_C405_DT_DOC >= '$Datinc'
AND D_C405_DT_DOC <= '$Datfin' and cempserie > $empr01 ORDER BY cempserie;");
    $exprocreducoes=pg_query($procreducoes);
    $rsprocreducoes=pg_fetch_array($exprocreducoes);
    $empr01=$rsprocreducoes['cempserie'];
    if ($empr01 == ''){
        break;
    }    
}
echo "<br/><b><font color=\"#000000\">Fim De Busca!!</font></b>";
pg_close($conex);
?>