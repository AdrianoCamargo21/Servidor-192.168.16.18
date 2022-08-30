<!DOCTYPE html>
<html>
<head>
<title>Copia Preço de Compra</title>
<center><img src="img/fundo1.jpg"alt="10" heigth ="100px" width="400px" ></center>
</head>
</html>
<?php
set_time_limit(0);
date_default_timezone_set('America/Sao_Paulo');
$hora=date('H:i:s');
$hora_parte=explode(":",$hora);
$hora_h=$hora_parte[0];
$minuto=$hora_parte[1];
$segundo=$hora_parte[2];
?>
<HTML>
<HEAD>
<center>
  <script tpye=text/javascript>
var segundo=<?php echo $segundo;?>;
var minuto=<?php echo $minuto;?>;
var hora=<?php echo $hora_h;?>;
 function tempo(){
	  if (segundo<59){
		   segundo=segundo+1
		    if (segundo==59){
			     minuto=minuto+1;
			      segundo=0;
			       if (hora==24){
				        hora=hora+1;
				         minuto=0;
				          segundo=0;
				           }
		             }
            }
   document.getElementById("relogio").innerHTML=(hora+":"+minuto+":"+segundo);
    }
</script>
</center>
</HEAD>
<meta name="GENERATOR" content="MAX's HTML Beauty++ ME">
<body onload="setInterval('tempo();',1000)">
<div name="relogio" id="relogio"></div>
<BODY>
</BODY>
</HTML>
<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
date_default_timezone_set('America/Sao_Paulo');
$time=date('H:i:s');
$dia= date('d-m-Y');
if(!@($conc=pg_connect ("host=192.168.10.30 dbname=troll port=5430 user=postgres password=ky$14gr@"))){
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
} else {
    echo "<p style=background:#D3D3D3; align=center <br/><b><font size=5 color=#FF0000>Servidor de Caçador Conectado</font></b></p>";
}
if(!@($conl=pg_connect ("host=192.168.11.2 dbname=Troll port=5431 user=postgres password=ky$14gr@"))){
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
} else {
    echo "<p style=background:#D3D3D3; align=center <br/><b><font size=5 color=#FF0000>Servidor de Lages Conectado</font></b></p>";
}
if(!@($conj=pg_connect ("host=192.168.10.153 dbname=troll port=5434 user=postgres password=ky$14gr@"))){
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
} else {
    echo "<p style=background:#D3D3D3; align=center <br/><b><font size=5 color=#FF0000>Servidor de Joinville Conectado</font></b></p>";
}
if(!@($conv=pg_connect ("host=192.168.9.10 dbname=troll port=5433 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Videira Data:$dia  Hora:$time </font></b></p>";
    echo "<p style=background:#000000; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista Favor avisar o Adriano</font></b></p>";
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <center><img src="img/error.jpg"alt="500" heigth ="500px" width="100px" ></center>	</head>
	</html>

	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit;
} else {
    echo "<p style=background:#D3D3D3; align=center <br/><b><font size=5 color=#FF0000>Servidor de Videira Conectado</font></b></p>";
}
$sql="select ccodproduto from aprodutos where cpcoproduto < 1  order by ccodproduto desc";
$exsql=pg_query($conc,$sql);
$rsql=pg_fetch_array($exsql);
if ($rsql == '') {
    echo "<p style=background:#F5F5DC; align=center <br/><b><font size=30 color=#00FF00>Nada Para Copiar em: '$dia' , '$time'  </font></b></p>";
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <center><img src=img/ok.png alt="400" heigth ="400px" width="300px" ></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit;
} else {
    $exsql=pg_query($conc,$sql);
    $total=0;
    $nulos=0;
    while($dados=pg_fetch_array($exsql)){
        $cod=$dados['ccodproduto'];
        $com="select cpcoproduto from aprodutos  where ccodproduto = '$cod'";
        $excom=pg_query($conv,$com);
        $rscom=pg_fetch_array($excom);
        $compra=$rscom['cpcoproduto'];
        if ( $compra > 0) {
            $total ++;
            $com="select logar('COPIA',1,0); update aprodutos set cpcoproduto = $compra  where ccodproduto = '$cod' ";
            $excom=pg_query($conc,$com);
        } else {            
            $com="select cpcoproduto from aprodutos  where ccodproduto = '$cod'";
            $excom=pg_query($conl,$com);
            $rscom=pg_fetch_array($excom);
            $compra=$rscom['cpcoproduto'];
            if ( $compra > 0) {
                $total ++;
                $com="select logar('COPIA',1,0); update aprodutos set cpcoproduto = $compra  where ccodproduto = '$cod' ";
                $excom=pg_query($conc,$com);
            } else {
                $com="select cpcoproduto from aprodutos  where ccodproduto = '$cod'";
                $excom=pg_query($conj,$com);
                $rscom=pg_fetch_array($excom);
                $compra=$rscom['cpcoproduto'];
                if ($compra > 0) {
                    $total ++;
                    $com="select logar('COPIA',1,0); update aprodutos set cpcoproduto = $compra  where ccodproduto = '$cod' ";
                    $excom=pg_query($conc,$com);
                } else {
                    $nulos ++;
                   
                }               
            }
        }
    }
    echo "<p style=background:#F5F5DC; align=center <br/><b><font size=30 color=#00FF00>Total De Produtos Atualizados:$total </font></b></p>";
    echo "<p style=background:#F5F5DC; align=center <br/><b><font size=30 color=#00FF00>Total De Produtos com Venda=Custo:$nulos </font></b></p>";
    
}
?>
<!DOCTYPE html>
<html>
<head>
<center><img src=img/ok.png alt="400" heigth ="400px" width="300px" ></center>
</head>
</html>














