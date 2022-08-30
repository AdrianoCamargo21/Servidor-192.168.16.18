<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
date_default_timezone_set('America/Sao_Paulo');
$time=date('H:i:s');
$dia= date('d-m-Y');
if(!@($con=pg_connect('host=192.168.10.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@'))){
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
$tipo=$_POST['tipo'];
if ($tipo == '1'){ 
    $arquivo = "coleta.txt";
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
    $arquivo_novo="coleta.txt";
    rename($antigo,$arquivo_novo);
    if (file_exists('coleta.txt')){
    $tabela = "coletortemp";
    $arquivo = 'coleta.txt';
    $sql="delete from $tabela ";
    pg_query($con,$sql);
    $arq = fopen($arquivo,'r');
    $ll=0;
    while(!feof($arq))
        for($i=0; $i<1; $i++){ 
         if ($conteudo = fgets($arq)){            
            $ll++;
            $linha = explode(',', $conteudo);
        }      
        $sql = "INSERT INTO $tabela (codigo,quantidade) VALUES ('$linha[0]', '$linha[1]')";
        $result = pg_query($sql) or die(pg_error());
        $linha = array();// linpa o array de $linha e volta para o for
    }
    echo "<p style=background:#00FF00; align=center <br/><b><font size=5 color=#FFFFFF>Carregado Com Sucesso em $dia , $time Quantidade de Linhas :$ll  </font></b></p>";
    ?>
	<!DOCTYPE html>
	</form>
	<html>
	<head>
	<link rel="stylesheet" href="css/style.css"></link>
	<center><form name = "form1" method= "post" action= "Importa Coletores.html"></center>
	<center><input class="btn btn-green"  type="submit"  value="Voltar"></center>
	</form>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
	exit; 
    }else {
        exit('echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Falha ao CArregar o Aquivo $dia  Hora:$time </font></b></p>";');
        ?>
	    <!DOCTYPE html>
		</form>
		<html>
		<head>
		<link rel="stylesheet" href="css/style.css"></link>
		<center><form name = "form1" method= "post" action= "Importa Coletores.html"></center>
		<center><input class="btn btn-green"  type="submit"  value="Voltar"></center>
		</form>
		</head>
		</html>
		<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
		<?php
	   exit; 
        }
}
$tabela = "coletortemp";
if($tipo== '2'){
    $com="select *from $tabela order by codigo ";
    $excom=pg_query($con,$com);
    while($dados=pg_fetch_array($excom)){
        $codt=$dados['codigo'];
        $qtdt=$dados['quantidade'];
        $comando="select *from coletor where codigo = $codt order by codigo ";        
        $excomando=pg_query($con,$comando);
        $rscomando=pg_fetch_array($excomando);
        $cod=$rscomando['codigo'];
        $qtd=$rscomando['quantidade'];
        if ($cod == '') {            
            $com=pg_query($con,"insert into coletor(codigo, quantidade) values ($codt,$qtdt) ");  
        } else {            
            $nov= $qtdt+$qtd;
            pg_query($con,"update coletor set quantidade = '$nov' where codigo = $cod  ");
        }      

    }
    $sql="delete from $tabela ";
    pg_query($con,$sql);
    ?>
	<!DOCTYPE html>
	</form>
	<html>
	<head>
	<link rel="stylesheet" href="css/style.css"></link>
	<center><form name = "form1" method= "post" action= "Importa Coletores.html"></center>
	<center><input class="btn btn-green"  type="submit"  value="Voltar"></center>
	</form>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
	exit;     
}
if($tipo== '3'){
    $comando="select *from coletor order by codigo ";
    $excomando=pg_query($con,$comando);
    while($dados=pg_fetch_array($excomando)){
        $cod=$dados['codigo'];
        $qtd=$dados['quantidade'];
        echo "$cod".","."$qtd"."<br>";
    }
}
if($tipo== '4'){
    $comando="delete from coletor; delete from coletortemp; ";
    $excomando=pg_query($con,$comando);
    ?>
	<!DOCTYPE html>
	</form>
	<html>
	<head>
	<link rel="stylesheet" href="css/style.css"></link>
	<center><form name = "form1" method= "post" action= "Importa Coletores.html"></center>
	<center><input class="btn btn-green"  type="submit"  value="Voltar"></center>
	</form>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
	exit;    
}

?>