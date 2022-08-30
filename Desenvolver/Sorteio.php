

<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
$arquivo = "sorteio.txt";
unlink($arquivo);
$voltalogin="<script>window.location='http://192.168.13.2/Desenvolver/Sorteio.html'</script>";
$errocacador="<script>alert('Não foi possivel conectar ao B.D');</script>";
$tipo=$_POST["tipo"];
if ($tipo == 'LI'){
$nome_temporario=$_FILES["Arquivo"]["tmp_name"];
$nome_real=$_FILES["Arquivo"]["name"];
if (!copy($nome_temporario,$nome_real)){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Ao caregar o Arquivo**</font></b></p>";
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
$antigo="$nome_real";
$arquivo_novo="sorteio.txt";
rename($antigo,$arquivo_novo);
if (file_exists('sorteio.txt')){		
	$arquivo = 'sorteio.txt';
    $arq = fopen($arquivo,'r');
    $ll=3;
	while(!feof($arq))
        for($i=0; $i<1; $i++){
            if ($conteudo = fgets($arq)){ 
            	$ll++;	               
                $linha = explode(';', $conteudo);				
				if ($linha[0]=='Curtir') {
					$ll=1;
				}				
				if ($ll==2) {
					echo $linha[0].'<br>';
					$ll=5;
				}						 	
				$linha = array(); 
			}
        }
	}
}



?>