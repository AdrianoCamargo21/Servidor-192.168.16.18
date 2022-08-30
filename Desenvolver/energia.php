

<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
$voltalogin="<script>window.location='http://192.168.13.2/Desenvolver/energia.html'</script>";
$errocacador="<script>alert('Não foi possivel conectar ao B.D troll caçador');</script>";
$errovideira="<script>alert('Não foi possivel conectar ao B.D troll videira');</script>";

$nfe=$_POST['numeronfe'];
if ($nfe == '' ){
    echo "<script>alert('Favor informar o numero da conta');</script>";
    echo "$voltalogin";
}
if ($nfe < 0 or $nfe == '0' ){
    echo "<script>alert('Numero da conta não pode ser negativo ou igual a zero');</script>";
    echo "$voltalogin";
}
$data=$_POST['data'];
if ($data == ''){
    echo "<script>alert('Favor selecionar uma Data');</script>";
    echo "$voltalogin";
}
$valor=$_POST['valor'];
if ($valor == '' or $valor < '0' ){
    echo "<script>alert('O valor não pode ser negativo ou igual a zero');</script>";
    echo "$voltalogin";
}
$emp=$_POST['empresa'];
date_default_timezone_set('America/Sao_Paulo');
$time=date('H:i:s');
$dia= date('Y-m-d');


if ($emp == '13'){
    if(!@($conexaov=pg_connect ("host=192.168.9.10 dbname=troll port=5433 user=postgres password=ky$14gr@"))) {
        pg_close($conexaov);
        echo "$errovideira";
        echo "$voltalogin";
    }
    pg_query("select logar('COPIA',1,0)");
    $procuranota= "select cnfientradas from aentradas where cnfientradas = '$nfe' and cforentradas = '1518'";
    $exprocuranota=pg_query($procuranota);
    $rsprocuranota=pg_fetch_array($exprocuranota);
    if ($rsprocuranota <> ''){
        pg_close($conexaov);
        echo "<script>alert('Numero da conta já lançada');</script>";
        echo "$voltalogin";
    }
    pg_query("
INSERT INTO aentradas(
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
VALUES (nextval('seque_aentradas'),'V','1518','$data','$dia','$nfe','$valor','$valor',
'0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00',
'1.253','0.00','0.00',NULL,'PAGO','0','','$dia','$time',null,null,'0','1','COPIA','',
'$emp','01','','0.00','0.00','','0.00',null,'2','0.00','0.00','0.00','0.00','','','0.00',
'','0','0','0.00','0.00','0.00','0.00','0',null)");
    
    $procurandoid = "select csidentradas from aentradas where cnfientradas = '$nfe'and cforentradas = '1518'";
    $exprocurandoid = pg_query ($procurandoid);
    $rsprocurandoid=pg_fetch_array($exprocurandoid);
    $id=$rsprocurandoid ['csidentradas'];    
    
    pg_query("INSERT INTO ahistorico(
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
VALUES((nextval('seque_ahistorico')),'$id','0','0','E','','96770','$data','$valor','$valor','$valor'
,'$valor','0.0000','0.0000','0.0000','0.0000','0.0000','0.0000','0.0000','$valor','ENERGIA','1.253'
,'0.0000','1.0000','1518','0','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.0000'
,'0','$dia','$time','ADRIANO','13',NULL,NULL,'0','','$emp','0.00','0','0','0','0.00','0.00','0.00','0.00'
,'0.00','$valor',NULL,NULL,NULL,'0.0000','0.0000','0.00','0.0000','0.00','0.0000','0.0000','$valor','0.00','0.00'
,'0.00','0',NULL,'0.0000','0.0000','0.0000','1','','0','000','0.00','0.00','0','0','0',NULL,NULL,'0.0000',NULL,'0',NULL
,'','0','0.00','0.00','0','0.00','0.0000','0.0000','0.00','0.00','0.00',NULL,'','',NULL,NULL,'0','02','07','07','0.00'
,'0.00','0.00','0.00','0.00','0','0.00','0','','0.000','0.0000','0.000','0.0000','0','0','0','','0.00','0.00','0.00'
,'','0.00','0','','0.00','0.00','0.00','0.0000','0.00','0.0000','0.0000','0.0000','0.00','','','0.00','0.00','0.00',
'0.00','',NULL,'','0.00',NULL,'0','0.00','0.0000','0.00','0.00','0','','0.00','0','0','0.0000','','0.00','','0','','0.00','0.00')");
    pg_close($conexaov);
    echo "<script>alert('Nota incluida com sucesso!!');</script>";
    echo "$voltalogin"; 
}

if ($emp == '14'){
    if(!@($conexaov=pg_connect ("host=192.168.10.153 dbname=troll port=5434 user=postgres password=ky$14gr@"))) {
        pg_close($conexaov);
        echo "$errovideira";
        echo "$voltalogin";
    }
    pg_query("select logar('COPIA',1,0)");
    $procuranota= "select cnfientradas from aentradas where cnfientradas = '$nfe' and cforentradas = '116'";
    $exprocuranota=pg_query($procuranota);
    $rsprocuranota=pg_fetch_array($exprocuranota);
    if ($rsprocuranota <> ''){
        pg_close($conexaov);
        echo "<script>alert('Numero da conta já lançada');</script>";
        echo "$voltalogin";
    }
    pg_query("
INSERT INTO aentradas(
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
VALUES (nextval('seque_aentradas'),'V','116','$data','$dia','$nfe','$valor','$valor',
'0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00',
'1.253','0.00','0.00',NULL,'PAGO','0','','$dia','$time',null,null,'0','1','COPIA','',
'1','01','','0.00','0.00','','0.00',null,'2','0.00','0.00','0.00','0.00','','','0.00',
'','0','0','0.00','0.00','0.00','0.00','0',null)");
    
    $procurandoid = "select csidentradas from aentradas where cnfientradas = '$nfe'and cforentradas = '116'";
    $exprocurandoid = pg_query ($procurandoid);
    $rsprocurandoid=pg_fetch_array($exprocurandoid);
    $id=$rsprocurandoid ['csidentradas'];    
    
    pg_query("INSERT INTO ahistorico(
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
VALUES((nextval('seque_ahistorico')),'$id','0','0','E','','96770','$data','$valor','$valor','$valor'
,'$valor','0.0000','0.0000','0.0000','0.0000','0.0000','0.0000','0.0000','$valor','ENERGIA','1.253'
,'0.0000','1.0000','116','0','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.0000'
,'0','$dia','$time','ADRIANO','13',NULL,NULL,'0','','1','0.00','0','0','0','0.00','0.00','0.00','0.00'
,'0.00','$valor',NULL,NULL,NULL,'0.0000','0.0000','0.00','0.0000','0.00','0.0000','0.0000','$valor','0.00','0.00'
,'0.00','0',NULL,'0.0000','0.0000','0.0000','1','','0','000','0.00','0.00','0','0','0',NULL,NULL,'0.0000',NULL,'0',NULL
,'','0','0.00','0.00','0','0.00','0.0000','0.0000','0.00','0.00','0.00',NULL,'','',NULL,NULL,'0','02','07','07','0.00'
,'0.00','0.00','0.00','0.00','0','0.00','0','','0.000','0.0000','0.000','0.0000','0','0','0','','0.00','0.00','0.00'
,'','0.00','0','','0.00','0.00','0.00','0.0000','0.00','0.0000','0.0000','0.0000','0.00','','','0.00','0.00','0.00',
'0.00','',NULL,'','0.00',NULL,'0','0.00','0.0000','0.00','0.00','0','','0.00','0','0','0.0000','','0.00','','0','','0.00','0.00')");
    pg_close($conexaov);
    echo "<script>alert('Nota incluida com sucesso!!');</script>";
    //echo "$voltalogin"; 
}

if(!@($conexaoc=pg_connect ("host=192.168.10.30 dbname=troll port=5430 user=postgres password=ky$14gr@"))) {
    pg_close($conexaoc);
    echo "$errocacador";
    echo "$voltalogin";
}
pg_query("select logar('COPIA',1,0)");
$procuranota= "select cnfientradas from aentradas where cnfientradas = '$nfe' and cforentradas = '1518'";
$exprocuranota=pg_query($procuranota);
$rsprocuranota=pg_fetch_array($exprocuranota);
if ($rsprocuranota <> ''){
    pg_close($conexaoc);
    echo "<script>alert('Numero da conta já lançada');</script>";
    echo "$voltalogin";
}



pg_query("
INSERT INTO aentradas(
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
VALUES (nextval('seque_aentradas'),'V','1518','$data','$dia','$nfe','$valor','$valor',
'0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00',
'1.253','0.00','0.00',NULL,'PAGO','0','','$dia','$time',null,null,'0','1','COPIA','',
'$emp','01','','0.00','0.00','','0.00',null,'2','0.00','0.00','0.00','0.00','','','0.00',
'','0','0','0.00','0.00','0.00','0.00','0',null)");

$procurandoid = "select csidentradas from aentradas where cnfientradas = '$nfe'and cforentradas = '1518'";
$exprocurandoid = pg_query ($procurandoid);
$rsprocurandoid=pg_fetch_array($exprocurandoid);
$id=$rsprocurandoid ['csidentradas'];

pg_query("INSERT INTO ahistorico(
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
VALUES((nextval('seque_ahistorico')),'$id','0','0','E','','96770','$data','$valor','$valor','$valor'
,'$valor','0.0000','0.0000','0.0000','0.0000','0.0000','0.0000','0.0000','$valor','ENERGIA','1.253'
,'0.0000','1.0000','1518','0','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.0000'
,'0','$dia','$time','ADRIANO','13',NULL,NULL,'0','','$emp','0.00','0','0','0','0.00','0.00','0.00','0.00'
,'0.00','$valor',NULL,NULL,NULL,'0.0000','0.0000','0.00','0.0000','0.00','0.0000','0.0000','$valor','0.00','0.00'
,'0.00','0',NULL,'0.0000','0.0000','0.0000','1','','0','000','0.00','0.00','0','0','0',NULL,NULL,'0.0000',NULL,'0',NULL
,'','0','0.00','0.00','0','0.00','0.0000','0.0000','0.00','0.00','0.00',NULL,'','',NULL,NULL,'0','02','07','07','0.00'
,'0.00','0.00','0.00','0.00','0','0.00','0','','0.000','0.0000','0.000','0.0000','0','0','0','','0.00','0.00','0.00'
,'','0.00','0','','0.00','0.00','0.00','0.0000','0.00','0.0000','0.0000','0.0000','0.00','','','0.00','0.00','0.00',
'0.00','',NULL,'','0.00',NULL,'0','0.00','0.0000','0.00','0.00','0','','0.00','0','0','0.0000','','0.00','','0','','0.00','0.00')");
pg_close($conexaoc);
echo "<script>alert('Nota incluida com sucesso!!');</script>";
echo "$voltalogin";
?>