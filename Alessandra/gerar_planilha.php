<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
session_start();
include_once("conexao.php");
date_default_timezone_set('America/Sao_Paulo');
$time = date('H:i:s');
$dia = date('Y-m-d');
set_time_limit(0);
error_reporting(0);
$volta = "<script>window.location='http://192.168.13.2/Alessandra/'</script>";
session_start();
include_once('conexao.php');
$botao = $_POST["bt"];
if ($botao == 'CANCELAR') {
    session_destroy();
    echo "<script>alert('Desconectado com Sucesso!!');</script>";
    echo $volta;
    exit;
} 
if ($botao == 'GERAR PLANILHA') {
    $base = $_POST['base'];
    if ($base == 'C') {
        $arquivo = 'cacador.xls';
        $con = $conc;
    } elseif ( $base = 'L') {
        $arquivo = 'lages.xls';
        $con = $conl;
    } else {
        session_destroy();
        echo "<script>alert('Erro ao Carregar a Base!!');</script>";
        echo $volta;
        exit;
    }
    echo "<table border='2' width='100%' bgcolor=#FFFFFF >";
    echo "<tr><td>CPF/CNPJ</td>"."<td>NOME / RAZAO SOCIAL</td>"."<td>FILIAL</td>"."<td>NUMERO CONTRATO</td>"."<td>DATA CONTRATO</td>"
        ."<td>PLANO</td>"."<td>TIPO DE PRODUTO</td>"."<td>OBSERVACAO  CONTRATO</td>"."<td>PARCELA</td>"."<td>VENCIMENTO</td>"."<td>VALOR</td>"
        ."<td>OBSERVACAO PARCELA</td>"."<td>TEL. RESIDENCIAL 1</td>"."<td>TEL. RESIDENCIAL 2</td>"."<td>TEL. COMERCIAL 1</td>"."<td>TEL. COMERCIAL 2</td>"
        ."<td>TEL. CELULAR 1</td>"."<td>TEL. CELULAR 2</td>"."<td>TEL. REFERENCIA 1</td>"."<td>TEL. REFERENCIA 2</td>"
        ."<td>TEL. REFERENCIA 3</td>"."<td>OBS.  TEL. REFERENCIA 3</td>"."<td>EMAIL 1</td>"."<td>EMAIL 2</td>"."<td>EMAIL 3</td>"
        ."<td>ENDERECO RES</td>"."<td>NUMERO RES.</td>"."<td>COMPLEMENTO RES</td>"."<td>BAIRRO RES</td>"."<td>CEP  RES.</td>"
        ."<td>CIDADE RES</td>"."<td>UF RES</td>"."<td>ENDERECO COM</td>"."<td>NUMERO COM</td>"."<td>COMPLEMENTO COM</td>"
        ."<td>BAIRRO COM</td>"."<td>CEP  COM</td>"."<td>CIDADE COM</td>"."<td>UF COM</td>"."<td>RG/IE COM</td>"
        ."<td>DATA NASC</td>"."<td>PAI</td>"."<td>MAE</td>"."</tr>";
    $sql = "begin";
    $exsql = pg_query($con , $sql); 
    $sql = "select case when cpessoa = 'F' then ccpf else ccnpj end as cpf_cnpj,
                case when cpessoa = 'F' then cnomecliente else s_acl_denominacao_social end as nome ,ccnpjempresa,
                cnotdupli,cemisaidas,'CREDIARIO',cnprdupli,cvendupli,cvprdupli,'',cfoneresidencial,'',cfonecomercial,'',
                cfonecelular,'','','','','','','','email','','',
                cendereco,i_acl_endereco_numero,cproximidade,cbairro,ccep,ccidade,cuf,'','','','','','','',
                case when cpessoa = 'F' then cdocumento else cinsest end as rg_ie,cnascimento,cpai,cmae
                 from asduplicatas
                 inner join clientes_aces on cclidupli = codigo
                 inner join aclientes on ccodigo = cclidupli
                 inner join tempresa on cempdupli = ccodempresa
                 left join asaidas on cisadupli = cidesaidas
                where  enviado = 0 and cvpadupli = 0 and cdpadupli is null
                 order by nome,cvendupli";
    $exsql = pg_query($con , $sql);
    while($row = pg_fetch_assoc($exsql)){
        echo "<td>".$row["cpf_cnpj"]."</td>\n";
        echo "<td>".$row["nome"]."</td>\n";
        echo "<td>".$row["ccnpjempresa"]."</td>\n";
        echo "<td>".$row["cnotdupli"]."</td>\n";
        echo "<td>".$row["cemisaidas"]."</td>\n";
        echo "<td>".''."</td>\n";
        echo "<td>".'CREDIARIO'."</td>\n";
        echo "<td>".''."</td>\n";
        echo "<td>".$row["cnprdupli"]."</td>\n";
        echo "<td>".$row["cvendupli"]."</td>\n";
        echo "<td>".$row["cvprdupli"]."</td>\n";
        echo "<td>".''."</td>\n";
        echo "<td>".$row["cfoneresidencial"]."</td>\n";
        echo "<td>".''."</td>\n";
        echo "<td>".$row["cfonecomercial"]."</td>\n";
        echo "<td>".''."</td>\n";
        echo "<td>".$row["cfonecelular"]."</td>\n";
        echo "<td>".''."</td>\n"; echo "<td>".''."</td>\n"; echo "<td>".''."</td>\n"; echo "<td>".''."</td>\n"; echo "<td>".''."</td>\n";
        echo "<td>".''."</td>\n"; echo "<td>".''."</td>\n"; echo "<td>".''."</td>\n";
        echo "<td>".$row["cendereco"]."</td>\n";
        echo "<td>".$row["i_acl_endereco_numero"]."</td>\n";
        echo "<td>".$row["cproximidade"]."</td>\n";
        echo "<td>".$row["cbairro"]."</td>\n";
        echo "<td>".$row["ccep"]."</td>\n";
        echo "<td>".$row["ccidade"]."</td>\n";
        echo "<td>".$row["cuf"]."</td>\n";
        echo "<td>".''."</td>\n"; echo "<td>".''."</td>\n"; echo "<td>".''."</td>\n"; echo "<td>".''."</td>\n"; echo "<td>".''."</td>\n"; echo "<td>".''."</td>\n"; echo "<td>".''."</td>\n";
        echo "<td>".$row["rg_ie"]."</td>\n";
        echo "<td>".$row["cnascimento"]."</td>\n";
        echo "<td>".$row["cpai"]."</td>\n";
        echo "<td>".$row["cmae"]."</td>\n";
        echo "</tr>";
    }
    $sql = "update clientes_aces set enviado = 1 where  enviado = 0 ";
    $exsql = pg_query($con ,$sql);
    if (!$exsql){
        $sql = "ROLLBACK";
        $exsql = pg_query($con,$sql);
        echo "<script>alert('Erro ao Incluir lancamento loja: $ger');</script>"; 
    } else {
        $sql = "COMMIT";
        $exsql = pg_query($con,$sql);
    }
    echo "</table>";
    echo "<br>";
}

	
?>
<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<title>Contato</title>
	<head>
	<body>
<center>
	<br><br>
	 <form method="POST" action="index.php">
	<br><br>   
    
    <input name= "bt"  class="btn btn-red"   type="submit" value="FECHAR" />
    <br><br>
    </center>
