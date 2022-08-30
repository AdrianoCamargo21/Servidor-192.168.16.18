<?php header('Content-Type: text/html; charset=ISO-8859-1',true);?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css"></link>
<center><img src="img/fundo1.jpg"alt="1" heigth ="100px" width="500px" ></center>
<center>
<?php
set_time_limit(800);
$time=date('H:i:s');
$dia= date('Y-m-d');
$base=$_POST['base'];
if ($base==1) {
    if(!@($con=pg_connect('host=192.168.10.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@'))){
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
if ($base==2){
    if(!@($con=pg_connect('host=192.168.10.190 dbname=troll_lages port=5430 user=postgres password=ky$14gr@'))){
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Lages Data:$dia  Hora:$time </font></b></p>";
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
if ($base==3) {    
    if(!@($con=pg_connect('host=192.168.10.190 dbname=troll_videira port=5430 user=postgres password=ky$14gr@'))){
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Videira Data:$dia  Hora:$time </font></b></p>";
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
if ($base==4) {
    if(!@($con=pg_connect('host=192.168.10.190 dbname=troll_joinville port=5430 user=postgres password=ky$14gr@'))){
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
}
if ($base=='5') {
    if(!@($con=pg_connect ("host=192.168.10.190 dbname=silvio_pessoal port=5430 user=postgres password=ky$14gr@"))){
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Porto União Data:$dia  Hora:$time </font></b></p>";
        echo "<p style=background:#000000; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista Favor avisar o Adriano</font></b></p>";
        ?>
        <!DOCTYPE html>
    	<html>
    	<head>
    	<center><img src="img/error.jpg"alt="500" heigth ="500px" width="100px" ></center>
		<center><form name = "form1" method= "post" action= "ilevantamento.html"> 
		<br>
		<input class="btn btn-red" type="submit" value="ENVIAR"/>
		</head>
		</html>
		<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
		<?php
        exit; 
    }
}
$tipo=$_POST['tipo'];
if ($tipo=='') {
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Escolha um Tipo de Operção**</font></b></p>";
    ?>
        <!DOCTYPE html>
    	<html>
    	<head>
    	<link rel="stylesheet" href="css/style.css"></link>
		<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
		<center><form name = "form1" method= "post" action= "alevantamento.html"> 
		<br>
		<input class="btn btn-red" type="submit" value="ENVIAR"/>
		</head>
		</html>
		<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
		<?php
		
        exit;
}
if ($tipo == 'C') {
    $id=$_POST['id'];
    if ($id =='' or $id < 1) {
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Id Inválido**</font></b></p>";
        ?>
        <!DOCTYPE html>
    	<html>
    	<head>
    	<link rel="stylesheet" href="css/style.css"></link>
		<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
		<center><form name = "form1" method= "post" action= "alevantamento.html"> 
		<br>
		<input class="btn btn-red" type="submit" value="ENVIAR"/>
		</head>
		</html>
		<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
		<?php		
        exit;
    }
    $sql="select id from levantamento where id = $id";
    $exsql=pg_query($con,$sql);
    if (!$exsql){
        pg_close($con);
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Erro ao Consultar a Id*</font></b></p>";
        ?>
   		<!DOCTYPE html>
		<html>
		<head>
		<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
    	<center><form name = "form1" method= "post" action= "alevantamento.html"> 
		<br>
		<input class="btn btn-red" type="submit" value="ENVIAR"/>    
		</head>
		</html>
		<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
		<?php
        exit;    
    }
    $rssql=pg_fetch_array($exsql);
    $id=$rssql['id'];
    if ($id=='') {
        pg_close($con);
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Id Invlálido*</font></b></p>";
        ?>
   		<!DOCTYPE html>
		<html>
		<head>
		<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
    	<center><form name = "form1" method= "post" action= "alevantamento.html"> 
		<br>
		<input class="btn btn-red" type="submit" value="ENVIAR"/>    
		</head>
		</html>
		<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
		<?php
        exit; 
    }
    $sql="select produto,estoque,coleta,(coleta-estoque) as diferenca from itens_levantamento where (coleta-estoque)<> 0 and codlevantamento = $id order by produto ";
    $exsql=pg_query($con,$sql);
    if (!$exsql){
        pg_close($con);
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Erro ao Consultar Produtos*</font></b></p>";
        ?>
   		<!DOCTYPE html>
		<html>
		<head>
		<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
    	<center><form name = "form1" method= "post" action= "alevantamento.html"> 
		<br>
		<input class="btn btn-red" type="submit" value="ENVIAR"/>    
		</head>
		</html>
		<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
		<?php
        exit;    
    }
    echo "<table border='2' width='100%' bgcolor=#E3F6CE >";
    echo "<tr><td>Código</td>"."<td>Referência</td>"."<td>Descrição</td>"."<td>Marca</td>"."<td>Qtd. Estoque</td>"."<td>Qtd.Coleta</td>"."<td>Diferença</td>"."<td>Custo</td>"."<td>TT Custo</td>"."</tr>";
    $total="0.00";
    while($dados=pg_fetch_array($exsql)){;
        
        $cod=$dados['produto'];
        $estoque=$dados['estoque'];
        $com="select crefporduto,cpcuproduto,cdesproduto,cmarproduto from aprodutos where ccodproduto= $cod";
        $excom=pg_query($con,$com);
        $rscom= pg_fetch_array($excom);
        $custo=$rscom['cpcuproduto'];
        $codmarca=$rscom['cmarproduto'];
        $ref=$rscom['crefporduto'];
        $desc=$rscom['cdesproduto'];
        
        if ($codmarca <> '') {
            $com="select cdesmarca from tmarca where ccodmarca = $codmarca";
            $excom=pg_query($con,$com);
            $rscom= pg_fetch_array($excom);
            $dsmarca=$rscom['cdesmarca'];
        } else {
            $dsmarca='Não Cadastrada';
        }
        
        $coleta=$dados['coleta'];
            
        $dif=$dados['diferenca'];        
       
        $ttcusto=$dif*$custo;
        $total=$total+$ttcusto;
        if ($ttcusto > 0) {
            $cor='black';
        } else {
            $cor='red';
        }
        $ttcusto=number_format($ttcusto,2,",",".");     
        $estoque=number_format($estoque,2,",",".");
        $coleta=number_format($coleta,2,",","."); 
        $custo=number_format($custo,2,",","."); 
        $dif=number_format($dif,2,",","."); 
        echo "<td><span style='color:$cor;'>".$dados['produto']."</span></td>\n";
        echo "<td><span style='color:$cor;'>".$ref."</span></td>\n";
        echo "<td><span style='color:$cor;'>".$desc."</span></td>\n";
        echo "<td><span style='color:$cor;'>".$dsmarca."</span></td>\n";
        echo "<td><span style='color:$cor;'>".$estoque."</span></td>\n";
        echo "<td><span style='color:$cor;'>".$coleta."</span></td>\n";
        echo "<td><span style='color:$cor;'>".$dif."</span></td>\n";
        echo "<td><span style='color:$cor;'>".$custo."</span></td>\n";             
        echo "<td><span style='color:$cor;'>".$ttcusto."</span></td>\n";
        
        
        
        
        echo "</tr>\n";
        
    }
    $sql="select sum(coleta-estoque) as diferenca from itens_levantamento where (coleta-estoque)<>0 and  codlevantamento = $id";
    $exsql=pg_query($con,$sql);
    $rssql=pg_fetch_array($exsql);
    $resulm=$rssql['diferenca'];
    $media=$total/$resulm;
    $totalm=number_format($total,2,",",".");
    $media=number_format($media,2,",",".");
    if ($total < 0) {
        echo "<h2><span style='color:red;'>Total de Falta:$totalm Pçs:$resulm, Valor Médio R$ $media </span></h2>" ;
    } else {
        echo "<h2>Total de Sobra:$totalm, Pçs:$resulm, Media de Valor R$ $media</h2>" ;
    }

    if ($resulm <= 0) {        
        echo "<table border='2' width='100%' bgcolor=#E3F6CE >";

    } else {
        echo "<table border='2' width='100%' bgcolor=#E3F6CE >";

    }
}
if ($tipo == 'A') {
    $id=$_POST['ide'];
    if ($id =='' or $id < 1) {
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Id Inválido**</font></b></p>";
        ?>
        <!DOCTYPE html>
    	<html>
    	<head>
    	<link rel="stylesheet" href="css/style.css"></link>
		<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
		<center><form name = "form1" method= "post" action= "alevantamento.html"> 
		<br>
		<input class="btn btn-red" type="submit" value="ENVIAR"/>
		</head>
		</html>
		<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
		<?php		
        exit;
    }    
    $sql="select id from levantamento where id = $id and status = 'A'";
    $exsql=pg_query($con,$sql);
    if (!$exsql){
        pg_close($con);
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Erro ao Consultar a Id*</font></b></p>";
        ?>
   		<!DOCTYPE html>
		<html>
		<head>
		<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
    	<center><form name = "form1" method= "post" action= "alevantamento.html"> 
		<br>
		<input class="btn btn-red" type="submit" value="ENVIAR"/>    
		</head>
		</html>
		<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
		<?php
        exit;    
    }
    $rssql=pg_fetch_array($exsql);
    $id=$rssql['id'];
    if ($id=='') {
        pg_close($con);
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Id Inválido ou Mesmo já esta Fechado*</font></b></p>";
        ?>
   		<!DOCTYPE html>
		<html>
		<head>
		<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
    	<center><form name = "form1" method= "post" action= "alevantamento.html"> 
		<br>
		<input class="btn btn-red" type="submit" value="ENVIAR"/>    
		</head>
		</html>
		<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
		<?php
        exit; 
    }
    $emp=$_POST['emp'];
    if ($emp =='' or $emp < 1) {
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Empresa Invalida**</font></b></p>";
        ?>
        <!DOCTYPE html>
    	<html>
    	<head>
    	<link rel="stylesheet" href="css/style.css"></link>
		<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
		<center><form name = "form1" method= "post" action= "alevantamento.html"> 
		<br>
		<input class="btn btn-red" type="submit" value="ENVIAR"/>
		</head>
		</html>
		<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
		<?php		
        exit;
    }    
    $sql="select ccodempresa from tempresa where  ccodempresa = $emp";
    $exsql=pg_query($con,$sql);
    if (!$exsql){
        pg_close($con);
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Erro ao Consultar a empresa*</font></b></p>";
        ?>
   		<!DOCTYPE html>
		<html>
		<head>
		<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
    	<center><form name = "form1" method= "post" action= "alevantamento.html"> 
		<br>
		<input class="btn btn-red" type="submit" value="ENVIAR"/>    
		</head>
		</html>
		<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
		<?php
        exit;    
    }
    $rssql=pg_fetch_array($exsql);
    $emp=$rssql['ccodempresa'];
    if ($emp=='') {
        pg_close($con);
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **empresa Inválida*</font></b></p>";
        ?>
   		<!DOCTYPE html>
		<html>
		<head>
		<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
    	<center><form name = "form1" method= "post" action= "alevantamento.html"> 
		<br>
		<input class="btn btn-red" type="submit" value="ENVIAR"/>    
		</head>
		</html>
		<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
		<?php
        exit; 
    }
    $sql="select produto,sum(coleta-estoque) as diferenca from itens_levantamento where (coleta-estoque)<>0 and  codlevantamento =$id GROUP BY produto order by produto";
    $exsql=pg_query($con,$sql);
    if (!$exsql){
        pg_close($con);
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Erro ao Consultar Produtos**</font></b></p>";
        ?>
   		<!DOCTYPE html>
		<html>
		<head>
		<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
    	<center><form name = "form1" method= "post" action= "alevantamento.html"> 
		<br>
		<input class="btn btn-red" type="submit" value="ENVIAR"/>    
		</head>
		</html>
		<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
		<?php
        exit;    
    }    
    while($dados=pg_fetch_array($exsql)){
        $cod=$dados['produto'];
        $qtd=$dados['diferenca'];        
        $com="select  cdesproduto from aprodutos where ccodproduto =$cod ";
        $excom=pg_query($con,$com);
        $rscom=pg_fetch_array($excom);
        $desc=$rscom['cdesproduto'];
        if ($qtd < 0) {
            $com="select cqtdproduto  from aprodutos where ccodproduto =$cod ";
            $excom=pg_query($con,$com);
            $rscom=pg_fetch_array($excom);
            $qtda=$rscom['cqtdproduto'];
            $nova=$qtd+$qtda;
            $com="update aprodutos set cqtdproduto = $nova where ccodproduto =$cod ";
            $excom=pg_query($con,$com);
            $qtdn= abs($qtd);
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
    VALUES (nextval('seque_ahistorico'),NULL,0,0,'O','SAÍDA POR LEVANTAMENTO',$cod,'$dia',0.000,0.0000,0.0000,0.0000,0.0000,0.0000, 
            0.0000,0.0000,0.0000,0.0000,0.0000,0.00,'$desc','',$qtdn,0.0000,NULL,0,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.000,0,'$dia', 
            '$time','LEVANTAMENTO',1,NULL,NULL,NULL,'',$emp,0.00,0,0,0,0.00,NULL,NULL,NULL,NULL,0.00,0,0,0,0.0000,0.0000,0.00,0.0000,0.00,0.0000,0.0000,0.0000, 
            0.00,0.00,0.00,0,0,0.0000,0.0000,0.0000,0,'',0,'',0.00,0.00,NULL,NULL,NULL,NULL,NULL,0.0000,0,NULL,NULL,'',0,0.00,0.00,0,0.00,0.0000,0.0000,0.00,0.00, 
            0.00,0,'','',NULL,NULL,NULL,'','','',0.00,0.00,0.00,0.00,0.00,'',0.00,'','',0.000,0.0000,0.0000,0.0000,0,0,0,'',0.00,0.00,0.00,NULL,NULL,NULL,'',0.00,0.00, 
            0.00,NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL,NULL,NULL,NULL,'',NULL,'',NULL,0,0,0.00,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,'',NULL,'',NULL,'',NULL,NULL)";
            $excom=pg_query($con,$com);
        }
        if ($qtd > 0) {
            $com="select cqtdproduto  from aprodutos where ccodproduto =$cod ";
            $excom=pg_query($con,$com);
            $rscom=pg_fetch_array($excom);
            $qtda=$rscom['cqtdproduto'];
            $nova=$qtd+$qtda;
            $com="update aprodutos set cqtdproduto = $nova where ccodproduto =$cod ";
            $excom=pg_query($con,$com);
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
    VALUES (nextval('seque_ahistorico'),NULL,0,0,'I','ENTRADA POR LEVANTAMENTO',$cod,'$dia',0.000,0.0000,0.0000,0.0000,0.0000,0.0000,
            0.0000,0.0000,0.0000,0.0000,0.0000,0.00,'$desc','',0.0000,$qtd,NULL,0,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.000,0,'$dia',
            '$time','LEVANTAMENTO',1,NULL,NULL,NULL,'',$emp,0.00,0,0,0,0.00,NULL,NULL,NULL,NULL,0.00,0,0,0,0.0000,0.0000,0.00,0.0000,0.00,0.0000,0.0000,0.0000,
            0.00,0.00,0.00,0,0,0.0000,0.0000,0.0000,0,'',0,'',0.00,0.00,NULL,NULL,NULL,NULL,NULL,0.0000,0,NULL,NULL,'',0,0.00,0.00,0,0.00,0.0000,0.0000,0.00,0.00,
            0.00,0,'','',NULL,NULL,NULL,'','','',0.00,0.00,0.00,0.00,0.00,'',0.00,'','',0.000,0.0000,0.0000,0.0000,0,0,0,'',0.00,0.00,0.00,NULL,NULL,NULL,'',0.00,0.00,
            0.00,NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL,NULL,NULL,NULL,'',NULL,'',NULL,0,0,0.00,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,'',NULL,'',NULL,'',NULL,NULL)";
            $excom=pg_query($con,$com);
        }

    }
    $sql="update levantamento set status = 'F' where id = $id";
    $exsql=pg_query($con,$sql);
}

?>
<link rel="stylesheet" href="css/style.css"></link>
<center><form name = "form1" method= "post" action= "levantamento.php"></center>
<center><input class="btn btn-red"  type="submit"  value="Voltar"></center>
</center>
</head>
</html>





















