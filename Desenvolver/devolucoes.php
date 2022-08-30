<!DOCTYPE html>
<html>
<head>
<title>Controle de Devoluções</title>
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
date_default_timezone_set('America/Sao_Paulo');
$time=date('H:i:s');
$dia= date('d-m-Y');
if(!@($conexaolc=pg_connect ("host=192.168.10.30 dbname=troll port=5430 user=postgres password=ky$14gr@"))){
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
if(!@($conexaolv=pg_connect ("host=192.168.10.99 dbname=troll port=5433 user=postgres password=ky$14gr@"))){
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
$data=date('Y-m-d');
$login=$_POST['login'];
$login=strtoupper($login);
if ($login=='') {
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Login Em Branco </font></b></p>";
    ?>
    <!DOCTYPE html>
	<html>
	<head>    
	<link rel="stylesheet" href="css/style.css"></link>	
	<center><form name = "form1" method= "post" action= "devolucoes.html"></center>
	<center><input class="btn btn-red"  type="submit" value="Voltar"></center>
	</form>
	</head>
	</html>
	<?php		    
    exit;
}
$senha=$_POST['senha'];
$senha=strtoupper($senha);
if ($senha=='') {
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Senha Em Branco </font></b></p>";
    ?>
    <!DOCTYPE html>
	<html>
	<head>    
	<link rel="stylesheet" href="css/style.css"></link>	
	<center><form name = "form1" method= "post" action= "devolucoes.html"></center>
	<center><input class="btn btn-red"  type="submit" value="Voltar"></center>
	</form>
	</head>
	</html>
	<?php		    
    exit;
   
}

$empresa=$_POST['empresa'];
if ($empresa=='') {
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Empresa Inválida </font></b></p>";
    ?>
    <!DOCTYPE html>
	<html>
	<head>    
	<link rel="stylesheet" href="css/style.css"></link>	
	<center><form name = "form1" method= "post" action= "devolucoes.html"></center>
	<center><input class="btn btn-red"  type="submit" value="Voltar"></center>
	</form>
	</head>
	</html>
	<?php		    
    exit;
   
}
if ($empresa < 13) {
    $com="select cnomope,csenhausuario from parametros where cnomope= '$login' and csenhausuario='$senha'";
    $excom=pg_query($conexaolc,$com);
    $resut= pg_fetch_array($excom);
    if ($resut == ''){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Login Ou Senha inválido </font></b></p>";        
    ?>
    <!DOCTYPE html>
	<html>
	<head>    
	<link rel="stylesheet" href="css/style.css"></link>	
	<center><form name = "form1" method= "post" action= "devolucoes.html"></center>
	<center><input class="btn btn-red"  type="submit" value="Voltar"></center>
	</form>
	</head>
	</html>
	<?php		    
    exit;
    }
}
if ($empresa >= 13 and $empresa <= 15) {
    $com="select cnomope,csenhausuario from parametros where cnomope= '$login' and csenhausuario='$senha'";
    $excom=pg_query($conexaolv,$com);
    $resut= pg_fetch_array($excom);
    if ($resut == ''){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Login Ou Senha inválido </font></b></p>";        
    ?>
    <!DOCTYPE html>
	<html>
	<head>    
	<link rel="stylesheet" href="css/style.css"></link>	
	<center><form name = "form1" method= "post" action= "devolucoes.html"></center>
	<center><input class="btn btn-red"  type="submit" value="Voltar"></center>
	</form>
	</head>
	</html>
	<?php		    
    exit;
    }
}
    $tipo=$_POST['tipo'];
    if ($tipo == 'L'){
        $com="select *from controledevolucoeslog where data = '$data' and usuario = '$login' order by id  ";
        $excom=pg_query($conexaolc,$com);
        echo "Legenda Loja:<br>";
        echo "1-Tatiane.<br>";
        echo "3-Lucélia.<br>";
        echo "5-Maynara.<br>";
        echo "7-Vila.<br>";
        echo "9-Eliane.<br>";
        echo "11-Hilda.<br>";
        echo "13-Nadia.<br>";
        echo "15-Adrielli.<br>";
        echo "P=pendente C=conferido";
        echo "<table border='2' width='100%' bgcolor=#E3F6CE >";
        echo "<tr><td>Id</td>"."<td>Código</td>"."<td>Quantidade</td>"."<td>Loja</td>"."<td>Data</td>"."<td>Usuário</td>"."<td>Status</td>"."<td>Hora</td>"."</tr>";
        while ($row = pg_fetch_assoc($excom)) {
            echo "<td>".$row['id']."</td>\n";
            echo "<td>".$row['codigo']."</td>\n";
            echo "<td>".$row['quantidade']."</td>\n";
            echo "<td>".$row['empresa']."</td>\n";
            echo "<td>".$row['data']."</td>\n";
            echo "<td>".$row['usuario']."</td>\n";            
            echo "<td>".$row['status']."</td>\n";
            echo "<td>".$row['time']."</td>\n";
            echo "</tr>\n";
        }
        ?>
        <!DOCTYPE html>
		<html>
		<head>    
		<link rel="stylesheet" href="css/style.css"></link>	
		<center><form name = "form1" method= "post" action= "devolucoes.html"></center>
		<center><input class="btn btn-red"  type="submit" value="Voltar"></center>
		</form>
		</head>
		</html>
		<?php
		echo "<br>";
        exit;
    }
    if ($tipo == 'E'){
        $id=$_POST['id'];
        $com="select id,status,usuario from controledevolucoeslog where id= '$id' ";
        $excom=pg_query($conexaolc,$com);
        $rscom=pg_fetch_array($excom);
        $id=$rscom['id'];
        if ($id == '') {
            echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Id Inválido </font></b></p>";
            ?>
   		    <!DOCTYPE html>
			<html>
			<head> 		   
			<link rel="stylesheet" href="css/style.css"></link>	
			<center><form name = "form1" method= "post" action= "devolucoes.html"></center>
			<center><input class="btn btn-red"  type="submit" value="Voltar"></center>
			</form>
			</head>
			</html>
			<?php		    
             exit;            
        }
        $st=$rscom['status'];
        if ($st <> 'P') {
            echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Id Já está na tela para Conferência
favor Avissar o Adriano Para a Exclusão do mesmo</font></b></p>";
            ?>
   		    <!DOCTYPE html>
			<html>
			<head> 		   
			<link rel="stylesheet" href="css/style.css"></link>	
			<center><form name = "form1" method= "post" action= "devolucoes.html"></center>
			<center><input class="btn btn-red"  type="submit" value="Voltar"></center>
			</form>
			</head>
			</html>
			<?php		    
             exit;
        }
        $usuario=$rscom['usuario'];
        if ($login <> $usuario) {
            echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Id Cadastrado Por outro Usuário</font></b></p>";
            ?>
   		    <!DOCTYPE html>
			<html>
			<head> 		   
			<link rel="stylesheet" href="css/style.css"></link>	
			<center><form name = "form1" method= "post" action= "devolucoes.html"></center>
			<center><input class="btn btn-red"  type="submit" value="Voltar"></center>
			</form>
			</head>
			</html>
			<?php		    
             exit;  
        } 
        $com="delete from controledevolucoeslog where id =$id";
        $excom=pg_query($conexaolc,$com);
        if (!$excom){
            echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Ao Deletar Produtos</font></b></p>";
            ?>
            <!DOCTYPE html>
			<html>
			<head>
			<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
			<center><input class="btn btn-red"  type="submit" value="Voltar"></center>
			</head>
			</html>
			<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
			<?php
            exit;
        }
        echo "<p style=background:#00FF00; align=center <br/><b><font size=30 color=#0000FF>Id Deletado  com sucesso $id em: '$dia' , '$time'  </font></b></p>";
        ?>
        <!DOCTYPE html>
		<html>
		<head>    
		<link rel="stylesheet" href="css/style.css"></link>
		<center><img src=img/okk.jpg alt="400" heigth ="400px" width="300px" ></center>	
		<center><form name = "form1" method= "post" action= "devolucoes.html"></center>
		<center><input class="btn btn-red"  type="submit" value="Voltar"></center>
		</form>
		</head>
		</html>
		<?php		    
        exit;
    }
    if ($tipo == 'C'){
        $com="select *from controledevolucoeslog where status <> 'P' and usuario = '$login' order by id  ";
        $excom=pg_query($conexaolc,$com);
        echo "Legenda Loja:<br>";
        echo "1-Tatiane.<br>";
        echo "3-Lucélia.<br>";
        echo "5-Maynara.<br>";
        echo "7-Vila.<br>";
        echo "9-Eliane.<br>";
        echo "11-Hilda.<br>";
        echo "13-Nadia.<br>";
        echo "15-Adrielli.<br>";
        echo "P=pendente C=conferido";
        echo "<table border='2' width='100%' bgcolor=#E3F6CE >";
        echo "<tr><td>Id</td>"."<td>Código</td>"."<td>Quantidade</td>"."<td>Loja</td>"."<td>Data</td>"."<td>Usuário</td>"."<td>Status</td>"."<td>Hora</td>"."</tr>";
        while ($row = pg_fetch_assoc($excom)) {
            echo "<td>".$row['id']."</td>\n";
            echo "<td>".$row['codigo']."</td>\n";
            echo "<td>".$row['quantidade']."</td>\n";
            echo "<td>".$row['empresa']."</td>\n";
            echo "<td>".$row['data']."</td>\n";
            echo "<td>".$row['usuario']."</td>\n";
            echo "<td>".$row['status']."</td>\n";
            echo "<td>".$row['time']."</td>\n";
            echo "</tr>\n";
        }
        ?>
        <!DOCTYPE html>
		<html>
		<head>    
		<link rel="stylesheet" href="css/style.css"></link>	
		<center><form name = "form1" method= "post" action= "devolucoes.html"></center>
		<center><input class="btn btn-red"  type="submit" value="Voltar"></center>
		</form>
		</head>
		</html>
		<?php
		echo "<br>";
        exit;
    }
    if ($tipo == 'T'){
        $com="select *from controledevolucoeslog order by id  ";
        $excom=pg_query($conexaolc,$com);
        echo "Legenda Loja:<br>";
        echo "1-Tatiane.<br>";
        echo "3-Lucélia.<br>";
        echo "5-Maynara.<br>";
        echo "7-Vila.<br>";
        echo "9-Eliane.<br>";
        echo "11-Hilda.<br>";
        echo "13-Nadia.<br>";
        echo "15-Adrielli.<br>";
        echo "P=pendente C=conferido";
        echo "<table border='2' width='100%' bgcolor=#E3F6CE >";
        echo "<tr><td>Id</td>"."<td>Código</td>"."<td>Quantidade</td>"."<td>Loja</td>"."<td>Data</td>"."<td>Usuário</td>"."<td>Status</td>"."<td>Hora</td>"."</tr>";
        while ($row = pg_fetch_assoc($excom)) {
            echo "<td>".$row['id']."</td>\n";
            echo "<td>".$row['codigo']."</td>\n";
            echo "<td>".$row['quantidade']."</td>\n";
            echo "<td>".$row['empresa']."</td>\n";
            echo "<td>".$row['data']."</td>\n";
            echo "<td>".$row['usuario']."</td>\n";
            echo "<td>".$row['status']."</td>\n";
            echo "<td>".$row['time']."</td>\n";
            echo "</tr>\n";
        }
        ?>
        <!DOCTYPE html>
		<html>
		<head>    
		<link rel="stylesheet" href="css/style.css"></link>	
		<center><form name = "form1" method= "post" action= "devolucoes.html"></center>
		<center><input class="btn btn-red"  type="submit" value="Voltar"></center>
		</form>
		</head>
		</html>
		<?php
		echo "<br>";
        exit;
    }
    $codigo=$_POST['cod'];
    if ($codigo=='') {
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Código  inválido </font></b></p>";
        ?>
        <!DOCTYPE html>
		<html>
		<head>    
		<link rel="stylesheet" href="css/style.css"></link>	
		<center><form name = "form1" method= "post" action= "devolucoes.html"></center>
		<center><input class="btn btn-red"  type="submit" value="Voltar"></center>
		</form>
		</head>
		</html>
		<?php		    
        exit;
    }
    $qtd=$_POST['qtd'];
    if ($qtd==''){
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Quantidade Inválida </font></b></p>";
        ?>
        <!DOCTYPE html>
		<html>
		<head>    
		<link rel="stylesheet" href="css/style.css"></link>	
		<center><form name = "form1" method= "post" action= "devolucoes.html"></center>
		<center><input class="btn btn-red"  type="submit" value="Voltar"></center>
		</form>
		</head>
		</html>
		<?php		    
        exit;
    }
    if ($tipo == 'I'){
        $com="INSERT INTO controledevolucoeslog(id, codigo, quantidade, empresa, data, status, usuario,time)
         VALUES (nextval('seq_controledevolucoes'),$codigo,$qtd,$empresa,'$data','P','$login','$time')";
        $excom=pg_query($conexaolc,$com);
        if (!$excom){
            echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Ao Inserir Produtos</font></b></p>";
            ?>
            <!DOCTYPE html>
			<html>
			<head>
			<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
			<center><input class="btn btn-red"  type="submit" value="Voltar"></center>
			</head>
			</html>
			<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
			<?php
            exit;
	    }
	    echo "<p style=background:#00FF00; align=center <br/><b><font size=30 color=#0000FF>Produto Incluso com sucesso $codigo,$qtd em: '$dia' , '$time'  </font></b></p>";
	    ?>
        <!DOCTYPE html>
		<html>
		<head>    
		<link rel="stylesheet" href="css/style.css"></link>
		<center><img src=img/okk.jpg alt="400" heigth ="400px" width="300px" ></center>	
		<center><form name = "form1" method= "post" action= "devolucoes.html"></center>
		<center><input class="btn btn-red"  type="submit" value="Voltar"></center>
		</form>
		</head>
		</html>
		<?php		    
        exit;	    
    }
    


exit;













      
    




