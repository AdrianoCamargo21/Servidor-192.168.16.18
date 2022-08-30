<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
$voltalogin="<script>window.location='http://192.168.13.2/Desenvolver/tranferencia.html';</script>";
$time=date('H:i:s');
$dia= date('Y-m-d');
set_time_limit(800);
$login=$_POST["login"];
$login=strtoupper($login);
if ($login=='') {
    echo "<script>alert('Login não pode ser em Branco');</script>";
    echo $voltalogin;    
}
$senha=$_POST['senha'];
$senha=strtoupper($senha);
if ($senha== '') {
    echo "<script>alert('Senha não pode ser em Branco');</script>";
    echo $voltalogin;   
}
$numeronfe=$_POST['numeronfe'];
if ($numeronfe=='' or $numeronfe < 1 ) {
    echo "<script>alert('Numero da Nfe Inválido');</script>";
    echo $voltalogin;
}
$clientnfe=$_POST['clientenfe'];
if ($clientnfe == '' or $clientnfe < 1) {
    echo "<script>alert('Cliente Inválido');</script>";
    echo $voltalogin;
}
$datanfe=$_POST['datanfe'];
if ($datanfe == '' ){
    echo "<script>alert('Data da Nfe não poder ser em branco');</script>";
    echo $voltalogin;
    exit;
}
if(!@($conegl=pg_connect ("host=192.168.10.190 dbname=troll_lages port=5430 user=postgres password=ky$14gr@"))){
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
if(!@($conegc=pg_connect ("host=192.168.10.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@"))){
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
if(!@($conelc=pg_connect ("host=192.168.10.30 dbname=troll port=5430 user=postgres password=ky$14gr@"))){
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
$sql="select cusuariocod from parametros where cnomope ='$login'";
$exsql= pg_query($conegl,$sql);
$resulsql= pg_fetch_array($exsql);
$codusu=$resulsql['cusuariocod'];
if ($codusu == '' ){    
    echo "<script>alert('Login Inválido');</script>";
    echo $voltalogin;    
}
$sql="select cusuariocod from parametros where csenhausuario =  $senha and cusuariocod = $codusu ";
$exsql= pg_query($conegl,$sql);
$resulsql= pg_fetch_array($exsql);
if ($resulsql == ''){
    echo "<script>alert('Senha Inválida');</script>";
    echo $voltalogin; 
}
$sql="select cidesaidas,ctotsaidas from asaidas where cemisaidas = '$datanfe' and cclisaidas = '$clientnfe' and cnotsaidas = '$numeronfe'";
$exsql=pg_query($conegl,$sql);
$resulsql=pg_fetch_array($exsql);
$idesai=$resulsql['cidesaidas'];
$total=$resulsql['ctotsaidas'];
if($idesai == ''){
    echo "<script>alert('Numero nota, cliente ou data invalidos por favor tente novamente ');</script>";
    echo $voltalogin;
    exit;
}
$sql="delete from ahistorico2";
$exsql=pg_query($conegl,$sql);
$exsql=pg_query($conegc,$sql);
$sql="delete from aprodutosl";
$exsql=pg_query($conegl,$sql);
$exsql=pg_query($conelc,$sql);
$sql="insert into ahistorico2 select * from ahistorico where cisahistorico = '$idesai'";
$exsql=pg_query($conegl,$sql);
$sql= "SELECT COUNT(*) FROM ahistorico2";
$exsql=pg_query($conegl,$sql);
$resulsql=pg_fetch_array($exsql);
$totallh=$resulsql['count'];
$sql="select cprohistorico from ahistorico2  group by cprohistorico order by cprohistorico";
$exsql=pg_query($conegl,$sql);
while($row = pg_fetch_assoc($exsql)){
    $cod=$row['cprohistorico'];
    $com="insert into aprodutosl select *from aprodutos where ccodproduto=$cod ";
    pg_query($conegl,$com);
}
$sql= "SELECT COUNT(*) FROM aprodutosl";
$exsql=pg_query($conegl,$sql);
$resulsql=pg_fetch_array($exsql);
$totallp=$resulsql['count'];
$sql="select *from ahistorico2";
$exsql=pg_query($conegl,$sql);
while($row = pg_fetch_assoc($exsql)){
    $cidehistorico=$row['cidehistorico'];$cisahistorico=$row['cisahistorico'];
    $cipehistorico=$row['cipehistorico'];$ctiphistorico=$row['ctiphistorico'];$cmothistorico=$row['cmothistorico'];
    $cprohistorico=$row['cprohistorico'];$cemihistorico=$row['cemihistorico'];$cvcohistorico=$row['cvcohistorico'];
    $cvcuhistorico=$row['cvcuhistorico'];$cvbrhistorico=$row['cvbrhistorico'];$cvlqhistorico=$row['cvlqhistorico'];
    $cvdeshistorico=$row['cvdeshistorico'];$cvfrehistorico=$row['cvfrehistorico'];$cvachistorico=$row['cvachistorico'];
    $cvichistorico=$row['cvichistorico'];$cviphistorico=$row['cviphistorico'];$cvishistorico=$row['cvishistorico'];
    $cvfihistorico=$row['cvfihistorico'];$cvtothistorico=$row['cvtothistorico'];$cdeshistorico=$row['cdeshistorico'];
    $ccfohistorico=$row['ccfohistorico'];$csaihisotorico=$row['csaihisotorico'];$centhistorico=$row['centhistorico'];
    $cclihistorico=$row['cclihistorico'];$cicmhistorico=$row['cicmhistorico'];
    $cipihistorico=$row['cipihistorico'];$cisshistorico=$row['cisshistorico'];$cluchistorico=$row['cluchistorico'];
    $cpdehistorico=$row['cpdehistorico'];$cpfrhistorico=$row['cpfrhistorico'];$cpachistorico=$row['cpachistorico'];
    $cpfihistorico=$row['cpfihistorico'];$cpcohistorico=$row['cpcohistorico'];$cvohistorico=$row['cvohistorico'];
    $ctipphistorico=$row['ctipphistorico'];$cdtcahistorico=$row['cdtcahistorico'];$chocahistorico=$row['chocahistorico'];
    $cuscadhistorico=$row['cuscadhistorico'];$copcadhistorico=$row['copcadhistorico'];
     $copatuhistorico=$row['copatuhistorico'];
    if ($copatuhistorico=='') {
        $copatuhistorico='NULL';
    }    
    $cusatuhistorico=$row['cusatuhistorico'];$cemphistorico=$row['cemphistorico'];$cvarealhistorico=$row['cvarealhistorico'];$cbaiesthistorico=$row['cbaiesthistorico'];
    $fot_historico=$row['fot_historico'];$dep_historico=$row['dep_historico'];$valor_foto=$row['valor_foto']; $perc_cus_ope=$row['perc_cus_ope'];
    if ($perc_cus_ope == '') {
        $perc_cus_ope='NULL';
    }
    $val_cus_ope=$row['val_cus_ope'];
    if ($val_cus_ope =='') {
        $val_cus_ope='NULL';
    }
    $perc_imp_venda=$row['perc_imp_venda'];
    if ($perc_imp_venda== '') {
        $perc_imp_venda='NULL';
    }
    $val_imp_venda=$row['val_imp_venda'];
    if ($val_imp_venda=='') {
        $val_imp_venda='NULL';
    }
    $prec_mim_produto=$row['prec_mim_produto'];
    $i_ahi_codigo_cat=$row['i_ahi_codigo_cat'];$i_ahi_codigo_sct=$row['i_ahi_codigo_sct'];$i_ahi_codigo_ven=$row['i_ahi_codigo_ven'];$n_ahi_valor_custo_venda=$row['n_ahi_valor_custo_venda'];
    $n_ahi_perc_custo_venda=$row['n_ahi_perc_custo_venda'];$n_ahi_perc_reducao=$row['n_ahi_perc_reducao'];
    $n_ahi_valor_icms_formacao_preco=$row['n_ahi_valor_icms_formacao_preco'];$n_ahi_perc_icms_formacao_preco=$row['n_ahi_perc_icms_formacao_preco'];
    $n_ahi_valor_lucro_zero=$row['n_ahi_valor_lucro_zero'];$n_ahi_valor_lucro=$row['n_ahi_valor_lucro'];$n_ahi_custo_medio=$row['n_ahi_custo_medio'];
    $n_ahi_preco_padrao=$row['n_ahi_preco_padrao']; $n_ahi_perc_fun_rural=$row['n_ahi_perc_fun_rural'];$n_ahi_valor_fun_rural=$row['n_ahi_valor_fun_rural'];
    $i_ahi_cultura_aplicar=$row['i_ahi_cultura_aplicar'];$i_ahi_receita_ide=$row['i_ahi_receita_ide'];$n_ahi_base_icms=$row['n_ahi_base_icms'];
    $n_ahi_base_substituicao=$row['n_ahi_base_substituicao'];$n_ahi_icms_substituicao=$row['n_ahi_icms_substituicao'];$i_ahi_seq_ordem_item=$row['i_ahi_seq_ordem_item'];
    $s_ahi_cfop_contabil=$row['s_ahi_cfop_contabil'];$i_ahi_clas_fical=$row['i_ahi_clas_fical'];$s_ahi_sit_tributaria=$row['s_ahi_sit_tributaria'];$n_ahi_per_icms_subs=$row['n_ahi_per_icms_subs'];
    $n_ahi_per_conv_subst=$row['n_ahi_per_conv_subst'];
    
    $i_ahi_codigo_parceria=$row['i_ahi_codigo_parceria'];
    if ($i_ahi_codigo_parceria=='') {
        $i_ahi_codigo_parceria='NULL';
    }
    $i_ahi_ide_historico_pedido=$row['i_ahi_ide_historico_pedido'];
    if ($i_ahi_ide_historico_pedido == '') {
        $i_ahi_ide_historico_pedido='NULL';
    }
    $n_ahi_qtd_entregue_pedido=$row['n_ahi_qtd_entregue_pedido'];$i_ahi_ide_ahi=$row['i_ahi_ide_ahi'];
    $i_ahi_ide_romaneio=$row['i_ahi_ide_romaneio'];
    if ($i_ahi_ide_romaneio=='') {
        $i_ahi_ide_romaneio='NULL';
    }
    $s_ahi_obs_item=$row['s_ahi_obs_item'];$i_ahi_cod_produto_cli_acl=$row['i_ahi_cod_produto_cli_acl'];
    $n_ahi_valor_desconto_nota=$row['n_ahi_valor_desconto_nota'];$n_ahi_perc_desconto_item=$row['n_ahi_perc_desconto_item'];$i_ahi_codigo_tcb=$row['i_ahi_codigo_tcb'];
    $n_ahi_perc_desc_nota=$row['n_ahi_perc_desc_nota'];$n_ahi_valor_tot_item=$row['n_ahi_valor_tot_item'];$n_ahi_valor_tot_nota=$row['n_ahi_valor_tot_nota'];$n_ahi_valor_desc_item=$row['n_ahi_valor_desc_item'];$n_ahi_valor_pis=$row['n_ahi_valor_pis'];
    $n_ahi_valor_cofins=$row['n_ahi_valor_cofins'];$i_ahi_codigo_aor=$row['i_ahi_codigo_aor'];$s_ahi_complemento_impresso=$row['s_ahi_complemento_impresso'];$s_ahi_garantia_prod=$row['s_ahi_garantia_prod'];
    $s_ahi_cst_ipi=$row['s_ahi_cst_ipi'];$s_ahi_cst_pis=$row['s_ahi_cst_pis'];$s_ahi_cst_cofins=$row['s_ahi_cst_cofins'];$n_ahi_base_cofins=$row['n_ahi_base_cofins'];$n_ahi_base_pis=$row['n_ahi_base_pis'];$n_ahi_base_ipi=$row['n_ahi_base_ipi'];$n_ahi_aliquota_pis=$row['n_ahi_aliquota_pis'];
    $n_ahi_aliquota_cofins=$row['n_ahi_aliquota_cofins'];$s_ahi_indicacao_movimento=$row['s_ahi_indicacao_movimento'];$n_ahi_aliquota_st=$row['n_ahi_aliquota_st'];$s_ahi_apuracao_ipi=$row['s_ahi_apuracao_ipi'];$s_ahi_cod_enquadramento_ipi=$row['s_ahi_cod_enquadramento_ipi'];$n_ahi_qtd_base_pis=$row['n_ahi_qtd_base_pis'];$n_ahi_aliq_pis_reais=$row['n_ahi_aliq_pis_reais'];
    $n_ahi_qtde_base_cofins=$row['n_ahi_qtde_base_cofins'];$n_ahi_aliq_cofins_reais=$row['n_ahi_aliq_cofins_reais'];$i_ahi_csosn=$row['i_ahi_csosn'];$i_ahi_numero_adicao=$row['i_ahi_numero_adicao'];$i_ahi_num_seq_item_adicao=$row['i_ahi_num_seq_item_adicao'];$s_ahi_cod_fabri_estrangeiro=$row['s_ahi_cod_fabri_estrangeiro'];$n_ahi_valor_desc_item_di=$row['n_ahi_valor_desc_item_di'];
    $n_ahi_valor_red_icms=$row['n_ahi_valor_red_icms'];$n_ahi_seguro_item=$row['n_ahi_seguro_item'];$s_ahi_totalizador_parcial=$row['s_ahi_totalizador_parcial'];$n_ahi_perc_seguro=$row['n_ahi_perc_seguro'];
    if ($n_ahi_perc_seguro=='') {
        $n_ahi_perc_seguro='NULL';
    }
    $s_ahi_sit_tributaria_xml=$row['s_ahi_sit_tributaria_xml'];$n_ahi_base_ii=$row['n_ahi_base_ii'];$n_ahi_valor_ii=$row['n_ahi_valor_ii'];$n_ahi_aliquota_ii=$row['n_ahi_aliquota_ii'];
    $n_ahi_base_icms_xml=$row['n_ahi_base_icms_xml'];
    if ($n_ahi_base_icms_xml=='') {
        $n_ahi_base_icms_xml='NULL';
    }
    $n_ahi_aliq_icms_xml=$row['n_ahi_aliq_icms_xml'];
    if ($n_ahi_aliq_icms_xml=='') {
        $n_ahi_aliq_icms_xml='NULL';
    }
    $n_ahi_valor_icms_xml=$row['n_ahi_valor_icms_xml'];
    if ($n_ahi_valor_icms_xml=='') {
        $n_ahi_valor_icms_xml='NULL';
    }
    $n_ahi_base_st_xml=$row['n_ahi_base_st_xml'];
    if ($n_ahi_base_st_xml=='') {
        $n_ahi_base_st_xml='NULL';
    }
    $n_ahi_valor_st_xml=$row['n_ahi_valor_st_xml'];
    if ($n_ahi_valor_st_xml =='') {
        $n_ahi_valor_st_xml='NULL';
    }
    $n_ahi_valor_acrescimo_item=$row['n_ahi_valor_acrescimo_item'];
    if ($n_ahi_valor_acrescimo_item=='') {
        $n_ahi_valor_acrescimo_item='NULL';
    }
    $s_ahi_cst_pis_xml=$row['s_ahi_cst_pis_xml'];
    if ($s_ahi_cst_pis_xml=='') {
        $s_ahi_cst_pis_xml='NULL';
    }
    $s_ahi_cst_cofins_xml=$row['s_ahi_cst_cofins_xml'];
    if ($s_ahi_cst_cofins_xml=='') {
        $s_ahi_cst_cofins_xml='NULL';
    }
    $n_ahi_base_cofins_xml=$row['n_ahi_base_cofins_xml'];
    if ($n_ahi_base_cofins_xml=='') {
        $n_ahi_base_cofins_xml='NULL';
    }
    $n_ahi_base_pis_xml=$row['n_ahi_base_pis_xml'];
    if ($n_ahi_base_pis_xml=='') {
        $n_ahi_base_pis_xml='NULL';
    }
    $n_ahi_valor_pis_xml=$row['n_ahi_valor_pis_xml'];
    if ($n_ahi_valor_pis_xml=='') {
        $n_ahi_valor_pis_xml='NULL';
    }
    $n_ahi_valor_cofins_xml=$row['n_ahi_valor_cofins_xml'];
    if ($n_ahi_valor_cofins_xml=='') {
        $n_ahi_valor_cofins_xml='NULL';
    }
    $s_ahi_operacao=$row['s_ahi_operacao'];
    if ($s_ahi_operacao=='') {
        $s_ahi_operacao="NULL";
    }else {
        $s_ahi_operacao="'$s_ahi_operacao'";
    }
    
    $i_ahi_codigo_cna=$row['i_ahi_codigo_cna'];
    if ($i_ahi_codigo_cna =='') {
        $i_ahi_codigo_cna='NULL';
    }
    $s_ahi_codigo_lei116=$row['s_ahi_codigo_lei116'];
 
    $n_ahi_desp_aduaneiras=$row['n_ahi_desp_aduaneiras'];
    if ($n_ahi_desp_aduaneiras=='') {
        $n_ahi_desp_aduaneiras='NULL';
    }
    $i_ahi_codigo_frem=$row['i_ahi_codigo_frem'];$i_ahi_codigo_fpro=$row['i_ahi_codigo_fpro'];$n_ahi_tot_impostos=$row['n_ahi_tot_impostos'];
    $n_ahi_qtde_devolvido=$row['n_ahi_qtde_devolvido'];
    if ($n_ahi_qtde_devolvido=='') {
        $n_ahi_qtde_devolvido='NUll';
    }
    $n_ahi_perc_red_icms_st=$row['n_ahi_perc_red_icms_st'];
    if ($n_ahi_perc_red_icms_st=='') {
        $n_ahi_perc_red_icms_st='NULL';
    }
    $n_ahi_vlr_red_base_icms_st=$row['n_ahi_vlr_red_base_icms_st'];
    if ($n_ahi_vlr_red_base_icms_st=='') {
        $n_ahi_vlr_red_base_icms_st='NULL';
    }
    $i_ahi_cod_devolucao=$row['i_ahi_cod_devolucao'];
    if ($i_ahi_cod_devolucao=='') {
        $i_ahi_cod_devolucao='NULL';
    }
    $s_ahi_chave_fci=$row['s_ahi_chave_fci'];
    if ($s_ahi_chave_fci=='') {
        $s_ahi_chave_fci='NULL';
    }
    $n_ahi_mva_xml=$row['n_ahi_mva_xml'];
    if ($n_ahi_mva_xml =='') {
        $n_ahi_mva_xml='NULL';
    }
    $i_ahi_ide_entregue=$row['i_ahi_ide_entregue'];
    if ($i_ahi_ide_entregue=='') {
        $i_ahi_ide_entregue='NULL';
    }
    $i_ahi_uso_cosumo=$row['i_ahi_uso_cosumo'];
    if($i_ahi_uso_cosumo==''){
        $i_ahi_uso_cosumo='NULL';
    }
    $n_ahi_perc_diferimento=$row['n_ahi_perc_diferimento'];
    if ($n_ahi_perc_diferimento== '') {
        $n_ahi_perc_diferimento='NULL';
    }    
    $s_ahi_codigo_ser_mun=$row['s_ahi_codigo_ser_mun'];    
    $i_ahi_valor_imposto_diferido=$row['i_ahi_valor_imposto_diferido'];
    if ($i_ahi_valor_imposto_diferido=='') {
        $i_ahi_valor_imposto_diferido='NULL';
    }
    $s_ahi_pedido_compra_nfe=$row['s_ahi_pedido_compra_nfe'];    
    $i_ahi_item_ped_compra_nfe=$row['i_ahi_item_ped_compra_nfe'];
    if ($i_ahi_item_ped_compra_nfe=='') {
        $i_ahi_item_ped_compra_nfe='NULL';
    }
    if ($i_ahi_item_ped_compra_nfe=='') {
        $i_ahi_item_ped_compra_nfe='NULL';
    }
    $s_ahi_cest=$row['s_ahi_cest'];
    if ($s_ahi_cest=='') {
        $s_ahi_cest='NULL';
    }
    $n_ahi_perc_ipi_devol=$row['n_ahi_perc_ipi_devol'];
    if ($n_ahi_perc_ipi_devol=='') {
        $n_ahi_perc_ipi_devol='NULL';
    }
    $n_ahi_valor_ipi_devol=$row['n_ahi_valor_ipi_devol'];
    if ($n_ahi_valor_ipi_devol =='') {
        $n_ahi_valor_ipi_devol='NULL';
    }
    $com="INSERT INTO ahistorico2(cidehistorico, cienhistorico, cisahistorico, cipehistorico, ctiphistorico,cmothistorico, cprohistorico, cemihistorico, cvcohistorico, cvcuhistorico,cvbrhistorico, cvlqhistorico, cvdeshistorico, cvfrehistorico,
        cvachistorico, cvichistorico, cviphistorico, cvishistorico, cvfihistorico,cvtothistorico, cdeshistorico, ccfohistorico, csaihisotorico,centhistorico, cforhistorico, cclihistorico, cicmhistorico, cipihistorico,cisshistorico, cluchistorico, cpdehistorico, cpfrhistorico, cpachistorico,cpfihistorico, cpcohistorico, cvohistorico, ctipphistorico, cdtcahistorico,chocahistorico, cuscadhistorico, copcadhistorico, cdtatuhistorico,choatuhistorico, copatuhistorico, cusatuhistorico, cemphistorico,
        cvarealhistorico, cbaiesthistorico, fot_historico, dep_historico,valor_foto, perc_cus_ope, val_cus_ope, perc_imp_venda, val_imp_venda,prec_mim_produto, i_ahi_codigo_cat, i_ahi_codigo_sct, i_ahi_codigo_ven,n_ahi_valor_custo_venda, n_ahi_perc_custo_venda, n_ahi_perc_reducao,n_ahi_valor_icms_formacao_preco, n_ahi_perc_icms_formacao_preco,n_ahi_valor_lucro_zero, n_ahi_valor_lucro, n_ahi_custo_medio,n_ahi_preco_padrao, n_ahi_perc_fun_rural, n_ahi_valor_fun_rural,i_ahi_cultura_aplicar, i_ahi_receita_ide, n_ahi_base_icms, n_ahi_base_substituicao,n_ahi_icms_substituicao, i_ahi_seq_ordem_item, s_ahi_cfop_contabil,
        i_ahi_clas_fical, s_ahi_sit_tributaria, n_ahi_per_icms_subs,n_ahi_per_conv_subst, i_ahi_codigo_fprc, i_ahi_codigo_feve, i_ahi_ide_pedido,i_ahi_codigo_parceria, i_ahi_ide_historico_pedido, n_ahi_qtd_entregue_pedido,i_ahi_ide_ahi, i_ahi_saldo_produto, i_ahi_ide_romaneio, s_ahi_obs_item,i_ahi_cod_produto_cli_acl, n_ahi_valor_desconto_nota, n_ahi_perc_desconto_item,i_ahi_codigo_tcb, n_ahi_perc_desc_nota, n_ahi_valor_tot_item,n_ahi_valor_tot_nota, n_ahi_valor_desc_item, n_ahi_valor_pis,n_ahi_valor_cofins, i_ahi_codigo_aor, s_ahi_complemento_impresso,s_ahi_garantia_prod, i_ahi_codigo_aor_indice, i_ahi_codigo_ahi_indice,
        i_ahi_codigo_orp, s_ahi_cst_ipi, s_ahi_cst_pis, s_ahi_cst_cofins,n_ahi_base_cofins, n_ahi_base_pis, n_ahi_base_ipi, n_ahi_aliquota_pis,n_ahi_aliquota_cofins, s_ahi_indicacao_movimento, n_ahi_aliquota_st,s_ahi_apuracao_ipi, s_ahi_cod_enquadramento_ipi, n_ahi_qtd_base_pis,n_ahi_aliq_pis_reais, n_ahi_qtde_base_cofins, n_ahi_aliq_cofins_reais,i_ahi_csosn, i_ahi_numero_adicao, i_ahi_num_seq_item_adicao,s_ahi_cod_fabri_estrangeiro, n_ahi_valor_desc_item_di, n_ahi_valor_red_icms,n_ahi_seguro_item, s_ahi_totalizador_parcial, n_ahi_perc_seguro,i_ahi_csosn_xml, s_ahi_sit_tributaria_xml, n_ahi_base_ii, n_ahi_valor_ii,n_ahi_aliquota_ii, n_ahi_base_icms_xml, n_ahi_aliq_icms_xml,
        n_ahi_valor_icms_xml, n_ahi_base_st_xml, n_ahi_valor_st_xml,n_ahi_valor_acrescimo_item, s_ahi_cst_pis_xml, s_ahi_cst_cofins_xml,n_ahi_base_cofins_xml, n_ahi_base_pis_xml, n_ahi_valor_pis_xml,n_ahi_valor_cofins_xml, s_ahi_operacao, i_ahi_codigo_cna, s_ahi_codigo_lei116,n_ahi_desp_aduaneiras, i_ahi_codigo_frem, i_ahi_codigo_fpro,n_ahi_tot_impostos, n_ahi_qtde_devolvido, n_ahi_perc_red_icms_st,n_ahi_vlr_red_base_icms_st, i_ahi_cod_devolucao, s_ahi_chave_fci,n_ahi_mva_xml, i_ahi_ide_entregue, i_ahi_uso_cosumo, n_ahi_perc_diferimento,s_ahi_codigo_ser_mun, i_ahi_valor_imposto_diferido, s_ahi_pedido_compra_nfe,i_ahi_item_ped_compra_nfe, s_ahi_cest, n_ahi_perc_ipi_devol,n_ahi_valor_ipi_devol)
        VALUES ('$cidehistorico',NULL,'$cisahistorico','$cipehistorico','$ctiphistorico','$cmothistorico','$cprohistorico','$cemihistorico','$cvcohistorico','$cvcuhistorico','$cvbrhistorico','$cvlqhistorico','$cvdeshistorico','$cvfrehistorico','$cvachistorico','$cvichistorico','$cviphistorico','$cvishistorico','$cvfihistorico','$cvtothistorico','$cdeshistorico','$ccfohistorico','$csaihisotorico','$centhistorico',NULL,'$cclihistorico','$cicmhistorico','$cipihistorico','$cisshistorico','$cluchistorico','$cpdehistorico','$cpfrhistorico','$cpachistorico','$cpfihistorico','$cpcohistorico','$cvohistorico','$ctipphistorico','$cdtcahistorico','$chocahistorico','$cuscadhistorico',
        '$copcadhistorico',NULL,NULL,$copatuhistorico,'$cusatuhistorico','$cemphistorico','$cvarealhistorico','$cbaiesthistorico','$fot_historico','$dep_historico','$valor_foto',$perc_cus_ope,$val_cus_ope,$perc_imp_venda,$val_imp_venda,'$prec_mim_produto','$i_ahi_codigo_cat','$i_ahi_codigo_sct','$i_ahi_codigo_ven','$n_ahi_valor_custo_venda','$n_ahi_perc_custo_venda','$n_ahi_perc_reducao','$n_ahi_valor_icms_formacao_preco','$n_ahi_perc_icms_formacao_preco','$n_ahi_valor_lucro_zero','$n_ahi_valor_lucro','$n_ahi_custo_medio','$n_ahi_preco_padrao','$n_ahi_perc_fun_rural','$n_ahi_valor_fun_rural','$i_ahi_cultura_aplicar','$i_ahi_receita_ide','$n_ahi_base_icms',
        '$n_ahi_base_substituicao','$n_ahi_icms_substituicao','$i_ahi_seq_ordem_item','$s_ahi_cfop_contabil','$i_ahi_clas_fical','$s_ahi_sit_tributaria','$n_ahi_per_icms_subs','$n_ahi_per_conv_subst',NULL,NULL,NULL,$i_ahi_codigo_parceria,$i_ahi_ide_historico_pedido,'$n_ahi_qtd_entregue_pedido','$i_ahi_ide_ahi',NULL,$i_ahi_ide_romaneio,'$s_ahi_obs_item','$i_ahi_cod_produto_cli_acl','$n_ahi_valor_desconto_nota','$n_ahi_perc_desconto_item','$i_ahi_codigo_tcb','$n_ahi_perc_desc_nota','$n_ahi_valor_tot_item','$n_ahi_valor_tot_nota','$n_ahi_valor_desc_item','$n_ahi_valor_pis','$n_ahi_valor_cofins','$i_ahi_codigo_aor','$s_ahi_complemento_impresso','$s_ahi_garantia_prod',NULL,NULL,NULL,'$s_ahi_cst_ipi',
        '$s_ahi_cst_pis','$s_ahi_cst_cofins','$n_ahi_base_cofins','$n_ahi_base_pis','$n_ahi_base_ipi','$n_ahi_aliquota_pis','$n_ahi_aliquota_cofins','$s_ahi_indicacao_movimento','$n_ahi_aliquota_st','$s_ahi_apuracao_ipi','$s_ahi_cod_enquadramento_ipi','$n_ahi_qtd_base_pis','$n_ahi_aliq_pis_reais','$n_ahi_qtde_base_cofins','$n_ahi_aliq_cofins_reais','$i_ahi_csosn','$i_ahi_numero_adicao','$i_ahi_num_seq_item_adicao','$s_ahi_cod_fabri_estrangeiro','$n_ahi_valor_desc_item_di','$n_ahi_valor_red_icms','$n_ahi_seguro_item','$s_ahi_totalizador_parcial',$n_ahi_perc_seguro,NULL,'$s_ahi_sit_tributaria_xml','$n_ahi_base_ii','$n_ahi_valor_ii','$n_ahi_aliquota_ii',$n_ahi_base_icms_xml,$n_ahi_aliq_icms_xml,$n_ahi_valor_icms_xml,
        $n_ahi_base_st_xml,$n_ahi_valor_st_xml,$n_ahi_valor_acrescimo_item,$s_ahi_cst_pis_xml,$s_ahi_cst_cofins_xml,$n_ahi_base_cofins_xml,$n_ahi_base_pis_xml,$n_ahi_valor_pis_xml,$n_ahi_valor_cofins_xml,$s_ahi_operacao,$i_ahi_codigo_cna,'$s_ahi_codigo_lei116',$n_ahi_desp_aduaneiras,$i_ahi_codigo_frem,$i_ahi_codigo_fpro,$n_ahi_tot_impostos,$n_ahi_qtde_devolvido,$n_ahi_perc_red_icms_st,$n_ahi_vlr_red_base_icms_st,$i_ahi_cod_devolucao,$s_ahi_chave_fci,$n_ahi_mva_xml,$i_ahi_ide_entregue,$i_ahi_uso_cosumo,$n_ahi_perc_diferimento,'$s_ahi_codigo_ser_mun',$i_ahi_valor_imposto_diferido,'$s_ahi_pedido_compra_nfe',$i_ahi_item_ped_compra_nfe,'$s_ahi_cest',$n_ahi_perc_ipi_devol,
        $n_ahi_valor_ipi_devol)";
    $c=pg_query($conegc,$com);
    if (!$c){
       echo $com;
       exit;
    }
    

}
$sql= "SELECT COUNT(*) FROM ahistorico2";
$exsql=pg_query($conegc,$sql);
$resulsql=pg_fetch_array($exsql);
$totaljh=$resulsql['count'];
if ($totallh <> $totaljh) {
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Na Sincronização do Historico**</font></b></p>";
    exit;
}
$sql="select *from aprodutosl";
$exsql=pg_query($conegl,$sql);
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
    $copcadproduto=$row['copcadproduto'];$cuscadproduto=$row['cuscadproduto'];$cdtatuproduto=$row['cdtatuproduto'];$copatuproduto=$row['copatuproduto'];$cusatuproduto=$row['cusatuproduto'];$cqtde3produto=$row['cqtde3produto'];
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
    $n_apr_perc_custo_ope=$row['n_apr_perc_custo_ope'];$n_apr_valor_impostos=$row['n_apr_valor_impostos'];$n_apr_perc_impostos=$row['n_apr_perc_impostos'];$n_apr_comissao_vend=$row['n_apr_comissao_vend'];$n_apr_perc_vend=$row['n_apr_perc_vend'];$n_apr_valor_lucro=$row['n_apr_valor_lucro'];
    $n_apr_perc_lucro=$row['n_apr_perc_lucro'];$n_apr_icm_saida=$row['n_apr_icm_saida'];$n_apr_perc_icm_saida=$row['n_apr_perc_icm_saida'];$n_apr_valor_custo_venda=$row['n_apr_valor_custo_venda'];$n_apr_perc_custo_venda=$row['n_apr_perc_custo_venda'];$d_apr_data_formacao=$row['d_apr_data_formacao'];
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
    $n_apr_perc_reducao=$row['n_apr_perc_reducao'];$n_apr_valor_lucro_zero=$row['n_apr_valor_lucro_zero'];$n_apr_custo_medio=$row['n_apr_custo_medio'];
    $n_apr_valor_nota_entrada=$row['n_apr_valor_nota_entrada'];$s_apr_principio_ativo=$row['s_apr_principio_ativo'];$s_apr_nome_comercial=$row['s_apr_nome_comercial'];$s_apr_cla_toxologica=$row['s_apr_cla_toxologica'];$s_apr_formulacao=$row['s_apr_formulacao'];$s_apr_primeiros_socorros=$row['s_apr_primeiros_socorros'];
    $s_apr_antidotos_tratamento=$row['s_apr_antidotos_tratamento'];$s_apr_gru_quimico=$row['s_apr_gru_quimico'];$s_apr_composicao=$row['s_apr_composicao'];$s_apr_sistema_alarme=$row['s_apr_sistema_alarme'];$i_apr_exige_receituario=$row['i_apr_exige_receituario'];
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
    $s_apr_operacao=$row['s_apr_operacao']; $s_apr_codigo_lei116=$row['s_apr_codigo_lei116'];$s_apr_cest=$row['s_apr_cest'];$s_apr_escala_relevante=$row['s_apr_escala_relevante'];$s_apr_cnpj_relevante=$row['s_apr_cnpj_relevante'];$s_apr_cod_benef_fiscal=$row['s_apr_cod_benef_fiscal'];$s_apr_desc_anp=$row['s_apr_desc_anp'];$com="INSERT INTO aprodutosl(ccodproduto, ctipproduto, cdesproduto, crefporduto, cbarproduto,cpveproduto, cpcuproduto, cpcoproduto, cuniproduto, cqtdproduto,
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
    '$ctab3produto','$cdtcadproduto','$chocadproduto','$copcadproduto','$cuscadproduto','$cdtatuproduto',NULL,'$copatuproduto','$cusatuproduto','0','0','$cqtde3produto','$cqtdmtemp','$cqtd1temp','$cqtd2temp','$cqtd3temp','$cvalcustemp','$cvalcomptemp','$cvalvendtemp','$cpriceprotection','$cpriceback','$cvalortabela','$cconfprice','$cperaltvenda','$cponestoque','$clistaprecos',$tip_lab_loja,$tot_imp_venda,'$preco_minimo','$preco_padrao',$per_dif_precos,$imagem,$n_pro_comissaofot,$i_pro_tipo_comissao,$i_pro_tipo_cobranca,'$n_pro_valor_n1',
    '$n_pro_valor_n2','$n_pro_valor_n3','$n_pro_valor_n4','$n_pro_valor_n5','$n_pro_valor_n6','$n_pro_valor_n7','$n_pro_valor_n8','$n_pro_valor_n9','$n_pro_valor_n10','$n_pro_valor_ven1','$n_pro_valor_ven2','$n_pro_valor_ven3','$n_pro_valor_ven4','$n_pro_valor_ven5','$n_pro_valor_ven6','$n_pro_valor_ven7','$n_pro_valor_ven8','$n_pro_valor_ven9','$n_pro_valor_ven10','$n_pro_perc_comissao','$cqtde4produto','$cqtde5produto','$cqtde6produto','$cqtde7produto','$cqtde8produto','$cqtde9produto','$cqtde10produto','$cqtde11produto','$cqtde12produto','$cqtde13produto','$cqtde14produto','$cqtde15produto',
    '$cqtde16produto','$cqtde17produto','$cqtde18produto','$cqtde19produto','$cqtde20produto','$cqtde21produto','$cqtde22produto','$cqtde23produto','$cqtde24produto','$cqtde25produto','$cqtde26produto','$cqtde27produto','$cqtde28produto','$cqtde29produto','$cqtde30produto',$i_apr_sequencia,'$n_apr_valor_ipi_compra','$n_apr_perc_ipi_compra','$n_apr_valor_credito_icm','$n_apr_perc_credito_icm','$n_apr_valor_frete','$n_apr_perc_frete','$n_apr_valor_desp_aces','$n_apr_perc_desp_aces','$n_apr_valor_desctos','$n_apr_perc_desctos','$n_apr_valor_financeiro','$n_apr_perc_financeiro','$n_apr_valor_custo_ope',
    '$n_apr_perc_custo_ope','$n_apr_valor_impostos','$n_apr_perc_impostos','$n_apr_comissao_vend','$n_apr_perc_vend','$n_apr_valor_lucro','$n_apr_perc_lucro','$n_apr_icm_saida','$n_apr_perc_icm_saida','$n_apr_valor_custo_venda','$n_apr_perc_custo_venda','$d_apr_data_formacao',NULL,$i_apr_tipo_formacao,$i_apr_tipo_custo,$i_apr_lucro_sobre,'$n_apr_perc_reducao','$n_apr_valor_lucro_zero','$n_apr_custo_medio','$n_apr_valor_nota_entrada','$s_apr_principio_ativo','$s_apr_nome_comercial','$s_apr_cla_toxologica','$s_apr_formulacao','$s_apr_primeiros_socorros','$s_apr_antidotos_tratamento','$s_apr_gru_quimico','$s_apr_composicao','$s_apr_sistema_alarme',
    $i_apr_exige_receituario,$i_apr_imagem,$i_apr_folha,$i_apr_fundo,$i_apr_moldura,$i_apr_produto,NULL,'$n_apr_val_icms_substituicao',$n_apr_permite_venda_fracionada,'$n_apr_qtd_acumulada',NULL,'$s_apr_descricao_grades','$i_apr_inativa_produto_cp',$i_apr_permite_venda_zerada,'$s_apr_cfop_dentro_uf','$s_apr_cfop_fora_uf','$i_apr_exige_evento','$s_apr_modulacao','$s_apr_borda','$n_apr_qtd_embalagem','$n_apr_kgm2','$n_apr_consumo_metor','$s_apr_potencia','$s_apr_base','$s_apr_tensao',$i_apr_numero_lote,NULL,'$n_apr_preco_fabrica','$n_apr_pmc','$i_apr_medicacao_controlada','$i_apr_tab_medicacao_controlada','$i_apr_lista','$s_apr_desc_reduzida',
    '$i_apr_codigo_cnm','$s_apr_iat','$s_apr_ippt',NULL,'$i_apr_fator_conversao',NULL,'$n_apr_tabela4','$n_apr_tabela5','$n_apr_tabela6','$n_apr_tabela7','$n_apr_tabela8','$n_apr_tabela9','$n_apr_tabela10','$s_apr_dosagem',NULL,1,NULL,'$i_apr_imp_complem_na_nfe','$s_apr_hash','$i_apr_possui_garantia',$i_apr_possui_indice_tecnico,'$i_apr_codigo_tem','$i_paf_ide',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$i_apr_tipo_codificacao','$s_apr_operacao',NULL,'$s_apr_codigo_lei116',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,
    NULL,NULL,NULL,'$s_apr_cest',NULL,NULL,NULL,NULL,NULL,NULL,'$s_apr_escala_relevante','$s_apr_cnpj_relevante','$s_apr_cod_benef_fiscal','$s_apr_desc_anp',NULL,NULL,NULL)";
    $comm=pg_query($conelc,$com);
    if (!$comm){
        echo $com;
        exit;
	    }
    
}
$sql= "SELECT COUNT(*) FROM aprodutosl";
$exsql=pg_query($conelc,$sql);
$resulsql=pg_fetch_array($exsql);
$totaljp=$resulsql['count'];
if ($totallp <> $totaljp) {   
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Na Sincronização dos Produtos**</font></b></p>";
    exit;    
}
$sql="select ccodproduto,cdesproduto,i_apr_codigo_cnm,cuniproduto from aprodutosl order by ccodproduto";
$exsql=pg_query($conelc,$sql);
while($row = pg_fetch_assoc($exsql)){
    $produto=$row['ccodproduto'];
    $desc=$row['cdesproduto'];
    $ncm=$row['i_apr_codigo_cnm'];
    $und=$row['cuniproduto'];
    $com="select ccodproduto from aprodutos where ccodproduto=$produto";
    $excom=pg_query($conelc,$com);
    $resulcom=pg_fetch_array($excom);
    if ($resulcom == '') {       
        $com="select *from ncm where i_ncm_codigo = '$ncm'";
        $excom=pg_query($conelc,$com);
        $resulcom=pg_fetch_array($excom);
        if ($resulcom == '') {
            $com=pg_query($conelc,"select logar('COPIA',1,0);INSERT INTO ncm(i_ncm_codigo, i_ncm_nome, n_ncm_mva, n_ncm_mva_reajustavel, n_ncm_reducao_mva)
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
        $excom=pg_query($conelc,$com);
        $resulcom=pg_fetch_array($excom);
        if($resulcom == ''){
            $com=pg_query($conelc,"select logar('COPIA',1,0);INSERT INTO tunidadeproduto(d_tun_descricao, s_tun_complemento_desc) VALUES ('$und', '')");
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
	    $com=pg_query($conelc,"select logar('COPIA',1,0);insert into aprodutos select *from aprodutosl where ccodproduto =$produto");
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
    } else{
        $com="select cdesproduto from aprodutos where ccodproduto=$produto";
        $excom=pg_query($conelc,$com);
        $resulcom=pg_fetch_array($excom);
        $desa=$resulcom['cdesproduto'];
        if ($desc <> $desa) {
            $com="select cidehistorico from ahistorico where cprohistorico = '999999999'";////Aqui hé o Filtro
            $excom=pg_query($conegc,$com);
            $resulcom=pg_fetch_array($excom);
            if ($resulcom == '') {
                $com="delete from aprodutos where ccodproduto = $produto ";
                $excom=pg_query($conelc,$com);
                if (!$com){
                    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! ao apagar o produto:$produto</font></b></p>";
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
                $com="select *from ncm where i_ncm_codigo = '$ncm'";
                $excom=pg_query($conelc,$com);
                $resulcom=pg_fetch_array($excom);
                if ($resulcom == '') {
                    $com=pg_query($conelc,"select logar('COPIA',1,0);INSERT INTO ncm(i_ncm_codigo, i_ncm_nome, n_ncm_mva, n_ncm_mva_reajustavel, n_ncm_reducao_mva)
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
             $excom=pg_query($conelc,$com);
             $resulcom=pg_fetch_array($excom);
             if($resulcom == ''){
               $com=pg_query($conelc,"select logar('COPIA',1,0);INSERT INTO tunidadeproduto(d_tun_descricao, s_tun_complemento_desc) VALUES ('$und', '')");
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
	    $com=pg_query($conelc,"select logar('COPIA',1,0);insert into aprodutos select *from aprodutosl where ccodproduto =$produto");
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
                } else {
                    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>Produto com Histórico Cod:$produto</font></b></p>";
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
        
    }
}
$sql= "select cnfientradas from aentradas where cnfientradas = '$numeronfe'and cforentradas = '111' ";
$exsql= pg_query($conegc,$sql);
$resulexsql= pg_fetch_array($exsql);
if ( $resulexsql>= '1'){
    echo "<script>alert('Esse numero de nfe já existe para esse fornecedor');</script>";
    ?>
    <!DOCTYPE html>
	<html>
	<head>    
	<link rel="stylesheet" href="css/style.css"></link>
	<center><img src="img/fundo1.jpg"alt="10" heigth ="100px" width="400px" ></center>
	</head>
	</html>
	<?php
    echo "<p style=background:#00FF00; align=center <br/><b><font size=30 color=#0000FF>Número de Nfe:'$numeronfe' Já existente  '$dia' , '$time'  </font></b></p>"; 
    ?>
    <!DOCTYPE html>
	<html>
	<head>    
	<link rel="stylesheet" href="css/style.css"></link>
	<center><img src=img/okk.jpg alt="400" heigth ="400px" width="300px" ></center>
	<center><form name = "form1" method= "post" action= "login.php"></center>
	<center><input class="btn btn-red"  type="submit" value="Voltar"></center>
	</form>
	</head>
	</html>
	<?php		    
    exit;		        
}
$com=pg_query($conegc,"INSERT INTO aentradas(
        csidentradas, ctipentradas, cforentradas, cemientradas, cdenentradas,
        cnfientradas, cvalentradas, cvprentradas, cicmentradas, cbasentradas,
        cipientradas, csubentradas, cfreentradas, cfinentradas, caceentradas,
        clucentradas, cfopentradas, cdesentradas, cententradas, ctraentradas,
        ctfreentradas, cqtventradas, cespentradas, cdtcaentradas, chocaentradas,
        cdtatentradas, choatentradas, copeatentradas, copecaentrdada,
        cusucaentrada, cusuatentrada, cempentrada, i_aen_serie_nf, s_aen_obs,
        n_aen_base_substituicao, n_aen_base_isenta, s_aen_cfop_contabil,
        n_margem_convenio_subs, i_aen_ide_pedido, i_aen_codigo_tna, n_aen_valor_pis,
        n_aen_valor_cofins, n_aen_valor_pis_st, n_aen_valor_cofins_st,
        s_aen_protocolo_nfe, s_aen_chave_nfe, n_aen_seguro, s_aen_modelo_nota,
        i_aen_ind_frete, i_aen_exclui_sped, n_aen_base_st_xml, n_aen_valor_st_xml,
        n_aen_custo_operacional, n_aen_tot_iss, i_aen_ide_saida_trans,
        i_aen_codigo_afa)
        VALUES (nextval('seque_aentradas'),'V','1602','$datanfe','$datanfe','$numeronfe','$total','$total','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','1.152','0.00','0.00',NULL,'PAGO','0','','$datanfe','$time',null,null,'0',null,'$login','','8','01','','0.00','0.00','','0.00',null,'2','0.00','0.00','0.00','0.00','','','0.00','','0','0','0.00','0.00','0.00','0.00','0',null)");
if (!$com){
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
$comandoentrada = "select csidentradas from aentradas where cemientradas = '$datanfe' and cnfientradas = '$numeronfe' and cforentradas =  '1602' and cempentrada = '8' ";
$selecaoentrada=pg_query($conegc,$comandoentrada);
$cienhistorico=pg_fetch_array($selecaoentrada);
$ideentradahistorico=$cienhistorico ['csidentradas'];
if ($cienhistorico == ''){
    pg_query($conegc,"delete from ahistorico2");
    echo "<script>alert('Nota não foi incluida automaticamente');</script>";
    echo "<br><br>";
    echo "<span style='color:red;'> Confira os dados coletados </span> ";
    echo "<br><br>";
    echo " '2', '111', Emisao: '$datanfe', Numero Da Nfe: '$numeronfe', Empresa Da Nfe: '2'";
    exit;
}
$com=pg_query($conegc,"update ahistorico2 set centhistorico = csaihisotorico where cprohistorico = cprohistorico;update ahistorico2 set csaihisotorico = '0';
        update ahistorico2 set ctiphistorico = 'E';update ahistorico2 set cisahistorico = '0';update ahistorico2 set cidehistorico = nextval('seque_ahistorico');update ahistorico2 set cmothistorico= 'TRANFERENCIA DE CACADOR FEITA AUTOMATICAMENTE';
        update ahistorico2 set cclihistorico = '0';update ahistorico2 set cipehistorico = '0';update ahistorico2 set ccfohistorico = '1.102';update ahistorico2 set cemphistorico = '8';update ahistorico2 set cforhistorico= '1602';update ahistorico2 set cienhistorico=  '$ideentradahistorico';
        ");
if (!$com){
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
	    $com=pg_query($conegc,"insert into ahistorico select * from ahistorico2;delete from ahistorico2;select logar('COPIA',1,0)");
		    if (!$com){		        
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
	    $com=pg_query($conegc,"INSERT INTO aeduplicatas(
        cideduplicata, cienduplicata, cparduplicata, cforduplicata, ctipduplicata, 
        cnumduplicata, cvalduplicata, cvenduplicata, cjurduplicata, cdesduplicata, 
        cdpaduplicata, cvapduplicata, cfladuplicata, cbeduplicata, cdtcadduplicata, 
        chocadduplicata, cuscadduplicata, copcadduplicata, cdtatuduplicata, 
        choatuduplicata, cusatuduplicata, copatuduplicata, cempduplicata, 
        c_aceite_duplicata, s_aed_observacoes, i_aed_ide_ped, i_aed_numero_empenho)
        VALUES (nextval('seque_aeduplicatas'),'$ideentradahistorico', '1', '111', 'DUPLICATA', 
        '1', '$total','$dia','0.00','0.00',NULL,'0.00','','NAO','$datanfe','$time','$login','1',NULL, 
        NULL,'','0','2','','','0','0')");
	    if (!$com){
	        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Ao Inserir a Duplicata </font></b></p>";
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
	    ?>
        <!DOCTYPE html>
		<html>
		<head>    
		<link rel="stylesheet" href="css/style.css"></link>
		<center><img src="img/fundo1.jpg"alt="10" heigth ="100px" width="400px" ></center>
		</head>
		</html>
		<?php
        echo "<p style=background:#00FF00; align=center <br/><b><font size=30 color=#0000FF>Lançado Com Sucesso  em: '$dia' , '$time'  </font></b></p>"; 
        ?>
        <!DOCTYPE html>
		<html>
		<head>    
		<link rel="stylesheet" href="css/style.css"></link>
		<center><img src=img/okk.jpg alt="400" heigth ="400px" width="300px" ></center>
		<center><form name = "form1" method= "post" action= "login.php"></center>
		<center><input class="btn btn-red"  type="submit" value="Voltar"></center>
		</form>
		</head>
		</html>
		<?php		    
	    exit;


?>