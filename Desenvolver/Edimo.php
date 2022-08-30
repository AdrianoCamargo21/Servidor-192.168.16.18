<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
error_reporting(0);
date_default_timezone_set('America/Sao_Paulo');
$time=date('H:i:s');
$dia= date('Y-m-d');
set_time_limit(0);
$volta="<script>window.location='http://192.168.13.2/Desenvolver/Edimo.html'</script>";
//$base=$_POST['base'];
$base = 'C';
if ($base == null){
	exit("<script>alert('Data Inválida');</script>".$volta);
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







//$tipo=$_POST['tipo'];
$tipo == 'C';
//$cod=$_POST['cod'];
$cod='14';
$arquivo = 'planilha.xls';
$html = '';
$html .= '<table>';
$html .= '<tr>';
$html .= '<td><b>*CPF/CNPJ</b></td>';
$html .= '<td><b>*NOME / RAZÃO SOCIAL</b></td>';
$html .= '<td><b>FILIAL</b></td>';
$html .= '<td><b>*NÚMERO CONTRATO</b></td>';
$html .= '<td><b>DATA CONTRATO</b></td>';
$html .= '<td><b>DATA CONTRATO</b></td>';
$html .= '<td><b>DATA CONTRATO</b></td>';
$html .= '<td><b>DATA CONTRATO</b></td>';
$html .= '<td><b>DATA CONTRATO</b></td>';
$html .= '<td><b>DATA CONTRATO</b></td>';
$html .= '<td><b>DATA CONTRATO</b></td>';
$html .= '<td><b>DATA CONTRATO</b></td>';
$html .= '<td><b>DATA CONTRATO</b></td>';
$html .= '<td><b>DATA CONTRATO</b></td>';
$html .= '<td><b>DATA CONTRATO</b></td>';
$html .= '<td><b>DATA CONTRATO</b></td>';
$html .= '<td><b>DATA CONTRATO</b></td>';
$html .= '<td><b>DATA CONTRATO</b></td>';
$html .= '<td><b>DATA CONTRATO</b></td>';
$html .= '<td><b>DATA CONTRATO</b></td>';
$html .= '<td><b>DATA CONTRATO</b></td>';
$html .= '<td><b>DATA CONTRATO</b></td>';
$html .= '<td><b>DATA CONTRATO</b></td>';
$html .= '<td><b>DATA CONTRATO</b></td>';
$html .= '<td><b>DATA CONTRATO</b></td>';
$html .= '<td><b>DATA CONTRATO</b></td>';
$html .= '<td><b>DATA CONTRATO</b></td>';
$html .= '<td><b>DATA CONTRATO</b></td>';
$html .= '<td><b>DATA CONTRATO</b></td>';
$html .= '<td><b>DATA CONTRATO</b></td>';
$html .= '<td><b>DATA CONTRATO</b></td>';
$html .= '<td><b>DATA CONTRATO</b></td>';
$html .= '<td><b>DATA CONTRATO</b></td>';
$html .= '<td><b>DATA CONTRATO</b></td>';
$html .= '</tr>';




if ($tipo='C'){
	$sql="select ccodigo from aclientes where ctipcliente = '$cod' order by ccodigo";
	$exsql=pg_query($con,$sql);
    while ($row = pg_fetch_assoc($exsql)) {
        $codigo=$row['ccodigo'];
        $com="select codigo from acessoria where codigo = $codigo ";
        $excom=pg_query($con,$com);
	    $rscon=pg_fetch_array($excom);
	    $cliente=$rscon['codigo'];
	    if ($cliente == null) {
	    	$query="INSERT INTO acessoria(codigo, datacadastro)VALUES ($codigo,'$dia' )";
	    	$exquery=pg_query($con,$query);
	    	
	    }
	   
        
    }
}
$html .= '</tr>';
$html .= '</table>';
header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
header ("Cache-Control: no-cache, must-revalidate");
header ("Pragma: no-cache");
header ("Content-type: application/x-msexcel");
header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
header ("Content-Description: PHP Generated Data" );
echo $html;












exit;

?>