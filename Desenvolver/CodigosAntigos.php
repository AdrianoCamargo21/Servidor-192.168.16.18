<?php
header("Content-Type: text/html; charset=ISO-8859-1",true);
date_default_timezone_set('America/Sao_Paulo');
set_time_limit(0);
$time=date('H:i:s');
$hora=date('H-i-s');
$dia= date('Y-m-d');
$diabrasil=date('d-m-Y');
$voltalogin="<script>window.location='http://192.168.13.2/Desenvolver/CodigosAntigos.html';</script>";
//error_reporting(0);
$erro = "
	<p style=background:#000000; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista Favor avisar o Adriano</font></b></p>
	<!DOCTYPE html>
		<html>
		<head>
		<center><img src='img/error.jpg' alt='500' heigth='500px' width='100px'></center>
		</head>
	</html>";
if(!@($congc=pg_connect ("host=192.168.10.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@"))){
	echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Videira Data:$dia  Hora:$time </font></b></p>";
	exit($erro);
}	
if(!@($congj=pg_connect ("host=192.168.10.190 dbname=troll_joinville port=5430 user=postgres password=ky$14gr@"))){
	echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Joinville Data:$dia  Hora:$time </font></b></p>";
	exit($erro);
}
if(!@($conl=pg_connect ("host=192.168.10.30 dbname=troll port=5430 user=postgres password=ky$14gr@"))){
	echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Videira Data:$dia  Hora:$time </font></b></p>";
	exit($erro);
}
$emp=$_POST["emp"];
if ($emp == null) {		
	echo "<script>alert('Empresa Inválida');</script>";
	echo $voltalogin;
	exit;
}
$dataf=$_POST["data"];
if ($dataf == null) {
	$dataf= date('Y-m-d');		
}
$sql="delete from aprodutosj";
$exsql=pg_query($congj,$sql);
$exsql=pg_query($conl,$sql);
/*$sql="select cprohistorico,sum(centhistorico-csaihisotorico) from ahistorico inner join aprodutos on ccodproduto = cprohistorico
	where cemphistorico in ($emp) and cprohistorico <= 34519 
	and clinproduto <> 54 and clinproduto <> 75 and clinproduto <> 103
	GROUP BY cprohistorico,cqtdproduto
	order by cprohistorico";
*/
$sql="select cprohistorico,sum(csaihisotorico) from ahistorico where cisahistorico = 1000046047
GROUP  by cprohistorico
order by cprohistorico";
$exsql=pg_query($congj,$sql);
while($row = pg_fetch_assoc($exsql)){
    $cod=$row['cprohistorico'];
    $qtd=$row['sum'];
    if ($qtd > 0){
    	$com="insert into aprodutosj select *from aprodutos where ccodproduto=$cod ";
    	
    	pg_query($congj,$com);
    }   
}

$sql= "SELECT COUNT(*) FROM aprodutosj";
$exsql=pg_query($congj,$sql);
$resulsql=pg_fetch_array($exsql);
$totallp=$resulsql['count'];

$sql="select *from aprodutosj";
$exsql=pg_query($congj,$sql);
while($row = pg_fetch_assoc($exsql)){
    $ccodproduto=$row['ccodproduto'];
    $ctipproduto=$row['ctipproduto'];$cdesproduto=$row['cdesproduto'];$crefporduto=$row['crefporduto'];$cbarproduto=$row['cbarproduto'];$cpveproduto=$row['cpveproduto'];$cpcuproduto=$row['cpcuproduto'];$cpcoproduto=$row['cpcoproduto'];
    $cuniproduto=$row['cuniproduto'];$cmaxproduto=$row['cmaxproduto'];$clucproduto=$row['clucproduto'];$ceidproduto=$row['ceidproduto'];$cminproduto=$row['cminproduto'];$ccomproduto=$row['ccomproduto'];$cpelproduto=$row['cpelproduto'];
    $cpebproduto=$row['cpebproduto'];$ccadproduto=$row['ccadproduto'];
    if ($ccadproduto =='') {
        $ccadproduto='NULL';
    } else {    
        $ccadproduto="'$ccadproduto'";
    }
    
    $cantpoduto=$row['cantpoduto'];$cfotproduto=$row['cfotproduto'];$ccplproduto=$row['ccplproduto'];$cgruporduto=$row['cgruporduto'];
    if ($cgruporduto=='') {
        $cgruporduto='NULL';
    }
    $clinproduto=$row['clinproduto'];$cmarproduto=$row['cmarproduto'];
    if ($cmarproduto== '') {
        $cmarproduto='NULL';
    }
    $ctriproduto=$row['ctriproduto'];$cdepproduto=$row['cdepproduto'];$csitproduto=$row['csitproduto'];$ctab1produto=$row['ctab1produto'];$ctab2produto=$row['ctab2produto'];$ctab3produto=$row['ctab3produto'];$cdtcadproduto=$row['cdtcadproduto'];$chocadproduto=$row['chocadproduto'];
    $copcadproduto=$row['copcadproduto'];$cuscadproduto=$row['cuscadproduto'];$cdtatuproduto=$row['cdtatuproduto'];$copatuproduto=$row['copatuproduto'];
    if ($copatuproduto == null) {
    	$copatuproduto='NULL';
    }
    $cusatuproduto=$row['cusatuproduto'];$cqtde3produto=$row['cqtde3produto'];
    $cqtdmtemp=$row['cqtdmtemp'];$cqtd1temp=$row['cqtd1temp'];$cqtd2temp=$row['cqtd2temp'];$cqtd3temp=$row['cqtd3temp'];$cvalcustemp=$row['cvalcustemp'];$cvalcomptemp=$row['cvalcomptemp'];$cvalvendtemp=$row['cvalvendtemp'];$cpriceprotection=$row['cpriceprotection'];$cpriceback=$row['cpriceback'];
    $cvalortabela=$row['cvalortabela'];$cconfprice=$row['cconfprice'];$cperaltvenda=$row['cperaltvenda'];$cponestoque=$row['cponestoque'];$clistaprecos=$row['clistaprecos'];$tip_lab_loja=$row['tip_lab_loja'];
    if ($tip_lab_loja =='') {
        $tip_lab_loja = 'NULL';
    }
    $tot_imp_venda=$row['tot_imp_venda'];
    if ($tot_imp_venda==''){
        $tot_imp_venda='NULL';
    }
    $preco_minimo=$row['preco_minimo'];$preco_padrao=$row['preco_padrao'];
    $per_dif_precos=$row['per_dif_precos'];
    if ($per_dif_precos==''){
        $per_dif_precos='NULL';
    }
    
    $imagem=$row['imagem'];
    if($imagem==''){
        $imagem='NULL';
    }
    $n_pro_comissaofot=$row['n_pro_comissaofot'];
    if ($n_pro_comissaofot== '') {
        $n_pro_comissaofot='NULL';
    }
    $i_pro_tipo_comissao=$row['i_pro_tipo_comissao'];
    if ($i_pro_tipo_comissao==''){
        $i_pro_tipo_comissao='NULL';
    }
    $i_pro_tipo_cobranca=$row['i_pro_tipo_cobranca'];
    if ($i_pro_tipo_cobranca=='') {
        $i_pro_tipo_cobranca='NULL';
    }
    $n_pro_valor_n1=$row['n_pro_valor_n1'];$n_pro_valor_n2=$row['n_pro_valor_n2'];
    $n_pro_valor_n3=$row['n_pro_valor_n3'];$n_pro_valor_n4=$row['n_pro_valor_n4'];$n_pro_valor_n5=$row['n_pro_valor_n5'];$n_pro_valor_n6=$row['n_pro_valor_n6'];$n_pro_valor_n7=$row['n_pro_valor_n7'];$n_pro_valor_n8=$row['n_pro_valor_n8'];$n_pro_valor_n9=$row['n_pro_valor_n9'];
    $n_pro_valor_n10=$row['n_pro_valor_n10'];$n_pro_valor_ven1=$row['n_pro_valor_ven1'];$n_pro_valor_ven2=$row['n_pro_valor_ven2'];$n_pro_valor_ven3=$row['n_pro_valor_ven3'];$n_pro_valor_ven4=$row['n_pro_valor_ven4'];$n_pro_valor_ven5=$row['n_pro_valor_ven5'];$n_pro_valor_ven6=$row['n_pro_valor_ven6'];
    $n_pro_valor_ven7=$row['n_pro_valor_ven7'];$n_pro_valor_ven8=$row['n_pro_valor_ven8'];$n_pro_valor_ven9=$row['n_pro_valor_ven9'];$n_pro_valor_ven10=$row['n_pro_valor_ven10'];$n_pro_perc_comissao=$row['n_pro_perc_comissao'];$cqtde4produto=$row['cqtde4produto'];$cqtde5produto=$row['cqtde5produto'];$cqtde6produto=$row['cqtde6produto'];
    $cqtde7produto=$row['cqtde7produto'];$cqtde8produto=$row['cqtde8produto'];$cqtde9produto=$row['cqtde9produto'];$cqtde10produto=$row['cqtde10produto'];$cqtde11produto=$row['cqtde11produto']; $cqtde12produto=$row['cqtde12produto'];$cqtde13produto=$row['cqtde13produto'];$cqtde14produto=$row['cqtde14produto'];
    $cqtde15produto=$row['cqtde15produto'];$cqtde16produto=$row['cqtde16produto'];$cqtde17produto=$row['cqtde17produto'];$cqtde18produto=$row['cqtde18produto'];$cqtde19produto=$row['cqtde19produto'];$cqtde20produto=$row['cqtde20produto'];$cqtde21produto=$row['cqtde21produto'];$cqtde22produto=$row['cqtde22produto'];
    $cqtde23produto=$row['cqtde23produto'];$cqtde24produto=$row['cqtde24produto'];$cqtde25produto=$row['cqtde25produto'];$cqtde26produto=$row['cqtde26produto'];$cqtde27produto=$row['cqtde27produto'];$cqtde28produto=$row['cqtde28produto'];$cqtde29produto=$row['cqtde29produto'];$cqtde30produto=$row['cqtde30produto'];
    $i_apr_sequencia=$row['i_apr_sequencia'];
    if ($i_apr_sequencia=='') {
        $i_apr_sequencia='NULL';
    }
    $n_apr_valor_ipi_compra=$row['n_apr_valor_ipi_compra'];$n_apr_perc_ipi_compra=$row['n_apr_perc_ipi_compra'];$n_apr_valor_credito_icm=$row['n_apr_valor_credito_icm'];$n_apr_perc_credito_icm=$row['n_apr_perc_credito_icm'];$n_apr_valor_frete=$row['n_apr_valor_frete'];$n_apr_perc_frete=$row['n_apr_perc_frete'];
    $n_apr_valor_desp_aces=$row['n_apr_valor_desp_aces'];$n_apr_perc_desp_aces=$row['n_apr_perc_desp_aces'];$n_apr_valor_desctos=$row['n_apr_valor_desctos'];$n_apr_perc_desctos=$row['n_apr_perc_desctos'];$n_apr_valor_financeiro=$row['n_apr_valor_financeiro'];$n_apr_perc_financeiro=$row['n_apr_perc_financeiro'];$n_apr_valor_custo_ope=$row['n_apr_valor_custo_ope'];
	if ($n_apr_valor_custo_ope== ''){
		$n_apr_valor_custo_ope='NULL';
	}
	$n_apr_perc_custo_ope=$row['n_apr_perc_custo_ope'];
		if ($n_apr_perc_custo_ope== ''){
		$n_apr_perc_custo_ope='NULL';
	}
    $n_apr_valor_impostos=$row['n_apr_valor_impostos'];		
	if ($n_apr_valor_impostos== ''){
		$n_apr_valor_impostos='NULL';
	}
	$n_apr_perc_impostos=$row['n_apr_perc_impostos'];
		if ($n_apr_perc_impostos== ''){
		$n_apr_perc_impostos='NULL';
	}
	
	$n_apr_comissao_vend=$row['n_apr_comissao_vend'];$n_apr_perc_vend=$row['n_apr_perc_vend'];$n_apr_valor_lucro=$row['n_apr_valor_lucro'];
    $n_apr_perc_lucro=$row['n_apr_perc_lucro'];$n_apr_icm_saida=$row['n_apr_icm_saida'];$n_apr_perc_icm_saida=$row['n_apr_perc_icm_saida'];$n_apr_valor_custo_venda=$row['n_apr_valor_custo_venda'];$n_apr_perc_custo_venda=$row['n_apr_perc_custo_venda'];$d_apr_data_formacao=$row['d_apr_data_formacao'];
    if ($d_apr_data_formacao =='') {
        $d_apr_data_formacao='NULL';
    } else {
        $d_apr_data_formacao="'$d_apr_data_formacao'";
    }
    $i_apr_id_aen=$row['i_apr_id_aen'];
    if ($i_apr_id_aen=='') {
        $i_apr_id_aen='NULL';
    }
    
    $i_apr_tipo_formacao=$row['i_apr_tipo_formacao'];
    if ($i_apr_tipo_formacao=='') {
        $i_apr_tipo_formacao='NULL';
    }
    $i_apr_tipo_custo=$row['i_apr_tipo_custo'];
    if ($i_apr_tipo_custo=='') {
        $i_apr_tipo_custo='NULL';
    }
    $i_apr_lucro_sobre=$row['i_apr_lucro_sobre'];
    if ($i_apr_lucro_sobre=='') {
        $i_apr_lucro_sobre='NULL';
    }
    $n_apr_perc_reducao=$row['n_apr_perc_reducao'];$n_apr_valor_lucro_zero=$row['n_apr_valor_lucro_zero'];
    if ($n_apr_valor_lucro_zero==null) {
    	$n_apr_valor_lucro_zero='NULL';
    }
    $n_apr_custo_medio=$row['n_apr_custo_medio'];
    if ($n_apr_custo_medio==null){
    	$n_apr_custo_medio='NULL';
    }
    $n_apr_valor_nota_entrada=$row['n_apr_valor_nota_entrada'];
    if ($n_apr_valor_nota_entrada==null) {
    	$n_apr_valor_nota_entrada ='NULL';
    }
    $s_apr_principio_ativo=$row['s_apr_principio_ativo'];
    if ($s_apr_principio_ativo == null) {
    	$s_apr_principio_ativo='NULL';
    }
    $s_apr_nome_comercial=$row['s_apr_nome_comercial'];
    if ($s_apr_nome_comercial == null) {
    	$s_apr_nome_comercial='NULL';
    }
    $s_apr_cla_toxologica=$row['s_apr_cla_toxologica'];
    if ($s_apr_cla_toxologica == null) {
    	$s_apr_cla_toxologica='NULL';
    }
    $s_apr_formulacao=$row['s_apr_formulacao'];
    if ($s_apr_formulacao == null) {
    	$s_apr_formulacao='NULL';
    }
    $s_apr_primeiros_socorros=$row['s_apr_primeiros_socorros'];
    if ($s_apr_primeiros_socorros==null){
    	$s_apr_primeiros_socorros='NULL';
    }
    $s_apr_antidotos_tratamento=$row['s_apr_antidotos_tratamento'];
    if ($s_apr_antidotos_tratamento==null){
    	$s_apr_antidotos_tratamento='NULL';
    }
    $s_apr_gru_quimico=$row['s_apr_gru_quimico'];
    if ($s_apr_gru_quimico == null){
    	$s_apr_gru_quimico='NULL';
    }
    $s_apr_composicao=$row['s_apr_composicao'];
    if ($s_apr_composicao==null) {
    	$s_apr_composicao='NULL';
    }
    $s_apr_sistema_alarme=$row['s_apr_sistema_alarme'];
    if ($s_apr_sistema_alarme== null) {
    	$s_apr_sistema_alarme='NULL';
    }
    $i_apr_exige_receituario=$row['i_apr_exige_receituario'];
    if ($i_apr_exige_receituario=='') {
        $i_apr_exige_receituario='NULL';
    }
    $i_apr_imagem=$row['i_apr_imagem'];
    if ($i_apr_imagem=='') {
        $i_apr_imagem='NULL';
    }
    $i_apr_folha=$row['i_apr_folha'];
    if ($i_apr_folha=='') {
        $i_apr_folha='NULL';
    }
    $i_apr_fundo=$row['i_apr_fundo'];
    if ($i_apr_fundo=='') {
        $i_apr_fundo='NULL';
    }
    $i_apr_moldura=$row['i_apr_moldura'];
    if ($i_apr_moldura=='') {
        $i_apr_moldura='NULL';
    }
    $i_apr_produto=$row['i_apr_produto'];
    if ($i_apr_produto=='') {
        $i_apr_produto='NULL';
    }
    $n_apr_val_icms_substituicao=$row['n_apr_val_icms_substituicao'];$n_apr_permite_venda_fracionada=$row['n_apr_permite_venda_fracionada'];
    if ($n_apr_permite_venda_fracionada=='') {
        $n_apr_permite_venda_fracionada='NULL';
    }
    $n_apr_qtd_acumulada=$row['n_apr_qtd_acumulada'];
    $s_apr_descricao_grades=$row['s_apr_descricao_grades'];$i_apr_inativa_produto_cp=$row['i_apr_inativa_produto_cp'];$i_apr_permite_venda_zerada=$row['i_apr_permite_venda_zerada'];
    if ($i_apr_permite_venda_zerada=='') {
        $i_apr_permite_venda_zerada='NULL';
    }
    $s_apr_cfop_dentro_uf=$row['s_apr_cfop_dentro_uf'];$s_apr_cfop_fora_uf=$row['s_apr_cfop_fora_uf'];$i_apr_exige_evento=$row['i_apr_exige_evento']; $s_apr_modulacao=$row['s_apr_modulacao'];
    $s_apr_borda=$row['s_apr_borda'];$n_apr_qtd_embalagem=$row['n_apr_qtd_embalagem'];$n_apr_kgm2=$row['n_apr_kgm2'];$n_apr_consumo_metor=$row['n_apr_consumo_metor'];$s_apr_potencia=$row['s_apr_potencia'];$s_apr_base=$row['s_apr_base'];$s_apr_tensao=$row['s_apr_tensao'];$i_apr_numero_lote=$row['i_apr_numero_lote'];
    if ($i_apr_numero_lote=='') {
        $i_apr_numero_lote='NULL';
    }
    $n_apr_preco_fabrica=$row['n_apr_preco_fabrica'];$n_apr_pmc=$row['n_apr_pmc'];$i_apr_medicacao_controlada=$row['i_apr_medicacao_controlada'];
    $i_apr_tab_medicacao_controlada=$row['i_apr_tab_medicacao_controlada'];$i_apr_lista=$row['i_apr_lista'];$s_apr_desc_reduzida=$row['s_apr_desc_reduzida'];$i_apr_codigo_cnm=$row['i_apr_codigo_cnm'];$s_apr_iat=$row['s_apr_iat'];$s_apr_ippt=$row['s_apr_ippt'];$i_apr_fator_conversao=$row['i_apr_fator_conversao'];$n_apr_tabela4=$row['n_apr_tabela4'];$n_apr_tabela5=$row['n_apr_tabela5'];$n_apr_tabela6=$row['n_apr_tabela6'];$n_apr_tabela7=$row['n_apr_tabela7'];
    $n_apr_tabela8=$row['n_apr_tabela8'];$n_apr_tabela9=$row['n_apr_tabela9'];$n_apr_tabela10=$row['n_apr_tabela10'];$s_apr_dosagem=$row['s_apr_dosagem'];$i_apr_imp_complem_na_nfe=$row['i_apr_imp_complem_na_nfe'];$s_apr_hash=$row['s_apr_hash'];$i_apr_possui_garantia=$row['i_apr_possui_garantia'];$i_apr_possui_indice_tecnico=$row['i_apr_possui_indice_tecnico'];
    if ($i_apr_possui_indice_tecnico=='') {
        $i_apr_possui_indice_tecnico='NULL';
    }
    $i_apr_codigo_tem=$row['i_apr_codigo_tem'];$i_paf_ide=$row['i_paf_ide'];$i_apr_tipo_codificacao=$row['i_apr_tipo_codificacao'];
    $s_apr_operacao=$row['s_apr_operacao']; $s_apr_codigo_lei116=$row['s_apr_codigo_lei116'];$s_apr_cest=$row['s_apr_cest'];$s_apr_escala_relevante=$row['s_apr_escala_relevante'];$s_apr_cnpj_relevante=$row['s_apr_cnpj_relevante'];$s_apr_cod_benef_fiscal=$row['s_apr_cod_benef_fiscal'];$s_apr_desc_anp=$row['s_apr_desc_anp'];
    $com="INSERT INTO aprodutosj(ccodproduto, ctipproduto, cdesproduto, crefporduto, cbarproduto,cpveproduto, cpcuproduto, cpcoproduto, cuniproduto, cqtdproduto,
    cmaxproduto, clucproduto, ceidproduto, cminproduto, ccomproduto,cpelproduto, cpebproduto, ccadproduto, cucoproduto, cuveproduto,cantpoduto, cfotproduto, ccplproduto, cgruporduto, clinproduto,cmarproduto, ctriproduto, cclaproduto, cdepproduto, csitproduto,ctab1produto, ctab2produto, ctab3produto, cdtcadproduto, chocadproduto,copcadproduto, cuscadproduto, cdtatuproduto, choatuproduto, copatuproduto,cusatuproduto, cqtde1produto, cqtde2produto, cqtde3produto, cqtdmtemp,cqtd1temp, cqtd2temp, cqtd3temp, cvalcustemp, cvalcomptemp, cvalvendtemp,
    cpriceprotection, cpriceback, cvalortabela, cconfprice, cperaltvenda,cponestoque, clistaprecos, tip_lab_loja, tot_imp_venda, preco_minimo,preco_padrao, per_dif_precos, imagem, n_pro_comissaofot, i_pro_tipo_comissao,i_pro_tipo_cobranca, n_pro_valor_n1, n_pro_valor_n2, n_pro_valor_n3,n_pro_valor_n4, n_pro_valor_n5, n_pro_valor_n6, n_pro_valor_n7,n_pro_valor_n8, n_pro_valor_n9, n_pro_valor_n10, n_pro_valor_ven1,n_pro_valor_ven2, n_pro_valor_ven3, n_pro_valor_ven4, n_pro_valor_ven5,n_pro_valor_ven6, n_pro_valor_ven7, n_pro_valor_ven8, n_pro_valor_ven9,
    n_pro_valor_ven10, n_pro_perc_comissao, cqtde4produto, cqtde5produto,cqtde6produto, cqtde7produto, cqtde8produto, cqtde9produto, cqtde10produto,cqtde11produto, cqtde12produto, cqtde13produto, cqtde14produto,cqtde15produto, cqtde16produto, cqtde17produto, cqtde18produto,cqtde19produto, cqtde20produto, cqtde21produto, cqtde22produto,cqtde23produto, cqtde24produto, cqtde25produto, cqtde26produto,cqtde27produto, cqtde28produto, cqtde29produto, cqtde30produto,i_apr_sequencia, n_apr_valor_ipi_compra, n_apr_perc_ipi_compra,
    n_apr_valor_credito_icm, n_apr_perc_credito_icm, n_apr_valor_frete,n_apr_perc_frete, n_apr_valor_desp_aces, n_apr_perc_desp_aces,n_apr_valor_desctos, n_apr_perc_desctos, n_apr_valor_financeiro,n_apr_perc_financeiro, n_apr_valor_custo_ope, n_apr_perc_custo_ope,n_apr_valor_impostos, n_apr_perc_impostos, n_apr_comissao_vend,n_apr_perc_vend, n_apr_valor_lucro, n_apr_perc_lucro, n_apr_icm_saida,n_apr_perc_icm_saida, n_apr_valor_custo_venda, n_apr_perc_custo_venda,d_apr_data_formacao, i_apr_id_aen, i_apr_tipo_formacao, i_apr_tipo_custo,
    i_apr_lucro_sobre, n_apr_perc_reducao, n_apr_valor_lucro_zero,n_apr_custo_medio, n_apr_valor_nota_entrada, s_apr_principio_ativo,s_apr_nome_comercial, s_apr_cla_toxologica, s_apr_formulacao,s_apr_primeiros_socorros, s_apr_antidotos_tratamento, s_apr_gru_quimico,s_apr_composicao, s_apr_sistema_alarme, i_apr_exige_receituario,i_apr_imagem, i_apr_folha, i_apr_fundo, i_apr_moldura, i_apr_produto,i_apr_codigo_fdim, n_apr_val_icms_substituicao, n_apr_permite_venda_fracionada,n_apr_qtd_acumulada, i_apr_codigo_apr, s_apr_descricao_grades,
    i_apr_inativa_produto_cp, i_apr_permite_venda_zerada, s_apr_cfop_dentro_uf,s_apr_cfop_fora_uf, i_apr_exige_evento, s_apr_modulacao, s_apr_borda,n_apr_qtd_embalagem, n_apr_kgm2, n_apr_consumo_metor, s_apr_potencia,s_apr_base, s_apr_tensao, i_apr_numero_lote, d_apr_validade,n_apr_preco_fabrica, n_apr_pmc, i_apr_medicacao_controlada, i_apr_tab_medicacao_controlada,i_apr_lista, s_apr_desc_reduzida, i_apr_codigo_cnm, s_apr_iat,s_apr_ippt, i_apr_codigo_baixa_apr, i_apr_fator_conversao, i_apr_codigo_cor,
    n_apr_tabela4, n_apr_tabela5, n_apr_tabela6, n_apr_tabela7, n_apr_tabela8,n_apr_tabela9, n_apr_tabela10, s_apr_dosagem, i_apr_codigo_tes,i_apr_codigo_tmat, i_apr_codigo_naf, i_apr_imp_complem_na_nfe,s_apr_hash, i_apr_possui_garantia, i_apr_possui_indice_tecnico,i_apr_codigo_tem, i_paf_ide, n_apr_valor_seguro, n_apr_perc_seguro,i_apr_usu_balanca, i_apr_kit, d_apr_data_inicio_promocao, d_apr_data_fim_promocao,n_apr_desconto_normal, n_apr_desconto_tabela1, n_apr_desconto_tabela2,n_apr_desconto_tabela3, n_apr_desconto_tabela4, n_apr_desconto_tabela5,
    n_apr_desconto_tabela6, n_apr_desconto_tabela7, n_apr_desconto_tabela8,n_apr_desconto_tabela9, n_apr_desconto_tabela10, n_apr_desconto_custo,n_apr_desconto_compra, n_apr_desconto_minimo, n_apr_desconto_padrao,i_apr_com_frete, n_apr_valor_produto_frete, i_apr_com_desp_acesso,n_apr_valor_despesa_produto, i_apr_tipo_codificacao, s_apr_operacao,i_apr_codigo_cna, s_apr_codigo_lei116, i_apr_imprime_grade_nfe,i_apr_imprime_ref_nfe, i_apr_flag_trib_estados, i_apr_produto_fci,n_apr_qtde_31_estoque, n_apr_qtde_32_estoque, n_apr_qtde_33_estoque,
    n_apr_qtde_34_estoque, n_apr_qtde_35_estoque, n_apr_qtde_36_estoque,n_apr_qtde_37_estoque, n_apr_qtde_38_estoque, n_apr_qtde_39_estoque,n_apr_qtde_40_estoque, n_apr_qtde_41_estoque, n_apr_qtde_42_estoque,n_apr_qtde_43_estoque, n_apr_qtde_44_estoque, n_apr_qtde_45_estoque,n_apr_qtde_46_estoque, n_apr_qtde_47_estoque, n_apr_qtde_48_estoque,n_apr_qtde_49_estoque, n_apr_qtde_50_estoque, s_apr_cest, i_apr_codigo_afo,i_apr_cod_anp, n_apr_perc_pglp, i_apr_codif, n_apr_qtemp_comb,n_apr_qtde_defeito, s_apr_escala_relevante, s_apr_cnpj_relevante,
    s_apr_cod_benef_fiscal, s_apr_desc_anp, n_apr_perc_gas_natural,n_apr_gas_importado, n_apr_valor_partida)VALUES('$ccodproduto','$ctipproduto','$cdesproduto','$crefporduto','$cbarproduto','$cpveproduto','$cpcuproduto','$cpcoproduto','$cuniproduto','0','$cmaxproduto','$clucproduto','$ceidproduto','$cminproduto','$ccomproduto','$cpelproduto','$cpebproduto',$ccadproduto,NULL,NULL,'$cantpoduto','$cfotproduto','$ccplproduto',$cgruporduto,'$clinproduto',$cmarproduto,'$ctriproduto',NULL,'$cdepproduto','$csitproduto','$ctab1produto','$ctab2produto',
    '$ctab3produto','$cdtcadproduto','$chocadproduto','$copcadproduto','$cuscadproduto','$cdtatuproduto',NULL,$copatuproduto,'$cusatuproduto','0','0','$cqtde3produto','$cqtdmtemp','$cqtd1temp','$cqtd2temp','$cqtd3temp','$cvalcustemp','$cvalcomptemp','$cvalvendtemp','$cpriceprotection','$cpriceback','$cvalortabela','$cconfprice','$cperaltvenda','$cponestoque','$clistaprecos',$tip_lab_loja,$tot_imp_venda,'$preco_minimo','$preco_padrao',$per_dif_precos,$imagem,$n_pro_comissaofot,$i_pro_tipo_comissao,$i_pro_tipo_cobranca,'$n_pro_valor_n1',
    '$n_pro_valor_n2','$n_pro_valor_n3','$n_pro_valor_n4','$n_pro_valor_n5','$n_pro_valor_n6','$n_pro_valor_n7','$n_pro_valor_n8','$n_pro_valor_n9','$n_pro_valor_n10','$n_pro_valor_ven1','$n_pro_valor_ven2','$n_pro_valor_ven3','$n_pro_valor_ven4','$n_pro_valor_ven5','$n_pro_valor_ven6','$n_pro_valor_ven7','$n_pro_valor_ven8','$n_pro_valor_ven9','$n_pro_valor_ven10','$n_pro_perc_comissao','$cqtde4produto','$cqtde5produto','$cqtde6produto','$cqtde7produto','$cqtde8produto','$cqtde9produto','$cqtde10produto','$cqtde11produto','$cqtde12produto','$cqtde13produto','$cqtde14produto','$cqtde15produto',
    '$cqtde16produto','$cqtde17produto','$cqtde18produto','$cqtde19produto','$cqtde20produto','$cqtde21produto','$cqtde22produto','$cqtde23produto','$cqtde24produto','$cqtde25produto','$cqtde26produto','$cqtde27produto','$cqtde28produto','$cqtde29produto','$cqtde30produto',$i_apr_sequencia,'$n_apr_valor_ipi_compra','$n_apr_perc_ipi_compra','$n_apr_valor_credito_icm','$n_apr_perc_credito_icm','$n_apr_valor_frete','$n_apr_perc_frete','$n_apr_valor_desp_aces','$n_apr_perc_desp_aces','$n_apr_valor_desctos','$n_apr_perc_desctos','$n_apr_valor_financeiro','$n_apr_perc_financeiro',$n_apr_valor_custo_ope,
    $n_apr_perc_custo_ope,$n_apr_valor_impostos,$n_apr_perc_impostos,'$n_apr_comissao_vend','$n_apr_perc_vend','$n_apr_valor_lucro','$n_apr_perc_lucro','$n_apr_icm_saida','$n_apr_perc_icm_saida','$n_apr_valor_custo_venda','$n_apr_perc_custo_venda',$d_apr_data_formacao,$i_apr_id_aen,$i_apr_tipo_formacao,$i_apr_tipo_custo,$i_apr_lucro_sobre,'$n_apr_perc_reducao',$n_apr_valor_lucro_zero,$n_apr_custo_medio,$n_apr_valor_nota_entrada,$s_apr_principio_ativo,$s_apr_nome_comercial,$s_apr_cla_toxologica,$s_apr_formulacao,$s_apr_primeiros_socorros,$s_apr_antidotos_tratamento,$s_apr_gru_quimico,$s_apr_composicao,$s_apr_sistema_alarme,
    $i_apr_exige_receituario,$i_apr_imagem,$i_apr_folha,$i_apr_fundo,$i_apr_moldura,$i_apr_produto,NULL,'$n_apr_val_icms_substituicao',$n_apr_permite_venda_fracionada,'$n_apr_qtd_acumulada',NULL,'$s_apr_descricao_grades','$i_apr_inativa_produto_cp',$i_apr_permite_venda_zerada,'$s_apr_cfop_dentro_uf','$s_apr_cfop_fora_uf','$i_apr_exige_evento','$s_apr_modulacao','$s_apr_borda','$n_apr_qtd_embalagem','$n_apr_kgm2','$n_apr_consumo_metor','$s_apr_potencia','$s_apr_base','$s_apr_tensao',$i_apr_numero_lote,NULL,'$n_apr_preco_fabrica','$n_apr_pmc','$i_apr_medicacao_controlada','$i_apr_tab_medicacao_controlada','$i_apr_lista','$s_apr_desc_reduzida',
    '$i_apr_codigo_cnm','$s_apr_iat','$s_apr_ippt',NULL,'$i_apr_fator_conversao',NULL,'$n_apr_tabela4','$n_apr_tabela5','$n_apr_tabela6','$n_apr_tabela7','$n_apr_tabela8','$n_apr_tabela9','$n_apr_tabela10','$s_apr_dosagem',NULL,1,NULL,'$i_apr_imp_complem_na_nfe','$s_apr_hash','$i_apr_possui_garantia',$i_apr_possui_indice_tecnico,'$i_apr_codigo_tem','$i_paf_ide',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$i_apr_tipo_codificacao','$s_apr_operacao',NULL,'$s_apr_codigo_lei116',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,
    NULL,NULL,NULL,'$s_apr_cest',NULL,NULL,NULL,NULL,NULL,NULL,'$s_apr_escala_relevante','$s_apr_cnpj_relevante','$s_apr_cod_benef_fiscal','$s_apr_desc_anp',NULL,NULL,NULL)";
    $comm=pg_query($conl,$com);
    if (!$comm){
        echo $com;
        exit;
	    }    
}
$sql= "SELECT COUNT(*) FROM aprodutosj";
$exsql=pg_query($conl,$sql);
$resulsql=pg_fetch_array($exsql);
$totaljp=$resulsql['count'];
if ($totallp <> $totaljp) {   
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Na Sincronização dos Produtos**</font></b></p>";
    exit;    
}
$sql="select ccodproduto,cdesproduto,i_apr_codigo_cnm,cuniproduto from aprodutosj order by ccodproduto";
$exsql=pg_query($conl,$sql);
while($row = pg_fetch_assoc($exsql)){
    $produto=$row['ccodproduto'];
    $desc=$row['cdesproduto'];
    $ncm=$row['i_apr_codigo_cnm'];
    $und=$row['cuniproduto'];
    $com="select ccodproduto,cdesproduto from aprodutos where ccodproduto=$produto";    
    $excom=pg_query($conl,$com);
    $resulcom=pg_fetch_array($excom);
    $desca=$resulcom['cdesproduto'];
    if ($resulcom == '') {
    	$antigo="select ccodproduto,cqtdproduto from aprodutos where ccodproduto=$produto";
    	$exantigo=pg_query($congc,$antigo);
    	$rsantigo=pg_fetch_array($exantigo);
    	$codantigo=$rsantigo['ccodproduto'];
    	$qtda=$rsantigo['cqtdproduto'];
    	if ($qtda >= 1 or $qtda < 0 ){
    		exit("Produto $produto com Historico");
    	}
    	if ($codantigo == null){    
        $com="select *from ncm where i_ncm_codigo = '$ncm'";
        $excom=pg_query($conl,$com);
        $resulcom=pg_fetch_array($excom);
        if ($resulcom == '') {
            $com=pg_query($conl,"select logar('COPIA',1,0);INSERT INTO ncm(i_ncm_codigo, i_ncm_nome, n_ncm_mva, n_ncm_mva_reajustavel, n_ncm_reducao_mva)
                    VALUES ('$ncm','','0.00','0.00','0.00')");
            if (!$com){
                echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Ao Cadrastar NCM </font></b></p>";
                ?>
                <!DOCTYPE html>
				<html>
				<head>
				<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
				</head>
				</html>
				<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
				<?php
                exit;
	        }
        }
        $com="select d_tun_descricao from tunidadeproduto where d_tun_descricao = '$und'";
        $excom=pg_query($conl,$com);
        $resulcom=pg_fetch_array($excom);
        if($resulcom == ''){
            $com=pg_query($conl,"select logar('COPIA',1,0);INSERT INTO tunidadeproduto(d_tun_descricao, s_tun_complemento_desc) VALUES ('$und', '')");
            if (!$com){
                echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Ao Cadastar Unidade </font></b></p>";
                ?>
                <!DOCTYPE html>
				<html>
				<head>
				<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
				</head>
				</html>
				<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
				<?php
                exit;
	        }
	    }
    	$com=pg_query($conl,"select logar('COPIA',1,0);update aprodutosj set i_apr_id_aen = 76485 where  ccodproduto =$produto");    
	    $com=pg_query($conl,"select logar('COPIA',1,0);insert into aprodutos select *from aprodutosj where ccodproduto =$produto");
	    if (!$com){
	        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! ao Cadastrar o produto</font></b></p>";
	        ?>
            <!DOCTYPE html>
			<html>
			<head>
			<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
			</head>
			</html>
			<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
			<?php
            exit;
	    }
    } 
     elseif ($codantigo <> null){
     	$sql="delete from thislevantamento where i_thi_codigo_produto = $produto";
    	$excom=pg_query($congc,$sql);     
    	$sql="delete from aprodutos where ccodproduto = $produto";
    	$excom=pg_query($congc,$sql);
    	if (!$excom){
                 echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Ao apagar o Cod $cod no Sistema Geral </font></b></p>";
                ?>
                <!DOCTYPE html>
				<html>
				<head>
				<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
				</head>
				</html>
				<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
				<?php
                exit;
    
    }
    
    }
    }elseif ($desc<>$desca){ 
      echo $produto.'<br>';
    }
    
}
     




?>