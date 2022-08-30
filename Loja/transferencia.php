<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Transferência</title>
<script>

window.history.forward(1);

</Script>


</head>
</html>
<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
date_default_timezone_set('America/Sao_Paulo');
session_start();
$voltalogin="<script>window.location='http://192.168.13.2:8080/loja/transferencia.html';</script>";
$time=date('H:i:s');
$dia= date('Y-m-d');
set_time_limit(0);
$erro = "<p style=background:#000000; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista Favor avisar o Adriano</font></b></p>
<!DOCTYPE html>
<html>
<head>
<center><img src='img/error.jpg' alt='500' heigth='500px' width='100px'></center>
</head>
</html>";
$tipo=$_POST["tipo"];
if ($tipo == 'R') {
	$origem=$_POST["destino"];
	$nfe=$_POST["nfe"];
	if ($nfe == null ){
	    session_destroy();
	    echo "<script>alert('Numero da Nota Fiscal Inválido');</script>";
	    echo $voltalogin;
	    exit;
	}
	if ($origem <=6) {
		$servidor='Caçador';
		if(!@($con=pg_connect ("host=192.168.10.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@"))){
			echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Caçador Data:$dia  Hora:$time </font></b></p>";
			exit($erro);
		} else {
			echo "<p style=background:#D3D3D3; align=center <br/><b><font size=5 color=#FF0000>Servidor de : $servidor Conectado</font></b></p>";
		}		
	} elseif ($origem >=7 and $origem <=9) {
		$servidor='Videira';
		if(!@($con=pg_connect ("host=192.168.10.190 dbname=troll_videira port=5430 user=postgres password=ky$14gr@"))){
			echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Videira Data:$dia  Hora:$time </font></b></p>";
			exit($erro);
		} else {
			echo "<p style=background:#D3D3D3; align=center <br/><b><font size=5 color=#FF0000>Servidor de : $servidor Conectado</font></b></p>";
		}
	} elseif ($origem >= 10 and $origem <=11   ) {
		$servidor='Atacadão';
		if(!@($con=pg_connect ("host=192.168.10.190 dbname=troll_joinville port=5430 user=postgres password=ky$14gr@"))){
			echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Videira Data:$dia  Hora:$time </font></b></p>";
			exit($erro);
		} else {
			echo "<p style=background:#D3D3D3; align=center <br/><b><font size=5 color=#FF0000>Servidor do : $servidor Conectado!!</font></b></p>";
		}
	} elseif ($origem >= 12 and $origem <= 13 ) {
		$servidor='Lages';
		if(!@($con=pg_connect ("host=192.168.10.190 dbname=troll_lages port=5430 user=postgres password=ky$14gr@"))){
			echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Lages Data:$dia  Hora:$time </font></b></p>";
			exit($erro);
		} else {
			echo "<p style=background:#D3D3D3; align=center <br/><b><font size=5 color=#FF0000>Servidor do : $servidor Conectado</font></b></p>";
		}
	}
	
	if ($origem == 1 or $origem == 10 or $origem == 12 ) {
		$emp = '1,2';
	} elseif ($origem == 2 or $origem == 11 or $origem == 13 ) {
		$emp = '3,4';
	} elseif ($origem == 3) {
		$emp = '7,8';
	} elseif ($origem == 4) {
		$emp = '5,6';
	} elseif ($origem == 5) {
		$emp = '9,10';
	} elseif ($origem == 6) {
		$emp = '11,12';
	} elseif ($origem == 7) {
		$emp = '15,16';
	} elseif ($origem == 8) {
		$emp = '13,14';
	} elseif ($origem == 9) {
		$emp = '17,18';
	}
	
	$sql="select csidentradas,cemientradas  from aentradas where cnfientradas = $nfe and cempentrada in ($emp) order by csidentradas desc";
	$exsql= pg_query($con,$sql);
	$rssql= pg_fetch_array($exsql);
	$emisao=$rssql['cemientradas'];
	$id=$rssql['csidentradas'];
	if ($id == null){
		session_destroy();
		echo "<p style=background:#060606; align=center <br/><b><font size=8 color=#FF0000>Nfe:$nfe Não esta Emitida para sua empresa verefique</font></b></p>";
		?>
		<!DOCTYPE html>
		<html>
		<head>    
		<link rel="stylesheet" href="css/style.css"></link>
		<center><form name = "form1" method= "post" action= "lojatransferencia.html"></center>
		<center><input class="btn btn-red"  type="submit" name="inativar" value="Voltar"></center>
		<br><br>
		</form>
		</head>
		</html>
		<?php
		exit;
	} else {
		$sql="select (sum(centhistorico)) from ahistorico where cienhistorico = $id";
		$exsql= pg_query($con,$sql);
		$rssql= pg_fetch_array($exsql);
		$qtdt=$rssql['sum'];
		echo "<p align=center <br/><b><font size=5 color=#FF0000> Romaneio:$nfe Total de Pçs/Prs:$qtdt</font></b></p>";
	    echo "<table border='2' width='100%' bgcolor=#00FFFF >";
		echo "<tr><td>Código</td>"."<td>Descrição</td>"."<td>Quantidade</td>"."</tr>";
		$sql="select cprohistorico,(sum(centhistorico)),cdesproduto from ahistorico iner join aprodutos on cprohistorico=ccodproduto where cienhistorico= '$id' GROUP BY cprohistorico,cdesproduto  
		order by cprohistorico";
		$exsql=pg_query($con,$sql );
		while($row = pg_fetch_assoc( $exsql)){
			$produto=$row['cprohistorico'];
			$descricao=$row['cdesproduto'];
			$qtd=$row['sum'];
	        echo "<td><span style='color:#0101DF;'>".$produto."</span></td>\n";
	        echo "<td><span style='color:#0101DF;'>".$descricao."</span></td>\n";
	        echo "<td><span style='color:#0101DF;'>".$qtd."</span></td>\n";            
	        echo "</tr>\n";
		}
        session_destroy();
        ?>
        <!DOCTYPE html>
		<html>
		<head>    
		<link rel="stylesheet" href="css/style.css"></link>
		<center><form name = "form1" method= "post" action= "lojatransferencia.html"></center>
		<br><br>
		<center>
		<a title='Imprimir' href='javascript:window.print()'><img src="img/impressora.jpg" alt="10" heigth ="40px" width="40px"  border="0" /></a>
		</center>
		<br><br>
		<center><input class="btn btn-red"  type="submit" name="inativar" value="Voltar"></center>
		<br><br>
		</form>
		</head>
		</html>
		<?php
		exit;
	}    
} else {
	$cliente=$_POST["cliente"];
	if ($cliente=='') {
	    session_destroy();
	    echo "<script>alert('Cliente Inválido');</script>";
	    echo $voltalogin;
	    exit;
	}
	$login=$_POST["login"];
	if ($login == '') {
	    session_destroy();
	    echo "<script>alert('Login Inválido');</script>";
	    echo $voltalogin;
	    exit;
	}
	$login=strtoupper($login);
	$senha=$_POST["senha"];
	if ($senha=='') {
	    session_destroy();
	    echo "<script>alert('Senha Inválida');</script>";
	    echo $voltalogin;
	    exit;
	}
	$senha=strtoupper($senha);
	$origem=$_POST['origem'];        
	if ($origem== '') {
	    session_destroy();
	    echo "<script>alert('Empresa de Origem Inválida');</script>";
	    echo $voltalogin;
	    exit;
	}
	if ($origem <= 6 ) {
	    if(!@($cono=pg_connect ("host=192.168.10.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@"))){
	        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Caçador Data:$dia  Hora:$time </font></b></p>";
	        echo "<p style=background:#000000; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista Favor avisar o Adriano</font></b></p>";
	        session_destroy();
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
	    $servorigem='C';
	    if ($cliente == 39498 or $cliente == 41238 or $cliente == 43575 or $cliente == 41239 or $cliente == 30702 or $cliente=46028) {	       
	     if ($cliente =='30702') {
	        $servdestino='L';
	        $cfop="5.102";
	        $ope=54;           
	    }else {
	        if ($cliente =='41239' or $cliente == '46028' ) {
	                $servdestino='J';
	                $cfop="5.152";
	                $ope=3;
	        } else {
		            $servdestino='V';
		            $ope=54;
		            $cfop="5.102";
		        }
		    }
	    } else {
	        echo "<script>alert('Cliente Não Cadastrado para Transferência');</script>";
	        session_destroy();
	        echo $voltalogin;
	        exit;
	    }
	}
	if ($origem >= 7 and $origem <= 9  ) {
		if(!@($cono=pg_connect ("host=192.168.10.190 dbname=troll_videira port=5430 user=postgres password=ky$14gr@"))){
	        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Videira Data:$dia  Hora:$time </font></b></p>";
	        echo "<p style=background:#000000; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista Favor avisar o Adriano</font></b></p>";
	        session_destroy();
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
		$servorigem='V';
		if ($cliente == 17675 or $cliente == 4732 or $cliente == 17262 or $cliente == 20517 or $cliente == 22818 or $cliente == 30783 or $cliente == 41239
		    or $cliente == 30702 or $cliente =='46028' ) {
		        if ($cliente =='41239' or $cliente =='46028') {
		        $servdestino='J';
		        $cfop="5.102";
		        $ope=54;
		    }else {
		        if ($cliente == '30702') {
		            $servdestino='L';
		            $cfop="5.102";
		            $ope=54;
		        } else {
		        $servdestino='C';
		        $ope=54;
		        $cfop="5.102";
		        }
		    }
		} else {
		    echo "<script>alert('Cliente Não Cadastrado para Transferência');</script>";
		    session_destroy();
		    echo $voltalogin;
		    exit;
		}	
	}
	if ($origem >= 10 and $origem <= 11  ) {
		if(!@($cono=pg_connect ("host=192.168.10.190 dbname=troll_joinville port=5430 user=postgres password=ky$14gr@"))){
	    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Joinville Data:$dia  Hora:$time </font></b></p>";
	    echo "<p style=background:#000000; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista Favor avisar o Adriano</font></b></p>";
	    session_destroy();
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
		$servorigem='J';
		if ($cliente == 4732 or $cliente == 30702 or $cliente == 22818  or $cliente == 17262 or $cliente == 20517 or $cliente == 39498 or $cliente == 41238 or $cliente == 9  or $cliente == 145 or $cliente == 30783
		    or $cliente == 17675 ) {
		    if ($cliente =='39498' or $cliente =='41238' ) {
		        $servdestino='V';
		        $cfop="5.102";
		        $ope=12;
		    } elseif ($cliente == 30702){
	            $servdestino='L';
		        $cfop="5.102";
		        $ope=12;
		    }else {
		        $servdestino='C';
		        $ope=3;
		        $cfop="5.152";
		    }
		} else {
		    echo "<script>alert('Cliente Não Cadastrado para Transferência');</script>";
		    session_destroy();
		    echo $voltalogin;
		    exit;
		}
	}
	if ($origem >= 12 and $origem <= 13  ) {
		if(!@($cono=pg_connect ("host=192.168.10.190 dbname=troll_lages port=5430 user=postgres password=ky$14gr@"))){
	    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Lages Data:$dia  Hora:$time </font></b></p>";
	    echo "<p style=background:#000000; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista Favor avisar o Adriano</font></b></p>";
	    session_destroy();
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
		$servorigem='L';
		if ($cliente == 1843 or $cliente == 3 or $cliente == 1955  or $cliente == 1323 or $cliente == 2170 or $cliente == 3538 or $cliente == 13258 or $cliente == 13152  or $cliente == 11966 or $cliente == 12876 ) {
		    if ($cliente =='3538' or $cliente =='13258'  or $cliente =='13152') {
		        $servdestino='V';
		        $cfop="5.102";
		        $ope=14;
		    } elseif ($cliente == 11966 or $cliente == 12876 ){
	            $servdestino='J';
		        $cfop="5.102";
		        $ope=14;
		    }else {
		        $servdestino='C';
		        $ope=14;
		        $cfop="5.102";
		    }
		} else {
		    echo "<script>alert('Cliente Não Cadastrado para Transferência');</script>";
		    session_destroy();
		    echo $voltalogin;
		    exit;
		}
	}
	$sql="select cusuariocod,clogempresa from parametros where csenhausuario ='$senha' and cnomope='$login' ";
	$exsql= pg_query($cono,$sql);
	$resulsql= pg_fetch_array($exsql);
	$codlogin=$resulsql['cusuariocod'];
	$emplogin=$resulsql['clogempresa'];
	if ($codlogin == '') {
	    echo "<script>alert('Login ou Senha Invalidos');</script>";
	    session_destroy();
	    echo $voltalogin;
	    exit;
	}
	if ($origem == '1') {
	    $emploginn='1';
	    $loja="Tatiane";	
	    $serie='31';   
		if ($login <> 'ADRIANO') {
			if ($emplogin <> $emploginn) {
			    session_destroy();
			    echo   "<script>alert(' Usuário sem permissão para fazer notas da Loja:$loja');</script>";
		        echo $voltalogin;
		        exit;
			}
		}
		$emp='2';
	}
	if ($origem == '2') {
	    $emp='4';
	    $loja="Lúcelia";
	    $serie='32';
		$emploginn='3';
		if ($login <> 'ADRIANO') {	    
		    if ($emplogin <> $emploginn) {
		        session_destroy();
	            echo "<script>alert(' Usuário sem permissão para fazer notas da Loja:$loja');</script>";            	
		        echo $voltalogin;
		        exit;    
			}
		}
	}
	if ($origem == '3') {
	    $emp='8';
	    $loja="Adrielli";
	    $serie='41';
	    $emploginn='7';
	    if ($login <> 'ADRIANO') {
	        if ($emplogin <> $emploginn) {
	            session_destroy();
	            echo   "<script>alert(' Usuário sem permissão para fazer notas da Loja:$loja');</script>";
	            echo $voltalogin;
	            exit;
	        }
	    }
	}
	if ($origem == '4') {
	    $emp='6';
	    $loja="Maynara";
	    $serie='33';
	    $emploginn='5';
	    if ($login <> 'ADRIANO') {
	        if ($emplogin <> $emploginn) {
	            session_destroy();
	            echo   "<script>alert(' Usuário sem permissão para fazer notas da Loja:$loja');</script>";
	            echo $voltalogin;
	            exit;
	        }
	    }
	}
	if ($origem == '5') {
	    $emp='10';
	    $loja="Gislaine";
	    $serie='53';
	    $emploginn='9';
	    if ($login <> 'ADRIANO') {
	        if ($emplogin <> $emploginn) {
	            session_destroy();
	            echo   "<script>alert(' Usuário sem permissão para fazer notas da Loja:$loja');</script>";
	            echo $voltalogin;
	            exit;
	        }
	    }
	}
	if ($origem == '6') {
	    $emp='12';
	    $loja="Juciane";
		$serie='300';
		$emploginn='11';
		if ($login <> 'ADRIANO') {
		    if ($emplogin <> $emploginn) {
		        session_destroy();
		        echo   "<script>alert(' Usuário sem permissão para fazer notas da Loja:$loja');</script>";
		        echo $voltalogin;
		        exit;
		    }
		}
	}
	if ($origem == '7') {
	    $emp='16';
	    $loja="Táis";
		$serie='100';
		$emploginn='15';
		if ($login <> 'ADRIANO') {
		    if ($emplogin <> $emploginn) {
		        session_destroy();
		        echo   "<script>alert(' Usuário sem permissão para fazer notas da Loja:$loja');</script>";
		        echo $voltalogin;
		        exit;
		    }
		}
	}
	if ($origem == '8') {
	    $emp='14';
	    $loja="Nádia";
		$serie='95';
		$emploginn='13';
		if ($login <> 'ADRIANO') {
		    if ($emplogin <> $emploginn) {
		        session_destroy();
		        echo   "<script>alert(' Usuário sem permissão para fazer notas da Loja:$loja');</script>";
		        echo $voltalogin;
		        exit;
		    }
		}
	}
	if ($origem == '9') {
	    $emp='17';
	    $loja="Shop Masp Videira";
		$serie='77';
		$emploginn='17';
		if ($login <> 'ADRIANO') {
		    if ($emplogin <> $emploginn) {
		        session_destroy();
		        echo   "<script>alert(' Usuário sem permissão para fazer notas da Loja:$loja');</script>";
		        echo $voltalogin;
		        exit;
		    }
		}
	}
	if ($origem == '10') {
	    $emp='2';
	    $loja="Eliane";
		$serie='52';
		$emploginn='1';
		if ($login <> 'ADRIANO') {
		    if ($emplogin <> $emploginn) {
		        session_destroy();
		        echo   "<script>alert(' Usuário sem permissão para fazer notas da Loja:$loja');</script>";
		        echo $voltalogin;
		        exit;
		    }
		}
	}
	if ($origem == '11') {
	    $emp='4';
	    $loja="Rosani";
	    $serie='51';
	    $emploginn='3';
	    if ($login <> 'ADRIANO') {
	        if ($emplogin <> $emploginn) {
	            session_destroy();
	            echo   "<script>alert(' Usuário sem permissão para fazer notas da Loja:$loja');</script>";
	            echo $voltalogin;
	            exit;
	        }
	    }
	}
	if ($origem == '12') {
	    $emp='2';
	    $loja="Lages ViaBrasil";
	    $serie='3';
	    $emploginn='1';
	    if ($login <> 'ADRIANO') {
	        if ($emplogin <> $emploginn) {
	            session_destroy();
	            echo   "<script>alert(' Usuário sem permissão para fazer notas da Loja:$loja');</script>";
	            echo $voltalogin;
	            exit;
	        }
	    }
	}
	if ($origem == '13') {
	    $emp='4';
	    $loja="Lages Atacadão";
	    $serie='100';
	    $emploginn='3';
	    if ($login <> 'ADRIANO') {
	        if ($emplogin <> $emploginn) {
	            session_destroy();
	            echo   "<script>alert(' Usuário sem permissão para fazer notas da Loja:$loja');</script>";
	            echo $voltalogin;
	            exit;
	        }
	    }
	}
	$sql="select cnomecliente,ccnpj,cinsest,cendereco,ccidade,ccep,cbairro,cuf,cfoneresidencial
	      from aclientes where ccodigo = $cliente";
	$exsql= pg_query($cono,$sql);
	$resulsql= pg_fetch_array($exsql);
	$fant=$resulsql['cnomecliente'];
	$cnpj=$resulsql['ccnpj'];
	$insc=$resulsql['cinsest'];
	$end=$resulsql['cendereco'];
	$cidade=$resulsql['ccidade'];
	$uf=$resulsql['cuf'];
	$cep=$resulsql['cuf'];
	$bairro=$resulsql['cbairro'];
	$fone=$resulsql['cfoneresidencial'];
	$sql="BEGIN";
	$exsql= pg_query($cono,$sql);
	$sql="select Max(sequencia) from anosequencia where serie = '$serie' ";
	$exsql= pg_query($cono,$sql);
	$resulsql= pg_fetch_array($exsql);
	$ult=$resulsql['max'];
	$ult ++;
	$sql="INSERT INTO anosequencia(serie, sequencia, i_ano_status_emissao)VALUES ($serie,$ult,1)";
	$exsql= pg_query($cono,$sql);
	if (!$exsql){
	    session_destroy();
	    echo "<script>alert('Erro ao Inserir Sequencia');</script>";
	    echo $voltalogin;
	    exit;
	}
	$sql="select nextval( 'seque_ahcontas')";
	$exsql= pg_query($cono,$sql);
	$resulsql= pg_fetch_array($exsql);
	$idahc=$resulsql['nextval'];
	$sql="select Max(i_ahc_ide_transacao_fin) from ahcontas ";
	$exsql= pg_query($cono,$sql);
	$resulsql= pg_fetch_array($exsql);
	$ults=$resulsql['max'];
	$ults ++;
	$sql="select nextval( 'seque_asaidas')";
	$exsql= pg_query($cono,$sql);
	$resulsql= pg_fetch_array($exsql);
	$ids=$resulsql['nextval'];
	$sql="INSERT INTO tempahcontas(
	     idhistorico, cparticiparesumos, cdescricaohistorico, cvalorcreditohistorico, 
	     cvalordebitohistorico, ccodigocontahistorico, ccodigocategoriahistorico, 
	     ccodigofavorecidohistorico, cconferidohistorico, cdocumentohistorico, 
	     cdatahistorico, cdataprehistorico, chorahistorico, ccontroletransferenciahistorico, 
	     creferenciahistorico, ccodigoemprehistorico, cidesaivenhist, 
	     cidedupvenhist, cideduphist, corigemcadastro, ctipolanc, cbanhis, 
	     cdtcahis, chocahis, copcahis, cuscahis, cdtathis, choathis, copathis, 
	     cusathis, cobservacaohistorico, cod_cli_his, cod_for_his, dat_baixa_lancto, 
	     cide_aghcontas, i_ahc_ide_transacao_fin, i_ahc_ide_dividido, 
	     i_ahc_tip_lancto, i_ahc_transferido, i_ahc_codigo_ahc_original, 
	     i_ahc_ide_oservico, i_ahc_controle_credito, i_ahc_id_antigo_asa, 
	     i_ahc_codigo_evento, i_ahc_codigo_departamento, i_ahc_codigo_ven, 
	     s_ahc_numero_conta_banco, s_ahc_agencia, i_ahc_cod_dup_fat, s_ahc_numero_cheque, 
	     d_ahc_data_conferido, i_ahc_imp_vale_troca, i_ahc_contr_vale_compra)
	   	 VALUES ($idahc,1,'Venda Nota Manual: $ult - Emissor: $serie',0.00,0.00,1,3,5,'','','$dia',NULL,NULL,0, 
	     '',$emp,$ids,0,0,'F',1,'',NULL,NULL,'$codlogin','$login',NULL,NULL,0,'','$cliente-$fant',$cliente,0,NULL,0,$ults,0, 
	     2,0,0,0,0,0,0,0,1,'','',0,'',NULL,0,0)";
	$exsql= pg_query($cono,$sql);
	$sql="INSERT INTO tempasaidas(
	    cidesaidas, caviaprsaidas, ctessaidas, cemisaidas, cdtsaisaidas,
	    cempsaidas, cpedsaidas, cnatsaidas, cnotsaidas, c2notsaidas,
	    c2srisaidas, csrisaidas, cclisaidas, cmersaidas, csersaidas,
	    cvbrsaidas, cacrsaidas, ctotsaidas, cdessaidas, centsaidas, cdepsaidas,
	    cvensaidas, ccupsaidas, cbtrsaidas, cicmsaidas, cbissaidas, cvissaidas,
	    cbimsaidas, cimpsaidas, cbstsaidas, cvstsaidas, cbipsaidas, cipisaidas,
	    ctrasaidas, cmsgsaidas, cfpgsaidas, copcsaidas, cuscsaidas, chocsaidas,
	    cdtcsaidas, copasaidas, cusasaidas, choasaidas, cdtasaidas, ccussaidas,
	    ccomsaidas, cacesosaidas, cvalorfrete, cpicmfrete, cvicmfrete,
	    cempresasaidas, credsaidas, cpliqvolsaidas, cpbrusaidas, cvqtdsaidas,
	    cvespsaidas, cvmarsaidas, cvnumsaidas, ctfresaidas, cobssaidas,
	    fot_saidas, dep_saidas, ser_pedido, log_permissoes, nome_saidas,
	    cpf_saidas, cnpj_saidas, inscricao_saidas, rg_saidas, endereco_saidas,
	    cidade_saidas, uf_saidas, cep_saidas, bairro_saidas, proximidade_saidas,
	    fone_saidas, ide_futura, situ_futura, emp_pedido, i_asa_ide_trans_fin,
	    d_asa_previsao, d_asa_conclusao, d_asa_retirada, i_asa_codigo_eve,
	    s_asa_obs_pedido, s_asa_aos_cuidados, s_asa_departamento, s_asa_validade,
	    s_asa_prazo_entrega, n_asa_despesas_produtos, n_asa_perc_fun_rural,
	    n_asa_valor_fun_rural, i_asa_receita_ide, i_asa_nsu, i_asa_ccf,
	    i_asa_cod_parceria, s_asa_status_pedido, n_asa_valor_calc_ret_inss,
	    n_asa_valor_calc_ret_issqn, n_asa_qtd_pontos_venda, i_asa_gera_fat_auto,
	    n_asa_serie_fat, i_asa_ide_contrato, s_asa_cfop_secundaria, n_asa_valor_pis,
	    n_asa_valor_cofins, s_asa_chave_nfe, i_asa_codigo_tna, n_asa_icms_destaque,
	    n_asa_st_destaque, i_asa_coo_dav_emitida, i_asa_coo_cupom, i_asa_serie_ecf,
	    i_asa_transacao_liberada, s_asa_protocolo_nfe, s_asa_status_nf,
	    i_asa_codigo_nfs, i_asa_codigo_nfi, s_asa_numero_di, d_asa_data_di,
	    d_asa_data_desembaraco, s_asa_tipo_venda, n_asa_total_nacional,
	    n_asa_total_importado, n_asa_base_st_destaque, n_asa_total_importado_direto,
	    s_asa_obs_digitadas, n_asa_total_not_retido, n_asa_base_icms_destaque,
	    i_asa_codigo_tab_preco, i_asa_ccf_dav, s_asa_hash, n_asa_valor_pis_st,
	    n_asa_valor_cofins_st, n_asa_valor_seguro, n_asa_comissao_01,
	    n_asa_comissao_02, n_asa_comissao_03, n_asa_comissao_04, n_asa_comissao_05,
	    n_asa_comissao_06, n_asa_comissao_07, n_asa_comissao_08, n_asa_comissao_09,
	    n_asa_comissao_10, i_asa_finalidade_venda, s_asa_local_desembaraco,
	    s_asa_uf_desembaraco_adu, s_asa_codigo_exportador, n_asa_valor_red_icms,
	    n_asa_base_ii, n_asa_valor_ii, i_asa_finalidade_nfe, s_asa_chave_nfe_refer,
	    i_asa_codigo_pdi, s_asa_beneficio_fiscal, n_asa_perc_retencao_iss,
	    n_asa_perc_deducao_iss, n_asa_valor_deducao, n_asa_perc_ir, n_asa_valor_ir,
	    n_asa_perc_csll, n_asa_valor_csll, n_asa_perc_inss, s_asa_ident_sist_legado,
	    n_asa_num_nfse_subst, d_asa_emissao_subst, s_asa_protocolo_nfse,
	    i_asa_cod_nota_cupom, i_asa_status_nota_cupom, i_asa_tipo_pagto,
	    n_asa_tot_impostos, i_asa_cod_asa_orig, i_asa_cod_aen_orig, d_asa_digitada,
	    i_asa_serie_devolucao, i_asa_num_nota_digitada, s_asa_chave_devolucao,
	    i_asa_oid_benefix, i_asa_contigencia, i_asa_url_code_nfce, d_asa_data_autorizacao_nfce,
	    h_asa_hora_autorizacao_nfce, i_asa_benefix_canc, i_asa_via_ii,
	    i_asa_forma_ii, s_asa_cnpj_adquirente, s_asa_uf_adquirente, n_asa_valor_afrmm)
	    VALUES ($ids,'V','S','$dia','$dia',NULL,0,'$cfop', $ult,0,0,$serie,$cliente,0.00,0.00,0.00,
	    0.00,0.00,0.00,0.00,0,1,0,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,1,1,1,$codlogin,
	    '$login','$time','$dia',0,'',NULL,NULL,0.00,0.00,0.00,0.00,0.00,0.00,$emp,0.00,0.000,0.000,0,
	    '','','',0,'',0,0,0,'','$fant','',$cnpj, $insc,'','$end','$cidade', '$uf','$cep','$bairro','',
	    '$fone',0,0,0,$ults,NULL,NULL,NULL,NULL,'','','','','',0.00,0.00,0.00,0,0,0,NULL,'P',0.00,
	    0.00,0.00,0,0.00,NULL,'',0.00,0.00,NULL,$ope,0.00,0.00,0,0,0,0,'','E',NULL,NULL,'',NULL,NULL,'N',0.00,
	    0.00,0.00,0.00,'',0.00,0.00,1,0,'',0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,1,'',
	    '','',0.00,0.00,0.00,1,'',0,'',0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,'',0,NULL,'',0,0,0,0.00,0,0,NULL,
	    0,0,'',0,0,'',NULL,NULL,0,0,0,'','',0.00)";
	    $exsql= pg_query($cono,$sql);
	if (!$exsql){
	    session_destroy();
	    echo "<script>alert('Erro ao Inserir a Saida');</script>";
	    echo $voltalogin;
	    exit;
	}
	$sql="COMMIT;";
	$exsql= pg_query($cono,$sql);	        
	$_SESSION['cliente'] = $cliente; 
	$_SESSION['fantasia'] = $fant;
	$_SESSION['loja'] = $loja;        
	$_SESSION['emp'] = $emp;        
	$_SESSION['origem']=$servorigem;
	$_SESSION['destino']=$servdestino;
	$_SESSION['ids'] = $ids;
	$_SESSION['cfop'] = $cfop;
	$_SESSION['idahc']= $idahc;
	$_SESSION['login']= $login;
	$_SESSION['codlogin']= $codlogin;
	$_SESSION['emploginn']= $emploginn;	   
	header("Location: http://192.168.13.2:8080/loja/transferencia2.php");       
}  
            
        
        
        
        
        
        
        


   


?>
