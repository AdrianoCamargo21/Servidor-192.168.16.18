<!DOCTYPE html>
<html lang="pt-br">
<link rel="stylesheet" href="css/style.css"></link>
	<head>
		<meta charset="utf-8">
		<title>Módulo Result</title>		
		<style type="text/css">
			.carregando{
				color:#ff0000;
				display:none;
			}
		</style>
	</head>
	<body>
	<script language="JavaScript1.2">
		<!--
		var ns6=document.getElementById&&!document.all?1:0
		var head="display:''"
		var folder=''
		function expandit(curobj){
		folder=ns6?curobj.nextSibling.nextSibling.style:document.all[curobj.sourceIndex+1].style
		if (folder.display=="none")
		folder.display=""
		else
		folder.display="none"
		}
    //-->
    </script>
	<center><img src="img/fundo2.png"alt="10" heigth ="100px" width="400px" ></center>
	<table width="100%" cellspacing="1" cellpadding="3" border="5" bgcolor="#E0FFFF">
    <tr>
    <br><br>
    <td><font color="Black" face="arial, verdana, helvetica">
    <center>
		<h1>Inclusão de Despesas</h1>
		<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
		<?php include_once("conexao.php");
		session_start();
		error_reporting(0);
		set_time_limit(0);
		$voltalogin = "<script>window.location='http://192.168.13.2:8080/result/';</script>";
		$volta = "<script>window.location='http://192.168.13.2:8080/result/result2.php';</script>";
		date_default_timezone_set('America/Sao_Paulo');
		$time = date('H:i:s');
		$dia = date('Y-m-d');
		$login = $_SESSION['usuario'];
		if ($login == null) {
		    session_destroy();
		    echo "<script>alert('Erro ao carregar login');</script>";
		    echo $voltalogin;
		    exit;
		}		
		$dia= date('Y-m-d');
		$botao = $_POST["bt"];
		if ($botao == 'FECHAR') {
		    session_destroy();
		    echo "<script>alert('Desconectado com Sucesso!!');</script>";
		    echo $voltalogin;
		    exit;
		}	
		$tipo = $_POST["tipo"];
		if ($tipo == 'P') {
		    $favorecido =  $_POST["fav"];
		    if ($favorecido == null) {
		        echo "<script>alert('Escolha Um Favorecido');</script>";
		        echo $volta;
		    }
		    $valor = $_POST["val"];
		    if ($valor == null or $valor < 0.50) {
		        echo "<script>alert('Valor Inválido');</script>";
		        echo $volta;
		    }
		    $data = $_POST["di"];
		    if ($data == null) {
		        $data = $dia;
		    }
		    $ref = explode("-", $data);
		    $ano = $ref[0];
		    $mes = $ref[1];
		    $ref = $ano.'/'.$mes;
		    $limitdata = date('Y-m-d', strtotime($dia. '-2 days'));
		    if ($data < $limitdata) {
		        echo "<script>alert('Não é Permitido lançamento Retroativo a mais de 2 Dias');</script>";
		        echo $volta;
		    }		    
		    $tipopg = $_POST["pagamento"];
		    if ($tipopg == 'P') {
		        $ref = explode("-", $data);
		        $ano = $ref[0];
		        $mes = $ref[1]-1;
		        if ($mes < 10) {
		            $mes = '0'.$mes;
		        }
		        if ($mes == '00') {
		            $mes = 12;
		            $ano -= 1; 
		        }
		        $ref = $ano.'/'.$mes;
		        $compl = 'PAGAMENTO FUNC.: ';
		    } else {
		        $ref = explode("-", $data);
		        $ano = $ref[0];
		        $mes = $ref[1];
		        $ref = $ano.'/'.$mes;
		        $compl = 'VALE FUNC.: ';
		    }
		    $limitdata = date('Y-m-d', strtotime($dia. '-2 days'));
		    if ($data < $limitdata) {
		        echo "<script>alert('Não é Permitido lançamento Retroativo a mais de 2 Dias');</script>";
		        echo $volta;
		    }
		    if ($login == "ADRIELI") {
		        $empresa = 1;
		    } elseif ($login = 'ROSANE') {
		        $empresa = 2;
		    } elseif ($login = 'VILA') {
		        $empresa = 3;
		    } elseif ($login = 'LUCELIA') {
		        $empresa = 4;
		    } elseif ($login = 'JOSI') {
		        $empresa = 5;
		    } elseif ($login = 'MAYARA') {
		        $empresa = 11;
		    }
		    $sql = "select cnomefavorecido from afavorecidos where ccodigofavorecido = $favorecido";
		    $exsql = pg_query($conrc ,$sql);
		    $resulsql = pg_fetch_array($exsql);
		    $desc  = $resulsql['cnomefavorecido'];
		    $sql = "BEGIN";
		    $exsql = pg_query($conrc ,$sql);
		    $sql = "select data from fechamento order by data desc limit  1 ";
		    $exsql = pg_query($conrc ,$sql);
		    $resulsql = pg_fetch_array($exsql);
		    $fechamento  = $resulsql['data'];
		    if ($data <= $fechamento) {
		        $dataa = implode("/",array_reverse(explode("-",$data)));
		        $sql = "ROLLBACK";
		        $exsql = pg_query($conrc,$sql);
		        echo "<script>alert('A Data:$dataa já se encontra fechada. para lancamento nessa data favor solicitar para o financeiro');</script>";
		        echo $volta;
		    }
		    if ($data > $dia) {
		        $dataa = implode("/",array_reverse(explode("-",$data)));
		        $sql = "ROLLBACK";
		        $exsql = pg_query($conrc,$sql);
		        echo "<script>alert('Não é permitido lançar nada com data Futura $dataa ');</script>";
		        echo $volta;
		    }
		    $sql = "select logar('$login',1,0); INSERT INTO ahcontas VALUES (nextval('seque_ahcontas'),'1','$compl $desc',0.00,$valor,11,14, $favorecido,'','','$data',null,null,0,'$ref'
            ,1,0,0,0,'',0,'','$dia','$time',1,'$login',NULL,NULL,0,'','',NULL,NULL,NULL,NULL,0,0,0,0,NULL,NULL,0,NULL,NULL,$empresa,null,'','',0,'',null,0,0)";
		    $exsql = pg_query($conrc,$sql);
		    if (!$exsql){
		        $sql = "ROLLBACK";
		        $exsql = pg_query($conrc,$sql);
		        echo "<script>alert('Erro ao Incluir lançamento favor avisar o Suporte');</script>";
		        echo $volta;
		    } else {
		        $sql = "COMMIT";
		        $exsql = pg_query($conrc,$sql);
		        echo "<script>alert('Lançamento Cadastrado!');</script>";
		        echo $volta;
		    } 
		    
		   
		}
		
		
		if ($tipo == "I") {
		    $favorecido =  $_POST["favo"];
		    if ($favorecido == null) {
		        echo "<script>alert('Escolha Um Favorecido');</script>";
		        echo $volta;
		    }
		    $valor = $_POST["valor"];
		    if ($valor == null or $valor < 0.50 or $valor == 0.00) {
		        echo "<script>alert('Valor Inválido');</script>";
		        echo $volta;
		    }
		    $data = $_POST["diaa"];
		    if ($data == null) {
		        $data = $dia;
		    }		    
		    $ref = explode("-", $data);
		    $ano = $ref[0];
		    $mes = $ref[1];		    		    
		    $ref = $ano.'/'.$mes;
		    $limitdata = date('Y-m-d', strtotime($dia. '-2 days'));
		    if ($data < $limitdata) {
		        echo "<script>alert('Não é Permitido lançamento Retroativo a mais de 2 Dias');</script>";
		        echo $volta;
		    }
		    $desc = $_POST["desc"];
		    if ($desc == null) {
		        echo "<script>alert('Não é Permitido lançamento sem Descrição');</script>";
		        echo $volta;
		    }
		    $desc = strtoupper($desc);
		    if ($login == "ADRIELI") {
		        $empresa = 1; 
		    } elseif ($login = 'ROSANE') {
		        $empresa = 2;
		    } elseif ($login = 'VILA') {
		        $empresa = 3;
		    } elseif ($login = 'LUCELIA') {
		        $empresa = 4;
		    } elseif ($login = 'JOSI') {
		        $empresa = 5;
		    } elseif ($login = 'MAYARA') {
		        $empresa = 11;
		    }
		    $sql = "BEGIN";
		    $exsql = pg_query($conrc ,$sql);
		    $sql = "select data from fechamento order by data desc limit  1 ";
		    $exsql = pg_query($conrc ,$sql);
		    $resulsql = pg_fetch_array($exsql);
		    $fechamento  = $resulsql['data'];
		    if ($data <= $fechamento) {
		        $dataa = implode("/",array_reverse(explode("-",$data)));
		        $sql = "ROLLBACK";
		        $exsql = pg_query($conrc,$sql);
		        echo "<script>alert('A Data:$dataa já se encontra fechada. para lancamento nessa data favor solicitar para o financeiro');</script>";
		        echo $volta;
		    }	    
		    if ($data > $dia) {
		        $dataa = implode("/",array_reverse(explode("-",$data)));
		        $sql = "ROLLBACK";
		        $exsql = pg_query($conrc,$sql);
		        echo "<script>alert('Não é permitido lançar nada com data Futura $dataa ');</script>";
		        echo $volta;
		    }	    
		    $sql = "select logar('$login',1,0); INSERT INTO ahcontas VALUES (nextval('seque_ahcontas'),'1','$desc',0.00,$valor,11,10, $favorecido,'','','$data',null,null,0,'$ref'
            ,1,0,0,0,'',0,'','$dia','$time',1,'$login',NULL,NULL,0,'','',NULL,NULL,NULL,NULL,0,0,0,0,NULL,NULL,0,NULL,NULL,$empresa,null,'','',0,'',null,0,0)";
		    $exsql = pg_query($conrc,$sql);
		    if (!$exsql){
		        $sql = "ROLLBACK";
		        $exsql = pg_query($conrc,$sql);
		        echo "<script>alert('Erro ao Incluir lançamento favor avisar o Suporte');</script>"; 
		        echo $volta;		        
		    } else {
		        $sql = "COMMIT";
		        $exsql = pg_query($conrc,$sql);
		        echo "<script>alert('Lançamento Cadastrado!');</script>";
		        echo $volta;
		    }		   
		}		
		if ($tipo == "E") {
		    $data = $_POST["dia"];
		    if ($data == null) {
		        $data = $dia;
		    }
		    $id = $_POST["id"];
		    if ($id == null or $id <= 0 ) {
		        echo "<script>alert('Id inválido');</script>";		       
		    }
		    $sql = "select data from fechamento order by data desc limit  1 ";
		    $exsql = pg_query($conrc ,$sql);
		    $resulsql = pg_fetch_array($exsql);
		    $fechamento  = $resulsql['data'];
		    if ($data <= $fechamento) {
		        $dataa = implode("/",array_reverse(explode("-",$data)));
		        echo "<script>alert('Data : $dataa já se encontra fechada para exclusão favor solicitar ao financeiro ');</script>";
		        echo $volta;		        
		    }
		    $sql = "select *from ahcontas where idhistorico = $id";
		    $exsql = pg_query($conrc ,$sql);
		    $resulsql = pg_fetch_array($exsql);
		    $ide = $resulsql['idhistorico'];
		    $loja = $resulsql['cuscahis'];
		    if ($ide == null) {		       
		        echo "<script>alert('Nenhum Lançamento Retornou com esse id: $id');</script>";
		        echo $volta;		        
		    } else {		        
		        if ($login <> $loja ) {
		            echo "<script>alert('A Busca retornou um Id porém o mesmo foi lançado por outro operador e você não pode alterar');</script>";
		            echo $volta;
		        } else {
    		        $sql = "BEGIN";
    		        $exsql = pg_query($conrc ,$sql);
    		        $sql = "select logar('$login',1,0); delete from ahcontas where idhistorico = $id";
    		        $exsql = pg_query($conrc ,$sql);
    		        if (!$exsql){
    		            $sql = "ROLLBACK";
    		            $exsql = pg_query($conrc,$sql);
    		            echo "<script>alert('Erro ao excluir lançamento favor avisar o Suporte');</script>";
    		            echo $volta;
    		        } else {
    		            $sql = "COMMIT";
    		            $exsql = pg_query($conrc,$sql);
    		            echo "<script>alert('Lançamento excluído com sucesso!');</script>";
    		            echo $volta;
    		        }
		        }
		    }    
		}	
		?>		
		<form method="POST" action="result2.php">	
		<br><br>
		Tipo de Operação:
		<br><br>
		<input type="radio" name="tipo" value="P" onClick="expandit(this)">Pagamento Funcionário
        <span style="display:none" style=&{head};>
        <br><br>
        <input type="radio" name="pagamento" value="P" checked = "yes">Pagamento
         <input type="radio" name="pagamento" value="V">Vale
         <br><br>
        <label>Escolha o Funcionário:</label>
        <select name="fav" id="fav">
				<option value="">Funcionário</option>
				<?php
					$sql = "SELECT * FROM afavorecidos where ccodcatefavo = 14 ORDER BY cnomefavorecido";
					$exsql = pg_query($conrc, $sql);
					while($row = pg_fetch_array($exsql) ) {
					    echo '<option value="'.$row['ccodigofavorecido'].'">'.$row['cnomefavorecido'].'</option>';
					}
				?>
			</select>
			<br>
	        Valor R$:
			<input id="val" name= "val" value="0.00" min="1"  maxlength="10">
			<br>
			data:
			<input name="di"  type= "date"  value="<?php echo $dia ?>" id="di" />			
			
			<br><br>
        </span>
		<input type="radio" name="tipo" value="I" onClick="expandit(this)">Incluir Despesa
        <span style="display:none" style=&{head};>
        <br><br>
        <label>Escolha o Favorecido:</label>
        <select name="favo" id="favo">
				<option value="">Favorecido</option>
				<?php
					$sql = "SELECT * FROM afavorecidos where ccodigofavorecido in (35,51,229,58,57,56,83) ORDER BY cnomefavorecido";
					$exsql = pg_query($conrc, $sql);
					while($row = pg_fetch_array($exsql) ) {
					    echo '<option value="'.$row['ccodigofavorecido'].'">'.$row['cnomefavorecido'].'</option>';
					}
				?>
			</select>
			<br></p>
	        Valor R$:
			<input id="valor" name= "valor" value="0.00" min="1"  maxlength="10">
			<br>
			data:
			<input name="diaa"  type= "date"  value="<?php echo $dia ?>" id="diaa" />
			<br>
			Descrição:
			<input name= "desc" type= "text" id="desc" size="80" maxlength="80">			
			<br><br>
        </span>
        <input type="radio" name="tipo" value="E" onClick="expandit(this)">Excluir Lançamento
        <span style="display:none" style=&{head};>
        <br><br>
        Id:
		<input id="id" name= "id" type= "number"   min="1"  maxlength="10">
		<br>
		data:
		<input name="dia"  type= "date"  value="<?php echo $dia ?>" id="dia" />		
        </span>        
        
        
		<br><br>
						
			
			<input name= "bt"  class="btn btn-green" type="submit" value="ENVIAR"/>
			<input name= "bt"  class="btn btn-red"   type="reset" value="Limpar" />.</p>
			<br><br>
			
			
			
			
			<input name= "bt" class="btn btn-red" type="submit" value="FECHAR" />			
			<br><br>
		</form>
		
		<script type="text/javascript" src="https://www.google.com/jsapi"></script>
		<script type="text/javascript">
		  google.load("jquery", "1.4.2");
		</script>
		</center>

		
	</body>
</html>