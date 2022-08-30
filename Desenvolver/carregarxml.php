<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
$volta="<script>window.location='http://192.168.10.191/desenvolver/Carregarxml.html';</script>";
date_default_timezone_set('America/Sao_Paulo');
$time=date('H:i:s');
$dia= date('d-m-Y');
if(!@($con=pg_connect('host=192.168.10.30 dbname=troll port=5430 user=postgres password=ky$14gr@'))){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Caçador Data:$dia  Hora:$time </font></b></p>";
    echo "<p style=background:#000000; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista Favor avisar o Adriano</font></b></p>";
    ?>
        <!DOCTYPE html>
    	<html>
    	<head>
    	<center><img src="img/error.jpg"alt="500" heigth ="500px" width="100px" ></center>
    	<link rel="stylesheet" href="css/style.css"></link>    	
    	<center><form name = "form1" method= "post" action= "serverxml.html"></center>
		<center><input class="btn btn-red"  type="submit"  value="Voltar"></center>
		</head>
		</html>
		<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
		<?php	
        exit;     
}
$arquivo = "xmls.xml";
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
	<center><form name = "form1" method= "post" action= "serverxml.html"></center>
	<center><input class="btn btn-red"  type="submit"  value="Voltar"></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit;
}
$antigo="$nome_real";
$arquivo_novo="notas.xml";
rename($antigo,$arquivo_novo);
if (file_exists('notas.xml')){
   
    
    $object = simplexml_load_file('notas.xml');
    {
        foreach($object->NFe  as $item)            
            $filial=$item->infNFe->emit->CNPJ;                
        if ($filial=='') {
            echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Ao Carregar dados do xml**</font></b></p>";
            ?>
	       <!DOCTYPE html>
    		<html>
    		<head>
    		<link rel="stylesheet" href="css/style.css"></link>
			<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
			<center><form name = "form1" method= "post" action= "serverxml.html"></center>
			<center><input class="btn btn-red"  type="submit"  value="Voltar"></center>
			</head>
			</html>
			<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
			<?php
            exit;
        }
        
        $data1=$item->infNFe->ide->dhEmi;
        $data = substr($data1, 0, -15);        
        $data = str_replace('-', '/', $data);        
        if ($data == ''){
            $data=$item->infNFe->ide->dEmi; 
            if ($data == ''){
                echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Ao Carregar Data**</font></b></p>";
                ?>
	            <!DOCTYPE html>
    			<html>
    			<head>
    			<link rel="stylesheet" href="css/style.css"></link>
				<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
				<center><form name = "form1" method= "post" action= "serverxml.html"></center>
				<center><input class="btn btn-red"  type="submit"  value="Voltar"></center>
				</head>
				</html>
				<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
				<?php
                exit;
            }
        }
        $nfe=$item->infNFe->ide->nNF;
        if ($nfe == ''){
            echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Ao Carregar Data**</font></b></p>";
            ?>
	       <!DOCTYPE html>
    		<html>
    		<head>
    		<link rel="stylesheet" href="css/style.css"></link>
			<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
			<center><form name = "form1" method= "post" action= "serverxml.html"></center>
			<center><input class="btn btn-red"  type="submit"  value="Voltar"></center>
			</head>
			</html>
			<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
			<?php
            exit;
        }        
    }
    {
        foreach($object->protNFe as  $item)
            $chave=$item->infProt->chNFe;
            if(strlen($chave)> 44 or strlen($chave)< 44 ){
                echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Ao Caregar Chave do xml**</font></b></p>";
                ?>
	            <!DOCTYPE html>
    			<html>
    			<head>
    			<link rel="stylesheet" href="css/style.css"></link>
				<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
				<center><form name = "form1" method= "post" action= "serverxml.html"></center>
				<center><input class="btn btn-red"  type="submit"  value="Voltar"></center>
				</head>
				</html>
				<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
				<?php
                exit;
            }
    }
    
    $atualizado=$chave.'.xml';
    rename('notas.xml',$atualizado);
    $arquivo_origem = $atualizado;
    $arquivo_destino = "C:/xml/".$filial."/".$atualizado;
    if (copy($arquivo_origem, $arquivo_destino)){        
        $query="select nfe from cofrenfe where chave = $chave";
        $exquery=pg_query($con,$query);
        $rsquery=pg_fetch_array($exquery);
        if (!$exquery){
            pg_close($con);
            echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>Nota Copiada p/ o diretório mas erro no cadastro da mesma erro 01</font></b></p>";
            ?>
            <!DOCTYPE html>
    		<html>
    		<head>
    		<link rel="stylesheet" href="css/style.css"></link>
			<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
			<center><form name = "form1" method= "post" action= "serverxml.html"></center>
			<center><input class="btn btn-red"  type="submit"  value="Voltar"></center>
			</head>
			</html>
			<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
			<?php
            exit;
        }
        if ($rsquery=='') {
            $query="insert into cofrenfe(chave, nfe, filial, data,id,tipo,modelo) values ($chave,$nfe,$filial,'$data',nextval('seque_cofrenfe'),'S','NFE')";
            $exquery=pg_query($con,$query);
            if (!$exquery){
                pg_close($con);
                echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>Nota Copiada p/ o diretório mas erro no cadastro da mesma erro 02</font></b></p>";
                ?>
           	    <!DOCTYPE html>
    			<html>
    			<head>
    			<link rel="stylesheet" href="css/style.css"></link>
				<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
				<center><form name = "form1" method= "post" action= "serverxml.html"></center>
				<center><input class="btn btn-red"  type="submit"  value="Voltar"></center>
				</head>
				</html>
				<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
				<?php
                exit;
            }
            echo "<script>alert('Cadastrado com Sucesso');</script>";
            unlink($atualizado);
            echo $volta;
        } else {
            echo "<p style=background:#ffff00 ; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Nota Já Carregada**</font></b></p>";
            unlink($atualizado);
            ?>
       	    <!DOCTYPE html>
			<html>
			<head>
			<link rel="stylesheet" href="css/style.css"></link>
			<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
			<center><form name = "form1" method= "post" action= "serverxml.html"></center>
			<center><input class="btn btn-red"  type="submit"  value="Voltar"></center>
			</head>
			</html>
			<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
			<?php
            exit;
        }
        
    }   
    
      
} else {
    exit('Falha ao Carregar o Arquivo');    
    
}

 ?>