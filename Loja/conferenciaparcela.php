<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
$volta="<script>window.location='http://192.168.13.2:8080/loja/conferenciaparcela.html'</script>";
date_default_timezone_set('America/Sao_Paulo');
$time=date('H:i:s');
$dia= date('d-m-Y');
$data= date('Y-m-d');
set_time_limit(0);
$base=$_POST['base'];
if ($base == null){
    echo "<script>alert('Base Inválida');</script>";echo "$volta";exit;
}
$dtini=$_POST['dataini'];
if ($dtini== '') {
    $dtini=$data;
}
$dtfin=$_POST['datafin'];
if ($dtfin=='') {
    $dtfin=$data;
}
if ($dtini < '2021-07-20') {
    echo "<script>alert('Data Inicial ainda não existia conferência');</script>";echo "$volta";exit;
}
if ($dtfin < $dtini) {
    echo "<script>alert('Data final menor que a inicial');</script>";echo "$volta";exit;
}
$dataia = implode("/",array_reverse(explode("-",$dtini)));
$datafa = implode("/",array_reverse(explode("-",$dtfin)));
if(!@($serv=pg_connect ("host=192.168.16.74 dbname=viabrasil port=5435 user=postgres password=ky$14gr@"))){
    echo "<script>alert('Sem Cominicação com nossos Servidores Tente Novamente Mais Tarde');</script>";
    exit($volta);
}
if ($base == 1) {
    if(!@($conc=pg_connect ("host=192.168.16.2 dbname=troll port=5430 user=postgres password=ky$14gr@"))){
        echo "<script>alert('Sem Cominicação com nossos Servidores Tente Novamente Mais Tarde');</script>";
        exit($volta);
    }
    if(!@($conj=pg_connect ("host=192.168.16.3 dbname=troll port=5434 user=postgres password=ky$14gr@"))){
        echo "<script>alert('Sem Cominicação com nossos Servidores Tente Novamente Mais Tarde');</script>";
        exit($volta);
    }
    if(!@($conv=pg_connect ("host=192.168.9.10 dbname=troll port=5433 user=postgres password=ky$14gr@"))){
        echo "<script>alert('Sem Cominicação com nossos Servidores Tente Novamente Mais Tarde');</script>";
        exit($volta);
    }
    $sql="delete from conferencia";
    $exsql=pg_query($serv,$sql);
    $sql="select cusadupli,cclidupli from asduplicatas where cdpadupli >= '$dtini' and cdpadupli <= '$dtfin' group by cusadupli,cclidupli order by cusadupli";
    $exsql=pg_query($conc,$sql);
    while($dados=pg_fetch_array($exsql)){
        $operador=$dados['cusadupli'];
        $cod=$dados['cclidupli'];       
        $com="INSERT INTO conferencia VALUES ($cod,'$operador')";
        $excom=pg_query($serv,$com);
    }
    $exsql=pg_query($conv,$sql);
    while($dados=pg_fetch_array($exsql)){
        $operador=$dados['cusadupli'];
        $cod=$dados['cclidupli'];
        $com="INSERT INTO conferencia VALUES ($cod,'$operador')";
        $excom=pg_query($serv,$com);
    }
    $exsql=pg_query($conj,$sql);
    while($dados=pg_fetch_array($exsql)){
        $operador=$dados['cusadupli'];
        $cod=$dados['cclidupli'];
        $com="INSERT INTO conferencia VALUES ($cod,'$operador')";
        $excom=pg_query($serv,$com);
    }
    echo "<html><h3><center>Consulta de baixas sem conferência pelo site </center></h3></html>";
    echo "<html><h3><center>De:$dataia até $datafa </center></h3></html>";
    echo "<table border='2' width='100%' bgcolor=#FFFFFF >";
    echo '<br><br>';
    echo "<tr><td>Operador</td>"."<td>Cód.Cliente</td>"."<td>Cliente</td>"."</tr>";
    $sql="select operador,cod from conferencia order by operador ";
    $exsql=pg_query($serv,$sql);
    while($dados=pg_fetch_array($exsql)){
        $operador=$dados['operador'];
        $cod=$dados['cod'];
        $com="select ccodigo from consulta where data >='$dtini' and data <= '$dtfin' and ccodigo = $cod";
        $excom=pg_query($serv,$com);
        $rscom=pg_fetch_array($excom);
        $resul=$rscom['ccodigo'];
        if ($resul == null) {
            $com="select cnomecliente from aclientes where ccodigo =$cod";
            $excom=pg_query($conc,$com);
            $rscom=pg_fetch_array($excom);
            $nome=$rscom['cnomecliente'];
            echo "<td>".$operador."</td>\n";
            echo "<td>".$cod."</td>\n";
            echo "<td>".$nome."</td>\n";
            echo "</tr>\n"; 
        }
        
    }
    echo "</table>";
}
?>
<!DOCTYPE html>
<html>
<head>
<center>
<title>ViaBrasil.bay</title>
<br><br>
<link rel="stylesheet" href="css/style.css"></link>
<a title='Imprimir' href='javascript:window.print()'><img src="img/impressora.jpg" alt="50" heigth ="70px" width="70px"  border="0" /></a>
<br><br>
<center><form name = "form1" method= "post" action= "conferenciaparcela.html">
<input class="btn btn-red" type="submit" value="Voltar"/>

<br><br>
</center>
</head>
</html>



