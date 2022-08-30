<!DOCTYPE html>
<html>
<head>
<title>Exporta Produtos</title>
<center><img src="img/fundo1.jpg"alt="10" heigth ="100px" width="400px" ></center>
</head>
</html>
<?php
date_default_timezone_set('America/Sao_Paulo');
$hora=date('H:i:s');
$hora_parte=explode(":",$hora);
$hora_h=$hora_parte[0];
$minuto=$hora_parte[1];
$segundo=$hora_parte[2];
?>
<HTML>
<HEAD>
<center>
  <script tpye=text/javascript>
var segundo=<?php echo $segundo;?>;
var minuto=<?php echo $minuto;?>;
var hora=<?php echo $hora_h;?>;
 function tempo(){
	  if (segundo<59){
		   segundo=segundo+1
		    if (segundo==59){
			     minuto=minuto+1;
			      segundo=0;
			       if (hora==24){
				        hora=hora+1;
				         minuto=0;
				          segundo=0;
				           }
		             }
            }
   document.getElementById("relogio").innerHTML=(hora+":"+minuto+":"+segundo);
    }
</script>
</center>
</HEAD>
<meta name="GENERATOR" content="MAX's HTML Beauty++ ME">
<body onload="setInterval('tempo();',1000)">
<div name="relogio" id="relogio"></div>
<BODY>
</BODY>
</HTML>
<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
set_time_limit(900);
$voltalogin="<script>window.location='http://192.168.13.2/Desenvolver/ExportaBomjesus.html'</script>";
date_default_timezone_set('America/Sao_Paulo');
$time=date('H:i');
$dia= date('d-m-Y');
$dia1=date('Y-m-d');
$codini=$_POST['codini'];
if ($codini == '') {
    echo '<script>window.alert(\'Código Inicial Inválido\');</script>';
    echo $voltalogin;
}
$codfin=$_POST['codfin'];
if ($codfin == '') {
    echo '<script>window.alert(\'Código Final Inválido\');</script>';
    echo $voltalogin;
}
if ($codfin < $codini) {
    echo '<script>window.alert(\'Código Final Menor que o Código Inicial\');</script>';
    echo $voltalogin;
}
$linha=$_POST['linha'];
if ($linha == '') {
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>Ha Opção Sem o Filtro de linha ainda esta Sendo Desenvolvido  </font></b></p>";
    echo "<p style=background:#000000; align=center <br/><b><font size=10 color=#7CFC00>Por Favor aguarde Data:$dia  Hora:$time</font></b></p>";
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <center><img src="img/desenvolvimento.jpg"alt="800px" heigth ="800px" width="800px" ></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit; 
}
if(!@($conexaoc=pg_connect ("host=192.168.10.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Caçador Data:$dia  Hora:$time </font></b></p>";
    echo "<p style=background:#000000; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista Favor avisar o Adriano</font></b></p>";
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <center><img src="img/error.jpg"alt="300px" heigth ="300px" width="300px" ></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit; 
}
echo "<p style=background:#D3D3D3; align=center <br/><b><font size=5 color=#FF0000>Servidor de Caçador Conectado</font></b></p>";
if(!@($conexaol=pg_connect ("host=192.168.10.153 dbname=troll port=5434 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Lages Data:$dia  Hora:$time </font></b></p>";
    echo "<p style=background:#000000; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista Favor avisar o Adriano</font></b></p>";
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <center><img src="img/error.jpg"alt="300px" heigth ="300px" width="300px" ></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit; 
}
echo "<p style=background:#D3D3D3; align=center <br/><b><font size=5 color=#FF0000>Servidor 02 Conectado</font></b></p>";

$comando=("delete from aprodutosl");
$excomando=pg_query($conexaoc,$comando);
if (!$excomando){
    pg_close($conexaoc);
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Erro ao apagar dados antigos de caçador**</font></b></p>";
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
$excomando=pg_query($conexaol,$comando);
if (!$excomando){
    pg_close($conexaoc);
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Erro ao apagar dados antigos de caçador**</font></b></p>";
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
$comando=("insert into aprodutosl select *from aprodutos where ccodproduto >= $codini and ccodproduto <= $codfin and clinproduto = $linha  ");
$excomando=pg_query($conexaoc,$comando);
if (!$excomando){
    pg_close($conexaoc);
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Erro ao Coletar Produtos Sistema de Caçador**</font></b></p>";
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
$cont=("select count(*) from aprodutosl");
$excont=pg_query($conexaoc,$cont);
if(!$excont){
    pg_close($conexaoc);
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Erro ao Contar produtos Coletador em caçador**</font></b></p>";
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
$rscont=pg_fetch_array($excont);
$qtdc=$rscont['count'];
if ($qtdc == '0'){
    pg_close($conexaoc);
    echo "<p style=background:#D3D3D3; align=center <br/><b><font size=30 color=#DF7401>Nenhum código coletado com esse filtro favor vereficar</font></b></p>";
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <center><img src="img/nenhum.png"alt="1" heigth ="300px" width="300px" ></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit;    
}
$com="select *from aprodutosl ";
$excom=pg_query($conexaoc,$com);
pg_query($conexaol,"delete from aprodutosl");
while($row = pg_fetch_assoc($excom)){
    $ccodproduto=$row['ccodproduto'];$ctipproduto=$row['ctipproduto'];$cdesproduto=$row['cdesproduto'];$crefporduto=$row['crefporduto'];$cbarproduto=$row['cbarproduto'];$cpveproduto=$row['cpveproduto'];$cpcuproduto=$row['cpcuproduto'];$cpcoproduto=$row['cpcoproduto'];
    $cuniproduto=$row['cuniproduto'];$cqtdproduto=$row['cqtdproduto'];$cmaxproduto=$row['cmaxproduto'];$clucproduto=$row['clucproduto'];$ceidproduto=$row['ceidproduto'];$cminproduto=$row['cminproduto'];$ccomproduto=$row['ccomproduto'];$cpelproduto=$row['cpelproduto'];
    $cpebproduto=$row['cpebproduto'];$ccadproduto=$row['ccadproduto'];$cantpoduto=$row['cantpoduto'];$cfotproduto=$row['cfotproduto'];$ccplproduto=$row['ccplproduto'];$cgruporduto=$row['cgruporduto'];$clinproduto=$row['clinproduto'];$cmarproduto=$row['cmarproduto'];
    $ctriproduto=$row['ctriproduto'];$cdepproduto=$row['cdepproduto'];$csitproduto=$row['csitproduto'];$ctab1produto=$row['ctab1produto'];$ctab2produto=$row['ctab2produto'];$ctab3produto=$row['ctab3produto'];$cdtcadproduto=$row['cdtcadproduto'];$chocadproduto=$row['chocadproduto'];
    $copcadproduto=$row['copcadproduto'];$cuscadproduto=$row['cuscadproduto'];$cdtatuproduto=$row['cdtatuproduto'];$copatuproduto=$row['copatuproduto'];$cusatuproduto=$row['cusatuproduto'];$cqtde1produto=$row['cqtde1produto'];$cqtde2produto=$row['cqtde2produto'];$cqtde3produto=$row['cqtde3produto'];
    $cqtdmtemp=$row['cqtdmtemp'];$cqtd1temp=$row['cqtd1temp'];$cqtd2temp=$row['cqtd2temp'];$cqtd3temp=$row['cqtd3temp'];$cvalcustemp=$row['cvalcustemp'];$cvalcomptemp=$row['cvalcomptemp'];$cvalvendtemp=$row['cvalvendtemp'];$cpriceprotection=$row['cpriceprotection'];$cpriceback=$row['cpriceback'];
    $cvalortabela=$row['cvalortabela'];$cconfprice=$row['cconfprice'];$cperaltvenda=$row['cperaltvenda'];$cponestoque=$row['cponestoque'];$clistaprecos=$row['clistaprecos'];$tip_lab_loja=$row['tip_lab_loja'];$tot_imp_venda=$row['tot_imp_venda'];$preco_minimo=$row['preco_minimo'];$preco_padrao=$row['preco_padrao'];
    $per_dif_precos=$row['per_dif_precos'];$imagem=$row['imagem'];$n_pro_comissaofot=$row['n_pro_comissaofot'];$i_pro_tipo_comissao=$row['i_pro_tipo_comissao'];$i_pro_tipo_cobranca=$row['i_pro_tipo_cobranca'];$n_pro_valor_n1=$row['n_pro_valor_n1'];$n_pro_valor_n2=$row['n_pro_valor_n2'];
    $n_pro_valor_n3=$row['n_pro_valor_n3'];$n_pro_valor_n4=$row['n_pro_valor_n4'];$n_pro_valor_n5=$row['n_pro_valor_n5'];$n_pro_valor_n6=$row['n_pro_valor_n6'];$n_pro_valor_n7=$row['n_pro_valor_n7'];$n_pro_valor_n8=$row['n_pro_valor_n8'];$n_pro_valor_n9=$row['n_pro_valor_n9'];
    $n_pro_valor_n10=$row['n_pro_valor_n10'];$n_pro_valor_ven1=$row['n_pro_valor_ven1'];$n_pro_valor_ven2=$row['n_pro_valor_ven2'];$n_pro_valor_ven3=$row['n_pro_valor_ven3'];$n_pro_valor_ven4=$row['n_pro_valor_ven4'];$n_pro_valor_ven5=$row['n_pro_valor_ven5'];$n_pro_valor_ven6=$row['n_pro_valor_ven6'];
    $n_pro_valor_ven7=$row['n_pro_valor_ven7'];$n_pro_valor_ven8=$row['n_pro_valor_ven8'];$n_pro_valor_ven9=$row['n_pro_valor_ven9'];$n_pro_valor_ven10=$row['n_pro_valor_ven10'];$n_pro_perc_comissao=$row['n_pro_perc_comissao'];$cqtde4produto=$row['cqtde4produto'];$cqtde5produto=$row['cqtde5produto'];$cqtde6produto=$row['cqtde6produto'];
    $cqtde7produto=$row['cqtde7produto'];$cqtde8produto=$row['cqtde8produto'];$cqtde9produto=$row['cqtde9produto'];$cqtde10produto=$row['cqtde10produto'];$cqtde11produto=$row['cqtde11produto']; $cqtde12produto=$row['cqtde12produto'];$cqtde13produto=$row['cqtde13produto'];$cqtde14produto=$row['cqtde14produto'];
    $cqtde15produto=$row['cqtde15produto'];$cqtde16produto=$row['cqtde16produto'];$cqtde17produto=$row['cqtde17produto'];$cqtde18produto=$row['cqtde18produto'];$cqtde19produto=$row['cqtde19produto'];$cqtde20produto=$row['cqtde20produto'];$cqtde21produto=$row['cqtde21produto'];$cqtde22produto=$row['cqtde22produto'];
    $cqtde23produto=$row['cqtde23produto'];$cqtde24produto=$row['cqtde24produto'];$cqtde25produto=$row['cqtde25produto'];$cqtde26produto=$row['cqtde26produto'];$cqtde27produto=$row['cqtde27produto'];$cqtde28produto=$row['cqtde28produto'];$cqtde29produto=$row['cqtde29produto'];$cqtde30produto=$row['cqtde30produto'];
    $i_apr_sequencia=$row['i_apr_sequencia'];$n_apr_valor_ipi_compra=$row['n_apr_valor_ipi_compra'];$n_apr_perc_ipi_compra=$row['n_apr_perc_ipi_compra'];$n_apr_valor_credito_icm=$row['n_apr_valor_credito_icm'];$n_apr_perc_credito_icm=$row['n_apr_perc_credito_icm'];$n_apr_valor_frete=$row['n_apr_valor_frete'];$n_apr_perc_frete=$row['n_apr_perc_frete'];
    $n_apr_valor_desp_aces=$row['n_apr_valor_desp_aces'];$n_apr_perc_desp_aces=$row['n_apr_perc_desp_aces'];$n_apr_valor_desctos=$row['n_apr_valor_desctos'];$n_apr_perc_desctos=$row['n_apr_perc_desctos'];$n_apr_valor_financeiro=$row['n_apr_valor_financeiro'];$n_apr_perc_financeiro=$row['n_apr_perc_financeiro'];$n_apr_valor_custo_ope=$row['n_apr_valor_custo_ope'];
    $n_apr_perc_custo_ope=$row['n_apr_perc_custo_ope'];$n_apr_valor_impostos=$row['n_apr_valor_impostos'];$n_apr_perc_impostos=$row['n_apr_perc_impostos'];$n_apr_comissao_vend=$row['n_apr_comissao_vend'];$n_apr_perc_vend=$row['n_apr_perc_vend'];$n_apr_valor_lucro=$row['n_apr_valor_lucro'];
    $n_apr_perc_lucro=$row['n_apr_perc_lucro'];$n_apr_icm_saida=$row['n_apr_icm_saida'];$n_apr_perc_icm_saida=$row['n_apr_perc_icm_saida'];$n_apr_valor_custo_venda=$row['n_apr_valor_custo_venda'];$n_apr_perc_custo_venda=$row['n_apr_perc_custo_venda'];$d_apr_data_formacao=$row['d_apr_data_formacao'];
    $i_apr_id_aen=$row['i_apr_id_aen'];$i_apr_tipo_formacao=$row['i_apr_tipo_formacao'];$i_apr_tipo_custo=$row['i_apr_tipo_custo'];$i_apr_lucro_sobre=$row['i_apr_lucro_sobre'];$n_apr_perc_reducao=$row['n_apr_perc_reducao'];$n_apr_valor_lucro_zero=$row['n_apr_valor_lucro_zero'];$n_apr_custo_medio=$row['n_apr_custo_medio'];
    $n_apr_valor_nota_entrada=$row['n_apr_valor_nota_entrada'];$s_apr_principio_ativo=$row['s_apr_principio_ativo'];$s_apr_nome_comercial=$row['s_apr_nome_comercial'];$s_apr_cla_toxologica=$row['s_apr_cla_toxologica'];$s_apr_formulacao=$row['s_apr_formulacao'];$s_apr_primeiros_socorros=$row['s_apr_primeiros_socorros'];
    $s_apr_antidotos_tratamento=$row['s_apr_antidotos_tratamento'];$s_apr_gru_quimico=$row['s_apr_gru_quimico'];$s_apr_composicao=$row['s_apr_composicao'];$s_apr_sistema_alarme=$row['s_apr_sistema_alarme'];$i_apr_exige_receituario=$row['i_apr_exige_receituario'];$i_apr_imagem=$row['i_apr_imagem'];
    $i_apr_folha=$row['i_apr_folha'];$i_apr_fundo=$row['i_apr_fundo'];$i_apr_moldura=$row['i_apr_moldura'];$i_apr_produto=$row['i_apr_produto'];$n_apr_val_icms_substituicao=$row['n_apr_val_icms_substituicao'];$n_apr_permite_venda_fracionada=$row['n_apr_permite_venda_fracionada'];$n_apr_qtd_acumulada=$row['n_apr_qtd_acumulada'];
    $s_apr_descricao_grades=$row['s_apr_descricao_grades'];$i_apr_inativa_produto_cp=$row['i_apr_inativa_produto_cp'];$i_apr_permite_venda_zerada=$row['i_apr_permite_venda_zerada'];$s_apr_cfop_dentro_uf=$row['s_apr_cfop_dentro_uf'];$s_apr_cfop_fora_uf=$row['s_apr_cfop_fora_uf'];$i_apr_exige_evento=$row['i_apr_exige_evento']; $s_apr_modulacao=$row['s_apr_modulacao'];
    $s_apr_borda=$row['s_apr_borda'];$n_apr_qtd_embalagem=$row['n_apr_qtd_embalagem'];$n_apr_kgm2=$row['n_apr_kgm2'];$n_apr_consumo_metor=$row['n_apr_consumo_metor'];$s_apr_potencia=$row['s_apr_potencia'];$s_apr_base=$row['s_apr_base'];$s_apr_tensao=$row['s_apr_tensao'];$i_apr_numero_lote=$row['i_apr_numero_lote'];$n_apr_preco_fabrica=$row['n_apr_preco_fabrica'];$n_apr_pmc=$row['n_apr_pmc'];$i_apr_medicacao_controlada=$row['i_apr_medicacao_controlada'];
    $i_apr_tab_medicacao_controlada=$row['i_apr_tab_medicacao_controlada'];$i_apr_lista=$row['i_apr_lista'];$s_apr_desc_reduzida=$row['s_apr_desc_reduzida'];$i_apr_codigo_cnm=$row['i_apr_codigo_cnm'];$s_apr_iat=$row['s_apr_iat'];$s_apr_ippt=$row['s_apr_ippt'];$i_apr_fator_conversao=$row['i_apr_fator_conversao'];$n_apr_tabela4=$row['n_apr_tabela4'];$n_apr_tabela5=$row['n_apr_tabela5'];$n_apr_tabela6=$row['n_apr_tabela6'];$n_apr_tabela7=$row['n_apr_tabela7'];
    $n_apr_tabela8=$row['n_apr_tabela8'];$n_apr_tabela9=$row['n_apr_tabela9'];$n_apr_tabela10=$row['n_apr_tabela10'];$s_apr_dosagem=$row['s_apr_dosagem'];$i_apr_imp_complem_na_nfe=$row['i_apr_imp_complem_na_nfe'];$s_apr_hash=$row['s_apr_hash'];$i_apr_possui_garantia=$row['i_apr_possui_garantia'];$i_apr_possui_indice_tecnico=$row['i_apr_possui_indice_tecnico'];$i_apr_codigo_tem=$row['i_apr_codigo_tem'];$i_paf_ide=$row['i_paf_ide'];$i_apr_tipo_codificacao=$row['i_apr_tipo_codificacao'];
    $s_apr_operacao=$row['s_apr_operacao']; $s_apr_codigo_lei116=$row['s_apr_codigo_lei116'];$s_apr_cest=$row['s_apr_cest'];$s_apr_escala_relevante=$row['s_apr_escala_relevante'];$s_apr_cnpj_relevante=$row['s_apr_cnpj_relevante'];$s_apr_cod_benef_fiscal=$row['s_apr_cod_benef_fiscal'];$s_apr_desc_anp=$row['s_apr_desc_anp'];
    pg_query($conexaol,"INSERT INTO aprodutosl(ccodproduto, ctipproduto, cdesproduto, crefporduto, cbarproduto,cpveproduto, cpcuproduto, cpcoproduto, cuniproduto, cqtdproduto,
            cmaxproduto, clucproduto, ceidproduto, cminproduto, ccomproduto,cpelproduto, cpebproduto, ccadproduto, cucoproduto, cuveproduto,cantpoduto, cfotproduto, ccplproduto, cgruporduto, clinproduto,cmarproduto, ctriproduto, cclaproduto, cdepproduto, csitproduto,ctab1produto, ctab2produto, ctab3produto, cdtcadproduto, chocadproduto,copcadproduto, cuscadproduto, cdtatuproduto, choatuproduto, copatuproduto,cusatuproduto, cqtde1produto, cqtde2produto, cqtde3produto, cqtdmtemp,cqtd1temp, cqtd2temp, cqtd3temp, cvalcustemp, cvalcomptemp, cvalvendtemp,
            cpriceprotection, cpriceback, cvalortabela, cconfprice, cperaltvenda,cponestoque, clistaprecos, tip_lab_loja, tot_imp_venda, preco_minimo,preco_padrao, per_dif_precos, imagem, n_pro_comissaofot, i_pro_tipo_comissao,i_pro_tipo_cobranca, n_pro_valor_n1, n_pro_valor_n2, n_pro_valor_n3,n_pro_valor_n4, n_pro_valor_n5, n_pro_valor_n6, n_pro_valor_n7,n_pro_valor_n8, n_pro_valor_n9, n_pro_valor_n10, n_pro_valor_ven1,n_pro_valor_ven2, n_pro_valor_ven3, n_pro_valor_ven4, n_pro_valor_ven5,n_pro_valor_ven6, n_pro_valor_ven7, n_pro_valor_ven8, n_pro_valor_ven9,
            n_pro_valor_ven10, n_pro_perc_comissao, cqtde4produto, cqtde5produto,cqtde6produto, cqtde7produto, cqtde8produto, cqtde9produto, cqtde10produto,cqtde11produto, cqtde12produto, cqtde13produto, cqtde14produto,cqtde15produto, cqtde16produto, cqtde17produto, cqtde18produto,cqtde19produto, cqtde20produto, cqtde21produto, cqtde22produto,cqtde23produto, cqtde24produto, cqtde25produto, cqtde26produto,cqtde27produto, cqtde28produto, cqtde29produto, cqtde30produto,i_apr_sequencia, n_apr_valor_ipi_compra, n_apr_perc_ipi_compra,
            n_apr_valor_credito_icm, n_apr_perc_credito_icm, n_apr_valor_frete,n_apr_perc_frete, n_apr_valor_desp_aces, n_apr_perc_desp_aces,n_apr_valor_desctos, n_apr_perc_desctos, n_apr_valor_financeiro,n_apr_perc_financeiro, n_apr_valor_custo_ope, n_apr_perc_custo_ope,n_apr_valor_impostos, n_apr_perc_impostos, n_apr_comissao_vend,n_apr_perc_vend, n_apr_valor_lucro, n_apr_perc_lucro, n_apr_icm_saida,n_apr_perc_icm_saida, n_apr_valor_custo_venda, n_apr_perc_custo_venda,d_apr_data_formacao, i_apr_id_aen, i_apr_tipo_formacao, i_apr_tipo_custo,
            i_apr_lucro_sobre, n_apr_perc_reducao, n_apr_valor_lucro_zero,n_apr_custo_medio, n_apr_valor_nota_entrada, s_apr_principio_ativo,s_apr_nome_comercial, s_apr_cla_toxologica, s_apr_formulacao,s_apr_primeiros_socorros, s_apr_antidotos_tratamento, s_apr_gru_quimico,s_apr_composicao, s_apr_sistema_alarme, i_apr_exige_receituario,i_apr_imagem, i_apr_folha, i_apr_fundo, i_apr_moldura, i_apr_produto,i_apr_codigo_fdim, n_apr_val_icms_substituicao, n_apr_permite_venda_fracionada,n_apr_qtd_acumulada, i_apr_codigo_apr, s_apr_descricao_grades,
            i_apr_inativa_produto_cp, i_apr_permite_venda_zerada, s_apr_cfop_dentro_uf,s_apr_cfop_fora_uf, i_apr_exige_evento, s_apr_modulacao, s_apr_borda,n_apr_qtd_embalagem, n_apr_kgm2, n_apr_consumo_metor, s_apr_potencia,s_apr_base, s_apr_tensao, i_apr_numero_lote, d_apr_validade,n_apr_preco_fabrica, n_apr_pmc, i_apr_medicacao_controlada, i_apr_tab_medicacao_controlada,i_apr_lista, s_apr_desc_reduzida, i_apr_codigo_cnm, s_apr_iat,s_apr_ippt, i_apr_codigo_baixa_apr, i_apr_fator_conversao, i_apr_codigo_cor,
            n_apr_tabela4, n_apr_tabela5, n_apr_tabela6, n_apr_tabela7, n_apr_tabela8,n_apr_tabela9, n_apr_tabela10, s_apr_dosagem, i_apr_codigo_tes,i_apr_codigo_tmat, i_apr_codigo_naf, i_apr_imp_complem_na_nfe,s_apr_hash, i_apr_possui_garantia, i_apr_possui_indice_tecnico,i_apr_codigo_tem, i_paf_ide, n_apr_valor_seguro, n_apr_perc_seguro,i_apr_usu_balanca, i_apr_kit, d_apr_data_inicio_promocao, d_apr_data_fim_promocao,n_apr_desconto_normal, n_apr_desconto_tabela1, n_apr_desconto_tabela2,n_apr_desconto_tabela3, n_apr_desconto_tabela4, n_apr_desconto_tabela5,
            n_apr_desconto_tabela6, n_apr_desconto_tabela7, n_apr_desconto_tabela8,n_apr_desconto_tabela9, n_apr_desconto_tabela10, n_apr_desconto_custo,n_apr_desconto_compra, n_apr_desconto_minimo, n_apr_desconto_padrao,i_apr_com_frete, n_apr_valor_produto_frete, i_apr_com_desp_acesso,n_apr_valor_despesa_produto, i_apr_tipo_codificacao, s_apr_operacao,i_apr_codigo_cna, s_apr_codigo_lei116, i_apr_imprime_grade_nfe,i_apr_imprime_ref_nfe, i_apr_flag_trib_estados, i_apr_produto_fci,n_apr_qtde_31_estoque, n_apr_qtde_32_estoque, n_apr_qtde_33_estoque,
            n_apr_qtde_34_estoque, n_apr_qtde_35_estoque, n_apr_qtde_36_estoque,n_apr_qtde_37_estoque, n_apr_qtde_38_estoque, n_apr_qtde_39_estoque,n_apr_qtde_40_estoque, n_apr_qtde_41_estoque, n_apr_qtde_42_estoque,n_apr_qtde_43_estoque, n_apr_qtde_44_estoque, n_apr_qtde_45_estoque,n_apr_qtde_46_estoque, n_apr_qtde_47_estoque, n_apr_qtde_48_estoque,n_apr_qtde_49_estoque, n_apr_qtde_50_estoque, s_apr_cest, i_apr_codigo_afo,i_apr_cod_anp, n_apr_perc_pglp, i_apr_codif, n_apr_qtemp_comb,n_apr_qtde_defeito, s_apr_escala_relevante, s_apr_cnpj_relevante,
            s_apr_cod_benef_fiscal, s_apr_desc_anp, n_apr_perc_gas_natural,n_apr_gas_importado, n_apr_valor_partida)VALUES('$ccodproduto','$ctipproduto','$cdesproduto','$crefporduto','$cbarproduto','$cpveproduto','$cpcuproduto','$cpcoproduto','$cuniproduto','$cqtdproduto','$cmaxproduto','$clucproduto','$ceidproduto','$cminproduto','$ccomproduto','$cpelproduto','$cpebproduto','$ccadproduto',NULL,NULL,'$cantpoduto','$cfotproduto','$ccplproduto',NULL,'$clinproduto',NULL,'$ctriproduto',NULL,'$cdepproduto','$csitproduto','$ctab1produto','$ctab2produto',
            '$ctab3produto','$cdtcadproduto','$chocadproduto','$copcadproduto','$cuscadproduto','$cdtatuproduto',NULL,'$copatuproduto','$cusatuproduto','$cqtde1produto','$cqtde2produto','$cqtde3produto','$cqtdmtemp','$cqtd1temp','$cqtd2temp','$cqtd3temp','$cvalcustemp','$cvalcomptemp','$cvalvendtemp','$cpriceprotection','$cpriceback','$cvalortabela','$cconfprice','$cperaltvenda','$cponestoque','$clistaprecos','$tip_lab_loja','$tot_imp_venda','$preco_minimo','$preco_padrao','$per_dif_precos','$imagem','$n_pro_comissaofot','$i_pro_tipo_comissao','$i_pro_tipo_cobranca','$n_pro_valor_n1',
            '$n_pro_valor_n2','$n_pro_valor_n3','$n_pro_valor_n4','$n_pro_valor_n5','$n_pro_valor_n6','$n_pro_valor_n7','$n_pro_valor_n8','$n_pro_valor_n9','$n_pro_valor_n10','$n_pro_valor_ven1','$n_pro_valor_ven2','$n_pro_valor_ven3','$n_pro_valor_ven4','$n_pro_valor_ven5','$n_pro_valor_ven6','$n_pro_valor_ven7','$n_pro_valor_ven8','$n_pro_valor_ven9','$n_pro_valor_ven10','$n_pro_perc_comissao','$cqtde4produto','$cqtde5produto','$cqtde6produto','$cqtde7produto','$cqtde8produto','$cqtde9produto','$cqtde10produto','$cqtde11produto','$cqtde12produto','$cqtde13produto','$cqtde14produto','$cqtde15produto',
'$cqtde16produto','$cqtde17produto','$cqtde18produto','$cqtde19produto','$cqtde20produto','$cqtde21produto','$cqtde22produto','$cqtde23produto','$cqtde24produto','$cqtde25produto','$cqtde26produto','$cqtde27produto','$cqtde28produto','$cqtde29produto','$cqtde30produto','$i_apr_sequencia','$n_apr_valor_ipi_compra','$n_apr_perc_ipi_compra','$n_apr_valor_credito_icm','$n_apr_perc_credito_icm','$n_apr_valor_frete','$n_apr_perc_frete','$n_apr_valor_desp_aces','$n_apr_perc_desp_aces','$n_apr_valor_desctos','$n_apr_perc_desctos','$n_apr_valor_financeiro','$n_apr_perc_financeiro','$n_apr_valor_custo_ope',
'$n_apr_perc_custo_ope','$n_apr_valor_impostos','$n_apr_perc_impostos','$n_apr_comissao_vend','$n_apr_perc_vend','$n_apr_valor_lucro','$n_apr_perc_lucro','$n_apr_icm_saida','$n_apr_perc_icm_saida','$n_apr_valor_custo_venda','$n_apr_perc_custo_venda',NULL,NULL,'$i_apr_tipo_formacao','$i_apr_tipo_custo','$i_apr_lucro_sobre','$n_apr_perc_reducao','$n_apr_valor_lucro_zero','$n_apr_custo_medio','$n_apr_valor_nota_entrada','$s_apr_principio_ativo','$s_apr_nome_comercial','$s_apr_cla_toxologica','$s_apr_formulacao','$s_apr_primeiros_socorros','$s_apr_antidotos_tratamento','$s_apr_gru_quimico','$s_apr_composicao','$s_apr_sistema_alarme',
'$i_apr_exige_receituario','$i_apr_imagem','$i_apr_folha','$i_apr_fundo','$i_apr_moldura','$i_apr_produto',NULL,'$n_apr_val_icms_substituicao','$n_apr_permite_venda_fracionada','$n_apr_qtd_acumulada',NULL,'$s_apr_descricao_grades','$i_apr_inativa_produto_cp','$i_apr_permite_venda_zerada','$s_apr_cfop_dentro_uf','$s_apr_cfop_fora_uf','$i_apr_exige_evento','$s_apr_modulacao','$s_apr_borda','$n_apr_qtd_embalagem','$n_apr_kgm2','$n_apr_consumo_metor','$s_apr_potencia','$s_apr_base','$s_apr_tensao','$i_apr_numero_lote',NULL,'$n_apr_preco_fabrica','$n_apr_pmc','$i_apr_medicacao_controlada','$i_apr_tab_medicacao_controlada','$i_apr_lista','$s_apr_desc_reduzida',
'$i_apr_codigo_cnm','$s_apr_iat','$s_apr_ippt',NULL,'$i_apr_fator_conversao',NULL,'$n_apr_tabela4','$n_apr_tabela5','$n_apr_tabela6','$n_apr_tabela7','$n_apr_tabela8','$n_apr_tabela9','$n_apr_tabela10','$s_apr_dosagem',NULL,NULL,NULL,'$i_apr_imp_complem_na_nfe','$s_apr_hash','$i_apr_possui_garantia','$i_apr_possui_indice_tecnico','$i_apr_codigo_tem','$i_paf_ide',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$i_apr_tipo_codificacao','$s_apr_operacao',NULL,'$s_apr_codigo_lei116',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,
NULL,NULL,NULL,'$s_apr_cest',NULL,NULL,NULL,NULL,NULL,NULL,'$s_apr_escala_relevante','$s_apr_cnpj_relevante','$s_apr_cod_benef_fiscal','$s_apr_desc_anp',NULL,NULL,NULL)");
}

$excont=pg_query($conexaol,$cont);
if (!$excont){
    pg_close($conexaoc);
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Erro ao Contar produtos Coletados em Lages**</font></b></p>";
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
$rscont=pg_fetch_array($excont);
$qtdl=$rscont['count'];
while ($qtdc <> $qtdl) {
    //set_time_limit(120000);
    //usleep(9000000);
    echo "<script>alert('Sincronizando.....');</script>";
    $excont=pg_query($conexaol,$cont);
    $rscont=pg_fetch_array($excont);
    $qtdl=$rscont['count'];
}
$comando=("update aprodutosl set clinproduto = '108' , cgruporduto = '0' ,cmarproduto = '0', cdepproduto = '0',i_apr_id_aen='0',cqtdproduto = '0',cqtde1produto= '0',cqtde2produto='0';update aprodutosl set i_paf_ide=nextval('sequencia_paf')");
$excomando=pg_query($conexaol,$comando);
if (!$excomando){
    pg_close($conexaoc);
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Erro ao atualizar produtos em Lages**</font></b></p>";
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
$comando=("select ccodproduto,i_apr_codigo_cnm,cuniproduto from aprodutosl where ctipproduto = '0'");
$excomando=pg_query($conexaol,$comando);
$rscomando=pg_fetch_array($excomando);
$cod=$rscomando['ccodproduto'];
$ncm=$rscomando['i_apr_codigo_cnm'];
$un=$rscomando['cuniproduto'];
while ($cod <> ''){
    $proc=("select ccodproduto from aprodutos where ccodproduto = '$cod'");
    $exproc=pg_query($conexaol,$proc);
    $rsexproc=pg_fetch_array($exproc);
    if ($rsexproc == '') {
        $proncm=("select *from ncm where i_ncm_codigo = '$ncm'");
        $exproncm=pg_query($conexaol,$proncm);
        $rsexproncm=pg_fetch_array($exproncm);
        if ($rsexproncm == '') {
            $com=pg_query($conexaol,"select logar('COPIA',1,0);INSERT INTO ncm(i_ncm_codigo, i_ncm_nome, n_ncm_mva, n_ncm_mva_reajustavel, n_ncm_reducao_mva)
                    VALUES ('$ncm','','0.00','0.00','0.00')");
                    if (!$com){
                        pg_close($conexaol);pg_close($conexaoc);
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
        $procurandound=("select d_tun_descricao from tunidadeproduto where d_tun_descricao = '$un'");
        $exprocurandound=pg_query($conexaol,$procurandound);
        $rsprocurandound=pg_fetch_array($exprocurandound);
        if($rsprocurandound == ''){
            $com=pg_query($conexaol,"select logar('COPIA',1,0);INSERT INTO tunidadeproduto(d_tun_descricao, s_tun_complemento_desc) VALUES ('$un', '')");
            if (!$com){
                pg_close($conexaoc);pg_close($conexaol);
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
			    $com=pg_query($conexaol,"select logar('COPIA',1,0);insert into aprodutos select *from aprodutosl where ccodproduto = $cod;
                delete from aprodutosl where ccodproduto = '$cod'");
			    if (!$com){
			        pg_close($conexaoc);pg_close($conexaol);
			        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!!</font></b></p>";
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
    pg_query ($conexaol,"delete from aprodutosl where ccodproduto = '$cod' ");
    $comando=("select ccodproduto,i_apr_codigo_cnm,cuniproduto from aprodutosl where ctipproduto = '0'");
    $excomando=pg_query($conexaol,$comando);
    $rscomando=pg_fetch_array($excomando);
    $cod=$rscomando['ccodproduto'];
    $ncm=$rscomando['i_apr_codigo_cnm'];
    $un=$rscomando['cuniproduto'];
}
pg_close($conexaoc);pg_close($conexaol);
 
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <center><img src=img/okk.jpg alt="400" heigth ="400px" width="300px" ></center>
</head>
</html>




