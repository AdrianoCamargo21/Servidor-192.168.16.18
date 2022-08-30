

<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
$voltalogin="<script>window.location='http://192.168.13.2/Desenvolver/historico.html';</script>";

$base=$_POST["Sistema"];


if ($base== '1'){
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
    $histori=$_POST["Edestino"];
    if ($histori== '' or $histori <= '0'){
        echo "<script>alert('empresa de destino inválida');</script>";
        echo $voltalogin;
    }
        
    $Cacador=pg_connect("host=192.168.10.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@");
    $comandoid= "select cidesaidas from asaidas where cnotsaidas = $Nfe and cemisaidas = '$DNfe'and cempresasaidas = '$EmpNfe' ";
    $Excomandoid= pg_query($comandoid);
    $Resulcomandoid= pg_fetch_array($Excomandoid);
    $id=$Resulcomandoid['cidesaidas'];
    if ($id==''){
        pg_close($Cacador);
        echo "<script>alert('Nota Fiscal, Data ou empresa Invalida');</script>";
        echo $voltalogin;
    }
    pg_query("update ahistorico set cemphistorico ='$histori' where cisahistorico = '$id'");
    pg_query($Cacador,"update asaidas set cempresasaidas = '$histori' where cidesaidas = '$id' ");
    pg_close($Cacador);
    echo "<script>alert('Histórico Atualizado com Sucesso');</script>";
    echo $voltalogin;
}