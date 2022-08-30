<!DOCTYPE html>
<html>
<head>
<title>Acomulado</title>
<meta http-equiv='refresh' content='1800' ;url=http://192.168.13.2/Desenvolver/produtos.php';'>
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
$time=date('H:i:s');
$dia= date('Y-m-d');
if(!@($conexaoc=pg_connect ("host=192.168.16.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@"))){
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
if(!@($conexaov=pg_connect ("host=192.168.16.190 dbname=troll_videira port=5430 user=postgres password=ky$14gr@"))){
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
if(!@($conexaol=pg_connect ("host=192.168.16.190 dbname=troll_lages port=5430 user=postgres password=ky$14gr@"))){
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
if(!@($conexaolc=pg_connect ("host=192.168.16.2 dbname=troll port=5430 user=postgres password=ky$14gr@"))){
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
if(!@($conexaoj=pg_connect ("host=192.168.16.190 dbname=troll_joinville port=5430 user=postgres password=ky$14gr@"))){
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
if(!@($conexaosp=pg_connect ('host=192.168.16.190 dbname=silvio_pessoal port=5430 user=postgres password=ky$14gr@'))) {
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados Silvio Pessoal Data:$dia  Hora:$time </font></b></p>";
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
$voltalogin="<script>window.location='http://192.168.16.190/Desenvolver/login.php';</script>";
$mensagemnfecliente="<script>alert('Nota fiscal ou código de cliente inválidos');</script>";
$errologin="<script>alert('Usuário invalido');</script>";
$errosenha="<script>alert('Senha inválida');</script>";
$mensagemlogin="<script>alert('Bem vindo');</script>";
$inativar=$_POST['inativar'];
if ($inativar == 'SELECIONAR'){
    $linha=$_POST['linha'];
    if ($linha <= '0'){
        echo '<script>window.alert(\'Código da linha não poder ser vazio ou negativo \');</script>';
        echo $voltalogin;
        exit;
    }
    $linhas=$_POST['linhas'];
    $saldo= $_POST['saldo'];
    if ($saldo== ''){
        echo '<script>window.alert(\'Selecione uma opção\');</script>';
        echo "$voltalogin";
        exit;
    }
    if ($saldo== 'T'){
        $comandosaldo=("select cgruporduto,cdesgrupo from aprodutos inner join tgrupo on ccodgrupo = cgruporduto where clinproduto in ('$linha') group by cgruporduto,cdesgrupo order by cgruporduto");
        $echo= 'Todos';
    }
    if ($saldo== 'S'){
        $comandosaldo =("select cgruporduto,cdesgrupo from aprodutos inner join tgrupo on ccodgrupo = cgruporduto where clinproduto in ('$linha') and cqtdproduto >= '1' group by cgruporduto,cdesgrupo order by cgruporduto");
        $echo= 'Com Saldo';
    }
    if ($saldo== 'N'){
        $comandosaldo =("select cgruporduto,cdesgrupo from aprodutos inner join tgrupo on ccodgrupo = cgruporduto where clinproduto in ('$linha') and cqtdproduto < '0' group by cgruporduto,cdesgrupo order by cgruporduto");
        $echo= 'Negativos';
    }
    if ($linhas=='1'){        
        $comandolinha=pg_query($conexaoc,$comandosaldo);        
        ?>
        <!DOCTYPE html>
		<html>
		<head>    
		<link rel="stylesheet" href="css/style.css"></link>
		<center><img src="img/fundo1.jpg"alt="10" heigth ="100px" width="400px" ></center>
		</head>
		</html>
		<?php
		echo "<b><font color=\"#FF0000\"> Sistema de Caçador Linha : '$linha' Situação: '$echo'</font></b>"; 
		echo "<table border='2' width='100%' #E3F6CE >";
		echo "<tr><td>Código Grupo</td>"."<td>Descrisão do Grupo</td>"."</tr>"; 
		while($grupo = pg_fetch_assoc($comandolinha)){
		    echo "<td>".$grupo['cgruporduto']."</td>\n";
	        echo "<td>".$grupo['cdesgrupo']."</td>\n";
	        echo "</tr>\n";
        }
    }
    if ($linhas=='2'){
        $comandolinha=pg_query($conexaov,$comandosaldo);        
        ?>
        <!DOCTYPE html>
		<html>
		<head>    
		<link rel="stylesheet" href="css/style.css"></link>
		<center><img src="img/fundo1.jpg"alt="10" heigth ="100px" width="400px" ></center>
		</head>
		</html>
		<?php
        echo "<b><font color=\"#FF0000\"> Sistema de Videira Linha : '$linha' Situação: '$echo' </font></b>";
        echo "<table border='2' width='100%' #E3F6CE >";
        echo "<tr><td>Código Grupo</td>"."<td>Descrisão do Grupo</td>"."</tr>"; 
        while($grupo = pg_fetch_assoc($comandolinha)){  
            echo "<td>".$grupo['cgruporduto']."</td>\n";
            echo "<td>".$grupo['cdesgrupo']."</td>\n";
            echo "</tr>\n";
        }
    }
    if ($linhas=='3'){
        $comandolinha=pg_query($conexaoj,$comandosaldo);        
        ?>
        <!DOCTYPE html>
        <html>
        <head>
        <link rel="stylesheet" href="css/style.css"></link>
        <center><img src="img/fundo1.jpg"alt="10" heigth ="100px" width="400px" ></center>
        </head>
        </html>
        <?php
        echo "<b><font color=\"#FF0000\"> Sistema de joinville linha : '$linha' Situação: '$echo' </font></b>";
        echo "<table border='2' width='100%' #E3F6CE >";
        echo "<tr><td>Código Grupo</td>"."<td>Descrisão do Grupo</td>"."</tr>";         
        while($grupo = pg_fetch_assoc($comandolinha)){
            echo "<td>".$grupo['cgruporduto']."</td>\n";
            echo "<td>".$grupo['cdesgrupo']."</td>\n";
            echo "</tr>\n";
        }
    }
    if ($linhas=='4'){
        $comandolinha=pg_query($conexaol,$comandosaldo);        
        ?>
        <!DOCTYPE html>
        <html>
        <head>
        <link rel="stylesheet" href="css/style.css"></link>
        <center><img src="img/fundo1.jpg"alt="10" heigth ="100px" width="400px" ></center>
        </head>
        </html>
        <?php
        echo "<b><font color=\"#FF0000\"> Sistema de lages linha : '$linhas' Situação: '$echo' </font></b>";
        echo "<table border='2' width='100%' #E3F6CE >";
        echo "<tr><td>Código Grupo</td>"."<td>Descrisão do Grupo</td>"."</tr>";         
        while($grupo = pg_fetch_assoc($comandolinha)){
            echo "<td>".$grupo['cgruporduto']."</td>\n";
            echo "<td>".$grupo['cdesgrupo']."</td>\n"; 
            echo "</tr>\n";
        }        
    }    
    exit;    
}
if ($inativar == 'CONFIRMA'){
    $inativarl =$inativar=$_POST['inativarl'];
    if ($inativarl == '1'){
        $conex=pg_connect ('host=192.168.16.2 dbname=troll port=5430 user=postgres password=ky$14gr@');
        $com=pg_query("select logar('COPIA',1,0);update aprodutos set csitproduto= '1' where csitproduto = 0 and clinproduto = 75");
        if (!$com){
            pg_close($conex);
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
        pg_close($conex);       
        ?>
        <!DOCTYPE html>
        <html>
        <head>
        <link rel="stylesheet" href="css/style.css"></link>
        <center><img src="img/fundo1.jpg"alt="10" heigth ="100px" width="400px" ></center>
        </head>
        </html>
        <?php
        echo "<p style=background:#00FF00; align=center <br/><b><font size=30 color=#0000FF>Produtos Inativados Com Sucesso  em: '$dia' , '$time'  </font></b></p>";
        ?>
        <!DOCTYPE html>
		<html>
		<head>    
		<link rel="stylesheet" href="css/style.css"></link>
		<center><img src=img/okk.jpg alt="400" heigth ="400px" width="300px" ></center>
		<center><form name = "form1" method= "post" action= "login.php"></center>
		<center><input class="btn btn-red"  type="submit" name="inativar" value="Voltar"></center>
		</form>
		</head>
		</html>
		<?php
		exit;
    }
    if ($inativarl == '2'){
        $conex=pg_connect('host=192.168.9.10 dbname=troll port=5433 user=postgres password=ky$14gr@');
        $com=pg_query("select logar('COPIA',1,0);update aprodutos set csitproduto= '1' where csitproduto = 0 and clinproduto = 75");
        if (!$com){
            pg_close($conex);
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
        pg_close($conex);
        ?>
        <!DOCTYPE html>
        <html>
        <head>
        <link rel="stylesheet" href="css/style.css"></link>
        <center><img src="img/fundo1.jpg"alt="10" heigth ="100px" width="400px" ></center>
        </head>
        </html>
        <?php
        echo "<p style=background:#00FF00; align=center <br/><b><font size=30 color=#0000FF>Produtos Inativados Com Sucesso  em: '$dia' , '$time'  </font></b></p>";
        ?>
        <!DOCTYPE html>
		<html>
		<head>    
		<link rel="stylesheet" href="css/style.css"></link>
		<center><img src=img/okk.jpg alt="400" heigth ="400px" width="300px" ></center>
		<center><form name = "form1" method= "post" action= "login.php"></center>
		<center><input class="btn btn-red"  type="submit" name="inativar" value="Voltar"></center>
		</form>
		</head>
		</html>
		<?php
		exit;
    }
    if ($inativarl == '3'){
        $conex=pg_connect ('host=192.168.10.153 dbname=troll port=5434 user=postgres password=ky$14gr@');
        $com=pg_query("select logar('COPIA',1,0);update aprodutos set csitproduto= '1' where csitproduto = 0 and clinproduto = 75");
        if (!$com){
            pg_close($conex);
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
        pg_close($conex);
        ?>
        <!DOCTYPE html>
        <html>
        <head>
        <link rel="stylesheet" href="css/style.css"></link>
        <center><img src="img/fundo1.jpg"alt="10" heigth ="100px" width="400px" ></center>
        </head>
        </html>
        <?php
        echo "<p style=background:#00FF00; align=center <br/><b><font size=30 color=#0000FF>Produtos Inativados Com Sucesso  em: '$dia' , '$time'  </font></b></p>";
        ?>
        <!DOCTYPE html>
		<html>
		<head>    
		<link rel="stylesheet" href="css/style.css"></link>
		<center><img src=img/okk.jpg alt="400" heigth ="400px" width="300px" ></center>
		<center><form name = "form1" method= "post" action= "login.php"></center>
		<center><input class="btn btn-red"  type="submit" name="inativar" value="Voltar"></center>
		</form>
		</head>
		</html>
		<?php
        exit;
    }
    if ($inativarl == '4'){
        $conex=pg_connect ('host=192.168.11.2 dbname=troll port=5430 user=postgres password=ky$14gr@');
        $com=pg_query("select logar('COPIA',1,0);update aprodutos set csitproduto= '1' where csitproduto = 0 and clinproduto = 25");
        if (!$com){
            pg_close($conex);
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
        pg_close($conex);
        ?>
        <!DOCTYPE html>
        <html>
        <head>
        <link rel="stylesheet" href="css/style.css"></link>
        <center><img src="img/fundo1.jpg"alt="10" heigth ="100px" width="400px" ></center>
        </head>
        </html>
        <?php
        echo "<p style=background:#00FF00; align=center <br/><b><font size=30 color=#0000FF>Produtos Inativados Com Sucesso  em: '$dia' , '$time'  </font></b></p>";
        ?>
        <!DOCTYPE html>
		<html>
		<head>    
		<link rel="stylesheet" href="css/style.css"></link>
		<center><img src=img/okk.jpg alt="400" heigth ="400px" width="300px" ></center>
		<center><form name = "form1" method= "post" action= "login.php"></center>
		<center><input class="btn btn-red"  type="submit" name="inativar" value="Voltar"></center>
		</form>
		</head>
		</html>
		<?php
        exit;        
    }
    exit;
}
if ($inativar == 'Inclui'){
    $parcela = $_POST['Parcela'];
    $codigocliente = $_POST['Codigo'];
    if ($codigocliente == ''){
        echo '<script>window.alert(\'Código do cliente não pode ser em branco \');</script>';
        echo "$voltalogin";
        exit;
    }
    if ($codigocliente <= 0 ){
        echo "<script>alert('Código de cliente não poder ser negativo ou igual a zero');</script>";
        echo "$voltalogin";
        exit;
    }
    $nfe= $_POST['ClientNfe'];
    if ($nfe== ''){
        echo "<script>alert('Por favor insira o Nº da Nfe');</script>";
        echo "$voltalogin";
        exit;
    }
    if ($nfe <= 0 ){
        echo "<script>alert('Numero de NFE não pode ser negativo ou igual a zero');</script>";
        echo "$voltalogin";
        exit;
    }
    $vencimento=$_POST['Vencimento'];
    if ($vencimento == ''){
        echo "<script>alert('A data de vencimento hé obrigatória');</script>";
        echo "$voltalogin";
        exit;
    }
    if ($parcela == '1'){
        $conex=pg_connect ('host=192.168.16.2 dbname=troll port=5430 user=postgres password=ky$14gr@');
        $com=pg_query ("delete from asduplicatas2;select cidedupli from asduplicatas where cnotdupli = '$nfe' and cclidupli= '$codigocliente'");
        if (!$com){
            pg_close($conex);
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
        $resulcomandoparcela= pg_fetch_array($com);
        $cidecupli=$resulcomandoparcela['cidedupli'];
        if ($resulcomandoparcela == '' ){
            pg_close($conex);
            echo $mensagemnfecliente;
            echo $voltalogin;
            exit;
        }
        $com=pg_query("insert into asduplicatas2 select *from asduplicatas where cidedupli = '$cidecupli';update asduplicatas2 set cidedupli = nextval('seque_asduplicatas'), cvprdupli= 0.01, cvendupli= '$vencimento',cjurdupli= '0.00',ccjudupli='0.00',cmuldupli='0.00',ccordupli='0.00',cdesdupli='0.00',cdpadupli=NULL,cvpadupli='0.00',ctpgdupli='',i_asd_ide_trans_fin=0;
        select logar('COPIA',1,0);insert into asduplicatas select *from asduplicatas2;delete from asduplicatas2");   
        if (!$com){
            pg_close($conex);
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
        pg_close($conex);
        ?>
        <!DOCTYPE html>
        <html>
        <head>
        <link rel="stylesheet" href="css/style.css"></link>
        <center><img src="img/fundo1.jpg"alt="10" heigth ="100px" width="400px" ></center>
        </head>
        </html>
        <?php
        echo "<p style=background:#00FF00; align=center <br/><b><font size=30 color=#0000FF>Parcela Incluida Com Sucesso  em: '$dia' , '$time'  </font></b></p>";
        ?>
        <!DOCTYPE html>
		<html>
		<head>    
		<link rel="stylesheet" href="css/style.css"></link>
		<center><img src=img/okk.jpg alt="400" heigth ="400px" width="300px" ></center>
		<center><form name = "form1" method= "post" action= "login.php"></center>
		<center><input class="btn btn-red"  type="submit" name="inativar" value="Voltar"></center>
		</form>
		</head>
		</html>
		<?php        
        exit;
    }
    if ($parcela == '2'){
        $conex=pg_connect ('host=192.168.10.99 dbname=troll port=5433 user=postgres password=ky$14gr@');
        $com=pg_query ("delete from asduplicatas2;select cidedupli from asduplicatas where cnotdupli = '$nfe' and cclidupli= '$codigocliente'");
        if (!$com){
            pg_close($conex);
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
        $resulcomandoparcela= pg_fetch_array($com);
        $cidecupli=$resulcomandoparcela['cidedupli'];
        if ($resulcomandoparcela == '' ){
            echo $mensagemnfecliente;
            pg_close($conex);
            exit;
        }
        $com=pg_query("insert into asduplicatas2 select *from asduplicatas where cidedupli = '$cidecupli';update asduplicatas2 set cidedupli = nextval('seque_asduplicatas'), cvprdupli= 0.01, cvendupli= '$vencimento',cjurdupli= '0.00',ccjudupli='0.00',cmuldupli='0.00',ccordupli='0.00',cdesdupli='0.00',cdpadupli=NULL,cvpadupli='0.00',ctpgdupli='',i_asd_ide_trans_fin=0;
        select logar('COPIA',1,0);insert into asduplicatas select *from asduplicatas2;delete from asduplicatas2");
        if (!$com){
            pg_close($conex);
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
        pg_close($conex);
        ?>
        <!DOCTYPE html>
        <html>
        <head>
        <link rel="stylesheet" href="css/style.css"></link>
        <center><img src="img/fundo1.jpg"alt="10" heigth ="100px" width="400px" ></center>
        </head>
        </html>
        <?php
        echo "<p style=background:#00FF00; align=center <br/><b><font size=30 color=#0000FF>Parcela Incluida Com Sucesso  em: '$dia' , '$time'  </font></b></p>";
        ?>
        <!DOCTYPE html>
		<html>
		<head>    
		<link rel="stylesheet" href="css/style.css"></link>
		<center><img src=img/okk.jpg alt="400" heigth ="400px" width="300px" ></center>
		<center><form name = "form1" method= "post" action= "login.php"></center>
		<center><input class="btn btn-red"  type="submit" name="inativar" value="Voltar"></center>
		</form>
		</head>
		</html>
		<?php 
		exit;
    }
    if ($parcela == '3'){
        $conex=pg_connect ('host=192.168.12.3 dbname=troll port=5434 user=postgres password=ky$14gr@');
        $com=pg_query ("delete from asduplicatas2;select cidedupli from asduplicatas where cnotdupli = '$nfe' and cclidupli= '$codigocliente'");
        if (!$com){
            pg_close($conex);
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
        $resulcomandoparcela= pg_fetch_array($com);
        $cidecupli=$resulcomandoparcela['cidedupli'];
        if ($resulcomandoparcela == '' ){
            pg_close($conex);
            echo $mensagemnfecliente;
            echo $voltalogin;            
            exit;
        }
        $com=pg_query("insert into asduplicatas2 select *from asduplicatas where cidedupli = '$cidecupli';update asduplicatas2 set cidedupli = nextval('seque_asduplicatas'), cvprdupli= 0.01, cvendupli= '$vencimento',cjurdupli= '0.00',ccjudupli='0.00',cmuldupli='0.00',ccordupli='0.00',cdesdupli='0.00',cdpadupli=NULL,cvpadupli='0.00',ctpgdupli='',i_asd_ide_trans_fin=0;
        select logar('COPIA',1,0);insert into asduplicatas select *from asduplicatas2;delete from asduplicatas2");
        if (!$com){
            pg_close($conex);
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
        pg_close($conex);
        ?>
        <!DOCTYPE html>
        <html>
        <head>
        <link rel="stylesheet" href="css/style.css"></link>
        <center><img src="img/fundo1.jpg"alt="10" heigth ="100px" width="400px" ></center>
        </head>
        </html>
        <?php
        echo "<p style=background:#00FF00; align=center <br/><b><font size=30 color=#0000FF>Parcela Incluida Com Sucesso  em: '$dia' , '$time'  </font></b></p>";
        ?>
        <!DOCTYPE html>
		<html>
		<head>    
		<link rel="stylesheet" href="css/style.css"></link>
		<center><img src=img/okk.jpg alt="400" heigth ="400px" width="300px" ></center>
		<center><form name = "form1" method= "post" action= "login.php"></center>
		<center><input class="btn btn-red"  type="submit" name="inativar" value="Voltar"></center>
		</form>
		</head>
		</html>
		<?php  
		exit;
    }
    if ($parcela == '4'){
        $conex=pg_connect ('host=192.168.11.2 dbname=troll port=5430 user=postgres password=ky$14gr@');
        $com=pg_query ("delete from asduplicatas2;select cidedupli from asduplicatas where cnotdupli = '$nfe' and cclidupli= '$codigocliente'");
        if (!$com){
            pg_close($conex);
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
        $resulcomandoparcela= pg_fetch_array($com);
        $cidecupli=$resulcomandoparcela['cidedupli'];
        if ($resulcomandoparcela == '' ){
            pg_close($conex);
            echo $mensagemnfecliente;
            echo $voltalogin;
            exit;
        }
        $com=pg_query("insert into asduplicatas2 select *from asduplicatas where cidedupli = '$cidecupli';
        update asduplicatas2 set cidedupli = nextval('seque_asduplicatas'), cvprdupli= 0.01, cvendupli= '$vencimento',cjurdupli= '0.00',ccjudupli='0.00',cmuldupli='0.00',ccordupli='0.00',cdesdupli='0.00',cdpadupli=NULL,cvpadupli='0.00',ctpgdupli='',i_asd_ide_trans_fin=0;
        select logar('COPIA',1,0);insert into asduplicatas select *from asduplicatas2;delete from asduplicatas2");
        pg_close($conex);        
        ?>
        <!DOCTYPE html>
        <html>
        <head>
        <link rel="stylesheet" href="css/style.css"></link>
        <center><img src="img/fundo1.jpg"alt="10" heigth ="100px" width="400px" ></center>
        </head>
        </html>
        <?php
        echo "<p style=background:#00FF00; align=center <br/><b><font size=30 color=#0000FF>Parcela Incluida Com Sucesso  em: '$dia' , '$time'  </font></b></p>";
        ?>
        <!DOCTYPE html>
		<html>
		<head>    
		<link rel="stylesheet" href="css/style.css"></link>
		<center><img src=img/okk.jpg alt="400" heigth ="400px" width="300px" ></center>
		<center><form name = "form1" method= "post" action= "login.php"></center>
		<center><input class="btn btn-red"  type="submit" name="inativar" value="Voltar"></center>
		</form>
		</head>
		</html>
		<?php 
        exit;
    }    
}
$com=pg_query($conexaosp,"delete from ahistorico2;delete from aprodutosp");
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
$com=pg_query($conexaoc,"delete from ahistorico2;delete from aprodutosp;select logar('COPIA',1,0);
update pedidos set i_pdi_codigo_emp = '2' where i_pdi_codigo_emp = '1' AND i_pdi_status = 0;update pedidos set i_pdi_codigo_emp = '4' where i_pdi_codigo_emp = '3' AND i_pdi_status = 0;
update pedidos set i_pdi_codigo_emp = '6' where i_pdi_codigo_emp = '5' AND i_pdi_status = 0;update pedidos set i_pdi_codigo_emp = '8' where i_pdi_codigo_emp = '7' AND i_pdi_status = 0;
update pedidos set i_pdi_codigo_emp = '10' where i_pdi_codigo_emp = '9' AND i_pdi_status = 0;update pedidos set i_pdi_codigo_emp = '12' where i_pdi_codigo_emp = '11' AND i_pdi_status = 0;
update pedidos set i_pdi_codigo_emp = '14' where i_pdi_codigo_emp = '13' AND i_pdi_status = 0;update pedidos set i_pdi_codigo_emp = '16' where i_pdi_codigo_emp = '15' AND i_pdi_status = 0;delete from aprodutosl");
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
$com=pg_query($conexaov,"delete from ahistorico2;select logar('COPIA',1,0);update pedidos set i_pdi_codigo_emp = '14' where i_pdi_codigo_emp = '13' AND i_pdi_status = 0;
update pedidos set i_pdi_codigo_emp = '16' where i_pdi_codigo_emp = '15' AND i_pdi_status = 0");
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
$com=pg_query($conexaol,"delete from ahistorico2;");
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
$com=pg_query($conexaoj,"delete from ahistorico2;select logar('REPLICADOR',1,0);
update pedidos set i_pdi_codigo_emp = '2' where i_pdi_codigo_emp = '1' AND i_pdi_status = 0");
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
$transferencia=$_POST['transferencia'];
if ($transferencia == '' or $transferencia == '0' ){    
    echo "<script>alert('Código da tranferencia não pode ser vazio ou igual a zero');</script>";
    echo $voltalogin;
    exit;
}
if ($transferencia < '0'){    
    echo "<script>alert('Código de tranferência não pode ser negativo');</script>";
    echo $voltalogin;
}
$login=$_POST['login'];
$login=strtoupper($login);
$senha=$_POST['senha'];
$senha=strtoupper($senha);
$numeronfe=$_POST['numeronfe'];
$clientnfe=$_POST['clientenfe'];
$datanfe=$_POST['datanfe'];
date_default_timezone_set('America/Sao_Paulo');
$time=date('H:i:s');
$dia= date('Y-m-d');
if ($login == ''){    
    echo "<script>alert('Login não pode ser em Branco');</script>";
    echo $voltalogin;
    exit;
}
if ($senha == ''){    
    echo "<script>alert('Senha não pode ser em Branco ');</script>";
    echo $voltalogin;
    exit;
}
if ($numeronfe == ''){    
    echo "<script>alert('Numero Da Nfe não pode ser vazio');</script>";
    echo "$voltalogin";
    exit;
}
if($numeronfe == '0'){   
    echo "<span style='color:red;'>Numero da Nfe não pode ser igual zero </span>";
    exit;
}
if($numeronfe < '0'){    
    echo "<script>alert('Numero da Nfe não pode ser negativo');</script>";
    echo $voltalogin;
    exit;
}
if ($clientnfe == ''){    
    echo "<script>alert('Código do cliente não pode ser vazio');</script>";
    echo $voltalogin;
    exit;
}
if ($clientnfe == '0'){    
    echo "<script>alert('Código do cliente não pode ser igual a zero');</script>";
    echo $voltalogin;
    exit;
}
if ($clientnfe < '0'){
    echo "<script>alert('Código do cliente não pode ser negativo');</script>";
    echo $voltalogin;
    exit;
}
if ($datanfe == '' ){    
    echo "<script>alert('Data da Nfe não poder ser em branco');</script>";
    echo $voltalogin;
    exit;
}
if ( $datanfe> $dia ){    
    echo"<script>alert('Não hé permitido lancar Nfe com data futura');</script>|";
    echo $voltalogin;
    exit;
}
if ($transferencia == 1){
    $comandosenha= "select cnomope from parametros where cnomope= '$login'";
    $excomandosenha= pg_query($conexaoc,$comandosenha);
    $resulcomandosenha= pg_fetch_array($excomandosenha);
    if ($resulcomandosenha== '' ){        
        echo $errologin;
        echo $voltalogin;
        exit;
    }
    $query="select cnomope,csenhausuario from parametros where cnomope= '$login' and csenhausuario='$senha'";
    $selecao=pg_query($conexaoc,$query);
    $resut= pg_fetch_array($selecao);
    if ($resut == ''){       
        echo "$errosenha";
        echo "$voltalogin";
        exit;
    }
    echo $mensagemlogin;
    $comandosaidas="select cidesaidas,cempresasaidas,cnpj_saidas,ctotsaidas from asaidas where cemisaidas = '$datanfe' and cclisaidas = '$clientnfe' and cnotsaidas = '$numeronfe'";
    $selecaosaidas=pg_query($conexaoc,$comandosaidas);
    $cisahistorico=pg_fetch_array($selecaosaidas);
    $cnpjempressadestino= $cisahistorico['cnpj_saidas'];
    $idehistorico=$cisahistorico ['cidesaidas'];
    $ideempresa=$cisahistorico ['cempresasaidas'];
    $totalsaidas=$cisahistorico ['ctotsaidas'];
    if($cisahistorico == '' or $cnpjempressadestino == '' ){       
        echo "<script>alert('Numero nota, cliente ou data invalidos por favor tente novamente ');</script>";
        echo $voltalogin;
        exit;
    }
    pg_query($conexaoc,"insert into ahistorico2 select * from ahistorico where cisahistorico = '$idehistorico'" );
    $comandocontador = "SELECT COUNT(*) FROM ahistorico2";
    $conta = pg_query($conexaoc,$comandocontador);
    $tottal=pg_fetch_array($conta);
    $total=$tottal ['count'];
    $comando="select *from ahistorico2";
    $excomando=pg_query($conexaoc,$comando);
    while($row = pg_fetch_assoc( $excomando)){
        $cidehistorico=$row['cidehistorico'];$cienhistorico=$row['cienhistorico'];$cisahistorico=$row['cisahistorico'];
        $cipehistorico=$row['cipehistorico'];$ctiphistorico=$row['ctiphistorico'];$cmothistorico=$row['cmothistorico'];
        $cprohistorico=$row['cprohistorico'];$cemihistorico=$row['cemihistorico'];$cvcohistorico=$row['cvcohistorico'];
        $cvcuhistorico=$row['cvcuhistorico'];$cvbrhistorico=$row['cvbrhistorico'];$cvlqhistorico=$row['cvlqhistorico'];
        $cvdeshistorico=$row['cvdeshistorico'];$cvfrehistorico=$row['cvfrehistorico'];$cvachistorico=$row['cvachistorico'];
        $cvichistorico=$row['cvichistorico'];$cviphistorico=$row['cviphistorico'];$cvishistorico=$row['cvishistorico'];
        $cvfihistorico=$row['cvfihistorico'];$cvtothistorico=$row['cvtothistorico'];$cdeshistorico=$row['cdeshistorico'];
        $ccfohistorico=$row['ccfohistorico'];$csaihisotorico=$row['csaihisotorico'];$centhistorico=$row['centhistorico'];
        $cforhistorico=$row['cforhistorico'];$cclihistorico=$row['cclihistorico'];$cicmhistorico=$row['cicmhistorico'];
        $cipihistorico=$row['cipihistorico'];$cisshistorico=$row['cisshistorico'];$cluchistorico=$row['cluchistorico'];
        $cpdehistorico=$row['cpdehistorico'];$cpfrhistorico=$row['cpfrhistorico'];$cpachistorico=$row['cpachistorico'];
        $cpfihistorico=$row['cpfihistorico'];$cpcohistorico=$row['cpcohistorico'];$cvohistorico=$row['cvohistorico'];
        $ctipphistorico=$row['ctipphistorico'];$cdtcahistorico=$row['cdtcahistorico'];$chocahistorico=$row['chocahistorico'];
        $cuscadhistorico=$row['cuscadhistorico'];$copcadhistorico=$row['copcadhistorico'];$cdtatuhistorico=$row['cdtatuhistorico'];
        $choatuhistorico=$row['choatuhistorico']; $copatuhistorico=$row['copatuhistorico'];
        $cusatuhistorico=$row['cusatuhistorico'];$cemphistorico=$row['cemphistorico'];$cvarealhistorico=$row['cvarealhistorico'];$cbaiesthistorico=$row['cbaiesthistorico'];
        $fot_historico=$row['fot_historico'];$dep_historico=$row['dep_historico'];$valor_foto=$row['valor_foto']; $perc_cus_ope=$row['perc_cus_ope'];
        if ($perc_cus_ope=='') {
            $perc_cus_ope='NULL';
        }
        $val_cus_ope=$row['val_cus_ope'];$perc_imp_venda=$row['perc_imp_venda'];$val_imp_venda=$row['val_imp_venda'];$prec_mim_produto=$row['prec_mim_produto'];
        $i_ahi_codigo_cat=$row['i_ahi_codigo_cat'];$i_ahi_codigo_sct=$row['i_ahi_codigo_sct'];$i_ahi_codigo_ven=$row['i_ahi_codigo_ven'];$n_ahi_valor_custo_venda=$row['n_ahi_valor_custo_venda'];
        $n_ahi_perc_custo_venda=$row['n_ahi_perc_custo_venda'];$n_ahi_perc_reducao=$row['n_ahi_perc_reducao'];
        $n_ahi_valor_icms_formacao_preco=$row['n_ahi_valor_icms_formacao_preco'];$n_ahi_perc_icms_formacao_preco=$row['n_ahi_perc_icms_formacao_preco'];
        $n_ahi_valor_lucro_zero=$row['n_ahi_valor_lucro_zero'];$n_ahi_valor_lucro=$row['n_ahi_valor_lucro'];$n_ahi_custo_medio=$row['n_ahi_custo_medio'];
        $n_ahi_preco_padrao=$row['n_ahi_preco_padrao']; $n_ahi_perc_fun_rural=$row['n_ahi_perc_fun_rural'];$n_ahi_valor_fun_rural=$row['n_ahi_valor_fun_rural'];
        $i_ahi_cultura_aplicar=$row['i_ahi_cultura_aplicar'];$i_ahi_receita_ide=$row['i_ahi_receita_ide'];$n_ahi_base_icms=$row['n_ahi_base_icms'];
        $n_ahi_base_substituicao=$row['n_ahi_base_substituicao'];$n_ahi_icms_substituicao=$row['n_ahi_icms_substituicao'];$i_ahi_seq_ordem_item=$row['i_ahi_seq_ordem_item'];
        $s_ahi_cfop_contabil=$row['s_ahi_cfop_contabil'];$i_ahi_clas_fical=$row['i_ahi_clas_fical'];$s_ahi_sit_tributaria=$row['s_ahi_sit_tributaria'];$n_ahi_per_icms_subs=$row['n_ahi_per_icms_subs'];
        $n_ahi_per_conv_subst=$row['n_ahi_per_conv_subst'];$i_ahi_codigo_fprc=$row['i_ahi_codigo_fprc'];$i_ahi_codigo_feve=$row['i_ahi_codigo_feve'];
        $i_ahi_ide_pedido=$row['i_ahi_ide_pedido'];$i_ahi_codigo_parceria=$row['i_ahi_codigo_parceria'];$i_ahi_ide_historico_pedido=$row['i_ahi_ide_historico_pedido'];
        $n_ahi_qtd_entregue_pedido=$row['n_ahi_qtd_entregue_pedido'];$i_ahi_ide_ahi=$row['i_ahi_ide_ahi'];$i_ahi_saldo_produto=$row['i_ahi_saldo_produto'];
        $i_ahi_ide_romaneio=$row['i_ahi_ide_romaneio'];$s_ahi_obs_item=$row['s_ahi_obs_item'];$i_ahi_cod_produto_cli_acl=$row['i_ahi_cod_produto_cli_acl'];
        $n_ahi_valor_desconto_nota=$row['n_ahi_valor_desconto_nota'];$n_ahi_perc_desconto_item=$row['n_ahi_perc_desconto_item'];$i_ahi_codigo_tcb=$row['i_ahi_codigo_tcb'];
        $n_ahi_perc_desc_nota=$row['n_ahi_perc_desc_nota'];$n_ahi_valor_tot_item=$row['n_ahi_valor_tot_item'];$n_ahi_valor_tot_nota=$row['n_ahi_valor_tot_nota'];$n_ahi_valor_desc_item=$row['n_ahi_valor_desc_item'];$n_ahi_valor_pis=$row['n_ahi_valor_pis'];
        $n_ahi_valor_cofins=$row['n_ahi_valor_cofins'];$i_ahi_codigo_aor=$row['i_ahi_codigo_aor'];$s_ahi_complemento_impresso=$row['s_ahi_complemento_impresso'];$s_ahi_garantia_prod=$row['s_ahi_garantia_prod'];$i_ahi_codigo_aor_indice=$row['i_ahi_codigo_aor_indice'];$i_ahi_codigo_ahi_indice=$row['i_ahi_codigo_ahi_indice'];
        $i_ahi_codigo_orp=$row['i_ahi_codigo_orp'];$s_ahi_cst_ipi=$row['s_ahi_cst_ipi'];$s_ahi_cst_pis=$row['s_ahi_cst_pis'];$s_ahi_cst_cofins=$row['s_ahi_cst_cofins'];$n_ahi_base_cofins=$row['n_ahi_base_cofins'];$n_ahi_base_pis=$row['n_ahi_base_pis'];$n_ahi_base_ipi=$row['n_ahi_base_ipi'];$n_ahi_aliquota_pis=$row['n_ahi_aliquota_pis'];
        $n_ahi_aliquota_cofins=$row['n_ahi_aliquota_cofins'];$s_ahi_indicacao_movimento=$row['s_ahi_indicacao_movimento'];$n_ahi_aliquota_st=$row['n_ahi_aliquota_st'];$s_ahi_apuracao_ipi=$row['s_ahi_apuracao_ipi'];$s_ahi_cod_enquadramento_ipi=$row['s_ahi_cod_enquadramento_ipi'];$n_ahi_qtd_base_pis=$row['n_ahi_qtd_base_pis'];$n_ahi_aliq_pis_reais=$row['n_ahi_aliq_pis_reais'];
        $n_ahi_qtde_base_cofins=$row['n_ahi_qtde_base_cofins'];$n_ahi_aliq_cofins_reais=$row['n_ahi_aliq_cofins_reais'];$i_ahi_csosn=$row['i_ahi_csosn'];$i_ahi_numero_adicao=$row['i_ahi_numero_adicao'];$i_ahi_num_seq_item_adicao=$row['i_ahi_num_seq_item_adicao'];$s_ahi_cod_fabri_estrangeiro=$row['s_ahi_cod_fabri_estrangeiro'];$n_ahi_valor_desc_item_di=$row['n_ahi_valor_desc_item_di'];
        $n_ahi_valor_red_icms=$row['n_ahi_valor_red_icms'];$n_ahi_seguro_item=$row['n_ahi_seguro_item'];$s_ahi_totalizador_parcial=$row['s_ahi_totalizador_parcial'];$n_ahi_perc_seguro=$row['n_ahi_perc_seguro'];$i_ahi_csosn_xml=$row['i_ahi_csosn_xml'];$s_ahi_sit_tributaria_xml=$row['s_ahi_sit_tributaria_xml'];$n_ahi_base_ii=$row['n_ahi_base_ii'];$n_ahi_valor_ii=$row['n_ahi_valor_ii'];$n_ahi_aliquota_ii=$row['n_ahi_aliquota_ii'];
        $n_ahi_base_icms_xml=$row['n_ahi_base_icms_xml'];$n_ahi_aliq_icms_xml=$row['n_ahi_aliq_icms_xml'];$n_ahi_valor_icms_xml=$row['n_ahi_valor_icms_xml'];$n_ahi_base_st_xml=$row['n_ahi_base_st_xml'];$n_ahi_valor_st_xml=$row['n_ahi_valor_st_xml'];$n_ahi_valor_acrescimo_item=$row['n_ahi_valor_acrescimo_item'];$s_ahi_cst_pis_xml=$row['s_ahi_cst_pis_xml'];$s_ahi_cst_cofins_xml=$row['s_ahi_cst_cofins_xml'];$n_ahi_base_cofins_xml=$row['n_ahi_base_cofins_xml'];
        $n_ahi_base_pis_xml=$row['n_ahi_base_pis_xml'];$n_ahi_valor_pis_xml=$row['n_ahi_valor_pis_xml'];$n_ahi_valor_cofins_xml=$row['n_ahi_valor_cofins_xml'];$s_ahi_operacao=$row['s_ahi_operacao'];$i_ahi_codigo_cna=$row['i_ahi_codigo_cna'];$s_ahi_codigo_lei116=$row['s_ahi_codigo_lei116'];$n_ahi_desp_aduaneiras=$row['n_ahi_desp_aduaneiras'];$i_ahi_codigo_frem=$row['i_ahi_codigo_frem'];$i_ahi_codigo_fpro=$row['i_ahi_codigo_fpro'];$n_ahi_tot_impostos=$row['n_ahi_tot_impostos'];
        $n_ahi_qtde_devolvido=$row['n_ahi_qtde_devolvido'];$n_ahi_perc_red_icms_st=$row['n_ahi_perc_red_icms_st'];$n_ahi_vlr_red_base_icms_st=$row['n_ahi_vlr_red_base_icms_st'];$i_ahi_cod_devolucao=$row['i_ahi_cod_devolucao'];$s_ahi_chave_fci=$row['s_ahi_chave_fci'];$n_ahi_mva_xml=$row['n_ahi_mva_xml'];$i_ahi_ide_entregue=$row['i_ahi_ide_entregue'];$i_ahi_uso_cosumo=$row['i_ahi_uso_cosumo'];$n_ahi_perc_diferimento=$row['n_ahi_perc_diferimento'];$s_ahi_codigo_ser_mun=$row['s_ahi_codigo_ser_mun'];
        $i_ahi_valor_imposto_diferido=$row['i_ahi_valor_imposto_diferido'];$s_ahi_pedido_compra_nfe=$row['s_ahi_pedido_compra_nfe'];$i_ahi_item_ped_compra_nfe=$row['i_ahi_item_ped_compra_nfe'];$s_ahi_cest=$row['s_ahi_cest'];$n_ahi_perc_ipi_devol=$row['n_ahi_perc_ipi_devol'];$n_ahi_valor_ipi_devol=$row['n_ahi_valor_ipi_devol'];
        pg_query($conexaov,"INSERT INTO ahistorico2(cidehistorico, cienhistorico, cisahistorico, cipehistorico, ctiphistorico,cmothistorico, cprohistorico, cemihistorico, cvcohistorico, cvcuhistorico,cvbrhistorico, cvlqhistorico, cvdeshistorico, cvfrehistorico, 
        cvachistorico, cvichistorico, cviphistorico, cvishistorico, cvfihistorico,cvtothistorico, cdeshistorico, ccfohistorico, csaihisotorico,centhistorico, cforhistorico, cclihistorico, cicmhistorico, cipihistorico,cisshistorico, cluchistorico, cpdehistorico, cpfrhistorico, cpachistorico,cpfihistorico, cpcohistorico, cvohistorico, ctipphistorico, cdtcahistorico,chocahistorico, cuscadhistorico, copcadhistorico, cdtatuhistorico,choatuhistorico, copatuhistorico, cusatuhistorico, cemphistorico, 
        cvarealhistorico, cbaiesthistorico, fot_historico, dep_historico,valor_foto, perc_cus_ope, val_cus_ope, perc_imp_venda, val_imp_venda,prec_mim_produto, i_ahi_codigo_cat, i_ahi_codigo_sct, i_ahi_codigo_ven,n_ahi_valor_custo_venda, n_ahi_perc_custo_venda, n_ahi_perc_reducao,n_ahi_valor_icms_formacao_preco, n_ahi_perc_icms_formacao_preco,n_ahi_valor_lucro_zero, n_ahi_valor_lucro, n_ahi_custo_medio,n_ahi_preco_padrao, n_ahi_perc_fun_rural, n_ahi_valor_fun_rural,i_ahi_cultura_aplicar, i_ahi_receita_ide, n_ahi_base_icms, n_ahi_base_substituicao,n_ahi_icms_substituicao, i_ahi_seq_ordem_item, s_ahi_cfop_contabil, 
        i_ahi_clas_fical, s_ahi_sit_tributaria, n_ahi_per_icms_subs,n_ahi_per_conv_subst, i_ahi_codigo_fprc, i_ahi_codigo_feve, i_ahi_ide_pedido,i_ahi_codigo_parceria, i_ahi_ide_historico_pedido, n_ahi_qtd_entregue_pedido,i_ahi_ide_ahi, i_ahi_saldo_produto, i_ahi_ide_romaneio, s_ahi_obs_item,i_ahi_cod_produto_cli_acl, n_ahi_valor_desconto_nota, n_ahi_perc_desconto_item,i_ahi_codigo_tcb, n_ahi_perc_desc_nota, n_ahi_valor_tot_item,n_ahi_valor_tot_nota, n_ahi_valor_desc_item, n_ahi_valor_pis,n_ahi_valor_cofins, i_ahi_codigo_aor, s_ahi_complemento_impresso,s_ahi_garantia_prod, i_ahi_codigo_aor_indice, i_ahi_codigo_ahi_indice, 
        i_ahi_codigo_orp, s_ahi_cst_ipi, s_ahi_cst_pis, s_ahi_cst_cofins,n_ahi_base_cofins, n_ahi_base_pis, n_ahi_base_ipi, n_ahi_aliquota_pis,n_ahi_aliquota_cofins, s_ahi_indicacao_movimento, n_ahi_aliquota_st,s_ahi_apuracao_ipi, s_ahi_cod_enquadramento_ipi, n_ahi_qtd_base_pis,n_ahi_aliq_pis_reais, n_ahi_qtde_base_cofins, n_ahi_aliq_cofins_reais,i_ahi_csosn, i_ahi_numero_adicao, i_ahi_num_seq_item_adicao,s_ahi_cod_fabri_estrangeiro, n_ahi_valor_desc_item_di, n_ahi_valor_red_icms,n_ahi_seguro_item, s_ahi_totalizador_parcial, n_ahi_perc_seguro,i_ahi_csosn_xml, s_ahi_sit_tributaria_xml, n_ahi_base_ii, n_ahi_valor_ii,n_ahi_aliquota_ii, n_ahi_base_icms_xml, n_ahi_aliq_icms_xml, 
        n_ahi_valor_icms_xml, n_ahi_base_st_xml, n_ahi_valor_st_xml,n_ahi_valor_acrescimo_item, s_ahi_cst_pis_xml, s_ahi_cst_cofins_xml,n_ahi_base_cofins_xml, n_ahi_base_pis_xml, n_ahi_valor_pis_xml,n_ahi_valor_cofins_xml, s_ahi_operacao, i_ahi_codigo_cna, s_ahi_codigo_lei116,n_ahi_desp_aduaneiras, i_ahi_codigo_frem, i_ahi_codigo_fpro,n_ahi_tot_impostos, n_ahi_qtde_devolvido, n_ahi_perc_red_icms_st,n_ahi_vlr_red_base_icms_st, i_ahi_cod_devolucao, s_ahi_chave_fci,n_ahi_mva_xml, i_ahi_ide_entregue, i_ahi_uso_cosumo, n_ahi_perc_diferimento,s_ahi_codigo_ser_mun, i_ahi_valor_imposto_diferido, s_ahi_pedido_compra_nfe,i_ahi_item_ped_compra_nfe, s_ahi_cest, n_ahi_perc_ipi_devol,n_ahi_valor_ipi_devol)
        VALUES ('$cidehistorico',NULL,'$cisahistorico','$cipehistorico','$ctiphistorico','$cmothistorico','$cprohistorico','$cemihistorico','$cvcohistorico','$cvcuhistorico','$cvbrhistorico','$cvlqhistorico','$cvdeshistorico','$cvfrehistorico','$cvachistorico','$cvichistorico','$cviphistorico','$cvishistorico','$cvfihistorico','$cvtothistorico','$cdeshistorico','$ccfohistorico','$csaihisotorico','$centhistorico',NULL,'$cclihistorico','$cicmhistorico','$cipihistorico','$cisshistorico','$cluchistorico','$cpdehistorico','$cpfrhistorico','$cpachistorico','$cpfihistorico','$cpcohistorico','$cvohistorico','$ctipphistorico','$cdtcahistorico','$chocahistorico','$cuscadhistorico',
        '$copcadhistorico',NULL,NULL,$copatuhistorico,'$cusatuhistorico','$cemphistorico','$cvarealhistorico','$cbaiesthistorico','$fot_historico','$dep_historico','$valor_foto','$perc_cus_ope','$val_cus_ope','$perc_imp_venda','$val_imp_venda','$prec_mim_produto','$i_ahi_codigo_cat','$i_ahi_codigo_sct','$i_ahi_codigo_ven','$n_ahi_valor_custo_venda','$n_ahi_perc_custo_venda','$n_ahi_perc_reducao','$n_ahi_valor_icms_formacao_preco','$n_ahi_perc_icms_formacao_preco','$n_ahi_valor_lucro_zero','$n_ahi_valor_lucro','$n_ahi_custo_medio','$n_ahi_preco_padrao','$n_ahi_perc_fun_rural','$n_ahi_valor_fun_rural','$i_ahi_cultura_aplicar','$i_ahi_receita_ide','$n_ahi_base_icms',
        '$n_ahi_base_substituicao','$n_ahi_icms_substituicao','$i_ahi_seq_ordem_item','$s_ahi_cfop_contabil','$i_ahi_clas_fical','$s_ahi_sit_tributaria','$n_ahi_per_icms_subs','$n_ahi_per_conv_subst',NULL,NULL,NULL,'$i_ahi_codigo_parceria','$i_ahi_ide_historico_pedido','$n_ahi_qtd_entregue_pedido','$i_ahi_ide_ahi',NULL,'$i_ahi_ide_romaneio','$s_ahi_obs_item','$i_ahi_cod_produto_cli_acl','$n_ahi_valor_desconto_nota','$n_ahi_perc_desconto_item','$i_ahi_codigo_tcb','$n_ahi_perc_desc_nota','$n_ahi_valor_tot_item','$n_ahi_valor_tot_nota','$n_ahi_valor_desc_item','$n_ahi_valor_pis','$n_ahi_valor_cofins','$i_ahi_codigo_aor','$s_ahi_complemento_impresso','$s_ahi_garantia_prod',NULL,NULL,NULL,'$s_ahi_cst_ipi',
        '$s_ahi_cst_pis','$s_ahi_cst_cofins','$n_ahi_base_cofins','$n_ahi_base_pis','$n_ahi_base_ipi','$n_ahi_aliquota_pis','$n_ahi_aliquota_cofins','$s_ahi_indicacao_movimento','$n_ahi_aliquota_st','$s_ahi_apuracao_ipi','$s_ahi_cod_enquadramento_ipi','$n_ahi_qtd_base_pis','$n_ahi_aliq_pis_reais','$n_ahi_qtde_base_cofins','$n_ahi_aliq_cofins_reais','$i_ahi_csosn','$i_ahi_numero_adicao','$i_ahi_num_seq_item_adicao','$s_ahi_cod_fabri_estrangeiro','$n_ahi_valor_desc_item_di','$n_ahi_valor_red_icms','$n_ahi_seguro_item','$s_ahi_totalizador_parcial','$n_ahi_perc_seguro',NULL,'$s_ahi_sit_tributaria_xml','$n_ahi_base_ii','$n_ahi_valor_ii','$n_ahi_aliquota_ii','$n_ahi_base_icms_xml','$n_ahi_aliq_icms_xml','$n_ahi_valor_icms_xml',
        '$n_ahi_base_st_xml','$n_ahi_valor_st_xml','$n_ahi_valor_acrescimo_item','$s_ahi_cst_pis_xml','$s_ahi_cst_cofins_xml','$n_ahi_base_cofins_xml','$n_ahi_base_pis_xml','$n_ahi_valor_pis_xml','$n_ahi_valor_cofins_xml','$s_ahi_operacao','$i_ahi_codigo_cna','$s_ahi_codigo_lei116','$n_ahi_desp_aduaneiras','$i_ahi_codigo_frem','$i_ahi_codigo_fpro','$n_ahi_tot_impostos','$n_ahi_qtde_devolvido','$n_ahi_perc_red_icms_st','$n_ahi_vlr_red_base_icms_st','$i_ahi_cod_devolucao','$s_ahi_chave_fci','$n_ahi_mva_xml','$i_ahi_ide_entregue','$i_ahi_uso_cosumo',NULL,NULL,NULL,'$s_ahi_pedido_compra_nfe','$i_ahi_item_ped_compra_nfe','$s_ahi_cest','$n_ahi_perc_ipi_devol',
        '$n_ahi_valor_ipi_devol')");        
    }    
    $comandocnpjfornecedor= "Select ccnpjempresa from tempresa where ccodempresa = '$ideempresa'";
    $excomandocnpjfornecedor= pg_query($conexaoc,$comandocnpjfornecedor);
    $resulcomandocnpjfornecedor= pg_fetch_array($excomandocnpjfornecedor);
    $cnpj= $resulcomandocnpjfornecedor ['ccnpjempresa'];
    echo "<script>alert('Passando Para Servidor de Videira');</script>";
    $comandocontadorv = 'SELECT COUNT(*) FROM ahistorico2';
    $contav = pg_query($conexaov,$comandocontadorv);
    $tottalv=pg_fetch_array($contav);
    $totalv=$tottalv ['count'];
    if ($tottal<>$tottalv) {
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Na Sincronização**</font></b></p>";
        exit;
    }
    $comandofornecedor="select ccodfornecedor from afornecedor where ccgcfornecedor = '$cnpj' ";
    $excomandofornecedor = pg_query($conexaov,$comandofornecedor);
    $resulcomandofornecedor = pg_fetch_array($excomandofornecedor);
    $fornecedor = $resulcomandofornecedor['ccodfornecedor'];   
    if ($resulcomandofornecedor == ''){       
        echo"<script>alert('Fornecedor não cadastrado em videira');</script>";        
        exit;
    } 
    $comandoempresadestino= "select ccodempresa from tempresa where ccnpjempresa = '$cnpjempressadestino' ";
    $excomandoempresadestino= pg_query($conexaov,$comandoempresadestino);
    $resultadocomandoEmpresaDestino= pg_fetch_array($excomandoempresadestino);
    $empnfe=$resultadocomandoEmpresaDestino['ccodempresa'];
    if ($resultadocomandoEmpresaDestino == ''){        
        echo "<script>alert('Empresa destino não confere com o cliente da Nfe favor verefique');</script>";
        echo $voltalogin;
        exit;
    }
    $comandovereficanfe= "select cnfientradas from aentradas where cnfientradas = '$numeronfe'and cforentradas = '$fornecedor' ";
    $excomandocomandovereficanfe= pg_query($conexaov,$comandovereficanfe);
    $resultadocomandovereficanfe= pg_fetch_array($excomandocomandovereficanfe);
    if ( $resultadocomandovereficanfe >= '1'){        
        echo "<script>alert('Este Numero de Nfe: $numeronfe  Já existe para esse fornecedor');</script>";
        echo "$voltalogin";
        exit;
    }
    pg_query($conexaov,"select logar('COPIA',1,0)");pg_query($conexaov,"INSERT INTO aentradas(
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
            VALUES (nextval('seque_aentradas'),'V','$fornecedor','$datanfe','$datanfe','$numeronfe','$totalsaidas','$totalsaidas','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','1.152','0.00','0.00',NULL,'PAGO','0','','$datanfe','$time',null,null,'0',null,'$login','','$empnfe','01','','0.00','0.00','','0.00',null,'2','0.00','0.00','0.00','0.00','','','0.00','','0','0','0.00','0.00','0.00','0.00','$idehistorico',null)");
    $comandoentrada = "select csidentradas from aentradas where cemientradas = '$datanfe' and cnfientradas = '$numeronfe' and cforentradas =  '$fornecedor' and cempentrada = '$empnfe'";
    $selecaoentrada=pg_query($conexaov,$comandoentrada );
    $cienhistorico=pg_fetch_array($selecaoentrada);
    $ideentradahistorico = $cienhistorico ['csidentradas'];
    if ($cienhistorico == ''){
        pg_query($conexaov,'delete from ahistorico2');        
        echo "<script>alert('Nota não foi incluida automaticamente');</script>";
        echo '<br><br>';
        echo '<br><br>';
        echo "<span style='color:red;'> Confira os dados coletados </span>";
        echo '<br><br>';
        echo "'$empnfe', '$fornecedor', Emisão: '$datanfe', Numero Da Nfe: '$numeronfe', Empresa Da Nfe: '$empnfe'";
        exit;
    }
    pg_query($conexaov,"update ahistorico2 set centhistorico = csaihisotorico where cprohistorico = cprohistorico");
    pg_query($conexaov,"update ahistorico2 set csaihisotorico = '0'");
    pg_query($conexaov,"update ahistorico2 set ctiphistorico = 'E'");
    pg_query($conexaov,"update ahistorico2 set cisahistorico = '0'");
    pg_query($conexaov,"update ahistorico2 set cidehistorico = nextval('seque_ahistorico')");
    pg_query($conexaov,"update ahistorico2 set cmothistorico= 'TRANFERENCIA DE CACADOR FEITA AUTOMATICAMENTE'");
    pg_query($conexaov,"update ahistorico2 set cclihistorico = '0'");
    pg_query($conexaov,"update ahistorico2 set cipehistorico = '0'");
    pg_query($conexaov,"update ahistorico2 set ccfohistorico = '1.152'");
    pg_query($conexaov,"update ahistorico2 set cemphistorico = '$empnfe'");
    pg_query($conexaov,"update ahistorico2 set cforhistorico= '$fornecedor'");
    pg_query($conexaov,"update ahistorico2 set cienhistorico=  '$ideentradahistorico'");
    pg_query($conexaov,"insert into ahistorico select * from ahistorico2");
    pg_query($conexaov,"delete from ahistorico2");   
    echo "<script>alert('Lancamento Concluido com Suceso ');</script>";
    echo $voltalogin;
    exit;
}
if ($transferencia == 2){
    $comandosenha= "select cnomope from parametros where cnomope= '$login'";
    $excomandosenha= pg_query($conexaoc,$comandosenha);
    $resulcomandosenha= pg_fetch_array($excomandosenha);
    if ($resulcomandosenha== '' ){
        echo $errologin;
        echo $voltalogin;
        exit;
    }
    $query="select cnomope,csenhausuario from parametros where cnomope= '$login' and csenhausuario='$senha'";
    $selecao=pg_query($conexaoc,$query);
    $resut= pg_fetch_array($selecao);
    if ($resut == ''){
        echo "$errosenha";
        echo "$voltalogin";
        exit;
    }
    echo $mensagemlogin;
    $comandosaidas="select cidesaidas,cempresasaidas,cnpj_saidas,ctotsaidas from asaidas where cemisaidas = '$datanfe' and cclisaidas = '$clientnfe' and cnotsaidas = '$numeronfe'";
    $selecaosaidas=pg_query($conexaoc,$comandosaidas);
    $cisahistorico=pg_fetch_array($selecaosaidas);
    $cnpjempressadestino= $cisahistorico['cnpj_saidas'];
    $idehistorico=$cisahistorico ['cidesaidas'];
    $ideempresa=$cisahistorico ['cempresasaidas'];
    $totalsaidas=$cisahistorico ['ctotsaidas'];
    if($cisahistorico == '' or $cnpjempressadestino == '' ){
        echo "<script>alert('Numero nota, cliente ou data invalidos por favor tente novamente ');</script>";
        echo $voltalogin;
        exit;
    }
    pg_query($conexaoc,"insert into ahistorico2 select * from ahistorico where cisahistorico = '$idehistorico'" );
    $comandocontador = "SELECT COUNT(*) FROM ahistorico2";
    $conta = pg_query($conexaoc,$comandocontador);
    $tottal=pg_fetch_array($conta);
    $total=$tottal ['count'];
    $comando="select *from ahistorico2";
    $excomando=pg_query($conexaoc,$comando);
    while($row = pg_fetch_assoc( $excomando)){
        $cidehistorico=$row['cidehistorico'];$cienhistorico=$row['cienhistorico'];$cisahistorico=$row['cisahistorico'];
        $cipehistorico=$row['cipehistorico'];$ctiphistorico=$row['ctiphistorico'];$cmothistorico=$row['cmothistorico'];
        $cprohistorico=$row['cprohistorico'];$cemihistorico=$row['cemihistorico'];$cvcohistorico=$row['cvcohistorico'];
        $cvcuhistorico=$row['cvcuhistorico'];$cvbrhistorico=$row['cvbrhistorico'];$cvlqhistorico=$row['cvlqhistorico'];
        $cvdeshistorico=$row['cvdeshistorico'];$cvfrehistorico=$row['cvfrehistorico'];$cvachistorico=$row['cvachistorico'];
        $cvichistorico=$row['cvichistorico'];$cviphistorico=$row['cviphistorico'];$cvishistorico=$row['cvishistorico'];
        $cvfihistorico=$row['cvfihistorico'];$cvtothistorico=$row['cvtothistorico'];$cdeshistorico=$row['cdeshistorico'];
        $ccfohistorico=$row['ccfohistorico'];$csaihisotorico=$row['csaihisotorico'];$centhistorico=$row['centhistorico'];
        $cforhistorico=$row['cforhistorico'];$cclihistorico=$row['cclihistorico'];$cicmhistorico=$row['cicmhistorico'];
        $cipihistorico=$row['cipihistorico'];$cisshistorico=$row['cisshistorico'];$cluchistorico=$row['cluchistorico'];
        $cpdehistorico=$row['cpdehistorico'];$cpfrhistorico=$row['cpfrhistorico'];$cpachistorico=$row['cpachistorico'];
        $cpfihistorico=$row['cpfihistorico'];$cpcohistorico=$row['cpcohistorico'];$cvohistorico=$row['cvohistorico'];
        $ctipphistorico=$row['ctipphistorico'];$cdtcahistorico=$row['cdtcahistorico'];$chocahistorico=$row['chocahistorico'];
        $cuscadhistorico=$row['cuscadhistorico'];$copcadhistorico=$row['copcadhistorico'];$cdtatuhistorico=$row['cdtatuhistorico'];
        $choatuhistorico=$row['choatuhistorico']; $copatuhistorico=$row['copatuhistorico'];
        if ($copatuhistorico=='') {
            $copatuhistorico='NULL';
        }
        $cusatuhistorico=$row['cusatuhistorico'];$cemphistorico=$row['cemphistorico'];$cvarealhistorico=$row['cvarealhistorico'];$cbaiesthistorico=$row['cbaiesthistorico'];
        $fot_historico=$row['fot_historico'];$dep_historico=$row['dep_historico'];$valor_foto=$row['valor_foto']; $perc_cus_ope=$row['perc_cus_ope'];
        $val_cus_ope=$row['val_cus_ope'];$perc_imp_venda=$row['perc_imp_venda'];$val_imp_venda=$row['val_imp_venda'];$prec_mim_produto=$row['prec_mim_produto'];
        $i_ahi_codigo_cat=$row['i_ahi_codigo_cat'];$i_ahi_codigo_sct=$row['i_ahi_codigo_sct'];$i_ahi_codigo_ven=$row['i_ahi_codigo_ven'];$n_ahi_valor_custo_venda=$row['n_ahi_valor_custo_venda'];
        $n_ahi_perc_custo_venda=$row['n_ahi_perc_custo_venda'];$n_ahi_perc_reducao=$row['n_ahi_perc_reducao'];
        $n_ahi_valor_icms_formacao_preco=$row['n_ahi_valor_icms_formacao_preco'];$n_ahi_perc_icms_formacao_preco=$row['n_ahi_perc_icms_formacao_preco'];
        $n_ahi_valor_lucro_zero=$row['n_ahi_valor_lucro_zero'];$n_ahi_valor_lucro=$row['n_ahi_valor_lucro'];$n_ahi_custo_medio=$row['n_ahi_custo_medio'];
        $n_ahi_preco_padrao=$row['n_ahi_preco_padrao']; $n_ahi_perc_fun_rural=$row['n_ahi_perc_fun_rural'];$n_ahi_valor_fun_rural=$row['n_ahi_valor_fun_rural'];
        $i_ahi_cultura_aplicar=$row['i_ahi_cultura_aplicar'];$i_ahi_receita_ide=$row['i_ahi_receita_ide'];$n_ahi_base_icms=$row['n_ahi_base_icms'];
        $n_ahi_base_substituicao=$row['n_ahi_base_substituicao'];$n_ahi_icms_substituicao=$row['n_ahi_icms_substituicao'];$i_ahi_seq_ordem_item=$row['i_ahi_seq_ordem_item'];
        $s_ahi_cfop_contabil=$row['s_ahi_cfop_contabil'];$i_ahi_clas_fical=$row['i_ahi_clas_fical'];$s_ahi_sit_tributaria=$row['s_ahi_sit_tributaria'];$n_ahi_per_icms_subs=$row['n_ahi_per_icms_subs'];
        $n_ahi_per_conv_subst=$row['n_ahi_per_conv_subst'];$i_ahi_codigo_fprc=$row['i_ahi_codigo_fprc'];$i_ahi_codigo_feve=$row['i_ahi_codigo_feve'];
        $i_ahi_ide_pedido=$row['i_ahi_ide_pedido'];$i_ahi_codigo_parceria=$row['i_ahi_codigo_parceria'];$i_ahi_ide_historico_pedido=$row['i_ahi_ide_historico_pedido'];
        $n_ahi_qtd_entregue_pedido=$row['n_ahi_qtd_entregue_pedido'];$i_ahi_ide_ahi=$row['i_ahi_ide_ahi'];$i_ahi_saldo_produto=$row['i_ahi_saldo_produto'];
        $i_ahi_ide_romaneio=$row['i_ahi_ide_romaneio'];$s_ahi_obs_item=$row['s_ahi_obs_item'];$i_ahi_cod_produto_cli_acl=$row['i_ahi_cod_produto_cli_acl'];
        $n_ahi_valor_desconto_nota=$row['n_ahi_valor_desconto_nota'];$n_ahi_perc_desconto_item=$row['n_ahi_perc_desconto_item'];$i_ahi_codigo_tcb=$row['i_ahi_codigo_tcb'];
        $n_ahi_perc_desc_nota=$row['n_ahi_perc_desc_nota'];$n_ahi_valor_tot_item=$row['n_ahi_valor_tot_item'];$n_ahi_valor_tot_nota=$row['n_ahi_valor_tot_nota'];$n_ahi_valor_desc_item=$row['n_ahi_valor_desc_item'];$n_ahi_valor_pis=$row['n_ahi_valor_pis'];
        $n_ahi_valor_cofins=$row['n_ahi_valor_cofins'];$i_ahi_codigo_aor=$row['i_ahi_codigo_aor'];$s_ahi_complemento_impresso=$row['s_ahi_complemento_impresso'];$s_ahi_garantia_prod=$row['s_ahi_garantia_prod'];$i_ahi_codigo_aor_indice=$row['i_ahi_codigo_aor_indice'];$i_ahi_codigo_ahi_indice=$row['i_ahi_codigo_ahi_indice'];
        $i_ahi_codigo_orp=$row['i_ahi_codigo_orp'];$s_ahi_cst_ipi=$row['s_ahi_cst_ipi'];$s_ahi_cst_pis=$row['s_ahi_cst_pis'];$s_ahi_cst_cofins=$row['s_ahi_cst_cofins'];$n_ahi_base_cofins=$row['n_ahi_base_cofins'];$n_ahi_base_pis=$row['n_ahi_base_pis'];$n_ahi_base_ipi=$row['n_ahi_base_ipi'];$n_ahi_aliquota_pis=$row['n_ahi_aliquota_pis'];
        $n_ahi_aliquota_cofins=$row['n_ahi_aliquota_cofins'];$s_ahi_indicacao_movimento=$row['s_ahi_indicacao_movimento'];$n_ahi_aliquota_st=$row['n_ahi_aliquota_st'];$s_ahi_apuracao_ipi=$row['s_ahi_apuracao_ipi'];$s_ahi_cod_enquadramento_ipi=$row['s_ahi_cod_enquadramento_ipi'];$n_ahi_qtd_base_pis=$row['n_ahi_qtd_base_pis'];$n_ahi_aliq_pis_reais=$row['n_ahi_aliq_pis_reais'];
        $n_ahi_qtde_base_cofins=$row['n_ahi_qtde_base_cofins'];$n_ahi_aliq_cofins_reais=$row['n_ahi_aliq_cofins_reais'];$i_ahi_csosn=$row['i_ahi_csosn'];$i_ahi_numero_adicao=$row['i_ahi_numero_adicao'];$i_ahi_num_seq_item_adicao=$row['i_ahi_num_seq_item_adicao'];$s_ahi_cod_fabri_estrangeiro=$row['s_ahi_cod_fabri_estrangeiro'];$n_ahi_valor_desc_item_di=$row['n_ahi_valor_desc_item_di'];
        $n_ahi_valor_red_icms=$row['n_ahi_valor_red_icms'];$n_ahi_seguro_item=$row['n_ahi_seguro_item'];$s_ahi_totalizador_parcial=$row['s_ahi_totalizador_parcial'];$n_ahi_perc_seguro=$row['n_ahi_perc_seguro'];$i_ahi_csosn_xml=$row['i_ahi_csosn_xml'];$s_ahi_sit_tributaria_xml=$row['s_ahi_sit_tributaria_xml'];$n_ahi_base_ii=$row['n_ahi_base_ii'];$n_ahi_valor_ii=$row['n_ahi_valor_ii'];$n_ahi_aliquota_ii=$row['n_ahi_aliquota_ii'];
        $n_ahi_base_icms_xml=$row['n_ahi_base_icms_xml'];$n_ahi_aliq_icms_xml=$row['n_ahi_aliq_icms_xml'];$n_ahi_valor_icms_xml=$row['n_ahi_valor_icms_xml'];$n_ahi_base_st_xml=$row['n_ahi_base_st_xml'];$n_ahi_valor_st_xml=$row['n_ahi_valor_st_xml'];$n_ahi_valor_acrescimo_item=$row['n_ahi_valor_acrescimo_item'];$s_ahi_cst_pis_xml=$row['s_ahi_cst_pis_xml'];$s_ahi_cst_cofins_xml=$row['s_ahi_cst_cofins_xml'];$n_ahi_base_cofins_xml=$row['n_ahi_base_cofins_xml'];
        $n_ahi_base_pis_xml=$row['n_ahi_base_pis_xml'];$n_ahi_valor_pis_xml=$row['n_ahi_valor_pis_xml'];$n_ahi_valor_cofins_xml=$row['n_ahi_valor_cofins_xml'];$s_ahi_operacao=$row['s_ahi_operacao'];$i_ahi_codigo_cna=$row['i_ahi_codigo_cna'];$s_ahi_codigo_lei116=$row['s_ahi_codigo_lei116'];$n_ahi_desp_aduaneiras=$row['n_ahi_desp_aduaneiras'];$i_ahi_codigo_frem=$row['i_ahi_codigo_frem'];$i_ahi_codigo_fpro=$row['i_ahi_codigo_fpro'];$n_ahi_tot_impostos=$row['n_ahi_tot_impostos'];
        $n_ahi_qtde_devolvido=$row['n_ahi_qtde_devolvido'];$n_ahi_perc_red_icms_st=$row['n_ahi_perc_red_icms_st'];$n_ahi_vlr_red_base_icms_st=$row['n_ahi_vlr_red_base_icms_st'];$i_ahi_cod_devolucao=$row['i_ahi_cod_devolucao'];$s_ahi_chave_fci=$row['s_ahi_chave_fci'];$n_ahi_mva_xml=$row['n_ahi_mva_xml'];$i_ahi_ide_entregue=$row['i_ahi_ide_entregue'];$i_ahi_uso_cosumo=$row['i_ahi_uso_cosumo'];$n_ahi_perc_diferimento=$row['n_ahi_perc_diferimento'];$s_ahi_codigo_ser_mun=$row['s_ahi_codigo_ser_mun'];
        $i_ahi_valor_imposto_diferido=$row['i_ahi_valor_imposto_diferido'];$s_ahi_pedido_compra_nfe=$row['s_ahi_pedido_compra_nfe'];$i_ahi_item_ped_compra_nfe=$row['i_ahi_item_ped_compra_nfe'];$s_ahi_cest=$row['s_ahi_cest'];$n_ahi_perc_ipi_devol=$row['n_ahi_perc_ipi_devol'];$n_ahi_valor_ipi_devol=$row['n_ahi_valor_ipi_devol'];
        $coma="INSERT INTO ahistorico2(cidehistorico, cienhistorico, cisahistorico, cipehistorico, ctiphistorico,cmothistorico, cprohistorico, cemihistorico, cvcohistorico, cvcuhistorico,cvbrhistorico, cvlqhistorico, cvdeshistorico, cvfrehistorico,
        cvachistorico, cvichistorico, cviphistorico, cvishistorico, cvfihistorico,cvtothistorico, cdeshistorico, ccfohistorico, csaihisotorico,centhistorico, cforhistorico, cclihistorico, cicmhistorico, cipihistorico,cisshistorico, cluchistorico, cpdehistorico, cpfrhistorico, cpachistorico,cpfihistorico, cpcohistorico, cvohistorico, ctipphistorico, cdtcahistorico,chocahistorico, cuscadhistorico, copcadhistorico, cdtatuhistorico,choatuhistorico, copatuhistorico, cusatuhistorico, cemphistorico,
        cvarealhistorico, cbaiesthistorico, fot_historico, dep_historico,valor_foto, perc_cus_ope, val_cus_ope, perc_imp_venda, val_imp_venda,prec_mim_produto, i_ahi_codigo_cat, i_ahi_codigo_sct, i_ahi_codigo_ven,n_ahi_valor_custo_venda, n_ahi_perc_custo_venda, n_ahi_perc_reducao,n_ahi_valor_icms_formacao_preco, n_ahi_perc_icms_formacao_preco,n_ahi_valor_lucro_zero, n_ahi_valor_lucro, n_ahi_custo_medio,n_ahi_preco_padrao, n_ahi_perc_fun_rural, n_ahi_valor_fun_rural,i_ahi_cultura_aplicar, i_ahi_receita_ide, n_ahi_base_icms, n_ahi_base_substituicao,n_ahi_icms_substituicao, i_ahi_seq_ordem_item, s_ahi_cfop_contabil,
        i_ahi_clas_fical, s_ahi_sit_tributaria, n_ahi_per_icms_subs,n_ahi_per_conv_subst, i_ahi_codigo_fprc, i_ahi_codigo_feve, i_ahi_ide_pedido,i_ahi_codigo_parceria, i_ahi_ide_historico_pedido, n_ahi_qtd_entregue_pedido,i_ahi_ide_ahi, i_ahi_saldo_produto, i_ahi_ide_romaneio, s_ahi_obs_item,i_ahi_cod_produto_cli_acl, n_ahi_valor_desconto_nota, n_ahi_perc_desconto_item,i_ahi_codigo_tcb, n_ahi_perc_desc_nota, n_ahi_valor_tot_item,n_ahi_valor_tot_nota, n_ahi_valor_desc_item, n_ahi_valor_pis,n_ahi_valor_cofins, i_ahi_codigo_aor, s_ahi_complemento_impresso,s_ahi_garantia_prod, i_ahi_codigo_aor_indice, i_ahi_codigo_ahi_indice,
        i_ahi_codigo_orp, s_ahi_cst_ipi, s_ahi_cst_pis, s_ahi_cst_cofins,n_ahi_base_cofins, n_ahi_base_pis, n_ahi_base_ipi, n_ahi_aliquota_pis,n_ahi_aliquota_cofins, s_ahi_indicacao_movimento, n_ahi_aliquota_st,s_ahi_apuracao_ipi, s_ahi_cod_enquadramento_ipi, n_ahi_qtd_base_pis,n_ahi_aliq_pis_reais, n_ahi_qtde_base_cofins, n_ahi_aliq_cofins_reais,i_ahi_csosn, i_ahi_numero_adicao, i_ahi_num_seq_item_adicao,s_ahi_cod_fabri_estrangeiro, n_ahi_valor_desc_item_di, n_ahi_valor_red_icms,n_ahi_seguro_item, s_ahi_totalizador_parcial, n_ahi_perc_seguro,i_ahi_csosn_xml, s_ahi_sit_tributaria_xml, n_ahi_base_ii, n_ahi_valor_ii,n_ahi_aliquota_ii, n_ahi_base_icms_xml, n_ahi_aliq_icms_xml,
        n_ahi_valor_icms_xml, n_ahi_base_st_xml, n_ahi_valor_st_xml,n_ahi_valor_acrescimo_item, s_ahi_cst_pis_xml, s_ahi_cst_cofins_xml,n_ahi_base_cofins_xml, n_ahi_base_pis_xml, n_ahi_valor_pis_xml,n_ahi_valor_cofins_xml, s_ahi_operacao, i_ahi_codigo_cna, s_ahi_codigo_lei116,n_ahi_desp_aduaneiras, i_ahi_codigo_frem, i_ahi_codigo_fpro,n_ahi_tot_impostos, n_ahi_qtde_devolvido, n_ahi_perc_red_icms_st,n_ahi_vlr_red_base_icms_st, i_ahi_cod_devolucao, s_ahi_chave_fci,n_ahi_mva_xml, i_ahi_ide_entregue, i_ahi_uso_cosumo, n_ahi_perc_diferimento,s_ahi_codigo_ser_mun, i_ahi_valor_imposto_diferido, s_ahi_pedido_compra_nfe,i_ahi_item_ped_compra_nfe, s_ahi_cest, n_ahi_perc_ipi_devol,n_ahi_valor_ipi_devol)
        VALUES ('$cidehistorico',NULL,'$cisahistorico','$cipehistorico','$ctiphistorico','$cmothistorico','$cprohistorico','$cemihistorico','$cvcohistorico','$cvcuhistorico','$cvbrhistorico','$cvlqhistorico','$cvdeshistorico','$cvfrehistorico','$cvachistorico','$cvichistorico','$cviphistorico','$cvishistorico','$cvfihistorico','$cvtothistorico','$cdeshistorico','$ccfohistorico','$csaihisotorico','$centhistorico',NULL,'$cclihistorico','$cicmhistorico','$cipihistorico','$cisshistorico','$cluchistorico','$cpdehistorico','$cpfrhistorico','$cpachistorico','$cpfihistorico','$cpcohistorico','$cvohistorico','$ctipphistorico','$cdtcahistorico','$chocahistorico','$cuscadhistorico',
        '$copcadhistorico',NULL,NULL,$copatuhistorico,'$cusatuhistorico','$cemphistorico','$cvarealhistorico','$cbaiesthistorico','$fot_historico','$dep_historico','$valor_foto',$perc_cus_ope,'$val_cus_ope','$perc_imp_venda','$val_imp_venda','$prec_mim_produto','$i_ahi_codigo_cat','$i_ahi_codigo_sct','$i_ahi_codigo_ven','$n_ahi_valor_custo_venda','$n_ahi_perc_custo_venda','$n_ahi_perc_reducao','$n_ahi_valor_icms_formacao_preco','$n_ahi_perc_icms_formacao_preco','$n_ahi_valor_lucro_zero','$n_ahi_valor_lucro','$n_ahi_custo_medio','$n_ahi_preco_padrao','$n_ahi_perc_fun_rural','$n_ahi_valor_fun_rural','$i_ahi_cultura_aplicar','$i_ahi_receita_ide','$n_ahi_base_icms',
        '$n_ahi_base_substituicao','$n_ahi_icms_substituicao','$i_ahi_seq_ordem_item','$s_ahi_cfop_contabil','$i_ahi_clas_fical','$s_ahi_sit_tributaria','$n_ahi_per_icms_subs','$n_ahi_per_conv_subst',NULL,NULL,NULL,'$i_ahi_codigo_parceria','$i_ahi_ide_historico_pedido','$n_ahi_qtd_entregue_pedido','$i_ahi_ide_ahi',NULL,'$i_ahi_ide_romaneio','$s_ahi_obs_item','$i_ahi_cod_produto_cli_acl','$n_ahi_valor_desconto_nota','$n_ahi_perc_desconto_item','$i_ahi_codigo_tcb','$n_ahi_perc_desc_nota','$n_ahi_valor_tot_item','$n_ahi_valor_tot_nota','$n_ahi_valor_desc_item','$n_ahi_valor_pis','$n_ahi_valor_cofins','$i_ahi_codigo_aor','$s_ahi_complemento_impresso','$s_ahi_garantia_prod',NULL,NULL,NULL,'$s_ahi_cst_ipi',
        '$s_ahi_cst_pis','$s_ahi_cst_cofins','$n_ahi_base_cofins','$n_ahi_base_pis','$n_ahi_base_ipi','$n_ahi_aliquota_pis','$n_ahi_aliquota_cofins','$s_ahi_indicacao_movimento','$n_ahi_aliquota_st','$s_ahi_apuracao_ipi','$s_ahi_cod_enquadramento_ipi','$n_ahi_qtd_base_pis','$n_ahi_aliq_pis_reais','$n_ahi_qtde_base_cofins','$n_ahi_aliq_cofins_reais','$i_ahi_csosn','$i_ahi_numero_adicao','$i_ahi_num_seq_item_adicao','$s_ahi_cod_fabri_estrangeiro','$n_ahi_valor_desc_item_di','$n_ahi_valor_red_icms','$n_ahi_seguro_item','$s_ahi_totalizador_parcial','$n_ahi_perc_seguro',NULL,'$s_ahi_sit_tributaria_xml','$n_ahi_base_ii','$n_ahi_valor_ii','$n_ahi_aliquota_ii','$n_ahi_base_icms_xml','$n_ahi_aliq_icms_xml','$n_ahi_valor_icms_xml',
        '$n_ahi_base_st_xml','$n_ahi_valor_st_xml','$n_ahi_valor_acrescimo_item','$s_ahi_cst_pis_xml','$s_ahi_cst_cofins_xml','$n_ahi_base_cofins_xml','$n_ahi_base_pis_xml','$n_ahi_valor_pis_xml','$n_ahi_valor_cofins_xml','$s_ahi_operacao','$i_ahi_codigo_cna','$s_ahi_codigo_lei116','$n_ahi_desp_aduaneiras','$i_ahi_codigo_frem','$i_ahi_codigo_fpro','$n_ahi_tot_impostos','$n_ahi_qtde_devolvido','$n_ahi_perc_red_icms_st','$n_ahi_vlr_red_base_icms_st','$i_ahi_cod_devolucao','$s_ahi_chave_fci','$n_ahi_mva_xml','$i_ahi_ide_entregue','$i_ahi_uso_cosumo','$n_ahi_perc_diferimento','$s_ahi_codigo_ser_mun','$i_ahi_valor_imposto_diferido','$s_ahi_pedido_compra_nfe','$i_ahi_item_ped_compra_nfe','$s_ahi_cest','$n_ahi_perc_ipi_devol',
        '$n_ahi_valor_ipi_devol')";
         $excoma=pg_query($conexaoj,$coma);
         if (!$excoma){
             echo $coma;
             exit;    
        }
    }
    $comandocnpjfornecedor= "Select ccnpjempresa from tempresa where ccodempresa = '$ideempresa'";
    $excomandocnpjfornecedor= pg_query($conexaoc,$comandocnpjfornecedor);
    $resulcomandocnpjfornecedor= pg_fetch_array($excomandocnpjfornecedor);
    $cnpj= $resulcomandocnpjfornecedor ['ccnpjempresa'];
    echo "<script>alert('Passando Para Servidor de Joinville');</script>";
    $comandocontadorv = 'SELECT COUNT(*) FROM ahistorico2';
    $contav = pg_query($conexaoj,$comandocontadorv);
    $tottalv=pg_fetch_array($contav);
    $totalv=$tottalv ['count'];
    if ($tottal<>$tottalv) {
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Na Sincronização**</font></b></p>";
        exit;
    }
    
    $comandofornecedor="select ccodfornecedor from afornecedor where ccgcfornecedor = '$cnpj' ";
    $excomandofornecedor = pg_query($conexaoj,$comandofornecedor);
    $resulcomandofornecedor = pg_fetch_array($excomandofornecedor);
    $fornecedor = $resulcomandofornecedor['ccodfornecedor'];
    if ($resulcomandofornecedor == ''){
        echo"<script>alert('Fornecedor não cadastrado em Joinville');</script>";
        exit;
    }
    $comandoempresadestino= "select ccodempresa from tempresa where ccnpjempresa = '$cnpjempressadestino' ";
    $excomandoempresadestino= pg_query($conexaoj,$comandoempresadestino);
    $resultadocomandoEmpresaDestino= pg_fetch_array($excomandoempresadestino);
    $empnfe=$resultadocomandoEmpresaDestino['ccodempresa'];
    if ($resultadocomandoEmpresaDestino == ''){
        echo "<script>alert('Empresa destino não confere com o cliente da Nfe favor verefique');</script>";
        echo $voltalogin;
        exit;
    }
    $comandovereficanfe= "select cnfientradas from aentradas where cnfientradas = '$numeronfe'and cforentradas = '$fornecedor' ";
    $excomandocomandovereficanfe= pg_query($conexaoj,$comandovereficanfe);
    $resultadocomandovereficanfe= pg_fetch_array($excomandocomandovereficanfe);
    if ( $resultadocomandovereficanfe >= '1'){
        echo "<script>alert('Este Numero de Nfe: $numeronfe  Já existe para esse fornecedor');</script>";
        echo "$voltalogin";
        exit;
    }
    pg_query($conexaoj,"select logar('COPIA',1,0)");pg_query($conexaoj,"INSERT INTO aentradas(
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
            VALUES (nextval('seque_aentradas'),'V','$fornecedor','$datanfe','$datanfe','$numeronfe','$totalsaidas','$totalsaidas','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','1.152','0.00','0.00',NULL,'PAGO','0','','$datanfe','$time',null,null,'0',null,'$login','','$empnfe','01','','0.00','0.00','','0.00',null,'3','0.00','0.00','0.00','0.00','','','0.00','','0','0','0.00','0.00','0.00','0.00','$idehistorico',null)");
    $comandoentrada = "select csidentradas from aentradas where cemientradas = '$datanfe' and cnfientradas = '$numeronfe' and cforentradas =  '$fornecedor' and cempentrada = '$empnfe'";
    $selecaoentrada=pg_query($conexaoj,$comandoentrada );
    $cienhistorico=pg_fetch_array($selecaoentrada);
    $ideentradahistorico = $cienhistorico ['csidentradas'];
    if ($cienhistorico == ''){
        pg_query($conexaoj,'delete from ahistorico2');
        echo "<script>alert('Nota não foi incluida automaticamente');</script>";
        echo '<br><br>';
        echo '<br><br>';
        echo "<span style='color:red;'> Confira os dados coletados </span>";
        echo '<br><br>';
        echo "'$empnfe', '$fornecedor', Emisão: '$datanfe', Numero Da Nfe: '$numeronfe', Empresa Da Nfe: '$empnfe'";
        exit;
    }
    pg_query($conexaoj,"update ahistorico2 set centhistorico = csaihisotorico where cprohistorico = cprohistorico");
    pg_query($conexaoj,"update ahistorico2 set csaihisotorico = '0'");
    pg_query($conexaoj,"update ahistorico2 set ctiphistorico = 'E'");
    pg_query($conexaoj,"update ahistorico2 set cisahistorico = '0'");
    pg_query($conexaoj,"update ahistorico2 set cidehistorico = nextval('seque_ahistorico')");
    pg_query($conexaoj,"update ahistorico2 set cmothistorico= 'TRANFERENCIA DE CACADOR FEITA AUTOMATICAMENTE'");
    pg_query($conexaoj,"update ahistorico2 set cclihistorico = '0'");
    pg_query($conexaoj,"update ahistorico2 set cipehistorico = '0'");
    pg_query($conexaoj,"update ahistorico2 set ccfohistorico = '1.152'");
    pg_query($conexaoj,"update ahistorico2 set cemphistorico = '$empnfe'");
    pg_query($conexaoj,"update ahistorico2 set cforhistorico= '$fornecedor'");
    pg_query($conexaoj,"update ahistorico2 set cienhistorico=  '$ideentradahistorico'");
    pg_query($conexaoj,"insert into ahistorico select * from ahistorico2");
    pg_query($conexaoj,"delete from ahistorico2");
    echo "<script>alert('Lancamento Concluido com Suceso ');</script>";
    echo $voltalogin;
    exit;
}
if ($transferencia == 3){
    $comandosenha= "select cnomope from parametros where cnomope= '$login'";
    $excomandosenha= pg_query($conexaov,$comandosenha);
    $resulcomandosenha= pg_fetch_array($excomandosenha);
    if ($resulcomandosenha== '' ){
        echo $errologin;
        echo $voltalogin;
        exit;
    }
    $query="select cnomope,csenhausuario from parametros where cnomope= '$login' and csenhausuario='$senha'";
    $selecao=pg_query($conexaov,$query);
    $resut= pg_fetch_array($selecao);
    if ($resut == ''){
        echo "$errosenha";
        echo "$voltalogin";
        exit;
    }
    echo $mensagemlogin;
    $comandosaidas="select cidesaidas,cempresasaidas,cnpj_saidas,ctotsaidas from asaidas where cemisaidas = '$datanfe' and cclisaidas = '$clientnfe' and cnotsaidas = '$numeronfe'";
    $selecaosaidas=pg_query($conexaov,$comandosaidas);
    $cisahistorico=pg_fetch_array($selecaosaidas);
    $cnpjempressadestino= $cisahistorico['cnpj_saidas'];
    $idehistorico=$cisahistorico ['cidesaidas'];
    $ideempresa=$cisahistorico ['cempresasaidas'];
    $totalsaidas=$cisahistorico ['ctotsaidas'];
    if($cisahistorico == '' or $cnpjempressadestino == '' ){
        echo "<script>alert('Numero nota, cliente ou data invalidos por favor tente novamente ');</script>";
        echo $voltalogin;
        exit;
    }
    pg_query($conexaov,"insert into ahistorico2 select * from ahistorico where cisahistorico = '$idehistorico'" );
    $comandocontador = "SELECT COUNT(*) FROM ahistorico2";
    $conta = pg_query($conexaov,$comandocontador);
    $tottal=pg_fetch_array($conta);
    $total=$tottal ['count'];
    $comando="select *from ahistorico2";
    $excomando=pg_query($conexaov,$comando);
    while($row = pg_fetch_assoc( $excomando)){
        $cidehistorico=$row['cidehistorico'];$cienhistorico=$row['cienhistorico'];$cisahistorico=$row['cisahistorico'];
        $cipehistorico=$row['cipehistorico'];$ctiphistorico=$row['ctiphistorico'];$cmothistorico=$row['cmothistorico'];
        $cprohistorico=$row['cprohistorico'];$cemihistorico=$row['cemihistorico'];$cvcohistorico=$row['cvcohistorico'];
        $cvcuhistorico=$row['cvcuhistorico'];$cvbrhistorico=$row['cvbrhistorico'];$cvlqhistorico=$row['cvlqhistorico'];
        $cvdeshistorico=$row['cvdeshistorico'];$cvfrehistorico=$row['cvfrehistorico'];$cvachistorico=$row['cvachistorico'];
        $cvichistorico=$row['cvichistorico'];$cviphistorico=$row['cviphistorico'];$cvishistorico=$row['cvishistorico'];
        $cvfihistorico=$row['cvfihistorico'];$cvtothistorico=$row['cvtothistorico'];$cdeshistorico=$row['cdeshistorico'];
        $ccfohistorico=$row['ccfohistorico'];$csaihisotorico=$row['csaihisotorico'];$centhistorico=$row['centhistorico'];
        $cforhistorico=$row['cforhistorico'];$cclihistorico=$row['cclihistorico'];$cicmhistorico=$row['cicmhistorico'];
        $cipihistorico=$row['cipihistorico'];$cisshistorico=$row['cisshistorico'];$cluchistorico=$row['cluchistorico'];
        $cpdehistorico=$row['cpdehistorico'];$cpfrhistorico=$row['cpfrhistorico'];$cpachistorico=$row['cpachistorico'];
        $cpfihistorico=$row['cpfihistorico'];$cpcohistorico=$row['cpcohistorico'];$cvohistorico=$row['cvohistorico'];
        $ctipphistorico=$row['ctipphistorico'];$cdtcahistorico=$row['cdtcahistorico'];$chocahistorico=$row['chocahistorico'];
        $cuscadhistorico=$row['cuscadhistorico'];$copcadhistorico=$row['copcadhistorico'];$cdtatuhistorico=$row['cdtatuhistorico'];
        $choatuhistorico=$row['choatuhistorico']; $copatuhistorico=$row['copatuhistorico'];
        if ($copatuhistorico=='') {
            $copatuhistorico=='';
        }
        $cusatuhistorico=$row['cusatuhistorico'];$cemphistorico=$row['cemphistorico'];$cvarealhistorico=$row['cvarealhistorico'];$cbaiesthistorico=$row['cbaiesthistorico'];
        $fot_historico=$row['fot_historico'];$dep_historico=$row['dep_historico'];$valor_foto=$row['valor_foto']; $perc_cus_ope=$row['perc_cus_ope'];
        if ($perc_cus_ope=='') {
            $perc_cus_ope='NULL';
        }
        $val_cus_ope=$row['val_cus_ope'];$perc_imp_venda=$row['perc_imp_venda'];$val_imp_venda=$row['val_imp_venda'];$prec_mim_produto=$row['prec_mim_produto'];
        $i_ahi_codigo_cat=$row['i_ahi_codigo_cat'];$i_ahi_codigo_sct=$row['i_ahi_codigo_sct'];$i_ahi_codigo_ven=$row['i_ahi_codigo_ven'];$n_ahi_valor_custo_venda=$row['n_ahi_valor_custo_venda'];
        $n_ahi_perc_custo_venda=$row['n_ahi_perc_custo_venda'];$n_ahi_perc_reducao=$row['n_ahi_perc_reducao'];
        $n_ahi_valor_icms_formacao_preco=$row['n_ahi_valor_icms_formacao_preco'];$n_ahi_perc_icms_formacao_preco=$row['n_ahi_perc_icms_formacao_preco'];
        $n_ahi_valor_lucro_zero=$row['n_ahi_valor_lucro_zero'];$n_ahi_valor_lucro=$row['n_ahi_valor_lucro'];$n_ahi_custo_medio=$row['n_ahi_custo_medio'];
        $n_ahi_preco_padrao=$row['n_ahi_preco_padrao']; $n_ahi_perc_fun_rural=$row['n_ahi_perc_fun_rural'];$n_ahi_valor_fun_rural=$row['n_ahi_valor_fun_rural'];
        $i_ahi_cultura_aplicar=$row['i_ahi_cultura_aplicar'];$i_ahi_receita_ide=$row['i_ahi_receita_ide'];$n_ahi_base_icms=$row['n_ahi_base_icms'];
        $n_ahi_base_substituicao=$row['n_ahi_base_substituicao'];$n_ahi_icms_substituicao=$row['n_ahi_icms_substituicao'];$i_ahi_seq_ordem_item=$row['i_ahi_seq_ordem_item'];
        $s_ahi_cfop_contabil=$row['s_ahi_cfop_contabil'];$i_ahi_clas_fical=$row['i_ahi_clas_fical'];$s_ahi_sit_tributaria=$row['s_ahi_sit_tributaria'];$n_ahi_per_icms_subs=$row['n_ahi_per_icms_subs'];
        $n_ahi_per_conv_subst=$row['n_ahi_per_conv_subst'];$i_ahi_codigo_fprc=$row['i_ahi_codigo_fprc'];$i_ahi_codigo_feve=$row['i_ahi_codigo_feve'];
        $i_ahi_ide_pedido=$row['i_ahi_ide_pedido'];$i_ahi_codigo_parceria=$row['i_ahi_codigo_parceria'];$i_ahi_ide_historico_pedido=$row['i_ahi_ide_historico_pedido'];
        $n_ahi_qtd_entregue_pedido=$row['n_ahi_qtd_entregue_pedido'];$i_ahi_ide_ahi=$row['i_ahi_ide_ahi'];$i_ahi_saldo_produto=$row['i_ahi_saldo_produto'];
        $i_ahi_ide_romaneio=$row['i_ahi_ide_romaneio'];$s_ahi_obs_item=$row['s_ahi_obs_item'];$i_ahi_cod_produto_cli_acl=$row['i_ahi_cod_produto_cli_acl'];
        $n_ahi_valor_desconto_nota=$row['n_ahi_valor_desconto_nota'];$n_ahi_perc_desconto_item=$row['n_ahi_perc_desconto_item'];$i_ahi_codigo_tcb=$row['i_ahi_codigo_tcb'];
        $n_ahi_perc_desc_nota=$row['n_ahi_perc_desc_nota'];$n_ahi_valor_tot_item=$row['n_ahi_valor_tot_item'];$n_ahi_valor_tot_nota=$row['n_ahi_valor_tot_nota'];$n_ahi_valor_desc_item=$row['n_ahi_valor_desc_item'];$n_ahi_valor_pis=$row['n_ahi_valor_pis'];
        $n_ahi_valor_cofins=$row['n_ahi_valor_cofins'];$i_ahi_codigo_aor=$row['i_ahi_codigo_aor'];$s_ahi_complemento_impresso=$row['s_ahi_complemento_impresso'];$s_ahi_garantia_prod=$row['s_ahi_garantia_prod'];$i_ahi_codigo_aor_indice=$row['i_ahi_codigo_aor_indice'];$i_ahi_codigo_ahi_indice=$row['i_ahi_codigo_ahi_indice'];
        $i_ahi_codigo_orp=$row['i_ahi_codigo_orp'];$s_ahi_cst_ipi=$row['s_ahi_cst_ipi'];$s_ahi_cst_pis=$row['s_ahi_cst_pis'];$s_ahi_cst_cofins=$row['s_ahi_cst_cofins'];$n_ahi_base_cofins=$row['n_ahi_base_cofins'];$n_ahi_base_pis=$row['n_ahi_base_pis'];$n_ahi_base_ipi=$row['n_ahi_base_ipi'];$n_ahi_aliquota_pis=$row['n_ahi_aliquota_pis'];
        $n_ahi_aliquota_cofins=$row['n_ahi_aliquota_cofins'];$s_ahi_indicacao_movimento=$row['s_ahi_indicacao_movimento'];$n_ahi_aliquota_st=$row['n_ahi_aliquota_st'];$s_ahi_apuracao_ipi=$row['s_ahi_apuracao_ipi'];$s_ahi_cod_enquadramento_ipi=$row['s_ahi_cod_enquadramento_ipi'];$n_ahi_qtd_base_pis=$row['n_ahi_qtd_base_pis'];$n_ahi_aliq_pis_reais=$row['n_ahi_aliq_pis_reais'];
        $n_ahi_qtde_base_cofins=$row['n_ahi_qtde_base_cofins'];$n_ahi_aliq_cofins_reais=$row['n_ahi_aliq_cofins_reais'];$i_ahi_csosn=$row['i_ahi_csosn'];$i_ahi_numero_adicao=$row['i_ahi_numero_adicao'];$i_ahi_num_seq_item_adicao=$row['i_ahi_num_seq_item_adicao'];$s_ahi_cod_fabri_estrangeiro=$row['s_ahi_cod_fabri_estrangeiro'];$n_ahi_valor_desc_item_di=$row['n_ahi_valor_desc_item_di'];
        $n_ahi_valor_red_icms=$row['n_ahi_valor_red_icms'];$n_ahi_seguro_item=$row['n_ahi_seguro_item'];$s_ahi_totalizador_parcial=$row['s_ahi_totalizador_parcial'];$n_ahi_perc_seguro=$row['n_ahi_perc_seguro'];$i_ahi_csosn_xml=$row['i_ahi_csosn_xml'];$s_ahi_sit_tributaria_xml=$row['s_ahi_sit_tributaria_xml'];$n_ahi_base_ii=$row['n_ahi_base_ii'];$n_ahi_valor_ii=$row['n_ahi_valor_ii'];$n_ahi_aliquota_ii=$row['n_ahi_aliquota_ii'];
        $n_ahi_base_icms_xml=$row['n_ahi_base_icms_xml'];$n_ahi_aliq_icms_xml=$row['n_ahi_aliq_icms_xml'];$n_ahi_valor_icms_xml=$row['n_ahi_valor_icms_xml'];$n_ahi_base_st_xml=$row['n_ahi_base_st_xml'];$n_ahi_valor_st_xml=$row['n_ahi_valor_st_xml'];$n_ahi_valor_acrescimo_item=$row['n_ahi_valor_acrescimo_item'];$s_ahi_cst_pis_xml=$row['s_ahi_cst_pis_xml'];$s_ahi_cst_cofins_xml=$row['s_ahi_cst_cofins_xml'];$n_ahi_base_cofins_xml=$row['n_ahi_base_cofins_xml'];
        $n_ahi_base_pis_xml=$row['n_ahi_base_pis_xml'];$n_ahi_valor_pis_xml=$row['n_ahi_valor_pis_xml'];$n_ahi_valor_cofins_xml=$row['n_ahi_valor_cofins_xml'];$s_ahi_operacao=$row['s_ahi_operacao'];$i_ahi_codigo_cna=$row['i_ahi_codigo_cna'];$s_ahi_codigo_lei116=$row['s_ahi_codigo_lei116'];$n_ahi_desp_aduaneiras=$row['n_ahi_desp_aduaneiras'];$i_ahi_codigo_frem=$row['i_ahi_codigo_frem'];$i_ahi_codigo_fpro=$row['i_ahi_codigo_fpro'];$n_ahi_tot_impostos=$row['n_ahi_tot_impostos'];
        $n_ahi_qtde_devolvido=$row['n_ahi_qtde_devolvido'];$n_ahi_perc_red_icms_st=$row['n_ahi_perc_red_icms_st'];$n_ahi_vlr_red_base_icms_st=$row['n_ahi_vlr_red_base_icms_st'];$i_ahi_cod_devolucao=$row['i_ahi_cod_devolucao'];$s_ahi_chave_fci=$row['s_ahi_chave_fci'];$n_ahi_mva_xml=$row['n_ahi_mva_xml'];$i_ahi_ide_entregue=$row['i_ahi_ide_entregue'];$i_ahi_uso_cosumo=$row['i_ahi_uso_cosumo'];$n_ahi_perc_diferimento=$row['n_ahi_perc_diferimento'];$s_ahi_codigo_ser_mun=$row['s_ahi_codigo_ser_mun'];
        $i_ahi_valor_imposto_diferido=$row['i_ahi_valor_imposto_diferido'];$s_ahi_pedido_compra_nfe=$row['s_ahi_pedido_compra_nfe'];$i_ahi_item_ped_compra_nfe=$row['i_ahi_item_ped_compra_nfe'];$s_ahi_cest=$row['s_ahi_cest'];$n_ahi_perc_ipi_devol=$row['n_ahi_perc_ipi_devol'];$n_ahi_valor_ipi_devol=$row['n_ahi_valor_ipi_devol'];
        pg_query($conexaoc,"INSERT INTO ahistorico2(cidehistorico, cienhistorico, cisahistorico, cipehistorico, ctiphistorico,cmothistorico, cprohistorico, cemihistorico, cvcohistorico, cvcuhistorico,cvbrhistorico, cvlqhistorico, cvdeshistorico, cvfrehistorico,
        cvachistorico, cvichistorico, cviphistorico, cvishistorico, cvfihistorico,cvtothistorico, cdeshistorico, ccfohistorico, csaihisotorico,centhistorico, cforhistorico, cclihistorico, cicmhistorico, cipihistorico,cisshistorico, cluchistorico, cpdehistorico, cpfrhistorico, cpachistorico,cpfihistorico, cpcohistorico, cvohistorico, ctipphistorico, cdtcahistorico,chocahistorico, cuscadhistorico, copcadhistorico, cdtatuhistorico,choatuhistorico, copatuhistorico, cusatuhistorico, cemphistorico,
        cvarealhistorico, cbaiesthistorico, fot_historico, dep_historico,valor_foto, perc_cus_ope, val_cus_ope, perc_imp_venda, val_imp_venda,prec_mim_produto, i_ahi_codigo_cat, i_ahi_codigo_sct, i_ahi_codigo_ven,n_ahi_valor_custo_venda, n_ahi_perc_custo_venda, n_ahi_perc_reducao,n_ahi_valor_icms_formacao_preco, n_ahi_perc_icms_formacao_preco,n_ahi_valor_lucro_zero, n_ahi_valor_lucro, n_ahi_custo_medio,n_ahi_preco_padrao, n_ahi_perc_fun_rural, n_ahi_valor_fun_rural,i_ahi_cultura_aplicar, i_ahi_receita_ide, n_ahi_base_icms, n_ahi_base_substituicao,n_ahi_icms_substituicao, i_ahi_seq_ordem_item, s_ahi_cfop_contabil,
        i_ahi_clas_fical, s_ahi_sit_tributaria, n_ahi_per_icms_subs,n_ahi_per_conv_subst, i_ahi_codigo_fprc, i_ahi_codigo_feve, i_ahi_ide_pedido,i_ahi_codigo_parceria, i_ahi_ide_historico_pedido, n_ahi_qtd_entregue_pedido,i_ahi_ide_ahi, i_ahi_saldo_produto, i_ahi_ide_romaneio, s_ahi_obs_item,i_ahi_cod_produto_cli_acl, n_ahi_valor_desconto_nota, n_ahi_perc_desconto_item,i_ahi_codigo_tcb, n_ahi_perc_desc_nota, n_ahi_valor_tot_item,n_ahi_valor_tot_nota, n_ahi_valor_desc_item, n_ahi_valor_pis,n_ahi_valor_cofins, i_ahi_codigo_aor, s_ahi_complemento_impresso,s_ahi_garantia_prod, i_ahi_codigo_aor_indice, i_ahi_codigo_ahi_indice,
        i_ahi_codigo_orp, s_ahi_cst_ipi, s_ahi_cst_pis, s_ahi_cst_cofins,n_ahi_base_cofins, n_ahi_base_pis, n_ahi_base_ipi, n_ahi_aliquota_pis,n_ahi_aliquota_cofins, s_ahi_indicacao_movimento, n_ahi_aliquota_st,s_ahi_apuracao_ipi, s_ahi_cod_enquadramento_ipi, n_ahi_qtd_base_pis,n_ahi_aliq_pis_reais, n_ahi_qtde_base_cofins, n_ahi_aliq_cofins_reais,i_ahi_csosn, i_ahi_numero_adicao, i_ahi_num_seq_item_adicao,s_ahi_cod_fabri_estrangeiro, n_ahi_valor_desc_item_di, n_ahi_valor_red_icms,n_ahi_seguro_item, s_ahi_totalizador_parcial, n_ahi_perc_seguro,i_ahi_csosn_xml, s_ahi_sit_tributaria_xml, n_ahi_base_ii, n_ahi_valor_ii,n_ahi_aliquota_ii, n_ahi_base_icms_xml, n_ahi_aliq_icms_xml,
        n_ahi_valor_icms_xml, n_ahi_base_st_xml, n_ahi_valor_st_xml,n_ahi_valor_acrescimo_item, s_ahi_cst_pis_xml, s_ahi_cst_cofins_xml,n_ahi_base_cofins_xml, n_ahi_base_pis_xml, n_ahi_valor_pis_xml,n_ahi_valor_cofins_xml, s_ahi_operacao, i_ahi_codigo_cna, s_ahi_codigo_lei116,n_ahi_desp_aduaneiras, i_ahi_codigo_frem, i_ahi_codigo_fpro,n_ahi_tot_impostos, n_ahi_qtde_devolvido, n_ahi_perc_red_icms_st,n_ahi_vlr_red_base_icms_st, i_ahi_cod_devolucao, s_ahi_chave_fci,n_ahi_mva_xml, i_ahi_ide_entregue, i_ahi_uso_cosumo, n_ahi_perc_diferimento,s_ahi_codigo_ser_mun, i_ahi_valor_imposto_diferido, s_ahi_pedido_compra_nfe,i_ahi_item_ped_compra_nfe, s_ahi_cest, n_ahi_perc_ipi_devol,n_ahi_valor_ipi_devol)
        VALUES ('$cidehistorico',NULL,'$cisahistorico','$cipehistorico','$ctiphistorico','$cmothistorico','$cprohistorico','$cemihistorico','$cvcohistorico','$cvcuhistorico','$cvbrhistorico','$cvlqhistorico','$cvdeshistorico','$cvfrehistorico','$cvachistorico','$cvichistorico','$cviphistorico','$cvishistorico','$cvfihistorico','$cvtothistorico','$cdeshistorico','$ccfohistorico','$csaihisotorico','$centhistorico',NULL,'$cclihistorico','$cicmhistorico','$cipihistorico','$cisshistorico','$cluchistorico','$cpdehistorico','$cpfrhistorico','$cpachistorico','$cpfihistorico','$cpcohistorico','$cvohistorico','$ctipphistorico','$cdtcahistorico','$chocahistorico','$cuscadhistorico',
        '$copcadhistorico',NULL,NULL,$copatuhistorico,'$cusatuhistorico','$cemphistorico','$cvarealhistorico','$cbaiesthistorico','$fot_historico','$dep_historico','$valor_foto','$perc_cus_ope','$val_cus_ope','$perc_imp_venda','$val_imp_venda','$prec_mim_produto','$i_ahi_codigo_cat','$i_ahi_codigo_sct','$i_ahi_codigo_ven','$n_ahi_valor_custo_venda','$n_ahi_perc_custo_venda','$n_ahi_perc_reducao','$n_ahi_valor_icms_formacao_preco','$n_ahi_perc_icms_formacao_preco','$n_ahi_valor_lucro_zero','$n_ahi_valor_lucro','$n_ahi_custo_medio','$n_ahi_preco_padrao','$n_ahi_perc_fun_rural','$n_ahi_valor_fun_rural','$i_ahi_cultura_aplicar','$i_ahi_receita_ide','$n_ahi_base_icms',
        '$n_ahi_base_substituicao','$n_ahi_icms_substituicao','$i_ahi_seq_ordem_item','$s_ahi_cfop_contabil','$i_ahi_clas_fical','$s_ahi_sit_tributaria','$n_ahi_per_icms_subs','$n_ahi_per_conv_subst',NULL,NULL,NULL,'$i_ahi_codigo_parceria','$i_ahi_ide_historico_pedido','$n_ahi_qtd_entregue_pedido','$i_ahi_ide_ahi',NULL,'$i_ahi_ide_romaneio','$s_ahi_obs_item','$i_ahi_cod_produto_cli_acl','$n_ahi_valor_desconto_nota','$n_ahi_perc_desconto_item','$i_ahi_codigo_tcb','$n_ahi_perc_desc_nota','$n_ahi_valor_tot_item','$n_ahi_valor_tot_nota','$n_ahi_valor_desc_item','$n_ahi_valor_pis','$n_ahi_valor_cofins','$i_ahi_codigo_aor','$s_ahi_complemento_impresso','$s_ahi_garantia_prod',NULL,NULL,NULL,'$s_ahi_cst_ipi',
        '$s_ahi_cst_pis','$s_ahi_cst_cofins','$n_ahi_base_cofins','$n_ahi_base_pis','$n_ahi_base_ipi','$n_ahi_aliquota_pis','$n_ahi_aliquota_cofins','$s_ahi_indicacao_movimento','$n_ahi_aliquota_st','$s_ahi_apuracao_ipi','$s_ahi_cod_enquadramento_ipi','$n_ahi_qtd_base_pis','$n_ahi_aliq_pis_reais','$n_ahi_qtde_base_cofins','$n_ahi_aliq_cofins_reais','$i_ahi_csosn','$i_ahi_numero_adicao','$i_ahi_num_seq_item_adicao','$s_ahi_cod_fabri_estrangeiro','$n_ahi_valor_desc_item_di','$n_ahi_valor_red_icms','$n_ahi_seguro_item','$s_ahi_totalizador_parcial','$n_ahi_perc_seguro',NULL,'$s_ahi_sit_tributaria_xml','$n_ahi_base_ii','$n_ahi_valor_ii','$n_ahi_aliquota_ii','$n_ahi_base_icms_xml','$n_ahi_aliq_icms_xml','$n_ahi_valor_icms_xml',
        '$n_ahi_base_st_xml','$n_ahi_valor_st_xml','$n_ahi_valor_acrescimo_item','$s_ahi_cst_pis_xml','$s_ahi_cst_cofins_xml','$n_ahi_base_cofins_xml','$n_ahi_base_pis_xml','$n_ahi_valor_pis_xml','$n_ahi_valor_cofins_xml','$s_ahi_operacao','$i_ahi_codigo_cna','$s_ahi_codigo_lei116','$n_ahi_desp_aduaneiras','$i_ahi_codigo_frem','$i_ahi_codigo_fpro','$n_ahi_tot_impostos','$n_ahi_qtde_devolvido','$n_ahi_perc_red_icms_st','$n_ahi_vlr_red_base_icms_st','$i_ahi_cod_devolucao','$s_ahi_chave_fci','$n_ahi_mva_xml','$i_ahi_ide_entregue','$i_ahi_uso_cosumo','$n_ahi_perc_diferimento','$s_ahi_codigo_ser_mun','$i_ahi_valor_imposto_diferido','$s_ahi_pedido_compra_nfe','$i_ahi_item_ped_compra_nfe','$s_ahi_cest','$n_ahi_perc_ipi_devol',
        '$n_ahi_valor_ipi_devol')");
    }
    $comandocnpjfornecedor= "Select ccnpjempresa from tempresa where ccodempresa = '$ideempresa'";
    $excomandocnpjfornecedor= pg_query($conexaov,$comandocnpjfornecedor);
    $resulcomandocnpjfornecedor= pg_fetch_array($excomandocnpjfornecedor);
    $cnpj= $resulcomandocnpjfornecedor ['ccnpjempresa'];
    echo "<script>alert('Passando Para Servidor de Caçador');</script>";
    $comandocontadorv = 'SELECT COUNT(*) FROM ahistorico2';
    $contav = pg_query($conexaoc,$comandocontadorv);
    $tottalv=pg_fetch_array($contav);
    $totalv=$tottalv ['count'];
    if ($tottal<>$tottalv) {
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Na Sincronização**</font></b></p>";
        exit;
    }
    
    $comandofornecedor="select ccodfornecedor from afornecedor where ccgcfornecedor = '$cnpj' ";
    $excomandofornecedor = pg_query($conexaoc,$comandofornecedor);
    $resulcomandofornecedor = pg_fetch_array($excomandofornecedor);
    $fornecedor = $resulcomandofornecedor['ccodfornecedor'];
    if ($resulcomandofornecedor == ''){
        echo"<script>alert('Fornecedor não cadastrado em Joinville');</script>";
        exit;
    }
    $comandoempresadestino= "select ccodempresa from tempresa where ccnpjempresa = '$cnpjempressadestino' ";
    $excomandoempresadestino= pg_query($conexaoc,$comandoempresadestino);
    $resultadocomandoEmpresaDestino= pg_fetch_array($excomandoempresadestino);
    $empnfe=$resultadocomandoEmpresaDestino['ccodempresa'];
    if ($resultadocomandoEmpresaDestino == ''){
        echo "<script>alert('Empresa destino não confere com o cliente da Nfe favor verefique');</script>";
        echo $voltalogin;
        exit;
    }
    $comandovereficanfe= "select cnfientradas from aentradas where cnfientradas = '$numeronfe'and cforentradas = '$fornecedor' ";
    $excomandocomandovereficanfe= pg_query($conexaoc,$comandovereficanfe);
    $resultadocomandovereficanfe= pg_fetch_array($excomandocomandovereficanfe);
    if ( $resultadocomandovereficanfe >= '1'){
        echo "<script>alert('Este Numero de Nfe: $numeronfe  Já existe para esse fornecedor');</script>";
        echo "$voltalogin";
        exit;
    }
    pg_query($conexaoc,"select logar('COPIA',1,0)");pg_query($conexaoc,"INSERT INTO aentradas(
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
            VALUES (nextval('seque_aentradas'),'V','$fornecedor','$datanfe','$datanfe','$numeronfe','$totalsaidas','$totalsaidas','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','1.152','0.00','0.00',NULL,'PAGO','0','','$datanfe','$time',null,null,'0',null,'$login','','$empnfe','01','','0.00','0.00','','0.00',null,'3','0.00','0.00','0.00','0.00','','','0.00','','0','0','0.00','0.00','0.00','0.00','$idehistorico',null)");
    $comandoentrada = "select csidentradas from aentradas where cemientradas = '$datanfe' and cnfientradas = '$numeronfe' and cforentradas =  '$fornecedor' and cempentrada = '$empnfe'";
    $selecaoentrada=pg_query($conexaoc,$comandoentrada );
    $cienhistorico=pg_fetch_array($selecaoentrada);
    $ideentradahistorico = $cienhistorico ['csidentradas'];
    if ($cienhistorico == ''){
        pg_query($conexaoc,'delete from ahistorico2');
        echo "<script>alert('Nota não foi incluida automaticamente');</script>";
        echo '<br><br>';
        echo '<br><br>';
        echo "<span style='color:red;'> Confira os dados coletados </span>";
        echo '<br><br>';
        echo "'$empnfe', '$fornecedor', Emisão: '$datanfe', Numero Da Nfe: '$numeronfe', Empresa Da Nfe: '$empnfe'";
        exit;
    }
    pg_query($conexaoc,"update ahistorico2 set centhistorico = csaihisotorico where cprohistorico = cprohistorico");
    pg_query($conexaoc,"update ahistorico2 set csaihisotorico = '0'");
    pg_query($conexaoc,"update ahistorico2 set ctiphistorico = 'E'");
    pg_query($conexaoc,"update ahistorico2 set cisahistorico = '0'");
    pg_query($conexaoc,"update ahistorico2 set cidehistorico = nextval('seque_ahistorico')");
    pg_query($conexaoc,"update ahistorico2 set cmothistorico= 'TRANFERENCIA DE VIDEIRA FEITA AUTOMATICAMENTE'");
    pg_query($conexaoc,"update ahistorico2 set cclihistorico = '0'");
    pg_query($conexaoc,"update ahistorico2 set cipehistorico = '0'");
    pg_query($conexaoc,"update ahistorico2 set ccfohistorico = '1.152'");
    pg_query($conexaoc,"update ahistorico2 set cemphistorico = '$empnfe'");
    pg_query($conexaoc,"update ahistorico2 set cforhistorico= '$fornecedor'");
    pg_query($conexaoc,"update ahistorico2 set cienhistorico=  '$ideentradahistorico'");
    pg_query($conexaoc,"insert into ahistorico select * from ahistorico2");
    pg_query($conexaoc,"delete from ahistorico2");
    echo "<script>alert('Lancamento Concluido com Suceso ');</script>";
    echo $voltalogin;
    exit;
}
if ($transferencia == 4){
    $comandosenha= "select cnomope from parametros where cnomope= '$login'";
    $excomandosenha= pg_query($conexaov,$comandosenha);
    $resulcomandosenha= pg_fetch_array($excomandosenha);
    if ($resulcomandosenha== '' ){
        echo $errologin;
        echo $voltalogin;
        exit;
    }
    $query="select cnomope,csenhausuario from parametros where cnomope= '$login' and csenhausuario='$senha'";
    $selecao=pg_query($conexaov,$query);
    $resut= pg_fetch_array($selecao);
    if ($resut == ''){
        echo "$errosenha";
        echo "$voltalogin";
        exit;
    }
    echo $mensagemlogin;
    $comandosaidas="select cidesaidas,cempresasaidas,cnpj_saidas,ctotsaidas from asaidas where cemisaidas = '$datanfe' and cclisaidas = '$clientnfe' and cnotsaidas = '$numeronfe'";
    $selecaosaidas=pg_query($conexaov,$comandosaidas);
    $cisahistorico=pg_fetch_array($selecaosaidas);
    $cnpjempressadestino= $cisahistorico['cnpj_saidas'];
    $idehistorico=$cisahistorico ['cidesaidas'];
    $ideempresa=$cisahistorico ['cempresasaidas'];
    $totalsaidas=$cisahistorico ['ctotsaidas'];
    if($cisahistorico == '' or $cnpjempressadestino == '' ){
        echo "<script>alert('Numero nota, cliente ou data invalidos por favor tente novamente ');</script>";
        echo $voltalogin;
        exit;
    }
    pg_query($conexaov,"insert into ahistorico2 select * from ahistorico where cisahistorico = '$idehistorico'" );
    $comandocontador = "SELECT COUNT(*) FROM ahistorico2";
    $conta = pg_query($conexaov,$comandocontador);
    $tottal=pg_fetch_array($conta);
    $total=$tottal ['count'];
    $comando="select *from ahistorico2";
    $excomando=pg_query($conexaov,$comando);
    while($row = pg_fetch_assoc( $excomando)){
        $cidehistorico=$row['cidehistorico'];$cienhistorico=$row['cienhistorico'];$cisahistorico=$row['cisahistorico'];
        $cipehistorico=$row['cipehistorico'];$ctiphistorico=$row['ctiphistorico'];$cmothistorico=$row['cmothistorico'];
        $cprohistorico=$row['cprohistorico'];$cemihistorico=$row['cemihistorico'];$cvcohistorico=$row['cvcohistorico'];
        $cvcuhistorico=$row['cvcuhistorico'];$cvbrhistorico=$row['cvbrhistorico'];$cvlqhistorico=$row['cvlqhistorico'];
        $cvdeshistorico=$row['cvdeshistorico'];$cvfrehistorico=$row['cvfrehistorico'];$cvachistorico=$row['cvachistorico'];
        $cvichistorico=$row['cvichistorico'];$cviphistorico=$row['cviphistorico'];$cvishistorico=$row['cvishistorico'];
        $cvfihistorico=$row['cvfihistorico'];$cvtothistorico=$row['cvtothistorico'];$cdeshistorico=$row['cdeshistorico'];
        $ccfohistorico=$row['ccfohistorico'];$csaihisotorico=$row['csaihisotorico'];$centhistorico=$row['centhistorico'];
        $cforhistorico=$row['cforhistorico'];$cclihistorico=$row['cclihistorico'];$cicmhistorico=$row['cicmhistorico'];
        $cipihistorico=$row['cipihistorico'];$cisshistorico=$row['cisshistorico'];$cluchistorico=$row['cluchistorico'];
        $cpdehistorico=$row['cpdehistorico'];$cpfrhistorico=$row['cpfrhistorico'];$cpachistorico=$row['cpachistorico'];
        $cpfihistorico=$row['cpfihistorico'];$cpcohistorico=$row['cpcohistorico'];$cvohistorico=$row['cvohistorico'];
        $ctipphistorico=$row['ctipphistorico'];$cdtcahistorico=$row['cdtcahistorico'];$chocahistorico=$row['chocahistorico'];
        $cuscadhistorico=$row['cuscadhistorico'];$copcadhistorico=$row['copcadhistorico'];$cdtatuhistorico=$row['cdtatuhistorico'];
        $choatuhistorico=$row['choatuhistorico']; $copatuhistorico=$row['copatuhistorico'];
        if ($copatuhistorico=='') {
            $copatuhistorico='NULL';
        }
        $cusatuhistorico=$row['cusatuhistorico'];$cemphistorico=$row['cemphistorico'];$cvarealhistorico=$row['cvarealhistorico'];$cbaiesthistorico=$row['cbaiesthistorico'];
        $fot_historico=$row['fot_historico'];$dep_historico=$row['dep_historico'];$valor_foto=$row['valor_foto']; $perc_cus_ope=$row['perc_cus_ope'];
        if ($perc_cus_ope=='') {
            $perc_cus_ope='NULL';
        }
        $val_cus_ope=$row['val_cus_ope'];$perc_imp_venda=$row['perc_imp_venda'];$val_imp_venda=$row['val_imp_venda'];$prec_mim_produto=$row['prec_mim_produto'];
        $i_ahi_codigo_cat=$row['i_ahi_codigo_cat'];$i_ahi_codigo_sct=$row['i_ahi_codigo_sct'];$i_ahi_codigo_ven=$row['i_ahi_codigo_ven'];$n_ahi_valor_custo_venda=$row['n_ahi_valor_custo_venda'];
        $n_ahi_perc_custo_venda=$row['n_ahi_perc_custo_venda'];$n_ahi_perc_reducao=$row['n_ahi_perc_reducao'];
        $n_ahi_valor_icms_formacao_preco=$row['n_ahi_valor_icms_formacao_preco'];$n_ahi_perc_icms_formacao_preco=$row['n_ahi_perc_icms_formacao_preco'];
        $n_ahi_valor_lucro_zero=$row['n_ahi_valor_lucro_zero'];$n_ahi_valor_lucro=$row['n_ahi_valor_lucro'];$n_ahi_custo_medio=$row['n_ahi_custo_medio'];
        $n_ahi_preco_padrao=$row['n_ahi_preco_padrao']; $n_ahi_perc_fun_rural=$row['n_ahi_perc_fun_rural'];$n_ahi_valor_fun_rural=$row['n_ahi_valor_fun_rural'];
        $i_ahi_cultura_aplicar=$row['i_ahi_cultura_aplicar'];$i_ahi_receita_ide=$row['i_ahi_receita_ide'];$n_ahi_base_icms=$row['n_ahi_base_icms'];
        $n_ahi_base_substituicao=$row['n_ahi_base_substituicao'];$n_ahi_icms_substituicao=$row['n_ahi_icms_substituicao'];$i_ahi_seq_ordem_item=$row['i_ahi_seq_ordem_item'];
        $s_ahi_cfop_contabil=$row['s_ahi_cfop_contabil'];$i_ahi_clas_fical=$row['i_ahi_clas_fical'];$s_ahi_sit_tributaria=$row['s_ahi_sit_tributaria'];$n_ahi_per_icms_subs=$row['n_ahi_per_icms_subs'];
        $n_ahi_per_conv_subst=$row['n_ahi_per_conv_subst'];$i_ahi_codigo_fprc=$row['i_ahi_codigo_fprc'];$i_ahi_codigo_feve=$row['i_ahi_codigo_feve'];
        $i_ahi_ide_pedido=$row['i_ahi_ide_pedido'];$i_ahi_codigo_parceria=$row['i_ahi_codigo_parceria'];$i_ahi_ide_historico_pedido=$row['i_ahi_ide_historico_pedido'];
        $n_ahi_qtd_entregue_pedido=$row['n_ahi_qtd_entregue_pedido'];$i_ahi_ide_ahi=$row['i_ahi_ide_ahi'];$i_ahi_saldo_produto=$row['i_ahi_saldo_produto'];
        $i_ahi_ide_romaneio=$row['i_ahi_ide_romaneio'];$s_ahi_obs_item=$row['s_ahi_obs_item'];$i_ahi_cod_produto_cli_acl=$row['i_ahi_cod_produto_cli_acl'];
        $n_ahi_valor_desconto_nota=$row['n_ahi_valor_desconto_nota'];$n_ahi_perc_desconto_item=$row['n_ahi_perc_desconto_item'];$i_ahi_codigo_tcb=$row['i_ahi_codigo_tcb'];
        $n_ahi_perc_desc_nota=$row['n_ahi_perc_desc_nota'];$n_ahi_valor_tot_item=$row['n_ahi_valor_tot_item'];$n_ahi_valor_tot_nota=$row['n_ahi_valor_tot_nota'];$n_ahi_valor_desc_item=$row['n_ahi_valor_desc_item'];$n_ahi_valor_pis=$row['n_ahi_valor_pis'];
        $n_ahi_valor_cofins=$row['n_ahi_valor_cofins'];$i_ahi_codigo_aor=$row['i_ahi_codigo_aor'];$s_ahi_complemento_impresso=$row['s_ahi_complemento_impresso'];$s_ahi_garantia_prod=$row['s_ahi_garantia_prod'];$i_ahi_codigo_aor_indice=$row['i_ahi_codigo_aor_indice'];$i_ahi_codigo_ahi_indice=$row['i_ahi_codigo_ahi_indice'];
        $i_ahi_codigo_orp=$row['i_ahi_codigo_orp'];$s_ahi_cst_ipi=$row['s_ahi_cst_ipi'];$s_ahi_cst_pis=$row['s_ahi_cst_pis'];$s_ahi_cst_cofins=$row['s_ahi_cst_cofins'];$n_ahi_base_cofins=$row['n_ahi_base_cofins'];$n_ahi_base_pis=$row['n_ahi_base_pis'];$n_ahi_base_ipi=$row['n_ahi_base_ipi'];$n_ahi_aliquota_pis=$row['n_ahi_aliquota_pis'];
        $n_ahi_aliquota_cofins=$row['n_ahi_aliquota_cofins'];$s_ahi_indicacao_movimento=$row['s_ahi_indicacao_movimento'];$n_ahi_aliquota_st=$row['n_ahi_aliquota_st'];$s_ahi_apuracao_ipi=$row['s_ahi_apuracao_ipi'];$s_ahi_cod_enquadramento_ipi=$row['s_ahi_cod_enquadramento_ipi'];$n_ahi_qtd_base_pis=$row['n_ahi_qtd_base_pis'];$n_ahi_aliq_pis_reais=$row['n_ahi_aliq_pis_reais'];
        $n_ahi_qtde_base_cofins=$row['n_ahi_qtde_base_cofins'];$n_ahi_aliq_cofins_reais=$row['n_ahi_aliq_cofins_reais'];$i_ahi_csosn=$row['i_ahi_csosn'];$i_ahi_numero_adicao=$row['i_ahi_numero_adicao'];$i_ahi_num_seq_item_adicao=$row['i_ahi_num_seq_item_adicao'];$s_ahi_cod_fabri_estrangeiro=$row['s_ahi_cod_fabri_estrangeiro'];$n_ahi_valor_desc_item_di=$row['n_ahi_valor_desc_item_di'];
        $n_ahi_valor_red_icms=$row['n_ahi_valor_red_icms'];$n_ahi_seguro_item=$row['n_ahi_seguro_item'];$s_ahi_totalizador_parcial=$row['s_ahi_totalizador_parcial'];$n_ahi_perc_seguro=$row['n_ahi_perc_seguro'];$i_ahi_csosn_xml=$row['i_ahi_csosn_xml'];$s_ahi_sit_tributaria_xml=$row['s_ahi_sit_tributaria_xml'];$n_ahi_base_ii=$row['n_ahi_base_ii'];$n_ahi_valor_ii=$row['n_ahi_valor_ii'];$n_ahi_aliquota_ii=$row['n_ahi_aliquota_ii'];
        $n_ahi_base_icms_xml=$row['n_ahi_base_icms_xml'];$n_ahi_aliq_icms_xml=$row['n_ahi_aliq_icms_xml'];$n_ahi_valor_icms_xml=$row['n_ahi_valor_icms_xml'];$n_ahi_base_st_xml=$row['n_ahi_base_st_xml'];$n_ahi_valor_st_xml=$row['n_ahi_valor_st_xml'];$n_ahi_valor_acrescimo_item=$row['n_ahi_valor_acrescimo_item'];$s_ahi_cst_pis_xml=$row['s_ahi_cst_pis_xml'];$s_ahi_cst_cofins_xml=$row['s_ahi_cst_cofins_xml'];$n_ahi_base_cofins_xml=$row['n_ahi_base_cofins_xml'];
        $n_ahi_base_pis_xml=$row['n_ahi_base_pis_xml'];$n_ahi_valor_pis_xml=$row['n_ahi_valor_pis_xml'];$n_ahi_valor_cofins_xml=$row['n_ahi_valor_cofins_xml'];$s_ahi_operacao=$row['s_ahi_operacao'];$i_ahi_codigo_cna=$row['i_ahi_codigo_cna'];$s_ahi_codigo_lei116=$row['s_ahi_codigo_lei116'];$n_ahi_desp_aduaneiras=$row['n_ahi_desp_aduaneiras'];$i_ahi_codigo_frem=$row['i_ahi_codigo_frem'];$i_ahi_codigo_fpro=$row['i_ahi_codigo_fpro'];$n_ahi_tot_impostos=$row['n_ahi_tot_impostos'];
        $n_ahi_qtde_devolvido=$row['n_ahi_qtde_devolvido'];$n_ahi_perc_red_icms_st=$row['n_ahi_perc_red_icms_st'];$n_ahi_vlr_red_base_icms_st=$row['n_ahi_vlr_red_base_icms_st'];$i_ahi_cod_devolucao=$row['i_ahi_cod_devolucao'];$s_ahi_chave_fci=$row['s_ahi_chave_fci'];$n_ahi_mva_xml=$row['n_ahi_mva_xml'];$i_ahi_ide_entregue=$row['i_ahi_ide_entregue'];$i_ahi_uso_cosumo=$row['i_ahi_uso_cosumo'];$n_ahi_perc_diferimento=$row['n_ahi_perc_diferimento'];$s_ahi_codigo_ser_mun=$row['s_ahi_codigo_ser_mun'];
        $i_ahi_valor_imposto_diferido=$row['i_ahi_valor_imposto_diferido'];$s_ahi_pedido_compra_nfe=$row['s_ahi_pedido_compra_nfe'];$i_ahi_item_ped_compra_nfe=$row['i_ahi_item_ped_compra_nfe'];$s_ahi_cest=$row['s_ahi_cest'];$n_ahi_perc_ipi_devol=$row['n_ahi_perc_ipi_devol'];$n_ahi_valor_ipi_devol=$row['n_ahi_valor_ipi_devol'];
        pg_query($conexaoj,"INSERT INTO ahistorico2(cidehistorico, cienhistorico, cisahistorico, cipehistorico, ctiphistorico,cmothistorico, cprohistorico, cemihistorico, cvcohistorico, cvcuhistorico,cvbrhistorico, cvlqhistorico, cvdeshistorico, cvfrehistorico,
        cvachistorico, cvichistorico, cviphistorico, cvishistorico, cvfihistorico,cvtothistorico, cdeshistorico, ccfohistorico, csaihisotorico,centhistorico, cforhistorico, cclihistorico, cicmhistorico, cipihistorico,cisshistorico, cluchistorico, cpdehistorico, cpfrhistorico, cpachistorico,cpfihistorico, cpcohistorico, cvohistorico, ctipphistorico, cdtcahistorico,chocahistorico, cuscadhistorico, copcadhistorico, cdtatuhistorico,choatuhistorico, copatuhistorico, cusatuhistorico, cemphistorico,
        cvarealhistorico, cbaiesthistorico, fot_historico, dep_historico,valor_foto, perc_cus_ope, val_cus_ope, perc_imp_venda, val_imp_venda,prec_mim_produto, i_ahi_codigo_cat, i_ahi_codigo_sct, i_ahi_codigo_ven,n_ahi_valor_custo_venda, n_ahi_perc_custo_venda, n_ahi_perc_reducao,n_ahi_valor_icms_formacao_preco, n_ahi_perc_icms_formacao_preco,n_ahi_valor_lucro_zero, n_ahi_valor_lucro, n_ahi_custo_medio,n_ahi_preco_padrao, n_ahi_perc_fun_rural, n_ahi_valor_fun_rural,i_ahi_cultura_aplicar, i_ahi_receita_ide, n_ahi_base_icms, n_ahi_base_substituicao,n_ahi_icms_substituicao, i_ahi_seq_ordem_item, s_ahi_cfop_contabil,
        i_ahi_clas_fical, s_ahi_sit_tributaria, n_ahi_per_icms_subs,n_ahi_per_conv_subst, i_ahi_codigo_fprc, i_ahi_codigo_feve, i_ahi_ide_pedido,i_ahi_codigo_parceria, i_ahi_ide_historico_pedido, n_ahi_qtd_entregue_pedido,i_ahi_ide_ahi, i_ahi_saldo_produto, i_ahi_ide_romaneio, s_ahi_obs_item,i_ahi_cod_produto_cli_acl, n_ahi_valor_desconto_nota, n_ahi_perc_desconto_item,i_ahi_codigo_tcb, n_ahi_perc_desc_nota, n_ahi_valor_tot_item,n_ahi_valor_tot_nota, n_ahi_valor_desc_item, n_ahi_valor_pis,n_ahi_valor_cofins, i_ahi_codigo_aor, s_ahi_complemento_impresso,s_ahi_garantia_prod, i_ahi_codigo_aor_indice, i_ahi_codigo_ahi_indice,
        i_ahi_codigo_orp, s_ahi_cst_ipi, s_ahi_cst_pis, s_ahi_cst_cofins,n_ahi_base_cofins, n_ahi_base_pis, n_ahi_base_ipi, n_ahi_aliquota_pis,n_ahi_aliquota_cofins, s_ahi_indicacao_movimento, n_ahi_aliquota_st,s_ahi_apuracao_ipi, s_ahi_cod_enquadramento_ipi, n_ahi_qtd_base_pis,n_ahi_aliq_pis_reais, n_ahi_qtde_base_cofins, n_ahi_aliq_cofins_reais,i_ahi_csosn, i_ahi_numero_adicao, i_ahi_num_seq_item_adicao,s_ahi_cod_fabri_estrangeiro, n_ahi_valor_desc_item_di, n_ahi_valor_red_icms,n_ahi_seguro_item, s_ahi_totalizador_parcial, n_ahi_perc_seguro,i_ahi_csosn_xml, s_ahi_sit_tributaria_xml, n_ahi_base_ii, n_ahi_valor_ii,n_ahi_aliquota_ii, n_ahi_base_icms_xml, n_ahi_aliq_icms_xml,
        n_ahi_valor_icms_xml, n_ahi_base_st_xml, n_ahi_valor_st_xml,n_ahi_valor_acrescimo_item, s_ahi_cst_pis_xml, s_ahi_cst_cofins_xml,n_ahi_base_cofins_xml, n_ahi_base_pis_xml, n_ahi_valor_pis_xml,n_ahi_valor_cofins_xml, s_ahi_operacao, i_ahi_codigo_cna, s_ahi_codigo_lei116,n_ahi_desp_aduaneiras, i_ahi_codigo_frem, i_ahi_codigo_fpro,n_ahi_tot_impostos, n_ahi_qtde_devolvido, n_ahi_perc_red_icms_st,n_ahi_vlr_red_base_icms_st, i_ahi_cod_devolucao, s_ahi_chave_fci,n_ahi_mva_xml, i_ahi_ide_entregue, i_ahi_uso_cosumo, n_ahi_perc_diferimento,s_ahi_codigo_ser_mun, i_ahi_valor_imposto_diferido, s_ahi_pedido_compra_nfe,i_ahi_item_ped_compra_nfe, s_ahi_cest, n_ahi_perc_ipi_devol,n_ahi_valor_ipi_devol)
        VALUES ('$cidehistorico',NULL,'$cisahistorico','$cipehistorico','$ctiphistorico','$cmothistorico','$cprohistorico','$cemihistorico','$cvcohistorico','$cvcuhistorico','$cvbrhistorico','$cvlqhistorico','$cvdeshistorico','$cvfrehistorico','$cvachistorico','$cvichistorico','$cviphistorico','$cvishistorico','$cvfihistorico','$cvtothistorico','$cdeshistorico','$ccfohistorico','$csaihisotorico','$centhistorico',NULL,'$cclihistorico','$cicmhistorico','$cipihistorico','$cisshistorico','$cluchistorico','$cpdehistorico','$cpfrhistorico','$cpachistorico','$cpfihistorico','$cpcohistorico','$cvohistorico','$ctipphistorico','$cdtcahistorico','$chocahistorico','$cuscadhistorico',
        '$copcadhistorico',NULL,NULL,$copatuhistorico,'$cusatuhistorico','$cemphistorico','$cvarealhistorico','$cbaiesthistorico','$fot_historico','$dep_historico','$valor_foto',$perc_cus_ope,'$val_cus_ope','$perc_imp_venda','$val_imp_venda','$prec_mim_produto','$i_ahi_codigo_cat','$i_ahi_codigo_sct','$i_ahi_codigo_ven','$n_ahi_valor_custo_venda','$n_ahi_perc_custo_venda','$n_ahi_perc_reducao','$n_ahi_valor_icms_formacao_preco','$n_ahi_perc_icms_formacao_preco','$n_ahi_valor_lucro_zero','$n_ahi_valor_lucro','$n_ahi_custo_medio','$n_ahi_preco_padrao','$n_ahi_perc_fun_rural','$n_ahi_valor_fun_rural','$i_ahi_cultura_aplicar','$i_ahi_receita_ide','$n_ahi_base_icms',
        '$n_ahi_base_substituicao','$n_ahi_icms_substituicao','$i_ahi_seq_ordem_item','$s_ahi_cfop_contabil','$i_ahi_clas_fical','$s_ahi_sit_tributaria','$n_ahi_per_icms_subs','$n_ahi_per_conv_subst',NULL,NULL,NULL,'$i_ahi_codigo_parceria','$i_ahi_ide_historico_pedido','$n_ahi_qtd_entregue_pedido','$i_ahi_ide_ahi',NULL,'$i_ahi_ide_romaneio','$s_ahi_obs_item','$i_ahi_cod_produto_cli_acl','$n_ahi_valor_desconto_nota','$n_ahi_perc_desconto_item','$i_ahi_codigo_tcb','$n_ahi_perc_desc_nota','$n_ahi_valor_tot_item','$n_ahi_valor_tot_nota','$n_ahi_valor_desc_item','$n_ahi_valor_pis','$n_ahi_valor_cofins','$i_ahi_codigo_aor','$s_ahi_complemento_impresso','$s_ahi_garantia_prod',NULL,NULL,NULL,'$s_ahi_cst_ipi',
        '$s_ahi_cst_pis','$s_ahi_cst_cofins','$n_ahi_base_cofins','$n_ahi_base_pis','$n_ahi_base_ipi','$n_ahi_aliquota_pis','$n_ahi_aliquota_cofins','$s_ahi_indicacao_movimento','$n_ahi_aliquota_st','$s_ahi_apuracao_ipi','$s_ahi_cod_enquadramento_ipi','$n_ahi_qtd_base_pis','$n_ahi_aliq_pis_reais','$n_ahi_qtde_base_cofins','$n_ahi_aliq_cofins_reais','$i_ahi_csosn','$i_ahi_numero_adicao','$i_ahi_num_seq_item_adicao','$s_ahi_cod_fabri_estrangeiro','$n_ahi_valor_desc_item_di','$n_ahi_valor_red_icms','$n_ahi_seguro_item','$s_ahi_totalizador_parcial','$n_ahi_perc_seguro',NULL,'$s_ahi_sit_tributaria_xml','$n_ahi_base_ii','$n_ahi_valor_ii','$n_ahi_aliquota_ii','$n_ahi_base_icms_xml','$n_ahi_aliq_icms_xml','$n_ahi_valor_icms_xml',
        '$n_ahi_base_st_xml','$n_ahi_valor_st_xml','$n_ahi_valor_acrescimo_item','$s_ahi_cst_pis_xml','$s_ahi_cst_cofins_xml','$n_ahi_base_cofins_xml','$n_ahi_base_pis_xml','$n_ahi_valor_pis_xml','$n_ahi_valor_cofins_xml','$s_ahi_operacao','$i_ahi_codigo_cna','$s_ahi_codigo_lei116','$n_ahi_desp_aduaneiras','$i_ahi_codigo_frem','$i_ahi_codigo_fpro','$n_ahi_tot_impostos','$n_ahi_qtde_devolvido','$n_ahi_perc_red_icms_st','$n_ahi_vlr_red_base_icms_st','$i_ahi_cod_devolucao','$s_ahi_chave_fci','$n_ahi_mva_xml','$i_ahi_ide_entregue','$i_ahi_uso_cosumo','$n_ahi_perc_diferimento','$s_ahi_codigo_ser_mun','$i_ahi_valor_imposto_diferido','$s_ahi_pedido_compra_nfe','$i_ahi_item_ped_compra_nfe','$s_ahi_cest','$n_ahi_perc_ipi_devol',
        '$n_ahi_valor_ipi_devol')");
    }
    $comandocnpjfornecedor= "Select ccnpjempresa from tempresa where ccodempresa = '$ideempresa'";
    $excomandocnpjfornecedor= pg_query($conexaov,$comandocnpjfornecedor);
    $resulcomandocnpjfornecedor= pg_fetch_array($excomandocnpjfornecedor);
    $cnpj= $resulcomandocnpjfornecedor ['ccnpjempresa'];
    echo "<script>alert('Passando Para Servidor de Joinville');</script>";
    $comandocontadorv = 'SELECT COUNT(*) FROM ahistorico2';
    $contav = pg_query($conexaoj,$comandocontadorv);
    $tottalv=pg_fetch_array($contav);
    $totalv=$tottalv ['count'];
    if ($tottal<>$tottalv) {
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Na Sincronização**</font></b></p>";
        exit;
    }
    
    $comandofornecedor="select ccodfornecedor from afornecedor where ccgcfornecedor = '$cnpj' ";
    $excomandofornecedor = pg_query($conexaoj,$comandofornecedor);
    $resulcomandofornecedor = pg_fetch_array($excomandofornecedor);
    $fornecedor = $resulcomandofornecedor['ccodfornecedor'];
    if ($resulcomandofornecedor == ''){
        echo"<script>alert('Fornecedor não cadastrado em Joinville');</script>";
        exit;
    }
    $comandoempresadestino= "select ccodempresa from tempresa where ccnpjempresa = '$cnpjempressadestino' ";
    $excomandoempresadestino= pg_query($conexaoj,$comandoempresadestino);
    $resultadocomandoEmpresaDestino= pg_fetch_array($excomandoempresadestino);
    $empnfe=$resultadocomandoEmpresaDestino['ccodempresa'];
    if ($resultadocomandoEmpresaDestino == ''){
        echo "<script>alert('Empresa destino não confere com o cliente da Nfe favor verefique');</script>";
        echo $voltalogin;
        exit;
    }
    $comandovereficanfe= "select cnfientradas from aentradas where cnfientradas = '$numeronfe'and cforentradas = '$fornecedor' ";
    $excomandocomandovereficanfe= pg_query($conexaoj,$comandovereficanfe);
    $resultadocomandovereficanfe= pg_fetch_array($excomandocomandovereficanfe);
    if ( $resultadocomandovereficanfe >= '1'){
        echo "<script>alert('Este Numero de Nfe: $numeronfe  Já existe para esse fornecedor');</script>";
        echo "$voltalogin";
        exit;
    }
    pg_query($conexaoj,"select logar('COPIA',1,0)");pg_query($conexaoj,"INSERT INTO aentradas(
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
            VALUES (nextval('seque_aentradas'),'V','$fornecedor','$datanfe','$datanfe','$numeronfe','$totalsaidas','$totalsaidas','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','1.152','0.00','0.00',NULL,'PAGO','0','','$datanfe','$time',null,null,'0',null,'$login','','$empnfe','01','','0.00','0.00','','0.00',null,'3','0.00','0.00','0.00','0.00','','','0.00','','0','0','0.00','0.00','0.00','0.00','$idehistorico',null)");
    $comandoentrada = "select csidentradas from aentradas where cemientradas = '$datanfe' and cnfientradas = '$numeronfe' and cforentradas =  '$fornecedor' and cempentrada = '$empnfe'";
    $selecaoentrada=pg_query($conexaoj,$comandoentrada );
    $cienhistorico=pg_fetch_array($selecaoentrada);
    $ideentradahistorico = $cienhistorico ['csidentradas'];
    if ($cienhistorico == ''){
        pg_query($conexaoj,'delete from ahistorico2');
        echo "<script>alert('Nota não foi incluida automaticamente');</script>";
        echo '<br><br>';
        echo '<br><br>';
        echo "<span style='color:red;'> Confira os dados coletados </span>";
        echo '<br><br>';
        echo "'$empnfe', '$fornecedor', Emisão: '$datanfe', Numero Da Nfe: '$numeronfe', Empresa Da Nfe: '$empnfe'";
        exit;
    }
    pg_query($conexaoj,"update ahistorico2 set centhistorico = csaihisotorico where cprohistorico = cprohistorico");
    pg_query($conexaoj,"update ahistorico2 set csaihisotorico = '0'");
    pg_query($conexaoj,"update ahistorico2 set ctiphistorico = 'E'");
    pg_query($conexaoj,"update ahistorico2 set cisahistorico = '0'");
    pg_query($conexaoj,"update ahistorico2 set cidehistorico = nextval('seque_ahistorico')");
    pg_query($conexaoj,"update ahistorico2 set cmothistorico= 'TRANFERENCIA DE VIDEIRA FEITA AUTOMATICAMENTE'");
    pg_query($conexaoj,"update ahistorico2 set cclihistorico = '0'");
    pg_query($conexaoj,"update ahistorico2 set cipehistorico = '0'");
    pg_query($conexaoj,"update ahistorico2 set ccfohistorico = '1.152'");
    pg_query($conexaoj,"update ahistorico2 set cemphistorico = '$empnfe'");
    pg_query($conexaoj,"update ahistorico2 set cforhistorico= '$fornecedor'");
    pg_query($conexaoj,"update ahistorico2 set cienhistorico=  '$ideentradahistorico'");
    pg_query($conexaoj,"insert into ahistorico select * from ahistorico2");
    pg_query($conexaoj,"delete from ahistorico2");
    echo "<script>alert('Lancamento Concluido com Suceso ');</script>";
    echo $voltalogin;
    exit;
}
if ($transferencia == 5){
    $comandosenha= "select cnomope from parametros where cnomope= '$login'";
    $excomandosenha= pg_query($conexaoj,$comandosenha);
    $resulcomandosenha= pg_fetch_array($excomandosenha);
    if ($resulcomandosenha== '' ){
        echo $errologin;
        echo $voltalogin;
        exit;
    }
    $query="select cnomope,csenhausuario from parametros where cnomope= '$login' and csenhausuario='$senha'";
    $selecao=pg_query($conexaoj,$query);
    $resut= pg_fetch_array($selecao);
    if ($resut == ''){
        echo "$errosenha";
        echo "$voltalogin";
        exit;
    }
    echo $mensagemlogin;
    $comandosaidas="select cidesaidas,cempresasaidas,cnpj_saidas,ctotsaidas from asaidas where cemisaidas = '$datanfe' and cclisaidas = '$clientnfe' and cnotsaidas = '$numeronfe'";
    $selecaosaidas=pg_query($conexaoj,$comandosaidas);
    $cisahistorico=pg_fetch_array($selecaosaidas);
    $cnpjempressadestino= $cisahistorico['cnpj_saidas'];
    $idehistorico=$cisahistorico ['cidesaidas'];
    $ideempresa=$cisahistorico ['cempresasaidas'];
    $totalsaidas=$cisahistorico ['ctotsaidas'];
    if($cisahistorico == '' or $cnpjempressadestino == '' ){
        echo "<script>alert('Numero nota, cliente ou data invalidos por favor tente novamente ');</script>";
        echo $voltalogin;
        exit;
    }
    pg_query($conexaoj,"insert into ahistorico2 select * from ahistorico where cisahistorico = '$idehistorico'" );
    $comandocontador = "SELECT COUNT(*) FROM ahistorico2";
    $conta = pg_query($conexaoj,$comandocontador);
    $tottal=pg_fetch_array($conta);
    $total=$tottal ['count'];
    $comando="select *from ahistorico2";
    $excomando=pg_query($conexaoj,$comando);
    while($row = pg_fetch_assoc( $excomando)){
        $cidehistorico=$row['cidehistorico'];$cienhistorico=$row['cienhistorico'];$cisahistorico=$row['cisahistorico'];
        $cipehistorico=$row['cipehistorico'];$ctiphistorico=$row['ctiphistorico'];$cmothistorico=$row['cmothistorico'];
        $cprohistorico=$row['cprohistorico'];$cemihistorico=$row['cemihistorico'];$cvcohistorico=$row['cvcohistorico'];
        $cvcuhistorico=$row['cvcuhistorico'];$cvbrhistorico=$row['cvbrhistorico'];$cvlqhistorico=$row['cvlqhistorico'];
        $cvdeshistorico=$row['cvdeshistorico'];$cvfrehistorico=$row['cvfrehistorico'];$cvachistorico=$row['cvachistorico'];
        $cvichistorico=$row['cvichistorico'];$cviphistorico=$row['cviphistorico'];$cvishistorico=$row['cvishistorico'];
        $cvfihistorico=$row['cvfihistorico'];$cvtothistorico=$row['cvtothistorico'];$cdeshistorico=$row['cdeshistorico'];
        $ccfohistorico=$row['ccfohistorico'];$csaihisotorico=$row['csaihisotorico'];$centhistorico=$row['centhistorico'];
        $cforhistorico=$row['cforhistorico'];$cclihistorico=$row['cclihistorico'];$cicmhistorico=$row['cicmhistorico'];
        $cipihistorico=$row['cipihistorico'];$cisshistorico=$row['cisshistorico'];$cluchistorico=$row['cluchistorico'];
        $cpdehistorico=$row['cpdehistorico'];$cpfrhistorico=$row['cpfrhistorico'];$cpachistorico=$row['cpachistorico'];
        $cpfihistorico=$row['cpfihistorico'];$cpcohistorico=$row['cpcohistorico'];$cvohistorico=$row['cvohistorico'];
        $ctipphistorico=$row['ctipphistorico'];$cdtcahistorico=$row['cdtcahistorico'];$chocahistorico=$row['chocahistorico'];
        $cuscadhistorico=$row['cuscadhistorico'];$copcadhistorico=$row['copcadhistorico'];$cdtatuhistorico=$row['cdtatuhistorico'];
        $choatuhistorico=$row['choatuhistorico']; $copatuhistorico=$row['copatuhistorico'];
        if ($copatuhistorico=='') {
            $copatuhistorico='NULL';
        }
        $cusatuhistorico=$row['cusatuhistorico'];$cemphistorico=$row['cemphistorico'];$cvarealhistorico=$row['cvarealhistorico'];$cbaiesthistorico=$row['cbaiesthistorico'];
        $fot_historico=$row['fot_historico'];$dep_historico=$row['dep_historico'];$valor_foto=$row['valor_foto']; $perc_cus_ope=$row['perc_cus_ope'];
        if ($perc_cus_ope=='') {
            $perc_cus_ope='NULL';
        }
        $val_cus_ope=$row['val_cus_ope'];$perc_imp_venda=$row['perc_imp_venda'];$val_imp_venda=$row['val_imp_venda'];$prec_mim_produto=$row['prec_mim_produto'];
        $i_ahi_codigo_cat=$row['i_ahi_codigo_cat'];$i_ahi_codigo_sct=$row['i_ahi_codigo_sct'];$i_ahi_codigo_ven=$row['i_ahi_codigo_ven'];$n_ahi_valor_custo_venda=$row['n_ahi_valor_custo_venda'];
        $n_ahi_perc_custo_venda=$row['n_ahi_perc_custo_venda'];$n_ahi_perc_reducao=$row['n_ahi_perc_reducao'];
        $n_ahi_valor_icms_formacao_preco=$row['n_ahi_valor_icms_formacao_preco'];$n_ahi_perc_icms_formacao_preco=$row['n_ahi_perc_icms_formacao_preco'];
        $n_ahi_valor_lucro_zero=$row['n_ahi_valor_lucro_zero'];$n_ahi_valor_lucro=$row['n_ahi_valor_lucro'];$n_ahi_custo_medio=$row['n_ahi_custo_medio'];
        $n_ahi_preco_padrao=$row['n_ahi_preco_padrao']; $n_ahi_perc_fun_rural=$row['n_ahi_perc_fun_rural'];$n_ahi_valor_fun_rural=$row['n_ahi_valor_fun_rural'];
        $i_ahi_cultura_aplicar=$row['i_ahi_cultura_aplicar'];$i_ahi_receita_ide=$row['i_ahi_receita_ide'];$n_ahi_base_icms=$row['n_ahi_base_icms'];
        $n_ahi_base_substituicao=$row['n_ahi_base_substituicao'];$n_ahi_icms_substituicao=$row['n_ahi_icms_substituicao'];$i_ahi_seq_ordem_item=$row['i_ahi_seq_ordem_item'];
        $s_ahi_cfop_contabil=$row['s_ahi_cfop_contabil'];$i_ahi_clas_fical=$row['i_ahi_clas_fical'];$s_ahi_sit_tributaria=$row['s_ahi_sit_tributaria'];$n_ahi_per_icms_subs=$row['n_ahi_per_icms_subs'];
        $n_ahi_per_conv_subst=$row['n_ahi_per_conv_subst'];$i_ahi_codigo_fprc=$row['i_ahi_codigo_fprc'];$i_ahi_codigo_feve=$row['i_ahi_codigo_feve'];
        $i_ahi_ide_pedido=$row['i_ahi_ide_pedido'];$i_ahi_codigo_parceria=$row['i_ahi_codigo_parceria'];$i_ahi_ide_historico_pedido=$row['i_ahi_ide_historico_pedido'];
        $n_ahi_qtd_entregue_pedido=$row['n_ahi_qtd_entregue_pedido'];$i_ahi_ide_ahi=$row['i_ahi_ide_ahi'];$i_ahi_saldo_produto=$row['i_ahi_saldo_produto'];
        $i_ahi_ide_romaneio=$row['i_ahi_ide_romaneio'];$s_ahi_obs_item=$row['s_ahi_obs_item'];$i_ahi_cod_produto_cli_acl=$row['i_ahi_cod_produto_cli_acl'];
        $n_ahi_valor_desconto_nota=$row['n_ahi_valor_desconto_nota'];$n_ahi_perc_desconto_item=$row['n_ahi_perc_desconto_item'];$i_ahi_codigo_tcb=$row['i_ahi_codigo_tcb'];
        $n_ahi_perc_desc_nota=$row['n_ahi_perc_desc_nota'];$n_ahi_valor_tot_item=$row['n_ahi_valor_tot_item'];$n_ahi_valor_tot_nota=$row['n_ahi_valor_tot_nota'];$n_ahi_valor_desc_item=$row['n_ahi_valor_desc_item'];$n_ahi_valor_pis=$row['n_ahi_valor_pis'];
        $n_ahi_valor_cofins=$row['n_ahi_valor_cofins'];$i_ahi_codigo_aor=$row['i_ahi_codigo_aor'];$s_ahi_complemento_impresso=$row['s_ahi_complemento_impresso'];$s_ahi_garantia_prod=$row['s_ahi_garantia_prod'];$i_ahi_codigo_aor_indice=$row['i_ahi_codigo_aor_indice'];$i_ahi_codigo_ahi_indice=$row['i_ahi_codigo_ahi_indice'];
        $i_ahi_codigo_orp=$row['i_ahi_codigo_orp'];$s_ahi_cst_ipi=$row['s_ahi_cst_ipi'];$s_ahi_cst_pis=$row['s_ahi_cst_pis'];$s_ahi_cst_cofins=$row['s_ahi_cst_cofins'];$n_ahi_base_cofins=$row['n_ahi_base_cofins'];$n_ahi_base_pis=$row['n_ahi_base_pis'];$n_ahi_base_ipi=$row['n_ahi_base_ipi'];$n_ahi_aliquota_pis=$row['n_ahi_aliquota_pis'];
        $n_ahi_aliquota_cofins=$row['n_ahi_aliquota_cofins'];$s_ahi_indicacao_movimento=$row['s_ahi_indicacao_movimento'];$n_ahi_aliquota_st=$row['n_ahi_aliquota_st'];$s_ahi_apuracao_ipi=$row['s_ahi_apuracao_ipi'];$s_ahi_cod_enquadramento_ipi=$row['s_ahi_cod_enquadramento_ipi'];$n_ahi_qtd_base_pis=$row['n_ahi_qtd_base_pis'];$n_ahi_aliq_pis_reais=$row['n_ahi_aliq_pis_reais'];
        $n_ahi_qtde_base_cofins=$row['n_ahi_qtde_base_cofins'];$n_ahi_aliq_cofins_reais=$row['n_ahi_aliq_cofins_reais'];$i_ahi_csosn=$row['i_ahi_csosn'];$i_ahi_numero_adicao=$row['i_ahi_numero_adicao'];$i_ahi_num_seq_item_adicao=$row['i_ahi_num_seq_item_adicao'];$s_ahi_cod_fabri_estrangeiro=$row['s_ahi_cod_fabri_estrangeiro'];$n_ahi_valor_desc_item_di=$row['n_ahi_valor_desc_item_di'];
        $n_ahi_valor_red_icms=$row['n_ahi_valor_red_icms'];$n_ahi_seguro_item=$row['n_ahi_seguro_item'];$s_ahi_totalizador_parcial=$row['s_ahi_totalizador_parcial'];$n_ahi_perc_seguro=$row['n_ahi_perc_seguro'];$i_ahi_csosn_xml=$row['i_ahi_csosn_xml'];$s_ahi_sit_tributaria_xml=$row['s_ahi_sit_tributaria_xml'];$n_ahi_base_ii=$row['n_ahi_base_ii'];$n_ahi_valor_ii=$row['n_ahi_valor_ii'];$n_ahi_aliquota_ii=$row['n_ahi_aliquota_ii'];
        $n_ahi_base_icms_xml=$row['n_ahi_base_icms_xml'];$n_ahi_aliq_icms_xml=$row['n_ahi_aliq_icms_xml'];$n_ahi_valor_icms_xml=$row['n_ahi_valor_icms_xml'];$n_ahi_base_st_xml=$row['n_ahi_base_st_xml'];$n_ahi_valor_st_xml=$row['n_ahi_valor_st_xml'];$n_ahi_valor_acrescimo_item=$row['n_ahi_valor_acrescimo_item'];$s_ahi_cst_pis_xml=$row['s_ahi_cst_pis_xml'];$s_ahi_cst_cofins_xml=$row['s_ahi_cst_cofins_xml'];$n_ahi_base_cofins_xml=$row['n_ahi_base_cofins_xml'];
        $n_ahi_base_pis_xml=$row['n_ahi_base_pis_xml'];$n_ahi_valor_pis_xml=$row['n_ahi_valor_pis_xml'];$n_ahi_valor_cofins_xml=$row['n_ahi_valor_cofins_xml'];$s_ahi_operacao=$row['s_ahi_operacao'];$i_ahi_codigo_cna=$row['i_ahi_codigo_cna'];$s_ahi_codigo_lei116=$row['s_ahi_codigo_lei116'];$n_ahi_desp_aduaneiras=$row['n_ahi_desp_aduaneiras'];$i_ahi_codigo_frem=$row['i_ahi_codigo_frem'];$i_ahi_codigo_fpro=$row['i_ahi_codigo_fpro'];$n_ahi_tot_impostos=$row['n_ahi_tot_impostos'];
        $n_ahi_qtde_devolvido=$row['n_ahi_qtde_devolvido'];$n_ahi_perc_red_icms_st=$row['n_ahi_perc_red_icms_st'];$n_ahi_vlr_red_base_icms_st=$row['n_ahi_vlr_red_base_icms_st'];$i_ahi_cod_devolucao=$row['i_ahi_cod_devolucao'];$s_ahi_chave_fci=$row['s_ahi_chave_fci'];$n_ahi_mva_xml=$row['n_ahi_mva_xml'];$i_ahi_ide_entregue=$row['i_ahi_ide_entregue'];$i_ahi_uso_cosumo=$row['i_ahi_uso_cosumo'];
        if ($i_ahi_uso_cosumo=='') {
            $i_ahi_uso_cosumo='NULL';
        }
        $n_ahi_perc_diferimento=$row['n_ahi_perc_diferimento'];
        if ($n_ahi_perc_diferimento=='') {
            $n_ahi_perc_diferimento='NULL';
        }
        
        
        $s_ahi_codigo_ser_mun=$row['s_ahi_codigo_ser_mun'];
        $i_ahi_valor_imposto_diferido=$row['i_ahi_valor_imposto_diferido'];
        if ($i_ahi_valor_imposto_diferido=='' ) {
            $i_ahi_valor_imposto_diferido='NULL';
        }
        $s_ahi_pedido_compra_nfe=$row['s_ahi_pedido_compra_nfe'];$i_ahi_item_ped_compra_nfe=$row['i_ahi_item_ped_compra_nfe'];$s_ahi_cest=$row['s_ahi_cest'];$n_ahi_perc_ipi_devol=$row['n_ahi_perc_ipi_devol'];$n_ahi_valor_ipi_devol=$row['n_ahi_valor_ipi_devol'];
        pg_query($conexaoc,"INSERT INTO ahistorico2(cidehistorico, cienhistorico, cisahistorico, cipehistorico, ctiphistorico,cmothistorico, cprohistorico, cemihistorico, cvcohistorico, cvcuhistorico,cvbrhistorico, cvlqhistorico, cvdeshistorico, cvfrehistorico,
        cvachistorico, cvichistorico, cviphistorico, cvishistorico, cvfihistorico,cvtothistorico, cdeshistorico, ccfohistorico, csaihisotorico,centhistorico, cforhistorico, cclihistorico, cicmhistorico, cipihistorico,cisshistorico, cluchistorico, cpdehistorico, cpfrhistorico, cpachistorico,cpfihistorico, cpcohistorico, cvohistorico, ctipphistorico, cdtcahistorico,chocahistorico, cuscadhistorico, copcadhistorico, cdtatuhistorico,choatuhistorico, copatuhistorico, cusatuhistorico, cemphistorico,
        cvarealhistorico, cbaiesthistorico, fot_historico, dep_historico,valor_foto, perc_cus_ope, val_cus_ope, perc_imp_venda, val_imp_venda,prec_mim_produto, i_ahi_codigo_cat, i_ahi_codigo_sct, i_ahi_codigo_ven,n_ahi_valor_custo_venda, n_ahi_perc_custo_venda, n_ahi_perc_reducao,n_ahi_valor_icms_formacao_preco, n_ahi_perc_icms_formacao_preco,n_ahi_valor_lucro_zero, n_ahi_valor_lucro, n_ahi_custo_medio,n_ahi_preco_padrao, n_ahi_perc_fun_rural, n_ahi_valor_fun_rural,i_ahi_cultura_aplicar, i_ahi_receita_ide, n_ahi_base_icms, n_ahi_base_substituicao,n_ahi_icms_substituicao, i_ahi_seq_ordem_item, s_ahi_cfop_contabil,
        i_ahi_clas_fical, s_ahi_sit_tributaria, n_ahi_per_icms_subs,n_ahi_per_conv_subst, i_ahi_codigo_fprc, i_ahi_codigo_feve, i_ahi_ide_pedido,i_ahi_codigo_parceria, i_ahi_ide_historico_pedido, n_ahi_qtd_entregue_pedido,i_ahi_ide_ahi, i_ahi_saldo_produto, i_ahi_ide_romaneio, s_ahi_obs_item,i_ahi_cod_produto_cli_acl, n_ahi_valor_desconto_nota, n_ahi_perc_desconto_item,i_ahi_codigo_tcb, n_ahi_perc_desc_nota, n_ahi_valor_tot_item,n_ahi_valor_tot_nota, n_ahi_valor_desc_item, n_ahi_valor_pis,n_ahi_valor_cofins, i_ahi_codigo_aor, s_ahi_complemento_impresso,s_ahi_garantia_prod, i_ahi_codigo_aor_indice, i_ahi_codigo_ahi_indice,
        i_ahi_codigo_orp, s_ahi_cst_ipi, s_ahi_cst_pis, s_ahi_cst_cofins,n_ahi_base_cofins, n_ahi_base_pis, n_ahi_base_ipi, n_ahi_aliquota_pis,n_ahi_aliquota_cofins, s_ahi_indicacao_movimento, n_ahi_aliquota_st,s_ahi_apuracao_ipi, s_ahi_cod_enquadramento_ipi, n_ahi_qtd_base_pis,n_ahi_aliq_pis_reais, n_ahi_qtde_base_cofins, n_ahi_aliq_cofins_reais,i_ahi_csosn, i_ahi_numero_adicao, i_ahi_num_seq_item_adicao,s_ahi_cod_fabri_estrangeiro, n_ahi_valor_desc_item_di, n_ahi_valor_red_icms,n_ahi_seguro_item, s_ahi_totalizador_parcial, n_ahi_perc_seguro,i_ahi_csosn_xml, s_ahi_sit_tributaria_xml, n_ahi_base_ii, n_ahi_valor_ii,n_ahi_aliquota_ii, n_ahi_base_icms_xml, n_ahi_aliq_icms_xml,
        n_ahi_valor_icms_xml, n_ahi_base_st_xml, n_ahi_valor_st_xml,n_ahi_valor_acrescimo_item, s_ahi_cst_pis_xml, s_ahi_cst_cofins_xml,n_ahi_base_cofins_xml, n_ahi_base_pis_xml, n_ahi_valor_pis_xml,n_ahi_valor_cofins_xml, s_ahi_operacao, i_ahi_codigo_cna, s_ahi_codigo_lei116,n_ahi_desp_aduaneiras, i_ahi_codigo_frem, i_ahi_codigo_fpro,n_ahi_tot_impostos, n_ahi_qtde_devolvido, n_ahi_perc_red_icms_st,n_ahi_vlr_red_base_icms_st, i_ahi_cod_devolucao, s_ahi_chave_fci,n_ahi_mva_xml, i_ahi_ide_entregue, i_ahi_uso_cosumo, n_ahi_perc_diferimento,s_ahi_codigo_ser_mun, i_ahi_valor_imposto_diferido, s_ahi_pedido_compra_nfe,i_ahi_item_ped_compra_nfe, s_ahi_cest, n_ahi_perc_ipi_devol,n_ahi_valor_ipi_devol)
        VALUES ('$cidehistorico',NULL,'$cisahistorico','$cipehistorico','$ctiphistorico','$cmothistorico','$cprohistorico','$cemihistorico','$cvcohistorico','$cvcuhistorico','$cvbrhistorico','$cvlqhistorico','$cvdeshistorico','$cvfrehistorico','$cvachistorico','$cvichistorico','$cviphistorico','$cvishistorico','$cvfihistorico','$cvtothistorico','$cdeshistorico','$ccfohistorico','$csaihisotorico','$centhistorico',NULL,'$cclihistorico','$cicmhistorico','$cipihistorico','$cisshistorico','$cluchistorico','$cpdehistorico','$cpfrhistorico','$cpachistorico','$cpfihistorico','$cpcohistorico','$cvohistorico','$ctipphistorico','$cdtcahistorico','$chocahistorico','$cuscadhistorico',
        '$copcadhistorico',NULL,NULL,$copatuhistorico,'$cusatuhistorico','$cemphistorico','$cvarealhistorico','$cbaiesthistorico','$fot_historico','$dep_historico','$valor_foto',$perc_cus_ope,'$val_cus_ope','$perc_imp_venda','$val_imp_venda','$prec_mim_produto','$i_ahi_codigo_cat','$i_ahi_codigo_sct','$i_ahi_codigo_ven','$n_ahi_valor_custo_venda','$n_ahi_perc_custo_venda','$n_ahi_perc_reducao','$n_ahi_valor_icms_formacao_preco','$n_ahi_perc_icms_formacao_preco','$n_ahi_valor_lucro_zero','$n_ahi_valor_lucro','$n_ahi_custo_medio','$n_ahi_preco_padrao','$n_ahi_perc_fun_rural','$n_ahi_valor_fun_rural','$i_ahi_cultura_aplicar','$i_ahi_receita_ide','$n_ahi_base_icms',
        '$n_ahi_base_substituicao','$n_ahi_icms_substituicao','$i_ahi_seq_ordem_item','$s_ahi_cfop_contabil','$i_ahi_clas_fical','$s_ahi_sit_tributaria','$n_ahi_per_icms_subs','$n_ahi_per_conv_subst',NULL,NULL,NULL,'$i_ahi_codigo_parceria','$i_ahi_ide_historico_pedido','$n_ahi_qtd_entregue_pedido','$i_ahi_ide_ahi',NULL,'$i_ahi_ide_romaneio','$s_ahi_obs_item','$i_ahi_cod_produto_cli_acl','$n_ahi_valor_desconto_nota','$n_ahi_perc_desconto_item','$i_ahi_codigo_tcb','$n_ahi_perc_desc_nota','$n_ahi_valor_tot_item','$n_ahi_valor_tot_nota','$n_ahi_valor_desc_item','$n_ahi_valor_pis','$n_ahi_valor_cofins','$i_ahi_codigo_aor','$s_ahi_complemento_impresso','$s_ahi_garantia_prod',NULL,NULL,NULL,'$s_ahi_cst_ipi',
        '$s_ahi_cst_pis','$s_ahi_cst_cofins','$n_ahi_base_cofins','$n_ahi_base_pis','$n_ahi_base_ipi','$n_ahi_aliquota_pis','$n_ahi_aliquota_cofins','$s_ahi_indicacao_movimento','$n_ahi_aliquota_st','$s_ahi_apuracao_ipi','$s_ahi_cod_enquadramento_ipi','$n_ahi_qtd_base_pis','$n_ahi_aliq_pis_reais','$n_ahi_qtde_base_cofins','$n_ahi_aliq_cofins_reais','$i_ahi_csosn','$i_ahi_numero_adicao','$i_ahi_num_seq_item_adicao','$s_ahi_cod_fabri_estrangeiro','$n_ahi_valor_desc_item_di','$n_ahi_valor_red_icms','$n_ahi_seguro_item','$s_ahi_totalizador_parcial','$n_ahi_perc_seguro',NULL,'$s_ahi_sit_tributaria_xml','$n_ahi_base_ii','$n_ahi_valor_ii','$n_ahi_aliquota_ii','$n_ahi_base_icms_xml','$n_ahi_aliq_icms_xml','$n_ahi_valor_icms_xml',
        '$n_ahi_base_st_xml','$n_ahi_valor_st_xml','$n_ahi_valor_acrescimo_item','$s_ahi_cst_pis_xml','$s_ahi_cst_cofins_xml','$n_ahi_base_cofins_xml','$n_ahi_base_pis_xml','$n_ahi_valor_pis_xml','$n_ahi_valor_cofins_xml','$s_ahi_operacao','$i_ahi_codigo_cna','$s_ahi_codigo_lei116','$n_ahi_desp_aduaneiras','$i_ahi_codigo_frem','$i_ahi_codigo_fpro','$n_ahi_tot_impostos','$n_ahi_qtde_devolvido','$n_ahi_perc_red_icms_st','$n_ahi_vlr_red_base_icms_st','$i_ahi_cod_devolucao','$s_ahi_chave_fci','$n_ahi_mva_xml','$i_ahi_ide_entregue',$i_ahi_uso_cosumo,$n_ahi_perc_diferimento,'$s_ahi_codigo_ser_mun',$i_ahi_valor_imposto_diferido,'$s_ahi_pedido_compra_nfe','$i_ahi_item_ped_compra_nfe','$s_ahi_cest','$n_ahi_perc_ipi_devol',
        '$n_ahi_valor_ipi_devol')");
        
        
    }
    $comandocnpjfornecedor= "Select ccnpjempresa from tempresa where ccodempresa = '$ideempresa'";
    $excomandocnpjfornecedor= pg_query($conexaoj,$comandocnpjfornecedor);
    $resulcomandocnpjfornecedor= pg_fetch_array($excomandocnpjfornecedor);
    $cnpj= $resulcomandocnpjfornecedor ['ccnpjempresa'];
    echo "<script>alert('Passando Para Servidor de Caçador');</script>";
    $comandocontadorv = 'SELECT COUNT(*) FROM ahistorico2';
    $contav = pg_query($conexaoc,$comandocontadorv);
    $tottalv=pg_fetch_array($contav);
    $totalv=$tottalv ['count'];
    if ($tottal<>$tottalv) {
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Na Sincronização **</font></b></p>";
        exit;
    }
    
    $comandofornecedor="select ccodfornecedor from afornecedor where ccgcfornecedor = '$cnpj' ";
    $excomandofornecedor = pg_query($conexaoc,$comandofornecedor);
    $resulcomandofornecedor = pg_fetch_array($excomandofornecedor);
    $fornecedor = $resulcomandofornecedor['ccodfornecedor'];
    if ($resulcomandofornecedor == ''){
        echo"<script>alert('Fornecedor não cadastrado em Caçador');</script>";
        exit;
    }
    $comandoempresadestino= "select ccodempresa from tempresa where ccnpjempresa = '$cnpjempressadestino' ";
    $excomandoempresadestino= pg_query($conexaoc,$comandoempresadestino);
    $resultadocomandoEmpresaDestino= pg_fetch_array($excomandoempresadestino);
    $empnfe=$resultadocomandoEmpresaDestino['ccodempresa'];
    if ($resultadocomandoEmpresaDestino == ''){
        echo "<script>alert('Empresa destino não confere com o cliente da Nfe favor verefique');</script>";
        echo $voltalogin;
        exit;
    }
    $comandovereficanfe= "select cnfientradas from aentradas where cnfientradas = '$numeronfe'and cforentradas = '$fornecedor' ";
    $excomandocomandovereficanfe= pg_query($conexaoc,$comandovereficanfe);
    $resultadocomandovereficanfe= pg_fetch_array($excomandocomandovereficanfe);
    if ( $resultadocomandovereficanfe >= '1'){
        echo "<script>alert('Este Numero de Nfe: $numeronfe  Já existe para esse fornecedor');</script>";
        echo "$voltalogin";
        exit;
    }
    pg_query($conexaoc,"select logar('COPIA',1,0)");pg_query($conexaoc,"INSERT INTO aentradas(
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
            VALUES (nextval('seque_aentradas'),'V','$fornecedor','$datanfe','$datanfe','$numeronfe','$totalsaidas','$totalsaidas','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','1.152','0.00','0.00',NULL,'PAGO','0','','$datanfe','$time',null,null,'0',null,'$login','','$empnfe','01','','0.00','0.00','','0.00',null,'3','0.00','0.00','0.00','0.00','','','0.00','','0','0','0.00','0.00','0.00','0.00','$idehistorico',null)");
    $comandoentrada = "select csidentradas from aentradas where cemientradas = '$datanfe' and cnfientradas = '$numeronfe' and cforentradas =  '$fornecedor' and cempentrada = '$empnfe'";
    $selecaoentrada=pg_query($conexaoc,$comandoentrada );
    $cienhistorico=pg_fetch_array($selecaoentrada);
    $ideentradahistorico = $cienhistorico ['csidentradas'];
    if ($cienhistorico == ''){
        pg_query($conexaoc,'delete from ahistorico2');
        echo "<script>alert('Nota não foi incluida automaticamente');</script>";
        echo '<br><br>';
        echo '<br><br>';
        echo "<span style='color:red;'> Confira os dados coletados </span>";
        echo '<br><br>';
        echo "'$empnfe', '$fornecedor', Emisão: '$datanfe', Numero Da Nfe: '$numeronfe', Empresa Da Nfe: '$empnfe'";
        exit;
    }
    pg_query($conexaoc,"update ahistorico2 set centhistorico = csaihisotorico where cprohistorico = cprohistorico");
    pg_query($conexaoc,"update ahistorico2 set csaihisotorico = '0'");
    pg_query($conexaoc,"update ahistorico2 set ctiphistorico = 'E'");
    pg_query($conexaoc,"update ahistorico2 set cisahistorico = '0'");
    pg_query($conexaoc,"update ahistorico2 set cidehistorico = nextval('seque_ahistorico')");
    pg_query($conexaoc,"update ahistorico2 set cmothistorico= 'TRANFERENCIA DE JOINVILLE FEITA AUTOMATICAMENTE'");
    pg_query($conexaoc,"update ahistorico2 set cclihistorico = '0'");
    pg_query($conexaoc,"update ahistorico2 set cipehistorico = '0'");
    pg_query($conexaoc,"update ahistorico2 set ccfohistorico = '1.152'");
    pg_query($conexaoc,"update ahistorico2 set cemphistorico = '$empnfe'");
    pg_query($conexaoc,"update ahistorico2 set cforhistorico= '$fornecedor'");
    pg_query($conexaoc,"update ahistorico2 set cienhistorico=  '$ideentradahistorico'");
    pg_query($conexaoc,"insert into ahistorico select * from ahistorico2");
    pg_query($conexaoc,"delete from ahistorico2");
    echo "<script>alert('Lancamento Concluido com Suceso ');</script>";
    echo $voltalogin;
    exit;
}
if ($transferencia == 6){
    $comandosenha= "select cnomope from parametros where cnomope= '$login'";
    $excomandosenha= pg_query($conexaoj,$comandosenha);
    $resulcomandosenha= pg_fetch_array($excomandosenha);
    if ($resulcomandosenha== '' ){
        echo $errologin;
        echo $voltalogin;
        exit;
    }
    $query="select cnomope,csenhausuario from parametros where cnomope= '$login' and csenhausuario='$senha'";
    $selecao=pg_query($conexaoj,$query);
    $resut= pg_fetch_array($selecao);
    if ($resut == ''){
        echo "$errosenha";
        echo "$voltalogin";
        exit;
    }
    echo $mensagemlogin;
    $comandosaidas="select cidesaidas,cempresasaidas,cnpj_saidas,ctotsaidas from asaidas where cemisaidas = '$datanfe' and cclisaidas = '$clientnfe' and cnotsaidas = '$numeronfe'";
    $selecaosaidas=pg_query($conexaoj,$comandosaidas);
    $cisahistorico=pg_fetch_array($selecaosaidas);
    $cnpjempressadestino= $cisahistorico['cnpj_saidas'];
    $idehistorico=$cisahistorico ['cidesaidas'];
    $ideempresa=$cisahistorico ['cempresasaidas'];
    $totalsaidas=$cisahistorico ['ctotsaidas'];
    if($cisahistorico == '' or $cnpjempressadestino == '' ){
        echo "<script>alert('Numero nota, cliente ou data invalidos por favor tente novamente ');</script>";
        echo $voltalogin;
        exit;
    }
    pg_query($conexaoj,"insert into ahistorico2 select * from ahistorico where cisahistorico = '$idehistorico'" );
    $comandocontador = "SELECT COUNT(*) FROM ahistorico2";
    $conta = pg_query($conexaoj,$comandocontador);
    $tottal=pg_fetch_array($conta);
    $total=$tottal ['count'];
    $comando="select *from ahistorico2";
    $excomando=pg_query($conexaoj,$comando);
    while($row = pg_fetch_assoc( $excomando)){
        $cidehistorico=$row['cidehistorico'];$cienhistorico=$row['cienhistorico'];$cisahistorico=$row['cisahistorico'];
        $cipehistorico=$row['cipehistorico'];$ctiphistorico=$row['ctiphistorico'];$cmothistorico=$row['cmothistorico'];
        $cprohistorico=$row['cprohistorico'];$cemihistorico=$row['cemihistorico'];$cvcohistorico=$row['cvcohistorico'];
        $cvcuhistorico=$row['cvcuhistorico'];$cvbrhistorico=$row['cvbrhistorico'];$cvlqhistorico=$row['cvlqhistorico'];
        $cvdeshistorico=$row['cvdeshistorico'];$cvfrehistorico=$row['cvfrehistorico'];$cvachistorico=$row['cvachistorico'];
        $cvichistorico=$row['cvichistorico'];$cviphistorico=$row['cviphistorico'];$cvishistorico=$row['cvishistorico'];
        $cvfihistorico=$row['cvfihistorico'];$cvtothistorico=$row['cvtothistorico'];$cdeshistorico=$row['cdeshistorico'];
        $ccfohistorico=$row['ccfohistorico'];$csaihisotorico=$row['csaihisotorico'];$centhistorico=$row['centhistorico'];
        $cforhistorico=$row['cforhistorico'];$cclihistorico=$row['cclihistorico'];$cicmhistorico=$row['cicmhistorico'];
        $cipihistorico=$row['cipihistorico'];$cisshistorico=$row['cisshistorico'];$cluchistorico=$row['cluchistorico'];
        $cpdehistorico=$row['cpdehistorico'];$cpfrhistorico=$row['cpfrhistorico'];$cpachistorico=$row['cpachistorico'];
        $cpfihistorico=$row['cpfihistorico'];$cpcohistorico=$row['cpcohistorico'];$cvohistorico=$row['cvohistorico'];
        $ctipphistorico=$row['ctipphistorico'];$cdtcahistorico=$row['cdtcahistorico'];$chocahistorico=$row['chocahistorico'];
        $cuscadhistorico=$row['cuscadhistorico'];$copcadhistorico=$row['copcadhistorico'];$cdtatuhistorico=$row['cdtatuhistorico'];
        $choatuhistorico=$row['choatuhistorico']; $copatuhistorico=$row['copatuhistorico'];
        if ($copatuhistorico=='') {
            $copatuhistorico='NULL';
        }
        $cusatuhistorico=$row['cusatuhistorico'];$cemphistorico=$row['cemphistorico'];$cvarealhistorico=$row['cvarealhistorico'];$cbaiesthistorico=$row['cbaiesthistorico'];
        $fot_historico=$row['fot_historico'];$dep_historico=$row['dep_historico'];$valor_foto=$row['valor_foto']; $perc_cus_ope=$row['perc_cus_ope'];
        if ($perc_cus_ope=='') {
            $perc_cus_ope='NULL';
        }
        $val_cus_ope=$row['val_cus_ope'];$perc_imp_venda=$row['perc_imp_venda'];$val_imp_venda=$row['val_imp_venda'];$prec_mim_produto=$row['prec_mim_produto'];
        $i_ahi_codigo_cat=$row['i_ahi_codigo_cat'];$i_ahi_codigo_sct=$row['i_ahi_codigo_sct'];$i_ahi_codigo_ven=$row['i_ahi_codigo_ven'];$n_ahi_valor_custo_venda=$row['n_ahi_valor_custo_venda'];
        $n_ahi_perc_custo_venda=$row['n_ahi_perc_custo_venda'];$n_ahi_perc_reducao=$row['n_ahi_perc_reducao'];
        $n_ahi_valor_icms_formacao_preco=$row['n_ahi_valor_icms_formacao_preco'];$n_ahi_perc_icms_formacao_preco=$row['n_ahi_perc_icms_formacao_preco'];
        $n_ahi_valor_lucro_zero=$row['n_ahi_valor_lucro_zero'];$n_ahi_valor_lucro=$row['n_ahi_valor_lucro'];$n_ahi_custo_medio=$row['n_ahi_custo_medio'];
        $n_ahi_preco_padrao=$row['n_ahi_preco_padrao']; $n_ahi_perc_fun_rural=$row['n_ahi_perc_fun_rural'];$n_ahi_valor_fun_rural=$row['n_ahi_valor_fun_rural'];
        $i_ahi_cultura_aplicar=$row['i_ahi_cultura_aplicar'];$i_ahi_receita_ide=$row['i_ahi_receita_ide'];$n_ahi_base_icms=$row['n_ahi_base_icms'];
        $n_ahi_base_substituicao=$row['n_ahi_base_substituicao'];$n_ahi_icms_substituicao=$row['n_ahi_icms_substituicao'];$i_ahi_seq_ordem_item=$row['i_ahi_seq_ordem_item'];
        $s_ahi_cfop_contabil=$row['s_ahi_cfop_contabil'];$i_ahi_clas_fical=$row['i_ahi_clas_fical'];$s_ahi_sit_tributaria=$row['s_ahi_sit_tributaria'];$n_ahi_per_icms_subs=$row['n_ahi_per_icms_subs'];
        $n_ahi_per_conv_subst=$row['n_ahi_per_conv_subst'];$i_ahi_codigo_fprc=$row['i_ahi_codigo_fprc'];$i_ahi_codigo_feve=$row['i_ahi_codigo_feve'];
        $i_ahi_ide_pedido=$row['i_ahi_ide_pedido'];$i_ahi_codigo_parceria=$row['i_ahi_codigo_parceria'];$i_ahi_ide_historico_pedido=$row['i_ahi_ide_historico_pedido'];
        $n_ahi_qtd_entregue_pedido=$row['n_ahi_qtd_entregue_pedido'];$i_ahi_ide_ahi=$row['i_ahi_ide_ahi'];$i_ahi_saldo_produto=$row['i_ahi_saldo_produto'];
        $i_ahi_ide_romaneio=$row['i_ahi_ide_romaneio'];$s_ahi_obs_item=$row['s_ahi_obs_item'];$i_ahi_cod_produto_cli_acl=$row['i_ahi_cod_produto_cli_acl'];
        $n_ahi_valor_desconto_nota=$row['n_ahi_valor_desconto_nota'];$n_ahi_perc_desconto_item=$row['n_ahi_perc_desconto_item'];$i_ahi_codigo_tcb=$row['i_ahi_codigo_tcb'];
        $n_ahi_perc_desc_nota=$row['n_ahi_perc_desc_nota'];$n_ahi_valor_tot_item=$row['n_ahi_valor_tot_item'];$n_ahi_valor_tot_nota=$row['n_ahi_valor_tot_nota'];$n_ahi_valor_desc_item=$row['n_ahi_valor_desc_item'];$n_ahi_valor_pis=$row['n_ahi_valor_pis'];
        $n_ahi_valor_cofins=$row['n_ahi_valor_cofins'];$i_ahi_codigo_aor=$row['i_ahi_codigo_aor'];$s_ahi_complemento_impresso=$row['s_ahi_complemento_impresso'];$s_ahi_garantia_prod=$row['s_ahi_garantia_prod'];$i_ahi_codigo_aor_indice=$row['i_ahi_codigo_aor_indice'];$i_ahi_codigo_ahi_indice=$row['i_ahi_codigo_ahi_indice'];
        $i_ahi_codigo_orp=$row['i_ahi_codigo_orp'];$s_ahi_cst_ipi=$row['s_ahi_cst_ipi'];$s_ahi_cst_pis=$row['s_ahi_cst_pis'];$s_ahi_cst_cofins=$row['s_ahi_cst_cofins'];$n_ahi_base_cofins=$row['n_ahi_base_cofins'];$n_ahi_base_pis=$row['n_ahi_base_pis'];$n_ahi_base_ipi=$row['n_ahi_base_ipi'];$n_ahi_aliquota_pis=$row['n_ahi_aliquota_pis'];
        $n_ahi_aliquota_cofins=$row['n_ahi_aliquota_cofins'];$s_ahi_indicacao_movimento=$row['s_ahi_indicacao_movimento'];$n_ahi_aliquota_st=$row['n_ahi_aliquota_st'];$s_ahi_apuracao_ipi=$row['s_ahi_apuracao_ipi'];$s_ahi_cod_enquadramento_ipi=$row['s_ahi_cod_enquadramento_ipi'];$n_ahi_qtd_base_pis=$row['n_ahi_qtd_base_pis'];$n_ahi_aliq_pis_reais=$row['n_ahi_aliq_pis_reais'];
        $n_ahi_qtde_base_cofins=$row['n_ahi_qtde_base_cofins'];$n_ahi_aliq_cofins_reais=$row['n_ahi_aliq_cofins_reais'];$i_ahi_csosn=$row['i_ahi_csosn'];$i_ahi_numero_adicao=$row['i_ahi_numero_adicao'];$i_ahi_num_seq_item_adicao=$row['i_ahi_num_seq_item_adicao'];$s_ahi_cod_fabri_estrangeiro=$row['s_ahi_cod_fabri_estrangeiro'];$n_ahi_valor_desc_item_di=$row['n_ahi_valor_desc_item_di'];
        $n_ahi_valor_red_icms=$row['n_ahi_valor_red_icms'];$n_ahi_seguro_item=$row['n_ahi_seguro_item'];$s_ahi_totalizador_parcial=$row['s_ahi_totalizador_parcial'];$n_ahi_perc_seguro=$row['n_ahi_perc_seguro'];$i_ahi_csosn_xml=$row['i_ahi_csosn_xml'];$s_ahi_sit_tributaria_xml=$row['s_ahi_sit_tributaria_xml'];$n_ahi_base_ii=$row['n_ahi_base_ii'];$n_ahi_valor_ii=$row['n_ahi_valor_ii'];$n_ahi_aliquota_ii=$row['n_ahi_aliquota_ii'];
        $n_ahi_base_icms_xml=$row['n_ahi_base_icms_xml'];$n_ahi_aliq_icms_xml=$row['n_ahi_aliq_icms_xml'];$n_ahi_valor_icms_xml=$row['n_ahi_valor_icms_xml'];$n_ahi_base_st_xml=$row['n_ahi_base_st_xml'];$n_ahi_valor_st_xml=$row['n_ahi_valor_st_xml'];$n_ahi_valor_acrescimo_item=$row['n_ahi_valor_acrescimo_item'];$s_ahi_cst_pis_xml=$row['s_ahi_cst_pis_xml'];$s_ahi_cst_cofins_xml=$row['s_ahi_cst_cofins_xml'];$n_ahi_base_cofins_xml=$row['n_ahi_base_cofins_xml'];
        $n_ahi_base_pis_xml=$row['n_ahi_base_pis_xml'];$n_ahi_valor_pis_xml=$row['n_ahi_valor_pis_xml'];$n_ahi_valor_cofins_xml=$row['n_ahi_valor_cofins_xml'];$s_ahi_operacao=$row['s_ahi_operacao'];$i_ahi_codigo_cna=$row['i_ahi_codigo_cna'];$s_ahi_codigo_lei116=$row['s_ahi_codigo_lei116'];$n_ahi_desp_aduaneiras=$row['n_ahi_desp_aduaneiras'];$i_ahi_codigo_frem=$row['i_ahi_codigo_frem'];$i_ahi_codigo_fpro=$row['i_ahi_codigo_fpro'];$n_ahi_tot_impostos=$row['n_ahi_tot_impostos'];
        $n_ahi_qtde_devolvido=$row['n_ahi_qtde_devolvido'];$n_ahi_perc_red_icms_st=$row['n_ahi_perc_red_icms_st'];$n_ahi_vlr_red_base_icms_st=$row['n_ahi_vlr_red_base_icms_st'];$i_ahi_cod_devolucao=$row['i_ahi_cod_devolucao'];$s_ahi_chave_fci=$row['s_ahi_chave_fci'];$n_ahi_mva_xml=$row['n_ahi_mva_xml'];$i_ahi_ide_entregue=$row['i_ahi_ide_entregue'];$i_ahi_uso_cosumo=$row['i_ahi_uso_cosumo'];$n_ahi_perc_diferimento=$row['n_ahi_perc_diferimento'];$s_ahi_codigo_ser_mun=$row['s_ahi_codigo_ser_mun'];
        $i_ahi_valor_imposto_diferido=$row['i_ahi_valor_imposto_diferido'];$s_ahi_pedido_compra_nfe=$row['s_ahi_pedido_compra_nfe'];$i_ahi_item_ped_compra_nfe=$row['i_ahi_item_ped_compra_nfe'];$s_ahi_cest=$row['s_ahi_cest'];$n_ahi_perc_ipi_devol=$row['n_ahi_perc_ipi_devol'];$n_ahi_valor_ipi_devol=$row['n_ahi_valor_ipi_devol'];
        pg_query($conexaov,"INSERT INTO ahistorico2(cidehistorico, cienhistorico, cisahistorico, cipehistorico, ctiphistorico,cmothistorico, cprohistorico, cemihistorico, cvcohistorico, cvcuhistorico,cvbrhistorico, cvlqhistorico, cvdeshistorico, cvfrehistorico,
        cvachistorico, cvichistorico, cviphistorico, cvishistorico, cvfihistorico,cvtothistorico, cdeshistorico, ccfohistorico, csaihisotorico,centhistorico, cforhistorico, cclihistorico, cicmhistorico, cipihistorico,cisshistorico, cluchistorico, cpdehistorico, cpfrhistorico, cpachistorico,cpfihistorico, cpcohistorico, cvohistorico, ctipphistorico, cdtcahistorico,chocahistorico, cuscadhistorico, copcadhistorico, cdtatuhistorico,choatuhistorico, copatuhistorico, cusatuhistorico, cemphistorico,
        cvarealhistorico, cbaiesthistorico, fot_historico, dep_historico,valor_foto, perc_cus_ope, val_cus_ope, perc_imp_venda, val_imp_venda,prec_mim_produto, i_ahi_codigo_cat, i_ahi_codigo_sct, i_ahi_codigo_ven,n_ahi_valor_custo_venda, n_ahi_perc_custo_venda, n_ahi_perc_reducao,n_ahi_valor_icms_formacao_preco, n_ahi_perc_icms_formacao_preco,n_ahi_valor_lucro_zero, n_ahi_valor_lucro, n_ahi_custo_medio,n_ahi_preco_padrao, n_ahi_perc_fun_rural, n_ahi_valor_fun_rural,i_ahi_cultura_aplicar, i_ahi_receita_ide, n_ahi_base_icms, n_ahi_base_substituicao,n_ahi_icms_substituicao, i_ahi_seq_ordem_item, s_ahi_cfop_contabil,
        i_ahi_clas_fical, s_ahi_sit_tributaria, n_ahi_per_icms_subs,n_ahi_per_conv_subst, i_ahi_codigo_fprc, i_ahi_codigo_feve, i_ahi_ide_pedido,i_ahi_codigo_parceria, i_ahi_ide_historico_pedido, n_ahi_qtd_entregue_pedido,i_ahi_ide_ahi, i_ahi_saldo_produto, i_ahi_ide_romaneio, s_ahi_obs_item,i_ahi_cod_produto_cli_acl, n_ahi_valor_desconto_nota, n_ahi_perc_desconto_item,i_ahi_codigo_tcb, n_ahi_perc_desc_nota, n_ahi_valor_tot_item,n_ahi_valor_tot_nota, n_ahi_valor_desc_item, n_ahi_valor_pis,n_ahi_valor_cofins, i_ahi_codigo_aor, s_ahi_complemento_impresso,s_ahi_garantia_prod, i_ahi_codigo_aor_indice, i_ahi_codigo_ahi_indice,
        i_ahi_codigo_orp, s_ahi_cst_ipi, s_ahi_cst_pis, s_ahi_cst_cofins,n_ahi_base_cofins, n_ahi_base_pis, n_ahi_base_ipi, n_ahi_aliquota_pis,n_ahi_aliquota_cofins, s_ahi_indicacao_movimento, n_ahi_aliquota_st,s_ahi_apuracao_ipi, s_ahi_cod_enquadramento_ipi, n_ahi_qtd_base_pis,n_ahi_aliq_pis_reais, n_ahi_qtde_base_cofins, n_ahi_aliq_cofins_reais,i_ahi_csosn, i_ahi_numero_adicao, i_ahi_num_seq_item_adicao,s_ahi_cod_fabri_estrangeiro, n_ahi_valor_desc_item_di, n_ahi_valor_red_icms,n_ahi_seguro_item, s_ahi_totalizador_parcial, n_ahi_perc_seguro,i_ahi_csosn_xml, s_ahi_sit_tributaria_xml, n_ahi_base_ii, n_ahi_valor_ii,n_ahi_aliquota_ii, n_ahi_base_icms_xml, n_ahi_aliq_icms_xml,
        n_ahi_valor_icms_xml, n_ahi_base_st_xml, n_ahi_valor_st_xml,n_ahi_valor_acrescimo_item, s_ahi_cst_pis_xml, s_ahi_cst_cofins_xml,n_ahi_base_cofins_xml, n_ahi_base_pis_xml, n_ahi_valor_pis_xml,n_ahi_valor_cofins_xml, s_ahi_operacao, i_ahi_codigo_cna, s_ahi_codigo_lei116,n_ahi_desp_aduaneiras, i_ahi_codigo_frem, i_ahi_codigo_fpro,n_ahi_tot_impostos, n_ahi_qtde_devolvido, n_ahi_perc_red_icms_st,n_ahi_vlr_red_base_icms_st, i_ahi_cod_devolucao, s_ahi_chave_fci,n_ahi_mva_xml, i_ahi_ide_entregue, i_ahi_uso_cosumo, n_ahi_perc_diferimento,s_ahi_codigo_ser_mun, i_ahi_valor_imposto_diferido, s_ahi_pedido_compra_nfe,i_ahi_item_ped_compra_nfe, s_ahi_cest, n_ahi_perc_ipi_devol,n_ahi_valor_ipi_devol)
        VALUES ('$cidehistorico',NULL,'$cisahistorico','$cipehistorico','$ctiphistorico','$cmothistorico','$cprohistorico','$cemihistorico','$cvcohistorico','$cvcuhistorico','$cvbrhistorico','$cvlqhistorico','$cvdeshistorico','$cvfrehistorico','$cvachistorico','$cvichistorico','$cviphistorico','$cvishistorico','$cvfihistorico','$cvtothistorico','$cdeshistorico','$ccfohistorico','$csaihisotorico','$centhistorico',NULL,'$cclihistorico','$cicmhistorico','$cipihistorico','$cisshistorico','$cluchistorico','$cpdehistorico','$cpfrhistorico','$cpachistorico','$cpfihistorico','$cpcohistorico','$cvohistorico','$ctipphistorico','$cdtcahistorico','$chocahistorico','$cuscadhistorico',
        '$copcadhistorico',NULL,NULL,'$copatuhistorico','$cusatuhistorico','$cemphistorico','$cvarealhistorico','$cbaiesthistorico','$fot_historico','$dep_historico','$valor_foto',$perc_cus_ope,'$val_cus_ope','$perc_imp_venda','$val_imp_venda','$prec_mim_produto','$i_ahi_codigo_cat','$i_ahi_codigo_sct','$i_ahi_codigo_ven','$n_ahi_valor_custo_venda','$n_ahi_perc_custo_venda','$n_ahi_perc_reducao','$n_ahi_valor_icms_formacao_preco','$n_ahi_perc_icms_formacao_preco','$n_ahi_valor_lucro_zero','$n_ahi_valor_lucro','$n_ahi_custo_medio','$n_ahi_preco_padrao','$n_ahi_perc_fun_rural','$n_ahi_valor_fun_rural','$i_ahi_cultura_aplicar','$i_ahi_receita_ide','$n_ahi_base_icms',
        '$n_ahi_base_substituicao','$n_ahi_icms_substituicao','$i_ahi_seq_ordem_item','$s_ahi_cfop_contabil','$i_ahi_clas_fical','$s_ahi_sit_tributaria','$n_ahi_per_icms_subs','$n_ahi_per_conv_subst',NULL,NULL,NULL,'$i_ahi_codigo_parceria','$i_ahi_ide_historico_pedido','$n_ahi_qtd_entregue_pedido','$i_ahi_ide_ahi',NULL,'$i_ahi_ide_romaneio','$s_ahi_obs_item','$i_ahi_cod_produto_cli_acl','$n_ahi_valor_desconto_nota','$n_ahi_perc_desconto_item','$i_ahi_codigo_tcb','$n_ahi_perc_desc_nota','$n_ahi_valor_tot_item','$n_ahi_valor_tot_nota','$n_ahi_valor_desc_item','$n_ahi_valor_pis','$n_ahi_valor_cofins','$i_ahi_codigo_aor','$s_ahi_complemento_impresso','$s_ahi_garantia_prod',NULL,NULL,NULL,'$s_ahi_cst_ipi',
        '$s_ahi_cst_pis','$s_ahi_cst_cofins','$n_ahi_base_cofins','$n_ahi_base_pis','$n_ahi_base_ipi','$n_ahi_aliquota_pis','$n_ahi_aliquota_cofins','$s_ahi_indicacao_movimento','$n_ahi_aliquota_st','$s_ahi_apuracao_ipi','$s_ahi_cod_enquadramento_ipi','$n_ahi_qtd_base_pis','$n_ahi_aliq_pis_reais','$n_ahi_qtde_base_cofins','$n_ahi_aliq_cofins_reais','$i_ahi_csosn','$i_ahi_numero_adicao','$i_ahi_num_seq_item_adicao','$s_ahi_cod_fabri_estrangeiro','$n_ahi_valor_desc_item_di','$n_ahi_valor_red_icms','$n_ahi_seguro_item','$s_ahi_totalizador_parcial','$n_ahi_perc_seguro',NULL,'$s_ahi_sit_tributaria_xml','$n_ahi_base_ii','$n_ahi_valor_ii','$n_ahi_aliquota_ii','$n_ahi_base_icms_xml','$n_ahi_aliq_icms_xml','$n_ahi_valor_icms_xml',
        '$n_ahi_base_st_xml','$n_ahi_valor_st_xml','$n_ahi_valor_acrescimo_item','$s_ahi_cst_pis_xml','$s_ahi_cst_cofins_xml','$n_ahi_base_cofins_xml','$n_ahi_base_pis_xml','$n_ahi_valor_pis_xml','$n_ahi_valor_cofins_xml','$s_ahi_operacao','$i_ahi_codigo_cna','$s_ahi_codigo_lei116','$n_ahi_desp_aduaneiras','$i_ahi_codigo_frem','$i_ahi_codigo_fpro','$n_ahi_tot_impostos','$n_ahi_qtde_devolvido','$n_ahi_perc_red_icms_st','$n_ahi_vlr_red_base_icms_st','$i_ahi_cod_devolucao','$s_ahi_chave_fci','$n_ahi_mva_xml','$i_ahi_ide_entregue','$i_ahi_uso_cosumo','$n_ahi_perc_diferimento','$s_ahi_codigo_ser_mun','$i_ahi_valor_imposto_diferido','$s_ahi_pedido_compra_nfe','$i_ahi_item_ped_compra_nfe','$s_ahi_cest','$n_ahi_perc_ipi_devol',
        '$n_ahi_valor_ipi_devol')");
    }
    $comandocnpjfornecedor= "Select ccnpjempresa from tempresa where ccodempresa = '$ideempresa'";
    $excomandocnpjfornecedor= pg_query($conexaoj,$comandocnpjfornecedor);
    $resulcomandocnpjfornecedor= pg_fetch_array($excomandocnpjfornecedor);
    $cnpj= $resulcomandocnpjfornecedor ['ccnpjempresa'];
    echo "<script>alert('Passando Para Servidor de Videira');</script>";
    $comandocontadorv = 'SELECT COUNT(*) FROM ahistorico2';
    $contav = pg_query($conexaov,$comandocontadorv);
    $tottalv=pg_fetch_array($contav);
    $totalv=$tottalv ['count'];
    if ($tottal<>$tottalv) {
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Na Sincronização**</font></b></p>";
        exit;
    }
    
    $comandofornecedor="select ccodfornecedor from afornecedor where ccgcfornecedor = '$cnpj' ";
    $excomandofornecedor = pg_query($conexaov,$comandofornecedor);
    $resulcomandofornecedor = pg_fetch_array($excomandofornecedor);
    $fornecedor = $resulcomandofornecedor['ccodfornecedor'];
    if ($resulcomandofornecedor == ''){
        echo"<script>alert('Fornecedor não cadastrado em Videira');</script>";
        exit;
    }
    $comandoempresadestino= "select ccodempresa from tempresa where ccnpjempresa = '$cnpjempressadestino' ";
    $excomandoempresadestino= pg_query($conexaov,$comandoempresadestino);
    $resultadocomandoEmpresaDestino= pg_fetch_array($excomandoempresadestino);
    $empnfe=$resultadocomandoEmpresaDestino['ccodempresa'];
    if ($resultadocomandoEmpresaDestino == ''){
        echo "<script>alert('Empresa destino não confere com o cliente da Nfe favor verefique');</script>";
        echo $voltalogin;
        exit;
    }
    $comandovereficanfe= "select cnfientradas from aentradas where cnfientradas = '$numeronfe'and cforentradas = '$fornecedor' ";
    $excomandocomandovereficanfe= pg_query($conexaov,$comandovereficanfe);
    $resultadocomandovereficanfe= pg_fetch_array($excomandocomandovereficanfe);
    if ( $resultadocomandovereficanfe >= '1'){
        echo "<script>alert('Este Numero de Nfe: $numeronfe  Já existe para esse fornecedor');</script>";
        echo "$voltalogin";
        exit;
    }
    pg_query($conexaov,"select logar('COPIA',1,0)");pg_query($conexaov,"INSERT INTO aentradas(
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
            VALUES (nextval('seque_aentradas'),'V','$fornecedor','$datanfe','$datanfe','$numeronfe','$totalsaidas','$totalsaidas','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','1.152','0.00','0.00',NULL,'PAGO','0','','$datanfe','$time',null,null,'0',null,'$login','','$empnfe','01','','0.00','0.00','','0.00',null,'3','0.00','0.00','0.00','0.00','','','0.00','','0','0','0.00','0.00','0.00','0.00','$idehistorico',null)");
    $comandoentrada = "select csidentradas from aentradas where cemientradas = '$datanfe' and cnfientradas = '$numeronfe' and cforentradas =  '$fornecedor' and cempentrada = '$empnfe'";
    $selecaoentrada=pg_query($conexaov,$comandoentrada );
    $cienhistorico=pg_fetch_array($selecaoentrada);
    $ideentradahistorico = $cienhistorico ['csidentradas'];
    if ($cienhistorico == ''){
        pg_query($conexaov,'delete from ahistorico2');
        echo "<script>alert('Nota não foi incluida automaticamente');</script>";
        echo '<br><br>';
        echo '<br><br>';
        echo "<span style='color:red;'> Confira os dados coletados </span>";
        echo '<br><br>';
        echo "'$empnfe', '$fornecedor', Emisão: '$datanfe', Numero Da Nfe: '$numeronfe', Empresa Da Nfe: '$empnfe'";
        exit;
    }
    pg_query($conexaov,"update ahistorico2 set centhistorico = csaihisotorico where cprohistorico = cprohistorico");
    pg_query($conexaov,"update ahistorico2 set csaihisotorico = '0'");
    pg_query($conexaov,"update ahistorico2 set ctiphistorico = 'E'");
    pg_query($conexaov,"update ahistorico2 set cisahistorico = '0'");
    pg_query($conexaov,"update ahistorico2 set cidehistorico = nextval('seque_ahistorico')");
    pg_query($conexaov,"update ahistorico2 set cmothistorico= 'TRANFERENCIA DE JOINVILLE FEITA AUTOMATICAMENTE'");
    pg_query($conexaov,"update ahistorico2 set cclihistorico = '0'");
    pg_query($conexaov,"update ahistorico2 set cipehistorico = '0'");
    pg_query($conexaov,"update ahistorico2 set ccfohistorico = '1.152'");
    pg_query($conexaov,"update ahistorico2 set cemphistorico = '$empnfe'");
    pg_query($conexaov,"update ahistorico2 set cforhistorico= '$fornecedor'");
    pg_query($conexaov,"update ahistorico2 set cienhistorico=  '$ideentradahistorico'");
    pg_query($conexaov,"insert into ahistorico select * from ahistorico2");
    pg_query($conexaov,"delete from ahistorico2");
    echo "<script>alert('Lancamento Concluido com Suceso ');</script>";
    echo $voltalogin;
    exit;
}
if ($transferencia == 8){
    $comandosenha= "select cnomope from parametros where cnomope= '$login'";
    $excomandosenha= pg_query($conexaoc,$comandosenha);
    $resulcomandosenha= pg_fetch_array($excomandosenha);
    if ($resulcomandosenha== '' ){
        echo $errologin;
        echo $voltalogin;
        exit;
    }
    $query="select cnomope,csenhausuario from parametros where cnomope= '$login' and csenhausuario='$senha'";
    $selecao=pg_query($conexaoc,$query);
    $resut= pg_fetch_array($selecao);
    if ($resut == ''){
        echo "$errosenha";
        echo "$voltalogin";
        exit;
    }
    echo $mensagemlogin;
    $comandosaidas="select cidesaidas,cempresasaidas,cnpj_saidas,ctotsaidas from asaidas where cemisaidas = '$datanfe' and cclisaidas = '$clientnfe' and cnotsaidas = '$numeronfe'";
    $selecaosaidas=pg_query($conexaoc,$comandosaidas);
    $cisahistorico=pg_fetch_array($selecaosaidas);
    $cnpjempressadestino= $cisahistorico['cnpj_saidas'];
    $idehistorico=$cisahistorico ['cidesaidas'];
    $ideempresa=$cisahistorico ['cempresasaidas'];
    $totalsaidas=$cisahistorico ['ctotsaidas'];
    if($cisahistorico == '' or $cnpjempressadestino == '' ){
        echo "<script>alert('Numero nota, cliente ou data invalidos por favor tente novamente ');</script>";
        echo $voltalogin;
        exit;
    }
    pg_query($conexaoc,"insert into ahistorico2 select * from ahistorico where cisahistorico = '$idehistorico'" );
    $comandocontador = "SELECT COUNT(*) FROM ahistorico2";
    $conta = pg_query($conexaoc,$comandocontador);
    $tottal=pg_fetch_array($conta);
    $total=$tottal ['count'];
    $comando="select *from ahistorico2";
    $excomando=pg_query($conexaoc,$comando);
    while($row = pg_fetch_assoc( $excomando)){
        $cidehistorico=$row['cidehistorico'];$cienhistorico=$row['cienhistorico'];$cisahistorico=$row['cisahistorico'];
        $cipehistorico=$row['cipehistorico'];$ctiphistorico=$row['ctiphistorico'];$cmothistorico=$row['cmothistorico'];
        $cprohistorico=$row['cprohistorico'];$cemihistorico=$row['cemihistorico'];$cvcohistorico=$row['cvcohistorico'];
        $cvcuhistorico=$row['cvcuhistorico'];$cvbrhistorico=$row['cvbrhistorico'];$cvlqhistorico=$row['cvlqhistorico'];
        $cvdeshistorico=$row['cvdeshistorico'];$cvfrehistorico=$row['cvfrehistorico'];$cvachistorico=$row['cvachistorico'];
        $cvichistorico=$row['cvichistorico'];$cviphistorico=$row['cviphistorico'];$cvishistorico=$row['cvishistorico'];
        $cvfihistorico=$row['cvfihistorico'];$cvtothistorico=$row['cvtothistorico'];$cdeshistorico=$row['cdeshistorico'];
        $ccfohistorico=$row['ccfohistorico'];$csaihisotorico=$row['csaihisotorico'];$centhistorico=$row['centhistorico'];
        $cforhistorico=$row['cforhistorico'];$cclihistorico=$row['cclihistorico'];$cicmhistorico=$row['cicmhistorico'];
        $cipihistorico=$row['cipihistorico'];$cisshistorico=$row['cisshistorico'];$cluchistorico=$row['cluchistorico'];
        $cpdehistorico=$row['cpdehistorico'];$cpfrhistorico=$row['cpfrhistorico'];$cpachistorico=$row['cpachistorico'];
        $cpfihistorico=$row['cpfihistorico'];$cpcohistorico=$row['cpcohistorico'];$cvohistorico=$row['cvohistorico'];
        $ctipphistorico=$row['ctipphistorico'];$cdtcahistorico=$row['cdtcahistorico'];$chocahistorico=$row['chocahistorico'];
        $cuscadhistorico=$row['cuscadhistorico'];$copcadhistorico=$row['copcadhistorico'];$cdtatuhistorico=$row['cdtatuhistorico'];
        $choatuhistorico=$row['choatuhistorico']; $copatuhistorico=$row['copatuhistorico'];
        if ($copatuhistorico) {
            $copatuhistorico=='NULL';
        }
        $cusatuhistorico=$row['cusatuhistorico'];$cemphistorico=$row['cemphistorico'];$cvarealhistorico=$row['cvarealhistorico'];$cbaiesthistorico=$row['cbaiesthistorico'];
        $fot_historico=$row['fot_historico'];$dep_historico=$row['dep_historico'];$valor_foto=$row['valor_foto']; $perc_cus_ope=$row['perc_cus_ope'];
        if ($perc_cus_ope=='') {
            $perc_cus_ope='NULL';
        }
        $val_cus_ope=$row['val_cus_ope'];$perc_imp_venda=$row['perc_imp_venda'];$val_imp_venda=$row['val_imp_venda'];$prec_mim_produto=$row['prec_mim_produto'];
        $i_ahi_codigo_cat=$row['i_ahi_codigo_cat'];$i_ahi_codigo_sct=$row['i_ahi_codigo_sct'];$i_ahi_codigo_ven=$row['i_ahi_codigo_ven'];$n_ahi_valor_custo_venda=$row['n_ahi_valor_custo_venda'];
        $n_ahi_perc_custo_venda=$row['n_ahi_perc_custo_venda'];$n_ahi_perc_reducao=$row['n_ahi_perc_reducao'];
        $n_ahi_valor_icms_formacao_preco=$row['n_ahi_valor_icms_formacao_preco'];$n_ahi_perc_icms_formacao_preco=$row['n_ahi_perc_icms_formacao_preco'];
        $n_ahi_valor_lucro_zero=$row['n_ahi_valor_lucro_zero'];$n_ahi_valor_lucro=$row['n_ahi_valor_lucro'];$n_ahi_custo_medio=$row['n_ahi_custo_medio'];
        $n_ahi_preco_padrao=$row['n_ahi_preco_padrao']; $n_ahi_perc_fun_rural=$row['n_ahi_perc_fun_rural'];$n_ahi_valor_fun_rural=$row['n_ahi_valor_fun_rural'];
        $i_ahi_cultura_aplicar=$row['i_ahi_cultura_aplicar'];$i_ahi_receita_ide=$row['i_ahi_receita_ide'];$n_ahi_base_icms=$row['n_ahi_base_icms'];
        $n_ahi_base_substituicao=$row['n_ahi_base_substituicao'];$n_ahi_icms_substituicao=$row['n_ahi_icms_substituicao'];$i_ahi_seq_ordem_item=$row['i_ahi_seq_ordem_item'];
        $s_ahi_cfop_contabil=$row['s_ahi_cfop_contabil'];$i_ahi_clas_fical=$row['i_ahi_clas_fical'];$s_ahi_sit_tributaria=$row['s_ahi_sit_tributaria'];$n_ahi_per_icms_subs=$row['n_ahi_per_icms_subs'];
        $n_ahi_per_conv_subst=$row['n_ahi_per_conv_subst'];$i_ahi_codigo_fprc=$row['i_ahi_codigo_fprc'];$i_ahi_codigo_feve=$row['i_ahi_codigo_feve'];
        $i_ahi_ide_pedido=$row['i_ahi_ide_pedido'];$i_ahi_codigo_parceria=$row['i_ahi_codigo_parceria'];$i_ahi_ide_historico_pedido=$row['i_ahi_ide_historico_pedido'];
        $n_ahi_qtd_entregue_pedido=$row['n_ahi_qtd_entregue_pedido'];$i_ahi_ide_ahi=$row['i_ahi_ide_ahi'];$i_ahi_saldo_produto=$row['i_ahi_saldo_produto'];
        $i_ahi_ide_romaneio=$row['i_ahi_ide_romaneio'];$s_ahi_obs_item=$row['s_ahi_obs_item'];$i_ahi_cod_produto_cli_acl=$row['i_ahi_cod_produto_cli_acl'];
        $n_ahi_valor_desconto_nota=$row['n_ahi_valor_desconto_nota'];$n_ahi_perc_desconto_item=$row['n_ahi_perc_desconto_item'];$i_ahi_codigo_tcb=$row['i_ahi_codigo_tcb'];
        $n_ahi_perc_desc_nota=$row['n_ahi_perc_desc_nota'];$n_ahi_valor_tot_item=$row['n_ahi_valor_tot_item'];$n_ahi_valor_tot_nota=$row['n_ahi_valor_tot_nota'];$n_ahi_valor_desc_item=$row['n_ahi_valor_desc_item'];$n_ahi_valor_pis=$row['n_ahi_valor_pis'];
        $n_ahi_valor_cofins=$row['n_ahi_valor_cofins'];$i_ahi_codigo_aor=$row['i_ahi_codigo_aor'];$s_ahi_complemento_impresso=$row['s_ahi_complemento_impresso'];$s_ahi_garantia_prod=$row['s_ahi_garantia_prod'];$i_ahi_codigo_aor_indice=$row['i_ahi_codigo_aor_indice'];$i_ahi_codigo_ahi_indice=$row['i_ahi_codigo_ahi_indice'];
        $i_ahi_codigo_orp=$row['i_ahi_codigo_orp'];$s_ahi_cst_ipi=$row['s_ahi_cst_ipi'];$s_ahi_cst_pis=$row['s_ahi_cst_pis'];$s_ahi_cst_cofins=$row['s_ahi_cst_cofins'];$n_ahi_base_cofins=$row['n_ahi_base_cofins'];$n_ahi_base_pis=$row['n_ahi_base_pis'];$n_ahi_base_ipi=$row['n_ahi_base_ipi'];$n_ahi_aliquota_pis=$row['n_ahi_aliquota_pis'];
        $n_ahi_aliquota_cofins=$row['n_ahi_aliquota_cofins'];$s_ahi_indicacao_movimento=$row['s_ahi_indicacao_movimento'];$n_ahi_aliquota_st=$row['n_ahi_aliquota_st'];$s_ahi_apuracao_ipi=$row['s_ahi_apuracao_ipi'];$s_ahi_cod_enquadramento_ipi=$row['s_ahi_cod_enquadramento_ipi'];$n_ahi_qtd_base_pis=$row['n_ahi_qtd_base_pis'];$n_ahi_aliq_pis_reais=$row['n_ahi_aliq_pis_reais'];
        $n_ahi_qtde_base_cofins=$row['n_ahi_qtde_base_cofins'];$n_ahi_aliq_cofins_reais=$row['n_ahi_aliq_cofins_reais'];$i_ahi_csosn=$row['i_ahi_csosn'];$i_ahi_numero_adicao=$row['i_ahi_numero_adicao'];$i_ahi_num_seq_item_adicao=$row['i_ahi_num_seq_item_adicao'];$s_ahi_cod_fabri_estrangeiro=$row['s_ahi_cod_fabri_estrangeiro'];$n_ahi_valor_desc_item_di=$row['n_ahi_valor_desc_item_di'];
        $n_ahi_valor_red_icms=$row['n_ahi_valor_red_icms'];$n_ahi_seguro_item=$row['n_ahi_seguro_item'];$s_ahi_totalizador_parcial=$row['s_ahi_totalizador_parcial'];$n_ahi_perc_seguro=$row['n_ahi_perc_seguro'];$i_ahi_csosn_xml=$row['i_ahi_csosn_xml'];$s_ahi_sit_tributaria_xml=$row['s_ahi_sit_tributaria_xml'];$n_ahi_base_ii=$row['n_ahi_base_ii'];$n_ahi_valor_ii=$row['n_ahi_valor_ii'];$n_ahi_aliquota_ii=$row['n_ahi_aliquota_ii'];
        $n_ahi_base_icms_xml=$row['n_ahi_base_icms_xml'];$n_ahi_aliq_icms_xml=$row['n_ahi_aliq_icms_xml'];$n_ahi_valor_icms_xml=$row['n_ahi_valor_icms_xml'];$n_ahi_base_st_xml=$row['n_ahi_base_st_xml'];$n_ahi_valor_st_xml=$row['n_ahi_valor_st_xml'];$n_ahi_valor_acrescimo_item=$row['n_ahi_valor_acrescimo_item'];$s_ahi_cst_pis_xml=$row['s_ahi_cst_pis_xml'];$s_ahi_cst_cofins_xml=$row['s_ahi_cst_cofins_xml'];$n_ahi_base_cofins_xml=$row['n_ahi_base_cofins_xml'];
        $n_ahi_base_pis_xml=$row['n_ahi_base_pis_xml'];$n_ahi_valor_pis_xml=$row['n_ahi_valor_pis_xml'];$n_ahi_valor_cofins_xml=$row['n_ahi_valor_cofins_xml'];$s_ahi_operacao=$row['s_ahi_operacao'];$i_ahi_codigo_cna=$row['i_ahi_codigo_cna'];$s_ahi_codigo_lei116=$row['s_ahi_codigo_lei116'];$n_ahi_desp_aduaneiras=$row['n_ahi_desp_aduaneiras'];$i_ahi_codigo_frem=$row['i_ahi_codigo_frem'];$i_ahi_codigo_fpro=$row['i_ahi_codigo_fpro'];$n_ahi_tot_impostos=$row['n_ahi_tot_impostos'];
        $n_ahi_qtde_devolvido=$row['n_ahi_qtde_devolvido'];$n_ahi_perc_red_icms_st=$row['n_ahi_perc_red_icms_st'];$n_ahi_vlr_red_base_icms_st=$row['n_ahi_vlr_red_base_icms_st'];$i_ahi_cod_devolucao=$row['i_ahi_cod_devolucao'];$s_ahi_chave_fci=$row['s_ahi_chave_fci'];$n_ahi_mva_xml=$row['n_ahi_mva_xml'];$i_ahi_ide_entregue=$row['i_ahi_ide_entregue'];$i_ahi_uso_cosumo=$row['i_ahi_uso_cosumo'];
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
        $s_ahi_pedido_compra_nfe=$row['s_ahi_pedido_compra_nfe'];$i_ahi_item_ped_compra_nfe=$row['i_ahi_item_ped_compra_nfe'];$s_ahi_cest=$row['s_ahi_cest'];$n_ahi_perc_ipi_devol=$row['n_ahi_perc_ipi_devol'];$n_ahi_valor_ipi_devol=$row['n_ahi_valor_ipi_devol'];
        $s="INSERT INTO ahistorico2(cidehistorico, cienhistorico, cisahistorico, cipehistorico, ctiphistorico,cmothistorico, cprohistorico, cemihistorico, cvcohistorico, cvcuhistorico,cvbrhistorico, cvlqhistorico, cvdeshistorico, cvfrehistorico,
        cvachistorico, cvichistorico, cviphistorico, cvishistorico, cvfihistorico,cvtothistorico, cdeshistorico, ccfohistorico, csaihisotorico,centhistorico, cforhistorico, cclihistorico, cicmhistorico, cipihistorico,cisshistorico, cluchistorico, cpdehistorico, cpfrhistorico, cpachistorico,cpfihistorico, cpcohistorico, cvohistorico, ctipphistorico, cdtcahistorico,chocahistorico, cuscadhistorico, copcadhistorico, cdtatuhistorico,choatuhistorico, copatuhistorico, cusatuhistorico, cemphistorico,
        cvarealhistorico, cbaiesthistorico, fot_historico, dep_historico,valor_foto, perc_cus_ope, val_cus_ope, perc_imp_venda, val_imp_venda,prec_mim_produto, i_ahi_codigo_cat, i_ahi_codigo_sct, i_ahi_codigo_ven,n_ahi_valor_custo_venda, n_ahi_perc_custo_venda, n_ahi_perc_reducao,n_ahi_valor_icms_formacao_preco, n_ahi_perc_icms_formacao_preco,n_ahi_valor_lucro_zero, n_ahi_valor_lucro, n_ahi_custo_medio,n_ahi_preco_padrao, n_ahi_perc_fun_rural, n_ahi_valor_fun_rural,i_ahi_cultura_aplicar, i_ahi_receita_ide, n_ahi_base_icms, n_ahi_base_substituicao,n_ahi_icms_substituicao, i_ahi_seq_ordem_item, s_ahi_cfop_contabil,
        i_ahi_clas_fical, s_ahi_sit_tributaria, n_ahi_per_icms_subs,n_ahi_per_conv_subst, i_ahi_codigo_fprc, i_ahi_codigo_feve, i_ahi_ide_pedido,i_ahi_codigo_parceria, i_ahi_ide_historico_pedido, n_ahi_qtd_entregue_pedido,i_ahi_ide_ahi, i_ahi_saldo_produto, i_ahi_ide_romaneio, s_ahi_obs_item,i_ahi_cod_produto_cli_acl, n_ahi_valor_desconto_nota, n_ahi_perc_desconto_item,i_ahi_codigo_tcb, n_ahi_perc_desc_nota, n_ahi_valor_tot_item,n_ahi_valor_tot_nota, n_ahi_valor_desc_item, n_ahi_valor_pis,n_ahi_valor_cofins, i_ahi_codigo_aor, s_ahi_complemento_impresso,s_ahi_garantia_prod, i_ahi_codigo_aor_indice, i_ahi_codigo_ahi_indice,
        i_ahi_codigo_orp, s_ahi_cst_ipi, s_ahi_cst_pis, s_ahi_cst_cofins,n_ahi_base_cofins, n_ahi_base_pis, n_ahi_base_ipi, n_ahi_aliquota_pis,n_ahi_aliquota_cofins, s_ahi_indicacao_movimento, n_ahi_aliquota_st,s_ahi_apuracao_ipi, s_ahi_cod_enquadramento_ipi, n_ahi_qtd_base_pis,n_ahi_aliq_pis_reais, n_ahi_qtde_base_cofins, n_ahi_aliq_cofins_reais,i_ahi_csosn, i_ahi_numero_adicao, i_ahi_num_seq_item_adicao,s_ahi_cod_fabri_estrangeiro, n_ahi_valor_desc_item_di, n_ahi_valor_red_icms,n_ahi_seguro_item, s_ahi_totalizador_parcial, n_ahi_perc_seguro,i_ahi_csosn_xml, s_ahi_sit_tributaria_xml, n_ahi_base_ii, n_ahi_valor_ii,n_ahi_aliquota_ii, n_ahi_base_icms_xml, n_ahi_aliq_icms_xml,
        n_ahi_valor_icms_xml, n_ahi_base_st_xml, n_ahi_valor_st_xml,n_ahi_valor_acrescimo_item, s_ahi_cst_pis_xml, s_ahi_cst_cofins_xml,n_ahi_base_cofins_xml, n_ahi_base_pis_xml, n_ahi_valor_pis_xml,n_ahi_valor_cofins_xml, s_ahi_operacao, i_ahi_codigo_cna, s_ahi_codigo_lei116,n_ahi_desp_aduaneiras, i_ahi_codigo_frem, i_ahi_codigo_fpro,n_ahi_tot_impostos, n_ahi_qtde_devolvido, n_ahi_perc_red_icms_st,n_ahi_vlr_red_base_icms_st, i_ahi_cod_devolucao, s_ahi_chave_fci,n_ahi_mva_xml, i_ahi_ide_entregue, i_ahi_uso_cosumo, n_ahi_perc_diferimento,s_ahi_codigo_ser_mun, i_ahi_valor_imposto_diferido, s_ahi_pedido_compra_nfe,i_ahi_item_ped_compra_nfe, s_ahi_cest, n_ahi_perc_ipi_devol,n_ahi_valor_ipi_devol)
        VALUES ('$cidehistorico',NULL,'$cisahistorico','$cipehistorico','$ctiphistorico','$cmothistorico','$cprohistorico','$cemihistorico','$cvcohistorico','$cvcuhistorico','$cvbrhistorico','$cvlqhistorico','$cvdeshistorico','$cvfrehistorico','$cvachistorico','$cvichistorico','$cviphistorico','$cvishistorico','$cvfihistorico','$cvtothistorico','$cdeshistorico','$ccfohistorico','$csaihisotorico','$centhistorico',NULL,'$cclihistorico','$cicmhistorico','$cipihistorico','$cisshistorico','$cluchistorico','$cpdehistorico','$cpfrhistorico','$cpachistorico','$cpfihistorico','$cpcohistorico','$cvohistorico','$ctipphistorico','$cdtcahistorico','$chocahistorico','$cuscadhistorico',
        '$copcadhistorico',NULL,NULL,$copatuhistorico,'$cusatuhistorico','$cemphistorico','$cvarealhistorico','$cbaiesthistorico','$fot_historico','$dep_historico','$valor_foto',$perc_cus_ope,'$val_cus_ope','$perc_imp_venda','$val_imp_venda','$prec_mim_produto','$i_ahi_codigo_cat','$i_ahi_codigo_sct','$i_ahi_codigo_ven','$n_ahi_valor_custo_venda','$n_ahi_perc_custo_venda','$n_ahi_perc_reducao','$n_ahi_valor_icms_formacao_preco','$n_ahi_perc_icms_formacao_preco','$n_ahi_valor_lucro_zero','$n_ahi_valor_lucro','$n_ahi_custo_medio','$n_ahi_preco_padrao','$n_ahi_perc_fun_rural','$n_ahi_valor_fun_rural','$i_ahi_cultura_aplicar','$i_ahi_receita_ide','$n_ahi_base_icms',
        '$n_ahi_base_substituicao','$n_ahi_icms_substituicao','$i_ahi_seq_ordem_item','$s_ahi_cfop_contabil','$i_ahi_clas_fical','$s_ahi_sit_tributaria','$n_ahi_per_icms_subs','$n_ahi_per_conv_subst',NULL,NULL,NULL,'$i_ahi_codigo_parceria','$i_ahi_ide_historico_pedido','$n_ahi_qtd_entregue_pedido','$i_ahi_ide_ahi',NULL,'$i_ahi_ide_romaneio','$s_ahi_obs_item','$i_ahi_cod_produto_cli_acl','$n_ahi_valor_desconto_nota','$n_ahi_perc_desconto_item','$i_ahi_codigo_tcb','$n_ahi_perc_desc_nota','$n_ahi_valor_tot_item','$n_ahi_valor_tot_nota','$n_ahi_valor_desc_item','$n_ahi_valor_pis','$n_ahi_valor_cofins','$i_ahi_codigo_aor','$s_ahi_complemento_impresso','$s_ahi_garantia_prod',NULL,NULL,NULL,'$s_ahi_cst_ipi',
        '$s_ahi_cst_pis','$s_ahi_cst_cofins','$n_ahi_base_cofins','$n_ahi_base_pis','$n_ahi_base_ipi','$n_ahi_aliquota_pis','$n_ahi_aliquota_cofins','$s_ahi_indicacao_movimento','$n_ahi_aliquota_st','$s_ahi_apuracao_ipi','$s_ahi_cod_enquadramento_ipi','$n_ahi_qtd_base_pis','$n_ahi_aliq_pis_reais','$n_ahi_qtde_base_cofins','$n_ahi_aliq_cofins_reais','$i_ahi_csosn','$i_ahi_numero_adicao','$i_ahi_num_seq_item_adicao','$s_ahi_cod_fabri_estrangeiro','$n_ahi_valor_desc_item_di','$n_ahi_valor_red_icms','$n_ahi_seguro_item','$s_ahi_totalizador_parcial','$n_ahi_perc_seguro',NULL,'$s_ahi_sit_tributaria_xml','$n_ahi_base_ii','$n_ahi_valor_ii','$n_ahi_aliquota_ii','$n_ahi_base_icms_xml','$n_ahi_aliq_icms_xml','$n_ahi_valor_icms_xml',
        '$n_ahi_base_st_xml','$n_ahi_valor_st_xml','$n_ahi_valor_acrescimo_item','$s_ahi_cst_pis_xml','$s_ahi_cst_cofins_xml','$n_ahi_base_cofins_xml','$n_ahi_base_pis_xml','$n_ahi_valor_pis_xml','$n_ahi_valor_cofins_xml','$s_ahi_operacao','$i_ahi_codigo_cna','$s_ahi_codigo_lei116','$n_ahi_desp_aduaneiras','$i_ahi_codigo_frem','$i_ahi_codigo_fpro','$n_ahi_tot_impostos','$n_ahi_qtde_devolvido','$n_ahi_perc_red_icms_st','$n_ahi_vlr_red_base_icms_st','$i_ahi_cod_devolucao','$s_ahi_chave_fci','$n_ahi_mva_xml','$i_ahi_ide_entregue',$i_ahi_uso_cosumo,$n_ahi_perc_diferimento,'$s_ahi_codigo_ser_mun',$i_ahi_valor_imposto_diferido,'$s_ahi_pedido_compra_nfe','$i_ahi_item_ped_compra_nfe','$s_ahi_cest','$n_ahi_perc_ipi_devol',
        '$n_ahi_valor_ipi_devol')";
        pg_query($conexaol,$s);
        
        
    }
    $comandocnpjfornecedor= "Select ccnpjempresa from tempresa where ccodempresa = '$ideempresa'";
    $excomandocnpjfornecedor= pg_query($conexaoc,$comandocnpjfornecedor);
    $resulcomandocnpjfornecedor= pg_fetch_array($excomandocnpjfornecedor);
    $cnpj= $resulcomandocnpjfornecedor ['ccnpjempresa'];
    $comandocadastroproduto="select cprohistorico from ahistorico2 where i_ahi_codigo_ahi_indice is null order by cprohistorico " ;
    $excomandocadastroproduto=pg_query($conexaoc,$comandocadastroproduto);
    $resulcomandocadastroproduto=pg_fetch_array($excomandocadastroproduto);
    $produto=$resulcomandocadastroproduto ['cprohistorico'];
    while($produto <> ''){
        $filtro="select *from aprodutosl where ccodproduto='$produto'";
        $exfiltro=pg_query($conexaoc,$filtro);
        $rsfiltro=pg_fetch_array($exfiltro);
        if($rsfiltro <> ''){
            pg_query($conexaoc,"update ahistorico2 set i_ahi_codigo_ahi_indice='1'  where cprohistorico='$produto' ");
        }
        $com=pg_query($conexaoc,"insert into aprodutosl select *from aprodutos where ccodproduto ='$produto';update ahistorico2 set i_ahi_codigo_ahi_indice='1'  where cprohistorico='$produto'");
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
            $comandocadastroproduto="select  cprohistorico from ahistorico2 where i_ahi_codigo_ahi_indice is null " ;
            $excomandoCadastroproduto=pg_query($conexaoc,$comandocadastroproduto);
			$resulcomandoCadastroproduto=pg_fetch_array($excomandoCadastroproduto);
			$produto=$resulcomandoCadastroproduto ['cprohistorico'];			
		}
		$comandocontador2 = 'SELECT COUNT(*) FROM aprodutosl';
		$conta2 = pg_query($conexaoc,$comandocontador2);
		$tottal2=pg_fetch_array($conta2);
		$total2 = $tottal2 ['count'];
		if(!@($conexll=pg_connect ("host=192.168.11.2 dbname=troll port=5430 user=postgres password=ky$14gr@"))){
		    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados Local Lages Data:$dia  Hora:$time </font></b></p>";
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
		$com="select *from aprodutosl ";
		$excom=pg_query($conexaoc,$com);
		pg_query($conexll,"delete from aprodutosl");
		while($row = pg_fetch_assoc($excom)){
		    $ccodproduto=$row['ccodproduto'];
		    $ctipproduto=$row['ctipproduto'];$cdesproduto=$row['cdesproduto'];$crefporduto=$row['crefporduto'];$cbarproduto=$row['cbarproduto'];$cpveproduto=$row['cpveproduto'];$cpcuproduto=$row['cpcuproduto'];$cpcoproduto=$row['cpcoproduto'];
		    $cuniproduto=$row['cuniproduto'];$cqtdproduto=$row['cqtdproduto'];$cmaxproduto=$row['cmaxproduto'];$clucproduto=$row['clucproduto'];$ceidproduto=$row['ceidproduto'];$cminproduto=$row['cminproduto'];$ccomproduto=$row['ccomproduto'];$cpelproduto=$row['cpelproduto'];
		    $cpebproduto=$row['cpebproduto'];$ccadproduto=$row['ccadproduto'];$cantpoduto=$row['cantpoduto'];$cfotproduto=$row['cfotproduto'];$ccplproduto=$row['ccplproduto'];$cgruporduto=$row['cgruporduto'];
		    if ($cgruporduto=='') {
		        $cgruporduto='NULL';
		    }
		    $clinproduto=$row['clinproduto'];$cmarproduto=$row['cmarproduto'];
		    $ctriproduto=$row['ctriproduto'];$cdepproduto=$row['cdepproduto'];$csitproduto=$row['csitproduto'];$ctab1produto=$row['ctab1produto'];$ctab2produto=$row['ctab2produto'];$ctab3produto=$row['ctab3produto'];$cdtcadproduto=$row['cdtcadproduto'];$chocadproduto=$row['chocadproduto'];
		    $copcadproduto=$row['copcadproduto'];$cuscadproduto=$row['cuscadproduto'];$cdtatuproduto=$row['cdtatuproduto'];		    
		    $copatuproduto=$row['copatuproduto'];
		    if ($copatuproduto=='') {
		        $copatuproduto='NULL';
		    }
		    $cusatuproduto=$row['cusatuproduto'];$cqtde1produto=$row['cqtde1produto'];$cqtde2produto=$row['cqtde2produto'];$cqtde3produto=$row['cqtde3produto'];
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
		    if ($n_apr_valor_custo_ope=='') {
		        $n_apr_valor_custo_ope='NULL';
		    }
		    $n_apr_perc_custo_ope=$row['n_apr_perc_custo_ope'];
		    if ($n_apr_perc_custo_ope=='') {
		        $n_apr_perc_custo_ope='NULL';
		    }
		    $n_apr_valor_impostos=$row['n_apr_valor_impostos'];
		    if ($n_apr_valor_impostos=='') {
		        $n_apr_valor_impostos='NULL';
		    }
		    $n_apr_perc_impostos=$row['n_apr_perc_impostos'];
		    if ($n_apr_perc_impostos=='') {
		        $n_apr_perc_impostos='NULL';
		    }
		    $n_apr_comissao_vend=$row['n_apr_comissao_vend'];$n_apr_perc_vend=$row['n_apr_perc_vend'];$n_apr_valor_lucro=$row['n_apr_valor_lucro'];
		    $n_apr_perc_lucro=$row['n_apr_perc_lucro'];$n_apr_icm_saida=$row['n_apr_icm_saida'];$n_apr_perc_icm_saida=$row['n_apr_perc_icm_saida'];$n_apr_valor_custo_venda=$row['n_apr_valor_custo_venda'];$n_apr_perc_custo_venda=$row['n_apr_perc_custo_venda'];$d_apr_data_formacao=$row['d_apr_data_formacao'];
		    if ($d_apr_data_formacao=='') {
		        $d_apr_data_formacao='NULL';
		    }else{
		        $d_apr_data_formacao="'$d_apr_data_formacao'";
		    }
		    
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
		    $s_apr_operacao=$row['s_apr_operacao']; $s_apr_codigo_lei116=$row['s_apr_codigo_lei116'];$s_apr_cest=$row['s_apr_cest'];$s_apr_escala_relevante=$row['s_apr_escala_relevante'];$s_apr_cnpj_relevante=$row['s_apr_cnpj_relevante'];$s_apr_cod_benef_fiscal=$row['s_apr_cod_benef_fiscal'];$s_apr_desc_anp=$row['s_apr_desc_anp'];$sql="INSERT INTO aprodutosl(ccodproduto, ctipproduto, cdesproduto, crefporduto, cbarproduto,cpveproduto, cpcuproduto, cpcoproduto, cuniproduto, cqtdproduto, 
            cmaxproduto, clucproduto, ceidproduto, cminproduto, ccomproduto,cpelproduto, cpebproduto, ccadproduto, cucoproduto, cuveproduto,cantpoduto, cfotproduto, ccplproduto, cgruporduto, clinproduto,cmarproduto, ctriproduto, cclaproduto, cdepproduto, csitproduto,ctab1produto, ctab2produto, ctab3produto, cdtcadproduto, chocadproduto,copcadproduto, cuscadproduto, cdtatuproduto, choatuproduto, copatuproduto,cusatuproduto, cqtde1produto, cqtde2produto, cqtde3produto, cqtdmtemp,cqtd1temp, cqtd2temp, cqtd3temp, cvalcustemp, cvalcomptemp, cvalvendtemp, 
            cpriceprotection, cpriceback, cvalortabela, cconfprice, cperaltvenda,cponestoque, clistaprecos, tip_lab_loja, tot_imp_venda, preco_minimo,preco_padrao, per_dif_precos, imagem, n_pro_comissaofot, i_pro_tipo_comissao,i_pro_tipo_cobranca, n_pro_valor_n1, n_pro_valor_n2, n_pro_valor_n3,n_pro_valor_n4, n_pro_valor_n5, n_pro_valor_n6, n_pro_valor_n7,n_pro_valor_n8, n_pro_valor_n9, n_pro_valor_n10, n_pro_valor_ven1,n_pro_valor_ven2, n_pro_valor_ven3, n_pro_valor_ven4, n_pro_valor_ven5,n_pro_valor_ven6, n_pro_valor_ven7, n_pro_valor_ven8, n_pro_valor_ven9, 
            n_pro_valor_ven10, n_pro_perc_comissao, cqtde4produto, cqtde5produto,cqtde6produto, cqtde7produto, cqtde8produto, cqtde9produto, cqtde10produto,cqtde11produto, cqtde12produto, cqtde13produto, cqtde14produto,cqtde15produto, cqtde16produto, cqtde17produto, cqtde18produto,cqtde19produto, cqtde20produto, cqtde21produto, cqtde22produto,cqtde23produto, cqtde24produto, cqtde25produto, cqtde26produto,cqtde27produto, cqtde28produto, cqtde29produto, cqtde30produto,i_apr_sequencia, n_apr_valor_ipi_compra, n_apr_perc_ipi_compra, 
            n_apr_valor_credito_icm, n_apr_perc_credito_icm, n_apr_valor_frete,n_apr_perc_frete, n_apr_valor_desp_aces, n_apr_perc_desp_aces,n_apr_valor_desctos, n_apr_perc_desctos, n_apr_valor_financeiro,n_apr_perc_financeiro, n_apr_valor_custo_ope, n_apr_perc_custo_ope,n_apr_valor_impostos, n_apr_perc_impostos, n_apr_comissao_vend,n_apr_perc_vend, n_apr_valor_lucro, n_apr_perc_lucro, n_apr_icm_saida,n_apr_perc_icm_saida, n_apr_valor_custo_venda, n_apr_perc_custo_venda,d_apr_data_formacao, i_apr_id_aen, i_apr_tipo_formacao, i_apr_tipo_custo, 
            i_apr_lucro_sobre, n_apr_perc_reducao, n_apr_valor_lucro_zero,n_apr_custo_medio, n_apr_valor_nota_entrada, s_apr_principio_ativo,s_apr_nome_comercial, s_apr_cla_toxologica, s_apr_formulacao,s_apr_primeiros_socorros, s_apr_antidotos_tratamento, s_apr_gru_quimico,s_apr_composicao, s_apr_sistema_alarme, i_apr_exige_receituario,i_apr_imagem, i_apr_folha, i_apr_fundo, i_apr_moldura, i_apr_produto,i_apr_codigo_fdim, n_apr_val_icms_substituicao, n_apr_permite_venda_fracionada,n_apr_qtd_acumulada, i_apr_codigo_apr, s_apr_descricao_grades, 
            i_apr_inativa_produto_cp, i_apr_permite_venda_zerada, s_apr_cfop_dentro_uf,s_apr_cfop_fora_uf, i_apr_exige_evento, s_apr_modulacao, s_apr_borda,n_apr_qtd_embalagem, n_apr_kgm2, n_apr_consumo_metor, s_apr_potencia,s_apr_base, s_apr_tensao, i_apr_numero_lote, d_apr_validade,n_apr_preco_fabrica, n_apr_pmc, i_apr_medicacao_controlada, i_apr_tab_medicacao_controlada,i_apr_lista, s_apr_desc_reduzida, i_apr_codigo_cnm, s_apr_iat,s_apr_ippt, i_apr_codigo_baixa_apr, i_apr_fator_conversao, i_apr_codigo_cor, 
            n_apr_tabela4, n_apr_tabela5, n_apr_tabela6, n_apr_tabela7, n_apr_tabela8,n_apr_tabela9, n_apr_tabela10, s_apr_dosagem, i_apr_codigo_tes,i_apr_codigo_tmat, i_apr_codigo_naf, i_apr_imp_complem_na_nfe,s_apr_hash, i_apr_possui_garantia, i_apr_possui_indice_tecnico,i_apr_codigo_tem, i_paf_ide, n_apr_valor_seguro, n_apr_perc_seguro,i_apr_usu_balanca, i_apr_kit, d_apr_data_inicio_promocao, d_apr_data_fim_promocao,n_apr_desconto_normal, n_apr_desconto_tabela1, n_apr_desconto_tabela2,n_apr_desconto_tabela3, n_apr_desconto_tabela4, n_apr_desconto_tabela5, 
            n_apr_desconto_tabela6, n_apr_desconto_tabela7, n_apr_desconto_tabela8,n_apr_desconto_tabela9, n_apr_desconto_tabela10, n_apr_desconto_custo,n_apr_desconto_compra, n_apr_desconto_minimo, n_apr_desconto_padrao,i_apr_com_frete, n_apr_valor_produto_frete, i_apr_com_desp_acesso,n_apr_valor_despesa_produto, i_apr_tipo_codificacao, s_apr_operacao,i_apr_codigo_cna, s_apr_codigo_lei116, i_apr_imprime_grade_nfe,i_apr_imprime_ref_nfe, i_apr_flag_trib_estados, i_apr_produto_fci,n_apr_qtde_31_estoque, n_apr_qtde_32_estoque, n_apr_qtde_33_estoque, 
            n_apr_qtde_34_estoque, n_apr_qtde_35_estoque, n_apr_qtde_36_estoque,n_apr_qtde_37_estoque, n_apr_qtde_38_estoque, n_apr_qtde_39_estoque,n_apr_qtde_40_estoque, n_apr_qtde_41_estoque, n_apr_qtde_42_estoque,n_apr_qtde_43_estoque, n_apr_qtde_44_estoque, n_apr_qtde_45_estoque,n_apr_qtde_46_estoque, n_apr_qtde_47_estoque, n_apr_qtde_48_estoque,n_apr_qtde_49_estoque, n_apr_qtde_50_estoque, s_apr_cest, i_apr_codigo_afo,i_apr_cod_anp, n_apr_perc_pglp, i_apr_codif, n_apr_qtemp_comb,n_apr_qtde_defeito, s_apr_escala_relevante, s_apr_cnpj_relevante, 
            s_apr_cod_benef_fiscal, s_apr_desc_anp, n_apr_perc_gas_natural,n_apr_gas_importado, n_apr_valor_partida)VALUES('$ccodproduto','$ctipproduto','$cdesproduto','$crefporduto','$cbarproduto','$cpveproduto','$cpcuproduto','$cpcoproduto','$cuniproduto','$cqtdproduto','$cmaxproduto','$clucproduto','$ceidproduto','$cminproduto','$ccomproduto','$cpelproduto','$cpebproduto','$ccadproduto',NULL,NULL,'$cantpoduto','$cfotproduto','$ccplproduto',$cgruporduto,'$clinproduto','$cmarproduto','$ctriproduto',NULL,'$cdepproduto','$csitproduto','$ctab1produto','$ctab2produto',
            '$ctab3produto','$cdtcadproduto','$chocadproduto','$copcadproduto','$cuscadproduto','$cdtatuproduto',NULL,$copatuproduto,'$cusatuproduto','$cqtde1produto','$cqtde2produto','$cqtde3produto','$cqtdmtemp','$cqtd1temp','$cqtd2temp','$cqtd3temp','$cvalcustemp','$cvalcomptemp','$cvalvendtemp','$cpriceprotection','$cpriceback','$cvalortabela','$cconfprice','$cperaltvenda','$cponestoque','$clistaprecos',$tip_lab_loja,$tot_imp_venda,'$preco_minimo','$preco_padrao',$per_dif_precos,$imagem,$n_pro_comissaofot,$i_pro_tipo_comissao,$i_pro_tipo_cobranca,'$n_pro_valor_n1',
            '$n_pro_valor_n2','$n_pro_valor_n3','$n_pro_valor_n4','$n_pro_valor_n5','$n_pro_valor_n6','$n_pro_valor_n7','$n_pro_valor_n8','$n_pro_valor_n9','$n_pro_valor_n10','$n_pro_valor_ven1','$n_pro_valor_ven2','$n_pro_valor_ven3','$n_pro_valor_ven4','$n_pro_valor_ven5','$n_pro_valor_ven6','$n_pro_valor_ven7','$n_pro_valor_ven8','$n_pro_valor_ven9','$n_pro_valor_ven10','$n_pro_perc_comissao','$cqtde4produto','$cqtde5produto','$cqtde6produto','$cqtde7produto','$cqtde8produto','$cqtde9produto','$cqtde10produto','$cqtde11produto','$cqtde12produto','$cqtde13produto','$cqtde14produto','$cqtde15produto',
'$cqtde16produto','$cqtde17produto','$cqtde18produto','$cqtde19produto','$cqtde20produto','$cqtde21produto','$cqtde22produto','$cqtde23produto','$cqtde24produto','$cqtde25produto','$cqtde26produto','$cqtde27produto','$cqtde28produto','$cqtde29produto','$cqtde30produto',$i_apr_sequencia,'$n_apr_valor_ipi_compra','$n_apr_perc_ipi_compra','$n_apr_valor_credito_icm','$n_apr_perc_credito_icm','$n_apr_valor_frete','$n_apr_perc_frete','$n_apr_valor_desp_aces','$n_apr_perc_desp_aces','$n_apr_valor_desctos','$n_apr_perc_desctos','$n_apr_valor_financeiro','$n_apr_perc_financeiro',$n_apr_valor_custo_ope,
$n_apr_perc_custo_ope,$n_apr_valor_impostos,$n_apr_perc_impostos,'$n_apr_comissao_vend','$n_apr_perc_vend','$n_apr_valor_lucro','$n_apr_perc_lucro','$n_apr_icm_saida','$n_apr_perc_icm_saida','$n_apr_valor_custo_venda','$n_apr_perc_custo_venda',$d_apr_data_formacao,$i_apr_id_aen,$i_apr_tipo_formacao,$i_apr_tipo_custo,$i_apr_lucro_sobre,'$n_apr_perc_reducao','$n_apr_valor_lucro_zero','$n_apr_custo_medio','$n_apr_valor_nota_entrada','$s_apr_principio_ativo','$s_apr_nome_comercial','$s_apr_cla_toxologica','$s_apr_formulacao','$s_apr_primeiros_socorros','$s_apr_antidotos_tratamento','$s_apr_gru_quimico','$s_apr_composicao','$s_apr_sistema_alarme',
$i_apr_exige_receituario,$i_apr_imagem,$i_apr_folha,$i_apr_fundo,$i_apr_moldura,$i_apr_produto,NULL,'$n_apr_val_icms_substituicao',$n_apr_permite_venda_fracionada,'$n_apr_qtd_acumulada',NULL,'$s_apr_descricao_grades','$i_apr_inativa_produto_cp',$i_apr_permite_venda_zerada,'$s_apr_cfop_dentro_uf','$s_apr_cfop_fora_uf','$i_apr_exige_evento','$s_apr_modulacao','$s_apr_borda','$n_apr_qtd_embalagem','$n_apr_kgm2','$n_apr_consumo_metor','$s_apr_potencia','$s_apr_base','$s_apr_tensao',$i_apr_numero_lote,NULL,'$n_apr_preco_fabrica','$n_apr_pmc','$i_apr_medicacao_controlada','$i_apr_tab_medicacao_controlada','$i_apr_lista','$s_apr_desc_reduzida',
'$i_apr_codigo_cnm','$s_apr_iat','$s_apr_ippt',NULL,'$i_apr_fator_conversao',NULL,'$n_apr_tabela4','$n_apr_tabela5','$n_apr_tabela6','$n_apr_tabela7','$n_apr_tabela8','$n_apr_tabela9','$n_apr_tabela10','$s_apr_dosagem',NULL,NULL,NULL,'$i_apr_imp_complem_na_nfe','$s_apr_hash','$i_apr_possui_garantia',$i_apr_possui_indice_tecnico,'$i_apr_codigo_tem','$i_paf_ide',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$i_apr_tipo_codificacao','$s_apr_operacao',NULL,'$s_apr_codigo_lei116',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,
NULL,NULL,NULL,'$s_apr_cest',NULL,NULL,NULL,NULL,NULL,NULL,'$s_apr_escala_relevante','$s_apr_cnpj_relevante','$s_apr_cod_benef_fiscal','$s_apr_desc_anp',NULL,NULL,NULL)";
$exquery=pg_query($conexll,$sql);
if (!$exquery){
    echo $sql;
    exit;
}
		}
		
		$comandocontador3 = 'SELECT COUNT(*) FROM aprodutosl';
		$conta3=pg_query($conexll,$comandocontador3);
		$tottal3=pg_fetch_array($conta3);
		$total3=$tottal3['count'];
		if($total3 <> $total2 )	{
		    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Na Sincronização de Produtos**</font></b></p>";
		    exit;
		}
		$com=pg_query($conexll,"update aprodutosl set i_apr_id_aen='0',cqtdproduto = '0',cqtde1produto= '0',cqtde2produto='0';update aprodutosl set i_paf_ide=nextval('sequencia_paf')");
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
        $procuracodigo="select ccodproduto,i_apr_codigo_cnm,cuniproduto from aprodutosl where ctipproduto = '0' ";
        $exprocuracodigo=pg_query($conexll,$procuracodigo);
		$rsprocuracodigo=pg_fetch_array($exprocuracodigo);
		$producadastrado=$rsprocuracodigo['ccodproduto'];
		$ncm=$rsprocuracodigo['i_apr_codigo_cnm'];
		$und=$rsprocuracodigo['cuniproduto'];
		while($producadastrado <> ''){
		    $procuracodigo2="select ccodproduto from aprodutos where ccodproduto = '$producadastrado'";
		    $exprocuracodigo2=pg_query($conexll,$procuracodigo2);
		    $rsprocuracodigo2=pg_fetch_array($exprocuracodigo2);				
			if ($rsprocuracodigo2 == ''){
			    $procurandoncm=("select *from ncm where i_ncm_codigo = '$ncm'");
			    $exprocurandoncm=pg_query($conexll,$procurandoncm);
			    $rsprocurandoncm=pg_fetch_array($exprocurandoncm);
			    if($rsprocurandoncm == '0'){
			        $com=pg_query($conexll,"select logar('COPIA',1,0);INSERT INTO ncm(i_ncm_codigo, i_ncm_nome, n_ncm_mva, n_ncm_mva_reajustavel, n_ncm_reducao_mva)
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
			    $procurandound=("select d_tun_descricao from tunidadeproduto where d_tun_descricao = '$und'");
			    $exprocurandound=pg_query($conexll,$procurandound);
			    $rsprocurandound=pg_fetch_array($exprocurandound);
			    if($rsprocurandound == ''){
			        $com=pg_query($conexll,"select logar('COPIA',1,0);INSERT INTO tunidadeproduto(d_tun_descricao, s_tun_complemento_desc) VALUES ('$und', '')");
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
			    $com=pg_query($conexll,"select logar('COPIA',1,0);insert into aprodutos select *from aprodutosl where ccodproduto = $producadastrado;
                delete from aprodutosl where ccodproduto = '$producadastrado'");
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
			}
			pg_query ($conexll,"delete from aprodutosl where ccodproduto = '$producadastrado' ");
			$procuracodigo="select ccodproduto from aprodutosl ";
			set_time_limit(500);
			$exprocuracodigo=pg_query($procuracodigo);			
			$rsprocuracodigo=pg_fetch_array($exprocuracodigo);
			$producadastrado=$rsprocuracodigo['ccodproduto'];			
		}
		echo "<script>alert('Conectado em Lages');</script>";
		$comandocontadorl = "SELECT COUNT(*) FROM ahistorico2";
		$Contal = pg_query($conexaol,$comandocontadorl);
		$tottalL=pg_fetch_array($Contal);
		$totalL = $tottalL ['count'];
		if ($total <> $totalL ){ 
		    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Na Sincronização de Produtos** (Erro 01)</font></b></p>";
		    exit;
		}
		$comandofornecedor = "select ccodfornecedor from afornecedor where ccgcfornecedor = '$cnpj' ";
	    $excomandofornecedor = pg_query($conexaol,$comandofornecedor);
	    $resulcomandofornecedor = pg_fetch_array($excomandofornecedor);
	    $fornecedor = $resulcomandofornecedor ['ccodfornecedor'];
	    if ($resulcomandofornecedor  == ''){	
	        echo"<script>alert('Fornecedor não cadastrado em lages');</script>";
	        echo $voltalogin;
		        
	    }
	    $comandoempresadestino= "select ccodempresa from tempresa where ccnpjempresa = '$cnpjempressadestino' ";
	    $excomandoempresadestino= pg_query($conexaol,$comandoempresadestino);
	    $resultadocomandoempresadestino= pg_fetch_array($excomandoempresadestino);
	    $empnfe=$resultadocomandoempresadestino['ccodempresa'];
	    if ($resultadocomandoempresadestino == ''){	        
	        echo "<script>alert('Empresa destino não Confere com o cliente da Nfe favor verefique');</script>";
	        echo $voltalogin;	        
	    }
	    $comandovereficanfe= "select cnfientradas from aentradas where cnfientradas = '$numeronfe'and cforentradas = '$fornecedor' ";
	    $excomandocomandovereficanfe= pg_query($conexaol,$comandovereficanfe);
	    $resultadocomandovereficanfe= pg_fetch_array($excomandocomandovereficanfe);
	    if ( $resultadocomandovereficanfe>= '1'){		        
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
            echo "<p style=background:#00FF00; align=center <br/><b><font size=30 color=#0000FF>Número de Nfe:'$NumeroNfe' Já existente  '$dia' , '$time'  </font></b></p>"; 
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
	    $com=pg_query($conexaol,"INSERT INTO aentradas(
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
        VALUES (nextval('seque_aentradas'),'V','$fornecedor','$datanfe','$datanfe','$numeronfe','$totalsaidas','$totalsaidas','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','1.152','0.00','0.00',NULL,'PAGO','0','','$datanfe','$time',null,null,'0',null,'$login','','$empnfe','01','','0.00','0.00','','0.00',null,'2','0.00','0.00','0.00','0.00','','','0.00','','0','0','0.00','0.00','0.00','0.00','0',null)");
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
	    $comandoentrada = "select csidentradas from aentradas where cemientradas = '$datanfe' and cnfientradas = '$numeronfe' and cforentradas =  '$fornecedor' and cempentrada = '$empnfe'  ";
	    $selecaoentrada=pg_query($conexaol,$comandoentrada);
	    $cienhistorico=pg_fetch_array($selecaoentrada);
        $ideentradahistorico=$cienhistorico ['csidentradas'];
	    if ($cienhistorico == ''){
	        pg_query($conexaol,"delete from ahistorico2");		        
	        echo "<script>alert('Nota não foi incluida automaticamente');</script>";		        
	        echo "<br><br>";
	        echo "<span style='color:red;'> Confira os dados coletados </span> ";
	        echo "<br><br>";
	        echo " '$empnfe', '$fornecedor', Emisao: '$datanfe', Numero Da Nfe: '$numeronfe', Empresa Da Nfe: '$empnfe'";
	        exit;
	    }
	    $com=pg_query($conexaol,"update ahistorico2 set centhistorico = csaihisotorico where cprohistorico = cprohistorico;update ahistorico2 set csaihisotorico = '0';
        update ahistorico2 set ctiphistorico = 'E';update ahistorico2 set cisahistorico = '0';update ahistorico2 set cidehistorico = nextval('seque_ahistorico');update ahistorico2 set cmothistorico= 'TRANFERENCIA DE CACADOR FEITA AUTOMATICAMENTE';
        update ahistorico2 set cclihistorico = '0';update ahistorico2 set cipehistorico = '0';update ahistorico2 set ccfohistorico = '1.102';update ahistorico2 set cemphistorico = '$empnfe';update ahistorico2 set cforhistorico= '$fornecedor';update ahistorico2 set cienhistorico=  '$ideentradahistorico';
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
		    $com=pg_query($conexaol,"insert into ahistorico select * from ahistorico2;delete from ahistorico2;select logar('COPIA',1,0)");
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
	    $com=pg_query($conexaol,"INSERT INTO aeduplicatas(
        cideduplicata, cienduplicata, cparduplicata, cforduplicata, ctipduplicata, 
        cnumduplicata, cvalduplicata, cvenduplicata, cjurduplicata, cdesduplicata, 
        cdpaduplicata, cvapduplicata, cfladuplicata, cbeduplicata, cdtcadduplicata, 
        chocadduplicata, cuscadduplicata, copcadduplicata, cdtatuduplicata, 
        choatuduplicata, cusatuduplicata, copatuduplicata, cempduplicata, 
        c_aceite_duplicata, s_aed_observacoes, i_aed_ide_ped, i_aed_numero_empenho)
        VALUES (nextval('seque_aeduplicatas'),'$ideentradahistorico', '1', '$fornecedor', 'DUPLICATA', 
        '1', '$totalsaidas','$dia','0.00','0.00',NULL,'0.00','','NAO','$datanfe','$time','$login','1',NULL, 
        NULL,'','0','$empnfe','','','0','0')");
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
}
if ($transferencia == '7'){
    $dtbj=$_POST ['databomjesus'];
    $nfbj=$_POST ['nfebomjesus'];    
    pg_query ($conexaolc,"delete from ahistorico2");
    $sql="select cnomope from parametros where cnomope= '$login'";
    $exsql=pg_query($conexaolc,$sql);
    $rssql=pg_fetch_array($exsql);
    if ($rssql == null ){        
        echo "$errologin";
        echo "$voltalogin";
        exit;
    }
    $sql="select cnomope,csenhausuario from parametros where cnomope= '$login' and csenhausuario='$senha'";
    $exsql = pg_query($conexaolc,$sql);
    $rssql= pg_fetch_array($exsql);
    if ($rssql == null) {        
        echo "$errosenha";
        echo "$voltalogin";
        exit;
    }
    echo "$mensagemlogin";
    $sql = "select cidesaidas,cempresasaidas,cnpj_saidas,ctotsaidas,cmersaidas,cdessaidas from asaidas where cemisaidas = '$datanfe' and cclisaidas = '$clientnfe' and cnotsaidas = '$numeronfe'";
    $exsql=pg_query($conexaolc,$sql);
    $rssql=pg_fetch_array($exsql);
    $cnpjempressadestino= $rssql ['cnpj_saidas'];
    $idehistorico = $rssql ['cidesaidas'];
    $ideempresa= $rssql ['cempresasaidas'];
    $totalsaidas= $rssql ['ctotsaidas'];
    $valorbruto= $rssql ['cmersaidas'];
    $desconto=$rssql ['cdessaidas'];
    if ($cnpjempressadestino == null ){        
        echo "<script>alert('Numero nota, cliente ou data inválidos por favor tente novamente ');</script>";
        echo "$voltalogin";
        exit;
    }
    pg_query($conexaolc,"insert into ahistorico2 select * from ahistorico where cisahistorico = '$idehistorico' ");    
    $sql= "select ccodfornecedor from afornecedor where ccgcfornecedor = '$cnpjempressadestino' ";
    $exsql = pg_query($conexaolc,$sql);
    $rssql = pg_fetch_array($exsql);
    $fornecedor = $rssql['ccodfornecedor'];    
    if ($fornecedor == null){        
        echo "<script>alert('Fornecedor não cadastrado em caçador');</script>";
        echo "$voltalogin";
        exit;
    }
    $sql="select s_aen_chave_nfe from aentradas where cemientradas = '$dtbj' and cnfientradas = $nfbj and cforentradas = $fornecedor ";
    $exsql = pg_query($conexaolc,$sql);
    $rssql = pg_fetch_array($exsql);
    $chave = $rssql['s_aen_chave_nfe'];    
    if ($chave == null) {
        echo "<script>alert('Chave de Nota Fiscal Não Localizada ');</script>";
        echo "$voltalogin";
        exit;
    }
    pg_query($conexaolc,"select logar('COPIA',1,0)");
    pg_query($conexaolc,"INSERT INTO aentradas VALUES (nextval('seque_aentradas'),'V','$fornecedor','$dtbj','$datanfe','$nfbj','$totalsaidas','$valorbruto','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','2.917','$desconto','0.00',NULL,'PAGO','0','','$datanfe','$time',null,null,'0',null,'$login','','1','2','','0.00','0.00','','0.00',null,'2','0.00','0.00','0.00','0.00','',$chave,'0.00','','0','0','0.00','0.00','0.00','0.00','0',null)");
    $sql = "select csidentradas from aentradas where cemientradas = '$dtbj' and cnfientradas = '$nfbj' and cforentradas =  '$fornecedor' and cempentrada = '1' and i_aen_serie_nf= '2'";
    $exsql=pg_query($conexaolc,$sql);
    $rssql=pg_fetch_array($exsql);
    $ideentradahistorico = $rssql ['csidentradas'];
    if ($ideentradahistorico == null){
        pg_query($conexaolc,"delete from ahistorico2");        
        echo "<script>alert('Nota Nao Foi Incluida Automaticamente');</script>";
        echo "<span style='color:red;'> Confira Os Dados Coletados </span>";
        echo '<br><br>';
        echo " '1', '$fornecedor', Emisão: '$datanfe', Numero Da Nfe: '$numeronfe', Empresa Da Nfe: '1'";
        exit;
    }
    pg_query($conexaolc,"update ahistorico2 set centhistorico = csaihisotorico where cprohistorico = cprohistorico");
    pg_query($conexaolc,"update ahistorico2 set cicmhistorico = 0.000,n_ahi_base_icms = 0.000,n_ahi_base_ipi = 0.000,cvichistorico = 0.000 ");
    pg_query($conexaolc,"update ahistorico2 set cicmhistorico = 12.000,n_ahi_base_ipi = 0.000,cvichistorico = 0.000 ");
    pg_query($conexaolc,"update ahistorico2 set csaihisotorico = '0'");
    pg_query($conexaolc,"update ahistorico2 set ctiphistorico = 'E'");
    pg_query($conexaolc,"update ahistorico2 set cisahistorico = '0' ");
    pg_query($conexaolc,"update ahistorico2 set cidehistorico = nextval('seque_ahistorico')");
    pg_query($conexaolc,"update ahistorico2 set cmothistorico= 'Nota Bom Jesus'");
    pg_query($conexaolc,"update ahistorico2 set cclihistorico = '0'");
    pg_query($conexaolc,"update ahistorico2 set cipehistorico = '0'");
    pg_query($conexaolc,"update ahistorico2 set ccfohistorico = '2.917'");
    pg_query($conexaolc,"update ahistorico2 set cemphistorico = '1'");
    pg_query($conexaolc,"update ahistorico2 set cforhistorico= '$fornecedor'");
    pg_query($conexaolc,"update ahistorico2 set cienhistorico=  '$ideentradahistorico'");
    pg_query($conexaolc,"insert into ahistorico select * from ahistorico2");
    pg_query($conexaolc,"delete from ahistorico2");    
    echo "<script>alert('Lancamento Concluido com Suceso ');</script>";
    echo "$voltalogin";
    exit;
}
if ($transferencia == '10'){
    if(!@($conexll=pg_connect ("host=192.168.11.2 dbname=troll port=5430 user=postgres password=ky$14gr@"))){
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados Local Lages Data:$dia  Hora:$time </font></b></p>";
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
	$dtbj=$_POST ['databomjesus'];
	$nfbj=$_POST ['nfebomjesus'];
	pg_query ($conexll,"delete from ahistorico2");
	$sql="select cnomope from parametros where cnomope= '$login'";
	$exsql=pg_query($conexll,$sql);
	$rssql=pg_fetch_array($exsql);
	if ($rssql == null ){
	    echo "$errologin";
	    echo "$voltalogin";
	    exit;
	}
	$sql="select cnomope,csenhausuario from parametros where cnomope= '$login' and csenhausuario='$senha'";
	$exsql = pg_query($conexll,$sql);
	$rssql= pg_fetch_array($exsql);
	if ($rssql == null) {
	    echo "$errosenha";
	    echo "$voltalogin";
	    exit;
	}
	echo "$mensagemlogin";
	$sql = "select cidesaidas,cempresasaidas,cnpj_saidas,ctotsaidas,cmersaidas,cdessaidas from asaidas where cemisaidas = '$datanfe' and cclisaidas = '$clientnfe' and cnotsaidas = '$numeronfe'";
	$exsql=pg_query($conexll,$sql);
	$rssql=pg_fetch_array($exsql);
	$cnpjempressadestino= $rssql ['cnpj_saidas'];
	$idehistorico = $rssql ['cidesaidas'];
	$ideempresa= $rssql ['cempresasaidas'];
	$totalsaidas= $rssql ['ctotsaidas'];
	$valorbruto= $rssql ['cmersaidas'];
	$desconto=$rssql ['cdessaidas'];
	if ($cnpjempressadestino == null ){
	    echo "<script>alert('Numero nota, cliente ou data inválidos por favor tente novamente ');</script>";
	    echo "$voltalogin";
	    exit;
	}
	pg_query($conexll,"insert into ahistorico2 select * from ahistorico where cisahistorico = '$idehistorico' ");
	$sql= "select ccodfornecedor from afornecedor where ccgcfornecedor = '$cnpjempressadestino' ";
	$exsql = pg_query($conexll,$sql);
	$rssql = pg_fetch_array($exsql);
	$fornecedor = $rssql['ccodfornecedor'];
	if ($fornecedor == null){
	    echo "<script>alert('Fornecedor não cadastrado em caçador');</script>";
	    //echo "$voltalogin";
	    exit;
	}
	$sql="select s_aen_chave_nfe from aentradas where cemientradas = '$dtbj' and cnfientradas = $nfbj and cforentradas = $fornecedor ";
	$exsql = pg_query($conexll,$sql);
	$rssql = pg_fetch_array($exsql);
	$chave = $rssql['s_aen_chave_nfe'];
	if ($chave == null) {
	    echo "<script>alert('Chave de Nota Fiscal Não Localizada ');</script>";
	    echo "$voltalogin";
	    exit;
	}
	pg_query($conexll,"select logar('COPIA',1,0)");
	pg_query($conexll,"INSERT INTO aentradas VALUES (nextval('seque_aentradas'),'V','$fornecedor','$dtbj','$datanfe','$nfbj','$totalsaidas','$valorbruto','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','2.917','$desconto','0.00',NULL,'PAGO','0','','$datanfe','$time',null,null,'0',null,'$login','','1','2','','0.00','0.00','','0.00',null,'2','0.00','0.00','0.00','0.00','',$chave,'0.00','','0','0','0.00','0.00','0.00','0.00','0',null)");
	$sql = "select csidentradas from aentradas where cemientradas = '$dtbj' and cnfientradas = '$nfbj' and cforentradas =  '$fornecedor' and cempentrada = '1' and i_aen_serie_nf= '2'";
	$exsql=pg_query($conexll,$sql);
	$rssql=pg_fetch_array($exsql);
	$ideentradahistorico = $rssql ['csidentradas'];
	if ($ideentradahistorico == null){
	    pg_query($conexll,"delete from ahistorico2");
	    echo "<script>alert('Nota Nao Foi Incluida Automaticamente');</script>";
	    echo "<span style='color:red;'> Confira Os Dados Coletados </span>";
	    echo '<br><br>';
	    echo " '1', '$fornecedor', Emisão: '$datanfe', Numero Da Nfe: '$numeronfe', Empresa Da Nfe: '1'";
	    exit;
	}
	pg_query($conexll,"update ahistorico2 set centhistorico = csaihisotorico where cprohistorico = cprohistorico");
	pg_query($conexll,"update ahistorico2 set cicmhistorico = 0.000,n_ahi_base_icms = 0.000,n_ahi_base_ipi = 0.000,cvichistorico = 0.000 ");
	pg_query($conexll,"update ahistorico2 set cicmhistorico = 12.000,n_ahi_base_ipi = 0.000,cvichistorico = 0.000 ");
	pg_query($conexll,"update ahistorico2 set i_ahi_csosn = 900 ");
	pg_query($conexll,"update ahistorico2 set csaihisotorico = '0'");
	pg_query($conexll,"update ahistorico2 set ctiphistorico = 'E'");
	pg_query($conexll,"update ahistorico2 set cisahistorico = '0' ");
	pg_query($conexll,"update ahistorico2 set cidehistorico = nextval('seque_ahistorico')");
	pg_query($conexll,"update ahistorico2 set cmothistorico= 'Nota Bom Jesus'");
	pg_query($conexll,"update ahistorico2 set cclihistorico = '0'");
	pg_query($conexll,"update ahistorico2 set cipehistorico = '0'");
	pg_query($conexll,"update ahistorico2 set ccfohistorico = '2.917'");
	pg_query($conexll,"update ahistorico2 set cemphistorico = '1'");
	pg_query($conexll,"update ahistorico2 set cforhistorico= '$fornecedor'");
	pg_query($conexll,"update ahistorico2 set cienhistorico=  '$ideentradahistorico'");
	pg_query($conexll,"insert into ahistorico select * from ahistorico2");
	pg_query($conexll,"delete from ahistorico2");
	echo "<script>alert('Lancamento Concluido com Suceso ');</script>";
	echo "$voltalogin";
	exit;
}
?>