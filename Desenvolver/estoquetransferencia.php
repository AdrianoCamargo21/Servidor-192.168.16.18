<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
date_default_timezone_set('America/Sao_Paulo');
$time=date('H:i:s');
$dia= date('d-m-Y');
set_time_limit(900000000000000);
$volta="<script>window.location='http://192.168.13.2/Desenvolver/estoquetransfere.html'</script>";
if(!@($conc=pg_connect ("host=192.168.10.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@"))){
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
if(!@($conv=pg_connect ("host=192.168.10.190 dbname=troll_videira port=5430 user=postgres password=ky$14gr@"))){
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
if(!@($conl=pg_connect ("host=192.168.10.190 dbname=troll_lages port=5430 user=postgres password=ky$14gr@"))){
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
if(!@($conj=pg_connect ("host=192.168.10.190 dbname=troll_joinville port=5430 user=postgres password=ky$14gr@"))){
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
$dataf=$_POST['data'];
if ($dataf == '') {
    $base=$_POST['base'];
    if ($base <> 'F') {
        echo "<script>alert('Data Inválida');</script>";
        echo "$volta";
    }
}
$tipo=$_POST['tipo'];
if ($tipo == 'S') {
    $com="select ccodproduto,(sum(centhistorico-csaihisotorico)) as qtd from aprodutos left join ahistorico on cprohistorico = ccodproduto where 
    cemphistorico in (9,10) and clinproduto <> 75 and  clinproduto <> 103    GROUP BY ccodproduto order by ccodproduto ";
    $exsql=pg_query($conc,$com);
    while ($row = pg_fetch_assoc($exsql)) {
        $cod=$row['ccodproduto'];
        $qtd=$row['qtd'];
        if ($qtd > 0) {
            echo $cod.';'.$qtd.'<br>';
        }
    }
}
if ($tipo == 'N') {
    $com="select ccodproduto,(sum(centhistorico-csaihisotorico)) as qtd from aprodutos left join ahistorico on cprohistorico = ccodproduto where
    cemphistorico in (9,10) and clinproduto <> 75 and  clinproduto <> 103    GROUP BY ccodproduto order by ccodproduto ";
    $exsql=pg_query($conc,$com);
    while ($row = pg_fetch_assoc($exsql)) {
        $cod=$row['ccodproduto'];
        $qtd=$row['qtd'];
        if ($qtd < 0) {
            echo $cod.';'.$qtd.'<br>';
        }
    }
}
if ($tipo == 'L') {
    if(!@($conll=pg_connect ("host=192.168.11.2 dbname=Troll port=5431 user=postgres password=ky$14gr@"))){
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
    $com="select ccodproduto from aprodutos where clinproduto <> 75 and  clinproduto <> 103 order by ccodproduto desc "; 
    $excom=pg_query($conl,$com);
    while ($row = pg_fetch_assoc($excom)) {
        $cod=$row['ccodproduto'];
        $query="select (sum(centhistorico-csaihisotorico)) as qtd from ahistorico where cprohistorico=$cod ";
        $exquery=pg_query($conl,$query);
        $rsquery=pg_fetch_array($exquery);
        $qtd=$rsquery['qtd'];
        if ($qtd == '') {
            $qtd= '0.00';
        }
        $query="select (sum(centhistorico-csaihisotorico))as qtd from ahistorico where cemphistorico in (1,2) and cprohistorico=$cod ";
        $exquery=pg_query($conl,$query);
        $rsquery=pg_fetch_array($exquery);
        $qtd1=$rsquery['qtd'];
        if ($qtd1 == '') {
            $qtd1= '0.00';
        }
        $query="select (sum(centhistorico-csaihisotorico))as qtd from ahistorico where cemphistorico in (3,4) and cprohistorico=$cod ";
        $exquery=pg_query($conl,$query);
        $rsquery=pg_fetch_array($exquery);
        $qtd3=$rsquery['qtd'];
        if ($qtd3 == '') {
            $qtd3= '0.00';
        }
        $sql="select logar('SILVIO',4,0)";
        $exsql=pg_query($conll,$sql);
        $sql="update aprodutos set cqtdproduto=$qtd ,cqtde1produto=$qtd1,cqtde3produto=$qtd3 where ccodproduto = $cod";
        $exsql=pg_query($conll,$sql);      
       
    }  
}

if ($tipo == 'J') {
    if(!@($conjl=pg_connect ("host=192.168.10.153 dbname=troll port=5434 user=postgres password=ky$14gr@"))){
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
    $com="select ccodproduto from aprodutos where clinproduto <> 75 and  clinproduto <> 103 order by ccodproduto desc "; 
    $excom=pg_query($conj,$com);
    while ($row = pg_fetch_assoc($excom)) {
        $cod=$row['ccodproduto'];
        $query="select (sum(centhistorico-csaihisotorico)) as qtd from ahistorico where cprohistorico=$cod ";
        $exquery=pg_query($conj,$query);
        $rsquery=pg_fetch_array($exquery);
        $qtd=$rsquery['qtd'];
        if ($qtd == '') {
            $qtd= '0.00';
        }
        $query="select (sum(centhistorico-csaihisotorico))as qtd from ahistorico where cemphistorico in (1,2) and cprohistorico=$cod ";
        $exquery=pg_query($conj,$query);
        $rsquery=pg_fetch_array($exquery);
        $qtd1=$rsquery['qtd'];
        if ($qtd1 == '') {
            $qtd1= '0.00';
        }
        $query="select (sum(centhistorico-csaihisotorico))as qtd from ahistorico where cemphistorico in (3,4) and cprohistorico=$cod ";
        $exquery=pg_query($conj,$query);
        $rsquery=pg_fetch_array($exquery);
        $qtd3=$rsquery['qtd'];
        if ($qtd3 == '') {
            $qtd3= '0.00';
        }
        $sql="select logar('SILVIO',9,0)";
        $exsql=pg_query($conjl,$sql);
        $sql="update aprodutos set cqtdproduto=$qtd ,cqtde1produto=$qtd1,cqtde3produto=$qtd3 where ccodproduto = $cod";
        $exsql=pg_query($conjl,$sql);      
       
    }  
}

if ($tipo == 'V') {
    if(!@($convl=pg_connect ("host=192.168.9.10 dbname=troll port=5433 user=postgres password=ky$14gr@"))){
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
    $com="select ccodproduto from aprodutos where clinproduto <> 75 and  clinproduto <> 103 order by ccodproduto desc "; 
    $excom=pg_query($conv,$com);
    while ($row = pg_fetch_assoc($excom)) {
        $cod=$row['ccodproduto'];
        $query="select (sum(centhistorico-csaihisotorico)) as qtd from ahistorico where cprohistorico=$cod ";
        $exquery=pg_query($conv,$query);
        $rsquery=pg_fetch_array($exquery);
        $qtd=$rsquery['qtd'];
        if ($qtd == '') {
            $qtd= '0.00';
        }
        $query="select (sum(centhistorico-csaihisotorico))as qtd from ahistorico where cemphistorico in (13,14) and cprohistorico=$cod ";
        $exquery=pg_query($conv,$query);
        $rsquery=pg_fetch_array($exquery);
        $qtd13=$rsquery['qtd'];
        if ($qtd13 == '') {
            $qtd13= '0.00';
        }
        $query="select (sum(centhistorico-csaihisotorico))as qtd from ahistorico where cemphistorico in (15,16) and cprohistorico=$cod ";
        $exquery=pg_query($conv,$query);
        $rsquery=pg_fetch_array($exquery);
        $qtd15=$rsquery['qtd'];
        if ($qtd15 == '') {
            $qtd15= '0.00';
        }
        $query="select (sum(centhistorico-csaihisotorico))as qtd from ahistorico where cemphistorico in (17,18) and cprohistorico=$cod ";
        $exquery=pg_query($conv,$query);
        $rsquery=pg_fetch_array($exquery);
        $qtd17=$rsquery['qtd'];
        if ($qtd17 == '') {
            $qtd17= '0.00';
        }
        $sql="select logar('SILVIO',2,0)";
        $exsql=pg_query($convl,$sql);
        $sql="update aprodutos set cqtdproduto=$qtd ,cqtde13produto=$qtd13,cqtde15produto=$qtd15,cqtde17produto=$qtd17 where ccodproduto = $cod";
        $exsql=pg_query($convl,$sql);      
       
    }  
}

if ($tipo == 'C') {    
    if(!@($concl=pg_connect ("host=192.168.10.30 dbname=troll port=5430 user=postgres password=ky$14gr@"))){
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
    $com="select ccodproduto from aprodutos where clinproduto <> 75 and  clinproduto <> 103 order by ccodproduto desc "; 
    $excom=pg_query($conc,$com);
    while ($row = pg_fetch_assoc($excom)) {
        $cod=$row['ccodproduto'];
        $query="select (sum(centhistorico-csaihisotorico)) as qtd from ahistorico where cprohistorico=$cod and cemihistorico <= '2019-12-31' ";
        $exquery=pg_query($conc,$query);
        $rsquery=pg_fetch_array($exquery);
        $qtd=$rsquery['qtd'];
        if ($qtd == '') {
            $qtd= '0.00';
        }
        $query="select (sum(centhistorico-csaihisotorico))as qtd from ahistorico where cemphistorico in (1,2) and cprohistorico=$cod and cemihistorico <= '2019-12-31'";
        $exquery=pg_query($conc,$query);
        $rsquery=pg_fetch_array($exquery);
        $qtd1=$rsquery['qtd'];
        if ($qtd1 == '') {
            $qtd1= '0.00';
        }
        $query="select (sum(centhistorico-csaihisotorico))as qtd from ahistorico where cemphistorico in (3,4) and cprohistorico=$cod and cemihistorico <= '2019-12-31'";
        $exquery=pg_query($conc,$query);
        $rsquery=pg_fetch_array($exquery);
        $qtd3=$rsquery['qtd'];
        if ($qtd3 == '') {
            $qtd3= '0.00';
        }
        $query="select (sum(centhistorico-csaihisotorico))as qtd from ahistorico where cemphistorico in (5,6) and cprohistorico=$cod and cemihistorico <= '2019-12-31' ";
        $exquery=pg_query($conc,$query);
        $rsquery=pg_fetch_array($exquery);
        $qtd5=$rsquery['qtd'];
        if ($qtd5 == '') {
            $qtd5= '0.00';
        }
        $query="select (sum(centhistorico-csaihisotorico))as qtd from ahistorico where cemphistorico in (7,8) and cprohistorico=$cod and cemihistorico <= '2019-12-31' ";
        $exquery=pg_query($conc,$query);
        $rsquery=pg_fetch_array($exquery);
        $qtd7=$rsquery['qtd'];
        if ($qtd7 == '') {
            $qtd7= '0.00';
        }
        $query="select (sum(centhistorico-csaihisotorico))as qtd from ahistorico where cemphistorico in (9,10) and cprohistorico=$cod and cemihistorico <= '2019-12-31' ";
        $exquery=pg_query($conc,$query);
        $rsquery=pg_fetch_array($exquery);
        $qtd9=$rsquery['qtd'];
        if ($qtd9 == '') {
            $qtd9= '0.00';
        }
        $query="select (sum(centhistorico-csaihisotorico))as qtd from ahistorico where cemphistorico in (11,12) and cprohistorico=$cod and cemihistorico <= '2019-12-31' ";
        $exquery=pg_query($conc,$query);
        $rsquery=pg_fetch_array($exquery);
        $qtd11=$rsquery['qtd'];
        if ($qtd11 == '') {
            $qtd11= '0.00';
        }       
        $sql="select logar('SILVIO',9,0)";
        $exsql=pg_query($concl,$sql);
        $sql="update aprodutos set cqtdproduto=$qtd ,cqtde1produto=$qtd1,cqtde3produto=$qtd3,cqtde5produto=$qtd5,cqtde7produto=$qtd7,cqtde9produto=$qtd9
        ,cqtde11produto=$qtd11 where ccodproduto = $cod";
        $exsql=pg_query($concl,$sql);       
    }  
}
?>