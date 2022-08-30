<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
$voltalogin="<script>window.location='http://192.168.13.2:8080/Desenvolver/Tidas.html';</script>";
date_default_timezone_set('America/Sao_Paulo');
$time=date('H:i:s');
$dia= date('d-m-Y');
$data= date ('Y-m-d');
set_time_limit(0);
$dataini=$_POST["datai"];
if ($dataini == null){
	$dataini=$data;
} 
$datafin=$_POST["dataf"];
if ($datafin == null){
	$datafin=$data;
} 
$base=$_POST["base"];
if ($base==null) {    
    echo "<script>alert('Base Inválida');</script>";
    echo $voltalogin;
    exit;
}
$empresa=$_POST["emp"];
if ($empresa==null) {    
    echo "<script>alert('Empresa Inválida');</script>";
    echo $voltalogin;
    exit;
}
if ($base == 'C'){
	if(!@($con=pg_connect ("host=192.168.10.30 dbname=troll port=5430 user=postgres password=ky$14gr@"))){
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
}
if ($base == 'V'){
	if(!@($con=pg_connect ("host=192.168.9.10 dbname=troll port=5433 user=postgres password=ky$14gr@"))){
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
}
if ($base == 'J'){
	if(!@($con=pg_connect ("host=192.168.10.153 dbname=troll port=5434 user=postgres password=ky$14gr@"))){
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
}
if ($base == 'L'){
	if(!@($con=pg_connect ("host=192.168.11.2 dbname=Troll port=5431 user=postgres password=ky$14gr@"))){
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
}
function formata_cpf_cnpj($cpf_cnpj){
    /*
        Pega qualquer CPF e CNPJ e formata

        CPF: 000.000.000-00
        CNPJ: 00.000.000/0000-00
    */

    ## Retirando tudo que não for número.
    $cpf_cnpj = preg_replace("/[^0-9]/", "", $cpf_cnpj);
    $tipo_dado = NULL;
    if(strlen($cpf_cnpj)==11){
        $tipo_dado = "cpf";
    }
    if(strlen($cpf_cnpj)==14){
        $tipo_dado = "cnpj";
    }
    switch($tipo_dado){
        default:
            $cpf_cnpj_formatado = "Não foi possível definir tipo de dado";
        break;

        case "cpf":
            $bloco_1 = substr($cpf_cnpj,0,3);
            $bloco_2 = substr($cpf_cnpj,3,3);
            $bloco_3 = substr($cpf_cnpj,6,3);
            $dig_verificador = substr($cpf_cnpj,-2);
            $cpf_cnpj_formatado = $bloco_1.".".$bloco_2.".".$bloco_3."-".$dig_verificador;
        break;

        case "cnpj":
            $bloco_1 = substr($cpf_cnpj,0,2);
            $bloco_2 = substr($cpf_cnpj,2,3);
            $bloco_3 = substr($cpf_cnpj,5,3);
            $bloco_4 = substr($cpf_cnpj,8,4);
            $digito_verificador = substr($cpf_cnpj,-2);
            $cpf_cnpj_formatado = $bloco_1.".".$bloco_2.".".$bloco_3.".".$bloco_4."-".$digito_verificador;
        break;
    }
    return $cpf_cnpj_formatado;
}
function mask($val, $mask)
{
    $maskared = '';
    $k = 0;
    for($i = 0; $i<=strlen($mask)-1; $i++)
    {
        if($mask[$i] == '#')
        {
            if(isset($val[$k]))
                $maskared .= $val[$k++];
        }
        else
        {
            if(isset($mask[$i]))
                $maskared .= $mask[$i];
        }
    }
    return $maskared;
}
$sql="select ccnpjempresa from tempresa where ccodempresa = '$empresa'";
$exsql= pg_query($con,$sql);
$resulsql= pg_fetch_array($exsql);
$cnpj=$resulsql['ccnpjempresa'];
if ($cnpj == '02534216000162') {
	$codigo='1743.csv';
}elseif ($cnpj == '02534216000243'){
	$codigo='1744.csv';
}elseif ($cnpj == '02534216000324'){
	$codigo='1745.csv';
}elseif ($cnpj == '02534216000405'){
	$codigo='1746.csv';
}elseif ($cnpj == '02534216000596'){
	$codigo='1742'.'-1.csv';
}elseif ($cnpj == '02534216000677'){
	$codigo='1747.csv';
}elseif ($cnpj == '18103672000198'){
	$codigo='1736.csv';
}elseif ($cnpj == '18103672000279'){
	$cnpj=formata_cpf_cnpj($cnpj);
	$codigo=$cnpj.".csv";
}elseif ($cnpj == '26484625000160'){
	$codigo='1738.csv';
}elseif ($cnpj == '26484625000240'){
	$codigo='1739.csv';
}elseif ($cnpj == '26484625000321'){
	$codigo='1738-1.csv';
}elseif ($cnpj == '28401154000104'){
	$codigo='1741.csv';
}elseif ($cnpj == '28401154000295'){
	$codigo='1742.csv';
}

$dataia = implode("-",array_reverse(explode("-",$dataini)));
$datafa = implode("-",array_reverse(explode("-",$datafin)));
//$arquivo=$cnpj.".csv";
$arquivo=$codigo;
if (file_exists($arquivo)) {
    unlink($arquivo);
}
$arqu = fopen($arquivo, 'w');
$sql="select ccpf,cisadupli,cnprdupli,cvprdupli,cvpadupli,cdesdupli,(cvendupli) as venc,(cdpadupli) as pag,
replace(cvpadupli,'.',',') as valor,replace(cvprdupli,'.',',') as valocorr from asduplicatas 
inner join aclientes on ccodigo = cclidupli
where cdpadupli >= '$dataini' and cdpadupli <= '$datafin'and cempdupli = $empresa 
order by cdpadupli,cisadupli";
$exsql=pg_query($con,$sql);
while($row = pg_fetch_assoc($exsql)){
	$venc=$row['venc'];
	$valorcorr=$row['valocorr'];
	$ide=$row['cisadupli'];
	$parcela=$row['cnprdupli'];
	$valor=$row['cvprdupli'];
	$valorp=$row['cvpadupli'];
	$dtpg=$row['pag'];
	$desc=$row['cdesdupli'];
	$valoraj=$row['valor'];
	$cpf=$row['ccpf'];
	if ($cpf <> null){
		$cpf=mask($cpf,'###.###.###-##');
	}	
	$antigovalor=$valorp+$desc;
	if ($antigovalor < $valor){
		$tipo='0';
	} else {
		$tipo='1';
	}
	$f=fopen($arquivo,"a+",0); 
								    	
	$nova=$ide.";".$cpf.";".$parcela.";".$venc.";".$valorcorr.";".$dtpg.";".$valoraj.";".$tipo.";"."\n";								
	fwrite($f,$nova,strlen($nova));
	fclose($f); 		

}
echo "<script>alert('Arquivo Gerado');</script>";
echo $voltalogin;
?>
	



