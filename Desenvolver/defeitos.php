<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
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
		</head>
		</html>
		<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
		<?php
	   exit;
}


$tipo=$_POST['tipo'];
if ($tipo == '') {
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Selecione uma Operação</font></b></p>";
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
if ($tipo=='I') {
    $cod=$_POST['cod'];
    if ($cod=='') {
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Código inválido</font></b></p>";
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
    $rep=$_POST['rep'];
    if ($rep=='') {
        $rep="NÃO INFORMADO";
    }
    $loc=$_POST['loc'];
    if ($loc=='') {
        $loc="PRATELEIRA";
    }
    $sql="select ccodproduto from aprodutos where ccodproduto = $cod ";
    $exsql=pg_query($con,$sql);
    $rsexsql=pg_fetch_array($exsql);
    $cod=$rsexsql['ccodproduto'];
    if ($cod=='') {
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Código inválido</font></b></p>";
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
    $sql="select codigo from adrianodefeitos where codigo =$cod";
    $exsql=pg_query($con,$sql);
    $rsexsql=pg_fetch_array($exsql);
    $produto=$rsexsql['codigo'];
    if ($produto=='') {
        $sql="insert into adrianodefeitos(id, codigo, representante, quantidade,local) values(nextval('defeitos'),$cod,'$rep',1,'$loc')";
        $exsql=pg_query($con,$sql);
        echo "<p style=background:#00FF00; align=center <br/><b><font size=5 color=#FFFFFF>Cadastrado com Sucesso $dia , $time  </font></b></p>";
        exit;
    } else{    
        $sql="update adrianodefeitos set quantidade = (quantidade+1) where codigo=$cod ";
        $exsql=pg_query($con,$sql);
        echo "<p style=background:#00FF00; align=center <br/><b><font size=5 color=#FFFFFF>Cadastrado com Sucesso $dia , $time  </font></b></p>";
        exit;
    }
}
if ($tipo=='L') {
    $filtro=$_POST['filtro'];
    if ($filtro ==1 ) {
        $sql="select id,codigo,quantidade,representante,cmarproduto,cdesmarca,cdepproduto,cdesdepartamento,clinproduto,cdeslinha   from adrianodefeitos iner  join aprodutos on codigo=ccodproduto  join tmarca on cmarproduto=ccodmarca
        join tdepartamento on cdepproduto=ccoddepartamento join tlinha on clinproduto=ccodlinha where representante <> 'NÃO INFORMADO' order by representante,codigo";
    }
    if ($filtro ==2 ) {
        $sql="select id,codigo,quantidade,representante,cmarproduto,cdesmarca,cdepproduto,cdesdepartamento,clinproduto,cdeslinha   from adrianodefeitos iner  join aprodutos on codigo=ccodproduto  join tmarca on cmarproduto=ccodmarca
        join tdepartamento on cdepproduto=ccoddepartamento join tlinha on clinproduto=ccodlinha  order by cdesmarca,codigo";
    }
    if ($filtro ==3 ) {
        $sql="select id,codigo,quantidade,representante,cmarproduto,cdesmarca,cdepproduto,cdesdepartamento,clinproduto,cdeslinha   from adrianodefeitos iner  join aprodutos on codigo=ccodproduto  join tmarca on cmarproduto=ccodmarca
        join tdepartamento on cdepproduto=ccoddepartamento join tlinha on clinproduto=ccodlinha order by cdeslinha,codigo";
    }
    if ($filtro ==4 ) {
        $sql="select id,codigo,quantidade,representante,cmarproduto,cdesmarca,cdepproduto,cdesdepartamento,clinproduto,cdeslinha   from adrianodefeitos iner  join aprodutos on codigo=ccodproduto  join tmarca on cmarproduto=ccodmarca
        join tdepartamento on cdepproduto=ccoddepartamento join tlinha on clinproduto=ccodlinha  order by cdesdepartamento,codigo";
    }
    set_time_limit(120);
    $exsql=pg_query($con,$sql);
    echo "<table border='2' width='100%' bgcolor=#E3F6CE >";
    echo "<tr><td>Id</td>"."<td>Código</td>"."<td>Quantidade</td>"."<td>Representante</td>"."<td>Marca</td>"."<td>Departamento</td>"."<td>Linha</td>"."</tr>";
    while($row = pg_fetch_assoc($exsql)){
        echo "<td>".$row['id']."</td>\n";
        echo "<td>".$row['codigo']."</td>\n";
        echo "<td>".$row['quantidade']."</td>\n";
        echo "<td>".$row['representante']."</td>\n";
        echo "<td>".$row['cdesmarca']."</td>\n";
        echo "<td>".$row['cdesdepartamento']."</td>\n";
        echo "<td>".$row['cdeslinha']."</td>\n";
        echo "</tr>\n";
    }
}
        
    



exit;

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css"></link>
<center><img src="img/fundo1.jpg"alt="1" heigth ="500px" width="500px" ></center>
<center><img src="img/inclusao.png"alt="1" heigth ="500px" width="500px" ></center>
</head>
</html>
