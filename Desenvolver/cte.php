

<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
$arquivo = "cte.xml";
unlink($arquivo);

$voltalogin="<script>window.location='http://192.168.13.2/Desenvolver/cte.html'</script>";
$errocacador="<script>alert('Não foi possivel conectar ao B.D');</script>";

$nome_temporario=$_FILES["Arquivo"]["tmp_name"];
$nome_real=$_FILES["Arquivo"]["name"];
if (!copy($nome_temporario,$nome_real)){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Ao caregar o Arquivo**</font></b></p>";
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
$antigo="$nome_real";
$arquivo_novo="cte.xml";
rename($antigo,$arquivo_novo);
if (file_exists('cte.xml')){
    $object = simplexml_load_file('cte.xml');
    {
        foreach($object->CTe as $item)
        $forcnpj=$item->infCte->emit->CNPJ;
        if ($forcnpj=='') {
            echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Ao Carregar dados do xml 01**</font></b></p>";
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
        $dest=$item->infCte->dest->CNPJ;   
        if ($dest == null){
            $dest=$item->infCte->exped->CNPJ; 
            if ($dest == null) {
                echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Ao Carregar dados do xml 03 **</font></b></p>";
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
        $emit=$item->infCte->rem->CNPJ;
        if ($emit == ''){
            $emit=$item->infCte->rem->CPF;
            if ($emit == ''){
                echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Ao Carregar dados do xml**</font></b></p>";
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
        
        $nfe=$item->infCte->ide->nCT;
        if ($nfe == '' ){
            echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Ao Carregar dados do xml**</font></b></p>";
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
        $data1=$item->infCte->ide->dhEmi;        
        $data = substr($data1, 0, -15);
        $data = str_replace('-', '/', $data);
        if ($data == ''){
            echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Ao Carregar Data**</font></b></p>";
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
        if(strlen($data)< 10 or strlen($data)> 10 )
        {
            echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Ao Manupular data do xml**</font></b></p>";
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
        $forcnpj=$item->infCte->emit->CNPJ;
        if ($forcnpj== ''){
            echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Ao Selecionar Cnpj do Fornecedor**</font></b></p>";
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
        $valor=$item->infCte->vPrest->vTPrest;
        if ($valor == '' or $valor < '0' ){
            echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Ao Caregar Valor do xml**</font></b></p>";
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
        $serie=$item->infCte->ide->serie;
        if ($serie==''){
            echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Ao Caregar Valor do xml**</font></b></p>";
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
    {
        foreach($object->protCTe as  $item)
            $chavecte=$item->infProt->chCTe;
            if(strlen($chavecte)> 44 or strlen($chavecte)< 44 ){
                echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Ao Caregar Chave do xml**</font></b></p>";
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
            $protc=$item->infProt->nProt;
            if(strlen($protc)< 15 or strlen($protc)> 15 ) {
                echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Ao Caregar Protocólogo do xml**</font></b></p>";
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
}else {
    exit('Falha ao Carregar o Arquivo');
}
$base=$_POST['base'];
$obs=$_POST['obs'];
if ($obs == ''){
    $obs='Nada Informado ao carregar XML';
}
date_default_timezone_set('America/Sao_Paulo');
$time=date('H:i:s');
$dia= date('Y-m-d');
$dataV=date('Y/m/d', strtotime($data. ' + 30 days'));
if($base == '1'){
    if(!@($con=pg_connect ("host=192.168.16.2 dbname=troll port=5430 user=postgres password=ky$14gr@"))) {
    pg_close($con);
    echo "$errocacador";
    echo "$voltalogin";
    }
}
if($base == '2'){
    if(!@($con=pg_connect ("host=192.168.9.10 dbname=troll port=5430 user=postgres password=ky$14gr@"))) {
        pg_close($con);
        echo "$errocacador";
        echo "$voltalogin";
    }
}
if($base == '3'){
    if(!@($con=pg_connect ("host=192.168.16.77 dbname=troll port=5430 user=postgres password=ky$14gr@"))) {
        pg_close($con);
        echo "$errocacador";
        echo "$voltalogin";
    }
}
if($base == '4'){
    if(!@($con=pg_connect ("host=192.168.11.2 dbname=troll port=5430 user=postgres password=ky$14gr@"))) {
        pg_close($con);
        echo "$errocacador";
        echo "$voltalogin";
    }
}

$procurandofornecedor="select ccodfornecedor,cuffornecedor  from afornecedor where ccgcfornecedor = '$forcnpj'";
$exprocurandofornecedor=pg_query($procurandofornecedor);
$rsprocurandofornecedor=pg_fetch_array($exprocurandofornecedor);
$codforn=$rsprocurandofornecedor['ccodfornecedor'];
$uf01=$rsprocurandofornecedor['cuffornecedor'];

if ($codforn == ''){
    pg_close($con);
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Fornecedor Não Cadastrado </font></b></p>";
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
if ($uf01 == 'SC'){
    $cfop='1.353';
} 
if ($uf01<> 'SC'){
    $cfop='2.353';
}



$procuranota= "select cnfientradas from aentradas where cnfientradas = '$nfe' and cforentradas = '$codforn'";
$exprocuranota=pg_query($procuranota);
$rsprocuranota=pg_fetch_array($exprocuranota);
if ($rsprocuranota <> ''){
    pg_close($con);
    echo "<script>alert('Numero da Nota já lançada');</script>";
    echo "$voltalogin";
}
$tomador=$_POST['tomador'];
if ($tomador =='D') {
    $com=pg_query($con,"select ccodempresa from tempresa where ccnpjempresa = '$dest'");
}else {
    $com=pg_query($con,"select ccodempresa from tempresa where ccnpjempresa = '$emit'");
}
$rscom=pg_fetch_array($com);
$emp=$rscom['ccodempresa'];
if ($emp == '') {
    pg_close($con);
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Empresa que consta No Xml Não esta Cadastrada</font></b></p>";
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
$com=pg_query($con,"select ccodproduto from aprodutos where ctipproduto = 2");
$rscom=pg_fetch_array($com);
$prod=$rscom['ccodproduto'];
if ($prod==''){
    pg_close($con);
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Nenhum Produto Cadastradro Como Serviço de Frete </font></b></p>";
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
pg_query($con,"select logar('COPIA',1,0)");
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
VALUES (nextval('seque_aentradas'),'P','$codforn','$data','$dia','$nfe','$valor','$valor',
'0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','$cfop','0.00','0.00',NULL,'PAGO',
'0','','$dia','$time',null,null,'0','1','COPIA','','$emp','$serie','','0.00','0.00','','0.00',
null,'2','0.00','0.00','0.00','0.00','$protc','$chavecte','0.00',
'57','0','0','0.00','0.00','0.00','0.00','0',null)");

$procurandoid = "select csidentradas from aentradas where cnfientradas = '$nfe'and cforentradas = '$codforn'";
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
VALUES((nextval('seque_ahistorico')),'$id','0','0','E','','$prod','$data','$valor','$valor','$valor'
,'$valor','0.0000','0.0000','0.0000','0.0000','0.0000','0.0000','0.0000','$valor','SERVIÇOS','$cfop'
,'0.0000','1.0000','$codforn','0','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.0000'
,'0','$dia','$time','COPIA','1',NULL,NULL,'0','','$emp','0.00','0','0','0','0.00','0.00','0.00','0.00'
,'0.00','$valor',NULL,NULL,NULL,'0.0000','0.0000','0.00','0.0000','0.00','0.0000','0.0000','$valor','0.00','0.00'
,'0.00','0',NULL,'0.0000','0.0000','0.0000','1','','0','000','0.00','0.00','0','0','0',NULL,NULL,'0.0000',NULL,'0',NULL
,'','0','0.00','0.00','0','0.00','0.0000','0.0000','0.00','0.00','0.00',NULL,'','',NULL,NULL,'0','02','07','07','0.00'
,'0.00','0.00','0.00','0.00','0','0.00','0','','0.000','0.0000','0.000','0.0000','0','0','0','','0.00','0.00','0.00'
,'','0.00','0','','0.00','0.00','0.00','0.0000','0.00','0.0000','0.0000','0.0000','0.00','','','0.00','0.00','0.00',
'0.00','',NULL,'','0.00',NULL,'0','0.00','0.0000','0.00','0.00','0','','0.00','0','0','0.0000','','0.00','','0','','0.00','0.00')");
pg_query("INSERT INTO aeduplicatas(
            cideduplicata, cienduplicata, cparduplicata, cforduplicata, ctipduplicata, 
            cnumduplicata, cvalduplicata, cvenduplicata, cjurduplicata, cdesduplicata, 
            cdpaduplicata, cvapduplicata, cfladuplicata, cbeduplicata, cdtcadduplicata, 
            chocadduplicata, cuscadduplicata, copcadduplicata, cdtatuduplicata, 
            choatuduplicata, cusatuduplicata, copatuduplicata, cempduplicata, 
            c_aceite_duplicata, s_aed_observacoes, i_aed_ide_ped, i_aed_numero_empenho)
    VALUES (nextval('seque_aeduplicatas'),'$id', '1', '$codforn', 'DUPLICATA','1', '$valor',
'$dataV','0.00','0.00',NULL,'0.00','','NAO','$dia','$time','COPIA','1',NULL, 
            NULL,'','0','$emp','','$obs','0','0')");

pg_close($con);
?>
<!DOCTYPE html>
<html>
<head>    
<link rel="stylesheet" href="css/style.css"></link>
<center><img src="img/fundo1.jpg"alt="10" heigth ="100px" width="400px" ></center>
</head>
</html>
<?php
echo "<p style=background:#00FF00; align=center <br/><b><font size=30 color=#0000FF>Cte Incluido Com Sucesso  em: '$dia' , '$time'  </font></b></p>";
?>
<!DOCTYPE html>
<html>
<head>    
<link rel="stylesheet" href="css/style.css"></link>
<center><img src=img/okk.jpg alt="400" heigth ="400px" width="300px" ></center>
<center><form name = "form1" method= "post" action= "cte.html"></center>
<center><input class="btn btn-red"  type="submit"  value="Voltar"></center>

</form>
</head>
</html>