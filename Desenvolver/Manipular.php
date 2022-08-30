<?php
header("Content-Type: text/html; charset=ISO-8859-1",true);
set_time_limit(0);
$time=date('H:i:s');
$dia= date('Y-m-d');
$voltalogin="<script>window.location='http://192.168.13.2/Desenvolver/Manipular.html';</script>";
error_reporting(0);
$base=$_POST["base"];
if ($base == '') {
	echo "<script>alert('Base Inválida');</script>";
	echo $voltalogin;
	exit;
}
$erro = "
	<p style=background:#000000; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista Favor avisar o Adriano</font></b></p>
	<!DOCTYPE html>
		<html>
		<head>
		<center><img src='img/error.jpg' alt='500' heigth='500px' width='100px'></center>
		</head>
	</html>";
if(!@($serv=pg_connect ("host=192.168.16.190 dbname=viabrasil port=5430 user=postgres password=ky$14gr@"))){
	echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados do Servidor Data:$dia  Hora:$time </font></b></p>";
	exit($erro);
}
if ($base ==  1) {
	$servidor="Caçador";
	if(!@($con=pg_connect ("host=192.168.16.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@"))){
		echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Caçador Data:$dia  Hora:$time </font></b></p>";
		exit($erro);
	}	
}
if ($base ==  2) {
	$servidor="Lages";
	if(!@($con=pg_connect ("host=192.168.16.190 dbname=troll_lages port=5430 user=postgres password=ky$14gr@"))){
		echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Lages Data:$dia  Hora:$time </font></b></p>";
		exit($erro);
	}	
}
if ($base ==  3) {
	$servidor="Videira";
	if(!@($con=pg_connect ("host=192.168.16.190 dbname=troll_videira port=5430 user=postgres password=ky$14gr@"))){
		echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Videira Data:$dia  Hora:$time </font></b></p>";
		exit($erro);
	}	
}
if ($base ==  4) {
	$servidor="Joinville";
	if(!@($con=pg_connect ("host=192.168.16.190 dbname=troll_joinville port=5430 user=postgres password=ky$14gr@"))){
		echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Joinville Data:$dia  Hora:$time </font></b></p>";
		exit($erro);
	}	
}
$tipo=$_POST["tipo"];
if ($tipo == 'MA'){
	$emp=$_POST["emp"];
	if ($emp == null) {		
		echo "<script>alert('Empresa Inválida');</script>";
		pg_close($serv);
		pg_close($con);
		echo $voltalogin;
		exit;
	}
	if ($emp%2 <> 0) {
		echo "<script>alert('Empresa Não Pode Ser Manipulada');</script>";
		pg_close($serv);
		pg_close($con);
		echo $voltalogin;
		exit;
	}
	$arquivo = "manipula.txt";	
	if (file_exists($arquivo)) {
	    unlink($arquivo);
	}
	$nome_temporario=$_FILES["Arquivo"]["tmp_name"];
	$nome_real=$_FILES["Arquivo"]["name"];
	if (!copy($nome_temporario,$nome_real)){
	    echo "<script>alert('Erro ao Carregar o Arquivo');</script>";
		pg_close($serv);
		pg_close($con);
		echo $voltalogin;
		exit;
	}
	$antigo="$nome_real";
	$arquivo_novo="manipula.txt";
	rename($antigo,$arquivo_novo);
	if (file_exists('manipula.txt')){
		echo "<p style=background:#00FF00; align=center <br/><b><font size=5 color=#0000FF>Códigos Não Consta No Sistema</font></b></p>";
		echo "<table border='5' width='100%' bgcolor=#E3F6CE >";
		echo "<tr><td>Código</td>"."<td>Descrição</td>"."<td>Linha</td>"."<td>Marca</td>"."<td>Grupo</td>"."<td>Departamento</td>"."</tr>";
		$arquivo = 'manipula.txt';
	    $arq = fopen($arquivo,'r');
	    $ll=0;
	    $sql="delete from itens_manipular";
	    $exsql= pg_query($serv,$sql);
		while(!feof($arq))		
	        for($i=0; $i<1; $i++){
	            if ($conteudo = fgets($arq)){
	                $ll++;
	                $linha = explode(';', $conteudo);
	                $sql= "select ccodproduto from aprodutos where ccodproduto = $linha[0] and csitproduto =0 ";
                    $exsql= pg_query($con,$sql);
					$rssql= pg_fetch_array($exsql);
					$codl=$rssql['ccodproduto'];					
					if ($codl == ''){
						$sql= "select ccodproduto from aprodutos where cantpoduto = $linha[0] and csitproduto =0 ";
	                    $exsql= pg_query($con,$sql);
						$rssql= pg_fetch_array($exsql);
						$codl=$rssql['ccodproduto'];
						 if ($codl == '') {
							echo "<td>".$linha[0]."</td>\n";
							echo "<td>"."Produto Não Encontrado No Banco de Dados"."</td>\n";
							echo "<td>".null."</td>\n";
							echo "<td>".null."</td>\n";
							echo "<td>".null."</td>\n";
							echo "<td>".null."</td>\n";
							echo "</tr>\n";
							$linha = array();
						} else{
							$cod=$codl;
						}
					} else {
						$cod = $codl;	
					}
					if ($cod <> '') {
						$sql="select quantidade from itens_manipular where codigo = $cod";
						$exsql= pg_query($serv,$sql);
						$rssql= pg_fetch_array($exsql);
						$qtd=$rssql['quantidade'];
						if ($qtd == null){
							$sql="INSERT INTO itens_manipular(codigo, quantidade) VALUES ($cod, $linha[1])";
							$exsql= pg_query($serv,$sql);
							$linha = array();
						} else{
							$qtd =$qtd+$linha[1];
							$sql="update itens_manipular set quantidade = $qtd where codigo=$cod";
							$exsql= pg_query($serv,$sql);
							$linha = array();
						}
					}
                }
        }
        $sql="select codigo,quantidade from itens_manipular ";
        $exsql=pg_query($serv,$sql);
        while ($row = pg_fetch_assoc($exsql)) {
			$cod=$row['codigo'];
			$qtd=$row['quantidade'];
	        $com="select logar('COPIA',1,0);INSERT INTO ahistorico(
            cidehistorico, cienhistorico, cisahistorico, cipehistorico, ctiphistorico, 
            cmothistorico, cprohistorico, cemihistorico, cvcohistorico, cvcuhistorico, 
            cvbrhistorico, cvlqhistorico, cvdeshistorico, cvfrehistorico, 
            cvachistorico, cvichistorico, cviphistorico, cvishistorico, cvfihistorico, 
            cvtothistorico, cdeshistorico, ccfohistorico, csaihisotorico, 
            centhistorico, cforhistorico, cclihistorico, cicmhistorico, cipihistorico, 
            cisshistorico, cluchistorico, cpdehistorico, cpfrhistorico, cpachistorico, 
            cpfihistorico, cpcohistorico, cvohistorico, ctipphistorico, cdtcahistorico, 
            chocahistorico, cuscadhistorico, copcadhistorico, cdtatuhistorico, 
            choatuhistorico, copatuhistorico, cusatuhistorico, cemphistorico, 
            cvarealhistorico, cbaiesthistorico, fot_historico, dep_historico, 
            valor_foto, perc_cus_ope, val_cus_ope, perc_imp_venda, val_imp_venda, 
            prec_mim_produto, i_ahi_codigo_cat, i_ahi_codigo_sct, i_ahi_codigo_ven, 
            n_ahi_valor_custo_venda, n_ahi_perc_custo_venda, n_ahi_perc_reducao, 
            n_ahi_valor_icms_formacao_preco, n_ahi_perc_icms_formacao_preco, 
            n_ahi_valor_lucro_zero, n_ahi_valor_lucro, n_ahi_custo_medio, 
            n_ahi_preco_padrao, n_ahi_perc_fun_rural, n_ahi_valor_fun_rural, 
            i_ahi_cultura_aplicar, i_ahi_receita_ide, n_ahi_base_icms, n_ahi_base_substituicao, 
            n_ahi_icms_substituicao, i_ahi_seq_ordem_item, s_ahi_cfop_contabil, 
            i_ahi_clas_fical, s_ahi_sit_tributaria, n_ahi_per_icms_subs, 
            n_ahi_per_conv_subst, i_ahi_codigo_fprc, i_ahi_codigo_feve, i_ahi_ide_pedido, 
            i_ahi_codigo_parceria, i_ahi_ide_historico_pedido, n_ahi_qtd_entregue_pedido, 
            i_ahi_ide_ahi, i_ahi_saldo_produto, i_ahi_ide_romaneio, s_ahi_obs_item, 
            i_ahi_cod_produto_cli_acl, n_ahi_valor_desconto_nota, n_ahi_perc_desconto_item, 
            i_ahi_codigo_tcb, n_ahi_perc_desc_nota, n_ahi_valor_tot_item, 
            n_ahi_valor_tot_nota, n_ahi_valor_desc_item, n_ahi_valor_pis, 
            n_ahi_valor_cofins, i_ahi_codigo_aor, s_ahi_complemento_impresso, 
            s_ahi_garantia_prod, i_ahi_codigo_aor_indice, i_ahi_codigo_ahi_indice, 
            i_ahi_codigo_orp, s_ahi_cst_ipi, s_ahi_cst_pis, s_ahi_cst_cofins, 
            n_ahi_base_cofins, n_ahi_base_pis, n_ahi_base_ipi, n_ahi_aliquota_pis, 
            n_ahi_aliquota_cofins, s_ahi_indicacao_movimento, n_ahi_aliquota_st, 
            s_ahi_apuracao_ipi, s_ahi_cod_enquadramento_ipi, n_ahi_qtd_base_pis, 
            n_ahi_aliq_pis_reais, n_ahi_qtde_base_cofins, n_ahi_aliq_cofins_reais, 
            i_ahi_csosn, i_ahi_numero_adicao, i_ahi_num_seq_item_adicao, 
            s_ahi_cod_fabri_estrangeiro, n_ahi_valor_desc_item_di, n_ahi_valor_red_icms, 
            n_ahi_seguro_item, s_ahi_totalizador_parcial, n_ahi_perc_seguro, 
            i_ahi_csosn_xml, s_ahi_sit_tributaria_xml, n_ahi_base_ii, n_ahi_valor_ii, 
            n_ahi_aliquota_ii, n_ahi_base_icms_xml, n_ahi_aliq_icms_xml, 
            n_ahi_valor_icms_xml, n_ahi_base_st_xml, n_ahi_valor_st_xml, 
            n_ahi_valor_acrescimo_item, s_ahi_cst_pis_xml, s_ahi_cst_cofins_xml, 
            n_ahi_base_cofins_xml, n_ahi_base_pis_xml, n_ahi_valor_pis_xml, 
            n_ahi_valor_cofins_xml, s_ahi_operacao, i_ahi_codigo_cna, s_ahi_codigo_lei116, 
            n_ahi_desp_aduaneiras, i_ahi_codigo_frem, i_ahi_codigo_fpro, 
            n_ahi_tot_impostos, n_ahi_qtde_devolvido, n_ahi_perc_red_icms_st, 
            n_ahi_vlr_red_base_icms_st, i_ahi_cod_devolucao, s_ahi_chave_fci, 
            n_ahi_mva_xml, i_ahi_ide_entregue, i_ahi_uso_cosumo, n_ahi_perc_diferimento, 
            s_ahi_codigo_ser_mun, i_ahi_valor_imposto_diferido, s_ahi_pedido_compra_nfe, 
            i_ahi_item_ped_compra_nfe, s_ahi_cest, n_ahi_perc_ipi_devol, 
            n_ahi_valor_ipi_devol)
    		VALUES (nextval('seque_ahistorico'),NULL,0,0,'O','SAÍDA DEFEITO VENCIDO',$cod,'$dia',0.000,0.0000,0.0000,0.0000,0.0000,0.0000, 
            0.0000,0.0000,0.0000,0.0000,0.0000,0.00,'$desc','',$qtd,0.0000,NULL,0,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.000,0,'$dia', 
            '$time','LEVANTAMENTO',1,NULL,NULL,NULL,'',$emp,0.00,0,0,0,0.00,NULL,NULL,NULL,NULL,0.00,0,0,0,0.0000,0.0000,0.00,0.0000,0.00,0.0000,0.0000,0.0000, 
            0.00,0.00,0.00,0,0,0.0000,0.0000,0.0000,0,'',0,'',0.00,0.00,NULL,NULL,NULL,NULL,NULL,0.0000,0,NULL,NULL,'',0,0.00,0.00,0,0.00,0.0000,0.0000,0.00,0.00, 
            0.00,0,'','',NULL,NULL,NULL,'','','',0.00,0.00,0.00,0.00,0.00,'',0.00,'','',0.000,0.0000,0.0000,0.0000,0,0,0,'',0.00,0.00,0.00,NULL,NULL,NULL,'',0.00,0.00, 
            0.00,NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL,NULL,NULL,NULL,'',NULL,'',NULL,0,0,0.00,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,'',NULL,'',NULL,'',NULL,NULL)";
            $excom=pg_query($con,$com);
			if (!$excom){
				echo "<script>alert('Erro  Ao Manipular o Item :$cod');</script>";		
			}
			
        }
	}else {
		echo "<script>alert('Erro ao Carregar o Arquivo');</script>";
		pg_close($serv);
		pg_close($con);
		echo $voltalogin;
		exit;
	}               
	                
	           
} else {
	echo "Em Desenvolvilmento";	
}
?>