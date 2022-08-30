<?php
header("Content-Type: text/html; charset=ISO-8859-1",true);
date_default_timezone_set('America/Sao_Paulo');
set_time_limit(0);
$time=date('H:i:s');
$hora=date('H-i-s');
$dia= date('Y-m-d');
$diabrasil=date('d-m-Y');
$voltalogin="<script>window.location='http://192.168.13.2/Desenvolver/Balanco.html';</script>";
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
if ($tipo == 'I') {	
	$emp=$_POST["emp"];
	if ($emp == null) {		
		echo "<script>alert('Empresa Inválida');</script>";
		pg_close($serv);
		pg_close($con);
		echo $voltalogin;
		exit;
	}
	$dataf=$_POST["data"];
	if ($dataf == null) {
		$dataf= date('Y-m-d');		
	}
	$obs=$_POST["obs"];
	if ($obs == null) {
		$obs="Balanço Sem Descrição";
	}
	$linha=$_POST["linha"];
	if ($linha <> 0) {
		$linha=" and  clinproduto in ($linha)";
	} else {
		$linha=null;
	}
	$marca=$_POST["marca"];
	if ($marca <> 0) {
		$marca=" and  cmarproduto in ($marca)";
	}else {
		$marca=null;
	}
	$grupo=$_POST["grupo"];
	if ($grupo <> 0) {
		$grupo=" and  cgruporduto in ($grupo)";
	} else {
		$grupo = null;
	}
	$departamento=$_POST["departamento"];
	if ($departamento <> 0) {
		$departamento=" and  cdepproduto in ($departamento)";
	} else {
		$departamento = null;
	}
	if ($linha == null and $marca == null and $grupo == null and $departamento == null){
		echo "<script>alert('Impossível carregar todos os Produtos Favor selecionar um dos Filtros ');</script>";
		pg_close($serv);
		pg_close($con);
		echo $voltalogin;
		exit;
	}
	$sql="select (nextval('seque_levantamento')) as sequencia";
	$exsql=pg_query($serv,$sql);
	if (!$exsql){
		echo "<script>alert('Erro ao Carregar Sequência do Levantamento');</script>";
		pg_close($serv);
		pg_close($con);
		echo $voltalogin;
		exit;
	}
	$rssql=pg_fetch_array($exsql);
	$seq=$rssql['sequencia'];
	$sql="INSERT INTO levantamento(id, posicao, descricao, status, data, base) VALUES ($seq,'$dataf','$obs','A','$dia','$servidor')";
	$exsql=pg_query($serv,$sql);
	if (!$exsql){
		echo "<script>alert('Erro ao Cadastrar o  Levantamento');</script>";
		pg_close($serv);
		pg_close($con);
		echo $voltalogin;
		exit;
	}
	$sql = "select ccodproduto from aprodutos inner join ahistorico on ccodproduto = cprohistorico  where ccodproduto <> 0  $linha $marca $grupo $departamento
            and cemphistorico in ($emp) and clinproduto <> 48 group by ccodproduto having sum(centhistorico-csaihisotorico) <> 0 order by ccodproduto ";	
	$exsql=pg_query($con,$sql);
	if (!$exsql){		
	    $sql="delete from levantamento where id = $seq  ";
    	$exsql=pg_query($serv,$sql);
		echo "<script>alert('Erro ao Carregar Produtos');</script>";
		pg_close($serv);
		pg_close($con);		
		echo $voltalogin;
		exit;
	}
	$rssql=pg_fetch_array($exsql);
	$cod=$rssql['ccodproduto'];
	if ($cod == null){
		$sql="delete from levantamento where id = $seq  ";
    	$exsql=pg_query($serv,$sql);
		echo "<script>alert('A Consulta Não Retornou nenhum Código');</script>";
		pg_close($serv);
		pg_close($con);
		echo $voltalogin;
		exit;
	}
	$exsql=pg_query($con,$sql);
	while($dados=pg_fetch_array($exsql)){
		$cod=$dados['ccodproduto'];
		$com="INSERT INTO itens_levantamento(id, codlevantamento, produto, estoque, coleta)
    	VALUES (nextval('seque_itens_levantamento'),$seq,$cod,'0','0')";
		$excom=pg_query($serv,$com);
		if (!$excom){
			$sql="delete from itens_levantamento where codlevantamento = $seq";
			$exsql=pg_query($serv,$sql);		
		    $sql="delete from levantamento where id = $seq  ";
	    	$exsql=pg_query($serv,$sql);
			echo "<script>alert('Erro ao Cadastrar Produtos');</script>";
			pg_close($serv);
			pg_close($con);		
			echo $voltalogin;
			exit;
		}
	}
	$sql = "select ccodproduto,sum(centhistorico-csaihisotorico) as qtd from aprodutos left join ahistorico on cprohistorico = ccodproduto where cemihistorico
	<= '$dataf' $linha $marca $grupo $departamento and cemphistorico in ($emp) group by ccodproduto having sum(centhistorico-csaihisotorico) <> 0 order by ccodproduto  ";
	$exsql=pg_query($con,$sql);
	while($dados=pg_fetch_array($exsql)){
		$cod=$dados['ccodproduto'];
		$qtd=$dados['qtd'];
		$com="update itens_levantamento set estoque = $qtd where produto = $cod and codlevantamento = $seq ";
		$excom=pg_query($serv,$com);
		
	}
	echo "<p style=background:#00FF00; align=center <br/><b><font size=10 color=#0000FF>Lenvatamento Incluido com Sucesso id:$seq</font></b></p>";
	?>
	<!DOCTYPE html>
	<html>
	<head>
	<center>
	<title>ViaBrasil.bay</title>
	<link rel="stylesheet" href="css/style.css"></link>
	<a title='Imprimir' href='javascript:window.print()'><img src="img/impressora.jpg" alt="20" heigth ="100px" width="100px"  border="0" /></a>
	<br><br>
	<center><form name = "form1" method= "post" action= "Balanco.html">
	<input class="btn btn-red" type="submit" value="Voltar"/>
	
	<br><br>
	</center>
	</head>
	</html>
<?php	
} elseif ($tipo == 'CO') {
	echo "<table border='5' width='100%' bgcolor=#E3F6CE >";
	echo "<tr><td>id</td>"."<td>Estoque em :</td>"."<td>Descrição</td>"."<td>Status</td>"."<td>Data da Criação</td>"."<td>Base</td>"."</tr>";
	$sql="select *from levantamento where base = '$servidor'";
	$exsql=pg_query($serv,$sql);
	while($dados=pg_fetch_array($exsql)){
	    echo "<td>".$dados['id']."</td>\n";
	    echo "<td>".$dados['posicao']."</td>\n";
	    echo "<td>".$dados['descricao']."</td>\n";
	    echo "<td>".$dados['status']."</td>\n";
	    echo "<td>".$dados['data']."</td>\n";
	    echo "<td>".$dados['base']."</td>\n";
	    echo "</tr>\n";		
	}
	?>
	<!DOCTYPE html>
	<html>
	<head>
	<center>
	<link rel="stylesheet" href="css/style.css"></link>
	<a title='Imprimir' href='javascript:window.print()'><img src="img/impressora.jpg" alt="5" heigth ="50px" width="50px"  border="0" /></a>
	<br><br>
	<center><form name = "form1" method= "post" action= "Balanco.html">
	<input class="btn btn-red" type="submit" value="Voltar"/>	
	<br><br>
	</center>
	</head>
	</html>
	<?php
} elseif ($tipo == 'IN') {	
	$id=$_POST["id1"];	
	if ($id == null){		
		echo "<script>alert('Id Inválido');</script>";
		pg_close($serv);
		pg_close($con);
		echo $voltalogin;
		exit;
	}
	$sql= "select id,base from levantamento where id = $id";	
	$exsql= pg_query($serv,$sql);
	$rssql= pg_fetch_array($exsql);
	$id=$rssql['id'];
	$base=$rssql['base'];
	if ($id == null) {
		echo "<script>alert('Nenhum Levantamento com Essa Id');</script>";
		pg_close($serv);
		pg_close($con);
		echo $voltalogin;
		exit;
	} elseif ($servidor <> $base){
		echo "<script>alert('Base Diferente da Do Balanço Base=$servidor Balanço = $base');</script>";
		pg_close($serv);
		pg_close($con);
		echo $voltalogin;
		exit;
	}
	$cod=$_POST['cod1'];
	if ($cod == null) {
		echo "<script>alert('Codigo do Produto Inválido');</script>";
		pg_close($serv);
		pg_close($con);
		echo $voltalogin;
		exit;
	}
	$qtde=$_POST['qtde1'];
	if ($qtde == null){
		$qtde=0.00;
	}
	$qtdc=$_POST['qtdc1'];
	if ($qtdc == null){
		$qtdc=0.00;
	}
	$sql="select produto,estoque,coleta from itens_levantamento where produto = $cod and codlevantamento = $id ";
	$exsql= pg_query($serv,$sql);
	$rssql= pg_fetch_array($exsql);
	$codl=$rssql['produto'];
	if ($codl == null) {
		while ($codl == null) {
			$com="select ccodproduto from aprodutos where ccodproduto =$cod and csitproduto = 0 ";
			$excom=pg_query($con,$com);
			$rscom= pg_fetch_array($excom);
			$codl=$rscom['ccodproduto'];
			if ($codl == null){
				$com = "select ccodproduto from aprodutos where crefporduto =$cod and  csitproduto = 0 and clinproduto = 141 and cmarproduto = 88 "  ;
				$excom=pg_query($con,$com);
				$rscom= pg_fetch_array($excom);
				$codl=$rscom['ccodproduto'];
				if ($codl <> ''){
					break;
				}else {
					echo "<script>alert('Código Não Retornou nenhum dado nem antigo favor vereficar');</script>";
					pg_close($serv);
					pg_close($con);
					echo $voltalogin;
					exit;
				}
			}else {
				break;
			}			
		}
		$sql= "INSERT INTO itens_levantamento(id, codlevantamento, produto, estoque, coleta)
    	VALUES (nextval('seque_itens_levantamento'),$id,$codl,$qtde,$qtdc)";
		$exsql=pg_query($serv,$sql);
		if (!$exsql){
			exit($sql);
			echo "<script>alert('Erro Cadastrar Levantamento');</script>";
			pg_close($serv);
			pg_close($con);		
			echo $voltalogin;
			exit;
		}
		echo "<script>alert('Produto Incluido com Sucesso!!!');</script>";
		pg_close($serv);
		pg_close($con);		
		echo $voltalogin;
		exit;
	} else {
		$estoque=$rssql['estoque'];
		$novoEstoque=$estoque+$qtde;
		$coleta=$rssql['coleta'];
		$novoColeta=$coleta+$qtdc;
		$sql="update itens_levantamento set estoque = $novoEstoque, coleta = $novoColeta where produto=$codl and codlevantamento = $id";
		$exsql=pg_query($serv,$sql);
		if (!$exsql){
			echo "<script>alert('Erro Cadastrar Produto');</script>";
			pg_close($serv);
			pg_close($con);		
			echo $voltalogin;
			exit;
		}
		echo "<script>alert('Produto Atualizado com Sucesso!!!');</script>";
		pg_close($serv);
		pg_close($con);		
		echo $voltalogin;
		exit;
	}
} elseif ($tipo == 'EP') {
	$id=$_POST["id2"];
	if ($id == null){
		echo "<script>alert('Id Inválido');</script>";
		pg_close($serv);
		pg_close($con);
		echo $voltalogin;
		exit;
	}
	$sql= "select id,base from levantamento where id = $id";	
	$exsql= pg_query($serv,$sql);
	$rssql= pg_fetch_array($exsql);
	$id=$rssql['id'];
	$base=$rssql['base'];
	if ($id == null) {
		echo "<script>alert('Nenhum Levantamento com Essa Id');</script>";
		pg_close($serv);
		pg_close($con);
		echo $voltalogin;
		exit;
	} elseif ($servidor <> $base){
		echo "<script>alert('Base Diferente da Do Balanço Base=$servidor Balanço = $base');</script>";
		pg_close($serv);
		pg_close($con);
		echo $voltalogin;
		exit;
	}
	$cod=$_POST['cod2'];
	if ($cod == null) {
		echo "<script>alert('Codigo do Produto Inválido');</script>";
		pg_close($serv);
		pg_close($con);
		echo $voltalogin;
		exit;
	}
	$com="select produto from itens_levantamento where produto = $cod and codlevantamento = $id ";
	$excom=pg_query($serv,$com);
	$rscom= pg_fetch_array($excom);
	$codl=$rscom['produto'];
	if ($codl == null){
		echo "<script>alert('Codigo do Produto Não Encontrado Nesse Levantamento Favor vereficar');</script>";
		pg_close($serv);
		pg_close($con);
		echo $voltalogin;
		exit;
	} else {
		$sql="delete from itens_levantamento where  produto = $cod and codlevantamento = $id ";		
		$excom=pg_query($serv,$sql);
		if (!$exsql){
			echo "<script>alert('Erro Ao Apagar produto');</script>";
			pg_close($serv);
			pg_close($con);		
			echo $voltalogin;
			exit;
		} else {
			echo "<script>alert('Produto Excluido com Sucesso!!!');</script>";
			pg_close($serv);
			pg_close($con);		
			echo $voltalogin;
			exit;
		}
	}
} elseif ($tipo == 'EX'){
	$id=$_POST["id3"];
	if ($id == null){
		echo "<script>alert('Id Inválido');</script>";
		pg_close($serv);
		pg_close($con);
		echo $voltalogin;
		exit;
	}
	$sql= "select id,base,status from levantamento where id = $id";	
	$exsql= pg_query($serv,$sql);
	$rssql= pg_fetch_array($exsql);
	$id=$rssql['id'];
	$base=$rssql['base'];
	$status=$rssql['status'];
	if ($id == null) {
		echo "<script>alert('Nenhum Levantamento com Essa Id');</script>";
		pg_close($serv);
		pg_close($con);
		echo $voltalogin;
		exit;
	} elseif ($servidor <> $base){
		echo "<script>alert('Base Diferente da Do Balanço Base=$servidor Balanço = $base');</script>";
		pg_close($serv);
		pg_close($con);
		echo $voltalogin;
		exit;
	} elseif ($status == 'F'){
		echo "<script>alert('O Levantamento Selecionado já esta Fechado Não pode Ser Excluido');</script>";
		pg_close($serv);
		pg_close($con);
		echo $voltalogin;
		exit;
	}
	$sql ="delete from itens_levantamento where codlevantamento= $id ";
	$exsql=pg_query($serv,$sql);
	if (!$exsql){
		echo "<script>alert('Erro  Deletar Itens do Levantamento');</script>";
		pg_close($serv);
		pg_close($con);		
		echo $voltalogin;
		exit;
	} else{
		$sql="delete from levantamento where id = $id";
		$exsql=pg_query($serv,$sql);
		if (!$exsql){
			echo "<script>alert('Erro  Deletar Levantamento');</script>";
			pg_close($serv);
			pg_close($con);		
			echo $voltalogin;
			exit;
		} else {
			echo "<script>alert('Levantamento:$id Excluido com Sucesso!!!');</script>";
			pg_close($serv);
			pg_close($con);		
			echo $voltalogin;
			exit;
		} 
	}	
} elseif ($tipo == 'LI'){
	$id=$_POST['id4'];	
	if ($id == null){
		echo "<script>alert('Id Inválido');</script>";
		pg_close($serv);
		pg_close($con);
		echo $voltalogin;
		exit;
	}
	$sql= "select id,base,posicao,descricao from levantamento where id = $id";	
	$exsql= pg_query($serv,$sql);
	$rssql= pg_fetch_array($exsql);
	$id=$rssql['id'];
	$base=$rssql['base'];
	$posicao=$rssql['posicao'];
	$desc=$rssql['descricao'];
	if ($id == null) {
		echo "<script>alert('Nenhum Levantamento com Essa Id');</script>";
		pg_close($serv);
		pg_close($con);
		echo $voltalogin;
		exit;
	} elseif ($servidor <> $base){
		echo "<script>alert('Base Diferente da Do Balanço Base=$servidor Balanço = $base');</script>";
		pg_close($serv);
		pg_close($con);
		echo $voltalogin;
		exit;
	}
	echo "<p style=background:#00FF00; align=center <br/><b><font size=5 color=#0000FF>Levantamento:$id-$desc Servidor:$servidor Com Data em:$posicao</font></b></p>";
	echo "<table border='5' width='100%' bgcolor=#E3F6CE >";
	echo "<tr><td>id</td>"."<td>Código</td>"."<td>Descrição</td>"."<td>Qtd Estoque</td>"."<td>Qtd Lenvantada</td>"."<td>Diferença</td>"."<td>TT Custo</td>"."</tr>";
	$custo=0.00;
	$ttestoque=0.00;
	$ttcoletada=0.00;
	$sql="select id,produto,estoque,coleta from itens_levantamento where codlevantamento=$id and (estoque-coleta <> 0) order by produto ";	
	$exsql=pg_query($serv,$sql);
	while ($row = pg_fetch_assoc($exsql)) {
		echo "<td>".$row['id']."</td>\n";
		$cod=$row['produto'];		
		echo "<td>".$cod."</td>\n";
		$com="select cdesproduto,cpcuproduto from aprodutos where ccodproduto = $cod";
		$excom= pg_query($con,$com);
		$rscom= pg_fetch_array($excom);
		$desc=$rscom['cdesproduto'];
		if ($desc == null){
			$desc="Produto Sem Descrição";
		}
		echo "<td>".$desc."</td>\n";
		$estoque=$row['estoque'];
		$ttestoque=$ttestoque+$estoque;
		echo "<td>".$estoque."</td>\n";
		$coleta=$row['coleta'];
		$ttcoletada=$ttcoletada+$coleta;
		$dif=$coleta-$estoque;
		echo "<td>".$coleta."</td>\n";
		$custun=$rscom['cpcuproduto'];
		if ($custun == ''){
			$custun= 0.00;
		}
		$custun=$custun*$dif;
		$custo=$custo+$custun;		
		$dif=number_format($dif,2,",",".");
		if ($dif < 0){
			echo "<td><font color=\"MediumBlue\">".$dif."</font></td>\n";
		} else {
			echo "<td><font color=\"black\">".$dif."</font></td>\n";
		}
		$custun=number_format($custun,2,",",".");
		if ($custun < 0){
			echo "<td><font color=\"MediumBlue\">".$custun."</font></td>\n";
		} else {
			echo "<td><font color=\"black\">".$custun."</font></td>\n";
		}		
		
		echo "</tr>\n";
	}	
	
	$ttdiferenca=$ttcoletada-$ttestoque;
	$ttestoque=number_format($ttestoque,2,",",".");
	$ttcoletada=number_format($ttcoletada,2,",",".");
	$ttdiferenca=number_format($ttdiferenca,2,",",".");
	$custo=number_format($custo,2,",",".");
	echo "<td><font color=\"black\" size=4><strong>".'TT'."</td>\n";
	echo "<td>".null."</td>\n";
	echo "<td>".null."</td>\n";
	echo "<td>".$ttestoque."</td>\n";
	echo "<td>".$ttcoletada."</td>\n";
	if ($ttdiferenca < 0){
		echo "<td><font color=\"MediumBlue\"><strong>".$ttdiferenca."</strong></font></td>\n";
	} else {
		echo "<td><font color=\"black\"><strong>".$ttdiferenca."</strong></font></td>\n";
	}
	if ($custo < 0){
			echo "<td><font color=\"MediumBlue\"><strong>".$custo."</strong></font></td>\n";
	} else {
		echo "<td><font color=\"black\"><strong>".$custo."</strong></font></td>\n";
	}
	echo "</tr>\n";
	
	?>
	<!DOCTYPE html>
	<html>
	<head>
	<center>
	<link rel="stylesheet" href="css/style.css"></link>
	<a title='Imprimir' href='javascript:window.print()'><img src="img/impressora.jpg" alt="5" heigth ="50px" width="50px"  border="0" /></a>
	<br><br>
	<center><form name = "form1" method= "post" action= "Balanco.html">
	<input class="btn btn-red" type="submit" value="Voltar"/>	
	<br><br>
	</center>
	</head>
	</html>
	<?php
	
	
} elseif ($tipo == 'CA'){
	$id=$_POST["id5"];
	if ($id == null){
		echo "<script>alert('Id Inválido');</script>";
		pg_close($serv);
		pg_close($con);
		echo $voltalogin;
		exit;
	}
	$sql= "select id,base,posicao,descricao from levantamento where id = $id";	
	$exsql= pg_query($serv,$sql);
	$rssql= pg_fetch_array($exsql);
	$id=$rssql['id'];
	$base=$rssql['base'];
	$posicao=$rssql['posicao'];
	$desc=$rssql['descricao'];
	if ($id == null) {
		echo "<script>alert('Nenhum Levantamento com Essa Id');</script>";
		pg_close($serv);
		pg_close($con);
		echo $voltalogin;
		exit;
	} elseif ($servidor <> $base){
		echo "<script>alert('Base Diferente da Do Balanço Base=$servidor Balanço = $base');</script>";
		pg_close($serv);
		pg_close($con);
		echo $voltalogin;
		exit;
	}
	$arquivo = "levantamento.txt";
	if (file_exists($arquivo)) {
	    unlink($arquivo);
	}
	$erro="erro.txt";
	if (file_exists($erro)) {
	    unlink($erro);
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
	if (file_exists($antigo)){	    
		echo "<p style=background:#00FF00; align=center <br/><b><font size=5 color=#0000FF>Levantamento:$id Códigos Não Consta No Levantamento</font></b></p>";
		echo "<table border='5' width='100%' bgcolor=#E3F6CE >";
		echo "<tr><td>Código Antg/Novo</td>"."<td>Descrição</td>"."<td>Linha</td>"."<td>Marca</td>"."<td>Grupo</td>"."<td>Departamento</td>"."<td>Quantidade Coletada</td>"."</tr>";
		$arquivo = $antigo;
	    $arq = fopen($arquivo,'r');
	    $ll=0;
	while(!feof($arq))
        for($i=0; $i<1; $i++){
            if ($conteudo = fgets($arq)){
                $ll++;
                $linha = explode(';', $conteudo);        
                $sql="select produto,coleta from itens_levantamento where codlevantamento = $id and produto =$linha[0]";
                $exsql= pg_query($serv,$sql);
				$rssql= pg_fetch_array($exsql);
				$codl=$rssql['produto'];
				if ($codl == null) {
					while ($codl == NULL) {
					    $com="select ccodproduto from aprodutos where crefporduto ='$linha[0]'";
						$excom= pg_query($con,$com);
						$rscom= pg_fetch_array($excom);
						$codl=$rscom['ccodproduto'];						
						if ($codl == NULL){
							$query="select ccodproduto,cdesproduto,cdeslinha,cdesmarca,cdesgrupo,cdesdepartamento from aprodutos   left join tlinha on ccodlinha = clinproduto
							left join tmarca on ccodmarca = cmarproduto left join tgrupo on ccodgrupo = cgruporduto
							left join tdepartamento on ccoddepartamento= cdepproduto where ccodproduto = $linha[0]";
							$exquery= pg_query($con,$query);
							$rsquery= pg_fetch_array($exquery);
							$codi=$rsquery['ccodproduto'];
							if ($codl == null){
							    $erros='Erro-'.$antigo;
							    if (file_exists($erros)) {									
							        $f=fopen($erros,"a+",0); 							    	
									$nova=$linha[0].";".$linha[1]."\n";									
									fwrite($f,$nova,strlen($nova));
									fclose($f);
  							    } else {
  							        $erro = fopen($erros,'w+');
  							    	$nova="Produtos Errados ou Não Cadastrados Errados".":\n";
									fwrite($erro,$nova,strlen($nova));
  							    	fclose($erro);  										    	 							    	
  							    	$f=fopen($erros,"a+",0); 							    	
									$nova=$linha[0].";".$linha[1]."\n";
									fwrite($f,$nova,strlen($nova));
									fclose($f);			
  							    }								
								echo "<td>".$linha[0]."</td>\n";
								echo "<td>"."Produto Incorreto Ou Cadastrado errado"."</td>\n";
								echo "<td>".null."</td>\n";
								echo "<td>".null."</td>\n";
								echo "<td>".null."</td>\n";
								echo "<td>".null."</td>\n";
								echo "<td>".$linha[1]."</td>\n";
								echo "</tr>\n";
								$linha = array();
								break;																
							}													
						} else {							
							$com="select produto,coleta from itens_levantamento where codlevantamento = $id and produto =$codl";
							$excom= pg_query($serv,$com);
							$rscom= pg_fetch_array($excom);
							$codll=$rscom['produto'];
							if ($codll == null){
							    $erros='Erro-'.$antigo;
							    if (file_exists($erros)) {
							        $f=fopen($erros,"a+",0);
							        $nova=$linha[0].";".$linha[1]."\n";
							        fwrite($f,$nova,strlen($nova));
							        fclose($f);
							    } else {
							        $erro = fopen($erros,'w+');
							        $nova="Produtos Errados ou Não Cadastrados Errados".":\n";
							        fwrite($erro,$nova,strlen($nova));
							        fclose($erro);
							        $f=fopen($erros,"a+",0);
							        $nova=$linha[0].";".$linha[1]."\n";
							        fwrite($f,$nova,strlen($nova));
							        fclose($f);
							    }
								$query="select cdesproduto,cdeslinha,cdesmarca,cdesgrupo,cdesdepartamento from aprodutos   left join tlinha on ccodlinha = clinproduto
								left join tmarca on ccodmarca = cmarproduto left join tgrupo on ccodgrupo = cgruporduto
								left join tdepartamento on ccoddepartamento= cdepproduto where ccodproduto = $codl";
								$exquery= pg_query($con,$query);
								$rsquery= pg_fetch_array($exquery);
								$desc=$rsquery['cdesproduto'];
								$linhaa=$rsquery['cdeslinha'];
								$marca=$rsquery['cdesmarca'];
								$grupo=$rsquery['cdesgrupo'];								
								$departamento=$rsquery['cdesdepartamento'];									
								echo "<td>".$linha[0]."--".$codl."</td>\n";															
								echo "<td>".$desc."</td>\n";
								echo "<td>".$linhaa."</td>\n";
								echo "<td>".$marca."</td>\n";
								echo "<td>".$grupo."</td>\n";
								echo "<td>".$departamento."</td>\n";
								echo "<td>".$linha[1]."</td>\n";
								echo "</tr>\n";								
								break;
							} else {
								$coleta=$rscom['coleta'];
								$newcoleta=$coleta+$linha[1];
								$com="update itens_levantamento set coleta = $newcoleta where codlevantamento = $id and produto =$codl ";
								$excom= pg_query($serv,$com);
							 	$linha = array();
							 	break;								
							}							
						}
					}
				} else {
					$coleta=$rssql['coleta'];
					$newcoleta=$coleta+$linha[1];
					$com="update itens_levantamento set coleta = $newcoleta where codlevantamento = $id and produto =$codl ";
					$excom= pg_query($serv,$com);
				 	$linha = array();				
                }
                
            }            
            
    	}    
	} else {
		echo "<script>alert('Erro ao Carregar o Arquivo');</script>";
		pg_close($serv);
		pg_close($con);
		echo $voltalogin;
		exit;
	}
	
	$diretorio="C:/Txt/".$id;
	if (!file_exists($diretorio)){
	mkdir("$diretorio", 0700);
	}
	
	$erro=$erros;
	if (file_exists($erro)) {
	    $err='Erros Cod. '.$id.' '.$diabrasil.'  '.$hora.' Arquivo  '.$antigo;
		rename($erro,$err);
		$localerro="C:/Txt/".$id."/".$err.'.txt';
		copy($err, $localerro);
		unlink($err);	
	}
	$arquivo = $antigo;
	if (file_exists($arquivo)) {
		$importado="C:/xampp/htdocs/Desenvolver/impotado.txt";
		copy($arquivo, $importado);
		$copia='Cod.='.$id.' '.$diabrasil.'  '.$hora.' Arquivo '.$antigo;		
		rename($importado,$copia);
		$local="C:/Txt/".$id."/".$copia.'.txt';			
		copy($copia, $local);
	    unlink($copia);
	    
	}
	echo "<script>alert('Arquivo Carregado com sucesso!!! total de Linhas:$ll ');</script>";
	pg_close($serv);
	pg_close($con);	
	exit;
 
} elseif ($tipo == 'AJ'){
	$emp=$_POST["emp6"];
	if ($emp%2 == 0) {
		$id=$_POST["id6"];
		if ($id == null){
			echo "<script>alert('Id Inválido');</script>";
			pg_close($serv);
			pg_close($con);
			echo $voltalogin;
			exit;
		}
		$sql= "select id,base,posicao,descricao,status from levantamento where id = $id";	
		$exsql= pg_query($serv,$sql);
		$rssql= pg_fetch_array($exsql);
		$id=$rssql['id'];
		$base=$rssql['base'];
		$posicao=$rssql['posicao'];
		$desc=$rssql['descricao'];
		$status=$rssql['status'];
		if ($id == null) {
			echo "<script>alert('Nenhum Levantamento com Essa Id');</script>";
			pg_close($serv);
			pg_close($con);
			echo $voltalogin;
			exit;
		} elseif ($servidor <> $base){
			echo "<script>alert('Base Diferente da Do Balanço Base=$servidor Balanço = $base');</script>";
			pg_close($serv);
			pg_close($con);
			echo $voltalogin;
			exit;			
		} elseif ($status == 'F'){
			echo "<script>alert('O levantamento:$id Já se encontra Fechado  Base=$servidor Balanço = $base');</script>";
			pg_close($serv);
			pg_close($con);
			echo $voltalogin;
			exit;
		}		
		$sql="select produto,estoque,coleta from itens_levantamento where codlevantamento = $id and (estoque-coleta)<> 0 order by produto";
		$exsql=pg_query($serv,$sql);		
		echo "<p style=background:#00FF00; align=center <br/><b><font size=5 color=#0000FF>Levantamento:$id Códigos Não Consta No Sistema</font></b></p>";
		echo "<table border='5' width='100%' bgcolor=#E3F6CE >";
		echo "<tr><td>Código</td>"."<td>Estoque</td>"."<td>Coleta</td>"."</tr>";
		while ($row = pg_fetch_assoc($exsql)) {
			$cod=$row['produto'];
			$estoque=$row['estoque'];
			$coleta=$row['coleta'];
			$com="select ccodproduto,cdesproduto from aprodutos where ccodproduto = $cod and csitproduto = 0 ";
			$excom= pg_query($con,$com);
			$rscom= pg_fetch_array($excom);
			$code=$rscom['ccodproduto'];
			$desc=$rscom['cdesproduto'];
			if ($desc == null){
				$desc="Produto Sem Descrição";
			}
			if ($code == null) {
				echo "<td>".$cod."</td>\n";
				echo "<td>".$estoque."</td>\n";
				echo "<td>".$coleta."</td>\n";
				echo "</tr>\n";	
			} else {
				$dif= $estoque-$coleta;
				if ($dif > 0 ){					 
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
		            0.0000,0.0000,0.0000,0.0000,0.0000,0.00,'$desc','',$dif,0.0000,NULL,0,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.000,0,'$dia', 
		            '$time','LEVANTAMENTO',1,NULL,NULL,NULL,'',$emp,0.00,0,0,0,0.00,NULL,NULL,NULL,NULL,0.00,0,0,0,0.0000,0.0000,0.00,0.0000,0.00,0.0000,0.0000,0.0000, 
		            0.00,0.00,0.00,0,0,0.0000,0.0000,0.0000,0,'',0,'',0.00,0.00,NULL,NULL,NULL,NULL,NULL,0.0000,0,NULL,NULL,'',0,0.00,0.00,0,0.00,0.0000,0.0000,0.00,0.00, 
		            0.00,0,'','',NULL,NULL,NULL,'','','',0.00,0.00,0.00,0.00,0.00,'',0.00,'','',0.000,0.0000,0.0000,0.0000,0,0,0,'',0.00,0.00,0.00,NULL,NULL,NULL,'',0.00,0.00, 
		            0.00,NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL,NULL,NULL,NULL,'',NULL,'',NULL,0,0,0.00,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,'',NULL,'',NULL,'',NULL,NULL)";
		            $excom=pg_query($con,$com);
					if (!$excom){						
						echo "<script>alert('Erro  Ao Manipular o Item :$cod');</script>";							
					}				
				} elseif ($dif < 0){
					$dif= abs($dif);
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
		            0.0000,0.0000,0.0000,0.0000,0.0000,0.00,'$desc','',0.0000,$dif,NULL,0,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.000,0,'$dia',
		            '$time','LEVANTAMENTO',1,NULL,NULL,NULL,'',$emp,0.00,0,0,0,0.00,NULL,NULL,NULL,NULL,0.00,0,0,0,0.0000,0.0000,0.00,0.0000,0.00,0.0000,0.0000,0.0000,
		            0.00,0.00,0.00,0,0,0.0000,0.0000,0.0000,0,'',0,'',0.00,0.00,NULL,NULL,NULL,NULL,NULL,0.0000,0,NULL,NULL,'',0,0.00,0.00,0,0.00,0.0000,0.0000,0.00,0.00,
		            0.00,0,'','',NULL,NULL,NULL,'','','',0.00,0.00,0.00,0.00,0.00,'',0.00,'','',0.000,0.0000,0.0000,0.0000,0,0,0,'',0.00,0.00,0.00,NULL,NULL,NULL,'',0.00,0.00,
		            0.00,NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL,NULL,NULL,NULL,'',NULL,'',NULL,0,0,0.00,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,'',NULL,'',NULL,'',NULL,NULL)";
		            $excom=pg_query($con,$com);
					if (!$excom){
						echo "<script>alert('Erro  Ao Manipular o Item :$cod');</script>";		
					}
				}				
			}
		}		
		$sql="update levantamento set status = 'F' where id =$id";		
		$exsql=pg_query($serv,$sql);
		echo "<script>alert('Lavantamento Fechado com Sucesso');</script>";
		pg_close($serv);
		pg_close($con);
		?>
		<!DOCTYPE html>
		<html>
		<head>
		<center>
		<link rel="stylesheet" href="css/style.css"></link>
		<a title='Imprimir' href='javascript:window.print()'><img src="img/impressora.jpg" alt="5" heigth ="50px" width="50px"  border="0" /></a>
		<br><br>
		<center><form name = "form1" method= "post" action= "Balanco.html">
		<input class="btn btn-red" type="submit" value="Voltar"/>	
		<br><br>
		</center>
		</head>
		</html>
		<?php	
		
		
	} else {
		echo "<script>alert('Empresa: $emp Não Pode Ser Manipulada');</script>";		
		pg_close($serv);
		pg_close($con);	
		echo $voltalogin;
		exit;
	}
}

else {

	exit("Em construção");
}
?>