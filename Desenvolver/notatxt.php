<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
set_time_limit(800);
date_default_timezone_set('America/Sao_Paulo');
$time=date('H:i:s');
$dia= date('d-m-Y');
$data=date('Y-m-d');
$base=$_POST['base'];
if ($base==1) {
    if(!@($con=pg_connect('host=192.168.16.2 dbname=troll port=5430 user=postgres password=ky$14gr@'))){
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
    if(!@($con=pg_connect('host=192.168.11.2 dbname=troll port=5430 user=postgres password=ky$14gr@'))){
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
    if(!@($con=pg_connect('host=192.168.10.99 dbname=troll port=5433 user=postgres password=ky$14gr@'))){
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
    if(!@($con=pg_connect('host=192.168.10.153 dbname=troll port=5434 user=postgres password=ky$14gr@'))){
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
$login=$_POST['login'];
if ($login=='') {
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Login Não Pode Ser em Branco**</font></b></p>";
    ?>
        <!DOCTYPE html>
    	<html>
    	<head>
    	<link rel="stylesheet" href="css/style.css"></link>
		<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
		</head>
		</html>
		<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
		<?php
        exit;
}
$senha=$_POST['senha'];
if ($senha=='') {
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Senha Não Pode Ser em Branco**</font></b></p>";
    ?>
        <!DOCTYPE html>
    	<html>
    	<head>
    	<link rel="stylesheet" href="css/style.css"></link>
		<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
		</head>
		</html>
		<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
		<?php
        exit;
}
$login=strtoupper($login);
$senha=strtoupper($senha);
$com="select cnomope from parametros where cnomope = '$login' ";
$excom=pg_query($con,$com);
$rscom=pg_fetch_array($excom);
if ($rscom == '') {
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Login Inválido**</font></b></p>";
    ?>
    <!DOCTYPE html>
	<html>
	<head>
	<link rel="stylesheet" href="css/style.css"></link>
	<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit;
}
$com="select cusuariocod from parametros where cnomope = '$login' and csenhausuario= $senha ";
$excom=pg_query($con,$com);
$rscom=pg_fetch_array($excom);
if ($rscom == '') {
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Senha Inválida**</font></b></p>";
    ?>
    <!DOCTYPE html>
	<html>
	<head>
	<link rel="stylesheet" href="css/style.css"></link>
	<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit;
}
$uscod=$rscom['cusuariocod'];
$emp=$_POST['emp'];
if ($emp=='') {
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Empresa Inválida**</font></b></p>";
    ?>
        <!DOCTYPE html>
    	<html>
    	<head>
    	<link rel="stylesheet" href="css/style.css"></link>
		<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
		</head>
		</html>
		<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
		<?php
        exit;
}
$cliente=$_POST['cliente'];
if ($cliente=='') {
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Cliente Inválido**</font></b></p>";
    ?>
        <!DOCTYPE html>
    	<html>
    	<head>
    	<link rel="stylesheet" href="css/style.css"></link>
		<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
		</head>
		</html>
		<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
		<?php
        exit;
}
$com="select ccodempresa from tempresa where ccodempresa = '$emp'";
$excom=pg_query($con,$com);
$rscom=pg_fetch_array($excom);
if ($rscom=='') {
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Empresa Inválida**</font></b></p>";
    ?>
        <!DOCTYPE html>
    	<html>
    	<head>
    	<link rel="stylesheet" href="css/style.css"></link>
		<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
		</head>
		</html>
		<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
		<?php
        exit;
}
$com="select ccodigo from aclientes where ccodigo = '$cliente'";
$excom=pg_query($con,$com);
$rscom=pg_fetch_array($excom);
if ($rscom=='') {
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Cliente Inválido**</font></b></p>";
    ?>
        <!DOCTYPE html>
    	<html>
    	<head>
    	<link rel="stylesheet" href="css/style.css"></link>
		<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
		</head>
		</html>
		<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
		<?php
        exit;
}
$arquivo = "pedido.txt";
if (file_exists($arquivo)) {
    unlink($arquivo);
}
$nome_temporario=$_FILES["Arquivo"]["tmp_name"];
$nome_real=$_FILES["Arquivo"]["name"];
if (!copy($nome_temporario,$nome_real)){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Ao caregar o Arquivo**</font></b></p>";
    ?>
        <!DOCTYPE html>
    	<html>
    	<head>
    	<link rel="stylesheet" href="css/style.css"></link>
		<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
		</head>
		</html>
		<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
		<?php
        exit;
}
$antigo="$nome_real";
$arquivo_novo="pedido.txt";
rename($antigo,$arquivo_novo);
if (file_exists('pedido.txt')){
    $tabela = "pedidotxt";
    $arquivo = 'pedido.txt';
    $sql="delete from $tabela ";
    pg_query($con,$sql);
    $arq = fopen($arquivo,'r');
    $ll=0;
    while(!feof($arq))
        for($i=0; $i<1; $i++){
            if ($conteudo = fgets($arq)){
                $ll++;
                $linha = explode(';', $conteudo);
            }
            $sql = "INSERT INTO $tabela (codigo,quantd) VALUES ('$linha[0]', '$linha[1]')";
            $result = pg_query($sql) or die(pg_error());
            $linha = array();// linpa o array de $linha e volta para o for
    }
        	
    }else {
        exit('echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Falha ao Carregar o Aquivo $dia  Hora:$time </font></b></p>";');
        ?>
	    <!DOCTYPE html>
		</form>
		<html>
		<head>
		<link rel="stylesheet" href="css/style.css"></link>
		<center><form name = "form1" method= "post" action= "nota.html"></center>
		<center><input class="btn btn-green"  type="submit"  value="Voltar"></center>
		</form>
		</head>
		</html>
		<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
		<?php
	   exit; 
}
$com="select cserserie from tseriesnf where cempserie ='$emp' and ctiposerie = 4 ";
$excom=pg_query($con,$com);
$rscomando=pg_fetch_array($excom);
$serie=$rscomando['cserserie'];
if ($serie==''){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Nenhuma Serie Cadastrada Para Pedidos**</font></b></p>";
    ?>
        <!DOCTYPE html>
    	<html>
    	<head>
    	<link rel="stylesheet" href="css/style.css"></link>
		<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
		</head>
		</html>
		<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
		<?php
        exit;
}

$com="SELECT (MAX(i_ipe_codigo_pdi)+1)as ultimo FROM itens_pedidos";
$excom=pg_query($con,$com);
$rscom=pg_fetch_array($excom);
$ult=$rscom['ultimo'];
$com="select (nextval('seque_pedidos'))as id";
$excom=pg_query($con,$com);
$rscomando=pg_fetch_array($excom);
$id=$rscomando['id'];
$com="select logar('$login','$uscod',0);INSERT INTO pedidos(i_pdi_codigo, d_pdi_data_emissao, d_pdi_data_faturamento, i_pdi_codigo_tse,i_pdi_numero_pedido, i_pdi_codigo_cli, i_pdi_codigo_tfo, i_pdi_codigo_ved,i_pdi_codigo_tabela_preco, n_pdi_valor_total, n_pdi_valor_desconto,
    n_pdi_valor_acrescimo, n_pdi_valor_frete, n_pdi_valor_despesas,i_pdi_tipo_entrega, i_pdi_codigo_emp, i_pdi_codigo_usu, n_pdi_valor_subtotal,n_pdi_valor_entrada, i_pdi_codigo_dav, i_pdi_status, n_pdi_juros,i_pdi_venc_mesmo_dia, d_pdi_data_primeira_prest, i_pdi_tipo_juro,i_pdi_tipo_quebra, i_pdi_codigo_asa, i_pdi_valor_faturar, i_pdi_valor_pendente,
    i_pdi_valor_entregue, i_pdi_codigo_atr1, s_pdi_qtde_volumes,n_pdi_peso_liquido, n_pdi_peso_bruto, s_pdi_especie, s_pdi_marca,s_pdi_numero_volumes, s_pdi_tipo_frete, s_pdi_observacao, n_pdi_perc_juro,i_pdi_dias_prestacao, i_pdi_codigo_pv, i_pdi_codigo_eve, i_pdi_codigo_par,t_pdi_hora_cadastro, i_pdi_ope_cadastro, t_pdi_hora_atu, i_pdi_ope_atu,
    d_pdi_data_cadastro, d_pdi_data_atualizacao, i_pdi_em_uso, i_pdi_cod_pds,i_pdi_nao_envia_obs_nf, i_pdi_identifica_pedido, s_pdi_peso_inicial,s_pdi_peso_final, i_pdi_codigo_sd, i_pdi_defeito, i_pdi_status_defeito)
    VALUES ($id,'$data',NULL,$serie,$ult,$cliente,1,1,11,100.00,0.00,0.00,0.00,0.00,1,$emp,3,500.00,0.00,0,0,0.00,0,NULL,1,1,NULL,0.00,0.00,0.00,1,0,0.000,0.000,'','','',0,'CAREGGADO VIA TXT',0.00,0,0,NULL,NULL,'$time',1,NULL,0,'$data',NULL,0,NULL,0,'',0.000,0.000,0,0,0)";
set_time_limit(500);
$excom=pg_query($con,$com);
if(!$excom){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Ao Inserir o Pedido/font></b></p>";
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
$com="select *from pedidotxt order by codigo";
$excom=pg_query($con,$com);
while($dados=pg_fetch_array($excom)){
    $cod=$dados['codigo'];
    $qtd=$dados['quantd'];
    $comando="select cdesproduto,cpcuproduto from aprodutos where ccodproduto = $cod ";
    $excomando=pg_query($con,$comando);
    $rscomando=pg_fetch_array($excomando);
    $desc=$rscomando['cdesproduto'];
    if ($desc == null) {
        $comando="select cdesproduto,cpcuproduto,ccodproduto from aprodutos where crefporduto = '$cod' ";        
        $excomando=pg_query($con,$comando);
        $rscomando=pg_fetch_array($excomando);
        $cod = $rscomando['ccodproduto'];
        $desc=$rscomando['cdesproduto'];
        $prec=$rscomando['cpcuproduto']; 
    }else {
        $prec=$rscomando['cpcuproduto']; 
    }
    $sql="select logar('$login','$uscod',0);INSERT INTO itens_pedidos(i_ipe_codigo, i_ipe_codigo_apr, i_ipe_codigo_pdi, s_ipe_desc_produto,n_ipe_quantidade, n_ipe_valor_unitario, n_ipe_valor_total, n_ipe_valor_desconto, 
            n_ipe_valor_acrescimo, n_ipe_valor_frete, n_ipe_valor_despesas,n_ipe_valor_ipi, n_ipe_valor_st, i_ipe_codigo_tve, n_ipe_val_desc_venda,n_ipe_val_acresc_venda, n_ipe_valor_subtotal, n_ipe_qtd_entregue, 
            n_ipe_qtd_pendente, n_ipe_qtd_afaturar, i_ipe_valor_faturar,i_ipe_valor_pendente, i_ipe_valor_entregue)
    VALUES (nextval('seque_itens_pedidos'),$cod,$id,'$desc',$qtd,$prec,$prec,0.00,0.00,0.00,0.00,0.00,0.00,1,0.00,0.00,$prec,0.00,$qtd,0.00,0.00,0.00,0.00)";
   $exsql=pg_query($con,$sql);
   if(!$exsql){
       echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>Erro ao inserir Iten Código: $cod o mesmo não existe ou Não tem preço,Descrisão Válidos Operação Abortada </font></b></p>";
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
echo "<p style=background:#00FF00; align=center <br/><b><font size=5 color=#FFFFFF>Carregado Com Sucesso em $dia , $time Quantidade de Linhas :$ll  </font></b></p>";
?>