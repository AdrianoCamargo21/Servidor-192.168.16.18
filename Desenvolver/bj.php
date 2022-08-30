<!DOCTYPE html>
<html>
<head>
<title>Gera Pedido Bom Jesus</title>
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
set_time_limit(0);
date_default_timezone_set('America/Sao_Paulo');
$time=date('H:i');
$dia= date('d-m-Y');
$dia1=date('Y-m-d');
$datinc=$_POST['datainicial'];
$datfin=$_POST['datafinal'];
$voltalogin="<script>window.location='http://192.168.13.2/Desenvolver/BomJesus.html'</script>";
if ($datinc == '' ){
    echo '<script>window.alert(\'Data Inicial Invalida \');</script>';    
    echo "$voltalogin";
}
if ($datfin == '' ){
    echo '<script>window.alert(\'Data Final Invalida \');</script>';    
    echo "$voltalogin";
}
if ($datinc > $datfin ){
    echo '<script>window.alert(\'Data Inicial Maior que Data Final \');</script>';    
    echo "$voltalogin";}

echo "De : $datinc   Até: $datfin"."<br>";
if(!@($serv=pg_connect ("host=192.168.16.2 dbname=troll port=5430 user=postgres password=ky$14gr@"))){
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
$base=$_POST['base'];
if ($base == 'C') {
    if(!@($geral=pg_connect ("host=192.168.16.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@"))){
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
    if(!@($local=pg_connect ("host=192.168.16.2 dbname=troll port=5430 user=postgres password=ky$14gr@"))){
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
    $forn='2334';
    $tabela='bomjesuscacador';
    $logar ="('ADRIANO','13',0)";
    $serie='81';
    $cliente='42007';    
    echo "<p style=background:#D3D3D3; align=center <br/><b><font size=5 color=#FF0000>Servidor de Caçador Conectado</font></b></p>";    
}
if ($base == 'L') {
    if(!@($geral=pg_connect ("host=192.168.16.190 dbname=troll_lages port=5430 user=postgres password=ky$14gr@"))){
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
    if(!@($local=pg_connect ("host=192.168.11.2 dbname=troll port=5430 user=postgres password=ky$14gr@"))){
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
    $forn='842';
    $tabela='bomjesuslages';
    $logar ="('ADRIANO','28',0)";
    $serie='9';
    $cliente='42007';
    echo "<p style=background:#D3D3D3; align=center <br/><b><font size=5 color=#FF0000>Servidor de Lages Conectado</font></b></p>";
}
$sql="delete from bomjesus";
$exsql=pg_query($local,$sql);
$sql="select cprohistorico ,(sum(csaihisotorico-centhistorico)) as qtd from ahistorico inner join aprodutos on cprohistorico = ccodproduto inner join tlinha on clinproduto  = ccodlinha
    inner join asaidas on cidesaidas = cisahistorico  where cemihistorico >= '$datinc' and cemihistorico <= '$datfin'   and clinproduto  = '108' and cclisaidas <> $cliente
    and ccfohistorico in ('5.102','6.102','1.202','2.202','5.114','6.114')  GROUP BY cprohistorico order by cprohistorico"; 
$exsql=pg_query($geral,$sql);
$rssql=pg_fetch_array($exsql);
if (!$exsql){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Erro Ao Carregar Produtos**</font></b></p>";
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
if ($rssql=='') {
    echo "<p style=background:#D3D3D3; align=center <br/><b><font size=5 color=#FF0000>Nenhum Produto Vendido Nesse Periodo</font></b></p>";
    exit;
} else {
    $exsql=pg_query($geral,$sql);
    while($dados=pg_fetch_array($exsql)){
        $produto=$dados['cprohistorico'];
        $qnt=$dados['qtd'];
        $com="insert into bomjesus(codigo, qnt) values ($produto,$qnt)";
        $excom=pg_query($local,$com);        
    }
}
$sql="select codigo,qnt from bomjesus where qnt > 0 order by codigo";
$exsql=pg_query($local,$sql);
$rssql=pg_fetch_array($exsql);
if ($rssql =='') {
    echo "<p style=background:#D3D3D3; align=center <br/><b><font size=5 color=#FF0000>Erro ao Carregar Tabela de produtos Vendidos</font></b></p>";
    exit;
} else{
    $sql="SELECT (MAX(i_ipe_codigo_pdi)+1)as ultimo FROM itens_pedidos";
    $exsql=pg_query($local,$sql);
    $rssql=pg_fetch_array($exsql);
    $ult=$rssql['ultimo'];
    $sql="select (nextval('seque_pedidos'))as id";
    $exsql=pg_query($local,$sql);
    $rssql=pg_fetch_array($exsql);
    $id=$rssql['id']; 
    $sql="select logar$logar;INSERT INTO pedidos(i_pdi_codigo, d_pdi_data_emissao, d_pdi_data_faturamento, i_pdi_codigo_tse,i_pdi_numero_pedido, i_pdi_codigo_cli, i_pdi_codigo_tfo, i_pdi_codigo_ved,i_pdi_codigo_tabela_preco, n_pdi_valor_total, n_pdi_valor_desconto,
    n_pdi_valor_acrescimo, n_pdi_valor_frete, n_pdi_valor_despesas,i_pdi_tipo_entrega, i_pdi_codigo_emp, i_pdi_codigo_usu, n_pdi_valor_subtotal,n_pdi_valor_entrada, i_pdi_codigo_dav, i_pdi_status, n_pdi_juros,i_pdi_venc_mesmo_dia, d_pdi_data_primeira_prest, i_pdi_tipo_juro,i_pdi_tipo_quebra, i_pdi_codigo_asa, i_pdi_valor_faturar, i_pdi_valor_pendente,
    i_pdi_valor_entregue, i_pdi_codigo_atr1, s_pdi_qtde_volumes,n_pdi_peso_liquido, n_pdi_peso_bruto, s_pdi_especie, s_pdi_marca,s_pdi_numero_volumes, s_pdi_tipo_frete, s_pdi_observacao, n_pdi_perc_juro,i_pdi_dias_prestacao, i_pdi_codigo_pv, i_pdi_codigo_eve, i_pdi_codigo_par,t_pdi_hora_cadastro, i_pdi_ope_cadastro, t_pdi_hora_atu, i_pdi_ope_atu,
    d_pdi_data_cadastro, d_pdi_data_atualizacao, i_pdi_em_uso, i_pdi_cod_pds,i_pdi_nao_envia_obs_nf, i_pdi_identifica_pedido, s_pdi_peso_inicial,s_pdi_peso_final, i_pdi_codigo_sd, i_pdi_defeito, i_pdi_status_defeito)
    VALUES ($id,'$dia1',NULL,$serie,$ult,$cliente,1,1,11,100.00,0.00,0.00,0.00,0.00,1,1,3,500.00,0.00,0,0,0.00,0,NULL,1,1,NULL,0.00,0.00,0.00,1,0,0.000,0.000,'','','',0,'PREÇO ANTIGO',0.00,0,0,NULL,NULL,'$time',1,NULL,0,'$dia1',NULL,0,NULL,0,'',0.000,0.000,0,0,0)";
    $exsql=pg_query($local,$sql);
    $sql="select codigo,qnt from bomjesus where qnt >0 order by codigo";
    $exsql=pg_query($local,$sql);
    while($dados=pg_fetch_array($exsql)){
        $cod=$dados['codigo'];
        $vend=$dados['qnt'];
        $com="select qtd,preco,nota,descrisao from $tabela where cod = $cod and qtd > 0 order by nota limit 1  ";
        $excom=pg_query($serv,$com);
        $rscom=pg_fetch_array($excom);
        $estoq=$rscom['qtd'];
        $prec=$rscom['preco'];
        $desc=$rscom['descrisao'];
        $nfe=$rscom['nota'];
        if ($vend <= $estoq) {
            $dif=$estoq-$vend;
            $com="update $tabela set qtd = $dif where nota=$nfe and cod=$cod";
            $excom=pg_query($serv,$com);
            $com="select logar $logar;INSERT INTO itens_pedidos(i_ipe_codigo, i_ipe_codigo_apr, i_ipe_codigo_pdi, s_ipe_desc_produto,n_ipe_quantidade, n_ipe_valor_unitario, n_ipe_valor_total, n_ipe_valor_desconto,
            n_ipe_valor_acrescimo, n_ipe_valor_frete, n_ipe_valor_despesas,n_ipe_valor_ipi, n_ipe_valor_st, i_ipe_codigo_tve, n_ipe_val_desc_venda,n_ipe_val_acresc_venda, n_ipe_valor_subtotal, n_ipe_qtd_entregue,
            n_ipe_qtd_pendente, n_ipe_qtd_afaturar, i_ipe_valor_faturar,i_ipe_valor_pendente, i_ipe_valor_entregue)
            VALUES (nextval('seque_itens_pedidos'),$cod,$id,'$desc',$vend,$prec,$prec,0.00,0.00,0.00,0.00,0.00,0.00,1,0.00,0.00,$prec,0.00,$vend,0.00,0.00,0.00,0.00)";
            $excom=pg_query($local,$com);
            $com="select s_aen_chave_nfe from aentradas where cforentradas=$forn and cnfientradas=$nfe";
            $excom=pg_query($local,$com);            
            $rscom=pg_fetch_array($excom);
            $chave=$rscom['s_aen_chave_nfe'];
            if ($chave == '') {
                echo "Nfe:$nfe Sem Chave localizada"."<br>";
            } else {
                $com="select chave from bomjesuschavesnfe where chave=$chave";
                $excom=pg_query($serv,$com);
                $rscom=pg_fetch_array($excom);
                if ($rscom == '') {
                    $com="INSERT INTO bomjesuschavesnfe(nfe,chave)VALUES ('$nfe','$chave')";
                    $excom=pg_query($serv,$com);
                }
            }
            
        } else {
            while (1<2) {              
                $com="select qtd,preco,nota,descrisao from $tabela where cod = $cod and qtd > 0 order by nota limit 1  ";
                $excom=pg_query($serv,$com);
                $rscom=pg_fetch_array($excom);
                $estoq=$rscom['qtd'];
                $prec=$rscom['preco'];
                $desc=$rscom['descrisao'];
                $nfe=$rscom['nota'];
                if ($nfe == ''){
                    echo "Código Com Venda Divengente:$cod Quantidade:$vend"."<br>"; 
                    break;
                }
                if ($vend <= $estoq) {
                    $dif=$estoq-$vend;
                    $com="update $tabela set qtd = $dif where nota=$nfe and cod=$cod";
                    $excom=pg_query($serv,$com);
                    $com="select logar $logar;INSERT INTO itens_pedidos(i_ipe_codigo, i_ipe_codigo_apr, i_ipe_codigo_pdi, s_ipe_desc_produto,n_ipe_quantidade, n_ipe_valor_unitario, n_ipe_valor_total, n_ipe_valor_desconto,
                    n_ipe_valor_acrescimo, n_ipe_valor_frete, n_ipe_valor_despesas,n_ipe_valor_ipi, n_ipe_valor_st, i_ipe_codigo_tve, n_ipe_val_desc_venda,n_ipe_val_acresc_venda, n_ipe_valor_subtotal, n_ipe_qtd_entregue,
                    n_ipe_qtd_pendente, n_ipe_qtd_afaturar, i_ipe_valor_faturar,i_ipe_valor_pendente, i_ipe_valor_entregue)
                    VALUES (nextval('seque_itens_pedidos'),$cod,$id,'$desc',$vend,$prec,$prec,0.00,0.00,0.00,0.00,0.00,0.00,1,0.00,0.00,$prec,0.00,$vend,0.00,0.00,0.00,0.00)";
                    $excom=pg_query($local,$com);
                    $com="select s_aen_chave_nfe from aentradas where cforentradas=$forn and cnfientradas=$nfe";
                    $excom=pg_query($local,$com);
                    $rscom=pg_fetch_array($excom);
                    $chave=$rscom['s_aen_chave_nfe'];
                    $com="select chave from bomjesuschavesnfe where chave=$chave";
                    $excom=pg_query($serv,$com);
                    $rscom=pg_fetch_array($excom);
                    if ($rscom == '') {
                        $com="INSERT INTO bomjesuschavesnfe(nfe,chave)VALUES ('$nfe','$chave')";
                        $excom=pg_query($serv,$com);
                    }
                    break;                    
                } 
                if ($estoq < $vend) {                    
                    $com="select logar $logar;INSERT INTO itens_pedidos(i_ipe_codigo, i_ipe_codigo_apr, i_ipe_codigo_pdi, s_ipe_desc_produto,n_ipe_quantidade, n_ipe_valor_unitario, n_ipe_valor_total, n_ipe_valor_desconto,
                    n_ipe_valor_acrescimo, n_ipe_valor_frete, n_ipe_valor_despesas,n_ipe_valor_ipi, n_ipe_valor_st, i_ipe_codigo_tve, n_ipe_val_desc_venda,n_ipe_val_acresc_venda, n_ipe_valor_subtotal, n_ipe_qtd_entregue,
                    n_ipe_qtd_pendente, n_ipe_qtd_afaturar, i_ipe_valor_faturar,i_ipe_valor_pendente, i_ipe_valor_entregue)
                    VALUES (nextval('seque_itens_pedidos'),$cod,$id,'$desc',$estoq,$prec,$prec,0.00,0.00,0.00,0.00,0.00,0.00,1,0.00,0.00,$prec,0.00,$estoq,0.00,0.00,0.00,0.00)";                    
                    $excom=pg_query($local,$com);
                    $com="select s_aen_chave_nfe from aentradas where cforentradas=$forn and cnfientradas=$nfe";
                    $excom=pg_query($local,$com);
                    $rscom=pg_fetch_array($excom);
                    $chave=$rscom['s_aen_chave_nfe'];
                    if ($chave == '') {
                        echo "Nfe:$nfe Sem Chave localizada"."<br>";
                    } else {                    
                        $com="select chave from bomjesuschavesnfe where chave=$chave";
                        $excom=pg_query($serv,$com);
                        $rscom=pg_fetch_array($excom);
                        if ($rscom == '') {
                            $com="INSERT INTO bomjesuschavesnfe(nfe,chave)VALUES ('$nfe','$chave')";
                            $excom=pg_query($serv,$com);
                        }
                    }
                    $com="update $tabela set qtd = '0' where nota= $nfe and cod=$cod and qtd = $estoq ";
                    $excom=pg_query($serv,$com);
                    $vend=$vend-$estoq;
                }               
            }
        }
        
    }
    
}
$com="select codigo,qnt from bomjesus where qnt < 0 order by codigo";
$excom=pg_query($local,$com);
while($dados=pg_fetch_array($excom)){
    $cod=$dados['codigo'];
    $qtd=$dados['qnt'];
    echo "Trocas Efetuadas após emisão da Nfe Código $cod-$qtd ".'<br>';
}
echo "Devolução Parcial De Nota Fiscal De Entrada: ".'<br>';
$com="select nfe,chave from bomjesuschavesnfe";
$excom=pg_query($serv,$com);
while($dados=pg_fetch_array($excom)){
    $nfe=$dados['nfe'];
    $chave=$dados['chave'];
    echo "Nfe:$nfe Chave:$chave".'<br>';
}


?>
<!DOCTYPE html>
<html>
<head>
<center><img src=img/okk.jpg alt="400" heigth ="400px" width="300px" ></center>
</head>
</html>