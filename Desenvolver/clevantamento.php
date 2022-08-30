<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
date_default_timezone_set('America/Sao_Paulo');
$time=date('H:i:s');
$dia= date('d-m-Y');
$data=date('Y-m-d');
set_time_limit(900);
$base=$_POST['base'];
if ($base==1) {
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
}
if ($base==2){
    if(!@($con=pg_connect('host=192.168.10.190 dbname=troll_lages port=5430 user=postgres password=ky$14gr@'))){
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
if ($base==3) {    
    if(!@($con=pg_connect('host=192.168.10.190 dbname=troll_videira port=5430 user=postgres password=ky$14gr@'))){
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
}
if ($base==4) {
    if(!@($con=pg_connect('host=192.168.10.190 dbname=troll_joinville port=5430 user=postgres password=ky$14gr@'))){
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Joinville Data:$dia  Hora:$time </font></b></p>";
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
if ($base=='5') {
    if(!@($con=pg_connect ("host=192.168.10.190 dbname=silvio_pessoal port=5430 user=postgres password=ky$14gr@"))){
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Porto União Data:$dia  Hora:$time </font></b></p>";
        echo "<p style=background:#000000; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista Favor avisar o Adriano</font></b></p>";
        ?>
        <!DOCTYPE html>
    	<html>
    	<head>
    	<center><img src="img/error.jpg"alt="500" heigth ="500px" width="100px" ></center>
		<center><form name = "form1" method= "post" action= "ilevantamento.html"> 
		<br>
		<input class="btn btn-red" type="submit" value="ENVIAR"/>
		</head>
		</html>
		<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
		<?php
        exit; 
    }
}
$id=$_POST['id'];
if ($id=='') {
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Id  Inválido**</font></b></p>";
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

$sql="select id from levantamento where id = '$id' and status = 'A'  ";
$exsql=pg_query($con,$sql);
$rsql=pg_fetch_array($exsql);
if ($rsql=='') {
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! **Id Inválido ou Levantamento já Fechado**</font></b></p>";
    ?>
        <!DOCTYPE html>
    	<html>
    	<head>
    	<link rel="stylesheet" href="css/style.css"></link>
		<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
		<center><form name = "form1" method= "post" action= "clevantamento.html"> 
		<br>
		<input class="btn btn-red" type="submit" value="VOLTAR"/>
		</head>
		</html>
		<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
		<?php
        exit;
}

$arquivo = "levantamento.txt";
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
	<center><form name = "form1" method= "post" action= "clevantamento.html"> 
	<br>
	<input class="btn btn-red" type="submit" value="VOLTAR"/>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit;
}
$antigo="$nome_real";
$arquivo_novo="levantamento.txt";
rename($antigo,$arquivo_novo);
if (file_exists('levantamento.txt')){    
    $arquivo = 'levantamento.txt';
    $arq = fopen($arquivo,'r');
    $ll=0;
    while(!feof($arq))
        for($i=0; $i<1; $i++){
            if ($conteudo = fgets($arq)){
                $ll++;
                $linha = explode(';', $conteudo);
            }
            $sql="select produto,coleta from itens_levantamento where produto = $linha[0] and codlevantamento = '$id' ";
            $exsql=pg_query($con,$sql);
            $rssql=pg_fetch_array($exsql);
            $cod=$rssql['produto'];
            $coleta=$rssql['coleta'];            
            if ($cod=='') {
                $sql="select ccodproduto from aprodutos where ccodproduto = $linha[0]";
                $exsql=pg_query($con,$sql);
                $rssql=pg_fetch_array($exsql);
                $cod=$rssql['ccodproduto'];
                if ($cod==''){
                    $sql="select ccodproduto from aprodutos where cantpoduto  = $linha[0]";
                    $exsql=pg_query($con,$sql);
                    $rssql=pg_fetch_array($exsql);
                    $cod=$rssql['ccodproduto'];
                    if ($cod == '') {
                        echo "o Código $linha[0] Foi Coletado Errado".'<br>';
                    }else {
                        $sql="select produto,coleta from itens_levantamento where produto = $cod and codlevantamento = '$id' ";
                        $exsql=pg_query($con,$sql);
                        $rssql=pg_fetch_array($exsql);
                        $codi=$rssql['produto'];
                        if ($codi == '') {
                            $sql="select cgruporduto,clinproduto, cmarproduto,cdepproduto from aprodutos where ccodproduto=$cod ";
                            $exsql=pg_query($con,$sql);
                            $rssql=pg_fetch_array($exsql);
                            $grupo=$rssql['cgruporduto'];
                            $linha=$rssql['clinproduto'];
                            $marca=$rssql['cmarproduto'];
                            $departamento=$rssql['cdepproduto'];
                            if ($grupo=='') {
                                echo "o Código:$cod Está sem Grupo Cadastrado".'<br><br>';
                            } else {
                                $sql="select cdesgrupo from tgrupo where ccodgrupo = $grupo ";
                                $exsql=pg_query($con,$sql);
                                $rssql=pg_fetch_array($exsql);
                                $dgrupo=$rssql['cdesgrupo'];
                            }
                            if ($linha=='') {
                                echo "o Código:$cod Está sem Linha Cadastrada".'<br><br>';
                            } else {
                                $sql="select cdeslinha from tlinha where ccodlinha = $linha ";
                                $exsql=pg_query($con,$sql);
                                $rssql=pg_fetch_array($exsql);
                                $dlinha=$rssql['cdeslinha'];
                            }
                            if ($marca=='') {
                                echo "o Código:$cod Está sem Marca Cadastrada".'<br><br>';
                            } else {
                                $sql="select cdesmarca  from tmarca where ccodmarca  = $marca ";
                                $exsql=pg_query($con,$sql);
                                $rssql=pg_fetch_array($exsql);
                                $dmarca=$rssql['cdesmarca'];
                            }
                            if ($departamento == '') {
                                echo "o Código:$cod Está sem Departamento Cadastrado".'<br><br>';
                            } else{
                                $sql="select cdesdepartamento  from tdepartamento where ccoddepartamento  = $departamento ";
                                $exsql=pg_query($con,$sql);
                                $rssql=pg_fetch_array($exsql);
                                $ddepartamento=$rssql['cdesdepartamento'];
                            }
                            echo "o Código $cod Não esta Presente no Filtro Selecionado".'<br>';
                            echo " Grupo:$dgrupo, Marca:$dmarca, Linha:$dlinha Departamento:$ddepartamento".'<br><br>';                            
                        } else {
                            $coleta=$coleta+$linha[1];
                            $sql="update itens_levantamento set coleta = $coleta where produto = $cod and codlevantamento = $id ";
                            $exsql=pg_query($con,$sql);
                        }
                    }
                } else {
                    $sql="select cgruporduto,clinproduto, cmarproduto,cdepproduto from aprodutos where ccodproduto=$cod ";
                    $exsql=pg_query($con,$sql);
                    $rssql=pg_fetch_array($exsql);
                    $grupo=$rssql['cgruporduto'];
                    $linha=$rssql['clinproduto'];
                    $marca=$rssql['cmarproduto'];
                    $departamento=$rssql['cdepproduto'];
                    if ($grupo=='') {
                        echo "o Código:$cod Está sem Grupo Cadastrado".'<br><br>';
                    } else {
                        $sql="select cdesgrupo from tgrupo where ccodgrupo = $grupo ";
                        $exsql=pg_query($con,$sql);
                        $rssql=pg_fetch_array($exsql);
                        $dgrupo=$rssql['cdesgrupo'];
                    }
                    if ($linha=='') {
                        echo "o Código:$cod Está sem Linha Cadastrada".'<br><br>';
                    } else {
                        $sql="select cdeslinha from tlinha where ccodlinha = $linha ";
                        $exsql=pg_query($con,$sql);
                        $rssql=pg_fetch_array($exsql);
                        $dlinha=$rssql['cdeslinha'];
                    }
                    if ($marca=='') {
                        echo "o Código:$cod Está sem Marca Cadastrada".'<br><br>';
                    } else {
                        $sql="select cdesmarca  from tmarca where ccodmarca  = $marca ";
                        $exsql=pg_query($con,$sql);
                        $rssql=pg_fetch_array($exsql);
                        $dmarca=$rssql['cdesmarca'];
                    }
                    if ($departamento == '') {
                        echo "o Código:$cod Está sem Departamento Cadastrado".'<br><br>';
                    } else{
                        $sql="select cdesdepartamento  from tdepartamento where ccoddepartamento  = $departamento ";
                        $exsql=pg_query($con,$sql);
                        $rssql=pg_fetch_array($exsql);
                        $ddepartamento=$rssql['cdesdepartamento'];
                    }
                    echo "o Código $cod Não esta Presente no Filtro Selecionado".'<br>';
                    echo " Grupo:$dgrupo, Marca:$dmarca, Linha:$dlinha Departamento:$ddepartamento".'<br><br>';
                }                    
                
            } else {
                $coleta=$coleta+$linha[1];;
                $sql="update itens_levantamento set coleta = $coleta where produto = $cod and codlevantamento = $id ";
                $exsql=pg_query($con,$sql);
            }
            $linha = array();// linpa o array de $linha e volta para o for
    }
        	
}else {
        exit('echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Falha ao Carregar o Aquivo $dia  Hora:$time </font></b></p>";');
        ?>
	    <!DOCTYPE html>
		</form>
		<html>
		<head>
		<link rel="stylesheet" href="css/style.css"></link>
		<center><form name = "form1" method= "post" action= "nota.html"></center>
		<center><input class="btn btn-green"  type="submit"  value="Voltar"></center>
		</form>
		</head>
		</html>
		<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
		<?php
	   exit; 
}

echo "<p style=background:#00FF00; align=center <br/><b><font size=5 color=#FFFFFF>Carregado Com Sucesso em $dia , $time Quantidade de Linhas :$ll  </font></b></p>";
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css"></link>
<center><form name = "form1" method= "post" action= "levantamento.php"></center>
<center><input class="btn btn-red"  type="submit"  value="Voltar"></center>
</center>
</head>
</html>