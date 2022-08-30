

<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
$arquivo = "sorteio.txt";
unlink($arquivo);
$voltalogin="<script>window.location='http://192.168.13.2/Desenvolver/ajustasorteio.html'</script>";
$tipo=$_POST["tipo"];
if ($tipo == 'AJ'){
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
    $cont=1;
	while(!feof($arq))
        for($i=0; $i<1; $i++){
         
            if ($conteudo = fgets($arq)){ 
            	$ll++;	               
                $linha = explode('\n', $conteudo);
                $lin=$linha[0];
                $lin=substr("$lin", 0, -1);                
                if ($lin <> null) {                 	               	
                	$arr = explode(' ',trim($lin));
					$descricao= $arr[0]; // will print Test					
					$descricao = substr("$descricao", 0, -1);
					if ($descricao == null) {
						$cont=1;						
					} else{
						$cont=$cont+2;						
					}					
					if ($cont == 3 ) {
						echo $lin.'<br>';
						$cont=0;						
					}
					     						 	
					$linha = array(); 
                }else {                						 	
					$linha = array();
                } 
			}
        }
	}
}



?>