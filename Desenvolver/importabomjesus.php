<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
set_time_limit(0);
date_default_timezone_set('America/Sao_Paulo');
$time=date('H:i:s');
$dia= date('d-m-Y');
$base=$_POST['base'];
if ($base == 'C' or $base == 'L') {
    if(!@($serv=pg_connect('host=192.168.16.2 dbname=troll port=5430 user=postgres password=ky$14gr@'))){
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados Do Servidor Data:$dia  Hora:$time </font></b></p>";
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
if ($base=='C') {
    $tabela='bomjesuscacador';
    if(!@($con=pg_connect('host=192.168.16.2 dbname=troll port=5430 user=postgres password=ky$14gr@'))){
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados De Caçador Data:$dia  Hora:$time </font></b></p>";
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
} else {
    $tabela='bomjesuslages';
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
$arquivo = "bomjesus.txt";
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
$arquivo_novo="bomjesus.txt";
rename($antigo,$arquivo_novo);
$sql="delete from $tabela";
$exsql=pg_query($serv,$sql);
$sql="delete from bomjesuschavesnfe";
$exsql=pg_query($serv,$sql);
$arq = fopen($arquivo,'r');
$ll=0;
while(!feof($arq))
    for($i=0; $i<1; $i++){
        if ($conteudo = fgets($arq)){
            $ll++;
            $linha = explode(';', $conteudo);
        }
        $sql="INSERT INTO $tabela(referencia, cod, qtd, preco,nota)VALUES ('$linha[0]',0,$linha[1],$linha[2],$linha[3])";        
        $exsql=pg_query($serv,$sql);
        if (!$exsql){
            pg_close($con);
            echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Erro ao Consultar produtos**</font></b></p>";
            ?>
            <!DOCTYPE html>
			<html>
			<head>
			<link rel="stylesheet" href="css/style.css"></link>
			<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
			<center><form name = "form1" method= "post" action= "importabomjesus.html"> 
			<br>
			<input class="btn btn-red" type="submit" value="ENVIAR"/>    
			</head>
			</html>
			<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
			<?php
            exit;    
        }
        $linha = array();// linpa o array de $linha e volta para o for  
}
$sql="select referencia,nota from $tabela order by nota ";
$exsql=pg_query($serv,$sql);
$rsql=pg_fetch_array($exsql);
$nota=$rsql['nota'];
if ($nota == '') {
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>Não Foi Carregado o Arquivo Corretamente</font></b></p>";
}else {
    $exsql=pg_query($serv,$sql);    
    while($dados=pg_fetch_array($exsql)){
        $nota=$dados['nota'];
        $ref=$dados['referencia'];               
        $com="select ccodproduto,cdesproduto from aprodutos where crefporduto= '$ref' and clinproduto = '108' ";        
        $excom=pg_query($con,$com);
        $rscom=pg_fetch_array($excom);
        $cod=$rscom['ccodproduto'];
        $desc=$rscom['cdesproduto'];
        if ($cod =='') {
            echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>A Referência: $ref da Nfe: $nota Esta Incorreta </font></b></p>";
        } else {
            $com="update $tabela set cod = $cod, descrisao='$desc' where referencia = '$ref' and nota=$nota";
            $excom=pg_query($serv,$com);
        }
    }
}
echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>Total de Linhas Carregada = $ll</font></b></p>";
?>