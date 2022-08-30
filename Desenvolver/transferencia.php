

<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
$voltalogin="<script>window.location='http://192.168.13.2/Desenvolver/transferencia.html';</script>";

$base=$_POST["Sistema"];
$Nfe=$_POST["Nnfe"];
if($Nfe == '' or $Nfe < '0'  ){
    echo "<script>alert('Numero da Nfe Não Pode Ser Vaziu ou Negativo');</script>";
    echo $voltalogin;
}
$DNfe=$_POST["Dtnfe"];
if ($DNfe == ''){
    echo "<script>alert('A data de emissão hé obrigatória');</script>";
    echo $voltalogin;
}
$EmpNfe=$_POST["Empnfe"];
if ($EmpNfe== '' or $EmpNfe <= '0'){
    echo "<script>alert('Numero da Nfe invalido');</script>";
    echo $voltalogin;
}

if ($base== '1'){       
    $LocalCacador=pg_connect("host=192.168.16.2 dbname=troll port=5430 user=postgres password=ky$14gr@");
}
if ($base== '2'){
    $LocalCacador=pg_connect("host=192.168.9.10 dbname=troll port=5430 user=postgres password=ky$14gr@");
}
$comandoid= "select cidesaidas from asaidas where cnotsaidas = $Nfe and cemisaidas = '$DNfe'and cempresasaidas = '$EmpNfe' ";
$Excomandoid= pg_query($comandoid);
$Resulcomandoid= pg_fetch_array($Excomandoid);
$id=$Resulcomandoid['cidesaidas'];
if ($id==''){
    pg_close( $LocalCacador);
    echo "<script>alert('Nota Fiscal, Data ou empresa Invalida');</script>";
    echo $voltalogin;
}
$comandocnpj= "select ccnpjempresa from tempresa where ccodempresa = '$EmpNfe'";
$Excomandocnpj= pg_query($comandocnpj);
$Resulcomandocnpj= pg_fetch_array($Excomandocnpj);
$cnpj=$Resulcomandocnpj['ccnpjempresa'];
$comandocnpjf= "select ccodfornecedor from afornecedor where ccgcfornecedor = '$cnpj'";
$Excomandocnpjf= pg_query($comandocnpjf);
$Resulcomandocnpjf= pg_fetch_array($Excomandocnpjf);
$cnpjf=$Resulcomandocnpjf['ccodfornecedor'];
if ($cnpjf== ''){
    pg_close( $LocalCacador);
    echo "<script>alert('CNPJ da Empresa Selecionada Não esta Cadastrada como Fornecedor');</script>";
    echo $voltalogin;
}
$comandonota= "select *from aentradas where cemientradas = '$DNfe' and cnfientradas ='$Nfe' and cforentradas = '$cnpjf'  ";
$Excomandonota= pg_query($comandonota);
$Resulcomandonota= pg_fetch_array($Excomandonota);
if ($Resulcomandonota == ''){
    pg_close( $LocalCacador);
    echo "<script>alert('Nota Fiscal Ainda Não foi Lançada ou esta com fornecedor errado');</script>";
    echo $voltalogin;
}
pg_query ("update aentradas set i_aen_ide_saida_trans = '$id' where cnfientradas = '$Nfe' and cemientradas = '$DNfe' and cforentradas = '$cnpjf' ");
pg_close( $LocalCacador);
echo "<script>alert('Nfe Veinculada Com sucesso');</script>";
echo $voltalogin;
