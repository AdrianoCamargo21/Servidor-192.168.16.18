<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
set_time_limit(900000000);
date_default_timezone_set('America/Sao_Paulo');
$time=date('H:i:s');
$dia= date('d-m-Y');
$base=$_POST['base'];
if ($base=='C') {    
    if(!@($con=pg_connect('host=192.168.10.30 dbname=troll port=5430 user=postgres password=ky$14gr@'))){
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
} 
if ($base=='L') {
    if(!@($con=pg_connect('host=192.168.11.2 dbname=Troll port=5431 user=postgres password=ky$14gr@'))){
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados De Lages Data:$dia  Hora:$time </font></b></p>";
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
$arq = fopen($arquivo,'r');
$ll=0;
while(!feof($arq))
    for($i=0; $i<1; $i++){
        if ($conteudo = fgets($arq)){
            $ll++;
            $linha = explode(',', $conteudo);
        }
        $sql="select ccodproduto,cpveproduto from aprodutos where clinproduto = '108' and crefporduto ='$linha[0]' order by ccodproduto ";
        $exsql=pg_query($con,$sql);
        while($dados=pg_fetch_array($exsql)){
            $cod=$dados['ccodproduto'];
            $preco=$dados['cpveproduto'];
            if ($preco < $linha[1]  ) {
                $com="select logar('COPIA',1,0)";
                $excom=pg_query($con,$com);
                $com="update aprodutos set cpveproduto = $linha[1] where ccodproduto = $cod ";
                $excom=pg_query($con,$com);
            }
            
        }
        
        $linha = array();// linpa o array de $linha e volta para o for  
}

echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>Total de Linhas Vereficadas = $ll</font></b></p>";
?>


















