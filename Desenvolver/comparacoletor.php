<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
$volta="<script>window.location='http://192.168.13.2:8080/Desenvolver/Comparacoletor.html';</script>";
set_time_limit(0);
date_default_timezone_set('America/Sao_Paulo');
$time=date('H:i:s');
$dia= date('d-m-Y');
if(!@($serv=pg_connect('host=192.168.16.2 dbname=troll port=5430 user=postgres password=ky$14gr@'))){
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
if ($tipo == null) {
    echo "<script>alert('Selecione um Tipo de operação');</script>";
    pg_close($serv);    
    echo $voltalogin;exit;
}
if ($tipo == '1'){ 
    $sql="delete from comparacoletor";
    $exsql=pg_query($serv,$sql);
    if (!$exsql){
        echo "<script>alert('Erro ao Apagar Dados Antigos');</script>";
        pg_close($serv);        
        echo $volta;
        exit;
    }
    $arquivo = "compara.txt";
    if (file_exists($arquivo)) {
        unlink($arquivo);
    }
    $nome_temporario=$_FILES["Arquivo"]["tmp_name"];
    $nome_real=$_FILES["Arquivo"]["name"];
    if (!copy($nome_temporario,$nome_real)){
        echo "<script>alert('Erro ao Carregar o Arquivo Coletor01');</script>";
        pg_close($serv);
        echo $volta;
        exit;
    }
    $antigo="$nome_real";
    $arquivo_novo="compara.txt";
    rename($antigo,$arquivo_novo);
    $arq = fopen($arquivo,'r');
    $ll=0;
    while(!feof($arq))
    for($i=0; $i<1; $i++){
        if ($conteudo = fgets($arq)){            
            $linha = explode(';', $conteudo);
        }      
        if ($linha[0] <> null ) {
            $linha[0] = str_replace("ï»¿","",$linha[0]);
            $sql="select c1 from comparacoletor where codigo = $linha[0] ";
            $exsql=pg_query($serv,$sql) ;
            $rssql= pg_fetch_array($exsql);
            $qtd=$rssql['c1'];
            if ($qtd == null) {
                $sql = "INSERT INTO comparacoletor VALUES ('$linha[0]', '$linha[1]',0,0)";
                $result = pg_query($sql) ;
            } else {
                $qtd=$linha[1]+$qtd;
                $sql = "update comparacoletor set c1=$qtd where codigo = $linha[0] ";
                $result = pg_query($sql) ;
            }
            $ll++;
            $linha = array();// linpa o array de $linha e volta para o for            
        }
        
    }
    echo "<script>alert('Coleta 01 Carregada Com Sucesso Total de Linhas : $ll');</script>";
    pg_close($serv);
    echo $volta;
    exit;
}
if ($tipo == '2'){
    $arquivo = "compara.txt";
    if (file_exists($arquivo)) {
        unlink($arquivo);
    }
    $nome_temporario=$_FILES["Arquivo"]["tmp_name"];
    $nome_real=$_FILES["Arquivo"]["name"];
    if (!copy($nome_temporario,$nome_real)){
        echo "<script>alert('Erro ao Carregar o Arquivo Coletor02');</script>";
        pg_close($serv);
        echo $volta;
        exit;
    }
    $antigo="$nome_real";
    $arquivo_novo="compara.txt";
    rename($antigo,$arquivo_novo);
    $arq = fopen($arquivo,'r');
    $ll=0;
    while(!feof($arq))
        for($i=0; $i<1; $i++){
            if ($conteudo = fgets($arq)){                
                $linha = explode(';', $conteudo);
            }
            $linha[0] = str_replace("ï»¿","",$linha[0] );
            
            if ($linha[0] <> null ) {
                $sql="select c2 from comparacoletor where codigo = $linha[0] ";
                $exsql=pg_query($serv,$sql) ;
                $rssql= pg_fetch_array($exsql);
                $qtd=$rssql['c2'];
                if ($qtd == null) {
                    $sql = "INSERT INTO comparacoletor VALUES ('$linha[0]',0,'$linha[1]',0)";
                    $result = pg_query($sql) ;
                } else {
                    $qtd=$linha[1]+$qtd;
                    $sql = "update comparacoletor set c2=$qtd where codigo = $linha[0] ";
                    $result = pg_query($sql) ;
                }
                $ll++;
                $linha = array();// linpa o array de $linha e volta para o for
            }
            
			
    }
    echo "<script>alert('Coleta 02 Carregada Com Sucesso Total de Linhas : $ll');</script>";
    pg_close($serv);
    echo $volta;
    exit;
}
if ($tipo == '3'){
    $arquivo = "compara.txt";
    if (file_exists($arquivo)) {
        unlink($arquivo);
    }
    $nome_temporario=$_FILES["Arquivo"]["tmp_name"];
    $nome_real=$_FILES["Arquivo"]["name"];
    if (!copy($nome_temporario,$nome_real)){
        echo "<script>alert('Erro ao Carregar o Arquivo Coletor03');</script>";
        pg_close($serv);
        echo $volta;
        exit;
    }
    $antigo="$nome_real";
    $arquivo_novo="compara.txt";
    rename($antigo,$arquivo_novo);
    $arq = fopen($arquivo,'r');
    $ll=0;
    while(!feof($arq))
        for($i=0; $i<1; $i++){
            if ($conteudo = fgets($arq)){
                
                $linha = explode(';', $conteudo);
            }
            
            if ($linha[0] <> null ) {
                $linha[0] = str_replace("ï»¿","",$linha[0]);
                $sql="select c3 from comparacoletor where codigo = $linha[0] ";
                $exsql=pg_query($serv,$sql) ;
                $rssql= pg_fetch_array($exsql);
                $qtd=$rssql['c3'];
                if ($qtd == null) {
                    $sql = "INSERT INTO comparacoletor VALUES ('$linha[0]',0,0,'$linha[1]')";
                    $result = pg_query($sql) ;
                } else {
                    $qtd=$linha[1]+$qtd;
                    $sql = "update comparacoletor set c3=$qtd where codigo = $linha[0] ";
                    $result = pg_query($sql) ;
                }
                $ll++;
                $linha = array();// linpa o array de $linha e volta para o for
            } 
            
    }
    echo "<script>alert('Coleta 03 Carregada Com Sucesso Total de Linhas : $ll');</script>";
    pg_close($serv);
    echo $volta;
    exit;
}
if ($tipo == '4'){
    echo "<table border='5' width='100%' bgcolor=#E3F6CE >";
    echo "<tr><td>Código</td>"."<td>Coletor01</td>"."<td>Coletor02</td>"."<td>Coletor03</td>"."</tr>";
    $sql="select sum(c3) as tt from comparacoletor ";
	$exsql=pg_query($serv,$sql) ;
    $rssql= pg_fetch_array($exsql);
    $tt=$rssql['tt'];
	if ($tt > 0) {
    	$sql = "select *from comparacoletor where ((c2-c1)+(c3-c2)) <> 0 order by codigo  ";
        $exsql=pg_query($serv,$sql);
        while ($row = pg_fetch_assoc($exsql)) {
            echo "<td>".$row['codigo']."</td>\n";
            echo "<td>".number_format($row['c1'],2,",",".")."</td>\n";
            echo "<td>".number_format($row['c2'],2,",",".")."</td>\n";
            echo "<td>".number_format($row['c3'],2,",",".")."</td>\n";
            echo "</tr>\n";
    
        }
	} else {
		$sql = "select *from comparacoletor where (c2-c1) <> 0 order by codigo  ";
        $exsql=pg_query($serv,$sql);
        while ($row = pg_fetch_assoc($exsql)) {
            echo "<td>".$row['codigo']."</td>\n";
            echo "<td>".number_format($row['c1'],2,",",".")."</td>\n";
            echo "<td>".number_format($row['c2'],2,",",".")."</td>\n";            
            echo "</tr>\n";    
        }
	}
}




?>