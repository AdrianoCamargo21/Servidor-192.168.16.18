<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
set_time_limit(0);
date_default_timezone_set('America/Sao_Paulo');
$voltalogin="<script>window.location='http://192.168.13.2/Desenvolver/trocas.html';</script>";
$time=date('H:i:s');
$dia= date('d-m-Y');
$data=$_POST['data'];
if ($data == null ){
    echo "<script>alert('Data Inválida');</script>";
    echo $voltalogin;
    exit;
}
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
$empresa=$_POST['emp'];
if ($empresa == null) {
	exit("<script>alert('Empresa Inválida);</script>".$voltalogin);
}
$base=$_POST['base'];
if ($base == null) {
	exit("<script>alert('Base Inválida);</script>".$voltalogin);
}
if ($base== 1){
	if(!@($con=pg_connect('host=192.168.16.190  dbname=troll_cdr port=5430 user=postgres password=ky$14gr@'))){
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
if ($base== 3){
	if(!@($con=pg_connect('host=192.168.16.190  dbname=troll_videira port=5430 user=postgres password=ky$14gr@'))){
	    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados De Videira Data:$dia  Hora:$time </font></b></p>";
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
if ($base== 4){
	if(!@($con=pg_connect('host=192.168.16.190  dbname=troll_joinville port=5430 user=postgres password=ky$14gr@'))){
	    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados De Joiville Data:$dia  Hora:$time </font></b></p>";
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
$sql="delete from devolucoes";
$exsql=pg_query($serv,$sql);
$sql="select cprohistorico,sum(centhistorico) from ahistorico where cemihistorico = '$data' and cemphistorico in ($empresa) and ccfohistorico in (1.202,2.202) and ctiphistorico = 'R'
group by cprohistorico order by cprohistorico";
$exsql=pg_query($con,$sql);
$rsql=pg_fetch_array($exsql);
if ($rsql == null) {
	exit("<script>alert('Nenhuma Troca nessa Dta:$data empresa:$empresa');</script>".$voltalogin);;
}
$exsql=pg_query($con,$sql);
while($dados=pg_fetch_array($exsql)){
    $cod=$dados['cprohistorico'];
    $qtd=$dados['sum'];
    $com="INSERT INTO devolucoes(codigo, quantidade,conferencia) VALUES ($cod,$qtd,0);";
    $excom=pg_query($serv,$com);
}

$arquivo = "trocas.txt";
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
$arquivo_novo="trocas.txt";
rename($antigo,$arquivo_novo);
$arq = fopen($arquivo,'r');
$ll=0;
while(!feof($arq))
    for($i=0; $i<1; $i++){
        if ($conteudo = fgets($arq)){
            $ll++;
            $linha = explode(' ', $conteudo);
        }
        $sql="select conferencia from devolucoes where codigo = '$linha[0]' ";
        $exsql=pg_query($serv,$sql);
        $rsql=pg_fetch_array($exsql);
        $qtd=$rsql['conferencia'];        
        if ($qtd == '') {
            echo "O Código :$linha[0] da empresa $empresa Não Foi Registrado"."<br>";
        } else {
            $qtd=$qtd+1;
            $sql="update devolucoes set  conferencia =$qtd where codigo = '$linha[0]'";
            $exsql=pg_query($serv,$sql);
        } 
        

        $linha = array();// linpa o array de $linha e volta para o for  
}
$sql="select codigo,(quantidade-conferencia) as diferenca from devolucoes where (quantidade-conferencia) <> 0";
$exsql=pg_query($serv,$sql);
$rsql=pg_fetch_array($exsql);
if ($rsql == '') {
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>**Nenhuma Divergência**</font></b></p>";
} else {
    echo "<table border='2' width='100%' bgcolor=#FFFAFA>";
    echo "<tr><td>Código</td>"."<td>Empresa</td>"."<td><font color=\"red\">Quantidade</font></td>"."</tr>";
    $exsql=pg_query($serv,$sql);
    while ($row = pg_fetch_assoc($exsql)){
        $cod=$row['codigo'];        
        $difer=$row['diferenca'];
        echo "<td>".$cod."</td>\n";
        echo "<td>".$empresa."</td>\n";
        echo "<td>".$difer."</td>\n";
        echo "</tr>\n";
    }
}












echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>Total de Linhas Carregada = $ll</font></b></p>";
?>