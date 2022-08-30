 <?php
    header("Content-Type: text/html; charset=ISO-8859-1",true);
	session_start();
	include_once('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Clientes</title>
	<head>
	<body>
		<?php
		// Definimos o nome do arquivo que serÃ¡ exportado
		$arquivo = 'edimo.xls';
		
		// Criamos uma tabela HTML com o formato da planilha
		$html = '';
		$html .= '<table border="1">';	
		$html .= '<tr>';
		$html .= '<td><b>CPF/CNPJ</b></td>';
		$html .= '<td><b>NOME / RAZÃO SOCIAL</b></td>';
		$html .= '<td><b>FILIAL</b></td>';
		$html .= '<td><b>NÚMERO CONTRATO</b></td>';
		$html .= '<td><b>DATA CONTRATO</b></td>';
		$html .= '<td><b>PLANO</b></td>';
		$html .= '<td><b>TIPO DE PRODUTO</b></td>';
		$html .= '<td><b>OBSERVAÇÃO  CONTRATO</b></td>';
		$html .= '<td><b>PARCELA</b></td>';
		$html .= '<td><b>VENCIMENTO</b></td>';
		$html .= '<td><b>VALOR</b></td>';
		$html .= '<td><b>OBSERVAÇÃO PARCELA</b></td>';
		$html .= '<td><b>TEL. RESIDENCIAL 1</b></td>';
		$html .= '<td><b>TEL. RESIDENCIAL 2</b></td>';
		$html .= '<td><b>TEL. COMERCIAL 1</b></td>';
		$html .= '<td><b>TEL. COMERCIAL 2</b></td>';
		$html .= '<td><b>TEL. CELULAR 1</b></td>';
		$html .= '<td><b>TEL. CELULAR 2</b></td>';
		$html .= '<td><b>TEL. REFERÊNCIA 1</b></td>';
		$html .= '<td><b>OBS.  TEL. REFERÊNCIA 1</b></td>';
		$html .= '<td><b>TEL. REFERÊNCIA 2</b></td>';
		$html .= '<td><b>OBS.  TEL. REFERÊNCIA 2</b></td>';
		$html .= '<td><b>TEL. REFERÊNCIA 3</b></td>';
		$html .= '<td><b>OBS.  TEL. REFERÊNCIA 3</b></td>';
		$html .= '<td><b>EMAIL 1</b></td>';
		$html .= '<td><b>EMAIL 2</b></td>';
		$html .= '<td><b>EMAIL 3</b></td>';
		$html .= '<td><b>ENDEREÇO RES</b></td>';
		$html .= '<td><b>NUMERO RES.</b></td>';
		$html .= '<td><b>COMPLEMENTO RES.</b></td>';
		$html .= '<td><b>BAIRRO RES.</b></td>';
		$html .= '<td><b>CEP  RES.</b></td>';
		$html .= '<td><b>CIDADE RES.</b></td>';
		$html .= '<td><b>UF RES.</b></td>';
		$html .= '<td><b>ENDEREÇO COM</b></td>';
		$html .= '<td><b>NUMERO COM</b></td>';
		$html .= '<td><b>COMPLEMENTO COM</b></td>';
		$html .= '<td><b>BAIRRO COM</b></td>';
		$html .= '<td><b>CEP  COM</b></td>';
		$html .= '<td><b>CIDADE COM</b></td>';
		$html .= '<td><b>UF COM.</b></td>';
		$html .= '<td><b>RG/IE COM</b></td>';
		$html .= '<td><b>DATA NASC</b></td>';
		$html .= '<td><b>PAI</b></td>';
		$html .= '<td><b>MAE</b></td>';
		$html .= '</tr>';		
		//Selecionar todos os itens da tabela 
		$sql = "select case when cpessoa = 'F' then ccpf else ccnpj end as cpf_cnpj,
                case when cpessoa = 'F' then cnomecliente else s_acl_denominacao_social end as nome ,ccnpjempresa,
                cnotdupli,cemisaidas,'CREDIARIO',cnprdupli,cvendupli,cvprdupli,'',cfoneresidencial,'',cfonecomercial,'',
                cfonecelular,'','','','','','','','email','','',
                cendereco,i_acl_endereco_numero,cproximidade,cbairro,ccep,ccidade,cuf,'','','','','','','',
                case when cpessoa = 'F' then cdocumento else cinsest end as rg_ie,cnascimento,cpai,cmae 
                 from asduplicatas 
                 inner join aclientes on ccodigo = cclidupli
                 inner join tempresa on cempdupli = ccodempresa
                 left join asaidas on cisadupli = cidesaidas
                where  ctipcliente = '21' and cvpadupli = 0 and cdpadupli is null 
                 order by nome,cvendupli";
		$exsql = pg_query($conc , $sql);		
		while($row = pg_fetch_assoc($exsql)){
			$html .= '<tr>';
			$html .= '<td>'.$row["cpf_cnpj"].'</td>';
			$html .= '<td>'.$row["nome"].'</td>';
			$html .= '<td>'.$row["ccnpjempresa"].'</td>';
			$html .= '<td>'.$row["cnotdupli"].'</td>';
			$html .= '<td>'.$row["cemisaidas"].'</td>';
			$html .= '<td>'.''.'</td>';
			$html .= '<td>'.'CREDIARIO'.'</td>';
			$html .= '<td>'.''.'</td>';
			$html .= '<td>'.$row["cnprdupli"].'</td>';
			$html .= '<td>'.$row["cvendupli"].'</td>';
			$html .= '<td>'.$row["cvprdupli"].'</td>';
			$html .= '<td>'.''.'</td>';
			$html .= '<td>'.$row["cfoneresidencial"].'</td>';
			$html .= '<td>'.''.'</td>';
			$html .= '<td>'.$row["cfonecomercial"].'</td>';
			$html .= '<td>'.''.'</td>';
			$html .= '<td>'.$row["cfonecelular"].'</td>';
			$html .= '<td>'.''.'</td>';$html .= '<td>'.''.'</td>';$html .= '<td>'.''.'</td>';$html .= '<td>'.''.'</td>';$html .= '<td>'.''.'</td>';
			$html .= '<td>'.''.'</td>';$html .= '<td>'.''.'</td>';
			$html .= '<td>'.'email'.'</td>';
			$html .= '<td>'.''.'</td>';
			$html .= '<td>'.''.'</td>';
			$html .= '<td>'.$row["cendereco"].'</td>';$html .= '<td>'.$row["i_acl_endereco_numero"].'</td>';
			$html .= '<td>'.$row["cproximidade"].'</td>';$html .= '<td>'.$row["cbairro"].'</td>';$html .= '<td>'.$row["ccep"].'</td>';
			$html .= '<td>'.$row["ccidade"].'</td>';$html .= '<td>'.$row["cuf"].'</td>';$html .= '<td>'.''.'</td>';$html .= '<td>'.''.'</td>';
			$html .= '<td>'.''.'</td>';$html .= '<td>'.''.'</td>';$html .= '<td>'.''.'</td>';$html .= '<td>'.''.'</td>';$html .= '<td>'.''.'</td>';
			$html .= '<td>'.$row["rg_ie"].'</td>';$html .= '<td>'.$row["cnascimento"].'</td>';$html .= '<td>'.$row["cpai"].'</td>';
			$html .= '<td>'.$row["cmae"].'</td>';
			//$data = date('d/m/Y H:i:s',strtotime($row["cnascimento"]));
			//$html .= '<td>'.$data.'</td>';
			$html .= '</tr>';
			;
		}
		
		//ConfiguraÃ§Ãµes header para forÃ§ar o download
		header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
		header ("Cache-Control: no-cache, must-revalidate");
		header ("Pragma: no-cache");
		header ("Content-type: application/x-msexcel");
		header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
		header ("Content-Description: PHP Generated Data" );
		// Envia o conteÃºdo do arquivo
		echo $html;
		
		exit; ?>
	</body>
</html>